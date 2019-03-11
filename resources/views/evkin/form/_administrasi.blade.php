<h4 class="form-section font-blue">2.3 Administrasi dan Kesekretariatan</h4>

    <h5 class="form-section font-blue">2.3.1. Papan Pengumuman</h5>
    <!-- Ketua Form Input -->
    <div class="form-group @if ($errors->has('papan_pengumuman')) has-error @endif">
      <label class="control-label col-md-3">a. Keberadaan Papan Pengumuman
        <span class="required"> * </span>
      </label>
      <div class="col-md-2">
      {!! Form::select('papan_pengumuman', ['1' => 'Ada', '0' => 'Tidak'], null, ['class' => 'form-control', 'placeholder' => 'Pilih...' , 'required', 'id' => 'papan_pengumuman', 'autocomplete' => 'off']) !!}
      </div>
      <div class="col-md-4">
      {{ Form::text('ket_papan_pengumuman', null, ['class' => 'form-control', 'placeholder' => 'Keterangan']) }}
      </div>
      @if ($errors->has('papan_pengumuman')) <p class="help-block">{{ $errors->first('papan_pengumuman') }}</p> @endif
    </div>

    <div class="form-group">
      <div class="col-md-3">
        
      </div>
      <div class="col-md-6">
      <code>Bila tidak memilik papan penguman, lanjut ke 2.3.2</code>
      </div>
    </div>

    <!-- Ketua Form Input -->
    <div class="form-group @if ($errors->has('fungsi_papan_pengumuman')) has-error @endif">
      <label class="control-label col-md-3">b. Fungsi papan pengumuman
        <span class="required"> * </span>
      </label>
      <div class="col-md-2">
      {!! Form::select('fungsi_papan_pengumuman', ['1' => 'Berfungsi', '0' => 'Tidak Berfungsi'], null, ['class' => 'form-control', 'placeholder' => 'Pilih...', 'required' , 'id' => 'fungsi_papan_pengumuman', 'disabled', 'autocomplete' => 'off']) !!}
      </div>
      <div class="col-md-4">
      {{ Form::text('ket_fungsi_papan_pengumuman', null, ['class' => 'form-control', 'placeholder' => 'Keterangan']) }}
      </div>
      @if ($errors->has('fungsi_papan_pengumuman')) <p class="help-block">{{ $errors->first('fungsi_papan_pengumuman') }}</p> @endif
    </div>

    <!-- Ketua Form Input -->
    <div class="form-group @if ($errors->has('kondisi_papan_pengumuman')) has-error @endif">
      <label class="control-label col-md-3">c. Kondisi papan pengumuman
        <span class="required"> * </span>
      </label>
      <div class="col-md-2">
      {!! Form::select('kondisi_papan_pengumuman', ['1' => 'Baik', '0' => 'Tidak Baik'], null, ['class' => 'form-control', 'placeholder' => 'Pilih...', 'required' , 'id' => 'kondisi_papan_pengumuman', 'disabled', 'autocomplete' => 'off']) !!}
      </div>
      <div class="col-md-4">
      {{ Form::text('ket_kondisi_papan_pengumuman', null, ['class' => 'form-control', 'placeholder' => 'Keterangan']) }}
      </div>
      @if ($errors->has('kondisi_papan_pengumuman')) <p class="help-block">{{ $errors->first('kondisi_papan_pengumuman') }}</p> @endif
    </div>

    <h5 class="form-section font-blue">2.3.2. Kotak Saran</h5>
    <!-- Ketua Form Input -->
    <div class="form-group @if ($errors->has('kotak_saran')) has-error @endif">
      <label class="control-label col-md-3">a. Keberadaan Kotak Saran
        <span class="required"> * </span>
      </label>
      <div class="col-md-2">
      {!! Form::select('kotak_saran', ['1' => 'Ada', '0' => 'Tidak Ada'], null, ['class' => 'form-control', 'placeholder' => 'Pilih...' ,  'required',  'id' => 'kotak_saran', 'autocomplete' => 'off']) !!}
      </div>
      <div class="col-md-4">
      {{ Form::text('ket_kotak_saran', null, ['class' => 'form-control', 'placeholder' => 'Keterangan']) }}
      </div>
      @if ($errors->has('kotak_saran')) <p class="help-block">{{ $errors->first('kotak_saran') }}</p> @endif
    </div>

    <div class="form-group">
      <div class="col-md-3">
        
      </div>
      <div class="col-md-6">
      <code>Bila tidak memilik Kotak saran, lanjut ke 2.4</code>
      </div>
    </div>

    <!-- Ketua Form Input -->
    <div class="form-group @if ($errors->has('fungsi_kotak_saran')) has-error @endif">
      <label class="control-label col-md-3">b. Fungsi dan manfaat Kotak Saran
        <span class="required"> * </span>
      </label>
      <div class="col-md-2">
      {!! Form::select('fungsi_kotak_saran', ['1' => 'Ada', '0' => 'Tidak Ada'], null, ['class' => 'form-control', 'placeholder' => 'Pilih...', 'required' , 'id' => 'fungsi_kotak_saran', 'disabled', 'autocomplete' => 'off']) !!}
      </div>
      <div class="col-md-4">
      {{ Form::text('ket_fungsi_kotak_saran', null, ['class' => 'form-control', 'placeholder' => 'Keterangan']) }}
      </div>
      @if ($errors->has('fungsi_kotak_saran')) <p class="help-block">{{ $errors->first('fungsi_kotak_saran') }}</p> @endif
    </div>

    <!-- Ketua Form Input -->
    <div class="form-group @if ($errors->has('kondisi_kotak_saran')) has-error @endif">
      <label class="control-label col-md-3">c. Kondisi Kota Saran
        <span class="required"> * </span>
      </label>
      <div class="col-md-2">
      {!! Form::select('kondisi_kotak_saran', ['1' => 'Baik', '0' => 'Tidak Baik'], null, ['class' => 'form-control', 'placeholder' => 'Pilih...', 'required' , 'id' => 'kondisi_kotak_saran', 'disabled', 'autocomplete' => 'off']) !!}
      </div>
      <div class="col-md-4">
      {{ Form::text('ket_kondisi_kotak_saran', null, ['class' => 'form-control', 'placeholder' => 'Keterangan']) }}
      </div>
      @if ($errors->has('kondisi_kotak_saran')) <p class="help-block">{{ $errors->first('kondisi_kotak_saran') }}</p> @endif
    </div>

