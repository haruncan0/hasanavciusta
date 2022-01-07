<main>
    <div class="main-part">
        <section class="breadcrumb-part" data-stellar-offset-parent="true" data-stellar-background-ratio="0.5"
        style="background-image: url('<?php echo empty($site_setting->image_path) ? site_url('assets/front/images/banner/banner.png') : webp_support(site_url($site_setting->image_path)) ?>');">
        <div class="container">
            <div class="breadcrumb-inner">
                <h1><?php echo empty($site_setting->banner) ? '' : $site_setting->banner ?></h1>
                <div class="breadcrumb_info">
                    <ul>
                        <li><a href="<?php echo site_url() ?>">Anasayfa</a></li>
                        <li>Galeri</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <?php if(!empty($gallery)) { ?>
        <section class="home-icon inner_page list_page">
            <div class="container">
                <div class="gallery-royal">

                    <div class="row">
                        <?php foreach ($gallery  as $key => $value) { ?>

                            <div class="col-md-6 col-sm-6 col-xs-6 col-cst-12">
                                <div class="gallery-megic-blog">
                                    <a title="Hasan Avcı Galeri Resimi" href="<?php echo webp_support(site_url($value->image_path)) ?>" data-fancybox="gallery">
                                        <img src="<?php echo webp_support(site_url($value->image_path)) ?>" alt="" class="animated">
                                        <div class="gallery-overlay">
                                            <div class="gallery-overlay-inner">
                                                <i class="fa fa-search-plus" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                        <?php } ?>
                    </div>
                </div>
            </div>
        </section>
    <?php } ?>
</div>
</main>