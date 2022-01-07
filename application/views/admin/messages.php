<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <h3 class="content-header-title">Mesajlar</h3>
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo site_url('yonetim-paneli'); ?>">Anasayfa</a>
                            </li>
                            <li class="breadcrumb-item active">Mesajlar</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-body">

            <!-- Zero configuration table -->
            <section id="configuration">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-content collapse show">
                                <div class="card-body card-dashboard">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered zero-configuration">
                                            <thead>
                                            <tr>
                                                <th style="width: 5%;">#</th>
                                                <th style="width: 20%;">Ad Soyad</th>
                                                <th style="width: 25%;">E-Posta</th>
                                                <th style="width: 20%;">Mesaj</th>
                                                <th style="width: 5%;">Sil</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php if(!empty($messages)) { ?>
                                                <?php foreach ($messages as $key => $val) { ?>
                                                    <tr id="delete<?php echo $val->id; ?>">
                                                        <td><?php echo $val->id; ?></td>
                                                        <td><?php echo $val->name ?></td>
                                                        <td><?php echo $val->email; ?></td>
                                                        <td>
                                                            <button type="button"
                                                                    class=" w-100 seen-button<?php echo $val->id; ?> seen-button btn <?php echo $val->seen == 1 ? 'btn-secondary' : 'btn-success'; ?>"
                                                                    data-toggle="modal" data-id="<?php echo $val->id ?>"
                                                                    data-target="#default<?php echo $val->id; ?>"> Mesajı Görüntüle </button>
                                                        </td>
                                                        <td>
                                                            <button class="w-100 btn btn-danger buttonAnimation delete-message"
                                                                    data-id="<?php echo $val->id; ?>"
                                                                    data-animation="bounce"><i class=" la la-trash"></i></button>
                                                        </td>
                                                    </tr>

                                                    <div class="modal fade text-left" id="default<?php echo $val->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title" id="myModalLabel1">Mesaj</h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <h5 class="my-2 font-weight-bold">Ad Soyad : <?php echo $val->name ?></h5>
                                                                    <h5 class="my-2 font-weight-bold">E-Posta :  <?php echo $val->email; ?></h5>
                                                                    <h5 class="my-2 font-weight-bold">Telefon :  <?php echo $val->phone; ?></h5>
                                                                    <h5 class="mt-2 font-weight-bold">Mesaj:</h5>
                                                                    <p><?php echo $val->message; ?></p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <span><?php echo $val->add_date; ?></span>
                                                                    <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Kapat</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php } ?>
                                            <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--/ Zero configuration table -->
        </div>
    </div>
</div>