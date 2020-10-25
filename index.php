<?php
//делаем понятный URL
if ($_SERVER['REQUEST_URI'] == '/') $page = 'home';
else{
  $page = substr($_SERVER['REQUEST_URI'], 1);
  //Блокировка лишних символов
  if (!preg_match('/^[A-z0-9]{3,15}$/', $page)) exit('error url');
}

session_start();

include 'htmlMarking.php';

if (file_exists('all/'.$page.'.php')) include 'all/'.$page.'.php';
elseif ($_SESSION['login'] == 1 && file_exists('admin/'.$page.'.php')) include 'admin/'.$page.'.php';
elseif ($_SESSION['login'] != 1 && file_exists('user/'.$page.'.php')) include 'user/'.$page.'.php';
else exit( 'Error 404');

htmlMarking::topDoctype($page);



