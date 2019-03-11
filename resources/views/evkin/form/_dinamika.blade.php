    <h3 class="form-section font-blue">II. Dinamika Kelompok Tani</h3>
    <h4 class="form-section font-blue">2.1 Rencana Kerja Operasional</h4>
    <h5 class="form-section font-blue">2.1.1</h5>
    
    <!-- Pewawancara Form Input -->
    <div class="form-group @if ($errors->has('rencana_kerja')) has-error @endif">
      <label class="control-label col-md-3">A. Apakah Kelompok/ memiliki Rencana Kerja
        <span class="required"> * </span>
      </label>
      <div class="col-md-2">
      {!! Form::select('rencana_kerja', ['1' => 'Ada', '0' => 'Tidak'], null, ['class' => 'form-control', 'placeholder' => 'Pilih...', 'required', 'id' =>'rencana_kerja', 'autocomplete' => 'off']) !!}      
      </div>
      <div class="col-md-4">
      {{ Form::text('ket_rencana_kerja', null, ['class' => 'form-control', 'placeholder' => 'Keterangan']) }}
      </div>
      
      @if ($errors->has('rencana_kerja')) <p class="help-block">{{ $errors->first('rencana_kerja') }}</p> @endif
    </div>
    <div class="form-group">
      <div class="col-md-3">        
      </div>
      <div class="col-md-6">
      <code>Jika Tidak ada, lanjut ke pertanyaan 2.2</code>
      </div>
    </div>
   

    <h5 class="form-section font-blue">2.1.2. Dasar penyusunan rencana kerja?</h5>
    <!-- Ketua Form Input -->
    <div class="form-group @if ($errors->has('program_dd')) has-error @endif">
      <label class="control-label col-md-3">a. Program Dana Kampung
        <span class="required"> * </span>
      </label>
      <div class="col-md-2">
      {!! Form::select('program_dd', ['1' => 'Ya', '0' => 'Tidak'], null, ['class' => 'form-control', 'placeholder' => 'Pilih...', 'required', 'disabled' => 'disabled', 'id' => 'program_dd', 'autocomplete' => 'off']) !!}
      </div>
      <div class="col-md-4">
      {{ Form::text('ket_program_dd', null, ['class' => 'form-control', 'placeholder' => 'Keterangan']) }}
      </div>
      @if ($errors->has('program_dd')) <p class="help-block">{{ $errors->first('program_dd') }}</p> @endif
    </div>

    <!-- Ketua Form Input -->
    <div class="form-group @if ($errors->has('tujuan_kelompok')) has-error @endif">
      <label class="control-label col-md-3">b. Tujuan Kelompok?
        <span class="required"> * </span>
      </label>
      <div class="col-md-2">
      {!! Form::select('tujuan_kelompok', ['1' => 'Ya', '0' => 'Tidak'], null, ['class' => 'form-control', 'placeholder' => 'Pilih...', 'required', 'disabled' => 'disabled', 'id' => 'tujuan_kelompok', 'autocomplete' => 'off']) !!}
      </div>
      <div class="col-md-4">
      {{ Form::text('ket_tujuan_kelompok', null, ['class' => 'form-control', 'placeholder' => 'Keterangan']) }}
      </div>
      @if ($errors->has('tujuan_kelompok')) <p class="help-block">{{ $errors->first('tujuan_kelompok') }}</p> @endif
    </div>

    <!-- Ketua Form Input -->
    <div class="form-group @if ($errors->has('masalah_rk')) has-error @endif">
      <label class="control-label col-md-3">c. Situasi dari Kondisi/Permasalahan?
        <span class="required"> * </span>
      </label>
      <div class="col-md-2">
      {!! Form::select('masalah_rk', ['1' => 'Ya', '0' => 'Tidak'], null, ['class' => 'form-control', 'placeholder' => 'Pilih...', 'required', 'disabled' => 'disabled', 'id' => 'masalah_rk', 'autocomplete' => 'off']) !!}
      </div>
      <div class="col-md-4">
      {{ Form::text('ket_masalah_rk', null, ['class' => 'form-control', 'placeholder' => 'Keterangan']) }}
      </div>
      @if ($errors->has('masalah_rk')) <p class="help-block">{{ $errors->first('masalah_rk') }}</p> @endif
    </div>

    <!-- Ketua Form Input -->
    <div class="form-group @if ($errors->has('rk_lain')) has-error @endif">
      <label class="control-label col-md-3">d. Lainnya, sebutkan
      </label>

      <div class="col-md-2">{{ Form::text('rk_lain', null, ['class' => 'form-control', 'placeholder' => 'Lainnya', 'disabled' => 'disabled', 'id' => 'rk_lain']) }}
      </div>
      <div class="col-md-4">
      {{ Form::text('ket_rk_lain', null, ['class' => 'form-control', 'placeholder' => 'Keterangan']) }}
      </div>
      @if ($errors->has('rk_lain')) <p class="help-block">{{ $errors->first('rk_lain') }}</p> @endif
    </div>

    <h5 class="form-section font-blue">2.1.3. Apakah Rencana Kerja yang telah disusun memuat?</h5>
    
    <!-- Ketua Form Input -->
    <div class="form-group @if ($errors->has('kegiatan_kelompok')) has-error @endif">
      <label class="control-label col-md-3">A. Pelaksanaan Kegiatan Kelompok?
        <span class="required"> * </span>
      </label>
      <div class="col-md-2">
      {!! Form::select('kegiatan_kelompok', ['1' => 'Ada', '0' => 'Tidak Ada'], null, ['class' => 'form-control', 'placeholder' => 'Pilih...', 'required', 'disabled' => 'disabled', 'id' => 'kegiatan_kelompok', 'autocomplete' => 'off']) !!}
      </div>
      <div class="col-md-4">
      {{ Form::text('ket_kegiatan_kelompok', null, ['class' => 'form-control', 'placeholder' => 'Keterangan']) }}
      </div>
      @if ($errors->has('kegiatan_kelompok')) <p class="help-block">{{ $errors->first('kegiatan_kelompok') }}</p> @endif
    </div>

    <!-- Ketua Form Input -->
    <div class="form-group @if ($errors->has('tindak_lanjut')) has-error @endif">
      <label class="control-label col-md-3">B. Tindak Lanjut Situasi dari kondisi/Permasalahan yang 
    dihadapi?
        <span class="required"> * </span>
      </label>
      <div class="col-md-2">
      {!! Form::select('tindak_lanjut', ['1' => 'Ada', '0' => 'Tidak Ada'], null, ['class' => 'form-control', 'placeholder' => 'Pilih...', 'required', 'disabled' => 'disabled', 'id' => 'tindak_lanjut', 'autocomplete' => 'off']) !!}
      </div>
      <div class="col-md-4">
      {{ Form::text('ket_tindak_lanjut', null, ['class' => 'form-control', 'placeholder' => 'Keterangan']) }}
      </div>
      @if ($errors->has('kegiatan_kelompok')) <p class="help-block">{{ $errors->first('kegiatan_kelompok') }}</p> @endif
    </div>
    
    <!-- Ketua Form Input -->
    <div class="form-group @if ($errors->has('tujuan_kegiatan')) has-error @endif">
      <label class="control-label col-md-3">C. Tujuan Kegiatan?
        <span class="required"> * </span>
      </label>
      <div class="col-md-2">
      {!! Form::select('tujuan_kegiatan', ['1' => 'Ada', '0' => 'Tidak Ada'], null, ['class' => 'form-control', 'placeholder' => 'Pilih...', 'required', 'disabled' => 'disabled', 'id' => 'tujuan_kegiatan', 'autocomplete' => 'off']) !!}
      </div>
      <div class="col-md-4">
      {{ Form::text('ket_tujuan_kegiatan', null, ['class' => 'form-control', 'placeholder' => 'Keterangan']) }}
      </div>
      @if ($errors->has('tujuan_kegiatan')) <p class="help-block">{{ $errors->first('tujuan_kegiatan') }}</p> @endif
    </div>

    <!-- Ketua Form Input -->
    <div class="form-group @if ($errors->has('waktu_kegiatan')) has-error @endif">
      <label class="control-label col-md-3">D. Waktu Pelaksanaan Kegiatan?
        <span class="required"> * </span>
      </label>
      <div class="col-md-2">
      {!! Form::select('waktu_kegiatan', ['1' => 'Ada', '0' => 'Tidak Ada'], null, ['class' => 'form-control', 'placeholder' => 'Pilih...', 'required', 'disabled' => 'disabled', 'id' => 'waktu_kegiatan', 'autocomplete' => 'off']) !!}
      </div>
      <div class="col-md-4">
      {{ Form::text('ket_waktu_kegiatan', null, ['class' => 'form-control', 'placeholder' => 'Keterangan']) }}
      </div>
      @if ($errors->has('waktu_kegiatan')) <p class="help-block">{{ $errors->first('waktu_kegiatan') }}</p> @endif
    </div>

    <!-- Ketua Form Input -->
    <div class="form-group @if ($errors->has('peningkatan_usahatani')) has-error @endif">
      <label class="control-label col-md-3">E. Rencana Peningkatan Usaha Tani?
        <span class="required"> * </span>
      </label>
      <div class="col-md-2">
      {!! Form::select('peningkatan_usahatani', ['1' => 'Ada', '0' => 'Tidak Ada'], null, ['class' => 'form-control', 'placeholder' => 'Pilih...', 'required', 'disabled' => 'disabled', 'id' => 'peningkatan_usahatani', 'autocomplete' => 'off']) !!}
      </div>
      <div class="col-md-4">
      {{ Form::text('ket_peningkatan_usahatani', null, ['class' => 'form-control', 'placeholder' => 'Keterangan']) }}
      </div>
      @if ($errors->has('peningkatan_usahatani')) <p class="help-block">{{ $errors->first('peningkatan_usahatani') }}</p> @endif
    </div>

    <!-- Ketua Form Input -->
    <div class="form-group @if ($errors->has('biaya')) has-error @endif">
      <label class="control-label col-md-3">F. Biaya?
        <span class="required"> * </span>
      </label>
      <div class="col-md-2">
      {!! Form::select('biaya', ['1' => 'Ada', '0' => 'Tidak Ada'], null, ['class' => 'form-control', 'placeholder' => 'Pilih...', 'required', 'disabled' => 'disabled', 'id' => 'biaya', 'autocomplete' => 'off']) !!}
      </div>
      <div class="col-md-4">
      {{ Form::text('ket_biaya', null, ['class' => 'form-control', 'placeholder' => 'Keterangan']) }}
      </div>
      @if ($errors->has('biaya')) <p class="help-block">{{ $errors->first('biaya') }}</p> @endif
    </div>

    <!-- Ketua Form Input -->
    <div class="form-group @if ($errors->has('penanggung_jawab')) has-error @endif">
      <label class="control-label col-md-3">G. Penanggungjawwab Kegiatan?
        <span class="required"> * </span>
      </label>
      <div class="col-md-2">
      {!! Form::select('penanggung_jawab', ['1' => 'Ada', '0' => 'Tidak Ada'], null, ['class' => 'form-control', 'placeholder' => 'Pilih...', 'required', 'disabled' => 'disabled', 'id' => 'penanggung_jawab', 'autocomplete' => 'off']) !!}
      </div>
      <div class="col-md-4">
      {{ Form::text('ket_penanggung_jawab', null, ['class' => 'form-control', 'placeholder' => 'Keterangan']) }}
      </div>
      @if ($errors->has('penanggung_jawab')) <p class="help-block">{{ $errors->first('penanggung_jawab') }}</p> @endif
    </div>
    
    <h5 class="form-section font-blue">2.1.4.</h5>
     <!-- Ketua Form Input -->
     <div class="form-group @if ($errors->has('kesesuaian_rk')) has-error @endif">
      <label class="control-label col-md-3">Kesesuaian Rencana kerja dengan pelaksanaan?
        <span class="required"> * </span>
      </label>
      <div class="col-md-2">
      {!! Form::select('kesesuaian_rk', ['1' => 'Sesuai', '0' => 'Tidak Sesuai'], null, ['class' => 'form-control', 'placeholder' => 'Pilih...', 'required', 'disabled' => 'disabled', 'id' => 'kesesuaian_rk', 'autocomplete' => 'off']) !!}
      </div>
      <div class="col-md-4">
      {{ Form::text('ket_kesesuaian_rk', null, ['class' => 'form-control', 'placeholder' => 'Keterangan']) }}
      </div>
      @if ($errors->has('kesesuaian_rk')) <p class="help-block">{{ $errors->first('kesesuaian_rk') }}</p> @endif
    </div>

    <h5 class="form-section font-blue">2.1.5. Bila tidak sesuai apa penyebabnya?</h5>
    <!-- Ketua Form Input -->
    <div class="form-group @if ($errors->has('sdm')) has-error @endif">
      <label class="control-label col-md-3">A. Sumber Daya Manusia?
        <span class="required"> * </span>
      </label>
      <div class="col-md-2">
      {!! Form::select('sdm', ['1' => 'Ada', '0' => 'Tidak Ada'], null, ['class' => 'form-control', 'placeholder' => 'Pilih...', 'required', 'disabled' => 'disabled', 'id' => 'sdm', 'autocomplete' => 'off']) !!}
      </div>
      <div class="col-md-4">
      {{ Form::text('ket_sdm', null, ['class' => 'form-control', 'placeholder' => 'Keterangan']) }}
      </div>
      @if ($errors->has('sdm')) <p class="help-block">{{ $errors->first('sdm') }}</p> @endif
    </div>
    <!-- Ketua Form Input -->
    <div class="form-group @if ($errors->has('kendala_keuangan')) has-error @endif">
      <label class="control-label col-md-3">B. Kendala Keuangan
        <span class="required"> * </span>
      </label>
      <div class="col-md-2">
      {!! Form::select('kendala_keuangan', ['1' => 'Ada', '0' => 'Tidak Ada'], null, ['class' => 'form-control', 'placeholder' => 'Pilih...', 'required', 'disabled' => 'disabled', 'id' => 'kendala_keuangan', 'autocomplete' => 'off']) !!}
      </div>
      <div class="col-md-4">
      {{ Form::text('ket_kendala_keuangan', null, ['class' => 'form-control', 'placeholder' => 'Keterangan']) }}
      </div>
      @if ($errors->has('kendala_keuangan')) <p class="help-block">{{ $errors->first('kendala_keuangan') }}</p> @endif
    </div>
    <!-- Ketua Form Input -->
    <div class="form-group @if ($errors->has('sarana')) has-error @endif">
      <label class="control-label col-md-3">C. Sarana
        <span class="required"> * </span>
      </label>
      <div class="col-md-2">
      {!! Form::select('sarana', ['1' => 'Ada', '0' => 'Tidak Ada'], null, ['class' => 'form-control', 'placeholder' => 'Pilih...', 'required', 'disabled' => 'disabled', 'id' => 'sarana', 'autocomplete' => 'off']) !!}
      </div>
      <div class="col-md-4">
      {{ Form::text('ket_sarana', null, ['class' => 'form-control', 'placeholder' => 'Keterangan']) }}
      </div>
      @if ($errors->has('sarana')) <p class="help-block">{{ $errors->first('sarana') }}</p> @endif
    </div>

    <!-- Ketua Form Input -->
    <div class="form-group @if ($errors->has('pengelola_lain')) has-error @endif">
      <label class="col-md-3">{{ Form::text('pengelola_lain', null, ['class' => 'form-control', 'placeholder' => 'Lainnya']) }}
        
      </label>
      
      <div class="col-md-6">
      {{ Form::text('ket_pengelola_lain', null, ['class' => 'form-control', 'placeholder' => 'Keterangan']) }}
      </div>
      @if ($errors->has('pengelola_lain')) <p class="help-block">{{ $errors->first('pengelola_lain') }}</p> @endif
    </div>

    

