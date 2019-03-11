<?php if ($this->session->flashdata('success_message')) : ?>
    <div class="alert alert-success"><?php echo $this->session->flashdata('success_message'); ?></div>
<?php endif;?>
<?php if ($this->session->flashdata('error_message')) : ?>
    <div class="alert alert-danger"><?php echo $this->session->flashdata('error_message'); ?></div>
<?php endif;?>
	<p>

<form id="form-filter" class="form-horizontal" >
  <div class="form-group">
		<label for="country" class="col-sm-2 control-label">Provinsi</label>
		<div class="col-sm-6">
			<select name="prov" class="form-control" id="prov" placeholder="Provinsi" autocomplete="off">
				<option value="">Pilih Provinsi</option>
			<?php foreach ($list_provinsi as $provinsi): ?>
				<option value="<?php echo $provinsi->provinsi ?>"><?php echo $provinsi->provinsi ?></option>
			<?php endforeach ?>
			</select>
		</div>
	</div>
	<div class="form-group">
      <label for="keyword" class="col-sm-2 control-label">Pencarian</label>
      <div class="col-sm-3">
          <select class="form-control" id="cari">
              <option value="Desa">Desa</option>
              <option value="Kecamatan">Kecamatan</option>
              <option value="Kabupaten">Kabupaten</option>
          </select>
      </div>
      <div class="col-sm-3">
          <input type="text" class="form-control" id="keyword">
      </div>
  </div>
	<!-- <div class="form-group">
		<label for="country" class="col-sm-2 control-label">Kabupaten</label>
		<div class="col-sm-5">
		<select name="kab" class="form-control" id="kab" placeholder="Kabupaten" autocomplete="off">
			<option value=""></option>
		</select>
		</div>
	</div>
	<div class="form-group">
		<label for="country" class="col-sm-2 control-label">Kecamatan/Distrik</label>
		<div class="col-sm-5">
		<select name="kec" class="form-control" id="kec" placeholder="Kecamatan/Distrik" autocomplete="off">
			<option value=""></option>
		</select>
		</div>
	</div>
	<div class="form-group">
		<label for="country" class="col-sm-2 control-label">Desa/Kampung</label>
		<div class="col-sm-5">
		<select name="des" class="form-control" id="des" placeholder="Desa/Kampung" autocomplete="off">
			<option value=""></option>
		</select>
		</div>
	</div> -->
  <div class="form-group">
		<label for="country" class="col-sm-2 control-label">Status Desa</label>
		<div class="col-sm-5">
      <select name="status" class="form-control" id="status" placeholder="Status" autocomplete="off">
        <option value="">Pilih Status</option>
      <?php foreach ($list_status as $status): ?>
        <option value="<?php echo $status->status ?>"><?php echo $status->status ?></option>
      <?php endforeach ?>
      </select>
		</div>
	</div>
  <div id="form-tambahan" style="display: none;">
                        <div class="col-xs-6">
                            <h2>Kesehatan</h2>
                             <div class="form-group">
                                <label for="i1" class="col-sm-6 control-label">Ketersediaan tempat praktek dokter (i9)</label>
                                <div class="col-sm-3">
                                    <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="i9">
                                </div>

                                <div class="col-sm-3">
                                    <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="kei9">
                                </div>
                                </div>
                                <div class="form-group">
                                <label for="i1" class="col-sm-6 control-label">Ketersediaan tempat praktek bidan (i10)</label>
                                <div class="col-sm-3">
                                    <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="i10">
                                </div>

                                <div class="col-sm-3">
                                    <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="kei10">
                                </div>
                                </div>
                                <div class="form-group">
                                    <label for="i1" class="col-sm-6 control-label">Ketersediaan poskesdes atau polindes (i11)</label>
                                    <div class="col-sm-3">
                                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="i11">
                                    </div>

                                    <div class="col-sm-3">
                                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="kei11">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="i1" class="col-sm-6 control-label">Ketersediaan apotek (i12)</label>
                                    <div class="col-sm-3">
                                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="i12">
                                    </div>

                                    <div class="col-sm-3">
                                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="kei12">
                                    </div>
                                </div>
                                <!-- new -->
                                <div class="form-group">
                                    <label for="i1" class="col-sm-6 control-label">Sumber air untuk minum (i21)</label>
                                    <div class="col-sm-3">
                                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="i21">
                                    </div>

                                    <div class="col-sm-3">
                                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="kei21">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="i1" class="col-sm-6 control-label">Sumber air untuk mandi/cuci (i22)</label>
                                    <div class="col-sm-3">
                                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="i22">
                                    </div>

                                    <div class="col-sm-3">
                                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="kei22">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="i1" class="col-sm-6 control-label">Fasilitas buang air besar (i23)</label>
                                    <div class="col-sm-3">
                                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="i23">
                                    </div>

                                    <div class="col-sm-3">
                                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="kei23">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="i1" class="col-sm-6 control-label">Penanganan kejadian luar biasa (i34)</label>
                                    <div class="col-sm-3">
                                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="i34">
                                    </div>

                                    <div class="col-sm-3">
                                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="kei34">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="i1" class="col-sm-6 control-label">Penanganan gizi buruk (i35)</label>
                                    <div class="col-sm-3">
                                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="i35">
                                    </div>

                                    <div class="col-sm-3">
                                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="kei35">
                                    </div>
                                </div>
                        </div>



                        <!-- pemerintahan -->
                        <div class="col-xs-6">
                            <h2>Pemerintahan</h2>
                                <div class="form-group">
                                    <label for="i1" class="col-sm-6 control-label">Kelengkapan pemerintahan desa (i38)</label>
                                    <div class="col-sm-3">
                                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="i38">
                                    </div>

                                    <div class="col-sm-3">
                                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="kei38">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="i1" class="col-sm-6 control-label">Otonomi desa (i39)</label>
                                    <div class="col-sm-3">
                                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="i39">
                                    </div>

                                    <div class="col-sm-3">
                                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="kei39">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="i1" class="col-sm-6 control-label">Aset/kekayaan desa (i40)</label>
                                    <div class="col-sm-3">
                                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="i40">
                                    </div>

                                    <div class="col-sm-3">
                                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="kei40">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="i1" class="col-sm-6 control-label">Kualitas SDM kepala desa (i41)</label>
                                    <div class="col-sm-3">
                                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="i41">
                                    </div>

                                    <div class="col-sm-3">
                                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="kei41">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="i1" class="col-sm-6 control-label">Kualitas SDM sekretaris desa (i42)</label>
                                    <div class="col-sm-3">
                                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="i42">
                                    </div>

                                    <div class="col-sm-3">
                                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="kei42">
                                    </div>
                                </div>

                        </div>
                        <!-- pendidikan -->
                         <div class="col-xs-6">
                            <h2>Pendidikan</h2>
                                <div class="form-group">
                                    <label for="i1" class="col-sm-6 control-label">Ketersediaan dan Akses TK/RA/BA (i1)</label>
                                    <div class="col-sm-3">
                                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="i1">
                                    </div>

                                    <div class="col-sm-3">
                                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="kei1">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="i1" class="col-sm-6 control-label">Ketersediaan dan Akses SD Sederajat (i2)</label>
                                    <div class="col-sm-3">
                                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="i2">
                                    </div>

                                    <div class="col-sm-3">
                                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="kei2">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="i1" class="col-sm-6 control-label">Ketersediaan dan Akses SMP Sederajat (i3)</label>
                                    <div class="col-sm-3">
                                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="i3">
                                    </div>

                                    <div class="col-sm-3">
                                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="kei3">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="i1" class="col-sm-6 control-label">Ketersediaan dan Akses SMA Sederajat (i4)</label>
                                    <div class="col-sm-3">
                                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="i4">
                                    </div>

                                    <div class="col-sm-3">
                                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="kei4">
                                    </div>
                                </div>
                        </div>

                         <!-- Ekonomi -->
                         <div class="col-xs-6">
                            <h2>Ekonomi</h2>
                                <div class="form-group">
                                    <label for="i1" class="col-sm-6 control-label">Ketersediaan pertokoan/minimarket (i13)</label>
                                    <div class="col-sm-3">
                                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="i13">
                                    </div>

                                    <div class="col-sm-3">
                                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="kei13">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="i1" class="col-sm-6 control-label">Ketersediaan pasar (i14)</label>
                                    <div class="col-sm-3">
                                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="i14">
                                    </div>

                                    <div class="col-sm-3">
                                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="kei14">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="i1" class="col-sm-6 control-label">Ketersediaan rumah makan/warung (i15)</label>
                                    <div class="col-sm-3">
                                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="i15">
                                    </div>

                                    <div class="col-sm-3">
                                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="kei15">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="i1" class="col-sm-6 control-label">Ketersediaan akomodasi hotel/penginapan (i16)</label>
                                    <div class="col-sm-3">
                                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="i16">
                                    </div>

                                    <div class="col-sm-3">
                                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="kei16">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="i1" class="col-sm-6 control-label">Ketersediaan bank (i17)</label>
                                    <div class="col-sm-3">
                                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="i17">
                                    </div>

                                    <div class="col-sm-3">
                                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="kei17">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="i1" class="col-sm-6 control-label">Elektrifikasi (i18)</label>
                                    <div class="col-sm-3">
                                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="i18">
                                    </div>

                                    <div class="col-sm-3">
                                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="kei18">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="i1" class="col-sm-6 control-label">Kondisi penerangan di jalan utama (i19)</label>
                                    <div class="col-sm-3">
                                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="i19">
                                    </div>

                                    <div class="col-sm-3">
                                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="kei19">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="i1" class="col-sm-6 control-label">Bahan bakar untuk memasak (i20)</label>
                                    <div class="col-sm-3">
                                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="i20">
                                    </div>

                                    <div class="col-sm-3">
                                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="kei20">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="i1" class="col-sm-6 control-label">Fasilitas buang air besar (i24)</label>
                                    <div class="col-sm-3">
                                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="i24">
                                    </div>

                                    <div class="col-sm-3">
                                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="kei24">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="i1" class="col-sm-6 control-label">Ketersediaan internet & pengiriman pos/barang (i25)</label>
                                    <div class="col-sm-3">
                                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="i25">
                                    </div>

                                    <div class="col-sm-3">
                                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="kei25">
                                    </div>
                                </div>


                        </div>
                        <!-- Transportasi -->
                        <div class="col-xs-6">
                            <h2>Transportasi</h2>

                                <div class="form-group">
                                    <label for="i1" class="col-sm-6 control-label">Lalu lintas dan kualitas jalan (i26)</label>
                                    <div class="col-sm-3">
                                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="i26">
                                    </div>

                                    <div class="col-sm-3">
                                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="kei26">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="i1" class="col-sm-6 control-label">Aksesibilitas jalan (i27)</label>
                                    <div class="col-sm-3">
                                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="i27">
                                    </div>

                                    <div class="col-sm-3">
                                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="kei27">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="i1" class="col-sm-6 control-label">Ketersediaan angkutan umum (i28)</label>
                                    <div class="col-sm-3">
                                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="i28">
                                    </div>

                                    <div class="col-sm-3">
                                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="kei28">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="i1" class="col-sm-6 control-label">Operasional angkutan umum (i29)</label>
                                    <div class="col-sm-3">
                                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="i29">
                                    </div>

                                    <div class="col-sm-3">
                                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="kei29">
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="i1" class="col-sm-6 control-label">Waktu transportasi kekantor camat (i30)</label>
                                    <div class="col-sm-3">
                                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="i30">
                                    </div>

                                    <div class="col-sm-3">
                                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="kei30">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="i1" class="col-sm-6 control-label">Biaya transportasi kekantor camat (i31)</label>
                                    <div class="col-sm-3">
                                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="i31">
                                    </div>

                                    <div class="col-sm-3">
                                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="kei31">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="i1" class="col-sm-6 control-label">Waktu transportasi kekantor bupati(i32)</label>
                                    <div class="col-sm-3">
                                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="i32">
                                    </div>

                                    <div class="col-sm-3">
                                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="kei32">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="i1" class="col-sm-6 control-label">Biaya transportasi kekantor bupati (i33)</label>
                                    <div class="col-sm-3">
                                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="i33">
                                    </div>

                                    <div class="col-sm-3">
                                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="kei33">
                                    </div>
                                </div>
                        </div>

                    </div>
                    <div class="form-group">
                  		<label for="LastName" class="col-sm-2 control-label"></label>
                      <div class="col-sm-4">
                          <button type="button" class="btn btn-success" id="btn-cari">Advance Search</button>
                      </div>
                  		<div class="col-sm-4">
                  			<button type="button" id="btn-filter" class="btn btn-primary">Filter</button>
                  			<button type="reset" id="btn-reset" class="btn btn-default">Reset</button>
                  		</div>
                  	</div>
                    </form>
                        </div>

                    </div>

