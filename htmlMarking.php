<?php

class htmlMarking
{
  public static function topDoctype($title)
  {
    echo
      '<!DOCTYPE html>
    <html lang="ru">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">    
      <link rel="stylesheet" href="style.css">
      <title>'.$title.'</title>
    </head>
    <body>';
  }

  public static function buttonDoctype()
  {
    echo
    '</body>
   </html>';
  }
}