<?php

require_once '../Models/Photo.php';

class HomeController{
    public function index(){
        $photoModel = new Photo();
        $photo = $photoModel->getPhotos();

        include '../Views/Home.php';
    }
}