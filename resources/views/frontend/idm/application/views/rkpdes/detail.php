	<p>
		<button class="btn btn-blue btn-icon icon-left btn-cetak">
			<i class="entypo-print"></i>
			Cetak RKPDES
		</button>
	</p>
	<table class="table table-bordered datatable" id="detail-profil">
		<tbody>
			<tr>
				<td width="25%">Provinsi</td>
				<td width="75%"><?php echo $rkpdes->provinsi_id ?></td>
			</tr>
			<tr>
				<td>Kabupaten</td>
				<td><?php echo $rkpdes->kabupaten_id ?></td>
			</tr>
			<tr>
				<td>Kecamatan</td>
				<td><?php echo date_reverse($rkpdes->kecamatan_id) ?></td>
			</tr>
			<tr>
				<td>Desa</td>
				<td><?php echo $rkpdes->desa_id ?></td>
			</tr>
			<tr>
				<td>Jumlah Dana Desa</td>
				<td><?php echo price_format($rkpdes->jumlah_dana_desa) ?></td>
			</tr>
			<tr>
				<td>Jumlah Alokasi Dana Desa</td>
				<td><?php echo price_format($rkpdes->jumlah_alokasi_dana_desa) ?></td>
			</tr>
			<tr>
				<td>Jenis Kegiatan Pertanian</td>
				<td><?php echo $rkpdes->jenis ?></td>
			</tr>
			<tr>
				<td>Volume</td>
				<td><?php echo $rkpdes->volume ?></td>
			</tr>
			<tr>
				<td>Nilai</td>
				<td><?php echo $rkpdes->nilai ?></td>
			</tr>
			<tr>
				<td>Sumber Dana Desa</td>
				<td><?php echo price_format($rkpdes->sumber_dana_desa) ?></td>
			</tr>
			<tr>
				<td>Sumber Alokasi Dana Desa</td>
				<td><?php echo price_format($rkpdes->sumber_alokasi_dana_desa) ?></td>
			</tr>
			<tr>
				<td>Persentase Dana Dari Desa</td>
				<td><?php echo $rkpdes->persentase ?></td>
			</tr>
			<tr>
				<td>Pengelola Dana Desa</td>
				<td><?php echo $rkpdes->pengelola ?></td>
			</tr>
			<tr>
				<td>Keterangan</td>
				<td><?php echo $rkpdes->keterangan ?></td>
			</tr>
		</tbody>
	</table>
	<script>
		jQuery(document).ready(function($){
			$(".btn-cetak").click(function(){
				$('#detail-profil').printThis();
			});
		});
	</script>