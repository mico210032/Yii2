<?php
namespace app\controllers;
use app\models\Page;
use yii\base\Controller;

class includeController extends Controller
{
    public function page()
    {
        echo 123;
    }

//public function page($date)
//{
//    $page = new Page();
//    $page->page = $_POST['page'];
//    $date = $page->save();
//}
}
?>