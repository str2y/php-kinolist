<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $val = Validation::validate([
        'name' => ['required'],
        'email' => ['required', 'email', 'confirmed', 'unique:users'],
        'password'=>['required', 'min:8', 'max:32', 'strong']
    ], $_POST);

    if($val->didntPass('register')){
        header('location: /login');
        exit();
    }

    $result = $database->query(
        "insert into users ( name, email, password ) values ( :name, :email, :password )",
        null,
        [
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'password' => password_hash($_POST['password'], PASSWORD_BCRYPT)
        ]
    );
    flash()->push('msg', 'Successfully registered!');
    header('location: /login');
    exit();
}
header('location: /login');
exit();
