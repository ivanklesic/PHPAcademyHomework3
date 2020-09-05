<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
    <input type="file" name="myImage" accept="image/png,image/jpeg" /><br>
    <button>Submit</button>
</form>

<?php

if(!is_dir('upload')){
    mkdir('upload');
}
if(isset($_FILES['myImage'])){
    $fileInfo = finfo_open(FILEINFO_MIME_TYPE);
    $fileMimeType = finfo_file($fileInfo, $_FILES['myImage']['tmp_name']);
    if (($fileMimeType == 'image/png' || 'image/jpeg') && $_FILES['myImage']['size'] < 1024 * 1024){
        move_uploaded_file($_FILES['myImage']['tmp_name'], 'upload' . DIRECTORY_SEPARATOR . $_FILES['myImage']['name']);
    }
    finfo_close($fileInfo);
}
