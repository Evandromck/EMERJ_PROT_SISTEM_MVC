<?php

namespace App\Controller\Pages;

//Chamando o arquivo (Home.php) da pasta (Utils do app) 
use \App\Utils\View;

class Page{
  
   /**
    * Médoto responsável por renderizar o topo da página
    *@return string
    */
   private static function getHeader(){
      return View::render('pages/header');
   }
   
   /**
    * Médoto responsável por renderizar o topo da página
    *@return string
    */
    private static function getFooter(){
      return View::render('pages/footer');
   }



    /**
     * Método responsável por retornar o conteúdo (view) da página generica
     * @return string
     */

     public static function getPage($title,$content){
        return View::render('pages/page',[
         'title' => $title,
         'header' => self::getHeader(),
         'content' => $content,
         'footer' => self::getFooter(),
         
        ]);
     }
}