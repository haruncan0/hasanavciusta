<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <h3 class="content-header-title">Aydınlatma Metni</h3>
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo site_url('yonetim-paneli'); ?>">Anasayfa</a>
                            </li>
                            <li class="breadcrumb-item active">Aydınlatma Metnini Düzenle</li>
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

                                <form class="form" id="infoUpdateLighting_text">
                                    <div class="form-body">
                                        <input type="text" hidden  class="form-control"  name="id" value="<?php echo $lighting_text->id; ?>">

                                        <div class="row mt-2">
                                            <div class="col-md-12">
                                                <label>Aydınlatma Metni</label>
                                                <textarea class="ckeditor" name="lighting_text"><?php echo $lighting_text->description;?></textarea>
                                            </div>
                                        </div>

                                        <div class="row mt-2">
                                            <div class="col-12">
                                                <label>Site Başlığı</label>
                                                <input type="text" name="site_title" class="form-control" value="<?php echo $lighting_text->site_title ?>">
                                            </div>
                                        </div>

                                        <div class="row mt-2">
                                            <div class="col-12">
                                                <label>Site Açıklaması</label>
                                                <input type="text" name="site_description" class="form-control" value="<?php echo $lighting_text->site_description ?>">
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