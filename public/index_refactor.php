<?php
require '../vendor/autoload.php';

$element = new RigorTalks\Refactoring\HtmlElementRefactoring('p', [], 'Este es el contenido');
echo $element->open().'Cualquier contenido'.$element->close();
echo htmlentities($element->render(), ENT_QUOTES, 'UTF-8');
echo '<br><br>';

$element = new RigorTalks\Refactoring\HtmlElementRefactoring('p', ['id' => 'my_paragraph'], 'Este es el contenido');
echo htmlentities($element->render(), ENT_QUOTES, 'UTF-8');
echo '<br><br>';

$element = new RigorTalks\Refactoring\HtmlElementRefactoring('p', ['id' => 'my_paragraph', 'class' => 'paragraph'], 'Este es el contenido');
echo htmlentities($element->render(), ENT_QUOTES, 'UTF-8');
echo '<br><br>';

$element = new RigorTalks\Refactoring\HtmlElementRefactoring('img', ['src' => 'img/styde.png', 'title' => 'Curso de "Refactorización" en Styde']);
echo htmlentities($element->render(), ENT_QUOTES, 'UTF-8');
echo '<br><br>';



function writeln($line_in) {
    echo $line_in.'<br/>';
}

function clientCode()
{
    writeln('');

    $p1 = new Prototype;
    $p1->primitive = 245;
    $p1->component = new \DateTime;
    $p1->circularReference = new ComponentWithBackReference($p1);

    $p2 = clone $p1;

    if ($p1->primitive === $p2->primitive){
        echo "Primitive field values have been carried over to a clone. Yay!\n";
    } else {
        echo "Primitive field values have not been copied. Booo!\n";
    }

    echo '<br />';

    if ($p1->component === $p2->component) {
        echo "Simple component has not been cloned. Booo!\n";
    } else {
        echo "Simple component has been cloned. Yay!\n";
    }

    echo '<br />';

    if ($p1->circularReference === $p2->circularReference) {
        echo "ComponentGui with back reference has not been cloned. Booo!\n";
    } else {
        echo "ComponentGui with back reference has been cloned. Yay!\n";
    }

    echo '<br />';

    if ($p1->circularReference->prototype === $p2->circularReference->prototype) {
        echo "ComponentGui with back reference is linked to original object. Booo!\n";
    } else {
        echo "ComponentGui with back reference is linked to the clone. Yay!\n";
    }

    echo '<br />';
}

function clientCodePage()
{
    writeln('');

    $author = new Author("John Smith");
    $page = new Page("Tip of the day", "Keep calm and carry on.", $author);

    echo '<br />';

    $page->addComment("Nice tip, thanks!");

    echo '<br />';

    $draft = clone $page;
    echo "Dump of the clone. Note that the author is now referencing two objects.\n\n";
    print_r($draft);

    echo '<br />';
}

function clonePersonage()
{
    writeln('');
    $game = new Game();

    // make a Prince personage intance
    $prince = $game->makePersonage(2);

    $smartPrince = clone $prince;
    $smartPrince->setIntelligenceLevel(100);
    $smartPrince->setSkills('fight with a sword');
    writeln('Smart Prince: '.$smartPrince->getIntelligenceLevel());
    writeln('Smart Prince: '.$smartPrince->getSkills());
    $game->addPersonageToList($smartPrince);
    var_dump($smartPrince);
    writeln('');

    $sillyPrince = clone $prince;
    $sillyPrince->setIntelligenceLevel(30);
    $sillyPrince->setSkills('sleep all day');
    writeln('Silly Prince: '.$sillyPrince->getIntelligenceLevel());
    writeln('Silly Prince: '.$sillyPrince->getSkills());
    $game->addPersonageToList($sillyPrince);
    var_dump($sillyPrince);
    writeln('');

    // make a Prince personage intance
    $hero = $game->makePersonage(0);
    $secondHero = clone $hero;
    $secondHero->setName("Ayudante de Heroe");
    $secondHero->setIntelligenceLevel(100);
    $secondHero->setSkills('help the hero');
    $secondHero->setWeight(20);
    $secondHero->setWidth(40);
    $secondHero->setHeight(50);
    writeln('Second Hero: '.$secondHero->getIntelligenceLevel());
    writeln('Second Hero: '.$secondHero->getSkills());
    $game->addPersonageToList($secondHero);
    var_dump($secondHero);
    writeln('');

    writeln('');
    var_dump($game->getAllPersonages());
    writeln('');

    writeln('');
    var_dump($game->getPersonageInstanceFromToList(Hero::class));
    writeln('');

}

function clientCodeNotification(Notification $notification)
{
    writeln('');
    $notification->send("Website is down!",
        "<strong style='color:red;font-size: 50px;'>Alert!</strong> " .
        "Our website is not responding. Call admins and bring it up!");
    writeln('');
}

echo "Client code is designed correctly and works with email notifications:\n";
$notification = new EmailNotification("developers@example.com");
clientCodeNotification($notification);

echo "The same client code can work with other classes via adapter:\n";
$slackApi = new SlackApi("example.com", "XXXXXXXX");
$notificationAdapter = new SlackNotificationAdapter($slackApi, "Example.com Developers");
clientCodeNotification($notificationAdapter);

writeln('');
$card = new Card();
$cardAdapter = new CardAdapter($card);
$cardAdapter->order("Bank Of America", 1000);
writeln('');

writeln('');
$account = new Account();
$accountAdapter = new AccountAdapter($account);
$accountAdapter->order("Bank Of America 2", 100);
writeln('');

clonePersonage();

clientCode();

clientCodePage();

writeln('');
$tv = new Tv();
$remoteController = New RemoteControl($tv);
$remoteController->togglePower();

$radio = new Radio();
$advancedRemoteControl= new AdvancedRemoteControl($radio);
$advancedRemoteControl->togglePower();
writeln('');


echo '<br />';

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

echo "Singleton Pattern".'<br />';

$operation1 = new Operation();
$operation2 = new Operation();

$operation1->createAgent();
writeln('create agent to opeation 1');
writeln($operation1->makeSelectQuery('SELECT * FROM users'));
writeln($operation1->getAgentInstance()::$value);
writeln('');

$operation1->getAgentInstance()::$value  = 200;

$operation2->createAgent();
writeln('create agent to opeation 1');
writeln($operation1->makeSelectQuery('SELECT * FROM users'));
writeln($operation1->getAgentInstance()::$value);
writeln('');


