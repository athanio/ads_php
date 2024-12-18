<?php
 #file poo
 class FileManager{
    private $arquivo;
    public function __construct($arquivo){
        $this->arquivo = $arquivo;
    }
    public function createFile(){
        //   if(file_exists($this->arquivo)){
        //       throw new Exception("Arquivo já existe");
        //   }
         $handle = fopen($this->arquivo, 'w');
         if ($handle){
            fclose($handle);
            return "Arquivo criado";
         }  
    }


    
    public function escreverFile($content){
        file_put_contents($this->arquivo, $content . PHP_EOL, FILE_APPEND);
    }
    public function lerFile(){
        return file_get_contents($this->arquivo);
    }


    public function DeletaFile(){
        unlink($this->arquivo);
        return "Arquivo Deletado";
    }
 }


