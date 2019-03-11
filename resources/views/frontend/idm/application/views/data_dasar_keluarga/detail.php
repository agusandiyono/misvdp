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
				<td colspan="2"><h4><strong>IDENTITAS DESA</strong></h4</td>
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
				<td>Garis Lintang :<?php echo $ddk->rtrw ?>
				Garis Bujur :<?php echo $ddk->anggota[0]["galian"]["aluminium"]["pemasaran"] ?>
				</td>

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
				<td><?php echo $ddk->detail["keluarga"]["penghasilan"] ?> Tahun</td>
			</tr>
			<tr>
				<td colspan="2">118. Apakah terdapat aparatur pemerintahan Desa sebagai berikut:</td>
			</tr>
			<tr>
				<td>a.Sekretaris Desa</td>
				<td>Laki-Laki: <?php echo $ddk->detail["keluarga"]["penyakit_keluarga"]["lainnya1"]["keterangan"] ?> ||
				Perempuan: <?php echo $ddk->detail["keluarga"]["penyakit_keluarga"]["lainnya1"]["jumlah"] ?></td>
			</tr>
			<tr>
				<td>b. Kepala Urusan tata usaha dan umum</td>
				<td>Laki-Laki: <?php echo $ddk->detail["keluarga"]["penyakit_keluarga"]["lainnya2"]["keterangan"] ?> ||
				Perempuan: <?php echo $ddk->detail["keluarga"]["penyakit_keluarga"]["lainnya2"]["jumlah"] ?></td>
			</tr>
			<tr>
				<td>c. Kepala urusan keuangan</td>
				<td>Laki-Laki: <?php echo $ddk->detail["keluarga"]["penyakit_keluarga"]["lainnya3"]["keterangan"] ?> ||
				Perempuan: <?php echo $ddk->detail["keluarga"]["penyakit_keluarga"]["lainnya3"]["jumlah"] ?></td>
			</tr>
			<tr>
			    <td>d. Kepala urusan perencanaan</td>
				<td>Laki-Laki: <?php echo $ddk->detail["keluarga"]["kerukunan"]["lainnya"]["keterangan"] ?> ||
				Perempuan: <?php echo $ddk->detail["keluarga"]["kerukunan"]["lainnya"]["jumlah"] ?></td>
			</tr>
			<tr>
				<td>e. Kepala seksi pemerintahan</td>
				<td>Laki-Laki: <?php echo $ddk->detail["keluarga"]["perkelahian"]["lainnya1"]["keterangan"] ?>
				Perempuan: <?php echo $ddk->detail["keluarga"]["perkelahian"]["lainnya1"]["jumlah"] ?></td>
			</tr>
			<tr>
				<td>f. Kepala seksi kesejahteraan</td>
				<td>Laki-Laki: <?php echo $ddk->detail["keluarga"]["perkelahian"]["lainnya2"]["keterangan"] ?> ||
				Perempuan: <?php echo $ddk->detail["keluarga"]["perkelahian"]["lainnya2"]["jumlah"] ?></td>
			</tr>
			<tr>
				<td>g. Kepala seksi pelayanan</td>
				<td>Laki-Laki: <?php echo $ddk->detail["keluarga"]["miras_narkoba"]["lainnya"]["keterangan"] ?> ||
				Perempuan: <?php echo $ddk->detail["keluarga"]["miras_narkoba"]["lainnya"]["jumlah"] ?></td>
			</tr>
			<tr>
				<td>h. Staf petugas desa</td>
				<td>Laki-Laki: <?php echo $ddk->detail["keluarga"]["pembunuhan"]["lainnya"]["keterangan"] ?> ||
				Perempuan: <?php echo $ddk->detail["keluarga"]["pembunuhan"]["lainnya"]["jumlah"] ?></td>
			</tr>
			
			<tr>
				<td>i. BPD dan Anggota</td>
				<td>Laki-Laki: <?php echo $ddk->detail["keluarga"]["penculikan"]["lainnya1"]["keterangan"] ?> ||
				Perempuan: <?php echo $ddk->detail["keluarga"]["penculikan"]["lainnya1"]["jumlah"] ?></td>
			</tr>
			
			<tr>
				<td>j. LPM dan Anggota</td>
				<td>Laki-Laki: <?php echo $ddk->detail["keluarga"]["penculikan"]["lainnya2"]["keterangan"] ?> ||
				Perempuan: <?php echo $ddk->detail["keluarga"]["penculikan"]["lainnya2"]["jumlah"] ?></td>
			</tr>
			
			<tr>
				<td>k. TP. PKK Desa</td>
				<td>Laki-Laki: <?php echo $ddk->detail["keluarga"]["seksual"]["lainnya1"]["keterangan"] ?> ||
				Perempuan: <?php echo $ddk->detail["keluarga"]["seksual"]["lainnya1"]["jumlah"] ?></td>
			</tr>
			
			<tr>
				<td>l. Kepala Dusun</td>
				<td>Laki-Laki: <?php echo $ddk->detail["keluarga"]["seksual"]["lainnya2"]["keterangan"] ?> ||
				Perempuan: <?php echo $ddk->detail["keluarga"]["seksual"]["lainnya2"]["jumlah"] ?></td>
			</tr>
			
			<tr>
				<td>m. Ketua RW</td>
				<td>Laki-Laki: <?php echo $ddk->detail["keluarga"]["kekerasan"]["lainnya"]["keterangan"] ?> ||
				Perempuan: <?php echo $ddk->detail["keluarga"]["kekerasan"]["lainnya"]["jumlah"] ?></td>
			</tr>
			
			<tr><td>n. Ketua RT</td>
				<td>Laki-Laki: <?php echo $ddk->detail["keluarga"]["penderita_sakit"]["lainnya1"]["keterangan"] ?> ||
				Perempuan: <?php echo $ddk->detail["keluarga"]["penderita_sakit"]["lainnya1"]["jumlah"] ?></td>
			</tr>
			<tr>
				<td colspan="2"><h4><strong>II. DATA GEOGRAFI, TOPOGRAFI, DAN DEMOGRAFI</strong></h4></td>
			</tr>
			<tr>
				<td colspan="2">DATA GEOGRAFI</td>
			</tr>
			<tr>
				<td colspan="2">Luas Wilayah</td>
			</tr>
			<tr>
				<td>201. Total Luas Wilayah Desa</td>
				<td><?php echo $ddk->detail["keluarga"]["jenis_ternak"]["kambing"] ?> km2</td>
			</tr>
			<tr>
				<td>202. Hutan Desa</td>
				<td><?php echo $ddk->detail["keluarga"]["jenis_ternak"]["domba"] ?> km2</td>
			</tr>
			<tr>
				<td colspan="2">DATA TOPOGRAFI</td>
			</tr>
			<tr>
				<td>203. Jenis Wilayah Desa</td>
				<td><?php echo $ddk->detail["keluarga"]["lahan"]["hutan"] ?></td>
			</tr>
			<tr>
				<td colspan="2">DATA DEMOGRAFII</td>
			</tr>
			<tr>
				<td colspan="2">Penduduk</td>
			</tr>
			<tr>
				<td>204. Jumlah Total Penduduk</td>
				<td><?php echo $ddk->detail["keluarga"]["jenis_ternak"]["angsa"] ?> Jiwa</td>
			</tr>
			<tr>
				<td>205. Jumlah Penduduk Laki-laki</td>
				<td><?php echo $ddk->detail["keluarga"]["jenis_ternak"]["burung_puyuh"] ?> Jiwa</td>
			</tr>
			<tr>
				<td>206. Jumlah Penduduk Perempuan</td>
				<td><?php echo $ddk->detail["keluarga"]["jenis_ternak"]["kelinci"] ?> Jiwa</td>
			</tr>
			<tr>
				<td>207. Jumlah penduduk pendatang</td>
				<td><?php echo $ddk->detail["keluarga"]["jenis_ternak"]["burung_walet"] ?> Jiwa</td>
			</tr>
			<tr>
				<td>208. Jumlah penduduk pergi</td>
				<td><?php echo $ddk->detail["keluarga"]["jenis_ternak"]["anjing"] ?> Jiwa</td>
			</tr>
			<tr>
				<td colspan="2">Kepala Keluarga</td>
			</tr>
			<tr>
				<td>209. Jumlah Total Kepala Keluarga</td>
				<td><?php echo $ddk->detail["keluarga"]["jenis_ternak"]["kucing"] ?> Jiwa</td>
			</tr>
			<tr>
				<td>210. Jumlah Total Kepala Keluarga Perempuan</td>
				<td><?php echo $ddk->detail["keluarga"]["jenis_ternak"]["ular_cobra"] ?> KK</td>
			</tr>
			<tr>
				<td>211. Jumlah Keluarga Miskin</td>
				<td><?php echo $ddk->detail["keluarga"]["jenis_ternak"]["burung_onta"] ?> KK</td>
			</tr>
			<tr>
				<td colspan="2">212. Jumlah Penduduk Berdasarkan Struktur Usia</td>
			</tr>
			<tr>
				<td>a. <1 tahun</td>
				<td><?php echo $ddk->detail["keluarga"]["jenis_ternak"]["ular_pithon"] ?> Jiwa</td>
			</tr>
			<tr>
				<td>b. 1-4 tahun</td>
				<td><?php echo $ddk->detail["keluarga"]["jenis_ternak"]["burung_cendrawasih"] ?> Jiwa</td>
			</tr>
			<tr>
				<td>c. 5-14 tahun</td>
				<td><?php echo $ddk->detail["keluarga"]["jenis_ternak"]["burung_kakatua"] ?> Jiwa</td>
			</tr>
			<tr>
				<td>d. 15-39 tahun</td>
				<td><?php echo $ddk->detail["keluarga"]["jenis_ternak"]["burung_beo"] ?> Jiwa</td>
			</tr>
			<tr>
				<td>e. 40-64 tahun</td>
				<td><?php echo $ddk->detail["keluarga"]["jenis_ternak"]["burung_merak"] ?> Jiwa</td>
			</tr>
			<tr>
				<td>f. 65 tahun ke atas</td>
				<td><?php echo $ddk->detail["keluarga"]["jenis_ternak"]["burung_langka_lainnya"] ?> Jiwa</td>
			</tr>
				<tr>
				<td colspan="2">213. Jumlah penduduk berdasarkan pekerjaan</td>
			</tr>
			<tr>
				<td>a. Petani</td>
				<td>Laki-Laki : <?php echo $ddk->detail["keluarga"]["lembaga_dimiliki"]["tk_preschool_play_group"] ?> ||
				Perempuan : <?php echo $ddk->anggota[0]["galian"]["perunggu"]["produksi"] ?>
					</td>
			</tr>
			<tr>
				<td>b. Nelayan</td>
				<td>Laki-laki : <?php echo $ddk->detail["keluarga"]["lembaga_dimiliki"]["sd_sederajat"] ?> ||
				Perempuan : <?php echo $ddk->anggota[0]["galian"]["perunggu"]["adat"] ?><br>
					
					</td>
			</tr>
			<tr>
				<td>2c. Buruh tani/buruh nelayan</td>
				<td>laki-Laki : <?php echo $ddk->detail["keluarga"]["lembaga_dimiliki"]["smp_sederajat"] ?> || 
				Perempuan : <?php echo $ddk->anggota[0]["galian"]["perunggu"]["perorangan"] ?>
					
					</td>
			</tr>
			<tr>
				<td>d. Buruh pabrik</td>
				<td>Laki-laki : <?php echo $ddk->detail["keluarga"]["lembaga_dimiliki"]["sma_sederajat"] ?> ||
				Perempuan : <?php echo $ddk->anggota[0]["galian"]["perunggu"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>e. PNS</td>
				<td>Laki-Laki : <?php echo $ddk->detail["keluarga"]["lembaga_dimiliki"]["perguruan_tinggi"] ?> ||
				Perempuan : <?php echo $ddk->anggota[0]["galian"]["belerang"]["produksi"] ?>
					
					</td>
			</tr>
			<tr>
				<td>f. Pegawai swasta</td>
				<td>Laki-Laki : <?php echo $ddk->detail["keluarga"]["lembaga_dimiliki"]["pondok_pesantren"] ?> ||
				Perempuan : <?php echo $ddk->anggota[0]["galian"]["belerang"]["adat"] ?><br>
					
					</td>
			</tr>
			<tr>
				<td>g. Wiraswasta / pedagang</td>
				<td>Laki-Laki : <?php echo $ddk->detail["keluarga"]["lembaga_dimiliki"]["taman_pendidikan_alquran"] ?> ||
				Perempuan : <?php echo $ddk->anggota[0]["galian"]["belerang"]["perorangan"] ?>
					
					</td>
			</tr>
			<tr>
				<td>h. Lainnya</td>
				<td>
				<?php echo $ddk->anggota[0]["galian"]["batu_marmer"]["produksi"] ?>  ||
				Laki-Laki : <?php echo $ddk->detail["keluarga"]["lembaga_dimiliki"]["rhaudatul_athfal"] ?> ||
				Perempuan : <?php echo $ddk->anggota[0]["galian"]["belerang"]["pemasaran"] ?>
				</td>
			</tr>
			<tr>
				<td>214. Data warga penyandang kebutuhan khusus</td>
				<td>Laki-Laki : <?php echo $ddk->detail["keluarga"]["lembaga_dimiliki"]["madrasah_ibtidaiyah"] ?> ||
				Perempuan : <?php echo $ddk->anggota[0]["galian"]["batu_marmer"]["adat"] ?> Jiwa</td>
			</tr>
			<tr>
				<td colspan="2"><h4><strong>III. DIMENSI SOSIAL</strong></h4</td>
			</tr>
			<tr>
				<td colspan="2">KESEHATAN</td>
			</tr>
			<tr>
				<td colspan="2">Ketersediaan sarana kesehatan</td>
			</tr>
			<tr>
				<td>301. a. Sarana kesehatan terdekat</td>
				<td>
					<?php echo $ddk->anggota[0]["pendidikan"] == "SD" ? "SD" : ""; ?>
					<?php echo $ddk->anggota[0]["pendidikan"] == "Rumah Sakit Umum" ? "1. Rumah Sakit Umum" : ""; ?>
					<?php echo $ddk->anggota[0]["pendidikan"] == "Rumah Sakit Ibu dan Anak" ? "2. Rumah Sakit Ibu dan Anak" : ""; ?>
					<?php echo $ddk->anggota[0]["pendidikan"] == "Rumah Bersalin" ? "3. Rumah Bersalin" : ""; ?>
					<?php echo $ddk->anggota[0]["pendidikan"] == "Puskesmas" ? "4. Puskesmas" : ""; ?>
					<?php echo $ddk->anggota[0]["pendidikan"] == "Puskesmas pembant" ? "5. Puskesmas pembantu" : ""; ?>
					<?php echo $ddk->anggota[0]["pendidikan"] == "Poskesdes" ? "6. Poskesdes" : ""; ?>
					<?php echo $ddk->anggota[0]["pendidikan"] == "Polindes" ? "7. Polindes" : ""; ?>
					<?php echo $ddk->anggota[0]["pendidikan"] == "Praktik Dokter" ? "8. Praktik Dokter" : ""; ?>
					<?php echo $ddk->anggota[0]["pendidikan"] == "Klinik" ? "9. Klinik" : ""; ?>
				</td>
			</tr>
			
			<tr>
				<td>301. b. Jarak ke sarana kesehatan terdekat</td>
				<td><?php echo $ddk->detail["keluarga"]["lembaga_dimiliki"]["madrasah_tsanawiyah"] ?> meter</td>
			</tr>
			<tr>
				<td>301. c. Waktu tempuh untuk menuju ke sarana kesehatan terdekat</td>
				<td><?php echo $ddk->detail["keluarga"]["lembaga_dimiliki"]["madrasah_aliyah"] ?> Menit</td>
			</tr>
			<tr>
				<td colspan="2">Ketersediaan tenaga kesehatan bidan</td>
			</tr>
			<tr>
				<td>302. a. Ketersediaan tenaga kesehatan bidan desa (BDD)</td>
				<td>
					<?php echo $ddk->anggota[0]["status_kawin"] == "kawin" ? "Ya" : ""; ?>
					<?php echo $ddk->anggota[0]["status_kawin"] == "belum" ? "Tidak" : ""; ?>
				</td>
			</tr>
			<tr>
				<td>302. b. Jumlah bidan desa (BDD) di desa</td>
				<td><?php echo $ddk->detail["keluarga"]["lembaga_dimiliki"]["sekolah_tinggi_agama_islam"] ?> Orang</td>
			</tr>
			<tr>
				<td colspan="2">Ketersediaan tenaga kesehatan dokter</td>
			</tr>
			<tr>
				<td>303. a. Ketersediaan tenaga kesehatan dokter</td>
				<td>
					<?php echo $ddk->anggota[0]["kb"] == "Pil" ? "Ya" : ""; ?>
					<?php echo $ddk->anggota[0]["kb"] == "Spiral" ? "Tidak" : ""; ?>
				</td>
			</tr>
			<tr>
				<td>303. b. Jumlah dokter di desa</td>
				<td><?php echo $ddk->detail["keluarga"]["lembaga_dimiliki"]["universitas_swasta_islam"] ?> Orang</td>
			</tr>
			<tr>
				<td colspan="2">Ketersediaan tenaga kesehatan lainnya</td>
			</tr>
			<tr>
				<td>304. a. Ketersediaan tenaga kesehatan lainnya selain dokter dan bidan di desa</td>
				<td>
					<?php echo $ddk->anggota[0]["agama"] == "islam" ? "Ya" : ""; ?>
					<?php echo $ddk->anggota[0]["agama"] == "protestan" ? "Tidak" : ""; ?>
				</td>
			</tr>
			
			
			<tr>
				<td>304. b. Jumlah tenaga kesehatan lainnya selain dokter dan bidan</td>
				<td><?php echo $ddk->detail["keluarga"]["lembaga_dimiliki"]["seminari_menengah"] ?> Orang</td>
			</tr>
			<tr>
				<td colspan="2">Akses ke Poskesdes/ Polindes dan Posyandu</td>
			</tr>
			<tr>
				<td>305. a. Ketersediaan sarana Poskesdes/ Polindes</td>
				<td>
					<?php echo $ddk->anggota[0]["darah"] == "O" ? "Ya" : ""; ?>
					<?php echo $ddk->anggota[0]["darah"] == "A" ? "Tidak" : ""; ?>
				</td>
			</tr>
			
			<tr>
				<td>305. b. Jarak ke Poskesdes/Polindes terdekat</td>
				<td><?php echo $ddk->detail["keluarga"]["lembaga_dimiliki"]["seminari_tinggi"] ?> meter</td>
			</tr>
			<tr>
				<td>305. c. Waktu tempuh untuk menuju ke Poskesdes/ Polindes terdekat</td>
				<td><?php echo $ddk->detail["keluarga"]["lembaga_dimiliki"]["biara"] ?> Menit</td>
			</tr>
			<tr>
				<td>305. d. Fungsi Poskesdes/ Polindes (BDD)</td>
				<td>
					<?php echo $ddk->anggota[1]["status_kawin"] == "kawin" ? "Ya" : ""; ?>
					<?php echo $ddk->anggota[1]["status_kawin"] == "belum" ? "Tidak" : ""; ?>
				</td>
			</tr>
			<tr>
				<td>305. e.Ketersediaan rumah singgah / rumah tunggu untuk ibu hamil yang akan melahirkan</td>
				<td>
					<?php echo $ddk->anggota[1]["agama"] == "islam" ? "Ya" : ""; ?>
					<?php echo $ddk->anggota[1]["agama"] == "protestan" ? "Tidak" : ""; ?>
				</td>
			</tr>
			
			<tr>
				<td>306. a. Jumlah Posyandu di desa</td>
				<td><?php echo $ddk->detail["keluarga"]["lembaga_dimiliki"]["perguruan_tinggi_swasta_katolik"] ?> Unit</td>
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
					<?php echo $ddk->anggota[1]["darah"] == "O" ? "Ya" : ""; ?>
					<?php echo $ddk->anggota[1]["darah"] == "A" ? "Tidak" : ""; ?>
				</td>
			</tr>
			
			<tr>
				<td>306. e. Sumber pembiayaan kegiatan Posyandu</td>
				<td>
					<?php echo $ddk->anggota[1]["pendidikan"] == "SD" ? "Iuran bulanan masyarakat" : ""; ?>
					<?php echo $ddk->anggota[1]["pendidikan"] == "SMP" ? "APBDes" : ""; ?>
					<?php echo $ddk->anggota[1]["pendidikan"] == "SMA" ? "Iuran bulanan masyarakat dan APBDe" : ""; ?>
					<?php echo $ddk->anggota[1]["pendidikan"] == "Diploma" ? "Lainnya" : ""; ?>
				</td>
			</tr>
			<tr>
				<td colspan="2">Tingkat Kepesertaan BPJS</td>
			</tr>
			<tr>
				<td>307. a. Jumlah warga yang terdaftar menjadi peserta BPJS Kesehatan / Jaminan Kesehatan Nasional</td>
				<td><?php echo $ddk->detail["keluarga"]["lembaga_dimiliki"]["slta_swasta_katolik"] ?> Orang</td>
			</tr>
			<tr>
				<td>307. b. Warga desa memanfaatkan pelayanan BPJS</td>
				<td><?php echo $ddk->anggota[1]["jenis_kelamin"] == "laki" ? "Ya" : "Tidak"; ?></td>
			</tr>
			
			<tr>
				<td>307. c. Jumlah warga yang terdaftar menjadi peserta Jamkesda<</td>
				<td><?php echo $ddk->anggota[1]["kewarganegaraan"] ?> Orang</td>
			</tr>
			<tr>
				<td colspan="2">Derajat Kesehatan dan Gizi Buruk</td>
			</tr>
			<tr>
				<td>308. a. Terdapat kejadian kematian ibu melahirkan di desa</td>
				<td>
					<?php echo $ddk->anggota[1]["hubungan"] == "istri" ? "Ya" : ""; ?>
					<?php echo $ddk->anggota[1]["hubungan"] == "suami" ? "Tidak" : ""; ?>
				</td>
			</tr>
			
			<tr>
				<td>308. b. Jumlah kejadian kematian ibu melahirkan di desa</td>
				<td><?php echo $ddk->detail["keluarga"]["lembaga_dimiliki"]["lembaga_kursus_keterampilan_swasta_katolik"] ?> Kasus</td>
			</tr>
			<tr>
				<td>309. a. Terdapat kejadian kematian balita di Desa</td>
				<td>
					<?php echo $ddk->anggota[2]["status_kawin"] == "kawin" ? "Ya" : ""; ?>
					<?php echo $ddk->anggota[2]["status_kawin"] == "belum" ? "Tidak" : ""; ?>
					
				</td>
			</tr>
			
			<tr>
				<td>309. b. Jumlah kejadian kematian balita di Desa</td>
				<td><?php echo $ddk->detail["keluarga"]["lembaga_dimiliki"]["lembaga_pendidikan_swasta_kristen_protestan"] ?> Kasus</td>
			</tr>
			<tr>
				<td>310. a. Terdapat kejadian kematian bayi di Desa</td>
				<td>
					<?php echo $ddk->anggota[2]["agama"] == "islam" ? "Ya" : ""; ?>
					<?php echo $ddk->anggota[2]["agama"] == "protestan" ? "Tidak" : ""; ?>
				</td>
			</tr>
			
			<tr>
				<td>310. b. Jumlah kejadian kematian bayi di Desa</td>
				<td><?php echo $ddk->anggota[2]["kewarganegaraan"] ?> Kasus</td>
			</tr>
			
			<tr>
				<td>311. a. Terdapat kejadian balita gizi buruk di Desa</td>
				<td>
					<?php echo $ddk->anggota[2]["darah"] == "O" ? "Ya" : ""; ?>
					<?php echo $ddk->anggota[2]["darah"] == "A" ? "Tidak" : ""; ?>
				</td>
			</tr>
				<tr>
				<td>311. b. Jumlah kejadian balita gizi buruk di Desa</td>
				<td><?php echo $ddk->anggota[2]["pekerjaan"] ?> Kasus</td>
			</tr>
			
				<tr>
				<td>312. a. Terdapat kejadian luar biasa di Desa</td>
				<td>
					<?php echo $ddk->anggota[2]["pendidikan"] == "SD" ? "Ya" : ""; ?>
					<?php echo $ddk->anggota[2]["pendidikan"] == "SMP" ? "Tidak" : ""; ?>
				</td>
			</tr>
				<tr>
				<td>312. b. Penyakit yang menyebabkan kejadian luar biasa</td>
				<td><?php echo $ddk->anggota[2]["nama_ortu"] ?></td>
			</tr>
			<tr>
				<td colspan="2">PENDIDIKAN</td>
			</tr>
			<tr>
				<td colspan="2">Akses ke Pendidikan Dasar dan Menengah</td>
			</tr>
			<tr>
				<td>313. a. Jumlah SD /MI di desa</td>
				<td><?php echo $ddk->detail["keluarga"]["lembaga_dimiliki"]["lembaga_pendidikan_swasta_hindu"] ?> Unit</td>
			</tr>
			<tr>
				<td>313. b. Jumlah tenaga pengajar di SD / MI</td>
				<td><?php echo $ddk->detail["keluarga"]["lembaga_dimiliki"]["lembaga_pendidikan_swasta_budha"] ?> Orang</td>
			</tr>
			<tr>
				<td>313. c. Jarak ke SD / MI
terdekat</td>
				<td><?php echo $ddk->detail["keluarga"]["lembaga_dimiliki"]["lembaga_pendidikan_swasta_konghucu"] ?> Meter</td>
			</tr>
			<tr>
				<td>313. d. Waktu tempuh untuk menuju ke SD / MI</td>
				<td><?php echo $ddk->detail["keluarga"]["lembaga_dimiliki"]["kursus_bahasa"] ?> Menit</td>
			</tr>
			<tr>
				<td>314. a. Jumlah SMP / MTs di desa</td>
				<td><?php echo $ddk->detail["keluarga"]["lembaga_dimiliki"]["kursus_menjahit"] ?> Unit</td>
			</tr>
			<tr>
				<td>314. b. Jumlah tenaga pengajar di SMP/MTs</td>
				<td><?php echo $ddk->detail["keluarga"]["lembaga_dimiliki"]["kursus_montir"] ?> Orang</td>
			</tr>
			<tr>
				<td>314. c. Jarak ke SMP / MTs terdekat</td>
				<td><?php echo $ddk->detail["keluarga"]["lembaga_dimiliki"]["kursus_komputer"] ?> Meter</td>
			</tr>
			<tr>
				<td>314. d. Waktu tempuh untuk menuju ke SMP / MTs terdeka</td>
				<td><?php echo $ddk->detail["keluarga"]["lembaga_dimiliki"]["kursus_mengemudi"] ?> Menit</td>
			</tr>
			<tr>
				<td>315. a. Jumlah SMU / MA/ SMK di desa</td>
				<td><?php echo $ddk->anggota[3]["tempat_lahir"] ?> Unit</td>
			</tr>
			
			<tr>
				<td>315. b. Jumlah tenaga pengajar di SMP/MTs</td>
				<td><?php echo $ddk->anggota[3]["tanggal_lahir"] ?> Orang</td>
			</tr>
			<tr>
				<td>315. c. Jarak ke SMU / MA / SMK  terdekat</td>
				<td><?php echo $ddk->anggota[3]["tanggal_pencatatan"] ?> Meter</td>
			</tr>
			<tr>
				<td>315. d. Waktu tempuh untuk menuju ke SMU / MA / SMK terdekat</td>
				<td><?php echo $ddk->anggota[3]["kewarganegaraan"] ?> Menit</td>
			</tr>
			<tr>
				<td colspan="2">Data Tingkat Pendidikan</td>
			</tr>
			<tr>
				<td>316. Tingkat pendidikan sebagian besar penduduk Desa</td>
				<td>
					<?php echo $ddk->anggota[2]["kb"] == "Pil" ? "Tamat Sarjana/ D1/ D3/Sederajat" : ""; ?>
					<?php echo $ddk->anggota[2]["kb"] == "Spiral" ? "Tamat SMA/Sederajat" : ""; ?>
					<?php echo $ddk->anggota[2]["kb"] == "Suntik" ? "Tamat SMP/Sederajat" : ""; ?>
					<?php echo $ddk->anggota[2]["kb"] == "Susuk" ? "Tamat SD/Sederajat" : ""; ?>
				</td>
			</tr>
				
			<tr>
				<td>317. a. Terdapat anak usia SD yang putus atau tidak sekolah di desa</td>
				<td><?php echo $ddk->anggota[2]["jenis_kelamin"] == "laki" ? "Ya" : "Tidak"; ?></td>
			</tr>
			
			<tr>
				<td>317. b. Jumlah anak usia SD yang putus atau tidak sekolah di desa</td>
				<td><?php echo $ddk->anggota[3]["pekerjaan"] ?> Anak</td>
			</tr>
			
			<tr>
				<td>318. a. Terdapat anak usia SMP yang putus atau tidak sekolah di desa</td>
				<td>
					<?php echo $ddk->anggota[2]["hubungan"] == "istri" ? "Ya" : ""; ?>
					<?php echo $ddk->anggota[2]["hubungan"] == "suami" ? "Tidak" : ""; ?>
				</td>
			</tr>
			
			<tr>
				<td>318. b. Jumlah anak usia SMP yang putus atau tidak sekolah</td>
				<td><?php echo $ddk->anggota[3]["nama_ortu"] ?> Anak</td>
			</tr>
			<tr>
				<td colspan="2">Akses ke Pendidikan Non-Formal</td>
			</tr>
			<tr>
				<td>319. a. Ketersediaan Pos PAUD di desa</td>
				<td><?php echo $ddk->anggota[3]["jenis_kelamin"] == "laki" ? "Ya" : "Tidak"; ?></td>
			</tr>
			
			<tr>
				<td>319. b. Jumlah Pos PAUD</td>
				<td><?php echo $ddk->detail["keluarga"]["lembaga_dimiliki"]["kursus_satpam"] ?> Unit</td>
			</tr>
			<tr>
				<td>319. c. Jarak ke Pos PAUD terdekat</td>
				<td><?php echo $ddk->detail["keluarga"]["lembaga_dimiliki"]["kursus_bela_diri"] ?> Meter</td>
			</tr>
			<tr>
				<td>319. d. Jumlah guru PAUD</td>
				<td><?php echo $ddk->detail["keluarga"]["jenis_ternak"]["buaya"] ?> Orang</td>
			</tr>
			<tr>
				<td>320. Ketersediaan Pusat Kegiatan Belajar Masyarakat Kejar Paket A, B, dan C di desa</td>
				<td>
					<?php echo $ddk->anggota[3]["hubungan"] == "istri" ? "Ya" : ""; ?>
					<?php echo $ddk->anggota[3]["hubungan"] == "suami" ? "Tidak" : ""; ?>
				</td>
			</tr>
			<tr>
				<td colspan="2">Akses Pengetahuan</td>
			</tr>
			<tr>
				<td>321. a. Jumlah pusat kursus atau pusat pelatihan keterampilan khusus di desa</td>
				<td><?php echo $ddk->anggota[4]["tempat_lahir"] ?> Unit</td>
			</tr>
			<tr>
				<td>321. b. Jarak tempuh menuju pusat kursus atau pusat pelatihan keterampilan khusus ke terdekat</td>
				<td><?php echo $ddk->anggota[4]["pekerjaan"] ?> Meter</td>
			</tr>
			<tr>
				<td colspan="2">MODAL SOSIAL</td>
			</tr>
			<tr>
				<td>322. a. Ketersediaan fasilitas perpustakaan desa / taman bacaan masyarakat di desa</td>
				<td>
					<?php echo $ddk->anggota[3]["status_kawin"] == "kawin" ? "Ya" : ""; ?>
					<?php echo $ddk->anggota[3]["status_kawin"] == "belum" ? "Tidak" : ""; ?>
				</td>
			</tr>
			
			<tr>
				<td>322. b. Pemanfaatan fasilitas perpustakaan desa / taman bacaan masyarakat</td>
				<td>
					<?php echo $ddk->anggota[3]["agama"] == "islam" ? "Ya" : ""; ?>
					<?php echo $ddk->anggota[3]["agama"] == "protestan" ? "Tidak" : ""; ?>
				</td>
			</tr>
			
			<tr>
				<td>323. a. Kebiasaan gotong royong warga di desa</td>
				<td>
					<?php echo $ddk->anggota[3]["darah"] == "O" ? "Ya" : ""; ?>
					<?php echo $ddk->anggota[3]["darah"] == "A" ? "Tidak" : ""; ?>
				</td>
			</tr>
			<tr>
				<td>323. b. Frekuensi kegiatan gotong royong</td>
				<td><?php echo $ddk->anggota[4]["kewarganegaraan"] ?> Kali/Tahun</td>
			</tr>
			
			<tr>
				<td>324. Ketersediaan ruang publik terbuka bagi warga tanpa perlu membayar</td>
				<td>
					<?php echo $ddk->anggota[3]["pendidikan"] == "SD" ? "Ya" : ""; ?>
					<?php echo $ddk->anggota[3]["pendidikan"] == "SMP" ? "Tidak" : ""; ?>
				</td>
			<tr>
				<td colspan="2">325. Apakah terdapat perkumpulan / organisasi sosial di desa, seperti:</td>
			</tr>
			<tr>
				<td>a. Karang Taruna</td>
				<td>
					<?php echo $ddk->anggota[3]["kb"] == "Pil" ? "Ya" : ""; ?>
					<?php echo $ddk->anggota[3]["kb"] == "Spiral" ? "Tidak" : ""; ?> ||
					<?php echo $ddk->anggota[0]["galian"]["batu_kapur"]["produksi"] ?> Kali/Tahun
				</td>
			</tr>
			<tr>
				<td>b. PKK</td>
				<td><?php echo $ddk->anggota[4]["jenis_kelamin"] == "laki" ? "Ya" : "Tidak"; ?> ||
				<?php echo $ddk->anggota[0]["galian"]["batu_kapur"]["adat"] ?> Kali/Tahun
				</td>
			</tr>
			<tr>
				<td>c. Perkumpulan agama</td>
				<td>
					<?php echo $ddk->anggota[4]["hubungan"] == "istri" ? "Ya" : ""; ?>
					<?php echo $ddk->anggota[4]["hubungan"] == "suami" ? "Tidak" : ""; ?> ||
					<?php echo $ddk->anggota[0]["galian"]["batu_kapur"]["perorangan"] ?> Kali/Tahun
					
				</td>
			</tr>
			<tr>
				<td>d. Panti asuhan</td>
				<td>
					<?php echo $ddk->anggota[4]["status_kawin"] == "kawin" ? "Ya" : ""; ?>
					<?php echo $ddk->anggota[4]["status_kawin"] == "belum" ? "Tidak" : ""; ?> ||
					<?php echo $ddk->anggota[0]["galian"]["batu_kapur"]["pemasaran"] ?> Kali/Tahun

				</td>
			</tr>
			<tr>
				<td>e. Kelompok arisan</td>
				<td>
					<?php echo $ddk->anggota[4]["agama"] == "islam" ? "Ya" : ""; ?>
					<?php echo $ddk->anggota[4]["agama"] == "protestan" ? "Tidak" : ""; ?> ||
					<?php echo $ddk->anggota[0]["galian"]["pasir"]["produksi"] ?> Kali/Tahun
					
				</td>
			</tr>
			<tr>
				<td>f. Kelompok/organisasi/lembaga tani</td>
				<td>
					<?php echo $ddk->anggota[4]["darah"] == "O" ? "Ya" : ""; ?>
					<?php echo $ddk->anggota[4]["darah"] == "A" ? "Tidak" : ""; ?> ||
					<?php echo $ddk->anggota[0]["galian"]["pasir"]["adat"] ?> Kali/Tahun
					
				</td>
			</tr>
			<tr>
				<td>g. Kelompok/organisasi/lembaga nelayan</td>
				<td>
					<?php echo $ddk->anggota[4]["pendidikan"] == "SD" ? "Ya" : ""; ?>
					<?php echo $ddk->anggota[4]["pendidikan"] == "SMP" ? "Tidak" : ""; ?> ||
					<?php echo $ddk->anggota[0]["galian"]["pasir"]["perorangan"] ?> Kali/Tahun
					
				</td>
			</tr>
			<tr>
				<td>h. Kelompok/ organisasi/lembaga usaha ternak</td>
				<td>
					<?php echo $ddk->anggota[4]["kb"] == "Pil" ? "Ya" : ""; ?>
					<?php echo $ddk->anggota[4]["kb"] == "Spiral" ? "Tidak" : ""; ?> ||
					<?php echo $ddk->anggota[0]["galian"]["pasir"]["pemasaran"] ?> Kali/Tahun
				</td>
			</tr>
			<tr>
				<td>i. Kelompok/organisasi/lembaga pengrajin</td>
				<td>
					<?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["balanak"]["produksi"] ?> ||
					<?php echo $ddk->anggota[0]["galian"]["emas"]["produksi"] ?> Kali/Tahun
					
				</td>
			</tr>
			<tr>
				<td>j. Kelompok/ organisasi/lembaga khusus wanita</td>
				<td><?php echo $ddk->detail["keluarga"]["pemanfaatan_air"]["usaha_perikanan"] ?> ||
					<?php echo $ddk->anggota[0]["galian"]["emas"]["adat"] ?> Kali/Tahun
				</td>	
			</tr>
			<tr>
				<td>k. Kelompok/ organisasi/lembaga lainnya</td>
				<td><?php echo $ddk->detail["keluarga"]["pemanfaatan_air"]["air_minum_air_baku"]  ?> ||
				<?php echo $ddk->anggota[0]["galian"]["emas"]["perorangan"] ?> Kali/Tahun
				</td>
			</tr>
			<tr>
				<td>326. a. Warga desa mengikuti musyawarah Desa</td>
				<td><?php echo $ddk->detail["keluarga"]["pemanfaatan_air"]["cuci_dan_mandi"]  ?></td>
			</tr>
			<tr>
				<td>326. b. Frekuensi musyawarah Desa selama setahun terakhir</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_lain"]["perahu"]  ?></td>
			</tr>
			<tr>
				<td>326. c. Kelompok perempuan mengikuti musyawarah desa</td>
				<td><?php echo $ddk->detail["keluarga"]["pemanfaatan_air"]["irigasi"]  ?></td>
			</tr>
			<tr>
				<td>327. a. Jumlah fasilitas / lapangan olah raga di Desa</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_lain"]["kapal_barang"]  ?></td>
			</tr>
			<tr>
				<td>327. b. Terdapat kegiatan</td>
				<td><?php echo $ddk->detail["keluarga"]["pemanfaatan_air"]["buang_air_besar"] ?></td>
			</tr>
			<tr>
				<td>327. c. Jumlah kelompok kegiatan olah raga</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_lain"]["kapal_penumpang"]  ?> Kelompok</td>
			</tr>
			<tr>
				<td>328. Warga desa terdiri dari beberapa suku / etnis</td>
				<td><?php echo $ddk->detail["keluarga"]["pemanfaatan_air"]["pembangkit_listrik"]  ?></td>
			</tr>
			<tr>
				<td>329. Bahasa yang digunakan
untuk komunikasi sehari- hari di desa</td>
				<td><?php echo $ddk->detail["keluarga"]["pemanfaatan_air"]["prasarana_transportasi"]  ?></td>
			</tr>

			<td colspan="2">330. Apakah terdapat warga di Desa yang menganut agama di bawah ini :</td>
			<tr>
				<td >a. Islam</td>
				<td><?php echo $ddk->detail["keluarga"]["pemanfaatan_air"]["sumber_air_panas"]  ?></td>
			</tr>
			<tr>
				<td>b. Kristen</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_tanah"]["tidak"]  ?></td>
			</tr>
			<tr>
				<td>c. Katolik</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_tanah"][1]  ?></td>
			</tr>
			<tr>
				<td>d. Buddha</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_tanah"][2]  ?></td>
			</tr>
			<tr>
				<td>e. Hindu</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_tanah"][3] ?></td>
			</tr>
			<tr>
				<td>f. Konghucu</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_tanah"][4]  ?></td>
			</tr>
			<tr>
				<td>g. Lainnya</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_tanah"][5] ?> ||
				  <?php echo $ddk->anggota[0]["galian"]["emas"]["pemasaran"] ?>
				</td>
			</tr>
			<td colspan="2">331. Apakah terdapat tempat ibadah :</td>
			<tr>
				<td>a. Masjid/ Musholla/ Langgar</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_tanah"][6] ?></td>
			</tr>
			<tr>
				<td>b. Gereja Kristen </td>
				<td><?php echo $ddk->detail["keluarga"]["aset_tanah"][7] ?></td>
			</tr>
			<tr>
				<td>c. Gereja Katolik</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_tanah"][8] ?></td>
			</tr>
			<tr>
				<td>d. Wihara</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_tanah"][9] ?></td>
			</tr>
			<tr>
				<td>e. Pura</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_tanah"][10] ?></td>
			</tr>
			<tr>
				<td>f. Litang/ Kelenteng </td>
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
				<td>333. b. Frekuensi kegiatan seni adat dan budaya diselenggarakan dalam setahun terakhir</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_lain"]["kapal_pesiar"] ?></td>
			</tr>
			<tr>
				<td>333. c. Jumlah kelompok seni adat dan budaya di desa</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_lain"]["helikopter"] ?></td>
			</tr>
			<tr>
			<td colspan="2">334. Apakah mayoritas warga di Desa menghadiri perayaan adat budaya tertentu, seperti :</td>
			</tr>
			<tr>
				<td>a. Kelahiran</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_transportasi"]["cidemo"] ?></td>
			</tr>
			<tr>
				<td>b. Kematian</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_transportasi"]["perahu"] ?></td>
			</tr>
			<tr>
				<td>c. Perkawinan</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_transportasi"]["tongkang"] ?></td>
			</tr>
			<tr>
				<td>d. Lainnya</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_transportasi"]["bus"] ?> ||
				<?php echo $ddk->anggota[0]["galian"]["kuningan"]["produksi"] ?>
				</td>
			</tr>
			<tr>
				<td colspan="2">Keamanan Warga</td>
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
				<td colspan="2">337. b. Jika ada, sebutkan jenis konflik dan jumlah kejadian dalam setahun terakhir. </td>
			</tr>

			<tr>
				<td>b1. Jumlah kejadian Konflik antarkelompok masyarakat</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_lain"]["pesawat_terbang"] ?></td>
			</tr>
			<tr>
				<td>b2. Jumlah kejadian Konflik kelompok masyarakat antardesa</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_lain"]["ternak_besar"] ?></td>
			</tr>
			<tr>
				<td>b3. Jumlah kejadian Konflik antara kelompok masyarakat dengan aparat keamanan</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_lain"]["ternak_kecil"] ?></td>
			</tr>
			<tr>
				<td>b4. Jumlah kejadian Konflik antara kelompok masyarakat dengan aparat pemerintah</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_lain"]["emas_berlian"] ?></td>
			</tr>
			<tr>
				<td>b5. Jumlah kejadian Konflik antarpelajar/mahasiswa/pemuda</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_lain"]["tabungan_bank"] ?></td>
			</tr>
			<tr>
				<td>b6. Jumlah kejadian Konflik antarsuku</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_lain"]["surat_berharga"] ?></td>
			</tr>
			<tr>
				<td>b7. Jumlah kejadian Konflik antaragama</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_lain"]["deposito"] ?></td>
			</tr>
			<tr>
				<td>b8. Jumlah kejadian Konflik lainnya</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_lain"]["tanah"] ?></td>
			</tr>
						<tr>
				<td>338. a. Penyelesaian Konflik secara damai</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_produksi"]["traktor"] ?></td>
			</tr>
			<tr>
				<td colspan="2">338. b. Jika ya, siapa yang berperan menjadi mediator / penengah upaya dalam penyelesaian konflik?</td>
			</tr>
			<tr>
				<td>b1. Peranan aparat keamanan menjadi mediator / penengah dalam penyelesaian Konflik massal</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_produksi"]["pertanian"] ?></td>
			</tr>
			<tr>
				<td>b2. Peranan aparat pemerintah menjadi mediator / penengah dalam penyelesaian Konflik massal</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_produksi"]["kapal"] ?></td>
			</tr>
			<tr>
				<td>b3. Peranan tokoh masyarakat menjadi mediator / penengah dalam penyelesaian Konflik massal</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_produksi"]["perikanan"] ?></td>
			</tr>
			<tr>
				<td>b4. Peranan tokoh agama menjadi mediator / penengah dalam penyelesaian Konflik massal</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_produksi"]["peternakan"] ?></td>
			</tr>
			<tr>
				<td>b5. Peranan tokoh lainnya menjadi mediator / penengah dalam penyelesaian</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_produksi"]["perkebunan"] ?></td>
			</tr>
			<tr>
				<td>b6. Tidak ada yang menjadi mediator / penengah upaya dalam penyelesaian Konflik masal</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_produksi"]["hutan"] ?></td>
			</tr>
			<tr>
				<td>339. Penyelesaian konflik di desa oleh lembaga lokal sesuai adat budaya tertentu di desa</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_produksi"]["pertambangan"] ?></td>
			</tr>
			<tr>
				<td colspan="2">340. a. Apakah terdapat tindak kejahatan sebagai berikut yang terjadi di Desa selama setahun terakhir?</td>
			</tr>
			<tr>
				<td>a1. Pencurian</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_produksi"]["kerajinan"] ?></td>
			</tr>
			<tr>
				<td>a2. Penipuan/ penggelapan</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_produksi"]["gas"] ?></td>
			</tr>
						<tr>
				<td>a3. Penganiayaan/kekerasan</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_perumahan"]["dinding"]["tembok"] ?></td>
			</tr>
			<tr>
				<td>a4. Pembakaran</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_perumahan"]["dinding"]["kayu"] ?></td>
			</tr>
			<tr>
				<td>a5. Perkosaan/Kejahatan terhadap kesusilaan</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_perumahan"]["dinding"]["bambu"] ?></td>
			</tr>
			<tr>
				<td>a6. Penyalahgunaan / peredaran narkoba</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_perumahan"]["dinding"]["tanah_liat"] ?></td>
			</tr>
			<tr>
				<td>a7. Perjudian</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_perumahan"]["dinding"]["pelepah_kelapa"] ?></td>
			</tr>
			<tr>
				<td>a8. Pembunuhan</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_perumahan"]["dinding"]["dedaunan"] ?></td>
			</tr>
			<tr>
				<td>a9. Perdagangan orang</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_perumahan"]["lantai"]["keramik"] ?></td>
			</tr>
			<tr>
				<td>b. Dari berbagai tindak kejahatan yang terjadi di Desa, tindak kejahatan mana yang paling sering terjadi di Desa?</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_lain"]["bangunan"] ?></td>
			</tr>
			<tr>
				<td colspan="2">Kesejahteraan Sosial</td>
			</tr>
			<tr>
				<td>341. a. Jumlah SLB (Sekolah Luar Biasa) di Desa</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_perumahan"]["lantai"]["semen"] ?></td>
			</tr>
			<tr>
				<td>341. b. Jumlah SLB yang terdapat di Desa? </td>
				<td><?php echo $ddk->detail["keluarga"]["aset_lain"]["industri_besar"] ?></td>
			</tr>
			<tr>
				<td>341. c. Berapa jarak tempuh menuju SLB terdekat? </td>
				<td><?php echo $ddk->detail["keluarga"]["aset_lain"]["industri_menengah"] ?></td>
			</tr>
			<tr>
				<td colspan="2">Apakah terdapat penyandang masalah kesejahteraan sosial sebagai berikut : </td>
			</tr>

			<tr>
				<td>a. Anak jalanan</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_perumahan"]["lantai"]["kayu"] ?></td>
			</tr>
			<tr>
				<td>b. Anak terlantar</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_perumahan"]["lantai"]["tanah"] ?></td>
			</tr>
			<tr>
				<td>c. Korban kekerasan</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_perumahan"]["atap"]["genteng"] ?></td>
			</tr>
			<tr>
				<td>d. Lanjut usia terlantar (panti jompo) </td>
				<td><?php echo $ddk->detail["keluarga"]["aset_perumahan"]["atap"]["seng"] ?></td>
			</tr>
			<tr>
				<td>e. Korban penyalahgunaan NAPZA</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_perumahan"]["atap"]["asbes"] ?></td>
			</tr>
			<tr>
				<td>f. Pekerja migran terlantar</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_perumahan"]["atap"]["beton"] ?></td>
			</tr>
			<tr>
				<td>g. Gelandangan / pengemis</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_perumahan"]["atap"]["bambu"] ?></td>
			</tr>
			<tr>
				<td>h. PSK (Pekerja Seks Komersial) /td>
				<td><?php echo $ddk->detail["keluarga"]["aset_perumahan"]["atap"]["kayu"] ?></td>
			</tr>
						<tr>
				<td>343. Jumlah kejadian bunuh diri di desa</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_lain"]["industri_kecil"] ?></td>
			</tr>
			<tr>
				<td colspan="2">PERMUKIMAN</td>
			</tr>
			<tr>
				<td colspan="2">Akses Air Bersh dan Air Minum</td>
			</tr>
			<tr>
				<td colspan="2">Sumber air untuk minum yang digunakan oleh warga di Desa </td>
			</tr>

			<tr>
				<td>a. Air Kemasan</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_perumahan"]["atap"]["daun_lontar"] ?></td>
			</tr>
			<tr>
				<td>b. Air ledeng dengan meteran (PAM/PDAM) )</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_lain"]["elektronik"] ?></td>
			</tr>
			<tr>
				<td>344. c. Air ledeng tanpa meteran</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_perumahan"]["atap"]["daun_ilalang"] ?></td>
			</tr>
			<tr>
				<td>d. Sumur bor / pompa</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_lain"]["motor"] ?></td>
			</tr>
			<tr>
				<td>e. Sumur</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_lain"]["mobil"] ?></td>
			</tr>	
			<tr>
				<td>f. Mata air </td>
				<td><?php echo $ddk->detail["keluarga"]["aset_lain"]["perikanan"] ?></td>
			</tr>
			<tr>
				<td> g. Sungai / danau / kolam minum warga di desa bersumber dari sungai / danau / kolam</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_lain"]["peternakan"] ?></td>
			</tr>
			<tr>
				<td>h. Air hujan </td>
				<td><?php echo $ddk->detail["keluarga"]["aset_lain"]["perkebunan"] ?></td>
			</tr>
			<tr>
				<td>i. Air minum warga di desa bersumber dari lainnya</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_lain"]["pasar_swalayan"] ?></td>
			</tr>
			<tr>
				<td>345. Cara warga Desa memperoleh air minum</td>
				<td>
					<?php echo $ddk->detail["keluarga"]["produksi_perikanan"]["ikan_ekor_kuning"]["produksi"] ?><br>
				</td>
			</tr>
			<tr>
				<td colspan="2">346. Sumber air untuk mandi / cuci yang digunakan oleh warga di Desa </td>
			</tr>
			<tr>
				<td>a. Air ledeng dengan meteran (PAM/PDAM)</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_lain"]["di_pasar_tradisional"] ?></td>
			</tr>
			<tr>
				<td>b. Air ledeng tanpa meteran</td>
				<td><?php echo $ddk->detail["keluarga"]["aset_lain"]["di_pasar_desa"] ?></td>
			</tr>
			<tr>
				<td>c. Sumur bor / pompa </td>
				<td><?php echo $ddk->detail["keluarga"]["aset_lain"]["transportasi"] ?></td>
			</tr>
			<tr>
				<td>d. Sumur </td>
				<td><?php echo $ddk->detail["keluarga"]["aset_lain"]["saham_perusahaan"] ?></td>
			</tr>
			<tr>
				<td>e. Mata air </td>
				<td><?php echo $ddk->detail["keluarga"]["aset_lain"]["pelanggan_telkom"] ?></td>
			</tr>
			<tr>
				<td>346. f. Sungai / danau / kolam </td>
				<td><?php echo $ddk->detail["keluarga"]["aset_lain"]["hp_gsm"] ?></td>
			</tr>
			<tr>
				<td>g. Air hujan </td>
				<td><?php echo $ddk->detail["keluarga"]["aset_lain"]["hp_cdma"] ?></td>
			</tr>
			<tr>
				<td>h. Lainnya </td>
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
				<td colspan="2">Akses Listrik</td>
			</tr>
			<tr>
				<td>351. a. Jumlah keluarga di desa yang menggunakan sumber listrik dari PLN</td>
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
				<td colspan="2">Akses Informasi & Komunikasi</td>
			</tr>
			<tr>
				<td>354. Sinyal telepon seluler / handphone di desa</td>
				<td><?php echo $ddk->detail["keluarga"]["kualitas_ibu_hamil"]["bidan_praktek"] ?></td>
			</tr>
			<tr>
				<td colspan="2">355. Operator / provider telepon seluler apa yang sinyalnya dapat diterima di desa?
