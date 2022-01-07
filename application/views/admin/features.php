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
                            <form class="form" id="infoUpdateFeatures">

                                <div class="row mt-2">
                                    <div class="col-md-12">
                                        <label>Başlık</label>
                                        <input type="text" class="form-control"  name="title" value="<?php echo $features->title ?>">
                                    </div>

                                    <div class="col-md-12 mt-3">
                                        <label>Metin</label>
                                        <input type="text" name="description" class="form-control" value="<?php echo $features->description ?>">
                                    </div>

                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-9">
                                                <div action="<?php echo site_url('admin/Add_images/add-image'); ?>" class="dropzone dropzone-area" id="dpz-single-file">
                                                    <div class="dz-message">
                                                        <span class="m-dropzone__msg-desc">
                                                            Bir Adet Resim Seçiniz
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-3 cs-25">
                                                <img class="drz-img" src="<?php echo site_url($features->image_path) ?>">
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