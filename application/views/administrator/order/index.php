        <div class="row">
			<ol class="breadcrumb">
				<li><a href="<?=base_url()?>"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Order</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">
                    <i class="fa fa-shopping-cart"></i>
                    Daftar Order
                </h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">
                        <i class="fa fa-table"></i>
                        TABEL ORDER
                    </div>
					<div class="panel-body">
						<table id="table-data" class="display table-stripped" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>RESI</th>
                                    <th>PEMBELI</th>
                                    <th>TELP</th>
                                    <th>TOTAL HARGA</th>
                                    <th>STATUS</th>
                                    <th>TANGGAL</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>RESI</th>
                                    <th>PEMBELI</th>
                                    <th>TELP</th>
                                    <th>TOTAL HARGA</th>
                                    <th>STATUS</th>
                                    <th>TANGGAL</th>
                                    <th></th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <tr>
                                    <td class="text-center">#0192487</td>
                                    <td>Miswanto</td>
                                    <td class="text-center">081329000000</td>
                                    <td class="text-right">Rp120.000</td>
                                    <td class="text-center">
                                        <span class="label label-warning">Baru</span>
                                    </td>
                                    <td class="text-center">03 JAN 2017</td>
                                    <td class="text-center">
                                        <a href="<?=base_url('/administrator/order/show/1.html')?>" class="btn btn-xs btn-default">
                                            <i class="fa fa-search"></i>
                                        </a>
                                        <a href="" class="btn btn-xs btn-danger">
                                            <i class="fa fa-trash-o"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">#1984687</td>
                                    <td>Miswanto</td>
                                    <td class="text-center">081329000000</td>
                                    <td class="text-right">Rp120.000</td>
                                    <td class="text-center">
                                        <span class="label label-info">Payout</span>
                                    </td>
                                    <td class="text-center">03 JAN 2017</td>
                                    <td class="text-center">
                                        <a href="<?=base_url('/administrator/order/show/1.html')?>" class="btn btn-xs btn-default">
                                            <i class="fa fa-search"></i>
                                        </a>
                                        <a href="" class="btn btn-xs btn-danger">
                                            <i class="fa fa-trash-o"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">#5837289</td>
                                    <td>Miswanto</td>
                                    <td class="text-center">081329000000</td>
                                    <td class="text-right">Rp120.000</td>
                                    <td class="text-center">
                                        <span class="label label-success">Terkirim</span>
                                    </td>
                                    <td class="text-center">03 JAN 2017</td>
                                    <td class="text-center">
                                        <a href="<?=base_url('/administrator/order/show/1.html')?>" class="btn btn-xs btn-default">
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