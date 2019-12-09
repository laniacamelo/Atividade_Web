<?php

  abstract class Conta {

    protected $numero;
    protected $ag;
    protected $senha;
    protected $saldo;

    public function __construct($numero, $ag, $senha, $saldo){
      $this->numero = $numero;
      $this->ag = $ag;
      $this->senha = $senha;
      $this->saldo = $saldo;
    }

    private function deposito($valor){
              
      $this->saldo += $valor;
    }
    public function setDeposito($valor){
      $this->deposito($valor);
    }
    private function trasferencia($valor){
              
      $this->saldo -= $valor;
    }
    public function setTrasferencia($valor){
      $this->trasferencia($valor);
    }
    public function getNumero() {
      return $this->numero;
    }
    public function getAg() {
      return $this->ag;
    }
    public function getSenha() {
      return $this->senha;
    }
    public function getSaldo() {
      return $this->saldo;
    }
  }



  class Corrente extends Conta {
    public $clientes;

    public function __construct($numero, $ag, $senha, $saldo, $clientes){
        parent:: __construct($numero, $ag, $senha, $saldo);
            $this->clientes = $clientes;
    }
    public function getCliente() {
      return $this->clientes;
    }
  }

  class Poupanca extends Conta {
    public $clientes;

    public function __construct($numero, $ag, $senha, $saldo, $clientes){
        parent:: __construct($numero, $ag, $senha, $saldo);
            $this->clientes = $clientes;
    }
    public function getCliente() {
      return $this->clientes;
    }
  }


  $Alian = new Corrente ('445637-9', '3030', '4563', '1010', 'Alian');
  $Elizeu = new Corrente ('099876-1', '7090', '7656', '8000', 'Elizeu');
  $Maria = new Corrente ('875643-0', '2341', '6234', '9834', 'Maria');
  $Ana = new Corrente ('774532-9', '9034', '9834', '3908', 'Ana');

  $Guilherme = new Poupanca ('989796-9', '3452', '2341', '3241', 'Guilherme');
  $Alice = new Poupanca ('345672-1', '7656', '9876', '1000', 'Alice');
  $Otavio = new Poupanca ('987867-5', '1231', '2313', '7656', 'Otavio');
  $Miguel = new Poupanca ('908675-4', '2341', '3423', '4356', 'Miguel');


?>

<h2>Conta corrente</h2>

<table border='2' width="100%">
  <tr>
    <td><b>Cliente</b></td>
    <td><b>Numero</b></td>
    <td><b>Agencia</b></td>
    <td><b>Senha</b></td>
    <td><b>Saldo</b></td>
    <td><b>Trasferencia</b></td>
    <td><b>Saldo pós trasferencia</b></td>
    <td><b>Deposito</b></td>
    <td><b>Saldo pós deposito</b></td>
  </tr>
  <tr>
    <td><?php echo $Alian->getCliente(); ?></td>
    <td><?php echo $Alian->getNumero(); ?></td>
    <td><?php echo $Alian->getAg(); ?></td>
    <td><?php echo $Alian->getSenha(); ?></td>
    <td><?php echo $Alian->getSaldo(); ?></td>
    <td>R$ 300 <?php $Alian->setTrasferencia(300); ?></td>
    <td><?php echo $Alian->getSaldo(); ?></td>
    <td>R$ 250 <?php $Alian->setDeposito(250); ?> </td>
    <td><?php echo $Alian->getSaldo(); ?></td>
  </tr>
  <tr>
    <td><?php echo $Elizeu->getCliente(); ?></td>
    <td><?php echo $Elizeu->getNumero(); ?></td>
    <td><?php echo $Elizeu->getAg(); ?></td>
    <td><?php echo $Elizeu->getSenha(); ?></td>
    <td><?php echo $Elizeu->getSaldo(); ?></td>
    <td>R$ 200 <?php $Elizeu->setTrasferencia(200); ?></td>
    <td><?php echo $Elizeu->getSaldo(); ?></td>
    <td>R$ 560 <?php $Elizeu->setDeposito(560); ?> </td>
    <td><?php echo $Elizeu->getSaldo(); ?></td>
  </tr>
  <tr>
    <td><?php echo $Maria->getCliente(); ?></td>
    <td><?php echo $Maria->getNumero(); ?></td>
    <td><?php echo $Maria->getAg(); ?></td>
    <td><?php echo $Maria->getSenha(); ?></td>
    <td><?php echo $Maria->getSaldo(); ?></td>
    <td>R$ 310 <?php $Maria->setTrasferencia(310); ?></td>
    <td><?php echo $Maria->getSaldo(); ?></td>
    <td>R$ 700 <?php $Maria->setDeposito(700); ?> </td>
    <td><?php echo $Maria->getSaldo(); ?></td>
  </tr>
  <tr>
    <td><?php echo $Ana->getCliente(); ?></td>
    <td><?php echo $Ana->getNumero(); ?></td>
    <td><?php echo $Ana->getAg(); ?></td>
    <td><?php echo $Ana->getSenha(); ?></td>
    <td><?php echo $Ana->getSaldo(); ?></td>
    <td>R$ 100 <?php $Ana->setTrasferencia(100); ?></td>
    <td><?php echo $Ana->getSaldo(); ?></td>
    <td>R$ 430 <?php $Ana->setDeposito(430); ?> </td>
    <td><?php echo $Ana->getSaldo(); ?></td>
  </tr>
