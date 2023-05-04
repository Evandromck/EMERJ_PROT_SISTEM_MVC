<?php

namespace App\Controller\Pages;

//Chamando o arquivo (Home.php) da pasta (Utils do app) 
use \App\Utils\View;
use \App\Model\Entity\Organization; //direcionamento com o banco de dados
class Home extends Page{
    /**
     * 
     * @return string
     */

     public static function getHome(){
      //ORGANIZAÇÃO
      $obOrganization = new Organization;
      
      //VIEW DA HOME
        $content = View::render('pages/home',[
         'name'        => $obOrganization->name,
         'description' => $obOrganization->description,
         'site'        => $obOrganization->site,
        
        ]);
        return parent::getPage('WDEV - CANAL - hOME', $content);
     }
}