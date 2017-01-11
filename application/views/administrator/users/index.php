        <div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Users</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">
                    <i class="fa fa-user"></i>
                    Daftar Users
                </h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">
                        <i class="fa fa-table"></i>
                        TABEL USERS

                        <a href="<?=base_url('/administrator/users/add.html')?>" class="btn btn-primary btn-lg pull-right">
                            <i class="fa fa-plus"></i> TAMBAH
                        </a>
                    </div>
					<div class="panel-body">
						<table id="table-data" class="display table-stripped" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>NAMA</th>
                                    <th>USERNAME</th>
                                    <th>EMAIL</th>
                                    <th>REGISTER PADA</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>NAMA</th>
                                    <th>USERNAME</th>
                                    <th>EMAIL</th>
                                    <th>REGISTER PADA</th>
                                    <th></th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <tr>
                                    <td>ADMINISTRATOR</td>
                                    <td>administrator</td>
                                    <td>administrator@admin.com</td>
                                    <td class="text-center">03 JAN 2017, 09:30:00</td>
                                    <td class="text-center">
                                        <label class="label label-warning">
                                            <i class="fa fa-exclamation-triangle"></i> WARNING!
                                        </label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>MISWANTO</td>
                                    <td>miswanto</td>
                                    <td>miswanto@gmail.com</td>
                                    <td class="text-center">03 JAN 2017, 09:30:00</td>
                                    <td class="text-center">
                                        <a href="<?=base_url('/administrator/users/add.html')?>" class="btn btn-xs btn-default">
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