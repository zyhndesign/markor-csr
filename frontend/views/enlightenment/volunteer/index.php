<?php
use frontend\models\Helper;

$this->title = '志愿者活动';
$this->params=[
    "breadcrumbs"=>[
        [
            'label' => '艺术启蒙',
            'url' => ['enlightenment/index']
            //'template' => "<li><b>{link}</b></li>\n", // template for this link only
        ],
        [
            'label' => "志愿者活动"
        ]
    ]
]

?>
<div class="pageTop">
    <img class="image" src="images/app/pageTop/volunteer.jpg" srcset="images/app/pageTop/volunteer@2x.jpg 2x">
    <div class="info">
        <h2 class="title">志愿者活动</h2>
        <p class="excerpt">
            美克美家招募爱心大使在近百所受捐小学开展“美术欣赏课”艺术支教活动，累计参与人数超过200人，志愿者服务时间超过5000小时。
        </p>
    </div>
</div>

<div class="section">
    <h2 class="sectionTitle titleActivity">历年活动</h2>
    <ul class="list1 list12">
        <?php
        foreach($activityResults as $ar){
            ?>
            <li class="item">
                <a href="activities/<?= $ar->category_id; ?>/<?= $ar->id; ?>">
                    <div class="thumbContainer">
                        <picture>
                            <source srcset="<?= Helper::getSuffixFile($ar->thumb); ?>" media="(max-width: 768px)">
                            <img class="thumb" src="<?= $ar->thumb; ?>" >
                        </picture>
                    </div>

                    <div class="info">

                        <h2 class="title"><?= $ar->title; ?></h2>
                        <p class="author"><?= $ar->author; ?></p>
                        <p class="excerpt moreEllipsis" data-row="3">
                            <?= $ar->excerpt; ?>
                        </p>
                    </div>
                </a>
            </li>
        <?php
        }
        ?>
    </ul>
    <a class="more" href="activities/<?= Yii::$app->params["categories"]["activityVolunteer"]; ?>">更多</a>
</div>

<div class="section bgf4f4f4">
    <h2 class="sectionTitle titleVolunteerSpeech">感言</h2>
    <?php
        foreach($speechResults as $sr){
            ?>
            <picture>
                <source srcset="<?= Helper::getSuffixFile($sr->thumb); ?>" media="(max-width: 768px)">
                <img class="circle pCenter" style="width: 100px;" src="<?= $sr->thumb; ?>" >
            </picture>
            <p class="contentText author"><?= $sr->author; ?></p>
            <p class="contentText memo"><?=$sr->memo; ?></p>
            <p class="contentText hasQuotation">
                <?= $sr->excerpt; ?>
            </p>
            <?php
        }
    ?>

    <a class="more" href="speech/<?= Yii::$app->params["categories"]["speechVolunteer"]; ?>">更多</a>
</div>

<div class="section">
    <h2 class="sectionTitle titleVolunteerTrain">培训</h2>
    <ul class="list1 list12 list1M list1M1">
        <?php
        foreach($trainResults as $tr){
            ?>
            <li class="item">
               <div class="thumbContainer">
                <picture>
                    <source srcset="<?= Helper::getSuffixFile($tr->thumb); ?>" media="(max-width: 768px)">
                    <img class="thumb" src="<?= $tr->thumb; ?>" >
                </picture>
                </div>
                <div class="info">
                            <h2 class="title ellipsis"><?= $tr->title; ?></h2>
                            <p class="author"><?= $tr->author; ?></p>
                            <p class="excerpt moreEllipsis" data-row="3">
                                <?= $tr->excerpt; ?>
                            </p>
                        </div>
            </li>
        <?php
        }
        ?>
    </ul>
    <a class="more" href="enlightenment/volunteer/train">更多</a>
</div>

