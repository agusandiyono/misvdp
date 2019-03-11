	<p>
		<button class="btn btn-blue btn-icon icon-left btn-cetak">
			<i class="entypo-print"></i>
			Cetak evkin
		</button>
	</p>
	<table class="table table-bordered datatable" id="detail-profil">
		<tbody>
			<tr>
				<td width="25%">Nomor Kuisioner</td>
				<td width="75%"><?php echo $evkin->no_kuisioner ?></td>
			</tr>
			<tr>
				<td>Pewawancara</td>
				<td><?php echo $evkin->pewawancara ?></td>
			</tr>
			<tr>
				<td>Tanggal Kegiatan</td>
				<td><?php echo date_reverse($evkin->tanggal) ?></td>
			</tr>
			<tr>
				<td>Nomor Urut</td>
				<td><?php echo $evkin->no_urut ?></td>
			</tr>
			<tr>
				<td>Nama Kelompok Tani</td>
				<td><?php echo $evkin->nama ?></td>
			</tr>
			<tr>
				<td>Provinsi</td>
				<td><?php echo $evkin->provinsi_name ?></td>
			</tr>
			<tr>
				<td>Kabupaten</td>
				<td><?php echo $evkin->kabupaten_name ?></td>
			</tr>
			<tr>
				<td>Kecamatan</td>
				<td><?php echo $evkin->kecamatan_name ?></td>
			</tr>
			<tr>
				<td>Desa</td>
				<td><?php echo $evkin->desa_name ?></td>
			</tr>
			<tr>
				<td colspan="2"><h3>I. Kelembagaan Kelompok</h3></td>
			</tr>
			<tr>
				<td colspan="2"><h4>1.1 Apakah Kelompok memiliki Struktur pengelola sebagai Berikut?</h4></td>
			</tr>
			<tr>
				<td>Ketua Kelompok</td>
				<td><?php echo ($evkin->detail['struktur']['ketua']['opsi'] == 'a' ? "Ada" : "Tidak Ada") . (!empty($evkin->detail['struktur']['ketua']['keterangan']) ? ", ".$evkin->detail['struktur']['ketua']['keterangan'] : "") ?></td>
			</tr>
			<tr>
				<td>Bendahara</td>
				<td><?php echo ($evkin->detail['struktur']['bendahara']['opsi'] == 'a' ? "Ada" : "Tidak Ada") . (!empty($evkin->detail['struktur']['bendahara']['keterangan']) ? ", ".$evkin->detail['struktur']['bendahara']['keterangan'] : "") ?></td>
			</tr>
			<tr>
				<td>Sekertaris</td>
				<td><?php echo ($evkin->detail['struktur']['sekertaris']['opsi'] == 'a' ? "Ada" : "Tidak Ada") . (!empty($evkin->detail['struktur']['sekertaris']['keterangan']) ? ", ".$evkin->detail['struktur']['sekertaris']['keterangan'] : "") ?></td>
			</tr>
			<tr>
				<td>Seksi Pemasaran</td>
				<td><?php echo ($evkin->detail['struktur']['pemasaran']['opsi'] == 'a' ? "Ada" : "Tidak Ada") . (!empty($evkin->detail['struktur']['pemasaran']['keterangan']) ? ", ".$evkin->detail['struktur']['pemasaran']['keterangan'] : "") ?></td>
			</tr>
			<tr>
				<td>Seksi Peralatan</td>
				<td><?php echo ($evkin->detail['struktur']['peralatan']['opsi'] == 'a' ? "Ada" : "Tidak Ada") . (!empty($evkin->detail['struktur']['peralatan']['keterangan']) ? ", ".$evkin->detail['struktur']['peralatan']['keterangan'] : "") ?></td>
			</tr>
		<?php if(!empty($evkin->detail['struktur']['pengelola_lainnya']['nama'])): ?>
			<tr>
				<td><?php echo $evkin->detail['struktur']['pengelola_lainnya']['nama'] ?></td>
				<td><?php echo ($evkin->detail['struktur']['pengelola_lainnya']['opsi'] == 'a' ? "Ada" : "Tidak Ada") . (!empty($evkin->detail['struktur']['pengelola_lainnya']['keterangan']) ? ", ".$evkin->detail['struktur']['pengelola_lainnya']['keterangan'] : "") ?></td>
			</tr>
		<?php endif ?>
			<tr>
				<td colspan="2"><h4>1.2 Apakah Tim 3 Tungku berperan dalam?</h4></td>
			</tr>
			<tr>
				<td>Perencanaan Bersama Masyarakat</td>
				<td><?php echo ($evkin->detail['struktur']['perencanaan']['opsi'] == 'a' ? "Ada" : "Tidak Ada") . (!empty($evkin->detail['struktur']['perencanaan']['keterangan']) ? ", ".$evkin->detail['struktur']['perencanaan']['keterangan'] : "") ?></td>
			</tr>
			<tr>
				<td>MKPP</td>
				<td><?php echo ($evkin->detail['struktur']['mkpp']['opsi'] == 'a' ? "Berperan" : "Tidak Berperan") . (!empty($evkin->detail['struktur']['mkpp']['keterangan']) ? ", ".$evkin->detail['struktur']['mkpp']['keterangan'] : "") ?></td>
			</tr>
			<tr>
				<td>MKP I</td>
				<td><?php echo ($evkin->detail['struktur']['mkp1']['opsi'] == 'a' ? "Berperan" : "Tidak Berperan") . (!empty($evkin->detail['struktur']['mkp1']['keterangan']) ? ", ".$evkin->detail['struktur']['mkp1']['keterangan'] : "") ?></td>
			</tr>
			<tr>
				<td>MKP II</td>
				<td><?php echo ($evkin->detail['struktur']['mkp2']['opsi'] == 'a' ? "Berperan" : "Tidak Berperan") . (!empty($evkin->detail['struktur']['mkp2']['keterangan']) ? ", ".$evkin->detail['struktur']['mkp2']['keterangan'] : "") ?></td>
			</tr>
			<tr>
				<td>MKST</td>
				<td><?php echo ($evkin->detail['struktur']['mkst']['opsi'] == 'a' ? "Berperan" : "Tidak Berperan") . (!empty($evkin->detail['struktur']['mkst']['keterangan']) ? ", ".$evkin->detail['struktur']['mkst']['keterangan'] : "") ?></td>
			</tr>
			<tr>
				<td>Pemantauan Pelaksanaan</td>
				<td><?php echo ($evkin->detail['struktur']['pemantauan']['opsi'] == 'a' ? "Berperan" : "Tidak Berperan") . (!empty($evkin->detail['struktur']['pemantauan']['keterangan']) ? ", ".$evkin->detail['struktur']['pemantauan']['keterangan'] : "") ?></td>
			</tr>
			<tr>
				<td colspan="2"><h3>II. Dinamika Kelompok Tani</h3></td>
			</tr>
			<tr>
				<td colspan="2"><h4>2.1 Rencana Kerja Operasional</h4></td>
			</tr>
			<tr>
				<td>Apakah TPKK Memiliki Rencana Kerja</td>
				<td><?php echo ($evkin->detail['operasional']['tpkk']['opsi'] == 'a' ? "Ada" : "Tidak Ada") . (!empty($evkin->detail['operasional']['tpkk']['keterangan']) ? ", ".$evkin->detail['operasional']['tpkk']['keterangan'] : "") ?></td>
			</tr>
			<tr>
				<td colspan="2">Dasar penyusunan rencana kerja?</td>
			</tr>
			<tr>
				<td>Program PNPM</td>
				<td><?php echo ($evkin->detail['operasional']['pnpm']['opsi'] == 'a' ? "Ya" : "Tidak") . (!empty($evkin->detail['operasional']['pnpm']['keterangan']) ? ", ".$evkin->detail['operasional']['pnpm']['keterangan'] : "") ?></td>
			</tr>
			<tr>
				<td>Tujuan Kelompok</td>
				<td><?php echo ($evkin->detail['operasional']['tujuan_kelompok']['opsi'] == 'a' ? "Ya" : "Tidak") . (!empty($evkin->detail['operasional']['tujuan_kelompok']['keterangan']) ? ", ".$evkin->detail['operasional']['tujuan_kelompok']['keterangan'] : "") ?></td>
			</tr>
			<tr>
				<td>Permasalahan</td>
				<td><?php echo ($evkin->detail['operasional']['permasalahan']['opsi'] == 'a' ? "Ya" : "Tidak") . (!empty($evkin->detail['operasional']['permasalahan']['keterangan']) ? ", ".$evkin->detail['operasional']['permasalahan']['keterangan'] : "") ?></td>
			</tr>
		<?php if(!empty($evkin->detail['operasional']['dasar_rencana_lainnya']['nama'])): ?>
			<tr>
				<td><?php echo $evkin->detail['operasional']['dasar_rencana_lainnya']['nama'] ?></td>
				<td><?php echo ($evkin->detail['operasional']['dasar_rencana_lainnya']['opsi'] == 'a' ? "Ada" : "Tidak Ada") . (!empty($evkin->detail['operasional']['dasar_rencana_lainnya']['keterangan']) ? ", ".$evkin->detail['operasional']['dasar_rencana_lainnya']['keterangan'] : "") ?></td>
			</tr>
		<?php endif ?>
			<tr>
				<td colspan="2">Apakah Rencana kerja yang telah disusun memuat?</td>
			</tr>
			<tr>
				<td>Pelaksanaan Kegiatan Kelompok</td>
				<td><?php echo ($evkin->detail['operasional']['pelaksanaan']['opsi'] == 'a' ? "Ada" : "Tidak Ada") . (!empty($evkin->detail['operasional']['pelaksanaan']['keterangan']) ? ", ".$evkin->detail['operasional']['pelaksanaan']['keterangan'] : "") ?></td>
			</tr>
			<tr>
				<td>Tindak Lanjut Permasalahan Yang Dihadapi</td>
				<td><?php echo ($evkin->detail['operasional']['tindak_lanjut']['opsi'] == 'a' ? "Ada" : "Tidak Ada") . (!empty($evkin->detail['operasional']['tindak_lanjut']['keterangan']) ? ", ".$evkin->detail['operasional']['tindak_lanjut']['keterangan'] : "") ?></td>
			</tr>
			<tr>
				<td>Tujuan Kegiatan</td>
				<td><?php echo ($evkin->detail['operasional']['tujuan_kegiatan']['opsi'] == 'a' ? "Ada" : "Tidak Ada") . (!empty($evkin->detail['operasional']['tujuan_kegiatan']['keterangan']) ? ", ".$evkin->detail['operasional']['tujuan_kegiatan']['keterangan'] : "") ?></td>
			</tr>
			<tr>
				<td>Waktu Pelaksanaan Kegiatan</td>
				<td><?php echo ($evkin->detail['operasional']['waktu']['opsi'] == 'a' ? "Ada" : "Tidak Ada") . (!empty($evkin->detail['operasional']['waktu']['keterangan']) ? ", ".$evkin->detail['operasional']['waktu']['keterangan'] : "") ?></td>
			</tr>
			<tr>
				<td>Rencana Peningkatan Usaha Tani</td>
				<td><?php echo ($evkin->detail['operasional']['rencana']['opsi'] == 'a' ? "Ada" : "Tidak Ada") . (!empty($evkin->detail['operasional']['rencana']['keterangan']) ? ", ".$evkin->detail['operasional']['rencana']['keterangan'] : "") ?></td>
			</tr>
			<tr>
				<td>Biaya</td>
				<td><?php echo ($evkin->detail['operasional']['biaya']['opsi'] == 'a' ? "Ada" : "Tidak Ada") . (!empty($evkin->detail['operasional']['biaya']['keterangan']) ? ", ".$evkin->detail['operasional']['biaya']['keterangan'] : "") ?></td>
			</tr>
			<tr>
				<td>Penanggungjawab Kegiatan</td>
				<td><?php echo ($evkin->detail['operasional']['penanggungjawab']['opsi'] == 'a' ? "Ada" : "Tidak Ada") . (!empty($evkin->detail['operasional']['penanggungjawab']['keterangan']) ? ", ".$evkin->detail['operasional']['penanggungjawab']['keterangan'] : "") ?></td>
			</tr>
		<?php if(!empty($evkin->detail['operasional']['memuat_lainnya']['nama'])): ?>
			<tr>
				<td><?php echo $evkin->detail['operasional']['memuat_lainnya']['nama'] ?></td>
				<td><?php echo ($evkin->detail['operasional']['memuat_lainnya']['opsi'] == 'a' ? "Ada" : "Tidak Ada") . (!empty($evkin->detail['operasional']['memuat_lainnya']['keterangan']) ? ", ".$evkin->detail['operasional']['memuat_lainnya']['keterangan'] : "") ?></td>
			</tr>
		<?php endif ?>
			<tr>
				<td>Kesesuaian Rencana Kerja Dengan Pelaksanaan</td>
				<td><?php echo ($evkin->detail['operasional']['sesuai']['opsi'] == 'a' ? "Sesuai" : "Tidak Sesuai") . (!empty($evkin->detail['operasional']['sesuai']['keterangan']) ? ", ".$evkin->detail['operasional']['sesuai']['keterangan'] : "") ?></td>
			</tr>
			<tr>
				<td colspan="2">Bila tidak sesuai apa penyebabnya?</td>
			</tr>
			<tr>
				<td>Sumber Daya Manusia</td>
				<td><?php echo ($evkin->detail['operasional']['sdm']['opsi'] == 'a' ? "Ya" : "Tidak") . (!empty($evkin->detail['operasional']['sdm']['keterangan']) ? ", ".$evkin->detail['operasional']['sdm']['keterangan'] : "") ?></td>
			</tr>
			<tr>
				<td>Kendala Keuangan</td>
				<td><?php echo ($evkin->detail['operasional']['keuangan']['opsi'] == 'a' ? "Ya" : "Tidak") . (!empty($evkin->detail['operasional']['keuangan']['keterangan']) ? ", ".$evkin->detail['operasional']['keuangan']['keterangan'] : "") ?></td>
			</tr>
			<tr>
				<td>Sarana</td>
				<td><?php echo ($evkin->detail['operasional']['sarana']['opsi'] == 'a' ? "Ya" : "Tidak") . (!empty($evkin->detail['operasional']['sarana']['keterangan']) ? ", ".$evkin->detail['operasional']['sarana']['keterangan'] : "") ?></td>
			</tr>
		<?php if(!empty($evkin->detail['operasional']['penyebab_lainnya']['nama'])): ?>
			<tr>
				<td><?php echo $evkin->detail['operasional']['penyebab_lainnya']['nama'] ?></td>
				<td><?php echo ($evkin->detail['operasional']['penyebab_lainnya']['opsi'] == 'a' ? "Ada" : "Tidak Ada") . (!empty($evkin->detail['operasional']['penyebab_lainnya']['keterangan']) ? ", ".$evkin->detail['operasional']['penyebab_lainnya']['keterangan'] : "") ?></td>
			</tr>
		<?php endif ?>
			<tr>
				<td colspan="2"><h4>2.2 Pertemuan Kelompok</h4></td>
			</tr>
			<tr>
				<td colspan="2">Pokok Bahasan dalam pertemuan?</td>
			</tr>
			<tr>
				<td>Perencanaan Kegiatan</td>
				<td><?php echo ($evkin->detail['pertemuan']['perencanaan']['opsi'] == 'a' ? "Ya" : "Tidak") . (!empty($evkin->detail['pertemuan']['perencanaan']['keterangan']) ? ", ".$evkin->detail['pertemuan']['perencanaan']['keterangan'] : "") ?></td>
			</tr>
			<tr>
				<td>Pelaksanaan Kegiatan</td>
				<td><?php echo ($evkin->detail['pertemuan']['pelaksanaan']['opsi'] == 'a' ? "Ya" : "Tidak") . (!empty($evkin->detail['pertemuan']['pelaksanaan']['keterangan']) ? ", ".$evkin->detail['pertemuan']['pelaksanaan']['keterangan'] : "") ?></td>
			</tr>
			<tr>
				<td>Permasalahan</td>
				<td><?php echo ($evkin->detail['pertemuan']['permasalahan']['opsi'] == 'a' ? "Ya" : "Tidak") . (!empty($evkin->detail['pertemuan']['permasalahan']['keterangan']) ? ", ".$evkin->detail['pertemuan']['permasalahan']['keterangan'] : "") ?></td>
			</tr>
		<?php if(!empty($evkin->detail['pertemuan']['bahasan_lainnya']['nama'])): ?>
			<tr>
				<td><?php echo $evkin->detail['pertemuan']['bahasan_lainnya']['nama'] ?></td>
				<td><?php echo ($evkin->detail['pertemuan']['bahasan_lainnya']['opsi'] == 'a' ? "Ada" : "Tidak Ada") . (!empty($evkin->detail['pertemuan']['bahasan_lainnya']['keterangan']) ? ", ".$evkin->detail['pertemuan']['bahasan_lainnya']['keterangan'] : "") ?></td>
			</tr>
		<?php endif ?>
			<tr>
				<td>Apakah Kelompok Melakukan Pertemuan</td>
				<td><?php echo ($evkin->detail['pertemuan']['pertemuan']['opsi'] == 'a' ? "Ya" : "Tidak") . (!empty($evkin->detail['pertemuan']['pertemuan']['keterangan']) ? ", ".$evkin->detail['pertemuan']['pertemuan']['keterangan'] : "") ?></td>
			</tr>
			<tr>
				<td>Apakah Pertemuan Dilaksanakan Secara</td>
				<td><?php echo ($evkin->detail['pertemuan']['rutinitas']['opsi'] == 'a' ? "Rutin" : "Tidak Rutin") . (!empty($evkin->detail['pertemuan']['rutinitas']['keterangan']) ? ", ".$evkin->detail['pertemuan']['rutinitas']['keterangan'] : "") ?></td>
			</tr>
			<tr>
				<td>Frekuensi Pertemuan</td>
				<td>
				<?php
					echo ($evkin->detail['pertemuan']['frekuensi']['opsi'] == 'a' ? "1 kali sebulan" : "");
					echo ($evkin->detail['pertemuan']['frekuensi']['opsi'] == 'b' ? "1 kali per 2 bulan" : "");
					echo ($evkin->detail['pertemuan']['frekuensi']['opsi'] == 'c' ? "1 kali per 3 bulan" : "");

					(!empty($evkin->detail['pertemuan']['frekuensi']['keterangan']) ? "<br>".$evkin->detail['pertemuan']['frekuensi']['keterangan'] : "")
				?>
				</td>
			</tr>
			<tr>
				<td>Jumlah Anggota Yang Aktif Mengikuti Pertemuan Dalam 6 Bulan Terakhir</td>
				<td>
					Laki-laki: <?php echo $evkin->jumlah_lk > 0 ? $evkin->jumlah_lk : 0 ?><br>
					Perempuan: <?php echo $evkin->jumlah_p > 0 ? $evkin->jumlah_p : 0 ?>
				</td>
			</tr>
			<tr>
				<td colspan="2"><h4>2.3 Administrasi dan Kesekretariatan</h4></td>
			</tr>
			<tr>
				<td>Keberadaan Plang Program</td>
				<td><?php echo ($evkin->detail['administrasi']['plang']['opsi'] == 'a' ? "Ada" : "Tidak Ada") . (!empty($evkin->detail['administrasi']['plang']['keterangan']) ? ", ".$evkin->detail['administrasi']['plang']['keterangan'] : "") ?></td>
			</tr>
			<tr>
				<td>Keberadaan Papan Program</td>
				<td><?php echo ($evkin->detail['administrasi']['papan']['opsi'] == 'a' ? "Ada" : "Tidak Ada") . (!empty($evkin->detail['administrasi']['papan']['keterangan']) ? ", ".$evkin->detail['administrasi']['papan']['keterangan'] : "") ?></td>
			</tr>
			<tr>
				<td>Keberadaan Kotak Saran</td>
				<td><?php echo ($evkin->detail['administrasi']['kotak_saran']['opsi'] == 'a' ? "Ada" : "Tidak Ada") . (!empty($evkin->detail['administrasi']['kotak_saran']['keterangan']) ? ", ".$evkin->detail['administrasi']['kotak_saran']['keterangan'] : "") ?></td>
			</tr>
			<tr>
				<td>Apakah Kelompok Memiliki Papan Pengumuman</td>
				<td><?php echo ($evkin->detail['administrasi']['papan_pengumuman']['opsi'] == 'a' ? "Ada" : "Tidak Ada") . (!empty($evkin->detail['administrasi']['papan_pengumuman']['keterangan']) ? ", ".$evkin->detail['administrasi']['papan_pengumuman']['keterangan'] : "") ?></td>
			</tr>
			<tr>
				<td>Fungsi Dan Manfaat Papan Pengumuman</td>
				<td><?php echo ($evkin->detail['administrasi']['fungsi_papan']['opsi'] == 'a' ? "Berfungsi" : "Tidak Berfungsi") . (!empty($evkin->detail['administrasi']['fungsi_papan']['keterangan']) ? ", ".$evkin->detail['administrasi']['fungsi_papan']['keterangan'] : "") ?></td>
			</tr>
			<tr>
				<td colspan="2"><h4>2.4 Buku Administrasi</h4></td>
			</tr>
			<tr>
				<td>Buku Tamu</td>
				<td><?php echo ($evkin->detail['administrasi']['buku_tamu']['opsi'] == 'a' ? "Ada" : "Tidak Ada") . (!empty($evkin->detail['administrasi']['buku_tamu']['keterangan']) ? ", ".$evkin->detail['administrasi']['buku_tamu']['keterangan'] : "") ?></td>
			</tr>
			<tr>
				<td>Buku Anggota</td>
				<td><?php echo ($evkin->detail['administrasi']['buku_anggota']['opsi'] == 'a' ? "Ada" : "Tidak Ada") . (!empty($evkin->detail['administrasi']['buku_anggota']['keterangan']) ? ", ".$evkin->detail['administrasi']['buku_anggota']['keterangan'] : "") ?></td>
			</tr>
			<tr>
				<td>Buku Notulensi Rapat</td>
				<td><?php echo ($evkin->detail['administrasi']['buku_notulen']['opsi'] == 'a' ? "Ada" : "Tidak Ada") . (!empty($evkin->detail['administrasi']['buku_notulen']['keterangan']) ? ", ".$evkin->detail['administrasi']['buku_notulen']['keterangan'] : "") ?></td>
			</tr>
			<tr>
				<td>Buku Inventaris Barang</td>
				<td><?php echo ($evkin->detail['administrasi']['buku_inventaris']['opsi'] == 'a' ? "Ada" : "Tidak Ada") . (!empty($evkin->detail['administrasi']['buku_inventaris']['keterangan']) ? ", ".$evkin->detail['administrasi']['buku_inventaris']['keterangan'] : "") ?></td>
			</tr>
			<tr>
				<td>Daftar Hadir Rapat/kegiatan</td>
				<td><?php echo ($evkin->detail['administrasi']['buku_hadir']['opsi'] == 'a' ? "Ada" : "Tidak Ada") . (!empty($evkin->detail['administrasi']['buku_hadir']['keterangan']) ? ", ".$evkin->detail['administrasi']['buku_hadir']['keterangan'] : "") ?></td>
			</tr>
			<tr>
				<td colspan="2"><h4>2.5 Buku Keuangan</h4></td>
			</tr>
			<tr>
				<td>Buku Kas Tunai</td>
				<td><?php echo ($evkin->detail['administrasi']['buku_kas']['opsi'] == 'a' ? "Ada" : "Tidak Ada") . (!empty($evkin->detail['administrasi']['buku_kas']['keterangan']) ? ", ".$evkin->detail['administrasi']['buku_kas']['keterangan'] : "") ?></td>
			</tr>
			<tr>
				<td>Buku Bank</td>
				<td><?php echo ($evkin->detail['administrasi']['buku_bank']['opsi'] == 'a' ? "Ada" : "Tidak Ada") . (!empty($evkin->detail['administrasi']['buku_bank']['keterangan']) ? ", ".$evkin->detail['administrasi']['buku_bank']['keterangan'] : "") ?></td>
			</tr>
			<tr>
				<td>Apakah Setiap Transaksi Sesuai Dengan RPD</td>
				<td><?php echo ($evkin->detail['administrasi']['transaksi']['opsi'] == 'a' ? "Sesuai" : "Tidak Sesuai") . (!empty($evkin->detail['administrasi']['transaksi']['keterangan']) ? ", ".$evkin->detail['administrasi']['transaksi']['keterangan'] : "") ?></td>
			</tr>
			<tr>
				<td>Setiap Transaksi Di Catat Tepat Waktu</td>
				<td><?php echo ($evkin->detail['administrasi']['tepat_waktu']['opsi'] == 'a' ? "Ya" : "Tidak") . (!empty($evkin->detail['administrasi']['tepat_waktu']['keterangan']) ? ", ".$evkin->detail['administrasi']['tepat_waktu']['keterangan'] : "") ?></td>
			</tr>
			<tr>
				<td>Apakah Bukti Transaksi Didokumentasikan</td>
				<td><?php echo ($evkin->detail['administrasi']['dokumentasi_transaksi']['opsi'] == 'a' ? "Ya" : "Tidak") . (!empty($evkin->detail['administrasi']['dokumentasi_transaksi']['keterangan']) ? ", ".$evkin->detail['administrasi']['dokumentasi_transaksi']['keterangan'] : "") ?></td>
			</tr>
			<tr>
				<td>Apakah Setiap Transaksi Disertai Dengan Bukti Sah</td>
				<td><?php echo ($evkin->detail['administrasi']['bukti_transaksi']['opsi'] == 'a' ? "Ya" : "Tidak") . (!empty($evkin->detail['administrasi']['bukti_transaksi']['keterangan']) ? ", ".$evkin->detail['administrasi']['bukti_transaksi']['keterangan'] : "") ?></td>
			</tr>
			<tr>
				<td>TPK Membuat Rekapitulasi  Pencatatan</td>
				<td><?php echo ($evkin->detail['administrasi']['rekapitulasi']['opsi'] == 'a' ? "Ya" : "Tidak") . (!empty($evkin->detail['administrasi']['rekapitulasi']['keterangan']) ? ", ".$evkin->detail['administrasi']['rekapitulasi']['keterangan'] : "") ?></td>
			</tr>
			<tr>
				<td colspan="2"><h4>2.6 Laporan</h4></td>
			</tr>
			<tr>
				<td>Ketepatan  Penyerahan Laporan Bulanan</td>
				<td><?php echo ($evkin->detail['administrasi']['laporan']['opsi'] == 'a' ? "Tepat waktu" : "Tidak tepat waktu") . (!empty($evkin->detail['administrasi']['laporan']['keterangan']) ? ", ".$evkin->detail['administrasi']['laporan']['keterangan'] : "") ?></td>
			</tr>
			<tr>
				<td colspan="2"><h3>III. Kegiatan Usaha Tani</h3></td>
			</tr>
			<tr>
				<td colspan="2"><h4>3.1 Teknik Budidaya</h4></td>
			</tr>
			<tr>
				<td>Kelompok Tani Sudah Melaksanakan Teknik</td>
				<td><?php echo ($evkin->detail['kegiatan']['kegiatan_kelompok']['opsi'] == 'a' ? "Sudah" : "Belum") . (!empty($evkin->detail['kegiatan']['kegiatan_kelompok']['keterangan']) ? ", ".$evkin->detail['kegiatan']['kegiatan_kelompok']['keterangan'] : "") ?></td>
			</tr>
			<tr>
				<td colspan="2">Jika Belum apa penyebabnya?</td>
			</tr>
			<tr>
				<td>Sumber Daya Manusia</td>
				<td><?php echo ($evkin->detail['kegiatan']['sdm_kelompok']['opsi'] == 'a' ? "Ya" : "Tidak") . (!empty($evkin->detail['kegiatan']['sdm_kelompok']['keterangan']) ? ", ".$evkin->detail['kegiatan']['sdm_kelompok']['keterangan'] : "") ?></td>
			</tr>
			<tr>
				<td>Kendala Keuangan</td>
				<td><?php echo ($evkin->detail['kegiatan']['keuangan_kelompok']['opsi'] == 'a' ? "Ya" : "Tidak") . (!empty($evkin->detail['kegiatan']['keuangan_kelompok']['keterangan']) ? ", ".$evkin->detail['kegiatan']['keuangan_kelompok']['keterangan'] : "") ?></td>
			</tr>
			<tr>
				<td>Sarana</td>
				<td><?php echo ($evkin->detail['kegiatan']['sarana_kelompok']['opsi'] == 'a' ? "Ya" : "Tidak") . (!empty($evkin->detail['kegiatan']['sarana_kelompok']['keterangan']) ? ", ".$evkin->detail['kegiatan']['sarana_kelompok']['keterangan'] : "") ?></td>
			</tr>
		<?php if(!empty($evkin->detail['kegiatan']['penyebab_lainnya_kelompok']['nama'])): ?>
			<tr>
				<td><?php echo $evkin->detail['kegiatan']['penyebab_lainnya_kelompok']['nama'] ?></td>
				<td><?php echo ($evkin->detail['kegiatan']['penyebab_lainnya_kelompok']['opsi'] == 'a' ? "Ya" : "Tidak") . (!empty($evkin->detail['kegiatan']['penyebab_lainnya_kelompok']['keterangan']) ? ", ".$evkin->detail['kegiatan']['penyebab_lainnya_kelompok']['keterangan'] : "") ?></td>
			</tr>
		<?php endif ?>
			<tr>
				<td>Masyarakat Melaksanakan Teknik-teknik Dasar Budidaya Yang Dianjurkan</td>
				<td><?php echo ($evkin->detail['kegiatan']['kegiatan_masyarakat']['opsi'] == 'a' ? "Sudah" : "Belum") . (!empty($evkin->detail['kegiatan']['kegiatan_masyarakat']['keterangan']) ? ", ".$evkin->detail['kegiatan']['kegiatan_masyarakat']['keterangan'] : "") ?></td>
			</tr>
			<tr>
				<td colspan="2">Jika Belum apa penyebabnya?</td>
			</tr>
			<tr>
				<td>Sumber Daya Manusia</td>
				<td><?php echo ($evkin->detail['kegiatan']['sdm_masyarakat']['opsi'] == 'a' ? "Ya" : "Tidak") . (!empty($evkin->detail['kegiatan']['sdm_masyarakat']['keterangan']) ? ", ".$evkin->detail['kegiatan']['sdm_masyarakat']['keterangan'] : "") ?></td>
			</tr>
			<tr>
				<td>Kendala Keuangan</td>
				<td><?php echo ($evkin->detail['kegiatan']['keuangan_masyarakat']['opsi'] == 'a' ? "Ya" : "Tidak") . (!empty($evkin->detail['kegiatan']['keuangan_masyarakat']['keterangan']) ? ", ".$evkin->detail['kegiatan']['keuangan_masyarakat']['keterangan'] : "") ?></td>
			</tr>
			<tr>
				<td>Sarana</td>
				<td><?php echo ($evkin->detail['kegiatan']['sarana_masyarakat']['opsi'] == 'a' ? "Ya" : "Tidak") . (!empty($evkin->detail['kegiatan']['sarana_masyarakat']['keterangan']) ? ", ".$evkin->detail['kegiatan']['sarana_masyarakat']['keterangan'] : "") ?></td>
			</tr>
		<?php if(!empty($evkin->detail['kegiatan']['penyebab_lainnya_masyarakat']['nama'])): ?>
			<tr>
				<td><?php echo $evkin->detail['kegiatan']['penyebab_lainnya_masyarakat']['nama'] ?></td>
				<td><?php echo ($evkin->detail['kegiatan']['penyebab_lainnya_masyarakat']['opsi'] == 'a' ? "Ya" : "Tidak") . (!empty($evkin->detail['kegiatan']['penyebab_lainnya_masyarakat']['keterangan']) ? ", ".$evkin->detail['kegiatan']['penyebab_lainnya_masyarakat']['keterangan'] : "") ?></td>
			</tr>
		<?php endif ?>
			<tr>
				<td>Jika Sudah Berapa Persen</td>
				<td><?php echo !empty($evkin->detail['kegiatan']['persentase']) ? $evkin->detail['kegiatan']['persentase'] : "" ?></td>
			</tr>
			<tr>
				<td colspan="2"><h4>3.2 Hasil Produksi Pertanian/Perkebunan/peternakan/pengolahan hasil</h4></td>
			</tr>
			<tr>
				<td colspan="2">Sebelum Program PNPM Mpd Pertanian</td>
			</tr>
			<tr>
				<td>Dalam Satu Tahun Dilaksanakan Budidaya</td>
				<td>
				<?php
					echo ($evkin->detail['produksi']['budidaya_sebelum']['opsi'] == 'tidak' ? "Tidak Ada" : "");
					echo ($evkin->detail['produksi']['budidaya_sebelum']['opsi'] == 'a' ? "1 Kali setahun" : "");
					echo ($evkin->detail['produksi']['budidaya_sebelum']['opsi'] == 'b' ? "2 Kali setahun" : "");
					echo ($evkin->detail['produksi']['budidaya_sebelum']['opsi'] == 'c' ? "3 Kali setahun" : "");

					(!empty($evkin->detail['produksi']['budidaya_sebelum']['keterangan']) ? "<br>".$evkin->detail['produksi']['budidaya_sebelum']['keterangan'] : "")
				?>
				</td>
			</tr>
			<tr>
				<td>Hasil Yang Didapat Dalam Satu Kali Produksi</td>
				<td><?php echo (!empty($evkin->detail['produksi']['hasil_sebelum']['opsi']) ? $evkin->detail['produksi']['hasil_sebelum']['opsi'] : "") . (!empty($evkin->detail['produksi']['hasil_sebelum']['keterangan']) ? ", ".$evkin->detail['produksi']['hasil_sebelum']['keterangan'] : "") ?></td>
			</tr>
			<tr>
				<td>Harga Penjualan</td>
				<td><?php echo (!empty($evkin->detail['produksi']['harga_sebelum']['opsi']) ? $evkin->detail['produksi']['harga_sebelum']['opsi'] : "") . (!empty($evkin->detail['produksi']['harga_sebelum']['keterangan']) ? ", ".$evkin->detail['produksi']['harga_sebelum']['keterangan'] : "") ?></td>
			</tr>
			<tr>
				<td colspan="2">Setelah Program PNPM Mpd Pertanian</td>
			</tr>
			<tr>
				<td>Dalam Satu Tahun Dilaksanakan Budidaya</td>
				<td>
				<?php
					echo ($evkin->detail['produksi']['budidaya_setelah']['opsi'] == 'tidak' ? "Tidak Ada" : "");
					echo ($evkin->detail['produksi']['budidaya_setelah']['opsi'] == 'a' ? "1 Kali setahun" : "");
					echo ($evkin->detail['produksi']['budidaya_setelah']['opsi'] == 'b' ? "2 Kali setahun" : "");
					echo ($evkin->detail['produksi']['budidaya_setelah']['opsi'] == 'c' ? "3 Kali setahun" : "");

					(!empty($evkin->detail['produksi']['budidaya_setelah']['keterangan']) ? "<br>".$evkin->detail['produksi']['budidaya_setelah']['keterangan'] : "")
				?>
				</td>
			</tr>
			<tr>
				<td>Hasil Yang Didapat Dalam Satu Kali Produksi</td>
				<td><?php echo (!empty($evkin->detail['produksi']['hasil_setelah']['opsi']) ? $evkin->detail['produksi']['hasil_setelah']['opsi'] : "") . (!empty($evkin->detail['produksi']['hasil_setelah']['keterangan']) ? ", ".$evkin->detail['produksi']['hasil_setelah']['keterangan'] : "") ?></td>
			</tr>
			<tr>
				<td>Harga Penjualan</td>
				<td><?php echo (!empty($evkin->detail['produksi']['harga_setelah']['opsi']) ? $evkin->detail['produksi']['harga_setelah']['opsi'] : "") . (!empty($evkin->detail['produksi']['harga_setelah']['keterangan']) ? ", ".$evkin->detail['produksi']['harga_setelah']['keterangan'] : "") ?></td>
			</tr>
			<tr>
				<td colspan="2"><h3>IV. Kontribusi Masyarakat</h3></td>
			</tr>
			<tr>
				<td>Dana</td>
				<td><?php echo ($evkin->detail['kontribusi']['dana']['opsi'] == 'a' ? "Ya" : "Tidak") . (!empty($evkin->detail['kontribusi']['dana']['keterangan']) ? ", ".$evkin->detail['kontribusi']['dana']['keterangan'] : "") ?></td>
			</tr>
			<tr>
				<td>Tenaga</td>
				<td><?php echo ($evkin->detail['kontribusi']['tenaga']['opsi'] == 'a' ? "Ya" : "Tidak") . (!empty($evkin->detail['kontribusi']['tenaga']['keterangan']) ? ", ".$evkin->detail['kontribusi']['tenaga']['keterangan'] : "") ?></td>
			</tr>
			<tr>
				<td>Material</td>
				<td><?php echo ($evkin->detail['kontribusi']['material']['opsi'] == 'a' ? "Ya" : "Tidak") . (!empty($evkin->detail['kontribusi']['material']['keterangan']) ? ", ".$evkin->detail['kontribusi']['material']['keterangan'] : "") ?></td>
			</tr>
		<?php if(!empty($evkin->detail['kontribusi']['lainnya']['nama'])): ?>
			<tr>
				<td><?php echo $evkin->detail['kontribusi']['lainnya']['nama'] ?></td>
				<td><?php echo ($evkin->detail['kontribusi']['lainnya']['opsi'] == 'a' ? "Ya" : "Tidak") . (!empty($evkin->detail['kontribusi']['lainnya']['keterangan']) ? ", ".$evkin->detail['kontribusi']['lainnya']['keterangan'] : "") ?></td>
			</tr>
		<?php endif ?>
			<tr>
				<td colspan="2"><h3>V. Kemitraan</h3></td>
			</tr>
			<tr>
				<td colspan="2">Apakah Aparat Kampung berperan dalam?</td>
			</tr>
			<tr>
				<td>Perencanaan Bersama Masyarakat</td>
				<td><?php echo ($evkin->detail['kemitraan']['perencanaan']['opsi'] == 'a' ? "Berperan" : "Tidak Berperan") . (!empty($evkin->detail['kemitraan']['perencanaan']['keterangan']) ? ", ".$evkin->detail['kemitraan']['perencanaan']['keterangan'] : "") ?></td>
			</tr>
			<tr>
				<td>MKPP</td>
				<td><?php echo ($evkin->detail['kemitraan']['mkpp']['opsi'] == 'a' ? "Berperan" : "Tidak Berperan") . (!empty($evkin->detail['kemitraan']['mkpp']['keterangan']) ? ", ".$evkin->detail['kemitraan']['mkpp']['keterangan'] : "") ?></td>
			</tr>
			<tr>
				<td>MKP I</td>
				<td><?php echo ($evkin->detail['kemitraan']['mkp1']['opsi'] == 'a' ? "Berperan" : "Tidak Berperan") . (!empty($evkin->detail['kemitraan']['mkp1']['keterangan']) ? ", ".$evkin->detail['kemitraan']['mkp1']['keterangan'] : "") ?></td>
			</tr>
			<tr>
				<td>MKP II</td>
				<td><?php echo ($evkin->detail['kemitraan']['mkp2']['opsi'] == 'a' ? "Berperan" : "Tidak Berperan") . (!empty($evkin->detail['kemitraan']['mkp2']['keterangan']) ? ", ".$evkin->detail['kemitraan']['mkp2']['keterangan'] : "") ?></td>
			</tr>
			<tr>
				<td>MKST</td>
				<td><?php echo ($evkin->detail['kemitraan']['mkst']['opsi'] == 'a' ? "Berperan" : "Tidak Berperan") . (!empty($evkin->detail['kemitraan']['mkst']['keterangan']) ? ", ".$evkin->detail['kemitraan']['mkst']['keterangan'] : "") ?></td>
			</tr>
			<tr>
				<td>Pemantauan Pelaksanaan</td>
				<td><?php echo ($evkin->detail['kemitraan']['pemantauan']['opsi'] == 'a' ? "Berperan" : "Tidak Berperan") . (!empty($evkin->detail['kemitraan']['pemantauan']['keterangan']) ? ", ".$evkin->detail['kemitraan']['pemantauan']['keterangan'] : "") ?></td>
			</tr>
			<tr>
				<td>Apakah Kelompok Tani Anda Telah Bekerja Sama Dengan Mitra  Atau Lembaga Lainnya Dalam Upaya Meningkatkan Produktivitas</td>
				<td><?php echo ($evkin->detail['kemitraan']['mitra']['opsi'] == 'a' ? "Ya" : "Tidak") . (!empty($evkin->detail['kemitraan']['mitra']['keterangan']) ? ", ".$evkin->detail['kemitraan']['mitra']['keterangan'] : "") ?></td>
			</tr>
			<tr>
				<td>UPTD Kecamatan</td>
				<td><?php echo ($evkin->detail['kemitraan']['uptd_kecamatan']['opsi'] == 'a' ? "Ya" : "Tidak") . (!empty($evkin->detail['kemitraan']['uptd_kecamatan']['keterangan']) ? ", ".$evkin->detail['kemitraan']['uptd_kecamatan']['keterangan'] : "") ?></td>
			</tr>
			<tr>
				<td>Pendamping Kampung Pertanian</td>
				<td><?php echo ($evkin->detail['kemitraan']['pendamping_kampung']['opsi'] == 'a' ? "Ya" : "Tidak") . (!empty($evkin->detail['kemitraan']['pendamping_kampung']['keterangan']) ? ", ".$evkin->detail['kemitraan']['pendamping_kampung']['keterangan'] : "") ?></td>
			</tr>
			<tr>
				<td>BPMD Distrik</td>
				<td><?php echo ($evkin->detail['kemitraan']['bpmd_distrik']['opsi'] == 'a' ? "Ya" : "Tidak") . (!empty($evkin->detail['kemitraan']['bpmd_distrik']['keterangan']) ? ", ".$evkin->detail['kemitraan']['bpmd_distrik']['keterangan'] : "") ?></td>
			</tr>
			<tr>
				<td>Pendamping Distrik Pertanian</td>
				<td><?php echo ($evkin->detail['kemitraan']['pendamping_distrik']['opsi'] == 'a' ? "Ya" : "Tidak") . (!empty($evkin->detail['kemitraan']['pendamping_distrik']['keterangan']) ? ", ".$evkin->detail['kemitraan']['pendamping_distrik']['keterangan'] : "") ?></td>
			</tr>
			<tr>
				<td>Penyuluh Pertanian</td>
				<td><?php echo ($evkin->detail['kemitraan']['penyuluh']['opsi'] == 'a' ? "Ya" : "Tidak") . (!empty($evkin->detail['kemitraan']['penyuluh']['keterangan']) ? ", ".$evkin->detail['kemitraan']['penyuluh']['keterangan'] : "") ?></td>
			</tr>
			<tr>
				<td>BPMD Kabupaten</td>
				<td><?php echo ($evkin->detail['kemitraan']['bpmd_kabupaten']['opsi'] == 'a' ? "Ya" : "Tidak") . (!empty($evkin->detail['kemitraan']['bpmd_kabupaten']['keterangan']) ? ", ".$evkin->detail['kemitraan']['bpmd_kabupaten']['keterangan'] : "") ?></td>
			</tr>
		<?php if(!empty($evkin->detail['kemitraan']['lainnya']['nama'])): ?>
			<tr>
				<td><?php echo $evkin->detail['kemitraan']['lainnya']['nama'] ?></td>
				<td><?php echo ($evkin->detail['kemitraan']['lainnya']['opsi'] == 'a' ? "Ya" : "Tidak") . (!empty($evkin->detail['kemitraan']['lainnya']['keterangan']) ? ", ".$evkin->detail['kemitraan']['lainnya']['keterangan'] : "") ?></td>
			</tr>
		<?php endif ?>
			<tr>
				<td colspan="2"><h3>VI. Keberlanjutan Kelompok Tani</h3></td>
			</tr>
			<tr>
				<td>Apakah Ada Bantuan Pendanaan Dari Institusi Desa Atau Lainnya</td>
				<td><?php echo ($evkin->detail['keberlanjutan']['bantuan']['opsi'] == 'a' ? "Ada" : "Tidak Ada") . (!empty($evkin->detail['keberlanjutan']['bantuan']['keterangan']) ? ", ".$evkin->detail['keberlanjutan']['bantuan']['keterangan'] : "") ?></td>
			</tr>
			<tr>
				<td>Alokasi Dana Desa (ADD)</td>
				<td><?php echo ($evkin->detail['keberlanjutan']['dana_desa']['opsi'] == 'a' ? "Ada" : "Tidak Ada") . (!empty($evkin->detail['keberlanjutan']['dana_desa']['keterangan']) ? ", ".$evkin->detail['keberlanjutan']['dana_desa']['keterangan'] : "") ?></td>
			</tr>
			<tr>
				<td>Institusi Lain</td>
				<td><?php echo ($evkin->detail['keberlanjutan']['institusi_lain']['opsi'] == 'a' ? "Ada" : "Tidak Ada") . (!empty($evkin->detail['keberlanjutan']['institusi_lain']['keterangan']) ? ", ".$evkin->detail['keberlanjutan']['institusi_lain']['keterangan'] : "") ?></td>
			</tr>
			<tr>
				<td colspan="2"></td>
			</tr>
			<tr>
				<td>Hasil Penilaian</td>
				<td>
				<?php
					$hasil = round(($evkin->hasil_struktur + $evkin->hasil_operasional + $evkin->hasil_pertemuan + $evkin->hasil_administrasi + $evkin->hasil_kegiatan + $evkin->hasil_produksi + $evkin->hasil_kontribusi + $evkin->hasil_kemitraan + $evkin->hasil_keberlanjutan)/9);
					
					if($hasil >= 80) echo $hasil .' (UTAMA)';
					elseif($hasil >= 53 && $hasil <= 79) echo $hasil .' (MADYA)';
					else echo $hasil .' (PEMULA)';
				?>
				</td>
			</tr>
			<tr>
				<td>PJO Kabupaten</td>
				<td><?php echo !empty($evkin->detail['pembinaan']['pjo_kabupaten']) ? $evkin->detail['pembinaan']['pjo_kabupaten'] : "" ?></td>
			</tr>
			<tr>
				<td>Ketua Kelompok Tani</td>
				<td><?php echo !empty($evkin->detail['pembinaan']['ketua']) ? $evkin->detail['pembinaan']['ketua'] : "" ?></td>
			</tr>
			<tr>
				<td>Pendamping Distrik</td>
				<td><?php echo !empty($evkin->detail['pembinaan']['pendamping']) ? $evkin->detail['pembinaan']['pendamping'] : "" ?></td>
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