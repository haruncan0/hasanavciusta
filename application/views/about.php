<main class="about_page">
    <div class="main-part">
        <section class="breadcrumb-part" data-stellar-offset-parent="true" data-stellar-background-ratio="0.5"
            style="background-image: url('<?php echo empty($site_setting->image_path) ? site_url('assets/front/images/banner/banner.png') : webp_support(site_url($site_setting->image_path)) ?>');">
            <div class="container">
                <div class="breadcrumb-inner">
                    <h1><?php echo empty($site_setting->banner) ? '' : $site_setting->banner ?></h1>

                    <div class="breadcrumb_info">
                        <ul>
                            <li><a title="Anasayfa" href="<?php echo site_url() ?>">Anasayfa</a></li>
                            <li>Hakkımızda</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="welcome-part home-icon wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">

            <div class="container">
                <div class="build-title">
                    <h2><?php echo empty($about->title) ? '' : $about->title ?></h2>
                    <h3><?php echo empty($about->sub_title) ? '' : $about->sub_title ?></h3>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <?php echo empty($about->description) ? '' : $about->description ?>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <img class="homa_about_img" src="<?php echo webp_support(site_url($about->image_path)) ?>" alt="Meşhur Akçaabat Köftecisi">
                    </div>
                </div>
            </div>
        </section>

        <section class="food-hours home-icon wallpaper_back">
            <div class="container">
                <div class="item_1285">
                    <div class="title">
                        <h2><?php echo empty($about->ticket_title) ? '' : $about->ticket_title ?></h2>
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
                                        <img src="<?php echo site_url($value->image_path) ?>" alt="<?php echo empty($value->title) ? '' : $value->title ?>">
                                    </div>
                                </div>
                                <h2><?php echo empty($value->title) ? '' : $value->title ?></h2>
                            </div>
                        </div>

                    <?php } ?>

                    </div>
                </div>
            <?php } ?>
            </div>
        </section>
    </div>
</main>