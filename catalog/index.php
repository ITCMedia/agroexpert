<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Комбикорма</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/css/style.css" rel="stylesheet"/>
    <link href="/css/font-awesome/css/all.min.css" rel="stylesheet">
    <link href="/css/font-awesome/css/fontawesome.min.css" rel="stylesheet">
</head>
<body>
<? require(__DIR__ . '/../header.php'); ?>

<section class="breadcrumb">
    <div class="container">
        <ul itemscope itemtype="http://schema.org/BreadcrumbList">
            <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                <a itemscope itemtype="http://schema.org/Thing" itemprop="item" href="">
                    <span itemprop="name">Главная</span>
                </a>
                <meta itemprop="position" content="1"/>
            </li>
            <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                <span itemprop="name">Корма</span>
            </li>
        </ul>
    </div>
</section>

<section class="content cor-buyers">
    <div class="container">
        <div class="row no-gutters">
            <h1>Комбикорма</h1>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-4">
                <div class="cor-buyers__sidebar">
                    <p>Все линейки комбикормов обогащены микроэлементами, витаминами и прочими полезными веществами, но
                        в разных пропорциях. Поэтому и цена на комбикорма различается. У каждой линейки комбикормов своя
                        задача, цена и результативность.</p>
                    <a class="recipe-btn" target="_blank" href="https://sekhanov.github.io/agro-angular-quality-calc/">Расчитать
                        рецепт</a>
                    <p class="cor-buyers__sidebar__remark">Составим рецепт и предложим лучшую цену на рынке для <a
                                href="#" class="greenlink">корпоративных покупателей</a></p>
                </div>
            </div>
            <div class="col-xl-8 col-lg-8 col-md-8">
                <div class="cor-buyers__content">
                    <p><b>Комбикормовый завод “Агро-Эксперт” производит комбикорма для птицы, свиней, крупного рогатого
                            скота, коз и кроликов. Под каждый вид животных разработаны комбикорма, которые объединены в
                            линейки.</b></p>
                    <p class="mb-0 pb-1 buyers_title">Эконом</p>
                    <p class="mb-2">Комбикормовый концентрат (КК), разработанный в качестве дополнительного корма. Его
                        стоит давать совместно с естественными кормами. Это позволит снизить издержки при общем
                        увеличении кормоотдачи.</p>
                    <p class="mb-0 pb-1 buyers_title">Баланс</p>
                    <p class="mb-2">Хорошо сбалансированный комбикормовый концентрат (КК), который может стать основным
                        кормом, но все еще требует применения естественных кормов. При переходе с низкокачественных
                        кормовых смесей продуктивность животных может вырасти <b>до 20%.</b></p>
                    <p class="mb-0 pb-1 buyers_title">Сытный</p>
                    <p class="mb-2">Полноценный комбикорм (ПК), разработанный специально для частных подворий и
                        небольших фермерских хозяйств, которые не имеют возможности закупать/заготавливать, хранить и
                        использовать естественные корма в нужных объемах. При переходе с кормовых смесей возможен рост
                        продуктивности животных <b>до 30%</b>.</p>
                    <p class="mb-0 pb-1 buyers_title">Сытный PRO</p>
                    <p class="mb-2">Полноценный комбикорм (ПК), обогащенный большим количеством минералов и полезных
                        веществ без опасной химии. Профессиональный комбикорм, разработанный для ускоренного развития
                        животных, набора веса и большей продуктивности животных в условиях промышленного
                        производства. </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="product_catalog">
    <div class="container">
        <div class="row">
            <ul class="nav nav-tabs tabs-catalog">
                <li class="active">
                    <a data-toggle="animals tab" href="#panel1">Для KPC<sup>10</sup></a>
                </li>
                <li>
                    <a data-toggle="animals tab" href="#panel2">Для коз и MPC<sup>5</sup></a>
                </li>
                <li>
                    <a data-toggle="animals tab" href="#panel3">Для птицы<sup>8</sup></a>
                </li>
                <li>
                    <a data-toggle="animals tab" href="#panel4">Для кроликов<sup>2</sup></a>
                </li>
                <li>
                    <a data-toggle="animals tab" href="#panel5">Для свиней<sup>4</sup></a>
                </li>
            </ul>
        </div>
        <div class = "row filter-cat">
            <ul>
                <li class = "active"><a href = "">Все</a></li>
                <li><a href = "">Эконом</a></li>
                <li><a href = "">Баланс</a></li>
                <li><a href = "">Сытный<sup>ТМ</sup></a></li>
                <li><a href = "">Сытный Pro<sup>ТМ</sup></a></li>
            </ul>
            <div class = "filter-cat__hint">Более 40 видов кормов</div>
        </div>
        <div class="row tab-content">
            <div id="panel1" class="tab-pane fade active show">
                <?
                $arrImg = array("/images/product-1.jpg", "/images/product-2.jpg","/images/product-1.jpg", "/images/product-2.jpg","/images/product-1.jpg", "/images/product-2.jpg");
                for($i = 0; $i<5; $i++ ) {?>
                    <div class="col-4 product-cart">
                        <div class="row">
                            <div class="product-discount col-6">
                                <div class="ribbon">
                                    -25%
                                </div>
                            </div>
                            <div class="product-discount col-6">
                                <i class="fas fa-heart float-right like"></i>
                            </div>
                        </div>
                        <div class="product-img col-sm-8 offset-sm-2">
                            <img src="<?=$arrImg[$i]?>" width="200" height="300">
                        </div>
                        <div class="product-section__name">для коров</div>
                        <div class="product__name">Сытный™ PRO КРС Удой Плюс - КК-60</div>
                        <div class="product__info">Ожидаемый удой: 17 л/сутки</div>
                        <div class="row">
                            <div class="col-6">
                                <p class="cross-text">750</p>
                                <p class="price-text">от 275 ₽</p>
                            </div>
                            <div class="col-6">
                                <p class="weight-text">Фасовка: 100 кг </p>
                            </div>
                        </div>
                        <div class="row justify-content-md-center mb-1">
                            <button class="custom-success">В корзину</button>
                        </div>
                        <div class="row oneclick-bye__block justify-content-md-center mb-3">
                            <p>Купить <a href="#" class="greenlink">в один клик</a></p>
                        </div>
                    </div>
                <?}?>
            </div>

            <!--
            <div id="panel2" class="tab-pane">
                <p>Панель 2</p>
            </div>
            <div id="panel3" class="tab-pane">
                <p>Панель 3</p>
            </div>-->
        </div>
        <div class = "row filter-cat filter-cat__bottom">
            <ul>
                <li class = "active"><a href = "">Для птицы</a></li>
                <li><a href = "">Для телят</a></li>
                <li><a href = "">Для крупного рогатого скота</a></li>
                <li><a href = "">Для коз и МРС</a></li>
                <li><a href = "">Для свиней</a></li>
                <li><a href = "">Для кроликов</a></li>
                <li><a href = "">Баланс</a></li>
                <li><a href = "">Сытный<sup>ТМ</sup></a></li>
                <li><a href = "">Сытный Pro<sup>ТМ</sup></a></li>
            </ul>
        </div>
    </div>
