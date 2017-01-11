        <div class="row">
			<ol class="breadcrumb">
				<li><a href="<?=base_url('/administrator')?>"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li><a href="<?=base_url('/administrator/produk.html')?>">Produk</a></li>
				<li class="active">Add</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">
                    <i class="fa fa-cubes"></i>
                    Tambah | Produk 
                </h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2">
				<div class="panel panel-default">
					<form action="" method="post" role="form" enctype="multipart/form-data">
						<div class="panel-heading">
							<i class="fa fa-edit"></i>
							FORM PRODUK
						</div>
						<div class="panel-body">
							<div class="form-group">
								<label>NAMA PRODUK</label>
								<input type="text" name="nama_produk" class="form-control" placeholder="..." />
							</div>
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group">
										<label>KATALOG</label>
										<select name="katalog_id" class="form-control">
											<option>-- Pilih Katalog Produk --</option>
											<option>Kaos</option>
											<option>Sepatu</option>
										</select>
									</div>	
									<div class="form-group">
										<label>STOK</label>
										<input type="text" name="stok" class="form-control" placeholder="..." />
									</div>	
									<div class="form-group">
										<label>STATUS</label>
										<select name="katalog_id" class="form-control">
											<option>-- Pilih Katalog Produk --</option>
											<option selected="">New</option>
											<option>Best Seller</option>
										</select>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<label>HARGA JUAL</label>
										<input type="text" name="harga_jual" class="form-control" placeholder="..." />
									</div>	
									<div class="form-group">
										<label>HARGA CORET / DISKON</label>
										<input type="text" name="harga_coret" class="form-control" placeholder="..." />
									</div>	
									<div class="form-group">
										<label>GAMBAR</label>
										<input type="file" name="gambar" class="form-control" placeholder="..." />
									</div>
								</div>
							</div>
							<div class="form-group">
								<label>DESKRIPSI</label>
								<textarea name="deskripsi" class="form-control" rows="8"></textarea>
							</div>	
						</div>
						<div class="panel-footer text-right">
							<button type="reset" class="btn btn-default">
								<i class="fa fa-refresh"></i>&nbsp; RESET
							</button>

							<button type="submit" name="simpan" class="btn btn-primary">
								<i class="fa fa-save"></i>&nbsp; SIMPAN
							</button>
						</div>
					</form>
				</div>
			</div>
		</div><!--/.row-->