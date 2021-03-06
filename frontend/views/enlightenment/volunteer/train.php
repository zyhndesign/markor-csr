<?php
use yii\widgets\LinkPager;
use frontend\models\Helper;

$this->title = '志愿者培训';
$this->params=[
    "breadcrumbs"=>[
        [
            'label' => '艺术启蒙',
            'url' => ['enlightenment/index']
            //'template' => "<li><b>{link}</b></li>\n", // template for this link only
        ],
        [
            'label' => '志愿者活动',
            'url' => ['enlightenment/index']
            //'template' => "<li><b>{link}</b></li>\n", // template for this link only
        ],
        [
            'label' => '志愿者培训'
            //'url' => ['about/index']
            //'template' => "<li><b>{link}</b></li>\n", // template for this link only
        ]
    ]
]
?>

<div class="section">
    <ul class="list3">
        <?php
            foreach($results as $r){
                ?>
                <li class="item">
                    <div class="thumbContainer">

                        <picture>
                            <source srcset="<?= Helper::getSuffixFile($r->thumb); ?>" media="(max-width: 768px)">
                            <img class="thumb" src="<?= $r->thumb; ?>" >
                        </picture>
                    </div>
                    <div class="info">
                        <h2 class="title ellipsis"><?= $r->title; ?></h2>
                        <p class="excerpt">
                            <?= $r->excerpt; ?>
                        </p>
                    </div>
                </li>
                <?php
            }
        ?>
    </ul>
</div>


<?php echo LinkPager::widget(['pagination' => $pages]); ?>
