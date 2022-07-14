<?php
require_once "db_connect.php";
function file_upload($picture) {
    // var_dump_pretty($picture);
   $result = new stdClass(); //this object will carry the status from file upload
   $result->fileName = 'product.png';
   $result->error = 1;//it could also be a boolean true/false
   //collect data from object $picture
   $fileName = $picture["name"];
   $fileType = $picture["type"];
   $fileTmpName = $picture["tmp_name"];
   $fileError = $picture["error"];
   $fileSize = $picture["size"];
   $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));    
   $filesAllowed = ["png", "jpg", "jpeg"];
   if($fileError == 4){
    $result->ErrorMessage = "No picture was chosen";
    return $result;
   }else{
    if(in_array($fileExtension, $filesAllowed)){
        if($fileError == 0){
            if($fileSize < 500000){
               $fileNewName = uniqid('') . ".".$fileExtension;
               $destination = "../pictures/$fileNewName";
               if(move_uploaded_file($fileTmpName, $destination)){
                $result->error = 0;
                $result->fileName = $fileNewName;
                return $result;
               } else{
                $result->ErrorMessage = "There was an error";
                return $result;
               }

            }else{
                $result->ErrorMessage = "Exceeded file size";
                return $result; 
            }
        }else{
            $result->ErrorMessage = "There was a problem uploading the file";
            return $result;
        }
    }else{
        $result->ErrorMessage = "File type not allowed";
        return $result;
    }
   }
}