<?php
   namespace  app\controllers;

   use app\models\Article;
   use app\models\Userset;
   use yii\base\Controller;
   
       class HomeController extends Controller
       {
           public  $layout = 'home';
           public  function  actionAbout()
           {
               return $this->render('about');
           }
           public function actionIndex()
           {
               $sql="select * from userset where id=1";
               $r=Userset::findBySql($sql)->all();
               dd($r);
         //   $request = \Yii::$app->request;
           // $id= $request ->get('id',1);
            //  $username= $request -> post('username');
            // $date = $request -> isGet;
               // $date = $request -> isPost;
              /* $date =[
                   'username'=>'chen',
                   'ip'=>$request->userIP,
                   'arr'=>[
                       'age'=>7,
                       'class'=>5,
                   ]
               ];*/
      //            $user=[
      //                 'username'=>'you',
      //             'age'=>26,
      //         ];
      //             $article=[
      //               'title'=>'人人有功練'
      //             ];

            //  $date = [
            //    'user'=>$user,
            //    'article'=>$article
            //  ];
     //   $date=[
     //       'str'=>'hello world <script>alert(1)</script>',
     //   ];
//               $request=\Yii::$app->request;
           //    $id= $request->get('id');
           //    $sql="select * from userset where id=:id";

             //  select * from article where id=1;drop table article:--

               //select * from article where id=1 or 1=1
              // select * from article

            // $r=Article::findBySql($sql,[':id'=>$id])->all();
            //  dd($r);
    //    return $this->render('index');
      //         return $this->renderPartial('index',$date);
//               return $this->render('index',compact('user','article'));
 //              dd($date);
         //   $date=Article::find()->all();
               //id>3
               //$date=Article::find()->where(['>','id',3])->all();
               //5>=id>=2 id 2-5
              // $date=Article::find()->where(['between','id',2,5])->all();
               //title like 中國
              // $date=Article::find()->where(['like','title',"中國"])->all();
            //$date=Article::find()->where(['id'=>5])->one();
            //   $date=Article::findone(5);
              // $date=Article::findAll([3,4,5]);
            //   $date=Article::find()->asArray()->all();

               //1000
           //  foreach (Article::find()->batch(2) as $article){
              //   echo count($article),'-';
            //     $date[]=$article;
            // }
           // dd($date);
               //增加欄位
//              $userset=new Article();
//               $userset->username='asdfws';
//               $userset->password='qwecwq';
//               $userset->authKey='101';
//               $userset->accessToken='101';
//             $date=$article->insert();
         //     $date=$userset->save();

               //修改
             //  $article=Article::findOne(10);
             //  $article->title="QAQ";
               //$date=$article->update();
             //  $date=$article->save();
             //  dd($date);
               //查看次數(累加)
//               $date=Article::updateAllCounters(['num'=>1],['id'=>8]);
//               dd($date);
               //刪除單調數據
////               $article=Article::findOne(13);
//               $article=Article::find()->where(['id'=>11])->all();
//              $date=$article[0]->delete();
            // $date=  Article::deleteAll('id=:id And num<:num',[':id'=>10,':num'=>100]);
    //           dd($date);
               return $this->render('index');
           }
       }