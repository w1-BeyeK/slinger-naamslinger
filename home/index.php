<?php
/**
 * Created by PhpStorm.
 * User: Kevin
 * Date: 9/30/2018
 * Time: 1:26 PM
 */
?>
<!DOCTYPE html>
<html>
<head>
    <title>Partycadeaushop</title>
    <link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!-- Custom Theme files -->
    <!--theme-style-->
    <link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!--//theme-style-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Cadeau shop, Cadeaus" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!--theme-style-->
    <link href="../css/style4.css" rel="stylesheet" type="text/css" media="all" />
    <!--//theme-style-->
    <script src="../js/jquery.min.js"></script>
    <!--- start-rate---->
    <script src="../js/jstarbox.js"></script>
    <link rel="stylesheet" href="../css/jstarbox.css" type="text/css" media="screen" charset="utf-8" />
    <script type="text/javascript">
        jQuery(function() {
            jQuery('.starbox').each(function() {
                var starbox = jQuery(this);
                starbox.starbox({
                    average: starbox.attr('data-start-value'),
                    changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
                    ghosting: starbox.hasClass('ghosting'),
                    autoUpdateAverage: starbox.hasClass('autoupdate'),
                    buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
                    stars: starbox.attr('data-star-count') || 5
                }).bind('starbox-value-changed', function(event, value) {
                    if(starbox.hasClass('random')) {
                        var val = Math.random();
                        starbox.next().text(' '+val);
                        return val;
                    }
                })
            });
        });
    </script>
    <!---//End-rate---->

</head>
<body>
    <?php include_once("../menu.php");?>
    <?php include_once("../banner.php");?>
    <div class="content">
        <div class="container">
            <div class="content-top">
                <div class="col-md-6 col-md">
                    <div class="col-1">
                        <a href="single.html" class="b-link-stroke b-animate-go  thickbox">
                            <img src="../images/pi.jpg" class="img-responsive" alt=""/><div class="b-wrapper1 long-img"><p class="b-animate b-from-right    b-delay03 ">Lorem ipsum</p><label class="b-animate b-from-right    b-delay03 "></label><h3 class="b-animate b-from-left    b-delay03 ">Trendy</h3></div></a>

<!--                        -<a href="single.html"><img src="../images/pi.jpg" class="img-responsive" alt=""></a>-->
                    </div>
                    <div class="col-2">
                        <span>Hot Deal</span>
                        <h2><a href="single.html">Luxurious &amp; Trendy</a></h2>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years</p>
                        <a href="single.html" class="buy-now">Buy Now</a>
                    </div>
                </div>
                <div class="col-md-6 col-md1">
                    <div class="col-3">
                        <a href="single.html"><img src="../images/pi1.jpg" class="img-responsive" alt="">
                            <div class="col-pic">
                                <p>Lorem Ipsum</p>
                                <label></label>
                                <h5>For Men</h5>
                            </div></a>
                    </div>
                    <div class="col-3">
                        <a href="single.html"><img src="../images/pi2.jpg" class="img-responsive" alt="">
                            <div class="col-pic">
                                <p>Lorem Ipsum</p>
                                <label></label>
                                <h5>For Kids</h5>
                            </div></a>
                    </div>
                    <div class="col-3">
                        <a href="single.html"><img src="../images/pi3.jpg" class="img-responsive" alt="">
                            <div class="col-pic">
                                <p>Lorem Ipsum</p>
                                <label></label>
                                <h5>For Women</h5>
                            </div></a>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <!--products-->
            <div class="content-mid">
                <h3>Trending Items</h3>
                <label class="line"></label>
                <div class="mid-popular">
                    <div class="col-md-4 item-grid simpleCart_shelfItem">
                        <div class=" mid-pop">
                            <div class="pro-img">
                                <img src="../images/pi1.jpg" class="img-responsive" alt="">
                                <div class="zoom-icon ">
                                    <a class="picture" href="images/pc.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox"><i class="glyphicon glyphicon-search icon "></i></a>
                                    <a href="single.html"><i class="glyphicon glyphicon-menu-right icon"></i></a>
                                </div>
                            </div>
                            <div class="mid-1">
                                <div class="women">
                                    <div class="women-top">
                                        <span>Women</span>
                                        <h6><a href="single.html">Sed ut perspiciati</a></h6>
                                    </div>
                                    <div class="img item_add">
                                        <a href="#"><img src="../images/ca.png" alt=""></a>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="mid-2">
                                    <p ><label>$100.00</label><em class="item_price">$70.00</em></p>
                                    <div class="block">
                                        <div class="starbox small ghosting"> </div>
                                    </div>

                                    <div class="clearfix"></div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 item-grid simpleCart_shelfItem">
                        <div class=" mid-pop">
                            <div class="pro-img">
                                <img src="../images/pi1.jpg" class="img-responsive" alt="">
                                <div class="zoom-icon ">
                                    <a class="picture" href="images/pc.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox"><i class="glyphicon glyphicon-search icon "></i></a>
                                    <a href="single.html"><i class="glyphicon glyphicon-menu-right icon"></i></a>
                                </div>
                            </div>
                            <div class="mid-1">
                                <div class="women">
                                    <div class="women-top">
                                        <span>Women</span>
                                        <h6><a href="single.html">Sed ut perspiciati</a></h6>
                                    </div>
                                    <div class="img item_add">
                                        <a href="#"><img src="../images/ca.png" alt=""></a>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="mid-2">
                                    <p ><label>$100.00</label><em class="item_price">$70.00</em></p>
                                    <div class="block">
                                        <div class="starbox small ghosting"> </div>
                                    </div>

                                    <div class="clearfix"></div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 item-grid simpleCart_shelfItem">
                        <div class=" mid-pop">
                            <div class="pro-img">
                                <img src="../images/pi1.jpg" class="img-responsive" alt="">
                                <div class="zoom-icon ">
                                    <a class="picture" href="images/pc.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox"><i class="glyphicon glyphicon-search icon "></i></a>
                                    <a href="single.html"><i class="glyphicon glyphicon-menu-right icon"></i></a>
                                </div>
                            </div>
                            <div class="mid-1">
                                <div class="women">
                                    <div class="women-top">
                                        <span>Women</span>
                                        <h6><a href="single.html">Sed ut perspiciati</a></h6>
                                    </div>
                                    <div class="img item_add">
                                        <a href="#"><img src="../images/ca.png" alt=""></a>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="mid-2">
                                    <p ><label>$100.00</label><em class="item_price">$70.00</em></p>
                                    <div class="block">
                                        <div class="starbox small ghosting"> </div>
                                    </div>

                                    <div class="clearfix"></div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="clearfix"></div>
                </div>
            </div>
            <!--//products-->
        </div>
        <?php include_once("../footer.php"); ?>
    </div>
</body>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="../js/simpleCart.min.js"> </script>
<!-- slide -->
<script src="../js/bootstrap.min.js"></script>
<!--light-box-files -->
<script src="../js/jquery.chocolat.js"></script>
<link rel="stylesheet" href="../css/chocolat.css" type="text/css" media="screen" charset="utf-8">
<!--light-box-files -->
<script type="text/javascript" charset="utf-8">
    $(function() {
        $('a.picture').Chocolat();
    });
</script>
</html>