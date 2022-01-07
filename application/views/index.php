<main>
    <div class="main-part">
        <?php if(!empty($slider)) { ?>

        <section class="home-slider">
            <div class="tp-banner-container">
                <div class="tp-banner">
                    <ul>
                        <?php foreach ($slider as $key => $value) { ?>
                            
                        <li data-transition="zoomout" data-slotamount="2" data-masterspeed="1000" data-thumb=""
                            data-saveperformance="on" data-title="Slide">
                            <img src="<?php echo site_url('assets/front/images/icon/dummy.png') ?>" alt="image" data-lazyload="<?php echo webp_support(site_url($value->image_path)) ?>"
                                data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">
                            <div class="tp-caption very_large_text" data-x="center" data-hoffset="0"
                                data-y="250"
                                data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                                data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                data-speed="1000" data-start="500" data-easing="Back.easeInOut"
                                data-endspeed="300"><?php echo $value->title ?>
                            </div>
                            <!-- LAYERS -->
                            <div class="tp-caption medium_text" data-x="center" data-hoffset="0" data-y="340"
                                data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                                data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                data-speed="1000" data-start="500" data-easing="Back.easeInOut"
                                data-endspeed="300"><?php echo $value->description ?>
                            </div>
                            <!-- LAYERS -->
                            <?php if(!empty($value->link)) { ?>
                            <div class="tp-caption" data-x="center" data-hoffset="0" data-y="425"
                                data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                                data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                data-speed="1000" data-start="500" data-easing="Back.easeInOut"
                                data-endspeed="300"><a href="<?php echo site_url('urun-detay/'.$value->link) ?>" class="button-white"><?php echo $value->button_text ?></a>
                            </div>
                        <?php } ?>
                        </li>
                    <?php } ?>

                    </ul>
                </div>
            </div>
        </section>

    <?php } ?>
        <section id="reach-to" class="welcome-part home-icon">
            <div class="icon-default">
                <a title="Asagı" href="#reach-to" class="scroll"><img src="<?php echo site_url('assets/front/images/icon/scroll-arrow.png') ?>" alt="icon"></a>
            </div>
            <div class="container">
                <div class="build-title">
                    <h1><?php echo $homepage->about_title ?></h1>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12 wow fadeInDown" data-wow-duration="1000ms"
                        data-wow-delay="300ms">
                        <?php echo $homepage->about_description ?>
                        <p><a title="Devamını Oku" href="<?php echo 'hakkimizda' ?>" class="btn-black">Devamını Oku</a></p>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1000ms"
                        data-wow-delay="300ms">
                        <img class="homa_about_img" src="<?php echo webp_support(site_url($homepage->image_path)) ?>" alt="Hasan Avcı Usta">
                    </div>
                </div>
            </div>
        <?php if(!empty($about_icons)) { ?>

            <div class="float-main">
                <?php foreach ($about_icons as $key => $value) { ?>
                    
                <div class="<?php if($key == 0) {echo 'icon-top-left';} else if ($key == 1) {echo 'icon-bottom-left';} else if ($key == 2) {echo 'icon-top-right';} else {echo 'icon-bottom-right';} ?>">
                    <img src="<?php echo site_url($value->image_path) ?>" alt="icon">
                </div>

                <?php } ?>
            </div>
        <?php } ?>
        </section>

    <?php if(!empty($product)) { ?>

        <section class="dishes banner-bg invert invert-black home-icon wow fadeInDown hm_product"
            data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="icon-default icon-black">
                <img src="<?php echo site_url('assets/front/images/icon/icon5.png') ?>" alt="icon">
            </div>
            <div class="container">
                <div class="build-title">
                    <h2><?php echo $homepage->product_title ?></h2>
                    <span><?php echo $homepage->product_description ?></span>
                </div>
                <div class="owl-carousel owl-theme" data-loop="false" data-items="3" data-laptop="3"
                    data-tablet="2" data-small="1" data-mobile="1" data-nav="true" data-dots="false" data-autoplay="false"
                    data-speed="1000" data-autotime="5000">

                    <?php foreach ($product as $key => $value) { ?>
                        
                        <div class="product-blog">
                            <a title="<?php echo $value->title ?>" href="<?php echo site_url('urun-detay/'.$value->slug) ?>">
                                <img src="<?php echo webp_support(site_url($value->image_path)) ?>" alt="<?php echo $value->title ?>">
                                <div class="product_name"><?php echo $value->title ?></div>
                                <p><?php echo $value->cover_text ?></p>
                            </a>
                        </div>

                    <?php } ?>
                    
                </div>
            </div>
            <div class="product_all_btn">
                <a title="Tümünü Gör" href="<?php echo site_url('urunlerimiz') ?>">Tümünü Gör</a>
            </div>
        </section>

    <?php } ?>

        <section class="food-hours home-icon wallpaper_back">
            <div class="container">
                <div class="item_1285">
                    <div class="title">
                        <h2><?php echo $homepage->ticket_title ?></h2>
                    </div>
                </div>
                <?php if(!empty($ticket)) { ?>
                <div class="food-blog">
                    <div class="custom_row">

                        <?php foreach ($ticket as $key => $value) { ?>
                            
                        <div class="col-md-3 col-sm-6 col-xs-12 food-mxs">
                            <div class="food-blog-inner">
                                <div class="food-item">
                                    <div class="food-item-inner svg_icon">
                                        <img src="<?php echo site_url($value->image_path) ?>" alt="<?php echo $value->title ?>">
                                    </div>
                                </div>
                                <h2><?php echo $value->title ?></h2>
                            </div>
                        </div>

                    <?php } ?>

                    </div>
                </div>
            <?php } ?>
            </div>
        </section>

        <section class="bg-skeen feature-list text-center home-icon hm_properties">
            <div class="icon-default icon-skeen">
                <img src="<?php echo site_url('assets/front/images/icon/icon22.png') ?>" alt="icon">
            </div>
            <div class="container">
                <div class="build-title">
                    <h2><?php echo $features->title ?></h2>
                    <span><?php echo $features->description ?></span>
                </div>
                <div class="row">
                    <div class="col-12 properties_area">
                        <img src="<?php echo webp_support(site_url($features->image_path)) ?>" alt="Özelliklerimiz">
                    </div>
                </div>
            </div>
        </section>

