<h4 class="form-section font-blue">2.2 Pertemuan Kelompok</h4>

    <h5 class="form-section font-blue">2.2.1. </h5>
    <!-- Ketua Form Input -->
    <div class="form-group @if ($errors->has('pertemuan')) has-error @endif">
      <label class="control-label col-md-3">Apakah Kelompok Melakukan Pertemuan?
        <span class="required"> * </span>
      </label>
      <div class="col-md-2">
      {!! Form::select('pertemuan', ['1' => 'Ya', '0' => 'Tidak'], null, ['class' => 'form-control', 'placeholder' => 'Pilih...' , 'required', 'id' => 'pertemuan', 'autocomplete' => 'off']) !!}
      </div>
      <div class="col-md-4">
      {{ Form::text('ket_pertemuan', null, ['class' => 'form-control', 'placeholder' => 'Keterangan']) }}
      </div>
      @if ($errors->has('pertemuan')) <p class="help-block">{{ $errors->first('pertemuan') }}</p> @endif
    </div>

    <div class="form-group">
      <div class="col-md-3">
        
      </div>
      <div class="col-md-6">
      <code>Jika Tidak pernah, lanjut ke pertanyaan 2.3</code>
      </div>
    </div>

    <h5 class="form-section font-blue">2.2.2. </h5>
    <!-- Ketua Form Input -->
    <div class="form-group @if ($errors->has('pelaksanaan_pertemuan')) has-error @endif">
      <label class="control-label col-md-3">Apakah pertemuan dilaksanakan secara Rutin?
        <span class="required"> * </span>
      </label>
      <div class="col-md-2">
      {!! Form::select('pelaksanaan_pertemuan', ['1' => 'Ya', '0' => 'Tidak'], null, ['class' => 'form-control', 'placeholder' => 'Pilih...', 'required', 'disabled', 'id' => 'pelaksanaan_pertemuan', 'autocomplete' => 'off']) !!}
      </div>
      <div class="col-md-4">
      {{ Form::text('ket_pelaksanaan_pertemuan', null, ['class' => 'form-control', 'placeholder' => 'Keterangan']) }}
      </div>
      @if ($errors->has('pelaksanaan_pertemuan')) <p class="help-block">{{ $errors->first('pelaksanaan_pertemuan') }}</p> @endif
    </div>

    <h5 class="form-section font-blue">2.2.3. </h5>
    <!-- Ketua Form Input -->
    <div class="form-group @if ($errors->has('frekuensi_pertemuan')) has-error @endif">
      <label class="control-label col-md-3">Frekuensi Pertemuan?
        <span class="required"> * </span>
      </label>
      <div class="col-md-2">
      {!! Form::select('frekuensi_pertemuan', ['1' => '1 Kali sebulan', '2' => '1 Kali per 2 bulan', '3' => '1 Kali per 3 bulan'], null, ['class' => 'form-control', 'placeholder' => 'Pilih...' , 'disabled', 'id' => 'frekuensi_pertemuan', 'autocomplete' => 'off']) !!}
      </div>
      <div class="col-md-4">
      {{ Form::text('ket_frekuensi_pertemuan', null, ['class' => 'form-control', 'placeholder' => 'Keterangan']) }}
      </div>
      @if ($errors->has('frekuensi_pertemuan')) <p class="help-block">{{ $errors->first('frekuensi_pertemuan') }}</p> @endif
    </div>
    <h5 class="form-section font-blue">2.2.4. Jumlah anggota yang aktif mengikuti pertemuan dalam 6 bulan terakhir?</h5>

    <!-- Ketua Form Input -->
    <div class="form-group @if ($errors->has('peserta_lk')) has-error @endif">
      <label class="control-label col-md-3">Laki-laki
        <span class="required"> * </span>
      </label>
      <div class="col-md-2">
      {{ Form::number('peserta_lk', null,  ['class' => 'form-control', 'placeholder' => 'Orang', 'min' => '0', 'required', 'disabled', 'id' => 'peserta_lk']) }}
      </div>
      
      @if ($errors->has('peserta_lk')) <p class="help-block">{{ $errors->first('peserta_lk') }}</p> @endif
    </div>
    <!-- Ketua Form Input -->
    <div class="form-group @if ($errors->has('peserta_p')) has-error @endif">
      <label class="control-label col-md-3">Perempuan
        <span class="required"> * </span>
      </label>
      <div class="col-md-2">
      {{ Form::number('peserta_p', null, ['class' => 'form-control', 'placeholder' => 'Orang', 'min' => '0', 'required', 'disabled', 'id' => 'peserta_p']) }}
      </div>
      <div class="col-md-4">      
      </div>
      @if ($errors->has('peserta_p')) <p class="help-block">{{ $errors->first('peserta_p') }}</p> @endif
    </div>

    <!-- Ketua Form Input -->
    <div class="form-group @if ($errors->has('ket_peserta')) has-error @endif">
      <label class="control-label col-md-3">       
      </label>
      <div class="col-md-6">
      {{ Form::text('ket_peserta', null, ['class' => 'form-control', 'placeholder' => 'Keterangan']) }}
      </div>      
      @if ($errors->has('ket_peserta')) <p class="help-block">{{ $errors->first('biaya') }}</p> @endif
    </div>  


    <h5 class="form-section font-blue">2.2.5. Pokok Bahasan dalam pertemuan?</h5>
    <!-- Ketua Form Input -->
    <div class="form-group @if ($errors->has('perencanaan_kegiatan')) has-error @endif">
      <label class="control-label col-md-3">a. Perencanaan kegiatan
        <span class="required"> * </span>
      </label>
      <div class="col-md-2">
      {!! Form::select('perencanaan_kegiatan', ['1' => 'Ya', '0' => 'Tidak'], null, ['class' => 'form-control', 'placeholder' => 'Pilih...', 'required', 'disabled', 'id' => 'perencanaan_kegiatan']) !!}
      </div>
      <div class="col-md-4">
      {{ Form::text('ket_perencanaan_kegiatan', null, ['class' => 'form-control', 'placeholder' => 'Keterangan']) }}
      </div>
      @if ($errors->has('perencanaan_kegiatan')) <p class="help-block">{{ $errors->first('perencanaan_kegiatan') }}</p> @endif
    </div>

    <!-- Ketua Form Input -->
    <div class="form-group @if ($errors->has('pelaksanaan_kegiatan')) has-error @endif">
      <label class="control-label col-md-3">b. Pelaksanaan kegiatan
        <span class="required"> * </span>
      </label>
      <div class="col-md-2">
      {!! Form::select('pelaksanaan_kegiatan', ['1' => 'Ya', '0' => 'Tidak'], null, ['class' => 'form-control', 'placeholder' => 'Pilih...', 'required', 'disabled', 'id' => 'pelaksanaan_kegiatan']) !!}
      </div>
      <div class="col-md-4">
      {{ Form::text('ket_pelaksanaan_kegiatan', null, ['class' => 'form-control', 'placeholder' => 'Keterangan']) }}
      </div>
      @if ($errors->has('pelaksanaan_kegiatan')) <p class="help-block">{{ $errors->first('biaya') }}</p> @endif
    </div>

    <!-- Ketua Form Input -->
    <div class="form-group @if ($errors->has('masalah_pertemuan')) has-error @endif">
      <label class="control-label col-md-3">c. Permasalahan
        <span class="required"> * </span>
      </label>
      <div class="col-md-2">
      {!! Form::select('masalah_pertemuan', ['1' => 'Ya', '0' => 'Tidak'], null, ['class' => 'form-control', 'placeholder' => 'Pilih...', 'required', 'id' => 'masalah_pertemuan', 'disabled']) !!}
      </div>
      <div class="col-md-4">
      {{ Form::text('ket_masalah_pertemuan', null, ['class' => 'form-control', 'placeholder' => 'Keterangan']) }}
      </div>
      @if ($errors->has('masalah_pertemuan')) <p class="help-block">{{ $errors->first('masalah_pertemuan') }}</p> @endif
    </div>

    <!-- Ketua Form Input -->
    <div class="form-group @if ($errors->has('bahasan_lain')) has-error @endif">
    <label class="control-label col-md-3">d. Lainnya, sebutkan
        
      </label>
      <div class="col-md-2">
      {{ Form::text('bahasan_lain', null, ['class' => 'form-control', 'placeholder' => 'Lainnya',  'disabled', 'id' => 'bahasan_lain']) }}
      </div>
      <div class="col-md-4">
      {{ Form::text('ket_bahasan_lain', null, ['class' => 'form-control', 'placeholder' => 'Keterangan']) }}
      </div>
      @if ($errors->has('bahasan_lain')) <p class="help-block">{{ $errors->first('bahasan_lain') }}</p> @endif
    </div>


