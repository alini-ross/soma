<?php

// parametros de recebimento do ajax do CKeditor
echo '<script>'.print_r($_GET).print_r($_POST).'</script>';

$CKEditor = $_GET['CKEditor'];
$funcNum = $_GET['CKEditorFuncNum'];

// inicio do processo de upload

$allowed_extension = array(
  "png","jpg","jpeg"
);

    // pega a extensao do arquivo carregado
$file_extension = pathinfo($_FILES["upload"]["name"], PATHINFO_EXTENSION);

if(in_array(strtolower($file_extension),$allowed_extension)){
  $arraynome = array_reverse(explode('.',basename($_FILES["upload"]["name"])));
  $uploadfile = $arraynome[1].date("d-m-y").'.'.$arraynome[0];
  if(move_uploaded_file($_FILES['upload']['tmp_name'],  $_SERVER['DOCUMENT_ROOT'].'/uploads/'.$uploadfile)){
          // realiza o upload
    if(isset($_SERVER['HTTPS'])){
     $protocol = ($_SERVER['HTTPS'] && $_SERVER['HTTPS'] != "off") ? "https" : "http";
   }
   else{
     $protocol = 'http';
   }
   $url = $protocol."://".$_SERVER['SERVER_NAME']."/uploads/".$uploadfile;

          // retorna pro CKeditor a resposta com a URL do arquivo carregado
   echo '<script>window.parent.CKEDITOR.tools.callFunction('.$funcNum.', "'.$url.'", "'.$message.'")</script>';
 }

}
exit;