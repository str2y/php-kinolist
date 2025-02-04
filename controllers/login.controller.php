<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['login'])) {

        $email = $_POST['email'];
        $password = $_POST['password'];

        $val = Validation::validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ], $_POST);

        if ($val->didntPass('login')) {
            header('location: /login');
            exit();
        }

        $user = $database->query(
            "select * from users
        where email = :email",
            User::class,
            compact('email')
        )
            ->fetch();

        if ($user) {

            if (!password_verify($_POST['password'], $user->password)) {
                flash()->push('vals_login', ['Username or password is incorrect']);
                header('location: /login');
                exit();
            }

            $_SESSION['auth'] = $user;
            flash()->push('msg', 'Welcome, ' . $user->name . '!');
            header('location: /');
            exit();
        }
    }
}

view('login');
