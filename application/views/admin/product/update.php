<div class="app-content content">
	<div class="content-overlay"></div>
	<div class="content-wrapper">
		<div class="content-header row">
			<div class="content-header-left col-md-6 col-12 mb-2">
				<h3 class="content-header-title"><?php echo $product->title;?></h3>
				<div class="row breadcrumbs-top">
					<div class="breadcrumb-wrapper col-12">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="<?php echo site_url('yonetim-paneli'); ?>">Anasayfa</a>
							</li>
							<li class="breadcrumb-item active">Ürün Düzenle</li>
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

								<form class="form" id="infoUpdateProduct">
									<div class="form-body">
										<input type="text" hidden  class="form-control"  name="id" value="<?php echo $product->id; ?>">
										<div class="row mt-2">
											<div class="col-md-12">
												<label>Ürün Adı</label>
												<input type="text" name="title" class="form-control" value="<?php echo $product->title;?>">
											</div>
										</div>

										<div class="row mt-2">
											<div class="col-md-12">
												<label>Kapak Metni</label>
												<input type="text" name="cover_text" class="form-control" value="<?php echo $product->cover_text;?>">
											</div>
										</div>

										<div class="row mt-2">
											<div class="col-md-12">
												<label>Ürün Açıklaması</label>
												<textarea class="ckeditor" name="description"><?php echo $product->description ?></textarea>
											</div>
										</div>

										<div class="row mt-2">
											<div class="col-md-12">
												<label>Saklama Koşulları</label>
												<textarea class="ckeditor" name="storage"><?php echo $product->storage ?></textarea>
											</div>
										</div>

										<div class="row mt-2">
											<div class="col-md-12">
												<label>Ürün Çeşitleri</label>
												<textarea class="ckeditor" name="product_types"><?php echo $product->product_types ?></textarea>
											</div>
										</div>

										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<div action="<?php echo site_url('admin/Add_images/add-image-all'); ?>" class="dropzone dropzone-area" id="dpz-single-file">
														<div class="dz-message">
															<span class="m-dropzone__msg-desc">
																Ürün Resimlerini Seçiniz.
															</span>
														</div>
													</div>
												</div>
												<div>
													<p class="image_title">Mevcut Resimler</p>
													<div class="prd-list-img-area">
														<div class="row">

															<?php if(!empty($product_image_1)) { ?>
																<?php foreach ($product_image_1 as $key => $val) { ?>
																	<div class="col-lg-3" id="delete<?php echo $val->id; ?>">
																		<div class="img">
																			<img src="<?php echo site_url($val->image_path) ?>">
																			<div class="status_info">
																				<input type="checkbox" class="switch status-product-image-1"
																				data-id="<?php echo $val->id; ?>"
																				id="switch1" <?php echo $val->status == 1 ? "checked " :""; ?> />
																			</div>
																			<div>
																				<input type="text" placeholder="konum" class="form-control item_order_2"
																				data-id="<?php echo $val->id; ?>" name="orders" value="<?php echo empty($val->position) ? '' : $val->position ?>" />
																			</div>
																			<div class="prd_del">
																				<button class="w-100 btn btn-danger buttonAnimation delete-product-image-1"
																				data-id="<?php echo $val->id; ?>"
																				data-animation="bounce"><i class=" la la-trash"></i></button>
																			</div>
																		</div>
																	</div>
																<?php } ?>
															<?php } ?>

														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<div action="<?php echo site_url('admin/Add_images/add-image-all-2'); ?>" class="dropzone dropzone-area" id="dpz-single-file">
														<div class="dz-message">
															<span class="m-dropzone__msg-desc">
																Ürün Yemeklerini Giriniz.
															</span>
														</div>
													</div>
												</div>
												<p class="image_title">Mevcut Yemek Resimleri</p>
												<div class="prd-list-img-area">
													<div class="row">

														<?php if(!empty($product_image_2)) { ?>
															<?php foreach ($product_image_2 as $key => $val) { ?>
																<div class="col-lg-3" id="delete<?php echo $val->id; ?>">
																	<div class="img">
																		<img src="<?php echo site_url($val->image_path) ?>">
																		<div class="status_info">
																			<input type="checkbox" class="switch status-product-image-1"
																			data-id="<?php echo $val->id; ?>"
																			id="switch1" <?php echo $val->status == 1 ? "checked " :""; ?> />
																		</div>
																		<div>
																			<input type="text" placeholder="konum" class="form-control item_order_2"
																			data-id="<?php echo $val->id; ?>" name="orders" value="<?php echo empty($val->position) ? '' : $val->position ?>" />
																		</div>
																		<div class="prd_del">
																			<button class="w-100 btn btn-danger buttonAnimation delete-product-image-2"
																			data-id="<?php echo $val->id; ?>"
																			data-animation="bounce"><i class=" la la-trash"></i></button>
																		</div>
																	</div>
																</div>
															<?php } ?>
														<?php } ?>

													</div>
												</div>												
											</div>
										</div>

										<div class="row mt-2">
											<div class="col-md-12">
												<label>Site Başlığı</label>
												<input type="text" name="site_title" class="form-control" value="<?php echo $product->site_title;?>">
											</div>
										</div>
										<div class="row mt-2">
											<div class="col-md-12">
												<label>Site Açıklaması</label>
												<input type="text" name="site_description" class="form-control" value="<?php echo $product->site_description;?>">
											</div>
										</div>


									</div>

									<div class="form-actions right">
										<button type="button" class="btn btn-outline-warning mr-1" onclick="window.location.href ='<?php echo site_url('yonetim-paneli/urun-listele'); ?>'">
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