<?php

class Photo{
    private $photoFile = '..public/assets/images/photo.json';

    public function getPhotos(){
        if (file_exists($this->photoFile)){
            $data = file_get_contents($this->photoFile);
            return json_decode($data, true) ?? [];
        }

        return [];
    }

    public function addPhoto($photoName){
        $photos = $this->getPhotos();
        $photos[] = $photoName;
        file_put_contents($this->photoFile, json_encode($photos));
    }
}