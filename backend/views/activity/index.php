<?php

use yii\helpers\Html;
use backend\assets\AppAsset;

$this->title = $parentCategory->name."/".$category->name;
?>
    <script>
        var category_id=<?php echo $category->id; ?>;
    </script>

    <a class="btn btn-success" href="activity/create?category_id=<?php echo $category->id; ?>">
        <span class="glyphicon glyphicon-plus"></span> 新建
    </a>
    <table id="myTable" class="dataTable">
        <thead>
        <tr>
            <th>标题</th>
            <th>时间</th>
            <th>操作</th>
        </tr>
        </thead>
        <tbody>
        <!--<tr>
            <td>xxx</td>
            <td>xxx</td>
            <td>
            <a href="award/update">修改</a>&nbsp;
            <a href="1" class="delete">删除</a>
            </td>
        </tr>-->
        </tbody>
    </table>



<?php
$this->registerJsFile("@web/js/src/activityMgr.js",['depends' => [backend\assets\AppAsset::className()]]);
?>