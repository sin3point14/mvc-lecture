<?php

namespace Model;

class Post {
    public static function create($caption) {
        $db = \DB::get_instance();
        $stmt = $db->prepare("INSERT INTO posts (caption) VALUES (?)");
        $stmt->execute([$caption]);
    }

    public static function get_all() {
        $db = \DB::get_instance();
        $stmt = $db->prepare("SELECT * FROM posts");
        $stmt->execute();
        $rows = $stmt->fetchAll();
        return $rows;
    }

    public static function find($id) {
        $db = \DB::get_instance();
        $stmt = $db->prepare("SELECT * FROM posts WHERE id = ?");
        $stmt->execute([$id]);
        $row = $stmt->fetch();
        return $row;
    }
}
