<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Yönetim Paneli Giriş">
    <meta name="keywords" content="Yönetim Paneli Giriş">
    <meta name="author" content="VERİWEB">
    <title>Yönetim Paneli</title>
    <link rel="apple-touch-icon" href="<?php echo site_url('assets/front/images/favicons/apple-icon-57x57.png'); ?>">
    <?php //echo fav_and_app_icons();?>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CQuicksand:300,400,500,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/back/app-assets/vendors/css/vendors.min.css'); ?> ">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/back/app-assets/css/bootstrap.css'); ?> ">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/back/app-assets/css/bootstrap-extended.css'); ?> ">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/back/app-assets/css/colors.css'); ?> ">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/back/app-assets/css/components.css'); ?> ">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/back/app-assets/css/core/menu/menu-types/vertical-menu.css'); ?> ">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/back/app-assets/css/core/colors/palette-gradient.css'); ?> ">

    <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/back/app-assets/vendors/css/extensions/toastr.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/back/app-assets/css/plugins/extensions/toastr.css')?> ">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/back/assets/css/style.css'); ?> ">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu 1-column   blank-page" data-open="click" data-menu="vertical-menu" data-col="1-column">
<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <section class="row flexbox-container">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class="col-lg-4 col-md-8 col-10 box-shadow-2 p-0">
                        <div class="card border-grey border-lighten-3 m-0">
                            <div class="card-header border-0">
                                <div class="card-title text-center">
                                    <div class="p-1"><img class="w-50" src="<?php echo site_url('assets/back/image/logo.png') ?>" alt="veriweb logo">
                                    </div>
                                </div>
                                <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2"><span>Yönetim Paneli</span>
                                </h6>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <form class="form-horizontal form-simple" action="" novalidate id="infoForm">
                                        <fieldset class="form-group position-relative has-icon-left mb-0">
                                            <input type="text" class="form-control" id="user-name" name="username" placeholder="Kullanıcı Adı" required>
                                            <div class="form-control-position">
                                                <i class="la la-user"></i>
                                            </div>
                                        </fieldset>
                                        <fieldset class="form-group position-relative has-icon-left">
                                            <input type="password" class="form-control" id="user-password" name="password" placeholder="Şifre" required>
                                            <div class="form-control-position">
                                                <i class="la la-key"></i>
                                            </div>
                                        </fieldset>

                                        <button type="submit" class="btn btn-info btn-block"><i class="ft-unlock"></i> Giriş</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
</div>
<!-- END: Content-->


<!-- BEGIN: Vendor JS-->
<script src="<?php echo site_url('assets/back/app-assets/vendors/js/vendors.min.js?=' . md5(date('Y-m-d H:i:s'))); ?> "></script>
<!-- BEGIN Vendor JS-->


<!-- BEGIN: Theme JS-->
<script src="<?php echo site_url('assets/back/app-assets/js/core/app-menu.js'); ?> "></script>
<script src="<?php echo site_url('assets/back/app-assets/js/core/app.js'); ?> "></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src='<?php echo site_url('assets/back/app-assets/js/cookie.js'); ?>'></script>
<script src="<?php echo site_url('assets/back/app-assets/js/scripts/extensions/toastr.js')?>"></script>
<script src="<?php echo site_url('assets/back/app-assets/vendors/js/extensions/toastr.min.js'); ?>"></script>
<!-- END: Page JS-->
<script src="<?php echo site_url('assets/back/assets/js/login.js?v=' . md5(date('Y-m-d H:i:s'))); ?> "></script>


</body>
<!-- END: Body-->

</html>