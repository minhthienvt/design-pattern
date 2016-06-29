<?php
class MuteQuack implements iQuackBehavior
{
    public function sayQuack() {
      echo "Silence <br>";
    }
}