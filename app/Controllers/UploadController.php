<?php

require_once '../app/Models/Photo.php';

class UploadController {

    public function upload() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['photo'])) {
            $targetDir = __DIR__ . '/../../public/assets/images/';
            $fileName = basename($_FILES['photo']['name']);
            $targetFile = $targetDir . $fileName;

            $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
            $allowedTypes = ['jpg', 'jpeg', 'png', 'gif'];

            if (in_array($fileType, $allowedTypes)) {
                if (move_uploaded_file($_FILES['photo']['tmp_name'], $targetFile)) {
                    $photoModel = new Photo();
                    $photoModel->addPhoto($fileName);

                    header("Location: index.php?success=true");
                    exit;
                }
            }

            header("Location: index.php?error=true");
            exit;
        }
    }
}
