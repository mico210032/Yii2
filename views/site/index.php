<?php

/* @var $this yii\web\View */
use \app\models\Page;
$this->title = 'My Yii Application';
?>
<div class="site-index">

<?php


$date=\app\models\Pageinclude::find()->all();
p($date);
?>


    <p>新增留言</p>
    <form action="/views/site/include.php" method="post">
        <table align="lift">
            <tr valign="baseline">
                <td nowrap="nowrap" align="right">Message:</td>
                <td><input type="text" name="page" value="" height="80" size="40" /></td>
            </tr>
            <tr valign="baseline">
                <td nowrap="nowrap" align="right">&nbsp;</td>
                <td><input type="submit" value="留言" /></td>
            </tr>
        </table>
        <input type="hidden" name="MM_insert" value="form1" />
    </form>
</div>