<?php if(!empty($gallery)) { ?>
    
        <section class="home-icon home_gallery wow fadeInDown" data-wow-duration="1000ms"
            data-wow-delay="300ms">
            <div class="icon-default">
                <img src="<?php echo site_url('assets/front/images/icon/gallery.png') ?>" alt="icon">
            </div>
            <div class="container">
                <div class="build-title">
                    <h2><?php echo $homepage->gallery_title ?></h2>
                </div>
            </div>
            <div class="gallery-slider">
                <div class="owl-carousel owl-theme" data-loop="false" data-items="4" data-laptop="3"
                    data-tablet="3" data-small="2" data-mobile="1" data-nav="false" data-dots="true" data-autoplay="false"
                    data-speed="2000" data-autotime="3000">

                    <?php foreach ($gallery as $key => $value) { ?>
                        
                    <div class="item">
                        <a title="Galeri Resimlerimiz" href="<?php echo webp_support(site_url($value->image_path)) ?>" data-fancybox="gallery">
                            <img src="<?php echo webp_support(site_url($value->image_path)) ?>" alt="Galeri Resimlerimiz" class="animated">
                            <div class="gallery-overlay">
                                <div class="gallery-overlay-inner">
                                    <i class="fa fa-search-plus" aria-hidden="true"></i>
                                </div>
                            </div>
                        </a>
                    </div>

                <?php } ?>

                </div>
            </div>
            <div class="gallery_all">
                <a title="Tümünü Gör" href="<?php echo site_url('galerimiz') ?>">
                    Tümünü Gör
                </a>
            </div>
        </section>

    <?php } ?>
    </div>
</main>