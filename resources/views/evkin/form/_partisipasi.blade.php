    <!-- Poin 4 -->
    <h3 class="form-section font-blue">IV. Kontribusi Masyarakat</h3>

    <h4 class="form-section font-blue">Apakah Masyarakat turut berpartisi dalam:</h4>
    <!-- Ketua Form Input -->
    <div class="form-group @if ($errors->has('perencanaan_partisipasi')) has-error @endif">
      <label class="control-label col-md-3">a. Perencanaan
        <span class="required"> * </span>
      </label>
      <div class="col-md-2">
      {!! Form::select('perencanaan_partisipasi', ['1' => 'Berperan', '0' => 'Tidak Berperan'], null, ['class' => 'form-control', 'placeholder' => 'Pilih...' , 'id' => 'perencanaan_partisipasi', 'required']) !!}
      </div>
      <div class="col-md-4">
      {{ Form::text('ket_perencanaan_partisipasi', null, ['class' => 'form-control', 'placeholder' => 'Keterangan']) }}
      </div>
      @if ($errors->has('perencanaan_partisipasi')) <p class="help-block">{{ $errors->first('perencanaan_partisipasi') }}</p> @endif
    </div>

    <!-- Ketua Form Input -->
    <div class="form-group @if ($errors->has('musdes')) has-error @endif">
      <label class="control-label col-md-3">b. Musyawarah Kampung?
        <span class="required"> * </span>
      </label>
      <div class="col-md-2">
      {!! Form::select('musdes', ['1' => 'Berperan', '0' => 'Tidak Berperan'], null, ['class' => 'form-control', 'placeholder' => 'Pilih...' , 'id' => 'musdes', 'required']) !!}
      </div>
      <div class="col-md-4">
      {{ Form::text('ket_musdes', null, ['class' => 'form-control', 'placeholder' => 'Keterangan']) }}
      </div>
      @if ($errors->has('musdes')) <p class="help-block">{{ $errors->first('musdes') }}</p> @endif
    </div>

    <!-- Ketua Form Input -->
    <div class="form-group @if ($errors->has('penetapan_rkpdes')) has-error @endif">
      <label class="control-label col-md-3">c. Penetapan RKP kampung dan sosialisasi
        <span class="required"> * </span>
      </label>
      <div class="col-md-2">
      {!! Form::select('penetapan_rkpdes', ['1' => 'Berperan', '0' => 'Tidak Berperan'], null, ['class' => 'form-control', 'placeholder' => 'Pilih...' , 'id' => 'penetapan_rkpdes', 'required']) !!}
      </div>
      <div class="col-md-4">
      {{ Form::text('ket_penetapan_rkpdes', null, ['class' => 'form-control', 'placeholder' => 'Keterangan']) }}
      </div>
      @if ($errors->has('penetapan_rkpdes')) <p class="help-block">{{ $errors->first('penetapan_rkpdes') }}</p> @endif
    </div>

    <!-- Ketua Form Input -->
    <div class="form-group @if ($errors->has('musrembangdes')) has-error @endif">
      <label class="control-label col-md-3">d. Musrembang Kampung RKP Kampung/Desa
        <span class="required"> * </span>
      </label>
      <div class="col-md-2">
      {!! Form::select('musrembangdes', ['1' => 'Berperan', '0' => 'Tidak Berperan'], null, ['class' => 'form-control', 'placeholder' => 'Pilih...' , 'id' => 'musrembangdes', 'required']) !!}
      </div>
      <div class="col-md-4">
      {{ Form::text('ket_musrembangdes', null, ['class' => 'form-control', 'placeholder' => 'Keterangan']) }}
      </div>
      @if ($errors->has('musrembangdes')) <p class="help-block">{{ $errors->first('musrembangdes') }}</p> @endif
    </div>

     <!-- Ketua Form Input -->
     <div class="form-group @if ($errors->has('penyusunan_rkpdes')) has-error @endif">
      <label class="control-label col-md-3">e. Penyusunan rancangan RKP Kampung
        <span class="required"> * </span>
      </label>
      <div class="col-md-2">
      {!! Form::select('penyusunan_rkpdes', ['1' => 'Berperan', '0' => 'Tidak Berperan'], null, ['class' => 'form-control', 'placeholder' => 'Pilih...' , 'id' => 'penyusunan_rkpdes', 'required']) !!}
      </div>
      <div class="col-md-4">
      {{ Form::text('ket_penyusunan_rkpdes', null, ['class' => 'form-control', 'placeholder' => 'Keterangan']) }}
      </div>
      @if ($errors->has('penyusunan_rkpdes')) <p class="help-block">{{ $errors->first('penyusunan_rkpdes') }}</p> @endif
    </div>

    <!-- Ketua Form Input -->
    <div class="form-group @if ($errors->has('pelaksanaan_pemantauan')) has-error @endif">
      <label class="control-label col-md-3">f. Pelaksanaan Pemantauan
        <span class="required"> * </span>
      </label>
      <div class="col-md-2">
      {!! Form::select('pelaksanaan_pemantauan', ['1' => 'Berperan', '0' => 'Tidak Berperan'], null, ['class' => 'form-control', 'placeholder' => 'Pilih...' , 'id' => 'pelaksanaan_pemantauan', 'required']) !!}
      </div>
      <div class="col-md-4">
      {{ Form::text('ket_pelaksanaan_pemantauan', null, ['class' => 'form-control', 'placeholder' => 'Keterangan']) }}
      </div>
      @if ($errors->has('pelaksanaan_pemantauan')) <p class="help-block">{{ $errors->first('pelaksanaan_pemantauan') }}</p> @endif
    </div>

    <!-- Ketua Form Input -->
    <div class="form-group @if ($errors->has('pendanaan_usaha')) has-error @endif">
      <label class="control-label col-md-3">g. Pendanaan dalam usaha produktif pertanian
        <span class="required"> * </span>
      </label>
      <div class="col-md-2">
      {!! Form::select('pendanaan_usaha', ['1' => 'Ya', '0' => 'Tidak'], null, ['class' => 'form-control', 'placeholder' => 'Pilih...' , 'id' => 'pendanaan_usaha', 'required']) !!}
      </div>
      <div class="col-md-4">
      {{ Form::text('ket_pendanaan_usaha', null, ['class' => 'form-control', 'placeholder' => 'Keterangan']) }}
      </div>
      @if ($errors->has('pendanaan_usaha')) <p class="help-block">{{ $errors->first('pendanaan_usaha') }}</p> @endif
    </div>

    <!-- Ketua Form Input -->
    <div class="form-group @if ($errors->has('tenaga_usaha')) has-error @endif">
      <label class="control-label col-md-3">h. Tenaga untuk usaha produktif pertanian
        <span class="required"> * </span>
      </label>
      <div class="col-md-2">
      {!! Form::select('tenaga_usaha', ['1' => 'Ya', '0' => 'Tidak'], null, ['class' => 'form-control', 'placeholder' => 'Pilih...' , 'id' => 'tenaga_usaha', 'required']) !!}
      </div>
      <div class="col-md-4">
      {{ Form::text('ket_tenaga_usaha', null, ['class' => 'form-control', 'placeholder' => 'Keterangan']) }}
      </div>
      @if ($errors->has('tenaga_usaha')) <p class="help-block">{{ $errors->first('tenaga_usaha') }}</p> @endif
    </div>

    <!-- Ketua Form Input -->
    <div class="form-group @if ($errors->has('material_pendukung')) has-error @endif">
      <label class="control-label col-md-3">i. Material pendukung dalam kegiatan
        <span class="required"> * </span>
      </label>
      <div class="col-md-2">
      {!! Form::select('material_pendukung', ['1' => 'Ya', '0' => 'Tidak'], null, ['class' => 'form-control', 'placeholder' => 'Pilih...' , 'id' => 'material_pendukung', 'required']) !!}
      </div>
      <div class="col-md-4">
      {{ Form::text('ket_material_pendukung', null, ['class' => 'form-control', 'placeholder' => 'Keterangan']) }}
      </div>
      @if ($errors->has('material_pendukung')) <p class="help-block">{{ $errors->first('material_pendukung') }}</p> @endif
    </div>

    <!-- Ketua Form Input -->
    <div class="form-group @if ($errors->has('partisipasi_lain')) has-error @endif">
      <label class="control-label col-md-3">j. Lainnya, sebutkan
        <span class="required"> * </span>
      </label>
      <div class="col-md-2">
      {!! Form::text('partisipasi_lain', null, ['class' => 'form-control', 'placeholder' => 'Pilih...' , 'id' => 'partisipasi_lain']) !!}
      </div>
      <div class="col-md-4">
      {{ Form::text('ket_partisipasi_lain', null, ['class' => 'form-control', 'placeholder' => 'Keterangan']) }}
      </div>
      @if ($errors->has('partisipasi_lain')) <p class="help-block">{{ $errors->first('partisipasi_lain') }}</p> @endif
    </div>
