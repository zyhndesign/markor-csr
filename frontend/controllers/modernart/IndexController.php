<?php
namespace frontend\controllers\modernart;

use Yii;
use yii\web\Controller;
use common\models\Post;

/**
 * Site controller
 */
class IndexController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [

        ];
    }

    public function actionIndex()
    {
        $awardQuery=Post::find();
        $collegeResultQuery=clone $awardQuery;
        $traineeQuery=clone $awardQuery;

        $awardQuery->where(["category_id"=>Yii::$app->params["categories"]["award"]]);
        $awardResults=$awardQuery->limit(4)->all();

        $collegeResultQuery->where(["category_id"=>Yii::$app->params["categories"]["collegeStudentResult"]]);
        $collegeResults=$collegeResultQuery->limit(4)->all();

        $traineeQuery->where(["category_id"=>Yii::$app->params["categories"]["traineeMien"]]);
        $traineeResults=$traineeQuery->limit(4)->all();

        return $this->render("index",[
            "awardResults"=>$awardResults,
            "collegeResults"=>$collegeResults,
            "traineeResults"=>$traineeResults
        ]);
    }
}