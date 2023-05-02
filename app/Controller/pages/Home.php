<?php

namespace App\Controller\Pages;

//Chamando o arquivo (Home.php) da pasta (Utils do app) 
use \App\Utils\View;

class Home{
    /**
     * 
     * @return string
     */

     public static function getHome(){
        return View::render('pages/home',[
         'name' => 'WDEV - Canal',
         'description' => 'Canal do youtuber: https:wwww@.com.br'
        ]);
     }
}