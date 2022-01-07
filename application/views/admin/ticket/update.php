<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <h3 class="content-header-title">Etiket Alanı</h3>
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo site_url('yonetim-paneli'); ?>">Anasayfa</a>
                            </li>
                            <li class="breadcrumb-item active">Etiketi Düzenle</li>
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

                                <form class="form" id="infoUpdateTicket">
                                    <div class="form-body">
                                        <input type="text" hidden  class="form-control"  name="id" value="<?php echo $ticket->id; ?>">
                                        <div class="row mt-2">
                                            <div class="col-md-12">
                                                <label>Başlık</label>
                                                <input type="text" name="title" class="form-control" value="<?php echo $ticket->title;?>">
                                            </div>
                                        </div>

                                        <div class="row">

                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-9">
                                                        <div action="<?php echo site_url('admin/Add_images/svg_update'); ?>" class="dropzone dropzone-area" id="dpz-single-file">
                                                            <div class="dz-message">
                                                                <span class="m-dropzone__msg-desc">
                                                                    Bir Adet Resim Seçiniz
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-3 cs-25">
                                                        <img class="drz-img" src="<?php echo site_url($ticket->image_path) ?>">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="form-actions right">
                                        <button type="button" class="btn btn-outline-warning mr-1" onclick="window.location.href ='<?php echo site_url('yonetim-paneli/etiketler'); ?>'">
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