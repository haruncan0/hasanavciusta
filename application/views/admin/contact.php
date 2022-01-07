<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <h3 class="content-header-title">İletişim Bilgileri</h3>
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo site_url('yonetim-paneli'); ?>">Anasayfa</a>
                            </li>
                            <li class="breadcrumb-item active">İletişim Bilgileri</li>
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

                                <form class="form" id="infoUpdateContact">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Telefon</label>
                                                    <input type="text" class="form-control" placeholder="Telefon" name="phone" value="<?php echo !empty($contact) ? $contact->phone : "";?>">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-2">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Mail</label>
                                                    <input type="text" class="form-control" placeholder="E-Mail" name="email" value="<?php echo !empty($contact) ? $contact->email : "";?>">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <label>Adres</label>
                                                <textarea class="form-control" name="address"><?php echo !empty($contact) ? $contact->address : "";?></textarea>
                                            </div>
                                        </div>

                                        <div class="row mt-2">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Facebook</label>
                                                    <input type="text" class="form-control" placeholder="Facebook" name="facebook" value="<?php echo !empty($contact) ? $contact->facebook : "";?>">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-2">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>İnstagram</label>
                                                    <input type="text" class="form-control" placeholder="Instagram" name="instagram" value="<?php echo !empty($contact) ? $contact->instagram : "";?>">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-2">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Twitter</label>
                                                    <input type="text" class="form-control" placeholder="Twitter" name="twitter" value="<?php echo !empty($contact) ? $contact->twitter : "";?>">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <label>Harita Bilgisi</label>
                                                <textarea class="form-control" name="map"><?php echo !empty($contact) ? $contact->map : "";?></textarea>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="form-actions right">
                                        <button type="button" class="btn btn-outline-warning mr-1" onclick="window.location.href ='<?php echo site_url('yonetim-paneli'); ?>'">
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