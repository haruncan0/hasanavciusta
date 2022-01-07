<?php ?>
<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <h3 class="content-header-title">Site Ayarları</h3>
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo site_url('yonetim-paneli'); ?>">Anasayfa</a>
                            </li>
                            <li class="breadcrumb-item active">Site Ayarları</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <!-- account setting page start -->
            <section class="stg_area">
                <div class="row">
                    <!-- left menu section -->
                    <div class="col-md-3 mb-2 mb-md-0">
                        <ul class="nav flex-column mt-md-0 mt-1 stg_area">
                            <?php if(!empty($site_settings)) { ?>
                                <?php foreach ($all_item as $key => $value) { ?>
                                    <li class="nav-item">
                                        <a class="nav-link <?php echo  $setting_active == $value->slug ? 'active' : '' ?>"  
                                           href="<?php echo site_url('yonetim-paneli/site-ayarlari/'.$value->slug) ?>" >
                                           <?php echo $value->page_name ?>
                                       </a>
                                   </li>
                               <?php } ?>
                           <?php } ?>
                       </ul>
                   </div>
                   <!-- right content section -->
                   <div class="col-md-9">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="tab-content">

                                    <?php if(!empty($site_settings)) { ?>

                                     <form id="infoUpdateSiteSettings">
                                        <input type="hidden" name="id" value="<?php echo $site_settings->id;?>">
                                        <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Site Başlığı</label>
                                                        <input type="text"
                                                        class="form-control"
                                                        placeholder="Site Başlık"
                                                        name="title"
                                                        value="<?php echo $site_settings->site_title;?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-2">
                                                    <label>Site Açıklaması</label>
                                                    <textarea
                                                    class="form-control"
                                                    name="description"><?php echo $site_settings->site_description;?></textarea>
                                                </div>
                                            <?php if($site_settings->slug != 'anasayfa') { ?>
                                                <div class="col-md-10">
                                                    <div class="form-group">
                                                        <div action="<?php echo site_url('admin/Add_images/add-image'); ?>" class="dropzone dropzone-area" id="dpz-single-file">
                                                            <div class="dz-message">
                                                                <span class="m-dropzone__msg-desc">
                                                                    Bir Adet Resim Ekleyiniz
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2 mt-3">
                                                    <div class="mt-2 mr-1 text-center">
                                                        <span >Yüklü Resim</span>
                                                        <img src="<?php echo !empty($site_settings->image_path) ? site_url($site_settings->image_path) : '' ; ?>" alt="Holi" class=" w-100 rounded img-fluid float-left mr-2 mb-1" width="400" height="300" data-action="zoom">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Banner Yazısı</label>
                                                        <input type="text"
                                                        class="form-control"
                                                        placeholder="Başlık"
                                                        name="banner"
                                                        value="<?php echo $site_settings->banner;?>">
                                                    </div>
                                                </div>
                                                    
                                            <?php } ?>

                                            <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                <button type="submit" class="btn btn-info mr-sm-1 mb-1 mb-sm-0">
                                                    Değişiklikleri Kaydet
                                                </button>
                                                <button type="reset" class="btn btn-danger" onclick="location.href='<?php echo site_url('yonetim-paneli')?>'">Çık</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            <?php } ?>
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