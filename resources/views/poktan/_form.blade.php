<div class="form-body">
    <!-- Provinsi Form Input -->
    <div class="form-group @if ($errors->has('provinsi_id')) has-error @endif">
      <label class="control-label col-md-3">Provinsi
        <span class="required"> * </span>
      </label>
      <div class="col-md-6">
        <select class="form-control" name="provinsi_id" id="provinsi_id" required autocomplete="off">
          <option value="" disable="true" selected="true">Pilih Provinsi</option>
          @foreach ($provinsi as $key => $value)
            <option value="{{$value->id}}">{{ $value->nama }}</option>
          @endforeach
        </select>
      </div>
      @if ($errors->has('provinsi_id')) <p class="help-block">{{ $errors->first('provinsi_id') }}</p> @endif
    </div>

    <!-- Kabupaten Form Input -->
    <div class="form-group @if ($errors->has('kabupaten_id')) has-error @endif">
      <label class="control-label col-md-3">Kabupaten
        <span class="required"> * </span>
      </label>
      <div class="col-md-6">
        <select class="form-control" name="kabupaten_id" id="kabupaten_id" required>
          <option value="" disable="true" selected="true">Pilih Kabupaten</option>
        </select>
      </div>
      @if ($errors->has('kabupaten_id')) <p class="help-block">{{ $errors->first('kabupaten_id') }}</p> @endif
    </div>

    <!-- Kecamatan Form Input -->
    <div class="form-group @if ($errors->has('kecamatan_id')) has-error @endif">
      <label class="control-label col-md-3">Kecamatan
        <span class="required"> * </span>
      </label>
      <div class="col-md-6">
        <select class="form-control" name="kecamatan_id" id="kecamatan_id" required>
          <option value="" disable="true" selected="true">Pilih Kecamatan</option>
        </select>
      </div>
      @if ($errors->has('kecamatan_id')) <p class="help-block">{{ $errors->first('kecamatan_id') }}</p> @endif
    </div>

    <!-- Desa Form Input -->
    <div class="form-group @if ($errors->has('desa_id')) has-error @endif">
      <label class="control-label col-md-3">Desa
        <span class="required"> * </span>
      </label>
      <div class="col-md-6">
        <select class="form-control" name="desa_id" id="desa_id" required>
          <option value="" disable="true" selected="true">Pilih Desa</option>
        </select>
      </div>
      @if ($errors->has('desa_id')) <p class="help-block">{{ $errors->first('desa_id') }}</p> @endif
    </div>

    <!-- Nama Kelompok Form Input -->
    <div class="form-group @if ($errors->has('nama')) has-error @endif">
      <label class="control-label col-md-3">Nama Kelompok
          <span class="required"> * </span>
      </label>
      <div class="col-md-6">
        {{ Form::text('nama', null, ['class' => 'form-control', 'placeholder' => 'Nama Kelompok', 'required']) }}
      </div>
      @if ($errors->has('nama')) <p class="help-block">{{ $errors->first('nama') }}</p> @endif
  </div>  
    

  
   
   
</div>

@push('scripts')

@endpush