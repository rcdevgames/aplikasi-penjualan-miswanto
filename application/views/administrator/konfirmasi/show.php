        <div class="row">
			<ol class="breadcrumb">
				<li><a href="<?=base_url()?>"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li><a href="<?=base_url('/administrator/konfirmasi.html')?>">Konfirmasi</a></li>
				<li class="active">Show</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">
                    <i class="fa fa-envelope"></i>
                    Show | Konfirmasi Order
                </h1>
			</div>
		</div><!--/.row-->

        <div class="row">
			<div class="col-lg-8 col-lg-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading">
                        <i class="fa fa-desktop"></i>
                        DETAIL KONFIRMASI

                        <a href="" class="btn btn-primary pull-right" title="CETAK">
                            <i class="fa fa-print"></i>
                        </a>
                    </div>
					<div class="panel-body">
						<table class="table table-striped">
                            <tr>
                                <td class="text-right" width="30%"><b>NO RESI</b></td>
                                <td width="1%"><b>:</b></td><td>#<?=$show['resi']?></td>
                            </tr>
                            <tr>
                                <td class="text-right" width="30%"><b>PEMBELI</b></td>
                                <td width="1%"><b>:</b></td><td><?=strtoupper($show['nama_pelanggan'])?></td>
                            </tr>
                            <tr>
                                <td class="text-right" width="30%"><b>TELP</b></td>
                                <td width="1%"><b>:</b></td><td><?=strtoupper($show['phone'])?></td>
                            </tr>

                            <tr>
                                <td class="text-right" width="30%"><b>METODE PEMBAYARAN</b></td>
                                <td width="1%"><b>:</b></td><td><?=strtoupper($show['metode'])?></td>
                            </tr>
                            <tr>
                                <td class="text-right" width="30%"><b>BANK TUJUAN</b></td>
                                <td width="1%"><b>:</b></td><td><?=strtoupper($show['tujuan'])?></td>
                            </tr>
                            <tr>
                                <td class="text-right" width="30%"><b>REKENING PENGIRIM</b></td>
                                <td width="1%"><b>:</b></td><td><?=strtoupper($show['rekening'])?></td>
                            </tr>
                            <tr>
                                <td class="text-right" width="30%"><b>ATAS NAMA</b></td>
                                <td width="1%"><b>:</b></td><td><?=strtoupper($show['atasnama'])?></td>
                            </tr>
                            <tr>
                                <td class="text-right" width="30%"><b>WAKTU PEMBAYARAN</b></td>
                                <td width="1%"><b>:</b></td><td><?=$this->dateid->datetime_encode($show['created_at'])?></td>
                            </tr>
                        </table>
					</div>
				</div>
			</div>
		</div><!--/.row-->