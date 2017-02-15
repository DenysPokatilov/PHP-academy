<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 15.02.2017
 * Time: 2:34
 * <p>6. Создать страницу, на которой можно загрузить несколько фотографий в галерею.
 * Все загруженные фото должны помещаться в папку gallery и выводиться на странице в виде таблицы.</p>

 */
    //определение типа загружаемого файла
    define('ALLOWS_TYPE',[
        'image/png'=>'png',
        'image/jpeg'=>'jpg'
    ]);
    // функция записи файла в тхт (сериализация)
    function save($data){
      return file_put_contents('file.txt',serialize($data));
    }
    //получения файла с сериализируемого файла
    function get_file(){
        return unserialize(file_get_contents('file.txt,'));
    }
    //если файл отсутствует unserialize с функции get_file();
    if (file_exists('name_image.txt')){
        $result=get_name();
    }

    $uploadfile=false;
    if (isset($_POST['submit'])) {
        $form_was_send = true;
        if (is_dir('gallery') == false) {
            if (mkdir('gallery') == false) {
                throw new Error('Didnt create folder;');
            };
        }
        foreach ($_FILES["photo"]["error"] as $key => $error) {
            if ($error == UPLOAD_ERR_OK) {
                $allow_type = ALLOWS_TYPE[$_FILES['photo']['type'][$key]];
                if (!isset($allow_type)) {
                    throw new Error('PLEASE IMAGE;');
                }
                $tmp_name = $_FILES["photo"]["tmp_name"][$key];
                $name = $_FILES["photo"]["name"][$key] . time();
                move_uploaded_file($tmp_name, 'gallery' . DIRECTORY_SEPARATOR . $name);
            } else {
                throw new Error('PLEASE select file;');
            }
            $result[] = $name;
        }
        save_name($result);


    }
//    $uploaddir = '/gallery/';
//    $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
//    echo '<pre>';
//    if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
//        echo "Файл корректен и был успешно загружен.\n";
//    } else {
//        echo "Возможная атака с помощью файловой загрузки!\n";
//    }
//
//    echo 'Некоторая отладочная информация:';
//    print_r($_FILES);
//foreach ($_FILES as $FILE){
//
//}
//    print "</pre>";
//
//
//
//
