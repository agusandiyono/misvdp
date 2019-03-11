	<p>
		<button class="btn btn-blue btn-icon icon-left btn-cetak">
			<i class="entypo-print"></i>
			Cetak profil
		</button>
	</p>
	<table class="table table-bordered datatable" id="detail-profil">
		<tbody>
			<tr>
				<td colspan="2"><h3>I. Profil Kelompok Tani</h3></td>
			</tr>
			<tr>
				<td width="25%">Nomor Kelompok Tani</td>
				<td width="75%"><?php echo $profil->no_kelompok ?></td>
			</tr>
			<tr>
				<td>Pewawancara</td>
				<td><?php echo $profil->pewawancara ?></td>
			</tr>
			<tr>
				<td>Tanggal Kegiatan</td>
				<td><?php echo date_reverse($profil->tanggal) ?></td>
			</tr>
			<tr>
				<td>Nomor Urut</td>
				<td><?php echo $profil->no_urut ?></td>
			</tr>
			<tr>
				<td>Nama Kelompok Tani</td>
				<td><?php echo $profil->nama ?></td>
			</tr>
			<tr>
				<td>Provinsi</td>
				<td><?php echo $profil->provinsi_name ?></td>
			</tr>
			<tr>
				<td>Kabupaten</td>
				<td><?php echo $profil->kabupaten_name ?></td>
			</tr>
			<tr>
				<td>Kecamatan</td>
				<td><?php echo $profil->kecamatan_name ?></td>
			</tr>
			<tr>
				<td>Desa</td>
				<td><?php echo $profil->desa_name ?></td>
			</tr>
			<tr>
				<td>Nomor yang bisa dihubungi</td>
				<td><?php echo $profil->no_hp ?></td>
			</tr>
			<tr>
				<td>Bidang Kegiatan yang Diusahakan</td>
				<td>
				<?php
					if($profil->bidang_kegiatan == "pertanian") echo "Pertanian-Tan. Pangan";
					elseif($profil->bidang_kegiatan == "perkebunan") echo "Perkebunan";
					elseif($profil->bidang_kegiatan == "buah") echo "Buah-Buahan";
					elseif($profil->bidang_kegiatan == "peternakan") echo "Peternakan";
					elseif($profil->bidang_kegiatan == "perikanan") echo "Perikanan";
					elseif($profil->bidang_kegiatan == "hasil") echo "Pengolahan Hasil";
				?>
				</td>
			</tr>
			<tr>
				<td>Sejarah Pendirian</td>
				<td><?php echo ucwords($profil->pendirian) ?></td>
			</tr>
			<tr>
				<td>Tanggal Berdiri</td>
				<td><?php echo date_reverse($profil->tgl_berdiri) ?></td>
			</tr>
			<tr>
				<td>Tanggal Operasional</td>
				<td><?php echo date_reverse($profil->tgl_operasional) ?></td>
			</tr>
			<tr>
				<td>Jumlah Anggota Laki-laki</td>
				<td><?php echo $profil->jumlah_lk ?></td>
			</tr>
			<tr>
				<td>Jumlah Anggota Perempuan</td>
				<td><?php echo $profil->jumlah_p ?></td>
			</tr>
			<tr>
				<td>Kondisi Keaktifan Saat Ini</td>
				<td><?php echo $profil->status == "aktif" ? "Aktif" : "Tidak Aktif" ?></td>
			</tr>
			<tr>
				<td colspan="2"><h3>II. Komoditi Kelompok Tani</h3></td>
			</tr>
			<?php if($profil->bidang_kegiatan == "pertanian"): ?>
			<tr>
				<td>Luas Lahan</td>
				<td><?php echo $profil->detail["pertanian"]["komoditi"]["lahan"]; ?></td>
			</tr>
			<tr>
				<td>Status Kepemilikan Lahan</td>
				<td><?php echo $profil->detail["pertanian"]["komoditi"]["status_lahan"] != "lainnya" ? ucwords($profil->detail["pertanian"]["komoditi"]["status_lahan"]) : $profil->detail["pertanian"]["komoditi"]["status_lahan_lain"] ?></td>
			</tr>
			<tr>
				<td>Komoditi Unggulan</td>
				<td><?php echo $profil->detail["pertanian"]["komoditi"]["komoditi_unggulan"] ?></td>
			</tr>
			<tr>
				<td>Hasil Panen Terakhir</td>
				<td>
					Panen 1: <?php echo $profil->detail["pertanian"]["komoditi"]["panen"][1] ?><br>
					Panen 2: <?php echo $profil->detail["pertanian"]["komoditi"]["panen"][2] ?>
				</td>
			</tr>
			<tr>
				<td>Berapa Banyak Digunakan / di Konsumsi Sendiri</td>
				<td><?php echo $profil->detail["pertanian"]["komoditi"]["konsumsi"] ?></td>
			</tr>
			<tr>
				<td>Berapa Banyak yang Dijual</td>
				<td><?php echo $profil->detail["pertanian"]["komoditi"]["terjual"] ?></td>
			</tr>
			<tr>
				<td>Tempat Menjual Hasil</td>
				<td><?php echo $profil->detail["pertanian"]["komoditi"]["pemasaran"] != "lainnya" ? ucwords(str_replace("_", " ", $profil->detail["pertanian"]["komoditi"]["pemasaran"])) : $profil->detail["pertanian"]["komoditi"]["pemasaran_lain"] ?></td>
			</tr>
			<tr>
				<td>Harga Jual /kg</td>
				<td><?php echo $profil->detail["pertanian"]["komoditi"]["harga"] ?></td>
			</tr>
			<?php endif ?>
			<?php if($profil->bidang_kegiatan == "perkebunan"): ?>
			<tr>
				<td>Luas Lahan</td>
				<td><?php echo $profil->detail["perkebunan"]["komoditi"]["lahan"]; ?></td>
			</tr>
			<tr>
				<td>Status Kepemilikan Lahan</td>
				<td><?php echo $profil->detail["perkebunan"]["komoditi"]["status_lahan"] != "lainnya" ? ucwords($profil->detail["perkebunan"]["komoditi"]["status_lahan"]) : $profil->detail["perkebunan"]["komoditi"]["status_lahan_lain"] ?></td>
			</tr>
			<tr>
				<td>Komoditi Unggulan</td>
				<td>
					Musim Tanam 1: <?php echo $profil->detail["perkebunan"]["komoditi"]["komoditi_unggulan"][1] ?><br>
					Musim Tanam 2: <?php echo $profil->detail["perkebunan"]["komoditi"]["komoditi_unggulan"][2] ?>
				</td>
			</tr>
			<tr>
				<td>Hasil Panen Terakhir</td>
				<td>
					Musim Tanam 1: <?php echo $profil->detail["perkebunan"]["komoditi"]["panen"][1] ?><br>
					Musim Tanam 2: <?php echo $profil->detail["perkebunan"]["komoditi"]["panen"][2] ?>
				</td>
			</tr>
			<tr>
				<td>Berapa Banyak Digunakan / di Konsumsi Sendiri</td>
				<td><?php echo $profil->detail["perkebunan"]["komoditi"]["konsumsi"] ?></td>
			</tr>
			<tr>
				<td>Berapa Banyak yang Dijual</td>
				<td><?php echo $profil->detail["perkebunan"]["komoditi"]["terjual"] ?></td>
			</tr>
			<tr>
				<td>Tempat Menjual Hasil</td>
				<td><?php echo $profil->detail["perkebunan"]["komoditi"]["pemasaran"] != "lainnya" ? ucwords(str_replace("_", " ", $profil->detail["perkebunan"]["komoditi"]["pemasaran"])) : $profil->detail["perkebunan"]["komoditi"]["pemasaran_lain"] ?></td>
			</tr>
			<tr>
				<td>Harga Jual /kg</td>
				<td><?php echo $profil->detail["perkebunan"]["komoditi"]["harga"] ?></td>
			</tr>
			<?php endif ?>
			<?php if($profil->bidang_kegiatan == "buah"): ?>
			<tr>
				<td>Luas Lahan</td>
				<td><?php echo $profil->detail["buah"]["komoditi"]["lahan"]; ?></td>
			</tr>
			<tr>
				<td>Status Kepemilikan Lahan</td>
				<td><?php echo $profil->detail["buah"]["komoditi"]["status_lahan"] != "lainnya" ? ucwords($profil->detail["buah"]["komoditi"]["status_lahan"]) : $profil->detail["buah"]["komoditi"]["status_lahan_lain"] ?></td>
			</tr>
			<tr>
				<td>Komoditi Unggulan</td>
				<td>
					Musim Tanam 1: <?php echo $profil->detail["buah"]["komoditi"]["komoditi_unggulan"][1] ?><br>
					Musim Tanam 2: <?php echo $profil->detail["buah"]["komoditi"]["komoditi_unggulan"][2] ?>
				</td>
			</tr>
			<tr>
				<td>Hasil Panen Terakhir</td>
				<td>
					Musim Tanam 1: <?php echo $profil->detail["buah"]["komoditi"]["panen"][1] ?><br>
					Musim Tanam 2: <?php echo $profil->detail["buah"]["komoditi"]["panen"][2] ?>
				</td>
			</tr>
			<tr>
				<td>Berapa Banyak Digunakan / di Konsumsi Sendiri</td>
				<td><?php echo $profil->detail["buah"]["komoditi"]["konsumsi"] ?></td>
			</tr>
			<tr>
				<td>Berapa Banyak yang Dijual</td>
				<td><?php echo $profil->detail["buah"]["komoditi"]["terjual"] ?></td>
			</tr>
			<tr>
				<td>Tempat Menjual Hasil</td>
				<td><?php echo $profil->detail["buah"]["komoditi"]["pemasaran"] != "lainnya" ? ucwords(str_replace("_", " ", $profil->detail["buah"]["komoditi"]["pemasaran"])) : $profil->detail["buah"]["komoditi"]["pemasaran_lain"] ?></td>
			</tr>
			<tr>
				<td>Harga Jual /kg</td>
				<td><?php echo $profil->detail["buah"]["komoditi"]["harga"] ?></td>
			</tr>
			<?php endif ?>
			<?php if($profil->bidang_kegiatan == "peternakan"): ?>
			<tr>
				<td>Jenis Ternak</td>
				<td><?php echo $profil->detail["peternakan"]["komoditi"]["jenis"] ?></td>
			</tr>
			<tr>
				<td>Luas Kandang</td>
				<td><?php echo $profil->detail["peternakan"]["komoditi"]["lahan"] ?></td>
			</tr>
			<tr>
				<td>Jumlah Awal pengadaan (bantuan PNPM)</td>
				<td><?php echo $profil->detail["peternakan"]["komoditi"]["jumlah_awal"] ?></td>
			</tr>
			<tr>
				<td>Jumlah Saat Ini</td>
				<td><?php echo $profil->detail["peternakan"]["komoditi"]["jumlah_sekarang"] ?></td>
			</tr>
			<tr>
				<td>Status Kepemilikan Lahan/Kandang</td>
				<td><?php echo $profil->detail["peternakan"]["komoditi"]["status_lahan"] != "lainnya" ? ucwords($profil->detail["peternakan"]["komoditi"]["status_lahan"]) : $profil->detail["peternakan"]["komoditi"]["status_lahan_lain"] ?></td>
			</tr>
			<tr>
				<td>Berapa Banyak Digunakan / di Konsumsi Sendiri</td>
				<td><?php echo $profil->detail["peternakan"]["komoditi"]["konsumsi"] ?></td>
			</tr>
			<tr>
				<td>Berapa Banyak yang Dijual</td>
				<td><?php echo $profil->detail["peternakan"]["komoditi"]["terjual"] ?></td>
			</tr>
			<tr>
				<td>Tempat Menjual Hasil</td>
				<td><?php echo $profil->detail["peternakan"]["komoditi"]["pemasaran"] != "lainnya" ? ucwords(str_replace("_", " ", $profil->detail["peternakan"]["komoditi"]["pemasaran"])) : $profil->detail["peternakan"]["komoditi"]["pemasaran_lain"] ?></td>
			</tr>
			<tr>
				<td>Harga Jual /kg</td>
				<td><?php echo $profil->detail["peternakan"]["komoditi"]["harga"] ?></td>
			</tr>
			<?php endif ?>
			<?php if($profil->bidang_kegiatan == "perikanan"): ?>
			<tr>
				<td>Luas Kolam</td>
				<td><?php echo $profil->detail["perikanan"]["komoditi"]["lahan"] ?></td>
			</tr>
			<tr>
				<td>Jenis Usaha</td>
				<td><?php echo $profil->detail["perikanan"]["komoditi"]["jenis"] == "perikanan" ? "Perikanan" : "Rumput Laut" ?></td>
			</tr>
			<tr>
				<td>Jumlah Benih/Ekor</td>
				<td><?php echo $profil->detail["perikanan"]["komoditi"]["jumlah_benih"] ?></td>
			</tr>
			<tr>
				<td>Status Kepemilikan Lahan</td>
				<td><?php echo $profil->detail["perikanan"]["komoditi"]["status_lahan"] != "lainnya" ? ucwords($profil->detail["perikanan"]["komoditi"]["status_lahan"]) : $profil->detail["perikanan"]["komoditi"]["status_lahan_lain"] ?></td>
			</tr>
			<tr>
				<td>Berapa Banyak Digunakan / di Konsumsi Sendiri</td>
				<td><?php echo $profil->detail["perikanan"]["komoditi"]["konsumsi"] ?></td>
			</tr>
			<tr>
				<td>Berapa Banyak yang Dijual</td>
				<td><?php echo $profil->detail["perikanan"]["komoditi"]["terjual"] ?></td>
			</tr>
			<tr>
				<td>Tempat Menjual Hasil</td>
				<td><?php echo $profil->detail["perikanan"]["komoditi"]["pemasaran"] != "lainnya" ? ucwords(str_replace("_", " ", $profil->detail["perikanan"]["komoditi"]["pemasaran"])) : $profil->detail["perikanan"]["komoditi"]["pemasaran_lain"] ?></td>
			</tr>
			<tr>
				<td>Harga Jual /kg</td>
				<td><?php echo $profil->detail["perikanan"]["komoditi"]["harga"] ?></td>
			</tr>
			<?php endif ?>
			<?php if($profil->bidang_kegiatan == "hasil"): ?>
			<tr>
				<td>Luas Tempat Usaha</td>
				<td><?php echo $profil->detail["hasil"]["komoditi"]["lahan"] ?></td>
			</tr>
			<tr>
				<td>Status Kepemilikan Lahan</td>
				<td><?php echo $profil->detail["hasil"]["komoditi"]["status_lahan"] != "lainnya" ? ucwords($profil->detail["hasil"]["komoditi"]["status_lahan"]) : $profil->detail["hasil"]["komoditi"]["status_lahan_lain"] ?></td>
			</tr>
			<tr>
				<td>Komoditi Pengolahan Hasil</td>
				<td>
					Olahan 1: <?php echo $profil->detail["hasil"]["komoditi"]["olahan"][1] ?><br>
					Olahan 2: <?php echo $profil->detail["hasil"]["komoditi"]["olahan"][2] ?><br>
					Olahan 3: <?php echo $profil->detail["hasil"]["komoditi"]["olahan"][3] ?><br>
					Olahan 4: <?php echo $profil->detail["hasil"]["komoditi"]["olahan"][4] ?>
				</td>
			</tr>
			<tr>
				<td>Hasil Produksi Sebelum ikut serta dalam PNPM MPd Pertanian</td>
				<td>
					Olahan 1: <?php echo $profil->detail["hasil"]["komoditi"]["olahan_sebelum"][1]['jenis'] ?><br>
					Harga Olahan 1: <?php echo $profil->detail["hasil"]["komoditi"]["olahan_sebelum"][1]['harga'] ?><br>
					Olahan 2: <?php echo $profil->detail["hasil"]["komoditi"]["olahan_sebelum"][2]['jenis'] ?><br>
					Harga Olahan 2: <?php echo $profil->detail["hasil"]["komoditi"]["olahan_sebelum"][2]['harga'] ?><br>
					Olahan 3: <?php echo $profil->detail["hasil"]["komoditi"]["olahan_sebelum"][3]['jenis'] ?><br>
					Harga Olahan 3: <?php echo $profil->detail["hasil"]["komoditi"]["olahan_sebelum"][3]['harga'] ?><br>
					Olahan 4: <?php echo $profil->detail["hasil"]["komoditi"]["olahan_sebelum"][4]['jenis'] ?><br>
					Harga Olahan 4: <?php echo $profil->detail["hasil"]["komoditi"]["olahan_sebelum"][4]['harga'] ?>
				</td>
			</tr>
			<tr>
				<td>Hasil Produksi Setelah ikut serta dalam PNPM MPd Pertanian</td>
				<td>
					Olahan 1: <?php echo $profil->detail["hasil"]["komoditi"]["olahan_setelah"][1]['jenis'] ?><br>
					Harga Olahan 1: <?php echo $profil->detail["hasil"]["komoditi"]["olahan_setelah"][1]['harga'] ?><br>
					Olahan 2: <?php echo $profil->detail["hasil"]["komoditi"]["olahan_setelah"][2]['jenis'] ?><br>
					Harga Olahan 2: <?php echo $profil->detail["hasil"]["komoditi"]["olahan_setelah"][2]['harga'] ?><br>
					Olahan 3: <?php echo $profil->detail["hasil"]["komoditi"]["olahan_setelah"][3]['jenis'] ?><br>
					Harga Olahan 3: <?php echo $profil->detail["hasil"]["komoditi"]["olahan_setelah"][3]['harga'] ?><br>
					Olahan 4: <?php echo $profil->detail["hasil"]["komoditi"]["olahan_setelah"][4]['jenis'] ?><br>
					Harga Olahan 4: <?php echo $profil->detail["hasil"]["komoditi"]["olahan_setelah"][4]['harga'] ?>
				</td>
			</tr>
			<tr>
				<td>Berapa Banyak Digunakan</td>
				<td><?php echo $profil->detail["hasil"]["komoditi"]["konsumsi"] ?></td>
			</tr>
			<tr>
				<td>Berapa Banyak yang Dijual</td>
				<td><?php echo $profil->detail["hasil"]["komoditi"]["terjual"] ?></td>
			</tr>
			<tr>
				<td>Tempat Menjual Hasil</td>
				<td><?php echo $profil->detail["hasil"]["komoditi"]["pemasaran"] != "lainnya" ? ucwords(str_replace("_", " ", $profil->detail["hasil"]["komoditi"]["pemasaran"])) : $profil->detail["hasil"]["komoditi"]["pemasaran_lain"] ?></td>
			</tr>
			<tr>
				<td>Harga Jual /kg</td>
				<td><?php echo $profil->detail["hasil"]["komoditi"]["harga"] ?></td>
			</tr>
			<?php endif ?>
			<tr>
				<td colspan="2"><h3>III. Sarana yang Dimiliki</h3></td>
			</tr>
			<?php if($profil->bidang_kegiatan == "pertanian"): ?>
			<tr>
				<td>Tempat Pertemuan</td>
				<td>
				<?php
					if($profil->detail["pertanian"]["sarana"]["pertemuan"] == "saung") echo "Saung kelompok";
					elseif($profil->detail["pertanian"]["sarana"]["pertemuan"] == "balai") echo "Balai kampung/desa";
					elseif($profil->detail["pertanian"]["sarana"]["pertemuan"] == "rumah_pengurus") echo "Rumah pengurus";
					elseif($profil->detail["pertanian"]["sarana"]["pertemuan"] == "rumah_anggota") echo "Rumah anggota";
					elseif($profil->detail["pertanian"]["sarana"]["pertemuan"] == "lainnya") echo $profil->detail["pertanian"]["sarana"]["pertemuan_lainnya"];
				?>
				</td>
			</tr>
			<tr>
				<td>Peralatan Yang Diperoleh Untuk Pelaksanaan Produksi</td>
				<td>
				<?php
					if(!isset($profil->detail['pertanian']['sarana']['peralatan']) || !is_array($profil->detail['pertanian']['sarana']['peralatan'])) $profil->detail['pertanian']['sarana']['peralatan'] = array();
					echo implode("<br>", $profil->detail['pertanian']['sarana']['peralatan']);
				?>
				</td>
			</tr>
			<tr>
				<td>Pengangkutan Hasil Dari Lahan Ke Rumah</td>
				<td>
				<?php
					if($profil->detail["pertanian"]["sarana"]["transportasi"] == "gerobak_kelompok") echo "Gerobak kelompok";
					elseif($profil->detail["pertanian"]["sarana"]["transportasi"] == "gerobak_pribadi") echo "Gerobak pribadi ";
					elseif($profil->detail["pertanian"]["sarana"]["transportasi"] == "beko_kelompok") echo "Beko (roda tiga) kelompok";
					elseif($profil->detail["pertanian"]["sarana"]["transportasi"] == "beko_pribadi") echo "Beko pribadi";
					elseif($profil->detail["pertanian"]["sarana"]["transportasi"] == "motor_kelompok") echo "Motor kelompok";
					elseif($profil->detail["pertanian"]["sarana"]["transportasi"] == "motor_pribadi") echo "Motor pribadi ";
					elseif($profil->detail["pertanian"]["sarana"]["transportasi"] == "lainnya") echo $profil->detail["pertanian"]["sarana"]["transportasi_lainnya"];
				?>
				</td>
			</tr>
			<tr>
				<td>Penyimpanan Alat dan Hasil Produksi</td>
				<td>
				<?php
					if($profil->detail["pertanian"]["sarana"]["gudang"] == "gudang_kelompok") echo "Gudang kelompok";
					elseif($profil->detail["pertanian"]["sarana"]["gudang"] == "gudang_pengurus") echo "Gudang pribadi pengurus kelompok";
					elseif($profil->detail["pertanian"]["sarana"]["gudang"] == "gudang_anggota") echo "Gudang pribadi salah satu anggota";
					elseif($profil->detail["pertanian"]["sarana"]["gudang"] == "gudang_desa") echo "Gudang kampung/desa";
					elseif($profil->detail["pertanian"]["sarana"]["gudang"] == "gudang_mitra") echo "Gudang mitra kerja";
				?>
				</td>
			</tr>
			<?php endif ?>
			<?php if($profil->bidang_kegiatan == "perkebunan"): ?>
			<tr>
				<td>Tempat Pertemuan</td>
				<td>
				<?php
					if($profil->detail["perkebunan"]["sarana"]["pertemuan"] == "saung") echo "Saung kelompok";
					elseif($profil->detail["perkebunan"]["sarana"]["pertemuan"] == "balai") echo "Balai kampung/desa";
					elseif($profil->detail["perkebunan"]["sarana"]["pertemuan"] == "rumah_pengurus") echo "Rumah pengurus";
					elseif($profil->detail["perkebunan"]["sarana"]["pertemuan"] == "rumah_anggota") echo "Rumah anggota";
					elseif($profil->detail["perkebunan"]["sarana"]["pertemuan"] == "lainnya") echo $profil->detail["perkebunan"]["sarana"]["pertemuan_lainnya"];
				?>
				</td>
			</tr>
			<tr>
				<td>Peralatan Yang Diperoleh Untuk Pelaksanaan Produksi</td>
				<td>
				<?php
					if(!isset($profil->detail['perkebunan']['sarana']['peralatan']) || !is_array($profil->detail['perkebunan']['sarana']['peralatan'])) $profil->detail['perkebunan']['sarana']['peralatan'] = array();
					echo implode("<br>", $profil->detail['perkebunan']['sarana']['peralatan']);
				?>
				</td>
			</tr>
			<tr>
				<td>Pengangkutan Hasil Dari Lahan Ke Rumah</td>
				<td>
				<?php
					if($profil->detail["perkebunan"]["sarana"]["transportasi"] == "gerobak_kelompok") echo "Gerobak kelompok";
					elseif($profil->detail["perkebunan"]["sarana"]["transportasi"] == "gerobak_pribadi") echo "Gerobak pribadi ";
					elseif($profil->detail["perkebunan"]["sarana"]["transportasi"] == "beko_kelompok") echo "Beko (roda tiga) kelompok";
					elseif($profil->detail["perkebunan"]["sarana"]["transportasi"] == "beko_pribadi") echo "Beko pribadi";
					elseif($profil->detail["perkebunan"]["sarana"]["transportasi"] == "motor_kelompok") echo "Motor kelompok";
					elseif($profil->detail["perkebunan"]["sarana"]["transportasi"] == "motor_pribadi") echo "Motor pribadi ";
					elseif($profil->detail["perkebunan"]["sarana"]["transportasi"] == "lainnya") echo $profil->detail["perkebunan"]["sarana"]["transportasi_lainnya"];
				?>
				</td>
			</tr>
			<tr>
				<td>Penyimpanan Alat dan Hasil Produksi</td>
				<td>
				<?php
					if($profil->detail["perkebunan"]["sarana"]["gudang"] == "gudang_kelompok") echo "Gudang kelompok";
					elseif($profil->detail["perkebunan"]["sarana"]["gudang"] == "gudang_pengurus") echo "Gudang pribadi pengurus kelompok";
					elseif($profil->detail["perkebunan"]["sarana"]["gudang"] == "gudang_anggota") echo "Gudang pribadi salah satu anggota";
					elseif($profil->detail["perkebunan"]["sarana"]["gudang"] == "gudang_desa") echo "Gudang kampung/desa";
					elseif($profil->detail["perkebunan"]["sarana"]["gudang"] == "gudang_mitra") echo "Gudang mitra kerja";
				?>
				</td>
			</tr>
			<?php endif ?>
			<?php if($profil->bidang_kegiatan == "buah"): ?>
			<tr>
				<td>Tempat Pertemuan</td>
				<td>
				<?php
					if($profil->detail["buah"]["sarana"]["pertemuan"] == "saung") echo "Saung kelompok";
					elseif($profil->detail["buah"]["sarana"]["pertemuan"] == "balai") echo "Balai kampung/desa";
					elseif($profil->detail["buah"]["sarana"]["pertemuan"] == "rumah_pengurus") echo "Rumah pengurus";
					elseif($profil->detail["buah"]["sarana"]["pertemuan"] == "rumah_anggota") echo "Rumah anggota";
					elseif($profil->detail["buah"]["sarana"]["pertemuan"] == "lainnya") echo $profil->detail["buah"]["sarana"]["pertemuan_lainnya"];
				?>
				</td>
			</tr>
			<tr>
				<td>Peralatan Yang Diperoleh Untuk Pelaksanaan Produksi</td>
				<td>
				<?php
					if(!isset($profil->detail['buah']['sarana']['peralatan']) || !is_array($profil->detail['buah']['sarana']['peralatan'])) $profil->detail['buah']['sarana']['peralatan'] = array();
					echo implode("<br>", $profil->detail['buah']['sarana']['peralatan']);
				?>
				</td>
			</tr>
			<tr>
				<td>Pengangkutan Hasil Dari Lahan Ke Rumah</td>
				<td>
				<?php
					if($profil->detail["buah"]["sarana"]["transportasi"] == "gerobak_kelompok") echo "Gerobak kelompok";
					elseif($profil->detail["buah"]["sarana"]["transportasi"] == "gerobak_pribadi") echo "Gerobak pribadi ";
					elseif($profil->detail["buah"]["sarana"]["transportasi"] == "beko_kelompok") echo "Beko (roda tiga) kelompok";
					elseif($profil->detail["buah"]["sarana"]["transportasi"] == "beko_pribadi") echo "Beko pribadi";
					elseif($profil->detail["buah"]["sarana"]["transportasi"] == "motor_kelompok") echo "Motor kelompok";
					elseif($profil->detail["buah"]["sarana"]["transportasi"] == "motor_pribadi") echo "Motor pribadi ";
					elseif($profil->detail["buah"]["sarana"]["transportasi"] == "lainnya") echo $profil->detail["buah"]["sarana"]["transportasi_lainnya"];
				?>
				</td>
			</tr>
			<tr>
				<td>Penyimpanan Alat dan Hasil Produksi</td>
				<td>
				<?php
					if($profil->detail["buah"]["sarana"]["gudang"] == "gudang_kelompok") echo "Gudang kelompok";
					elseif($profil->detail["buah"]["sarana"]["gudang"] == "gudang_pengurus") echo "Gudang pribadi pengurus kelompok";
					elseif($profil->detail["buah"]["sarana"]["gudang"] == "gudang_anggota") echo "Gudang pribadi salah satu anggota";
					elseif($profil->detail["buah"]["sarana"]["gudang"] == "gudang_desa") echo "Gudang kampung/desa";
					elseif($profil->detail["buah"]["sarana"]["gudang"] == "gudang_mitra") echo "Gudang mitra kerja";
				?>
				</td>
			</tr>
			<?php endif ?>
			<?php if($profil->bidang_kegiatan == "peternakan"): ?>
			<tr>
				<td>Tempat Pertemuan</td>
				<td>
				<?php
					if($profil->detail["peternakan"]["sarana"]["pertemuan"] == "saung") echo "Saung kelompok";
					elseif($profil->detail["peternakan"]["sarana"]["pertemuan"] == "balai") echo "Balai kampung/desa";
					elseif($profil->detail["peternakan"]["sarana"]["pertemuan"] == "rumah_pengurus") echo "Rumah pengurus";
					elseif($profil->detail["peternakan"]["sarana"]["pertemuan"] == "rumah_anggota") echo "Rumah anggota";
					elseif($profil->detail["peternakan"]["sarana"]["pertemuan"] == "lainnya") echo $profil->detail["peternakan"]["sarana"]["pertemuan_lainnya"];
				?>
				</td>
			</tr>
			<tr>
				<td>Peralatan Yang Diperoleh Untuk Pelaksanaan Produksi</td>
				<td>
				<?php
					if(!isset($profil->detail['peternakan']['sarana']['peralatan']) || !is_array($profil->detail['peternakan']['sarana']['peralatan'])) $profil->detail['peternakan']['sarana']['peralatan'] = array();
					echo implode("<br>", $profil->detail['peternakan']['sarana']['peralatan']);
				?>
				</td>
			</tr>
			<tr>
				<td>Kondisi Kandang ternak</td>
				<td>
				<?php
					if($profil->detail["peternakan"]["sarana"]["kondisi"] == "permanen") echo "Tembok (permanen)";
					elseif($profil->detail["peternakan"]["sarana"]["kondisi"] == "semi_permanen") echo "Setengah tembok dan papan (semi permanen)";
					elseif($profil->detail["peternakan"]["sarana"]["kondisi"] == "non_permanen") echo "Papan (non permanen)";
				?>
				</td>
			</tr>
			<tr>
				<td>Biaya perbaikan yang dilakukan</td>
				<td>
				<?php
					if($profil->detail["peternakan"]["sarana"]["perbaikan"] == "blm") echo "Diperbaiki dengan dana BLM";
					elseif($profil->detail["peternakan"]["sarana"]["perbaikan"] == "pemerintah") echo "Diperbaiki dari dana pemerintah / dinas terkait";
					elseif($profil->detail["peternakan"]["sarana"]["perbaikan"] == "pihak_lain") echo "Diperbaiki dari dana Perusahaan / LSM / Pihak lainnya";
					elseif($profil->detail["peternakan"]["sarana"]["perbaikan"] == "swadaya") echo "Diperbaiki secara swadaya";
					elseif($profil->detail["peternakan"]["sarana"]["perbaikan"] == "lainnya") echo $profil->detail["peternakan"]["sarana"]["perbaikan_lainnya"];
				?>
				</td>
			</tr>
			<tr>
				<td>Angkutan untuk membawa makanan ternak</td>
				<td><?php echo $profil->detail["peternakan"]["sarana"]["transportasi_makanan"] ?>"></td>
			</tr>
			<tr>
				<td>Angkutan untuk membawa ternak ke kampung</td>
				<td><?php echo $profil->detail["peternakan"]["sarana"]["transportasi_kampung"] ?>"></td>
			</tr>
			<tr>
				<td>Angkutan untuk membawa ternak ke pasar</td>
				<td><?php echo $profil->detail["peternakan"]["sarana"]["transportasi_pasar"] ?>"></td>
			</tr>
			<?php endif ?>
			<?php if($profil->bidang_kegiatan == "perikanan"): ?>
			<tr>
				<td>Tempat Pertemuan</td>
				<td>
				<?php
					if($profil->detail["perikanan"]["sarana"]["pertemuan"] == "saung") echo "Saung kelompok";
					elseif($profil->detail["perikanan"]["sarana"]["pertemuan"] == "balai") echo "Balai kampung/desa";
					elseif($profil->detail["perikanan"]["sarana"]["pertemuan"] == "rumah_pengurus") echo "Rumah pengurus";
					elseif($profil->detail["perikanan"]["sarana"]["pertemuan"] == "rumah_anggota") echo "Rumah anggota";
					elseif($profil->detail["perikanan"]["sarana"]["pertemuan"] == "lainnya") echo $profil->detail["perikanan"]["sarana"]["pertemuan_lainnya"];
				?>
				</td>
			</tr>
			<tr>
				<td>Peralatan Yang Diperoleh Untuk Pelaksanaan Produksi</td>
				<td>
				<?php
					if(!isset($profil->detail['perikanan']['sarana']['peralatan']) || !is_array($profil->detail['perikanan']['sarana']['peralatan'])) $profil->detail['perikanan']['sarana']['peralatan'] = array();
					echo implode("<br>", $profil->detail['perikanan']['sarana']['peralatan']);
				?>
				</td>
			</tr>
			<tr>
				<td>Kondisi Perahu</td>
				<td><?php echo $profil->detail["perikanan"]["sarana"]["kondisi_perahu"] == "baik" ? "Baik" : "Tidak" ?></td>
			</tr>
			<tr>
				<td>Kondisi Mesin</td>
				<td><?php echo $profil->detail["perikanan"]["sarana"]["kondisi_mesin"] == "baik" ? "Baik" : "Tidak" ?></td>
			</tr>
			<tr>
				<td>Kondisi Perlengkapan menangkap ikan (jaring, lampu, pelampung, dll)</td>
				<td><?php echo $profil->detail["perikanan"]["sarana"]["kondisi_menangkap"] == "baik" ? "Baik" : "Tidak" ?></td>
			</tr>
			<tr>
				<td>Kondisi Perlengkapan memancing</td>
				<td><?php echo $profil->detail["perikanan"]["sarana"]["kondisi_memancing"] == "baik" ? "Baik" : "Tidak" ?></td>
			</tr>
			<tr>
				<td>Biaya perbaikan yang dilakukan</td>
				<td>
				<?php
					if($profil->detail["perikanan"]["sarana"]["perbaikan"] == "blm") echo "Diperbaiki dengan dana BLM";
					elseif($profil->detail["perikanan"]["sarana"]["perbaikan"] == "pemerintah") echo "Diperbaiki dari dana pemerintah / dinas terkait";
					elseif($profil->detail["perikanan"]["sarana"]["perbaikan"] == "pihak_lain") echo "Diperbaiki dari dana Perusahaan / LSM / Pihak lainnya";
					elseif($profil->detail["perikanan"]["sarana"]["perbaikan"] == "swadaya") echo "Diperbaiki secara swadaya";
					elseif($profil->detail["perikanan"]["sarana"]["perbaikan"] == "lainnya") echo $profil->detail["perikanan"]["sarana"]["perbaikan_lainnya"];
				?>
				</td>
			</tr>
			<tr>
				<td>Penyimpanan Alat dan Hasil Produksi</td>
				<td>
				<?php
					if($profil->detail["perikanan"]["sarana"]["gudang"] == "gudang_kelompok") echo "Gudang kelompok";
					elseif($profil->detail["perikanan"]["sarana"]["gudang"] == "gudang_pengurus") echo "Gudang pribadi pengurus kelompok";
					elseif($profil->detail["perikanan"]["sarana"]["gudang"] == "gudang_anggota") echo "Gudang pribadi salah satu anggota";
					elseif($profil->detail["perikanan"]["sarana"]["gudang"] == "gudang_desa") echo "Gudang kampung/desa";
					elseif($profil->detail["perikanan"]["sarana"]["gudang"] == "gudang_mitra") echo "Gudang mitra kerja";
					elseif($profil->detail["perikanan"]["sarana"]["gudang"] == "langsung_jual") echo "Tidak disimpan/ langsung jual";
					elseif($profil->detail["perikanan"]["sarana"]["gudang"] == "lainnya") echo $profil->detail["perikanan"]["sarana"]["gudang_lainnya"];
				?>
				</td>
			</tr>
			<?php endif ?>
			<?php if($profil->bidang_kegiatan == "hasil"): ?>
			<tr>
				<td>Tempat Pertemuan</td>
				<td>
				<?php
					if($profil->detail["hasil"]["sarana"]["pertemuan"] == "saung") echo "Saung kelompok";
					elseif($profil->detail["hasil"]["sarana"]["pertemuan"] == "balai") echo "Balai kampung/desa";
					elseif($profil->detail["hasil"]["sarana"]["pertemuan"] == "rumah_pengurus") echo "Rumah pengurus";
					elseif($profil->detail["hasil"]["sarana"]["pertemuan"] == "rumah_anggota") echo "Rumah anggota";
					elseif($profil->detail["hasil"]["sarana"]["pertemuan"] == "lainnya") echo $profil->detail["hasil"]["sarana"]["pertemuan_lainnya"];
				?>
				</td>
			</tr>
			<tr>
				<td>Peralatan Yang Diperoleh Untuk Pelaksanaan Produksi</td>
				<td>
				<?php
					if(!isset($profil->detail['hasil']['sarana']['peralatan']) || !is_array($profil->detail['hasil']['sarana']['peralatan'])) $profil->detail['hasil']['sarana']['peralatan'] = array();
					echo implode("<br>", $profil->detail['hasil']['sarana']['peralatan']);
				?>
				</td>
			</tr>
			<tr>
				<td>Tempat penjualan usaha</td>
				<td>
				<?php
					if($profil->detail["hasil"]["sarana"]["penjualan"] == "kios") echo "Kios depan rumah";
					elseif($profil->detail["hasil"]["sarana"]["penjualan"] == "meja") echo "Para-para / meja di depan rumah";
					elseif($profil->detail["hasil"]["sarana"]["penjualan"] == "konsinyasi") echo "Konsinyasi di pedagang lain";
					elseif($profil->detail["hasil"]["sarana"]["penjualan"] == "pasar") echo "Jual langsung di pasar";
					elseif($profil->detail["hasil"]["sarana"]["penjualan"] == "pengumpul") echo "Jual di pedagang pengumpul";
				?>
				</td>
			</tr>
			<tr>
				<td>Pengangkutan Hasil Dari Lahan Ke Rumah</td>
				<td>
				<?php
					if($profil->detail["hasil"]["sarana"]["transportasi"] == "gerobak_kelompok") echo "Gerobak kelompok";
					elseif($profil->detail["hasil"]["sarana"]["transportasi"] == "gerobak_pribadi") echo "Gerobak pribadi ";
					elseif($profil->detail["hasil"]["sarana"]["transportasi"] == "beko_kelompok") echo "Beko (roda tiga) kelompok";
					elseif($profil->detail["hasil"]["sarana"]["transportasi"] == "beko_pribadi") echo "Beko pribadi";
					elseif($profil->detail["hasil"]["sarana"]["transportasi"] == "motor_kelompok") echo "Motor kelompok";
					elseif($profil->detail["hasil"]["sarana"]["transportasi"] == "motor_pribadi") echo "Motor pribadi ";
					elseif($profil->detail["hasil"]["sarana"]["transportasi"] == "lainnya") echo $profil->detail["hasil"]["sarana"]["transportasi_lainnya"];
				?>
				</td>
			</tr>
			<tr>
				<td>Penyimpanan Alat dan Hasil Produksi</td>
				<td>
				<?php
					if($profil->detail["hasil"]["sarana"]["gudang"] == "sekretariat_kelompok") echo "Sekretariat kelompok";
					elseif($profil->detail["hasil"]["sarana"]["gudang"] == "rumah_pengurus") echo "Rumah pribadi pengurus kelompok";
					elseif($profil->detail["hasil"]["sarana"]["gudang"] == "rumah_anggota") echo "Rumah pribadi salah satu anggota";
					elseif($profil->detail["hasil"]["sarana"]["gudang"] == "langsung_jual") echo "Tidak disimpan/ langsung jual";
					elseif($profil->detail["hasil"]["sarana"]["gudang"] == "lainnya") echo $profil->detail["hasil"]["sarana"]["gudang_lainnya"];
				?>
				</td>
			</tr>
			<?php endif ?>
			<tr>
				<td colspan="2"><h3>IV. Aspek Pembinaan</h3></td>
			</tr>
			<tr>
				<td>BPMD Kabupaten</td>
				<td>
					<?php if(!isset($profil->detail['pembinaan']['bpmd_kabupaten']) || !is_array($profil->detail['pembinaan']['bpmd_kabupaten'])) $profil->detail['pembinaan']['bpmd_kabupaten'] = "" ?>
					<?php echo $profil->detail["pembinaan"]["bpmd_kabupaten"] == "rutin" ? "Rutin" : "Tidak Rutin" ?>
				</td>
			</tr>
			<tr>
				<td>Penyuluh Pertanian</td>
				<td>
					<?php if(!isset($profil->detail['pembinaan']['penyuluh']) || !is_array($profil->detail['pembinaan']['penyuluh'])) $profil->detail['pembinaan']['penyuluh'] = "" ?>
					<?php echo $profil->detail["pembinaan"]["penyuluh"] == "rutin" ? "Rutin" : "Tidak Rutin" ?>
				</td>
			</tr>
			<tr>
				<td>BPMD Provinsi</td>
				<td>
					<?php if(!isset($profil->detail['pembinaan']['bpmd_provinsi']) || !is_array($profil->detail['pembinaan']['bpmd_provinsi'])) $profil->detail['pembinaan']['bpmd_provinsi'] = "" ?>
					<?php echo $profil->detail["pembinaan"]["bpmd_provinsi"] == "rutin" ? "Rutin" : "Tidak Rutin" ?>
				</td>
			</tr>
			<tr>
				<td>Dinas Terkait Lainnya</td>
				<td>
				<?php if(!isset($profil->detail['pembinaan']['dinas_lain']['status']) || !is_array($profil->detail['pembinaan']['dinas_lain']['status'])) $profil->detail['pembinaan']['dinas_lain']['status'] = "" ?>
				<?php
					if(empty($profil->detail["pembinaan"]["dinas_lain"]["nama"])) echo "Tidak Ada";
					else{
						echo $profil->detail["pembinaan"]["dinas_lain"]["nama"] . ' - ' . $profil->detail["pembinaan"]["dinas_lain"]['status'] == "rutin" ? "Rutin" : "Tidak Rutin";
					}
				?>
				</td>
			</tr>
			<tr>
				<td>Pertemuan Rutin Poktan</td>
				<td>
				<?php 
					if($profil->detail["pembinaan"]["pertemuan_poktan"] == "belum") echo "Belum pernah";
					if($profil->detail["pembinaan"]["pertemuan_poktan"] == "1 minggu") echo "1 minggu sekali";
					if($profil->detail["pembinaan"]["pertemuan_poktan"] == "2 minggu") echo "2 minggu sekali";
					if($profil->detail["pembinaan"]["pertemuan_poktan"] == "1 bulan") echo "1 bulan sekali";
					if($profil->detail["pembinaan"]["pertemuan_poktan"] == "lainnya") echo $profil->detail["pembinaan"]["pertemuan_poktan_lainnya"];
				?>
				</td>
			</tr>
			<tr>
				<td>Kursus tani/sekolah lapang</td>
				<td><?php echo $profil->detail["pembinaan"]["kursus"] == "belum" ? "Belum pernah" : $profil->detail["pembinaan"]["kursus_lainnya"] ?></td>
			</tr>
			<tr>
				<td> Demplot atau demfarm</td>
				<td><?php echo $profil->detail["pembinaan"]["demplot"] == "ada" ? "Ada" : "Tidak" ?></td>
			</tr>
			<tr>
				<td>Kepala Kampung</td>
				<td><?php echo $profil->detail["pembinaan"]["kepala_kampung"] ?></td>
			</tr>
			<tr>
				<td>Ketua Kelompok Tani</td>
				<td><?php echo $profil->detail["pembinaan"]["ketua"] ?></td>
			</tr>
			<tr>
				<td>Pendamping Distrik</td>
				<td><?php echo $profil->detail["pembinaan"]["pendamping"] ?></td>
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