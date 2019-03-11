	<p>
		<button class="btn btn-blue btn-icon icon-left btn-cetak">
			<i class="entypo-print"></i>
			Cetak Data
		</button>
	</p>
	<table class="table table-bordered datatable" id="detail-kegiatan">
		<tbody>
			<tr>
				<td colspan="2"><h3>Detail Indeks Desa Membangun (IDM)</h3></td>
			</tr>
			<tr>
				<td width="50%">Provinsi</td>
				<td width="20%"><?php echo $kegiatan->provinsi ?></td>
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
				<td colspan="2"><h4><strong> <font color="green"> I. Bidang Kesehatan</strong></h4></td>
			</tr>
			<tr>
				<td width="20%">1. Waktu Tempuh ke prasarana kesehatan < 30 menit </td>
				<td width="80%"><?php echo $kegiatan->nama; ?></td>
			</tr>
			<tr>
				<td>2. Tersedia tenaga kesehatan bidan </td>
				<td> <?php echo $kegiatan->masalah ?></td>
				</tr>
			<tr>
				<td>3. Tersedia tenaga kesehatan dokte</td>
				<td> <?php echo $kegiatan->sasaran ?></td>
				</tr>
				<tr>
				<td>4. Tersedia tenaga kesehatan lain </td>
				<td> <?php echo $kegiatan->deskripsi ?></td>
				</tr>
			<tr>
				<td>5. Akses ke poskesdes, polindes dan posyandu</td>
				<td> <?php echo $kegiatan->jumlah_p ?></td>
				</tr>
			<tr>
				<td>6. Tingkat aktivitas posyandu</td>
				<td> <?php echo $kegiatan->aktivitas_posyandu ?></td>
				</tr>
			<tr>
				<td>7. Tingkat kepesertaan BPJS</td>
				<td> <?php echo $kegiatan->kepesertaan_bpjs ?></td>
				</tr>
				<tr>
				<td colspan="2"><h4><strong> <font color="green"> II. Bidang Pendidikan</strong></h4></td>
			</tr>
			<tr>
				<td>8. Akses ke Pendidikan Dasar SD/MI < 3 KM</td>
				<td> <?php echo $kegiatan->pendidikan_dasar ?></td>
				</tr>
			<tr>
				<td>9. Akses ke SMP/MTS < 6 km</td>
				<td> <?php echo $kegiatan->smp_mts ?></td>
				</tr>
			<tr>
				<td>10. Akses ke SMU/SMK < 6 km</td>
				<td> <?php echo $kegiatan->smu_smk ?></td>
				</tr>
			<tr>
				<td>11. Kegiatan pemberantasan buta aksara</td>
				<td> <?php echo $kegiatan->buta_aksara ?></td>
				</tr>
			<tr>
				<td>12. Kegiatan PAUD</td>
				<td> <?php echo $kegiatan->kegiatan_paud ?></td>
				</tr>
			<tr>
				<td>13. Kegiatan PKBM/Paket ABC</td>
				<td> <?php echo $kegiatan->kegiatan_pkbm ?></td>
				</tr>
			<tr>
				<td>14. Akses ke pusat keterampilan/ kursus</td>
				<td> <?php echo $kegiatan->pusat_kursus ?></td>
				</tr>
			<tr>
				<td>15. Taman Bacaan Masyarakat atau Perpustakaan Desa</td>
				<td> <?php echo $kegiatan->perpus_desa ?></td>
				</tr>
				<tr>
				<td colspan="2"><h4><strong> <font color="green"> III. Bidang Modal Sosial</strong></h4></td>
			</tr>
			<tr>
				<td>16. Kebiasaan gotong royong di desa</td>
				<td> <?php echo $kegiatan->gotong_royong ?></td>
				</tr>
			<tr>
				<td>17. Keberadaan ruang publik terbuka bagi warga yang tidak berbayar</td>
				<td> <?php echo $kegiatan->ruang_publik ?></td>
				</tr>
			<tr>
				<td>18. Ketersediaan fasilitas atau lapangan olahraga</td>
				<td> <?php echo $kegiatan->lapangan_olahraga ?></td>
				</tr>
			<tr>
				<td>19. Terdapat kelompok kegiatan olahraga</td>
				<td> <?php echo $kegiatan->kegiatan_olahraga ?></td>
				</tr>
			<tr>
				<td>20. Warga desa terdiri dari beberapa suku atau etnis</td>
				<td> <?php echo $kegiatan->suku_etnis ?></td>
				</tr>
			<tr>
				<td>21. Warga desa berkomunikasi sehari-hari menggunakan bahasa yang berbeda</td>
				<td> <?php echo $kegiatan->bahasa ?></td>
				</tr>
			<tr>
				<td>22. Terdapat keragaman agama di Desa</td>
				<td> <?php echo $kegiatan->keragaman_agama ?></td>
				</tr>
			<tr>
				<td>23. Warga desa membangun pemeliharaan poskamling lingkungan </td>
				<td> <?php echo $kegiatan->poskamling ?></td>
				</tr>
			<tr>
				<td>24. Partisipasi warga mengadakan siskamling</td>
				<td> <?php echo $kegiatan->siskamling ?></td>
				</tr>
			<tr>
				<td>25. Tingkat kriminalitas yang terjadi di Desa</td>
				<td> <?php echo $kegiatan->kriminalitas ?></td>
				</tr>
			<tr>
				<td>26. Tingkat konflik yang terjadi di Desa</td>
				<td> <?php echo $kegiatan->konflik ?></td>
				</tr>
			<tr>
				<td>27. Upaya penyelesaian konflik yang terjadi di Desa</td>
				<td> <?php echo $kegiatan->penyelesaian_konflik ?></td>
				</tr>
			<tr>
				<td>28. Terdapat akses ke Sekolah Luar Biasa </td>
				<td> <?php echo $kegiatan->sekolah_lb ?></td>
				</tr>
			<tr>
				<td>29. Terdapat Penyandang Kesejahteraan Sosial (Anak Jalanan, Pekerja Seks Komersial dan Pengemis </td>
				<td> <?php echo $kegiatan->kesejahteraan_sosial ?></td>
				</tr>
			<tr>
				<td>30. Terdapat Penduduk yang bunuh diri</td>
				<td> <?php echo $kegiatan->bunuh_diri ?></td>
				</tr>
				<tr>
				<td colspan="2"><h4><strong> <font color="green">IV. Bidang Permukiman</strong></h4></td>
			</tr>
			<tr>
				<td>31. Mayoritas penduduk desa memiliki sumber air minum yang layak </td>
				<td> <?php echo $kegiatan->sumber_air ?></td>
				</tr>
			<tr>
				<td> 32. Akses Penduduk desa memiliki air untuk mandi dan mencuci </td>
				<td> <?php echo $kegiatan->air_mandi ?></td>
				</tr>
			<tr>
				<td>33. Mayoritas penduduk desa memiliki Jamban </td>
				<td> <?php echo $kegiatan->memiliki_jamban ?></td>
				</tr>
			<tr>
				<td>34. Terdapat tempat pembuangan sampah </td>
				<td> <?php echo $kegiatan->tempat_sampah ?></td>
				</tr>
			<tr>
				<td>35. Jumlah keluarga yang telah memiliki aliran listrik</td>
				<td> <?php echo $kegiatan->aliran_listrik ?></td>
				</tr>
			<tr>
				<td>36. Penduduk desa memiliki telepon selular dan sinyal yang kuat </td>
				<td> <?php echo $kegiatan->sinyal_kuat ?></td>
				</tr>
			<tr>
				<td>37. Terdapat siaran televisi lokal, nasional dan asing? </td>
				<td> <?php echo $kegiatan->televisi ?></td>
				</tr>
			<tr>
				<td>38. Terdapat akses internet </td>
				<td> <?php echo $kegiatan->internet ?></td>
				</tr>
				<tr>
				<td colspan="2"><h4><strong> <font color="green"> V. Bidang Ekonomi</strong></h4></td>
			</tr>
			<tr>
				<td>39. Terdapat lebih dari satu jenis kegiatan ekonomi penduduk </td>
				<td> <?php echo $kegiatan->ekonomi_penduduk ?></td>
				</tr>
			<tr>
				<td>40. Akses penduduk ke pusat perdagangan (pertokoan, pasar permanen dan semi permanen) </td>
				<td> <?php echo $kegiatan->pusat_perdagangan ?></td>
				</tr>
			<tr>
				<td>41. Terdapat sektor perdagangan di permukiman (warung dan minimarket) </td>
				<td> <?php echo $kegiatan->minimarket ?></td>
				</tr>
			<tr>
				<td>42. Terdapat usaha kedai makanan, restoran, hotel dan penginapan </td>
				<td> <?php echo $kegiatan->penginapan ?></td>
				</tr>
			<tr>
				<td>43. Terdapat kantor pos dan jasa logistik </td>
				<td> <?php echo $kegiatan->logistik ?></td>
				</tr>
			<tr>
				<td>44. Tersedianya lembaga perbankan umum (Pemerintah dan Swasta) </td>
				<td> <?php echo $kegiatan->bank ?></td>
				</tr>
			<tr>
				<td>45. Tersedianya BPR </td>
				<td> <?php echo $kegiatan->bpr ?></td>
				</tr>
			<tr>
				<td>46. Akses penduduk ke kredit </td>
				<td> <?php echo $kegiatan->kredit ?></td>
				</tr>
			<tr>
				<td>47. Tersedianya lembaga ekonomi rakyat (koperasi) </td>
				<td> <?php echo $kegiatan->koperasi ?></td>
				</tr>
			<tr>
				<td>48. Terdapat moda transportasi umum (Transportasi Angkutan Umum, trayek reguler dan jam operasi Angkutan Umum)</td>
				<td> <?php echo $kegiatan->transportasi ?></td>
				</tr>
			<tr>
				<td>49. Jalan yang dapat dilalui oleh kendaraan bermotor roda empat atau lebih (sepanjang tahun kecuali musim hujan, kecuali saat tertentu) </td>
				<td> <?php echo $kegiatan->jalan_umum ?></td>
				</tr>
			<tr>
				<td>50. Kualitas Jalan Desa (Jalan terluas di desa dengan aspal, kerikil, dan tanah)</td>
				<td> <?php echo $kegiatan->jalan_desa ?></td>
				</tr>
				<tr>
				<td colspan="2"><h4><strong> <font color="green"> VI. Bidang Ekologi</strong></h4></td>
			</tr>
			<tr>
				<td>51. Ada atau tidak adanya pencemaran air, tanah dan udara</td>
				<tr>
				<td>a. Air </td>
				<td> <?php echo $kegiatan->air ?></td>
				</tr>
				<tr>
				<td>b. Tanah </td>
				<td> <?php echo $kegiatan->tanah ?></td>
				</tr>
				<tr>
				<td>c. Udara </td>
				<td> <?php echo $kegiatan->udara ?></td>
				</tr>
				<tr>
				<td>d. Limbah</td>
				<td> <?php echo $kegiatan->limbah ?></td>
				</tr>
			<tr>
				<td>52. kejadian Bencana Alam (banjir, tanah longsong, kebakaran hutan</td>
				<tr>
				<td>a. Longsor </td>
				<td> <?php echo $kegiatan->longsor ?></td>
				</tr>
				<tr>
				<td>b. Banjir </td>
				<td> <?php echo $kegiatan->banjir ?></td>
				</tr>
				<tr>
				<td>c. Kebakaran Hutan </td>
				<td> <?php echo $kegiatan->kebakaran_hutan ?></td>
				</tr>
			<tr>
				<td>53. Upaya/Tindakan terhadap potensi bencana alam (Tanggap bencana, jalur evakuasi, peringatan dini dan ketersediaan peralatan penanganan bencana)</td>
				<tr>
				<td>a. Peringatan Dini </td>
				<td> <?php echo $kegiatan->peringatan_dini ?></td>
				</tr>
				<tr>
				<td>b. Peringatan Dini Tsunami </td>
				<td> <?php echo $kegiatan->dini_tsunami ?></td>
				</tr>
				<tr>
				<td>c. Peralatan Keselamatan </td>
				<td> <?php echo $kegiatan->per_keselamatan ?></td>
				</tr>
				<tr>
				<td>d. Jalur Evakuasi </td>
				<td> <?php echo $kegiatan->jalur_evakuasi ?></td>
				</tr>
				</tr>
			</tr>
			<tr>
				<td colspan="2"><h4><strong> <font color="red"> VII. Jaring Komunitas Wiradesa (Improved Indikator)
</strong></h4></td>
			</tr>
			<tr>
				<td>54. Keberadaan Peraturan desa yang dibuat?)</td>
				<tr>
				<td>a.	Jenis dan sektor tujuan peraturan desa </td>
				<td> <?php echo $kegiatan->jenis_aturan ?></td>
				</tr>
				<tr>
				<td>b. Jumlah peraturan desa yang dibuat dalam satu tahun terakhir </td>
				<td> <?php echo $kegiatan->jumlah_aturan ?></td>
				</tr>
				</tr>
				<tr>
				<td>55. Keberadaan dan intensitas Musyawarah Desa </td>
				<tr>
				<td>a. Intensitas Musyawarah Desa (Berapa kali dilaksanakan dalam setahun </td>
				<td> <?php echo $kegiatan->musda ?></td>
				</tr>
				<tr>
				<td>b.	Efektivitas Musyawarah Desa </td>
				<td> <?php echo $kegiatan->efek_musda ?></td>
				</tr>
				</tr>
				<tr>
				<td>56. Keberadaan dan jumlah Keputusan Kepala Desa</td>
				<td> <?php echo $kegiatan->keputusan_kades ?></td>
				</tr>
				<tr>
				<td>57.  Keberadaan Kerjasama Antar Desa</td>
				<tr>
				<td>a. Bidang apa saja kerjasama antar desa tersebut ? </td>
				<td> <?php echo $kegiatan->bidang_kerjasama ?></td>
				</tr>
				<tr>
				<td>b. Jumlah Kerjasama Antar Desa </td>
				<td> <?php echo $kegiatan->jumlah_kerjasama ?></td>
				</tr>
				</tr>
				<tr>
				<td>58. Jumlah kepala keluarga yang tinggal di wilayah perbatasan hutan </td>
				<td> <?php echo $kegiatan->kkbatas_hutan ?></td>
				</tr>
				<tr>
				<td>59. Jumlah Kepala keluarga yang tinggal di kawasan perbatasan dengan negara lain</td>
				<td> <?php echo $kegiatan->kk_negaralain ?></td>
				</tr>
				<tr>
				<td>60. Jumlah penduduk putus sekolah</td>
				<td> <?php echo $kegiatan->putus_sekolah ?></td>
				</tr>
				<tr>
				<td>61. Jumlah penduduk buta aksara</td>
				<td> <?php echo $kegiatan->buta_aksara ?></td>
				</tr>
				<tr>
				<td>62. Jumlah keluhan kesehatan</td>
				<td> <?php echo $kegiatan->keluhan_kesehatan ?></td>
				</tr>
				<tr>
				<td>63. Angka kematian ibu dan anak</td>
				<td> <?php echo $kegiatan->kematian_ibuanak ?></td>
				</tr>
				<tr>
				<td>64. Jumlah KDRT</td>
				<td> <?php echo $kegiatan->kdrt ?></td>
				</tr>
				<tr>
				<td colspan="2"><h4><strong> <font color="red"> VIII. Jaring Komunitas Wiradesa (Improved Indikator)</strong></h4></td>
			</tr>
			<tr>
			<tr>
				<td>65. Keberadaan Bumdes Aktif di desa </td>
				<tr>
				<td>a. Sektor pengembangan usaha BUMDesa </td>
				<td> <?php echo $kegiatan->usaha_bumdes ?></td>
				</tr>
				<tr>
				<td>b. Jumlah Aset Bumdes </td>
				<td> <?php echo $kegiatan->jumlah_bumdes ?></td>
				</tr>
				</tr>
				<tr>
				<td>66.Kalau BUmdes Ada, berapa Jumlah dana desa yang disertakan sebagai modal dalam BUMDes</td>
				<td> <?php echo $kegiatan->dana_bumdes ?></td>
				</tr>
				<tr>
				<td>67. Komoditas unggulan local</td>
				<td> <?php echo $kegiatan->komoditas_unggulan ?></td>
				</tr>
				<tr>
				<td>68. Tingkat Kemiskinan</td>
				<td> <?php echo $kegiatan->kemiskinan ?></td>
				</tr>
				<tr>
				<td>69. Gini rasio di desa</td>
				<td> <?php echo $kegiatan->gini_rasio ?></td>
				</tr>
				<tr>
				<td>70.Pendapatan per kapita</td>
				<td> <?php echo $kegiatan->pendapatan ?></td>
				</tr>
				<tr>
				<td>71. Pertumbuhan ekonomi</td>
				<td> <?php echo $kegiatan->tumbuh_ekonomi ?></td>
				</tr>
				<tr>
				<td>72. Jumlah angkatan kerja</td>
				<td> <?php echo $kegiatan->angkatan_kerja ?></td>
				</tr>
				<tr>
				<td>73.Jumlah pengangguran</td>
				<td> <?php echo $kegiatan->pengangguran ?></td>
				</tr>
				<tr>
				<td>74. Keberadaan Keyakinan/Kepercayaan lokal masyarakat desaa</td>
				<td> <?php echo $kegiatan->sdmalam_desa ?></td>
				</tr>
				<tr>
				<td colspan="2"><h4><strong><font color="red">IX. Lingkar Budaya Desa (Improved Indikator)</strong></h4></td>
			</tr>
				<tr>
				<td>75. Keberadaan Bumdes Aktif di desa </td>
				<tr>
				<td>a.	Ada berapa jumlahnya / apa saja? </td>
				<td> <?php echo $kegiatan->jumlah_keyakinan ?></td>
				</tr>
				<tr>
				<td>b. Keberadaan tempat ibadah untuk kepercayaan tersebut? </td>
				<td> <?php echo $kegiatan->tempat_ibadah ?></td>
				</tr>
				<tr>
				<td>c.	Keberadaan kegiatan seremonial/ upacara dari kepercayaan /keyakinan lokal di desa </td>
				<td> <?php echo $kegiatan->seremonial ?></td>
				</tr>
				<tr>
				<td>76. Kebiasaan masyarakat untuk berkumpul, berdiskusi, dan bermusyawarah untuk membahas penyelesaian suatu masalah</td>
				<td> <?php echo $kegiatan->musyawarah ?></td>
				</tr>
				<tr>
				<td>77. Keaktifan Lembaga Adat</td>
				<td> <?php echo $kegiatan->lembaga_adat ?></td>
				</tr>
				<tr>
				<td>78. Keberadaan Hukum Adat Desa</td>
				<td> <?php echo $kegiatan->hukum_adat ?></td>
				</tr>
				<tr>
				<td>79. Keberadaan forum – forum musyawarah non-formal masyarakat desa</td>
				<td> <?php echo $kegiatan->forum_musyawarah ?></td>
				</tr>
				<tr>
				<td>80. Keberadaan Pos Pelayanan Teknologi (Posyantek) di desa</td>
				<td> <?php echo $kegiatan->posyantek ?></td>
				</tr>
				<tr>
				<td>781. Keberadaan Jumlah Pementasan Seni Budaya di Desa</td>
				<td> <?php echo $kegiatan->seni_budaya ?></td>
				</tr>
				<tr>
				<td>82. Keberadaan dan Jumlah HAKI Teknologi tepat guna desa</td>
				<td> <?php echo $kegiatan->haki ?></td>
				</tr>
			</tr>
		<tr>
				<td>Tanggal</td>
				<td><?php echo date_detail($kegiatan->tanggal) ?></td>
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