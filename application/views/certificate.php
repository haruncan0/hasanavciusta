<main>
    <div class="main-part">
        <section class="breadcrumb-part" data-stellar-offset-parent="true" data-stellar-background-ratio="0.5"
            style="background-image: url('<?php echo empty($site_setting->image_path) ? site_url('assets/front/images/banner/banner.png') : webp_support(site_url($site_setting->image_path)) ?>');">
            <div class="container">
                <div class="breadcrumb-inner">
                    <h1><?php echo empty($site_setting->banner) ? '' : $site_setting->banner ?></h1>

                    <div class="breadcrumb_info">
                        <ul>
                            <li><a title="Anasayfa" href="<?php echo site_url() ?>">Anasayfa</a></li>
                            <li>Sertifikalarımız</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <?php if(!empty($certificate)) { ?>
        <section class="home-icon inner_page certificate_page bg-skeen">
            <div class="container">
                <div class="row">
                    <?php foreach ($certificate as $key => $value) { ?>
                        
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="certifica">
                            <div class="certificate-img">
                                <a title="<?php echo empty($value->title) ? '' : $value->title ?>" data-fancybox="certificate" data-caption="<?php echo empty($value->title) ? '' : $value->title ?>" href="<?php echo webp_support(site_url($value->image_path)) ?>"><img
                                        src="<?php echo webp_support(site_url($value->image_path)) ?>" alt="<?php echo empty($value->title) ? '' : $value->title ?>"></a>
                            </div>
                            <div class="certificate-name"><?php echo empty($value->title) ? '' : $value->title ?></div>
                        </div>
                    </div>
                    
                <?php } ?>
                </div>
            </div>
        </section>
    <?php } ?>
    </div>
</main>