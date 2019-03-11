	<p>
		<button class="btn btn-blue btn-icon icon-left btn-cetak">
			<i class="entypo-print"></i>
			Cetak tingkat perkembangan desa
		</button>
	</p>
	<table class="table table-bordered datatable" id="detail-data">
		<tbody>
			<tr>
				<td colspan="2">
					<h3>Tingkat Perkembangan Desa Dan Kelurahan</h3>
				</td>
			</tr>
			<tr>
				<td width="30%">Provinsi</td>
				<td width="70%"><?php echo $perkembangan->provinsi_name ?></td>
			</tr>
			<tr>
				<td>Kabupaten</td>
				<td><?php echo $perkembangan->kabupaten_name ?></td>
			</tr>
			<tr>
				<td>Kecamatan</td>
				<td><?php echo $perkembangan->kecamatan_name ?></td>
			</tr>
			<tr>
				<td>Desa</td>
				<td><?php echo $perkembangan->desa_name ?></td>
			</tr>
			<tr>
				<td>Tanggal</td>
				<td><?php echo date_detail($perkembangan->tanggal) ?></td>
			</tr>
			<tr>
				<td>Nama Pengisi</td>
				<td><?php echo $perkembangan->pengisi ?></td>
			</tr>
			<tr>
				<td>Pekerjaan</td>
				<td><?php echo $perkembangan->pekerjaan ?></td>
			</tr>
			<tr>
				<td>Jabatan</td>
				<td><?php echo $perkembangan->jabatan ?></td>
			</tr>
			<tr>
				<td>Sumber Data Untuk Mengisi Data Dasar Keluarga</td>
				<td>
					1. <?php echo $perkembangan->detail["sumber_data"][1] ?><br>
					2. <?php echo $perkembangan->detail["sumber_data"][2] ?><br>
					3. <?php echo $perkembangan->detail["sumber_data"][3] ?><br>
					4. <?php echo $perkembangan->detail["sumber_data"][4] ?>
				</td>
			</tr>
			<tr>
				<td>Kepala Desa/Lurah</td>
				<td><?php echo $perkembangan->detail["kepala_desa"] ?></td>
			</tr>
			<tr>
				<td colspan="2">
					<h3>1. Perkembangan Penduduk</h3>
					<h4>A. Jumlah Penduduk</h4>
				</td>
			</tr>
			<tr>
				<td>Jumlah penduduk tahun ini</td>
				<td>
					Laki-laki: <?php echo $perkembangan->detail["jumlah_penduduk"]["tahun_ini"]["laki"] ?><br>
					Perempuan: <?php echo $perkembangan->detail["jumlah_penduduk"]["tahun_ini"]["perempuan"] ?>
				</td>
			</tr>
			<tr>
				<td>Jumlah penduduk tahun lalu</td>
				<td>
					Laki-laki: <?php echo $perkembangan->detail["jumlah_penduduk"]["tahun_lalu"]["laki"] ?><br>
					Perempuan: <?php echo $perkembangan->detail["jumlah_penduduk"]["tahun_lalu"]["perempuan"] ?>
				</td>
			</tr>
			<tr>
				<td>Persentase perkembangan</td>
				<td>
					Laki-laki: <?php echo $perkembangan->detail["jumlah_penduduk"]["persentase"]["laki"] ?><br>
					Perempuan: <?php echo $perkembangan->detail["jumlah_penduduk"]["persentase"]["perempuan"] ?>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<h4>B. Jumlah Keluarga</h4>
				</td>
			</tr>
			<tr>
				<td>Jumlah Kepala Keluarga tahun ini</td>
				<td>
					Laki-laki: <?php echo $perkembangan->detail["jumlah_keluarga"]["tahun_ini"]["laki"] ?><br>
					Perempuan: <?php echo $perkembangan->detail["jumlah_keluarga"]["tahun_ini"]["perempuan"] ?><br>
					Jumlah Total: <?php echo $perkembangan->detail["jumlah_keluarga"]["tahun_ini"]["total"] ?>
				</td>
			</tr>
			<tr>
				<td>Jumlah Kepala Keluarga tahun lalu</td>
				<td>
					Laki-laki: <?php echo $perkembangan->detail["jumlah_keluarga"]["tahun_lalu"]["laki"] ?><br>
					Perempuan: <?php echo $perkembangan->detail["jumlah_keluarga"]["tahun_lalu"]["perempuan"] ?><br>
					Jumlah Total: <?php echo $perkembangan->detail["jumlah_keluarga"]["tahun_lalu"]["total"] ?>
				</td>
			</tr>
			<tr>
				<td>Persentase Perkembangan</td>
				<td>
					Laki-laki: <?php echo $perkembangan->detail["jumlah_keluarga"]["persentase"]["laki"] ?><br>
					Perempuan: <?php echo $perkembangan->detail["jumlah_keluarga"]["persentase"]["perempuan"] ?><br>
					Jumlah Total: <?php echo $perkembangan->detail["jumlah_keluarga"]["persentase"]["total"] ?>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<h3>2. Ekonomi Masyarakat</h3>
					<h4>A. Pengangguran</h4>
				</td>
			</tr>
			<tr>
				<td>Jumlah angkatan kerja (penduduk usia 18-56 tahun)</td>
				<td><?php echo $perkembangan->detail["ekonomi"]["pengangguran"]["angkatan_kerja"] ?></td>
			</tr>
			<tr>
				<td>Jumlah penduduk usia 18-56 tahun yang masih sekolah dan tidak bekerja</td>
				<td><?php echo $perkembangan->detail["ekonomi"]["pengangguran"]["sekolah"] ?></td>
			</tr>
			<tr>
				<td>Jumlah penduduk usia 18-56 tahun yang menjadi ibu rumah tangga</td>
				<td><?php echo $perkembangan->detail["ekonomi"]["pengangguran"]["menjadi_ibu_rumah_tangga"] ?></td>
			</tr>
			<tr>
				<td>Jumlah penduduk usia 18-56 tahun yang bekerja penuh</td>
				<td><?php echo $perkembangan->detail["ekonomi"]["pengangguran"]["bekerja_penuh"] ?></td>
			</tr>
			<tr>
				<td>Jumlah penduduk usia 18-56 tahun yang bekerja tidak tentu</td>
				<td><?php echo $perkembangan->detail["ekonomi"]["pengangguran"]["bekerja_tidak_tentu"] ?></td>
			</tr>
			<tr>
				<td>Jumlah penduduk usia 18-56 tahun yang cacat dan tidak bekerja</td>
				<td><?php echo $perkembangan->detail["ekonomi"]["pengangguran"]["cacat_tidak_bekerja"] ?></td>
			</tr>
			<tr>
				<td>Jumlah penduduk usia 18-56 tahun yang cacat dan bekerja</td>
				<td><?php echo $perkembangan->detail["ekonomi"]["pengangguran"]["cacat_bekerja"] ?></td>
			</tr>
			<tr>
				<td colspan="2">
					<h4>B. Kesejahteraan Keluarga</h4>
				</td>
			</tr>
			<tr>
				<td>Jumlah keluarga prasejahtera</td>
				<td><?php echo $perkembangan->detail["ekonomi"]["kesejahteraan"]["prasejahtera"] ?></td>
			</tr>
			<tr>
				<td>Jumlah keluarga sejahtera 1</td>
				<td><?php echo $perkembangan->detail["ekonomi"]["kesejahteraan"]["sejahtera_1"] ?></td>
			</tr>
			<tr>
				<td>Jumlah keluarga sejahtera 2</td>
				<td><?php echo $perkembangan->detail["ekonomi"]["kesejahteraan"]["sejahtera_2"] ?></td>
			</tr>
			<tr>
				<td>Jumlah keluarga sejahtera 3</td>
				<td><?php echo $perkembangan->detail["ekonomi"]["kesejahteraan"]["sejahtera_3"] ?></td>
			</tr>
			<tr>
				<td>Jumlah keluarga sejahtera 3 plus</td>
				<td><?php echo $perkembangan->detail["ekonomi"]["kesejahteraan"]["sejahtera_3_plus"] ?></td>
			</tr>
			<tr>
				<td>Total jumlah kepala keluarga</td>
				<td><?php echo $perkembangan->detail["ekonomi"]["kesejahteraan"]["jumlah_kk"] ?></td>
			</tr>
			<tr>
				<td colspan="2">
					<h3>3. Produk Domestik Desa/kelurahan Bruto</h3>
				</td>
			</tr>
			<tr>
				<td>Sektor Pertambangan dan Galian</td>
				<td>
					Jumlah Jenis Sektor Usaha: <?php echo $perkembangan->detail["industri"]["galian"]["jumlah"] ?><br>
					Nilai Produksi Tahun Ini: <?php echo $perkembangan->detail["industri"]["galian"]["nilai"] ?><br>
					Nilai Bahan Baku: <?php echo $perkembangan->detail["industri"]["galian"]["bahan_baku"] ?><br>
					Nilai Bahan Penolong: <?php echo $perkembangan->detail["industri"]["galian"]["bahan_penolong"] ?><br>
					Biaya Antara: <?php echo $perkembangan->detail["industri"]["galian"]["biaya_antara"] ?>
				</td>
			</tr>
			<tr>
				<td>Subsektor Kerajinan</td>
				<td>
					Jumlah Jenis Sektor Usaha: <?php echo $perkembangan->detail["industri"]["kerajinan"]["jumlah"] ?><br>
					Nilai Produksi Tahun Ini: <?php echo $perkembangan->detail["industri"]["kerajinan"]["nilai"] ?><br>
					Nilai Bahan Baku: <?php echo $perkembangan->detail["industri"]["kerajinan"]["bahan_baku"] ?><br>
					Nilai Bahan Penolong: <?php echo $perkembangan->detail["industri"]["kerajinan"]["bahan_penolong"] ?><br>
					Biaya Antara: <?php echo $perkembangan->detail["industri"]["kerajinan"]["biaya_antara"] ?>
				</td>
			</tr>
			<tr>
				<td>Sektor Industri Pengolahan</td>
				<td>
					Jumlah Jenis Sektor Usaha: <?php echo $perkembangan->detail["industri"]["pengolahan"]["jumlah"] ?><br>
					Nilai Produksi Tahun Ini: <?php echo $perkembangan->detail["industri"]["pengolahan"]["nilai"] ?><br>
					Nilai Bahan Baku: <?php echo $perkembangan->detail["industri"]["pengolahan"]["bahan_baku"] ?><br>
					Nilai Bahan Penolong: <?php echo $perkembangan->detail["industri"]["pengolahan"]["bahan_penolong"] ?><br>
					Biaya Antara: <?php echo $perkembangan->detail["industri"]["pengolahan"]["biaya_antara"] ?>
				</td>
			</tr>
			<tr>
				<td>Subsektor Industri Pakaian</td>
				<td>
					Jumlah Jenis Sektor Usaha: <?php echo $perkembangan->detail["industri"]["pakaian"]["jumlah"] ?><br>
					Nilai Produksi Tahun Ini: <?php echo $perkembangan->detail["industri"]["pakaian"]["nilai"] ?><br>
					Nilai Bahan Baku: <?php echo $perkembangan->detail["industri"]["pakaian"]["bahan_baku"] ?><br>
					Nilai Bahan Penolong: <?php echo $perkembangan->detail["industri"]["pakaian"]["bahan_penolong"] ?><br>
					Biaya Antara: <?php echo $perkembangan->detail["industri"]["pakaian"]["biaya_antara"] ?>
				</td>
			</tr>
			<tr>
				<td>Subsektor Industri Pangan</td>
				<td>
					Jumlah Jenis Sektor Usaha: <?php echo $perkembangan->detail["industri"]["pangan"]["jumlah"] ?><br>
					Nilai Produksi Tahun Ini: <?php echo $perkembangan->detail["industri"]["pangan"]["nilai"] ?><br>
					Nilai Bahan Baku: <?php echo $perkembangan->detail["industri"]["pangan"]["bahan_baku"] ?><br>
					Nilai Bahan Penolong: <?php echo $perkembangan->detail["industri"]["pangan"]["bahan_penolong"] ?><br>
					Biaya Antara: <?php echo $perkembangan->detail["industri"]["pangan"]["biaya_antara"] ?>
				</td>
			</tr>
			<tr>
				<td>Industri Pengolahan Migas</td>
				<td>
					Jumlah Jenis Sektor Usaha: <?php echo $perkembangan->detail["industri"]["migas"]["jumlah"] ?><br>
					Nilai Produksi Tahun Ini: <?php echo $perkembangan->detail["industri"]["migas"]["nilai"] ?><br>
					Nilai Bahan Baku: <?php echo $perkembangan->detail["industri"]["migas"]["bahan_baku"] ?><br>
					Nilai Bahan Penolong: <?php echo $perkembangan->detail["industri"]["migas"]["bahan_penolong"] ?><br>
					Biaya Antara: <?php echo $perkembangan->detail["industri"]["migas"]["biaya_antara"] ?>
				</td>
			</tr>
			<tr>
				<td>Industri Pengolahan Non Migas</td>
				<td>
					Jumlah Jenis Sektor Usaha: <?php echo $perkembangan->detail["industri"]["non_migas"]["jumlah"] ?><br>
					Nilai Produksi Tahun Ini: <?php echo $perkembangan->detail["industri"]["non_migas"]["nilai"] ?><br>
					Nilai Bahan Baku: <?php echo $perkembangan->detail["industri"]["non_migas"]["bahan_baku"] ?><br>
					Nilai Bahan Penolong: <?php echo $perkembangan->detail["industri"]["non_migas"]["bahan_penolong"] ?><br>
					Biaya Antara: <?php echo $perkembangan->detail["industri"]["non_migas"]["biaya_antara"] ?>
				</td>
			</tr>
		<?php if(!empty($perkembangan->detail["industri"]["lainnya"]["keterangan"])): ?>
			<tr>
				<td>Industri <?php echo $perkembangan->detail["industri"]["lainnya"]["keterangan"] ?></td>
				<td>
					Jumlah Jenis Sektor Usaha: <?php echo $perkembangan->detail["industri"]["lainnya"]["jumlah"] ?><br>
					Nilai Produksi Tahun Ini: <?php echo $perkembangan->detail["industri"]["lainnya"]["nilai"] ?><br>
					Nilai Bahan Baku: <?php echo $perkembangan->detail["industri"]["lainnya"]["bahan_baku"] ?><br>
					Nilai Bahan Penolong: <?php echo $perkembangan->detail["industri"]["lainnya"]["bahan_penolong"] ?><br>
					Biaya Antara: <?php echo $perkembangan->detail["industri"]["lainnya"]["biaya_antara"] ?>
				</td>
			</tr>
		<?php endif ?>
			<tr>
				<td>Subsektor Kehutanan</td>
				<td>
					Jumlah Jenis Sektor Usaha: <?php echo $perkembangan->detail["industri"]["kehutanan"]["jumlah"] ?><br>
					Nilai Produksi Tahun Ini: <?php echo $perkembangan->detail["industri"]["kehutanan"]["nilai"] ?><br>
					Nilai Bahan Baku: <?php echo $perkembangan->detail["industri"]["kehutanan"]["bahan_baku"] ?><br>
					Nilai Bahan Penolong: <?php echo $perkembangan->detail["industri"]["kehutanan"]["bahan_penolong"] ?><br>
					Biaya Antara: <?php echo $perkembangan->detail["industri"]["kehutanan"]["biaya_antara"] ?>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<h4>A. Sektor Perdagangan, Hotel Dan Restoran</h4>
				</td>
			</tr>
			<tr>
				<td>Subsektor Perdagangan Besar</td>
				<td>
					Jumlah Jenis Usaha: <?php echo $perkembangan->detail["perdagangan"]["perdagangan_besar"]["jenis"] ?><br>
					Jumlah Transaksi: <?php echo $perkembangan->detail["perdagangan"]["perdagangan_besar"]["jumlah_transaksi"] ?><br>
					Nilai Aset: <?php echo $perkembangan->detail["perdagangan"]["perdagangan_besar"]["nilai_aset"] ?><br>
					Nilai Produksi: <?php echo $perkembangan->detail["perdagangan"]["perdagangan_besar"]["nilai_produksi"] ?><br>
					Nilai Transaksi: <?php echo $perkembangan->detail["perdagangan"]["perdagangan_besar"]["nilai_transaksi"] ?><br>
					Nilai Biaya: <?php echo $perkembangan->detail["perdagangan"]["perdagangan_besar"]["nilai_biaya"] ?><br>
					Nilai Biaya Lainnya: <?php echo $perkembangan->detail["perdagangan"]["perdagangan_besar"]["nilai_biaya_lainnya"] ?><br>
					Jumlah Pendapatan: <?php echo $perkembangan->detail["perdagangan"]["perdagangan_besar"]["jumlah_pendapatan"] ?>
				</td>
			</tr>
			<tr>
				<td>Subsektor Perdagangan Eceran</td>
				<td>
					Jumlah Jenis Usaha: <?php echo $perkembangan->detail["perdagangan"]["perdagangan_eceran"]["jenis"] ?><br>
					Jumlah Transaksi: <?php echo $perkembangan->detail["perdagangan"]["perdagangan_eceran"]["jumlah_transaksi"] ?><br>
					Nilai Aset: <?php echo $perkembangan->detail["perdagangan"]["perdagangan_eceran"]["nilai_aset"] ?><br>
					Nilai Produksi: <?php echo $perkembangan->detail["perdagangan"]["perdagangan_eceran"]["nilai_produksi"] ?><br>
					Nilai Transaksi: <?php echo $perkembangan->detail["perdagangan"]["perdagangan_eceran"]["nilai_transaksi"] ?><br>
					Nilai Biaya: <?php echo $perkembangan->detail["perdagangan"]["perdagangan_eceran"]["nilai_biaya"] ?><br>
					Nilai Biaya Lainnya: <?php echo $perkembangan->detail["perdagangan"]["perdagangan_eceran"]["nilai_biaya_lainnya"] ?><br>
					Jumlah Pendapatan: <?php echo $perkembangan->detail["perdagangan"]["perdagangan_eceran"]["jumlah_pendapatan"] ?>
				</td>
			</tr>
			<tr>
				<td>Subsektor Hotel</td>
				<td>
					Jumlah Jenis Usaha: <?php echo $perkembangan->detail["perdagangan"]["hotel"]["jenis"] ?><br>
					Jumlah Transaksi: <?php echo $perkembangan->detail["perdagangan"]["hotel"]["jumlah_transaksi"] ?><br>
					Nilai Aset: <?php echo $perkembangan->detail["perdagangan"]["hotel"]["nilai_aset"] ?><br>
					Nilai Produksi: <?php echo $perkembangan->detail["perdagangan"]["hotel"]["nilai_produksi"] ?><br>
					Nilai Transaksi: <?php echo $perkembangan->detail["perdagangan"]["hotel"]["nilai_transaksi"] ?><br>
					Nilai Biaya: <?php echo $perkembangan->detail["perdagangan"]["hotel"]["nilai_biaya"] ?><br>
					Nilai Biaya Lainnya: <?php echo $perkembangan->detail["perdagangan"]["hotel"]["nilai_biaya_lainnya"] ?><br>
					Jumlah Pendapatan: <?php echo $perkembangan->detail["perdagangan"]["hotel"]["jumlah_pendapatan"] ?>
				</td>
			</tr>
			<tr>
				<td>Subsektor Restoran</td>
				<td>
					Jumlah Jenis Usaha: <?php echo $perkembangan->detail["perdagangan"]["restoran"]["jenis"] ?><br>
					Jumlah Transaksi: <?php echo $perkembangan->detail["perdagangan"]["restoran"]["jumlah_transaksi"] ?><br>
					Nilai Aset: <?php echo $perkembangan->detail["perdagangan"]["restoran"]["nilai_aset"] ?><br>
					Nilai Produksi: <?php echo $perkembangan->detail["perdagangan"]["restoran"]["nilai_produksi"] ?><br>
					Nilai Transaksi: <?php echo $perkembangan->detail["perdagangan"]["restoran"]["nilai_transaksi"] ?><br>
					Nilai Biaya: <?php echo $perkembangan->detail["perdagangan"]["restoran"]["nilai_biaya"] ?><br>
					Nilai Biaya Lainnya: <?php echo $perkembangan->detail["perdagangan"]["restoran"]["nilai_biaya_lainnya"] ?><br>
					Jumlah Pendapatan: <?php echo $perkembangan->detail["perdagangan"]["restoran"]["jumlah_pendapatan"] ?>
				</td>
			</tr>
			<tr>
				<td>Sektor Bangunan/Konstruksi</td>
				<td>
					Jumlah Jenis Usaha: <?php echo $perkembangan->detail["perdagangan"]["konstruksi"]["jenis"] ?><br>
					Jumlah Transaksi: <?php echo $perkembangan->detail["perdagangan"]["konstruksi"]["jumlah_transaksi"] ?><br>
					Nilai Aset: <?php echo $perkembangan->detail["perdagangan"]["konstruksi"]["nilai_aset"] ?><br>
					Nilai Transaksi: <?php echo $perkembangan->detail["perdagangan"]["konstruksi"]["nilai_transaksi"] ?><br>
					Nilai Biaya: <?php echo $perkembangan->detail["perdagangan"]["konstruksi"]["nilai_biaya"] ?><br>
					Nilai Biaya Lainnya: <?php echo $perkembangan->detail["perdagangan"]["konstruksi"]["nilai_biaya_lainnya"] ?>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<h4>B. Sektor Keuangan, Persewaan dan Jasa Perusahaan</h4>
				</td>
			</tr>
			<tr>
				<td>Subsektor Bank</td>
				<td>
					Jumlah Jenis Usaha: <?php echo $perkembangan->detail["keuangan"]["bank"]["jenis"] ?><br>
					Jumlah Transaksi: <?php echo $perkembangan->detail["keuangan"]["bank"]["jumlah_transaksi"] ?><br>
					Nilai Produksi: <?php echo $perkembangan->detail["keuangan"]["bank"]["nilai_produksi"] ?><br>
					Nilai Transaksi: <?php echo $perkembangan->detail["keuangan"]["bank"]["nilai_transaksi"] ?><br>
					Nilai Biaya: <?php echo $perkembangan->detail["keuangan"]["bank"]["nilai_biaya"] ?>
				</td>
			</tr>
			<tr>
				<td>Subsektor lembaga keuangan bukan bank</td>
				<td>
					Jumlah Jenis Usaha: <?php echo $perkembangan->detail["keuangan"]["bukan_bank"]["jenis"] ?><br>
					Jumlah Transaksi: <?php echo $perkembangan->detail["keuangan"]["bukan_bank"]["jumlah_transaksi"] ?><br>
					Nilai Produksi: <?php echo $perkembangan->detail["keuangan"]["bukan_bank"]["nilai_produksi"] ?><br>
					Nilai Transaksi: <?php echo $perkembangan->detail["keuangan"]["bukan_bank"]["nilai_transaksi"] ?><br>
					Nilai Biaya: <?php echo $perkembangan->detail["keuangan"]["bukan_bank"]["nilai_biaya"] ?>
				</td>
			</tr>
			<tr>
				<td>Subsektor Sewa Bangunan</td>
				<td>
					Jumlah Jenis Usaha: <?php echo $perkembangan->detail["keuangan"]["sewa_bangunan"]["jenis"] ?><br>
					Nilai Produksi: <?php echo $perkembangan->detail["keuangan"]["sewa_bangunan"]["nilai_produksi"] ?><br>
					Nilai Transaksi: <?php echo $perkembangan->detail["keuangan"]["sewa_bangunan"]["nilai_transaksi"] ?><br>
					Nilai Biaya: <?php echo $perkembangan->detail["keuangan"]["sewa_bangunan"]["nilai_biaya"] ?><br>
					Nilai Biaya Lainnya: <?php echo $perkembangan->detail["keuangan"]["sewa_bangunan"]["nilai_biaya_lainnya"] ?>
				</td>
			</tr>
			<tr>
				<td>Subsektor Jasa Perusahaan</td>
				<td>
					Jumlah Jenis Usaha: <?php echo $perkembangan->detail["keuangan"]["jasa_perusahaan"]["jenis"] ?><br>
					Nilai Produksi: <?php echo $perkembangan->detail["keuangan"]["jasa_perusahaan"]["nilai_produksi"] ?><br>
					Nilai Transaksi: <?php echo $perkembangan->detail["keuangan"]["jasa_perusahaan"]["nilai_transaksi"] ?><br>
					Nilai Biaya: <?php echo $perkembangan->detail["keuangan"]["jasa_perusahaan"]["nilai_biaya"] ?><br>
					Nilai Biaya Lainnya: <?php echo $perkembangan->detail["keuangan"]["jasa_perusahaan"]["nilai_biaya_lainnya"] ?>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<h4>C. Sektor Jasa-Jasa</h4>
				</td>
			</tr>
			<tr>
				<td>Subsektor Jasa Pemerintahan Umum</td>
				<td>
					Jumlah Jenis Usaha: <?php echo $perkembangan->detail["jasa"]["pemerintahan"]["jenis"] ?><br>
					Nilai Produksi: <?php echo $perkembangan->detail["jasa"]["pemerintahan"]["nilai_produksi"] ?><br>
					Nilai Transaksi: <?php echo $perkembangan->detail["jasa"]["pemerintahan"]["nilai_transaksi"] ?><br>
					Nilai Biaya: <?php echo $perkembangan->detail["jasa"]["pemerintahan"]["nilai_biaya"] ?>
				</td>
			</tr>
			<tr>
				<td>Subsektor Jasa Swasta</td>
				<td>
					Jumlah Jenis Usaha: <?php echo $perkembangan->detail["jasa"]["swasta"]["jenis"] ?><br>
					Nilai Aset: <?php echo $perkembangan->detail["jasa"]["swasta"]["nilai_aset"] ?><br>
					Nilai Biaya: <?php echo $perkembangan->detail["jasa"]["swasta"]["nilai_biaya"] ?>
				</td>
			</tr>
			<tr>
				<td>Subsektor Jasa Hiburan Dan Rekreasi</td>
				<td>
					Jumlah Jenis Usaha: <?php echo $perkembangan->detail["jasa"]["hiburan"]["jenis"] ?><br>
					Nilai Produksi: <?php echo $perkembangan->detail["jasa"]["hiburan"]["nilai_produksi"] ?><br>
					Nilai Transaksi: <?php echo $perkembangan->detail["jasa"]["hiburan"]["nilai_transaksi"] ?><br>
					Nilai Biaya: <?php echo $perkembangan->detail["jasa"]["hiburan"]["nilai_biaya"] ?>
				</td>
			</tr>
			<tr>
				<td>Subsektor Jasa Perorangan Dan Rumah Tangga</td>
				<td>
					Jumlah Jenis Usaha: <?php echo $perkembangan->detail["jasa"]["perorangan"]["jenis"] ?><br>
					Nilai Aset: <?php echo $perkembangan->detail["jasa"]["perorangan"]["nilai_aset"] ?><br>
					Nilai Produksi: <?php echo $perkembangan->detail["jasa"]["perorangan"]["nilai_produksi"] ?><br>
					Nilai Transaksi: <?php echo $perkembangan->detail["jasa"]["perorangan"]["nilai_transaksi"] ?><br>
					Nilai Biaya: <?php echo $perkembangan->detail["jasa"]["perorangan"]["nilai_biaya"] ?>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<h4>D. Sektor Angkutan Dan Komunikasi</h4>
				</td>
			</tr>
			<tr>
				<td>Subsektor Angkutan</td>
				<td>
					Jumlah Jenis Usaha: <?php echo $perkembangan->detail["transportasi"]["angkutan"]["jenis"] ?><br>
					Jumlah Transaksi: <?php echo $perkembangan->detail["transportasi"]["angkutan"]["jumlah_transaksi"] ?><br>
					Nilai Produksi: <?php echo $perkembangan->detail["transportasi"]["angkutan"]["nilai_produksi"] ?><br>
					Nilai Transaksi: <?php echo $perkembangan->detail["transportasi"]["angkutan"]["nilai_transaksi"] ?><br>
					Nilai Biaya: <?php echo $perkembangan->detail["transportasi"]["angkutan"]["nilai_biaya"] ?>
				</td>
			</tr>
			<tr>
				<td>Subsektor jasa Penunjang angkutan</td>
				<td>
					Jumlah Jenis Usaha: <?php echo $perkembangan->detail["transportasi"]["penunjang_angkutan"]["jenis"] ?><br>
					Nilai Produksi: <?php echo $perkembangan->detail["transportasi"]["penunjang_angkutan"]["nilai_produksi"] ?><br>
					Nilai Transaksi: <?php echo $perkembangan->detail["transportasi"]["penunjang_angkutan"]["nilai_transaksi"] ?><br>
					Nilai Biaya: <?php echo $perkembangan->detail["transportasi"]["penunjang_angkutan"]["nilai_biaya"] ?>
				</td>
			</tr>
			<tr>
				<td>Subsektor Komunikasi</td>
				<td>
					Jumlah Jenis Usaha: <?php echo $perkembangan->detail["transportasi"]["komunikasi"]["jenis"] ?><br>
					Nilai Aset: <?php echo $perkembangan->detail["transportasi"]["komunikasi"]["nilai_aset"] ?><br>
					Nilai Produksi: <?php echo $perkembangan->detail["transportasi"]["komunikasi"]["nilai_produksi"] ?><br>
					Nilai Transaksi: <?php echo $perkembangan->detail["transportasi"]["komunikasi"]["nilai_transaksi"] ?><br>
					Nilai Biaya: <?php echo $perkembangan->detail["transportasi"]["komunikasi"]["nilai_biaya"] ?>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<h4>E. Sektor Listrik, Gas & Air Minum</h4>
				</td>
			</tr>
			<tr>
				<td>Subsektor Listrik</td>
				<td>
					Jumlah Jenis Usaha: <?php echo $perkembangan->detail["lgam"]["listrik"]["jenis"] ?><br>
					Nilai Aset: <?php echo $perkembangan->detail["lgam"]["listrik"]["nilai_aset"] ?><br>
					Nilai Produksi: <?php echo $perkembangan->detail["lgam"]["listrik"]["nilai_produksi"] ?><br>
					Nilai Transaksi: <?php echo $perkembangan->detail["lgam"]["listrik"]["nilai_transaksi"] ?><br>
					Nilai Biaya: <?php echo $perkembangan->detail["lgam"]["listrik"]["nilai_biaya"] ?>
				</td>
			</tr>
			<tr>
				<td>Subsektor Gas</td>
				<td>
					Jumlah Jenis Usaha: <?php echo $perkembangan->detail["lgam"]["gas"]["jenis"] ?><br>
					Nilai Aset: <?php echo $perkembangan->detail["lgam"]["gas"]["nilai_aset"] ?><br>
					Nilai Produksi: <?php echo $perkembangan->detail["lgam"]["gas"]["nilai_produksi"] ?><br>
					Nilai Transaksi: <?php echo $perkembangan->detail["lgam"]["gas"]["nilai_transaksi"] ?><br>
					Nilai Biaya: <?php echo $perkembangan->detail["lgam"]["gas"]["nilai_biaya"] ?>
				</td>
			</tr>
			<tr>
				<td>Subsektor Air Minum</td>
				<td>
					Jumlah Jenis Usaha: <?php echo $perkembangan->detail["lgam"]["air_minum"]["jenis"] ?><br>
					Nilai Aset: <?php echo $perkembangan->detail["lgam"]["air_minum"]["nilai_aset"] ?><br>
					Nilai Produksi: <?php echo $perkembangan->detail["lgam"]["air_minum"]["nilai_produksi"] ?><br>
					Nilai Transaksi: <?php echo $perkembangan->detail["lgam"]["air_minum"]["nilai_transaksi"] ?><br>
					Nilai Biaya: <?php echo $perkembangan->detail["lgam"]["air_minum"]["nilai_biaya"] ?>
				</td>
			</tr>
			<tr>
				<td>NILAI TOTAL PENDAPATAN DOMESTIK DESA / KELURAHAN BRUTO DARI SEMUA SEKTOR (% total nilai produksi dan transaksi terhadap total biaya yang dikeluarkan dari semua</td>
				<td>
					Nilai Produksi: <?php echo $perkembangan->detail["total_pdd"]["nilai_produksi"] ?><br>
					Nilai Transaksi: <?php echo $perkembangan->detail["total_pdd"]["nilai_transaksi"] ?><br>
					Nilai Biaya: <?php echo $perkembangan->detail["total_pdd"]["nilai_biaya"] ?><br>
					Nilai Biaya Lainnya: <?php echo $perkembangan->detail["total_pdd"]["nilai_biaya_lainnya"] ?><br>
					Jumlah Pendapatan: <?php echo $perkembangan->detail["total_pdd"]["jumlah_pendapatan"] ?>
				</td>
			</tr>
			<tr>
				<td>
					<h3>4. Pendapatan Perkapita</h3>
					<h4>A. Pendapatan perkapita menurut sektor usaha</h4>
				</td>
			</tr>
			<tr>
				<td>Pertanian</td>
				<td>
					Jumlah Rumah Tangga: <?php echo $perkembangan->detail["pendapatan_kapita"]["pertanian"]["jumlah_rt"] ?><br>
					Jumlah Anggota Rumah Tangga: <?php echo $perkembangan->detail["pendapatan_kapita"]["pertanian"]["jumlah_art"] ?><br>
					Jumlah Rumah Tangga Buruh: <?php echo $perkembangan->detail["pendapatan_kapita"]["pertanian"]["jumlah_rtb"] ?><br>
					Jumlah Anggota Rumah Tangga Buruh: <?php echo $perkembangan->detail["pendapatan_kapita"]["pertanian"]["jumlah_artb"] ?><br>
					Jumlah Pendapatan Perkapita: <?php echo $perkembangan->detail["pendapatan_kapita"]["pertanian"]["jumlah_pendapatan"] ?>
				</td>
			</tr>
			<tr>
				<td>Perkebunan</td>
				<td>
					Jumlah Rumah Tangga: <?php echo $perkembangan->detail["pendapatan_kapita"]["perkebunan"]["jumlah_rt"] ?><br>
					Jumlah Anggota Rumah Tangga: <?php echo $perkembangan->detail["pendapatan_kapita"]["perkebunan"]["jumlah_art"] ?><br>
					Jumlah Rumah Tangga Buruh: <?php echo $perkembangan->detail["pendapatan_kapita"]["perkebunan"]["jumlah_rtb"] ?><br>
					Jumlah Anggota Rumah Tangga Buruh: <?php echo $perkembangan->detail["pendapatan_kapita"]["perkebunan"]["jumlah_artb"] ?><br>
					Jumlah Pendapatan Perkapita: <?php echo $perkembangan->detail["pendapatan_kapita"]["perkebunan"]["jumlah_pendapatan"] ?>
				</td>
			</tr>
			<tr>
				<td>Peternakan</td>
				<td>
					Jumlah Rumah Tangga: <?php echo $perkembangan->detail["pendapatan_kapita"]["peternakan"]["jumlah_rt"] ?><br>
					Jumlah Anggota Rumah Tangga: <?php echo $perkembangan->detail["pendapatan_kapita"]["peternakan"]["jumlah_art"] ?><br>
					Jumlah Rumah Tangga Buruh: <?php echo $perkembangan->detail["pendapatan_kapita"]["peternakan"]["jumlah_rtb"] ?><br>
					Jumlah Anggota Rumah Tangga Buruh: <?php echo $perkembangan->detail["pendapatan_kapita"]["peternakan"]["jumlah_artb"] ?><br>
					Jumlah Pendapatan Perkapita: <?php echo $perkembangan->detail["pendapatan_kapita"]["peternakan"]["jumlah_pendapatan"] ?>
				</td>
			</tr>
			<tr>
				<td>Perikanan</td>
				<td>
					Jumlah Rumah Tangga: <?php echo $perkembangan->detail["pendapatan_kapita"]["perikanan"]["jumlah_rt"] ?><br>
					Jumlah Anggota Rumah Tangga: <?php echo $perkembangan->detail["pendapatan_kapita"]["perikanan"]["jumlah_art"] ?><br>
					Jumlah Rumah Tangga Buruh: <?php echo $perkembangan->detail["pendapatan_kapita"]["perikanan"]["jumlah_rtb"] ?><br>
					Jumlah Anggota Rumah Tangga Buruh: <?php echo $perkembangan->detail["pendapatan_kapita"]["perikanan"]["jumlah_artb"] ?><br>
					Jumlah Pendapatan Perkapita: <?php echo $perkembangan->detail["pendapatan_kapita"]["perikanan"]["jumlah_pendapatan"] ?>
				</td>
			</tr>
			<tr>
				<td>Kerajinan</td>
				<td>
					Jumlah Rumah Tangga: <?php echo $perkembangan->detail["pendapatan_kapita"]["kerajinan"]["jumlah_rt"] ?><br>
					Jumlah Anggota Rumah Tangga: <?php echo $perkembangan->detail["pendapatan_kapita"]["kerajinan"]["jumlah_art"] ?><br>
					Jumlah Rumah Tangga Buruh: <?php echo $perkembangan->detail["pendapatan_kapita"]["kerajinan"]["jumlah_rtb"] ?><br>
					Jumlah Anggota Rumah Tangga Buruh: <?php echo $perkembangan->detail["pendapatan_kapita"]["kerajinan"]["jumlah_artb"] ?><br>
					Jumlah Pendapatan Perkapita: <?php echo $perkembangan->detail["pendapatan_kapita"]["kerajinan"]["jumlah_pendapatan"] ?>
				</td>
			</tr>
			<tr>
				<td>Pertambangan</td>
				<td>
					Jumlah Rumah Tangga: <?php echo $perkembangan->detail["pendapatan_kapita"]["pertambangan"]["jumlah_rt"] ?><br>
					Jumlah Anggota Rumah Tangga: <?php echo $perkembangan->detail["pendapatan_kapita"]["pertambangan"]["jumlah_art"] ?><br>
					Jumlah Rumah Tangga Buruh: <?php echo $perkembangan->detail["pendapatan_kapita"]["pertambangan"]["jumlah_rtb"] ?><br>
					Jumlah Anggota Rumah Tangga Buruh: <?php echo $perkembangan->detail["pendapatan_kapita"]["pertambangan"]["jumlah_artb"] ?><br>
					Jumlah Pendapatan Perkapita: <?php echo $perkembangan->detail["pendapatan_kapita"]["pertambangan"]["jumlah_pendapatan"] ?>
				</td>
			</tr>
			<tr>
				<td>Kehutanan</td>
				<td>
					Jumlah Rumah Tangga: <?php echo $perkembangan->detail["pendapatan_kapita"]["kehutanan"]["jumlah_rt"] ?><br>
					Jumlah Anggota Rumah Tangga: <?php echo $perkembangan->detail["pendapatan_kapita"]["kehutanan"]["jumlah_art"] ?><br>
					Jumlah Rumah Tangga Buruh: <?php echo $perkembangan->detail["pendapatan_kapita"]["kehutanan"]["jumlah_rtb"] ?><br>
					Jumlah Anggota Rumah Tangga Buruh: <?php echo $perkembangan->detail["pendapatan_kapita"]["kehutanan"]["jumlah_artb"] ?><br>
					Jumlah Pendapatan Perkapita: <?php echo $perkembangan->detail["pendapatan_kapita"]["kehutanan"]["jumlah_pendapatan"] ?>
				</td>
			</tr>
			<tr>
				<td>Industri Kecil, Menengah Dan Besar</td>
				<td>
					Jumlah Rumah Tangga: <?php echo $perkembangan->detail["pendapatan_kapita"]["industri"]["jumlah_rt"] ?><br>
					Jumlah Anggota Rumah Tangga: <?php echo $perkembangan->detail["pendapatan_kapita"]["industri"]["jumlah_art"] ?><br>
					Jumlah Rumah Tangga Buruh: <?php echo $perkembangan->detail["pendapatan_kapita"]["industri"]["jumlah_rtb"] ?><br>
					Jumlah Anggota Rumah Tangga Buruh: <?php echo $perkembangan->detail["pendapatan_kapita"]["industri"]["jumlah_artb"] ?><br>
					Jumlah Pendapatan Perkapita: <?php echo $perkembangan->detail["pendapatan_kapita"]["industri"]["jumlah_pendapatan"] ?>
				</td>
			</tr>
			<tr>
				<td>Jasa Dan Perdagangan</td>
				<td>
					Jumlah Rumah Tangga: <?php echo $perkembangan->detail["pendapatan_kapita"]["jasa_perdagangan"]["jumlah_rt"] ?><br>
					Jumlah Anggota Rumah Tangga: <?php echo $perkembangan->detail["pendapatan_kapita"]["jasa_perdagangan"]["jumlah_art"] ?><br>
					Jumlah Rumah Tangga Buruh: <?php echo $perkembangan->detail["pendapatan_kapita"]["jasa_perdagangan"]["jumlah_rtb"] ?><br>
					Jumlah Anggota Rumah Tangga Buruh: <?php echo $perkembangan->detail["pendapatan_kapita"]["jasa_perdagangan"]["jumlah_artb"] ?><br>
					Jumlah Pendapatan Perkapita: <?php echo $perkembangan->detail["pendapatan_kapita"]["jasa_perdagangan"]["jumlah_pendapatan"] ?>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<h4>A. Pendapatan Rill Keluarga</h4>
				</td>
			</tr>
			<tr>
				<td>Jumlah Kepala Keluarga (KK)</td>
				<td><?php echo $perkembangan->detail["pendapatan_riil"]["kk"] ?></td>
			</tr>
			<tr>
				<td>Jumlah Anggota Keluarga (Orang)</td>
				<td><?php echo $perkembangan->detail["pendapatan_riil"]["ak"] ?></td>
			</tr>
			<tr>
				<td>Jumlah Pendapatan Kepala Keluarga (Rp)</td>
				<td><?php echo $perkembangan->detail["pendapatan_riil"]["pkk"] ?></td>
			</tr>
			<tr>
				<td>Jumlah pendapatan dari anggota keluarga yang Bekerja (Rp)</td>
				<td><?php echo $perkembangan->detail["pendapatan_riil"]["pakb"] ?></td>
			</tr>
			<tr>
				<td>Jumlah Total Pendapatan Keluarga (Rp) (3+4)</td>
				<td><?php echo $perkembangan->detail["pendapatan_riil"]["tpk"] ?></td>
			</tr>
			<tr>
				<td>Rata-rata Pendapatan Peranggota keluarga (Rp) (5/(1+2))</td>
				<td><?php echo $perkembangan->detail["pendapatan_riil"]["rpk"] ?></td>
			</tr>
			<tr>
				<td colspan="2">
					<h3>5. Struktur Mata Pencaharian Menurut Sektor</h3>
				</td>
			</tr>
			<tr>
				<td>Pertanian</td>
				<td>
					Jumlah Pemilik Usaha (Orang): <?php echo $perkembangan->detail["pencaharian_sektor"]["pertanian"]["pemilik"] ?><br>
					Jumlah Pemilik Usaha Perorangan: <?php echo $perkembangan->detail["pencaharian_sektor"]["pertanian"]["perorangan"] ?><br>
					Jumlah Buruh/Karyawan/Pengumpul: <?php echo $perkembangan->detail["pencaharian_sektor"]["pertanian"]["karyawan"] ?>
				</td>
			</tr>
			<tr>
				<td>Perkebunan</td>
				<td>
					Jumlah Pemilik Usaha (Orang): <?php echo $perkembangan->detail["pencaharian_sektor"]["perkebunan"]["pemilik"] ?><br>
					Jumlah Pemilik Usaha Perorangan: <?php echo $perkembangan->detail["pencaharian_sektor"]["perkebunan"]["perorangan"] ?><br>
					Jumlah Buruh/Karyawan/Pengumpul: <?php echo $perkembangan->detail["pencaharian_sektor"]["perkebunan"]["karyawan"] ?>
				</td>
			</tr>
			<tr>
				<td>Peternakan</td>
				<td>
					Jumlah Pemilik Usaha (Orang): <?php echo $perkembangan->detail["pencaharian_sektor"]["peternakan"]["pemilik"] ?><br>
					Jumlah Pemilik Usaha Perorangan: <?php echo $perkembangan->detail["pencaharian_sektor"]["peternakan"]["perorangan"] ?><br>
					Jumlah Buruh/Karyawan/Pengumpul: <?php echo $perkembangan->detail["pencaharian_sektor"]["peternakan"]["karyawan"] ?>
				</td>
			</tr>
			<tr>
				<td>Perikanan</td>
				<td>
					Jumlah Pemilik Usaha (Orang): <?php echo $perkembangan->detail["pencaharian_sektor"]["perikanan"]["pemilik"] ?><br>
					Jumlah Pemilik Usaha Perorangan: <?php echo $perkembangan->detail["pencaharian_sektor"]["perikanan"]["perorangan"] ?><br>
					Jumlah Buruh/Karyawan/Pengumpul: <?php echo $perkembangan->detail["pencaharian_sektor"]["perikanan"]["karyawan"] ?>
				</td>
			</tr>
			<tr>
				<td>Kehutanan</td>
				<td>
					Jumlah Pemilik Usaha (Orang): <?php echo $perkembangan->detail["pencaharian_sektor"]["kehutanan"]["pemilik"] ?><br>
					Jumlah Pemilik Usaha Perorangan: <?php echo $perkembangan->detail["pencaharian_sektor"]["kehutanan"]["perorangan"] ?><br>
					Jumlah Buruh/Karyawan/Pengumpul: <?php echo $perkembangan->detail["pencaharian_sektor"]["kehutanan"]["karyawan"] ?>
				</td>
			</tr>
			<tr>
				<td>Pertambangan dan Bahan Galian C</td>
				<td>
					Jumlah Pemilik Usaha (Orang): <?php echo $perkembangan->detail["pencaharian_sektor"]["pertambangan"]["pemilik"] ?><br>
					Jumlah Pemilik Usaha Perorangan: <?php echo $perkembangan->detail["pencaharian_sektor"]["pertambangan"]["perorangan"] ?><br>
					Jumlah Buruh/Karyawan/Pengumpul: <?php echo $perkembangan->detail["pencaharian_sektor"]["pertambangan"]["karyawan"] ?>
				</td>
			</tr>
			<tr>
				<td>Perdagangan</td>
				<td>
					Jumlah Pemilik Usaha (Orang): <?php echo $perkembangan->detail["pencaharian_sektor"]["perdagangan"]["pemilik"] ?><br>
					Jumlah Pemilik Usaha Perorangan: <?php echo $perkembangan->detail["pencaharian_sektor"]["perdagangan"]["perorangan"] ?><br>
					Jumlah Buruh/Karyawan/Pengumpul: <?php echo $perkembangan->detail["pencaharian_sektor"]["perdagangan"]["karyawan"] ?>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<h4>A. Sektor Industri Kecil & Kerajinan Rumah Tangga</h4>
				</td>
			</tr>
			<tr>
				<td>Montir</td>
				<td><?php echo $perkembangan->detail["pencaharian_kecil"]["montir"] ?></td>
			</tr>
			<tr>
				<td>Tukang batu</td>
				<td><?php echo $perkembangan->detail["pencaharian_kecil"]["tukang_batu"] ?></td>
			</tr>
			<tr>
				<td>Tukang kayu</td>
				<td><?php echo $perkembangan->detail["pencaharian_kecil"]["tukang_kayu"] ?></td>
			</tr>
			<tr>
				<td>Tukang sumur</td>
				<td><?php echo $perkembangan->detail["pencaharian_kecil"]["tukang_sumur"] ?></td>
			</tr>
			<tr>
				<td>Pemulung</td>
				<td><?php echo $perkembangan->detail["pencaharian_kecil"]["pemulung"] ?></td>
			</tr>
			<tr>
				<td>Tukang jahit</td>
				<td><?php echo $perkembangan->detail["pencaharian_kecil"]["tukang_jahit"] ?></td>
			</tr>
			<tr>
				<td>Tukang kue</td>
				<td><?php echo $perkembangan->detail["pencaharian_kecil"]["tukang_kue"] ?></td>
			</tr>
			<tr>
				<td>Tukang anyaman</td>
				<td><?php echo $perkembangan->detail["pencaharian_kecil"]["tukang_anyaman"] ?></td>
			</tr>
			<tr>
				<td>Tukang rias</td>
				<td><?php echo $perkembangan->detail["pencaharian_kecil"]["tukang_rias"] ?></td>
			</tr>
			<tr>
				<td>Pengrajin industri rumah tangga lainnya</td>
				<td><?php echo $perkembangan->detail["pencaharian_kecil"]["pengrajin_lainnya"] ?></td>
			</tr>
		<?php if(!empty($perkembangan->detail["pencaharian_kecil"]["lainnya"]["keterangan"])): ?>
			<tr>
				<td><?php echo $perkembangan->detail["pencaharian_kecil"]["lainnya"]["keterangan"] ?></td>
				<td><?php echo $perkembangan->detail["pencaharian_kecil"]["lainnya"]["jumlah"] ?></td>
			</tr>
		<?php endif ?>
			<tr>
				<td colspan="2">
					<h4>B. Sektor Industri Menengah dan Besar</h4>
				</td>
			</tr>
			<tr>
				<td>Karyawan perusahaan swasta</td>
				<td><?php echo $perkembangan->detail["pencaharian_menengah"]["karyawan_swasta"] ?></td>
			</tr>
			<tr>
				<td>Karyawan perusahaan pemerintah</td>
				<td><?php echo $perkembangan->detail["pencaharian_menengah"]["karyawan_pemerintah"] ?></td>
			</tr>
			<tr>
				<td>Pemilik perusahaan</td>
				<td><?php echo $perkembangan->detail["pencaharian_menengah"]["pemilik_perusahaan"] ?></td>
			</tr>
			<?php if(!empty($perkembangan->detail["pencaharian_menengah"]["lainnya1"]["keterangan"])): ?>
			<tr>
				<td><?php echo $perkembangan->detail["pencaharian_menengah"]["lainnya1"]["keterangan"] ?></td>
				<td><?php echo $perkembangan->detail["pencaharian_menengah"]["lainnya1"]["jumlah"] ?></td>
			</tr>
			<?php endif ?>
			<?php if(!empty($perkembangan->detail["pencaharian_menengah"]["lainnya2"]["keterangan"])): ?>
			<tr>
				<td><?php echo $perkembangan->detail["pencaharian_menengah"]["lainnya2"]["keterangan"] ?></td>
				<td><?php echo $perkembangan->detail["pencaharian_menengah"]["lainnya2"]["jumlah"] ?></td>
			</tr>
			<?php endif ?>
			<tr>
				<td colspan="2">
					<h4>C. Sektor Jasa</h4>
				</td>
			</tr>
			<tr>
				<td>Pemilik usaha jasa transportasi dan perhubungan</td>
				<td><?php echo $perkembangan->detail["pencaharian_jasa"]["pemilik_transportasi"] ?></td>
			</tr>
			<tr>
				<td>Buruh usaha jasa transportasi dan perhubungan</td>
				<td><?php echo $perkembangan->detail["pencaharian_jasa"]["buruh_transportasi"] ?></td>
			</tr>
			<tr>
				<td>Pemilik usaha informasi dan komunikasi</td>
				<td><?php echo $perkembangan->detail["pencaharian_jasa"]["pemilik_komunikasi"] ?></td>
			</tr>
			<tr>
				<td>Buruh usaha jasa informasi dan komunikasi</td>
				<td><?php echo $perkembangan->detail["pencaharian_jasa"]["buruh_komunikasi"] ?></td>
			</tr>
			<tr>
				<td>Kontraktor</td>
				<td><?php echo $perkembangan->detail["pencaharian_jasa"]["kontraktor"] ?></td>
			</tr>
			<tr>
				<td>Pemilik usaha jasa hiburan dan pariwisata</td>
				<td><?php echo $perkembangan->detail["pencaharian_jasa"]["pemilik_pariwisata"] ?></td>
			</tr>
			<tr>
				<td>Buruh usaha jasa hiburan dan pariwisata</td>
				<td><?php echo $perkembangan->detail["pencaharian_jasa"]["buruh_pariwisata"] ?></td>
			</tr>
			<tr>
				<td>Pemilik usaha hotel dan penginapan lainnya</td>
				<td><?php echo $perkembangan->detail["pencaharian_jasa"]["pemilik_penginapan"] ?></td>
			</tr>
			<tr>
				<td>Buruh usaha hotel dan penginapan lainnya</td>
				<td><?php echo $perkembangan->detail["pencaharian_jasa"]["buruh_penginapan"] ?></td>
			</tr>
			<tr>
				<td>Pemilik usaha warung, rumah makan dan restoran</td>
				<td><?php echo $perkembangan->detail["pencaharian_jasa"]["rumah_makan"] ?></td>
			</tr>
			<tr>
				<td>Pegawai Negeri Sipil</td>
				<td><?php echo $perkembangan->detail["pencaharian_jasa"]["pns"] ?></td>
			</tr>
			<tr>
				<td>TNI</td>
				<td><?php echo $perkembangan->detail["pencaharian_jasa"]["tni"] ?></td>
			</tr>
			<tr>
				<td>POLRI</td>
				<td><?php echo $perkembangan->detail["pencaharian_jasa"]["polri"] ?></td>
			</tr>
			<tr>
				<td>Dokter swasta</td>
				<td><?php echo $perkembangan->detail["pencaharian_jasa"]["dokter_swasta"] ?></td>
			</tr>
			<tr>
				<td>Bidan swasta</td>
				<td><?php echo $perkembangan->detail["pencaharian_jasa"]["bidan_swasta"] ?></td>
			</tr>
			<tr>
				<td>Perawat swasta</td>
				<td><?php echo $perkembangan->detail["pencaharian_jasa"]["perawat_swasta"] ?></td>
			</tr>
			<tr>
				<td>Dukun/paranormal/supranatural</td>
				<td><?php echo $perkembangan->detail["pencaharian_jasa"]["dukun"] ?></td>
			</tr>
			<tr>
				<td>Jasa pengobatan alternatif</td>
				<td><?php echo $perkembangan->detail["pencaharian_jasa"]["pengobatan_alternatif"] ?></td>
			</tr>
			<tr>
				<td>Dosen swasta</td>
				<td><?php echo $perkembangan->detail["pencaharian_jasa"]["dosen_swasta"] ?></td>
			</tr>
			<tr>
				<td>Guru swasta</td>
				<td><?php echo $perkembangan->detail["pencaharian_jasa"]["guru_swasta"] ?></td>
			</tr>
			<tr>
				<td>Pensiunan TNI/POLRI</td>
				<td><?php echo $perkembangan->detail["pencaharian_jasa"]["pensiunan_tni_polri"] ?></td>
			</tr>
			<tr>
				<td>Pensiunan PNS</td>
				<td><?php echo $perkembangan->detail["pencaharian_jasa"]["pensiunan_pns"] ?></td>
			</tr>
			<tr>
				<td>Pensiunan swasta</td>
				<td><?php echo $perkembangan->detail["pencaharian_jasa"]["pensiunan_swasta"] ?></td>
			</tr>
			<tr>
				<td>Pengacara</td>
				<td><?php echo $perkembangan->detail["pencaharian_jasa"]["pengacara"] ?></td>
			</tr>
			<tr>
				<td>Notaris</td>
				<td><?php echo $perkembangan->detail["pencaharian_jasa"]["notaris"] ?></td>
			</tr>
			<tr>
				<td>Jasa Konsultansi Manajemen dan Teknis</td>
				<td><?php echo $perkembangan->detail["pencaharian_jasa"]["konsultansi_manajemen"] ?></td>
			</tr>
			<tr>
				<td>Seniman/artis</td>
				<td><?php echo $perkembangan->detail["pencaharian_jasa"]["seniman"] ?></td>
			</tr>
			<tr>
				<td>Pembantu rumah tangga</td>
				<td><?php echo $perkembangan->detail["pencaharian_jasa"]["prt"] ?></td>
			</tr>
			<tr>
				<td>Sopir</td>
				<td><?php echo $perkembangan->detail["pencaharian_jasa"]["sopir"] ?></td>
			</tr>
			<tr>
				<td>Buruh migran perempuan</td>
				<td><?php echo $perkembangan->detail["pencaharian_jasa"]["buruh_migran_perempuan"] ?></td>
			</tr>
			<tr>
				<td>Buruh migran laki-laki</td>
				<td><?php echo $perkembangan->detail["pencaharian_jasa"]["buruh_migran_laki"] ?></td>
			</tr>
			<tr>
				<td>Usaha jasa pengerah tenaga kerja</td>
				<td><?php echo $perkembangan->detail["pencaharian_jasa"]["pengerah_tenaga_kerja"] ?></td>
			</tr>
			<tr>
				<td>Wiraswasta lainnya</td>
				<td><?php echo $perkembangan->detail["pencaharian_jasa"]["wiraswasta_lainnya"] ?></td>
			</tr>
			<tr>
				<td>Tidak mempunyai matapencaharian tetap</td>
				<td><?php echo $perkembangan->detail["pencaharian_jasa"]["tidak_tetap"] ?></td>
			</tr>
			<tr>
				<td>Jasa penyewaan peralatan pesta</td>
				<td><?php echo $perkembangan->detail["pencaharian_jasa"]["penyewaan_alat_pesta"] ?></td>
			</tr>
			<?php if(!empty($perkembangan->detail["pencaharian_jasa"]["lainnya"]["keterangan"])): ?>
			<tr>
				<td><?php echo $perkembangan->detail["pencaharian_jasa"]["lainnya"]["keterangan"] ?></td>
				<td><?php echo $perkembangan->detail["pencaharian_jasa"]["lainnya"]["jumlah"] ?></td>
			</tr>
			<?php endif ?>
			<tr>
				<td colspan="2">
					<h3>6. Penguasaan Aset Ekonomi Masyarakat</h3>
					<h4>A. Aset Tanah</h4>
				</td>
			</tr>
			<tr>
				<td>Tidak memiliki tanah</td>
				<td><?php echo $perkembangan->detail["aset_tanah"][0] ?></td>
			</tr>
			<tr>
				<td>Memiliki tanah antara 0,10-0,2 ha</td>
				<td><?php echo $perkembangan->detail["aset_tanah"][1] ?></td>
			</tr>
			<tr>
				<td>Memiliki tanah antara 0,21-0,3 ha</td>
				<td><?php echo $perkembangan->detail["aset_tanah"][2] ?></td>
			</tr>
			<tr>
				<td>Memiliki tanah antara 0,31-0,4 ha</td>
				<td><?php echo $perkembangan->detail["aset_tanah"][3] ?></td>
			</tr>
			<tr>
				<td>Memiliki tanah antara 0,41-0,5 ha</td>
				<td><?php echo $perkembangan->detail["aset_tanah"][4] ?></td>
			</tr>
			<tr>
				<td>Memiliki tanah antara 0,51-0,6 ha</td>
				<td><?php echo $perkembangan->detail["aset_tanah"][5] ?></td>
			</tr>
			<tr>
				<td>Memiliki tanah antara 0,61-0,7 ha</td>
				<td><?php echo $perkembangan->detail["aset_tanah"][6] ?></td>
			</tr>
			<tr>
				<td>Memiliki tanah antara 0,71-0,8 ha</td>
				<td><?php echo $perkembangan->detail["aset_tanah"][7] ?></td>
			</tr>
			<tr>
				<td>Memiliki tanah antara 0,81-0,9 ha</td>
				<td><?php echo $perkembangan->detail["aset_tanah"][8] ?></td>
			</tr>
			<tr>
				<td>Memiliki tanah antara 0,91-1,0 ha</td>
				<td><?php echo $perkembangan->detail["aset_tanah"][9] ?></td>
			</tr>
			<tr>
				<td>Memiliki tanah antara 1,00- 5,0 ha</td>
				<td><?php echo $perkembangan->detail["aset_tanah"][10] ?></td>
			</tr>
			<tr>
				<td>Memiliki tanah antara 5,00- 10 ha</td>
				<td><?php echo $perkembangan->detail["aset_tanah"][11] ?></td>
			</tr>
			<tr>
				<td>Memiliki tanah lebih dari 10 ha</td>
				<td><?php echo $perkembangan->detail["aset_tanah"][12] ?></td>
			</tr>
			<tr>
				<td>Jumlah total penduduk</td>
				<td><?php echo $perkembangan->detail["aset_tanah"][13] ?></td>
			</tr>
			<tr>
				<td colspan="2">
					<h4>B. Aset Sarana Transportasi Umum</h4>
				</td>
			</tr>
			<tr>
				<td>Memiliki ojek</td>
				<td>
					Orang: <?php echo $perkembangan->detail["aset_transportasi"]["ojek"]["orang"] ?><br>
					Unit: <?php echo $perkembangan->detail["aset_transportasi"]["ojek"]["unit"] ?>
				</td>
			</tr>
			<tr>
				<td>Memiliki becak</td>
				<td>
					Orang: <?php echo $perkembangan->detail["aset_transportasi"]["becak"]["orang"] ?><br>
					Unit: <?php echo $perkembangan->detail["aset_transportasi"]["becak"]["unit"] ?>
				</td>
			</tr>
			<tr>
				<td>Memiliki cidemo/andong/dokar</td>
				<td>
					Orang: <?php echo $perkembangan->detail["aset_transportasi"]["dokar"]["orang"] ?><br>
					Unit: <?php echo $perkembangan->detail["aset_transportasi"]["dokar"]["unit"] ?>
				</td>
			</tr>
			<tr>
				<td>Memiliki kapal motor</td>
				<td>
					Orang: <?php echo $perkembangan->detail["aset_transportasi"]["kapal_motor"]["orang"] ?><br>
					Unit: <?php echo $perkembangan->detail["aset_transportasi"]["kapal_motor"]["unit"] ?>
				</td>
			</tr>
			<tr>
				<td>Memiliki bus</td>
				<td>
					Orang: <?php echo $perkembangan->detail["aset_transportasi"]["bus"]["orang"] ?><br>
					Unit: <?php echo $perkembangan->detail["aset_transportasi"]["bus"]["unit"] ?>
				</td>
			</tr>
			<tr>
				<td>Memiliki mini bus</td>
				<td>
					Orang: <?php echo $perkembangan->detail["aset_transportasi"]["mini_bus"]["orang"] ?><br>
					Unit: <?php echo $perkembangan->detail["aset_transportasi"]["mini_bus"]["unit"] ?>
				</td>
			</tr>
			<tr>
				<td>Memiliki helikopter dan atau pesawat</td>
				<td>
					Orang: <?php echo $perkembangan->detail["aset_transportasi"]["helikopter_pesawat"]["orang"] ?><br>
					Unit: <?php echo $perkembangan->detail["aset_transportasi"]["helikopter_pesawat"]["unit"] ?>
				</td>
			</tr>
		<?php if(!empty($perkembangan->detail["aset_transportasi"]["lainnya"]["keterangan"])): ?>
			<tr>
				<td><?php echo $perkembangan->detail["aset_transportasi"]["lainnya"]["keterangan"] ?></td>
				<td>
					Orang: <?php echo $perkembangan->detail["aset_transportasi"]["lainnya"]["orang"] ?><br>
					Unit: <?php echo $perkembangan->detail["aset_transportasi"]["lainnya"]["unit"] ?>
				</td>
			</tr>
		<?php endif ?>
			<tr>
				<td colspan="2">
					<h4>C. Aset Sarana Produksi</h4>
				</td>
			</tr>
			<tr>
				<td>Memiliki penggilingan padi</td>
				<td><?php echo $perkembangan->detail["aset_produksi"]["padi"] ?></td>
			</tr>
			<tr>
				<td>Memiliki traktor</td>
				<td><?php echo $perkembangan->detail["aset_produksi"]["traktor"] ?></td>
			</tr>
			<tr>
				<td>Memiliki pabrik pengolahan hasil pertanian</td>
				<td><?php echo $perkembangan->detail["aset_produksi"]["pertanian"] ?></td>
			</tr>
			<tr>
				<td>Memiliki kapal penangkap ikan</td>
				<td><?php echo $perkembangan->detail["aset_produksi"]["ikan"] ?></td>
			</tr>
			<tr>
				<td>Memiliki alat pengolahan hasil perikanan</td>
				<td><?php echo $perkembangan->detail["aset_produksi"]["perikanan"] ?></td>
			</tr>
			<tr>
				<td>Memiliki alat pengolahan hasil peternakan</td>
				<td><?php echo $perkembangan->detail["aset_produksi"]["peternakan"] ?></td>
			</tr>
			<tr>
				<td>Memiliki alat pengolahan hasil perkebunan</td>
				<td><?php echo $perkembangan->detail["aset_produksi"]["perkebunan"] ?></td>
			</tr>
			<tr>
				<td>Memiliki alat pengolahan hasil hutan</td>
				<td><?php echo $perkembangan->detail["aset_produksi"]["hutan"] ?></td>
			</tr>
			<tr>
				<td>Memiliki alat produksi dan pengolah hasil pertambangan</td>
				<td><?php echo $perkembangan->detail["aset_produksi"]["pertambangan"] ?></td>
			</tr>
			<tr>
				<td>Memiliki alat produksi dan pengolah hasil pariwisata</td>
				<td><?php echo $perkembangan->detail["aset_produksi"]["pariwisata"] ?></td>
			</tr>
			<tr>
				<td>Memiliki alat produksi dan pengolah hasil industri jasa Perdagangan</td>
				<td><?php echo $perkembangan->detail["aset_produksi"]["perdagangan"] ?></td>
			</tr>
			<tr>
				<td>Memiliki alat produksi dan pengolah hasil Industri kerajinan keluarga skala kecil dan menengah</td>
				<td><?php echo $perkembangan->detail["aset_produksi"]["kecil_menengah"] ?></td>
			</tr>
			<tr>
				<td>Memiliki alat produksi dan pengolahan hasil industri Migas</td>
				<td><?php echo $perkembangan->detail["aset_produksi"]["migas"] ?></td>
			</tr>
			<tr>
				<td>Tembok</td>
				<td><?php echo $perkembangan->detail["aset_perumahan"]["dinding"]["tembok"] ?></td>
			</tr>
			<tr>
				<td>Kayu</td>
				<td><?php echo $perkembangan->detail["aset_perumahan"]["dinding"]["kayu"] ?></td>
			</tr>
			<tr>
				<td>Bambu</td>
				<td><?php echo $perkembangan->detail["aset_perumahan"]["dinding"]["bambu"] ?></td>
			</tr>
			<tr>
				<td>Tanah liat</td>
				<td><?php echo $perkembangan->detail["aset_perumahan"]["dinding"]["tanah_liat"] ?></td>
			</tr>
			<tr>
				<td>Pelepah kelapa/lontar/gebang</td>
				<td><?php echo $perkembangan->detail["aset_perumahan"]["dinding"]["pelepah"] ?></td>
			</tr>
			<tr>
				<td>Dedaunan</td>
				<td><?php echo $perkembangan->detail["aset_perumahan"]["dinding"]["dedaunan"] ?></td>
			</tr>
		<?php if(!empty($perkembangan->detail["aset_perumahan"]["dinding"]["lainnya"]["keterangan"])): ?>
			<tr>
				<td><?php echo $perkembangan->detail["aset_perumahan"]["dinding"]["lainnya"]["keterangan"] ?></td>
				<td><?php echo $perkembangan->detail["aset_perumahan"]["dinding"]["lainnya"]["jumlah"] ?></td>
			</tr>
		<?php endif ?>
			<tr>
				<td colspan="2">
					<h4>Rumah Menurut Lantai</h4>
				</td>
			</tr>
			<tr>
				<td>Keramik</td>
				<td><?php echo $perkembangan->detail["aset_perumahan"]["lantai"]["keramik"] ?></td>
			</tr>
			<tr>
				<td>Semen</td>
				<td><?php echo $perkembangan->detail["aset_perumahan"]["lantai"]["semen"] ?></td>
			</tr>
			<tr>
				<td>Kayu</td>
				<td><?php echo $perkembangan->detail["aset_perumahan"]["lantai"]["kayu"] ?></td>
			</tr>
			<tr>
				<td>Tanah</td>
				<td><?php echo $perkembangan->detail["aset_perumahan"]["lantai"]["tanah"] ?></td>
			</tr>
		<?php if(!empty($perkembangan->detail["aset_perumahan"]["lantai"]["lainnya"]["keterangan"])): ?>
			<tr>
				<td><?php echo $perkembangan->detail["aset_perumahan"]["lantai"]["lainnya"]["keterangan"] ?></td>
				<td><?php echo $perkembangan->detail["aset_perumahan"]["lantai"]["lainnya"]["jumlah"] ?></td>
			</tr>
		<?php endif ?>
			<tr>
				<td colspan="2">
					<h4>Rumah Menurut Atap</h4>
				</td>
			</tr>
			<tr>
				<td>Genteng</td>
				<td><?php echo $perkembangan->detail["aset_perumahan"]["atap"]["genteng"] ?></td>
			</tr>
			<tr>
				<td>Seng</td>
				<td><?php echo $perkembangan->detail["aset_perumahan"]["atap"]["seng"] ?></td>
			</tr>
			<tr>
				<td>Asbes</td>
				<td><?php echo $perkembangan->detail["aset_perumahan"]["atap"]["asbes"] ?></td>
			</tr>
			<tr>
				<td>Beton</td>
				<td><?php echo $perkembangan->detail["aset_perumahan"]["atap"]["beton"] ?></td>
			</tr>
			<tr>
				<td>Bambu</td>
				<td><?php echo $perkembangan->detail["aset_perumahan"]["atap"]["bambu"] ?></td>
			</tr>
			<tr>
				<td>Kayu</td>
				<td><?php echo $perkembangan->detail["aset_perumahan"]["atap"]["kayu"] ?></td>
			</tr>
			<tr>
				<td>Daun lontar/gebang/enau</td>
				<td><?php echo $perkembangan->detail["aset_perumahan"]["atap"]["lontar"] ?></td>
			</tr>
			<tr>
				<td>Daun ilalang</td>
				<td><?php echo $perkembangan->detail["aset_perumahan"]["atap"]["ilalang"] ?></td>
			</tr>
		<?php if(!empty($perkembangan->detail["aset_perumahan"]["atap"]["lainnya"]["keterangan"])): ?>
			<tr>
				<td><?php echo $perkembangan->detail["aset_perumahan"]["atap"]["lainnya"]["keterangan"] ?></td>
				<td><?php echo $perkembangan->detail["aset_perumahan"]["atap"]["lainnya"]["jumlah"] ?></td>
			</tr>
		<?php endif ?>
			<tr>
				<td colspan="2">
					<h3>7. Pemilikan Aset Ekonomi Lainnya</h3>
				</td>
			</tr>
			<tr>
				<td>Jumlah keluarga memiliki TV dan elektronik lainnya</td>
				<td><?php echo $perkembangan->detail["aset_lain"]["elektronik"] ?></td>
			</tr>
			<tr>
				<td>Jumlah keluarga memiliki sepeda motor/sejenisnya</td>
				<td><?php echo $perkembangan->detail["aset_lain"]["sepeda_motor"] ?></td>
			</tr>
			<tr>
				<td>Jumlah keluarga memiliki mobil dansejenisnya</td>
				<td><?php echo $perkembangan->detail["aset_lain"]["mobil"] ?></td>
			</tr>
			<tr>
				<td>Jumlah keluarga memiliki perahu bermotor</td>
				<td><?php echo $perkembangan->detail["aset_lain"]["perahu_bermotor"] ?></td>
			</tr>
			<tr>
				<td>Jumlah keluarga memiliki kapal barang</td>
				<td><?php echo $perkembangan->detail["aset_lain"]["kapal_barang"] ?></td>
			</tr>
			<tr>
				<td>Jumlah keluarga memiliki kapal penumpang</td>
				<td><?php echo $perkembangan->detail["aset_lain"]["kapal_penumpang"] ?></td>
			</tr>
			<tr>
				<td>Jumlah keluarga memiliki kapal pesiar</td>
				<td><?php echo $perkembangan->detail["aset_lain"]["kapal_pesiar"] ?></td>
			</tr>
			<tr>
				<td>Jumlah keluarga memiliki helikopter</td>
				<td><?php echo $perkembangan->detail["aset_lain"]["helikopter"] ?></td>
			</tr>
			<tr>
				<td>Jumlah keluarga memiliki pesawat terbang</td>
				<td><?php echo $perkembangan->detail["aset_lain"]["pesawat_terbang"] ?></td>
			</tr>
			<tr>
				<td>Jumlah keluarga memiliki ternak besar</td>
				<td><?php echo $perkembangan->detail["aset_lain"]["ternak_besar"] ?></td>
			</tr>
			<tr>
				<td>Jumlah keluarga memiliki ternak kecil</td>
				<td><?php echo $perkembangan->detail["aset_lain"]["ternak_kecil"] ?></td>
			</tr>
			<tr>
				<td>Jumlah keluarga yang memiliki hiasan emas/berlian</td>
				<td><?php echo $perkembangan->detail["aset_lain"]["emas_berlian"] ?></td>
			</tr>
			<tr>
				<td>Jumlah keluarga yang memiliki buku tabungan bank</td>
				<td><?php echo $perkembangan->detail["aset_lain"]["buku_tabungan_bank"] ?></td>
			</tr>
			<tr>
				<td>Jumlah keluarga yang memiliki buku surat berharga</td>
				<td><?php echo $perkembangan->detail["aset_lain"]["buku_surat_berharga"] ?></td>
			</tr>
			<tr>
				<td>Jumlah keluarga yang memiliki sertifikat deposito</td>
				<td><?php echo $perkembangan->detail["aset_lain"]["sertifikat_deposito"] ?></td>
			</tr>
			<tr>
				<td>Jumlah keluarga yang memiliki sertifikat tanah</td>
				<td><?php echo $perkembangan->detail["aset_lain"]["sertifikat_tanah"] ?></td>
			</tr>
			<tr>
				<td>Jumlah keluarga yang memiliki sertifikat bangunan</td>
				<td><?php echo $perkembangan->detail["aset_lain"]["sertifikat_bangunan"] ?></td>
			</tr>
			<tr>
				<td>Jumlah keluarga memiliki perusahaan industri besar</td>
				<td><?php echo $perkembangan->detail["aset_lain"]["industri_besar"] ?></td>
			</tr>
			<tr>
				<td>Jumlah keluarga memiliki peruahaan industri menengah</td>
				<td><?php echo $perkembangan->detail["aset_lain"]["industri_menengah"] ?></td>
			</tr>
			<tr>
				<td>Jumlah keluarga memiliki perusahaan industri kecil</td>
				<td><?php echo $perkembangan->detail["aset_lain"]["industri_kecil"] ?></td>
			</tr>
			<tr>
				<td>Jumlah keluarga memiliki usaha perikanan</td>
				<td><?php echo $perkembangan->detail["aset_lain"]["perikanan"] ?></td>
			</tr>
			<tr>
				<td>Jumlah keluarga memiliki usaha peternakan</td>
				<td><?php echo $perkembangan->detail["aset_lain"]["peternakan"] ?></td>
			</tr>
			<tr>
				<td>Jumlah keluarga memiliki usaha perkebunan</td>
				<td><?php echo $perkembangan->detail["aset_lain"]["perkebunan"] ?></td>
			</tr>
			<tr>
				<td>Jumlah keluarga memiliki usaha pasar swalayan</td>
				<td><?php echo $perkembangan->detail["aset_lain"]["pasar_swalayan"] ?></td>
			</tr>
			<tr>
				<td>Jumlah keluarga memiliki usaha di pasar swalayan</td>
				<td><?php echo $perkembangan->detail["aset_lain"]["di_pasar_swalayan"] ?></td>
			</tr>
			<tr>
				<td>Jumlah keluarga memiliki usaha di pasar tradisional</td>
				<td><?php echo $perkembangan->detail["aset_lain"]["di_pasar_tradisional"] ?></td>
			</tr>
			<tr>
				<td>Jumlah keluarga memiliki usaha di pasar desa</td>
				<td><?php echo $perkembangan->detail["aset_lain"]["di_pasar_desa"] ?></td>
			</tr>
			<tr>
				<td>Jumlah keluarga memiliki usaha transportasi/pengangkutan</td>
				<td><?php echo $perkembangan->detail["aset_lain"]["transportasi_pengangkutan"] ?></td>
			</tr>
			<tr>
				<td>Jumlah keluarga yang memiliki aset telekomunikasi</td>
				<td><?php echo $perkembangan->detail["aset_lain"]["aset_telekomunikasi"] ?></td>
			</tr>
			<tr>
				<td>Jumlah keluarga yang memiliki saham di perusahaan</td>
				<td><?php echo $perkembangan->detail["aset_lain"]["saham_di_perusahaan"] ?></td>
			</tr>
		<?php if(!empty($perkembangan->detail["aset_lain"]["lainnya"]["keterangan"])): ?>
			<tr>
				<td><?php echo $perkembangan->detail["aset_lain"]["lainnya"]["keterangan"] ?></td>
				<td><?php echo $perkembangan->detail["aset_lain"]["lainnya"]["jumlah"] ?></td>
			</tr>
		<?php endif ?>
			<tr>
				<td>Jumlah keluarga seluruhnya</td>
				<td><?php echo $perkembangan->detail["aset_lain"]["jumlah_keluarga"] ?></td>
			</tr>
			<tr>
				<td colspan="2">
					<h3>8. Pendidikan Masyarakat</h3>
					<h4>A. Tingkat Pendidikan Penduduk</h4>
				</td>
			</tr>
			<tr>
				<td>Jumlah penduduk buta aksara dan huruf latin</td>
				<td><?php echo $perkembangan->detail["pendidikan"]["tingkat"]["buta_huruf"] ?></td>
			</tr>
			<tr>
				<td>Jumlah penduduk usia 3-6 tahun yang masuk TK dan Kelompok Bermain Anak</td>
				<td><?php echo $perkembangan->detail["pendidikan"]["tingkat"]["masuk_tk"] ?></td>
			</tr>
			<tr>
				<td>Jumlah anak dan penduduk cacat fisik dan mental</td>
				<td><?php echo $perkembangan->detail["pendidikan"]["tingkat"]["cacat_fisik_mental"] ?></td>
			</tr>
			<tr>
				<td>Jumlah penduduk sedang SD/sederajat</td>
				<td><?php echo $perkembangan->detail["pendidikan"]["tingkat"]["sedang_sd"] ?></td>
			</tr>
			<tr>
				<td>Jumlah penduduk tamat SD/sederajat</td>
				<td><?php echo $perkembangan->detail["pendidikan"]["tingkat"]["tamat_sd"] ?></td>
			</tr>
			<tr>
				<td>Jumlah penduduk tidak tamat SD/sederajat</td>
				<td><?php echo $perkembangan->detail["pendidikan"]["tingkat"]["tidak_sd"] ?></td>
			</tr>
			<tr>
				<td>Jumlah penduduk sedang SLTP/sederajat</td>
				<td><?php echo $perkembangan->detail["pendidikan"]["tingkat"]["sedang_sltp"] ?></td>
			</tr>
			<tr>
				<td>Jumlah penduduk tamat SLTP/sederajat</td>
				<td><?php echo $perkembangan->detail["pendidikan"]["tingkat"]["tamat_sltp"] ?></td>
			</tr>
			<tr>
				<td>Jumlah penduduk sedang SLTA/sederajat</td>
				<td><?php echo $perkembangan->detail["pendidikan"]["tingkat"]["sedang_slta"] ?></td>
			</tr>
			<tr>
				<td>Jumlah penduduk tidak tamat SLTP/Sederajat</td>
				<td><?php echo $perkembangan->detail["pendidikan"]["tingkat"]["tidak_sltp"] ?></td>
			</tr>
			<tr>
				<td>Jumlah penduduk tamat SLTA/Sederajat</td>
				<td><?php echo $perkembangan->detail["pendidikan"]["tingkat"]["tamat_slta"] ?></td>
			</tr>
			<tr>
				<td>Jumlah penduduk sedang D-1</td>
				<td><?php echo $perkembangan->detail["pendidikan"]["tingkat"]["sedang_d1"] ?></td>
			</tr>
			<tr>
				<td>Jumlah penduduk tamat D-1</td>
				<td><?php echo $perkembangan->detail["pendidikan"]["tingkat"]["tamat_d1"] ?></td>
			</tr>
			<tr>
				<td>Jumlah penduduk sedang D-2</td>
				<td><?php echo $perkembangan->detail["pendidikan"]["tingkat"]["sedang_d2"] ?></td>
			</tr>
			<tr>
				<td>Jumlah penduduk tamat D-2</td>
				<td><?php echo $perkembangan->detail["pendidikan"]["tingkat"]["tamat_d2"] ?></td>
			</tr>
			<tr>
				<td>Jumlah penduduk sedang D-3</td>
				<td><?php echo $perkembangan->detail["pendidikan"]["tingkat"]["sedang_d3"] ?></td>
			</tr>
			<tr>
				<td>Jumlah penduduk tamat D-3</td>
				<td><?php echo $perkembangan->detail["pendidikan"]["tingkat"]["tamat_d3"] ?></td>
			</tr>
			<tr>
				<td>Jumlah penduduk sedang S-1</td>
				<td><?php echo $perkembangan->detail["pendidikan"]["tingkat"]["sedang_s1"] ?></td>
			</tr>
			<tr>
				<td>Jumlah penduduk tamat S-1</td>
				<td><?php echo $perkembangan->detail["pendidikan"]["tingkat"]["tamat_s1"] ?></td>
			</tr>
			<tr>
				<td>Jumlah penduduk sedang S-2</td>
				<td><?php echo $perkembangan->detail["pendidikan"]["tingkat"]["sedang_s2"] ?></td>
			</tr>
			<tr>
				<td>Jumlah penduduk tamat S-2</td>
				<td><?php echo $perkembangan->detail["pendidikan"]["tingkat"]["tamat_s2"] ?></td>
			</tr>
			<tr>
				<td>Jumlah penduduk tamat S-3</td>
				<td><?php echo $perkembangan->detail["pendidikan"]["tingkat"]["tamat_s3"] ?></td>
			</tr>
			<tr>
				<td>Jumlah penduduk sedang SLB A</td>
				<td><?php echo $perkembangan->detail["pendidikan"]["tingkat"]["sedang_slba"] ?></td>
			</tr>
			<tr>
				<td>Jumlah penduduk tamat SLB A</td>
				<td><?php echo $perkembangan->detail["pendidikan"]["tingkat"]["tamat_slba"] ?></td>
			</tr>
			<tr>
				<td>Jumlah penduduk sedang SLB B</td>
				<td><?php echo $perkembangan->detail["pendidikan"]["tingkat"]["sedang_slbb"] ?></td>
			</tr>
			<tr>
				<td>Jumlah penduduk tamat SLB B</td>
				<td><?php echo $perkembangan->detail["pendidikan"]["tingkat"]["tamat_slbb"] ?></td>
			</tr>
			<tr>
				<td>Jumlah penduduk sedang SLB C</td>
				<td><?php echo $perkembangan->detail["pendidikan"]["tingkat"]["sedang_slbc"] ?></td>
			</tr>
			<tr>
				<td>Jumlah penduduk tamat SLB C</td>
				<td><?php echo $perkembangan->detail["pendidikan"]["tingkat"]["tamat_slbc"] ?></td>
			</tr>
			<tr>
				<td>% Penduduk buta huruf [(1): jumlah penduduk] x 100%</td>
				<td><?php echo $perkembangan->detail["pendidikan"]["tingkat"]["persentase_buta_huruf"] ?></td>
			</tr>
			<tr>
				<td>% Penduduk tamat SLTP/sederajat [(3):jumlah penduduk] x 100%</td>
				<td><?php echo $perkembangan->detail["pendidikan"]["tingkat"]["persentase_tamat_sltp"] ?></td>
			</tr>
			<tr>
				<td colspan="2">
					<h4>B. Wajib belajar 9 tahun</h4>
				</td>
			</tr>
			<tr>
				<td>Jumlah penduduk usia 7-15 tahun</td>
				<td><?php echo $perkembangan->detail["pendidikan"]["wajib"][1] ?></td>
			</tr>
			<tr>
				<td>Jumlah penduduk usia 7-15 tahun yang masih sekolah</td>
				<td><?php echo $perkembangan->detail["pendidikan"]["wajib"][2] ?></td>
			</tr>
			<tr>
				<td>Jumlah penduduk usia 7-15 tahun yang tidak sekolah</td>
				<td><?php echo $perkembangan->detail["pendidikan"]["wajib"][3] ?></td>
			</tr>
			<tr>
				<td colspan="2">
					<h4>C. Rasio Guru dan Murid</h4>
				</td>
			</tr>
			<tr>
				<td>Jumlah guru TK dan kelompok bermain anak</td>
				<td><?php echo $perkembangan->detail["pendidikan"]["rasio"]["guru_tk"] ?></td>
			</tr>
			<tr>
				<td>Jumlah siswa TK dan kelompok bermain anak</td>
				<td><?php echo $perkembangan->detail["pendidikan"]["rasio"]["siswa_tk"] ?></td>
			</tr>
			<tr>
				<td>Jumlah guru SD dan sederajat</td>
				<td><?php echo $perkembangan->detail["pendidikan"]["rasio"]["guru_sd"] ?></td>
			</tr>
			<tr>
				<td>Jumlah siswa SD dan sederajat</td>
				<td><?php echo $perkembangan->detail["pendidikan"]["rasio"]["siswa_sd"] ?></td>
			</tr>
			<tr>
				<td>Jumlah guru SLTP dan sederajat</td>
				<td><?php echo $perkembangan->detail["pendidikan"]["rasio"]["guru_sltp"] ?></td>
			</tr>
			<tr>
				<td>Jumlah siswa SLTP dan sederajat</td>
				<td><?php echo $perkembangan->detail["pendidikan"]["rasio"]["siswa_sltp"] ?></td>
			</tr>
			<tr>
				<td>Jumlah guru SLTA/sederajat</td>
				<td><?php echo $perkembangan->detail["pendidikan"]["rasio"]["guru_slta"] ?></td>
			</tr>
			<tr>
				<td>Jumlah siswa SLTA/sederajat</td>
				<td><?php echo $perkembangan->detail["pendidikan"]["rasio"]["siswa_slta"] ?></td>
			</tr>
			<tr>
				<td>Jumlah siswa SLB</td>
				<td><?php echo $perkembangan->detail["pendidikan"]["rasio"]["siswa_slb"] ?></td>
			</tr>
			<tr>
				<td>Jumlah guru SLB</td>
				<td><?php echo $perkembangan->detail["pendidikan"]["rasio"]["guru_slb"] ?></td>
			</tr>
			<tr>
				<td colspan="2">
					<h4>D. Kelembagaan Pendidikan Masyarakat</h4>
				</td>
			</tr>
			<tr>
				<td>Jumlah perpustakaan desa/kelurahan (Unit)</td>
				<td><?php echo $perkembangan->detail["pendidikan"]["lembaga"]["perpustakaan_desa"] ?></td>
			</tr>
			<tr>
				<td>Jumlah taman bacaan desa/kelurahan (Unit)</td>
				<td><?php echo $perkembangan->detail["pendidikan"]["lembaga"]["taman_bacaan_desa"] ?></td>
			</tr>
			<tr>
				<td>Jumlah perpustakaan keliling (Unit)</td>
				<td><?php echo $perkembangan->detail["pendidikan"]["lembaga"]["perpustakaan_keliling"] ?></td>
			</tr>
			<tr>
				<td>Jumlah sanggar belajar (Unit)</td>
				<td><?php echo $perkembangan->detail["pendidikan"]["lembaga"]["sanggar_belajar"] ?></td>
			</tr>
			<tr>
				<td>Jumlah kegiatan lembaga pendidikan luar sekolah (Kegiatan)</td>
				<td><?php echo $perkembangan->detail["pendidikan"]["lembaga"]["lembaga_pls"] ?></td>
			</tr>
			<tr>
				<td>Jumlah kelompok belajar Paket A (Kelompok)</td>
				<td><?php echo $perkembangan->detail["pendidikan"]["lembaga"]["kelompok_paket_a"] ?></td>
			</tr>
			<tr>
				<td>Jumlah peserta ujian Paket A (Orang)</td>
				<td><?php echo $perkembangan->detail["pendidikan"]["lembaga"]["pesert_paket_a"] ?></td>
			</tr>
			<tr>
				<td>Jumlah kelompok belajar Paket B (Kelompok)</td>
				<td><?php echo $perkembangan->detail["pendidikan"]["lembaga"]["kelompok_paket_b"] ?></td>
			</tr>
			<tr>
				<td>Jumlah Peserta ujian Paket B (Orang)</td>
				<td><?php echo $perkembangan->detail["pendidikan"]["lembaga"]["pesert_paket_b"] ?></td>
			</tr>
			<tr>
				<td>Jumlah kelompok belajar Paket C (Kelompok)</td>
				<td><?php echo $perkembangan->detail["pendidikan"]["lembaga"]["kelompok_paket_c"] ?></td>
			</tr>
			<tr>
				<td>Jumlah peserta ujian Paket C (Orang)</td>
				<td><?php echo $perkembangan->detail["pendidikan"]["lembaga"]["pesert_paket_c"] ?></td>
			</tr>
			<tr>
				<td>Jumlah lembaga kursus keterampilan (Unit)</td>
				<td><?php echo $perkembangan->detail["pendidikan"]["lembaga"]["lembaga_kk"] ?></td>
			</tr>
			<tr>
				<td>Jumlah peserta kursus keterampilan (Orang)</td>
				<td><?php echo $perkembangan->detail["pendidikan"]["lembaga"]["peserta_kk"] ?></td>
			</tr>
			<tr>
				<td colspan="2">
					<h3>9. Kesehatan Masyarakat</h3>
					<h4>A. Kualitas Ibu Hamil</h4>
				</td>
			</tr>
			<tr>
				<td>Jumlah ibu hamil</td>
				<td><?php echo $perkembangan->detail["kesehatan"]["bumil"]["bumil"] ?></td>
			</tr>
			<tr>
				<td>Jumlah ibu hamil periksa di Posyandu</td>
				<td><?php echo $perkembangan->detail["kesehatan"]["bumil"]["bumil_di_posyandu"] ?></td>
			</tr>
			<tr>
				<td>Jumlah ibu hamil periksa di Puskesmas</td>
				<td><?php echo $perkembangan->detail["kesehatan"]["bumil"]["bumil_di_puskesmas"] ?></td>
			</tr>
			<tr>
				<td>Jumlah ibu hamil periksa di Rumah Sakit</td>
				<td><?php echo $perkembangan->detail["kesehatan"]["bumil"]["bumil_di_rs"] ?></td>
			</tr>
			<tr>
				<td>Jumlah ibu hamil periksa di Dokter Praktek</td>
				<td><?php echo $perkembangan->detail["kesehatan"]["bumil"]["bumil_di_dokter"] ?></td>
			</tr>
			<tr>
				<td>Jumlah ibu hamil periksa di Bidan Praktek</td>
				<td><?php echo $perkembangan->detail["kesehatan"]["bumil"]["bumil_di_bidan"] ?></td>
			</tr>
			<tr>
				<td>Jumlah ibu hamil periksa di Dukun Terlatih</td>
				<td><?php echo $perkembangan->detail["kesehatan"]["bumil"]["bumil_di_dukun"] ?></td>
			</tr>
			<tr>
				<td>Jumlah kematian ibu hamil</td>
				<td><?php echo $perkembangan->detail["kesehatan"]["bumil"]["kematian_bumil"] ?></td>
			</tr>
			<tr>
				<td>Jumlah ibu hamil melahirkan</td>
				<td><?php echo $perkembangan->detail["kesehatan"]["bumil"]["bumil_melahirkan"] ?></td>
			</tr>
			<tr>
				<td>Jumlah ibu nifas</td>
				<td><?php echo $perkembangan->detail["kesehatan"]["bumil"]["nifas"] ?></td>
			</tr>
			<tr>
				<td>Jumlah kematian ibu nifas</td>
				<td><?php echo $perkembangan->detail["kesehatan"]["bumil"]["kematian_nifas"] ?></td>
			</tr>
			<tr>
				<td>Jumlah ibu nifas hidup</td>
				<td><?php echo $perkembangan->detail["kesehatan"]["bumil"]["nifas_hidup"] ?></td>
			</tr>
			<tr>
				<td colspan="2">
					<h4>B. Kualitas Bayi</h4>
				</td>
			</tr>
			<tr>
				<td>Jumlah keguguran kandungan</td>
				<td><?php echo $perkembangan->detail["kesehatan"]["bayi"]["keguguran"] ?></td>
			</tr>
			<tr>
				<td>Jumlah bayi lahir</td>
				<td><?php echo $perkembangan->detail["kesehatan"]["bayi"]["lahir"] ?></td>
			</tr>
			<tr>
				<td>Jumlah bayi lahir mati</td>
				<td><?php echo $perkembangan->detail["kesehatan"]["bayi"]["lahir_mati"] ?></td>
			</tr>
			<tr>
				<td>Jumlah bayi lahir hidup</td>
				<td><?php echo $perkembangan->detail["kesehatan"]["bayi"]["lahir_hidup"] ?></td>
			</tr>
			<tr>
				<td>Jumlah bayi mati usia 0 – 1 bulan</td>
				<td><?php echo $perkembangan->detail["kesehatan"]["bayi"]["mati_01"] ?></td>
			</tr>
			<tr>
				<td>Jumlah bayi mati usia 1 – 12 bulan</td>
				<td><?php echo $perkembangan->detail["kesehatan"]["bayi"]["mati_112"] ?></td>
			</tr>
			<tr>
				<td>Jumlah bayi lahir berat kurang dari 2,5 kg</td>
				<td><?php echo $perkembangan->detail["kesehatan"]["bayi"]["berat_kurang"] ?></td>
			</tr>
			<tr>
				<td>Jumlah bayi 0-5 tahun hidup yang menderita kelainan organ tubuh, fisik dan mental</td>
				<td><?php echo $perkembangan->detail["kesehatan"]["bayi"]["kelainan"] ?></td>
			</tr>
			<tr>
				<td colspan="2">
					<h4>C. Kualitas Persalinan</h4>
					<h4>Tempat Persalinan</h4>
				</td>
			</tr>
			<tr>
				<td>Tempat persalinan Rumah Sakit Umum</td>
				<td><?php echo $perkembangan->detail["kesehatan"]["persalinan"]["tempat"]["rsu"] ?></td>
			</tr>
			<tr>
				<td>Tempat persalinan Rumah Bersalin</td>
				<td><?php echo $perkembangan->detail["kesehatan"]["persalinan"]["tempat"]["rb"] ?></td>
			</tr>
			<tr>
				<td>Tempat persalinan Puskesmas</td>
				<td><?php echo $perkembangan->detail["kesehatan"]["persalinan"]["tempat"]["puskesmas"] ?></td>
			</tr>
			<tr>
				<td>Tempat persalinan Polindes</td>
				<td><?php echo $perkembangan->detail["kesehatan"]["persalinan"]["tempat"]["polindes"] ?></td>
			</tr>
			<tr>
				<td>Tempat persalinan Balai Kesehatan Ibu Anak</td>
				<td><?php echo $perkembangan->detail["kesehatan"]["persalinan"]["tempat"]["bbkia"] ?></td>
			</tr>
			<tr>
				<td>Tempat persalinan rumah praktek bidan</td>
				<td><?php echo $perkembangan->detail["kesehatan"]["persalinan"]["tempat"]["rpb"] ?></td>
			</tr>
			<tr>
				<td>Tempat praktek dokter</td>
				<td><?php echo $perkembangan->detail["kesehatan"]["persalinan"]["tempat"]["tpd"] ?></td>
			</tr>
			<tr>
				<td>Rumah dukun</td>
				<td><?php echo $perkembangan->detail["kesehatan"]["persalinan"]["tempat"]["rd"] ?></td>
			</tr>
			<tr>
				<td>Rumah sendiri</td>
				<td><?php echo $perkembangan->detail["kesehatan"]["persalinan"]["tempat"]["rumah"] ?></td>
			</tr>
			<tr>
				<td colspan="2">
					<h4>Pertolongan Persalinan</h4>
				</td>
			</tr>
			<tr>
				<td>Jumlah Persalinan ditolong Dokter</td>
				<td><?php echo $perkembangan->detail["kesehatan"]["persalinan"]["pertolongan"]["dokter"] ?></td>
			</tr>
			<tr>
				<td>Jumlah persalinan ditolong bidan</td>
				<td><?php echo $perkembangan->detail["kesehatan"]["persalinan"]["pertolongan"]["bidan"] ?></td>
			</tr>
			<tr>
				<td>Jumlah persalinan ditolong perawat</td>
				<td><?php echo $perkembangan->detail["kesehatan"]["persalinan"]["pertolongan"]["perawat"] ?></td>
			</tr>
			<tr>
				<td>Jumlah persalinan ditolong dukun bersalin</td>
				<td><?php echo $perkembangan->detail["kesehatan"]["persalinan"]["pertolongan"]["dukun"] ?></td>
			</tr>
			<tr>
				<td>Jumlah persalinan ditolong keluarga</td>
				<td><?php echo $perkembangan->detail["kesehatan"]["persalinan"]["pertolongan"]["keluarga"] ?></td>
			</tr>
			<tr>
				<td colspan="2">
					<h4>D. Cakupan Imunisasi</h4>
				</td>
			</tr>
			<tr>
				<td>Jumlah Bayi usia 2 bulan</td>
				<td><?php echo $perkembangan->detail["kesehatan"]["imunisasi"][1] ?></td>
			</tr>
			<tr>
				<td>Jumlah bayi 2 bulan Imunisasi DPT-1, BCG dan Polio -1</td>
				<td><?php echo $perkembangan->detail["kesehatan"]["imunisasi"][2] ?></td>
			</tr>
			<tr>
				<td>Jumlah bayi usia 3 bulan</td>
				<td><?php echo $perkembangan->detail["kesehatan"]["imunisasi"][3] ?></td>
			</tr>
			<tr>
				<td>Jumlah bayi 3 bulan yang imunisasi DPT-2 dan Polio-2</td>
				<td><?php echo $perkembangan->detail["kesehatan"]["imunisasi"][4] ?></td>
			</tr>
			<tr>
				<td>Jumlah bayi usia 4 bulan</td>
				<td><?php echo $perkembangan->detail["kesehatan"]["imunisasi"][5] ?></td>
			</tr>
			<tr>
				<td>Jumlah bayi 4 bulan yang imunisasi DPT-3 dan Polio-3</td>
				<td><?php echo $perkembangan->detail["kesehatan"]["imunisasi"][6] ?></td>
			</tr>
			<tr>
				<td>Jumlah bayi 9 bulan</td>
				<td><?php echo $perkembangan->detail["kesehatan"]["imunisasi"][7] ?></td>
			</tr>
			<tr>
				<td>Jumlah bayi 9 bulan yang imunisasi campak</td>
				<td><?php echo $perkembangan->detail["kesehatan"]["imunisasi"][8] ?></td>
			</tr>
			<tr>
				<td>Jumlah bayi yang sudah imunisasi cacar</td>
				<td><?php echo $perkembangan->detail["kesehatan"]["imunisasi"][9] ?></td>
			</tr>
			<tr>
				<td colspan="2">
					<h4>E. Perkembangan Pasangan Usia Subur dan KB</h4>
					<h4>Pasangan Usia Subur</h4>
				</td>
			</tr>
			<tr>
				<td>Jumlah remaja putri usia 12 – 17 tahun</td>
				<td><?php echo $perkembangan->detail["kesehatan"]["subur"][1] ?></td>
			</tr>
			<tr>
				<td>Jumlah perempuan usia subur 15 – 49 tahun</td>
				<td><?php echo $perkembangan->detail["kesehatan"]["subur"][2] ?></td>
			</tr>
			<tr>
				<td>Jumlah wanita kawin muda usia kurang dari 16 tahun</td>
				<td><?php echo $perkembangan->detail["kesehatan"]["subur"][3] ?></td>
			</tr>
			<tr>
				<td>Jumlah pasangan usia subur (Pasangan)</td>
				<td><?php echo $perkembangan->detail["kesehatan"]["subur"][4] ?></td>
			</tr>
			<tr>
				<td colspan="2">
					<h4>Keluarga Berencana</h4>
				</td>
			</tr>
			<tr>
				<td>Jumlah akseptor KB</td>
				<td><?php echo $perkembangan->detail["kesehatan"]["kb"][1] ?></td>
			</tr>
			<tr>
				<td>Jumlah pengguna alat kontrasepsi suntik</td>
				<td><?php echo $perkembangan->detail["kesehatan"]["kb"][2] ?></td>
			</tr>
			<tr>
				<td>Jumlah pengguna metode kontrasepsi spiral</td>
				<td><?php echo $perkembangan->detail["kesehatan"]["kb"][3] ?></td>
			</tr>
			<tr>
				<td>Jumlah pengguna alat kontrasepsi kondom</td>
				<td><?php echo $perkembangan->detail["kesehatan"]["kb"][4] ?></td>
			</tr>
			<tr>
				<td>Jumlah pengguna metode kontrasepsi pil</td>
				<td><?php echo $perkembangan->detail["kesehatan"]["kb"][5] ?></td>
			</tr>
			<tr>
				<td>Jumlah pengguna metode vasektomi</td>
				<td><?php echo $perkembangan->detail["kesehatan"]["kb"][6] ?></td>
			</tr>
			<tr>
				<td>Jumlah pengguna metode kontrasepsi tubektomi</td>
				<td><?php echo $perkembangan->detail["kesehatan"]["kb"][7] ?></td>
			</tr>
			<tr>
				<td>Jumlah pengguna metode KB Kelender/KB Alamiah</td>
				<td><?php echo $perkembangan->detail["kesehatan"]["kb"][8] ?></td>
			</tr>
			<tr>
				<td>Jumlah pengguna metode KB obat tradisional</td>
				<td><?php echo $perkembangan->detail["kesehatan"]["kb"][9] ?></td>
			</tr>
		<?php if(!empty($perkembangan->detail["kesehatan"]["kb"]["lainnya"]["keterangan"])): ?>
			<tr>
				<td>Jumlah pengguna alat kontrasepsi metode <?php echo $perkembangan->detail["kesehatan"]["kb"]["lainnya"]["keterangan"] ?></td>
				<td><?php echo $perkembangan->detail["kesehatan"]["kb"]["lainnya"]["jumlah"] ?></td>
			</tr>
		<?php endif ?>
			<tr>
				<td>Jumlah PUS yang tidak menggunakan metode KB</td>
				<td><?php echo $perkembangan->detail["kesehatan"]["kb"]["tidak"] ?></td>
			</tr>
			<tr>
				<td colspan="2">
					<h4>F. Wabah Penyakit</h4>
				</td>
			</tr>
			<tr>
				<td>Muntaber</td>
				<td>
					Jumlah Kejadian Tahun Ini: <?php echo $perkembangan->detail["kesehatan"]["wabah"][1]["kejadian"] ?><br>
					Jumlah Meninggal (Orang): <?php echo $perkembangan->detail["kesehatan"]["wabah"][1]["meninggal"] ?>
				</td>
			</tr>
			<tr>
				<td>Demam Berdarah</td>
				<td>
					Jumlah Kejadian Tahun Ini: <?php echo $perkembangan->detail["kesehatan"]["wabah"][2]["kejadian"] ?><br>
					Jumlah Meninggal (Orang): <?php echo $perkembangan->detail["kesehatan"]["wabah"][2]["meninggal"] ?>
				</td>
			</tr>
			<tr>
				<td>Kolera</td>
				<td>
					Jumlah Kejadian Tahun Ini: <?php echo $perkembangan->detail["kesehatan"]["wabah"][3]["kejadian"] ?><br>
					Jumlah Meninggal (Orang): <?php echo $perkembangan->detail["kesehatan"]["wabah"][3]["meninggal"] ?>
				</td>
			</tr>
			<tr>
				<td>Polio</td>
				<td>
					Jumlah Kejadian Tahun Ini: <?php echo $perkembangan->detail["kesehatan"]["wabah"][4]["kejadian"] ?><br>
					Jumlah Meninggal (Orang): <?php echo $perkembangan->detail["kesehatan"]["wabah"][4]["meninggal"] ?>
				</td>
			</tr>
			<tr>
				<td>Cikungunya</td>
				<td>
					Jumlah Kejadian Tahun Ini: <?php echo $perkembangan->detail["kesehatan"]["wabah"][5]["kejadian"] ?><br>
					Jumlah Meninggal (Orang): <?php echo $perkembangan->detail["kesehatan"]["wabah"][5]["meninggal"] ?>
				</td>
			</tr>
			<tr>
				<td>Flu Burung</td>
				<td>
					Jumlah Kejadian Tahun Ini: <?php echo $perkembangan->detail["kesehatan"]["wabah"][6]["kejadian"] ?><br>
					Jumlah Meninggal (Orang): <?php echo $perkembangan->detail["kesehatan"]["wabah"][6]["meninggal"] ?>
				</td>
			</tr>
			<tr>
				<td>Busung Lapar</td>
				<td>
					Jumlah Kejadian Tahun Ini: <?php echo $perkembangan->detail["kesehatan"]["wabah"][7]["kejadian"] ?><br>
					Jumlah Meninggal (Orang): <?php echo $perkembangan->detail["kesehatan"]["wabah"][7]["meninggal"] ?>
				</td>
			</tr>
			<tr>
				<td>Kelaparan</td>
				<td>
					Jumlah Kejadian Tahun Ini: <?php echo $perkembangan->detail["kesehatan"]["wabah"][8]["kejadian"] ?><br>
					Jumlah Meninggal (Orang): <?php echo $perkembangan->detail["kesehatan"]["wabah"][8]["meninggal"] ?>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<h4>G. Angka Harapan Hidup</h4>
				</td>
			</tr>
			<tr>
				<td>Angka harapan hidup penduduk Desa/Kelurahan</td>
				<td><?php echo $perkembangan->detail["kesehatan"]["harapan"][1] ?></td>
			</tr>
			<tr>
				<td>Angka harapan hidup penduduk Kabupaten/Kota</td>
				<td><?php echo $perkembangan->detail["kesehatan"]["harapan"][2] ?></td>
			</tr>
			<tr>
				<td>Angka Harapan Hidup Provinsi</td>
				<td><?php echo $perkembangan->detail["kesehatan"]["harapan"][3] ?></td>
			</tr>
			<tr>
				<td>Angka harapan Hidup Nasional</td>
				<td><?php echo $perkembangan->detail["kesehatan"]["harapan"][4] ?></td>
			</tr>
			<tr>
				<td colspan="2">
					<h4>H. Cakupan pemenuhan kebutuhan air bersih</h4>
				</td>
			</tr>
			<tr>
				<td>Jumlah keluarga menggunakan sumur gali</td>
				<td><?php echo $perkembangan->detail["kesehatan"]["air"][1] ?></td>
			</tr>
			<tr>
				<td>Jumlah keluarga pelanggan PAM</td>
				<td><?php echo $perkembangan->detail["kesehatan"]["air"][2] ?></td>
			</tr>
			<tr>
				<td>Jumlah keluarga menggunakan Penampung Air Hujan</td>
				<td><?php echo $perkembangan->detail["kesehatan"]["air"][3] ?></td>
			</tr>
			<tr>
				<td>Jumlah keluarga menggunakan sumur pompa</td>
				<td><?php echo $perkembangan->detail["kesehatan"]["air"][4] ?></td>
			</tr>
			<tr>
				<td>Jumlah keluarga menggunakan perpipaan air kran</td>
				<td><?php echo $perkembangan->detail["kesehatan"]["air"][5] ?></td>
			</tr>
			<tr>
				<td>Jumlah keluarga menggunakan hidran umum</td>
				<td><?php echo $perkembangan->detail["kesehatan"]["air"][6] ?></td>
			</tr>
			<tr>
				<td>Jumlah keluarga menggunakan air sungai</td>
				<td><?php echo $perkembangan->detail["kesehatan"]["air"][7] ?></td>
			</tr>
			<tr>
				<td>Jumlah keluarga menggunakan embung</td>
				<td><?php echo $perkembangan->detail["kesehatan"]["air"][8] ?></td>
			</tr>
			<tr>
				<td>Jumlah keluarga yang menggunakan mata air</td>
				<td><?php echo $perkembangan->detail["kesehatan"]["air"][9] ?></td>
			</tr>
			<tr>
				<td>Jumlah keluarga yang tidak mendapatkan akses air minum dari air laut</td>
				<td><?php echo $perkembangan->detail["kesehatan"]["air"][10] ?></td>
			</tr>
			<tr>
				<td>Jumlah keluarga yang tidak mendapatkan akses air minum dari sumber di atas</td>
				<td><?php echo $perkembangan->detail["kesehatan"]["air"][11] ?></td>
			</tr>
			<tr>
				<td colspan="2">
					<h4>I. Perilaku hidup bersih dan sehat</h4>
					<h4>Kebiasaan buang air besar</h4>
				</td>
			</tr>
			<tr>
				<td>Jumlah keluarga memiliki WC yang sehat</td>
				<td><?php echo $perkembangan->detail["kesehatan"]["bab"][1] ?></td>
			</tr>
			<tr>
				<td>Jumlah keluarga memiliki WC yang kurang memenuhi standar kesehatan</td>
				<td><?php echo $perkembangan->detail["kesehatan"]["bab"][2] ?></td>
			</tr>
			<tr>
				<td>Jumlah keluarga biasa buang air besar di sungai/parit/kebun/hutan</td>
				<td><?php echo $perkembangan->detail["kesehatan"]["bab"][3] ?></td>
			</tr>
			<tr>
				<td>Jumlah keluarga yang menggunakan fasilitas MCK umum</td>
				<td><?php echo $perkembangan->detail["kesehatan"]["bab"][4] ?></td>
			</tr>
			<tr>
				<td colspan="2">
					<h4>Pola Makan</h4>
				</td>
			</tr>
			<tr>
				<td>Kebiasaan penduduk makan dlm sehari 1 kali</td>
				<td><?php echo $perkembangan->detail["kesehatan"]["makan"][1] ?></td>
			</tr>
			<tr>
				<td>Kebiasaan penduduk makan sehari 2 kali</td>
				<td><?php echo $perkembangan->detail["kesehatan"]["makan"][2] ?></td>
			</tr>
			<tr>
				<td>Kebiasaan penduduk makan sehari 3 kali</td>
				<td><?php echo $perkembangan->detail["kesehatan"]["makan"][3] ?></td>
			</tr>
			<tr>
				<td>Kebiasaan penduduk makan sehari lebih dari 3 kali</td>
				<td><?php echo $perkembangan->detail["kesehatan"]["makan"][4] ?></td>
			</tr>
			<tr>
				<td>Penduduk yang belum tentu sehari makan 1 kali</td>
				<td><?php echo $perkembangan->detail["kesehatan"]["makan"][5] ?></td>
			</tr>
			<tr>
				<td colspan="2">
					<h4>Kebiasaan berobat bila sakit</h4>
				</td>
			</tr>
			<tr>
				<td>Dukun Terlatih</td>
				<td><?php echo $perkembangan->detail["kesehatan"]["berobat"][1] ?></td>
			</tr>
			<tr>
				<td>Dokter/puskesmas/mantri kesehatan/perawat/bidan/posyandu</td>
				<td><?php echo $perkembangan->detail["kesehatan"]["berobat"][2] ?></td>
			</tr>
			<tr>
				<td>Obat tradisional dari dukun pengobatan alternatif</td>
				<td><?php echo $perkembangan->detail["kesehatan"]["berobat"][3] ?></td>
			</tr>
			<tr>
				<td>Paranormal</td>
				<td><?php echo $perkembangan->detail["kesehatan"]["berobat"][4] ?></td>
			</tr>
			<tr>
				<td>Obat tradisional dari keluarga sendiri</td>
				<td><?php echo $perkembangan->detail["kesehatan"]["berobat"][5] ?></td>
			</tr>
			<tr>
				<td>Tidak diobati</td>
				<td><?php echo $perkembangan->detail["kesehatan"]["berobat"][6] ?></td>
			</tr>
			<tr>
				<td colspan="2">
					<h4>J. Status Gizi Balita</h4>
				</td>
			</tr>
			<tr>
				<td>Jumlah Balita</td>
				<td><?php echo $perkembangan->detail["kesehatan"]["balita"][1] ?></td>
			</tr>
			<tr>
				<td>Jumlah Balita bergizi buruk</td>
				<td><?php echo $perkembangan->detail["kesehatan"]["balita"][2] ?></td>
			</tr>
			<tr>
				<td>Jumlah Balita bergizi baik</td>
				<td><?php echo $perkembangan->detail["kesehatan"]["balita"][3] ?></td>
			</tr>
			<tr>
				<td>Jumlah Balita bergizi kurang</td>
				<td><?php echo $perkembangan->detail["kesehatan"]["balita"][4] ?></td>
			</tr>
			<tr>
				<td>Jumlah Balita bergizi lebih</td>
				<td><?php echo $perkembangan->detail["kesehatan"]["balita"][5] ?></td>
			</tr>
			<tr>
				<td colspan="2">
					<h4>K. Jumlah Penderita Sakit tahun ini</h4>
				</td>
			</tr>
			<tr>
				<td>Jantung</td>
				<td>
					Jumlah Penderita: <?php echo $perkembangan->detail["kesehatan"]["penderita"][1]["jumlah"] ?><br>
					Dirawat di Rumah: <?php echo $perkembangan->detail["kesehatan"]["penderita"][1]["rumah"] ?><br>
					Dirawat di Rumah Sakit: <?php echo $perkembangan->detail["kesehatan"]["penderita"][1]["rs"] ?><br>
					Dirawat di Puskesmas<?php echo $perkembangan->detail["kesehatan"]["penderita"][1]["puskesmas"] ?>
				</td>
			</tr>
			<tr>
				<td>Lever</td>
				<td>
					Jumlah Penderita: <?php echo $perkembangan->detail["kesehatan"]["penderita"][2]["jumlah"] ?><br>
					Dirawat di Rumah: <?php echo $perkembangan->detail["kesehatan"]["penderita"][2]["rumah"] ?><br>
					Dirawat di Rumah Sakit: <?php echo $perkembangan->detail["kesehatan"]["penderita"][2]["rs"] ?><br>
					Dirawat di Puskesmas<?php echo $perkembangan->detail["kesehatan"]["penderita"][2]["puskesmas"] ?>
				</td>
			</tr>
			<tr>
				<td>Paru-paru</td>
				<td>
					Jumlah Penderita: <?php echo $perkembangan->detail["kesehatan"]["penderita"][3]["jumlah"] ?><br>
					Dirawat di Rumah: <?php echo $perkembangan->detail["kesehatan"]["penderita"][3]["rumah"] ?><br>
					Dirawat di Rumah Sakit: <?php echo $perkembangan->detail["kesehatan"]["penderita"][3]["rs"] ?><br>
					Dirawat di Puskesmas<?php echo $perkembangan->detail["kesehatan"]["penderita"][3]["puskesmas"] ?>
				</td>
			</tr>
			<tr>
				<td>Kanker</td>
				<td>
					Jumlah Penderita: <?php echo $perkembangan->detail["kesehatan"]["penderita"][4]["jumlah"] ?><br>
					Dirawat di Rumah: <?php echo $perkembangan->detail["kesehatan"]["penderita"][4]["rumah"] ?><br>
					Dirawat di Rumah Sakit: <?php echo $perkembangan->detail["kesehatan"]["penderita"][4]["rs"] ?><br>
					Dirawat di Puskesmas<?php echo $perkembangan->detail["kesehatan"]["penderita"][4]["puskesmas"] ?>
				</td>
			</tr>
			<tr>
				<td>Stroke</td>
				<td>
					Jumlah Penderita: <?php echo $perkembangan->detail["kesehatan"]["penderita"][5]["jumlah"] ?><br>
					Dirawat di Rumah: <?php echo $perkembangan->detail["kesehatan"]["penderita"][5]["rumah"] ?><br>
					Dirawat di Rumah Sakit: <?php echo $perkembangan->detail["kesehatan"]["penderita"][5]["rs"] ?><br>
					Dirawat di Puskesmas<?php echo $perkembangan->detail["kesehatan"]["penderita"][5]["puskesmas"] ?>
				</td>
			</tr>
			<tr>
				<td>Diabetes Melitus</td>
				<td>
					Jumlah Penderita: <?php echo $perkembangan->detail["kesehatan"]["penderita"][6]["jumlah"] ?><br>
					Dirawat di Rumah: <?php echo $perkembangan->detail["kesehatan"]["penderita"][6]["rumah"] ?><br>
					Dirawat di Rumah Sakit: <?php echo $perkembangan->detail["kesehatan"]["penderita"][6]["rs"] ?><br>
					Dirawat di Puskesmas<?php echo $perkembangan->detail["kesehatan"]["penderita"][6]["puskesmas"] ?>
				</td>
			</tr>
			<tr>
				<td>Ginjal</td>
				<td>
					Jumlah Penderita: <?php echo $perkembangan->detail["kesehatan"]["penderita"][7]["jumlah"] ?><br>
					Dirawat di Rumah: <?php echo $perkembangan->detail["kesehatan"]["penderita"][7]["rumah"] ?><br>
					Dirawat di Rumah Sakit: <?php echo $perkembangan->detail["kesehatan"]["penderita"][7]["rs"] ?><br>
					Dirawat di Puskesmas<?php echo $perkembangan->detail["kesehatan"]["penderita"][7]["puskesmas"] ?>
				</td>
			</tr>
			<tr>
				<td>Malaria</td>
				<td>
					Jumlah Penderita: <?php echo $perkembangan->detail["kesehatan"]["penderita"][8]["jumlah"] ?><br>
					Dirawat di Rumah: <?php echo $perkembangan->detail["kesehatan"]["penderita"][8]["rumah"] ?><br>
					Dirawat di Rumah Sakit: <?php echo $perkembangan->detail["kesehatan"]["penderita"][8]["rs"] ?><br>
					Dirawat di Puskesmas<?php echo $perkembangan->detail["kesehatan"]["penderita"][8]["puskesmas"] ?>
				</td>
			</tr>
			<tr>
				<td>Lepra/Kusta</td>
				<td>
					Jumlah Penderita: <?php echo $perkembangan->detail["kesehatan"]["penderita"][9]["jumlah"] ?><br>
					Dirawat di Rumah: <?php echo $perkembangan->detail["kesehatan"]["penderita"][9]["rumah"] ?><br>
					Dirawat di Rumah Sakit: <?php echo $perkembangan->detail["kesehatan"]["penderita"][9]["rs"] ?><br>
					Dirawat di Puskesmas<?php echo $perkembangan->detail["kesehatan"]["penderita"][9]["puskesmas"] ?>
				</td>
			</tr>
			<tr>
				<td>HIV/AIDS</td>
				<td>
					Jumlah Penderita: <?php echo $perkembangan->detail["kesehatan"]["penderita"][10]["jumlah"] ?><br>
					Dirawat di Rumah: <?php echo $perkembangan->detail["kesehatan"]["penderita"][10]["rumah"] ?><br>
					Dirawat di Rumah Sakit: <?php echo $perkembangan->detail["kesehatan"]["penderita"][10]["rs"] ?><br>
					Dirawat di Puskesmas<?php echo $perkembangan->detail["kesehatan"]["penderita"][10]["puskesmas"] ?>
				</td>
			</tr>
			<tr>
				<td>Gila/stress</td>
				<td>
					Jumlah Penderita: <?php echo $perkembangan->detail["kesehatan"]["penderita"][11]["jumlah"] ?><br>
					Dirawat di Rumah: <?php echo $perkembangan->detail["kesehatan"]["penderita"][11]["rumah"] ?><br>
					Dirawat di Rumah Sakit: <?php echo $perkembangan->detail["kesehatan"]["penderita"][11]["rs"] ?><br>
					Dirawat di Puskesmas<?php echo $perkembangan->detail["kesehatan"]["penderita"][11]["puskesmas"] ?>
				</td>
			</tr>
			<tr>
				<td>TBC</td>
				<td>
					Jumlah Penderita: <?php echo $perkembangan->detail["kesehatan"]["penderita"][12]["jumlah"] ?><br>
					Dirawat di Rumah: <?php echo $perkembangan->detail["kesehatan"]["penderita"][12]["rumah"] ?><br>
					Dirawat di Rumah Sakit: <?php echo $perkembangan->detail["kesehatan"]["penderita"][12]["rs"] ?><br>
					Dirawat di Puskesmas<?php echo $perkembangan->detail["kesehatan"]["penderita"][12]["puskesmas"] ?>
				</td>
			</tr>
			<tr>
				<td>ISPA</td>
				<td>
					Jumlah Penderita: <?php echo $perkembangan->detail["kesehatan"]["penderita"][13]["jumlah"] ?><br>
					Dirawat di Rumah: <?php echo $perkembangan->detail["kesehatan"]["penderita"][13]["rumah"] ?><br>
					Dirawat di Rumah Sakit: <?php echo $perkembangan->detail["kesehatan"]["penderita"][13]["rs"] ?><br>
					Dirawat di Puskesmas<?php echo $perkembangan->detail["kesehatan"]["penderita"][13]["puskesmas"] ?>
				</td>
			</tr>
			<tr>
				<td>Asma</td>
				<td>
					Jumlah Penderita: <?php echo $perkembangan->detail["kesehatan"]["penderita"][14]["jumlah"] ?><br>
					Dirawat di Rumah: <?php echo $perkembangan->detail["kesehatan"]["penderita"][14]["rumah"] ?><br>
					Dirawat di Rumah Sakit: <?php echo $perkembangan->detail["kesehatan"]["penderita"][14]["rs"] ?><br>
					Dirawat di Puskesmas<?php echo $perkembangan->detail["kesehatan"]["penderita"][14]["puskesmas"] ?>
				</td>
			</tr>
		<?php if(!empty($perkembangan->detail["kesehatan"]["penderita"]["lainnya"]["keterangan"])): ?>
			<tr>
				<td><?php echo $perkembangan->detail["kesehatan"]["penderita"]["lainnya"]["keterangan"] ?></td>
				<td>
					Jumlah Penderita: <?php echo $perkembangan->detail["kesehatan"]["penderita"]["lainnya"]["jumlah"] ?><br>
					Dirawat di Rumah: <?php echo $perkembangan->detail["kesehatan"]["penderita"]["lainnya"]["rumah"] ?><br>
					Dirawat di Rumah Sakit: <?php echo $perkembangan->detail["kesehatan"]["penderita"]["lainnya"]["rs"] ?><br>
					Dirawat di Puskesmas<?php echo $perkembangan->detail["kesehatan"]["penderita"]["lainnya"]["puskesmas"] ?>
				</td>
			</tr>
		<?php endif ?>
			<tr>
				<td colspan="2">
					<h4>L. Perkembangan Sarana dan Prasarana Kesehatan Masyarakat</h4>
				</td>
			</tr>
			<tr>
				<td>Jumlah MCK Umum (Unit)</td>
				<td><?php echo $perkembangan->detail["kesehatan"]["sarana"][1] ?></td>
			</tr>
			<tr>
				<td>Jumlah Posyandu (Unit)</td>
				<td><?php echo $perkembangan->detail["kesehatan"]["sarana"][2] ?></td>
			</tr>
			<tr>
				<td>Jumlah kader Posyandu aktif (Orang)</td>
				<td><?php echo $perkembangan->detail["kesehatan"]["sarana"][3] ?></td>
			</tr>
			<tr>
				<td>Jumlah pembina Posyandu (Orang)</td>
				<td><?php echo $perkembangan->detail["kesehatan"]["sarana"][4] ?></td>
			</tr>
			<tr>
				<td>Jumlah Dasawisma</td>
				<td><?php echo $perkembangan->detail["kesehatan"]["sarana"][5] ?></td>
			</tr>
			<tr>
				<td>Jumlah pengurus Dasa Wisma aktif (Orang)</td>
				<td><?php echo $perkembangan->detail["kesehatan"]["sarana"][6] ?></td>
			</tr>
			<tr>
				<td>Jumlah kader bina keluarga balita aktif (Orang)</td>
				<td><?php echo $perkembangan->detail["kesehatan"]["sarana"][7] ?></td>
			</tr>
			<tr>
				<td>Jumlah petugas lapangan keluarga berencana aktif (Orang)</td>
				<td><?php echo $perkembangan->detail["kesehatan"]["sarana"][8] ?></td>
			</tr>
			<tr>
				<td>Buku rencana kegiatan Posyandu</td>
				<td><?php echo $perkembangan->detail["kesehatan"]["sarana"][9] ?></td>
			</tr>
			<tr>
				<td>Buku data pengunjung Posyandu</td>
				<td><?php echo $perkembangan->detail["kesehatan"]["sarana"][10] ?></td>
			</tr>
			<tr>
				<td>Buku kegiatan pelayanan Posyandu</td>
				<td><?php echo $perkembangan->detail["kesehatan"]["sarana"][11] ?></td>
			</tr>
			<tr>
				<td>Buku administrasi Posyandu lainnya (Jenis)</td>
				<td><?php echo $perkembangan->detail["kesehatan"]["sarana"][12] ?></td>
			</tr>
			<tr>
				<td>Jumlah kegiatan Posyandu (Jenis)</td>
				<td><?php echo $perkembangan->detail["kesehatan"]["sarana"][13] ?></td>
			</tr>
			<tr>
				<td>Jumlah kader kesehatan lainnya (Orang)</td>
				<td><?php echo $perkembangan->detail["kesehatan"]["sarana"][14] ?></td>
			</tr>
			<tr>
				<td>Jumlah kegiatan pengobatan gratis (Jenis)</td>
				<td><?php echo $perkembangan->detail["kesehatan"]["sarana"][15] ?></td>
			</tr>
			<tr>
				<td>Jumlah kegiatan pemberantasan sarang nyamuk/PSN (Jenis)</td>
				<td><?php echo $perkembangan->detail["kesehatan"]["sarana"][16] ?></td>
			</tr>
			<tr>
				<td>Jumlah kegiatan pembersihan lingkungan (Jenis)</td>
				<td><?php echo $perkembangan->detail["kesehatan"]["sarana"][17] ?></td>
			</tr>
			<tr>
				<td colspan="2">
					<h3>10. Keamanan Dan Ketertiban</h3>
					<h4>A. Konflik SARA</h4>
				</td>
			</tr>
			<tr>
				<td>Kasus konflik pada tahun ini</td>
				<td>
					Jumlah (Kasus): <?php echo $perkembangan->detail["keamanan"]["konflik"][1]["jumlah"] ?><br>
					Korban Luka (Orang): <?php echo $perkembangan->detail["keamanan"]["konflik"][1]["luka"] ?><br>
					Korban Meninggal (Orang): <?php echo $perkembangan->detail["keamanan"]["konflik"][1]["meninggal"] ?><br>
					Kerugian Material (Rp): <?php echo $perkembangan->detail["keamanan"]["konflik"][1]["kerugian"] ?><br>
					Jumlah Rumah Rusak: <?php echo $perkembangan->detail["keamanan"]["konflik"][1]["rumah"] ?><br>
					Jumlah Sarana/Prasarana Rusak: <?php echo $perkembangan->detail["keamanan"]["konflik"][1]["sarana"] ?><br>
					Jumlah Pelaku Yang Diadili: <?php echo $perkembangan->detail["keamanan"]["konflik"][1]["pelaku"] ?>
				</td>
			</tr>
			<tr>
				<td>Kasus konflik SARA pada tahun ini</td>
				<td>
					Jumlah (Kasus): <?php echo $perkembangan->detail["keamanan"]["konflik"][2]["jumlah"] ?><br>
					Korban Luka (Orang): <?php echo $perkembangan->detail["keamanan"]["konflik"][2]["luka"] ?><br>
					Korban Meninggal (Orang): <?php echo $perkembangan->detail["keamanan"]["konflik"][2]["meninggal"] ?><br>
					Kerugian Material (Rp): <?php echo $perkembangan->detail["keamanan"]["konflik"][2]["kerugian"] ?><br>
					Jumlah Rumah Rusak: <?php echo $perkembangan->detail["keamanan"]["konflik"][2]["rumah"] ?><br>
					Jumlah Sarana/Prasarana Rusak: <?php echo $perkembangan->detail["keamanan"]["konflik"][2]["sarana"] ?><br>
					Jumlah Pelaku Yang Diadili: <?php echo $perkembangan->detail["keamanan"]["konflik"][2]["pelaku"] ?>
				</td>
			</tr>
			<tr>
				<td>Jumlah kasus pertengkaran dan atau perkelahian antar tetangga</td>
				<td>
					Jumlah (Kasus): <?php echo $perkembangan->detail["keamanan"]["konflik"][3]["jumlah"] ?><br>
					Korban Luka (Orang): <?php echo $perkembangan->detail["keamanan"]["konflik"][3]["luka"] ?><br>
					Korban Meninggal (Orang): <?php echo $perkembangan->detail["keamanan"]["konflik"][3]["meninggal"] ?><br>
					Kerugian Material (Rp): <?php echo $perkembangan->detail["keamanan"]["konflik"][3]["kerugian"] ?><br>
					Jumlah Rumah Rusak: <?php echo $perkembangan->detail["keamanan"]["konflik"][3]["rumah"] ?><br>
					Jumlah Sarana/Prasarana Rusak: <?php echo $perkembangan->detail["keamanan"]["konflik"][3]["sarana"] ?><br>
					Jumlah Pelaku Yang Diadili: <?php echo $perkembangan->detail["keamanan"]["konflik"][3]["pelaku"] ?>
				</td>
			</tr>
			<tr>
				<td>Jumlah kasus pertengkaran dan atau perkelahian antar RT/RW</td>
				<td>
					Jumlah (Kasus): <?php echo $perkembangan->detail["keamanan"]["konflik"][4]["jumlah"] ?><br>
					Korban Luka (Orang): <?php echo $perkembangan->detail["keamanan"]["konflik"][4]["luka"] ?><br>
					Korban Meninggal (Orang): <?php echo $perkembangan->detail["keamanan"]["konflik"][4]["meninggal"] ?><br>
					Kerugian Material (Rp): <?php echo $perkembangan->detail["keamanan"]["konflik"][4]["kerugian"] ?><br>
					Jumlah Rumah Rusak: <?php echo $perkembangan->detail["keamanan"]["konflik"][4]["rumah"] ?><br>
					Jumlah Sarana/Prasarana Rusak: <?php echo $perkembangan->detail["keamanan"]["konflik"][4]["sarana"] ?><br>
					Jumlah Pelaku Yang Diadili: <?php echo $perkembangan->detail["keamanan"]["konflik"][4]["pelaku"] ?>
				</td>
			</tr>
			<tr>
				<td>Jumlah konflik antar masyarakat pendatang dengan penduduk asli</td>
				<td>
					Jumlah (Kasus): <?php echo $perkembangan->detail["keamanan"]["konflik"][5]["jumlah"] ?><br>
					Korban Luka (Orang): <?php echo $perkembangan->detail["keamanan"]["konflik"][5]["luka"] ?><br>
					Korban Meninggal (Orang): <?php echo $perkembangan->detail["keamanan"]["konflik"][5]["meninggal"] ?><br>
					Kerugian Material (Rp): <?php echo $perkembangan->detail["keamanan"]["konflik"][5]["kerugian"] ?><br>
					Jumlah Rumah Rusak: <?php echo $perkembangan->detail["keamanan"]["konflik"][5]["rumah"] ?><br>
					Jumlah Sarana/Prasarana Rusak: <?php echo $perkembangan->detail["keamanan"]["konflik"][5]["sarana"] ?><br>
					Jumlah Pelaku Yang Diadili: <?php echo $perkembangan->detail["keamanan"]["konflik"][5]["pelaku"] ?>
				</td>
			</tr>
			<tr>
				<td>Jumlah kasus antar kelompok masyarakat dalam desa/kelurahan dengan kelompok masyarakat dari desa/kelurahan lain</td>
				<td>
					Jumlah (Kasus): <?php echo $perkembangan->detail["keamanan"]["konflik"][6]["jumlah"] ?><br>
					Korban Luka (Orang): <?php echo $perkembangan->detail["keamanan"]["konflik"][6]["luka"] ?><br>
					Korban Meninggal (Orang): <?php echo $perkembangan->detail["keamanan"]["konflik"][6]["meninggal"] ?><br>
					Kerugian Material (Rp): <?php echo $perkembangan->detail["keamanan"]["konflik"][6]["kerugian"] ?><br>
					Jumlah Rumah Rusak: <?php echo $perkembangan->detail["keamanan"]["konflik"][6]["rumah"] ?><br>
					Jumlah Sarana/Prasarana Rusak: <?php echo $perkembangan->detail["keamanan"]["konflik"][6]["sarana"] ?><br>
					Jumlah Pelaku Yang Diadili: <?php echo $perkembangan->detail["keamanan"]["konflik"][6]["pelaku"] ?>
				</td>
			</tr>
			<tr>
				<td>Jumlah konflik antara masyarakat dengan pemerintah</td>
				<td>
					Jumlah (Kasus): <?php echo $perkembangan->detail["keamanan"]["konflik"][7]["jumlah"] ?><br>
					Korban Luka (Orang): <?php echo $perkembangan->detail["keamanan"]["konflik"][7]["luka"] ?><br>
					Korban Meninggal (Orang): <?php echo $perkembangan->detail["keamanan"]["konflik"][7]["meninggal"] ?><br>
					Kerugian Material (Rp): <?php echo $perkembangan->detail["keamanan"]["konflik"][7]["kerugian"] ?><br>
					Jumlah Rumah Rusak: <?php echo $perkembangan->detail["keamanan"]["konflik"][7]["rumah"] ?><br>
					Jumlah Sarana/Prasarana Rusak: <?php echo $perkembangan->detail["keamanan"]["konflik"][7]["sarana"] ?><br>
					Jumlah Pelaku Yang Diadili: <?php echo $perkembangan->detail["keamanan"]["konflik"][7]["pelaku"] ?>
				</td>
			</tr>
			<tr>
				<td>Jumlah kerugian material akibat konflik antara masyarakat dan pemerintah (Rp)</td>
				<td>
					Jumlah (Kasus): <?php echo $perkembangan->detail["keamanan"]["konflik"][8]["jumlah"] ?><br>
					Korban Luka (Orang): <?php echo $perkembangan->detail["keamanan"]["konflik"][8]["luka"] ?><br>
					Korban Meninggal (Orang): <?php echo $perkembangan->detail["keamanan"]["konflik"][8]["meninggal"] ?><br>
					Kerugian Material (Rp): <?php echo $perkembangan->detail["keamanan"]["konflik"][8]["kerugian"] ?><br>
					Jumlah Rumah Rusak: <?php echo $perkembangan->detail["keamanan"]["konflik"][8]["rumah"] ?><br>
					Jumlah Sarana/Prasarana Rusak: <?php echo $perkembangan->detail["keamanan"]["konflik"][8]["sarana"] ?><br>
					Jumlah Pelaku Yang Diadili: <?php echo $perkembangan->detail["keamanan"]["konflik"][8]["pelaku"] ?>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<h4>B. Perkelahian</h4>
				</td>
			</tr>
			<tr>
				<td>Kasus perkelahian yang terjadi pada tahun ini</td>
				<td><?php echo $perkembangan->detail["keamanan"]["perkelahian"][1] ?></td>
			</tr>
			<tr>
				<td>Kasus perkelahian yang menimbulkan korban jiwa</td>
				<td><?php echo $perkembangan->detail["keamanan"]["perkelahian"][2] ?></td>
			</tr>
			<tr>
				<td>Kasus perkelahian yang menimbulkan luka parah</td>
				<td><?php echo $perkembangan->detail["keamanan"]["perkelahian"][3] ?></td>
			</tr>
			<tr>
				<td>Kasus perkelahian yang menimbulkan kerugian material</td>
				<td><?php echo $perkembangan->detail["keamanan"]["perkelahian"][4] ?></td>
			</tr>
			<tr>
				<td>Jumlah pelaku konflik yang diadili atau diproses secara hukum (Orang)</td>
				<td><?php echo $perkembangan->detail["keamanan"]["perkelahian"][5] ?></td>
			</tr>
			<tr>
				<td colspan="2">
					<h4>C. Pencurian</h4>
				</td>
			</tr>
			<tr>
				<td>Kasus pencurian dan perampokan yang terjadi tahun ini</td>
				<td><?php echo $perkembangan->detail["keamanan"]["pencurian"][1] ?></td>
			</tr>
			<tr>
				<td>Kasus pencurian/perampokan yang korbannya penduduk Desa/Kelurahan setempat</td>
				<td><?php echo $perkembangan->detail["keamanan"]["pencurian"][2] ?></td>
			</tr>
			<tr>
				<td>Kasus pencurian/perampokan yang pelakunya penduduk Desa/Kelurahan setempat</td>
				<td><?php echo $perkembangan->detail["keamanan"]["pencurian"][3] ?></td>
			</tr>
			<tr>
				<td>Jumlah pencurian dengan kekerasan senjata api</td>
				<td><?php echo $perkembangan->detail["keamanan"]["pencurian"][4] ?></td>
			</tr>
			<tr>
				<td>Jumlah pelaku yang diadili atau diproses secara hukum (Orang)</td>
				<td><?php echo $perkembangan->detail["keamanan"]["pencurian"][5] ?></td>
			</tr>
			<tr>
				<td colspan="2">
					<h4>D. Penjarahan dan Penyerobotan Tanah</h4>
				</td>
			</tr>
			<tr>
				<td>Jumlah kasus penjarahan dan penyerobotan tanah yang korban dan pelakunya penduduk setempat</td>
				<td><?php echo $perkembangan->detail["keamanan"]["penjarahan"][1] ?></td>
			</tr>
			<tr>
				<td>Jumlah kasus penjarahan dan penyerobotan tanah yang korban penduduk setempat tetapi pelakunya bukan penduduk setempat</td>
				<td><?php echo $perkembangan->detail["keamanan"]["penjarahan"][2] ?></td>
			</tr>
			<tr>
				<td>Jumlah kasus penjarahan dan penyerobotan tanah yang korban bukan penduduk setempat tetapi pelakunya penduduk setempat</td>
				<td><?php echo $perkembangan->detail["keamanan"]["penjarahan"][3] ?></td>
			</tr>
			<tr>
				<td>Jumlah pelaku yang diadili atau diproses secara hukum (Orang)</td>
				<td><?php echo $perkembangan->detail["keamanan"]["penjarahan"][4] ?></td>
			</tr>
			<tr>
				<td colspan="2">
					<h4>E. Perjudian, Penipuan dan Penggelapan</h4>
				</td>
			</tr>
			<tr>
				<td>Jumlah penduduk yang memiliki kebiasaan berjudi</td>
				<td><?php echo $perkembangan->detail["keamanan"]["perjudian"][1] ?></td>
			</tr>
			<tr>
				<td>Jenis perjudian yang ada di Desa/Kelurahan ini</td>
				<td><?php echo $perkembangan->detail["keamanan"]["perjudian"][2] ?></td>
			</tr>
			<tr>
				<td>Jumlah kasus penipuan dan atau penggelapan</td>
				<td><?php echo $perkembangan->detail["keamanan"]["perjudian"][3] ?></td>
			</tr>
			<tr>
				<td>Jumlah kasus sengketa warisan, jual beli dan utang piutang</td>
				<td><?php echo $perkembangan->detail["keamanan"]["perjudian"][4] ?></td>
			</tr>
			<tr>
				<td colspan="2">
					<h4>F. Pemakaian Miras dan Narkoba</h4>
				</td>
			</tr>
			<tr>
				<td>Jumlah warung/toko yang menyediakan Miras</td>
				<td><?php echo $perkembangan->detail["keamanan"]["miras"][1] ?></td>
			</tr>
			<tr>
				<td>Jumlah penduduk yang mengkonsumsi Miras</td>
				<td><?php echo $perkembangan->detail["keamanan"]["miras"][2] ?></td>
			</tr>
			<tr>
				<td>Jumlah kasus mabuk akibat Miras</td>
				<td><?php echo $perkembangan->detail["keamanan"]["miras"][3] ?></td>
			</tr>
			<tr>
				<td>Jumlah pengedar Narkoba</td>
				<td><?php echo $perkembangan->detail["keamanan"]["miras"][4] ?></td>
			</tr>
			<tr>
				<td>Jumlah penduduk yang mengkonsumsi Narkoba</td>
				<td><?php echo $perkembangan->detail["keamanan"]["miras"][5] ?></td>
			</tr>
			<tr>
				<td>Jumlah kasus mabuk/teler akibat Narkoba</td>
				<td><?php echo $perkembangan->detail["keamanan"]["miras"][6] ?></td>
			</tr>
			<tr>
				<td>Jumlah kasus kematian akibat Narkoba</td>
				<td><?php echo $perkembangan->detail["keamanan"]["miras"][7] ?></td>
			</tr>
			<tr>
				<td>Jumlah pelaku Miras yang diadili atau diproses secara hukum</td>
				<td><?php echo $perkembangan->detail["keamanan"]["miras"][8] ?></td>
			</tr>
			<tr>
				<td>Jumlah pelaku Narkoba yang diadili atau diproses secara hukum</td>
				<td><?php echo $perkembangan->detail["keamanan"]["miras"][9] ?></td>
			</tr>
			<tr>
				<td colspan="2">
					<h4>G. Prostitusi</h4>
				</td>
			</tr>
			<tr>
				<td>Jumlah penduduk pekerja pramu nikmat</td>
				<td><?php echo $perkembangan->detail["keamanan"]["prostitusi"][1] ?></td>
			</tr>
			<tr>
				<td>Lokalisasi prostitusi</td>
				<td><?php echo $perkembangan->detail["keamanan"]["prostitusi"][2] ?></td>
			</tr>
			<tr>
				<td>Jumlah tempat yang menyediakan wanita pramunikmat secara terselubung (warung remang-remang, panti pijat, hotel, dll)</td>
				<td><?php echo $perkembangan->detail["keamanan"]["prostitusi"][3] ?></td>
			</tr>
			<tr>
				<td>Jumlah kasus/konflik akibat maraknya praktek prostitusi</td>
				<td><?php echo $perkembangan->detail["keamanan"]["prostitusi"][4] ?></td>
			</tr>
			<tr>
				<td>Jumlah pembinaan pelaku prostitusi</td>
				<td><?php echo $perkembangan->detail["keamanan"]["prostitusi"][5] ?></td>
			</tr>
			<tr>
				<td>Jumlah penertiban penyediaan tempat prostitusi</td>
				<td><?php echo $perkembangan->detail["keamanan"]["prostitusi"][6] ?></td>
			</tr>
			<tr>
				<td colspan="2">
					<h4>H. Pembunuhan</h4>
				</td>
			</tr>
			<tr>
				<td>Jumlah kasus pembunuhan pada tahun ini</td>
				<td><?php echo $perkembangan->detail["keamanan"]["pembunuhan"][1] ?></td>
			</tr>
			<tr>
				<td>Jumlah kasus pembunuhan dengan korban penduduk Desa/Kelurahan setempat</td>
				<td><?php echo $perkembangan->detail["keamanan"]["pembunuhan"][2] ?></td>
			</tr>
			<tr>
				<td>Jumlah kasus pembunuhan dengan pelaku penduduk setempat</td>
				<td><?php echo $perkembangan->detail["keamanan"]["pembunuhan"][3] ?></td>
			</tr>
			<tr>
				<td>Jumlah kasus bunuh diri</td>
				<td><?php echo $perkembangan->detail["keamanan"]["pembunuhan"][4] ?></td>
			</tr>
			<tr>
				<td>Jumlah Kasus Yang Diproses secara hukum</td>
				<td><?php echo $perkembangan->detail["keamanan"]["pembunuhan"][5] ?></td>
			</tr>
			<tr>
				<td colspan="2">
					<h4>I. Penculikan</h4>
				</td>
			</tr>
			<tr>
				<td>Jumlah kasus penculikan</td>
				<td><?php echo $perkembangan->detail["keamanan"]["penculikan"][1] ?></td>
			</tr>
			<tr>
				<td>Jumlah kasus penculikan dengan korban penduduk Desa/Kelurahan setempat</td>
				<td><?php echo $perkembangan->detail["keamanan"]["penculikan"][2] ?></td>
			</tr>
			<tr>
				<td>Jumlah kasus penculikan dengan pelaku penduduk setempat</td>
				<td><?php echo $perkembangan->detail["keamanan"]["penculikan"][3] ?></td>
			</tr>
			<tr>
				<td>Jumlah kasus penculikan yang diselesaikan secara hukum</td>
				<td><?php echo $perkembangan->detail["keamanan"]["penculikan"][4] ?></td>
			</tr>
			<tr>
				<td colspan="2">
					<h4>J. Kejahatan seksual</h4>
				</td>
			</tr>
			<tr>
				<td>Jumlah kasus perkosaan pada tahun ini</td>
				<td><?php echo $perkembangan->detail["keamanan"]["seksual"][1] ?></td>
			</tr>
			<tr>
				<td>Jumlah kasus perkosaan anak pada tahun ini</td>
				<td><?php echo $perkembangan->detail["keamanan"]["seksual"][2] ?></td>
			</tr>
			<tr>
				<td>Jumlah kasus kehamilan di luar nikah menurut hukum negara</td>
				<td><?php echo $perkembangan->detail["keamanan"]["seksual"][3] ?></td>
			</tr>
			<tr>
				<td>Jumlah kasus kehamilan di luar nikah menurut hukum adat</td>
				<td><?php echo $perkembangan->detail["keamanan"]["seksual"][4] ?></td>
			</tr>
			<tr>
				<td>Jumlah tempat penampungan/persewaan kamar bagi pekerja seks</td>
				<td><?php echo $perkembangan->detail["keamanan"]["seksual"][5] ?></td>
			</tr>
			<tr>
				<td colspan="2">
					<h4>K. Masalah Kesejahteraan Sosial</h4>
				</td>
			</tr>
			<tr>
				<td>Jumlah gelandangan</td>
				<td><?php echo $perkembangan->detail["keamanan"]["kesejahteraan"][1] ?></td>
			</tr>
			<tr>
				<td>Jumlah pengemis jalanan</td>
				<td><?php echo $perkembangan->detail["keamanan"]["kesejahteraan"][2] ?></td>
			</tr>
			<tr>
				<td>Jumlah anak jalanan dan terlantar</td>
				<td><?php echo $perkembangan->detail["keamanan"]["kesejahteraan"][3] ?></td>
			</tr>
			<tr>
				<td>Jumlah manusia lanjut usia terlantar</td>
				<td><?php echo $perkembangan->detail["keamanan"]["kesejahteraan"][4] ?></td>
			</tr>
			<tr>
				<td>Jumlah orang gila/stress/cacat mental</td>
				<td><?php echo $perkembangan->detail["keamanan"]["kesejahteraan"][5] ?></td>
			</tr>
			<tr>
				<td>Jumlah orang cacat fisik</td>
				<td><?php echo $perkembangan->detail["keamanan"]["kesejahteraan"][6] ?></td>
			</tr>
			<tr>
				<td>Jumlah orang kelainan kulit</td>
				<td><?php echo $perkembangan->detail["keamanan"]["kesejahteraan"][7] ?></td>
			</tr>
			<tr>
				<td>Jumlah orang yang tidur di kolong jembatan/emperan</td>
				<td><?php echo $perkembangan->detail["keamanan"]["kesejahteraan"][8] ?></td>
			</tr>
			<tr>
				<td>Jumlah rumah dan kawasan kumuh (Unit)</td>
				<td><?php echo $perkembangan->detail["keamanan"]["kesejahteraan"][9] ?></td>
			</tr>
			<tr>
				<td>Jumlah panti jompo (Unit)</td>
				<td><?php echo $perkembangan->detail["keamanan"]["kesejahteraan"][10] ?></td>
			</tr>
			<tr>
				<td>Jumlah panti asuhan anak (Unit)</td>
				<td><?php echo $perkembangan->detail["keamanan"]["kesejahteraan"][11] ?></td>
			</tr>
			<tr>
				<td>Jumlah rumah singgah anak jalanan (Unit)</td>
				<td><?php echo $perkembangan->detail["keamanan"]["kesejahteraan"][12] ?></td>
			</tr>
			<tr>
				<td>Jumlah penghuni jalur hijau dan taman kota</td>
				<td><?php echo $perkembangan->detail["keamanan"]["kesejahteraan"][13] ?></td>
			</tr>
			<tr>
				<td>Jumlah penghuni bantaran sungai</td>
				<td><?php echo $perkembangan->detail["keamanan"]["kesejahteraan"][14] ?></td>
			</tr>
			<tr>
				<td>Jumlah penghuni pinggiran rel kereta api</td>
				<td><?php echo $perkembangan->detail["keamanan"]["kesejahteraan"][15] ?></td>
			</tr>
			<tr>
				<td>Jumlah penghuni liar di lahan dan fasilitas umum lainnya</td>
				<td><?php echo $perkembangan->detail["keamanan"]["kesejahteraan"][16] ?></td>
			</tr>
			<tr>
				<td>Jumlah anggota kelompok masyarakat/suku/keluarga terasing, terisolir, terlantar dan primitif</td>
				<td><?php echo $perkembangan->detail["keamanan"]["kesejahteraan"][17] ?></td>
			</tr>
			<tr>
				<td>Jumlah anak yatim usia 0–18 tahun</td>
				<td><?php echo $perkembangan->detail["keamanan"]["kesejahteraan"][18] ?></td>
			</tr>
			<tr>
				<td>Jumlah anak piatu 0–18 tahun</td>
				<td><?php echo $perkembangan->detail["keamanan"]["kesejahteraan"][19] ?></td>
			</tr>
			<tr>
				<td>Jumlah anak yatim piatu 0–18 tahun</td>
				<td><?php echo $perkembangan->detail["keamanan"]["kesejahteraan"][20] ?></td>
			</tr>
			<tr>
				<td>Jumlah janda</td>
				<td><?php echo $perkembangan->detail["keamanan"]["kesejahteraan"][21] ?></td>
			</tr>
			<tr>
				<td>Jumlah duda</td>
				<td><?php echo $perkembangan->detail["keamanan"]["kesejahteraan"][22] ?></td>
			</tr>
			<tr>
				<td>Jumlah anak, remaja, preman dan pengangguran</td>
				<td><?php echo $perkembangan->detail["keamanan"]["kesejahteraan"][23] ?></td>
			</tr>
			<tr>
				<td>Jumlah anak usia 7-12 tahun yang tidak sekolah di SD/sederajat</td>
				<td><?php echo $perkembangan->detail["keamanan"]["kesejahteraan"][24] ?></td>
			</tr>
			<tr>
				<td>Jumlah anak usia 13-15 tahun yang tidak sekolah di SLTP/sederajat</td>
				<td><?php echo $perkembangan->detail["keamanan"]["kesejahteraan"][25] ?></td>
			</tr>
			<tr>
				<td>Jumlah anak usia 15-18 tahun yang tidak sekolah di SLTA/sederajat</td>
				<td><?php echo $perkembangan->detail["keamanan"]["kesejahteraan"][26] ?></td>
			</tr>
			<tr>
				<td>Jumlah anak yang bekerja membantu keluarga menghasilkan uang</td>
				<td><?php echo $perkembangan->detail["keamanan"]["kesejahteraan"][27] ?></td>
			</tr>
			<tr>
				<td>Jumlah perempuan yang menjadi kepala keluarga</td>
				<td><?php echo $perkembangan->detail["keamanan"]["kesejahteraan"][28] ?></td>
			</tr>
			<tr>
				<td>Jumlah penduduk eks NAPI</td>
				<td><?php echo $perkembangan->detail["keamanan"]["kesejahteraan"][29] ?></td>
			</tr>
			<tr>
				<td>Jumlah penduduk tinggal di daerah rawan bencana banjir</td>
				<td><?php echo $perkembangan->detail["keamanan"]["kesejahteraan"][30] ?></td>
			</tr>
			<tr>
				<td>Jumlah penduduk tinggal di daerah rawan bencana . gunung berapi</td>
				<td><?php echo $perkembangan->detail["keamanan"]["kesejahteraan"][31] ?></td>
			</tr>
			<tr>
				<td>Jumlah penduduk tinggal di daerah rawan bencana Tsunami</td>
				<td><?php echo $perkembangan->detail["keamanan"]["kesejahteraan"][32] ?></td>
			</tr>
			<tr>
				<td>Jumlah penduduk tinggal di daerah rawan bencana gempa bumi</td>
				<td><?php echo $perkembangan->detail["keamanan"]["kesejahteraan"][33] ?></td>
			</tr>
			<tr>
				<td>Jumlah penduduk tinggal di daerah rawan bencana kebakaran rumah</td>
				<td><?php echo $perkembangan->detail["keamanan"]["kesejahteraan"][34] ?></td>
			</tr>
			<tr>
				<td>Jumlah penduduk tinggal di daerah rawan bencana kekekeringan</td>
				<td><?php echo $perkembangan->detail["keamanan"]["kesejahteraan"][35] ?></td>
			</tr>
			<tr>
				<td>Jumlah penduduk tinggal di daerah rawan bencana tanah longsor</td>
				<td><?php echo $perkembangan->detail["keamanan"]["kesejahteraan"][36] ?></td>
			</tr>
			<tr>
				<td>Jumlah penduduk tinggal di daerah rawan bencana kebakaran hutan</td>
				<td><?php echo $perkembangan->detail["keamanan"]["kesejahteraan"][37] ?></td>
			</tr>
			<tr>
				<td>Jumlah penduduk rawan bencana kelaparan</td>
				<td><?php echo $perkembangan->detail["keamanan"]["kesejahteraan"][38] ?></td>
			</tr>
			<tr>
				<td>Jumlah penduduk tinggal di daerah rawan air bersih</td>
				<td><?php echo $perkembangan->detail["keamanan"]["kesejahteraan"][39] ?></td>
			</tr>
			<tr>
				<td>Jumlah penduduk tinggal di daerah lahan kritis dan tandus</td>
				<td><?php echo $perkembangan->detail["keamanan"]["kesejahteraan"][40] ?></td>
			</tr>
			<tr>
				<td>Jumlah penduduk tinggal di kawasan padat penduduk dan kumuh</td>
				<td><?php echo $perkembangan->detail["keamanan"]["kesejahteraan"][41] ?></td>
			</tr>
			<tr>
				<td>Jumlah warga pendatang yang tidak memiliki keterangan penduduk</td>
				<td><?php echo $perkembangan->detail["keamanan"]["kesejahteraan"][42] ?></td>
			</tr>
			<tr>
				<td>Jumlah warga pendatang dan atau pekerja musiman</td>
				<td><?php echo $perkembangan->detail["keamanan"]["kesejahteraan"][43] ?></td>
			</tr>
			<tr>
				<td colspan="2">
					<h4>L. Kekerasan Dalam Rumah Tangga</h4>
				</td>
			</tr>
			<tr>
				<td>Jumlah kasus kekerasan suami terhadap istri</td>
				<td><?php echo $perkembangan->detail["keamanan"]["kdrt"][1] ?></td>
			</tr>
			<tr>
				<td>Jumlah kasus kekerasan istri terhadap suami</td>
				<td><?php echo $perkembangan->detail["keamanan"]["kdrt"][2] ?></td>
			</tr>
			<tr>
				<td>Jumlah kasus kekerasan orang tua terhadap anak</td>
				<td><?php echo $perkembangan->detail["keamanan"]["kdrt"][3] ?></td>
			</tr>
			<tr>
				<td>Jumlah kasus kekerasan anak terhadap orang tua</td>
				<td><?php echo $perkembangan->detail["keamanan"]["kdrt"][4] ?></td>
			</tr>
			<tr>
				<td>Jumlah kasus kekerasan kepala keluarga terhadap anggota keluarga lainnya</td>
				<td><?php echo $perkembangan->detail["keamanan"]["kdrt"][5] ?></td>
			</tr>
			<tr>
				<td colspan="2">
					<h4>M. Teror dan Intimidasi</h4>
				</td>
			</tr>
			<tr>
				<td>Jumlah kasus intimidasi dan atau teror anggota masyarakat dari pihak dalam desa dan kelurahan</td>
				<td><?php echo $perkembangan->detail["keamanan"]["teror"][1] ?></td>
			</tr>
			<tr>
				<td>Jumlah kasus intimidasi dan atau teror anggota masyarakat dari pihak luar desa atau kelurahan</td>
				<td><?php echo $perkembangan->detail["keamanan"]["teror"][2] ?></td>
			</tr>
			<tr>
				<td>Jumlah kasus selebaran gelap dan atau isu yang bersifat teror dan ancaman untuk menimbulkan ketakutan penduduk</td>
				<td><?php echo $perkembangan->detail["keamanan"]["teror"][3] ?></td>
			</tr>
			<tr>
				<td>Jumlah kasus terorisme yang terjadi di desa dan kelurahan tahun ini</td>
				<td><?php echo $perkembangan->detail["keamanan"]["teror"][4] ?></td>
			</tr>
			<tr>
				<td>Jumlah kasus hasutan dan pemaksaan kehendak kelompok tertentu kepada masyarakat</td>
				<td><?php echo $perkembangan->detail["keamanan"]["teror"][5] ?></td>
			</tr>
			<tr>
				<td>Jumlah penyelesaian kasus teror dan intimidasi serta hasutan di masyarakat baik secara adat maupun hukum formal</td>
				<td><?php echo $perkembangan->detail["keamanan"]["teror"][6] ?></td>
			</tr>
			<tr>
				<td colspan="2">
					<h4>N. Pelembagaan Sistem Keamanan Lingkungan Semesta</h4>
				</td>
			</tr>
			<tr>
				<td>Organisasi Siskamling</td>
				<td><?php echo $perkembangan->detail["keamanan"]["skls"][1] ?></td>
			</tr>
			<tr>
				<td>Organisasi Pertahanan Sipil dan Perlindungan Masyarakat</td>
				<td><?php echo $perkembangan->detail["keamanan"]["skls"][2] ?></td>
			</tr>
			<tr>
				<td>Jumlah RT atau sebutan lainnya yang ada Siskamlimg/Pos Ronda</td>
				<td><?php echo $perkembangan->detail["keamanan"]["skls"][3] ?></td>
			</tr>
			<tr>
				<td>Jumlah anggota Hansip dan  Linmas</td>
				<td><?php echo $perkembangan->detail["keamanan"]["skls"][4] ?></td>
			</tr>
			<tr>
				<td>Jadwal kegiatan Siskamling dan Pos Ronda</td>
				<td><?php echo $perkembangan->detail["keamanan"]["skls"][5] ?></td>
			</tr>
			<tr>
				<td>Buku anggota Hansip dan Linmas</td>
				<td><?php echo $perkembangan->detail["keamanan"]["skls"][6] ?></td>
			</tr>
			<tr>
				<td>Jumlah kelompok Satuan Pengamanan (SATPAM) swasta</td>
				<td><?php echo $perkembangan->detail["keamanan"]["skls"][7] ?></td>
			</tr>
			<tr>
				<td>Jumlah pembinaan Siskamling oleh Pengurus dan Kades/Lurah</td>
				<td><?php echo $perkembangan->detail["keamanan"]["skls"][8] ?></td>
			</tr>
			<tr>
				<td>Jumlah Pos Jaga Induk Desa/Kelurahan</td>
				<td><?php echo $perkembangan->detail["keamanan"]["skls"][9] ?></td>
			</tr>
			<tr>
				<td colspan="2">
					<h3>11. Kedaulatan Politik Masyarakat</h3>
					<h4>A. Kesadaran berpemerintahan, berbangsa dan bernegara</h4>
				</td>
			</tr>
			<tr>
				<td>Jenis kegiatan pemantapan nilai Ideologi Pancasila sebagai Dasar Negara</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["bernegara"][1] ?></td>
			</tr>
			<tr>
				<td>Jumlah kegiatan pemantapan nilai Ideologi Pancasila sebagai Dasar Negara</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["bernegara"][2] ?></td>
			</tr>
			<tr>
				<td>Jenis-jenis kegiatan pemantapan nilai Bhinneka Tunggal Ika</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["bernegara"][3] ?></td>
			</tr>
			<tr>
				<td>Jumlah kegiatan pemantapan nilai Bhinneka Tunggal Ika</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["bernegara"][4] ?></td>
			</tr>
			<tr>
				<td>Jenis kegiatan pemantapan kesatuan bangsa lainnya</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["bernegara"][5] ?></td>
			</tr>
			<tr>
				<td>Jumlah kegiatan pemantapan kesatuan bangsa lainnya</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["bernegara"][6] ?></td>
			</tr>
			<tr>
				<td>Jumlah kasus warga desa/kelurahan yang minta suaka/lari ke luar negeri</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["bernegara"][7] ?></td>
			</tr>
			<tr>
				<td>Jumlah warga yang melintasi perbatasan ke negara tetangga secara resmi</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["bernegara"][8] ?></td>
			</tr>
			<tr>
				<td>Jumlah  warga  yang  melintasi  perbatasan  negara  tetangga secara tidak resmi</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["bernegara"][9] ?></td>
			</tr>
			<tr>
				<td>Jumlah kasus pertempuran atau perlawanan antar kelompok pengacau keamanan di perbatasan negara dengan warga/aparat dari desa/kelurahan</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["bernegara"][10] ?></td>
			</tr>
			<tr>
				<td>Jumlah serangan terhadap fasilitas umum dan milik masyarakat oleh kelompok pengacau di desa/kelurahan perbatasan negara tetangga</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["bernegara"][11] ?></td>
			</tr>
			<tr>
				<td>Jumlah kasus  yang  diklasifikasikan merongrong keutuhan NKRI  dan  Kesatuan  Bangsa  Indonesia  di  desa/kelurahan tahun ini</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["bernegara"][12] ?></td>
			</tr>
			<tr>
				<td>Jumlah  korban  manusia  baik  luka  maupun  tewas  serta korban materi lainnya akibat serangan kelompok pengacau keamanan</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["bernegara"][13] ?></td>
			</tr>
			<tr>
				<td>Jumlah masalah ketenagakerjaan di perbatasan antar negara yang terjadi tahun ini</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["bernegara"][14] ?></td>
			</tr>
			<tr>
				<td>Jumlah kasus kejahatan pencurian, penjarahan, perampokan dan  intimidasi  serta  teror  yang  terjadi  di  desa/kelurahan perbatasan antar negara</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["bernegara"][15] ?></td>
			</tr>
			<tr>
				<td>Jumlah sengketa perbatasan antar negara yang  terjadi desa/kelurahan ini</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["bernegara"][16] ?></td>
			</tr>
			<tr>
				<td>Jumlah kasus sengketa perbatasan yang terjadi baik antar desa/kelurahan dalam kecamatan maupun antar kecamatan, antar kabupaten/kota dan desa/kelurahan antar provinsi.</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["bernegara"][17] ?></td>
			</tr>
			<tr>
				<td>Jumlah kasus yang terkait dengan perbatasan antar negara yang dilaporkan Kepala Desa/Lurah ke pemerintah tingkat atasnya</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["bernegara"][18] ?></td>
			</tr>
			<tr>
				<td>Jumlah kasus yang mengarah kepada tindakan disintegrasi bangsa dan pengingkaran NKRI, Pancasila, UUD 1945 dan Bhinneka Tunggal Ika yang difasilitasi penyelesaiannya oleh Kepala Desa/Lurah</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["bernegara"][19] ?></td>
			</tr>
			<tr>
				<td>Jumlah kasus penangkapan nelayan asing di wilayah perairan desa/kelurahan</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["bernegara"][20] ?></td>
			</tr>
			<tr>
				<td>Jumlah kasus penangkapan nelayan/petani/peternak/ pekebun/perambah hutan asal desa/kelurahan di perairan dan daratan wilayah negara lain</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["bernegara"][21] ?></td>
			</tr>
			<tr>
				<td colspan="2">
					<h4>B. Kesadaran membayar Pajak dan Retribusi</h4>
				</td>
			</tr>
			<tr>
				<td>Jenis pajak yang dipungut sebagai kewenangan dan atau tugas desa/kelurahan</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["pajak"][1] ?></td>
			</tr>
			<tr>
				<td>Jumlah Wajib Pajak</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["pajak"][2] ?></td>
			</tr>
			<tr>
				<td>Target PBB</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["pajak"][3] ?></td>
			</tr>
			<tr>
				<td>Realisasi PBB</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["pajak"][4] ?></td>
			</tr>
			<tr>
				<td>Jumlah Tindakan terhadap penunggak PBB</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["pajak"][5] ?></td>
			</tr>
			<tr>
				<td>Jenis Retribusi yang dipungut sebagai tugas dan kewenangan desa/kelurahan</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["pajak"][6] ?></td>
			</tr>
			<tr>
				<td>Jumlah wajib retribusi yang menjadi tugas/kewenangan desa/kelurahan</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["pajak"][7] ?></td>
			</tr>
			<tr>
				<td>Target retribusi yang menjadi tugas/kewenangan desa/kelurahan</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["pajak"][8] ?></td>
			</tr>
			<tr>
				<td>Realisasi retribusi yang menjadi tugas/kewenangan desa/kelurahan</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["pajak"][9] ?></td>
			</tr>
			<tr>
				<td>Jenis pungutan resmi lainnya di Desa/Kelurahan</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["pajak"][10] ?></td>
			</tr>
			<tr>
				<td>Target pungutan resmi tingkat desa/kelurahan</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["pajak"][11] ?></td>
			</tr>
			<tr>
				<td>Realisasi pungutan resmi di desa/kelurahan</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["pajak"][12] ?></td>
			</tr>
			<tr>
				<td>Jumlah kasus pungutan liar</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["pajak"][13] ?></td>
			</tr>
			<tr>
				<td>Jumlah penyelesaian kasus pungutan liar</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["pajak"][14] ?></td>
			</tr>
		<?php if(!empty($perkembangan->detail["kedaulatan"]["pajak"]["lainnya"]["keterangan"])): ?>
			<tr>
				<td><?php echo $perkembangan->detail["kedaulatan"]["pajak"]["lainnya"]["keterangan"] ?></td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["pajak"]["lainnya"]["jumlah"] ?></td>
			</tr>
		<?php endif ?>
			<tr>
				<td colspan="2">
					<h4>2. Pemilihan Kepala Daerah</h4>
				</td>
			</tr>
			<tr>
				<td>Jumlah penduduk yang memiliki hak pilih</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["pppu"][1] ?></td>
			</tr>
			<tr>
				<td>Jumlah penduduk yang menggunakan hak pilih pada pemilu legislatif yang lalu</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["pppu"][2] ?></td>
			</tr>
			<tr>
				<td>Jumlah perempuan dari penduduk desa/kelurahan ini yang aktif di partai politik</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["pppu"][3] ?></td>
			</tr>
			<tr>
				<td>Jumlah partai politik yang memiliki pengurus sampai di Desa/Kelurahan ini</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["pppu"][4] ?></td>
			</tr>
			<tr>
				<td>Jumlah partai politik yang mempunyai kantor di wilayah desa/kelurahan ini</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["pppu"][5] ?></td>
			</tr>
			<tr>
				<td>Jumlah penduduk yang menjadi pengurus partai politik dari desa/kelurahan</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["pppu"][6] ?></td>
			</tr>
			<tr>
				<td>Jumlah penduduk yang dipilih dalam Pemilu Legislatif yang lalu</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["pppu"][7] ?></td>
			</tr>
			<tr>
				<td>Jumlah pemilih yang menggunakan hak pilih dalam pemilihan presiden/wakil</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["pppu"][8] ?></td>
			</tr>
			<tr>
				<td colspan="2">
					<h4>2. Pemilihan Kepala Daerah</h4>
				</td>
			</tr>
			<tr>
				<td>Jumlah penduduk yang mempunyai hak pilih</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["pkd"][1] ?></td>
			</tr>
			<tr>
				<td>Jumlah pemilih yang menggunakan hak pilih dalam pemilu Bupati/Walikota lalu</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["pkd"][2] ?></td>
			</tr>
			<tr>
				<td>Jumlah pemilih yang menggunakan hak pilih dalam pemilu Gubenur yang lalu</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["pkd"][3] ?></td>
			</tr>
			<tr>
				<td colspan="2">
					<h4>3. Penentuan Kepala Desa/Lurah dan Perangkat Desa/Kelurahan</h4>
				</td>
			</tr>
			<tr>
				<td>Penentuan Jabatan Kepala Desa</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["pkdpd"][1] ?></td>
			</tr>
			<tr>
				<td>Penentuan Sekretaris Desa</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["pkdpd"][2] ?></td>
			</tr>
			<tr>
				<td>Penentuan Perangkat Desa termasuk Kepala Dusun</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["pkdpd"][3] ?></td>
			</tr>
			<tr>
				<td>Masa jabatan Kepala Desa</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["pkdpd"][4] ?></td>
			</tr>
			<tr>
				<td>Penentuan Jabatan Lurah dan Perangkat Kelurahan termasuk Kepala Lingkungan</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["pkdpd"][5] ?></td>
			</tr>
			<tr>
				<td colspan="2">
					<h4>4. Pemilihan BPD</h4>
				</td>
			</tr>
			<tr>
				<td>Jumlah anggota BPD</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["bpd"][1] ?></td>
			</tr>
			<tr>
				<td>Penentuan anggota BPD</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["bpd"][2] ?></td>
			</tr>
			<tr>
				<td>Pimpinan BPD</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["bpd"][3] ?></td>
			</tr>
			<tr>
				<td>Pemilikan kantor/ruang kerja BPD</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["bpd"][4] ?></td>
			</tr>
			<tr>
				<td>Anggaran untuk BPD</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["bpd"][5] ?></td>
			</tr>
			<tr>
				<td>Produk keputusan BPD tahun ini</td>
				<td>
					Peraturan Desa: <?php echo $perkembangan->detail["kedaulatan"]["bpd"][6]["pd"] ?><br>
					Permintaan keterangan dari Kepala Desa: <?php echo $perkembangan->detail["kedaulatan"]["bpd"][6]["pkkd"] ?><br>
					Rancangan Peraturan Desa: <?php echo $perkembangan->detail["kedaulatan"]["bpd"][6]["rpd"] ?><br>
					Menyalurkan aspirasi masyarakat: <?php echo $perkembangan->detail["kedaulatan"]["bpd"][6]["mam"] ?><br>
					Menyatakan pendapat kepada Kepala Desa: <?php echo $perkembangan->detail["kedaulatan"]["bpd"][6]["mpkkd"] ?><br>
					Menyampaikan usul dan pendapat kepada Kepala Desa: <?php echo $perkembangan->detail["kedaulatan"]["bpd"][6]["mupkd"] ?><br>
					Mengevaluasi efektivitas pelaksanaan APB Desa: <?php echo $perkembangan->detail["kedaulatan"]["bpd"][6]["mepad"] ?>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<h4>5. Pemilihan dan Fungsi Lembaga Kemasyarakatan</h4>
				</td>
			</tr>
			<tr>
				<td>Keberadaan organisasi lembaga kemasyarakatan desa/kelurahan</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["pflk"][1] ?></td>
			</tr>
			<tr>
				<td>Dasar hukum keberadaan Lembaga Kemasyarakatan Desa/LKD</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["pflk"][2] ?></td>
			</tr>
			<tr>
				<td>Jumlah organisasi anggota lembaga kemasyarakatan desa termasuk RT, RW, PKK, LKMD/K,  LPM, Karang Taruna, Bumdes,Lembaga  Adat,  Kelompok  Tani  dan  lembaga lainnya sesuai ketentuan</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["pflk"][3] ?></td>
			</tr>
			<tr>
				<td>Dasarhukumpembentukan Lembaga Kemasyarakatan Kelurahan/LKK</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["pflk"][4] ?></td>
			</tr>
			<tr>
				<td>Jumlah organisasi anggota lembaga kemasyarakatan kelurahan</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["pflk"][5] ?></td>
			</tr>
			<tr>
				<td>Pemilihan pengurus LKD/LKK</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["pflk"][6] ?></td>
			</tr>
			<tr>
				<td>Pemilihan pengurus organisasi anggota LKD/LKK termasuk PKK, LPM/LKMD/K, Karang Taruna, RT, RW, Bumdes, lembaga adat, kelompok tani dan organisasi anggota LKD/LKK lainnya</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["pflk"][7] ?></td>
			</tr>
			<tr>
				<td>Implementasi tugas, fungsi dankewajiban LKD/LKK</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["pflk"][8] ?></td>
			</tr>
			<tr>
				<td>Jumlah kegiatan yang dilaksanakan LKD/LKK</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["pflk"][9] ?></td>
			</tr>
			<tr>
				<td>Fungsi, tugas dan kewajiban lembaga kemasyarakatan yang dijalankan organisasi anggota LKD/LKK</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["pflk"][10] ?></td>
			</tr>
			<tr>
				<td>Jumlah kegiatan lembaga kemasyarakatan yang dijalankan organisasi anggota LKD/LKK</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["pflk"][11] ?></td>
			</tr>
			<tr>
				<td>Alokasi anggaran untuk LKD/LKK</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["pflk"][12] ?></td>
			</tr>
			<tr>
				<td>Alokasi anggaran untuk organisasi anggota LKD/LKK  termasuk  PKK, LPM/LKMD/K, Karang Taruna, RT, RW, kelompok tani dan organisasi lainnya</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["pflk"][13] ?></td>
			</tr>
			<tr>
				<td>Kantor dan ruangan kerja untuk LKD/LKK</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["pflk"][14] ?></td>
			</tr>
			<tr>
				<td>Dukungan pembiayaan, personil dan ATK untuk Sekretariat LKD/LKK  dari APB-Desa dan Anggaran Kelurahan/APBD</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["pflk"][15] ?></td>
			</tr>
			<tr>
				<td>Realisasi program kerja organisasi anggota LKD/LKK</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["pflk"][16] ?></td>
			</tr>
			<tr>
				<td>Keberadaan Alat kelengkapan organisasi anggota  LKD/LKK  termasuk  Dasawisma  dan Pokja, Bidang, Seksi, Urusan, danterisi tidaknya struktur organisasi anggota LKD/LKK</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["pflk"][17] ?></td>
			</tr>
			<tr>
				<td>Kegiatan administrasi dan Ketatausahaan LKD/LKK</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["pflk"][18] ?></td>
			</tr>
			<tr>
				<td colspan="2">
					<h4>D. Peranserta Masyarakat Dalam Pembangunan</h4>
					<h4>1. Musyawarah Perencanaan Pembangunan Desa/Kelurahan/ Musrenbangdes/ kelurahan</h4>
				</td>
			</tr>
			<tr>
				<td>Jumlah musyawarah perencanaan pembangunan tingkat Desa/Kelurahan yang dilakukan pada tahun ini, termasuk di tingkat dusun dan lingkungan</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["mppd"][1] ?></td>
			</tr>
			<tr>
				<td>Jumlah kehadiran masyarakat dalam setiap kali musyawarah tingkat dusun/lingkungan dan desa/kelurahan</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["mppd"][2] ?></td>
			</tr>
			<tr>
				<td>Jumlah peserta laki-laki dalam Musrenbang di desa/kelurahan</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["mppd"][3] ?></td>
			</tr>
			<tr>
				<td>Jumlah peserta perempuan dalam Musrenbang di desa dan kelurahan</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["mppd"][4] ?></td>
			</tr>
			<tr>
				<td>Jumlah Musyawarah Antar Desa dalam perencanaan pembangunan yang dikoordinasikan Kecamatan</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["mppd"][5] ?></td>
			</tr>
			<tr>
				<td>Penggunaan Profil Desa/Kelurahan sebagai sumber data dasar yang digunakan dalam perencanaan pembangunan desa dan forum Musrenbang Partisipatif</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["mppd"][6] ?></td>
			</tr>
			<tr>
				<td>Penggunaan data BPS dan data sektoral dalam perencanaan pembangunan partisipatif dan Musrenbang di desa dan Kelurahan</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["mppd"][7] ?></td>
			</tr>
			<tr>
				<td>Pelibatan masyarakat dalam pemutakhiran data profil desa dan kelurahan sebagai bahan dalam Musrenbang partisipatif</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["mppd"][8] ?></td>
			</tr>
			<tr>
				<td>Usulan masyarakat yang disetujui menjadi Rencana Kerja Desa dan Kelurahan</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["mppd"][9] ?></td>
			</tr>
			<tr>
				<td>Usulan Pemerintah Desa dan Kelurahan yang disetujui menjadi Rencana Kerja Desa/Kelurahan dan dimuat dalam RAPB-Desa</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["mppd"][10] ?></td>
			</tr>
			<tr>
				<td>Usulan rencana kerja program dan kegiatan dari pemerintah kabupaten/kota/provinsi dan pusat yang dibahas saat Musrenbang dan disetujui untuk dilaksanakan di desa dan kelurahan oleh masyarakat dan lembaga kemasyarakatan desa/kelurahan</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["mppd"][11] ?></td>
			</tr>
			<tr>
				<td>Usulan rencana kerja pemerintah tingkat atas yang ditolak dalam Musrenbangdes/kel</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["mppd"][12] ?></td>
			</tr>
			<tr>
				<td>Pemilikan dokumen Rencana Kerja Pembangunan Desa/Kelurahan (RKPD/K)</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["mppd"][13] ?></td>
			</tr>
			<tr>
				<td>Pemilikan Rencana Pembangunan Jangka Menengah Desa/Kelurahan (RPJMD/K)</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["mppd"][14] ?></td>
			</tr>
			<tr>
				<td>Pemilikan dokumen hasil Musrenbang tingkat Desa dan Kelurahan yang diusulkan ke pemerintah tingkat atas untuk dibiayai dari APBD Kab/Kota, APBD Provinsi dan APBN maupun sumber biaya dari perusahaan swasta yang investasi di desa/kelurahan</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["mppd"][15] ?></td>
			</tr>
			<tr>
				<td>Jumlah kegiatan yang diusulkan masyarakat melalui forum Musrenbangdes/kel yang tidak direalisasikan dalam APB-Desa, APB-Daerah Kabupaten/Kota dan Provinsi</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["mppd"][16] ?></td>
			</tr>
			<tr>
				<td>Jumlah kegiatan yang diusulkan masyarakat melalui forum Musrenbangdes/kel yang pelaksanaannya tidak sesuai dengan hasil Musrenbang</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["mppd"][17] ?></td>
			</tr>
			<tr>
				<td colspan="2">
					<h4>2. Peranserta masyarakat dalam Pelaksanaan dan Pelestarian Hasil</h4>
					<h4>Pembangunan</h4>
				</td>
			</tr>
			<tr>
				<td>Jumlah masyarakat yang terlibat dalam pelaksanaan pembangunan fisik di desa dan kelurahan sesuai hasil Musrenbang</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["pmpph"][1] ?></td>
			</tr>
			<tr>
				<td>Jumlah penduduk yang dilibatkan dalam pelaksanaan proyek padat karya oleh pengelola proyek yang ditunjuk pemerintah desa/kelurahan atau kabupaten/kota</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["pmpph"][2] ?></td>
			</tr>
			<tr>
				<td>Jumlah kegiatan yang dilaksanakan oleh masyarakat dan lembaga kemasyarakatan desa/kelurahan yang sudah ada sesuai ketetapan dalam APB-Desa</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["pmpph"][3] ?></td>
			</tr>
			<tr>
				<td>Jumlah kegiatan yang dilaksanakan oleh pihak ketiga tanpa melibatkan masyarakat sesuai ketentuan dalam APB-Daerah</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["pmpph"][4] ?></td>
			</tr>
			<tr>
				<td>Jumlah kegiatan yang masuk desa/kelurahan di luar yang telah direncanakan dan disepakati masyarakat saat Musrenbang</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["pmpph"][5] ?></td>
			</tr>
			<tr>
				<td>Usulan masyarakat yang disetujui menjadi Rencana Kerja Desa dan Kelurahan</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["pmpph"][6] ?></td>
			</tr>
			<tr>
				<td>Usulan Pemerintah Desa dan Kelurahan yang disetujui menjadi Rencana Kerja Desa/Kelurahan</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["pmpph"][7] ?></td>
			</tr>
			<tr>
				<td>Usulan rencana kerja program dan kegiatan dari pemerintah kabupaten/kota/provinsi dan pusat yang dibahas saat Musrenbang  dan disetujui untuk dilaksanakan di desa dan kelurahan oleh masyarakat</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["pmpph"][8] ?></td>
			</tr>
			<tr>
				<td>Penyelenggaraan musyawarah desa/kelurahan untuk menerima, memelihara dan melestarikan hasil pembangunan yang sudah ada</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["pmpph"][9] ?></td>
			</tr>
			<tr>
				<td>Pelaksanaan kegiatan dari masyarakat untuk menyelesaikan atau menindaklanjuti kegiatan yang belum diselesaikan oleh pelaksana sebelumnya.</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["pmpph"][10] ?></td>
			</tr>
			<tr>
				<td>Jumlah kasus penyimpangan pelaksanaan kegiatan pembangunan yang dilaporkan masyarakat atau lembaga kemasyarakatan desa/kelurahan kepada Kepala Desa/Lurah</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["pmpph"][11] ?></td>
			</tr>
			<tr>
				<td>Jumlah kasus penyimpangan pelaksanaan pembangunan yang diselesaikan di tingkat desa/kelurahan</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["pmpph"][12] ?></td>
			</tr>
			<tr>
				<td>Jumlah kasus penyimpangan pelaksanaan kegiatan pembangunan desa/kelurahan yang diselesaikan secara hukum</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["pmpph"][13] ?></td>
			</tr>
			<tr>
				<td>Jenis kegiatan masyarakat untuk melestarikan hasil pembangunan yang dikoordinasikan pemerintah desa/kelurahan</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["pmpph"][14] ?></td>
			</tr>
			<tr>
				<td>Jumlah kegiatan yang didanai dari APB-Desa dan swadaya masyarakat di kelurahan</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["pmpph"][15] ?></td>
			</tr>
			<tr>
				<td>Jumlah kegiatan di desa dan kelurahan yang didanai dari APB Daerah Kabupaten/Kota</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["pmpph"][16] ?></td>
			</tr>
			<tr>
				<td>Jumlah kegiatan di desa dan kelurahan yang didanai dari APBD Provinsi</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["pmpph"][17] ?></td>
			</tr>
			<tr>
				<td>Jumlah kegiatan di desa dan kelurahan yang didanai APBN</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["pmpph"][18] ?></td>
			</tr>
			<tr>
				<td colspan="2">
					<h4>3. Semangat Kegotongroyongan Penduduk</h4>
				</td>
			</tr>
			<tr>
				<td>Jumlah kelompok arisan</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["skgrp"][1] ?></td>
			</tr>
			<tr>
				<td>Jumlah penduduk menjadi orang tua asuh</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["skgrp"][2] ?></td>
			</tr>
			<tr>
				<td>Ada tidaknya dana sehat</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["skgrp"][3] ?></td>
			</tr>
			<tr>
				<td>Ada tidaknya kegiatan gotong royong atau sambatan/sejenisnya dalam pembangunan rumah</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["skgrp"][4] ?></td>
			</tr>
			<tr>
				<td>Ada tidaknya kegiatan gotong royong atau sambatan/sejenisnya dalam pengolahan tanah</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["skgrp"][5] ?></td>
			</tr>
			<tr>
				<td>Ada tidaknya kegiatan gotong royong atau sambatan/sejenisnya dalam pembiayaan pendidikan anak sekolah/kuliah/kursus</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["skgrp"][6] ?></td>
			</tr>
			<tr>
				<td>Ada tidaknya kegiatan gotong royong atau sambatan/sejenisnya dalam pemeliharaan fasilitas umum dan fasilitas sosial/prasarana dan sarana</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["skgrp"][7] ?></td>
			</tr>
			<tr>
				<td>Ada tidaknya kegiatan gotong royong atau sambatan/sejenisnya dalam pemberian modal usaha</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["skgrp"][8] ?></td>
			</tr>
			<tr>
				<td>Ada tidaknya kegiatan gotong royong atau sambatan/sejenisnya dalam pengerjaan sawah dan kebun</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["skgrp"][9] ?></td>
			</tr>
			<tr>
				<td>Ada tidaknya kegiatan gotong royong atau sambatan/sejenisnya dalam penangkapan ikan dan usaha peternakan lainnya</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["skgrp"][10] ?></td>
			</tr>
			<tr>
				<td>Ada tidaknya kegiatan gotong royong atau sambatan/sejenisnya dalam menjaga ketertiban, ketentraman dan keamanan</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["skgrp"][11] ?></td>
			</tr>
			<tr>
				<td>Ada tidaknya kegiatan gotong royong atau sambatan/sejenisnya dalam peristiwa kematian</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["skgrp"][12] ?></td>
			</tr>
			<tr>
				<td>Ada tidaknya kegiatan gotong royong menjaga kebersihan Desa/Kelurahan</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["skgrp"][13] ?></td>
			</tr>
			<tr>
				<td>Ada tidaknya kegiatan gotong royong membangun jalan/jembatan/saluran air/irigasi</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["skgrp"][14] ?></td>
			</tr>
			<tr>
				<td>Ada tidaknya kegiatan gotong royong atau sambatan/sejenisnya dalam pemberantasan sarang nyamuk dan kesehatan lingkungan lainnya</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["skgrp"][15] ?></td>
			</tr>
			<tr>
				<td>Ada tidaknya kerjasama antar Desa/Kelurahan</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["skgrp"][16] ?></td>
			</tr>
			<tr>
				<td>Ada tidaknya penyelesaian perselisihan antar desa/kelurahan</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["skgrp"][17] ?></td>
			</tr>
			<tr>
				<td>Ada tidaknya kegiatan gotong royong dalam penyelesaian konflik di setiap desa/kelurahan oleh masyarakat sendiri</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["skgrp"][18] ?></td>
			</tr>
			<tr>
				<td>Ada tidaknya gotong royong dalam menolong keluarga tidak mampu dan fakir miskin di desa dan kelurahan</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["skgrp"][19] ?></td>
			</tr>
			<tr>
				<td>Ada tidaknya kegiatan Kepala Desa sebagai Hakim Perdamaian Desa </td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["skgrp"][20] ?></td>
			</tr>
			<tr>
				<td>Kegiatan gotong royong dalam penanggulangan bencana</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["skgrp"][21] ?></td>
			</tr>
			<tr>
				<td>Kegiatan gotong royong dalam pelaksanaan kegiatan bulan bhakti gotong royong</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["skgrp"][22] ?></td>
			</tr>
			<tr>
				<td colspan="2">
					<h4>4. Adat Istiadat</h4>
				</td>
			</tr>
			<tr>
				<td>Adat istiadat dalam perkawinan</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["adat"][1] ?></td>
			</tr>
			<tr>
				<td>Adat istiadat dalam kelahiran anak</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["adat"][2] ?></td>
			</tr>
			<tr>
				<td>Adat istiadat dalam upacara kematian</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["adat"][3] ?></td>
			</tr>
			<tr>
				<td>Adat istiadat dalam pengelolaan hutan</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["adat"][4] ?></td>
			</tr>
			<tr>
				<td>Adat istiadat dalam tanah pertanian</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["adat"][5] ?></td>
			</tr>
			<tr>
				<td>Adat istiadat dalam pengelolaan laut/pantai</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["adat"][6] ?></td>
			</tr>
			<tr>
				<td>Adat istiadat dalam memecahkan konflik warga</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["adat"][7] ?></td>
			</tr>
			<tr>
				<td>Adat istiadat dalam menjauhkan bala penyakit dan bencana alam</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["adat"][8] ?></td>
			</tr>
			<tr>
				<td>Adat istiadat dalam memulihkan hubungan antara alam semesta dengan manusia dan lingkungannya</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["adat"][9] ?></td>
			</tr>
			<tr>
				<td>Adat istiadat dalam penanggulangan kemiskinanbagi keluarga tidak mampu/fakir miskin/terlantar</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["adat"][10] ?></td>
			</tr>
			<tr>
				<td colspan="2">
					<h4>5. Sikap Dan Mental Masyarakat</h4>
				</td>
			</tr>
			<tr>
				<td>Jumlah jenis pungutan liar dari anak gelandangan di sudut jalanan</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["sdmm"][1] ?></td>
			</tr>
			<tr>
				<td>Jumlah jenis pungutan liar di terminal, pelabuhan dan pasar</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["sdmm"][2] ?></td>
			</tr>
			<tr>
				<td>Peminta-minta sumbangan perorangan dari rumah ke rumah</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["sdmm"][3] ?></td>
			</tr>
			<tr>
				<td>Peminta-minta sumbangan terorganisasi dari rumah ke rumah</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["sdmm"][4] ?></td>
			</tr>
			<tr>
				<td>Semakin berkembang praktek jalan pintas dalam mencari uang secara gampang walau tidak halal</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["sdmm"][5] ?></td>
			</tr>
			<tr>
				<td>Jenis pungutan dari RT atau sebutan lain kepada warga</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["sdmm"][6] ?></td>
			</tr>
			<tr>
				<td>Jenis pungutan dari RW atau sebutan lain kepada warga</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["sdmm"][7] ?></td>
			</tr>
			<tr>
				<td>Jenis pungutan dari desa/kelurahan kepada warga</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["sdmm"][8] ?></td>
			</tr>
			<tr>
				<td>Kasus aparat RT/RW atau sebutan lainnya di desa dan kelurahan yang dipecat kena kasus pungutan liar, pemerasan dan sejenisnya.</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["sdmm"][9] ?></td>
			</tr>
			<tr>
				<td>Dipindah karena kena kasus pungutan liar, pemerasan dan sejenisnya</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["sdmm"][10] ?></td>
			</tr>
			<tr>
				<td>Diberhentikan dengan hormat karena kena kasus pungutan liar, pemerasan dan sejenisnya</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["sdmm"][11] ?></td>
			</tr>
			<tr>
				<td>Dimutasi karena kasus pungutan liar, pemerasan dan sejenisnya</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["sdmm"][12] ?></td>
			</tr>
			<tr>
				<td>Banyak masyarakat yang memberikan biaya lebih dari yang ditentukan sebagai uang rokok atau ucapan terima kasih dalam proses pelayanan administrasi di kantor desa/kelurahan</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["sdmm"][13] ?></td>
			</tr>
			<tr>
				<td>Banyak warga yang ingin mendapatkan pelayanan gratis dari aparat desa/kelurahan</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["sdmm"][14] ?></td>
			</tr>
			<tr>
				<td>Banyak penduduk yang mengeluhkan memburuknya kualitas pelayanan kepada masyarakat</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["sdmm"][15] ?></td>
			</tr>
			<tr>
				<td>Banyak kegiatan yang bersifat hiburan dan rekreasi yang diinisiatifi masyarakat sendiri</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["sdmm"][16] ?></td>
			</tr>
			<tr>
				<td>Masyarakat agak kurang toleran dengan keberadaan kelompok masyarakat dari unsur etnis, agama dan kelompok kepentingan lain</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["sdmm"][17] ?></td>
			</tr>
			<tr>
				<td colspan="2">
					<h4>6. Etos Kerja Penduduk</h4>
				</td>
			</tr>
			<tr>
				<td>Luas Wilayah Desa/Kelurahan sangat luas</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["etos"][1] ?></td>
			</tr>
			<tr>
				<td>Banyak lahan terlantar yang tidak dikelola pemiliknya/petani berdasi</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["etos"][2] ?></td>
			</tr>
			<tr>
				<td>Banyak lahan pekarangan di sekitar perumahan yang tidak dimanfaatkan</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["etos"][3] ?></td>
			</tr>
			<tr>
				<td>Banyak lahan tidur milik masyarakat yang tidak dimanfaatkan</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["etos"][4] ?></td>
			</tr>
			<tr>
				<td>Jumlah petani pada musim gagal tanam/panen yang pasrah dan tidak mencari pekerjaan lain</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["etos"][5] ?></td>
			</tr>
			<tr>
				<td>Jumlah nelayan pada musim tidak melaut yang memanfaatkan keterampilan/keahlian lainnya untuk mencari pekerjaan lain</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["etos"][6] ?></td>
			</tr>
			<tr>
				<td>Banyak penduduk yang mencari pekerjaan di luar desa/kelurahan tetapi masih dalam wilayah kabupaten/kota</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["etos"][7] ?></td>
			</tr>
			<tr>
				<td>Banyak penduduk yang mencari pekerjaan di kota besar lainnya</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["etos"][8] ?></td>
			</tr>
			<tr>
				<td>Kebiasaan masyarakat merayakan pesta dengan menghadirkan undangan yang banyak</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["etos"][9] ?></td>
			</tr>
			<tr>
				<td>Masyarakat sering mendatangi kantor desa dan lurah menuntut penyediaan kebutuhan dasar sembilan bahan pokok pada saat kelaparan dan kekeringan</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["etos"][10] ?></td>
			</tr>
			<tr>
				<td>Kebiasaan masyarakat untuk mencari/mengumpulkan bahan makanan pengganti beras/jagung pada saat rawan pangan/kelaparan/gagal panen</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["etos"][11] ?></td>
			</tr>
			<tr>
				<td>Kebiasaan pemotongan hewan dalam jumlah besar untuk pesta adat dan perayaan upacara tertentu</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["etos"][12] ?></td>
			</tr>
			<tr>
				<td>Kebiasaan masyarakat berdemonstrasi/protes terhadap kebijakan pemerintah</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["etos"][13] ?></td>
			</tr>
			<tr>
				<td>Kebiasaan masyarakat terprovokasi karena isu-isu yang menyesatkan</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["etos"][14] ?></td>
			</tr>
			<tr>
				<td>Kebiasaan masyarakat bermusyawarah untuk menyelesaikan berbagai persoalan sosial kemasyarakatan</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["etos"][15] ?></td>
			</tr>
			<tr>
				<td>Lebih banyak masyarakat yang diam/masabodoh/apatis ketika ada persoalan yang terjadi di lingkungan sekitarnya</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["etos"][16] ?></td>
			</tr>
			<tr>
				<td>Kebiasaan aparat pemerintah desa/kelurahan terlebih di tingkat RT, RW, Dusun dan Lingkungan yang kurang menanggapi kesulitan yang dihadapi masyarakat</td>
				<td><?php echo $perkembangan->detail["kedaulatan"]["etos"][17] ?></td>
			</tr>
			<tr>
				<td colspan="2">
					<h3>12. Lembaga Kemasyarakatan</h3>
					<h4>A. Lembaga Kemasyarakatan Desa/kelurahan</h4>
				</td>
			</tr>
			<tr>
				<td>Keberadaan organisasi Lembaga Kemasyarakatan Desa dan Kelurahan/LKD/LK</td>
				<td><?php echo $perkembangan->detail["lembaga"]["lkdk"][1] ?></td>
			</tr>
			<tr>
				<td>Kepengurusan</td>
				<td><?php echo $perkembangan->detail["lembaga"]["lkdk"][2] ?></td>
			</tr>
			<tr>
				<td>Jumlah kegiatan</td>
				<td><?php echo $perkembangan->detail["lembaga"]["lkdk"][3] ?></td>
			</tr>
			<tr>
				<td>Buku administrasi lembaga kemasyarakatan</td>
				<td><?php echo $perkembangan->detail["lembaga"]["lkdk"][4] ?></td>
			</tr>
			<tr>
				<td>Jumlah organisasi anggota lembaga kemasyarakatandesa/kelurahan</td>
				<td><?php echo $perkembangan->detail["lembaga"]["lkdk"][5] ?></td>
			</tr>
			<tr>
				<td colspan="2">
					<h4>B. Organisasi Anggota Lembaga</h4>
					<h4>1. LKMD/LPM atau sebutan lain</h4>
				</td>
			</tr>
			<tr>
				<td>Keberadaan</td>
				<td><?php echo $perkembangan->detail["lembaga"]["lkmdlpm"][1] ?></td>
			</tr>
			<tr>
				<td>Kepengurusan</td>
				<td><?php echo $perkembangan->detail["lembaga"]["lkmdlpm"][2] ?></td>
			</tr>
			<tr>
				<td>Buku administrasi</td>
				<td><?php echo $perkembangan->detail["lembaga"]["lkmdlpm"][3] ?></td>
			</tr>
			<tr>
				<td>Jumlah kegiatan</td>
				<td><?php echo $perkembangan->detail["lembaga"]["lkmdlpm"][4] ?></td>
			</tr>
			<tr>
				<td colspan="2">
					<h4>2. PKK</h4>
				</td>
			</tr>
			<tr>
				<td>Keberadaan</td>
				<td><?php echo $perkembangan->detail["lembaga"]["pkk"][1] ?></td>
			</tr>
			<tr>
				<td>Kepengurusan</td>
				<td><?php echo $perkembangan->detail["lembaga"]["pkk"][2] ?></td>
			</tr>
			<tr>
				<td>Buku administrasi</td>
				<td><?php echo $perkembangan->detail["lembaga"]["pkk"][3] ?></td>
			</tr>
			<tr>
				<td>Jumlah kegiatan</td>
				<td><?php echo $perkembangan->detail["lembaga"]["pkk"][4] ?></td>
			</tr>
			<tr>
				<td>Kelengkapan organisasi Dasawisma</td>
				<td><?php echo $perkembangan->detail["lembaga"]["pkk"][5] ?></td>
			</tr>
			<tr>
				<td>Kelengkapan organisasi Pokja</td>
				<td><?php echo $perkembangan->detail["lembaga"]["pkk"][6] ?></td>
			</tr>
			<tr>
				<td colspan="2">
					<h4>3. Karang Taruna</h4>
				</td>
			</tr>
			<tr>
				<td>Keberadaan</td>
				<td><?php echo $perkembangan->detail["lembaga"]["karangtaruna"][1] ?></td>
			</tr>
			<tr>
				<td>Kepengurusan</td>
				<td><?php echo $perkembangan->detail["lembaga"]["karangtaruna"][2] ?></td>
			</tr>
			<tr>
				<td>Buku administrasi</td>
				<td><?php echo $perkembangan->detail["lembaga"]["karangtaruna"][3] ?></td>
			</tr>
			<tr>
				<td>Jumlah kegiatan</td>
				<td><?php echo $perkembangan->detail["lembaga"]["karangtaruna"][4] ?></td>
			</tr>
			<tr>
				<td colspan="2">
					<h4>4. RT</h4>
				</td>
			</tr>
			<tr>
				<td>Keberadaan</td>
				<td><?php echo $perkembangan->detail["lembaga"]["rt"][1] ?></td>
			</tr>
			<tr>
				<td>Kepengurusan</td>
				<td><?php echo $perkembangan->detail["lembaga"]["rt"][2] ?></td>
			</tr>
			<tr>
				<td>Buku administrasi</td>
				<td><?php echo $perkembangan->detail["lembaga"]["rt"][3] ?></td>
			</tr>
			<tr>
				<td>Jumlah kegiatan</td>
				<td><?php echo $perkembangan->detail["lembaga"]["rt"][4] ?></td>
			</tr>
			<tr>
				<td colspan="2">
					<h4>5. RW</h4>
				</td>
			</tr>
			<tr>
				<td>Keberadaan</td>
				<td><?php echo $perkembangan->detail["lembaga"]["rw"][1] ?></td>
			</tr>
			<tr>
				<td>Kepengurusan</td>
				<td><?php echo $perkembangan->detail["lembaga"]["rw"][2] ?></td>
			</tr>
			<tr>
				<td>Buku administrasi</td>
				<td><?php echo $perkembangan->detail["lembaga"]["rw"][3] ?></td>
			</tr>
			<tr>
				<td>Jumlah kegiatan</td>
				<td><?php echo $perkembangan->detail["lembaga"]["rw"][4] ?></td>
			</tr>
			<tr>
				<td colspan="2">
					<h4>6. Lembaga adat</h4>
				</td>
			</tr>
			<tr>
				<td>Keberadaan</td>
				<td><?php echo $perkembangan->detail["lembaga"]["adat"][1] ?></td>
			</tr>
			<tr>
				<td>Kepengurusan</td>
				<td><?php echo $perkembangan->detail["lembaga"]["adat"][2] ?></td>
			</tr>
			<tr>
				<td>Buku administrasi</td>
				<td><?php echo $perkembangan->detail["lembaga"]["adat"][3] ?></td>
			</tr>
			<tr>
				<td>Jumlah kegiatan</td>
				<td><?php echo $perkembangan->detail["lembaga"]["adat"][4] ?></td>
			</tr>
			<tr>
				<td colspan="2">
					<h4>7. BUMDES</h4>
				</td>
			</tr>
			<tr>
				<td>Keberadaan</td>
				<td><?php echo $perkembangan->detail["lembaga"]["bumdes"][1] ?></td>
			</tr>
			<tr>
				<td>Kepengurusan</td>
				<td><?php echo $perkembangan->detail["lembaga"]["bumdes"][2] ?></td>
			</tr>
			<tr>
				<td>Buku administrasi</td>
				<td><?php echo $perkembangan->detail["lembaga"]["bumdes"][3] ?></td>
			</tr>
			<tr>
				<td>Jumlah kegiatan</td>
				<td><?php echo $perkembangan->detail["lembaga"]["bumdes"][4] ?></td>
			</tr>
			<tr>
				<td colspan="2">
					<h4>8. Forum Komunikasi Kader Pemberdayaan Masyarakat</h4>
				</td>
			</tr>
			<tr>
				<td>Keberadaan</td>
				<td><?php echo $perkembangan->detail["lembaga"]["fkkp"][1] ?></td>
			</tr>
			<tr>
				<td>Kepengurusan</td>
				<td><?php echo $perkembangan->detail["lembaga"]["fkkp"][2] ?></td>
			</tr>
			<tr>
				<td>Buku administrasi</td>
				<td><?php echo $perkembangan->detail["lembaga"]["fkkp"][3] ?></td>
			</tr>
			<tr>
				<td>Jumlah kegiatan</td>
				<td><?php echo $perkembangan->detail["lembaga"]["fkkp"][4] ?></td>
			</tr>
			<tr>
				<td colspan="2">
					<h4>9. Posyandu</h4>
				</td>
			</tr>
			<tr>
				<td>Keberadaan</td>
				<td><?php echo $perkembangan->detail["lembaga"]["posyandu"][1] ?></td>
			</tr>
			<tr>
				<td>Kepengurusan</td>
				<td><?php echo $perkembangan->detail["lembaga"]["posyandu"][2] ?></td>
			</tr>
			<tr>
				<td>Buku administrasi</td>
				<td><?php echo $perkembangan->detail["lembaga"]["posyandu"][3] ?></td>
			</tr>
			<tr>
				<td>Jumlah kegiatan</td>
				<td><?php echo $perkembangan->detail["lembaga"]["posyandu"][4] ?></td>
			</tr>
			<tr>
				<td colspan="2">
					<h4>10. Kelompok Tani/Nelayan</h4>
				</td>
			</tr>
			<tr>
				<td>Keberadaan</td>
				<td><?php echo $perkembangan->detail["lembaga"]["ktn"][1] ?></td>
			</tr>
			<tr>
				<td>Kepengurusan</td>
				<td><?php echo $perkembangan->detail["lembaga"]["ktn"][2] ?></td>
			</tr>
			<tr>
				<td>Buku administrasi</td>
				<td><?php echo $perkembangan->detail["lembaga"]["ktn"][3] ?></td>
			</tr>
			<tr>
				<td>Jumlah kegiatan</td>
				<td><?php echo $perkembangan->detail["lembaga"]["ktn"][4] ?></td>
			</tr>
			<tr>
				<td colspan="2">
					<h4>11. Organisasi Perempuan</h4>
				</td>
			</tr>
			<tr>
				<td>Keberadaan</td>
				<td><?php echo $perkembangan->detail["lembaga"]["orpuan"][1] ?></td>
			</tr>
			<tr>
				<td>Kepengurusan</td>
				<td><?php echo $perkembangan->detail["lembaga"]["orpuan"][2] ?></td>
			</tr>
			<tr>
				<td>Buku administrasi</td>
				<td><?php echo $perkembangan->detail["lembaga"]["orpuan"][3] ?></td>
			</tr>
			<tr>
				<td>Jumlah kegiatan</td>
				<td><?php echo $perkembangan->detail["lembaga"]["orpuan"][4] ?></td>
			</tr>
			<tr>
				<td colspan="2">
					<h4>12. Organisasi Pemuda</h4>
				</td>
			</tr>
			<tr>
				<td>Keberadaan</td>
				<td><?php echo $perkembangan->detail["lembaga"]["orpem"][1] ?></td>
			</tr>
			<tr>
				<td>Kepengurusan</td>
				<td><?php echo $perkembangan->detail["lembaga"]["orpem"][2] ?></td>
			</tr>
			<tr>
				<td>Buku administrasi</td>
				<td><?php echo $perkembangan->detail["lembaga"]["orpem"][3] ?></td>
			</tr>
			<tr>
				<td>Jumlah kegiatan</td>
				<td><?php echo $perkembangan->detail["lembaga"]["orpem"][4] ?></td>
			</tr>
			<tr>
				<td colspan="2">
					<h4>13. Organisasi profesi</h4>
				</td>
			</tr>
			<tr>
				<td>Keberadaan</td>
				<td><?php echo $perkembangan->detail["lembaga"]["orpro"][1] ?></td>
			</tr>
			<tr>
				<td>Kepengurusan</td>
				<td><?php echo $perkembangan->detail["lembaga"]["orpro"][2] ?></td>
			</tr>
			<tr>
				<td>Buku administrasi</td>
				<td><?php echo $perkembangan->detail["lembaga"]["orpro"][3] ?></td>
			</tr>
			<tr>
				<td>Jumlah kegiatan</td>
				<td><?php echo $perkembangan->detail["lembaga"]["orpro"][4] ?></td>
			</tr>
			<tr>
				<td colspan="2">
					<h4>14. Organisasi Bapak</h4>
				</td>
			</tr>
			<tr>
				<td>Keberadaan</td>
				<td><?php echo $perkembangan->detail["lembaga"]["orpak"][1] ?></td>
			</tr>
			<tr>
				<td>Kepengurusan</td>
				<td><?php echo $perkembangan->detail["lembaga"]["orpak"][2] ?></td>
			</tr>
			<tr>
				<td>Buku administrasi</td>
				<td><?php echo $perkembangan->detail["lembaga"]["orpak"][3] ?></td>
			</tr>
			<tr>
				<td>Jumlah kegiatan</td>
				<td><?php echo $perkembangan->detail["lembaga"]["orpak"][4] ?></td>
			</tr>
			<tr>
				<td colspan="2">
					<h4>15. Kelompok Gotong Royong</h4>
				</td>
			</tr>
			<tr>
				<td>Keberadaan</td>
				<td><?php echo $perkembangan->detail["lembaga"]["kgr"][1] ?></td>
			</tr>
			<tr>
				<td>Kepengurusan</td>
				<td><?php echo $perkembangan->detail["lembaga"]["kgr"][2] ?></td>
			</tr>
			<tr>
				<td>Buku administrasi</td>
				<td><?php echo $perkembangan->detail["lembaga"]["kgr"][3] ?></td>
			</tr>
			<tr>
				<td>Jumlah kegiatan</td>
				<td><?php echo $perkembangan->detail["lembaga"]["kgr"][4] ?></td>
			</tr>
			<tr>
				<td colspan="2">
					<h4>16. Posyantekdes</h4>
				</td>
			</tr>
			<tr>
				<td>Keberadaan</td>
				<td><?php echo $perkembangan->detail["lembaga"]["posyantekdes"][1] ?></td>
			</tr>
			<tr>
				<td>Kepengurusan</td>
				<td><?php echo $perkembangan->detail["lembaga"]["posyantekdes"][2] ?></td>
			</tr>
			<tr>
				<td colspan="2">
					<h4>17. Organisasi Keagamaan</h4>
				</td>
			</tr>
			<tr>
				<td>Keberadaan</td>
				<td><?php echo $perkembangan->detail["lembaga"]["keagamaan"][1] ?></td>
			</tr>
			<tr>
				<td>Kepengurusan</td>
				<td><?php echo $perkembangan->detail["lembaga"]["keagamaan"][2] ?></td>
			</tr>
			<tr>
				<td>Jumlah kegiatan</td>
				<td><?php echo $perkembangan->detail["lembaga"]["keagamaan"][3] ?></td>
			</tr>
		<?php if(!empty($perkembangan->detail["lembaga"]["lainnya"]["keterangan"])): ?>
			<tr>
				<td colspan="2">
					<h4>18. Lainnya</h4>
				</td>
			</tr>
			<tr>
				<td>Keterangan</td>
				<td><?php echo $perkembangan->detail["lembaga"]["lainnya"]["keterangan"] ?></td>
			</tr>
			<tr>
				<td>Keberadaan</td>
				<td><?php echo $perkembangan->detail["lembaga"]["lainnya"][1] ?></td>
			</tr>
			<tr>
				<td>Kepengurusan</td>
				<td><?php echo $perkembangan->detail["lembaga"]["lainnya"][2] ?></td>
			</tr>
			<tr>
				<td>Buku administrasi</td>
				<td><?php echo $perkembangan->detail["lembaga"]["lainnya"][3] ?></td>
			</tr>
			<tr>
				<td>Jumlah kegiatan</td>
				<td><?php echo $perkembangan->detail["lembaga"]["lainnya"][4] ?></td>
			</tr>
			<tr>
				<td>Dasar hukum pembentukan Lembaga Kemasyarakatan Desa</td>
				<td><?php echo $perkembangan->detail["lembaga"]["lainnya"][5] ?></td>
			</tr>
			<tr>
				<td>Dasar hukum pembentukan lembaga kemasyarakatan kelurahan</td>
				<td><?php echo $perkembangan->detail["lembaga"]["lainnya"][6] ?></td>
			</tr>
			<tr>
				<td>Dasar hukum pembentukan organisasi anggota lembaga kemasyarakatan desa dan kelurahan</td>
				<td><?php echo $perkembangan->detail["lembaga"]["lainnya"][7] ?></td>
			</tr>
		<?php endif ?>
			<tr>
				<td colspan="2">
					<h3>13. Pemerintahan Desa Dan Kelurahan</h3>
					<h4>A. APB-Desa dan Anggaran Kelurahan</h4>
				</td>
			</tr>
			<tr>
				<td>Jumlah anggaran belanja dan penerimaan Desa/Kelurahan tahun ini</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["apbd"][1] ?></td>
			</tr>
			<tr>
				<td>APBD Kabupaten/Kota</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["apbd"][2] ?></td>
			</tr>
			<tr>
				<td>Bantuan Pemerintah Kabupaten/Kota</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["apbd"][3] ?></td>
			</tr>
			<tr>
				<td>Bantuan Pemerintah Provinsi</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["apbd"][4] ?></td>
			</tr>
			<tr>
				<td>Bantuan Pemerintah Pusat</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["apbd"][5] ?></td>
			</tr>
			<tr>
				<td>Pendapatan Asli Desa</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["apbd"][6] ?></td>
			</tr>
			<tr>
				<td>Swadaya Masyarakat Desa dan Kelurahan</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["apbd"][7] ?></td>
			</tr>
			<tr>
				<td>Alokasi Dana Desa</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["apbd"][8] ?></td>
			</tr>
			<tr>
				<td>Sumber Pendapatan dari Perusahaan yang ada di desa/kelurahan</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["apbd"][9] ?></td>
			</tr>
			<tr>
				<td>Sumber pendapatan lain yang sah dan tidakmengikat</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["apbd"][10] ?></td>
			</tr>
			<tr>
				<td>Jumlah Belanja Publik/belanja pembangunan</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["apbd"][11] ?></td>
			</tr>
			<tr>
				<td>Jumlah Belanja Aparatur/pegawai</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["apbd"][12] ?></td>
			</tr>
			<tr>
				<td colspan="2">
					<h4>B. Pertanggungjawaban Kepala Desa/Lurah</h4>
				</td>
			</tr>
			<tr>
				<td>Penyampaian laporan keterangan pertanggunganjawab Kepala Desa kepada BPD</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["tanggungjawab"][1] ?></td>
			</tr>
			<tr>
				<td>Jumlah informasi yang disampaikan kepala desa dan lurah tentang laporan penyelenggaraan tugas, wewenang, hak dan kewajiban kepala desa dan lurah kepada masyarakat</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["tanggungjawab"][2] ?></td>
			</tr>
			<tr>
				<td>Status laporan keterangan pertanggungjawaban kepala Desa</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["tanggungjawab"][3] ?></td>
			</tr>
			<tr>
				<td>Laporan  kinerja  penyelenggaraan  tugas,  wewenang, kewajiban  dan  hak  kepala  desa  dan  lurah  kepada Bupati/Walikota</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["tanggungjawab"][4] ?></td>
			</tr>
			<tr>
				<td>Jumlah jenis media informasi kinerja kepala desa dan lurah kepada masyarakat</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["tanggungjawab"][5] ?></td>
			</tr>
			<tr>
				<td>Jumlah kasus pengaduan masyarakat terhadap masalah pembangunan,  pelayanan  dan  pembinaan kemasyarakatan yang  disampaikan kepada kepala desa/lurah</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["tanggungjawab"][6] ?></td>
			</tr>
			<tr>
				<td>Jumlah kasus pengaduan masyarakat terhadap masalah  pembangunan,  pelayanan  dan  pembinaan kemasyarakatan yang diselesaikan kepala desa/lurah</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["tanggungjawab"][7] ?></td>
			</tr>
			<tr>
				<td colspan="2">
					<h4>C. Prasarana Dan Administrasi Pemerintahan Desa/Kelurahan</h4>
					<h4>1. Pemerintah Desa/kelurahan</h4>
				</td>
			</tr>
			<tr>
				<td>Gedung Kantor</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["sarpd"][1] ?></td>
			</tr>
			<tr>
				<td>Kondisi Gedung Kantor</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["sarpd"][2] ?></td>
			</tr>
			<tr>
				<td>Jumlah ruang kerja</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["sarpd"][3] ?></td>
			</tr>
			<tr>
				<td>Balai Desa/Kelurahan/sejenisnya</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["sarpd"][4] ?></td>
			</tr>
			<tr>
				<td>Kondisi Balai Desa/Kelurahan/sejenisnya</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["sarpd"][5] ?></td>
			</tr>
			<tr>
				<td>Listrik</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["sarpd"][6] ?></td>
			</tr>
			<tr>
				<td>Air bersih</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["sarpd"][7] ?></td>
			</tr>
			<tr>
				<td>Telepon</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["sarpd"][8] ?></td>
			</tr>
			<tr>
				<td colspan="2">
					<h4>1.A. Inventaris dan Alat tulis kantor</h4>
				</td>
			</tr>
			<tr>
				<td>Jumlah mesin tik</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["iatk"][1] ?></td>
			</tr>
			<tr>
				<td>Jumlah meja</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["iatk"][2] ?></td>
			</tr>
			<tr>
				<td>Jumlah kursi</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["iatk"][3] ?></td>
			</tr>
			<tr>
				<td>Jumlah almari arsip</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["iatk"][4] ?></td>
			</tr>
			<tr>
				<td>Komputer</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["iatk"][5] ?></td>
			</tr>
			<tr>
				<td>Mesin fax</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["iatk"][6] ?></td>
			</tr>
			<tr>
				<td>Kendaraan Dinas Lurah/Kepala Desa</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["iatk"][7] ?></td>
			</tr>
			<tr>
				<td>Buku Data Perangkat Desa/Kelurahan</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["iatk"][8] ?></td>
			</tr>
			<tr>
				<td>Pengisian Buku Data Perangkat Desa/Kelurahan</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["iatk"][9] ?></td>
			</tr>
			<tr>
				<td>Perangkat Desa/Kelurahan</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["iatk"][10] ?></td>
			</tr>
			<tr>
				<td>Buku Peta Wilayah Desa/Kelurahan</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["iatk"][11] ?></td>
			</tr>
			<tr>
				<td>Struktur organisasi</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["iatk"][12] ?></td>
			</tr>
			<tr>
				<td>Kartu uraian tugas</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["iatk"][13] ?></td>
			</tr>
			<tr>
				<td colspan="2">
					<h4>1. B. Administrasi Pemerintahan</h4>
				</td>
			</tr>
			<tr>
				<td>Buku profil desa/kelurahan</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["apdk"][1]["status"] .' - '. $perkembangan->detail["pemerintahan"]["apdk"][1]["keterangan"] ?></td>
			</tr>
			<tr>
				<td>Buku data Peraturan Desa/Peraturan Daerah</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["apdk"][2]["status"] .' - '. $perkembangan->detail["pemerintahan"]["apdk"][2]["keterangan"] ?></td>
			</tr>
			<tr>
				<td>Buku Keputusan Kepala Desa/Lurah</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["apdk"][3]["status"] .' - '. $perkembangan->detail["pemerintahan"]["apdk"][3]["keterangan"] ?></td>
			</tr>
			<tr>
				<td>Buku administrasi kependudukan</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["apdk"][4]["status"] .' - '. $perkembangan->detail["pemerintahan"]["apdk"][4]["keterangan"] ?></td>
			</tr>
			<tr>
				<td>Buku data inventaris</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["apdk"][5]["status"] .' - '. $perkembangan->detail["pemerintahan"]["apdk"][5]["keterangan"] ?></td>
			</tr>
			<tr>
				<td>Buku data aparat</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["apdk"][6]["status"] .' - '. $perkembangan->detail["pemerintahan"]["apdk"][6]["keterangan"] ?></td>
			</tr>
			<tr>
				<td>Buku data tanah milik desa/tanah kas desa/milik kelurahan</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["apdk"][7]["status"] .' - '. $perkembangan->detail["pemerintahan"]["apdk"][7]["keterangan"] ?></td>
			</tr>
			<tr>
				<td>Buku administrasi pajak dan retribusi</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["apdk"][8]["status"] .' - '. $perkembangan->detail["pemerintahan"]["apdk"][8]["keterangan"] ?></td>
			</tr>
			<tr>
				<td>Buku data tanah</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["apdk"][9]["status"] .' - '. $perkembangan->detail["pemerintahan"]["apdk"][9]["keterangan"] ?></td>
			</tr>
			<tr>
				<td>Buku laporan pengaduan masyarakat</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["apdk"][10]["status"] .' - '. $perkembangan->detail["pemerintahan"]["apdk"][10]["keterangan"] ?></td>
			</tr>
			<tr>
				<td>Buku agenda ekspedisi</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["apdk"][11]["status"] .' - '. $perkembangan->detail["pemerintahan"]["apdk"][11]["keterangan"] ?></td>
			</tr>
			<tr>
				<td>Buku profil desa/kelurahan</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["apdk"][12]["status"] .' - '. $perkembangan->detail["pemerintahan"]["apdk"][12]["keterangan"] ?></td>
			</tr>
			<tr>
				<td>Buku data induk penduduk</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["apdk"][13]["status"] .' - '. $perkembangan->detail["pemerintahan"]["apdk"][13]["keterangan"] ?></td>
			</tr>
			<tr>
				<td>Buku buku data mutasi penduduk</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["apdk"][14]["status"] .' - '. $perkembangan->detail["pemerintahan"]["apdk"][14]["keterangan"] ?></td>
			</tr>
			<tr>
				<td>Buku rekapitulasi jumlah penduduk akhir bulan</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["apdk"][15]["status"] .' - '. $perkembangan->detail["pemerintahan"]["apdk"][15]["keterangan"] ?></td>
			</tr>
			<tr>
				<td>Buku registrasi pelayanan penduduk</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["apdk"][16]["status"] .' - '. $perkembangan->detail["pemerintahan"]["apdk"][16]["keterangan"] ?></td>
			</tr>
			<tr>
				<td>Buku data penduduk sementara</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["apdk"][17]["status"] .' - '. $perkembangan->detail["pemerintahan"]["apdk"][17]["keterangan"] ?></td>
			</tr>
			<tr>
				<td>Buku anggaran penerimaan</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["apdk"][18]["status"] .' - '. $perkembangan->detail["pemerintahan"]["apdk"][18]["keterangan"] ?></td>
			</tr>
			<tr>
				<td>Buku anggaran pengeluaran pegawai dan pembangunan</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["apdk"][19]["status"] .' - '. $perkembangan->detail["pemerintahan"]["apdk"][19]["keterangan"] ?></td>
			</tr>
			<tr>
				<td>Buku kas umum</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["apdk"][20]["status"] .' - '. $perkembangan->detail["pemerintahan"]["apdk"][20]["keterangan"] ?></td>
			</tr>
			<tr>
				<td>Buku kas pembantu penerimaan</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["apdk"][21]["status"] .' - '. $perkembangan->detail["pemerintahan"]["apdk"][21]["keterangan"] ?></td>
			</tr>
			<tr>
				<td>Buku kas pembantu pengeluaran rutin dan pembangunan</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["apdk"][22]["status"] .' - '. $perkembangan->detail["pemerintahan"]["apdk"][22]["keterangan"] ?></td>
			</tr>
			<tr>
				<td>Buku data lembaga kemasyarakatan</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["apdk"][23]["status"] .' - '. $perkembangan->detail["pemerintahan"]["apdk"][23]["keterangan"] ?></td>
			</tr>
			<tr>
				<td>Buku data pengurus dan anggota lembaga kemasyarakatan</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["apdk"][24]["status"] .' - '. $perkembangan->detail["pemerintahan"]["apdk"][24]["keterangan"] ?></td>
			</tr>
			<tr>
				<td>Buku data program dan kegiatan masuk desa/kelurahan</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["apdk"][25]["status"] .' - '. $perkembangan->detail["pemerintahan"]["apdk"][25]["keterangan"] ?></td>
			</tr>
			<tr>
				<td>Buku rencana kerja pembangunan desa/kelurahan</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["apdk"][26]["status"] .' - '. $perkembangan->detail["pemerintahan"]["apdk"][26]["keterangan"] ?></td>
			</tr>
			<tr>
				<td>Buku rencana pembangunan jangka menengah desa</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["apdk"][27]["status"] .' - '. $perkembangan->detail["pemerintahan"]["apdk"][27]["keterangan"] ?></td>
			</tr>
			<tr>
				<td>Buku kader pemberdayaan masyarakat</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["apdk"][28]["status"] .' - '. $perkembangan->detail["pemerintahan"]["apdk"][28]["keterangan"] ?></td>
			</tr>
			<tr>
				<td>Buku kegiatan pembangunan</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["apdk"][29]["status"] .' - '. $perkembangan->detail["pemerintahan"]["apdk"][29]["keterangan"] ?></td>
			</tr>
			<tr>
				<td>Buku inventaris proyek</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["apdk"][30]["status"] .' - '. $perkembangan->detail["pemerintahan"]["apdk"][30]["keterangan"] ?></td>
			</tr>
			<tr>
				<td>Buku APB-Desa/Anggaran Kelurahan</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["apdk"][31]["status"] .' - '. $perkembangan->detail["pemerintahan"]["apdk"][31]["keterangan"] ?></td>
			</tr>
			<tr>
				<td>Loket pelayanan</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["apdk"][32]["status"] .' - '. $perkembangan->detail["pemerintahan"]["apdk"][32]["keterangan"] ?></td>
			</tr>
			<tr>
				<td>Kotak Pengaduan Masyarakat</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["apdk"][33]["status"] .' - '. $perkembangan->detail["pemerintahan"]["apdk"][33]["keterangan"] ?></td>
			</tr>
			<tr>
				<td>Papan informasi pelayanan</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["apdk"][34]["status"] .' - '. $perkembangan->detail["pemerintahan"]["apdk"][34]["keterangan"] ?></td>
			</tr>
			<tr>
				<td>Laporan kinerja tahunan</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["apdk"][35]["status"] ?></td>
			</tr>
			<tr>
				<td>Laporan akhir jabatan/memori jabatan lurah/desa</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["apdk"][36]["status"] ?></td>
			</tr>
		<?php if(!empty($perkembangan->detail["pemerintahan"]["apdk"]["lainnya"]["nama"])): ?>
			<tr>
				<td><?php echo $perkembangan->detail["pemerintahan"]["apdk"]["lainnya"]["nama"] ?></td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["apdk"]["lainnya"]["status"] .' - '. $perkembangan->detail["pemerintahan"]["apdk"]["lainnya"]["keterangan"] ?></td>
			</tr>
		<?php endif ?>
			<tr>
				<td colspan="2">
					<h4>2. Prasarana Dan Sarana Badan Permusyawaratan Desa/BPD</h4>
				</td>
			</tr>
			<tr>
				<td>Gedung Kantor</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["sarprasbpd"][1] ?></td>
			</tr>
			<tr>
				<td>Ruangan Kerja</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["sarprasbpd"][2] ?></td>
			</tr>
			<tr>
				<td>Kondisi Ruangan Kerja</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["sarprasbpd"][3] ?></td>
			</tr>
			<tr>
				<td>Listrik</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["sarprasbpd"][4] ?></td>
			</tr>
			<tr>
				<td>Air bersih</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["sarprasbpd"][5] ?></td>
			</tr>
			<tr>
				<td>Telepon</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["sarprasbpd"][6] ?></td>
			</tr>
			<tr>
				<td colspan="2">
					<h4>2.A. Inventaris dan Alat tulis kantor</h4>
				</td>
			</tr>
			<tr>
				<td>Jumlah mesin tik</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["iatkbpd"][1] ?></td>
			</tr>
			<tr>
				<td>Jumlah meja</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["iatkbpd"][2] ?></td>
			</tr>
			<tr>
				<td>Jumlah kursi</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["iatkbpd"][3] ?></td>
			</tr>
			<tr>
				<td>Jumlah almari arsip</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["iatkbpd"][4] ?></td>
			</tr>
			<tr>
				<td>Komputer</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["iatkbpd"][5] ?></td>
			</tr>
			<tr>
				<td>Mesin fax</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["iatkbpd"][6] ?></td>
			</tr>
			<tr>
				<td colspan="2">
					<h4>2.B. Administrasi BPD</h4>
				</td>
			</tr>
			<tr>
				<td>Buku-buku administrasi keanggotaan BPD</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["abpd"][1]["keterangan"] .' - '. $perkembangan->detail["pemerintahan"]["abpd"][1]["status"] ?></td>
			</tr>
			<tr>
				<td>Buku agenda BPD</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["abpd"][2]["keterangan"] .' - '. $perkembangan->detail["pemerintahan"]["abpd"][2]["status"] ?></td>
			</tr>
			<tr>
				<td>Buku data kegiatan BPD</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["abpd"][3]["keterangan"] .' - '. $perkembangan->detail["pemerintahan"]["abpd"][3]["status"] ?></td>
			</tr>
			<tr>
				<td>Buku Sekretariat BPD</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["abpd"][4]["keterangan"] .' - '. $perkembangan->detail["pemerintahan"]["abpd"][4]["status"] ?></td>
			</tr>
			<tr>
				<td>Buku Data Keputusan BPD</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["abpd"][5]["keterangan"] .' - '. $perkembangan->detail["pemerintahan"]["abpd"][5]["status"] ?></td>
			</tr>
		<?php if(!empty($perkembangan->detail["pemerintahan"]["abpd"]["lainnya"]["Keterangan"])): ?>
			<tr>
				<td><?php echo $perkembangan->detail["pemerintahan"]["abpd"]["lainnya"]["Keterangan"] ?></td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["abpd"][6]["status"] ?></td>
			</tr>
		<?php endif ?>
			<tr>
				<td colspan="2">
					<h4>3. Prasarana Dan Sarana Dusun/lingkungan/sebutan Lain</h4>
				</td>
			</tr>
			<tr>
				<td>Gedung Kantor atau Balai Pertemuan</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["sarprasdl"][1] ?></td>
			</tr>
			<tr>
				<td>Kondisi Gedung Kantor atau Balai Pertemuan</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["sarprasdl"][2] ?></td>
			</tr>
			<tr>
				<td>Alat Tulis Kantor</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["sarprasdl"][3] ?></td>
			</tr>
			<tr>
				<td>Barang inventaris</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["sarprasdl"][4] ?></td>
			</tr>
			<tr>
				<td>Buku administrasi</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["sarprasdl"][5] ?></td>
			</tr>
			<tr>
				<td>Jenis kegiatan</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["sarprasdl"][6] ?></td>
			</tr>
			<tr>
				<td>Jumlah pengurus</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["sarprasdl"][7] ?></td>
			</tr>
			<tr>
				<td>Jumlah ruang kerja</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["sarprasdl"][8] ?></td>
			</tr>
			<tr>
				<td>Balai Dusun/Lingkungan/sejenisnya</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["sarprasdl"][9] ?></td>
			</tr>
			<tr>
				<td>Kondisi Balai Dusun/Lingkungan/sejenisnya</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["sarprasdl"][10] ?></td>
			</tr>
			<tr>
				<td>Listrik</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["sarprasdl"][11] ?></td>
			</tr>
			<tr>
				<td>Air bersih</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["sarprasdl"][12] ?></td>
			</tr>
			<tr>
				<td>Telepon</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["sarprasdl"][13] ?></td>
			</tr>
			<tr>
				<td colspan="2">
					<h4>3.A. Inventaris dan Alat Tulis Kantor</h4>
				</td>
			</tr>
			<tr>
				<td>Jumlah mesin tik</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["iatkdl"][1] ?></td>
			</tr>
			<tr>
				<td>Jumlah meja</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["iatkdl"][2] ?></td>
			</tr>
			<tr>
				<td>Jumlah kursi</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["iatkdl"][3] ?></td>
			</tr>
			<tr>
				<td>Jumlah almari arsip</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["iatkdl"][4] ?></td>
			</tr>
			<tr>
				<td>Komputer</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["iatkdl"][5] ?></td>
			</tr>
			<tr>
				<td>Mesin fax</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["iatkdl"][6] ?></td>
			</tr>
			<tr>
				<td colspan="2">
					<h4>D. Pembinaan Dan Pengawasan</h4>
					<h4>1. Jenis Pembinaan Pemerintah Pusat kepada Pemerintahan Desa dan Kelurahan</h4>
				</td>
			</tr>
			<tr>
				<td>Pedoman dan standar pelaksanaan urusan pemerintahan desa, kelurahan, lembaga kemasyarakatan</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["pembinaan"][1] ?></td>
			</tr>
			<tr>
				<td>Pedoman dan standar bantuan pembiayaan dari pemerintah, pemerintah provinsi dan kabupaten/kota kepada desa dan kelurahan</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["pembinaan"][2] ?></td>
			</tr>
			<tr>
				<td>Pedoman umum administrasi, tata naskah dan pelaporan bagi kepala desa dan lurah</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["pembinaan"][3] ?></td>
			</tr>
			<tr>
				<td>Pedoman dan standar tanda jabatan, pakaian dinas dan atribut bagi Kepala Desa, Lurah dan Perangkat Desa/Kelurahan serta BPD</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["pembinaan"][4] ?></td>
			</tr>
			<tr>
				<td>Pedoman pendidikan dan pelatihan bagi pemerintahan desa, kelurahan, lembaga kemasyarakatan dan perangkat masing-masing</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["pembinaan"][5] ?></td>
			</tr>
			<tr>
				<td>Jumlah bimbingan, supervisi dan konsultasi pelaksanaan pemerintahan desa dan kelurahan serta pemberdayaan lembaga kemasyarakatan</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["pembinaan"][6] ?></td>
			</tr>
			<tr>
				<td>Jumlah kegiatan pendidikan dan pelatihan tentang penyelenggaraan pemerintahan desa dan kelurahan</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["pembinaan"][7] ?></td>
			</tr>
			<tr>
				<td>Penelitian dan pengkajian penyelenggaraan pemerintahan desa dan kelurahan</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["pembinaan"][8] ?></td>
			</tr>
			<tr>
				<td>Jumlah kegiatan yang terkait dengan upaya percepatan atau akselerasi pembangunan desa dan kelurahan dalam bidang ekonomi keluarga, penanganan bencana, penanggulangan kemiskinan, percepatan keberdayaan masyarakat, peningkatan prasarana dan sarana pedesaan/kelurahan, pemanfaatan sumber daya alam dan teknologi tepat guna, pengembangan sosial budaya masyarakat di desa dan kelurahan yang dibiayai APBN</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["pembinaan"][9] ?></td>
			</tr>
			<tr>
				<td>Pemberian penghargaan atas prestasi yang dilaksanakan pemerintahan desa dan kelurahan dalam penyelenggaraan pemerintahan dan lembaga kemasyarakatan</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["pembinaan"][10] ?></td>
			</tr>
			<tr>
				<td>Pemberian sanksi atas penyimpangan yang dilakukan kepala desa, lurah dan perangkat masing-masing</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["pembinaan"][11] ?></td>
			</tr>
			<tr>
				<td colspan="2">
					<h4>2. Pembinaan Pemerintah Provinsi kepada Pemerintahan Desa dan Kelurahan</h4>
				</td>
			</tr>
			<tr>
				<td>Pedoman pelaksanaan tugas pembantuan dari provinsi ke desa/kelurahan</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["pppkpd"][1] ?></td>
			</tr>
			<tr>
				<td>Pedoman bantuan keuangan dari provinsi</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["pppkpd"][2] ?></td>
			</tr>
			<tr>
				<td>Kegiatan fasilitasi keberadaan kesatuan masyarakat hukum adat, nilai adat istiadat dan lembaga adat beserta hak dan kewajibannya dalam pelaksanaan pemerintahan desa/kelurahan</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["pppkpd"][3] ?></td>
			</tr>
			<tr>
				<td>Fasilitasi Pelaksanaan pedoman administrasi, tata naskah dan pelaporan bagi kepala desa dan lurah</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["pppkpd"][4] ?></td>
			</tr>
			<tr>
				<td>Jumlah kegiatan pendidikan dan pelatihan tentang penyelenggaraan pemerintahan desa dan kelurahan berskala provinsi</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["pppkpd"][5] ?></td>
			</tr>
			<tr>
				<td>Kegiatan penanggulangan kemiskinan yang dibiayai APBD Provinsi yang masuk desa dan kelurahan</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["pppkpd"][6] ?></td>
			</tr>
			<tr>
				<td>Kegiatan penanganan bencana yang dibiayai APBD Provinsi untuk desa dan kelurahan</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["pppkpd"][7] ?></td>
			</tr>
			<tr>
				<td>Kegiatan peningkatan pendapatan keluarga yang dibiayai APBD Provinsi di desa dan kelurahan</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["pppkpd"][8] ?></td>
			</tr>
			<tr>
				<td>Kegiatan penyediaan sarana dan prasarana desa dan kelurahan yang dibiayai APBD Provinsi yang masuk desa dan kelurahan</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["pppkpd"][9]["keterangan"] .' - '. $perkembangan->detail["pemerintahan"]["pppkpd"][9]["jumlah"] ?> jenis</td>
			</tr>
			<tr>
				<td>Kegiatan pemanfaatan sumber daya alam dan pengembangan teknologi tepat guna yang dibiayai APBD Provinsi di desa dan kelurahan</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["pppkpd"][10]["keterangan"] .' - '. $perkembangan->detail["pemerintahan"]["pppkpd"][10]["jumlah"] ?> jenis</td>
			</tr>
			<tr>
				<td>Kegiatan pengembangan sosial budaya masyarakat</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["pppkpd"][11]["keterangan"] .' - '. $perkembangan->detail["pemerintahan"]["pppkpd"][11]["jumlah"] ?> jenis</td>
			</tr>
			<tr>
				<td>Pedoman pendataan dan pendayagunaan data profil desa dan kelurahan</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["pppkpd"][12]["keterangan"] .' - '. $perkembangan->detail["pemerintahan"]["pppkpd"][12]["jumlah"] ?> jenis</td>
			</tr>
			<tr>
				<td>Pemberian sanksi atas penyimpangan yang dilakukan kepala desa, lurah dan perangkat masing-masing</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["pppkpd"][13]["keterangan"] .' - '. $perkembangan->detail["pemerintahan"]["pppkpd"][13]["jumlah"] ?> jenis</td>
			</tr>
			<tr>
				<td>Pemberian penghargaan atas prestasi yang dilaksana</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["pppkpd"][14]["keterangan"] .' - '. $perkembangan->detail["pemerintahan"]["pppkpd"][14]["jumlah"] ?> jenis</td>
			</tr>
			<tr>
				<td colspan="2">
					<h4>3. Pembinaan Pemerintah Kabupaten/Kota kepada Pemerintahan Desa dan Kelurahan</h4>
				</td>
			</tr>
			<tr>
				<td>Pelimpahan tugas Bupati/Walikota kepada Lurah dan Kepala Desa</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["ppkkpd"][1]["keterangan"] .' - '. $perkembangan->detail["pemerintahan"]["ppkkpd"][1]["jumlah"] ?> jenis</td>
			</tr>
			<tr>
				<td>Penetapan pengaturan kewenangan kabupaten/kota yang diserahkan pengaturannya kepada desa</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["ppkkpd"][2]["keterangan"] .' - '. $perkembangan->detail["pemerintahan"]["ppkkpd"][2]["jumlah"] ?> jenis</td>
			</tr>
			<tr>
				<td>Pedoman pelaksanaan tugas pembantuan dari kabupaten/kota kepada desa</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["ppkkpd"][3]["keterangan"] .' - '. $perkembangan->detail["pemerintahan"]["ppkkpd"][3]["jumlah"] ?> jenis</td>
			</tr>
			<tr>
				<td>Pedoman teknis penyusunan peraturan desa, peraturan kepala desa, keputusan Lurah dan peraturan daerah kepada kepala desa dan lurah.</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["ppkkpd"][4]["keterangan"] .' - '. $perkembangan->detail["pemerintahan"]["ppkkpd"][4]["jumlah"] ?> jenis</td>
			</tr>
			<tr>
				<td>Pedoman teknis penyusunan perencanaan pembangunan partisipatif serta pengembangan lembaga kemasyarakatan desa dan kelurahan</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["ppkkpd"][5]["keterangan"] .' - '. $perkembangan->detail["pemerintahan"]["ppkkpd"][5]["jumlah"] ?> jenis</td>
			</tr>
			<tr>
				<td>Kegiatan fasilitasi keberadaan kesatuan masyarakat hukum adat, nilai adat istiadat dan lembaga adat beserta hak dan kewajibannya dalam pelaksanaan pemerintahan desa/kelurahan</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["ppkkpd"][6]["keterangan"] .' - '. $perkembangan->detail["pemerintahan"]["ppkkpd"][6]["jumlah"] ?> jenis</td>
			</tr>
			<tr>
				<td>Penetapan pembiayaan alokasi dana perimbangan untuk desa</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["ppkkpd"][7]["keterangan"] .' - '. $perkembangan->detail["pemerintahan"]["ppkkpd"][7]["jumlah"] ?> jenis</td>
			</tr>
			<tr>
				<td>Fasilitasi Pelaksanaan pedoman administrasi, tata naskah dan pelaporan bagi kepala desa dan lurah</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["ppkkpd"][8]["keterangan"] .' - '. $perkembangan->detail["pemerintahan"]["ppkkpd"][8]["jumlah"] ?> jenis</td>
			</tr>
			<tr>
				<td>Jumlah kegiatan pendidikan dan pelatihan tentang penyelenggaraan pemerintahan desa dan kelurahan berskala kabupaten/kota</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["ppkkpd"][9]["keterangan"] .' - '. $perkembangan->detail["pemerintahan"]["ppkkpd"][9]["jumlah"] ?> jenis</td>
			</tr>
			<tr>
				<td>Kegiatan penanggulangan kemiskinan yang dibiayai APBD kabupaten/kota yang masuk desa dan kelurahan</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["ppkkpd"][10]["keterangan"] .' - '. $perkembangan->detail["pemerintahan"]["ppkkpd"][10]["jumlah"] ?> jenis</td>
			</tr>
			<tr>
				<td>Kegiatan penanganan bencana yang dibiayai APBD kabupaten/kota untuk desa dan kelurahan</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["ppkkpd"][11]["keterangan"] .' - '. $perkembangan->detail["pemerintahan"]["ppkkpd"][11]["jumlah"] ?> jenis</td>
			</tr>
			<tr>
				<td>Kegiatan peningkatan pendapatan keluarga yang dibiayai APBD kabupaten/kota di desa dan kelurahan</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["ppkkpd"][12]["keterangan"] .' - '. $perkembangan->detail["pemerintahan"]["ppkkpd"][12]["jumlah"] ?> jenis</td>
			</tr>
			<tr>
				<td>Fasilitasi penetapan pedoman dan standar tanda jabatan, pakaian dinas dan atribut bagi Kepala Desa, Lurah, Perangkat Desa/Kelurahan dan BPD</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["ppkkpd"][13]["keterangan"] .' - '. $perkembangan->detail["pemerintahan"]["ppkkpd"][13]["jumlah"] ?> jenis</td>
			</tr>
			<tr>
				<td>Kegiatan fasilitasi keberadaan kesatuan masyarakat hukum adat, nilai adat istiadat dan lembaga adat beserta hak dan kewajibannya dalam pelaksanaan pemerintahan desa/kelurahan</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["ppkkpd"][14]["keterangan"] .' - '. $perkembangan->detail["pemerintahan"]["ppkkpd"][14]["jumlah"] ?> jenis</td>
			</tr>
			<tr>
				<td>Pedoman pendataan dan pendayagunaan profil desa dan kelurahan</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["ppkkpd"][15]["keterangan"] .' - '. $perkembangan->detail["pemerintahan"]["ppkkpd"][15]["jumlah"] ?> jenis</td>
			</tr>
			<tr>
				<td>Program dan kegiatan pemeliharaan motivasi desa/kelurahan berprestasi pascaperlombaan desa dan kelurahan</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["ppkkpd"][16]["keterangan"] .' - '. $perkembangan->detail["pemerintahan"]["ppkkpd"][16]["jumlah"] ?> jenis</td>
			</tr>
			<tr>
				<td>Pemberian penghargaan atas prestasi yang dicapai pemerintahan desa dan kelurahan dalam penyelenggaraan pemerintahan dan pemberdayaan lembaga kemasyarakatan</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["ppkkpd"][17]["keterangan"] .' - '. $perkembangan->detail["pemerintahan"]["ppkkpd"][17]["jumlah"] ?> jenis</td>
			</tr>
			<tr>
				<td>Pemberian sanksi atas penyimpangan yang dilakukan kepala desa, lurah dan perangkat masing-masing</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["ppkkpd"][18]["keterangan"] .' - '. $perkembangan->detail["pemerintahan"]["ppkkpd"][18]["jumlah"] ?> jenis</td>
			</tr>
			<tr>
				<td>Mengawasi pengelolaan keuangan desa serta anggaran kelurahan dan pendayagunaan aset pemerintahan desa, badan usaha milik desa dan sumber pendapatan daerah yang dikelola lurah</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["ppkkpd"][19]["keterangan"] .' - '. $perkembangan->detail["pemerintahan"]["ppkkpd"][19]["jumlah"] ?> jenis</td>
			</tr>
		<?php if(!empty($perkembangan->detail["pemerintahan"]["ppkkpd"]["lainnya"]["keterangan"])): ?>
			<tr>
				<td><?php echo $perkembangan->detail["pemerintahan"]["ppkkpd"]["lainnya"]["keterangan"] ?></td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["ppkkpd"]["lainnya"]["status"] .' - '. $perkembangan->detail["pemerintahan"]["ppkkpd"]["lainnya"]["jumlah"] ?> jenis</td>
			</tr>
		<?php endif ?>
			<tr>
				<td colspan="2">
					<h4>4. Pembinaan dan Pengawasan Camat kepada Desa/Kelurahan</h4>
				</td>
			</tr>
			<tr>
				<td>Jumlah Kegiatan fasilitasi penyusunan peraturan desa dan peraturan kepala desa</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["ppckd"][1]["keterangan"] .' - '. $perkembangan->detail["pemerintahan"]["ppckd"][1]["jumlah"] ?> kali</td>
			</tr>
			<tr>
				<td>Jumlah Kegiatan fasilitasi administrasi tata pemerintahan desa dan kelurahan</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["ppckd"][2]["keterangan"] .' - '. $perkembangan->detail["pemerintahan"]["ppckd"][2]["jumlah"] ?> kali</td>
			</tr>
			<tr>
				<td>Fasilitasi pengelolaan keuangan desa dan pendayagunaan aset desa serta anggaran kelurahan</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["ppckd"][3]["keterangan"] .' - '. $perkembangan->detail["pemerintahan"]["ppckd"][3]["jumlah"] ?> kali</td>
			</tr>
			<tr>
				<td>Jumlah kegiatan fasilitasi pelaksanaan urusan otonomi daerah kabupaten/kota yang diserahkan kepada desa</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["ppckd"][4]["keterangan"] .' - '. $perkembangan->detail["pemerintahan"]["ppckd"][4]["jumlah"] ?> kali</td>
			</tr>
			<tr>
				<td>Fasilitasi penerapan dan penegakan peraturan perundang- undangan</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["ppckd"][5]["keterangan"] .' - '. $perkembangan->detail["pemerintahan"]["ppckd"][5]["jumlah"] ?> kali</td>
			</tr>
			<tr>
				<td>Fasilitasi penyediaan data dan pendayagunaan data profil desa dan kelurahan </td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["ppckd"][6]["keterangan"] .' - '. $perkembangan->detail["pemerintahan"]["ppckd"][6]["jumlah"] ?> kali</td>
			</tr>
			<tr>
				<td>Jumlah kegiatan fasilitasi pelaksanaan tugas, wewenang, fungsi, hak dan kewajiban kepala desa, BPD, Lurah dan lembaga kemasyarakatan</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["ppckd"][7]["keterangan"] .' - '. $perkembangan->detail["pemerintahan"]["ppckd"][7]["jumlah"] ?> kali</td>
			</tr>
			<tr>
				<td>Jumlah kegiatan fasilitasi upaya penyelenggaraan ketenteraman dan ketertiban umum</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["ppckd"][8]["keterangan"] .' - '. $perkembangan->detail["pemerintahan"]["ppckd"][8]["jumlah"] ?> kali</td>
			</tr>
			<tr>
				<td>Fasilitasi penataan, penguatan dan efektivitas pelaksanaan</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["ppckd"][9]["keterangan"] .' - '. $perkembangan->detail["pemerintahan"]["ppckd"][9]["jumlah"] ?> kali</td>
			</tr>
			<tr>
				<td>tugas, fungsi dan kewajiban lembaga kemasyarakatan desa dan kelurahan</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["ppckd"][10]["keterangan"] .' - '. $perkembangan->detail["pemerintahan"]["ppckd"][10]["jumlah"] ?> kali</td>
			</tr>
			<tr>
				<td>Jumlah kegiatan fasilitasi partisipasi masyarakat dalam perencanaan, pelaksanaan, pemanfaatan dan pemeliharaan serta pengembangan dan pelestarian hasil pembangunan.</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["ppckd"][11]["keterangan"] .' - '. $perkembangan->detail["pemerintahan"]["ppckd"][11]["jumlah"] ?> kali</td>
			</tr>
			<tr>
				<td>Fasilitasi kerjasama antar desa/kelurahan dan kerjasama desa/kelurahan dengan pihak ketiga</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["ppckd"][12]["keterangan"] .' - '. $perkembangan->detail["pemerintahan"]["ppckd"][12]["jumlah"] ?> kali</td>
			</tr>
			<tr>
				<td>Jumlah kegiatan fasilitasi pelaksanaan program dankegiatan pemberdayaan masyarakat</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["ppckd"][13]["keterangan"] .' - '. $perkembangan->detail["pemerintahan"]["ppckd"][13]["jumlah"] ?> kali</td>
			</tr>
			<tr>
				<td>Jumlah kegiatan pemeliharaan motivasi bagi desa dan kelurahan juara perlombaan dan pasca perlombaan</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["ppckd"][14]["keterangan"] .' - '. $perkembangan->detail["pemerintahan"]["ppckd"][14]["jumlah"] ?> kali</td>
			</tr>
			<tr>
				<td>Jumlah kegiatan fasilitasi kerjasama antar lembaga kemasyarakatan dan lembaga kemasyarakatan dengan organisasi anggota lembaga kemasyarakatan serta dengan pihak ketiga sebagai mitra percepatan keberdayaan masyarakat</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["ppckd"][15]["keterangan"] .' - '. $perkembangan->detail["pemerintahan"]["ppckd"][15]["jumlah"] ?> kali</td>
			</tr>
			<tr>
				<td>Jumlah kegiatan fasilitasi bantuan teknis dan pendampingan kepada lembaga kemasyarakatan dan organisasi anggotanya</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["ppckd"][16]["keterangan"] .' - '. $perkembangan->detail["pemerintahan"]["ppckd"][16]["jumlah"] ?> kali</td>
			</tr>
			<tr>
				<td>Jumlah kegiatan koordinasi unit kerja pemerintahan dalam pengembangan lembaga kemasyarakatan desa/kelurahan.</td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["ppckd"][17]["keterangan"] .' - '. $perkembangan->detail["pemerintahan"]["ppckd"][17]["jumlah"] ?> kali</td>
			</tr>
		<?php if(!empty($perkembangan->detail["pemerintahan"]["ppckd"]["lainnya1"]["keterangan"])): ?>
			<tr>
				<td><?php echo $perkembangan->detail["pemerintahan"]["ppckd"]["lainnya1"]["keterangan"] ?></td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["ppckd"]["lainnya1"]["status"] .' - '. $perkembangan->detail["pemerintahan"]["ppckd"]["lainnya1"]["jumlah"] ?> kali</td>
			</tr>
		<?php endif ?>
		<?php if(!empty($perkembangan->detail["pemerintahan"]["ppckd"]["lainnya2"]["keterangan"])): ?>
			<tr>
				<td><?php echo $perkembangan->detail["pemerintahan"]["ppckd"]["lainnya2"]["keterangan"] ?></td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["ppckd"]["lainnya2"]["status"] .' - '. $perkembangan->detail["pemerintahan"]["ppckd"]["lainnya2"]["jumlah"] ?> kali</td>
			</tr>
		<?php endif ?>
		<?php if(!empty($perkembangan->detail["pemerintahan"]["ppckd"]["lainnya3"]["keterangan"])): ?>
			<tr>
				<td><?php echo $perkembangan->detail["pemerintahan"]["ppckd"]["lainnya3"]["keterangan"] ?></td>
				<td><?php echo $perkembangan->detail["pemerintahan"]["ppckd"]["lainnya3"]["status"] .' - '. $perkembangan->detail["pemerintahan"]["ppckd"]["lainnya3"]["jumlah"] ?> kali</td>
			</tr>
		<?php endif ?>
		</tbody>
	</table>
	<script>
		jQuery(document).ready(function($){
			$(".btn-cetak").click(function(){
				$('#detail-data').printThis({
					printDelay: 5000
				});
			});
		});
	</script>