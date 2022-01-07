<footer>
    <div id="footer_inner" class="footer-part wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
        <div class="icon-default icon-dark">
            <a title="Hasan Avcı Usta Logo" href="<?php echo site_url() ?>"><img class="footer_logo" src="<?php echo site_url('assets/front/images/logo/logo.svg') ?>" alt="Hasan Avcı Usta Logo"></a>
        </div>
        <div class="container">
            <div class="custom_row">
                <div class="col-md-3 order-1 order-lg-2 footer-item_2 order-sm-2 min-div">
                    <p class="footer-title">Kurumsal</p>
                    <ul class="footer_list">
                        <li><a title="Anasayfa" href="<?php echo site_url() ?>">Anasayfa</a></li>
                        <li><a title="Hakkımızda" href="<?php echo site_url('hakkimizda') ?>">Hakkımızda</a></li>
                        <li><a title="Ürünlerimiz" href="<?php echo site_url('urunlerimiz') ?>">Ürünlerimiz</a></li>
                        <li><a title="Sertifikalar" href="<?php echo site_url('sertifikalarimiz') ?>">Sertifikalar</a></li>
                        <li><a title="Galeri" href="<?php echo site_url('galerimiz') ?>">Galeri</a></li>
                        <li><a title="İletişim" href="<?php echo site_url('iletisim') ?>">İletişim</a></li>
                    </ul>
                </div>
                <div class="col-md-6 order-2 order-lg-1 order-sm-1 min-div footer-center-item">
                    <div class="footer-inner">
                        <div class="footer-info">
                            <h3>Meşhur Akçaabat Köftecisi ® Hasan Avcı</h3>

                            <div class="footer-center-area">
                                <p><i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo empty($contact->address) ? '' : $contact->address ?></p>
                                <p><a title="E-posta" href="mailto:<?php echo empty($contact->email) ? '' : $contact->email ?>"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        <?php echo empty($contact->email) ? '' : $contact->email ?></a></p>
                                <p><a title="Telefon Numarası" href="tel:<?php echo empty($contact->phone) ? '' : $contact->phone ?>"><i class="fa fa-phone" aria-hidden="true"></i>
                                        <?php echo empty($contact->phone) ? '' : $contact->phone ?></a></p>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 footer-right order-3 order-lg-3 footer-item_3 order-sm-3 min-div">
                <?php if(!empty($all_contracts)) { ?>
                    <p class="footer-title">Sözleşmeler</p>
                    <ul class="footer_list">
                        <?php foreach ($all_contracts as $key => $value) { ?>
                            
                        <li><a title="<?php echo empty($value->title) ? '' : $value->title ?>" href="<?php echo site_url('sozlesmeler/'.$value->slug) ?>"><?php echo empty($value->title) ? '' : $value->title ?></a></li>

                <?php } ?>
                    </ul>
                <?php } ?>
                    <ul class="footer_svg">
                        <li><img src="<?php echo site_url('assets/front/images/icon/icon1.svg') ?>" alt="icon"></li>
                        <li><img src="<?php echo site_url('assets/front/images/icon/icon5.svg') ?>" alt="icon"></li>
                        <li><img src="<?php echo site_url('assets/front/images/icon/icon4.svg') ?>" alt="icon"></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="location-footer-map">
            <div class="icon-find-location map-trg-close">
                <a href="javascript:void(0)">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                    <span>Haritayı Kapat</span>
                </a>
            </div>
            <div class="footer-map-outer">
                <div id="footer-map">
                    <iframe
                        src="<?php echo empty($contact->map) ? '' : $contact->map ?>"
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>

    </div>
    <div class="copyright">
        <div class="icon-find copyright-icon">
            <a title="Harita Bilgimiz" href="javascript:void(0)">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>Biz Neredeyiz?</span>
            </a>
        </div>
        <div class="container">
            <div class="custom_row row_one">
                <div class="custom_div">
                    <div class="copyright_inner">
                        © 2021 Meşhur Akçaabat Köftecisi ® Hasan Avcı. Tüm Hakları Saklıdır.
                    </div>
                </div>
                <div class="custom_div">
                    <div class="veriweb">
                        <a title="Veriweb: Dijital Dönüşüm ve Yazılım Şirketi - Veriweb" target="_blank" href="https://veriweb.com.tr/"><img src="<?php echo site_url('assets/front/images/logo/veriweb-logo.svg') ?>"
                                alt="Dijital Dönüşüm ve Yazılım Şirketi - Veriweb"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

</div>
<a title="Yukarı" href="javascript:void(0)" class="top-arrow"></a>

<script src="<?php echo site_url('assets/front/js/jquery.min.js') ?>"></script>
<?php if ($page == 'iletisim') { ?>
    <script src="<?php echo site_url('assets/front/js/cookie.js') ?>"></script>
    <script src="<?php echo site_url('assets/front/js/toastr.min.js') ?>"></script>
    <script src="<?php echo site_url('assets/front/js/jquery.mask.js') ?>"></script>
    <script src="<?php echo site_url('assets/front/js/ajax.js') ?>"></script>
<?php } ?>
<script src="<?php echo site_url('assets/front/plugin/bootstrap/bootstrap.min.js') ?>"></script>
<script src="<?php echo site_url('assets/front/plugin/revolution-plugin/jquery.themepunch.plugins.min.js') ?>"></script>
<script src="<?php echo site_url('assets/front/plugin/revolution-plugin/jquery.themepunch.revolution.min.js') ?>"></script>
<script src="<?php echo site_url('assets/front/plugin/owl-carousel/owl.carousel.min.js') ?>"></script>
<script src="<?php echo site_url('assets/front/plugin/slick-slider/slick.min.js') ?>"></script>
<script src="<?php echo site_url('assets/front/plugin/fancybox/fancybox.js') ?>"></script>
<script src="<?php echo site_url('assets/front/plugin/animation/wow.min.js') ?>"></script>
<script src="<?php echo site_url('assets/front/plugin/parallax/jquery.stellar.js') ?>"></script>
<script src="<?php echo site_url('assets/front/js/app.js') ?>"></script>
<script src="<?php echo site_url('assets/front/js/script.js') ?>"></script>

</body>

</html>