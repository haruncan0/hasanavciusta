<main>
    <div class="main-part">
        <section class="breadcrumb-part" data-stellar-offset-parent="true" data-stellar-background-ratio="0.5"
        style="background-image: url('<?php echo empty($site_setting->image_path) ? site_url('assets/front/images/banner/banner.png') : webp_support(site_url($site_setting->image_path)) ?>');">
        <div class="container">
            <div class="breadcrumb-inner">
                <h1><?php echo $item->title ?></h1>

                <div class="breadcrumb_info">
                    <ul>
                        <li><a title="Anasayfa" href="<?php echo site_url() ?>">Anasayfa</a></li>
                        <li><a title="Ürünlerimiz" href="<?php echo site_url('urunlerimiz') ?>">Ürünlerimiz</a></li>
                        <li><?php echo $item->title ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="product_detail_page inner_page">
        <div class="container">
            <div class="custom_row">
                <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">

                    <div class="page-title">
                        <h2><?php echo $item->title ?></h2>
                    </div>

                    <?php if(!empty($item_image)) { ?>
                        <div class="prd-detail-slider">

                            <div class="owl-carousel owl-theme" data-loop="false" data-items="2" data-laptop="2"
                            data-tablet="2" data-small="1" data-mobile="1" data-nav="true" data-dots="false" data-autoplay="false"
                            data-speed="1000" data-autotime="5000">

                            <?php foreach ($item_image as $key => $value) { if($value->rol == 1) { ?>
                                <div class="item">
                                    <a title="Ürün Resimlerimiz" data-fancybox="product" href="<?php echo webp_support(site_url($value->image_path)) ?>"><img
                                        src="<?php echo webp_support(site_url($value->image_path)) ?>" alt="Ürün Resimlerimiz"></a>
                                    </div>
                                <?php } } ?>

                            </div>
                        </div>

                    <?php } ?>
                    <?php if(!empty($item->product_types)) { ?>
                        <div class="product-table">
                            <?php echo $item->product_types ?>
                        </div>
                    <?php } ?>
                    <div class="description">
                        <?php echo $item->description ?>
                    </div>

                    <div class="product-images">

                        <?php if(!empty($item_image)) { ?>
                            <div class="owl-carousel owl-theme" data-loop="false" data-items="2" data-laptop="2"
                            data-tablet="2" data-small="1" data-mobile="1" data-nav="false" data-dots="true" data-autoplay="false"
                            data-speed="1000" data-autotime="5000">

                            <?php foreach ($item_image as $key => $value) { if($value->rol == 2) { ?>
                                <div class="item">
                                    <a title="Yemek Resimlerimiz" data-fancybox="default" href="<?php echo webp_support(site_url($value->image_path)) ?>"><img
                                        src="<?php echo webp_support(site_url($value->image_path)) ?>" alt="Yemek Resimlerimiz"></a>
                                    </div>
                                <?php } } ?>

                            </div>
                        <?php } ?>

                        <div class="storage-conditions">
                            <div class="storage-title">Saklama Koşulları</div>
                            <div class="storage-detail">
                                <?php echo empty($item->storage) ? '' : $item->storage ?>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                    <div class="detail-last">
                        <div class="sticky-area">
                            <?php if(!empty($header_product)) { ?>
                                <div class="last-title">Ürünlerimiz</div>
                                <div class="all-prd">
                                    <ul>
                                        <?php foreach ($header_product as $key => $value) { ?>

                                            <li><a title="<?php echo empty($value->title) ? '' : $value->title ?>" href="<?php echo site_url('urun-detay/'.$value->slug) ?>"><?php echo empty($value->title) ? '' : $value->title ?></a>
                                            </li>

                                        <?php } ?>
                                    </ul>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
</main>