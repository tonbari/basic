<?php
namespace app\controllers;
use yii\db\Expression;
use Yii;
use yii\web\Controller;
use app\models\Purchases;
use app\models\PurchasesForm;

class CrudController extends Controller
{
public function actionIndex()
{
    return $this->render('index');
}

public function actionPurchases()
    {
        $purchase = (new \yii\db\Query())
        ->select('*')
        ->from('purchases')
        ->leftJoin('artists', '`artists`.`idartists` = `purchases`.`idartists`')
        ->all();
        return $this->render('index', ['purchases' => $purchase]);
    }
    public function actionCreatepurchases()
{
    $model = new PurchasesForm();
    if ($model->load(Yii::$app->request->post()) && $model->validate()){
        $purchase = new Purchases();
        $purchase->idartists = $model->idartists;
        $purchase->client_name = $model->client_name;
        $purchase->email = $model->email;
        $purchase->phone_number = $model->phone_number;
        $purchase->about = $model->about;
        $purchase->purchase_date = new Expression('NOW()');
        $purchase->save();
        $artistname = (new \yii\db\Query())
        ->select('artist_name')
        ->from('artists')
        ->where('idartists='.$purchase->idartists)
        ->one();
        return $this->render('confirmpurchase', ['model' => $purchase, 'artistname' => $artistname]);
    }
    else {
        return $this->render('createpurchases', ['model' => $model]);
    }
}

public function actionAddartist()
{
    return $this->render('addartist');
}

}
