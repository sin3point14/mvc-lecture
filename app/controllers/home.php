<?php

namespace Controller;

class Home {
    public function get() {
        echo \View\Loader::make()->render("templates/home.twig", array(
            "posts" => \Model\Post::get_all(),
        ));
    }

    public function post() {
        $caption = $_POST["caption"];
        \Model\Post::create($caption);
        echo \View\Loader::make()->render("templates/home.twig", array(
            "posts" => \Model\Post::get_all(),
            "posted" => true,
        ));
    }
}
