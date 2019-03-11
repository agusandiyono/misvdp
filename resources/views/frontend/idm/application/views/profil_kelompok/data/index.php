<?php if ($this->session->flashdata('success_message')) : ?>
    <div class="alert alert-success"><?php echo $this->session->flashdata('success_message'); ?></div>
<?php endif;?>
<?php if ($this->session->flashdata('error_message')) : ?>
    <div class="alert alert-danger"><?php echo $this->session->flashdata('error_message'); ?></div>
<?php endif;?>
	<p>
<?php if($this->permission->check_permission($modules, 'add')): ?>
		<a class="btn btn-blue btn-icon icon-left" href="<?php echo base_url('profil_kelompok/tambah'); ?>">
			<i class="entypo-plus"></i>
			Tambah Profil Kelompok
		</a> &nbsp;
		<button class="btn btn-blue btn-icon icon-left" data-load-remote="<?php echo base_url('profil_kelompok/modal/impor'); ?>" data-toggle="modal" data-target="#modal_global">
			<i class="entypo-upload"></i>
			Impor Profil Kelompok
		</button> &nbsp;
		<button class="btn btn-blue btn-icon icon-left" data-load-remote="<?php echo base_url('profil_kelompok/modal/ekspor'); ?>" data-toggle="modal" data-target="#modal_global">
			<i class="entypo-download"></i>
			Ekspor Profil Kelompok
		</button> &nbsp;
<?php endif ?>
<form id="form-filter" class="form-horizontal" >
	<div class="form-group">
		<label for="country" class="col-sm-2 control-label">Bidang Usaha</label>
		<div class="col-sm-5">
			<select name="kegiatan" class="form-control" id="kegiatan" placeholder="Kegiatan" autocomplete="off">
				<option value="">Pilih Bidang Usaha </option>
				<option value="Perkenalan dan Koordinasi">Pertanian-Tan. Pangan</option>
				<option value="Sosialisasi, Promosi dan Penyadaran">Perkebunan</option>
				<option value="Musyawarah Pemilihan Pendamping Kampung">Buah-Buahan</option>
				<option value="Penggalian situasi dan Kondisi">Peternakan</option>
				<option value="Musyawarah  dan Fasilitasi Penyusunan RKP Desa">Perikanan</option>
				<option value="Fasilitasi Pelatihan P3D dan Teknik">Pengolahan Hasil</option>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="country" class="col-sm-2 control-label">Provinsi</label>
		<div class="col-sm-5">
			<select name="prov" class="form-control" id="prov" placeholder="Provinsi" autocomplete="off">
				<option value="">Pilih Provinsi</option>
			<?php foreach ($list_provinsi as $provinsi): ?>
				<option value="<?php echo $provinsi->provinsi_code ?>"><?php echo $provinsi->provinsi_code ?> - <?php echo $provinsi->provinsi_name ?></option>
			<?php endforeach ?>
			</select>
		</div>
	</div>
	<div class="form-group">	
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
	</div>               


	<div class="form-group">
		<label for="LastName" class="col-sm-2 control-label"></label>
		<div class="col-sm-4">
			<button type="button" id="btn-filter" class="btn btn-primary">Filter</button>
			<button type="reset" id="btn-reset" class="btn btn-default">Reset</button>
		</div>
	</div>
</form>
<table id="mytable" class="table table-bordered datatable">
	<thead>
		<tr>			
			<th>NO.</th>
			<th>No. KELOMPOK</th>
			<th>PEWAWANCARA</th>
			<th>TANGGAL</th>
			<th>NAMA KELOMPOK</th>
			<th>JUMLAH ANGGOTA</th>
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
            "url": "<?php echo base_url('profil_kelompok/ajax_list')?>",
            "type": "POST",
            "data": function ( data ) {
                data.provinsi_id = $('#prov').val();                
                data.kabupaten_id = $('#kab').val();                
                data.kecamatan_id = $('#kec').val();                
                data.desa_id = $('#des').val();                
                data.profil_kelompok = $('#profil_kelompok').val();  
                                              
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
	url: "<?php echo base_url('profil_kelompok/ambil_data') ?>",
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

