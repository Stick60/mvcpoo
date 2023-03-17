<?php
$url = $_SERVER['REQUEST_URI'];
// var_dump($url);
// var_dump(parse_url($url));
$URLactive = parse_url($url);
$root = explode("/", $URLactive["path"]);
// var_dump($root);
include_once("apps/" . $root[2] . "/controller.php");
$controller_name = ucfirst($root[2]) . 'Controller';
$controller = new $controller_name();
$output = $controller->render();
include_once("layout.php");

?>