<div class="form-body">
  <!-- Jenis Kegiatan Form Input -->
  <div class="form-group @if ($errors->has('jenis')) has-error @endif">
      {!! Form::label('jenis', 'Nama Kegiatan') !!}
      <select class="form-control" name="jenis" id="jenis">
        <option value="" disable="true" selected="true">- Pilih Kegiatan -</option>
        @foreach ($jenis_kegiatan as $keg => $row)
          <option value="{{$row->jenis_kegiatan}}" @if(old('jenis')&&old('jenis')== $row->jenis_kegiatan) selected='selected' @endif>{{ $row->jenis_kegiatan }}</option>
        @endforeach
      </select>
      @if ($errors->has('jenis')) <p class="help-block">{{ $errors->first('jenis') }}</p> @endif

  </div>


  <!-- Nama Kegiatan Form Input -->
  <div class="form-group @if ($errors->has('nama')) has-error @endif">
      {!! Form::label('nama', 'Sub Kegiatan') !!}
      {!! Form::textarea('nama', null, ['class' => 'form-control', 'placeholder' => 'Sub Kegiatan']) !!}
      @if ($errors->has('title')) <p class="help-block">{{ $errors->first('title') }}</p> @endif
  </div>

  <!-- Tanggal Kegiatan Form Input -->
  <div class="form-group @if ($errors->has('tanggal')) has-error @endif">
      {!! Form::label('tanggal', 'Tanggal Kegiatan') !!}

      {{ Form::text('tanggal', null, ['class' => 'form-control datepicker', 'id'=>'datetimepicker']) }}
      @if ($errors->has('tanggal')) <p class="help-block">{{ $errors->first('tanggal') }}</p> @endif
  </div>


  <!-- Title of Provinsi Kegiatan -->
  <div class="form-group @if ($errors->has('provinsi_id')) has-error @endif">
    {!! Form::label('provinsi_id', 'Provinsi') !!}
    <select class="form-control" name="provinsi_id" id="provinsi_id">
      <option value="" disable="true" selected="true">Pilih Provinsi</option>
      @foreach ($provinsi as $key => $value)
        <option value="{{$value->id}}">{{ $value->nama }}</option>
      @endforeach
    </select>
      @if ($errors->has('provinsi_id')) <p class="help-block">{{ $errors->first('provinsi_id') }}</p> @endif
  </div>

  <!-- Title of Kabupaten Kegiatan -->
  <div class="form-group @if ($errors->has('provinsi_id')) has-error @endif">
    {!! Form::label('kabupaten_id', 'Kabupaten') !!}
    <select class="form-control" name="kabupaten_id" id="kabupaten_id">
      <option value="" disable="true" selected="true">Pilih Kabupaten</option>
    </select>
    @if ($errors->has('kabupaten_id')) <p class="help-block">{{ $errors->first('kabupaten_id') }}</p> @endif
  </div>

  <!-- Title of Kecamatan Kegiatan -->
  <div class="form-group @if ($errors->has('kecamatan_id')) has-error @endif">
    {!! Form::label('kecamatan_id', 'Kecamatan') !!}
    <select class="form-control" name="kecamatan_id" id="kecamatan_id">
      <option value="" disable="true" selected="true">Pilih Kecamatan</option>
    </select>
    @if ($errors->has('kecamatan_id')) <p class="help-block">{{ $errors->first('kecamatan_id') }}</p> @endif
  </div>

  <!-- Title of Desa Kegiatan -->
  <div class="form-group @if ($errors->has('desa_id')) has-error @endif">
    {!! Form::label('desa_id', 'Desa') !!}
    <select class="form-control" name="desa_id" id="desa_id">
      <option value="" disable="true" selected="true">Pilih Desa</option>
    </select>
    @if ($errors->has('desa_id')) <p class="help-block">{{ $errors->first('desa_id') }}</p> @endif
  </div>


  <!-- Progress Kegiatan Form Input -->
  <div class="form-group @if ($errors->has('status')) has-error @endif">
      {!! Form::label('status', 'Progress') !!}
      {!! Form::select('status', ['0' => 'Belum Terlaksana', '1' => 'Sudah Terlaksana'], null, ['class' => 'form-control', 'placeholder' => 'Pilih...']) !!}
      @if ($errors->has('status')) <p class="help-block">{{ $errors->first('status') }}</p> @endif
  </div>

  <!-- Progress Form Input -->
  <div class="form-group @if ($errors->has('deskripsi')) has-error @endif">
      {!! Form::label('deskripsi', 'Gambaran Pelaksanaan Kegiatan') !!}
      {!! Form::textarea('deskripsi', null, ['class' => 'form-control ckeditor', 'placeholder' => 'Gambaran Pelaksanaan Kegiatan...']) !!}
      @if ($errors->has('deskripsi')) <p class="help-block">{{ $errors->first('deskripsi') }}</p> @endif
  </div>

  <!-- Sasaran Kegiatan Form Input -->
  <div class="form-group @if ($errors->has('sasaran')) has-error @endif">
      {!! Form::label('sasaran', 'Sasaran') !!}
      {!! Form::text('sasaran', null, ['class' => 'form-control', 'placeholder' => 'Sasaran']) !!}
      @if ($errors->has('sasaran')) <p class="help-block">{{ $errors->first('sasaran') }}</p> @endif
  </div>


  <!-- Sasaran Kegiatan Form Input -->
  <div class="form-group @if ($errors->has('jumlah_lk')) has-error @endif">
      {!! Form::label('jumlah_lk', 'Jumlah Peserta Laki-laki') !!}
      {!! Form::text('jumlah_lk', null, ['class' => 'form-control', 'placeholder' => 'Jumlah Peserta Laki-laki']) !!}
      @if ($errors->has('jumlah_lk')) <p class="help-block">{{ $errors->first('jumlah_lk') }}</p> @endif
  </div>

  <!-- Sasaran Kegiatan Form Input -->
  <div class="form-group @if ($errors->has('jumlah_p')) has-error @endif">
      {!! Form::label('jumlah_p', 'Jumlah Peseta Perempuan') !!}
      {!! Form::text('jumlah_p', null, ['class' => 'form-control', 'placeholder' => 'Jumlah Peserta Perempuan']) !!}
      @if ($errors->has('jumlah_p')) <p class="help-block">{{ $errors->first('jumlah_p') }}</p> @endif
  </div>

  <!-- Sasaran Kegiatan Form Input -->
  <div class="form-group @if ($errors->has('foto')) has-error @endif">
      {!! Form::label('foto', 'Foto') !!}
      {!! Form::file('foto', null, ['class' => 'form-control', 'placeholder' => 'Foto']) !!}
      @if ($errors->has('foto')) <p class="help-block">{{ $errors->first('foto') }}</p> @endif
  </div>

  <!-- Sasaran Kegiatan Form Input -->
  <div class="form-group @if ($errors->has('video')) has-error @endif">
      {!! Form::label('video', 'Video') !!}
      {!! Form::file('video', null, ['class' => 'form-control', 'placeholder' => 'Video']) !!}
      @if ($errors->has('video')) <p class="help-block">{{ $errors->first('video') }}</p> @endif
  </div>

  <!-- Sasaran Kegiatan Form Input -->
  <div class="form-group @if ($errors->has('jumlah_paham')) has-error @endif">
      {!! Form::label('jumlah_paham', 'Berapa Persen Sasaran Dapat Memenuhi') !!}
      {!! Form::text('jumlah_paham', null, ['class' => 'form-control', 'placeholder' => 'Berapa Persen Sasaran Dapat Memenuhi']) !!}
      @if ($errors->has('jumlah_paham')) <p class="help-block">{{ $errors->first('jumlah_paham') }}</p> @endif
  </div>

  <!-- Text body Form Input -->
  <div class="form-group @if ($errors->has('alasan_paham')) has-error @endif">
      {!! Form::label('alasan_paham', 'Apa Alasan Anda, Mereka dapat Memahami?') !!}
      {!! Form::textarea('alasan_paham', null, ['class' => 'form-control ckeditor', 'placeholder' => 'Apa Alasan Anda, Mereka dapat Memahami?']) !!}
      @if ($errors->has('alasan_paham')) <p class="help-block">{{ $errors->first('alasan_paham') }}</p> @endif
  </div>

  <!-- Text body Form Input -->
  <div class="form-group @if ($errors->has('masalah')) has-error @endif">
      {!! Form::label('masalah', 'Masalah') !!}
      {!! Form::textarea('masalah', null, ['class' => 'form-control ckeditor', 'placeholder' => 'Masalah']) !!}
      @if ($errors->has('masalah')) <p class="help-block">{{ $errors->first('masalah') }}</p> @endif
  </div>

  <!-- Text body Form Input -->
  <div class="form-group @if ($errors->has('saran')) has-error @endif">
      {!! Form::label('saran', 'Rencana Tindak Lanjut') !!}
      {!! Form::textarea('saran', null, ['class' => 'form-control ckeditor', 'placeholder' => 'Rencana Tindak Lanjut']) !!}
      @if ($errors->has('saran')) <p class="help-block">{{ $errors->first('saran') }}</p> @endif
  </div>

  <!-- Text body Form Input -->
  <div class="form-group @if ($errors->has('rencana_tindak_lanjut')) has-error @endif">
      {!! Form::label('rencana_tindak_lanjut', 'Tindak Lanjut Bulan Lalu') !!}
      {!! Form::textarea('rencana_tindak_lanjut', null, ['class' => 'form-control ckeditor', 'placeholder' => 'Tindak Lanjut Bulan Lalu']) !!}
      @if ($errors->has('rencana_tindak_lanjut')) <p class="help-block">{{ $errors->first('rencana_tindak_lanjut') }}</p> @endif
  </div>
</div>
@push('scripts')
<script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
@endpush