@push('scripts')
<script>
    $('#pertemuan').on('change', function(e){
        console.log(e);
        var value=$(this).val();
        if(value==0){
          
          document.getElementById("pelaksanaan_pertemuan").disabled=true;
          $("#pelaksanaan_pertemuan").each(function() { this.selectedIndex = 0 });

          document.getElementById("frekuensi_pertemuan").disabled=true;
          $("#frekuensi_pertemuan").each(function() { this.selectedIndex = 0 });

          document.getElementById("peserta_lk").disabled=true;
          document.getElementById("peserta_lk").value="";


          document.getElementById("peserta_p").disabled=true;
          document.getElementById("peserta_p").value="";
          

          document.getElementById("perencanaan_kegiatan").disabled=true;
          $("#perencanaan_kegiatan").each(function() { this.selectedIndex = 0 });

          document.getElementById("pelaksanaan_kegiatan").disabled=true;
          $("#pelaksanaan_kegiatan").each(function() { this.selectedIndex = 0 });

          document.getElementById("masalah_pertemuan").disabled=true;
          $("#masalah_pertemuan").each(function() { this.selectedIndex = 0 });

          document.getElementById("bahasan_lain").disabled=true;
          $("#bahasan_lain").each(function() { this.selectedIndex = 0 });

                   
        }else if(value=='1'){
          
          document.getElementById("pelaksanaan_pertemuan").disabled=false;
          document.getElementById("frekuensi_pertemuan").disabled=false;
          document.getElementById("peserta_lk").disabled=false;
          document.getElementById("peserta_p").disabled=false;
          document.getElementById("perencanaan_kegiatan").disabled=false;
          document.getElementById("pelaksanaan_kegiatan").disabled=false;
          document.getElementById("masalah_pertemuan").disabled=false;
          document.getElementById("bahasan_lain").disabled=false;          
          
          
        }
      });
</script>
@endpush    