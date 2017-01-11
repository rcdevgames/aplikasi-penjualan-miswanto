        <div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Produk</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">
                    <i class="fa fa-cubes"></i>
                    Produk 
                </h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">
                        <i class="fa fa-table"></i>
                        TABEL PRODUK

                        <a href="<?=base_url('/administrator/produk/add')?>" class="btn btn-primary btn-lg pull-right">
                            <i class="fa fa-plus"></i> TAMBAH
                        </a>
                    </div>
					<div class="panel-body">
						<table id="table-data" class="display table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th width="80px">GAMBAR</th>
                                    <th>PRODUK</th>
                                    <th>STOK</th>
                                    <th>HARGA</th>
                                    <th>STATUS</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>GAMBAR</th>
                                    <th>PRODUK</th>
                                    <th>STOK</th>
                                    <th>HARGA</th>
                                    <th>STATUS</th>
                                    <th></th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <tr>
                                    <td><img src="<?=base_url('/assets/theme/img/index3banner2.jpg')?>" width="80px" /></td>
                                    <td>Produk Name One</td>
                                    <td class="text-center">20</td>
                                    <td class="text-right">Rp120.000</td>
                                    <td class="text-center">
                                        <span class="label label-success">OnStock</span>    
                                    </td>
                                    <td class="text-center">
                                        <a href="" class="btn btn-xs btn-primary">
                                            <i class="fa fa-search"></i>
                                        </a>
                                        <a href="" class="btn btn-xs btn-default">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="" class="btn btn-xs btn-danger">
                                            <i class="fa fa-trash-o"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="<?=base_url('/assets/theme/img/index3banner.jpg')?>" width="80px" /></td>
                                    <td>Produk Name Two</td>
                                    <td class="text-center">15</td>
                                    <td class="text-right">Rp110.000</td>
                                    <td class="text-center">
                                        <span class="label label-danger">Habis</span>
                                    </td>
                                    <td class="text-center">
                                        <a href="" class="btn btn-xs btn-primary">
                                            <i class="fa fa-search"></i>
                                        </a>
                                        <a href="" class="btn btn-xs btn-default">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="" class="btn btn-xs btn-danger">
                                            <i class="fa fa-trash-o"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
					</div>
				</div>
			</div>
		</div><!--/.row-->