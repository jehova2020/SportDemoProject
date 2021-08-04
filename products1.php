<html>
<body>
<?php

$manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");
$query = new MongoDB\Driver\Query([]);
$cursor = $manager->executeQuery('esports.products', $query);


// $databaseMongo = $connection->selectDatabase(Config::get('MyImage'));
// $questions = $databaseMongo->selectCollection("myRecord");
// $questionsArray = $questions->find()->toArray();
foreach ($cursor as $question) 
{
?>
     <?php $myQuestion = $question; ?>
     <img class="check" src="data:jpeg;base64,<?=base64_encode($myQuestion->ProductImage->getData())?> " />
 <div>
 <h5 class="item_price">Rs. <?= $myQuestion->ProductPrice ?></h5>
<p><?= $myQuestion->ProductDescription ?></p>
 </div>
 </body>
</html>
<?php
}
 ?>
   
