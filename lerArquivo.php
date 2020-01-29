
<?php 

//$_POST;

echo'<pre>';
var_dump($_FILES);

$curriculo = $_FILES['curriculo'];

echo $curriculo['type'];

if($curriculo['type'] != 'application/pdf'){
   // header('location: upload.php');
   exit('Arquivo não e PDF');
}

//primeiro atributo arquivo temporario
//segundo atributo local que queremos salvar
$resultado = move_uploaded_file($curriculo['tmp_name'], 'imagens/cv_' . rand(2,9999) .'.pdf');

if($resultado === true){
    echo 'Arquivo carregado com sucesso';
}else{
    echo'Erro ao carregar arquivo';
}


?>