<?php

class Kino
{
    public $id;
    public $title;
    public $genre;
    public $year;
    public $description;
    public $img;
    public $user_id;
    public $rating_score;

    public function query($where, $params)
    {
        $database = new Database(config('database'));
        return $database->query(
            "select
                k.id, k.title, k.genre, k.year, k.description, k.img
                , ifnull(sum(r.rating)/count(r.id), 0) as rating_score
            from
            kinos k
            left join ratings r on r.kino_id = k.id
            where $where
            group by k.id, k.title, k.genre, k.year, k.description, k.img
        ", self::class, $params);
    }

    public static function get($id)
    {
        return (new self)->query('k.id = :id', ['id' => $id])->fetch();
    }

    public static function all($filter = '')
    {
        return (new self)->query('title like :filter', ['filter' => "%$filter%"])->fetchAll();
    }

    public static function mine($user_id)
    {
        return (new self)->query('k.user_id = :user_id', ['user_id' => $user_id])->fetchAll();
    }
}