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
                        <li>İletişim</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <?php if(!empty($contact->map)) { ?>
        <section class="contact-map">
            <iframe
            src="<?php echo empty($contact->map) ? '' : $contact->map ?>"
            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </section>
    <?php } ?>
    <section class="default-section contact-part home-icon contact-page">
        <div class="icon-default">
            <img src="<?php echo site_url('assets/front/images/icon/placeholder.png') ?>" alt="icon">
        </div>
        <div class="container">

            <div class="custom_row">
                <div class="col-lg-6 col-md-6">
                    <div class="title">
                        <h2>İletişim Bilgilerimiz</h2>
                    </div>
                    <div class="row">
                        <div class="col-sm-12" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <div class="contact-blog-row">
                                <div class="contact-icon">
                                    <img src="<?php echo site_url('assets/front/images/icon/telephone-call.png') ?>" alt="icon">
                                </div>
                                <div class="ct-style">
                                    <div class="area-title">
                                        Telefon Numaramız:
                                    </div>
                                    <div>
                                        <a title="Telefon Numarası" href="tel:<?php echo empty($contact->phone) ? '' : $contact->phone ?>"><?php echo empty($contact->phone) ? '' : $contact->phone ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <div class="contact-blog-row">
                                <div class="contact-icon">
                                    <img src="<?php echo site_url('assets/front/images/icon/email.png') ?>" alt="icon">
                                </div>
                                <div class="ct-style">
                                    <div class="area-title">
                                        E-posta Adresimiz:
                                    </div>
                                    <div>
                                        <a title="E-posta Adresi" href="mailto:<?php echo empty($contact->email) ? '' : $contact->email ?>"><?php echo empty($contact->email) ? '' : $contact->email ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <div class="contact-blog-row">
                                <div class="contact-icon">
                                    <img src="<?php echo site_url('assets/front/images/icon/location.png') ?>" alt="icon">
                                </div>
                                <div class="ct-style">
                                    <div class="area-title">
                                        Adresimiz:
                                    </div>
                                    <div>
                                        <p><?php echo empty($contact->address) ? '' : $contact->address ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="contact-form">
                        <h2>Bizimle İletişime Geçin</h2>
                        <form id="contact_form">
                            <div class="custom_row">
                                <div class="col-xs-12">
                                    <input name="name_surname" type="text" placeholder="Adınız Soyadınız">
                                </div>
                                <div class="col-xs-12">
                                    <input name="email" type="email" placeholder="E-posta Adresiniz">
                                </div>
                                <div class="col-xs-12">
                                    <input class="phone_us" name="phone" type="text" placeholder="Telefon Numaranız">
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <textarea name="message" placeholder="Mesajınız"></textarea>
                                </div>
                                <div class="col-xs-12">
                                    <div class="promise-box">
                                        <input hidden class="inp-cbx" id="cbx" type="checkbox" name="confirmation"
                                        value="1">
                                        <label class="cbx" for="cbx">
                                            <span>
                                                <svg width="12px" height="9px" viewBox="0 0 12 9">
                                                    <polyline points="1 5 4 8 11 1"></polyline>
                                                </svg>
                                            </span>
                                        </label>
                                        <button type="button" class="confirm-btn" data-toggle="modal"
                                        data-target="#modaltrigger">
                                        <strong> Aydınlatma Metnini</strong> Okudum
                                    </button>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <button class="btn-black send_message">Gönder</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
</main>


<div class="modal fade contact-modal" id="modaltrigger" tabindex="-1" role="dialog" aria-labelledby="defaultlabel"
aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title contact-modal" id="defaultlabel"><?php echo empty($lighting_text->title) ? '' : $lighting_text->title ?></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <?php echo empty($lighting_text->description) ? '' : $lighting_text->description ?>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>
        </div>
    </div>
</div>
</div>