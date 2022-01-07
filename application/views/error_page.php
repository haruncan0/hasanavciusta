<main>
    <div class="main-part">
        <section class="breadcrumb-part" data-stellar-offset-parent="true" data-stellar-background-ratio="0.5"
        style="background-image: url('<?php echo empty($site_setting->image_path) ? site_url('assets/front/images/banner/banner.png') : webp_support(site_url($site_setting->image_path)) ?>');">
        <div class="container">
            <div class="breadcrumb-inner">
                <h1><?php echo $site_setting->banner ?></h1>
                <div class="breadcrumb_info">
                    <ul>
                        <li><a title="Anasayfa" href="<?php echo site_url() ?>">Anasayfa</a></li>
                        <li>Aradığınız Sayfa Bulunamadı</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <?php if(!empty($product)) {?>
        <section class="bg-skeen product_page inner_page list_page">
            <div class="container">
                <div class="build-title">
                    <h2>Aradığınız Kelime Bulunamadı.</h2>
                </div>
                <div class="custom_row">
                    <?php foreach ($product as $key => $value) { ?>

                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 col-cst-12">
                            <div class="product-blog">
                                <a href="<?php echo site_url('urun-detay/'.$value->slug) ?>">

                                    <img title="<?php echo $value->title ?>" src="<?php echo webp_support(site_url($value->image_path)) ?>" alt="<?php echo $value->title ?>">
                                    
                                    <div class="product_name"><?php echo $value->title ?></div>
                                    <p><?php echo $value->cover_text ?></p>
                                </a>
                            </div>
                        </div>
                    <?php }  ?>
                </div>
            </div>
        </section>
    <?php } ?>
</div>
</main>