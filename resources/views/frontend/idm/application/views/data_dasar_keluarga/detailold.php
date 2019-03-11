	<p>
		<button class="btn btn-blue btn-icon icon-left btn-cetak">
			<i class="entypo-print"></i>
			Cetak IDM
		</button>
	</p>
	<table class="table table-bordered datatable" id="detail-data">
		<tbody>
			<tr>
				<td colspan="2"><h3>Indeks Desa Membangun</h3></td>
			</tr>
			<tr>
				<td width="30%">101. Nama Informan</td>
				<td width="70%"><?php echo $ddk->nomor_kartu_keluarga; ?></td>
			</tr>
			<tr>
				<td>102. Jabatan</td>
				<td><?php echo $ddk->nama_kepala_keluarga ?></td>
			</tr>
			<tr>
				<td>103. No. Telepon Rumah / Hp</td>
				<td><?php echo $ddk->dusun ?></td>
			</tr>
			<tr>
				<td>104. Tanggal Lahir</td>
				<td><?php echo date_detail($ddk->tanggal) ?></td>
			</tr>
			
			<tr>
				<td>106. Provinsi</td>
				<td><?php echo $ddk->provinsi_name ?></td>
			</tr>
			<tr>
				<td>107. Kabupaten</td>
				<td><?php echo $ddk->kabupaten_name ?></td>
			</tr>
			<tr>
				<td>108. Kecamatan</td>
				<td><?php echo $ddk->kecamatan_name ?></td>
			</tr>
			<tr>
				<td>109. Desa</td>
				<td><?php echo $ddk->desa_name ?></td>
			</tr>
			<tr>
				<td>110. Titik Koordinat Desa</td>
				<td><?php echo $ddk->rtrw ?></td>
			</tr>
			<tr>
				<td>111. Alamat Lengkap</td>
				<td><?php echo $ddk->alamat ?></td>
			</tr>

			<tr>
				<td>112.a. Nama Kepala Desa</td>
				<td><?php echo $ddk->detail["pengisi"] ?></td>
			</tr>
			<tr>
				<td>112. b. Jenis Kelamin Kepala Desan</td>
				<td> <?php echo $ddk->detail["keluarga"]["lahan"]["pangan"] ?></td>
			</tr>
			<tr>
				<td>113. No. Telepon Rumah / Hp Kepala Desa</td>
				<td><?php echo $ddk->detail["pekerjaan"] ?></td>
			</tr>
			<tr>
				<td>114. No. Telepon Kantor Desa</td>
				<td><?php echo $ddk->detail["jabatan"] ?></td>
			</tr>
			<tr>
				<td>115. Email Desa</td>
				<td><?php echo $ddk->detail["sumber_data"][4] ?></td>
			</tr>
			<tr>
				<td>116. Pendidikan Terakhir Kepala Desa</td>
				<td><?php echo $ddk->detail["keluarga"]["lahan"]["kebun"] ?></td>
			</tr>
			<tr>
				<td>117. Lama menjabat sebagai kepala desa</td>
				<td><?php echo $ddk->detail["keluarga"]["penghasilan"] ?></td>
			</tr>
			<tr>
				<td>118. a.Sekretaris Desa</td>
				<td>Laki-Laki: <?php echo $ddk->detail["keluarga"]["penyakit_keluarga"]["lainnya1"]["keterangan"] ?> ||
				Perempuan: <?php echo $ddk->detail["keluarga"]["penyakit_keluarga"]["lainnya1"]["jumlah"] ?></td>
			</tr>
			<tr>
				<td>118. b. Kepala Urusan tata usaha dan umum</td>
				<td>Laki-Laki: <?php echo $ddk->detail["keluarga"]["penyakit_keluarga"]["lainnya2"]["keterangan"] ?> ||
				Perempuan: <?php echo $ddk->detail["keluarga"]["penyakit_keluarga"]["lainnya2"]["jumlah"] ?></td>
			</tr>
			<tr>
				<td>118. c. Kepala urusan keuangan</td>
				<td>Laki-Laki: <?php echo $ddk->detail["keluarga"]["penyakit_keluarga"]["lainnya3"]["keterangan"] ?> ||
				Perempuan: <?php echo $ddk->detail["keluarga"]["penyakit_keluarga"]["lainnya3"]["jumlah"] ?></td>
			</tr>
			<tr>
			    <td>118. d. Kepala urusan perencanaan</td>
				<td>Laki-Laki: <?php echo $ddk->detail["keluarga"]["kerukunan"]["lainnya"]["keterangan"] ?> ||
				Perempuan: <?php echo $ddk->detail["keluarga"]["kerukunan"]["lainnya"]["jumlah"] ?></td>
			</tr>
			<tr>
				<td>118. e. Kepala seksi pemerintahan</td>
				<td>Laki-Laki: <?php echo $ddk->detail["keluarga"]["perkelahian"]["lainnya1"]["keterangan"] ?>
				Perempuan: <?php echo $ddk->detail["keluarga"]["perkelahian"]["lainnya1"]["jumlah"] ?></td>
			</tr>
			<tr>
				<td>118. f. Kepala seksi kesejahteraan</td>
				<td>Laki-Laki: <?php echo $ddk->detail["keluarga"]["perkelahian"]["lainnya2"]["keterangan"] ?> ||
				Perempuan: <?php echo $ddk->detail["keluarga"]["perkelahian"]["lainnya2"]["jumlah"] ?></td>
			</tr>
			<tr>
				<td>118. g. Kepala seksi pelayanan</td>
				<td>Laki-Laki: <?php echo $ddk->detail["keluarga"]["miras_narkoba"]["lainnya"]["keterangan"] ?> ||
				Perempuan: <?php echo $ddk->detail["keluarga"]["miras_narkoba"]["lainnya"]["jumlah"] ?></td>
			</tr>
			<tr>
				<td>118. h. Staf petugas desa</td>
				<td>Laki-Laki: <?php echo $ddk->detail["keluarga"]["pembunuhan"]["lainnya"]["keterangan"] ?> ||
				Perempuan: <?php echo $ddk->detail["keluarga"]["pembunuhan"]["lainnya"]["jumlah"] ?></td>
			</tr>
			
			<tr>
				<td>118. i. BPD dan Anggota</td>
				<td>Laki-Laki: <?php echo $ddk->detail["keluarga"]["penculikan"]["lainnya1"]["keterangan"] ?> ||
				Perempuan: <?php echo $ddk->detail["keluarga"]["penculikan"]["lainnya1"]["jumlah"] ?></td>
			</tr>
			
			<tr>
				<td>118. j. LPM dan Anggota</td>
				<td>Laki-Laki: <?php echo $ddk->detail["keluarga"]["penculikan"]["lainnya2"]["keterangan"] ?> ||
				Perempuan: <?php echo $ddk->detail["keluarga"]["penculikan"]["lainnya2"]["jumlah"] ?></td>
			</tr>
			
			<tr>
				<td>118. k. TP. PKK Desa</td>
				<td>Laki-Laki: <?php echo $ddk->detail["keluarga"]["seksual"]["lainnya1"]["keterangan"] ?> ||
				Perempuan: <?php echo $ddk->detail["keluarga"]["seksual"]["lainnya1"]["jumlah"] ?></td>
			</tr>
			
			<tr>
				<td>118. l. Kepala Dusun</td>
				<td>Laki-Laki: <?php echo $ddk->detail["keluarga"]["seksual"]["lainnya2"]["keterangan"] ?> ||
				Perempuan: <?php echo $ddk->detail["keluarga"]["seksual"]["lainnya2"]["jumlah"] ?></td>
			</tr>
			
			<tr>
				<td>118. m. Ketua RW</td>
				<td>Laki-Laki: <?php echo $ddk->detail["keluarga"]["kekerasan"]["lainnya"]["keterangan"] ?> ||
				Perempuan: <?php echo $ddk->detail["keluarga"]["kekerasan"]["lainnya"]["jumlah"] ?></td>
			</tr>
			
			<tr><td>118. n. Ketua RT</td>
				<td>Laki-Laki: <?php echo $ddk->detail["keluarga"]["penderita_sakit"]["lainnya1"]["keterangan"] ?> ||
				Perempuan: <?php echo $ddk->detail["keluarga"]["penderita_sakit"]["lainnya1"]["jumlah"] ?></td>
			</tr>
			<tr>
				<td>1.2 Jumlah Pengeluaran Perbulan</td>
				<td><?php echo $ddk->detail["keluarga"]["pengeluaran"] ?></td>
			</tr>

			<tr>
				<td colspan="2">II. DATA GEOGRAFI, TOPOGRAFI, DAN DEMOGRAFI</td>
			</tr>
			<tr>
				<td>201. Total Luas Wilayah Desa</td>
				<td><?php echo $ddk->detail["keluarga"]["jenis_ternak"]["kambing"] ?></td>
			</tr>
			<tr>
				<td>202. Hutan Desa</td>
				<td><?php echo $ddk->detail["keluarga"]["jenis_ternak"]["domba"] ?></td>
			</tr>
			<tr>
				<td>203. Jenis Wilayah Desa</td>
				<td><?php echo $ddk->detail["keluarga"]["lahan"]["hutan"] ?></td>
			</tr>
						<tr>
				<td>204. Jumlah Total Penduduk</td>
				<td><?php echo $ddk->detail["keluarga"]["jenis_ternak"]["angsa"] ?></td>
			</tr>
			<tr>
				<td>205. Jumlah Penduduk Laki-laki</td>
				<td><?php echo $ddk->detail["keluarga"]["jenis_ternak"]["burung_puyuh"] ?></td>
			</tr>
			<tr>
				<td>206. Jumlah Penduduk Perempuan</td>
				<td><?php echo $ddk->detail["keluarga"]["jenis_ternak"]["kelinci"] ?></td>
			</tr>
			<tr>
				<td>207. Jumlah penduduk pendatang</td>
				<td><?php echo $ddk->detail["keluarga"]["jenis_ternak"]["burung_walet"] ?></td>
			</tr>
			<tr>
				<td>208. Jumlah penduduk pergi</td>
				<td><?php echo $ddk->detail["keluarga"]["jenis_ternak"]["anjing"] ?></td>
			</tr>
			<tr>
				<td>209. Jumlah Total Kepala Keluarga</td>
				<td><?php echo $ddk->detail["keluarga"]["jenis_ternak"]["kucing"] ?></td>
			</tr>
			<tr>
				<td>210. Jumlah Total Kepala Keluarga Perempuan</td>
				<td><?php echo $ddk->detail["keluarga"]["jenis_ternak"]["ular_cobra"] ?></td>
			</tr>
			<tr>
				<td>211. Jumlah Keluarga Miskin</td>
				<td><?php echo $ddk->detail["keluarga"]["jenis_ternak"]["burung_onta"] ?></td>
			</tr>
			<tr>
				<td>212. a. <1 tahun</td>
				<td><?php echo $ddk->detail["keluarga"]["jenis_ternak"]["ular_pithon"] ?></td>
			</tr>
			<tr>
				<td>212. b. 1-4 tahun</td>
				<td><?php echo $ddk->detail["keluarga"]["jenis_ternak"]["burung_cendrawasih"] ?></td>
			</tr>
			<tr>
				<td>212. c. 5-14 tahun</td>
				<td><?php echo $ddk->detail["keluarga"]["jenis_ternak"]["burung_kakatua"] ?></td>
			</tr>
			<tr>
				<td>212. d. 15-39 tahun</td>
				<td><?php echo $ddk->detail["keluarga"]["jenis_ternak"]["burung_beo"] ?></td>
			</tr>
			<tr>
				<td>212. e. 40-64 tahun</td>
				<td><?php echo $ddk->detail["keluarga"]["jenis_ternak"]["burung_merak"] ?></td>
			</tr>
			<tr>
				<td>212. f. 65 tahun ke atas</td>
				<td><?php echo $ddk->detail["keluarga"]["jenis_ternak"]["burung_langka_lainnya"] ?></td>
			</tr>
						<tr>
				<td colspan="2">Jumlah penduduk berdasarkan pekerjaan</td>
			</tr>
			<tr>
				<td>213. a. Petani</td>
				<td><?php echo $ddk->detail["keluarga"]["lembaga_dimiliki"]["tk_preschool_play_group"] ?></td>
			</tr>
			<tr>
				<td>213. b. Nelayan</td>
				<td><?php echo $ddk->detail["keluarga"]["lembaga_dimiliki"]["sd_sederajat"] ?></td>
			</tr>
			<tr>
				<td>213. c. Buruh tani/buruh nelayan</td>
				<td><?php echo $ddk->detail["keluarga"]["lembaga_dimiliki"]["smp_sederajat"] ?></td>
			</tr>
			<tr>
				<td>213. d. Buruh pabrik</td>
				<td><?php echo $ddk->detail["keluarga"]["lembaga_dimiliki"]["sma_sederajat"] ?></td>
			</tr>
			<tr>
				<td>213. e. PNS</td>
				<td><?php echo $ddk->detail["keluarga"]["lembaga_dimiliki"]["perguruan_tinggi"] ?></td>
			</tr>
			<tr>
				<td>213. f. Pegawai swasta</td>
				<td><?php echo $ddk->detail["keluarga"]["lembaga_dimiliki"]["pondok_pesantren"] ?></td>
			</tr>
			<tr>
				<td>213. g. Wiraswasta / pedagang</td>
				<td><?php echo $ddk->detail["keluarga"]["lembaga_dimiliki"]["taman_pendidikan_alquran"] ?></td>
			</tr>
			<tr>
				<td>213. h. Lainnya</td>
				<td><?php echo $ddk->detail["keluarga"]["lembaga_dimiliki"]["rhaudatul_athfal"] ?></td>
			</tr>
			<tr>
				<td>214. Data warga penyandang kebutuhan khusus</td>
				<td><?php echo $ddk->detail["keluarga"]["lembaga_dimiliki"]["madrasah_ibtidaiyah"] ?></td>
			</tr>
			<tr>
				<td>301. a. Sarana kesehatan terdekat</td>
				<td>
					<?php echo $ddk->anggota[0]["pendidikan"] == "SD" ? "SD" : ""; ?>
					<?php echo $ddk->anggota[0]["pendidikan"] == "SMP" ? "SMP" : ""; ?>
					<?php echo $ddk->anggota[0]["pendidikan"] == "SMA" ? "Rumah Bersalin" : ""; ?>
					<?php echo $ddk->anggota[0]["pendidikan"] == "D4" ? "Diploma" : ""; ?>
					<?php echo $ddk->anggota[0]["pendidikan"] == "S41" ? "S1" : ""; ?>
					<?php echo $ddk->anggota[0]["pendidikan"] == "S42" ? "S2" : ""; ?>
					<?php echo $ddk->anggota[0]["pendidikan"] == "S43" ? "S3" : ""; ?>
				</td>
			</tr>
			
			<tr>
				<td>301. b. Jarak ke sarana kesehatan terdekat</td>
				<td><?php echo $ddk->detail["keluarga"]["lembaga_dimiliki"]["madrasah_tsanawiyah"] ?></td>
			</tr>
			<tr>
				<td>301. c. Waktu tempuh untuk menuju ke sarana kesehatan terdekat</td>
				<td><?php echo $ddk->detail["keluarga"]["lembaga_dimiliki"]["madrasah_aliyah"] ?></td>
			</tr>
			<tr>
				<td>302. a. Ketersediaan tenaga kesehatan bidan desa (BDD)</td>
				<td>
					<?php echo $ddk->anggota[0]["status_kawin"] == "kawin" ? "Kawin" : ""; ?>
					<?php echo $ddk->anggota[0]["status_kawin"] == "belum" ? "Belum Kawin" : ""; ?>
				</td>
			</tr>
			<tr>
				<td>Ketersediaan tenaga kesehatan bidan desa (BDD)</td>
				<td>
					<?php echo $ddk->anggota[1]["status_kawin"] == "kawin" ? "Kawin" : ""; ?>
					<?php echo $ddk->anggota[1]["status_kawin"] == "belum" ? "Belum Kawin" : ""; ?>
				</td>
			</tr>
			<tr>
				<td>302. b. Jumlah bidan desa (BDD) di desa</td>
				<td><?php echo $ddk->detail["keluarga"]["lembaga_dimiliki"]["sekolah_tinggi_agama_islam"] ?></td>
			</tr>
			<tr>
				<td>303. b. Jumlah dokter di desa</td>
				<td><?php echo $ddk->detail["keluarga"]["lembaga_dimiliki"]["universitas_swasta_islam"] ?></td>
			</tr>
			<tr>
				<td>304. a. Ketersediaan tenaga kesehatan lainnya selain dokter dan bidan di desa</td>
				<td>
					<?php echo $ddk->anggota[0]["agama"] == "islam" ? "Islam" : ""; ?>
					<?php echo $ddk->anggota[0]["agama"] == "protestan" ? "Protestan" : ""; ?>
				</td>
			</tr>
			
			
			<tr>
				<td>304. b. Jumlah tenaga kesehatan lainnya selain dokter dan bidan</td>
				<td><?php echo $ddk->detail["keluarga"]["lembaga_dimiliki"]["seminari_menengah"] ?></td>
			</tr>
			<tr>
				<td>305. a. Ketersediaan sarana Poskesdes/ Polindes</td>
				<td>
					<?php echo $ddk->anggota[0]["darah"] == "O" ? "O" : ""; ?>
					<?php echo $ddk->anggota[0]["darah"] == "A" ? "A" : ""; ?>
				</td>
			</tr>
			
			<tr>
				<td>305. b. Jarak ke Poskesdes/Polindes terdekat</td>
				<td><?php echo $ddk->detail["keluarga"]["lembaga_dimiliki"]["seminari_tinggi"] ?></td>
			</tr>
			<tr>
				<td>305. c. Waktu tempuh untuk menuju ke Poskesdes/ Polindes terdekat</td>
				<td><?php echo $ddk->detail["keluarga"]["lembaga_dimiliki"]["biara"] ?></td>
			</tr>
			
			<tr>
				<td>305. e.Ketersediaan rumah singgah / rumah tunggu untuk ibu hamil</td>
				<td>
					<?php echo $ddk->anggota[1]["agama"] == "islam" ? "Islam" : ""; ?>
					<?php echo $ddk->anggota[1]["agama"] == "protestan" ? "Protestan" : ""; ?>
				</td>
			</tr>
			
			<tr>
				<td>306. a. Jumlah Posyandu di desa</td>
				<td><?php echo $ddk->detail["keluarga"]["lembaga_dimiliki"]["perguruan_tinggi_swasta_katolik"] ?></td>
			</tr>
			<tr>
				<td>306. b. Jumlah posyandu yang melaksanakan kegiatan / pelayanan sebulan sekali</td>
				<td><?php echo $ddk->detail["keluarga"]["lembaga_dimiliki"]["sekolah_dasar_swasta_katolik"] ?></td>
			</tr>
			<tr>
				<td>306. c. Jumlah Posyandu yang melaksanakan kegiatan / pelayanan 2 bulan sekali atau lebih</td>
				<td><?php echo $ddk->detail["keluarga"]["lembaga_dimiliki"]["sltp_swasta_katolik"] ?></td>
			</tr>
			<tr>
				<td>306. d. Mayoritas warga desa berpartisipasi aktif dalam kegiatan Posyands </td>
				<td>
					<?php echo $ddk->anggota[1]["darah"] == "O" ? "O" : ""; ?>
					<?php echo $ddk->anggota[1]["darah"] == "A" ? "A" : ""; ?>
				</td>
			</tr>
			
			<tr>
				<td>306. e. Sumber pembiayaan kegiatan Posyandu</td>
				<td>
					<?php echo $ddk->anggota[1]["pendidikan"] == "SD" ? "SD" : ""; ?>
					<?php echo $ddk->anggota[1]["pendidikan"] == "SMP" ? "SMP" : ""; ?>
					<?php echo $ddk->anggota[1]["pendidikan"] == "SMA" ? "SMA" : ""; ?>
					<?php echo $ddk->anggota[1]["pendidikan"] == "Diploma" ? "Diploma" : ""; ?>
				</td>
			</tr>
			
			<tr>
				<td>307. a. Jumlah warga yang terdaftar menjadi peserta BPJS Kesehatan / Jaminan Kesehatan Nasional</td>
				<td><?php echo $ddk->detail["keluarga"]["lembaga_dimiliki"]["slta_swasta_katolik"] ?></td>
			</tr>
			<tr>
				<td>307. b. Warga desa memanfaatkan pelayanan BPJS</td>
				<td><?php echo $ddk->anggota[1]["jenis_kelamin"] == "laki" ? "Laki-laki" : "Perempuan"; ?></td>
			</tr>
			
			<tr>
				<td>307. c. Jumlah warga yang terdaftar menjadi peserta Jamkesda<</td>
				<td><?php echo $ddk->anggota[1]["kewarganegaraan"] ?></td>
			</tr>
			
			<tr>
				<td>308. a. Terdapat kejadian kematian ibu melahirkan di desa</td>
				<td>
					<?php echo $ddk->anggota[1]["hubungan"] == "istri" ? "Istri" : ""; ?>
					<?php echo $ddk->anggota[1]["hubungan"] == "suami" ? "Suami" : ""; ?>
				</td>
			</tr>
			
			<tr>
				<td>308. b. Jumlah kejadian kematian ibu melahirkan di desa</td>
				<td><?php echo $ddk->detail["keluarga"]["lembaga_dimiliki"]["lembaga_kursus_keterampilan_swasta_katolik"] ?></td>
			</tr>
			<tr>
				<td>309. a. Terdapat kejadian kematian balita di Desa</td>
				<td>
					<?php echo $ddk->anggota[2]["status_kawin"] == "kawin" ? "Kawin" : ""; ?>
					<?php echo $ddk->anggota[2]["status_kawin"] == "belum" ? "Belum Kawin" : ""; ?>
					
				</td>
			</tr>
			
			<tr>
				<td>309. b. Jumlah kejadian kematian balita di Desa</td>
				<td><?php echo $ddk->detail["keluarga"]["lembaga_dimiliki"]["lembaga_pendidikan_swasta_kristen_protestan"] ?></td>
			</tr>
			<tr>
				<td>310. a. Terdapat kejadian kematian bayi di Desa</td>
				<td>
					<?php echo $ddk->anggota[2]["agama"] == "islam" ? "Islam" : ""; ?>
					<?php echo $ddk->anggota[2]["agama"] == "protestan" ? "Protestan" : ""; ?>
				</td>
			</tr>
			
			<tr>
				<td>310. b. Jumlah kejadian kematian bayi di Desa</td>
				<td><?php echo $ddk->anggota[2]["kewarganegaraan"] ?></td>
			</tr>
			
			<tr>
				<td>311. a. Terdapat kejadian balita gizi buruk di Desa</td>
				<td>
					<?php echo $ddk->anggota[2]["darah"] == "O" ? "O" : ""; ?>
					<?php echo $ddk->anggota[2]["darah"] == "A" ? "A" : ""; ?>
				</td>
			</tr>
				<tr>
				<td>311. b. Jumlah kejadian balita gizi buruk di Desa</td>
				<td><?php echo $ddk->anggota[2]["pekerjaan"] ?></td>
			</tr>
			
				<tr>
				<td>312. a. Terdapat kejadian luar biasa di Desa</td>
				<td>
					<?php echo $ddk->anggota[2]["pendidikan"] == "SD" ? "SD" : ""; ?>
					<?php echo $ddk->anggota[2]["pendidikan"] == "SMP" ? "SMP" : ""; ?>
				</td>
			</tr>
				<tr>
				<td>312. b. Penyakit yang menyebabkan kejadian luar biasa</td>
				<td><?php echo $ddk->anggota[2]["nama_ortu"] ?></td>
			</tr>
			
			<tr>
				<td>313. a. Jumlah SD /MI di desa</td>
				<td><?php echo $ddk->detail["keluarga"]["lembaga_dimiliki"]["lembaga_pendidikan_swasta_hindu"] ?></td>
			</tr>
			<tr>
				<td>313. b. Jumlah tenaga pengajar di SD / MI</td>
				<td><?php echo $ddk->detail["keluarga"]["lembaga_dimiliki"]["lembaga_pendidikan_swasta_budha"] ?></td>
			</tr>
			<tr>
				<td>313. c. Jarak ke SD / MI
terdekat</td>
				<td><?php echo $ddk->detail["keluarga"]["lembaga_dimiliki"]["lembaga_pendidikan_swasta_konghucu"] ?></td>
			</tr>
			<tr>
				<td>313. d. Waktu tempuh untuk menuju ke SD / MI</td>
				<td><?php echo $ddk->detail["keluarga"]["lembaga_dimiliki"]["kursus_bahasa"] ?></td>
			</tr>
			<tr>
				<td>314. a. Jumlah SMP / MTs di desa</td>
				<td><?php echo $ddk->detail["keluarga"]["lembaga_dimiliki"]["kursus_menjahit"] ?></td>
			</tr>
			<tr>
				<td>314. b. Jumlah tenaga pengajar di SMP/MTs</td>
				<td><?php echo $ddk->detail["keluarga"]["lembaga_dimiliki"]["kursus_montir"] ?></td>
			</tr>
			<tr>
				<td>314. c. Jarak ke SMP / MTs terdekat</td>
				<td><?php echo $ddk->detail["keluarga"]["lembaga_dimiliki"]["kursus_komputer"] ?></td>
			</tr>
			<tr>
				<td>314. d. Waktu tempuh untuk
menuju ke SMP / MTs terdeka</td>
				<td><?php echo $ddk->detail["keluarga"]["lembaga_dimiliki"]["kursus_mengemudi"] ?></td>
			</tr>
			<tr>
				<td>315. a. Jumlah SMU / MA/ SMK di desa</td>
				<td><?php echo $ddk->anggota[3]["tempat_lahir"] ?></td>
			</tr>
			
			<tr>
				<td>315. b. Jumlah tenaga pengajar di SMP/MTs</td>
				<td><?php echo $ddk->anggota[3]["tanggal_lahir"] ?></td>
			</tr>
			<tr>
				<td>Jumlah tenaga pengajar di SMP/MTs</td>
				<td><?php echo $ddk->anggota[4]["tanggal_lahir"] ?></td>
			</tr>
			<tr>
				<td>315. c. Jarak ke SMU / MA / SMK  terdekat</td>
				<td><?php echo $ddk->anggota[3]["tanggal_pencatatan"] ?></td>
			</tr>
			<tr>
				<td>315. d. Waktu tempuh untuk menuju ke SMU / MA / SMK terdekat</td>
				<td><?php echo $ddk->anggota[3]["kewarganegaraan"] ?></td>
			</tr>
			
			<tr>
				<td>316. Tingkat pendidikan sebagian besar penduduk Desa</td>
				<td>
					<?php echo $ddk->anggota[2]["kb"] == "Pil" ? "Pil" : ""; ?>
					<?php echo $ddk->anggota[2]["kb"] == "Spiral" ? "Spiral" : ""; ?>
					<?php echo $ddk->anggota[2]["kb"] == "Suntik" ? "Suntik" : ""; ?>
					<?php echo $ddk->anggota[2]["kb"] == "Susuk" ? "Susuk" : ""; ?>
				</td>
			</tr>
				
			<tr>
				<td>317. a. Terdapat anak usia SD yang putus atau tidak sekolah di desa</td>
				<td><?php echo $ddk->anggota[2]["jenis_kelamin"] == "laki" ? "Laki-laki" : "Perempuan"; ?></td>
			</tr>
			
			<tr>
				<td>317. b. Jumlah anak usia SD yang putus atau tidak sekolah di desa</td>
				<td><?php echo $ddk->anggota[3]["pekerjaan"] ?></td>
			</tr>
			
			<tr>
				<td>318. a. Terdapat anak usia SMP yang putus atau tidak sekolah di desa</td>
				<td>
					<?php echo $ddk->anggota[2]["hubungan"] == "istri" ? "Istri" : ""; ?>
					<?php echo $ddk->anggota[2]["hubungan"] == "suami" ? "Suami" : ""; ?>
				</td>
			</tr>
			
			<tr>
				<td>318. b. Jumlah anak usia SMP yang putus atau tidak sekolah</td>
				<td><?php echo $ddk->anggota[3]["nama_ortu"] ?></td>
			</tr>
			
			<tr>
				<td>319. a. Ketersediaan Pos PAUD di desa</td>
				<td><?php echo $ddk->anggota[3]["jenis_kelamin"] == "laki" ? "Laki-laki" : "Perempuan"; ?></td>
			</tr>
			
			<tr>
				<td>319. b. Jumlah Pos PAUD</td>
				<td><?php echo $ddk->detail["keluarga"]["lembaga_dimiliki"]["kursus_satpam"] ?></td>
			</tr>
			<tr>
				<td>319. c. Jarak ke Pos PAUD
terdekat</td>
				<td><?php echo $ddk->detail["keluarga"]["lembaga_dimiliki"]["kursus_bela_diri"] ?></td>
			</tr>
			<tr>
				<td>319. d. Jumlah guru PAUD</td>
				<td><?php echo $ddk->detail["keluarga"]["jenis_ternak"]["buaya"] ?></td>
			</tr>
			<tr>
				<td>320. Ketersediaan Pusat Kegiatan Belajar Masyarakat Kejar Paket A, B, dan C di desa</td>
				<td>
					<?php echo $ddk->anggota[3]["hubungan"] == "istri" ? "Istri" : ""; ?>
					<?php echo $ddk->anggota[3]["hubungan"] == "suami" ? "Suami" : ""; ?>
				</td>
			</tr>
			
			<tr>
				<td>321. a. Jumlah pusat kursus
atau pusat pelatihan keterampilan khusus di desa</td>
				<td><?php echo $ddk->anggota[4]["tempat_lahir"] ?></td>
			</tr>
			<tr>
				<td>321. b. Jarak tempuh menuju
pusat kursus atau pusat pelatihan keterampilan khusus ke terdekat</td>
				<td><?php echo $ddk->anggota[4]["pekerjaan"] ?></td>
			</tr>
			<tr>
				<td>Jumlah pusat kursus
atau pusat pelatihan keterampilan khusus di desa</td>
				<td><?php echo $ddk->anggota[4]["pekerjaan"] ?></td>
			</tr>
			<tr>
				<td>322. a. Ketersediaan fasilitas perpustakaan desa / taman bacaan masyarakat di desa</td>
				<td>
					<?php echo $ddk->anggota[3]["status_kawin"] == "kawin" ? "Kawin" : ""; ?>
					<?php echo $ddk->anggota[3]["status_kawin"] == "belum" ? "Belum Kawin" : ""; ?>
				</td>
			</tr>
			
			<tr>
				<td>322. b. Pemanfaatan fasilitas
perpustakaan desa / taman bacaan masyarakat</td>
				<td>
					<?php echo $ddk->anggota[3]["agama"] == "islam" ? "Yoi" : ""; ?>
					<?php echo $ddk->anggota[3]["agama"] == "protestan" ? "Yai" : ""; ?>
				</td>
			</tr>
			
			<tr>
				<td>323. a. Kebiasaan gotong royong warga di desa</td>
				<td>
					<?php echo $ddk->anggota[3]["darah"] == "O" ? "O" : ""; ?>
					<?php echo $ddk->anggota[3]["darah"] == "A" ? "A" : ""; ?>
				</td>
			</tr>
			<tr>
				<td>323. b. Frekuensi kegiatan
gotong royong</td>
				<td><?php echo $ddk->anggota[4]["kewarganegaraan"] ?></td>
			</tr>
			
			<tr>
				<td>324. Ketersediaan ruang publik terbuka bagi warga tanpa perlu membayar</td>
				<td>
					<?php echo $ddk->anggota[3]["pendidikan"] == "SD" ? "SD" : ""; ?>
					<?php echo $ddk->anggota[3]["pendidikan"] == "SMP" ? "SMP" : ""; ?>
				</td>
			</tr>
			<tr>
				<td>325. a. Karang Taruna</td>
				<td>
					<?php echo $ddk->anggota[3]["kb"] == "Pil" ? "Pil" : ""; ?>
					<?php echo $ddk->anggota[3]["kb"] == "Spiral" ? "Spiral" : ""; ?>
				</td>
			</tr>
			<tr>
				<td>325. b. PKK</td>
				<td><?php echo $ddk->anggota[4]["jenis_kelamin"] == "laki" ? "Laki-laki" : "Perempuan"; ?></td>
			</tr>
			<tr>
				<td>325. c. Perkumpulan agama</td>
				<td>
					<?php echo $ddk->anggota[4]["hubungan"] == "istri" ? "Istri" : ""; ?>
					<?php echo $ddk->anggota[4]["hubungan"] == "suami" ? "Suami" : ""; ?>
				</td>
			</tr>
			<tr>
				<td>325.d. Panti asuhan</td>
				<td>
					<?php echo $ddk->anggota[4]["status_kawin"] == "kawin" ? "Kawin" : ""; ?>
					<?php echo $ddk->anggota[4]["status_kawin"] == "belum" ? "Belum Kawin" : ""; ?>
				</td>
			</tr>
			<tr>
				<td>325. e. Kelompok arisan</td>
				<td>
					<?php echo $ddk->anggota[4]["agama"] == "islam" ? "Ie" : ""; ?>
					<?php echo $ddk->anggota[4]["agama"] == "protestan" ? "Pron" : ""; ?>
					
				</td>
			</tr>
			<tr>
				<td>325. f. Kelompok/organisasi/lembaga tani</td>
				<td>
					<?php echo $ddk->anggota[4]["darah"] == "O" ? "Ya" : ""; ?>
					<?php echo $ddk->anggota[4]["darah"] == "A" ? "Tidak" : ""; ?>
				</td>
			</tr>
			<tr>
				<td>325. g. Kelompok/organisasi/lembaga nelayan</td>
				<td>
					<?php echo $ddk->anggota[4]["pendidikan"] == "SD" ? "SD" : ""; ?>
					<?php echo $ddk->anggota[4]["pendidikan"] == "SMP" ? "SMP" : ""; ?>
				</td>
			</tr>
			<tr>
				<td>325. h. Kelompok/ organisasi/lembaga usaha ternak</td>
				<td>
					<?php echo $ddk->anggota[4]["kb"] == "Pil" ? "Pil" : ""; ?>
					<?php echo $ddk->anggota[4]["kb"] == "Spiral" ? "Spiral" : ""; ?>
				</td>
			</tr>
			<tr>
				<td>325. i. Kelompok/organisasi/lembaga pengrajin</td>
				<td><?php echo $ddk->anggota[4]["nama_ortu"] == "laki" ? "Ya" : "Tidak"; ?></td>
				</td>
			</tr>
			<tr>
				<td>325. j. Kelompok/ organisasi/lembaga khusus wanita</td>
				<td><?php echo $ddk->detail["keluarga"]["pemanfaatan_air"]["usaha_perikanan"] == "laki" ? "Ya" : "Tidak"; ?></td>
			</tr>
			<tr>
				<td>325. k. Kelompok/ organisasi/lembaga lainnya</td>
				<td><?php echo $ddk->detail["keluarga"]["pemanfaatan_air"]["air_minum_air_baku"] == "laki" ? "Ya" : "Tidak"; ?></td>
			</tr>
			<tr>
				<td>326. a. Warga desa mengikuti musyawarah Desa</td>
				<td><?php echo $ddk->detail["keluarga"]["pemanfaatan_air"]["cuci_dan_mandi"] == "laki" ? "Ya" : "Tidak"; ?></td>
			</tr>
			<tr>
				<td>326. b. Frekuensi musyawarah Desa selama setahun terakhir</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_lain"]["perahu"] == "laki" ? "Ya" : "Tidak"; ?></td>
			</tr>
			<tr>
				<td>326. c. Kelompok perempuan
mengikuti musyawarah desa</td>
				<td><?php echo $ddk->detail["keluarga"]["pemanfaatan_air"]["irigasi"] == "laki" ? "Ya" : "Tidak"; ?></td>
			</tr>
			<tr>
				<td>327. a. Jumlah fasilitas /
lapangan olah raga di
Desa</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_lain"]["kapal_barang"] == "laki" ? "Ya" : "Tidak"; ?></td>
			</tr>
			<tr>
				<td>327. c. Jumlah kelompok
kegiatan olah raga</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_lain"]["kapal_penumpang"] == "laki" ? "Ya" : "Tidak"; ?></td>
			</tr>
			<tr>
				<td>328. Warga desa terdiri dari beberapa suku / etnis</td>
				<td><?php echo $ddk->detail["keluarga"]["pemanfaatan_air"]["pembangkit_listrik"] == "laki" ? "Ya" : "Tidak"; ?></td>
			</tr>
			<tr>
				<td>329. Bahasa yang digunakan
untuk komunikasi sehari- hari di desa</td>
				<td><?php echo $ddk->detail["keluarga"]["pemanfaatan_air"]["prasarana_transportasi"] == "laki" ? "Ya" : "Tidak"; ?></td>
			</tr>
			<tr>
				<td>330. a. Warga yang menganut
agama Islam</td>
				<td><?php echo $ddk->detail["keluarga"]["pemanfaatan_air"]["sumber_air_panas"] == "laki" ? "Ya" : "Tidak"; ?></td>
			</tr>
			<tr>
				<td>330. b. Warga yang menganut agama Kristen</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_tanah"]["tidak"] == "laki" ? "Ya" : "Tidak"; ?></td>
			</tr>
			<tr>
				<td>30. c. Warga yang menganut
agama Katolik</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_tanah"][1] == "laki" ? "Ya" : "Tidak"; ?></td>
			</tr>
			<tr>
				<td>330. d. Warga yang menganut agama Buddha</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_tanah"][2] == "laki" ? "Ya" : "Tidak"; ?></td>
			</tr>
			<tr>
				<td>330. e. Warga yang menganut
agama Hindu</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_tanah"][3] ?></td>
			</tr>
			<tr>
				<td>330. f. Warga yang menganut agama Konghucu</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_tanah"][4] == "laki" ? "Ya" : "Tidak"; ?></td>
			</tr>
			<tr>
				<td>330. g. Warga yang menganut
agama lain</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_tanah"][5] ?></td>
			</tr>
			<tr>
				<td>331. a. Terdapat masjid di desa</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_tanah"][6] ?></td>
			</tr>
			<tr>
				<td>331. b. Terdapat gereja Kristen di desa</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_tanah"][7] ?></td>
			</tr>
			<tr>
				<td>331. c. Terdapat gereja Katolik
di desa</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_tanah"][8] ?></td>
			</tr>
			<tr>
				<td>331. d. Terdapat wihara di desa</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_tanah"][9] ?></td>
			</tr>
			<tr>
				<td>331. e. Terdapat pura di desa</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_tanah"][10] ?></td>
			</tr>
			<tr>
				<td>331. f. Terdapat litang / kelenteng</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_tanah"][11] ?></td>
			</tr>
			<tr>
				<td>332. Agama  / kepercayaan mayoritas yang dianut warga desa</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_transportasi"]["motor"] ?></td>
			</tr>
			<tr>
				<td>333. a. Terdapat kelompok seni adat dan budaya di Desa</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_transportasi"]["becak"] ?></td>
			</tr>
			<tr>
				<td>333. b. Frekuensi kegiatan seni
adat dan budaya diselenggarakan dalam setahun terakhir</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_lain"]["kapal_pesiar"] ?></td>
			</tr>
			<tr>
				<td>333. c. Jumlah kelompok seni adat dan budaya di desa</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_lain"]["helikopter"] ?></td>
			</tr>
			<tr>
				<td>334. a. Mayoritas warga di
Desa menghadiri perayaan adat budaya tertentu
untuk acara kelahiran/td>
				<td><?php echo $ddk->detail["keluarga"]["aset_transportasi"]["cidemo"] ?></td>
			</tr>
			<tr>
				<td>334. b. Mayoritas warga di
Desa menghadiri perayaan adat budaya tertentu
untuk acara kematian</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_transportasi"]["perahu"] ?></td>
			</tr>
			<tr>
				<td>334. c. Mayoritas warga di Desa menghadiri perayaan adat budaya tertentu untuk acara perkawinan</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_transportasi"]["tongkang"] ?></td>
			</tr>
			<tr>
				<td>334. d. Mayoritas warga di
Desa menghadiri perayaan adat budaya tertentu untuk acara / hari besar lainnya</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_transportasi"]["bus"] ?></td>
			</tr>
			<tr>
				<td>335. Terdapat kegiatan pembangunan dan pemeliharaan pos keamanan lingkungan oleh warga</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_transportasi"]["sepeda"] ?></td>
			</tr>
			<tr>
				<td>336. Inisiatif dan partisipasi warga dalam pengaktifan sistem keamanan lingkungan</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_transportasi"]["bajaj"] ?></td>
			</tr>
			<tr>
				<td>337. a. Terdapat konflik di desa</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_produksi"]["padi"] ?></td>
			</tr>
						<tr>
				<td>337. b1. Jumlah kejadian Konflik antarkelompok masyarakat</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_lain"]["pesawat_terbang"] ?></td>
			</tr>
			<tr>
				<td>337. b2. Jumlah kejadian Konflik kelompok masyarakat antardesa</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_lain"]["ternak_besar"] ?></td>
			</tr>
			<tr>
				<td>337. b3. Jumlah kejadian Konflik antara kelompok masyarakat dengan aparat keamanan</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_lain"]["ternak_kecil"] ?></td>
			</tr>
			<tr>
				<td>337. b4. Jumlah kejadian Konflik antara kelompok masyarakat dengan aparat pemerintah</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_lain"]["emas_berlian"] ?></td>
			</tr>
			<tr>
				<td>337. b5. Jumlah kejadian Konflik antarpelajar/mahasiswa/pemuda</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_lain"]["tabungan_bank"] ?></td>
			</tr>
			<tr>
				<td>337. b6. Jumlah kejadian Konflik antarsuku</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_lain"]["surat_berharga"] ?></td>
			</tr>
			<tr>
				<td>337. b7. Jumlah kejadian Konflik antaragama</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_lain"]["deposito"] ?></td>
			</tr>
			<tr>
				<td>337. b8. Jumlah kejadian Konflik lainnya</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_lain"]["tanah"] ?></td>
			</tr>
						<tr>
				<td>338. a. Penyelesaian Konflik secara damai</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_produksi"]["traktor"] ?></td>
			</tr>
			<tr>
				<td>338. B1. Peranan aparat keamanan menjadi mediator / penengah dalam penyelesaian Konflik massal</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_produksi"]["pertanian"] ?></td>
			</tr>
			<tr>
				<td>338. B2. Peranan aparat
pemerintah menjadi mediator / penengah dalam penyelesaian Konflik massal</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_produksi"]["kapal"] ?></td>
			</tr>
			<tr>
				<td>338. B3. Peranan tokoh masyarakat menjadi mediator / penengah dalam penyelesaian Konflik massal</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_produksi"]["perikanan"] ?></td>
			</tr>
			<tr>
				<td>338. B4. Peranan tokoh agama menjadi mediator / penengah dalam penyelesaian Konflik massal</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_produksi"]["peternakan"] ?></td>
			</tr>
			<tr>
				<td>338. B5. Peranan tokoh lainnya menjadi mediator / penengah dalam penyelesaian</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_produksi"]["perkebunan"] ?></td>
			</tr>
			<tr>
				<td>338. B6. Tidak ada yang menjadi mediator / penengah upaya dalam penyelesaian Konflik masal</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_produksi"]["hutan"] ?></td>
			</tr>
			<tr>
				<td>339. Penyelesaian konflik di desa oleh lembaga lokal sesuai adat budaya tertentu di desa</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_produksi"]["pertambangan"] ?></td>
			</tr>
			<tr>
				<td>340. a1. Terdapat tindak kejahatan pencurian</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_produksi"]["kerajinan"] ?></td>
			</tr>
			<tr>
				<td>340. a2. Terdapat tindak kejahatan penipuan/ penggelapan</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_produksi"]["gas"] ?></td>
			</tr>
						<tr>
				<td>340. a3. Terdapat tindak kejahatan penganiayaan</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_perumahan"]["dinding"]["tembok"] ?></td>
			</tr>
			<tr>
				<td>340. a4. Terdapat tindak kejahatan pembakaran</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_perumahan"]["dinding"]["kayu"] ?></td>
			</tr>
			<tr>
				<td>340. a5. Terdapat tindak kejahatan perkosaan</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_perumahan"]["dinding"]["bambu"] ?></td>
			</tr>
			<tr>
				<td>340. a6. Terdapat tindak ["keluarga"]["aset_lain"]["bangunan"] penyalahgunaan / peredaran narkoba</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_perumahan"]["dinding"]["tanah_liat"] ?></td>
			</tr>
			<tr>
				<td>340. a7. Terdapat tindak kejahatan perjudian</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_perumahan"]["dinding"]["pelepah_kelapa"] ?></td>
			</tr>
			<tr>
				<td>340. a8. Terdapat tindak kejahatan pembunuhan</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_perumahan"]["dinding"]["dedaunan"] ?></td>
			</tr>
			<tr>
				<td>340. a9. Terdapat tindak kejahatan perdagangan orang</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_perumahan"]["lantai"]["keramik"] ?></td>
			</tr>
						<tr>
				<td>342. a. Jumlah penyandang masalah kesejahteraan sosial anak jalanan</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_perumahan"]["lantai"]["kayu"] ?></td>
			</tr>
			<tr>
				<td>342. b. Jumlah penyandang masalah kesejahteraan sosial anak terlantar</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_perumahan"]["lantai"]["tanah"] ?></td>
			</tr>
			<tr>
				<td>342. c. Jumlah penyandang masalah kesejahteraan sosial korban kekerasan</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_perumahan"]["atap"]["genteng"] ?></td>
			</tr>
			<tr>
				<td>342. d. Jumlah penyandang masalah kesejahteraan sosial lanjut usia terlantar</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_perumahan"]["atap"]["seng"] ?></td>
			</tr>
			<tr>
				<td>342. e. Jumlah penyandang masalah kesejahteraan sosial Korban penyalahgunaan NAPZA</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_perumahan"]["atap"]["asbes"] ?></td>
			</tr>
			<tr>
				<td>342. f. Jumlah penyandang masalah kesejahteraan sosial pekerja migran terlantar</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_perumahan"]["atap"]["beton"] ?></td>
			</tr>
			<tr>
				<td>342. g. Jumlah penyandang masalah kesejahteraan sosial gelandangan / pengemis</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_perumahan"]["atap"]["bambu"] ?></td>
			</tr>
			<tr>
				<td>342. h. Jumlah penyandang masalah kesejahteraan sosial PSK</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_perumahan"]["atap"]["kayu"] ?></td>
			</tr>
						<tr>
				<td>343. Jumlah kejadian bunuh diri di desa</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_lain"]["industri_kecil"] ?></td>
			</tr>

			<tr>
				<td>344. a. Air minum warga di desa bersumber dari air kemasan</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_perumahan"]["atap"]["daun_lontar"] ?></td>
			</tr>
			<tr>
				<td>344. c. Air minum warga di desa bersumber dari air ledeng tanpa meteran</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_perumahan"]["atap"]["daun_ilalang"] ?></td>
			</tr>
			<tr>
				<td>344. b. Air minum warga di desa bersumber dari air ledeng dengan meteran (PAM/PDAM)</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_lain"]["elektronik"] ?></td>
			</tr>
			<tr>
				<td>344. d. Air minum warga di desa bersumber dari sumur bor / pompa</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_lain"]["motor"] ?></td>
			</tr>
			<tr>
				<td>344. e. Air minum warga di desa bersumber dari sumur</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_lain"]["mobil"] ?></td>
			</tr>	
			<tr>
				<td>344. f. Air minum warga di desa bersumber dari mata air</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_lain"]["perikanan"] ?></td>
			</tr>
			<tr>
				<td>344. g. Air minum warga di desa bersumber dari sungai / danau / kolam</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_lain"]["peternakan"] ?></td>
			</tr>
			<tr>
				<td>344. h. Air minum warga di desa bersumber dari air hujan</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_lain"]["perkebunan"] ?></td>
			</tr>
			<tr>
				<td>344. i. Air minum warga di desa bersumber dari lainnya</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_lain"]["pasar_swalayan"] ?></td>
			</tr>
			<tr>
				<td>345. Cara warga Desa memperoleh air minum</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_lain"]["di_pasar_swalayan"] ?></td>
			</tr>
			<tr>
				<td>346. a. Air untuk mandi / cuci warga di desa bersumber dari air ledeng dengan meteran (PAM/PDAM)</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_lain"]["di_pasar_tradisional"] ?></td>
			</tr>
			<tr>
				<td>346. b. Air untuk mandi / cuci warga di desa bersumber dari air ledeng tanpa meteran</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_lain"]["di_pasar_desa"] ?></td>
			</tr>
			<tr>
				<td>346. c. Air untuk mandi / cuci warga di desa bersumber dari sumur bor / pompa</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_lain"]["transportasi"] ?></td>
			</tr>
			<tr>
				<td>346. d. Air untuk mandi / cuci warga di desa bersumber dari sumur</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_lain"]["saham_perusahaan"] ?></td>
			</tr>
			<tr>
				<td>346. e. Air untuk mandi / cuci warga di desa bersumber dari mata air</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_lain"]["pelanggan_telkom"] ?></td>
			</tr>
			<tr>
				<td>346. f. Air untuk mandi / cuci warga di desa bersumber dari sungai / danau / kolam</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_lain"]["hp_gsm"] ?></td>
			</tr>
			<tr>
				<td>346. g. Air untuk mandi / cuci warga di desa bersumber dari air hujan</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_lain"]["hp_cdma"] ?></td>
			</tr>
			<tr>
				<td>346. h. Air untuk mandi / cuci warga di desa bersumber dan lainnya</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_lain"]["wartel"] ?></td>
			</tr>
			<tr>
				<td>347. Warga BAB menggunakan jamban</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_lain"]["parabola"] ?></td>
			</tr>
			<tr>
				<td>348. Warga desa membuang sampah</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_lain"]["koran_majalah"] ?></td>
			</tr>
			<tr>
				<td>349. Ketersediaan TPS (Tempat Penampungan Sampah Sementara)</td>
				<td><?php echo $ddk->detail["keluarga"]["kualitas_ibu_hamil"]["puskesmas"] ?></td>
			</tr>
			<tr>
				<td>350. Kebiasaan warga desa membuang limbah cair atau air kotor</td>
				<td><?php echo $ddk->detail["keluarga"]["kualitas_ibu_hamil"]["rumah_sakit"] ?></td>
			</tr>
						<tr>
				<td>351. a. Jumlah keluarga di desa yang menggunakan
sumber listrik dari PLN</td>
				<td><?php echo $ddk->detail["keluarga"]["kualitas_persalinan"]["tempat"]["rumah_sendiri"] ?></td>
			</tr>
			<tr>
				<td>351. b. Jumlah keluarga di desa yang menggunakan sumber listrik dari non- PLN</td>
				<td><?php echo $ddk->detail["keluarga"]["kualitas_persalinan"]["pertolongan"]["dokter"] ?></td>
			</tr>
			<tr>
				<td>352. Jumlah keluarga yang belum teraliri listrik</td>
				<td><?php echo $ddk->detail["keluarga"]["kualitas_persalinan"]["pertolongan"]["bidan"] ?></td>
			</tr>
			<tr>
				<td>353. Terdapat sumber energi terbarukan di desa</td>
				<td><?php echo $ddk->detail["keluarga"]["kualitas_ibu_hamil"]["dokter_praktek"] ?></td>
			</tr>
			<tr>
				<td>354. Sinyal telepon seluler / handphone di desa</td>
				<td><?php echo $ddk->detail["keluarga"]["kualitas_ibu_hamil"]["bidan_praktek"] ?></td>
			</tr>
			<tr>
				<td>355. a. Operator / provider telepon seluler Telkomsel dapat menerima sinyal</td>
				<td><?php echo $ddk->detail["keluarga"]["kualitas_ibu_hamil"]["dukun_terlatih"] ?></td>
			</tr>
			<tr>
				<td>355. b. Operator / provider telepon seluler Indosat dapat menerima sinyal</td>
				<td><?php echo $ddk->detail["keluarga"]["kualitas_ibu_hamil"]["tidak_periksa"] ?></td>
			</tr>
			<tr>
				<td>355. c. Operator / provider telepon seluler XL dapat menerima sinyal</td>
				<td><?php echo $ddk->detail["keluarga"]["kualitas_ibu_hamil"]["yang_meninggal"] ?></td>
			</tr>
			<tr>
				<td>355. d. Operator / provider telepon seluler lainnya dapat menerima sinyal</td>
				<td><?php echo $ddk->detail["keluarga"]["kualitas_ibu_hamil"]["melahirkan"] ?></td>
			</tr>
			<tr>
				<td>356. Siaran program televisi saluran TVRI Nasional dan TVRI daerah</td>
				<td><?php echo $ddk->detail["keluarga"]["kualitas_ibu_hamil"]["nifas_sakit"] ?></td>
			</tr>
			<tr>
				<td>357. Siaran program televisi saluran swasta</td>
				<td><?php echo $ddk->detail["keluarga"]["kualitas_ibu_hamil"]["kematian_nifas"] ?></td>
			</tr>
			<tr>
				<td>358. Siaran program televisi saluran luar negeri</td>
				<td><?php echo $ddk->detail["keluarga"]["kualitas_ibu_hamil"]["nifas_sehat"] ?></td>
			</tr>
			<tr>
				<td>359. Terdapat fasilitas internet di kantor kepala Desa</td>
				<td><?php echo $ddk->detail["keluarga"]["kualitas_ibu_hamil"]["kematian_melahirkan"] ?></td>
			</tr>
			<tr>
				<td>360. Warga Desa memiliki akses internet</td>
				<td><?php echo $ddk->detail["keluarga"]["kualitas_bayi"]["keguguran"] ?></td>
			</tr>
			<tr>
				<td>361. a. Papan informasi</td>
				<td><?php echo $ddk->detail["keluarga"]["kualitas_bayi"]["lahir_normal"] ?></td>
			</tr>
			<tr>
				<td>361. b. Website</td>
				<td><?php echo $ddk->detail["keluarga"]["kualitas_bayi"]["lahir_cacat"] ?></td>
			</tr>
			<tr>
				<td>361. c. Sarana informasi ainnya</td>
				<td><?php echo $ddk->detail["keluarga"]["kualitas_bayi"]["lahir_mati"] ?></td>
			</tr></tr>
				<tr>
				<td colspan="2">IV. DIMENSI EKONOMI</td>
			</tr>
			<tr>
				<td>401. Sumber penghasilan utama penduduk desa</td>
				<td><?php echo $ddk->detail["keluarga"]["kualitas_bayi"]["lahir_berat_kurang"] ?></td>
			</tr>
			<tr>
				<td>402. Terdapat produk unggulan di desa</td>
				<td><?php echo $ddk->detail["keluarga"]["kualitas_bayi"]["lahir_berat_lebih"] ?></td>
			</tr>
			<tr>
				<td>403. Perubahan produk komoditi pertanian</td>
				<td><?php echo $ddk->detail["keluarga"]["kualitas_bayi"]["kelainan"] ?></td>
			</tr>
			<tr>
				<td>404. a. Terdapat produksi hasil tangkapan laut</td>
				<td><?php echo $ddk->detail["keluarga"]["kualitas_persalinan"]["tempat"]["rumah_sakit_umum"] ?></td>
			</tr>
			<tr>
				<td>404. b. Produksi produksi hasil tangkapan lautn</td>
				<td><?php echo $ddk->detail["keluarga"]["kualitas_persalinan"]["tempat"]["rumah_bersalin"] ?></td>
			</tr>
				<tr>
				<td colspan="2">IV. DIMENSI EKONOMI</td>
			</tr>
			<tr>
				<td>401. Sumber penghasilan utama penduduk desa</td>
				<td><?php echo $ddk->detail["keluarga"]["kualitas_bayi"]["lahir_berat_kurang"] ?></td>
			</tr>
			<tr>
				<td>402. Terdapat produk unggulan di desa</td>
				<td><?php echo $ddk->detail["keluarga"]["kualitas_bayi"]["lahir_berat_lebih"] ?></td>
			</tr>
			<tr>
				<td>403. Perubahan produk komoditi pertanian</td>
				<td><?php echo $ddk->detail["keluarga"]["kualitas_bayi"]["kelainan"] ?></td>
			</tr>
			<tr>
				<td>404. a. Terdapat produksi hasil tangkapan laut</td>
				<td><?php echo $ddk->detail["keluarga"]["kualitas_persalinan"]["tempat"]["rumah_sakit_umum"] ?></td>
			</tr>
			<tr>
				<td>404. b. Produksi produksi hasil tangkapan lautn</td>
				<td><?php echo $ddk->detail["keluarga"]["kualitas_persalinan"]["tempat"]["rumah_bersalin"] ?></td>
			</tr>
						<tr>
				<td>405. a. Jumlah industri mikro dan kecil di desa</td>
				<td><?php echo $ddk->detail["keluarga"]["kualitas_persalinan"]["pertolongan"]["perawat"] ?></td>
			</tr>
			<tr>
				<td>405. b. Jumlah industri menengah di desa</td>
				<td><?php echo $ddk->detail["keluarga"]["kualitas_persalinan"]["pertolongan"]["dukun_bersalin"] ?></td>
			</tr>
			<tr>
				<td>406. a. Ketersediaan kelompok pertokoan di desa</td>
				<td><?php echo $ddk->detail["keluarga"]["kualitas_persalinan"]["tempat"]["puskesmas"] ?></td>
			</tr>
			<tr>
				<td>406. b. Jarak ke kelompok pertokoan terdekat</td>
				<td><?php echo $ddk->detail["keluarga"]["kualitas_persalinan"]["pertolongan"]["keluarga"] ?></td>
			</tr>
			<tr>
				<td>407. Jumlah pasar dengan bangunan permanen</td>
				<td><?php echo $ddk->detail["keluarga"]["imunisasi"]["dpt1"] ?></td>
			</tr>
			<tr>
				<td>408. Jumlah pasar dengan bangunan semi permanen</td>
				<td><?php echo $ddk->detail["keluarga"]["imunisasi"]["bcg"] ?></td>
			</tr>
			<tr>
				<td>409. a. Terdapat pasar tanpa bangunan di desa</td>
				<td><?php echo $ddk->detail["keluarga"]["kualitas_persalinan"]["tempat"]["polindes"] ?></td>
			</tr>
			<tr>
				<td>409. b. Jumlah pasar tanpa bangunan di desa</td>
				<td><?php echo $ddk->detail["keluarga"]["imunisasi"]["polio1"] ?></td>
			</tr>
			<tr>
				<td>410. Jumlah toko / warung kelontong di desa</td>
				<td><?php echo $ddk->detail["keluarga"]["imunisasi"]["dpt2"] ?></td>
			</tr>
			<tr>
				<td>411. Terdapat warung / kedai makanan dan minuman di desa</td>
				<td><?php echo $ddk->detail["keluarga"]["kualitas_persalinan"]["tempat"]["balai_kesehatan_ibu_anak"] ?></td>
			</tr>
			<tr>
				<td>412. a. Terdapat hotel / penginapan di desa</td>
				<td><?php echo $ddk->detail["keluarga"]["kualitas_persalinan"]["tempat"]["rumah_praktek_bidan"] ?></td>
			</tr>
			<tr>
				<td>412. b. Jarak ke hotel / penginapan terdekat</td>
				<td><?php echo $ddk->detail["keluarga"]["imunisasi"]["polio2"] ?></td>
			</tr>
			<tr>
				<td>412. c. Waktu tempuh menuju hotel / penginapan terdekat</td>
				<td><?php echo $ddk->detail["keluarga"]["imunisasi"]["polio3"] ?></td>
			</tr>
			<tr>
				<td>413. Terdapat kantor pos / pos pembantu / rumah pos / pos keliling di desa</td>
				<td><?php echo $ddk->detail["keluarga"]["kualitas_persalinan"]["tempat"]["tempat_praktek_dokter"] ?></td>
			</tr>
			<tr>
				<td>414. a. Terdapat pelayanan jasa ekspedisi di desa</td>
				<td><?php echo $ddk->detail["keluarga"]["kualitas_persalinan"]["tempat"]["rumah_dukun"] ?></td>
			</tr>
			
			<tr>
				<td>415. Terdapat bank umum pemerintah di desa</td>
				<td><?php echo $ddk->detail["keluarga"]["imunisasi"]["dpt3"] ?></td>
			</tr>
			<tr>
				<td>416. Terdapat bank swasta di desa</td>
				<td><?php echo $ddk->detail["keluarga"]["imunisasi"]["campak"] ?></td>
			</tr>
			<tr>
				<td>417. Terdapat BPR di desa</td>
				<td><?php echo $ddk->detail["keluarga"]["imunisasi"]["cacar"] ?></td>
			</tr>
			<tr>
				<td>418. a. Terdapat fasilitas kredit berupa KUR</td>
				<td><?php echo $ddk->detail["keluarga"]["imunisasi"]["semua"] ?></td>
			</tr>
			<tr>
				<td>418. b. Terdapat fasilitas kredit berupa KKP-E</td>
				<td><?php echo $ddk->detail["keluarga"]["penderita_sakit"]["muntaber"] ?></td>
			</tr>
			<tr>
				<td>418. c. Terdapat fasilitas kredit berupa KUK</td>
				<td><?php echo $ddk->detail["keluarga"]["penderita_sakit"]["demam_berdarah"] ?></td>
			</tr>
			<tr>
				<td>418. d. Terdapat fasilitas kredit lainnya</td>
				<td><?php echo $ddk->detail["keluarga"]["penderita_sakit"]["kolera"] ?></td>
			</tr>
			<tr>
				<td>419. Jumlah Koperasi di desa yang aktif beroperasi</td>
				<td><?php echo $ddk->detail["keluarga"]["penderita_sakit"]["polio"] ?></td>
			</tr>
			<tr>
				<td>420. a. Terdapat BUMDesa</td>
				<td><?php echo $ddk->detail["keluarga"]["penderita_sakit"]["cikungunya"] ?></td>
			</tr>
			<tr>
				<td>420. b1. Pelayanan Umum</td>
				<td><?php echo $ddk->detail["keluarga"]["penderita_sakit"]["flu_burung"] ?></td>
			</tr>
			<tr>
				<td>420. b2. Jasa penyewaan</td>
				<td><?php echo $ddk->detail["keluarga"]["penderita_sakit"]["busung_lapar"] ?></td>
			</tr>
			<tr>
				<td>420. b3. Broker / usaha perantara</td>
				<td><?php echo $ddk->detail["keluarga"]["penderita_sakit"]["kelaparan"] ?></td>
			</tr>
			<tr>
				<td>420. b4. Perdagangan / pabrik / trading</td>
				<td><?php echo $ddk->detail["keluarga"]["penderita_sakit"]["kulit_bersisik"] ?></td>
			</tr>
			<tr>
				<td>420. b5. Usaha bersama / holding</td>
				<td><?php echo $ddk->detail["keluarga"]["penderita_sakit"]["kelainan_fisik"] ?></td>
			</tr>
			<tr>
				<td>420. b6. Bisnis keuangan/finansial</td>
				<td><?php echo $ddk->detail["keluarga"]["penderita_sakit"]["kelainan_mental"] ?></td>
			</tr>
			<tr>
				<td>421. Angkutan umum di des</td>
				<td><?php echo $ddk->detail["keluarga"]["perilaku_sehat"]["wc_permanen"] ?></td>
			</tr>
			<tr>
				<td>422.Angkutan umum utama di desa beroperasi setiap hari</td>
				<td><?php echo $ddk->detail["keluarga"]["perilaku_sehat"]["wc_darurat"] ?></td>
			</tr>
			<tr>
				<td>423. Jam operasional angkutan umum utama</td>
				<td><?php echo $ddk->detail["keluarga"]["perilaku_sehat"]["sungai"] ?></td>
			</tr>
			<tr>
				<td>424. Jalan di desa dapat dilalui kendaraan bermotor roda empat</td>
				<td><?php echo $ddk->detail["keluarga"]["perilaku_sehat"]["mck_umum"] ?></td>
			</tr>
			<tr>
				<td>425. Jenis permukaan jalan di desa yang terluas</td>
				<td><?php echo $ddk->detail["keluarga"]["pola_makan"]["sehari1"] ?></td>
			</tr>
			<tr>
				<td>426. Kualitas permukaan jalan di desa</td>
				<td><?php echo $ddk->detail["keluarga"]["pola_makan"]["sehari2"] ?></td>
			</tr>
			<tr><h4><strong>V. DIMENSI EKOLOGI</strong></h4></tr>
			<tr>
				<td>501. Ketersediaan sumber air di desa</td>
				<td><?php echo $ddk->detail["keluarga"]["pola_makan"]["sehari3"] ?></td>
			</tr>
			<tr>
				<td>502. a. Terjadi pencemaran air di desa</td>
				<td><?php echo $ddk->detail["keluarga"]["pola_makan"]["seharibt1"] ?></td>
			</tr>
			<tr>
				<td>502. b. Terjadi pencemaran tanah di desa</td>
				<td><?php echo $ddk->detail["keluarga"]["kebiasaan_berobat"]["dukun_terlatih"] ?></td>
			</tr>
			<tr>
				<td>502. c. Terjadi pencemaran udara di desa</td>
				<td><?php echo $ddk->detail["keluarga"]["kebiasaan_berobat"]["dokter"] ?></td>
			</tr>
			<tr>
				<td>503. Dampak pencemaran lingkungan</td>
				<td><?php echo $ddk->detail["keluarga"]["kebiasaan_berobat"]["obat_tradisional_dukun"] ?></td>
			</tr>
			<tr>
				<td>504. Terdapat sungai yang terkena pembuangan limbah</td>
				<td><?php echo $ddk->detail["keluarga"]["kebiasaan_berobat"]["paranormal"] ?></td>
			</tr>
			<tr>
				<td>505. Terdapat perencanaan tata ruang desa</td>
				<td><?php echo $ddk->detail["keluarga"]["kebiasaan_berobat"]["obat_tradisional_keluarga"] ?></td>
			</tr>
			<tr>
				<td>506. Terdapat perubahan penggunaan lahan dari sektor pertanian menjadi non-pertanian</td>
				<td><?php echo $ddk->detail["keluarga"]["kebiasaan_berobat"]["tidak_diobati"] ?></td>
			</tr>
			<tr>
				<td>507. a. Frekuensi kejadian bencana tanah longsor</td>
				<td><?php echo $ddk->detail["keluarga"]["kerukunan"]["luka_sara"] ?></td>
			</tr>
			<tr>
				<td>507. b. Frekuensi kejadian bencana banjir</td>
				<td><?php echo $ddk->detail["keluarga"]["kerukunan"]["meninggal_sara"] ?></td>
			</tr>
			<tr>
				<td>507. c. Frekuensi kejadian bencana gempa bumi</td>
				<td><?php echo $ddk->detail["keluarga"]["kerukunan"]["janda_duda_sara"] ?></td>
			</tr>
			<tr>
				<td>507. d. Frekuensi kejadian bencana tsunami</td>
				<td><?php echo $ddk->detail["keluarga"]["kerukunan"]["yatim_piatu_sara"] ?></td>
			</tr>
			<tr>
				<td>507. e. Frekuensi kejadian bencana gelombang pasang laut</td>
				<td><?php echo $ddk->detail["keluarga"]["perkelahian"]["meninggal"] ?></td>
			</tr>
			<tr>
				<td>507. f. Frekuensi kejadian bencana angin puyuh / puting beliung / topan</td>
				<td><?php echo $ddk->detail["keluarga"]["perkelahian"]["luka"] ?></td>
			</tr>
			<tr>
				<td>507. h. Frekuensi kejadian bencana kebakaran hutan</td>
				<td><?php echo $ddk->detail["keluarga"]["penjarahan"]["penjarahan_keluarga"] ?></td>
			</tr>
			<tr>
				<td>507. i. Frekuensi kejadian bencana kekeringan lahan</td>
				<td><?php echo $ddk->detail["keluarga"]["penjarahan"]["penjarahan_luar"] ?></td>
			</tr>
			<tr>
				<td>507. j. Frekuensi kejadian bencana lainnya</td>
				<td><?php echo $ddk->detail["keluarga"]["perjudian"]["keluarga"] ?></td>
			</tr>
			<tr>
				<td>508. a. Terdapat fasilitas
mitigasi bencana alam di desa berupa  peringatan dini bencana</td>
				<td><?php echo $ddk->detail["keluarga"]["gizi_balita"]["bergizi_buruk"] ?></td>
			</tr>
			<tr>
				<td>508. b. Terdapat fasilitas mitigasi bencana alam di desa berupa sistem peringatan dini khusus tsunami</td>
				<td><?php echo $ddk->detail["keluarga"]["gizi_balita"]["bergizi_baik"] ?></td>
			</tr>
			<tr>
				<td>508. c. Terdapat fasilitas mitigasi bencana alam di desa berupa perlengkapan keselamatan</td>
				<td><?php echo $ddk->detail["keluarga"]["gizi_balita"]["bergizi_kurang"] ?></td>
			</tr>
			<tr>
				<td>508. d. Terdapat fasilitas mitigasi bencana alam di desa berupa jalur evakuasih</td>
				<td><?php echo $ddk->detail["keluarga"]["gizi_balita"]["bergizi_lebih"] ?></td>
			</tr>

			<tr>
				<td colspan="2"><h4><strong>VI. AKTIVITAS DESA</strong></h4</td>
			</tr>
			<tr>
				<td>601. a. Ketersediaan pendamping Lokal Desa di desa</td>
				<td><?php echo $ddk->detail["keluarga"]["penyakit_keluarga"]["jantung"] ?></td>
			</tr>
			<tr>
				<td>601. b. Jumlah pendamping lokal desa di Kecamatan</td>
				<td><?php echo $ddk->detail["keluarga"]["penyakit_keluarga"]["paru"] ?></td>
			</tr>
			<tr>
				<td>602. a. Ketersediaan pelaku tingkat desa untuk kegiatan GSC (Generasi sehat dan Cerdas) Di Desa</td>
				<td><?php echo $ddk->detail["keluarga"]["penyakit_keluarga"]["lever"] ?></td>
			</tr>
			
			<tr>
				<td>603. Jumlah anggota KPMD</td>
				<td><?php echo $ddk->detail["keluarga"]["penyakit_keluarga"]["kanker"] ?></td>
			</tr>
			<tr>
				<td>604. Jumlah anggota TPMD</td>
				<td><?php echo $ddk->detail["keluarga"]["penyakit_keluarga"]["stroke"] ?></td>
			</tr>
			<tr>
				<td>605. Ketersediaan kebun gizi di desa</td>
				<td><?php echo $ddk->detail["keluarga"]["penyakit_keluarga"]["diabetes"] ?></td>
			</tr>
			<tr>
				<td>606. Sumber pangan yang paling sering dikonsumsi masyarakat desa</td>
				<td><?php echo $ddk->detail["keluarga"]["penyakit_keluarga"]["ginjal"] ?></td>
			</tr>
			<tr>
				<td>607. Terdapat Peraturan Desa tentang Kesehatan dan Pendidikan</td>
				<td><?php echo $ddk->detail["keluarga"]["penyakit_keluarga"]["malaria"] ?></td>
			</tr>
			<tr>
				<td colspan="2"><h4><strong>VII. SUMBER PENDAPATAN DESA</strong</td>
			</tr>
			<tr>
				<td>701. a. Total Dana Desa yang didapat tahun 2015 dan tahun 2016</td>
				<td><?php echo $ddk->detail["keluarga"]["penyakit_keluarga"]["asma"] ?></td>
			</tr>
			<tr>
				<td>701. b1. Sarana prasarana untuk penghidupan
termasuk ketahanan pangan dan  pemukiman</td>
				<td><?php echo $ddk->detail["keluarga"]["miras_narkoba"]["miras"] ?></td>
			</tr>
			<tr>
				<td>701. b2. Sarana prasarana kesehatan masyarak</td>
				<td><?php echo $ddk->detail["keluarga"]["miras_narkoba"]["narkoba"] ?></td>
			</tr>
			<tr>
				<td>701. b3. Sarana prasarana pendidikan, sosial, dan kebudayaan</td>
				<td><?php echo $ddk->detail["keluarga"]["pembunuhan"]["pelaku_keluarga"] ?></td>
			</tr>
			<tr>
				<td>701. b4. Sarana prasarana produksi dan distribusi</td>
				<td><?php echo $ddk->detail["keluarga"]["pembunuhan"]["pelaku_luar"] ?></td>
			</tr>
			<tr>
				<td>701. b5. Sarana prasarana energi terbarukan serta kegiatan pelestarian lingkungan hidup</td>
				<td><?php echo $ddk->detail["keluarga"]["penculikan"]["pelaku_keluarga"] ?></td>
			</tr>
			<tr>
				<td>701. b6. Program kegiatan pembangunan Desa lainnya</td>
				<td><?php echo $ddk->detail["keluarga"]["penculikan"]["pelaku_luar"] ?></td>
			</tr>
			<tr>
				<td>701. b7. Peningkatan investasi ekonomi Desa melalui pengadaan, pengembangan atau bantuan alat-alat produksi, permodalan, dan peningkatan kapasitas melalui pelatihan dan pemagangan</td>
				<td><?php echo $ddk->detail["keluarga"]["seksual"]["perkosaan_keluarga"] ?></td>
			</tr>
			<tr>
				<td>701. b8. Dukungan kegiatan ekonomi</td>
				<td><?php echo $ddk->detail["keluarga"]["seksual"]["perkosaan_luar"] ?></td>
			</tr>
			<tr>
				<td>702. b9. Bantuan peningkatan kapasitas untuk program
dan kegiatan ketahanan pangan Desa</td>
				<td><?php echo $ddk->detail["keluarga"]["seksual"]["hln_sah"] ?></td>
			</tr>
			<tr>
				<td>701. b10. Pengorganisasian masyarakat, fasilitasi, bantuan hukum masyarakat dan pelatihan paralegal di Desa</td>
				<td><?php echo $ddk->detail["keluarga"]["seksual"]["htn"] ?></td>
			</tr>
			<tr>
				<td>701. b11. Promosi dan edukasi kesehatan masyarakat serta gerakan hidup bersih dan sehat</td>
				<td><?php echo $ddk->detail["keluarga"]["seksual"]["hbs"] ?></td>
			</tr>
			<tr>
				<td>701. b12. Dukungan terhadap kegiatan pengelolaan pantai untuk kepentingan Desa</td>
				<td><?php echo $ddk->detail["keluarga"]["kekerasan"]["peradot"] ?></td>
			</tr>
			<tr>
				<td>701. b13. Peningkatan kapasitas kelompok masyarakat untuk energi terbarukan dan pelestarian lingkungan hidup</td>
				<td><?php echo $ddk->detail["keluarga"]["kekerasan"]["perada"] ?></td>
			</tr>
			<tr>
				<td>701. b14. Program kegiatan pemberdayaan masyarakat Desa lainnya<</td>
				<td><?php echo $ddk->detail["keluarga"]["kekerasan"]["peradiot"] ?></td>
			</tr>
						<tr>
				<td>702. a. Papan informasi</td>
				<td><?php echo $ddk->detail["keluarga"]["penyakit_keluarga"]["lepra"] ?></td>
			</tr>
			<tr>
				<td>702. b. Musyawarah desa</td>
				<td><?php echo $ddk->detail["keluarga"]["penyakit_keluarga"]["hiv"] ?></td>
			</tr>
			<tr>
				<td>702. c. Website</td>
				<td><?php echo $ddk->detail["keluarga"]["penyakit_keluarga"]["gila"] ?></td>
			</tr>
			<tr>
				<td>702. d. Lainnya</td>
				<td><?php echo $ddk->detail["keluarga"]["penyakit_keluarga"]["tbc"] ?></td>
			</tr>
			<tr>
				<td>703. a. Sumber dana dari PAD (Pendapatan Asli Desa)</td>
				<td><?php echo $ddk->detail["keluarga"]["kekerasan"]["peradp"] ?></td>
			</tr>
			<tr>
				<td>703. b. Sumber dana dari Bagian dari hasil pajak daerah dan retribusi daerah Kabupaten/Kota</td>
				<td><?php echo $ddk->detail["keluarga"]["kekerasan"]["peradakl"] ?></td>
			</tr>
			<tr>
				<td>703. c. Sumber dana dari Alokasi dana Desa yang merupakan bagian dari dana perimbangan yang diterima Kabupaten/Kota</td>
				<td><?php echo $ddk->detail["keluarga"]["kekerasan"]["pemadot"] ?></td>
			</tr>
			<tr>
				<td>703. d. Sumber dana dari bantuan dari APBD Kab/Kota termasuk BOK dan DAK / DAU</td>
				<td><?php echo $ddk->detail["keluarga"]["kekerasan"]["pemotda"] ?></td>
			</tr>
			<tr>
				<td>703. e. Sumber dana dari hibah dan sumbangan yang tidak mengikat dari pihak ketiga</td>
				<td><?php echo $ddk->detail["keluarga"]["kekerasan"]["pemadkl"] ?></td>
			</tr>
			<tr>
				<td>703. f. Sumber dana dari pendapatan desa lain yang sah</td>
				<td><?php echo $ddk->detail["keluarga"]["kekerasan"]["pemotot"] ?></td>
			</tr>
			<tr>
				<td>Milik Sendiri</td>
				<td><?php echo $ddk->detail["keluarga"]["rumah"]["sendiri"] ?></td>
			</tr>

			<tr>
				<td>Milik Orang Tua</td>
				<td><?php echo $ddk->detail["keluarga"]["rumah"]["ortu"] ?></td>
			</tr>
			<tr>
				<td>Milik Keluarga</td>
				<td><?php echo $ddk->detail["keluarga"]["rumah"]["keluarga"] ?></td>
			</tr>
			<tr>
				<td>Sewa/Kontrak</td>
				<td><?php echo $ddk->detail["keluarga"]["rumah"]["sewa"] ?></td>
			</tr>
			<tr>
				<td>Pinjam Pakai</td>
				<td><?php echo $ddk->detail["keluarga"]["rumah"]["pinjam"] ?></td>
			</tr>
			<?php if(!empty($ddk->detail["keluarga"]["rumah"]["lainnya"]["keterangan"])): ?>
			<tr>
				<td><?php echo $ddk->detail["keluarga"]["rumah"]["lainnya"]["keterangan"] ?></td>
				<td><?php echo $ddk->detail["keluarga"]["rumah"]["lainnya"]["jumlah"] ?></td>
			</tr>
			<?php endif ?>

			<tr>
				<td colspan="2">1.4 Sumber Air Minum yang digunakan anggota keluarga</td>
			</tr>
			<tr>
				<td>Mata air</td>
				<td><?php echo !empty($ddk->detail["keluarga"]["sumber_air"]["sumber"]) ? ucwords(implode(", ", $ddk->detail["keluarga"]["sumber_air"]["sumber"])) : "-" ?></td>
			</tr>
			<tr>
				<td>Sumur gali</td>
				<td><?php echo !empty($ddk->detail["keluarga"]["sumber_air"]["gali"]) ? ucwords(implode(", ", $ddk->detail["keluarga"]["sumber_air"]["gali"])) : "-" ?></td>
			</tr>
			<tr>
				<td>Sumur pompa</td>
				<td><?php echo !empty($ddk->detail["keluarga"]["sumber_air"]["pompa"]) ? ucwords(implode(", ", $ddk->detail["keluarga"]["sumber_air"]["pompa"])) : "-" ?></td>
			</tr>
			<tr>
				<td>Hidran umum</td>
				<td><?php echo !empty($ddk->detail["keluarga"]["sumber_air"]["hidran"]) ? ucwords(implode(", ", $ddk->detail["keluarga"]["sumber_air"]["hidran"])) : "-" ?></td>
			</tr>
			<tr>
				<td>PAM</td>
				<td><?php echo !empty($ddk->detail["keluarga"]["sumber_air"]["pam"]) ? ucwords(implode(", ", $ddk->detail["keluarga"]["sumber_air"]["pam"])) : "-" ?></td>
			</tr>
			<tr>
				<td>Pipa</td>
				<td><?php echo !empty($ddk->detail["keluarga"]["sumber_air"]["pipa"]) ? ucwords(implode(", ", $ddk->detail["keluarga"]["sumber_air"]["pipa"])) : "-" ?></td>
			</tr>
			<tr>
				<td>Sungai</td>
				<td><?php echo !empty($ddk->detail["keluarga"]["sumber_air"]["sungai"]) ? ucwords(implode(", ", $ddk->detail["keluarga"]["sumber_air"]["sungai"])) : "-" ?></td>
			</tr>
			<tr>
				<td>Embung</td>
				<td><?php echo !empty($ddk->detail["keluarga"]["sumber_air"]["embung"]) ? ucwords(implode(", ", $ddk->detail["keluarga"]["sumber_air"]["embung"])) : "-" ?></td>
			</tr>
			<tr>
				<td>Bak penampung air hujan</td>
				<td><?php echo !empty($ddk->detail["keluarga"]["sumber_air"]["penampung"]) ? ucwords(implode(", ", $ddk->detail["keluarga"]["sumber_air"]["penampung"])) : "-" ?></td>
			</tr>
			<tr>
				<td>Beli dari tangki swasta</td>
				<td><?php echo !empty($ddk->detail["keluarga"]["sumber_air"]["tangki"]) ? ucwords(implode(", ", $ddk->detail["keluarga"]["sumber_air"]["tangki"])) : "-" ?></td>
			</tr>
			<tr>
				<td>Depot isi ulang</td>
				<td><?php echo !empty($ddk->detail["keluarga"]["sumber_air"]["depot"]) ? ucwords(implode(", ", $ddk->detail["keluarga"]["sumber_air"]["depot"])) : "-" ?></td>
			</tr>
			<?php if(!empty($ddk->detail["keluarga"]["sumber_air"]["lainnya"]["keterangan"])): ?>
			<tr>
				<td><?php echo $ddk->detail["keluarga"]["sumber_air"]["lainnya"]["keterangan"] ?></td>
				<td><?php echo !empty($ddk->detail["keluarga"]["sumber_air"]["lainnya"]["opsi"]) ? ucwords(implode(", ", $ddk->detail["keluarga"]["sumber_air"]["lainnya"]["opsi"])) : "-" ?></td>
			</tr>
			<?php endif ?>

			<tr>
				<td colspan="2">1.5 Kepemilikan Lahan</td>
			</tr>
			
			
			

			<tr>
				<td colspan="2">1.6 Produksi Tahun Ini</td>
			</tr>
			<tr>
				<td colspan="2">A. Tanaman Pangan</td>
			</tr>
			<tr>
				<td>Jagung</td>
				<td>
					Luas Panen (m2) : <?php echo $ddk->detail["keluarga"]["produksi_pangan"]["jagung"]["luas"] ?><br>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_pangan"]["jagung"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_pangan"]["jagung"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_pangan"]["jagung"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Kacang kedelai</td>
				<td>
					Luas Panen (m2) : <?php echo $ddk->detail["keluarga"]["produksi_pangan"]["kacang_kedelai"]["luas"] ?><br>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_pangan"]["kacang_kedelai"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_pangan"]["kacang_kedelai"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_pangan"]["kacang_kedelai"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Kacang tanah</td>
				<td>
					Luas Panen (m2) : <?php echo $ddk->detail["keluarga"]["produksi_pangan"]["kacang_tanah"]["luas"] ?><br>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_pangan"]["kacang_tanah"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_pangan"]["kacang_tanah"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_pangan"]["kacang_tanah"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Kacang panjang</td>
				<td>
					Luas Panen (m2) : <?php echo $ddk->detail["keluarga"]["produksi_pangan"]["kacang_panjang"]["luas"] ?><br>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_pangan"]["kacang_panjang"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_pangan"]["kacang_panjang"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_pangan"]["kacang_panjang"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Kacang mede</td>
				<td>
					Luas Panen (m2) : <?php echo $ddk->detail["keluarga"]["produksi_pangan"]["kacang_mede"]["luas"] ?><br>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_pangan"]["kacang_mede"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_pangan"]["kacang_mede"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_pangan"]["kacang_mede"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Kacang merah</td>
				<td>
					Luas Panen (m2) : <?php echo $ddk->detail["keluarga"]["produksi_pangan"]["kacang_merah"]["luas"] ?><br>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_pangan"]["kacang_merah"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_pangan"]["kacang_merah"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_pangan"]["kacang_merah"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Padi sawah</td>
				<td>
					Luas Panen (m2) : <?php echo $ddk->detail["keluarga"]["produksi_pangan"]["padi_sawah"]["luas"] ?><br>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_pangan"]["padi_sawah"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_pangan"]["padi_sawah"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_pangan"]["padi_sawah"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Padi ladang</td>
				<td>
					Luas Panen (m2) : <?php echo $ddk->detail["keluarga"]["produksi_pangan"]["padi_ladang"]["luas"] ?><br>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_pangan"]["padi_ladang"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_pangan"]["padi_ladang"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_pangan"]["padi_ladang"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Ubi kayu</td>
				<td>
					Luas Panen (m2) : <?php echo $ddk->detail["keluarga"]["produksi_pangan"]["ubi_kayu"]["luas"] ?><br>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_pangan"]["ubi_kayu"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_pangan"]["ubi_kayu"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_pangan"]["ubi_kayu"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Ubi jalar</td>
				<td>
					Luas Panen (m2) : <?php echo $ddk->detail["keluarga"]["produksi_pangan"]["ubi_jalar"]["luas"] ?><br>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_pangan"]["ubi_jalar"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_pangan"]["ubi_jalar"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_pangan"]["ubi_jalar"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Cabe</td>
				<td>
					Luas Panen (m2) : <?php echo $ddk->detail["keluarga"]["produksi_pangan"]["cabe"]["luas"] ?><br>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_pangan"]["cabe"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_pangan"]["cabe"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_pangan"]["cabe"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Bawah merah</td>
				<td>
					Luas Panen (m2) : <?php echo $ddk->detail["keluarga"]["produksi_pangan"]["bawah_merah"]["luas"] ?><br>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_pangan"]["bawah_merah"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_pangan"]["bawah_merah"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_pangan"]["bawah_merah"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Bawang putih</td>
				<td>
					Luas Panen (m2) : <?php echo $ddk->detail["keluarga"]["produksi_pangan"]["bawang_putih"]["luas"] ?><br>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_pangan"]["bawang_putih"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_pangan"]["bawang_putih"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_pangan"]["bawang_putih"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Tomat</td>
				<td>
					Luas Panen (m2) : <?php echo $ddk->detail["keluarga"]["produksi_pangan"]["tomat"]["luas"] ?><br>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_pangan"]["tomat"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_pangan"]["tomat"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_pangan"]["tomat"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Sawi</td>
				<td>
					Luas Panen (m2) : <?php echo $ddk->detail["keluarga"]["produksi_pangan"]["sawi"]["luas"] ?><br>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_pangan"]["sawi"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_pangan"]["sawi"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_pangan"]["sawi"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Kentang</td>
				<td>
					Luas Panen (m2) : <?php echo $ddk->detail["keluarga"]["produksi_pangan"]["kentang"]["luas"] ?><br>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_pangan"]["kentang"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_pangan"]["kentang"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_pangan"]["kentang"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Kubis</td>
				<td>
					Luas Panen (m2) : <?php echo $ddk->detail["keluarga"]["produksi_pangan"]["kubis"]["luas"] ?><br>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_pangan"]["kubis"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_pangan"]["kubis"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_pangan"]["kubis"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Mentimun</td>
				<td>
					Luas Panen (m2) : <?php echo $ddk->detail["keluarga"]["produksi_pangan"]["mentimun"]["luas"] ?><br>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_pangan"]["mentimun"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_pangan"]["mentimun"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_pangan"]["mentimun"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Buncis</td>
				<td>
					Luas Panen (m2) : <?php echo $ddk->detail["keluarga"]["produksi_pangan"]["buncis"]["luas"] ?><br>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_pangan"]["buncis"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_pangan"]["buncis"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_pangan"]["buncis"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Brocoli</td>
				<td>
					Luas Panen (m2) : <?php echo $ddk->detail["keluarga"]["produksi_pangan"]["brocoli"]["luas"] ?><br>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_pangan"]["brocoli"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_pangan"]["brocoli"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_pangan"]["brocoli"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Terong</td>
				<td>
					Luas Panen (m2) : <?php echo $ddk->detail["keluarga"]["produksi_pangan"]["terong"]["luas"] ?><br>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_pangan"]["terong"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_pangan"]["terong"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_pangan"]["terong"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Bayam</td>
				<td>
					Luas Panen (m2) : <?php echo $ddk->detail["keluarga"]["produksi_pangan"]["bayam"]["luas"] ?><br>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_pangan"]["bayam"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_pangan"]["bayam"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_pangan"]["bayam"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Kangkung</td>
				<td>
					Luas Panen (m2) : <?php echo $ddk->detail["keluarga"]["produksi_pangan"]["kangkung"]["luas"] ?><br>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_pangan"]["kangkung"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_pangan"]["kangkung"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_pangan"]["kangkung"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Kacang turis</td>
				<td>
					Luas Panen (m2) : <?php echo $ddk->detail["keluarga"]["produksi_pangan"]["kacang_turis"]["luas"] ?><br>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_pangan"]["kacang_turis"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_pangan"]["kacang_turis"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_pangan"]["kacang_turis"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Umbi-umbian lain</td>
				<td>
					Luas Panen (m2) : <?php echo $ddk->detail["keluarga"]["produksi_pangan"]["umbi_lain"]["luas"] ?><br>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_pangan"]["umbi_lain"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_pangan"]["umbi_lain"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_pangan"]["umbi_lain"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Selada</td>
				<td>
					Luas Panen (m2) : <?php echo $ddk->detail["keluarga"]["produksi_pangan"]["selada"]["luas"] ?><br>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_pangan"]["selada"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_pangan"]["selada"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_pangan"]["selada"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Talas</td>
				<td>
					Luas Panen (m2) : <?php echo $ddk->detail["keluarga"]["produksi_pangan"]["talas"]["luas"] ?><br>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_pangan"]["talas"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_pangan"]["talas"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_pangan"]["talas"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Wortel</td>
				<td>
					Luas Panen (m2) : <?php echo $ddk->detail["keluarga"]["produksi_pangan"]["wortel"]["luas"] ?><br>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_pangan"]["wortel"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_pangan"]["wortel"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_pangan"]["wortel"]["pemasaran"] ?>
				</td>
			</tr>
			<?php if(!empty($ddk->detail["keluarga"]["produksi_pangan"]["lainnya"]["keterangan"])): ?>
			<tr>
				<td><?php echo $ddk->detail["keluarga"]["produksi_pangan"]["lainnya"]["keterangan"] ?></td>
				<td>
					Luas Panen (m2) : <?php echo $ddk->detail["keluarga"]["produksi_pangan"]["lainnya"]["luas"] ?><br>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_pangan"]["lainnya"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_pangan"]["lainnya"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_pangan"]["lainnya"]["pemasaran"] ?>
				</td>
			</tr>
			<?php endif ?>

			<tr>
				<td colspan="2">B. Buah-Buahan</td>
			</tr>
			<tr>
				<td>Jeruk</td>
				<td>
					Jumlah Pohon : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["jeruk"]["jumlah"] ?><br>
					Luas Panen (m2) : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["jeruk"]["luas"] ?><br>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["jeruk"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["jeruk"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["jeruk"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Alpokat</td>
				<td>
					Jumlah Pohon : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["alpokat"]["jumlah"] ?><br>
					Luas Panen (m2) : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["alpokat"]["luas"] ?><br>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["alpokat"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["alpokat"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["alpokat"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Mangga</td>
				<td>
					Jumlah Pohon : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["mangga"]["jumlah"] ?><br>
					Luas Panen (m2) : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["mangga"]["luas"] ?><br>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["mangga"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["mangga"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["mangga"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Rambutan</td>
				<td>
					Jumlah Pohon : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["rambutan"]["jumlah"] ?><br>
					Luas Panen (m2) : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["rambutan"]["luas"] ?><br>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["rambutan"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["rambutan"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["rambutan"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Manggis</td>
				<td>
					Jumlah Pohon : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["manggis"]["jumlah"] ?><br>
					Luas Panen (m2) : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["manggis"]["luas"] ?><br>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["manggis"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["manggis"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["manggis"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Salak</td>
				<td>
					Jumlah Pohon : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["salak"]["jumlah"] ?><br>
					Luas Panen (m2) : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["salak"]["luas"] ?><br>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["salak"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["salak"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["salak"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Apel</td>
				<td>
					Jumlah Pohon : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["apel"]["jumlah"] ?><br>
					Luas Panen (m2) : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["apel"]["luas"] ?><br>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["apel"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["apel"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["apel"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Pepaya</td>
				<td>
					Jumlah Pohon : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["pepaya"]["jumlah"] ?><br>
					Luas Panen (m2) : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["pepaya"]["luas"] ?><br>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["pepaya"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["pepaya"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["pepaya"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Belimbing</td>
				<td>
					Jumlah Pohon : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["belimbing"]["jumlah"] ?><br>
					Luas Panen (m2) : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["belimbing"]["luas"] ?><br>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["belimbing"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["belimbing"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["belimbing"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Durian</td>
				<td>
					Jumlah Pohon : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["durian"]["jumlah"] ?><br>
					Luas Panen (m2) : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["durian"]["luas"] ?><br>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["durian"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["durian"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["durian"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Sawo</td>
				<td>
					Jumlah Pohon : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["sawo"]["jumlah"] ?><br>
					Luas Panen (m2) : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["sawo"]["luas"] ?><br>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["sawo"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["sawo"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["sawo"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Duku</td>
				<td>
					Jumlah Pohon : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["duku"]["jumlah"] ?><br>
					Luas Panen (m2) : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["duku"]["luas"] ?><br>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["duku"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["duku"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["duku"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Kokosan</td>
				<td>
					Jumlah Pohon : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["kokosan"]["jumlah"] ?><br>
					Luas Panen (m2) : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["kokosan"]["luas"] ?><br>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["kokosan"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["kokosan"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["kokosan"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Pisang</td>
				<td>
					Jumlah Pohon : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["pisang"]["jumlah"] ?><br>
					Luas Panen (m2) : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["pisang"]["luas"] ?><br>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["pisang"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["pisang"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["pisang"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Markisa</td>
				<td>
					Jumlah Pohon : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["markisa"]["jumlah"] ?><br>
					Luas Panen (m2) : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["markisa"]["luas"] ?><br>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["markisa"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["markisa"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["markisa"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Lengkeng</td>
				<td>
					Jumlah Pohon : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["lengkeng"]["jumlah"] ?><br>
					Luas Panen (m2) : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["lengkeng"]["luas"] ?><br>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["lengkeng"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["lengkeng"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["lengkeng"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Semangka</td>
				<td>
					Jumlah Pohon : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["semangka"]["jumlah"] ?><br>
					Luas Panen (m2) : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["semangka"]["luas"] ?><br>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["semangka"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["semangka"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["semangka"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Limau</td>
				<td>
					Jumlah Pohon : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["limau"]["jumlah"] ?><br>
					Luas Panen (m2) : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["limau"]["luas"] ?><br>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["limau"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["limau"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["limau"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Jeruk nipis</td>
				<td>
					Jumlah Pohon : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["jeruk_nipis"]["jumlah"] ?><br>
					Luas Panen (m2) : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["jeruk_nipis"]["luas"] ?><br>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["jeruk_nipis"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["jeruk_nipis"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["jeruk_nipis"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Sirsak</td>
				<td>
					Jumlah Pohon : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["sirsak"]["jumlah"] ?><br>
					Luas Panen (m2) : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["sirsak"]["luas"] ?><br>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["sirsak"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["sirsak"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["sirsak"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Melon</td>
				<td>
					Jumlah Pohon : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["melon"]["jumlah"] ?><br>
					Luas Panen (m2) : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["melon"]["luas"] ?><br>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["melon"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["melon"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["melon"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Jambu air</td>
				<td>
					Jumlah Pohon : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["jambu_air"]["jumlah"] ?><br>
					Luas Panen (m2) : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["jambu_air"]["luas"] ?><br>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["jambu_air"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["jambu_air"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["jambu_air"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Nangka</td>
				<td>
					Jumlah Pohon : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["nangka"]["jumlah"] ?><br>
					Luas Panen (m2) : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["nangka"]["luas"] ?><br>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["nangka"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["nangka"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["nangka"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Kelapa</td>
				<td>
					Jumlah Pohon : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["kelapa"]["jumlah"] ?><br>
					Luas Panen (m2) : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["kelapa"]["luas"] ?><br>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["kelapa"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["kelapa"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["kelapa"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Kedondong</td>
				<td>
					Jumlah Pohon : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["kedondong"]["jumlah"] ?><br>
					Luas Panen (m2) : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["kedondong"]["luas"] ?><br>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["kedondong"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["kedondong"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["kedondong"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Anggur</td>
				<td>
					Jumlah Pohon : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["anggur"]["jumlah"] ?><br>
					Luas Panen (m2) : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["anggur"]["luas"] ?><br>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["anggur"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["anggur"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["anggur"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Nenas</td>
				<td>
					Jumlah Pohon : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["nenas"]["jumlah"] ?><br>
					Luas Panen (m2) : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["nenas"]["luas"] ?><br>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["nenas"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["nenas"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["nenas"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Jambu klutuk</td>
				<td>
					Jumlah Pohon : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["jambu_klutuk"]["jumlah"] ?><br>
					Luas Panen (m2) : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["jambu_klutuk"]["luas"] ?><br>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["jambu_klutuk"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["jambu_klutuk"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["jambu_klutuk"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Murbei</td>
				<td>
					Jumlah Pohon : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["murbei"]["jumlah"] ?><br>
					Luas Panen (m2) : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["murbei"]["luas"] ?><br>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["murbei"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["murbei"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["murbei"]["pemasaran"] ?>
				</td>
			</tr>
			<?php if(!empty($ddk->detail["keluarga"]["produksi_buah"]["lainnya"]["keterangan"])): ?>
			<tr>
				<td><?php echo $ddk->detail["keluarga"]["produksi_buah"]["lainnya"]["keterangan"] ?></td>
				<td>
					Jumlah Pohon : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["lainnya"]["jumlah"] ?><br>
					Luas Panen (m2) : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["lainnya"]["luas"] ?><br>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["lainnya"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["lainnya"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_buah"]["lainnya"]["pemasaran"] ?>
				</td>
			</tr>
			<?php endif ?>
			<tr>
				<td colspan="2">C. Tanaman Obat</td>
			</tr>
			<tr>
				<td>Jahe</td>
				<td>
					Luas Panen (m2) : <?php echo $ddk->detail["keluarga"]["produksi_obat"]["jahe"]["luas"] ?><br>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_obat"]["jahe"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_obat"]["jahe"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_obat"]["jahe"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Kunyit</td>
				<td>
					Luas Panen (m2) : <?php echo $ddk->detail["keluarga"]["produksi_obat"]["kunyit"]["luas"] ?><br>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_obat"]["kunyit"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_obat"]["kunyit"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_obat"]["kunyit"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Lengkuas</td>
				<td>
					Luas Panen (m2) : <?php echo $ddk->detail["keluarga"]["produksi_obat"]["lengkuas"]["luas"] ?><br>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_obat"]["lengkuas"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_obat"]["lengkuas"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_obat"]["lengkuas"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Mengkudu</td>
				<td>
					Luas Panen (m2) : <?php echo $ddk->detail["keluarga"]["produksi_obat"]["mengkudu"]["luas"] ?><br>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_obat"]["mengkudu"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_obat"]["mengkudu"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_obat"]["mengkudu"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Daun dewa</td>
				<td>
					Luas Panen (m2) : <?php echo $ddk->detail["keluarga"]["produksi_obat"]["daun_dewa"]["luas"] ?><br>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_obat"]["daun_dewa"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_obat"]["daun_dewa"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_obat"]["daun_dewa"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Kumis kucing</td>
				<td>
					Luas Panen (m2) : <?php echo $ddk->detail["keluarga"]["produksi_obat"]["kumis_kucing"]["luas"] ?><br>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_obat"]["kumis_kucing"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_obat"]["kumis_kucing"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_obat"]["kumis_kucing"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Buah Merah</td>
				<td>
					Luas Panen (m2) : <?php echo $ddk->detail["keluarga"]["produksi_obat"]["buah_merah"]["luas"] ?><br>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_obat"]["buah_merah"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_obat"]["buah_merah"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_obat"]["buah_merah"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Sambiloto</td>
				<td>
					Luas Panen (m2) : <?php echo $ddk->detail["keluarga"]["produksi_obat"]["sambiloto"]["luas"] ?><br>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_obat"]["sambiloto"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_obat"]["sambiloto"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_obat"]["sambiloto"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Temulawak</td>
				<td>
					Luas Panen (m2) : <?php echo $ddk->detail["keluarga"]["produksi_obat"]["temulawak"]["luas"] ?><br>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_obat"]["temulawak"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_obat"]["temulawak"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_obat"]["temulawak"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Temu hitam</td>
				<td>
					Luas Panen (m2) : <?php echo $ddk->detail["keluarga"]["produksi_obat"]["temu_hitam"]["luas"] ?><br>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_obat"]["temu_hitam"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_obat"]["temu_hitam"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_obat"]["temu_hitam"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Temu putih</td>
				<td>
					Luas Panen (m2) : <?php echo $ddk->detail["keluarga"]["produksi_obat"]["temu_putih"]["luas"] ?><br>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_obat"]["temu_putih"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_obat"]["temu_putih"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_obat"]["temu_putih"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Temu putri</td>
				<td>
					Luas Panen (m2) : <?php echo $ddk->detail["keluarga"]["produksi_obat"]["temu_putri"]["luas"] ?><br>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_obat"]["temu_putri"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_obat"]["temu_putri"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_obat"]["temu_putri"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Temu kunci</td>
				<td>
					Luas Panen (m2) : <?php echo $ddk->detail["keluarga"]["produksi_obat"]["temu_kunci"]["luas"] ?><br>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_obat"]["temu_kunci"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_obat"]["temu_kunci"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_obat"]["temu_kunci"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Daun sirih</td>
				<td>
					Luas Panen (m2) : <?php echo $ddk->detail["keluarga"]["produksi_obat"]["daun_sirih"]["luas"] ?><br>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_obat"]["daun_sirih"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_obat"]["daun_sirih"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_obat"]["daun_sirih"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Kayu manis</td>
				<td>
					Luas Panen (m2) : <?php echo $ddk->detail["keluarga"]["produksi_obat"]["kayu_manis"]["luas"] ?><br>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_obat"]["kayu_manis"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_obat"]["kayu_manis"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_obat"]["kayu_manis"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Daun sereh</td>
				<td>
					Luas Panen (m2) : <?php echo $ddk->detail["keluarga"]["produksi_obat"]["daun_sereh"]["luas"] ?><br>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_obat"]["daun_sereh"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_obat"]["daun_sereh"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_obat"]["daun_sereh"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Mahkota dewa</td>
				<td>
					Luas Panen (m2) : <?php echo $ddk->detail["keluarga"]["produksi_obat"]["mahkota_dewa"]["luas"] ?><br>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_obat"]["mahkota_dewa"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_obat"]["mahkota_dewa"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_obat"]["mahkota_dewa"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Akar wangi</td>
				<td>
					Luas Panen (m2) : <?php echo $ddk->detail["keluarga"]["produksi_obat"]["akar_wangi"]["luas"] ?><br>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_obat"]["akar_wangi"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_obat"]["akar_wangi"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_obat"]["akar_wangi"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Kencur</td>
				<td>
					Luas Panen (m2) : <?php echo $ddk->detail["keluarga"]["produksi_obat"]["kencur"]["luas"] ?><br>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_obat"]["kencur"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_obat"]["kencur"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_obat"]["kencur"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Jamur</td>
				<td>
					Luas Panen (m2) : <?php echo $ddk->detail["keluarga"]["produksi_obat"]["jamur"]["luas"] ?><br>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_obat"]["jamur"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_obat"]["jamur"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_obat"]["jamur"]["pemasaran"] ?>
				</td>
			</tr>
			<?php if(!empty($ddk->detail["keluarga"]["produksi_obat"]["lainnya"]["keterangan"])): ?>
			<tr>
				<td><?php echo $ddk->detail["keluarga"]["produksi_obat"]["lainnya"]["keterangan"] ?></td>
				<td>
					Luas Panen (m2) : <?php echo $ddk->detail["keluarga"]["produksi_obat"]["lainnya"]["luas"] ?><br>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_obat"]["lainnya"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_obat"]["lainnya"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_obat"]["lainnya"]["pemasaran"] ?>
				</td>
			</tr>
			<?php endif ?>
			<tr>
				<td colspan="2">D. Tanaman Perkebunan</td>
			</tr>
			<tr>
				<td>Kelapa</td>
				<td>
					Jumlah Pohon : <?php echo $ddk->detail["keluarga"]["produksi_perkebunan"]["kelapa"]["jumlah"] ?><br>
					Luas Panen (m2) : <?php echo $ddk->detail["keluarga"]["produksi_perkebunan"]["kelapa"]["luas"] ?><br>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_perkebunan"]["kelapa"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_perkebunan"]["kelapa"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_perkebunan"]["kelapa"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Kelapa sawit</td>
				<td>
					Jumlah Pohon : <?php echo $ddk->detail["keluarga"]["produksi_perkebunan"]["kelapa_sawit"]["jumlah"] ?><br>
					Luas Panen (m2) : <?php echo $ddk->detail["keluarga"]["produksi_perkebunan"]["kelapa_sawit"]["luas"] ?><br>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_perkebunan"]["kelapa_sawit"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_perkebunan"]["kelapa_sawit"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_perkebunan"]["kelapa_sawit"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Kopi</td>
				<td>
					Jumlah Pohon : <?php echo $ddk->detail["keluarga"]["produksi_perkebunan"]["kopi"]["jumlah"] ?><br>
					Luas Panen (m2) : <?php echo $ddk->detail["keluarga"]["produksi_perkebunan"]["kopi"]["luas"] ?><br>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_perkebunan"]["kopi"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_perkebunan"]["kopi"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_perkebunan"]["kopi"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Cengkeh</td>
				<td>
					Jumlah Pohon : <?php echo $ddk->detail["keluarga"]["produksi_perkebunan"]["cengkeh"]["jumlah"] ?><br>
					Luas Panen (m2) : <?php echo $ddk->detail["keluarga"]["produksi_perkebunan"]["cengkeh"]["luas"] ?><br>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_perkebunan"]["cengkeh"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_perkebunan"]["cengkeh"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_perkebunan"]["cengkeh"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Coklat</td>
				<td>
					Jumlah Pohon : <?php echo $ddk->detail["keluarga"]["produksi_perkebunan"]["coklat"]["jumlah"] ?><br>
					Luas Panen (m2) : <?php echo $ddk->detail["keluarga"]["produksi_perkebunan"]["coklat"]["luas"] ?><br>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_perkebunan"]["coklat"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_perkebunan"]["coklat"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_perkebunan"]["coklat"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Pinang</td>
				<td>
					Jumlah Pohon : <?php echo $ddk->detail["keluarga"]["produksi_perkebunan"]["pinang"]["jumlah"] ?><br>
					Luas Panen (m2) : <?php echo $ddk->detail["keluarga"]["produksi_perkebunan"]["pinang"]["luas"] ?><br>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_perkebunan"]["pinang"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_perkebunan"]["pinang"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_perkebunan"]["pinang"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Lada</td>
				<td>
					Jumlah Pohon : <?php echo $ddk->detail["keluarga"]["produksi_perkebunan"]["lada"]["jumlah"] ?><br>
					Luas Panen (m2) : <?php echo $ddk->detail["keluarga"]["produksi_perkebunan"]["lada"]["luas"] ?><br>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_perkebunan"]["lada"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_perkebunan"]["lada"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_perkebunan"]["lada"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Karet</td>
				<td>
					Jumlah Pohon : <?php echo $ddk->detail["keluarga"]["produksi_perkebunan"]["karet"]["jumlah"] ?><br>
					Luas Panen (m2) : <?php echo $ddk->detail["keluarga"]["produksi_perkebunan"]["karet"]["luas"] ?><br>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_perkebunan"]["karet"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_perkebunan"]["karet"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_perkebunan"]["karet"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Jambu mete</td>
				<td>
					Jumlah Pohon : <?php echo $ddk->detail["keluarga"]["produksi_perkebunan"]["jambu_mete"]["jumlah"] ?><br>
					Luas Panen (m2) : <?php echo $ddk->detail["keluarga"]["produksi_perkebunan"]["jambu_mete"]["luas"] ?><br>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_perkebunan"]["jambu_mete"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_perkebunan"]["jambu_mete"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_perkebunan"]["jambu_mete"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Tembakau</td>
				<td>
					Jumlah Pohon : <?php echo $ddk->detail["keluarga"]["produksi_perkebunan"]["tembakau"]["jumlah"] ?><br>
					Luas Panen (m2) : <?php echo $ddk->detail["keluarga"]["produksi_perkebunan"]["tembakau"]["luas"] ?><br>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_perkebunan"]["tembakau"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_perkebunan"]["tembakau"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_perkebunan"]["tembakau"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Pala</td>
				<td>
					Jumlah Pohon : <?php echo $ddk->detail["keluarga"]["produksi_perkebunan"]["pala"]["jumlah"] ?><br>
					Luas Panen (m2) : <?php echo $ddk->detail["keluarga"]["produksi_perkebunan"]["pala"]["luas"] ?><br>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_perkebunan"]["pala"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_perkebunan"]["pala"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_perkebunan"]["pala"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Vanili</td>
				<td>
					Jumlah Pohon : <?php echo $ddk->detail["keluarga"]["produksi_perkebunan"]["vanili"]["jumlah"] ?><br>
					Luas Panen (m2) : <?php echo $ddk->detail["keluarga"]["produksi_perkebunan"]["vanili"]["luas"] ?><br>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_perkebunan"]["vanili"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_perkebunan"]["vanili"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_perkebunan"]["vanili"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Jarak pagar</td>
				<td>
					Jumlah Pohon : <?php echo $ddk->detail["keluarga"]["produksi_perkebunan"]["jarak_pagar"]["jumlah"] ?><br>
					Luas Panen (m2) : <?php echo $ddk->detail["keluarga"]["produksi_perkebunan"]["jarak_pagar"]["luas"] ?><br>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_perkebunan"]["jarak_pagar"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_perkebunan"]["jarak_pagar"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_perkebunan"]["jarak_pagar"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Jarak kepyar</td>
				<td>
					Jumlah Pohon : <?php echo $ddk->detail["keluarga"]["produksi_perkebunan"]["jarak_kepyar"]["jumlah"] ?><br>
					Luas Panen (m2) : <?php echo $ddk->detail["keluarga"]["produksi_perkebunan"]["jarak_kepyar"]["luas"] ?><br>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_perkebunan"]["jarak_kepyar"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_perkebunan"]["jarak_kepyar"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_perkebunan"]["jarak_kepyar"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Tebu</td>
				<td>
					Jumlah Pohon : <?php echo $ddk->detail["keluarga"]["produksi_perkebunan"]["tebu"]["jumlah"] ?><br>
					Luas Panen (m2) : <?php echo $ddk->detail["keluarga"]["produksi_perkebunan"]["tebu"]["luas"] ?><br>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_perkebunan"]["tebu"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_perkebunan"]["tebu"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_perkebunan"]["tebu"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Kapuk</td>
				<td>
					Jumlah Pohon : <?php echo $ddk->detail["keluarga"]["produksi_perkebunan"]["kapuk"]["jumlah"] ?><br>
					Luas Panen (m2) : <?php echo $ddk->detail["keluarga"]["produksi_perkebunan"]["kapuk"]["luas"] ?><br>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_perkebunan"]["kapuk"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_perkebunan"]["kapuk"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_perkebunan"]["kapuk"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Kemiri</td>
				<td>
					Jumlah Pohon : <?php echo $ddk->detail["keluarga"]["produksi_perkebunan"]["kemiri"]["jumlah"] ?><br>
					Luas Panen (m2) : <?php echo $ddk->detail["keluarga"]["produksi_perkebunan"]["kemiri"]["luas"] ?><br>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_perkebunan"]["kemiri"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_perkebunan"]["kemiri"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_perkebunan"]["kemiri"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Teh</td>
				<td>
					Jumlah Pohon : <?php echo $ddk->detail["keluarga"]["produksi_perkebunan"]["teh"]["jumlah"] ?><br>
					Luas Panen (m2) : <?php echo $ddk->detail["keluarga"]["produksi_perkebunan"]["teh"]["luas"] ?><br>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_perkebunan"]["teh"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_perkebunan"]["teh"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_perkebunan"]["teh"]["pemasaran"] ?>
				</td>
			</tr>
			<?php if(!empty($ddk->detail["keluarga"]["produksi_perkebunan"]["lainnya"]["keterangan"])): ?>
			<tr>
				<td><?php echo $ddk->detail["keluarga"]["produksi_perkebunan"]["lainnya"]["keterangan"] ?></td>
				<td>
					Jumlah Pohon : <?php echo $ddk->detail["keluarga"]["produksi_perkebunan"]["lainnya"]["jumlah"] ?><br>
					Luas Panen (m2) : <?php echo $ddk->detail["keluarga"]["produksi_perkebunan"]["lainnya"]["luas"] ?><br>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_perkebunan"]["lainnya"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_perkebunan"]["lainnya"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_perkebunan"]["lainnya"]["pemasaran"] ?>
				</td>
			</tr>
			<?php endif ?>
			<tr>
				<td colspan="2">E. Hasil Hutan</td>
			</tr>
			<tr>
				<td>Kayu bakar</td>
				<td>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_hutan"]["kayu_bakar"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_hutan"]["kayu_bakar"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_hutan"]["kayu_bakar"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Madu lebah</td>
				<td>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_hutan"]["madu_lebah"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_hutan"]["madu_lebah"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_hutan"]["madu_lebah"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Rotan</td>
				<td>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_hutan"]["rotan"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_hutan"]["rotan"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_hutan"]["rotan"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Damar</td>
				<td>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_hutan"]["damar"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_hutan"]["damar"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_hutan"]["damar"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Bambu</td>
				<td>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_hutan"]["bambu"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_hutan"]["bambu"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_hutan"]["bambu"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Jati</td>
				<td>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_hutan"]["jati"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_hutan"]["jati"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_hutan"]["jati"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Nilam</td>
				<td>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_hutan"]["nilam"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_hutan"]["nilam"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_hutan"]["nilam"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Nira Lontar</td>
				<td>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_hutan"]["nira_lontar"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_hutan"]["nira_lontar"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_hutan"]["nira_lontar"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Tepung Sagu</td>
				<td>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_hutan"]["tepung_sagu"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_hutan"]["tepung_sagu"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_hutan"]["tepung_sagu"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Ijuk Enau</td>
				<td>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_hutan"]["ijuk_enau"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_hutan"]["ijuk_enau"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_hutan"]["ijuk_enau"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Mahoni</td>
				<td>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_hutan"]["mahoni"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_hutan"]["mahoni"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_hutan"]["mahoni"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Cemara</td>
				<td>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_hutan"]["cemara"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_hutan"]["cemara"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_hutan"]["cemara"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Kayu cendana</td>
				<td>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_hutan"]["kayu_cendana"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_hutan"]["kayu_cendana"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_hutan"]["kayu_cendana"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Kayu gaharu</td>
				<td>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_hutan"]["kayu_gaharu"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_hutan"]["kayu_gaharu"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_hutan"]["kayu_gaharu"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Sarang burung</td>
				<td>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_hutan"]["sarang_burung"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_hutan"]["sarang_burung"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_hutan"]["sarang_burung"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Meranti</td>
				<td>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_hutan"]["meranti"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_hutan"]["meranti"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_hutan"]["meranti"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Kayu besi</td>
				<td>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_hutan"]["kayu_besi"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_hutan"]["kayu_besi"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_hutan"]["kayu_besi"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Kayu ulin</td>
				<td>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_hutan"]["kayu_ulin"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_hutan"]["kayu_ulin"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_hutan"]["kayu_ulin"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Kemenyan</td>
				<td>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_hutan"]["kemenyan"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_hutan"]["kemenyan"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_hutan"]["kemenyan"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Gambir</td>
				<td>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_hutan"]["gambir"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_hutan"]["gambir"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_hutan"]["gambir"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Minyak kayu putih</td>
				<td>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_hutan"]["minyak_kayu_putih"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_hutan"]["minyak_kayu_putih"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_hutan"]["minyak_kayu_putih"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Gula Lontar</td>
				<td>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_hutan"]["gula_lontar"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_hutan"]["gula_lontar"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_hutan"]["gula_lontar"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Gula Enau</td>
				<td>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_hutan"]["gula_enau"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_hutan"]["gula_enau"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_hutan"]["gula_enau"]["pemasaran"] ?>
				</td>
			</tr>
			<?php if(!empty($ddk->detail["keluarga"]["produksi_hutan"]["lainnya"]["keterangan"])): ?>
			<tr>
				<td><?php echo $ddk->detail["keluarga"]["produksi_hutan"]["lainnya"]["keterangan"] ?></td>
				<td>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_hutan"]["lainnya"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_hutan"]["lainnya"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_hutan"]["lainnya"]["pemasaran"] ?>
				</td>
			</tr>
			<?php endif ?>
			<tr>
				<td colspan="2">F. Pengolahan Hasil Ternak</td>
			</tr>
			<tr>
				<td>Susu</td>
				<td>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_ternak"]["susu"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_ternak"]["susu"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_ternak"]["susu"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Kulit</td>
				<td>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_ternak"]["kulit"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_ternak"]["kulit"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_ternak"]["kulit"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Telur</td>
				<td>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_ternak"]["telur"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_ternak"]["telur"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_ternak"]["telur"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Daging</td>
				<td>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_ternak"]["daging"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_ternak"]["daging"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_ternak"]["daging"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Madu Lebah</td>
				<td>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_ternak"]["madu_lebah"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_ternak"]["madu_lebah"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_ternak"]["madu_lebah"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Bulu</td>
				<td>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_ternak"]["bulu"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_ternak"]["bulu"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_ternak"]["bulu"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Air liur burung walet</td>
				<td>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_ternak"]["air_liur_burung_walet"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_ternak"]["air_liur_burung_walet"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_ternak"]["air_liur_burung_walet"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Minyak hewani</td>
				<td>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_ternak"]["minyak_hewani"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_ternak"]["minyak_hewani"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_ternak"]["minyak_hewani"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Hiasan/lukisan</td>
				<td>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_ternak"]["hiasan_lukisan"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_ternak"]["hiasan_lukisan"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_ternak"]["hiasan_lukisan"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Kerajinan Cinderamata</td>
				<td>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_ternak"]["kerajinan_cinderamata"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_ternak"]["kerajinan_cinderamata"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_ternak"]["kerajinan_cinderamata"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Dendeng</td>
				<td>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_ternak"]["dendeng"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_ternak"]["dendeng"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_ternak"]["dendeng"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Abon</td>
				<td>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_ternak"]["abon"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_ternak"]["abon"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_ternak"]["abon"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Biogas</td>
				<td>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_ternak"]["biogas"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_ternak"]["biogas"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_ternak"]["biogas"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Telur Asin</td>
				<td>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_ternak"]["telur_asin"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_ternak"]["telur_asin"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_ternak"]["telur_asin"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Kerupuk Kulit</td>
				<td>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_ternak"]["kerupuk_kulit"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_ternak"]["kerupuk_kulit"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_ternak"]["kerupuk_kulit"]["pemasaran"] ?>
				</td>
			</tr>
			<?php if(!empty($ddk->detail["keluarga"]["produksi_ternak"]["lainnya"]["keterangan"])): ?>
			<tr>
				<td><?php echo $ddk->detail["keluarga"]["produksi_ternak"]["lainnya"]["keterangan"] ?></td>
				<td>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_ternak"]["lainnya"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_ternak"]["lainnya"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_ternak"]["lainnya"]["pemasaran"] ?>
				</td>
			</tr>
			<?php endif ?>
			<tr>
				<td colspan="2">G. Perikanan</td>
			</tr>
			<tr>
				<td>Tuna</td>
				<td>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["tuna"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["tuna"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["tuna"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Salmon</td>
				<td>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["salmon"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["salmon"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["salmon"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Tongkol/cakalang</td>
				<td>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["tongkol_cakalang"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["tongkol_cakalang"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["tongkol_cakalang"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Hiu</td>
				<td>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["hiu"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["hiu"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["hiu"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Kakap</td>
				<td>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["kakap"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["kakap"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["kakap"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Tenggiri</td>
				<td>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["tenggiri"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["tenggiri"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["tenggiri"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Jambal</td>
				<td>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["jambal"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["jambal"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["jambal"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Pari</td>
				<td>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["pari"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["pari"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["pari"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Kuwe</td>
				<td>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["kuwe"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["kuwe"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["kuwe"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Belanak</td>
				<td>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["belanak"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["belanak"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["belanak"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Cumi</td>
				<td>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["cumi"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["cumi"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["cumi"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Gurita</td>
				<td>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["gurita"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["gurita"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["gurita"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Sarden</td>
				<td>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["sarden"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["sarden"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["sarden"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Bawal</td>
				<td>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["bawal"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["bawal"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["bawal"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Baronang</td>
				<td>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["baronang"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["baronang"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["baronang"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Kembung</td>
				<td>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["kembung"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["kembung"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["kembung"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Balanak</td>
				<td>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["balanak"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["balanak"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["balanak"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Ikan ekor kuning</td>
				<td>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["ikan_ekor_kuning"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["ikan_ekor_kuning"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["ikan_ekor_kuning"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Kerapu/Sunuk</td>
				<td>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["kerapu_sunuk"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["kerapu_sunuk"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["kerapu_sunuk"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Teripang</td>
				<td>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["teripang"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["teripang"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["teripang"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Barabara</td>
				<td>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["barabara"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["barabara"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["barabara"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Cucut</td>
				<td>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["cucut"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["cucut"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["cucut"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Layur</td>
				<td>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["layur"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["layur"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["layur"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Ayam-ayam</td>
				<td>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["ayam_ayam"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["ayam_ayam"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["ayam_ayam"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Udang/lobster</td>
				<td>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["udang_lobster"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["udang_lobster"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["udang_lobster"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Tembang</td>
				<td>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["tembang"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["tembang"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["tembang"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Bandeng</td>
				<td>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["bandeng"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["bandeng"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["bandeng"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Nener</td>
				<td>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["nener"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["nener"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["nener"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Kerang</td>
				<td>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["kerang"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["kerang"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["kerang"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Kepiting</td>
				<td>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["kepiting"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["kepiting"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["kepiting"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Mas</td>
				<td>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["mas"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["mas"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["mas"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Rajungan</td>
				<td>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["rajungan"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["rajungan"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["rajungan"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Mujair</td>
				<td>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["mujair"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["mujair"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["mujair"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Lele</td>
				<td>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["lele"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["lele"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["lele"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Gabus</td>
				<td>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["gabus"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["gabus"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["gabus"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Patin</td>
				<td>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["patin"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["patin"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["patin"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Nila</td>
				<td>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["nila"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["nila"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["nila"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Sepat</td>
				<td>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["sepat"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["sepat"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["sepat"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Gurame</td>
				<td>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["gurame"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["gurame"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["gurame"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Belut</td>
				<td>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["belut"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["belut"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["belut"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Penyu</td>
				<td>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["penyu"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["penyu"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["penyu"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Rumput laut</td>
				<td>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["rumput_laut"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["rumput_laut"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["rumput_laut"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Kodok</td>
				<td>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["kodok"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["kodok"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["kodok"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Katak</td>
				<td>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["katak"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["katak"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["katak"]["pemasaran"] ?>
				</td>
			</tr>
			<?php if(!empty($ddk->detail["keluarga"]["produksi_perikanan"]["lainnya"]["keterangan"])): ?>
			<tr>
				<td><?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["lainnya"]["keterangan"] ?></td>
				<td>
					Produksi : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["lainnya"]["produksi"] ?><br>
					Satuan : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["lainnya"]["satuan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["lainnya"]["pemasaran"] ?>
				</td>
			</tr>
			<?php endif ?>

			<tr>
				<td colspan="2">1.7 Kepemilikan Jenis Ternak Keluarga Tahun Ini</td>
			</tr>
			<tr>
				<td>Sapi</td>
				<td><?php echo $ddk->detail["keluarga"]["jenis_ternak"]["sapi"] ?></td>
			</tr>
			<tr>
				<td>Kerbau</td>
				<td><?php echo $ddk->detail["keluarga"]["jenis_ternak"]["kerbau"] ?></td>
			</tr>
			<tr>
				<td>Babi</td>
				<td><?php echo $ddk->detail["keluarga"]["jenis_ternak"]["babi"] ?></td>
			</tr>
			<tr>
				<td>Ayam kampung</td>
				<td><?php echo $ddk->detail["keluarga"]["jenis_ternak"]["ayam_kampung"] ?></td>
			</tr>
			<tr>
				<td>Ayam Broiler</td>
				<td><?php echo $ddk->detail["keluarga"]["jenis_ternak"]["ayam_broiler"] ?></td>
			</tr>
			<tr>
				<td>Bebek</td>
				<td><?php echo $ddk->detail["keluarga"]["jenis_ternak"]["bebek"] ?></td>
			</tr>
			<tr>
				<td>Kuda</td>
				<td><?php echo $ddk->detail["keluarga"]["jenis_ternak"]["kuda"] ?></td>
			</tr>
			
			<?php if(!empty($ddk->detail["keluarga"]["jenis_ternak"]["lainnya"]["keterangan"])): ?>
			<tr>
				<td><?php echo $ddk->detail["keluarga"]["jenis_ternak"]["lainnya"]["keterangan"] ?></td>
				<td><?php echo $ddk->detail["keluarga"]["jenis_ternak"]["lainnya"]["jumlah"] ?></td>
			</tr>
			<?php endif ?>
			
			<tr>
				<td colspan="2">1.8 Alat Produksi Budidaya Ikan</td>
			</tr>
			<tr>
				<td>Karamba</td>
				<td><?php echo $ddk->detail["keluarga"]["alat_perikanan"]["karamba"] ?></td>
			</tr>
			<tr>
				<td>Tambak</td>
				<td><?php echo $ddk->detail["keluarga"]["alat_perikanan"]["tambak"] ?></td>
			</tr>
			<tr>
				<td>Jermal</td>
				<td><?php echo $ddk->detail["keluarga"]["alat_perikanan"]["jermal"] ?></td>
			</tr>
			<tr>
				<td>Pancing</td>
				<td><?php echo $ddk->detail["keluarga"]["alat_perikanan"]["pancing"] ?></td>
			</tr>
			<tr>
				<td>Pukat</td>
				<td><?php echo $ddk->detail["keluarga"]["alat_perikanan"]["pukat"] ?></td>
			</tr>
			<tr>
				<td>Jala</td>
				<td><?php echo $ddk->detail["keluarga"]["alat_perikanan"]["jala"] ?></td>
			</tr>
			<?php if(!empty($ddk->detail["keluarga"]["alat_perikanan"]["lainnya1"]["keterangan"])): ?>
			<tr>
				<td><?php echo $ddk->detail["keluarga"]["alat_perikanan"]["lainnya1"]["keterangan"] ?></td>
				<td><?php echo $ddk->detail["keluarga"]["alat_perikanan"]["lainnya1"]["jumlah"] ?></td>
			</tr>
			<?php endif ?>
			<?php if(!empty($ddk->detail["keluarga"]["alat_perikanan"]["lainnya2"]["keterangan"])): ?>
			<tr>
				<td><?php echo $ddk->detail["keluarga"]["alat_perikanan"]["lainnya2"]["keterangan"] ?></td>
				<td><?php echo $ddk->detail["keluarga"]["alat_perikanan"]["lainnya2"]["jumlah"] ?></td>
			</tr>
			<?php endif ?>
			
			<tr>
				<td colspan="2">1.9 Pemanfaatan Danau/Sungai/Waduk/Situ/Mata Air oleh Keluarga</td>
			</tr>
			
			
			
			
			<tr>
				<td>Buang air besar</td>
				<td><?php echo $ddk->detail["keluarga"]["pemanfaatan_air"]["buang_air_besar"] ?></td>
			</tr>
			
			
			
			<?php if(!empty($ddk->detail["keluarga"]["pemanfaatan_air"]["lainnya"]["keterangan"])): ?>
			<tr>
				<td><?php echo $ddk->detail["keluarga"]["pemanfaatan_air"]["lainnya"]["keterangan"] ?></td>
				<td><?php echo $ddk->detail["keluarga"]["pemanfaatan_air"]["lainnya"]["jumlah"] ?></td>
			</tr>
			<?php endif ?>


			
			<tr>
				<td colspan="2">1.11 Penguasaan Aset Tanah oleh Keluarga</td>
			</tr>
			
			<?php if(!empty($ddk->detail["keluarga"]["aset_transportasi"]["lainnya"]["keterangan"])): ?>
			<tr>
				<td><?php echo $ddk->detail["keluarga"]["aset_transportasi"]["lainnya"]["keterangan"] ?></td>
				<td><?php echo $ddk->detail["keluarga"]["aset_transportasi"]["lainnya"]["jumlah"] ?></td>
			</tr>
			<?php endif ?>

			<tr>
				<td colspan="2">1.13 Aset Sarana Produksi</td>
			</tr>
			

			<?php if(!empty($ddk->detail["keluarga"]["aset_produksi"]["lainnya"]["keterangan"])): ?>
			<tr>
				<td><?php echo $ddk->detail["keluarga"]["aset_produksi"]["lainnya"]["keterangan"] ?></td>
				<td><?php echo $ddk->detail["keluarga"]["aset_produksi"]["lainnya"]["jumlah"] ?></td>
			</tr>
			<?php endif ?>

			<tr>
				<td colspan="2">1.14 Aset Perumahan</td>
			</tr>
			<tr>
				<td colspan="2">Dinding</td>
			</tr>


			<?php if(!empty($ddk->detail["keluarga"]["aset_lain"]["lainnya1"]["keterangan"])): ?>
			<tr>
				<td><?php echo $ddk->detail["keluarga"]["aset_lain"]["lainnya1"]["keterangan"] ?></td>
				<td><?php echo $ddk->detail["keluarga"]["aset_lain"]["lainnya1"]["jumlah"] ?></td>
			</tr>
			<?php endif ?>
			<?php if(!empty($ddk->detail["keluarga"]["aset_lain"]["lainnya2"]["keterangan"])): ?>
			<tr>
				<td><?php echo $ddk->detail["keluarga"]["aset_lain"]["lainnya2"]["keterangan"] ?></td>
				<td><?php echo $ddk->detail["keluarga"]["aset_lain"]["lainnya2"]["jumlah"] ?></td>
			</tr>
			<?php endif ?>
			<?php if(!empty($ddk->detail["keluarga"]["aset_lain"]["lainnya3"]["keterangan"])): ?>
			<tr>
				<td><?php echo $ddk->detail["keluarga"]["aset_lain"]["lainnya3"]["keterangan"] ?></td>
				<td><?php echo $ddk->detail["keluarga"]["aset_lain"]["lainnya3"]["jumlah"] ?></td>
			</tr>
			<?php endif ?>

			
			<tr>
				<td>Ibu hamil periksa di Posyandu</td>
				<td><?php echo $ddk->detail["keluarga"]["kualitas_ibu_hamil"]["posyandu"] ?></td>
			</tr>
			
			
			<?php if(!empty($ddk->detail["keluarga"]["kualitas_persalinan"]["tempat"]["lainnya"]["keterangan"])): ?>
			<tr>
				<td><?php echo $ddk->detail["keluarga"]["kualitas_persalinan"]["tempat"]["lainnya"]["keterangan"] ?></td>
				<td><?php echo $ddk->detail["keluarga"]["kualitas_persalinan"]["tempat"]["lainnya"]["jumlah"] ?></td>
			</tr>
			<?php endif ?>
			<tr>
				<td colspan="2">Pertolongan Persalinan</td>
			</tr>

			<?php if(!empty($ddk->detail["keluarga"]["kualitas_persalinan"]["pertolongan"]["lainnya"]["keterangan"])): ?>
			<tr>
				<td><?php echo $ddk->detail["keluarga"]["kualitas_persalinan"]["pertolongan"]["lainnya"]["keterangan"] ?></td>
				<td><?php echo $ddk->detail["keluarga"]["kualitas_persalinan"]["pertolongan"]["lainnya"]["jumlah"] ?></td>
			</tr>
			<?php endif ?>

			<tr>
				<td colspan="2">1.19 Cakupan Imunisasi</td>
			</tr>

			
			<?php if(!empty($ddk->detail["keluarga"]["penderita_sakit"]["lainnya2"]["keterangan"])): ?>
			<tr>
				<td><?php echo $ddk->detail["keluarga"]["penderita_sakit"]["lainnya2"]["keterangan"] ?></td>
				<td><?php echo $ddk->detail["keluarga"]["penderita_sakit"]["lainnya2"]["jumlah"] ?></td>
			</tr>
			<?php endif ?>
			<?php if(!empty($ddk->detail["keluarga"]["penderita_sakit"]["lainnya3"]["keterangan"])): ?>
			<tr>
				<td><?php echo $ddk->detail["keluarga"]["penderita_sakit"]["lainnya3"]["keterangan"] ?></td>
				<td><?php echo $ddk->detail["keluarga"]["penderita_sakit"]["lainnya3"]["jumlah"] ?></td>
			</tr>
			<?php endif ?>
			
			<tr>
				<td colspan="2">1.21 Perilaku hidup bersih dan sehat dalam Keluarga</td>
			</tr>
						
			<?php if(!empty($ddk->detail["keluarga"]["lembaga_dimiliki"]["lainnya1"]["keterangan"])): ?>
			<tr>
				<td><?php echo $ddk->detail["keluarga"]["pola_makan"]["lainnya1"]["keterangan"] ?></td>
				<td><?php echo $ddk->detail["keluarga"]["pola_makan"]["lainnya1"]["jumlah"] ?></td>
			</tr>
			<?php endif ?>
			<?php if(!empty($ddk->detail["keluarga"]["lembaga_dimiliki"]["lainnya2"]["keterangan"])): ?>
			<tr>
				<td><?php echo $ddk->detail["keluarga"]["pola_makan"]["lainnya2"]["keterangan"] ?></td>
				<td><?php echo $ddk->detail["keluarga"]["pola_makan"]["lainnya2"]["jumlah"] ?></td>
			</tr>
			<?php endif ?>

			<tr>
				<td colspan="2">1.23 Kebiasaan berobat bila sakit dalam keluarga</td>
			</tr>

			<?php if(!empty($ddk->detail["keluarga"]["kebiasaan_berobat"]["lainnya"]["keterangan"])): ?>
			<tr>
				<td><?php echo $ddk->detail["keluarga"]["kebiasaan_berobat"]["lainnya"]["keterangan"] ?></td>
				<td><?php echo $ddk->detail["keluarga"]["kebiasaan_berobat"]["lainnya"]["jumlah"] ?></td>
			</tr>
			<?php endif ?>

			<tr>
				<td colspan="2">1.24 Status Gizi Balita dalam Keluarga</td>
			</tr>


			<tr>
				<td colspan="2">1.26 Kerukunan</td>
			</tr>
			
			<tr>
				<td>507. g. Frekuensi kejadian bencana gunung meletus</td>
				<td><?php echo $ddk->detail["keluarga"]["pencurian"]["korban_keluarga"] ?></td>
			</tr>
			<?php if(!empty($ddk->detail["keluarga"]["pencurian"]["lainnya1"]["keterangan"])): ?>
			<tr>
				<td><?php echo $ddk->detail["keluarga"]["pencurian"]["lainnya1"]["keterangan"] ?></td>
				<td><?php echo $ddk->detail["keluarga"]["pencurian"]["lainnya1"]["jumlah"] ?></td>
			</tr>
			<?php endif ?>
			<?php if(!empty($ddk->detail["keluarga"]["pencurian"]["lainnya2"]["keterangan"])): ?>
			<tr>
				<td><?php echo $ddk->detail["keluarga"]["pencurian"]["lainnya2"]["keterangan"] ?></td>
				<td><?php echo $ddk->detail["keluarga"]["pencurian"]["lainnya2"]["jumlah"] ?></td>
			</tr>
			<?php endif ?>

			<tr>
				<td colspan="2">1.29 Penjarahan</td>
			</tr>

			<?php if(!empty($ddk->detail["keluarga"]["penjarahan"]["lainnya"]["keterangan"])): ?>
			<tr>
				<td><?php echo $ddk->detail["keluarga"]["penjarahan"]["lainnya"]["keterangan"] ?></td>
				<td><?php echo $ddk->detail["keluarga"]["penjarahan"]["lainnya"]["jumlah"] ?></td>
			</tr>
			<?php endif ?>

			<tr>
				<td colspan="2">1.30 Perjudian</td>
			</tr>

			<?php if(!empty($ddk->detail["keluarga"]["perjudian"]["lainnya"]["keterangan"])): ?>
			<tr>
				<td><?php echo $ddk->detail["keluarga"]["perjudian"]["lainnya"]["keterangan"] ?></td>
				<td><?php echo $ddk->detail["keluarga"]["perjudian"]["lainnya"]["jumlah"] ?></td>
			</tr>
			<?php endif ?>


			<tr>
				<td>Adanya pemukulan/tindakan fisik antara anak dengan pembantu</td>
				<td><?php echo $ddk->detail["keluarga"]["kekerasan"]["pemadp"] ?></td>
			</tr>
			<tr>
				<td>Adanya pemukulan/tindakan fisik antara orang tua dengan pembantu</td>
				<td><?php echo $ddk->detail["keluarga"]["kekerasan"]["pemotdp"] ?></td>
			</tr>


			<tr>
				<td colspan="2">1.36 Masalah Kesejahteraan Keluarga</td>
			</tr>
			<tr>
				<td>Ada anggota keluarga yang mengemis</td>
				<td><?php echo $ddk->detail["keluarga"]["kesejahteraan"]["mengemis"] ?></td>
			</tr>
			<tr>
				<td>Ada anggota keluarga yang bermalam/tidur di jalanan/emperan toko/ kolong jembatan</td>
				<td><?php echo $ddk->detail["keluarga"]["kesejahteraan"]["tidur_luar"] ?></td>
			</tr>
			<tr>
				<td>Ada anggota keluarga yang termasuk manusia lanjut usia (di atas 60 thn)</td>
				<td><?php echo $ddk->detail["keluarga"]["kesejahteraan"]["lansia"] ?></td>
			</tr>
			<tr>
				<td>Ada anak anggota keluarga yang mengemis</td>
				<td><?php echo $ddk->detail["keluarga"]["kesejahteraan"]["anak_mengemis"] ?></td>
			</tr>
			<tr>
				<td>Ada anak dan anggota keluarga yang menjadi pengamen</td>
				<td><?php echo $ddk->detail["keluarga"]["kesejahteraan"]["anak_pengamen"] ?></td>
			</tr>
			<tr>
				<td>Ada anggota keluarga yang gila/stres</td>
				<td><?php echo $ddk->detail["keluarga"]["kesejahteraan"]["stress"] ?></td>
			</tr>
			<tr>
				<td>Ada anggota keluarga yang cacat fisik</td>
				<td><?php echo $ddk->detail["keluarga"]["kesejahteraan"]["cacat_fisik"] ?></td>
			</tr>
			<tr>
				<td>Ada anggota keluarga yang cacat mental</td>
				<td><?php echo $ddk->detail["keluarga"]["kesejahteraan"]["cacat_mental"] ?></td>
			</tr>
			<tr>
				<td>Ada anggota keluarga yang kelainan kulit</td>
				<td><?php echo $ddk->detail["keluarga"]["kesejahteraan"]["kelainan_kulit"] ?></td>
			</tr>
			<tr>
				<td>Ada anggota keluarga yang menjadi pengamen</td>
				<td><?php echo $ddk->detail["keluarga"]["kesejahteraan"]["keluarga_pengamen"] ?></td>
			</tr>
			<tr>
				<td>Anggota keluarga yatim/piatu</td>
				<td><?php echo $ddk->detail["keluarga"]["kesejahteraan"]["yatim"] ?></td>
			</tr>
			<tr>
				<td>Keluarga janda</td>
				<td><?php echo $ddk->detail["keluarga"]["kesejahteraan"]["janda"] ?></td>
			</tr>
			<tr>
				<td>Keluarga duda</td>
				<td><?php echo $ddk->detail["keluarga"]["kesejahteraan"]["duda"] ?></td>
			</tr>
			<tr>
				<td>Tinggal di bantaran sungai</td>
				<td><?php echo $ddk->detail["keluarga"]["kesejahteraan"]["sungai"] ?></td>
			</tr>
			<tr>
				<td>Tinggal di jalur hijau</td>
				<td><?php echo $ddk->detail["keluarga"]["kesejahteraan"]["jalur_hijau"] ?></td>
			</tr>
			<tr>
				<td>Tinggal di kawasan jalur rel kereta api</td>
				<td><?php echo $ddk->detail["keluarga"]["kesejahteraan"]["rel"] ?></td>
			</tr>
			<tr>
				<td>Tinggal di kawasan jalur sutet</td>
				<td><?php echo $ddk->detail["keluarga"]["kesejahteraan"]["sutet"] ?></td>
			</tr>
			<tr>
				<td>Tinggal di kawasan kumuh dan padat pemukiman</td>
				<td><?php echo $ddk->detail["keluarga"]["kesejahteraan"]["kumuh"] ?></td>
			</tr>
			<tr>
				<td>Ada anggota keluarga yang menganggur</td>
				<td><?php echo $ddk->detail["keluarga"]["kesejahteraan"]["menganggur"] ?></td>
			</tr>
			<tr>
				<td>Ada anak yang membantu orang tua mendapatkan penghasilan</td>
				<td><?php echo $ddk->detail["keluarga"]["kesejahteraan"]["anak_kerja"] ?></td>
			</tr>
			<tr>
				<td>Kepala keluarga perempuan</td>
				<td><?php echo $ddk->detail["keluarga"]["kesejahteraan"]["kepala_perempuan"] ?></td>
			</tr>
			<tr>
				<td>Ada anggota keluarga eks narapidana</td>
				<td><?php echo $ddk->detail["keluarga"]["kesejahteraan"]["eks_narapidana"] ?></td>
			</tr>
			<tr>
				<td>Tinggal di desa/kelurahan rawan banjir</td>
				<td><?php echo $ddk->detail["keluarga"]["kesejahteraan"]["banjir"] ?></td>
			</tr>
			<tr>
				<td>Tinggal di daerah rawan bencana tsunami</td>
				<td><?php echo $ddk->detail["keluarga"]["kesejahteraan"]["tsunami"] ?></td>
			</tr>
			<tr>
				<td>Tinggal di desa/kelurahan rawan gunung meletus</td>
				<td><?php echo $ddk->detail["keluarga"]["kesejahteraan"]["gunung_meletus"] ?></td>
			</tr>
			<tr>
				<td>Tinggal di jalur rawan gempa bumi</td>
				<td><?php echo $ddk->detail["keluarga"]["kesejahteraan"]["gempa"] ?></td>
			</tr>
			<tr>
				<td>Tinggal di kawasan rawan tanah longsor</td>
				<td><?php echo $ddk->detail["keluarga"]["kesejahteraan"]["longsor"] ?></td>
			</tr>
			<tr>
				<td>Tinggal di kawasan rawan kebakaran</td>
				<td><?php echo $ddk->detail["keluarga"]["kesejahteraan"]["kebakaran"] ?></td>
			</tr>
			<tr>
				<td>Tinggal di desa/kelurahan rawan kelaparan</td>
				<td><?php echo $ddk->detail["keluarga"]["kesejahteraan"]["kelaparan"] ?></td>
			</tr>
			<tr>
				<td>Tinggal di desa/kelurahan rawan air bersih</td>
				<td><?php echo $ddk->detail["keluarga"]["kesejahteraan"]["air_bersih"] ?></td>
			</tr>
			<tr>
				<td>Tinggal di desa/kelurahan rawan kekeringan</td>
				<td><?php echo $ddk->detail["keluarga"]["kesejahteraan"]["kekeringan"] ?></td>
			</tr>
			<tr>
				<td>Tinggal di desa/kelurahan rawan gagal tanam/panen</td>
				<td><?php echo $ddk->detail["keluarga"]["kesejahteraan"]["gagal_panen"] ?></td>
			</tr>
			<tr>
				<td>Tinggal di daerah kawasan kering, tandus & kritis</td>
				<td><?php echo $ddk->detail["keluarga"]["kesejahteraan"]["tandus"] ?></td>
			</tr>
			<?php if(!empty($ddk->detail["keluarga"]["kesejahteraan"]["lainnya"]["keterangan"])): ?>
			<tr>
				<td><?php echo $ddk->detail["keluarga"]["kesejahteraan"]["lainnya"]["keterangan"] ?></td>
				<td><?php echo $ddk->detail["keluarga"]["kesejahteraan"]["lainnya"]["jumlah"] ?></td>
			</tr>
			<?php endif ?>

			<tr>
				<td colspan="2">2. Data Anggota Keluarga</td>
			</tr>
			<tr>
				<td colspan="2">2.1 Biodata</td>
			</tr>
			<tr>
				<td>Nomor Urut</td>
				<td><?php echo $ddk->anggota[0]["no_urut"] ?></td>
			</tr>
			<tr>
				<td>Nomor Induk Kependudukan (NIK)</td>
				<td><?php echo $ddk->anggota[0]["nik"] ?></td>
			</tr>
			<tr>
				<td>Nama Lengkap</td>
				<td><?php echo $ddk->anggota[0]["nama"] ?></td>
			</tr>
			<tr>
				<td>Nomor Akte Kelahiran</td>
				<td><?php echo $ddk->anggota[0]["no_akte"] ?></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td><?php echo $ddk->anggota[0]["jenis_kelamin"] == "laki" ? "Laki-laki" : "Perempuan"; ?></td>
			</tr>
			<tr>
				<td>Hubungan dengan Kepala Keluarga</td>
				<td>
					<?php echo $ddk->anggota[0]["hubungan"] == "istri" ? "Istri" : ""; ?>
					<?php echo $ddk->anggota[0]["hubungan"] == "suami" ? "Suami" : ""; ?>
					<?php echo $ddk->anggota[0]["hubungan"] == "anak" ? "Anak" : ""; ?>
					<?php echo $ddk->anggota[0]["hubungan"] == "cucu" ? "Cucu" : ""; ?>
					<?php echo $ddk->anggota[0]["hubungan"] == "mertua" ? "Mertua" : ""; ?>
					<?php echo $ddk->anggota[0]["hubungan"] == "menantu" ? "Menantu" : ""; ?>
					<?php echo $ddk->anggota[0]["hubungan"] == "keponakan" ? "Keponakan" : ""; ?>
					<?php echo $ddk->anggota[0]["hubungan"] == "lainnya" ? "Lainnya" : ""; ?>
				</td>
			</tr>
			<tr>
				<td>Tempat Lahir</td>
				<td><?php echo $ddk->anggota[0]["tempat_lahir"] ?></td>
			</tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td><?php echo $ddk->anggota[0]["tanggal_lahir"] ?></td>
			</tr>
			<tr>
				<td>Tanggal Pencatatan</td>
				<td><?php echo $ddk->anggota[0]["tanggal_pencatatan"] ?></td>
			</tr>
			
			
			
			<tr>
				<td>Kewarganegaraan/Etnis/Suku</td>
				<td><?php echo $ddk->anggota[0]["kewarganegaraan"] ?></td>
			</tr>
			
			<tr>
				<td>Mata Pencaharian Pokok/Pekerjaan</td>
				<td><?php echo $ddk->anggota[0]["pekerjaan"] ?></td>
			</tr>
			<tr>
				<td>Nama Bapak / Ibu Kandung</td>
				<td><?php echo $ddk->anggota[0]["nama_ortu"] ?></td>
			</tr>
			<tr>
				<td>Akseptor KB</td>
				<td>
					<?php echo $ddk->anggota[0]["kb"] == "Pil" ? "Pil" : ""; ?>
					<?php echo $ddk->anggota[0]["kb"] == "Spiral" ? "Spiral" : ""; ?>
					<?php echo $ddk->anggota[0]["kb"] == "Suntik" ? "Suntik" : ""; ?>
					<?php echo $ddk->anggota[0]["kb"] == "Susuk" ? "Susuk" : ""; ?>
					<?php echo $ddk->anggota[0]["kb"] == "Kondom" ? "Kondom" : ""; ?>
					<?php echo $ddk->anggota[0]["kb"] == "Vaksetomi" ? "Vaksetomi" : ""; ?>
					<?php echo $ddk->anggota[0]["kb"] == "Tubektomi" ? "Tubektomi" : ""; ?>
				</td>
			</tr>

			<tr>
				<td colspan="2">2.2 Cacat Menurut Jenis</td>
			</tr>
			<tr>
				<td colspan="2">Cacat Fisik</td>
			</tr>
			<tr>
				<td>Tuna rungu</td>
				<?php echo $ddk->anggota[0]["cacat_fisik"]["tuli"] ?>
			</tr>
			<tr>
				<td>Tuna wicara</td>
				<?php echo $ddk->anggota[0]["cacat_fisik"]["bisu"] ?>
			</tr>
			<tr>
				<td>Tuna netra</td>
				<?php echo $ddk->anggota[0]["cacat_fisik"]["buta"] ?>
			</tr>
			<tr>
				<td>Lumpuh</td>
				<?php echo $ddk->anggota[0]["cacat_fisik"]["lumpuh"] ?>
			</tr>
			<tr>
				<td>Sumbing</td>
				<?php echo $ddk->anggota[0]["cacat_fisik"]["sumbing"] ?>
			</tr>
			<?php if(!empty($ddk->anggota[0]["cacat_fisik"]["lainnya"]["keterangan"])): ?>
			<tr>
				<td><?php echo $ddk->anggota[0]["cacat_fisik"]["lainnya"]["keterangan"] ?></td>
				<?php echo $ddk->anggota[0]["cacat_fisik"]["lainnya"]["jumlah"] ?>
			</tr>
			<?php endif ?>
			<tr>
				<td colspan="2">Cacat Mental</td>
			</tr>
			<tr>
				<td>Idiot</td>
				<?php echo $ddk->anggota[0]["cacat_mental"]["idiot"] ?>
			</tr>
			<tr>
				<td>Gila</td>
				<?php echo $ddk->anggota[0]["cacat_mental"]["gila"] ?>
			</tr>
			<tr>
				<td>Stress</td>
				<?php echo $ddk->anggota[0]["cacat_mental"]["stress"] ?>
			</tr>
			<?php if(!empty($ddk->anggota[0]["cacat_mental"]["lainnya"]["keterangan"])): ?>
			<tr>
				<td><?php echo $ddk->anggota[0]["cacat_mental"]["lainnya"]["keterangan"] ?></td>
				<?php echo $ddk->anggota[0]["cacat_mental"]["lainnya"]["jumlah"] ?>
			</tr>
			<?php endif ?>

			<tr>
				<td colspan="2">2.3. Kedudukan Anggota Keluarga sebagai Wajib Pajak dan Retribusi</td>
			</tr>
			<tr>
				<td>Wajib Pajak Bumi dan Bangunan</td>
				<td><?php echo $ddk->anggota[0]["pajak_retribusi"]["pbb"] ?></td>
			</tr>
			<tr>
				<td>Wajib Pajak Penghasilan Perorangan</td>
				<td><?php echo $ddk->anggota[0]["pajak_retribusi"]["ppp"] ?></td>
			</tr>
			<tr>
				<td>Wajib Pajak Badan/Perusahaan</td>
				<td><?php echo $ddk->anggota[0]["pajak_retribusi"]["pb"] ?></td>
			</tr>
			<tr>
				<td>Wajib Pajak Kendaraan Bermotor</td>
				<td><?php echo $ddk->anggota[0]["pajak_retribusi"]["pkb"] ?></td>
			</tr>
			<tr>
				<td>Wajib Retribusi Kebersihan</td>
				<td><?php echo $ddk->anggota[0]["pajak_retribusi"]["kebersihan"] ?></td>
			</tr>
			<tr>
				<td>Wajib Retribusi Keamanan</td>
				<td><?php echo $ddk->anggota[0]["pajak_retribusi"]["keamanan"] ?></td>
			</tr>
			<tr>
				<td>Wajib iuran</td>
				<td><?php echo $ddk->anggota[0]["pajak_retribusi"]["iuran"] ?></td>
			</tr>
			<tr>
				<td>Wajib pungutan</td>
				<td><?php echo $ddk->anggota[0]["pajak_retribusi"]["pungutan"] ?></td>
			</tr>
			<?php if(!empty($ddk->anggota[0]["pajak_retribusi"]["lainnya"]["keterangan"])): ?>
			<tr>
				<td><?php echo $ddk->anggota[0]["pajak_retribusi"]["lainnya"]["keterangan"] ?></td>
				<td><?php echo $ddk->anggota[0]["pajak_retribusi"]["lainnya"]["jumlah"] ?></td>
			</tr>
			<?php endif ?>

			<tr>
				<td colspan="2">2.4 Lembaga Pemerintahan Yang Diikuti Anggota Keluarga</td>
			</tr>
			<tr>
				<td>Kepala Desa/Lurah</td>
				<td><?php echo $ddk->anggota[0]["pemerintahan"]["kepala_desa"] ?></td>
			</tr>
			<tr>
				<td>Sekretaris Desa/Kelurahan</td>
				<td><?php echo $ddk->anggota[0]["pemerintahan"]["sekretaris_desa"] ?></td>
			</tr>
			<tr>
				<td>Kepala Urusan</td>
				<td><?php echo $ddk->anggota[0]["pemerintahan"]["kepala_urusan"] ?></td>
			</tr>
			<tr>
				<td>Kepala Dusun/Lingkungan</td>
				<td><?php echo $ddk->anggota[0]["pemerintahan"]["kepala_dusun"] ?></td>
			</tr>
			<tr>
				<td>Staf Desa/Kelurahan</td>
				<td><?php echo $ddk->anggota[0]["pemerintahan"]["staf_desa"] ?></td>
			</tr>
			<tr>
				<td>Ketua BPD</td>
				<td><?php echo $ddk->anggota[0]["pemerintahan"]["ketua_bpd"] ?></td>
			</tr>
			<tr>
				<td>Wakil Ketua BPD</td>
				<td><?php echo $ddk->anggota[0]["pemerintahan"]["wakil_ketua_bpd"] ?></td>
			</tr>
			<tr>
				<td>Sekretaris BPD</td>
				<td><?php echo $ddk->anggota[0]["pemerintahan"]["sekretaris_bpd"] ?></td>
			</tr>
			<tr>
				<td>Anggota BPD</td>
				<td><?php echo $ddk->anggota[0]["pemerintahan"]["anggota_bpd"] ?></td>
			</tr>
			<?php if(!empty($ddk->anggota[0]["pemerintahan"]["lainnya"]["keterangan"])): ?>
			<tr>
				<td><?php echo $ddk->anggota[0]["pemerintahan"]["lainnya"]["keterangan"] ?></td>
				<td><?php echo $ddk->anggota[0]["pemerintahan"]["lainnya"]["jumlah"] ?></td>
			</tr>
			<?php endif ?>

			<tr>
				<td colspan="2">2.5 Lembaga Kemasyarakatan Yang Diikuti Anggota Keluarga</td>
			</tr>
			<tr>
				<td>Pengurus RT</td>
				<td><?php echo $ddk->anggota[0]["kemasyarakatan"]["prt"] ?></td>
			</tr>
			<tr>
				<td>Anggota Pengurus RT</td>
				<td><?php echo $ddk->anggota[0]["kemasyarakatan"]["aprt"] ?></td>
			</tr>
			<tr>
				<td>Pengurus RW</td>
				<td><?php echo $ddk->anggota[0]["kemasyarakatan"]["prw"] ?></td>
			</tr>
			<tr>
				<td>Anggota Pengurus RW</td>
				<td><?php echo $ddk->anggota[0]["kemasyarakatan"]["aprw"] ?></td>
			</tr>
			<tr>
				<td>Pengurus LKMD/K/LPM</td>
				<td><?php echo $ddk->anggota[0]["kemasyarakatan"]["plkmdklpm"] ?></td>
			</tr>
			<tr>
				<td>Anggota LKMD/K/LPM</td>
				<td><?php echo $ddk->anggota[0]["kemasyarakatan"]["alkmdklpm"] ?></td>
			</tr>
			<tr>
				<td>Pengurus PKK</td>
				<td><?php echo $ddk->anggota[0]["kemasyarakatan"]["ppkk"] ?></td>
			</tr>
			<tr>
				<td>Anggota PKK</td>
				<td><?php echo $ddk->anggota[0]["kemasyarakatan"]["apkk"] ?></td>
			</tr>
			<tr>
				<td>Pengurus Lembaga Adat</td>
				<td><?php echo $ddk->anggota[0]["kemasyarakatan"]["pla"] ?></td>
			</tr>
			<tr>
				<td>Pengurus Karang Taruna</td>
				<td><?php echo $ddk->anggota[0]["kemasyarakatan"]["pkt"] ?></td>
			</tr>
			<tr>
				<td>Anggota Karang Taruna</td>
				<td><?php echo $ddk->anggota[0]["kemasyarakatan"]["akt"] ?></td>
			</tr>
			<tr>
				<td>Pengurus Hansip/Linmas</td>
				<td><?php echo $ddk->anggota[0]["kemasyarakatan"]["phl"] ?></td>
			</tr>
			<tr>
				<td>Pengurus Poskamling</td>
				<td><?php echo $ddk->anggota[0]["kemasyarakatan"]["pp"] ?></td>
			</tr>
			<tr>
				<td>Pengurus Organisasi Perempuan</td>
				<td><?php echo $ddk->anggota[0]["kemasyarakatan"]["pop"] ?></td>
			</tr>
			<tr>
				<td>Anggota Organisasi Perempuan</td>
				<td><?php echo $ddk->anggota[0]["kemasyarakatan"]["aop"] ?></td>
			</tr>
			<tr>
				<td>Pengurus Organisasi Bapak-bapak</td>
				<td><?php echo $ddk->anggota[0]["kemasyarakatan"]["pob"] ?></td>
			</tr>
			<tr>
				<td>Anggota Organisasi Bapak-bapak</td>
				<td><?php echo $ddk->anggota[0]["kemasyarakatan"]["aob"] ?></td>
			</tr>
			<tr>
				<td>Pengurus Organisasi keagamaan</td>
				<td><?php echo $ddk->anggota[0]["kemasyarakatan"]["pok"] ?></td>
			</tr>
			<tr>
				<td>Anggota Organisasi keagamaan</td>
				<td><?php echo $ddk->anggota[0]["kemasyarakatan"]["aok"] ?></td>
			</tr>
			<tr>
				<td>Pengurus Organisasi profesi wartawan</td>
				<td><?php echo $ddk->anggota[0]["kemasyarakatan"]["popw"] ?></td>
			</tr>
			<tr>
				<td>Anggota Organisasi profesi wartawan</td>
				<td><?php echo $ddk->anggota[0]["kemasyarakatan"]["aopw"] ?></td>
			</tr>
			<tr>
				<td>Pengurus Posyandu</td>
				<td><?php echo $ddk->anggota[0]["kemasyarakatan"]["pposyandu"] ?></td>
			</tr>
			<tr>
				<td>Pengurus Posyantekdes</td>
				<td><?php echo $ddk->anggota[0]["kemasyarakatan"]["pposyantekdes"] ?></td>
			</tr>
			<tr>
				<td>Pengurus Organisasi Kelompok Tani/Nelayan</td>
				<td><?php echo $ddk->anggota[0]["kemasyarakatan"]["poktan"] ?></td>
			</tr>
			<tr>
				<td>Anggota Organisasi Kelompok Tani/Nelayan</td>
				<td><?php echo $ddk->anggota[0]["kemasyarakatan"]["aoktan"] ?></td>
			</tr>
			<tr>
				<td>Pengurus Lembaga Gotong royong</td>
				<td><?php echo $ddk->anggota[0]["kemasyarakatan"]["plgr"] ?></td>
			</tr>
			<tr>
				<td>Anggota Lembaga Gotong royong</td>
				<td><?php echo $ddk->anggota[0]["kemasyarakatan"]["algr"] ?></td>
			</tr>
			<tr>
				<td>Pengurus Organisasi Profesi guru</td>
				<td><?php echo $ddk->anggota[0]["kemasyarakatan"]["popg"] ?></td>
			</tr>
			<tr>
				<td>Anggota Organisasi Profesi guru</td>
				<td><?php echo $ddk->anggota[0]["kemasyarakatan"]["aopg"] ?></td>
			</tr>
			<tr>
				<td>Pengurus Organisasi profesi dokter/tenaga medis</td>
				<td><?php echo $ddk->anggota[0]["kemasyarakatan"]["popdtm"] ?></td>
			</tr>
			<tr>
				<td>Anggota Organisasi profesi/tenaga medis</td>
				<td><?php echo $ddk->anggota[0]["kemasyarakatan"]["aoptm"] ?></td>
			</tr>
			<tr>
				<td>Pengurus organisasi pensiunan</td>
				<td><?php echo $ddk->anggota[0]["kemasyarakatan"]["popensiun"] ?></td>
			</tr>
			<tr>
				<td>Anggota organisasi pensiunan</td>
				<td><?php echo $ddk->anggota[0]["kemasyarakatan"]["aopensiun"] ?></td>
			</tr>
			<tr>
				<td>Pengurus organisasi pemirsa/pendengar</td>
				<td><?php echo $ddk->anggota[0]["kemasyarakatan"]["popp"] ?></td>
			</tr>
			<tr>
				<td>Anggota organisasi pemirsa/pendengar</td>
				<td><?php echo $ddk->anggota[0]["kemasyarakatan"]["aopp"] ?></td>
			</tr>
			<tr>
				<td>Pengurus lembaga pencinta alam</td>
				<td><?php echo $ddk->anggota[0]["kemasyarakatan"]["plpa"] ?></td>
			</tr>
			<tr>
				<td>Anggota organisasi pencinta alam</td>
				<td><?php echo $ddk->anggota[0]["kemasyarakatan"]["alpa"] ?></td>
			</tr>
			<tr>
				<td>Pengurus organisasi pengembangan ilmu pengetahuan</td>
				<td><?php echo $ddk->anggota[0]["kemasyarakatan"]["popip"] ?></td>
			</tr>
			<tr>
				<td>Anggota organisasi pengembangan ilmu pengetaahuan</td>
				<td><?php echo $ddk->anggota[0]["kemasyarakatan"]["aopip"] ?></td>
			</tr>
			<tr>
				<td>Pemilik yayasan</td>
				<td><?php echo $ddk->anggota[0]["kemasyarakatan"]["pemyaya"] ?></td>
			</tr>
			<tr>
				<td>Pengurus yayasan</td>
				<td><?php echo $ddk->anggota[0]["kemasyarakatan"]["penyaya"] ?></td>
			</tr>
			<tr>
				<td>Anggota yayasan</td>
				<td><?php echo $ddk->anggota[0]["kemasyarakatan"]["angyaya"] ?></td>
			</tr>
			<tr>
				<td>Pengurus Satgas Kebersihan</td>
				<td><?php echo $ddk->anggota[0]["kemasyarakatan"]["pkebersihan"] ?></td>
			</tr>
			<tr>
				<td>Anggota Satgas Kebersihan</td>
				<td><?php echo $ddk->anggota[0]["kemasyarakatan"]["akebersihan"] ?></td>
			</tr>
			<tr>
				<td>Pengurus Satgas Kebakaran</td>
				<td><?php echo $ddk->anggota[0]["kemasyarakatan"]["pkebakaran"] ?></td>
			</tr>
			<tr>
				<td>Anggota Satgas Kebakaran</td>
				<td><?php echo $ddk->anggota[0]["kemasyarakatan"]["akebakaran"] ?></td>
			</tr>
			<tr>
				<td>Pengurus Posko Penanggulangan Bencana</td>
				<td><?php echo $ddk->anggota[0]["kemasyarakatan"]["ppb"] ?></td>
			</tr>
			<tr>
				<td>Anggota Tim Penanggulangan Bencana</td>
				<td><?php echo $ddk->anggota[0]["kemasyarakatan"]["atpb"] ?></td>
			</tr>
			<?php if(!empty($ddk->anggota[0]["kemasyarakatan"]["lainnya"]["keterangan"])): ?>
			<tr>
				<td><?php echo $ddk->anggota[0]["kemasyarakatan"]["lainnya"]["keterangan"] ?></td>
				<td><?php echo $ddk->anggota[0]["kemasyarakatan"]["lainnya"]["jumlah"] ?></td>
			</tr>
			<?php endif ?>

			<tr>
				<td colspan="2">2.6 Lembaga Ekonomi Yang Dimiliki Anggota Keluarga</td>
			</tr>
			<tr>
				<td>Koperasi</td>
				<td><?php echo $ddk->anggota[0]["ekonomi"]["koperasi"] ?></td>
			</tr>
			<tr>
				<td>Unit Usaha Simpan Pinjam</td>
				<td><?php echo $ddk->anggota[0]["ekonomi"]["unit_usaha_simpan_pinjam"] ?></td>
			</tr>
			<tr>
				<td>Industri Kerajinan Tangan</td>
				<td><?php echo $ddk->anggota[0]["ekonomi"]["industri_kerajinan_tangan"] ?></td>
			</tr>
			<tr>
				<td>Industri Pakaian</td>
				<td><?php echo $ddk->anggota[0]["ekonomi"]["industri_pakaian"] ?></td>
			</tr>
			<tr>
				<td>Industri Usaha Makanan</td>
				<td><?php echo $ddk->anggota[0]["ekonomi"]["industri_usaha_makanan"] ?></td>
			</tr>
			<tr>
				<td>Industri Alat Rumah Tangga</td>
				<td><?php echo $ddk->anggota[0]["ekonomi"]["industri_alat_rumah_tangga"] ?></td>
			</tr>
			<tr>
				<td>Industri Usaha Bahan Bangunan</td>
				<td><?php echo $ddk->anggota[0]["ekonomi"]["industri_usaha_bahan_bangunan"] ?></td>
			</tr>
			<tr>
				<td>Industri Alat Pertanian</td>
				<td><?php echo $ddk->anggota[0]["ekonomi"]["industri_alat_pertanian"] ?></td>
			</tr>
			<tr>
				<td>Restoran</td>
				<td><?php echo $ddk->anggota[0]["ekonomi"]["restoran"] ?></td>
			</tr>
			<tr>
				<td>Toko/ Swalayan</td>
				<td><?php echo $ddk->anggota[0]["ekonomi"]["toko__swalayan"] ?></td>
			</tr>
			<tr>
				<td>Warung Kelontongan/Kios</td>
				<td><?php echo $ddk->anggota[0]["ekonomi"]["warung_kelontongan_kios"] ?></td>
			</tr>
			<tr>
				<td>Angkutan Darat</td>
				<td><?php echo $ddk->anggota[0]["ekonomi"]["angkutan_darat"] ?></td>
			</tr>
			<tr>
				<td>Angkutan Sungai</td>
				<td><?php echo $ddk->anggota[0]["ekonomi"]["angkutan_sungai"] ?></td>
			</tr>
			<tr>
				<td>Angkutan Laut</td>
				<td><?php echo $ddk->anggota[0]["ekonomi"]["angkutan_laut"] ?></td>
			</tr>
			<tr>
				<td>Angkutan Udara</td>
				<td><?php echo $ddk->anggota[0]["ekonomi"]["angkutan_udara"] ?></td>
			</tr>
			<tr>
				<td>Jasa Ekspedisi/Pengiriman Barang</td>
				<td><?php echo $ddk->anggota[0]["ekonomi"]["jasa_ekspedisi_pengiriman_barang"] ?></td>
			</tr>
			<tr>
				<td>Usaha Pasar Harian</td>
				<td><?php echo $ddk->anggota[0]["ekonomi"]["usaha_pasar_harian"] ?></td>
			</tr>
			<tr>
				<td>Usaha Pasar Mingguan</td>
				<td><?php echo $ddk->anggota[0]["ekonomi"]["usaha_pasar_mingguan"] ?></td>
			</tr>
			<tr>
				<td>Usaha Pasar Ternak</td>
				<td><?php echo $ddk->anggota[0]["ekonomi"]["usaha_pasar_ternak"] ?></td>
			</tr>
			<tr>
				<td>Usaha Pasar Hasil Bumi Dan Tambang</td>
				<td><?php echo $ddk->anggota[0]["ekonomi"]["usaha_pasar_hasil_bumi_dan_tambang"] ?></td>
			</tr>
			<tr>
				<td>Usaha Perdagangan Antar Pulau</td>
				<td><?php echo $ddk->anggota[0]["ekonomi"]["usaha_perdagangan_antar_pulau"] ?></td>
			</tr>
			<tr>
				<td>Pengijon</td>
				<td><?php echo $ddk->anggota[0]["ekonomi"]["pengijon"] ?></td>
			</tr>
			<tr>
				<td>Pedagang Pengumpul/Tengkulak</td>
				<td><?php echo $ddk->anggota[0]["ekonomi"]["pedagang_pengumpul_tengkulak"] ?></td>
			</tr>
			<tr>
				<td>Usaha Peternakan</td>
				<td><?php echo $ddk->anggota[0]["ekonomi"]["usaha_peternakan"] ?></td>
			</tr>
			<tr>
				<td>Usaha Perikanan</td>
				<td><?php echo $ddk->anggota[0]["ekonomi"]["usaha_perikanan"] ?></td>
			</tr>
			<tr>
				<td>Usaha Perkebunan</td>
				<td><?php echo $ddk->anggota[0]["ekonomi"]["usaha_perkebunan"] ?></td>
			</tr>
			<tr>
				<td>Kelompok Simpan Pinjam</td>
				<td><?php echo $ddk->anggota[0]["ekonomi"]["kelompok_simpan_pinjam"] ?></td>
			</tr>
			<tr>
				<td>Usaha Minuman</td>
				<td><?php echo $ddk->anggota[0]["ekonomi"]["usaha_minuman"] ?></td>
			</tr>
			<tr>
				<td>Industri Farmasi</td>
				<td><?php echo $ddk->anggota[0]["ekonomi"]["industri_farmasi"] ?></td>
			</tr>
			<tr>
				<td>Industri Karoseri</td>
				<td><?php echo $ddk->anggota[0]["ekonomi"]["industri_karoseri"] ?></td>
			</tr>
			<tr>
				<td>Penitipan Kendaraan Bermotor</td>
				<td><?php echo $ddk->anggota[0]["ekonomi"]["penitipan_kendaraan_bermotor"] ?></td>
			</tr>
			<tr>
				<td>Industri Perakitan Elektronik</td>
				<td><?php echo $ddk->anggota[0]["ekonomi"]["industri_perakitan_elektronik"] ?></td>
			</tr>
			<tr>
				<td>Pengolahan Kayu</td>
				<td><?php echo $ddk->anggota[0]["ekonomi"]["pengolahan_kayu"] ?></td>
			</tr>
			<tr>
				<td>Bioskop</td>
				<td><?php echo $ddk->anggota[0]["ekonomi"]["bioskop"] ?></td>
			</tr>
			<tr>
				<td>Film Keliling</td>
				<td><?php echo $ddk->anggota[0]["ekonomi"]["film_keliling"] ?></td>
			</tr>
			<tr>
				<td>Sandiwara/Drama</td>
				<td><?php echo $ddk->anggota[0]["ekonomi"]["sandiwara_drama"] ?></td>
			</tr>
			<tr>
				<td>Group Lawak</td>
				<td><?php echo $ddk->anggota[0]["ekonomi"]["group_lawak"] ?></td>
			</tr>
			<tr>
				<td>Jaipongan</td>
				<td><?php echo $ddk->anggota[0]["ekonomi"]["jaipongan"] ?></td>
			</tr>
			<tr>
				<td>Wayang Orang/Golek</td>
				<td><?php echo $ddk->anggota[0]["ekonomi"]["wayang_orang_golek"] ?></td>
			</tr>
			<tr>
				<td>Group Musik/Band</td>
				<td><?php echo $ddk->anggota[0]["ekonomi"]["group_musik_band"] ?></td>
			</tr>
			<tr>
				<td>Group Vokal/Paduan Suara</td>
				<td><?php echo $ddk->anggota[0]["ekonomi"]["group_vokal_paduan_suara"] ?></td>
			</tr>
			<tr>
				<td>Usaha Persewaan Tenaga Listrik</td>
				<td><?php echo $ddk->anggota[0]["ekonomi"]["usaha_persewaan_tenaga_listrik"] ?></td>
			</tr>
			<tr>
				<td>Usaha Pengecer Gas Dan Bahan Bakar Minyak</td>
				<td><?php echo $ddk->anggota[0]["ekonomi"]["usaha_pengecer_gas_dan_bahan_bakar_minyak"] ?></td>
			</tr>
			<tr>
				<td>Usaha Air Minum Dalam Kemasan</td>
				<td><?php echo $ddk->anggota[0]["ekonomi"]["usaha_air_minum_dalam_kemasan"] ?></td>
			</tr>
			<tr>
				<td>Tukang Kayu</td>
				<td><?php echo $ddk->anggota[0]["ekonomi"]["tukang_kayu"] ?></td>
			</tr>
			<tr>
				<td>Tukang Batu</td>
				<td><?php echo $ddk->anggota[0]["ekonomi"]["tukang_batu"] ?></td>
			</tr>
			<tr>
				<td>Tukang Jahit/Bordir</td>
				<td><?php echo $ddk->anggota[0]["ekonomi"]["tukang_jahit_bordir"] ?></td>
			</tr>
			<tr>
				<td>Tukang Cukur</td>
				<td><?php echo $ddk->anggota[0]["ekonomi"]["tukang_cukur"] ?></td>
			</tr>
			<tr>
				<td>Tukang Service Elektronik</td>
				<td><?php echo $ddk->anggota[0]["ekonomi"]["tukang_service_elektronik"] ?></td>
			</tr>
			<tr>
				<td>Tukang Besi</td>
				<td><?php echo $ddk->anggota[0]["ekonomi"]["tukang_besi"] ?></td>
			</tr>
			<tr>
				<td>Tukang Pijat/Urut</td>
				<td><?php echo $ddk->anggota[0]["ekonomi"]["tukang_pijat_urut"] ?></td>
			</tr>
			<tr>
				<td>Tukang Sumur</td>
				<td><?php echo $ddk->anggota[0]["ekonomi"]["tukang_sumur"] ?></td>
			</tr>
			<tr>
				<td>Notaris</td>
				<td><?php echo $ddk->anggota[0]["ekonomi"]["notaris"] ?></td>
			</tr>
			<tr>
				<td>Pengacara/Advokat</td>
				<td><?php echo $ddk->anggota[0]["ekonomi"]["pengacara_advokat"] ?></td>
			</tr>
			<tr>
				<td>Konsultan Manajemen</td>
				<td><?php echo $ddk->anggota[0]["ekonomi"]["konsultan_manajemen"] ?></td>
			</tr>
			<tr>
				<td>Konsultan Teknis</td>
				<td><?php echo $ddk->anggota[0]["ekonomi"]["konsultan_teknis"] ?></td>
			</tr>
			<tr>
				<td>Pejabat Pembuat Akta Tanah</td>
				<td><?php echo $ddk->anggota[0]["ekonomi"]["pejabat_pembuat_akta_tanah"] ?></td>
			</tr>
			<tr>
				<td>Losmen</td>
				<td><?php echo $ddk->anggota[0]["ekonomi"]["losmen"] ?></td>
			</tr>
			<tr>
				<td>Wisma</td>
				<td><?php echo $ddk->anggota[0]["ekonomi"]["wisma"] ?></td>
			</tr>
			<tr>
				<td>Asrama</td>
				<td><?php echo $ddk->anggota[0]["ekonomi"]["asrama"] ?></td>
			</tr>
			<tr>
				<td>Persewaan Kamar</td>
				<td><?php echo $ddk->anggota[0]["ekonomi"]["persewaan_kamar"] ?></td>
			</tr>
			<tr>
				<td>Kontrakan Rumah</td>
				<td><?php echo $ddk->anggota[0]["ekonomi"]["kontrakan_rumah"] ?></td>
			</tr>
			<tr>
				<td>Mess</td>
				<td><?php echo $ddk->anggota[0]["ekonomi"]["mess"] ?></td>
			</tr>
			<tr>
				<td>Hotel</td>
				<td><?php echo $ddk->anggota[0]["ekonomi"]["hotel"] ?></td>
			</tr>
			<tr>
				<td>Home Stay</td>
				<td><?php echo $ddk->anggota[0]["ekonomi"]["home_stay"] ?></td>
			</tr>
			<tr>
				<td>Villa</td>
				<td><?php echo $ddk->anggota[0]["ekonomi"]["villa"] ?></td>
			</tr>
			<tr>
				<td>Town House</td>
				<td><?php echo $ddk->anggota[0]["ekonomi"]["town_house"] ?></td>
			</tr>
			<tr>
				<td>Usaha Asuransi</td>
				<td><?php echo $ddk->anggota[0]["ekonomi"]["usaha_asuransi"] ?></td>
			</tr>
			<tr>
				<td>Lembaga Keuangan Bukan Bank</td>
				<td><?php echo $ddk->anggota[0]["ekonomi"]["lembaga_keuangan_bukan_bank"] ?></td>
			</tr>
			<tr>
				<td>Lembaga Perkreditan Rakyat</td>
				<td><?php echo $ddk->anggota[0]["ekonomi"]["lembaga_perkreditan_rakyat"] ?></td>
			</tr>
			<tr>
				<td>Pegadaian</td>
				<td><?php echo $ddk->anggota[0]["ekonomi"]["pegadaian"] ?></td>
			</tr>
			<tr>
				<td>Bank Perkreditan Rakyat</td>
				<td><?php echo $ddk->anggota[0]["ekonomi"]["bank_perkreditan_rakyat"] ?></td>
			</tr>
			<tr>
				<td>Usaha Penyewaan Alat Pesta</td>
				<td><?php echo $ddk->anggota[0]["ekonomi"]["usaha_penyewaan_alat_pesta"] ?></td>
			</tr>
			<tr>
				<td>Usaha Pengolahan dan Penjualan Hasil Hutan</td>
				<td><?php echo $ddk->anggota[0]["ekonomi"]["usaha_pengolahan_dan_penjualan_hasil_hutan"] ?></td>
			</tr>
			<?php if(!empty($ddk->anggota[0]["ekonomi"]["lainnya"]["keterangan"])): ?>
			<tr>
				<td><?php echo $ddk->anggota[0]["ekonomi"]["lainnya"]["keterangan"] ?></td>
				<td><?php echo $ddk->anggota[0]["ekonomi"]["lainnya"]["jumlah"] ?></td>
			</tr>
			<?php endif ?>

			<tr>
				<td colspan="2">2.7 Produksi bahan galian yang dimiliki anggota keluarga</td>
			</tr>
			<tr>
				<td>Batu kali</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[0]["galian"]["batu_kali"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[0]["galian"]["batu_kali"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[0]["galian"]["batu_kali"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[0]["galian"]["batu_kali"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Batu kapur</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[0]["galian"]["batu_kapur"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[0]["galian"]["batu_kapur"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[0]["galian"]["batu_kapur"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[0]["galian"]["batu_kapur"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Pasir</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[0]["galian"]["pasir"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[0]["galian"]["pasir"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[0]["galian"]["pasir"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[0]["galian"]["pasir"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Emas</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[0]["galian"]["emas"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[0]["galian"]["emas"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[0]["galian"]["emas"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[0]["galian"]["emas"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Kuningan</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[0]["galian"]["kuningan"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[0]["galian"]["kuningan"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[0]["galian"]["kuningan"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[0]["galian"]["kuningan"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Aluminium</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[0]["galian"]["aluminium"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[0]["galian"]["aluminium"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[0]["galian"]["aluminium"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[0]["galian"]["aluminium"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Perunggu</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[0]["galian"]["perunggu"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[0]["galian"]["perunggu"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[0]["galian"]["perunggu"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[0]["galian"]["perunggu"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Belerang</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[0]["galian"]["belerang"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[0]["galian"]["belerang"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[0]["galian"]["belerang"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[0]["galian"]["belerang"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Batu marmer</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[0]["galian"]["batu_marmer"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[0]["galian"]["batu_marmer"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[0]["galian"]["batu_marmer"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[0]["galian"]["batu_marmer"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Batu cadas</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[0]["galian"]["batu_cadas"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[0]["galian"]["batu_cadas"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[0]["galian"]["batu_cadas"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[0]["galian"]["batu_cadas"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Batu apung</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[0]["galian"]["batu_apung"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[0]["galian"]["batu_apung"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[0]["galian"]["batu_apung"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[0]["galian"]["batu_apung"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Pasir kwarsa</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[0]["galian"]["pasir_kwarsa"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[0]["galian"]["pasir_kwarsa"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[0]["galian"]["pasir_kwarsa"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[0]["galian"]["pasir_kwarsa"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Batubara</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[0]["galian"]["batubara"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[0]["galian"]["batubara"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[0]["galian"]["batubara"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[0]["galian"]["batubara"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Batu Granit</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[0]["galian"]["batu_granit"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[0]["galian"]["batu_granit"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[0]["galian"]["batu_granit"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[0]["galian"]["batu_granit"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Batu Gamping</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[0]["galian"]["batu_gamping"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[0]["galian"]["batu_gamping"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[0]["galian"]["batu_gamping"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[0]["galian"]["batu_gamping"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Mangan</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[0]["galian"]["mangan"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[0]["galian"]["mangan"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[0]["galian"]["mangan"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[0]["galian"]["mangan"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Batu Trass</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[0]["galian"]["batu_trass"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[0]["galian"]["batu_trass"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[0]["galian"]["batu_trass"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[0]["galian"]["batu_trass"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Batu Putih</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[0]["galian"]["batu_putih"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[0]["galian"]["batu_putih"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[0]["galian"]["batu_putih"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[0]["galian"]["batu_putih"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Pasir Batu</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[0]["galian"]["pasir_batu"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[0]["galian"]["pasir_batu"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[0]["galian"]["pasir_batu"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[0]["galian"]["pasir_batu"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Pasir Besi</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[0]["galian"]["pasir_besi"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[0]["galian"]["pasir_besi"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[0]["galian"]["pasir_besi"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[0]["galian"]["pasir_besi"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Gips</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[0]["galian"]["gips"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[0]["galian"]["gips"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[0]["galian"]["gips"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[0]["galian"]["gips"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Minyak Bumi</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[0]["galian"]["minyak_bumi"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[0]["galian"]["minyak_bumi"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[0]["galian"]["minyak_bumi"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[0]["galian"]["minyak_bumi"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Gas Alam</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[0]["galian"]["gas_alam"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[0]["galian"]["gas_alam"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[0]["galian"]["gas_alam"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[0]["galian"]["gas_alam"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Perak</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[0]["galian"]["perak"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[0]["galian"]["perak"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[0]["galian"]["perak"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[0]["galian"]["perak"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Timah</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[0]["galian"]["timah"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[0]["galian"]["timah"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[0]["galian"]["timah"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[0]["galian"]["timah"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Tembaga</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[0]["galian"]["tembaga"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[0]["galian"]["tembaga"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[0]["galian"]["tembaga"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[0]["galian"]["tembaga"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Biji Besi</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[0]["galian"]["biji_besi"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[0]["galian"]["biji_besi"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[0]["galian"]["biji_besi"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[0]["galian"]["biji_besi"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Uranium</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[0]["galian"]["uranium"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[0]["galian"]["uranium"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[0]["galian"]["uranium"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[0]["galian"]["uranium"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Bouxit</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[0]["galian"]["bouxit"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[0]["galian"]["bouxit"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[0]["galian"]["bouxit"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[0]["galian"]["bouxit"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Garam</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[0]["galian"]["garam"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[0]["galian"]["garam"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[0]["galian"]["garam"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[0]["galian"]["garam"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Nikel</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[0]["galian"]["nikel"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[0]["galian"]["nikel"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[0]["galian"]["nikel"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[0]["galian"]["nikel"]["pemasaran"] ?>
				</td>
			</tr>
			<?php if(!empty($ddk->anggota[0]["galian"]["lainnya"]["keterangan"])): ?>
			<tr>
				<td><?php echo $ddk->anggota[0]["galian"]["lainnya"]["keterangan"] ?></td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[0]["galian"]["lainnya"]["opsi"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[0]["galian"]["lainnya"]["opsi"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[0]["galian"]["lainnya"]["opsi"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[0]["galian"]["lainnya"]["opsi"]["pemasaran"] ?>
				</td>
			</tr>
			<?php endif ?>

			<tr>
				<td colspan="2">3. Data Anggota Keluarga</td>
			</tr>
			<tr>
				<td colspan="2">3.1 Biodata</td>
			</tr>
			<tr>
				<td>Nomor Urut</td>
				<td><?php echo $ddk->anggota[1]["no_urut"] ?></td>
			</tr>
			<tr>
				<td>Nomor Induk Kependudukan (NIK)</td>
				<td><?php echo $ddk->anggota[1]["nik"] ?></td>
			</tr>
			<tr>
				<td>Nama Lengkap</td>
				<td><?php echo $ddk->anggota[1]["nama"] ?></td>
			</tr>
			<tr>
				<td>Nomor Akte Kelahiran</td>
				<td><?php echo $ddk->anggota[1]["no_akte"] ?></td>
			</tr>
			
			
			<tr>
				<td>Tempat Lahir</td>
				<td><?php echo $ddk->anggota[1]["tempat_lahir"] ?></td>
			</tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td><?php echo $ddk->anggota[1]["tanggal_lahir"] ?></td>
			</tr>
			<tr>
				<td>Tanggal Pencatatan</td>
				<td><?php echo $ddk->anggota[1]["tanggal_pencatatan"] ?></td>
			</tr>
			
			
			
			
			
			<tr>
				<td>Mata Pencaharian Pokok/Pekerjaan</td>
				<td><?php echo $ddk->anggota[1]["pekerjaan"] ?></td>
			</tr>
			<tr>
				<td>Nama Bapak / Ibu Kandung</td>
				<td><?php echo $ddk->anggota[1]["nama_ortu"] ?></td>
			</tr>
			<tr>
				<td>Akseptor KB</td>
				<td>
					<?php echo $ddk->anggota[1]["kb"] == "Pil" ? "Pil" : ""; ?>
					<?php echo $ddk->anggota[1]["kb"] == "Spiral" ? "Spiral" : ""; ?>
					<?php echo $ddk->anggota[1]["kb"] == "Suntik" ? "Suntik" : ""; ?>
					<?php echo $ddk->anggota[1]["kb"] == "Susuk" ? "Susuk" : ""; ?>
					<?php echo $ddk->anggota[1]["kb"] == "Kondom" ? "Kondom" : ""; ?>
					<?php echo $ddk->anggota[1]["kb"] == "Vaksetomi" ? "Vaksetomi" : ""; ?>
					<?php echo $ddk->anggota[1]["kb"] == "Tubektomi" ? "Tubektomi" : ""; ?>
				</td>
			</tr>

			<tr>
				<td colspan="2">3.2 Cacat Menurut Jenis</td>
			</tr>
			<tr>
				<td colspan="2">Cacat Fisik</td>
			</tr>
			<tr>
				<td>Tuna rungu</td>
				<?php echo $ddk->anggota[1]["cacat_fisik"]["tuli"] ?>
			</tr>
			<tr>
				<td>Tuna wicara</td>
				<?php echo $ddk->anggota[1]["cacat_fisik"]["bisu"] ?>
			</tr>
			<tr>
				<td>Tuna netra</td>
				<?php echo $ddk->anggota[1]["cacat_fisik"]["buta"] ?>
			</tr>
			<tr>
				<td>Lumpuh</td>
				<?php echo $ddk->anggota[1]["cacat_fisik"]["lumpuh"] ?>
			</tr>
			<tr>
				<td>Sumbing</td>
				<?php echo $ddk->anggota[1]["cacat_fisik"]["sumbing"] ?>
			</tr>
			<?php if(!empty($ddk->anggota[1]["cacat_fisik"]["lainnya"]["keterangan"])): ?>
			<tr>
				<td><?php echo $ddk->anggota[1]["cacat_fisik"]["lainnya"]["keterangan"] ?></td>
				<?php echo $ddk->anggota[1]["cacat_fisik"]["lainnya"]["jumlah"] ?>
			</tr>
			<?php endif ?>
			<tr>
				<td colspan="2">Cacat Mental</td>
			</tr>
			<tr>
				<td>Idiot</td>
				<?php echo $ddk->anggota[1]["cacat_mental"]["idiot"] ?>
			</tr>
			<tr>
				<td>Gila</td>
				<?php echo $ddk->anggota[1]["cacat_mental"]["gila"] ?>
			</tr>
			<tr>
				<td>Stress</td>
				<?php echo $ddk->anggota[1]["cacat_mental"]["stress"] ?>
			</tr>
			<?php if(!empty($ddk->anggota[1]["cacat_mental"]["lainnya"]["keterangan"])): ?>
			<tr>
				<td><?php echo $ddk->anggota[1]["cacat_mental"]["lainnya"]["keterangan"] ?></td>
				<?php echo $ddk->anggota[1]["cacat_mental"]["lainnya"]["jumlah"] ?>
			</tr>
			<?php endif ?>

			<tr>
				<td colspan="2">3.3. Kedudukan Anggota Keluarga sebagai Wajib Pajak dan Retribusi</td>
			</tr>
			<tr>
				<td>Wajib Pajak Bumi dan Bangunan</td>
				<td><?php echo $ddk->anggota[1]["pajak_retribusi"]["pbb"] ?></td>
			</tr>
			<tr>
				<td>Wajib Pajak Penghasilan Perorangan</td>
				<td><?php echo $ddk->anggota[1]["pajak_retribusi"]["ppp"] ?></td>
			</tr>
			<tr>
				<td>Wajib Pajak Badan/Perusahaan</td>
				<td><?php echo $ddk->anggota[1]["pajak_retribusi"]["pb"] ?></td>
			</tr>
			<tr>
				<td>Wajib Pajak Kendaraan Bermotor</td>
				<td><?php echo $ddk->anggota[1]["pajak_retribusi"]["pkb"] ?></td>
			</tr>
			<tr>
				<td>Wajib Retribusi Kebersihan</td>
				<td><?php echo $ddk->anggota[1]["pajak_retribusi"]["kebersihan"] ?></td>
			</tr>
			<tr>
				<td>Wajib Retribusi Keamanan</td>
				<td><?php echo $ddk->anggota[1]["pajak_retribusi"]["keamanan"] ?></td>
			</tr>
			<tr>
				<td>Wajib iuran</td>
				<td><?php echo $ddk->anggota[1]["pajak_retribusi"]["iuran"] ?></td>
			</tr>
			<tr>
				<td>Wajib pungutan</td>
				<td><?php echo $ddk->anggota[1]["pajak_retribusi"]["pungutan"] ?></td>
			</tr>
			<?php if(!empty($ddk->anggota[1]["pajak_retribusi"]["lainnya"]["keterangan"])): ?>
			<tr>
				<td><?php echo $ddk->anggota[1]["pajak_retribusi"]["lainnya"]["keterangan"] ?></td>
				<td><?php echo $ddk->anggota[1]["pajak_retribusi"]["lainnya"]["jumlah"] ?></td>
			</tr>
			<?php endif ?>

			<tr>
				<td colspan="2">3.4 Lembaga Pemerintahan Yang Diikuti Anggota Keluarga</td>
			</tr>
			<tr>
				<td>Kepala Desa/Lurah</td>
				<td><?php echo $ddk->anggota[1]["pemerintahan"]["kepala_desa"] ?></td>
			</tr>
			<tr>
				<td>Sekretaris Desa/Kelurahan</td>
				<td><?php echo $ddk->anggota[1]["pemerintahan"]["sekretaris_desa"] ?></td>
			</tr>
			<tr>
				<td>Kepala Urusan</td>
				<td><?php echo $ddk->anggota[1]["pemerintahan"]["kepala_urusan"] ?></td>
			</tr>
			<tr>
				<td>Kepala Dusun/Lingkungan</td>
				<td><?php echo $ddk->anggota[1]["pemerintahan"]["kepala_dusun"] ?></td>
			</tr>
			<tr>
				<td>Staf Desa/Kelurahan</td>
				<td><?php echo $ddk->anggota[1]["pemerintahan"]["staf_desa"] ?></td>
			</tr>
			<tr>
				<td>Ketua BPD</td>
				<td><?php echo $ddk->anggota[1]["pemerintahan"]["ketua_bpd"] ?></td>
			</tr>
			<tr>
				<td>Wakil Ketua BPD</td>
				<td><?php echo $ddk->anggota[1]["pemerintahan"]["wakil_ketua_bpd"] ?></td>
			</tr>
			<tr>
				<td>Sekretaris BPD</td>
				<td><?php echo $ddk->anggota[1]["pemerintahan"]["sekretaris_bpd"] ?></td>
			</tr>
			<tr>
				<td>Anggota BPD</td>
				<td><?php echo $ddk->anggota[1]["pemerintahan"]["anggota_bpd"] ?></td>
			</tr>
			<?php if(!empty($ddk->anggota[1]["pemerintahan"]["lainnya"]["keterangan"])): ?>
			<tr>
				<td><?php echo $ddk->anggota[1]["pemerintahan"]["lainnya"]["keterangan"] ?></td>
				<td><?php echo $ddk->anggota[1]["pemerintahan"]["lainnya"]["jumlah"] ?></td>
			</tr>
			<?php endif ?>

			<tr>
				<td colspan="2">3.5 Lembaga Kemasyarakatan Yang Diikuti Anggota Keluarga</td>
			</tr>
			<tr>
				<td>Pengurus RT</td>
				<td><?php echo $ddk->anggota[1]["kemasyarakatan"]["prt"] ?></td>
			</tr>
			<tr>
				<td>Anggota Pengurus RT</td>
				<td><?php echo $ddk->anggota[1]["kemasyarakatan"]["aprt"] ?></td>
			</tr>
			<tr>
				<td>Pengurus RW</td>
				<td><?php echo $ddk->anggota[1]["kemasyarakatan"]["prw"] ?></td>
			</tr>
			<tr>
				<td>Anggota Pengurus RW</td>
				<td><?php echo $ddk->anggota[1]["kemasyarakatan"]["aprw"] ?></td>
			</tr>
			<tr>
				<td>Pengurus LKMD/K/LPM</td>
				<td><?php echo $ddk->anggota[1]["kemasyarakatan"]["plkmdklpm"] ?></td>
			</tr>
			<tr>
				<td>Anggota LKMD/K/LPM</td>
				<td><?php echo $ddk->anggota[1]["kemasyarakatan"]["alkmdklpm"] ?></td>
			</tr>
			<tr>
				<td>Pengurus PKK</td>
				<td><?php echo $ddk->anggota[1]["kemasyarakatan"]["ppkk"] ?></td>
			</tr>
			<tr>
				<td>Anggota PKK</td>
				<td><?php echo $ddk->anggota[1]["kemasyarakatan"]["apkk"] ?></td>
			</tr>
			<tr>
				<td>Pengurus Lembaga Adat</td>
				<td><?php echo $ddk->anggota[1]["kemasyarakatan"]["pla"] ?></td>
			</tr>
			<tr>
				<td>Pengurus Karang Taruna</td>
				<td><?php echo $ddk->anggota[1]["kemasyarakatan"]["pkt"] ?></td>
			</tr>
			<tr>
				<td>Anggota Karang Taruna</td>
				<td><?php echo $ddk->anggota[1]["kemasyarakatan"]["akt"] ?></td>
			</tr>
			<tr>
				<td>Pengurus Hansip/Linmas</td>
				<td><?php echo $ddk->anggota[1]["kemasyarakatan"]["phl"] ?></td>
			</tr>
			<tr>
				<td>Pengurus Poskamling</td>
				<td><?php echo $ddk->anggota[1]["kemasyarakatan"]["pp"] ?></td>
			</tr>
			<tr>
				<td>Pengurus Organisasi Perempuan</td>
				<td><?php echo $ddk->anggota[1]["kemasyarakatan"]["pop"] ?></td>
			</tr>
			<tr>
				<td>Anggota Organisasi Perempuan</td>
				<td><?php echo $ddk->anggota[1]["kemasyarakatan"]["aop"] ?></td>
			</tr>
			<tr>
				<td>Pengurus Organisasi Bapak-bapak</td>
				<td><?php echo $ddk->anggota[1]["kemasyarakatan"]["pob"] ?></td>
			</tr>
			<tr>
				<td>Anggota Organisasi Bapak-bapak</td>
				<td><?php echo $ddk->anggota[1]["kemasyarakatan"]["aob"] ?></td>
			</tr>
			<tr>
				<td>Pengurus Organisasi keagamaan</td>
				<td><?php echo $ddk->anggota[1]["kemasyarakatan"]["pok"] ?></td>
			</tr>
			<tr>
				<td>Anggota Organisasi keagamaan</td>
				<td><?php echo $ddk->anggota[1]["kemasyarakatan"]["aok"] ?></td>
			</tr>
			<tr>
				<td>Pengurus Organisasi profesi wartawan</td>
				<td><?php echo $ddk->anggota[1]["kemasyarakatan"]["popw"] ?></td>
			</tr>
			<tr>
				<td>Anggota Organisasi profesi wartawan</td>
				<td><?php echo $ddk->anggota[1]["kemasyarakatan"]["aopw"] ?></td>
			</tr>
			<tr>
				<td>Pengurus Posyandu</td>
				<td><?php echo $ddk->anggota[1]["kemasyarakatan"]["pposyandu"] ?></td>
			</tr>
			<tr>
				<td>Pengurus Posyantekdes</td>
				<td><?php echo $ddk->anggota[1]["kemasyarakatan"]["pposyantekdes"] ?></td>
			</tr>
			<tr>
				<td>Pengurus Organisasi Kelompok Tani/Nelayan</td>
				<td><?php echo $ddk->anggota[1]["kemasyarakatan"]["poktan"] ?></td>
			</tr>
			<tr>
				<td>Anggota Organisasi Kelompok Tani/Nelayan</td>
				<td><?php echo $ddk->anggota[1]["kemasyarakatan"]["aoktan"] ?></td>
			</tr>
			<tr>
				<td>Pengurus Lembaga Gotong royong</td>
				<td><?php echo $ddk->anggota[1]["kemasyarakatan"]["plgr"] ?></td>
			</tr>
			<tr>
				<td>Anggota Lembaga Gotong royong</td>
				<td><?php echo $ddk->anggota[1]["kemasyarakatan"]["algr"] ?></td>
			</tr>
			<tr>
				<td>Pengurus Organisasi Profesi guru</td>
				<td><?php echo $ddk->anggota[1]["kemasyarakatan"]["popg"] ?></td>
			</tr>
			<tr>
				<td>Anggota Organisasi Profesi guru</td>
				<td><?php echo $ddk->anggota[1]["kemasyarakatan"]["aopg"] ?></td>
			</tr>
			<tr>
				<td>Pengurus Organisasi profesi dokter/tenaga medis</td>
				<td><?php echo $ddk->anggota[1]["kemasyarakatan"]["popdtm"] ?></td>
			</tr>
			<tr>
				<td>Anggota Organisasi profesi/tenaga medis</td>
				<td><?php echo $ddk->anggota[1]["kemasyarakatan"]["aoptm"] ?></td>
			</tr>
			<tr>
				<td>Pengurus organisasi pensiunan</td>
				<td><?php echo $ddk->anggota[1]["kemasyarakatan"]["popensiun"] ?></td>
			</tr>
			<tr>
				<td>Anggota organisasi pensiunan</td>
				<td><?php echo $ddk->anggota[1]["kemasyarakatan"]["aopensiun"] ?></td>
			</tr>
			<tr>
				<td>Pengurus organisasi pemirsa/pendengar</td>
				<td><?php echo $ddk->anggota[1]["kemasyarakatan"]["popp"] ?></td>
			</tr>
			<tr>
				<td>Anggota organisasi pemirsa/pendengar</td>
				<td><?php echo $ddk->anggota[1]["kemasyarakatan"]["aopp"] ?></td>
			</tr>
			<tr>
				<td>Pengurus lembaga pencinta alam</td>
				<td><?php echo $ddk->anggota[1]["kemasyarakatan"]["plpa"] ?></td>
			</tr>
			<tr>
				<td>Anggota organisasi pencinta alam</td>
				<td><?php echo $ddk->anggota[1]["kemasyarakatan"]["alpa"] ?></td>
			</tr>
			<tr>
				<td>Pengurus organisasi pengembangan ilmu pengetahuan</td>
				<td><?php echo $ddk->anggota[1]["kemasyarakatan"]["popip"] ?></td>
			</tr>
			<tr>
				<td>Anggota organisasi pengembangan ilmu pengetaahuan</td>
				<td><?php echo $ddk->anggota[1]["kemasyarakatan"]["aopip"] ?></td>
			</tr>
			<tr>
				<td>Pemilik yayasan</td>
				<td><?php echo $ddk->anggota[1]["kemasyarakatan"]["pemyaya"] ?></td>
			</tr>
			<tr>
				<td>Pengurus yayasan</td>
				<td><?php echo $ddk->anggota[1]["kemasyarakatan"]["penyaya"] ?></td>
			</tr>
			<tr>
				<td>Anggota yayasan</td>
				<td><?php echo $ddk->anggota[1]["kemasyarakatan"]["angyaya"] ?></td>
			</tr>
			<tr>
				<td>Pengurus Satgas Kebersihan</td>
				<td><?php echo $ddk->anggota[1]["kemasyarakatan"]["pkebersihan"] ?></td>
			</tr>
			<tr>
				<td>Anggota Satgas Kebersihan</td>
				<td><?php echo $ddk->anggota[1]["kemasyarakatan"]["akebersihan"] ?></td>
			</tr>
			<tr>
				<td>Pengurus Satgas Kebakaran</td>
				<td><?php echo $ddk->anggota[1]["kemasyarakatan"]["pkebakaran"] ?></td>
			</tr>
			<tr>
				<td>Anggota Satgas Kebakaran</td>
				<td><?php echo $ddk->anggota[1]["kemasyarakatan"]["akebakaran"] ?></td>
			</tr>
			<tr>
				<td>Pengurus Posko Penanggulangan Bencana</td>
				<td><?php echo $ddk->anggota[1]["kemasyarakatan"]["ppb"] ?></td>
			</tr>
			<tr>
				<td>Anggota Tim Penanggulangan Bencana</td>
				<td><?php echo $ddk->anggota[1]["kemasyarakatan"]["atpb"] ?></td>
			</tr>
			<?php if(!empty($ddk->anggota[1]["kemasyarakatan"]["lainnya"]["keterangan"])): ?>
			<tr>
				<td><?php echo $ddk->anggota[1]["kemasyarakatan"]["lainnya"]["keterangan"] ?></td>
				<td><?php echo $ddk->anggota[1]["kemasyarakatan"]["lainnya"]["jumlah"] ?></td>
			</tr>
			<?php endif ?>

			<tr>
				<td colspan="2">3.6 Lembaga Ekonomi Yang Dimiliki Anggota Keluarga</td>
			</tr>
			<tr>
				<td>Koperasi</td>
				<td><?php echo $ddk->anggota[1]["ekonomi"]["koperasi"] ?></td>
			</tr>
			<tr>
				<td>Unit Usaha Simpan Pinjam</td>
				<td><?php echo $ddk->anggota[1]["ekonomi"]["unit_usaha_simpan_pinjam"] ?></td>
			</tr>
			<tr>
				<td>Industri Kerajinan Tangan</td>
				<td><?php echo $ddk->anggota[1]["ekonomi"]["industri_kerajinan_tangan"] ?></td>
			</tr>
			<tr>
				<td>Industri Pakaian</td>
				<td><?php echo $ddk->anggota[1]["ekonomi"]["industri_pakaian"] ?></td>
			</tr>
			<tr>
				<td>Industri Usaha Makanan</td>
				<td><?php echo $ddk->anggota[1]["ekonomi"]["industri_usaha_makanan"] ?></td>
			</tr>
			<tr>
				<td>Industri Alat Rumah Tangga</td>
				<td><?php echo $ddk->anggota[1]["ekonomi"]["industri_alat_rumah_tangga"] ?></td>
			</tr>
			<tr>
				<td>Industri Usaha Bahan Bangunan</td>
				<td><?php echo $ddk->anggota[1]["ekonomi"]["industri_usaha_bahan_bangunan"] ?></td>
			</tr>
			<tr>
				<td>Industri Alat Pertanian</td>
				<td><?php echo $ddk->anggota[1]["ekonomi"]["industri_alat_pertanian"] ?></td>
			</tr>
			<tr>
				<td>Restoran</td>
				<td><?php echo $ddk->anggota[1]["ekonomi"]["restoran"] ?></td>
			</tr>
			<tr>
				<td>Toko/ Swalayan</td>
				<td><?php echo $ddk->anggota[1]["ekonomi"]["toko__swalayan"] ?></td>
			</tr>
			<tr>
				<td>Warung Kelontongan/Kios</td>
				<td><?php echo $ddk->anggota[1]["ekonomi"]["warung_kelontongan_kios"] ?></td>
			</tr>
			<tr>
				<td>Angkutan Darat</td>
				<td><?php echo $ddk->anggota[1]["ekonomi"]["angkutan_darat"] ?></td>
			</tr>
			<tr>
				<td>Angkutan Sungai</td>
				<td><?php echo $ddk->anggota[1]["ekonomi"]["angkutan_sungai"] ?></td>
			</tr>
			<tr>
				<td>Angkutan Laut</td>
				<td><?php echo $ddk->anggota[1]["ekonomi"]["angkutan_laut"] ?></td>
			</tr>
			<tr>
				<td>Angkutan Udara</td>
				<td><?php echo $ddk->anggota[1]["ekonomi"]["angkutan_udara"] ?></td>
			</tr>
			<tr>
				<td>Jasa Ekspedisi/Pengiriman Barang</td>
				<td><?php echo $ddk->anggota[1]["ekonomi"]["jasa_ekspedisi_pengiriman_barang"] ?></td>
			</tr>
			<tr>
				<td>Usaha Pasar Harian</td>
				<td><?php echo $ddk->anggota[1]["ekonomi"]["usaha_pasar_harian"] ?></td>
			</tr>
			<tr>
				<td>Usaha Pasar Mingguan</td>
				<td><?php echo $ddk->anggota[1]["ekonomi"]["usaha_pasar_mingguan"] ?></td>
			</tr>
			<tr>
				<td>Usaha Pasar Ternak</td>
				<td><?php echo $ddk->anggota[1]["ekonomi"]["usaha_pasar_ternak"] ?></td>
			</tr>
			<tr>
				<td>Usaha Pasar Hasil Bumi Dan Tambang</td>
				<td><?php echo $ddk->anggota[1]["ekonomi"]["usaha_pasar_hasil_bumi_dan_tambang"] ?></td>
			</tr>
			<tr>
				<td>Usaha Perdagangan Antar Pulau</td>
				<td><?php echo $ddk->anggota[1]["ekonomi"]["usaha_perdagangan_antar_pulau"] ?></td>
			</tr>
			<tr>
				<td>Pengijon</td>
				<td><?php echo $ddk->anggota[1]["ekonomi"]["pengijon"] ?></td>
			</tr>
			<tr>
				<td>Pedagang Pengumpul/Tengkulak</td>
				<td><?php echo $ddk->anggota[1]["ekonomi"]["pedagang_pengumpul_tengkulak"] ?></td>
			</tr>
			<tr>
				<td>Usaha Peternakan</td>
				<td><?php echo $ddk->anggota[1]["ekonomi"]["usaha_peternakan"] ?></td>
			</tr>
			<tr>
				<td>Usaha Perikanan</td>
				<td><?php echo $ddk->anggota[1]["ekonomi"]["usaha_perikanan"] ?></td>
			</tr>
			<tr>
				<td>Usaha Perkebunan</td>
				<td><?php echo $ddk->anggota[1]["ekonomi"]["usaha_perkebunan"] ?></td>
			</tr>
			<tr>
				<td>Kelompok Simpan Pinjam</td>
				<td><?php echo $ddk->anggota[1]["ekonomi"]["kelompok_simpan_pinjam"] ?></td>
			</tr>
			<tr>
				<td>Usaha Minuman</td>
				<td><?php echo $ddk->anggota[1]["ekonomi"]["usaha_minuman"] ?></td>
			</tr>
			<tr>
				<td>Industri Farmasi</td>
				<td><?php echo $ddk->anggota[1]["ekonomi"]["industri_farmasi"] ?></td>
			</tr>
			<tr>
				<td>Industri Karoseri</td>
				<td><?php echo $ddk->anggota[1]["ekonomi"]["industri_karoseri"] ?></td>
			</tr>
			<tr>
				<td>Penitipan Kendaraan Bermotor</td>
				<td><?php echo $ddk->anggota[1]["ekonomi"]["penitipan_kendaraan_bermotor"] ?></td>
			</tr>
			<tr>
				<td>Industri Perakitan Elektronik</td>
				<td><?php echo $ddk->anggota[1]["ekonomi"]["industri_perakitan_elektronik"] ?></td>
			</tr>
			<tr>
				<td>Pengolahan Kayu</td>
				<td><?php echo $ddk->anggota[1]["ekonomi"]["pengolahan_kayu"] ?></td>
			</tr>
			<tr>
				<td>Bioskop</td>
				<td><?php echo $ddk->anggota[1]["ekonomi"]["bioskop"] ?></td>
			</tr>
			<tr>
				<td>Film Keliling</td>
				<td><?php echo $ddk->anggota[1]["ekonomi"]["film_keliling"] ?></td>
			</tr>
			<tr>
				<td>Sandiwara/Drama</td>
				<td><?php echo $ddk->anggota[1]["ekonomi"]["sandiwara_drama"] ?></td>
			</tr>
			<tr>
				<td>Group Lawak</td>
				<td><?php echo $ddk->anggota[1]["ekonomi"]["group_lawak"] ?></td>
			</tr>
			<tr>
				<td>Jaipongan</td>
				<td><?php echo $ddk->anggota[1]["ekonomi"]["jaipongan"] ?></td>
			</tr>
			<tr>
				<td>Wayang Orang/Golek</td>
				<td><?php echo $ddk->anggota[1]["ekonomi"]["wayang_orang_golek"] ?></td>
			</tr>
			<tr>
				<td>Group Musik/Band</td>
				<td><?php echo $ddk->anggota[1]["ekonomi"]["group_musik_band"] ?></td>
			</tr>
			<tr>
				<td>Group Vokal/Paduan Suara</td>
				<td><?php echo $ddk->anggota[1]["ekonomi"]["group_vokal_paduan_suara"] ?></td>
			</tr>
			<tr>
				<td>Usaha Persewaan Tenaga Listrik</td>
				<td><?php echo $ddk->anggota[1]["ekonomi"]["usaha_persewaan_tenaga_listrik"] ?></td>
			</tr>
			<tr>
				<td>Usaha Pengecer Gas Dan Bahan Bakar Minyak</td>
				<td><?php echo $ddk->anggota[1]["ekonomi"]["usaha_pengecer_gas_dan_bahan_bakar_minyak"] ?></td>
			</tr>
			<tr>
				<td>Usaha Air Minum Dalam Kemasan</td>
				<td><?php echo $ddk->anggota[1]["ekonomi"]["usaha_air_minum_dalam_kemasan"] ?></td>
			</tr>
			<tr>
				<td>Tukang Kayu</td>
				<td><?php echo $ddk->anggota[1]["ekonomi"]["tukang_kayu"] ?></td>
			</tr>
			<tr>
				<td>Tukang Batu</td>
				<td><?php echo $ddk->anggota[1]["ekonomi"]["tukang_batu"] ?></td>
			</tr>
			<tr>
				<td>Tukang Jahit/Bordir</td>
				<td><?php echo $ddk->anggota[1]["ekonomi"]["tukang_jahit_bordir"] ?></td>
			</tr>
			<tr>
				<td>Tukang Cukur</td>
				<td><?php echo $ddk->anggota[1]["ekonomi"]["tukang_cukur"] ?></td>
			</tr>
			<tr>
				<td>Tukang Service Elektronik</td>
				<td><?php echo $ddk->anggota[1]["ekonomi"]["tukang_service_elektronik"] ?></td>
			</tr>
			<tr>
				<td>Tukang Besi</td>
				<td><?php echo $ddk->anggota[1]["ekonomi"]["tukang_besi"] ?></td>
			</tr>
			<tr>
				<td>Tukang Pijat/Urut</td>
				<td><?php echo $ddk->anggota[1]["ekonomi"]["tukang_pijat_urut"] ?></td>
			</tr>
			<tr>
				<td>Tukang Sumur</td>
				<td><?php echo $ddk->anggota[1]["ekonomi"]["tukang_sumur"] ?></td>
			</tr>
			<tr>
				<td>Notaris</td>
				<td><?php echo $ddk->anggota[1]["ekonomi"]["notaris"] ?></td>
			</tr>
			<tr>
				<td>Pengacara/Advokat</td>
				<td><?php echo $ddk->anggota[1]["ekonomi"]["pengacara_advokat"] ?></td>
			</tr>
			<tr>
				<td>Konsultan Manajemen</td>
				<td><?php echo $ddk->anggota[1]["ekonomi"]["konsultan_manajemen"] ?></td>
			</tr>
			<tr>
				<td>Konsultan Teknis</td>
				<td><?php echo $ddk->anggota[1]["ekonomi"]["konsultan_teknis"] ?></td>
			</tr>
			<tr>
				<td>Pejabat Pembuat Akta Tanah</td>
				<td><?php echo $ddk->anggota[1]["ekonomi"]["pejabat_pembuat_akta_tanah"] ?></td>
			</tr>
			<tr>
				<td>Losmen</td>
				<td><?php echo $ddk->anggota[1]["ekonomi"]["losmen"] ?></td>
			</tr>
			<tr>
				<td>Wisma</td>
				<td><?php echo $ddk->anggota[1]["ekonomi"]["wisma"] ?></td>
			</tr>
			<tr>
				<td>Asrama</td>
				<td><?php echo $ddk->anggota[1]["ekonomi"]["asrama"] ?></td>
			</tr>
			<tr>
				<td>Persewaan Kamar</td>
				<td><?php echo $ddk->anggota[1]["ekonomi"]["persewaan_kamar"] ?></td>
			</tr>
			<tr>
				<td>Kontrakan Rumah</td>
				<td><?php echo $ddk->anggota[1]["ekonomi"]["kontrakan_rumah"] ?></td>
			</tr>
			<tr>
				<td>Mess</td>
				<td><?php echo $ddk->anggota[1]["ekonomi"]["mess"] ?></td>
			</tr>
			<tr>
				<td>Hotel</td>
				<td><?php echo $ddk->anggota[1]["ekonomi"]["hotel"] ?></td>
			</tr>
			<tr>
				<td>Home Stay</td>
				<td><?php echo $ddk->anggota[1]["ekonomi"]["home_stay"] ?></td>
			</tr>
			<tr>
				<td>Villa</td>
				<td><?php echo $ddk->anggota[1]["ekonomi"]["villa"] ?></td>
			</tr>
			<tr>
				<td>Town House</td>
				<td><?php echo $ddk->anggota[1]["ekonomi"]["town_house"] ?></td>
			</tr>
			<tr>
				<td>Usaha Asuransi</td>
				<td><?php echo $ddk->anggota[1]["ekonomi"]["usaha_asuransi"] ?></td>
			</tr>
			<tr>
				<td>Lembaga Keuangan Bukan Bank</td>
				<td><?php echo $ddk->anggota[1]["ekonomi"]["lembaga_keuangan_bukan_bank"] ?></td>
			</tr>
			<tr>
				<td>Lembaga Perkreditan Rakyat</td>
				<td><?php echo $ddk->anggota[1]["ekonomi"]["lembaga_perkreditan_rakyat"] ?></td>
			</tr>
			<tr>
				<td>Pegadaian</td>
				<td><?php echo $ddk->anggota[1]["ekonomi"]["pegadaian"] ?></td>
			</tr>
			<tr>
				<td>Bank Perkreditan Rakyat</td>
				<td><?php echo $ddk->anggota[1]["ekonomi"]["bank_perkreditan_rakyat"] ?></td>
			</tr>
			<tr>
				<td>Usaha Penyewaan Alat Pesta</td>
				<td><?php echo $ddk->anggota[1]["ekonomi"]["usaha_penyewaan_alat_pesta"] ?></td>
			</tr>
			<tr>
				<td>Usaha Pengolahan dan Penjualan Hasil Hutan</td>
				<td><?php echo $ddk->anggota[1]["ekonomi"]["usaha_pengolahan_dan_penjualan_hasil_hutan"] ?></td>
			</tr>
			<?php if(!empty($ddk->anggota[1]["ekonomi"]["lainnya"]["keterangan"])): ?>
			<tr>
				<td><?php echo $ddk->anggota[1]["ekonomi"]["lainnya"]["keterangan"] ?></td>
				<td><?php echo $ddk->anggota[1]["ekonomi"]["lainnya"]["jumlah"] ?></td>
			</tr>
			<?php endif ?>

			<tr>
				<td colspan="2">3.7 Produksi bahan galian yang dimiliki anggota keluarga</td>
			</tr>
			<tr>
				<td>Batu kali</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[1]["galian"]["batu_kali"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[1]["galian"]["batu_kali"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[1]["galian"]["batu_kali"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[1]["galian"]["batu_kali"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Batu kapur</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[1]["galian"]["batu_kapur"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[1]["galian"]["batu_kapur"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[1]["galian"]["batu_kapur"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[1]["galian"]["batu_kapur"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Pasir</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[1]["galian"]["pasir"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[1]["galian"]["pasir"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[1]["galian"]["pasir"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[1]["galian"]["pasir"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Emas</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[1]["galian"]["emas"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[1]["galian"]["emas"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[1]["galian"]["emas"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[1]["galian"]["emas"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Kuningan</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[1]["galian"]["kuningan"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[1]["galian"]["kuningan"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[1]["galian"]["kuningan"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[1]["galian"]["kuningan"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Aluminium</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[1]["galian"]["aluminium"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[1]["galian"]["aluminium"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[1]["galian"]["aluminium"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[1]["galian"]["aluminium"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Perunggu</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[1]["galian"]["perunggu"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[1]["galian"]["perunggu"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[1]["galian"]["perunggu"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[1]["galian"]["perunggu"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Belerang</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[1]["galian"]["belerang"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[1]["galian"]["belerang"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[1]["galian"]["belerang"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[1]["galian"]["belerang"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Batu marmer</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[1]["galian"]["batu_marmer"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[1]["galian"]["batu_marmer"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[1]["galian"]["batu_marmer"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[1]["galian"]["batu_marmer"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Batu cadas</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[1]["galian"]["batu_cadas"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[1]["galian"]["batu_cadas"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[1]["galian"]["batu_cadas"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[1]["galian"]["batu_cadas"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Batu apung</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[1]["galian"]["batu_apung"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[1]["galian"]["batu_apung"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[1]["galian"]["batu_apung"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[1]["galian"]["batu_apung"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Pasir kwarsa</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[1]["galian"]["pasir_kwarsa"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[1]["galian"]["pasir_kwarsa"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[1]["galian"]["pasir_kwarsa"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[1]["galian"]["pasir_kwarsa"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Batubara</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[1]["galian"]["batubara"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[1]["galian"]["batubara"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[1]["galian"]["batubara"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[1]["galian"]["batubara"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Batu Granit</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[1]["galian"]["batu_granit"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[1]["galian"]["batu_granit"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[1]["galian"]["batu_granit"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[1]["galian"]["batu_granit"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Batu Gamping</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[1]["galian"]["batu_gamping"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[1]["galian"]["batu_gamping"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[1]["galian"]["batu_gamping"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[1]["galian"]["batu_gamping"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Mangan</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[1]["galian"]["mangan"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[1]["galian"]["mangan"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[1]["galian"]["mangan"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[1]["galian"]["mangan"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Batu Trass</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[1]["galian"]["batu_trass"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[1]["galian"]["batu_trass"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[1]["galian"]["batu_trass"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[1]["galian"]["batu_trass"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Batu Putih</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[1]["galian"]["batu_putih"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[1]["galian"]["batu_putih"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[1]["galian"]["batu_putih"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[1]["galian"]["batu_putih"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Pasir Batu</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[1]["galian"]["pasir_batu"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[1]["galian"]["pasir_batu"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[1]["galian"]["pasir_batu"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[1]["galian"]["pasir_batu"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Pasir Besi</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[1]["galian"]["pasir_besi"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[1]["galian"]["pasir_besi"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[1]["galian"]["pasir_besi"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[1]["galian"]["pasir_besi"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Gips</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[1]["galian"]["gips"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[1]["galian"]["gips"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[1]["galian"]["gips"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[1]["galian"]["gips"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Minyak Bumi</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[1]["galian"]["minyak_bumi"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[1]["galian"]["minyak_bumi"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[1]["galian"]["minyak_bumi"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[1]["galian"]["minyak_bumi"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Gas Alam</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[1]["galian"]["gas_alam"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[1]["galian"]["gas_alam"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[1]["galian"]["gas_alam"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[1]["galian"]["gas_alam"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Perak</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[1]["galian"]["perak"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[1]["galian"]["perak"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[1]["galian"]["perak"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[1]["galian"]["perak"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Timah</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[1]["galian"]["timah"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[1]["galian"]["timah"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[1]["galian"]["timah"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[1]["galian"]["timah"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Tembaga</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[1]["galian"]["tembaga"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[1]["galian"]["tembaga"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[1]["galian"]["tembaga"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[1]["galian"]["tembaga"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Biji Besi</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[1]["galian"]["biji_besi"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[1]["galian"]["biji_besi"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[1]["galian"]["biji_besi"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[1]["galian"]["biji_besi"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Uranium</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[1]["galian"]["uranium"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[1]["galian"]["uranium"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[1]["galian"]["uranium"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[1]["galian"]["uranium"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Bouxit</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[1]["galian"]["bouxit"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[1]["galian"]["bouxit"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[1]["galian"]["bouxit"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[1]["galian"]["bouxit"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Garam</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[1]["galian"]["garam"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[1]["galian"]["garam"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[1]["galian"]["garam"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[1]["galian"]["garam"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Nikel</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[1]["galian"]["nikel"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[1]["galian"]["nikel"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[1]["galian"]["nikel"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[1]["galian"]["nikel"]["pemasaran"] ?>
				</td>
			</tr>
			<?php if(!empty($ddk->anggota[1]["galian"]["lainnya"]["keterangan"])): ?>
			<tr>
				<td><?php echo $ddk->anggota[1]["galian"]["lainnya"]["keterangan"] ?></td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[1]["galian"]["lainnya"]["opsi"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[1]["galian"]["lainnya"]["opsi"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[1]["galian"]["lainnya"]["opsi"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[1]["galian"]["lainnya"]["opsi"]["pemasaran"] ?>
				</td>
			</tr>
			<?php endif ?>

			<tr>
				<td colspan="2">4. Data Anggota Keluarga</td>
			</tr>
			<tr>
				<td colspan="2">4.1 Biodata</td>
			</tr>
			<tr>
				<td>Nomor Urut</td>
				<td><?php echo $ddk->anggota[2]["no_urut"] ?></td>
			</tr>
			<tr>
				<td>Nomor Induk Kependudukan (NIK)</td>
				<td><?php echo $ddk->anggota[2]["nik"] ?></td>
			</tr>
			<tr>
				<td>Nama Lengkap</td>
				<td><?php echo $ddk->anggota[2]["nama"] ?></td>
			</tr>
			<tr>
				<td>Nomor Akte Kelahiran</td>
				<td><?php echo $ddk->anggota[2]["no_akte"] ?></td>
			</tr>
			
			<tr>
				<td>Tempat Lahir</td>
				<td><?php echo $ddk->anggota[2]["tempat_lahir"] ?></td>
			</tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td><?php echo $ddk->anggota[2]["tanggal_lahir"] ?></td>
			</tr>
			<tr>
				<td>Tanggal Pencatatan</td>
				<td><?php echo $ddk->anggota[2]["tanggal_pencatatan"] ?></td>
			</tr>
			
			

			<tr>
				<td colspan="2">4.2 Cacat Menurut Jenis</td>
			</tr>
			<tr>
				<td colspan="2">Cacat Fisik</td>
			</tr>
			<tr>
				<td>Tuna rungu</td>
				<?php echo $ddk->anggota[2]["cacat_fisik"]["tuli"] ?>
			</tr>
			<tr>
				<td>Tuna wicara</td>
				<?php echo $ddk->anggota[2]["cacat_fisik"]["bisu"] ?>
			</tr>
			<tr>
				<td>Tuna netra</td>
				<?php echo $ddk->anggota[2]["cacat_fisik"]["buta"] ?>
			</tr>
			<tr>
				<td>Lumpuh</td>
				<?php echo $ddk->anggota[2]["cacat_fisik"]["lumpuh"] ?>
			</tr>
			<tr>
				<td>Sumbing</td>
				<?php echo $ddk->anggota[2]["cacat_fisik"]["sumbing"] ?>
			</tr>
			<?php if(!empty($ddk->anggota[2]["cacat_fisik"]["lainnya"]["keterangan"])): ?>
			<tr>
				<td><?php echo $ddk->anggota[2]["cacat_fisik"]["lainnya"]["keterangan"] ?></td>
				<?php echo $ddk->anggota[2]["cacat_fisik"]["lainnya"]["jumlah"] ?>
			</tr>
			<?php endif ?>
			<tr>
				<td colspan="2">Cacat Mental</td>
			</tr>
			<tr>
				<td>Idiot</td>
				<?php echo $ddk->anggota[2]["cacat_mental"]["idiot"] ?>
			</tr>
			<tr>
				<td>Gila</td>
				<?php echo $ddk->anggota[2]["cacat_mental"]["gila"] ?>
			</tr>
			<tr>
				<td>Stress</td>
				<?php echo $ddk->anggota[2]["cacat_mental"]["stress"] ?>
			</tr>
			<?php if(!empty($ddk->anggota[2]["cacat_mental"]["lainnya"]["keterangan"])): ?>
			<tr>
				<td><?php echo $ddk->anggota[2]["cacat_mental"]["lainnya"]["keterangan"] ?></td>
				<?php echo $ddk->anggota[2]["cacat_mental"]["lainnya"]["jumlah"] ?>
			</tr>
			<?php endif ?>

			<tr>
				<td colspan="2">4.3. Kedudukan Anggota Keluarga sebagai Wajib Pajak dan Retribusi</td>
			</tr>
			<tr>
				<td>Wajib Pajak Bumi dan Bangunan</td>
				<td><?php echo $ddk->anggota[2]["pajak_retribusi"]["pbb"] ?></td>
			</tr>
			<tr>
				<td>Wajib Pajak Penghasilan Perorangan</td>
				<td><?php echo $ddk->anggota[2]["pajak_retribusi"]["ppp"] ?></td>
			</tr>
			<tr>
				<td>Wajib Pajak Badan/Perusahaan</td>
				<td><?php echo $ddk->anggota[2]["pajak_retribusi"]["pb"] ?></td>
			</tr>
			<tr>
				<td>Wajib Pajak Kendaraan Bermotor</td>
				<td><?php echo $ddk->anggota[2]["pajak_retribusi"]["pkb"] ?></td>
			</tr>
			<tr>
				<td>Wajib Retribusi Kebersihan</td>
				<td><?php echo $ddk->anggota[2]["pajak_retribusi"]["kebersihan"] ?></td>
			</tr>
			<tr>
				<td>Wajib Retribusi Keamanan</td>
				<td><?php echo $ddk->anggota[2]["pajak_retribusi"]["keamanan"] ?></td>
			</tr>
			<tr>
				<td>Wajib iuran</td>
				<td><?php echo $ddk->anggota[2]["pajak_retribusi"]["iuran"] ?></td>
			</tr>
			<tr>
				<td>Wajib pungutan</td>
				<td><?php echo $ddk->anggota[2]["pajak_retribusi"]["pungutan"] ?></td>
			</tr>
			<?php if(!empty($ddk->anggota[2]["pajak_retribusi"]["lainnya"]["keterangan"])): ?>
			<tr>
				<td><?php echo $ddk->anggota[2]["pajak_retribusi"]["lainnya"]["keterangan"] ?></td>
				<td><?php echo $ddk->anggota[2]["pajak_retribusi"]["lainnya"]["jumlah"] ?></td>
			</tr>
			<?php endif ?>

			<tr>
				<td colspan="2">4.4 Lembaga Pemerintahan Yang Diikuti Anggota Keluarga</td>
			</tr>
			<tr>
				<td>Kepala Desa/Lurah</td>
				<td><?php echo $ddk->anggota[2]["pemerintahan"]["kepala_desa"] ?></td>
			</tr>
			<tr>
				<td>Sekretaris Desa/Kelurahan</td>
				<td><?php echo $ddk->anggota[2]["pemerintahan"]["sekretaris_desa"] ?></td>
			</tr>
			<tr>
				<td>Kepala Urusan</td>
				<td><?php echo $ddk->anggota[2]["pemerintahan"]["kepala_urusan"] ?></td>
			</tr>
			<tr>
				<td>Kepala Dusun/Lingkungan</td>
				<td><?php echo $ddk->anggota[2]["pemerintahan"]["kepala_dusun"] ?></td>
			</tr>
			<tr>
				<td>Staf Desa/Kelurahan</td>
				<td><?php echo $ddk->anggota[2]["pemerintahan"]["staf_desa"] ?></td>
			</tr>
			<tr>
				<td>Ketua BPD</td>
				<td><?php echo $ddk->anggota[2]["pemerintahan"]["ketua_bpd"] ?></td>
			</tr>
			<tr>
				<td>Wakil Ketua BPD</td>
				<td><?php echo $ddk->anggota[2]["pemerintahan"]["wakil_ketua_bpd"] ?></td>
			</tr>
			<tr>
				<td>Sekretaris BPD</td>
				<td><?php echo $ddk->anggota[2]["pemerintahan"]["sekretaris_bpd"] ?></td>
			</tr>
			<tr>
				<td>Anggota BPD</td>
				<td><?php echo $ddk->anggota[2]["pemerintahan"]["anggota_bpd"] ?></td>
			</tr>
			<?php if(!empty($ddk->anggota[2]["pemerintahan"]["lainnya"]["keterangan"])): ?>
			<tr>
				<td><?php echo $ddk->anggota[2]["pemerintahan"]["lainnya"]["keterangan"] ?></td>
				<td><?php echo $ddk->anggota[2]["pemerintahan"]["lainnya"]["jumlah"] ?></td>
			</tr>
			<?php endif ?>

			<tr>
				<td colspan="2">4.5 Lembaga Kemasyarakatan Yang Diikuti Anggota Keluarga</td>
			</tr>
			<tr>
				<td>Pengurus RT</td>
				<td><?php echo $ddk->anggota[2]["kemasyarakatan"]["prt"] ?></td>
			</tr>
			<tr>
				<td>Anggota Pengurus RT</td>
				<td><?php echo $ddk->anggota[2]["kemasyarakatan"]["aprt"] ?></td>
			</tr>
			<tr>
				<td>Pengurus RW</td>
				<td><?php echo $ddk->anggota[2]["kemasyarakatan"]["prw"] ?></td>
			</tr>
			<tr>
				<td>Anggota Pengurus RW</td>
				<td><?php echo $ddk->anggota[2]["kemasyarakatan"]["aprw"] ?></td>
			</tr>
			<tr>
				<td>Pengurus LKMD/K/LPM</td>
				<td><?php echo $ddk->anggota[2]["kemasyarakatan"]["plkmdklpm"] ?></td>
			</tr>
			<tr>
				<td>Anggota LKMD/K/LPM</td>
				<td><?php echo $ddk->anggota[2]["kemasyarakatan"]["alkmdklpm"] ?></td>
			</tr>
			<tr>
				<td>Pengurus PKK</td>
				<td><?php echo $ddk->anggota[2]["kemasyarakatan"]["ppkk"] ?></td>
			</tr>
			<tr>
				<td>Anggota PKK</td>
				<td><?php echo $ddk->anggota[2]["kemasyarakatan"]["apkk"] ?></td>
			</tr>
			<tr>
				<td>Pengurus Lembaga Adat</td>
				<td><?php echo $ddk->anggota[2]["kemasyarakatan"]["pla"] ?></td>
			</tr>
			<tr>
				<td>Pengurus Karang Taruna</td>
				<td><?php echo $ddk->anggota[2]["kemasyarakatan"]["pkt"] ?></td>
			</tr>
			<tr>
				<td>Anggota Karang Taruna</td>
				<td><?php echo $ddk->anggota[2]["kemasyarakatan"]["akt"] ?></td>
			</tr>
			<tr>
				<td>Pengurus Hansip/Linmas</td>
				<td><?php echo $ddk->anggota[2]["kemasyarakatan"]["phl"] ?></td>
			</tr>
			<tr>
				<td>Pengurus Poskamling</td>
				<td><?php echo $ddk->anggota[2]["kemasyarakatan"]["pp"] ?></td>
			</tr>
			<tr>
				<td>Pengurus Organisasi Perempuan</td>
				<td><?php echo $ddk->anggota[2]["kemasyarakatan"]["pop"] ?></td>
			</tr>
			<tr>
				<td>Anggota Organisasi Perempuan</td>
				<td><?php echo $ddk->anggota[2]["kemasyarakatan"]["aop"] ?></td>
			</tr>
			<tr>
				<td>Pengurus Organisasi Bapak-bapak</td>
				<td><?php echo $ddk->anggota[2]["kemasyarakatan"]["pob"] ?></td>
			</tr>
			<tr>
				<td>Anggota Organisasi Bapak-bapak</td>
				<td><?php echo $ddk->anggota[2]["kemasyarakatan"]["aob"] ?></td>
			</tr>
			<tr>
				<td>Pengurus Organisasi keagamaan</td>
				<td><?php echo $ddk->anggota[2]["kemasyarakatan"]["pok"] ?></td>
			</tr>
			<tr>
				<td>Anggota Organisasi keagamaan</td>
				<td><?php echo $ddk->anggota[2]["kemasyarakatan"]["aok"] ?></td>
			</tr>
			<tr>
				<td>Pengurus Organisasi profesi wartawan</td>
				<td><?php echo $ddk->anggota[2]["kemasyarakatan"]["popw"] ?></td>
			</tr>
			<tr>
				<td>Anggota Organisasi profesi wartawan</td>
				<td><?php echo $ddk->anggota[2]["kemasyarakatan"]["aopw"] ?></td>
			</tr>
			<tr>
				<td>Pengurus Posyandu</td>
				<td><?php echo $ddk->anggota[2]["kemasyarakatan"]["pposyandu"] ?></td>
			</tr>
			<tr>
				<td>Pengurus Posyantekdes</td>
				<td><?php echo $ddk->anggota[2]["kemasyarakatan"]["pposyantekdes"] ?></td>
			</tr>
			<tr>
				<td>Pengurus Organisasi Kelompok Tani/Nelayan</td>
				<td><?php echo $ddk->anggota[2]["kemasyarakatan"]["poktan"] ?></td>
			</tr>
			<tr>
				<td>Anggota Organisasi Kelompok Tani/Nelayan</td>
				<td><?php echo $ddk->anggota[2]["kemasyarakatan"]["aoktan"] ?></td>
			</tr>
			<tr>
				<td>Pengurus Lembaga Gotong royong</td>
				<td><?php echo $ddk->anggota[2]["kemasyarakatan"]["plgr"] ?></td>
			</tr>
			<tr>
				<td>Anggota Lembaga Gotong royong</td>
				<td><?php echo $ddk->anggota[2]["kemasyarakatan"]["algr"] ?></td>
			</tr>
			<tr>
				<td>Pengurus Organisasi Profesi guru</td>
				<td><?php echo $ddk->anggota[2]["kemasyarakatan"]["popg"] ?></td>
			</tr>
			<tr>
				<td>Anggota Organisasi Profesi guru</td>
				<td><?php echo $ddk->anggota[2]["kemasyarakatan"]["aopg"] ?></td>
			</tr>
			<tr>
				<td>Pengurus Organisasi profesi dokter/tenaga medis</td>
				<td><?php echo $ddk->anggota[2]["kemasyarakatan"]["popdtm"] ?></td>
			</tr>
			<tr>
				<td>Anggota Organisasi profesi/tenaga medis</td>
				<td><?php echo $ddk->anggota[2]["kemasyarakatan"]["aoptm"] ?></td>
			</tr>
			<tr>
				<td>Pengurus organisasi pensiunan</td>
				<td><?php echo $ddk->anggota[2]["kemasyarakatan"]["popensiun"] ?></td>
			</tr>
			<tr>
				<td>Anggota organisasi pensiunan</td>
				<td><?php echo $ddk->anggota[2]["kemasyarakatan"]["aopensiun"] ?></td>
			</tr>
			<tr>
				<td>Pengurus organisasi pemirsa/pendengar</td>
				<td><?php echo $ddk->anggota[2]["kemasyarakatan"]["popp"] ?></td>
			</tr>
			<tr>
				<td>Anggota organisasi pemirsa/pendengar</td>
				<td><?php echo $ddk->anggota[2]["kemasyarakatan"]["aopp"] ?></td>
			</tr>
			<tr>
				<td>Pengurus lembaga pencinta alam</td>
				<td><?php echo $ddk->anggota[2]["kemasyarakatan"]["plpa"] ?></td>
			</tr>
			<tr>
				<td>Anggota organisasi pencinta alam</td>
				<td><?php echo $ddk->anggota[2]["kemasyarakatan"]["alpa"] ?></td>
			</tr>
			<tr>
				<td>Pengurus organisasi pengembangan ilmu pengetahuan</td>
				<td><?php echo $ddk->anggota[2]["kemasyarakatan"]["popip"] ?></td>
			</tr>
			<tr>
				<td>Anggota organisasi pengembangan ilmu pengetaahuan</td>
				<td><?php echo $ddk->anggota[2]["kemasyarakatan"]["aopip"] ?></td>
			</tr>
			<tr>
				<td>Pemilik yayasan</td>
				<td><?php echo $ddk->anggota[2]["kemasyarakatan"]["pemyaya"] ?></td>
			</tr>
			<tr>
				<td>Pengurus yayasan</td>
				<td><?php echo $ddk->anggota[2]["kemasyarakatan"]["penyaya"] ?></td>
			</tr>
			<tr>
				<td>Anggota yayasan</td>
				<td><?php echo $ddk->anggota[2]["kemasyarakatan"]["angyaya"] ?></td>
			</tr>
			<tr>
				<td>Pengurus Satgas Kebersihan</td>
				<td><?php echo $ddk->anggota[2]["kemasyarakatan"]["pkebersihan"] ?></td>
			</tr>
			<tr>
				<td>Anggota Satgas Kebersihan</td>
				<td><?php echo $ddk->anggota[2]["kemasyarakatan"]["akebersihan"] ?></td>
			</tr>
			<tr>
				<td>Pengurus Satgas Kebakaran</td>
				<td><?php echo $ddk->anggota[2]["kemasyarakatan"]["pkebakaran"] ?></td>
			</tr>
			<tr>
				<td>Anggota Satgas Kebakaran</td>
				<td><?php echo $ddk->anggota[2]["kemasyarakatan"]["akebakaran"] ?></td>
			</tr>
			<tr>
				<td>Pengurus Posko Penanggulangan Bencana</td>
				<td><?php echo $ddk->anggota[2]["kemasyarakatan"]["ppb"] ?></td>
			</tr>
			<tr>
				<td>Anggota Tim Penanggulangan Bencana</td>
				<td><?php echo $ddk->anggota[2]["kemasyarakatan"]["atpb"] ?></td>
			</tr>
			<?php if(!empty($ddk->anggota[2]["kemasyarakatan"]["lainnya"]["keterangan"])): ?>
			<tr>
				<td><?php echo $ddk->anggota[2]["kemasyarakatan"]["lainnya"]["keterangan"] ?></td>
				<td><?php echo $ddk->anggota[2]["kemasyarakatan"]["lainnya"]["jumlah"] ?></td>
			</tr>
			<?php endif ?>

			<tr>
				<td colspan="2">4.6 Lembaga Ekonomi Yang Dimiliki Anggota Keluarga</td>
			</tr>
			<tr>
				<td>Koperasi</td>
				<td><?php echo $ddk->anggota[2]["ekonomi"]["koperasi"] ?></td>
			</tr>
			<tr>
				<td>Unit Usaha Simpan Pinjam</td>
				<td><?php echo $ddk->anggota[2]["ekonomi"]["unit_usaha_simpan_pinjam"] ?></td>
			</tr>
			<tr>
				<td>Industri Kerajinan Tangan</td>
				<td><?php echo $ddk->anggota[2]["ekonomi"]["industri_kerajinan_tangan"] ?></td>
			</tr>
			<tr>
				<td>Industri Pakaian</td>
				<td><?php echo $ddk->anggota[2]["ekonomi"]["industri_pakaian"] ?></td>
			</tr>
			<tr>
				<td>Industri Usaha Makanan</td>
				<td><?php echo $ddk->anggota[2]["ekonomi"]["industri_usaha_makanan"] ?></td>
			</tr>
			<tr>
				<td>Industri Alat Rumah Tangga</td>
				<td><?php echo $ddk->anggota[2]["ekonomi"]["industri_alat_rumah_tangga"] ?></td>
			</tr>
			<tr>
				<td>Industri Usaha Bahan Bangunan</td>
				<td><?php echo $ddk->anggota[2]["ekonomi"]["industri_usaha_bahan_bangunan"] ?></td>
			</tr>
			<tr>
				<td>Industri Alat Pertanian</td>
				<td><?php echo $ddk->anggota[2]["ekonomi"]["industri_alat_pertanian"] ?></td>
			</tr>
			<tr>
				<td>Restoran</td>
				<td><?php echo $ddk->anggota[2]["ekonomi"]["restoran"] ?></td>
			</tr>
			<tr>
				<td>Toko/ Swalayan</td>
				<td><?php echo $ddk->anggota[2]["ekonomi"]["toko__swalayan"] ?></td>
			</tr>
			<tr>
				<td>Warung Kelontongan/Kios</td>
				<td><?php echo $ddk->anggota[2]["ekonomi"]["warung_kelontongan_kios"] ?></td>
			</tr>
			<tr>
				<td>Angkutan Darat</td>
				<td><?php echo $ddk->anggota[2]["ekonomi"]["angkutan_darat"] ?></td>
			</tr>
			<tr>
				<td>Angkutan Sungai</td>
				<td><?php echo $ddk->anggota[2]["ekonomi"]["angkutan_sungai"] ?></td>
			</tr>
			<tr>
				<td>Angkutan Laut</td>
				<td><?php echo $ddk->anggota[2]["ekonomi"]["angkutan_laut"] ?></td>
			</tr>
			<tr>
				<td>Angkutan Udara</td>
				<td><?php echo $ddk->anggota[2]["ekonomi"]["angkutan_udara"] ?></td>
			</tr>
			<tr>
				<td>Jasa Ekspedisi/Pengiriman Barang</td>
				<td><?php echo $ddk->anggota[2]["ekonomi"]["jasa_ekspedisi_pengiriman_barang"] ?></td>
			</tr>
			<tr>
				<td>Usaha Pasar Harian</td>
				<td><?php echo $ddk->anggota[2]["ekonomi"]["usaha_pasar_harian"] ?></td>
			</tr>
			<tr>
				<td>Usaha Pasar Mingguan</td>
				<td><?php echo $ddk->anggota[2]["ekonomi"]["usaha_pasar_mingguan"] ?></td>
			</tr>
			<tr>
				<td>Usaha Pasar Ternak</td>
				<td><?php echo $ddk->anggota[2]["ekonomi"]["usaha_pasar_ternak"] ?></td>
			</tr>
			<tr>
				<td>Usaha Pasar Hasil Bumi Dan Tambang</td>
				<td><?php echo $ddk->anggota[2]["ekonomi"]["usaha_pasar_hasil_bumi_dan_tambang"] ?></td>
			</tr>
			<tr>
				<td>Usaha Perdagangan Antar Pulau</td>
				<td><?php echo $ddk->anggota[2]["ekonomi"]["usaha_perdagangan_antar_pulau"] ?></td>
			</tr>
			<tr>
				<td>Pengijon</td>
				<td><?php echo $ddk->anggota[2]["ekonomi"]["pengijon"] ?></td>
			</tr>
			<tr>
				<td>Pedagang Pengumpul/Tengkulak</td>
				<td><?php echo $ddk->anggota[2]["ekonomi"]["pedagang_pengumpul_tengkulak"] ?></td>
			</tr>
			<tr>
				<td>Usaha Peternakan</td>
				<td><?php echo $ddk->anggota[2]["ekonomi"]["usaha_peternakan"] ?></td>
			</tr>
			<tr>
				<td>Usaha Perikanan</td>
				<td><?php echo $ddk->anggota[2]["ekonomi"]["usaha_perikanan"] ?></td>
			</tr>
			<tr>
				<td>Usaha Perkebunan</td>
				<td><?php echo $ddk->anggota[2]["ekonomi"]["usaha_perkebunan"] ?></td>
			</tr>
			<tr>
				<td>Kelompok Simpan Pinjam</td>
				<td><?php echo $ddk->anggota[2]["ekonomi"]["kelompok_simpan_pinjam"] ?></td>
			</tr>
			<tr>
				<td>Usaha Minuman</td>
				<td><?php echo $ddk->anggota[2]["ekonomi"]["usaha_minuman"] ?></td>
			</tr>
			<tr>
				<td>Industri Farmasi</td>
				<td><?php echo $ddk->anggota[2]["ekonomi"]["industri_farmasi"] ?></td>
			</tr>
			<tr>
				<td>Industri Karoseri</td>
				<td><?php echo $ddk->anggota[2]["ekonomi"]["industri_karoseri"] ?></td>
			</tr>
			<tr>
				<td>Penitipan Kendaraan Bermotor</td>
				<td><?php echo $ddk->anggota[2]["ekonomi"]["penitipan_kendaraan_bermotor"] ?></td>
			</tr>
			<tr>
				<td>Industri Perakitan Elektronik</td>
				<td><?php echo $ddk->anggota[2]["ekonomi"]["industri_perakitan_elektronik"] ?></td>
			</tr>
			<tr>
				<td>Pengolahan Kayu</td>
				<td><?php echo $ddk->anggota[2]["ekonomi"]["pengolahan_kayu"] ?></td>
			</tr>
			<tr>
				<td>Bioskop</td>
				<td><?php echo $ddk->anggota[2]["ekonomi"]["bioskop"] ?></td>
			</tr>
			<tr>
				<td>Film Keliling</td>
				<td><?php echo $ddk->anggota[2]["ekonomi"]["film_keliling"] ?></td>
			</tr>
			<tr>
				<td>Sandiwara/Drama</td>
				<td><?php echo $ddk->anggota[2]["ekonomi"]["sandiwara_drama"] ?></td>
			</tr>
			<tr>
				<td>Group Lawak</td>
				<td><?php echo $ddk->anggota[2]["ekonomi"]["group_lawak"] ?></td>
			</tr>
			<tr>
				<td>Jaipongan</td>
				<td><?php echo $ddk->anggota[2]["ekonomi"]["jaipongan"] ?></td>
			</tr>
			<tr>
				<td>Wayang Orang/Golek</td>
				<td><?php echo $ddk->anggota[2]["ekonomi"]["wayang_orang_golek"] ?></td>
			</tr>
			<tr>
				<td>Group Musik/Band</td>
				<td><?php echo $ddk->anggota[2]["ekonomi"]["group_musik_band"] ?></td>
			</tr>
			<tr>
				<td>Group Vokal/Paduan Suara</td>
				<td><?php echo $ddk->anggota[2]["ekonomi"]["group_vokal_paduan_suara"] ?></td>
			</tr>
			<tr>
				<td>Usaha Persewaan Tenaga Listrik</td>
				<td><?php echo $ddk->anggota[2]["ekonomi"]["usaha_persewaan_tenaga_listrik"] ?></td>
			</tr>
			<tr>
				<td>Usaha Pengecer Gas Dan Bahan Bakar Minyak</td>
				<td><?php echo $ddk->anggota[2]["ekonomi"]["usaha_pengecer_gas_dan_bahan_bakar_minyak"] ?></td>
			</tr>
			<tr>
				<td>Usaha Air Minum Dalam Kemasan</td>
				<td><?php echo $ddk->anggota[2]["ekonomi"]["usaha_air_minum_dalam_kemasan"] ?></td>
			</tr>
			<tr>
				<td>Tukang Kayu</td>
				<td><?php echo $ddk->anggota[2]["ekonomi"]["tukang_kayu"] ?></td>
			</tr>
			<tr>
				<td>Tukang Batu</td>
				<td><?php echo $ddk->anggota[2]["ekonomi"]["tukang_batu"] ?></td>
			</tr>
			<tr>
				<td>Tukang Jahit/Bordir</td>
				<td><?php echo $ddk->anggota[2]["ekonomi"]["tukang_jahit_bordir"] ?></td>
			</tr>
			<tr>
				<td>Tukang Cukur</td>
				<td><?php echo $ddk->anggota[2]["ekonomi"]["tukang_cukur"] ?></td>
			</tr>
			<tr>
				<td>Tukang Service Elektronik</td>
				<td><?php echo $ddk->anggota[2]["ekonomi"]["tukang_service_elektronik"] ?></td>
			</tr>
			<tr>
				<td>Tukang Besi</td>
				<td><?php echo $ddk->anggota[2]["ekonomi"]["tukang_besi"] ?></td>
			</tr>
			<tr>
				<td>Tukang Pijat/Urut</td>
				<td><?php echo $ddk->anggota[2]["ekonomi"]["tukang_pijat_urut"] ?></td>
			</tr>
			<tr>
				<td>Tukang Sumur</td>
				<td><?php echo $ddk->anggota[2]["ekonomi"]["tukang_sumur"] ?></td>
			</tr>
			<tr>
				<td>Notaris</td>
				<td><?php echo $ddk->anggota[2]["ekonomi"]["notaris"] ?></td>
			</tr>
			<tr>
				<td>Pengacara/Advokat</td>
				<td><?php echo $ddk->anggota[2]["ekonomi"]["pengacara_advokat"] ?></td>
			</tr>
			<tr>
				<td>Konsultan Manajemen</td>
				<td><?php echo $ddk->anggota[2]["ekonomi"]["konsultan_manajemen"] ?></td>
			</tr>
			<tr>
				<td>Konsultan Teknis</td>
				<td><?php echo $ddk->anggota[2]["ekonomi"]["konsultan_teknis"] ?></td>
			</tr>
			<tr>
				<td>Pejabat Pembuat Akta Tanah</td>
				<td><?php echo $ddk->anggota[2]["ekonomi"]["pejabat_pembuat_akta_tanah"] ?></td>
			</tr>
			<tr>
				<td>Losmen</td>
				<td><?php echo $ddk->anggota[2]["ekonomi"]["losmen"] ?></td>
			</tr>
			<tr>
				<td>Wisma</td>
				<td><?php echo $ddk->anggota[2]["ekonomi"]["wisma"] ?></td>
			</tr>
			<tr>
				<td>Asrama</td>
				<td><?php echo $ddk->anggota[2]["ekonomi"]["asrama"] ?></td>
			</tr>
			<tr>
				<td>Persewaan Kamar</td>
				<td><?php echo $ddk->anggota[2]["ekonomi"]["persewaan_kamar"] ?></td>
			</tr>
			<tr>
				<td>Kontrakan Rumah</td>
				<td><?php echo $ddk->anggota[2]["ekonomi"]["kontrakan_rumah"] ?></td>
			</tr>
			<tr>
				<td>Mess</td>
				<td><?php echo $ddk->anggota[2]["ekonomi"]["mess"] ?></td>
			</tr>
			<tr>
				<td>Hotel</td>
				<td><?php echo $ddk->anggota[2]["ekonomi"]["hotel"] ?></td>
			</tr>
			<tr>
				<td>Home Stay</td>
				<td><?php echo $ddk->anggota[2]["ekonomi"]["home_stay"] ?></td>
			</tr>
			<tr>
				<td>Villa</td>
				<td><?php echo $ddk->anggota[2]["ekonomi"]["villa"] ?></td>
			</tr>
			<tr>
				<td>Town House</td>
				<td><?php echo $ddk->anggota[2]["ekonomi"]["town_house"] ?></td>
			</tr>
			<tr>
				<td>Usaha Asuransi</td>
				<td><?php echo $ddk->anggota[2]["ekonomi"]["usaha_asuransi"] ?></td>
			</tr>
			<tr>
				<td>Lembaga Keuangan Bukan Bank</td>
				<td><?php echo $ddk->anggota[2]["ekonomi"]["lembaga_keuangan_bukan_bank"] ?></td>
			</tr>
			<tr>
				<td>Lembaga Perkreditan Rakyat</td>
				<td><?php echo $ddk->anggota[2]["ekonomi"]["lembaga_perkreditan_rakyat"] ?></td>
			</tr>
			<tr>
				<td>Pegadaian</td>
				<td><?php echo $ddk->anggota[2]["ekonomi"]["pegadaian"] ?></td>
			</tr>
			<tr>
				<td>Bank Perkreditan Rakyat</td>
				<td><?php echo $ddk->anggota[2]["ekonomi"]["bank_perkreditan_rakyat"] ?></td>
			</tr>
			<tr>
				<td>Usaha Penyewaan Alat Pesta</td>
				<td><?php echo $ddk->anggota[2]["ekonomi"]["usaha_penyewaan_alat_pesta"] ?></td>
			</tr>
			<tr>
				<td>Usaha Pengolahan dan Penjualan Hasil Hutan</td>
				<td><?php echo $ddk->anggota[2]["ekonomi"]["usaha_pengolahan_dan_penjualan_hasil_hutan"] ?></td>
			</tr>
			<?php if(!empty($ddk->anggota[2]["ekonomi"]["lainnya"]["keterangan"])): ?>
			<tr>
				<td><?php echo $ddk->anggota[2]["ekonomi"]["lainnya"]["keterangan"] ?></td>
				<td><?php echo $ddk->anggota[2]["ekonomi"]["lainnya"]["jumlah"] ?></td>
			</tr>
			<?php endif ?>

			<tr>
				<td colspan="2">4.7 Produksi bahan galian yang dimiliki anggota keluarga</td>
			</tr>
			<tr>
				<td>Batu kali</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[2]["galian"]["batu_kali"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[2]["galian"]["batu_kali"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[2]["galian"]["batu_kali"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[2]["galian"]["batu_kali"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Batu kapur</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[2]["galian"]["batu_kapur"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[2]["galian"]["batu_kapur"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[2]["galian"]["batu_kapur"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[2]["galian"]["batu_kapur"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Pasir</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[2]["galian"]["pasir"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[2]["galian"]["pasir"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[2]["galian"]["pasir"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[2]["galian"]["pasir"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Emas</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[2]["galian"]["emas"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[2]["galian"]["emas"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[2]["galian"]["emas"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[2]["galian"]["emas"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Kuningan</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[2]["galian"]["kuningan"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[2]["galian"]["kuningan"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[2]["galian"]["kuningan"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[2]["galian"]["kuningan"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Aluminium</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[2]["galian"]["aluminium"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[2]["galian"]["aluminium"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[2]["galian"]["aluminium"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[2]["galian"]["aluminium"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Perunggu</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[2]["galian"]["perunggu"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[2]["galian"]["perunggu"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[2]["galian"]["perunggu"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[2]["galian"]["perunggu"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Belerang</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[2]["galian"]["belerang"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[2]["galian"]["belerang"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[2]["galian"]["belerang"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[2]["galian"]["belerang"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Batu marmer</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[2]["galian"]["batu_marmer"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[2]["galian"]["batu_marmer"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[2]["galian"]["batu_marmer"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[2]["galian"]["batu_marmer"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Batu cadas</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[2]["galian"]["batu_cadas"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[2]["galian"]["batu_cadas"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[2]["galian"]["batu_cadas"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[2]["galian"]["batu_cadas"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Batu apung</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[2]["galian"]["batu_apung"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[2]["galian"]["batu_apung"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[2]["galian"]["batu_apung"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[2]["galian"]["batu_apung"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Pasir kwarsa</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[2]["galian"]["pasir_kwarsa"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[2]["galian"]["pasir_kwarsa"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[2]["galian"]["pasir_kwarsa"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[2]["galian"]["pasir_kwarsa"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Batubara</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[2]["galian"]["batubara"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[2]["galian"]["batubara"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[2]["galian"]["batubara"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[2]["galian"]["batubara"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Batu Granit</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[2]["galian"]["batu_granit"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[2]["galian"]["batu_granit"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[2]["galian"]["batu_granit"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[2]["galian"]["batu_granit"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Batu Gamping</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[2]["galian"]["batu_gamping"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[2]["galian"]["batu_gamping"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[2]["galian"]["batu_gamping"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[2]["galian"]["batu_gamping"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Mangan</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[2]["galian"]["mangan"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[2]["galian"]["mangan"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[2]["galian"]["mangan"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[2]["galian"]["mangan"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Batu Trass</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[2]["galian"]["batu_trass"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[2]["galian"]["batu_trass"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[2]["galian"]["batu_trass"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[2]["galian"]["batu_trass"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Batu Putih</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[2]["galian"]["batu_putih"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[2]["galian"]["batu_putih"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[2]["galian"]["batu_putih"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[2]["galian"]["batu_putih"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Pasir Batu</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[2]["galian"]["pasir_batu"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[2]["galian"]["pasir_batu"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[2]["galian"]["pasir_batu"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[2]["galian"]["pasir_batu"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Pasir Besi</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[2]["galian"]["pasir_besi"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[2]["galian"]["pasir_besi"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[2]["galian"]["pasir_besi"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[2]["galian"]["pasir_besi"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Gips</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[2]["galian"]["gips"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[2]["galian"]["gips"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[2]["galian"]["gips"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[2]["galian"]["gips"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Minyak Bumi</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[2]["galian"]["minyak_bumi"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[2]["galian"]["minyak_bumi"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[2]["galian"]["minyak_bumi"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[2]["galian"]["minyak_bumi"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Gas Alam</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[2]["galian"]["gas_alam"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[2]["galian"]["gas_alam"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[2]["galian"]["gas_alam"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[2]["galian"]["gas_alam"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Perak</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[2]["galian"]["perak"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[2]["galian"]["perak"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[2]["galian"]["perak"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[2]["galian"]["perak"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Timah</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[2]["galian"]["timah"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[2]["galian"]["timah"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[2]["galian"]["timah"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[2]["galian"]["timah"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Tembaga</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[2]["galian"]["tembaga"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[2]["galian"]["tembaga"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[2]["galian"]["tembaga"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[2]["galian"]["tembaga"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Biji Besi</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[2]["galian"]["biji_besi"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[2]["galian"]["biji_besi"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[2]["galian"]["biji_besi"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[2]["galian"]["biji_besi"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Uranium</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[2]["galian"]["uranium"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[2]["galian"]["uranium"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[2]["galian"]["uranium"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[2]["galian"]["uranium"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Bouxit</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[2]["galian"]["bouxit"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[2]["galian"]["bouxit"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[2]["galian"]["bouxit"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[2]["galian"]["bouxit"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Garam</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[2]["galian"]["garam"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[2]["galian"]["garam"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[2]["galian"]["garam"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[2]["galian"]["garam"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Nikel</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[2]["galian"]["nikel"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[2]["galian"]["nikel"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[2]["galian"]["nikel"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[2]["galian"]["nikel"]["pemasaran"] ?>
				</td>
			</tr>
			<?php if(!empty($ddk->anggota[2]["galian"]["lainnya"]["keterangan"])): ?>
			<tr>
				<td><?php echo $ddk->anggota[2]["galian"]["lainnya"]["keterangan"] ?></td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[2]["galian"]["lainnya"]["opsi"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[2]["galian"]["lainnya"]["opsi"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[2]["galian"]["lainnya"]["opsi"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[2]["galian"]["lainnya"]["opsi"]["pemasaran"] ?>
				</td>
			</tr>
			<?php endif ?>

			<tr>
				<td colspan="2">5. Data Anggota Keluarga</td>
			</tr>
			<tr>
				<td colspan="2">5.1 Biodata</td>
			</tr>
			<tr>
				<td>Nomor Urut</td>
				<td><?php echo $ddk->anggota[3]["no_urut"] ?></td>
			</tr>
			<tr>
				<td>Nomor Induk Kependudukan (NIK)</td>
				<td><?php echo $ddk->anggota[3]["nik"] ?></td>
			</tr>
			<tr>
				<td>Nama Lengkap</td>
				<td><?php echo $ddk->anggota[3]["nama"] ?></td>
			</tr>
			<tr>
				<td>Nomor Akte Kelahiran</td>
				<td><?php echo $ddk->anggota[3]["no_akte"] ?></td>
			</tr>

			
			
			<tr>
				<td>Tanggal Pencatatan</td>
				<td><?php echo $ddk->anggota[3]["tanggal_pencatatan"] ?></td>
			</tr>
			

			<tr>
				<td colspan="2">5.2 Cacat Menurut Jenis</td>
			</tr>
			<tr>
				<td colspan="2">Cacat Fisik</td>
			</tr>
			<tr>
				<td>Tuna rungu</td>
				<?php echo $ddk->anggota[3]["cacat_fisik"]["tuli"] ?>
			</tr>
			<tr>
				<td>Tuna wicara</td>
				<?php echo $ddk->anggota[3]["cacat_fisik"]["bisu"] ?>
			</tr>
			<tr>
				<td>Tuna netra</td>
				<?php echo $ddk->anggota[3]["cacat_fisik"]["buta"] ?>
			</tr>
			<tr>
				<td>Lumpuh</td>
				<?php echo $ddk->anggota[3]["cacat_fisik"]["lumpuh"] ?>
			</tr>
			<tr>
				<td>Sumbing</td>
				<?php echo $ddk->anggota[3]["cacat_fisik"]["sumbing"] ?>
			</tr>
			<?php if(!empty($ddk->anggota[3]["cacat_fisik"]["lainnya"]["keterangan"])): ?>
			<tr>
				<td><?php echo $ddk->anggota[3]["cacat_fisik"]["lainnya"]["keterangan"] ?></td>
				<?php echo $ddk->anggota[3]["cacat_fisik"]["lainnya"]["jumlah"] ?>
			</tr>
			<?php endif ?>
			<tr>
				<td colspan="2">Cacat Mental</td>
			</tr>
			<tr>
				<td>Idiot</td>
				<?php echo $ddk->anggota[3]["cacat_mental"]["idiot"] ?>
			</tr>
			<tr>
				<td>Gila</td>
				<?php echo $ddk->anggota[3]["cacat_mental"]["gila"] ?>
			</tr>
			<tr>
				<td>Stress</td>
				<?php echo $ddk->anggota[3]["cacat_mental"]["stress"] ?>
			</tr>
			<?php if(!empty($ddk->anggota[3]["cacat_mental"]["lainnya"]["keterangan"])): ?>
			<tr>
				<td><?php echo $ddk->anggota[3]["cacat_mental"]["lainnya"]["keterangan"] ?></td>
				<?php echo $ddk->anggota[3]["cacat_mental"]["lainnya"]["jumlah"] ?>
			</tr>
			<?php endif ?>

			<tr>
				<td colspan="2">5.3. Kedudukan Anggota Keluarga sebagai Wajib Pajak dan Retribusi</td>
			</tr>
			<tr>
				<td>Wajib Pajak Bumi dan Bangunan</td>
				<td><?php echo $ddk->anggota[3]["pajak_retribusi"]["pbb"] ?></td>
			</tr>
			<tr>
				<td>Wajib Pajak Penghasilan Perorangan</td>
				<td><?php echo $ddk->anggota[3]["pajak_retribusi"]["ppp"] ?></td>
			</tr>
			<tr>
				<td>Wajib Pajak Badan/Perusahaan</td>
				<td><?php echo $ddk->anggota[3]["pajak_retribusi"]["pb"] ?></td>
			</tr>
			<tr>
				<td>Wajib Pajak Kendaraan Bermotor</td>
				<td><?php echo $ddk->anggota[3]["pajak_retribusi"]["pkb"] ?></td>
			</tr>
			<tr>
				<td>Wajib Retribusi Kebersihan</td>
				<td><?php echo $ddk->anggota[3]["pajak_retribusi"]["kebersihan"] ?></td>
			</tr>
			<tr>
				<td>Wajib Retribusi Keamanan</td>
				<td><?php echo $ddk->anggota[3]["pajak_retribusi"]["keamanan"] ?></td>
			</tr>
			<tr>
				<td>Wajib iuran</td>
				<td><?php echo $ddk->anggota[3]["pajak_retribusi"]["iuran"] ?></td>
			</tr>
			<tr>
				<td>Wajib pungutan</td>
				<td><?php echo $ddk->anggota[3]["pajak_retribusi"]["pungutan"] ?></td>
			</tr>
			<?php if(!empty($ddk->anggota[3]["pajak_retribusi"]["lainnya"]["keterangan"])): ?>
			<tr>
				<td><?php echo $ddk->anggota[3]["pajak_retribusi"]["lainnya"]["keterangan"] ?></td>
				<td><?php echo $ddk->anggota[3]["pajak_retribusi"]["lainnya"]["jumlah"] ?></td>
			</tr>
			<?php endif ?>

			<tr>
				<td colspan="2">5.4 Lembaga Pemerintahan Yang Diikuti Anggota Keluarga</td>
			</tr>
			<tr>
				<td>Kepala Desa/Lurah</td>
				<td><?php echo $ddk->anggota[3]["pemerintahan"]["kepala_desa"] ?></td>
			</tr>
			<tr>
				<td>Sekretaris Desa/Kelurahan</td>
				<td><?php echo $ddk->anggota[3]["pemerintahan"]["sekretaris_desa"] ?></td>
			</tr>
			<tr>
				<td>Kepala Urusan</td>
				<td><?php echo $ddk->anggota[3]["pemerintahan"]["kepala_urusan"] ?></td>
			</tr>
			<tr>
				<td>Kepala Dusun/Lingkungan</td>
				<td><?php echo $ddk->anggota[3]["pemerintahan"]["kepala_dusun"] ?></td>
			</tr>
			<tr>
				<td>Staf Desa/Kelurahan</td>
				<td><?php echo $ddk->anggota[3]["pemerintahan"]["staf_desa"] ?></td>
			</tr>
			<tr>
				<td>Ketua BPD</td>
				<td><?php echo $ddk->anggota[3]["pemerintahan"]["ketua_bpd"] ?></td>
			</tr>
			<tr>
				<td>Wakil Ketua BPD</td>
				<td><?php echo $ddk->anggota[3]["pemerintahan"]["wakil_ketua_bpd"] ?></td>
			</tr>
			<tr>
				<td>Sekretaris BPD</td>
				<td><?php echo $ddk->anggota[3]["pemerintahan"]["sekretaris_bpd"] ?></td>
			</tr>
			<tr>
				<td>Anggota BPD</td>
				<td><?php echo $ddk->anggota[3]["pemerintahan"]["anggota_bpd"] ?></td>
			</tr>
			<?php if(!empty($ddk->anggota[3]["pemerintahan"]["lainnya"]["keterangan"])): ?>
			<tr>
				<td><?php echo $ddk->anggota[3]["pemerintahan"]["lainnya"]["keterangan"] ?></td>
				<td><?php echo $ddk->anggota[3]["pemerintahan"]["lainnya"]["jumlah"] ?></td>
			</tr>
			<?php endif ?>

			<tr>
				<td colspan="2">5.5 Lembaga Kemasyarakatan Yang Diikuti Anggota Keluarga</td>
			</tr>
			<tr>
				<td>Pengurus RT</td>
				<td><?php echo $ddk->anggota[3]["kemasyarakatan"]["prt"] ?></td>
			</tr>
			<tr>
				<td>Anggota Pengurus RT</td>
				<td><?php echo $ddk->anggota[3]["kemasyarakatan"]["aprt"] ?></td>
			</tr>
			<tr>
				<td>Pengurus RW</td>
				<td><?php echo $ddk->anggota[3]["kemasyarakatan"]["prw"] ?></td>
			</tr>
			<tr>
				<td>Anggota Pengurus RW</td>
				<td><?php echo $ddk->anggota[3]["kemasyarakatan"]["aprw"] ?></td>
			</tr>
			<tr>
				<td>Pengurus LKMD/K/LPM</td>
				<td><?php echo $ddk->anggota[3]["kemasyarakatan"]["plkmdklpm"] ?></td>
			</tr>
			<tr>
				<td>Anggota LKMD/K/LPM</td>
				<td><?php echo $ddk->anggota[3]["kemasyarakatan"]["alkmdklpm"] ?></td>
			</tr>
			<tr>
				<td>Pengurus PKK</td>
				<td><?php echo $ddk->anggota[3]["kemasyarakatan"]["ppkk"] ?></td>
			</tr>
			<tr>
				<td>Anggota PKK</td>
				<td><?php echo $ddk->anggota[3]["kemasyarakatan"]["apkk"] ?></td>
			</tr>
			<tr>
				<td>Pengurus Lembaga Adat</td>
				<td><?php echo $ddk->anggota[3]["kemasyarakatan"]["pla"] ?></td>
			</tr>
			<tr>
				<td>Pengurus Karang Taruna</td>
				<td><?php echo $ddk->anggota[3]["kemasyarakatan"]["pkt"] ?></td>
			</tr>
			<tr>
				<td>Anggota Karang Taruna</td>
				<td><?php echo $ddk->anggota[3]["kemasyarakatan"]["akt"] ?></td>
			</tr>
			<tr>
				<td>Pengurus Hansip/Linmas</td>
				<td><?php echo $ddk->anggota[3]["kemasyarakatan"]["phl"] ?></td>
			</tr>
			<tr>
				<td>Pengurus Poskamling</td>
				<td><?php echo $ddk->anggota[3]["kemasyarakatan"]["pp"] ?></td>
			</tr>
			<tr>
				<td>Pengurus Organisasi Perempuan</td>
				<td><?php echo $ddk->anggota[3]["kemasyarakatan"]["pop"] ?></td>
			</tr>
			<tr>
				<td>Anggota Organisasi Perempuan</td>
				<td><?php echo $ddk->anggota[3]["kemasyarakatan"]["aop"] ?></td>
			</tr>
			<tr>
				<td>Pengurus Organisasi Bapak-bapak</td>
				<td><?php echo $ddk->anggota[3]["kemasyarakatan"]["pob"] ?></td>
			</tr>
			<tr>
				<td>Anggota Organisasi Bapak-bapak</td>
				<td><?php echo $ddk->anggota[3]["kemasyarakatan"]["aob"] ?></td>
			</tr>
			<tr>
				<td>Pengurus Organisasi keagamaan</td>
				<td><?php echo $ddk->anggota[3]["kemasyarakatan"]["pok"] ?></td>
			</tr>
			<tr>
				<td>Anggota Organisasi keagamaan</td>
				<td><?php echo $ddk->anggota[3]["kemasyarakatan"]["aok"] ?></td>
			</tr>
			<tr>
				<td>Pengurus Organisasi profesi wartawan</td>
				<td><?php echo $ddk->anggota[3]["kemasyarakatan"]["popw"] ?></td>
			</tr>
			<tr>
				<td>Anggota Organisasi profesi wartawan</td>
				<td><?php echo $ddk->anggota[3]["kemasyarakatan"]["aopw"] ?></td>
			</tr>
			<tr>
				<td>Pengurus Posyandu</td>
				<td><?php echo $ddk->anggota[3]["kemasyarakatan"]["pposyandu"] ?></td>
			</tr>
			<tr>
				<td>Pengurus Posyantekdes</td>
				<td><?php echo $ddk->anggota[3]["kemasyarakatan"]["pposyantekdes"] ?></td>
			</tr>
			<tr>
				<td>Pengurus Organisasi Kelompok Tani/Nelayan</td>
				<td><?php echo $ddk->anggota[3]["kemasyarakatan"]["poktan"] ?></td>
			</tr>
			<tr>
				<td>Anggota Organisasi Kelompok Tani/Nelayan</td>
				<td><?php echo $ddk->anggota[3]["kemasyarakatan"]["aoktan"] ?></td>
			</tr>
			<tr>
				<td>Pengurus Lembaga Gotong royong</td>
				<td><?php echo $ddk->anggota[3]["kemasyarakatan"]["plgr"] ?></td>
			</tr>
			<tr>
				<td>Anggota Lembaga Gotong royong</td>
				<td><?php echo $ddk->anggota[3]["kemasyarakatan"]["algr"] ?></td>
			</tr>
			<tr>
				<td>Pengurus Organisasi Profesi guru</td>
				<td><?php echo $ddk->anggota[3]["kemasyarakatan"]["popg"] ?></td>
			</tr>
			<tr>
				<td>Anggota Organisasi Profesi guru</td>
				<td><?php echo $ddk->anggota[3]["kemasyarakatan"]["aopg"] ?></td>
			</tr>
			<tr>
				<td>Pengurus Organisasi profesi dokter/tenaga medis</td>
				<td><?php echo $ddk->anggota[3]["kemasyarakatan"]["popdtm"] ?></td>
			</tr>
			<tr>
				<td>Anggota Organisasi profesi/tenaga medis</td>
				<td><?php echo $ddk->anggota[3]["kemasyarakatan"]["aoptm"] ?></td>
			</tr>
			<tr>
				<td>Pengurus organisasi pensiunan</td>
				<td><?php echo $ddk->anggota[3]["kemasyarakatan"]["popensiun"] ?></td>
			</tr>
			<tr>
				<td>Anggota organisasi pensiunan</td>
				<td><?php echo $ddk->anggota[3]["kemasyarakatan"]["aopensiun"] ?></td>
			</tr>
			<tr>
				<td>Pengurus organisasi pemirsa/pendengar</td>
				<td><?php echo $ddk->anggota[3]["kemasyarakatan"]["popp"] ?></td>
			</tr>
			<tr>
				<td>Anggota organisasi pemirsa/pendengar</td>
				<td><?php echo $ddk->anggota[3]["kemasyarakatan"]["aopp"] ?></td>
			</tr>
			<tr>
				<td>Pengurus lembaga pencinta alam</td>
				<td><?php echo $ddk->anggota[3]["kemasyarakatan"]["plpa"] ?></td>
			</tr>
			<tr>
				<td>Anggota organisasi pencinta alam</td>
				<td><?php echo $ddk->anggota[3]["kemasyarakatan"]["alpa"] ?></td>
			</tr>
			<tr>
				<td>Pengurus organisasi pengembangan ilmu pengetahuan</td>
				<td><?php echo $ddk->anggota[3]["kemasyarakatan"]["popip"] ?></td>
			</tr>
			<tr>
				<td>Anggota organisasi pengembangan ilmu pengetaahuan</td>
				<td><?php echo $ddk->anggota[3]["kemasyarakatan"]["aopip"] ?></td>
			</tr>
			<tr>
				<td>Pemilik yayasan</td>
				<td><?php echo $ddk->anggota[3]["kemasyarakatan"]["pemyaya"] ?></td>
			</tr>
			<tr>
				<td>Pengurus yayasan</td>
				<td><?php echo $ddk->anggota[3]["kemasyarakatan"]["penyaya"] ?></td>
			</tr>
			<tr>
				<td>Anggota yayasan</td>
				<td><?php echo $ddk->anggota[3]["kemasyarakatan"]["angyaya"] ?></td>
			</tr>
			<tr>
				<td>Pengurus Satgas Kebersihan</td>
				<td><?php echo $ddk->anggota[3]["kemasyarakatan"]["pkebersihan"] ?></td>
			</tr>
			<tr>
				<td>Anggota Satgas Kebersihan</td>
				<td><?php echo $ddk->anggota[3]["kemasyarakatan"]["akebersihan"] ?></td>
			</tr>
			<tr>
				<td>Pengurus Satgas Kebakaran</td>
				<td><?php echo $ddk->anggota[3]["kemasyarakatan"]["pkebakaran"] ?></td>
			</tr>
			<tr>
				<td>Anggota Satgas Kebakaran</td>
				<td><?php echo $ddk->anggota[3]["kemasyarakatan"]["akebakaran"] ?></td>
			</tr>
			<tr>
				<td>Pengurus Posko Penanggulangan Bencana</td>
				<td><?php echo $ddk->anggota[3]["kemasyarakatan"]["ppb"] ?></td>
			</tr>
			<tr>
				<td>Anggota Tim Penanggulangan Bencana</td>
				<td><?php echo $ddk->anggota[3]["kemasyarakatan"]["atpb"] ?></td>
			</tr>
			<?php if(!empty($ddk->anggota[3]["kemasyarakatan"]["lainnya"]["keterangan"])): ?>
			<tr>
				<td><?php echo $ddk->anggota[3]["kemasyarakatan"]["lainnya"]["keterangan"] ?></td>
				<td><?php echo $ddk->anggota[3]["kemasyarakatan"]["lainnya"]["jumlah"] ?></td>
			</tr>
			<?php endif ?>

			<tr>
				<td colspan="2">5.6 Lembaga Ekonomi Yang Dimiliki Anggota Keluarga</td>
			</tr>
			<tr>
				<td>Koperasi</td>
				<td><?php echo $ddk->anggota[3]["ekonomi"]["koperasi"] ?></td>
			</tr>
			<tr>
				<td>Unit Usaha Simpan Pinjam</td>
				<td><?php echo $ddk->anggota[3]["ekonomi"]["unit_usaha_simpan_pinjam"] ?></td>
			</tr>
			<tr>
				<td>Industri Kerajinan Tangan</td>
				<td><?php echo $ddk->anggota[3]["ekonomi"]["industri_kerajinan_tangan"] ?></td>
			</tr>
			<tr>
				<td>Industri Pakaian</td>
				<td><?php echo $ddk->anggota[3]["ekonomi"]["industri_pakaian"] ?></td>
			</tr>
			<tr>
				<td>Industri Usaha Makanan</td>
				<td><?php echo $ddk->anggota[3]["ekonomi"]["industri_usaha_makanan"] ?></td>
			</tr>
			<tr>
				<td>Industri Alat Rumah Tangga</td>
				<td><?php echo $ddk->anggota[3]["ekonomi"]["industri_alat_rumah_tangga"] ?></td>
			</tr>
			<tr>
				<td>Industri Usaha Bahan Bangunan</td>
				<td><?php echo $ddk->anggota[3]["ekonomi"]["industri_usaha_bahan_bangunan"] ?></td>
			</tr>
			<tr>
				<td>Industri Alat Pertanian</td>
				<td><?php echo $ddk->anggota[3]["ekonomi"]["industri_alat_pertanian"] ?></td>
			</tr>
			<tr>
				<td>Restoran</td>
				<td><?php echo $ddk->anggota[3]["ekonomi"]["restoran"] ?></td>
			</tr>
			<tr>
				<td>Toko/ Swalayan</td>
				<td><?php echo $ddk->anggota[3]["ekonomi"]["toko__swalayan"] ?></td>
			</tr>
			<tr>
				<td>Warung Kelontongan/Kios</td>
				<td><?php echo $ddk->anggota[3]["ekonomi"]["warung_kelontongan_kios"] ?></td>
			</tr>
			<tr>
				<td>Angkutan Darat</td>
				<td><?php echo $ddk->anggota[3]["ekonomi"]["angkutan_darat"] ?></td>
			</tr>
			<tr>
				<td>Angkutan Sungai</td>
				<td><?php echo $ddk->anggota[3]["ekonomi"]["angkutan_sungai"] ?></td>
			</tr>
			<tr>
				<td>Angkutan Laut</td>
				<td><?php echo $ddk->anggota[3]["ekonomi"]["angkutan_laut"] ?></td>
			</tr>
			<tr>
				<td>Angkutan Udara</td>
				<td><?php echo $ddk->anggota[3]["ekonomi"]["angkutan_udara"] ?></td>
			</tr>
			<tr>
				<td>Jasa Ekspedisi/Pengiriman Barang</td>
				<td><?php echo $ddk->anggota[3]["ekonomi"]["jasa_ekspedisi_pengiriman_barang"] ?></td>
			</tr>
			<tr>
				<td>Usaha Pasar Harian</td>
				<td><?php echo $ddk->anggota[3]["ekonomi"]["usaha_pasar_harian"] ?></td>
			</tr>
			<tr>
				<td>Usaha Pasar Mingguan</td>
				<td><?php echo $ddk->anggota[3]["ekonomi"]["usaha_pasar_mingguan"] ?></td>
			</tr>
			<tr>
				<td>Usaha Pasar Ternak</td>
				<td><?php echo $ddk->anggota[3]["ekonomi"]["usaha_pasar_ternak"] ?></td>
			</tr>
			<tr>
				<td>Usaha Pasar Hasil Bumi Dan Tambang</td>
				<td><?php echo $ddk->anggota[3]["ekonomi"]["usaha_pasar_hasil_bumi_dan_tambang"] ?></td>
			</tr>
			<tr>
				<td>Usaha Perdagangan Antar Pulau</td>
				<td><?php echo $ddk->anggota[3]["ekonomi"]["usaha_perdagangan_antar_pulau"] ?></td>
			</tr>
			<tr>
				<td>Pengijon</td>
				<td><?php echo $ddk->anggota[3]["ekonomi"]["pengijon"] ?></td>
			</tr>
			<tr>
				<td>Pedagang Pengumpul/Tengkulak</td>
				<td><?php echo $ddk->anggota[3]["ekonomi"]["pedagang_pengumpul_tengkulak"] ?></td>
			</tr>
			<tr>
				<td>Usaha Peternakan</td>
				<td><?php echo $ddk->anggota[3]["ekonomi"]["usaha_peternakan"] ?></td>
			</tr>
			<tr>
				<td>Usaha Perikanan</td>
				<td><?php echo $ddk->anggota[3]["ekonomi"]["usaha_perikanan"] ?></td>
			</tr>
			<tr>
				<td>Usaha Perkebunan</td>
				<td><?php echo $ddk->anggota[3]["ekonomi"]["usaha_perkebunan"] ?></td>
			</tr>
			<tr>
				<td>Kelompok Simpan Pinjam</td>
				<td><?php echo $ddk->anggota[3]["ekonomi"]["kelompok_simpan_pinjam"] ?></td>
			</tr>
			<tr>
				<td>Usaha Minuman</td>
				<td><?php echo $ddk->anggota[3]["ekonomi"]["usaha_minuman"] ?></td>
			</tr>
			<tr>
				<td>Industri Farmasi</td>
				<td><?php echo $ddk->anggota[3]["ekonomi"]["industri_farmasi"] ?></td>
			</tr>
			<tr>
				<td>Industri Karoseri</td>
				<td><?php echo $ddk->anggota[3]["ekonomi"]["industri_karoseri"] ?></td>
			</tr>
			<tr>
				<td>Penitipan Kendaraan Bermotor</td>
				<td><?php echo $ddk->anggota[3]["ekonomi"]["penitipan_kendaraan_bermotor"] ?></td>
			</tr>
			<tr>
				<td>Industri Perakitan Elektronik</td>
				<td><?php echo $ddk->anggota[3]["ekonomi"]["industri_perakitan_elektronik"] ?></td>
			</tr>
			<tr>
				<td>Pengolahan Kayu</td>
				<td><?php echo $ddk->anggota[3]["ekonomi"]["pengolahan_kayu"] ?></td>
			</tr>
			<tr>
				<td>Bioskop</td>
				<td><?php echo $ddk->anggota[3]["ekonomi"]["bioskop"] ?></td>
			</tr>
			<tr>
				<td>Film Keliling</td>
				<td><?php echo $ddk->anggota[3]["ekonomi"]["film_keliling"] ?></td>
			</tr>
			<tr>
				<td>Sandiwara/Drama</td>
				<td><?php echo $ddk->anggota[3]["ekonomi"]["sandiwara_drama"] ?></td>
			</tr>
			<tr>
				<td>Group Lawak</td>
				<td><?php echo $ddk->anggota[3]["ekonomi"]["group_lawak"] ?></td>
			</tr>
			<tr>
				<td>Jaipongan</td>
				<td><?php echo $ddk->anggota[3]["ekonomi"]["jaipongan"] ?></td>
			</tr>
			<tr>
				<td>Wayang Orang/Golek</td>
				<td><?php echo $ddk->anggota[3]["ekonomi"]["wayang_orang_golek"] ?></td>
			</tr>
			<tr>
				<td>Group Musik/Band</td>
				<td><?php echo $ddk->anggota[3]["ekonomi"]["group_musik_band"] ?></td>
			</tr>
			<tr>
				<td>Group Vokal/Paduan Suara</td>
				<td><?php echo $ddk->anggota[3]["ekonomi"]["group_vokal_paduan_suara"] ?></td>
			</tr>
			<tr>
				<td>Usaha Persewaan Tenaga Listrik</td>
				<td><?php echo $ddk->anggota[3]["ekonomi"]["usaha_persewaan_tenaga_listrik"] ?></td>
			</tr>
			<tr>
				<td>Usaha Pengecer Gas Dan Bahan Bakar Minyak</td>
				<td><?php echo $ddk->anggota[3]["ekonomi"]["usaha_pengecer_gas_dan_bahan_bakar_minyak"] ?></td>
			</tr>
			<tr>
				<td>Usaha Air Minum Dalam Kemasan</td>
				<td><?php echo $ddk->anggota[3]["ekonomi"]["usaha_air_minum_dalam_kemasan"] ?></td>
			</tr>
			<tr>
				<td>Tukang Kayu</td>
				<td><?php echo $ddk->anggota[3]["ekonomi"]["tukang_kayu"] ?></td>
			</tr>
			<tr>
				<td>Tukang Batu</td>
				<td><?php echo $ddk->anggota[3]["ekonomi"]["tukang_batu"] ?></td>
			</tr>
			<tr>
				<td>Tukang Jahit/Bordir</td>
				<td><?php echo $ddk->anggota[3]["ekonomi"]["tukang_jahit_bordir"] ?></td>
			</tr>
			<tr>
				<td>Tukang Cukur</td>
				<td><?php echo $ddk->anggota[3]["ekonomi"]["tukang_cukur"] ?></td>
			</tr>
			<tr>
				<td>Tukang Service Elektronik</td>
				<td><?php echo $ddk->anggota[3]["ekonomi"]["tukang_service_elektronik"] ?></td>
			</tr>
			<tr>
				<td>Tukang Besi</td>
				<td><?php echo $ddk->anggota[3]["ekonomi"]["tukang_besi"] ?></td>
			</tr>
			<tr>
				<td>Tukang Pijat/Urut</td>
				<td><?php echo $ddk->anggota[3]["ekonomi"]["tukang_pijat_urut"] ?></td>
			</tr>
			<tr>
				<td>Tukang Sumur</td>
				<td><?php echo $ddk->anggota[3]["ekonomi"]["tukang_sumur"] ?></td>
			</tr>
			<tr>
				<td>Notaris</td>
				<td><?php echo $ddk->anggota[3]["ekonomi"]["notaris"] ?></td>
			</tr>
			<tr>
				<td>Pengacara/Advokat</td>
				<td><?php echo $ddk->anggota[3]["ekonomi"]["pengacara_advokat"] ?></td>
			</tr>
			<tr>
				<td>Konsultan Manajemen</td>
				<td><?php echo $ddk->anggota[3]["ekonomi"]["konsultan_manajemen"] ?></td>
			</tr>
			<tr>
				<td>Konsultan Teknis</td>
				<td><?php echo $ddk->anggota[3]["ekonomi"]["konsultan_teknis"] ?></td>
			</tr>
			<tr>
				<td>Pejabat Pembuat Akta Tanah</td>
				<td><?php echo $ddk->anggota[3]["ekonomi"]["pejabat_pembuat_akta_tanah"] ?></td>
			</tr>
			<tr>
				<td>Losmen</td>
				<td><?php echo $ddk->anggota[3]["ekonomi"]["losmen"] ?></td>
			</tr>
			<tr>
				<td>Wisma</td>
				<td><?php echo $ddk->anggota[3]["ekonomi"]["wisma"] ?></td>
			</tr>
			<tr>
				<td>Asrama</td>
				<td><?php echo $ddk->anggota[3]["ekonomi"]["asrama"] ?></td>
			</tr>
			<tr>
				<td>Persewaan Kamar</td>
				<td><?php echo $ddk->anggota[3]["ekonomi"]["persewaan_kamar"] ?></td>
			</tr>
			<tr>
				<td>Kontrakan Rumah</td>
				<td><?php echo $ddk->anggota[3]["ekonomi"]["kontrakan_rumah"] ?></td>
			</tr>
			<tr>
				<td>Mess</td>
				<td><?php echo $ddk->anggota[3]["ekonomi"]["mess"] ?></td>
			</tr>
			<tr>
				<td>Hotel</td>
				<td><?php echo $ddk->anggota[3]["ekonomi"]["hotel"] ?></td>
			</tr>
			<tr>
				<td>Home Stay</td>
				<td><?php echo $ddk->anggota[3]["ekonomi"]["home_stay"] ?></td>
			</tr>
			<tr>
				<td>Villa</td>
				<td><?php echo $ddk->anggota[3]["ekonomi"]["villa"] ?></td>
			</tr>
			<tr>
				<td>Town House</td>
				<td><?php echo $ddk->anggota[3]["ekonomi"]["town_house"] ?></td>
			</tr>
			<tr>
				<td>Usaha Asuransi</td>
				<td><?php echo $ddk->anggota[3]["ekonomi"]["usaha_asuransi"] ?></td>
			</tr>
			<tr>
				<td>Lembaga Keuangan Bukan Bank</td>
				<td><?php echo $ddk->anggota[3]["ekonomi"]["lembaga_keuangan_bukan_bank"] ?></td>
			</tr>
			<tr>
				<td>Lembaga Perkreditan Rakyat</td>
				<td><?php echo $ddk->anggota[3]["ekonomi"]["lembaga_perkreditan_rakyat"] ?></td>
			</tr>
			<tr>
				<td>Pegadaian</td>
				<td><?php echo $ddk->anggota[3]["ekonomi"]["pegadaian"] ?></td>
			</tr>
			<tr>
				<td>Bank Perkreditan Rakyat</td>
				<td><?php echo $ddk->anggota[3]["ekonomi"]["bank_perkreditan_rakyat"] ?></td>
			</tr>
			<tr>
				<td>Usaha Penyewaan Alat Pesta</td>
				<td><?php echo $ddk->anggota[3]["ekonomi"]["usaha_penyewaan_alat_pesta"] ?></td>
			</tr>
			<tr>
				<td>Usaha Pengolahan dan Penjualan Hasil Hutan</td>
				<td><?php echo $ddk->anggota[3]["ekonomi"]["usaha_pengolahan_dan_penjualan_hasil_hutan"] ?></td>
			</tr>
			<?php if(!empty($ddk->anggota[3]["ekonomi"]["lainnya"]["keterangan"])): ?>
			<tr>
				<td><?php echo $ddk->anggota[3]["ekonomi"]["lainnya"]["keterangan"] ?></td>
				<td><?php echo $ddk->anggota[3]["ekonomi"]["lainnya"]["jumlah"] ?></td>
			</tr>
			<?php endif ?>

			<tr>
				<td colspan="2">5.7 Produksi bahan galian yang dimiliki anggota keluarga</td>
			</tr>
			<tr>
				<td>Batu kali</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[3]["galian"]["batu_kali"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[3]["galian"]["batu_kali"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[3]["galian"]["batu_kali"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[3]["galian"]["batu_kali"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Batu kapur</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[3]["galian"]["batu_kapur"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[3]["galian"]["batu_kapur"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[3]["galian"]["batu_kapur"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[3]["galian"]["batu_kapur"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Pasir</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[3]["galian"]["pasir"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[3]["galian"]["pasir"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[3]["galian"]["pasir"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[3]["galian"]["pasir"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Emas</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[3]["galian"]["emas"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[3]["galian"]["emas"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[3]["galian"]["emas"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[3]["galian"]["emas"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Kuningan</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[3]["galian"]["kuningan"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[3]["galian"]["kuningan"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[3]["galian"]["kuningan"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[3]["galian"]["kuningan"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Aluminium</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[3]["galian"]["aluminium"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[3]["galian"]["aluminium"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[3]["galian"]["aluminium"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[3]["galian"]["aluminium"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Perunggu</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[3]["galian"]["perunggu"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[3]["galian"]["perunggu"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[3]["galian"]["perunggu"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[3]["galian"]["perunggu"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Belerang</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[3]["galian"]["belerang"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[3]["galian"]["belerang"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[3]["galian"]["belerang"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[3]["galian"]["belerang"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Batu marmer</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[3]["galian"]["batu_marmer"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[3]["galian"]["batu_marmer"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[3]["galian"]["batu_marmer"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[3]["galian"]["batu_marmer"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Batu cadas</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[3]["galian"]["batu_cadas"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[3]["galian"]["batu_cadas"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[3]["galian"]["batu_cadas"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[3]["galian"]["batu_cadas"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Batu apung</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[3]["galian"]["batu_apung"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[3]["galian"]["batu_apung"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[3]["galian"]["batu_apung"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[3]["galian"]["batu_apung"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Pasir kwarsa</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[3]["galian"]["pasir_kwarsa"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[3]["galian"]["pasir_kwarsa"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[3]["galian"]["pasir_kwarsa"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[3]["galian"]["pasir_kwarsa"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Batubara</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[3]["galian"]["batubara"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[3]["galian"]["batubara"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[3]["galian"]["batubara"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[3]["galian"]["batubara"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Batu Granit</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[3]["galian"]["batu_granit"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[3]["galian"]["batu_granit"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[3]["galian"]["batu_granit"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[3]["galian"]["batu_granit"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Batu Gamping</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[3]["galian"]["batu_gamping"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[3]["galian"]["batu_gamping"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[3]["galian"]["batu_gamping"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[3]["galian"]["batu_gamping"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Mangan</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[3]["galian"]["mangan"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[3]["galian"]["mangan"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[3]["galian"]["mangan"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[3]["galian"]["mangan"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Batu Trass</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[3]["galian"]["batu_trass"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[3]["galian"]["batu_trass"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[3]["galian"]["batu_trass"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[3]["galian"]["batu_trass"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Batu Putih</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[3]["galian"]["batu_putih"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[3]["galian"]["batu_putih"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[3]["galian"]["batu_putih"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[3]["galian"]["batu_putih"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Pasir Batu</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[3]["galian"]["pasir_batu"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[3]["galian"]["pasir_batu"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[3]["galian"]["pasir_batu"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[3]["galian"]["pasir_batu"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Pasir Besi</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[3]["galian"]["pasir_besi"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[3]["galian"]["pasir_besi"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[3]["galian"]["pasir_besi"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[3]["galian"]["pasir_besi"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Gips</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[3]["galian"]["gips"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[3]["galian"]["gips"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[3]["galian"]["gips"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[3]["galian"]["gips"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Minyak Bumi</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[3]["galian"]["minyak_bumi"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[3]["galian"]["minyak_bumi"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[3]["galian"]["minyak_bumi"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[3]["galian"]["minyak_bumi"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Gas Alam</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[3]["galian"]["gas_alam"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[3]["galian"]["gas_alam"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[3]["galian"]["gas_alam"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[3]["galian"]["gas_alam"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Perak</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[3]["galian"]["perak"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[3]["galian"]["perak"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[3]["galian"]["perak"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[3]["galian"]["perak"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Timah</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[3]["galian"]["timah"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[3]["galian"]["timah"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[3]["galian"]["timah"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[3]["galian"]["timah"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Tembaga</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[3]["galian"]["tembaga"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[3]["galian"]["tembaga"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[3]["galian"]["tembaga"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[3]["galian"]["tembaga"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Biji Besi</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[3]["galian"]["biji_besi"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[3]["galian"]["biji_besi"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[3]["galian"]["biji_besi"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[3]["galian"]["biji_besi"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Uranium</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[3]["galian"]["uranium"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[3]["galian"]["uranium"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[3]["galian"]["uranium"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[3]["galian"]["uranium"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Bouxit</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[3]["galian"]["bouxit"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[3]["galian"]["bouxit"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[3]["galian"]["bouxit"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[3]["galian"]["bouxit"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Garam</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[3]["galian"]["garam"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[3]["galian"]["garam"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[3]["galian"]["garam"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[3]["galian"]["garam"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Nikel</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[3]["galian"]["nikel"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[3]["galian"]["nikel"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[3]["galian"]["nikel"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[3]["galian"]["nikel"]["pemasaran"] ?>
				</td>
			</tr>
			<?php if(!empty($ddk->anggota[3]["galian"]["lainnya"]["keterangan"])): ?>
			<tr>
				<td><?php echo $ddk->anggota[3]["galian"]["lainnya"]["keterangan"] ?></td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[3]["galian"]["lainnya"]["opsi"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[3]["galian"]["lainnya"]["opsi"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[3]["galian"]["lainnya"]["opsi"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[3]["galian"]["lainnya"]["opsi"]["pemasaran"] ?>
				</td>
			</tr>
			<?php endif ?>

			<tr>
				<td colspan="2">6. Data Anggota Keluarga</td>
			</tr>
			<tr>
				<td colspan="2">6.1 Biodata</td>
			</tr>
			<tr>
				<td>Nomor Urut</td>
				<td><?php echo $ddk->anggota[4]["no_urut"] ?></td>
			</tr>
			<tr>
				<td>Nomor Induk Kependudukan (NIK)</td>
				<td><?php echo $ddk->anggota[4]["nik"] ?></td>
			</tr>
			<tr>
				<td>Nama Lengkap</td>
				<td><?php echo $ddk->anggota[4]["nama"] ?></td>
			</tr>
			<tr>
				<td>Nomor Akte Kelahiran</td>
				<td><?php echo $ddk->anggota[4]["no_akte"] ?></td>
			</tr>
			
			

			

			

			<tr>
				<td colspan="2">6.2 Cacat Menurut Jenis</td>
			</tr>
			<tr>
				<td colspan="2">Cacat Fisik</td>
			</tr>
			<tr>
				<td>Tuna rungu</td>
				<?php echo $ddk->anggota[4]["cacat_fisik"]["tuli"] ?>
			</tr>
			<tr>
				<td>Tuna wicara</td>
				<?php echo $ddk->anggota[4]["cacat_fisik"]["bisu"] ?>
			</tr>
			<tr>
				<td>Tuna netra</td>
				<?php echo $ddk->anggota[4]["cacat_fisik"]["buta"] ?>
			</tr>
			<tr>
				<td>Lumpuh</td>
				<?php echo $ddk->anggota[4]["cacat_fisik"]["lumpuh"] ?>
			</tr>
			<tr>
				<td>Sumbing</td>
				<?php echo $ddk->anggota[4]["cacat_fisik"]["sumbing"] ?>
			</tr>
			<?php if(!empty($ddk->anggota[4]["cacat_fisik"]["lainnya"]["keterangan"])): ?>
			<tr>
				<td><?php echo $ddk->anggota[4]["cacat_fisik"]["lainnya"]["keterangan"] ?></td>
				<?php echo $ddk->anggota[4]["cacat_fisik"]["lainnya"]["jumlah"] ?>
			</tr>
			<?php endif ?>
			<tr>
				<td colspan="2">Cacat Mental</td>
			</tr>
			<tr>
				<td>Idiot</td>
				<?php echo $ddk->anggota[4]["cacat_mental"]["idiot"] ?>
			</tr>
			<tr>
				<td>Gila</td>
				<?php echo $ddk->anggota[4]["cacat_mental"]["gila"] ?>
			</tr>
			<tr>
				<td>Stress</td>
				<?php echo $ddk->anggota[4]["cacat_mental"]["stress"] ?>
			</tr>
			<?php if(!empty($ddk->anggota[4]["cacat_mental"]["lainnya"]["keterangan"])): ?>
			<tr>
				<td><?php echo $ddk->anggota[4]["cacat_mental"]["lainnya"]["keterangan"] ?></td>
				<?php echo $ddk->anggota[4]["cacat_mental"]["lainnya"]["jumlah"] ?>
			</tr>
			<?php endif ?>

			<tr>
				<td colspan="2">6.3. Kedudukan Anggota Keluarga sebagai Wajib Pajak dan Retribusi</td>
			</tr>
			<tr>
				<td>Wajib Pajak Bumi dan Bangunan</td>
				<td><?php echo $ddk->anggota[4]["pajak_retribusi"]["pbb"] ?></td>
			</tr>
			<tr>
				<td>Wajib Pajak Penghasilan Perorangan</td>
				<td><?php echo $ddk->anggota[4]["pajak_retribusi"]["ppp"] ?></td>
			</tr>
			<tr>
				<td>Wajib Pajak Badan/Perusahaan</td>
				<td><?php echo $ddk->anggota[4]["pajak_retribusi"]["pb"] ?></td>
			</tr>
			<tr>
				<td>Wajib Pajak Kendaraan Bermotor</td>
				<td><?php echo $ddk->anggota[4]["pajak_retribusi"]["pkb"] ?></td>
			</tr>
			<tr>
				<td>Wajib Retribusi Kebersihan</td>
				<td><?php echo $ddk->anggota[4]["pajak_retribusi"]["kebersihan"] ?></td>
			</tr>
			<tr>
				<td>Wajib Retribusi Keamanan</td>
				<td><?php echo $ddk->anggota[4]["pajak_retribusi"]["keamanan"] ?></td>
			</tr>
			<tr>
				<td>Wajib iuran</td>
				<td><?php echo $ddk->anggota[4]["pajak_retribusi"]["iuran"] ?></td>
			</tr>
			<tr>
				<td>Wajib pungutan</td>
				<td><?php echo $ddk->anggota[4]["pajak_retribusi"]["pungutan"] ?></td>
			</tr>
			<?php if(!empty($ddk->anggota[4]["pajak_retribusi"]["lainnya"]["keterangan"])): ?>
			<tr>
				<td><?php echo $ddk->anggota[4]["pajak_retribusi"]["lainnya"]["keterangan"] ?></td>
				<td><?php echo $ddk->anggota[4]["pajak_retribusi"]["lainnya"]["jumlah"] ?></td>
			</tr>
			<?php endif ?>

			<tr>
				<td colspan="2">6.4 Lembaga Pemerintahan Yang Diikuti Anggota Keluarga</td>
			</tr>
			<tr>
				<td>Kepala Desa/Lurah</td>
				<td><?php echo $ddk->anggota[4]["pemerintahan"]["kepala_desa"] ?></td>
			</tr>
			<tr>
				<td>Sekretaris Desa/Kelurahan</td>
				<td><?php echo $ddk->anggota[4]["pemerintahan"]["sekretaris_desa"] ?></td>
			</tr>
			<tr>
				<td>Kepala Urusan</td>
				<td><?php echo $ddk->anggota[4]["pemerintahan"]["kepala_urusan"] ?></td>
			</tr>
			<tr>
				<td>Kepala Dusun/Lingkungan</td>
				<td><?php echo $ddk->anggota[4]["pemerintahan"]["kepala_dusun"] ?></td>
			</tr>
			<tr>
				<td>Staf Desa/Kelurahan</td>
				<td><?php echo $ddk->anggota[4]["pemerintahan"]["staf_desa"] ?></td>
			</tr>
			<tr>
				<td>Ketua BPD</td>
				<td><?php echo $ddk->anggota[4]["pemerintahan"]["ketua_bpd"] ?></td>
			</tr>
			<tr>
				<td>Wakil Ketua BPD</td>
				<td><?php echo $ddk->anggota[4]["pemerintahan"]["wakil_ketua_bpd"] ?></td>
			</tr>
			<tr>
				<td>Sekretaris BPD</td>
				<td><?php echo $ddk->anggota[4]["pemerintahan"]["sekretaris_bpd"] ?></td>
			</tr>
			<tr>
				<td>Anggota BPD</td>
				<td><?php echo $ddk->anggota[4]["pemerintahan"]["anggota_bpd"] ?></td>
			</tr>
			<?php if(!empty($ddk->anggota[4]["pemerintahan"]["lainnya"]["keterangan"])): ?>
			<tr>
				<td><?php echo $ddk->anggota[4]["pemerintahan"]["lainnya"]["keterangan"] ?></td>
				<td><?php echo $ddk->anggota[4]["pemerintahan"]["lainnya"]["jumlah"] ?></td>
			</tr>
			<?php endif ?>

			<tr>
				<td colspan="2">6.5 Lembaga Kemasyarakatan Yang Diikuti Anggota Keluarga</td>
			</tr>
			<tr>
				<td>Pengurus RT</td>
				<td><?php echo $ddk->anggota[4]["kemasyarakatan"]["prt"] ?></td>
			</tr>
			<tr>
				<td>Anggota Pengurus RT</td>
				<td><?php echo $ddk->anggota[4]["kemasyarakatan"]["aprt"] ?></td>
			</tr>
			<tr>
				<td>Pengurus RW</td>
				<td><?php echo $ddk->anggota[4]["kemasyarakatan"]["prw"] ?></td>
			</tr>
			<tr>
				<td>Anggota Pengurus RW</td>
				<td><?php echo $ddk->anggota[4]["kemasyarakatan"]["aprw"] ?></td>
			</tr>
			<tr>
				<td>Pengurus LKMD/K/LPM</td>
				<td><?php echo $ddk->anggota[4]["kemasyarakatan"]["plkmdklpm"] ?></td>
			</tr>
			<tr>
				<td>Anggota LKMD/K/LPM</td>
				<td><?php echo $ddk->anggota[4]["kemasyarakatan"]["alkmdklpm"] ?></td>
			</tr>
			<tr>
				<td>Pengurus PKK</td>
				<td><?php echo $ddk->anggota[4]["kemasyarakatan"]["ppkk"] ?></td>
			</tr>
			<tr>
				<td>Anggota PKK</td>
				<td><?php echo $ddk->anggota[4]["kemasyarakatan"]["apkk"] ?></td>
			</tr>
			<tr>
				<td>Pengurus Lembaga Adat</td>
				<td><?php echo $ddk->anggota[4]["kemasyarakatan"]["pla"] ?></td>
			</tr>
			<tr>
				<td>Pengurus Karang Taruna</td>
				<td><?php echo $ddk->anggota[4]["kemasyarakatan"]["pkt"] ?></td>
			</tr>
			<tr>
				<td>Anggota Karang Taruna</td>
				<td><?php echo $ddk->anggota[4]["kemasyarakatan"]["akt"] ?></td>
			</tr>
			<tr>
				<td>Pengurus Hansip/Linmas</td>
				<td><?php echo $ddk->anggota[4]["kemasyarakatan"]["phl"] ?></td>
			</tr>
			<tr>
				<td>Pengurus Poskamling</td>
				<td><?php echo $ddk->anggota[4]["kemasyarakatan"]["pp"] ?></td>
			</tr>
			<tr>
				<td>Pengurus Organisasi Perempuan</td>
				<td><?php echo $ddk->anggota[4]["kemasyarakatan"]["pop"] ?></td>
			</tr>
			<tr>
				<td>Anggota Organisasi Perempuan</td>
				<td><?php echo $ddk->anggota[4]["kemasyarakatan"]["aop"] ?></td>
			</tr>
			<tr>
				<td>Pengurus Organisasi Bapak-bapak</td>
				<td><?php echo $ddk->anggota[4]["kemasyarakatan"]["pob"] ?></td>
			</tr>
			<tr>
				<td>Anggota Organisasi Bapak-bapak</td>
				<td><?php echo $ddk->anggota[4]["kemasyarakatan"]["aob"] ?></td>
			</tr>
			<tr>
				<td>Pengurus Organisasi keagamaan</td>
				<td><?php echo $ddk->anggota[4]["kemasyarakatan"]["pok"] ?></td>
			</tr>
			<tr>
				<td>Anggota Organisasi keagamaan</td>
				<td><?php echo $ddk->anggota[4]["kemasyarakatan"]["aok"] ?></td>
			</tr>
			<tr>
				<td>Pengurus Organisasi profesi wartawan</td>
				<td><?php echo $ddk->anggota[4]["kemasyarakatan"]["popw"] ?></td>
			</tr>
			<tr>
				<td>Anggota Organisasi profesi wartawan</td>
				<td><?php echo $ddk->anggota[4]["kemasyarakatan"]["aopw"] ?></td>
			</tr>
			<tr>
				<td>Pengurus Posyandu</td>
				<td><?php echo $ddk->anggota[4]["kemasyarakatan"]["pposyandu"] ?></td>
			</tr>
			<tr>
				<td>Pengurus Posyantekdes</td>
				<td><?php echo $ddk->anggota[4]["kemasyarakatan"]["pposyantekdes"] ?></td>
			</tr>
			<tr>
				<td>Pengurus Organisasi Kelompok Tani/Nelayan</td>
				<td><?php echo $ddk->anggota[4]["kemasyarakatan"]["poktan"] ?></td>
			</tr>
			<tr>
				<td>Anggota Organisasi Kelompok Tani/Nelayan</td>
				<td><?php echo $ddk->anggota[4]["kemasyarakatan"]["aoktan"] ?></td>
			</tr>
			<tr>
				<td>Pengurus Lembaga Gotong royong</td>
				<td><?php echo $ddk->anggota[4]["kemasyarakatan"]["plgr"] ?></td>
			</tr>
			<tr>
				<td>Anggota Lembaga Gotong royong</td>
				<td><?php echo $ddk->anggota[4]["kemasyarakatan"]["algr"] ?></td>
			</tr>
			<tr>
				<td>Pengurus Organisasi Profesi guru</td>
				<td><?php echo $ddk->anggota[4]["kemasyarakatan"]["popg"] ?></td>
			</tr>
			<tr>
				<td>Anggota Organisasi Profesi guru</td>
				<td><?php echo $ddk->anggota[4]["kemasyarakatan"]["aopg"] ?></td>
			</tr>
			<tr>
				<td>Pengurus Organisasi profesi dokter/tenaga medis</td>
				<td><?php echo $ddk->anggota[4]["kemasyarakatan"]["popdtm"] ?></td>
			</tr>
			<tr>
				<td>Anggota Organisasi profesi/tenaga medis</td>
				<td><?php echo $ddk->anggota[4]["kemasyarakatan"]["aoptm"] ?></td>
			</tr>
			<tr>
				<td>Pengurus organisasi pensiunan</td>
				<td><?php echo $ddk->anggota[4]["kemasyarakatan"]["popensiun"] ?></td>
			</tr>
			<tr>
				<td>Anggota organisasi pensiunan</td>
				<td><?php echo $ddk->anggota[4]["kemasyarakatan"]["aopensiun"] ?></td>
			</tr>
			<tr>
				<td>Pengurus organisasi pemirsa/pendengar</td>
				<td><?php echo $ddk->anggota[4]["kemasyarakatan"]["popp"] ?></td>
			</tr>
			<tr>
				<td>Anggota organisasi pemirsa/pendengar</td>
				<td><?php echo $ddk->anggota[4]["kemasyarakatan"]["aopp"] ?></td>
			</tr>
			<tr>
				<td>Pengurus lembaga pencinta alam</td>
				<td><?php echo $ddk->anggota[4]["kemasyarakatan"]["plpa"] ?></td>
			</tr>
			<tr>
				<td>Anggota organisasi pencinta alam</td>
				<td><?php echo $ddk->anggota[4]["kemasyarakatan"]["alpa"] ?></td>
			</tr>
			<tr>
				<td>Pengurus organisasi pengembangan ilmu pengetahuan</td>
				<td><?php echo $ddk->anggota[4]["kemasyarakatan"]["popip"] ?></td>
			</tr>
			<tr>
				<td>Anggota organisasi pengembangan ilmu pengetaahuan</td>
				<td><?php echo $ddk->anggota[4]["kemasyarakatan"]["aopip"] ?></td>
			</tr>
			<tr>
				<td>Pemilik yayasan</td>
				<td><?php echo $ddk->anggota[4]["kemasyarakatan"]["pemyaya"] ?></td>
			</tr>
			<tr>
				<td>Pengurus yayasan</td>
				<td><?php echo $ddk->anggota[4]["kemasyarakatan"]["penyaya"] ?></td>
			</tr>
			<tr>
				<td>Anggota yayasan</td>
				<td><?php echo $ddk->anggota[4]["kemasyarakatan"]["angyaya"] ?></td>
			</tr>
			<tr>
				<td>Pengurus Satgas Kebersihan</td>
				<td><?php echo $ddk->anggota[4]["kemasyarakatan"]["pkebersihan"] ?></td>
			</tr>
			<tr>
				<td>Anggota Satgas Kebersihan</td>
				<td><?php echo $ddk->anggota[4]["kemasyarakatan"]["akebersihan"] ?></td>
			</tr>
			<tr>
				<td>Pengurus Satgas Kebakaran</td>
				<td><?php echo $ddk->anggota[4]["kemasyarakatan"]["pkebakaran"] ?></td>
			</tr>
			<tr>
				<td>Anggota Satgas Kebakaran</td>
				<td><?php echo $ddk->anggota[4]["kemasyarakatan"]["akebakaran"] ?></td>
			</tr>
			<tr>
				<td>Pengurus Posko Penanggulangan Bencana</td>
				<td><?php echo $ddk->anggota[4]["kemasyarakatan"]["ppb"] ?></td>
			</tr>
			<tr>
				<td>Anggota Tim Penanggulangan Bencana</td>
				<td><?php echo $ddk->anggota[4]["kemasyarakatan"]["atpb"] ?></td>
			</tr>
			<?php if(!empty($ddk->anggota[4]["kemasyarakatan"]["lainnya"]["keterangan"])): ?>
			<tr>
				<td><?php echo $ddk->anggota[4]["kemasyarakatan"]["lainnya"]["keterangan"] ?></td>
				<td><?php echo $ddk->anggota[4]["kemasyarakatan"]["lainnya"]["jumlah"] ?></td>
			</tr>
			<?php endif ?>

			<tr>
				<td colspan="2">6.6 Lembaga Ekonomi Yang Dimiliki Anggota Keluarga</td>
			</tr>
			<tr>
				<td>Koperasi</td>
				<td><?php echo $ddk->anggota[4]["ekonomi"]["koperasi"] ?></td>
			</tr>
			<tr>
				<td>Unit Usaha Simpan Pinjam</td>
				<td><?php echo $ddk->anggota[4]["ekonomi"]["unit_usaha_simpan_pinjam"] ?></td>
			</tr>
			<tr>
				<td>Industri Kerajinan Tangan</td>
				<td><?php echo $ddk->anggota[4]["ekonomi"]["industri_kerajinan_tangan"] ?></td>
			</tr>
			<tr>
				<td>Industri Pakaian</td>
				<td><?php echo $ddk->anggota[4]["ekonomi"]["industri_pakaian"] ?></td>
			</tr>
			<tr>
				<td>Industri Usaha Makanan</td>
				<td><?php echo $ddk->anggota[4]["ekonomi"]["industri_usaha_makanan"] ?></td>
			</tr>
			<tr>
				<td>Industri Alat Rumah Tangga</td>
				<td><?php echo $ddk->anggota[4]["ekonomi"]["industri_alat_rumah_tangga"] ?></td>
			</tr>
			<tr>
				<td>Industri Usaha Bahan Bangunan</td>
				<td><?php echo $ddk->anggota[4]["ekonomi"]["industri_usaha_bahan_bangunan"] ?></td>
			</tr>
			<tr>
				<td>Industri Alat Pertanian</td>
				<td><?php echo $ddk->anggota[4]["ekonomi"]["industri_alat_pertanian"] ?></td>
			</tr>
			<tr>
				<td>Restoran</td>
				<td><?php echo $ddk->anggota[4]["ekonomi"]["restoran"] ?></td>
			</tr>
			<tr>
				<td>Toko/ Swalayan</td>
				<td><?php echo $ddk->anggota[4]["ekonomi"]["toko__swalayan"] ?></td>
			</tr>
			<tr>
				<td>Warung Kelontongan/Kios</td>
				<td><?php echo $ddk->anggota[4]["ekonomi"]["warung_kelontongan_kios"] ?></td>
			</tr>
			<tr>
				<td>Angkutan Darat</td>
				<td><?php echo $ddk->anggota[4]["ekonomi"]["angkutan_darat"] ?></td>
			</tr>
			<tr>
				<td>Angkutan Sungai</td>
				<td><?php echo $ddk->anggota[4]["ekonomi"]["angkutan_sungai"] ?></td>
			</tr>
			<tr>
				<td>Angkutan Laut</td>
				<td><?php echo $ddk->anggota[4]["ekonomi"]["angkutan_laut"] ?></td>
			</tr>
			<tr>
				<td>Angkutan Udara</td>
				<td><?php echo $ddk->anggota[4]["ekonomi"]["angkutan_udara"] ?></td>
			</tr>
			<tr>
				<td>Jasa Ekspedisi/Pengiriman Barang</td>
				<td><?php echo $ddk->anggota[4]["ekonomi"]["jasa_ekspedisi_pengiriman_barang"] ?></td>
			</tr>
			<tr>
				<td>Usaha Pasar Harian</td>
				<td><?php echo $ddk->anggota[4]["ekonomi"]["usaha_pasar_harian"] ?></td>
			</tr>
			<tr>
				<td>Usaha Pasar Mingguan</td>
				<td><?php echo $ddk->anggota[4]["ekonomi"]["usaha_pasar_mingguan"] ?></td>
			</tr>
			<tr>
				<td>Usaha Pasar Ternak</td>
				<td><?php echo $ddk->anggota[4]["ekonomi"]["usaha_pasar_ternak"] ?></td>
			</tr>
			<tr>
				<td>Usaha Pasar Hasil Bumi Dan Tambang</td>
				<td><?php echo $ddk->anggota[4]["ekonomi"]["usaha_pasar_hasil_bumi_dan_tambang"] ?></td>
			</tr>
			<tr>
				<td>Usaha Perdagangan Antar Pulau</td>
				<td><?php echo $ddk->anggota[4]["ekonomi"]["usaha_perdagangan_antar_pulau"] ?></td>
			</tr>
			<tr>
				<td>Pengijon</td>
				<td><?php echo $ddk->anggota[4]["ekonomi"]["pengijon"] ?></td>
			</tr>
			<tr>
				<td>Pedagang Pengumpul/Tengkulak</td>
				<td><?php echo $ddk->anggota[4]["ekonomi"]["pedagang_pengumpul_tengkulak"] ?></td>
			</tr>
			<tr>
				<td>Usaha Peternakan</td>
				<td><?php echo $ddk->anggota[4]["ekonomi"]["usaha_peternakan"] ?></td>
			</tr>
			<tr>
				<td>Usaha Perikanan</td>
				<td><?php echo $ddk->anggota[4]["ekonomi"]["usaha_perikanan"] ?></td>
			</tr>
			<tr>
				<td>Usaha Perkebunan</td>
				<td><?php echo $ddk->anggota[4]["ekonomi"]["usaha_perkebunan"] ?></td>
			</tr>
			<tr>
				<td>Kelompok Simpan Pinjam</td>
				<td><?php echo $ddk->anggota[4]["ekonomi"]["kelompok_simpan_pinjam"] ?></td>
			</tr>
			<tr>
				<td>Usaha Minuman</td>
				<td><?php echo $ddk->anggota[4]["ekonomi"]["usaha_minuman"] ?></td>
			</tr>
			<tr>
				<td>Industri Farmasi</td>
				<td><?php echo $ddk->anggota[4]["ekonomi"]["industri_farmasi"] ?></td>
			</tr>
			<tr>
				<td>Industri Karoseri</td>
				<td><?php echo $ddk->anggota[4]["ekonomi"]["industri_karoseri"] ?></td>
			</tr>
			<tr>
				<td>Penitipan Kendaraan Bermotor</td>
				<td><?php echo $ddk->anggota[4]["ekonomi"]["penitipan_kendaraan_bermotor"] ?></td>
			</tr>
			<tr>
				<td>Industri Perakitan Elektronik</td>
				<td><?php echo $ddk->anggota[4]["ekonomi"]["industri_perakitan_elektronik"] ?></td>
			</tr>
			<tr>
				<td>Pengolahan Kayu</td>
				<td><?php echo $ddk->anggota[4]["ekonomi"]["pengolahan_kayu"] ?></td>
			</tr>
			<tr>
				<td>Bioskop</td>
				<td><?php echo $ddk->anggota[4]["ekonomi"]["bioskop"] ?></td>
			</tr>
			<tr>
				<td>Film Keliling</td>
				<td><?php echo $ddk->anggota[4]["ekonomi"]["film_keliling"] ?></td>
			</tr>
			<tr>
				<td>Sandiwara/Drama</td>
				<td><?php echo $ddk->anggota[4]["ekonomi"]["sandiwara_drama"] ?></td>
			</tr>
			<tr>
				<td>Group Lawak</td>
				<td><?php echo $ddk->anggota[4]["ekonomi"]["group_lawak"] ?></td>
			</tr>
			<tr>
				<td>Jaipongan</td>
				<td><?php echo $ddk->anggota[4]["ekonomi"]["jaipongan"] ?></td>
			</tr>
			<tr>
				<td>Wayang Orang/Golek</td>
				<td><?php echo $ddk->anggota[4]["ekonomi"]["wayang_orang_golek"] ?></td>
			</tr>
			<tr>
				<td>Group Musik/Band</td>
				<td><?php echo $ddk->anggota[4]["ekonomi"]["group_musik_band"] ?></td>
			</tr>
			<tr>
				<td>Group Vokal/Paduan Suara</td>
				<td><?php echo $ddk->anggota[4]["ekonomi"]["group_vokal_paduan_suara"] ?></td>
			</tr>
			<tr>
				<td>Usaha Persewaan Tenaga Listrik</td>
				<td><?php echo $ddk->anggota[4]["ekonomi"]["usaha_persewaan_tenaga_listrik"] ?></td>
			</tr>
			<tr>
				<td>Usaha Pengecer Gas Dan Bahan Bakar Minyak</td>
				<td><?php echo $ddk->anggota[4]["ekonomi"]["usaha_pengecer_gas_dan_bahan_bakar_minyak"] ?></td>
			</tr>
			<tr>
				<td>Usaha Air Minum Dalam Kemasan</td>
				<td><?php echo $ddk->anggota[4]["ekonomi"]["usaha_air_minum_dalam_kemasan"] ?></td>
			</tr>
			<tr>
				<td>Tukang Kayu</td>
				<td><?php echo $ddk->anggota[4]["ekonomi"]["tukang_kayu"] ?></td>
			</tr>
			<tr>
				<td>Tukang Batu</td>
				<td><?php echo $ddk->anggota[4]["ekonomi"]["tukang_batu"] ?></td>
			</tr>
			<tr>
				<td>Tukang Jahit/Bordir</td>
				<td><?php echo $ddk->anggota[4]["ekonomi"]["tukang_jahit_bordir"] ?></td>
			</tr>
			<tr>
				<td>Tukang Cukur</td>
				<td><?php echo $ddk->anggota[4]["ekonomi"]["tukang_cukur"] ?></td>
			</tr>
			<tr>
				<td>Tukang Service Elektronik</td>
				<td><?php echo $ddk->anggota[4]["ekonomi"]["tukang_service_elektronik"] ?></td>
			</tr>
			<tr>
				<td>Tukang Besi</td>
				<td><?php echo $ddk->anggota[4]["ekonomi"]["tukang_besi"] ?></td>
			</tr>
			<tr>
				<td>Tukang Pijat/Urut</td>
				<td><?php echo $ddk->anggota[4]["ekonomi"]["tukang_pijat_urut"] ?></td>
			</tr>
			<tr>
				<td>Tukang Sumur</td>
				<td><?php echo $ddk->anggota[4]["ekonomi"]["tukang_sumur"] ?></td>
			</tr>
			<tr>
				<td>Notaris</td>
				<td><?php echo $ddk->anggota[4]["ekonomi"]["notaris"] ?></td>
			</tr>
			<tr>
				<td>Pengacara/Advokat</td>
				<td><?php echo $ddk->anggota[4]["ekonomi"]["pengacara_advokat"] ?></td>
			</tr>
			<tr>
				<td>Konsultan Manajemen</td>
				<td><?php echo $ddk->anggota[4]["ekonomi"]["konsultan_manajemen"] ?></td>
			</tr>
			<tr>
				<td>Konsultan Teknis</td>
				<td><?php echo $ddk->anggota[4]["ekonomi"]["konsultan_teknis"] ?></td>
			</tr>
			<tr>
				<td>Pejabat Pembuat Akta Tanah</td>
				<td><?php echo $ddk->anggota[4]["ekonomi"]["pejabat_pembuat_akta_tanah"] ?></td>
			</tr>
			<tr>
				<td>Losmen</td>
				<td><?php echo $ddk->anggota[4]["ekonomi"]["losmen"] ?></td>
			</tr>
			<tr>
				<td>Wisma</td>
				<td><?php echo $ddk->anggota[4]["ekonomi"]["wisma"] ?></td>
			</tr>
			<tr>
				<td>Asrama</td>
				<td><?php echo $ddk->anggota[4]["ekonomi"]["asrama"] ?></td>
			</tr>
			<tr>
				<td>Persewaan Kamar</td>
				<td><?php echo $ddk->anggota[4]["ekonomi"]["persewaan_kamar"] ?></td>
			</tr>
			<tr>
				<td>Kontrakan Rumah</td>
				<td><?php echo $ddk->anggota[4]["ekonomi"]["kontrakan_rumah"] ?></td>
			</tr>
			<tr>
				<td>Mess</td>
				<td><?php echo $ddk->anggota[4]["ekonomi"]["mess"] ?></td>
			</tr>
			<tr>
				<td>Hotel</td>
				<td><?php echo $ddk->anggota[4]["ekonomi"]["hotel"] ?></td>
			</tr>
			<tr>
				<td>Home Stay</td>
				<td><?php echo $ddk->anggota[4]["ekonomi"]["home_stay"] ?></td>
			</tr>
			<tr>
				<td>Villa</td>
				<td><?php echo $ddk->anggota[4]["ekonomi"]["villa"] ?></td>
			</tr>
			<tr>
				<td>Town House</td>
				<td><?php echo $ddk->anggota[4]["ekonomi"]["town_house"] ?></td>
			</tr>
			<tr>
				<td>Usaha Asuransi</td>
				<td><?php echo $ddk->anggota[4]["ekonomi"]["usaha_asuransi"] ?></td>
			</tr>
			<tr>
				<td>Lembaga Keuangan Bukan Bank</td>
				<td><?php echo $ddk->anggota[4]["ekonomi"]["lembaga_keuangan_bukan_bank"] ?></td>
			</tr>
			<tr>
				<td>Lembaga Perkreditan Rakyat</td>
				<td><?php echo $ddk->anggota[4]["ekonomi"]["lembaga_perkreditan_rakyat"] ?></td>
			</tr>
			<tr>
				<td>Pegadaian</td>
				<td><?php echo $ddk->anggota[4]["ekonomi"]["pegadaian"] ?></td>
			</tr>
			<tr>
				<td>Bank Perkreditan Rakyat</td>
				<td><?php echo $ddk->anggota[4]["ekonomi"]["bank_perkreditan_rakyat"] ?></td>
			</tr>
			<tr>
				<td>Usaha Penyewaan Alat Pesta</td>
				<td><?php echo $ddk->anggota[4]["ekonomi"]["usaha_penyewaan_alat_pesta"] ?></td>
			</tr>
			<tr>
				<td>Usaha Pengolahan dan Penjualan Hasil Hutan</td>
				<td><?php echo $ddk->anggota[4]["ekonomi"]["usaha_pengolahan_dan_penjualan_hasil_hutan"] ?></td>
			</tr>
			<?php if(!empty($ddk->anggota[4]["ekonomi"]["lainnya"]["keterangan"])): ?>
			<tr>
				<td><?php echo $ddk->anggota[4]["ekonomi"]["lainnya"]["keterangan"] ?></td>
				<td><?php echo $ddk->anggota[4]["ekonomi"]["lainnya"]["jumlah"] ?></td>
			</tr>
			<?php endif ?>

			<tr>
				<td colspan="2">6.7 Produksi bahan galian yang dimiliki anggota keluarga</td>
			</tr>
			<tr>
				<td>Batu kali</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[4]["galian"]["batu_kali"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[4]["galian"]["batu_kali"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[4]["galian"]["batu_kali"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[4]["galian"]["batu_kali"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Batu kapur</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[4]["galian"]["batu_kapur"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[4]["galian"]["batu_kapur"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[4]["galian"]["batu_kapur"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[4]["galian"]["batu_kapur"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Pasir</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[4]["galian"]["pasir"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[4]["galian"]["pasir"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[4]["galian"]["pasir"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[4]["galian"]["pasir"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Emas</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[4]["galian"]["emas"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[4]["galian"]["emas"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[4]["galian"]["emas"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[4]["galian"]["emas"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Kuningan</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[4]["galian"]["kuningan"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[4]["galian"]["kuningan"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[4]["galian"]["kuningan"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[4]["galian"]["kuningan"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Aluminium</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[4]["galian"]["aluminium"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[4]["galian"]["aluminium"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[4]["galian"]["aluminium"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[4]["galian"]["aluminium"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Perunggu</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[4]["galian"]["perunggu"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[4]["galian"]["perunggu"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[4]["galian"]["perunggu"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[4]["galian"]["perunggu"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Belerang</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[4]["galian"]["belerang"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[4]["galian"]["belerang"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[4]["galian"]["belerang"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[4]["galian"]["belerang"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Batu marmer</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[4]["galian"]["batu_marmer"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[4]["galian"]["batu_marmer"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[4]["galian"]["batu_marmer"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[4]["galian"]["batu_marmer"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Batu cadas</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[4]["galian"]["batu_cadas"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[4]["galian"]["batu_cadas"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[4]["galian"]["batu_cadas"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[4]["galian"]["batu_cadas"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Batu apung</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[4]["galian"]["batu_apung"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[4]["galian"]["batu_apung"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[4]["galian"]["batu_apung"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[4]["galian"]["batu_apung"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Pasir kwarsa</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[4]["galian"]["pasir_kwarsa"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[4]["galian"]["pasir_kwarsa"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[4]["galian"]["pasir_kwarsa"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[4]["galian"]["pasir_kwarsa"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Batubara</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[4]["galian"]["batubara"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[4]["galian"]["batubara"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[4]["galian"]["batubara"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[4]["galian"]["batubara"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Batu Granit</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[4]["galian"]["batu_granit"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[4]["galian"]["batu_granit"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[4]["galian"]["batu_granit"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[4]["galian"]["batu_granit"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Batu Gamping</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[4]["galian"]["batu_gamping"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[4]["galian"]["batu_gamping"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[4]["galian"]["batu_gamping"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[4]["galian"]["batu_gamping"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Mangan</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[4]["galian"]["mangan"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[4]["galian"]["mangan"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[4]["galian"]["mangan"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[4]["galian"]["mangan"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Batu Trass</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[4]["galian"]["batu_trass"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[4]["galian"]["batu_trass"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[4]["galian"]["batu_trass"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[4]["galian"]["batu_trass"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Batu Putih</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[4]["galian"]["batu_putih"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[4]["galian"]["batu_putih"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[4]["galian"]["batu_putih"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[4]["galian"]["batu_putih"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Pasir Batu</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[4]["galian"]["pasir_batu"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[4]["galian"]["pasir_batu"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[4]["galian"]["pasir_batu"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[4]["galian"]["pasir_batu"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Pasir Besi</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[4]["galian"]["pasir_besi"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[4]["galian"]["pasir_besi"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[4]["galian"]["pasir_besi"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[4]["galian"]["pasir_besi"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Gips</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[4]["galian"]["gips"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[4]["galian"]["gips"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[4]["galian"]["gips"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[4]["galian"]["gips"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Minyak Bumi</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[4]["galian"]["minyak_bumi"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[4]["galian"]["minyak_bumi"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[4]["galian"]["minyak_bumi"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[4]["galian"]["minyak_bumi"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Gas Alam</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[4]["galian"]["gas_alam"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[4]["galian"]["gas_alam"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[4]["galian"]["gas_alam"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[4]["galian"]["gas_alam"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Perak</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[4]["galian"]["perak"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[4]["galian"]["perak"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[4]["galian"]["perak"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[4]["galian"]["perak"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Timah</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[4]["galian"]["timah"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[4]["galian"]["timah"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[4]["galian"]["timah"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[4]["galian"]["timah"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Tembaga</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[4]["galian"]["tembaga"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[4]["galian"]["tembaga"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[4]["galian"]["tembaga"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[4]["galian"]["tembaga"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Biji Besi</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[4]["galian"]["biji_besi"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[4]["galian"]["biji_besi"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[4]["galian"]["biji_besi"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[4]["galian"]["biji_besi"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Uranium</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[4]["galian"]["uranium"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[4]["galian"]["uranium"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[4]["galian"]["uranium"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[4]["galian"]["uranium"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Bouxit</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[4]["galian"]["bouxit"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[4]["galian"]["bouxit"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[4]["galian"]["bouxit"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[4]["galian"]["bouxit"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>Garam</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[4]["galian"]["garam"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[4]["galian"]["garam"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[4]["galian"]["garam"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[4]["galian"]["garam"]["pemasaran"] ?>
				</td>anggota[1]["status_kawin"]
			</tr>
			<tr>
				<td>Nikel</td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[4]["galian"]["nikel"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[4]["galian"]["nikel"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[4]["galian"]["nikel"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[4]["galian"]["nikel"]["pemasaran"] ?>
				</td>
			</tr>
			<?php if(!empty($ddk->anggota[4]["galian"]["lainnya"]["keterangan"])): ?>
			<tr>
				<td><?php echo $ddk->anggota[4]["galian"]["lainnya"]["keterangan"] ?></td>
				<td>
					Milik Produksi : <?php echo $ddk->anggota[4]["galian"]["lainnya"]["opsi"]["produksi"] ?><br>
					Milik Adat : <?php echo $ddk->anggota[4]["galian"]["lainnya"]["opsi"]["adat"] ?><br>
					Milik Perorangan : <?php echo $ddk->anggota[4]["galian"]["lainnya"]["opsi"]["perorangan"] ?><br>
					Pemasaran Hasil : <?php echo $ddk->anggota[4]["galian"]["lainnya"]["opsi"]["pemasaran"] ?>
				</td>
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