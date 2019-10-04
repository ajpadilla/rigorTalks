<?php

require '../vendor/autoload.php';

use RigorTalks\Patterns\AbstracFactory\Client;
use RigorTalks\Patterns\Builder\Client as ClientBuilder;
use RigorTalks\Patterns\AbstracFactory\FactoryManager;
use RigorTalks\Patterns\Builder\Factory;
use RigorTalks\Patterns\Builder\BuilderManager;
use RigorTalks\Patterns\Factory\Factories\OReillyFactoryMethod;
use RigorTalks\Temperature;

echo "Hola rigor". '<br />';;

echo "GoldFactory".'<br />';

$account = FactoryManager::make(new Client('gold'));
$account->makeProducts();

echo $account->getAccount()->getDataOfProduct().'<br />';
echo $account->getCreditCard()->getDataOfProduct().'<br />';
echo $account->getDebitCard()->getDataOfProduct().'<br />';
echo $account->getGift()->getDataOfProduct().'<br />';



echo "Builder Pattern".'<br />';
echo "Standar Account".'<br />';

$accountBuilder = Factory::createAccount(new ClientBuilder('standard'));

$manager = new BuilderManager();
$manager->setAccountBuilder($accountBuilder);
$manager->build();

echo $manager->getAccountBuilder()->getData();


echo "Factory Pattern".'<br />';
echo "ORelly Book".'<br />';

$orellyFactoryObject = new OReillyFactoryMethod('OReilly');
// Return SamsBook instance
$book = $orellyFactoryObject->make('other');
echo "Context: {$orellyFactoryObject->getContext()}".'<br />';
echo "Book Data".'<br />';
echo "Title: {$book->getTitle()}".'<br />';
echo "subject: {$book->getSubject()}".'<br />';
echo "Author: {$book->getAuthor()}".'<br />';