</td>
			</tr>

			<tr>
				<td>a. Telkomsel (Simpati, Kartu AS, Kartu Halo)</td>
				<td><?php echo $ddk->detail["keluarga"]["kualitas_ibu_hamil"]["dukun_terlatih"] ?></td>
			</tr>
			<tr>
				<td>b. Indosat (IM3, Matrix, Mentari)</td>
				<td><?php echo $ddk->detail["keluarga"]["kualitas_ibu_hamil"]["tidak_periksa"] ?></td>
			</tr>
			<tr>
				<td>XL </td>
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
				<td colspan="2">361. Apakah Desa memiliki sarana informasi sebagai berikut </td>
			</tr>
			<tr>
				<td>a. Papan informasi</td>
				<td><?php echo $ddk->detail["keluarga"]["kualitas_bayi"]["lahir_normal"] ?></td>
			</tr>
			<tr>
				<td> b. Website</td>
				<td><?php echo $ddk->detail["keluarga"]["kualitas_bayi"]["lahir_cacat"] ?></td>
			</tr>
			<tr>
				<td>361. c. Sarana informasi lainnya</td>
				<td><?php echo $ddk->detail["keluarga"]["kualitas_bayi"]["lahir_mati"] ?></td>
			</tr></tr>
			<tr>
				<td colspan="2"><h4><strong>IV. DIMENSI EKONOMI</strong></h4</td>
			</tr>
			<tr>
				<td colspan="2">Keragaman Produksi Masyarakat Desa</td>
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
				<td colspan="2">Akses ke Pusat Perdagangan</td>
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
				<td colspan="2">Akses Distribusi / Logistik</td>
			</tr>
			<tr>
				<td>413. Terdapat kantor pos / pos pembantu / rumah pos / pos keliling di desa</td>
				<td><?php echo $ddk->detail["keluarga"]["kualitas_persalinan"]["tempat"]["tempat_praktek_dokter"] ?>
				<?php echo $ddk->anggota[0]["galian"]["batu_cadas"]["produksi"] ?> Meter
					</td>
			</tr>
			<tr>
				<td>414. Terdapat pelayanan jasa ekspedisi di desa</td>
				<td><?php echo $ddk->detail["keluarga"]["kualitas_persalinan"]["tempat"]["rumah_dukun"] ?>
				<?php echo $ddk->anggota[0]["galian"]["batu_cadas"]["adat"] ?> Meter
					</td>
			</tr>
			<tr>
				<td colspan="2">Akses Lembaga Keuangan</td>
			</tr>
			<tr>
				<td>415. Terdapat bank umum pemerintah di desa</td>
				<td><?php echo $ddk->detail["keluarga"]["imunisasi"]["dpt3"] ?>
				<?php echo $ddk->anggota[0]["galian"]["batu_cadas"]["perorangan"] ?> Meter
					</td>
			</tr>
			<tr>
				<td>416. Terdapat bank swasta di desa</td>
				<td><?php echo $ddk->detail["keluarga"]["imunisasi"]["campak"] ?>
				<?php echo $ddk->anggota[0]["galian"]["batu_cadas"]["pemasaran"] ?> Meter</td>
			</tr>
			<tr>
				<td>417. Terdapat BPR di desa</td>
				<td><?php echo $ddk->detail["keluarga"]["imunisasi"]["cacar"] ?></td>
			</tr>
			<tr>
				<td colspan="2">418. Apakah terdapat fasilitas kredit yang diterima warga Desa selama setahun terakhir berupa:</td>
			</tr>
			<tr>
				<td>a. KUR (Kredit Usaha Rakyat) </td>
				<td><?php echo $ddk->detail["keluarga"]["imunisasi"]["semua"] ?></td>
			</tr>
			<tr>
				<td>b. KKP-E (Kredit Ketahanan Pangan dan Energi) </td>
				<td><?php echo $ddk->detail["keluarga"]["penderita_sakit"]["muntaber"] ?></td>
			</tr>
			<tr>
				<td>c. KUK (Kredit Usaha Kecil) </td>
				<td><?php echo $ddk->detail["keluarga"]["penderita_sakit"]["demam_berdarah"] ?></td>
			</tr>
			<tr>
				<td>d. Terdapat fasilitas kredit lainnya</td>
				<td><?php echo $ddk->detail["keluarga"]["penderita_sakit"]["kolera"] ?></td>
			</tr>

			<tr>
				<td colspan="2">Ketersediaan Lembaga Ekonomi</td>
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
			<tr>
				<td colspan="2"><h4><strong>V. DIMENSI EKOLOGI</strong></h4</td>
			</tr>
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
				<td><?php echo $ddk->detail["keluarga"]["penyakit_keluarga"]["ginjal"] ?>
				<?php echo $ddk->anggota[0]["galian"]["batu_apung"]["produksi"] ?>
				<?php echo $ddk->anggota[0]["galian"]["batu_apung"]["adat"] ?>
				</td>
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
				<td><?php echo price_format ($ddk->detail["keluarga"]["penyakit_keluarga"]["asma"]) ?></td>
			</tr>
			<tr>
				<td>701. b1. Sarana prasarana untuk penghidupan termasuk ketahanan pangan dan  pemukiman</td>
				<td><?php echo price_format ($ddk->detail["keluarga"]["miras_narkoba"]["miras"]) ?></td>
			</tr>
			<tr>
				<td>701. b2. Sarana prasarana kesehatan masyarak</td>
				<td><?php echo price_format ($ddk->detail["keluarga"]["miras_narkoba"]["narkoba"]) ?></td>
			</tr>
			<tr>
				<td>701. b3. Sarana prasarana pendidikan, sosial, dan kebudayaan</td>
				<td><?php echo price_format ($ddk->detail["keluarga"]["pembunuhan"]["pelaku_keluarga"]) ?></td>
			</tr>
			<tr>
				<td>701. b4. Sarana prasarana produksi dan distribusi</td>
				<td><?php echo price_format ($ddk->detail["keluarga"]["pembunuhan"]["pelaku_luar"]) ?></td>
			</tr>
			<tr>
				<td>701. b5. Sarana prasarana energi terbarukan serta kegiatan pelestarian lingkungan hidup</td>
				<td><?php echo price_format ($ddk->detail["keluarga"]["penculikan"]["pelaku_keluarga"]) ?></td>
			</tr>
			<tr>
				<td>701. b6. Program kegiatan pembangunan Desa lainnya</td>
				<td><?php echo price_format ($ddk->detail["keluarga"]["penculikan"]["pelaku_luar"]) ?></td>
			</tr>
			<tr>
				<td>701. b7. Peningkatan investasi ekonomi Desa melalui pengadaan, pengembangan atau bantuan alat-alat produksi, permodalan, dan peningkatan kapasitas melalui pelatihan dan pemagangan</td>
				<td><?php echo price_format ($ddk->detail["keluarga"]["seksual"]["perkosaan_keluarga"]) ?></td>
			</tr>
			<tr>
				<td>701. b8. Dukungan kegiatan ekonomi</td>
				<td><?php echo price_format ($ddk->detail["keluarga"]["seksual"]["perkosaan_luar"]) ?></td>
			</tr>
			<tr>
				<td>702. b9. Bantuan peningkatan kapasitas untuk program dan kegiatan ketahanan pangan Desa</td>
				<td><?php echo price_format ($ddk->detail["keluarga"]["seksual"]["hln_sah"]) ?></td>
			</tr>
			<tr>
				<td>701. b10. Pengorganisasian masyarakat, fasilitasi, bantuan hukum masyarakat dan pelatihan paralegal di Desa</td>
				<td><?php echo price_format ($ddk->detail["keluarga"]["seksual"]["htn"]) ?></td>
			</tr>
			<tr>
				<td>701. b11. Promosi dan edukasi kesehatan masyarakat serta gerakan hidup bersih dan sehat</td>
				<td><?php echo price_format ($ddk->detail["keluarga"]["seksual"]["hbs"]) ?></td>
			</tr>
			<tr>
				<td>701. b12. Dukungan terhadap kegiatan pengelolaan pantai untuk kepentingan Desa</td>
				<td><?php echo price_format ($ddk->detail["keluarga"]["kekerasan"]["peradot"]) ?></td>
			</tr>
			<tr>
				<td>701. b13. Peningkatan kapasitas kelompok masyarakat untuk energi terbarukan dan pelestarian lingkungan hidup</td>
				<td><?php echo price_format ($ddk->detail["keluarga"]["kekerasan"]["perada"]) ?></td>
			</tr>
			<tr>
				<td>701. b14. Program kegiatan pemberdayaan masyarakat Desa lainnya<</td>
				<td><?php echo price_format ($ddk->detail["keluarga"]["kekerasan"]["peradiot"]) ?></td>
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
				<td><?php echo price_format ($ddk->detail["keluarga"]["kekerasan"]["peradp"]) ?></td>
			</tr>
			<tr>
				<td>703. b. Sumber dana dari Bagian dari hasil pajak daerah dan retribusi daerah Kabupaten/Kota</td>
				<td><?php echo price_format ($ddk->detail["keluarga"]["kekerasan"]["peradakl"]) ?></td>
			</tr>
			<tr>
				<td>703. c. Sumber dana dari Alokasi dana Desa yang merupakan bagian dari dana perimbangan yang diterima Kabupaten/Kota</td>
				<td><?php echo price_format ($ddk->detail["keluarga"]["kekerasan"]["pemadot"]) ?></td>
			</tr>
			<tr>
				<td>703. d. Sumber dana dari bantuan dari APBD Kab/Kota termasuk BOK dan DAK / DAU</td>
				<td><?php echo price_format ($ddk->detail["keluarga"]["kekerasan"]["pemotda"]) ?></td>
			</tr>
			<tr>
				<td>703. e. Sumber dana dari hibah dan sumbangan yang tidak mengikat dari pihak ketiga</td>
				<td><?php echo price_format ($ddk->detail["keluarga"]["kekerasan"]["pemadkl"]) ?></td>
			</tr>
			<tr>
				<td>703. f. Sumber dana dari pendapatan desa lain yang sah</td>
				<td><?php echo price_format ($ddk->detail["keluarga"]["kekerasan"]["pemotot"]) ?></td>
			</tr>
			
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