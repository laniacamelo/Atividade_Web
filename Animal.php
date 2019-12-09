<?php

  abstract class Animal {

    protected $raca;
    protected $peso;

    public function __construct($raca, $peso){
      $this->raca = $raca;
      $this->peso = $peso;
    }

    public function getRaca() {
      return $this->raca;
    }

    public function getPeso() {
      return $this->peso;
    }

    private function correr(){
        echo 'O Animal corre bastante rapido';
    }

    public function mostra(){
        $this->correr();
      }

      private function dormir($dormir){
        echo 'O Animal dorme '. $dormir .' horas por dia';
    }

    public function setDormir($dormir){
        $this->dormir($dormir);
      } 

  }



  class Gato extends Animal {
    public $nome;

    public function __construct($raca, $peso, $nome){
        parent:: __construct($raca, $peso);
            $this->nome = $nome;
    }
    public function getNome() {
      return $this->nome;
    }
  }

  class Cavalo extends Animal {
      public $nome;
    
      public function __construct($raca, $peso, $nome){
          parent:: __construct($raca, $peso);
              $this->nome = $nome;
      }
      public function getNome() {
        return $this->nome;
      }
    }

  $bengal = new Gato ('Bengal', '6kg', 'floquinho');
  $devon= new Gato ('Devon', '5g', 'bob');
  $persa = new Gato ('Persa', '5.5kg', 'luna');
  $himalaio = new Gato ('Himalaio', '5kg', 'pipoca');

  $garrano = new Cavalo ('Garrano', '876kg', 'Vendaval');
  $shire = new Cavalo ('Shire', '812kg', 'Cleópatra');
  $cabardino  = new Cavalo ('Cabardino ', '870kg', 'Celeste');
  $falabella= new Cavalo ('Falabella', '940kg', 'Cometa');

?>

<h2>Gatos</h2>

<table border = "1" width="100%">
  <tr>
    <td><b>Nome</b></td>
    <td><b>Raça</b></td>
    <td><b>Peso</b></td>
    <td><b>Quanto corre</b></td>
    <td><b>Quanto Dorme</b></td>
  </tr>
  <tr>
    <td><?php echo $bengal->getNome(); ?></td>
    <td><?php echo $bengal->getRaca(); ?></td>
    <td><?php echo $bengal->getPeso(); ?></td>
    <td><?php echo $bengal->mostra(); ?></td>
    <td><?php echo $bengal->setdormir(9); ?></td>
  </tr>
  <tr>
    <td><?php echo $devon->getNome(); ?></td>
    <td><?php echo $devon->getRaca(); ?></td>
    <td><?php echo $devon->getPeso(); ?></td>
    <td><?php echo $devon->mostra(); ?></td>
    <td><?php echo $devon->setdormir(10); ?></td>
  </tr>
  <tr>
    <td><?php echo $persa->getNome(); ?></td>
    <td><?php echo $persa->getRaca(); ?></td>
    <td><?php echo $persa->getPeso(); ?></td>
    <td><?php echo $persa->mostra(); ?></td>
    <td><?php echo $persa->setdormir(12); ?></td>
  </tr>
  <tr>
    <td><?php echo $himalaio->getNome(); ?></td>
    <td><?php echo $himalaio->getRaca(); ?></td>
    <td><?php echo $himalaio->getPeso(); ?></td>
    <td><?php echo $himalaio->mostra(); ?></td>
    <td><?php echo $himalaio->setdormir(10); ?></td>
  </tr>
</table>

<br><br>

<h2>Cavalos</h2>

<table border = "1" width="100%">
  <tr>
    <td><b>Nome</b></td>
    <td><b>Raça</b></td>
    <td><b>Peso</b></td>
    <td><b>Quanto corre</b></td>
    <td><b>Quanto Dorme</b></td>
  </tr>
  <tr>
    <td><?php echo $garrano->getNome(); ?></td>
    <td><?php echo $garrano->getRaca(); ?></td>
    <td><?php echo $garrano->getPeso(); ?></td>
    <td><?php echo $garrano->mostra(); ?></td>
    <td><?php echo $garrano->setdormir(6); ?></td>
  </tr>
  <tr>
    <td><?php echo $shire->getNome(); ?></td>
    <td><?php echo $shire->getRaca(); ?></td>
    <td><?php echo $shire->getPeso(); ?></td>
    <td><?php echo $shire->mostra(); ?></td>
    <td><?php echo $shire->setdormir(8); ?></td>
  </tr>
  <tr>
    <td><?php echo $cabardino->getNome(); ?></td>
    <td><?php echo $cabardino->getRaca(); ?></td>
    <td><?php echo $cabardino->getPeso(); ?></td>
    <td><?php echo $cabardino->mostra(); ?></td>
    <td><?php echo $cabardino->setdormir(10); ?></td>
  </tr>
  <tr>
    <td><?php echo $falabella->getNome(); ?></td>
    <td><?php echo $falabella->getRaca(); ?></td>
    <td><?php echo $falabella->getPeso(); ?></td>
    <td><?php echo $falabella->mostra(); ?></td>
    <td><?php echo $falabella->setdormir(7); ?></td>
  </tr>
</table>