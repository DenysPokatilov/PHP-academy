<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 15.02.2017
 * Time: 3:24
 */

define('ALLOWS_TYPE',[
    'image/png'=>'png',
    'image/jpeg'=>'jpg'
]);
function save_name($data){
    return file_put_contents('name_image.txt',serialize($data));
}
function get_name(){
    return unserialize(file_get_contents('name_image.txt'));
}
if (file_exists('name_image.txt')){
    $result=get_name();
}
$form_was_send=false;
if (isset($_POST['submit'])) {
    $form_was_send = true;
    if (is_dir('gallery') == false) {
        if (mkdir('gallery') == false) {
            throw new Error('Didnt create folder;');
        };
    }
//    echo "<pre>";
//    var_dump($_FILES);
//    echo "</pre>";
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
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <form action="6.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="photo">Photo:</label>
            <input type="file" id="photo" name="photo[]"  multiple>
            <p class="help-block">Please download image.</p>
        </div>
        <button type="submit" name="submit" class="btn btn-default">Submit</button>
    </form>
    <div><?=$form_was_send ? 'yes': 'no'; ?></div>
    <?php if(file_exists('name_image.txt')): ?>
        <table class="table table-bordered">
            <?php for($i=0;$i<count($result);$i++): ?>
                <tr>
                    <td>
                        <img src="<?='gallery'.DIRECTORY_SEPARATOR.$result[$i];?>">
                    </td>
                </tr>
            <?php endfor; ?>
        </table>
    <?php endif; ?>
</div>
</body>
</html>