</form>
<table id="mytable" class="table table-bordered datatable">
	<thead>
		<tr>
			<th>NO</th>
      <th>PROVINSI</th>
			<th>KABUPATEN</th>
			<th>KECAMATAN</th>
			<th>DESA</th>
			<th>STATUS</th>
			<th>AKSI</th>
		</tr>

	</thead>
	<tbody>
	</tbody>
	<!--
	<tfoot>
		<tr>
			<th>No</th>
			<th>PROVINSI</th>
			<th>LUAS(Ha)</th>
		</tr>
	</tfoot>
	-->
</table>

<script src="<?php echo base_url('assets/js/datatables/jquery.dataTables.min.js')?>"></script>
<script src="<?php echo base_url('assets/js/datatables/dataTables.bootstrap.min.js')?>"></script>
<script src="<?php echo base_url('assets/js/datatables/fixedHeader/dataTables.fixedHeader.min.js')?>"></script>
<script type="text/javascript">
var table;
jQuery(document).ready(function($){
    //datatables
    table = $('#mytable').DataTable({

        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [],
        "bFilter": false,
        "pagingType": "full_numbers",
        "ajax": {
            "url": "<?php echo base_url('ipd/ajax_list')?>",
            "type": "POST",
            "data": function ( data ) {
                data.provinsi = $('#prov').val();
                data.kabupaten = $('#kab').val();
                data.kecamatan = $('#kec').val();
                data.desa = $('#des').val();
                data.cari = $('#cari').val();
                data.keyword = $('#keyword').val();
                data.status = $('#status').val();
                data.operator = $('#operator').val();
                data.i1 = $('#i1').val();
                data.kei1 = $('#kei1').val();
                data.i2 = $('#i2').val();
                data.kei2 = $('#kei2').val();
                data.i3 = $('#i3').val();
                data.kei3 = $('#kei3').val();
                data.i4 = $('#i4').val();
                data.kei4 = $('#kei4').val();
                data.i5 = $('#i5').val();
                data.kei5 = $('#kei5').val();
                data.i6 = $('#i6').val();
                data.kei6 = $('#kei6').val();
                data.i7 = $('#i7').val();
                data.kei7 = $('#kei7').val();
                data.i8 = $('#i8').val();
                data.kei8 = $('#kei8').val();
                data.i9 = $('#i9').val();
                data.kei9 = $('#kei9').val();
                data.i10 = $('#i10').val();
                data.kei10 = $('#kei10').val();
                data.i11 = $('#i11').val();
                data.kei11 = $('#kei11').val();
                data.i12 = $('#i12').val();
                data.kei12 = $('#kei12').val();
                data.i13 = $('#i13').val();
                data.kei13 = $('#kei13').val();
                data.i14 = $('#i14').val();
                data.kei14 = $('#kei14').val();
                data.i15 = $('#i15').val();
                data.kei15 = $('#kei15').val();
                data.i16 = $('#i16').val();
                data.kei16 = $('#kei16').val();
                data.i17 = $('#i17').val();
                data.kei17 = $('#kei17').val();
                data.i18 = $('#i18').val();
                data.kei18 = $('#kei18').val();
                data.i19 = $('#i19').val();
                data.kei19 = $('#kei19').val();
                data.i20 = $('#i20').val();
                data.kei20 = $('#kei20').val();
                data.i21 = $('#i21').val();
                data.kei21 = $('#kei21').val();
                data.i22 = $('#i22').val();
                data.kei22 = $('#kei22').val();
                data.i23 = $('#i23').val();
                data.kei23 = $('#kei23').val();
                data.i24 = $('#i24').val();
                data.kei24 = $('#kei24').val();
                data.i25 = $('#i25').val();
                data.kei25 = $('#kei25').val();
                data.i26 = $('#i26').val();
                data.kei26 = $('#kei26').val();
                data.i27 = $('#i27').val();
                data.kei27 = $('#kei27').val();
                data.i28 = $('#i28').val();
                data.kei28 = $('#kei28').val();
                data.i29 = $('#i29').val();
                data.kei29 = $('#kei29').val();
                data.i30 = $('#i30').val();
                data.kei30 = $('#kei30').val();
                data.i31 = $('#i31').val();
                data.kei31 = $('#kei31').val();
                data.i32 = $('#i32').val();
                data.kei32 = $('#kei32').val();
                data.i33 = $('#i33').val();
                data.kei33 = $('#kei33').val();
                data.i34 = $('#i34').val();
                data.kei34 = $('#kei34').val();
                data.i35 = $('#i35').val();
                data.kei35 = $('#kei35').val();
                data.i36 = $('#i36').val();
                data.kei36 = $('#kei36').val();
                data.i37 = $('#i37').val();
                data.kei37 = $('#kei37').val();
                data.i38 = $('#i38').val();
                data.kei38 = $('#kei38').val();
                data.i39 = $('#i39').val();
                data.kei39 = $('#kei39').val();
                data.i40 = $('#i40').val();
                data.kei40 = $('#kei40').val();
                data.i41 = $('#i41').val();
                data.kei41 = $('#kei41').val();
                data.i42 = $('#i42').val();
                data.kei42 = $('#kei42').val();
                
            }
        },

        //Set column definition initialisation properties.
        "columnDefs": [
        {
            "targets": [ 0 ], //first column / numbering column
            "orderable": false, //set not orderable
        },
        ],

    });



    $('#btn-filter').click(function(){ //button filter event click
        table.ajax.reload();  //just reload table
    });
    $('#btn-cari').click(function(){
        $('#form-tambahan').slideToggle();
    });
    $('#btn-reset').click(function(){ //button reset event click
        $('#form-filter')[0].reset();
        table.ajax.reload();  //just reload table
    });
    $('#confirm-delete').on('show.bs.modal', function(e) {
        $(this).find('.btn-delete').attr('href', $(e.relatedTarget).data('href'));
    });



    $(function(){
  	$.ajaxSetup({
  	type:"POST",
  	url: "<?php echo base_url('ipd/ambil_data') ?>",
  	cache: false,
  	});

  	$("#prov").change(function(){
  			var value=$(this).val();
  			if(value>0){
  			$.ajax({
  			data:{modul:'kab',id:value},
  			success: function(respond){
  			$("#kab").html(respond);
  			}
  			})
  			}
  		});

  	$("#kab").change(function(){

  		var value=$(this).val();
  		if(value>0){
  		$.ajax({
  		data:{modul:'kec',id:value},
  		success: function(respond){
  		$("#kec").html(respond);
  		}
  		})
  		}
  	});


  	$("#kec").change(function(){
  		var value=$(this).val();
  		if(value>0){
  		$.ajax({
  		data:{modul:'des',id:value},
  		success: function(respond){
  		$("#des").html(respond);
  		}
  		})
  		}
  	});
})

});

</script>
