<?php
namespace app\models;
use app\models\Article;


$article=new Article();
$article->tile=$_POST[page];
$date=$article.save;
//$page=new \app\models\Pageinclude();
//$page->page=$_POST[page];
//$date=$page.save;

?>