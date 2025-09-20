<?php

require_once '../app/Models/Photo.php';

class HomeController{
    public function index(){
        $photoModel = new Photo();
        $photo = $photoModel->getPhotos();

        include '../app/Views/Home.php';
    }
}   