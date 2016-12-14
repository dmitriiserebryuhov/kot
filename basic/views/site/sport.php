<?php
use app\models\SportForm;

use yii\helpers\Html;

?>
<h1>Резалты</h1>
<ul>
<?php foreach ($rows as $key): ?>
    <li>
        <?= $key['id']?>
        
    </li>
<?php endforeach; ?>
</ul>


?>