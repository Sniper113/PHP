<?php

session_start();
ob_start();

require 'data/user.php';
//funtion
require 'lib/data.php';
require 'lib/url.php';
require 'data/user.php';
require 'lib/users.php';
require 'lib/templates.php';
?>

<?php
$page = !empty($_GET['page'])?$_GET['page']:'home';

$path = "pages/{$page}.php";
#echo $path;

////kiem tra login
if (!is_login() && $page != 'login')
    redirect("?page=login");
//redirect('?page=home');


if (file_exists($path)){
    require $path;
}else{
    require 'inc/404.php';
}

?>
