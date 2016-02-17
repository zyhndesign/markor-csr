<?php

use yii\helpers\Html;
use backend\assets\AppAsset;

$this->title = '新建/修改招募岗位';
?>


    <form class="form-horizontal" id="myForm" action="post/submit" method="post">
        <?php
        if($model->id){
            ?>
            <input type="hidden" name="id" value="<?php echo $model->id ?>">
        <?php
        }
        ?>
        <input type="hidden" value="24" name="category_id">
        <div class="form-group">
            <label  class="control-label col-md-2">标题*</label>
            <div class="col-md-8">
                <input type="text" class="form-control" value="<?php echo $model->title ?>" name="title">
            </div>
        </div>
        <div class="form-group">
            <label  class="control-label col-md-2">时间*</label>
            <div class="col-md-8">
                <input type="date" class="form-control" value="<?php echo $model->create_at ?>" name="create_at">
            </div>
        </div>
        <div class="form-group">
            <label  class="control-label col-md-2">内容*</label>
            <div class="col-md-8">
                <textarea class="form-control"  name="content" rows="3" id="content"><?php echo $model->content ?></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-offset-2 col-md-8">
                <button type="submit" class="btn btn-success form-control">确定</button>
            </div>
        </div>
    </form>

<?php
$this->registerJsFile("@web/js/src/recruitCreateOrUpdate.js",['depends' => [backend\assets\AppAsset::className()]]);
?>