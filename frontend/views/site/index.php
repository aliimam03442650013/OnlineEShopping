<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
$this->title = 'My Yii Application';
?>



<?= \frontend\widgets\SliderWidget::widget();?>
<?= \frontend\widgets\DepartmentWidget::widget();?>

<!-- SHOP NEW ARRIVALS -->
<div class="page-section mb-50">
    <div class="container">
        <!-- TITLE -->
        <div class="mb-10">
            <h2 class="section-title2 text-center pr-0">New Arrivals</h2>
        </div>
       <!-- PORTFOLIO FILTER -->
        <div class="port-filter text-center">

            <a href="#" class="filter mlr-10 active" data-filter="*">All</a>
            <?php foreach ($category as $cat) :?>

            <a href="#" class="filter mlr-10" data-filter=".<?= $cat->id ?>"><?= $cat->title ?></a>
        <?php endforeach;?>
        </div>

        <p> ia am here </p>

        <!-- ITEMS GRID -->
        <ul class="port-grid port-grid-gut-30 clearfix" id="items-grid">

            <?php foreach ($products as $product):?>
                <!-- Item 2 -->
                <li class="port-item mix <?= $product->category_id?>">
                    <div class="post-prev-img">
                        <a href="shop-single.html">
                            <?php
                            $images = $product->images;
                            if (isset($images[0])) {
                                echo Html::img($images[0]->getUrl(), ['style' => 'height:344px;']);
                            }
                            else {

                                echo '<img src="images/shop/items/item1.jpg" alt="img">';
                            }
                            ?>
                        </a>
                    </div>

                    <div class="post-prev-title mb-5 text-center">
                        <h3><a class="font-norm a-inv" href="shop-single.html"><?= $product->title?></a></h3>
                    </div>

                    <div class="shop-price-cont text-center">
                        <strong>$<?= $product->price ?></strong>
                    </div>

                    <div class="post-prev-more-cont clearfix mb-60">
                        <div class="shop-add-btn-cont">

                            <?= Html::a('Add to the scart', ['cart/add', 'id' => $product->id], ['class' => 'button medium full-rounded gray-light shop-add-btn'])?>

                        </div>
                        <div class="shop-sub-btn-cont" >
                            <a href="#" class="post-prev-count"><span aria-hidden="true" class="icon_heart_alt"></span></a>
                            <a href="#" class="post-prev-count dropdown-toggle" data-toggle="dropdown" aria-expanded="false" >
                                <span aria-hidden="true" class="social_share"></span>
                            </a>
                            <ul class="social-menu dropdown-menu dropdown-menu-right" role="menu">
                                <li><a href="#"><span aria-hidden="true" class="social_facebook"></span></a>
                                </li>
                                <li><a href="#"><span aria-hidden="true" class="social_twitter"></span></a></li>
                                <li><a href="#"><span aria-hidden="true" class="social_dribbble"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </li>
            <?php endforeach; ?>



        </ul>
    </div>
</div>

<?php echo \common\widgets\DbText::widget([
    'key' => 'ads-example'
]) ?>

