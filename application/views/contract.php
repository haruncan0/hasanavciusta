<main>
    <div class="main-part">
        <section class="breadcrumb-part" data-stellar-offset-parent="true" data-stellar-background-ratio="0.5"
            style="background-image: url('<?php echo empty($site_setting->image_path) ? site_url('assets/front/images/banner/banner.png') : webp_support(site_url($site_setting->image_path)) ?>');">
            <div class="container">
                <div class="breadcrumb-inner">
                    <h1><?php echo empty($contract->title) ? '' : $contract->title ?></h1>

                    <div class="breadcrumb_info">
                        <ul>
                            <li><a title="Anasayfa" href="<?php echo site_url() ?>">Anasayfa</a></li>
                            <li><?php echo empty($contract->title) ? '' : $contract->title ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="home-icon inner_page">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="agreement-name">
                            <h2><?php echo empty($contract->title) ? '' : $contract->title ?></h2>
                        </div>
                        <div class="agreement-description">
                            <?php echo empty($contract->description) ? '' : $contract->description ?>
                        </div>
                    </div>
                </div>                
            </div>
        </section>
    </div>
</main>