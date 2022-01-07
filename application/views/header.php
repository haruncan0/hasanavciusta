<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <title><?php echo !empty($site_setting->site_title) ? $site_setting->site_title : 'Meşhur Akçaabat Köftecisi Hasan Avcı' ?></title>

    <meta name="description" content="<?php echo !empty($site_setting->site_description) ? $site_setting->site_description : 'Meşhur Akçaabat Köftecisi Hasan Avcı' ?>">

    <?php echo fav_and_app_icons() ?>

    <link href="<?php echo site_url('assets/front/plugin/bootstrap/bootstrap.css') ?>" rel="stylesheet">
    <link href="<?php echo site_url('assets/front/plugin/font-awesome/font-awesome.css') ?>" rel="stylesheet">
    <link href="<?php echo site_url('assets/front/plugin/revolution-plugin/extralayers.css') ?>" rel="stylesheet">
    <link href="<?php echo site_url('assets/front/plugin/revolution-plugin/settings.css') ?>" rel="stylesheet">
    <link href="<?php echo site_url('assets/front/plugin/owl-carousel/owl.carousel.css') ?>" rel="stylesheet">
    <link href="<?php echo site_url('assets/front/plugin/slick-slider/slick-theme.css') ?>" rel="stylesheet">
    <link href="<?php echo site_url('assets/front/plugin/fancybox/fancybox.min.css') ?>" rel="stylesheet">
    <link href="<?php echo site_url('assets/front/plugin/animation/animate.min.css') ?>" rel="stylesheet">
    <link href="<?php echo site_url('assets/front/css/theme.css') ?>" rel="stylesheet">
    <link href="<?php echo site_url('assets/front/css/responsive.css') ?>" rel="stylesheet">
    <?php if ($page == 'iletisim') { ?>
        <link href="<?php echo site_url('assets/front/css/toastr.css') ?>" rel="stylesheet">
    <?php } ?>
    <meta name="author" content=veriweb.com.tr”/>
    <!-- <meta name="robots" content="noindex, nofollow"> -->
</head>

<body>
    <div id="pre-loader">
        <div class="loader-area">
            <div class="loader-01"></div>
        </div>
    </div>

    <div class="wrapper">
        <header>
            <div class="header-part header-reduce sticky">
                <div id="header_top" class="header-top">
                    <div class="container">
                        <div class="header-top-inner">
                            <div class="header-top-left">
                                <a title="Telefon Numarası" href="tel:<?php echo empty($contact->phone) ? '' : $contact->phone ?>" class="top-contact"><i class="fa fa-phone"
                                    aria-hidden="true"></i>
                                    <span><?php echo empty($contact->phone) ? '' : $contact->phone ?></span>
                                </a>
                                <a title="E-posta Adresi" href="mailto:<?php echo empty($contact->email) ? '' : $contact->email ?>" class="top-contact"><i class="fa fa-envelope"
                                    aria-hidden="true"></i>
                                    <span><?php echo empty($contact->email) ? '' : $contact->email ?></span>
                                </a>
                            </div>
                            <div class="header-top-right">
                                <div class="social-top">
                                    <ul>

                                        <?php if(!empty($contact->facebook)) { ?>
                                            <li>
                                                <a title="Facebook" target="_blank" href="<?php echo empty($contact->facebook) ? '' : $contact->facebook ?>"><i class="fa fa-facebook"
                                                    aria-hidden="true"></i>
                                                </a>
                                            </li>
                                        <?php } ?>
                                        <?php if(!empty($contact->instagram)) { ?>
                                            <li>
                                                <a title="İnstagram" target="_blank" href="<?php echo empty($contact->instagram) ? '' : $contact->instagram ?>"><i
                                                    class="fa fa-instagram" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                        <?php } ?>
                                        <?php if(!empty($contact->twitter)) { ?>
                                            <li>
                                                <a title="Twitter" target="_blank" href="<?php echo empty($contact->twitter) ? '' : $contact->twitter ?>"><i class="fa fa-twitter"
                                                    aria-hidden="true"></i>
                                                </a>
                                            </li>
                                        <?php } ?>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-bottom">
                    <div class="container">
                        <div class="menu-icon">
                            <a title="Mobil Menü" href="javascript:void(0)" class="hambarger">
                                <span class="bar-1"></span>
                                <span class="bar-2"></span>
                                <span class="bar-3"></span>
                            </a>
                        </div>
                        <div class="menu-main">
                            <div class="menu-style">
                                <ul>
                                    <li class="has-child">
                                        <a title="Anasayfa" href="<?php echo site_url() ?>">Anasayfa</a>
                                    </li>
                                    <li class="has-child">
                                        <a title="Hakkımızda" href="<?php echo site_url('hakkimizda') ?>">Hakkımızda</a>
                                    </li>
                                    <li class="has-child sub_menu_trg">
                                        <a title="Ürünlerimiz" href="<?php echo site_url('urunlerimiz') ?>">Ürünlerimiz</a>
                                        <?php if(!empty($header_product)) { ?>
                                            <ul class="drop-nav">
                                                <?php foreach ($header_product as $key => $value) { ?>
                                                    <li>
                                                        <a title="<?php echo empty($value->title) ? '' : $value->title ?>" href="<?php echo site_url('urun-detay/'.$value->slug) ?>"><?php echo empty($value->title) ? '' : $value->title ?>
                                                        </a>
                                                    </li>
                                                <?php } ?>
                                            </ul>
                                        <?php } ?>
                                    </li>
                                </ul>
                            </div>
                            <div class="menu-style header-info-inner">
                                <ul>
                                    <li class="has-child">
                                        <a title="Sertifikalar" href="<?php echo site_url('sertifikalarimiz') ?>">Sertifikalar</a>
                                    </li>
                                    <li class="has-child">
                                        <a title="Galeri" href="<?php echo site_url('galerimiz') ?>">Galeri</a>
                                    </li>
                                    <li class="has-child">
                                        <a title="İletişim" href="<?php echo site_url('iletisim') ?>">İletişim</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="logo">
                            <a title="Meşhur Akçaabat Köftecisi ® Hasan Avcı" href="<?php echo site_url() ?>"><img src="<?php echo site_url('assets/front/images/logo/logo.svg') ?>"
                                alt="Meşhur Akçaabat Köftecisi ® Hasan Avcı">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </header>