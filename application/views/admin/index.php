<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <h3 class="content-header-title">Anasayfa</h3>
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo site_url('yonetim-paneli'); ?>">Anasayfa</a>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-body">
            <div class="row">
                <div class="card w-100">
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form" id="infoUpdateHomepage">

                                <div class="row mt-2">
                                    <div class="col-md-12">
                                        <label>Hakkımızda Başlık</label>
                                        <input type="text" class="form-control"  name="about_title" value="<?php echo $homepage->about_title ?>">
                                    </div>

                                    <div class="col-md-12 mt-3">
                                        <label>Hakkımızda Metin</label>
                                        <textarea class="ckeditor" name="about_description"><?php echo $homepage->about_description ?></textarea>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="row">
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
                                                        <img src="<?php echo !empty($homepage->image_path) ? site_url($homepage->image_path) : '' ; ?>" alt="Holi" class=" w-100 rounded img-fluid float-left mr-2 mb-1" width="400" height="300" data-action="zoom">
                                                    </div>
                                                </div>
                                        </div>
                                    </div>


                                    <div class="col-md-12 mt-3">
                                        <label>Ürünler Başlık</label>
                                        <input type="text" name="product_title" class="form-control" value="<?php echo $homepage->product_title ?>">
                                    </div>


                                    <div class="col-md-12 mt-3">
                                        <label>Ürünler Metin</label>
                                        <input type="text" name="product_description" class="form-control" value="<?php echo $homepage->product_description ?>">
                                    </div>

                                    <div class="col-md-12 mt-3">
                                        <label>Etiket Başlık</label>
                                        <input type="text" name="ticket_title" class="form-control" value="<?php echo $homepage->ticket_title ?>">
                                    </div>
                                    
                                    <div class="col-md-12 mt-3">
                                        <label>Galeri Başlık</label>
                                        <input type="text" name="gallery_title" class="form-control" value="<?php echo $homepage->gallery_title ?>">
                                    </div>

                                </div>

                                <div class="form-actions right">
                                    <button type="submit" class="btn btn-outline-success">
                                        <i class="ft-check"></i> Kaydet
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>