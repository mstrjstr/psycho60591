<?php

require('dbconnect.php');
require('auth.php');
require('components/header.php');

        if ($_POST['date']){

            if ($file = fopen($_FILES['filename']['tmp_name'], 'r+')){
                //получение расширения
                $ext = explode('.', $_FILES["filename"]["name"]);
                $ext = $ext[count($ext) - 1];
                $filename = 'file' . rand(100000, 999999) . '.' . $ext;

                $resource = Container::getFileUploader()->store($file, $filename);
                $picture_url = $resource['ObjectURL'];
            }
            else {
                $picture_url = "assets/404.jpg";
            }
            try {
                $sql = 'INSERT INTO slot(id_spec, day, time_start, time_end, img_url) VALUES(:id_spec, :date, :time_start, :time_end, :picture_url)';
                $stmt = $conn->prepare($sql);
                $stmt->bindValue(':id_spec', $_SESSION['id_auth_user']);
                $stmt->bindValue(':date', $_POST['date']);
                $stmt->bindValue(':time_start', $_POST['time_start']);
                $stmt->bindValue(':time_end', $_POST['time_end']);
                $stmt->bindValue(':picture_url', $picture_url);
                $stmt->execute();



            } catch (PDOexception $error) {
                $_SESSION['msg'] = "Ошибка создания " . $error->getMessage();
            }
        }
require('components/slotComponent.php');

