<?php
use yii\helpers\Html;
use frontend\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
    <?php $this->beginBody() ?>
    <div id="loader-overflow">
        <div id="loader3" class="loader-cont">Please enable JS</div>

    </div>
    <div id="wrap" class="boxed ">
        <div class="grey-bg">

            <header id="nav" class="header header-1 header-shop">
                <div class="header-wrapper">
                    <div class="container-m-30 clearfix">
                        <div class="logo-row">

                            <!-- LOGO -->
                            <div class="logo-container-2">
                                <div class="logo-2">
                                    <a href="index.html" class="clearfix">
                                        <img src="images/logo1.png" class="logo-img" alt="Logo">
                                    </a>
                                </div>
                            </div>
                            <!-- BUTTON -->
                            <div class="menu-btn-respons-container">
                                <button id="menu-btn" type="button" class="navbar-toggle btn-navbar collapsed" data-toggle="collapse" data-target="#main-menu .navbar-collapse">
                                    <span aria-hidden="true" class="icon_menu hamb-mob-icon"></span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- MAIN MENU CONTAINER -->

                    <?= \frontend\widgets\MenuWidget::widget();?>
                    <!-- END main-menu-container -->





                    <!-- SEARCH READ DOCUMENTATION -->
                    <ul class="cd-header-buttons">
                        <li><a class="cd-search-trigger" href="#cd-search"><span></span></a></li>
                    </ul> <!-- cd-header-buttons -->
                    <div id="cd-search" class="cd-search">
                        <form class="form-search" id="searchForm" action="page-search-results.html" method="get">
                            <input type="text" value="" name="q" id="q" placeholder="Search...">
                        </form>
                    </div>

                </div>
                <!-- END header-wrapper -->

            </header>




                    <?= $content?>

        </div>
    </div>




    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