</section>

<section class="payment-method__block">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-4">
                <h3>Мы каждый день «едим» комбикорм</h3>
            </div>
            <div class="col-xl-8 col-lg-8 col-md-8">
                <div class="cor-buyers__content">
                    <p>Руководство “Агро-Эксперт” не поддерживает стремление производителей сельскохозяйственной продукции к сверхприбылям за счет химических добавок, которые опасны для здоровья людей. 
Перед тем как купить максимально эффективные зарубежные комбикорма и добавить их в рацион животных или птиц, подумайте, за счет чего достигается эта эффективность? 
                    </p>
                    <p>
                    Подумайте также и о том, как эта “эффективность” скажется на ваших детях, друзьях и знакомых, тех людях, которые покупают вашу продукцию по пути домой.  
                    </p>
                </div>
            </div>
        </div>
        <div class = "row">
            <div class = "col-xl-12">
                <div class = "cat-citata">
                    <p>Великий Гиппократ говорил:</p>
                    <div class = "cat-citata__wrap">
                        <img class = "left" src = "/images/bird_l.png" />
                        <p>Если отца болезни нужно еще поискать,<br/> то ее мать известна точно - это плохая еда!</p>
                        <img class = "right" src = "/images/bird_r.png" />
                    </div>    
                </div>
            </div>
        </div>
    </div>
</section>

<? require(__DIR__ . '/../footer.php'); ?>
</body>
</html>