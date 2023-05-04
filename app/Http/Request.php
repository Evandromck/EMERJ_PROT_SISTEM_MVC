<?php

namespace App\Http;

class Request{
    
    /**
     * Método HTTP da requisição
     * @var string
     */
    private $httpMethod;

    /**
     * URI da paginas
     * @var string
     * 
     */
     private $uri;

     /**
      * @var array
      */
     private $queryParams = [];

      /**
       * @var array
       */
     private $postVars = [];

     /**
       * @var array
       */
      private $headers = [];

      /**
       * Construtor da classe
       */
      public function __construct(){
        $this->queryParams = $_GET ?? [];
        $this->postVars    = $_POST ?? [];
        $this->headers      = getallheaders();
        $this->httpMethod  = $_SERVER['REQUEST_METHOD'] ?? '';
        $this->uri         = $_SERVER['REQUEST_URI'] ?? '';
      }

      /**
       * Método responsável por retornar o método HTTP da requisição 
       * @return string
       */

       public function getHttpMethod(){
        return $this->httpMethod;
       }

       /**
        * Método responsável por retornar o método HTTP da requisição
        *@return string
        */
        public function getUri(){
            return $this->httpMethod;
        }
}