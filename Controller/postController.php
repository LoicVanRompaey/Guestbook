<?php

class postController{

    public function render(){
        $loaderPosts = new postLoader();
        $allPosts = $loaderPosts->LoadMessages();

        require 'View/home.php';
    }
}