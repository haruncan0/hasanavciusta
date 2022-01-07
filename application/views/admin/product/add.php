<div class="app-content content">
	<div class="content-overlay"></div>
	<div class="content-wrapper">
		<div class="content-header row">
			<div class="content-header-left col-md-6 col-12 mb-2">
				<h3 class="content-header-title">Ürün</h3>
				<div class="row breadcrumbs-top">
					<div class="breadcrumb-wrapper col-12">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="<?php echo site_url('yonetim-paneli'); ?>">Anasayfa</a>
							</li>
							<li class="breadcrumb-item active">Ürün Ekle</li>
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

								<form class="form" id="infoAddProduct">
									<div class="form-body">

										<div class="row mt-2">
											<div class="col-md-12">
												<label>Ürün Adı</label>
												<input type="text" name="title" class="form-control">
											</div>
										</div>

										<div class="row mt-2">
											<div class="col-md-12">
												<label>Kapak Metni</label>
												<input type="text" name="cover_text" class="form-control">
											</div>
										</div>

										<div class="row mt-2">
											<div class="col-md-12">
												<label>Ürün Açıklaması</label>
												<textarea class="ckeditor" name="description"></textarea>
											</div>
										</div>

										<div class="row mt-2">
											<div class="col-md-12">
												<label>Saklama Koşulları</label>
												<textarea class="ckeditor" name="storage"></textarea>
											</div>
										</div>

										<div class="row mt-2">
											<div class="col-md-12">
												<label>Ürün Çeşitleri</label>
												<textarea class="ckeditor" name="product_types">
													<table class="customize_table">
														<thead>
															<tr>
																<th>Ürün Adı</th>
																<th>Ürün Barkodu</th>
																<th>Paket İçi Adet</th>
																<th>Paket Ağırlığı</th>
																<th>Koli İçi Adet</th>
																<th>Koli Ağırlığı</th>
																<th>Raf Ömrü</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td>Akçaabat Köfte <b>El İzli</b></td>
																<td>8683513372004</td>
																<td>32 Adet</td>
																<td>1100 g.</td>
																<td>12 Adet</td>
																<td>13 kg.</td>
																<td>6 ay</td>
															</tr>
															<tr>
																<td>Akçaabat Köfte <b>Büyük Boy</b></td>
																<td>8683513372011</td>
																<td>24 Adet</td>
																<td>1100 g.</td>
																<td>12 Adet</td>
																<td>13 kg.</td>
																<td>6 ay</td>
															</tr>
														</tbody>
													</table>
												</textarea>
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
											</div>
										</div>

										<div class="row mt-2">
											<div class="col-md-12">
												<label>Site Başlığı</label>
												<input type="text" name="site_title" class="form-control">
											</div>
										</div>

										<div class="row mt-2">
											<div class="col-md-12">
												<label>Site Açıklaması</label>
												<input type="text" name="site_description" class="form-control">
											</div>
										</div>


									</div>

									<div class="form-actions right">
										<button type="button" class="btn btn-outline-warning mr-1" onclick="window.location.href ='<?php echo site_url('yonetim-paneli/urunleri-listele'); ?>'">
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