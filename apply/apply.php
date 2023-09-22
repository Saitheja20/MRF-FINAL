
<?php


if(!empty($_POST)) {


mail("admin@mrftyrefranchises.com", "data",
"NAME :".$_POST['name']."\r\n".
"EMAIL :".$_POST['email']."\r\n".
"PHONE NO :".$_POST['phone']."\r\n".
"INVESTMENT :".$_POST['investment']."\r\n".
"ADDRESS :".$_POST['message']."\r\n");
}

header('Location: thanks.html');
?>