<h4 class="form-section font-blue">2.4 Buku Administrasi</h4>
    <!-- Ketua Form Input -->
    <div class="form-group @if ($errors->has('buku_tamu')) has-error @endif">
      <label class="control-label col-md-3">a. Buku Tamu
        <span class="required"> * </span>
      </label>
      <div class="col-md-2">
      {!! Form::select('buku_tamu', ['1' => 'Ada', '0' => 'Tidak Ada'], null, ['class' => 'form-control', 'placeholder' => 'Pilih...' , 'id' => 'buku_tamu', 'required']) !!}
      </div>
      <div class="col-md-4">
      {{ Form::text('ket_buku_tamu', null, ['class' => 'form-control', 'placeholder' => 'Keterangan']) }}
      </div>
      @if ($errors->has('buku_tamu')) <p class="help-block">{{ $errors->first('buku_tamu') }}</p> @endif
    </div>

    <!-- Ketua Form Input -->
    <div class="form-group @if ($errors->has('buku_anggota')) has-error @endif">
      <label class="control-label col-md-3">b. Buku Anggota
        <span class="required"> * </span>
      </label>
      <div class="col-md-2">
      {!! Form::select('buku_anggota', ['1' => 'Ada', '0' => 'Tidak Ada'], null, ['class' => 'form-control', 'placeholder' => 'Pilih...' , 'id' => 'buku_anggota', 'required']) !!}
      </div>
      <div class="col-md-4">
      {{ Form::text('ket_buku_anggota', null, ['class' => 'form-control', 'placeholder' => 'Keterangan']) }}
      </div>
      @if ($errors->has('buku_anggota')) <p class="help-block">{{ $errors->first('buku_anggota') }}</p> @endif
    </div>

    <!-- Ketua Form Input -->
    <div class="form-group @if ($errors->has('notulensi_rapat')) has-error @endif">
      <label class="control-label col-md-3">c. Buku Notulensi Rapat
        <span class="required"> * </span>
      </label>
      <div class="col-md-2">
      {!! Form::select('notulensi_rapat', ['1' => 'Ada', '0' => 'Tidak Ada'], null, ['class' => 'form-control', 'placeholder' => 'Pilih...' , 'id' => 'notulensi_rapat', 'required']) !!}
      </div>
      <div class="col-md-4">
      {{ Form::text('ket_notulensi_rapat', null, ['class' => 'form-control', 'placeholder' => 'Keterangan']) }}
      </div>
      @if ($errors->has('notulensi_rapat')) <p class="help-block">{{ $errors->first('notulensi_rapat') }}</p> @endif
    </div>

     <!-- Ketua Form Input -->
     <div class="form-group @if ($errors->has('inventaris_barang')) has-error @endif">
      <label class="control-label col-md-3">d. Buku inventaris barang
        <span class="required"> * </span>
      </label>
      <div class="col-md-2">
      {!! Form::select('inventaris_barang', ['1' => 'Ada', '0' => 'Tidak Ada'], null, ['class' => 'form-control', 'placeholder' => 'Pilih...' , 'id' => 'inventaris_barang', 'required']) !!}
      </div>
      <div class="col-md-4">
      {{ Form::text('ket_inventaris_barang', null, ['class' => 'form-control', 'placeholder' => 'Keterangan']) }}
      </div>
      @if ($errors->has('inventaris_barang')) <p class="help-block">{{ $errors->first('inventaris_barang') }}</p> @endif
    </div>

    <!-- Ketua Form Input -->
    <div class="form-group @if ($errors->has('daftar_hadir_rapat')) has-error @endif">
      <label class="control-label col-md-3">e. Daftar hadir rapat/kegiatan
        <span class="required"> * </span>
      </label>
      <div class="col-md-2">
      {!! Form::select('daftar_hadir_rapat', ['1' => 'Ada', '0' => 'Tidak Ada'], null, ['class' => 'form-control', 'placeholder' => 'Pilih...' , 'id' => 'daftar_hadir_rapat', 'required']) !!}
      </div>
      <div class="col-md-4">
      {{ Form::text('ket_daftar_hadir_rapat', null, ['class' => 'form-control', 'placeholder' => 'Keterangan']) }}
      </div>
      @if ($errors->has('daftar_hadir_rapat')) <p class="help-block">{{ $errors->first('daftar_hadir_rapat') }}</p> @endif
    </div>

    <h4 class="form-section font-blue">2.5 Buku Keuangan</h4>
    <!-- Ketua Form Input -->
    <div class="form-group @if ($errors->has('buku_kas')) has-error @endif">
      <label class="control-label col-md-3">a. Buku Kas Tunai/kas harian
        <span class="required"> * </span>
      </label>
      <div class="col-md-2">
      {!! Form::select('buku_kas', ['1' => 'Ada', '0' => 'Tidak Ada'], null, ['class' => 'form-control', 'placeholder' => 'Pilih...' , 'id' => 'buku_kas', 'required']) !!}
      </div>
      <div class="col-md-4">
      {{ Form::text('ket_buku_kas', null, ['class' => 'form-control', 'placeholder' => 'Keterangan']) }}
      </div>
      @if ($errors->has('buku_kas')) <p class="help-block">{{ $errors->first('buku_kas') }}</p> @endif
    </div>

    <!-- Ketua Form Input -->
    <div class="form-group @if ($errors->has('buku_bank')) has-error @endif">
      <label class="control-label col-md-3">b. Buku Bank
        <span class="required"> * </span>
      </label>
      <div class="col-md-2">
      {!! Form::select('buku_bank', ['1' => 'Ada', '0' => 'Tidak Ada'], null, ['class' => 'form-control', 'placeholder' => 'Pilih...' , 'id' => 'buku_bank','required']) !!}
      </div>
      <div class="col-md-4">
      {{ Form::text('ket_buku_bank', null, ['class' => 'form-control', 'placeholder' => 'Keterangan']) }}
      </div>
      @if ($errors->has('buku_bank')) <p class="help-block">{{ $errors->first('buku_bank') }}</p> @endif
    </div>

    <div class="form-group">
      <div class="col-md-3">
        
      </div>
      <div class="col-md-6">
      <code>Bila tidak memilik Buku Kas Tunai dan Buku Bank, lanjut ke 2.6</code>
      </div>
    </div>

    <h5 class="form-section font-blue">2.5.1. Pencatatan Buku Keuangan</h5>
    <!-- Ketua Form Input -->
    <div class="form-group @if ($errors->has('sesuai_rpd')) has-error @endif">
      <label class="control-label col-md-3">a. Apakah setiap transaksi sesuai dengan RPD (Rencana Penggunaan Dana)?
        <span class="required"> * </span>
      </label>
      <div class="col-md-2">
      {!! Form::select('sesuai_rpd', ['0' => 'Tidak Sesuai', '1' => 'Sesuai'], null, ['class' => 'form-control', 'required' , 'id' => 'sesuai_rpd']) !!}
      </div>
      <div class="col-md-4">
      {{ Form::text('ket_sesuai_rpd', null, ['class' => 'form-control', 'placeholder' => 'Keterangan']) }}
      </div>
      @if ($errors->has('sesuai_rpd')) <p class="help-block">{{ $errors->first('sesuai_rpd') }}</p> @endif
    </div>

    <!-- Ketua Form Input -->
    <div class="form-group @if ($errors->has('bukti_sah')) has-error @endif">
      <label class="control-label col-md-3">b. Apakah setiap transaksi disertai dengan bukti yang sah
        <span class="required"> * </span>
      </label>
      <div class="col-md-2">
      {!! Form::select('bukti_sah', ['0' => 'Tidak', '1' => 'Ya'], null, ['class' => 'form-control', 'required' , 'id' => 'bukti_sah']) !!}
      </div>
      <div class="col-md-4">
      {{ Form::text('ket_bukti_sah', null, ['class' => 'form-control', 'placeholder' => 'Keterangan']) }}
      </div>
      @if ($errors->has('bukti_sah')) <p class="help-block">{{ $errors->first('bukti_sah') }}</p> @endif
    </div>

    <!-- Ketua Form Input -->
    <div class="form-group @if ($errors->has('catat_transaksi')) has-error @endif">
      <label class="control-label col-md-3">c. Setiap  Transaksi di catat tepat waktu, 
        <span class="required"> * </span>
      </label>
      <div class="col-md-2">
      {!! Form::select('catat_transaksi', ['0' => 'Tidak', '1' => 'Ya'], null, ['class' => 'form-control', 'required' , 'id' => 'catat_transaksi']) !!}
      </div>
      <div class="col-md-4">
      {{ Form::text('ket_catat_transaksi', null, ['class' => 'form-control', 'placeholder' => 'Keterangan']) }}
      </div>
      @if ($errors->has('catat_transaksi')) <p class="help-block">{{ $errors->first('catat_transaksi') }}</p> @endif
    </div>

    <!-- Ketua Form Input -->
    <div class="form-group @if ($errors->has('kerapian_bukti')) has-error @endif">
      <label class="control-label col-md-3">d. Apakah bukti-bukti tadi tersimpan secara rapih?
        <span class="required"> * </span>
      </label>
      <div class="col-md-2">
      {!! Form::select('kerapian_bukti', ['0' => 'Tidak', '1' => 'Ya'], null, ['class' => 'form-control',  'required' , 'id' => 'kerapian_bukti']) !!}
      </div>
      <div class="col-md-4">
      {{ Form::text('ket_kerapian_bukti', null, ['class' => 'form-control', 'placeholder' => 'Keterangan']) }}
      </div>
      @if ($errors->has('kerapian_bukti')) <p class="help-block">{{ $errors->first('kerapian_bukti') }}</p> @endif
    </div>

     <h4 class="form-section font-blue">2.6 Laporan</h4>
     <h5 class="form-section font-blue">2.6.1.</h5>
    <!-- Ketua Form Input -->
    <div class="form-group @if ($errors->has('laporan')) has-error @endif">
      <label class="control-label col-md-3">Apakah kelompok tani membuat laporan?
        <span class="required"> * </span>
      </label>
      <div class="col-md-2">
      {!! Form::select('laporan', ['1' => 'Ya', '0' => 'Tidak'], null, ['class' => 'form-control', 'placeholder' => 'Pilih...', 'required',  'id' => 'laporan', 'autocomplete' => 'off']) !!}
      </div>
      <div class="col-md-4">
      {{ Form::text('ket_laporan', null, ['class' => 'form-control', 'placeholder' => 'Keterangan']) }}
      </div>
      @if ($errors->has('laporan')) <p class="help-block">{{ $errors->first('laporan') }}</p> @endif
    </div>

    <div class="form-group">
      <div class="col-md-3">
        
      </div>
      <div class="col-md-6">
      <code>Jika tidak membuat, Lanjut ke 3.1</code>
      </div>
    </div>

    <h5 class="form-section font-blue">2.6.2.</h5>
    <!-- Ketua Form Input -->
    <div class="form-group @if ($errors->has('waktu_laporan_dd')) has-error @endif">
      <label class="control-label col-md-3">Jika kelompok mendapat bantuan dari Dana Desa/ADD, Apakah penyerahan Laporan Penggunaan Dana Kampung  (Selama min. 6 bulan terakhir) tepat waktu? jika tidak di danai oleh dana Kampung/ADD tidak perlu diisi
        <span class="required"> * </span>
      </label>
      <div class="col-md-2">
      {!! Form::select('waktu_laporan_dd', ['1' => 'Tepat Waktu', '0' => 'Tidak'], null, ['class' => 'form-control', 'placeholder' => 'Pilih...', 'required', 'disabled' , 'id' => 'waktu_laporan_dd']) !!}
      </div>
      <div class="col-md-4">
      {{ Form::text('ket_waktu_laporan_dd', null, ['class' => 'form-control', 'placeholder' => 'Keterangan']) }}
      </div>
      @if ($errors->has('waktu_laporan_dd')) <p class="help-block">{{ $errors->first('waktu_laporan_dd') }}</p> @endif
    </div>



