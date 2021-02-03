<?php
require 'lib/templates.php';
require 'data/user.php';
?>

<?php
$page = !empty($_GET['page'])?$_GET['page']:'home';

$path = "pages/{$page}.php";
#echo $path;

if (file_exists($path)){
    require $path;

}else{
    require 'inc/404.php';
}
//test
?>