</table>

<br><br>

<h2>Conta poupança</h2>

<table border='2' width="100%">
  <tr>
    <td><b>Cliente</b></td>
    <td><b>Numero</b></td>
    <td><b>Agencia</b></td>
    <td><b>Senha</b></td>
    <td><b>Saldo</b></td>
    <td><b>Trasferencia</b></td>
    <td><b>Saldo pós trasferencia</b></td>
    <td><b>Deposito</b></td>
    <td><b>Saldo pós deposito</b></td>
  </tr>
  <tr>
    <td><?php echo $Guilherme->getCliente(); ?></td>
    <td><?php echo $Guilherme->getNumero(); ?></td>
    <td><?php echo $Guilherme->getAg(); ?></td>
    <td><?php echo $Guilherme->getSenha(); ?></td>
    <td><?php echo $Guilherme->getSaldo(); ?></td>
    <td>R$ 310 <?php $Guilherme->setTrasferencia(100); ?></td>
    <td><?php echo $Guilherme->getSaldo(); ?></td>
    <td>R$ 720 <?php $Guilherme->setDeposito(600); ?> </td>
    <td><?php echo $Guilherme->getSaldo(); ?></td>
  </tr>
  <tr>
    <td><?php echo $Alice->getCliente(); ?></td>
    <td><?php echo $Alian->getNumero(); ?></td>
    <td><?php echo $Alice->getAg(); ?></td>
    <td><?php echo $Alice->getSenha(); ?></td>
    <td><?php echo $Alice->getSaldo(); ?></td>
    <td>R$ 600 <?php $Alice->setTrasferencia(90); ?></td>
    <td><?php echo $Alice->getSaldo(); ?></td>
    <td>R$ 500 <?php $Alice->setDeposito(150); ?> </td>
    <td><?php echo $Alice->getSaldo(); ?></td>
  </tr>
  <tr>
    <td><?php echo $Otavio->getCliente(); ?></td>
    <td><?php echo $Otavio->getNumero(); ?></td>
    <td><?php echo $Otavio->getAg(); ?></td>
    <td><?php echo $Otavio->getSenha(); ?></td>
    <td><?php echo $Otavio->getSaldo(); ?></td>
    <td>R$ 700 <?php $Otavio->setTrasferencia(50); ?></td>
    <td><?php echo $Otavio->getSaldo(); ?></td>
    <td>R$ 950 <?php $Otavio->setDeposito(590); ?> </td>
    <td><?php echo $Otavio->getSaldo(); ?></td>
  </tr>
  <tr>
    <td><?php echo $Miguel->getCliente(); ?></td>
    <td><?php echo $Miguel->getNumero(); ?></td>
    <td><?php echo $Miguel->getAg(); ?></td>
    <td><?php echo $Miguel->getSenha(); ?></td>
    <td><?php echo $Miguel->getSaldo(); ?></td>
    <td>R$ 90 <?php $Miguel->setTrasferencia(200); ?></td>
    <td><?php echo $Miguel->getSaldo(); ?></td>
    <td>R$ 300 <?php $Miguel->setDeposito(300); ?> </td>
    <td><?php echo $Miguel->getSaldo(); ?></td>
  </tr>
</table>