@push('scripts')
<script>
    $('#papan_pengumuman').on('change', function(e){
        console.log(e);
        var value=$(this).val();
        if(value==0){
          
          document.getElementById("fungsi_papan_pengumuman").disabled=true;
          $("#fungsi_papan_pengumuman").each(function() { this.selectedIndex = 0 });         

          document.getElementById("kondisi_papan_pengumuman").disabled=true;
          $("#kondisi_papan_pengumuman").each(function() { this.selectedIndex = 0 });
          
        }else if(value=='1'){
          
          document.getElementById("fungsi_papan_pengumuman").disabled=false;
          document.getElementById("kondisi_papan_pengumuman").disabled=false;
                    
        }
      });

      $('#kotak_saran').on('change', function(e){
        console.log(e);
        var value=$(this).val();
        if(value==0){
          
          document.getElementById("fungsi_kotak_saran").disabled=true;
          $("#fungsi_kotak_saran").each(function() { this.selectedIndex = 0 });         

          document.getElementById("kondisi_kotak_saran").disabled=true;
          $("#kondisi_kotak_saran").each(function() { this.selectedIndex = 0 });
          
        }else if(value=='1'){
          
          document.getElementById("fungsi_kotak_saran").disabled=false;
          document.getElementById("kondisi_kotak_saran").disabled=false;
                    
        }
      });

      
      
      $('#laporan ').on('change', function(e){
        console.log(e);
        var value=$(this).val();
        if(value==0){
          
          document.getElementById("waktu_laporan_dd").disabled=true;
          $("#waktu_laporan_dd").each(function() { this.selectedIndex = 0 }); 
         
          
        }else if(value=='1'){          
          document.getElementById("waktu_laporan_dd").disabled=false;
          
        }                   
        });
      
      
     
</script>
@endpush    