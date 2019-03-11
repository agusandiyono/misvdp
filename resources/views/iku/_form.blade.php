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

    <!-- Nama Kontak Form Input -->
    <div class="form-group @if ($errors->has('nama_kontak')) has-error @endif">
      <label class="control-label col-md-3">Nama Kontak
          <span class="required"> * </span>
      </label>
      <div class="col-md-6">
        {{ Form::text('nama_kontak', null, ['class' => 'form-control', 'placeholder' => 'Nama Kontak', 'required']) }}
      </div>
      @if ($errors->has('nama_kontak')) <p class="help-block">{{ $errors->first('nama_kontak') }}</p> @endif
    </div>

    <!-- No HP Form Input -->
    <div class="form-group @if ($errors->has('no_hp')) has-error @endif">
      <label class="control-label col-md-3">No HP
          <span class="required"> * </span>
      </label>
      <div class="col-md-6">
        {{ Form::text('no_hp', null, ['class' => 'form-control', 'placeholder' => 'No HP', 'required']) }}
      </div>
      @if ($errors->has('no_hp')) <p class="help-block">{{ $errors->first('no_hp') }}</p> @endif
    </div>

     <!-- Sektor Form Input -->
     <div class="form-group @if ($errors->has('sektor')) has-error @endif">
      <label class="control-label col-md-3">Sektor
          <span class="required"> * </span>
      </label>
      <div class="col-md-6">
      
      <select class="form-control" name="sektor" id="sektor" required autocomplete="off">
          <option value="" disable="true" selected="true">Pilih Aspek</option>
          <option value="Pertanian">Pertanian</option>
          <option value="Perkebunan">Perkebunan</option>
          <option value="Perikanan">Perikanan</option>
          <option value="Pertambangan">Pertambangan</option>      
        </select>
      </div>
      @if ($errors->has('sektor')) <p class="help-block">{{ $errors->first('sektor') }}</p> @endif
    </div>

    <!-- Jenis Form Input -->
    <div class="form-group @if ($errors->has('jenis_ttg')) has-error @endif ">
      <label class="control-label col-md-3">Aspek
          <span class="required"> * </span>
      </label>
      <div class="col-md-6 mt-checkbox-list">                                            
        <label class="mt-checkbox mt-checkbox-outline"> Pengolahan pangan
            <input type="checkbox" value="1" name="jenis_ttg[]" />
            <span></span>
        </label>
        <label class="mt-checkbox mt-checkbox-outline"> Pemanfaatan energi
            <input type="checkbox" value="2" name="jenis_ttg[]" />
            <span></span>
        </label>
        <label class="mt-checkbox mt-checkbox-outline"> Penyedian & pemeliharaan infrstruktur
            <input type="checkbox" value="3" name="jenis_ttg[]" />
            <span></span>
        </label>
        <label class="mt-checkbox mt-checkbox-outline"> Pengelolaan lingkungan
            <input type="checkbox" value="4" name="jenis_ttg[]" />
            <span></span>
        </label>
        <label class="mt-checkbox mt-checkbox-outline"> Pemampuan ekonomi
            <input type="checkbox" value="5" name="jenis_ttg[]" />
            <span></span>
        </label>
      </div>    
      @if ($errors->has('jenis_ttg')) <p class="help-block">{{ $errors->first('jenis_ttg') }}</p> @endif
    </div>

    <!-- Komoditas Form Input -->
    <div class="form-group @if ($errors->has('komoditas')) has-error @endif">
      <label class="control-label col-md-3">Komoditas
          <span class="required"> * </span>
      </label>
      <div class="col-md-6">
        {{ Form::textarea('komoditas', null, ['class' => 'form-control', 'placeholder' => 'Komoditas', 'required']) }}
      </div>
      @if ($errors->has('komoditas')) <p class="help-block">{{ $errors->first('komoditas') }}</p> @endif
    </div>

    <!-- Nama TTG Form Input -->
    <div class="form-group @if ($errors->has('nama_ttg')) has-error @endif">
      <label class="control-label col-md-3">Nama TTG
          <span class="required"> * </span>
      </label>
      <div class="col-md-6">
        {{ Form::text('nama_ttg', null, ['class' => 'form-control', 'placeholder' => 'Nama TTG', 'required']) }}
      </div>
      @if ($errors->has('nama_ttg')) <p class="help-block">{{ $errors->first('nama_ttg') }}</p> @endif
    </div>

    <!-- Harga Form Input -->
    <div class="form-group @if ($errors->has('harga')) has-error @endif">
      <label class="control-label col-md-3">Harga
          <span class="required"> * </span>
      </label>
      <div class="col-md-6">
        {{ Form::number('harga', null, ['class' => 'form-control', 'min' => '0', 'placeholder' => 'Harga', 'required']) }}
      </div>
      @if ($errors->has('harga')) <p class="help-block">{{ $errors->first('harga') }}</p> @endif
    </div>    

    <!-- Spesifikasi Form Input -->
    <div class="form-group @if ($errors->has('deskripsi')) has-error @endif">
      <label class="control-label col-md-3">Spesifikasi Alat (Deskripsi)
          <span class="required"> * </span>
      </label>
      <div class="col-md-6">
        {{ Form::textarea('deskripsi', null, ['class' => 'form-control', 'placeholder' => 'Spesifikasi Alat', 'required']) }}
      </div>
      @if ($errors->has('deskripsi')) <p class="help-block">{{ $errors->first('deskripsi') }}</p> @endif
    </div>

    <!-- Foto Form Input -->
    <div class="form-group @if ($errors->has('foto')) has-error @endif">
      <label class="control-label col-md-3">Foto
          <span class="required"> * </span>
      </label>
      <div class="col-md-6">
        {{ Form::file('foto', null, ['class' => 'form-control', 'placeholder' => 'Harga', 'required']) }}
      </div>
      @if ($errors->has('foto')) <p class="help-block">{{ $errors->first('foto') }}</p> @endif
    </div>
   
</div>

@push('scripts')

@endpush