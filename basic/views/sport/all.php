<?php


use yii\helpers\Html;

?>
<h1>Резалты</h1>

<?php foreach ($rows as $key): ?>
   
        <?= $key['title'].'<br>'?>
        
  
<?php endforeach; ?>
 