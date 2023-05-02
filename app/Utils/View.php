<?php  //Class para gerenciar as View

namespace App\Utils;

//metodos que sera criado para render as view da pasta ./resoucer/view/pages/Home.html
class View{ 

   /**--------Método responsável por retornar o conteúdo CONTEÚDO DE UMA VIEW ------------*/
     
    /**
     * Método responsável por retornar o CONTEÚDO DE UMA VIEW 
     * @param string
     * @return string 
     */
     //Verificar se o método exite ou não na view do "public static function render (($view) referência a pasta) "
      private static function getContentView($view){
        //virificando e limitando o conteúdo da view entre ($view ate html)
        $file = __DIR__.'/../../resoucers/view/'.$view.'.html';
        //se a variável $file exixtir retorna o CONTEÚDO caso contrario retorna VAZIO 
        return file_exists($file) ? file_get_contents($file) : 'falha';
    }
     


    /**--------Método responsável por retornar o conteúdo RENDERIZADO DE UMA VIEW------------*/

     /**
      *@param string  //retornarndo uma string referente ao nome que ela vai receber
      *@param array    //as variaveis
      *@return string //referente ao o que ela vai enviar
      */ 

     //Nome da view que esta dentro da ./resoucer/"view"   (($view) referência a pasta)
       public static function render($view, $vars = []){

        //CONTEÚDO DA VIEW 
        $contentView = self::getContentView($view);

        echo "<pre>";
        print_r($vars);
        /* echo "</pre>" or exit; */

        //RETORNA O CONTEÚDO RENDERIZADO
        return  $contentView;

     }
}