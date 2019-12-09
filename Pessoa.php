<?php

  abstract class Pessoa {

    protected $login;
    protected $senha;
    protected $cpf_ou_cnpj;

    public function __construct($login, $senha, $cpf_ou_cnpj){
      $this->login = $login;
      $this->senha = $senha;
      $this->cpf_ou_cnpj = $cpf_ou_cnpj;
    }

    public function getLogin() {
      return $this->login;
    }

    public function getSenha() {
      return $this->senha;
    }

    public function getCpf_ou_cnpj() {
        return $this->cpf_ou_cnpj;
    }
  }

  class PessoaFisica extends Pessoa {
    public $nome;

    public function __construct($login, $senha, $cpf_ou_cnpj, $nome){
        parent:: __construct($login, $senha, $cpf_ou_cnpj);
            $this->nome = $nome;
    }
    public function getNome() {
      return $this->nome;
    }

    public function VerDocumento() {
        echo '<center><b> Documento de '.$this->getNome().'</center></b><br>';
        echo 'O seu nome é: '.$this->getNome().'</center><br>';
        echo 'A sua senha é: '.$this->getSenha().'</center><br>';
        echo 'O se CPF é: '.$this->getCpf_ou_cnpj().'</center><br>';
    }
  }

  class PessoaJuridica extends Pessoa {
    public $nome;
  
    public function __construct($login, $senha, $cpf_ou_cnpj, $nome){
        parent:: __construct($login, $senha, $cpf_ou_cnpj);
            $this->nome = $nome;
    }
    public function getNome() {
      return $this->nome;
    }

    public function VerDocumento() {
        echo '<center><b> Documento de '.$this->getNome().'</center></b><br>';
        echo 'O seu nome é: '.$this->getNome().'</center><br>';
        echo 'A sua senha é: '.$this->getSenha().'</center><br>';
        echo 'O se CNPJ é: '.$this->getCpf_ou_cnpj().'</center><br>';
    }
  }

  $joao = new PessoaFisica ('111', '222', '4354321', 'Joao');
  $jose = new PessoaFisica ('111', '222', '9876453', 'Jose');
  $maria = new PessoaFisica ('111', '222', '9874563', 'Maria');
  $ana = new PessoaFisica ('111', '222', '9863425', 'Ana');

  $carla = new PessoaJuridica ('111', '222', '9845637', 'Carla');
  $ageu = new PessoaJuridica ('111', '222', '23415234', 'Ageu');
  $bete = new PessoaJuridica ('111', '222', '67453425', 'Bete');
  $aline = new PessoaJuridica ('111', '222', '7634526', 'Aline');

 
  ?>
<h2>Pessoa Fisica</h2>
  <table border="1" width="30%" > 
    <tr>
        <td><center>Objeto 1 </center></td>
        <td><?php $joao->VerDocumento(); ?></td>
    </tr>
    <tr>
      <td><center>Objeto 2 </center></td>
      <td><?php $jose->VerDocumento(); ?></td>
    </tr>
    <tr>
      <td><center>Objeto 3</center></td>
      <td><?php $maria->VerDocumento(); ?></td>
    </tr>
    <tr>
      <td><center>Objeto 4</center></td>
      <td><?php $ana->VerDocumento(); ?></td>
    </tr>
  </table>

  <h2>Pessoa Juridica</h2>
  <table border="1" width="30%"> 
    <tr>
      <td><center>Objeto 1 </center></td>
      <td><?php $carla->VerDocumento(); ?></td>
    </tr>
    <tr>
      <td><center>Objeto 2 </center></td>
      <td><?php $ageu->VerDocumento(); ?></td>
    </tr>
    <tr>
      <td><center>Objeto 3</center></td>
      <td><?php $bete->VerDocumento(); ?></td>
    </tr>
    <tr>
      <td><center>Objeto 4</center></td>
      <td><?php $aline->VerDocumento(); ?></td>
    </tr>
  </table>