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
       
        private function verNota($nota){
            echo 'Sua nota é :'. $nota;
        }
    
        public function setverNota($nota){
            $this->verNota($nota);
          } 

    }
    class Professor extends Usuario {
        public function __construct($nome, $idade, $aluno){
        parent:: __construct($nome, $idade);
            $this->aluno = $aluno;
        }
        public function getAluno() {
            return $this->aluno;
          }

          private function publicaNota($nota){
            echo 'A nota do aluno é :'. $nota;
        }
    
        public function setpublicaNota($nota){
            $this->publicaNota($nota);
          } 
    }

    $gabriely = new Aluno ('Gabriely',17);
    $lania = new Aluno ('Lânia Camelo',17);
    $ariane = new Professor ('Ariane', 37 , 'Gabriely');
    $cristiane = new Professor ('Cristiane', 42, 'Lânia Camelo');
    
    

?>


<title> Usuário </title>
<h2>Professor</h2>
<table border = "1" width="100%">
  <tr>
    <td><b>Nome</b></td>
    <td><b>Idade</b></td>
    <td><b>Aluno</b></td>
    <td><b>Nota</b></td>
  </tr>
  <tr>
    <td><?php echo $ariane->getNome(); ?></td>
    <td><?php echo $ariane->getidade(); ?></td>
    <td><?php echo $ariane->getaluno(); ?></td>
    <td><?php echo $ariane->setpublicaNota(10); ?></td>
  </tr>
  <tr>
  <td><?php echo $cristiane->getNome(); ?></td>
    <td><?php echo $cristiane->getidade(); ?></td>
    <td><?php echo $cristiane->getaluno(); ?></td>
    <td><?php echo $cristiane->setpublicaNota(9); ?></td>
  </tr>
</table>

<br><br>
<h2> Aluno</h2>
<table border = "1" width="100%">
  <tr>
    <td><b>Nome</b></td>
    <td><b>Idade</b></td>
    <td><b>Nota</b></td>
  </tr>
  <tr>
    <td><?php echo $gabriely->getNome(); ?></td>
    <td><?php echo $gabriely->getIdade(); ?></td>
    <td><?php echo $gabriely->setverNota(10); ?></td>
  </tr>
  <tr>
  <td><?php echo $lania->getNome(); ?></td>
    <td><?php echo $lania->getIdade(); ?></td>
    <td><?php echo $lania->setverNota(9); ?></td>
  </tr>
</table>
