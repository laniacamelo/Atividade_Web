<?php

 abstract class Usuario {

    protected $nome;
    protected $idade;
  
    public function __construct($nome, $idade){
      $this->nome = $nome;
      $this->idade = $idade;
    }
  
  
  
  public function getNome() {
    return $this->nome;
  }
  
  public function getIdade() {
    return $this->idade;
  }
  
  }

  class Aluno extends Usuario {
    public $nota;
  
    public function getNota() {
      return $this->nota;
    }

    public function setNota($nota) {
      $this->nota= $nota;
    }

    public function verNota(){
        echo $this->getNota();
    }

  }

  class Professor extends Usuario {

    public function publicaNota($aluno, $nota){
        $this->$$aluno->setNota($nota);
    }
    
  }




$lania = new Aluno ('lania',17);
var_dump($lania);

$ana = new Professor ('ana', 42);

$ana->publicaNota('lania', 9.9);
?>