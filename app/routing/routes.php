<?php
$router= new AltoRouter;
$router->map('GET','/about','','about_us');
$match=$router->match();
var_dump($match);
if($match){
    echo 'About_us-page';

}else{
    header($_SERVER['SERVER_PROTOCOL'].'404 not found');
    echo "page not found";
}