@push('scripts')
<script>
    

    $('#rencana_kerja').on('change', function(e){
        console.log(e);
        var value=$(this).val();
        if(value=='0' || value==''){
          
          document.getElementById("program_dd").disabled =true;
          $("#program_dd").each(function() { this.selectedIndex = 0 });
          

          document.getElementById("tujuan_kelompok").disabled =true;
          $("#tujuan_kelompok").each(function() { this.selectedIndex = 0 });

          document.getElementById("masalah_rk").disabled =true;
          $("#masalah_rk").each(function() { this.selectedIndex = 0 });

          document.getElementById("kegiatan_kelompok").disabled =true;
          $("#kegiatan_kelompok").each(function() { this.selectedIndex = 0 });

          document.getElementById("tindak_lanjut").disabled  =true;
          $("#tindak_lanjut").each(function() { this.selectedIndex = 0 });

          document.getElementById("tujuan_kegiatan").disabled =true;
          $("#tujuan_kegiatan").each(function() { this.selectedIndex = 0 });
          
          document.getElementById("waktu_kegiatan").disabled =true;
          $("#waktu_kegiatan").each(function() { this.selectedIndex = 0 });
          
          document.getElementById("peningkatan_usahatani").disabled =true;
          $("#peningkatan_usahatani").each(function() { this.selectedIndex = 0 });

          document.getElementById("biaya").disabled =true;
          $("#biaya").each(function() { this.selectedIndex = 0 });

          document.getElementById("penanggung_jawab").disabled =true;
          $("#penanggung_jawab").each(function() { this.selectedIndex = 0 });

          document.getElementById("kesesuaian_rk").disabled =true;
          $("#kesesuaian_rk").each(function() { this.selectedIndex = 0 });

          document.getElementById("sdm").disabled =true;
          $("#sdm").each(function() { this.selectedIndex = 0 }); 

          document.getElementById("kendala_keuangan").disabled =true;
          $("#kendala_keuangan").each(function() { this.selectedIndex = 0 });          

          document.getElementById("sarana").disabled =true;
          $("#sarana").each(function() { this.selectedIndex = 0 }); 
          
        }else if(value=='1'){
          
          document.getElementById("program_dd").disabled=false;
          
          document.getElementById("tujuan_kelompok").disabled=false;
          document.getElementById("masalah_rk").disabled=false;
          document.getElementById("kegiatan_kelompok").disabled=false;

          document.getElementById("tindak_lanjut").disabled=false;
          document.getElementById("tujuan_kegiatan").disabled=false;
          document.getElementById("waktu_kegiatan").disabled=false;
          document.getElementById("peningkatan_usahatani").disabled=false;
          document.getElementById("biaya").disabled=false;
          document.getElementById("penanggung_jawab").disabled=false;
          document.getElementById("rk_lain").disabled=false;
          
          document.getElementById("kesesuaian_rk").disabled=false;

        
          
          document.getElementById("sdm").disabled =true;
          $("#sdm").each(function() { this.selectedIndex = 0 });

          document.getElementById("kendala_keuangan").disabled =true;
          $("#kendala_keuangan").each(function() { this.selectedIndex = 0 });          

          document.getElementById("sarana").disabled =true;
          $("#sarana").each(function() { this.selectedIndex = 0 });

          
        }
      });

      $('#kesesuaian_rk').on('change', function(e){
        console.log(e);
        var value=$(this).val();
        if(value=='1'){                
          document.getElementById("sdm").disabled =true;
          $("#sdm").each(function() { this.selectedIndex = 0 });

          document.getElementById("kendala_keuangan").disabled =true;
          $("#kendala_keuangan").each(function() { this.selectedIndex = 0 });          

          document.getElementById("sarana").disabled =true;
          $("#sarana").each(function() { this.selectedIndex = 0 });           
                   
        }else if(value=='0' || value==''){                   
          document.getElementById("sdm").disabled=false;
          document.getElementById("kendala_keuangan").disabled=false;
          document.getElementById("sarana").disabled=false;          
        }
      });
</script>
@endpush