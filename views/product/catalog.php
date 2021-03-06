<?php include_once ROOT."/layouts/header.php"?>

<div class="breadcrumbs">
    <div class="container">
        <ol class="breadcrumb breadcrumb1 animated wow slideInLeft animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">
            <li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
            <li class="active">Products</li>
        </ol>
    </div>
</div>

<div class="products">
    <div class="container">
        <h2><? if(isset($category)){
            echo isset($subcategoryName);
                echo (isset($subcategory))? $subCategoryName : $categoryName;
            } else {
                echo "Каталог";
            } ?>
        </h2>


        <div class="col-md-9">
            <?php foreach ($productArr as $product) :?>

                <div data-id="<?= $product['id'] ?>" class="col-md-4 col-md4 one-product">
                    <a href="<?= SITE_ROOT ?>product/detail/<?= $product['id'] ?>" class="col-md1 simpleCart_shelfItem">
                        <div class="img-wrap" href="single.html">
                            <img class="img-responsive" src="<?= $product['image']?>" alt="" />
                        </div>
                        <h3>
                            <object>
                                <a href="single.html"><?= $product['name'] ?></a>
                            </object>
                        </h3>
                        <div class="price">
                            <h5 class="item_price"><?= $product['price']?> <span> грн</span></h5>
                            <object>
                                <a href="#" class="item_add">Купить</a>
                            </object>
                            <div class="clearfix"> </div>
                        </div>
                    </a>
                </div>

            <?php endforeach; ?>

            <?= Pagination::rendPagination($page, $pages) ?>
        </div>

        <div class="col-md-3 product-bottom">
            
            <div class=" rsidebar span_1_of_left">
                <h3 class="cate">Категории</h3>
                <ul class="menu-drop">

                    <? foreach ($categories as $value) : ?>
                    <li class="item2"><a href="<?= $value['id']?>"><?= $value['name']?></a>
                        <ul class="cute">
                            <? foreach ($value['subcategory'] as $subcategory) : ?>
                            <li class="subitem1"><a href="<?= SITE_ROOT."product/".$value['id'].'/'.$subcategory['id']?>"><?= $subcategory['name'] ?></a></li>
                            <? endforeach; ?>
                        </ul>

                    </li>
                    <? endforeach; ?>

                </ul>
            </div>
            <!--initiate accordion-->
            <script type="text/javascript">
                $(function() {
                    var menu_ul = $('.menu-drop > li > ul'),
                        menu_a  = $('.menu-drop > li > a');
                    menu_ul.hide();
                    menu_a.click(function(e) {
                        e.preventDefault();
                        if(!$(this).hasClass('active')) {
                            menu_a.removeClass('active');
                            menu_ul.filter(':visible').slideUp('normal');
                            $(this).addClass('active').next().stop(true,true).slideDown('normal');
                        } else {
                            $(this).removeClass('active');
                            $(this).next().stop(true,true).slideUp('normal');
                        }
                    });

                });
            </script>
            <!--//menu-->
            <!--seller-->
            <div class="product-bottom">
                <h3 class="cate"></h3>
                <div class="product-go">
                    <div class=" fashion-grid">
                        <a href="single.html"><img class="img-responsive " src="<?= TEMPLATE ?>images/pr.jpg" alt=""></a>
                    </div>
                    <div class=" fashion-grid1">
                        <h6 class="best2"><a href="single.html" >Lorem ipsum dolor sitamet consectetuer  </a></h6>
                        <span class=" price-in1"> $40.00</span>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="product-go">
                    <div class=" fashion-grid">
                        <a href="single.html"><img class="img-responsive " src="<?= TEMPLATE ?>images/pr1.jpg" alt=""></a>
                    </div>
                    <div class=" fashion-grid1">
                        <h6 class="best2"><a href="single.html" >Lorem ipsum dolor sitamet consectetuer  </a></h6>
                        <span class=" price-in1"> $40.00</span>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="product-go">
                    <div class=" fashion-grid">
                        <a href="single.html"><img class="img-responsive " src="<?= TEMPLATE ?>images/pr2.jpg" alt=""></a>
                    </div>
                    <div class=" fashion-grid1">
                        <h6 class="best2"><a href="single.html" >Lorem ipsum dolor sitamet consectetuer  </a></h6>
                        <span class=" price-in1"> $40.00</span>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="product-go">
                    <div class=" fashion-grid">
                        <a href="single.html"><img class="img-responsive " src="<?= TEMPLATE ?>images/pr3.jpg" alt=""></a>
                    </div>
                    <div class=" fashion-grid1">
                        <h6 class="best2"><a href="single.html" >Lorem ipsum dolor sitamet consectetuer  </a></h6>
                        <span class=" price-in1"> $40.00</span>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>

            <!--//seller-->
            <!--tag-->
            <div class="tag">
                <h3 class="cate">Tags</h3>
                <div class="tags">
                    <ul>
                        <li><a href="#">design</a></li>
                        <li><a href="#">fashion</a></li>
                        <li><a href="#">lorem</a></li>
                        <li><a href="#">dress</a></li>
                        <li><a href="#">fashion</a></li>
                        <li><a href="#">dress</a></li>
                        <li><a href="#">design</a></li>
                        <li><a href="#">dress</a></li>
                        <li><a href="#">design</a></li>
                        <li><a href="#">fashion</a></li>
                        <li><a href="#">lorem</a></li>
                        <li><a href="#">dress</a></li>
                        <div class="clearfix"> </div>
                    </ul>
                </div>
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>

<?php include_once ROOT."/layouts/footer.php"?>