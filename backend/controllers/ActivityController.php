<?php

namespace backend\controllers;

use Yii;
use yii\filters\AccessControl;
use common\components\AccessRule;
use common\models\Post;
use common\models\Category;

class ActivityController extends \yii\web\Controller
{

    public function behaviors()
    {
        return [

        ];
    }

    /**
     * 美术教师捐赠历年活动
     * @return string
     */
    public function actionDonation(){
        $category=Category::findOne(15);
        $parentCategory=Category::findOne($category->parent);
        return $this->render("index",[
            "parentCategory"=>$parentCategory,
            "category"=>$category
        ]);
    }

    /**
     * 志愿者历年活动
     * @return string
     */
    public function actionVolunteer(){
        $category=Category::findOne(17);
        $parentCategory=Category::findOne($category->parent);
        return $this->render("index",[
            "parentCategory"=>$parentCategory,
            "category"=>$category
        ]);
    }

    /**
     * 教师培训历年活动
     * @return string
     */
    public function actionTeacherTrain(){
        $category=Category::findOne(22);
        $parentCategory=Category::findOne($category->parent);
        return $this->render("index",[
            "parentCategory"=>$parentCategory,
            "category"=>$category
        ]);
    }


    public function actionCreate(){

        $model=new Post();
        $category=Category::findOne($_GET["category_id"]);
        $parentCategory=Category::findOne($category->parent);
        return $this->render('createOrUpdate',[
            "parentCategory"=>$parentCategory,
            "category"=>$category,
            'model' => $model
        ]);
    }

    public function actionUpdate($id){

        //这样获取会将isNewRecord设置为false
        $model = $this->findModel($id);
        $category=Category::findOne($model->category_id);
        $parentCategory=Category::findOne($category->parent);
        return $this->render('createOrUpdate',[
            "parentCategory"=>$parentCategory,
            "category"=>$category,
            'model' => $model,
        ]);
    }

    /**
     * Finds the Notice model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Notice the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Post::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
