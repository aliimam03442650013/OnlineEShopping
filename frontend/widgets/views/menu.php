<?php
/**
 * Created by PhpStorm.
 * User: Devoloper
 * Date: 27.04.2017
 * Time: 10:32
 */

use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\Helpers\Url;
?>



<div class="main-menu-container">

    <div class="container-m-30 clearfix">

        <!-- MAIN MENU -->
        <div id="main-menu">
            <div class="navbar navbar-default" role="navigation">

                <?php
                NavBar::begin([
                    'options' => [
                        'class' => 'collapse collapsing navbar-collapse right-1024',
                    ],
                ]);
                $menuItems = [
                    ['label' => 'About', 'url' => ['/site/about']],
                    ['label' => 'Contact', 'url' => ['/site/contact']],
                ];
                if (Yii::$app->user->isGuest) {
                    $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
                    $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
                } else {
                    $menuItems[] = [
                        'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                        'url' => ['/site/logout'],
                        'linkOptions' => ['data-method' => 'post']
                    ];
                }
                echo Nav::widget([
                    'options' => ['class' => 'navbar-nav navbar-right'],
                    'items' => $menuItems,
                ]);
                NavBar::end();
                ?>

            </div>
        </div>
        <!-- END main-menu -->

    </div>
    <!-- END container-m-30 -->

</div>
<div class="cd-header-buttons header-cart-cont">
    <a href="<?=Url::toRoute('cart/list')?>" class="icon_cart_wrap"><i class="icon icon-ecommerce-bag-check"></i>
    <span class="cart_total"><?= $itemsInCart = Yii::$app->cart->getCount()?></span>
    </a>
</div>

