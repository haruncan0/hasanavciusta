<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <h3 class="content-header-title">Hakkımızda Sayfası</h3>
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo site_url('yonetim-paneli'); ?>">Anasayfa</a>
                            </li>
                            <li class="breadcrumb-item active">Hakkımızda Düzenle</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-content collpase show">
                            <div class="card-body">

                                <form class="form" id="infoUpdateAbout">
                                    <div class="form-body">
                                        <input type="text" hidden  class="form-control"  name="id" value="<?php echo $about->id; ?>">
                                        <div class="row mt-2">
                                            <div class="col-md-12">
                                                <label>Başlık</label>
                                                <input type="text" name="title" class="form-control" value="<?php echo $about->title;?>">
                                            </div>
                                        </div>

                                        <div class="row mt-2">
                                            <div class="col-md-12">
                                                <label>Alt Başlık</label>
                                                <input type="text" name="sub_title" class="form-control" value="<?php echo $about->sub_title;?>">
                                            </div>
                                        </div>


                                        <div class="row mt-2">
                                            <div class="col-md-12">
                                                <label>Hakkımızda Yazısı</label>
                                                <textarea class="ckeditor" name="description"><?php echo $about->description;?></textarea>
                                            </div>
                                        </div>


                                        <div class="row mt-2">
                                            <div class="col-md-12">
                                                <label>Etiket Başlık</label>
                                                <input type="text" class="form-control" name="ticket_title" value="<?php echo $about->ticket_title;?>">
                                            </div>
                                        </div>

                                        <div class="row mt-2">
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
                                                        <img src="<?php echo !empty($about->image_path) ? site_url($about->image_path) : '' ; ?>" alt="Holi" class=" w-100 rounded img-fluid float-left mr-2 mb-1" width="400" height="300" data-action="zoom">
                                                    </div>
                                                </div>
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
</div>