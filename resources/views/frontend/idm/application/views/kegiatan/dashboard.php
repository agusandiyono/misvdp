				<div class="row">
					<div class="col-sm-12">
						<p>
							<button class="btn btn-blue btn-icon icon-left btn-filter">
								<i class="entypo-database"></i>
								Filter Statistik
							</button>
						</p>
						<div class="row">
							<form role="form" method="GET" class="validate" id="form-filter" style="display: none;">
								<div class="col-md-3">
									<div class="form-group">
										<label for="provinsi_id" class="control-label">Provinsi</label>
										<?php if(!empty($this->session->userdata('provinsi_id'))): ?>
											<input type="hidden" name="provinsi" value="<?php echo $this->session->userdata('provinsi_id') ?>" />
										<?php endif ?>
										<select name="provinsi" class="form-control select2" id="provinsi_id" placeholder="Provinsi" <?php echo !empty($this->session->userdata('provinsi_id')) ? 'disabled' : "" ?>>
											<option></option>
										<?php foreach ($list_provinsi as $provinsi): ?>
											<option value="<?php echo $provinsi->provinsi_code ?>" <?php echo $provinsi->provinsi_code == $this->input->get('provinsi') ? 'selected' : "" ?> <?php echo $provinsi->provinsi_code == $this->session->userdata('provinsi_id') ? "selected" : "" ?>><?php echo $provinsi->provinsi_code ?> - <?php echo $provinsi->provinsi_name ?></option>
										<?php endforeach ?>
										</select>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label for="kabupaten_id" class="control-label">Kabupaten</label>
										<input type="text" name="kabupaten" class="form-control" id="kabupaten_id" placeholder="Kabupaten" <?php echo !empty($this->session->userdata('kabupaten_id')) ? 'readonly' : "" ?>>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label for="kecamatan_id" class="control-label">Kecamatan</label>
										<input type="text" name="kecamatan" class="form-control" id="kecamatan_id" placeholder="Kecamatan" <?php echo !empty($this->session->userdata('kecamatan_id')) ? 'readonly' : "" ?>>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label for="desa_id" class="control-label">Desa</label>
										<input type="text" name="desa" class="form-control" id="desa_id" placeholder="Desa" <?php echo !empty($this->session->userdata('desa_id')) ? 'readonly' : "" ?>>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label for="opsi" class="control-label">Opsi</label>
											<select id="opsi" name="opsi" class="form-control select2">
												<option value="1">Rentang</option>
												<option value="2">Tanggal</option>											
											</select>
									</div>
								</div>
							
								
								<div class="col-md-3" id="opsi1">
									<div class="form-group">
										<label for="dari" class="control-label">Dari Tanggal</label>
										<input type="text" class="form-control datepicker" data-format="dd-mm-yyyy" id="dari" name="dari" data-validate="required" data-message-required="Kolom dari tanggal tidak boleh kosong." placeholder="Dari Tanggal" value="<?php echo $this->input->get('dari') ?>">
									</div>
								</div>
								<div class="col-md-3" id="opsi2">
									<div class="form-group">
										<label for="sampai" class="control-label">Sampai Tanggal</label>
										<input type="text" class="form-control datepicker" data-format="dd-mm-yyyy" id="sampai" name="sampai" data-validate="required" data-message-required="Kolom sampai tanggal tidak boleh kosong." placeholder="Dari Tanggal" value="<?php echo $this->input->get('sampai') ?>">
									</div>
								</div>
								
								<div class="col-md-3 hidden">
									<div class="form-group">
										<label for="kegiatan" class="control-label">Kegiatan</label>
										<select name="kegiatan" class="form-control select2" id="kegiatan" placeholder="Kegiatan">
											<option></option>
											<option value="Penyusunan rencana kerja">Penyusunan rencana kerja</option>
											<option value="Perkenalan dan Koordinasi">Perkenalan dan Koordinasi</option>
											<option value="Sosialisasi, Promosi dan Penyadaran">Sosialisasi, Promosi dan Penyadaran</option>
											<option value="Musyawarah Pemilihan Pendamping Kampung ">Musyawarah Pemilihan Pendamping Kampung </option>
											<option value="Musyawarah dan Fasilitasi Penyusunan RKP Desa">Musyawarah dan Fasilitasi Penyusunan RKP Desa</option>
											<option value="Penggalian situasi dan Kondisi">Penggalian situasi dan Kondisi</option>
											<option value="Fasilitasi Pelatihan P3D dan Teknik">Fasilitasi Pelatihan P3D dan Teknik</option>
											<option value="Fasilitasi Bimtek Pengolahan Hasil">Fasilitasi Bimtek Pengolahan Hasil</option>
											<option value="Sekolah Lapang">Sekolah Lapang</option>
											<option value="Rapat koordinasi rutin">Rapat koordinasi rutin</option>
											<option value="Pembinaan Masyarakat">Pembinaan Masyarakat</option>
											<option value="Monitoring dan evaluasi">Monitoring dan evaluasi</option>
											<option value="Pelaporan">Pelaporan</option>
										</select>
									</div>
								</div>
								<div class="col-md-3 hidden">
									<div class="form-group">
										<label for="bidang_kegiatan" class="control-label">Bidang Kegiatan</label>
										<select name="bidang_kegiatan" class="form-control select2" id="bidang_kegiatan" placeholder="Bidang Kegiatan">
											<option></option>
											<option value="pertanian">Pertanian-Tan. Pangan</option>
											<option value="perkebunan">Perkebunan</option>
											<option value="buah">Buah-Buahan</option>
											<option value="peternakan">Peternakan</option>
											<option value="perikanan">Perikanan</option>
											<option value="hasil">Pengolahan Hasil</option>
										</select>
									</div>
								</div>
								<div class="col-md-3">
									<label for="desa_id" class="control-label">&nbsp;</label>
									<button type="submit" class="btn btn-success btn-block pull-left"><i class="entypo-search"></i> Filter</button>
								</div>
							</form>
						</div>

						<div class="chart-container" style="position: relative;">
							<div class="loading" style="display: none; position: absolute; width: 100%; height: 100%; top: 0; text-align: center; background: rgba(255,255,255,0.5); z-index: 2000;">
								<img src="<?php echo base_url('assets/images/loading.gif') ?>" alt="loading" style="width: 150px; margin-top: 60px;">
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="row">
										<div class="col-md-6">
											<h3 class="text-center">Statistik Keseluruhan Kegiatan</h3>
											<div class="text-center" id="chart-title"><?php echo !empty($title) ? $title : "" ?></div>
											<div id="grafik-kegiatan" style="height: 300px"></div>
										</div>
										<div class="col-md-6">
											<h3 class="text-center">Jumlah Masyarakat yang Ikut Berpartisipasi</h3>
											<div class="text-center" id="chart-title"><?php echo !empty($title) ? $title : "" ?></div>
											<div id="grafik-kelamin" style="height: 300px"></div>
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="row">
										<div class="col-md-6">
											<h3 class="text-center">Profil Kelompok</h3>
											<div class="text-center" id="chart-title"><?php echo !empty($title) ? $title : "" ?></div>
											<div id="grafik-profil" style="height: 300px"></div>
										</div>
										<div class="col-md-6">
											<h3 class="text-center">Bidang Kegiatan</h3>
											<div class="text-center" id="chart-title"><?php echo !empty($title) ? $title : "" ?></div>
											<div id="grafik-bidang" style="height: 300px"></div>
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="row">
										<div class="col-md-6">
											<h3 class="text-center">Teknik yang Sudah Digunakan</h3>
											<div class="text-center" id="chart-title"><?php echo !empty($title) ? $title : "" ?></div>
											<div id="grafik-teknik" style="height: 300px"></div>
										</div>
										<div class="col-md-6">
											<h3 class="text-center">Penilaian Evaluasi Kerja</h3>
											<div class="text-center" id="chart-title"><?php echo !empty($title) ? $title : "" ?></div>
											<div class="text-center" id="chart-title"><h3><?php echo $statistik['hasil_radar']['rata'] ?> - <?php echo $statistik['hasil_radar']['status'] ?></h3></div>
											<canvas id="grafik-evkin" style="height: 300px"></canvas>
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="row">
										<div class="col-md-6">
											<h3 class="text-center">Jumlah Dana Desa</h3>
											<div class="text-center" id="chart-title"><?php echo !empty($title) ? $title : "" ?></div>
											<div id="grafik-rkpdes" style="height: 300px"></div>
											<p><strong>*Dalam jutaan</strong></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<script type="text/javascript">
					jQuery(document).ready(function($){
						Morris.Bar({
							element: 'grafik-kegiatan',
							axes: true,
							data: <?php echo json_encode($statistik['kegiatan']) ?>,
							xkey: 'a',
							ykeys: ['b', 'c', 'd'],
							labels: ['Total Kegiatan', 'Terlaksana', 'Belum Terlaksana'],
							barColors: ['#21a9e1', '#00a651', '#cc2424'],
							parseTime:false
						});
						Morris.Bar({
							element: 'grafik-kelamin',
							axes: true,
							data: <?php echo json_encode($statistik['kelamin']) ?>,
							xkey: 'a',
							ykeys: ['b', 'c'],
							labels: ['Laki-laki', 'Perempuan'],
							barColors: ['#21a9e1', '#00a651'],
							parseTime:false
						});
						Morris.Bar({
							element: 'grafik-profil',
							axes: true,
							data: <?php echo json_encode($statistik['profil']) ?>,
							xkey: 'a',
							ykeys: ['b'],
							labels: ['Total Kelompok'],
							barColors: ['#21a9e1'],
							parseTime:false
						});
						Morris.Bar({
							element: 'grafik-bidang',
							axes: true,
							data: <?php echo json_encode($statistik['bidang']) ?>,
							xkey: 'a',
							ykeys: ['b', 'c', 'd', 'e', 'f', 'g'],
							labels: ['Pertanian-Tan. Pangan', 'Perkebunan', 'Buah-Buahan', 'Peternakan', 'Perikanan', 'Pengolahan Hasil'],
							barColors: ['#21a9e1', '#00a651', '#cc2424', '#21a9e1', '#00a651', '#cc2424'],
							parseTime:false
						});
						Morris.Bar({
							element: 'grafik-teknik',
							axes: true,
							data: <?php echo json_encode($statistik['teknik']) ?>,
							xkey: 'a',
							ykeys: ['b', 'c', 'd', 'e'],
							labels: ['Kelompok Sudah', 'Kelompok Belum', 'Masyarakat Sudah', 'Masyarakat Belum'],
							barColors: ['#00a651', '#cc2424', '#00a651', '#cc2424'],
							parseTime:false
						});
						new Chart('grafik-evkin', {
							type: 'radar',
							data: {
								labels: ['Kelembagaan Kelompok', 'Dinamika Kelompok', 'Pertemuan Kelompok', 'Administrasi Kelompok', 'Kegiatan Usaha Tani', 'Hasil Produksi', 'Kontribusi Masyarakat', 'Kemitraan Kelompok', 'Keberlanjutan'],
								datasets: [{
									"data": <?php echo json_encode($statistik['radar']) ?>,
									"label": 'Kelas Kemampuan Kelompok',
									"fill": true,
										"backgroundColor": "rgba(54, 162, 235, 0.2)",
										"borderColor": "rgb(54, 162, 235)",
										"pointBackgroundColor": "rgb(54, 162, 235)",
										"pointBorderColor": "#fff",
										"pointHoverBackgroundColor": "#fff",
										"pointHoverBorderColor": "rgb(54, 162, 235)"
								}]
							},
							options: {
								maintainAspectRatio: true,
								spanGaps: false,
								elements: {
									line: {
										tension: 0.000001
									}
								},
								plugins: {
									filler: {
										propagate: false
									},
									samples_filler_analyser: {
										target: 'chart-analyser'
									}
								}
							}
						});
						Morris.Bar({
							element: 'grafik-rkpdes',
							axes: true,
							data: <?php echo json_encode($statistik['rkpdes']) ?>,
							xkey: 'a',
							ykeys: ['b'],
							labels: ['Jumlah Dana Desa'],
							barColors: ['#21a9e1'],
							parseTime:false
						});

						$('#kabupaten_id').select2({
							//minimumInputLength: 3,
							allowClear: true,
							minimumResultsForSearch: 10,
							ajax: {
								url: "<?php echo base_url('dashboard/get_lokasi') ?>",
								dataType: 'json',
								data: function (term, page) {
									return{
										where: 'kabupaten',
										provinsi_id: $('#provinsi_id').val(),
										term: term,
									}
								},
								results: function (data, page) {
									return {
										results: data
									};
								}
							}
						});
						$('#kecamatan_id').select2({
							//minimumInputLength: 3,
							allowClear: true,
							minimumResultsForSearch: 10,
							ajax: {
								url: "<?php echo base_url('dashboard/get_lokasi') ?>",
								dataType: 'json',
								data: function (term, page) {
									return{
										where: 'kecamatan',
										kabupaten_id: $('#kabupaten_id').val(),
										term: term,
									}
								},
								results: function (data, page) {
									return {
										results: data
									};
								}
							}
						});
						$('#desa_id').select2({
							//minimumInputLength: 3,
							allowClear: true,
							minimumResultsForSearch: 10,
							ajax: {
								url: "<?php echo base_url('dashboard/get_lokasi') ?>",
								dataType: 'json',
								data: function (term, page) {
									return{
										where: 'desa',
										kecamatan_id: $('#kecamatan_id').val(),
										term: term,
									}
								},
								results: function (data, page) {
									return {
										results: data
									};
								}
							}
						});

						<?php if(!empty($kabupaten_selected)): ?> $('#kabupaten_id').select2('data', <?php echo json_encode($kabupaten_selected) ?>); <?php endif ?>
						<?php if(!empty($kecamatan_selected)): ?> $('#kecamatan_id').select2('data', <?php echo json_encode($kecamatan_selected) ?>); <?php endif ?>
						<?php if(!empty($desa_selected)): ?> $('#desa_id').select2('data', <?php echo json_encode($desa_selected) ?>); <?php endif ?>
						$('#opsi').on('change', function() {
						if ( this.value == '2')
						{
							//$("#dari").show();
							$("#opsi2").hide();
							$("#sampai").val('');
						}
						else
						{
							//$("#tgl").hide();
							$("#opsi2").show();
						}
						});
						$('.btn-filter').click(function(){
							$('#form-filter').slideToggle();
						});
					});
				</script>