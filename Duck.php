<?php
class Duck
{
  public $flyBehavior;
  public $quackBehavior;

  public function swim() {
    echo "Duck Swin <br>";
  }
  public function display() {
    echo "Duck display <br>";
  }
  
  public function performFly() {
    $this->flyBehavior->fly();
  }

  public function performQuack() {
    $this->quackBehavior->sayQuack();
  }

  public function setFlyBehavior(iFlyBehavior $fb) {
    $this->flyBehavior =  $fb;
  }

  public function setQuackBehavior(iQuackBehavior $qb) {
    $this->quackBehavior = $qb;
  }
}