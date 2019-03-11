    <h3 class="form-section font-blue">V. Kemitraan</h3>
    <h5 class="form-section font-blue">4.1 </h5>
    
    <!-- Pewawancara Form Input -->
    <div class="form-group @if ($errors->has('kerjasama_mitra')) has-error @endif">
      <label class="control-label col-md-3">Apakah kelompok tani telah bekerja sama dengan mitra  atau lembaga lainnya dalam upaya mengingkatkan usaha tani?
        <span class="required"> * </span>
      </label>
      <div class="col-md-2">
      {!! Form::select('kerjasama_mitra', ['1' => 'Ya', '0' => 'Tidak'], null, ['class' => 'form-control', 'placeholder' => 'Pilih...', 'required', 'id' =>'kerjasama_mitra', 'required']) !!}      
      </div>
      <div class="col-md-4">
      {{ Form::text('ket_kerjasama_mitra', null, ['class' => 'form-control', 'placeholder' => 'Keterangan']) }}
      </div>
      
      @if ($errors->has('kerjasama_mitra')) <p class="help-block">{{ $errors->first('kerjasama_mitra') }}</p> @endif
    </div>
    
    <!-- Pewawancara Form Input -->
    <div class="form-group @if ($errors->has('penyuluh_kecamatan')) has-error @endif">
      <label class="control-label col-md-3">a. UPTD/Penyuluh Pertanian Kecamatan
        <span class="required"> * </span>
      </label>
      <div class="col-md-2">
      {!! Form::select('penyuluh_kecamatan', ['1' => 'Ya', '0' => 'Tidak'], null, ['class' => 'form-control', 'placeholder' => 'Pilih...', 'id' => 'penyuluh_kecamatan', 'required']) !!}
      </div>
      <div class="col-md-4">
      {{ Form::text('ket_penyuluh_kecamatan', null, ['class' => 'form-control', 'placeholder' => 'Keterangan']) }}
      </div>
      @if ($errors->has('penyuluh_kecamatan')) <p class="help-block">{{ $errors->first('penyuluh_kecamatan') }}</p> @endif
    </div>
    
    <!-- Ketua Form Input -->
    <div class="form-group @if ($errors->has('pendamping_desa')) has-error @endif">
      <label class="control-label col-md-3">b. Pendamping Kampung PPDM
        <span class="required"> * </span>
      </label>
      <div class="col-md-2">
      {!! Form::select('pendamping_desa', ['1' => 'Ya', '0' => 'Tidak'], null, ['class' => 'form-control', 'placeholder' => 'Pilih...', 'id' => 'pendamping_desa', 'required']) !!}
      </div>
      <div class="col-md-4">
      {{ Form::text('ket_pendamping_desa', null, ['class' => 'form-control', 'placeholder' => 'Keterangan']) }}
      </div>
      @if ($errors->has('pendamping_desa')) <p class="help-block">{{ $errors->first('pendamping_desa') }}</p> @endif
    </div>

     <!-- Ketua Form Input -->
     <div class="form-group @if ($errors->has('kemitraan_kecamatan')) has-error @endif">
      <label class="control-label col-md-3">c. Distrik (Kasi Sosial)
        <span class="required"> * </span>
      </label>
      <div class="col-md-2">
      {!! Form::select('kemitraan_kecamatan', ['1' => 'Ya', '0' => 'Tidak'], null, ['class' => 'form-control', 'placeholder' => 'Pilih...', 'id' => 'kemitraan_kecamatan', 'required']) !!}
      </div>
      <div class="col-md-4">
      {{ Form::text('ket_kemitraan_kecamatan', null, ['class' => 'form-control', 'placeholder' => 'Keterangan']) }}
      </div>
      @if ($errors->has('kemitraan_kecamatan')) <p class="help-block">{{ $errors->first('kemitraan_kecamatan') }}</p> @endif
    </div>

    <!-- Ketua Form Input -->
    <div class="form-group @if ($errors->has('pendamping_kecamatan')) has-error @endif">
      <label class="control-label col-md-3">d. Pendamping Distrik PPDM
        <span class="required"> * </span>
      </label>
      <div class="col-md-2">
      {!! Form::select('pendamping_kecamatan', ['1' => 'Ya', '0' => 'Tidak'], null, ['class' => 'form-control', 'placeholder' => 'Pilih...', 'id' => 'pendamping_kecamatan', 'required']) !!}
      </div>
      <div class="col-md-4">
      {{ Form::text('ket_pendamping_kecamatan', null, ['class' => 'form-control', 'placeholder' => 'Keterangan']) }}
      </div>
      @if ($errors->has('pendamping_kecamatan')) <p class="help-block">{{ $errors->first('pendamping_kecamatan') }}</p> @endif
    </div>

    <!-- Ketua Form Input -->
    <div class="form-group @if ($errors->has('dpmd_kabupaten')) has-error @endif">
      <label class="control-label col-md-3">e. DPMK Kabupaten
        <span class="required"> * </span>
      </label>
      <div class="col-md-2">
      {!! Form::select('dpmd_kabupaten', ['1' => 'Ya', '0' => 'Tidak'], null, ['class' => 'form-control', 'placeholder' => 'Pilih...', 'id' => 'dpmd_kabupaten', 'required']) !!}
      </div>
      <div class="col-md-4">
      {{ Form::text('ket_dpmd_kabupaten', null, ['class' => 'form-control', 'placeholder' => 'Keterangan']) }}
      </div>
      @if ($errors->has('dpmd_kabupaten')) <p class="help-block">{{ $errors->first('dpmd_kabupaten') }}</p> @endif
    </div>

    <!-- Ketua Form Input -->
    <div class="form-group @if ($errors->has('kemitraan_lain')) has-error @endif">
      <label class="control-label col-md-3">f. Lainnya, Sebutkan? . . . . . . . . . . . . .
        <span class="required"> * </span>
      </label>
      <div class="col-md-2">
      {!! Form::text('kemitraan_lain', null, ['class' => 'form-control', 'placeholder' => 'Pilih...', 'id' => 'kemitraan_lain']) !!}
      </div>
      <div class="col-md-4">
      {{ Form::text('ket_kemitraan_lain', null, ['class' => 'form-control', 'placeholder' => 'Keterangan']) }}
      </div>
      @if ($errors->has('kemitraan_lain')) <p class="help-block">{{ $errors->first('kemitraan_lain') }}</p> @endif
    </div>

    

@push('scripts')

@endpush