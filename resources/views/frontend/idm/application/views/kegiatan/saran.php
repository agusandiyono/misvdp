	<p>
		<button class="btn btn-blue btn-icon icon-left btn-cetak">
			<i class="entypo-print"></i>
			Cetak kegiatan
		</button>
	</p>
	<table class="table table-bordered datatable" id="detail-kegiatan">
		<tbody>
			<tr>
				<td colspan="2"><h3>Informasi Kegiatan</h3></td>
			</tr>
			<tr>
				<td width="20%">Nama Kegiatan</td>
				<td width="80%"><?php echo $kegiatan->nama; ?></td>
			</tr>
			<?php if(!empty($kegiatan->sub_kegiatan)): ?>
			<tr>
				<td width="20%">Sub Kegiatan</td>
				<td width="80%"><?php echo nl2br($kegiatan->sub_kegiatan); ?></td>
			</tr>
			<?php endif ?>
			<tr>
				<td>Tanggal</td>
				<td><?php echo date_detail($kegiatan->tanggal) ?></td>
			</tr>
			<tr>
				<td>Provinsi</td>
				<td><?php echo $kegiatan->provinsi ?></td>
			</tr>
			<tr>
				<td>Kabupaten</td>
				<td><?php echo $kegiatan->kabupaten ?></td>
			</tr>
			<tr>
				<td>Kecamatan</td>
				<td><?php echo $kegiatan->kecamatan ?></td>
			</tr>
			<tr>
				<td>Desa</td>
				<td><?php echo $kegiatan->desa ?></td>
			</tr>
			<tr>
				<td>Progress</td>
				<td><?php echo $kegiatan->status == 1 ? "Sudah Terlaksana" : "Belum Terlaksana" ?></td>
			</tr>
			<tr>
				<td>Gambaran Pelaksanaan Kegiatan</td>
				<td><?php echo $kegiatan->deskripsi ?></td>
			</tr>
			<tr>
				<td>Sasaran</td>
				<td><?php echo $kegiatan->sasaran ?></td>
			</tr>
			<tr>
				<td>Jumlah Peserta yang Hadir</td>
				<td>
					<div>Laki-laki: <?php echo $kegiatan->jumlah_lk ?></div>
					<div>Perempuan: <?php echo $kegiatan->jumlah_p ?></div>
				</td>
			</tr>
		<?php if(!empty($list_foto) || !empty($list_video)): ?>
			<tr>
				<td colspan="2"><h3>Dokumentasi</h3></td>
			</tr>
			<?php if(!empty($list_foto)): ?>
				<tr>
					<td>Foto</td>
					<td>
					<?php foreach($list_foto as $foto): ?>
						<div class="col-xs-4">
							<img src="<?php echo base_url('uploads/foto/'.$foto) ?>" alt="<?php echo $foto ?>" class="img-responsive">
						</div>
					<?php endforeach ?>
					</td>
				</tr>
			<?php endif ?>
			<?php if(!empty($list_video)): ?>
				<tr>
					<td>Foto</td>
					<td>
					<?php foreach($list_video as $video): ?>
						<div><a href="<?php echo base_url('uploads/video/'.$video) ?>"><?php echo base_url('uploads/video/'.$video) ?></a></div>
					<?php endforeach ?>
					</td>
				</tr>
			<?php endif ?>
		<?php endif ?>
			<tr>
				<td colspan="2"><h3>Pemahaman Peserta</h3></td>
			</tr>
			<tr>
				<td>Berapa Persen Sasaran Dapat Memahami?</td>
				<td><?php echo $kegiatan->jumlah_paham ?>%</td>
			</tr>
			<tr>
				<td>Apa Alasan Anda Mereka Dapat Memahami?</td>
				<td><?php echo $kegiatan->alasan_paham ?></td>
			</tr>
			<tr>
				<td colspan="2"><h3>Kesimpulan</h3></td>
			</tr>
			<tr>
				<td>Masalah</td>
				<td><?php echo $kegiatan->masalah ?></td>
			</tr>
			<tr>
				<td>Saran/Rekomendasi</td>
				<td>
					<form role="form" method="post" class="form-horizontal validate">
						<input type="hidden" name="<?php echo $this->security->get_csrf_token_name() ?>" id="csrf" value="<?php echo $this->security->get_csrf_hash() ?>" />
						<div class="form-group">
							<div class="col-sm-12">
								<textarea class="form-control ckeditor" name="data[saran]"><?php echo $kegiatan->saran ?></textarea>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-5">
								<button type="submit" class="btn btn-lg btn-success"><i class="entypo-check"></i> Simpan</button>
								<a href="<?php echo base_url('kegiatan') ?>" class="btn btn-lg btn-red pull-right"><i class="entypo-back"></i> Kembali</a>
							</div>
						</div>
					</form>
				</td>
			</tr>
			<tr>
				<td>Rencana Tindak Lanjut</td>
				<td><?php echo $kegiatan->rencana_tindak_lanjut ?></td>
			</tr>
			<tr>
				<td>Tindak Lanjut Masalah Bulan Lalu</td>
				<td><?php echo $kegiatan->tindak_lanjut_lalu ?></td>
			</tr>
		</tbody>
	</table>
	<script>
		jQuery(document).ready(function($){
			$(".btn-cetak").click(function(){
				$('#detail-kegiatan').printThis();
			});
		});
	</script>