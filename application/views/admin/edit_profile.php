<?php ?>
<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <h3 class="content-header-title">Profil Ayarları</h3>
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo site_url('yonetim-paneli'); ?>">Anasayfa</a>
                            </li>
                            <li class="breadcrumb-item active">Profil Ayarları</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <!-- account setting page start -->
            <section id="page-account-settings">
                <div class="row">
                    <!-- left menu section -->
                    <div class="col-md-3 mb-2 mb-md-0">
                        <ul class="nav nav-pills flex-column mt-md-0 mt-1">
                            <li class="nav-item">
                                <a class="nav-link d-flex active" id="account-pill-general" data-toggle="pill"
                                   href="#account-vertical-general" aria-expanded="true">
                                    <i class="ft-globe mr-50"></i>
                                    Genel Bilgiler
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex" id="account-pill-password" data-toggle="pill"
                                   href="#account-vertical-password" aria-expanded="false">
                                    <i class="ft-lock mr-50"></i>
                                    Şifre Değiştir
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- right content section -->
                    <div class="col-md-9">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active" id="account-vertical-general"
                                             aria-labelledby="account-pill-general" aria-expanded="true">
                                            <div class="media">
                                                <a href="javascript: void(0);">
                                                    <img src="<?php echo site_url($admin_info->profil_photo); ?>"
                                                         class="rounded mr-75" alt="profil resmi" height="64"
                                                         width="64">
                                                </a>
                                            </div>
                                            <hr>
                                            <form id="infoEditProfileGeneralForm" method="post">

                                                <input type="hidden" value="update_account_genaral" name="url"
                                                       id="ajax_function">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <div class="controls">
                                                                <label for="account-username">Kullanıcı Adı</label>
                                                                <input type="text" class="form-control" name="user_name"
                                                                       id="account-username" placeholder="Kullanıcı Adı"
                                                                       value="<?php echo $admin_info->user_name; ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <div class="controls">
                                                                <label for="account-name">Ad Soyad</label>
                                                                <input type="text" class="form-control"
                                                                       name="name_surname" id="account-name"
                                                                       placeholder="Ad Soyad"
                                                                       value="<?php echo $admin_info->name_surname; ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <div action="<?php echo site_url('admin/Add_images/add-image'); ?>"
                                                                 class="dropzone dropzone-area" id="dpz-single-file">
                                                                <div class="dz-message">
						                                    <span class="m-dropzone__msg-desc">
						                                        Profil Resmi Güncelle.
						                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                        <button type="submit"
                                                                class="btn btn-info mr-sm-1 mb-1 mb-sm-0 ">
                                                            Değişiklikleri Kaydet
                                                        </button>
                                                        <button type="reset" class="btn btn-danger">Çık</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane fade " id="account-vertical-password" role="tabpanel"
                                             aria-labelledby="account-pill-password" aria-expanded="false">
                                            <form id="infoEditPassForm" action="post">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <div class="controls">
                                                                <label for="account-old-password">Eski Şifre</label>
                                                                <input type="password" class="form-control"
                                                                       name="old_pass" id="account-old-password"
                                                                       placeholder="Eski Şifre">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <div class="controls">
                                                                <label for="account-new-password">Yeni Şifre</label>
                                                                <input type="password" name="password"
                                                                       id="account-new-password" class="form-control"
                                                                       placeholder="Yeni Şifre">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <div class="controls">
                                                                <label for="account-retype-new-password">Yeni Şifreyi
                                                                    Tekrar Girin</label>
                                                                <input type="password" name="confirm-password"
                                                                       class="form-control"
                                                                       id="account-retype-new-password"
                                                                       placeholder="Yeni Şifre">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                        <button type="submit" class="btn btn-info mr-sm-1 mb-1 mb-sm-0">
                                                            Değişiklikleri Kaydet
                                                        </button>
                                                        <button type="reset" class="btn btn-danger">Çık</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- account setting page end -->
        </div>
    </div>
</div>
<!-- END: Content-->