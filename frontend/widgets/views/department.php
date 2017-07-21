<?php
use yii\helpers\Html;
?>

<div id="about" class="page-section p-140-cont ">
    <div class="container">
        <div class="row">
            <?php foreach ( $news as $new) : ?>
            <div class="col-md-6">

                <div class="shop-dep-item mb-40">
                    <a href="shop-4-col.html">
                        <?php
                        $images = $new->images;
                        if (isset($images[0])) {
                            echo Html::img($images[0]->getUrl(), ['style' => 'height:;']);
                        }
                        else {

                            echo '<img src="images/shop/woman-dep2.jpg" alt="img">';
                        }
                        ?>
                        <div class="shop-dep-text-cont2">
                            <h4><?= $new->category->title; ?></h4>
                        </div>
                    </a>
                </div>

            </div>
            <?php endforeach;?>

        </div>
    </div>
</div>
