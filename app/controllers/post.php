<?php

namespace Controller;

class Post {
    public function get($id) {
        echo \View\Loader::make()->render("templates/post.twig", array(
            "post" => \Model\Post::find($id),
        ));
    }
}
