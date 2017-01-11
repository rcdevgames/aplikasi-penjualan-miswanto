        <div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Pelanggan</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">
                    <i class="fa fa-users"></i>
                    Daftar Pelanggan
                </h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">
                        <i class="fa fa-table"></i>
                        TABEL PELANGGAN
                    </div>
					<div class="panel-body">
						<table id="table-data" class="display table-stripped" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>NAMA</th>
                                    <th>EMAIL</th>
                                    <th>TELP</th>
                                    <th>REGISTER PADA</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>NAMA</th>
                                    <th>EMAIL</th>
                                    <th>TELP</th>
                                    <th>REGISTER PADA</th>
                                    <th></th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <tr>
                                    <td class="text-center">#0192487</td>
                                    <td>MISWANTO</td>
                                    <td>miswanto@gmail.com</td>
                                    <td class="text-center">081329123456</td>
                                    <td class="text-center">03 JAN 2017, 09:30:00</td>
                                    <td class="text-center">
                                        <a href="<?=base_url('/administrator/pelanggan/show/1.html')?>" class="btn btn-xs btn-default">
                                            <i class="fa fa-search"></i>
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