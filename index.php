<?php
require 'iFlyBehavior.php';
require 'iQuackBehavior.php';
require 'Quack.php';
require 'FlyWithWings.php';
require 'FlyNoWay.php';
require 'FlyRocketPowered.php';
require 'Duck.php';
require 'MallardDuck.php';
require 'ModelDuck.php';

$mallardDuck = new MallardDuck();
$mallardDuck->performFly();
$mallardDuck->performQuack();

$modelDuck = new ModelDuck();
$modelDuck->performFly();
$modelDuck->setFlyBehavior(new FlyRocketPowered());
$modelDuck->performFly();
