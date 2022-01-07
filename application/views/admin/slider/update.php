<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <h3 class="content-header-title">Slider</h3>
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo site_url('yonetim-paneli'); ?>">Anasayfa</a>
                            </li>
                            <li class="breadcrumb-item active">Slider Düzenle</li>
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

                                <form class="form" id="infoUpdateSlider">
                                    <div class="form-body">
                                        <input type="text" hidden  class="form-control"  name="id" value="<?php echo $slider->id; ?>">
                                        <div class="row mt-2">
                                            <div class="col-md-12">
                                                <label>Başlık</label>
                                                <input type="text" name="title" class="form-control" value="<?php echo $slider->title;?>">
                                            </div>
                                        </div>

                                        <div class="row mt-2">
                                            <div class="col-md-12">
                                                <label>Metin</label>
                                                <input type="text" name="description" class="form-control" value="<?php echo $slider->description;?>">
                                            </div>
                                        </div>

                                        <div class="row mt-2">
                                            <div class="col-md-12">
                                                <label>Buton Metni</label>
                                                <input type="text" name="button_text" class="form-control" value="<?php echo $slider->button_text;?>">
                                            </div>
                                        </div>

                                        <div class="row mt-2">
                                            <div class="col-md-12">
                                                <label>Buton Link'i</label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon3"><?php echo site_url('urun-detay/') ?></span>
                                                    </div>
                                                    <input type="text" class="form-control" id="link" aria-describedby="basic-addon3" name="link" value="<?php echo !empty($slider->link) ? $slider->link : '' ?>">
                                                </div>
                                            </div>
                                        </div>

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
                                                        <img src="<?php echo !empty($slider->image_path) ? site_url($slider->image_path) : '' ; ?>" alt="Holi" class=" w-100 rounded img-fluid float-left mr-2 mb-1" width="400" height="300" data-action="zoom">
                                                    </div>
                                                </div>
                                        </div>
                                    </div>

                                    <div class="form-actions right">
                                        <button type="button" class="btn btn-outline-warning mr-1" onclick="window.location.href ='<?php echo site_url('yonetim-paneli/slider-listele'); ?>'">
                                            <i class="ft-x"></i> Çık
                                        </button>
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