        <div class="row">
			<ol class="breadcrumb">
				<li><a href="<?=base_url('/administrator')?>"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li class="active">Pengaturan</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">
                    <i class="fa fa-cogs"></i>
                    Pengaturan
                </h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2">
				<div class="panel panel-default">
					<form action="" method="post" role="form" enctype="multipart/form-data">
						<div class="panel-heading">
							<i class="fa fa-cogs"></i>
							FORM PENGATURAN
						</div>
						<div class="panel-body">
							<div class="form-group">
								<label>NAMA SITUS / TITLE</label>
								<input type="text" name="title" class="form-control" placeholder="..." />
							</div>
                            <div class="form-group">
								<label>META TAG</label>
								<textarea name="meta_tag" class="form-control"></textarea>
							</div>
							<div class="form-group">
								<label>META DESKRIPSI</label>
								<textarea name="meta_deskripsi" class="form-control" rows="5"></textarea>
							</div>
							<div class="form-group">
								<label>LOGO</label>
								<input type="file" name="logo" class="form-control" placeholder="..." />
							</div>
							<div class="form-group">
								<label>FAVICON</label>
								<input type="file" name="favicon" class="form-control" placeholder="..." />
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