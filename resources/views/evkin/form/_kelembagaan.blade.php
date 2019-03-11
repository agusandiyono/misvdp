 <!-- Poin 1 -->
 <h3 class="form-section font-blue">1. Kelembagaan Kelompok</h3>
    <!-- Poin 1.1 -->
    <h4 class="form-section font-blue">1.1 Apakah Kelompok memiliki Struktur pengelola sebagai Berikut?</h4>
    
    <!-- Ketua Kelompok Input -->
    <div class="form-group @if ($errors->has('ketua_kelompok')) has-error @endif">
      <label class="control-label col-md-3">Ketua Kelompok?
        <span class="required"> * </span>
      </label>
      <div class="col-md-2">
      {!! Form::select('ketua_kelompok', ['1' => 'Ya', '0' => 'Tidak'], null, ['class' => 'form-control', 'placeholder' => 'Pilih...', 'required']) !!}
      </div>
      <div class="col-md-4">
      {{ Form::text('ket_ketua_kelompok', null, ['class' => 'form-control', 'placeholder' => 'Keterangan']) }}
      </div>
      @if ($errors->has('ketua_kelompok')) <p class="help-block">{{ $errors->first('ketua_kelompok') }}</p> @endif
    </div>

    <!--   Input -->
    <div class="form-group @if ($errors->has('bendahara')) has-error @endif">
      <label class="control-label col-md-3">Bendahara?
        <span class="required"> * </span>
      </label>
      <div class="col-md-2">
      {!! Form::select('bendahara', ['1' => 'Ya', '0' => 'Tidak'], null, ['class' => 'form-control', 'placeholder' => 'Pilih...', 'required']) !!}
      </div>
      <div class="col-md-4">
      {{ Form::text('ket_bendahara', null, ['class' => 'form-control', 'placeholder' => 'Keterangan']) }}
      </div>
      @if ($errors->has('bendahara')) <p class="help-block">{{ $errors->first('bendahara') }}</p> @endif
    </div>
    <!--   Input -->
    <div class="form-group @if ($errors->has('sekretaris')) has-error @endif">
      <label class="control-label col-md-3">Sekretaris?
        <span class="required"> * </span>
      </label>
      <div class="col-md-2">
      {!! Form::select('sekretaris', ['1' => 'Ya', '0' => 'Tidak'], null, ['class' => 'form-control', 'placeholder' => 'Pilih...', 'required']) !!}
      </div>
      <div class="col-md-4">
      {{ Form::text('ket_sekretaris', null, ['class' => 'form-control', 'placeholder' => 'Keterangan']) }}
      </div>
      @if ($errors->has('sekretaris')) <p class="help-block">{{ $errors->first('sekretaris') }}</p> @endif
    </div>
    <!--   Input -->
    <div class="form-group @if ($errors->has('pemasaran')) has-error @endif">
      <label class="control-label col-md-3">Seksi Pemasaran?
        <span class="required"> * </span>
      </label>
      <div class="col-md-2">
      {!! Form::select('pemasaran', ['1' => 'Ya', '0' => 'Tidak'], null, ['class' => 'form-control', 'placeholder' => 'Pilih...', 'required']) !!}
      </div>
      <div class="col-md-4">
      {{ Form::text('ket_pemasaran', null, ['class' => 'form-control', 'placeholder' => 'Keterangan']) }}
      </div>
      @if ($errors->has('pemasaran')) <p class="help-block">{{ $errors->first('pemasaran') }}</p> @endif
    </div>
    
    <!--   Input -->
    <div class="form-group @if ($errors->has('peralatan')) has-error @endif">
      <label class="control-label col-md-3">Seksi Peralatan?
        <span class="required"> * </span>
      </label>
      <div class="col-md-2">
      {!! Form::select('peralatan', ['1' => 'Ya', '0' => 'Tidak'], null, ['class' => 'form-control', 'placeholder' => 'Pilih...', 'required']) !!}
      </div>
      <div class="col-md-4">
      {{ Form::text('ket_peralatan', null, ['class' => 'form-control', 'placeholder' => 'Keterangan']) }}
      </div>
      @if ($errors->has('peralatan')) <p class="help-block">{{ $errors->first('peralatan') }}</p> @endif
    </div>

    <!--   Input -->
    <div class="form-group @if ($errors->has('pengelola_lain')) has-error @endif">
      <label class="control-label col-md-3">Pengurus Lainnya, sebutkan
      </label>
      
      <div class="col-md-2">
      {{ Form::text('pengelola_lain', null, ['class' => 'form-control', 'placeholder' => 'Lainnya']) }}        
      </div>
      <div class="col-md-4">
      {{ Form::text('ket_pengelola_lain', null, ['class' => 'form-control', 'placeholder' => 'Keterangan']) }}
      </div>
      @if ($errors->has('pengelola_lain')) <p class="help-block">{{ $errors->first('pengelola_lain') }}</p> @endif
    </div>

    <!-- Poin 1.2 -->
    <h4 class="form-section font-blue">1.2 Apakah Kelompok berperan dalam?</h4>
    <div class="form-group">
      <div class="col-md-3">        
      </div>
      <div class="col-md-6">
      <code>Jika jawannya "tidak berperan" harap dituliskan alasannya</code>
      </div>
    </div>
    <!--   Input -->
    <div class="form-group @if ($errors->has('perencanaan')) has-error @endif">
      <label class="control-label col-md-3">a. Perencanaan Bersama Masyarakat? 
        <span class="required"> * </span>
      </label>
      <div class="col-md-2">
      {!! Form::select('perencanaan', ['1' => 'Berperan', '0' => 'Tidak Berperan'], null, ['class' => 'form-control', 'placeholder' => 'Pilih...', 'required']) !!}
      </div>
      <div class="col-md-4">
      {{ Form::text('ket_perencanaan', null, ['class' => 'form-control', 'placeholder' => 'Keterangan']) }}
      </div>
      @if ($errors->has('perencanaan')) <p class="help-block">{{ $errors->first('perencanaan') }}</p> @endif
    </div>
    <!--   Input -->
    <div class="form-group @if ($errors->has('mkpp')) has-error @endif">
      <label class="control-label col-md-3">b. Musyawarah Kampung? 
        <span class="required"> * </span>
      </label>
      <div class="col-md-2">
      {!! Form::select('mkpp', ['1' => 'Berperan', '0' => 'Tidak Berperan'], null, ['class' => 'form-control', 'placeholder' => 'Pilih...', 'required']) !!}
      </div>
      <div class="col-md-4">
      {{ Form::text('ket_mkpp', null, ['class' => 'form-control', 'placeholder' => 'Keterangan']) }}
      </div>
      @if ($errors->has('mkpp')) <p class="help-block">{{ $errors->first('mkpp') }}</p> @endif
    </div>
    
    <!--   Input -->
    <div class="form-group @if ($errors->has('mkp1')) has-error @endif">
      <label class="control-label col-md-3">c. Pencermatan pagu indikatif?
        <span class="required"> * </span>
      </label>
      <div class="col-md-2">
      {!! Form::select('mkp1', ['1' => 'Berperan', '0' => 'Tidak Berperan'], null, ['class' => 'form-control', 'placeholder' => 'Pilih...', 'required']) !!}
      </div>
      <div class="col-md-4">
      {{ Form::text('ket_mkp1', null, ['class' => 'form-control', 'placeholder' => 'Keterangan']) }}
      </div>
      @if ($errors->has('mkp1')) <p class="help-block">{{ $errors->first('mkp1') }}</p> @endif
    </div>

    <!--   Input -->
    <div class="form-group @if ($errors->has('mkp2')) has-error @endif">
      <label class="control-label col-md-3">d. Penetapan RKP kampung dan sosialisasi?
        <span class="required"> * </span>
      </label>
      <div class="col-md-2">
      {!! Form::select('mkp2', ['1' => 'Berperan', '0' => 'Tidak Berperan'], null, ['class' => 'form-control', 'placeholder' => 'Pilih...', 'required']) !!}
      </div>
      <div class="col-md-4">
      {{ Form::text('ket_mkp2', null, ['class' => 'form-control', 'placeholder' => 'Keterangan']) }}
      </div>
      @if ($errors->has('mkp2')) <p class="help-block">{{ $errors->first('mkp2') }}</p> @endif
    </div>

    <!--   Input -->
    <div class="form-group @if ($errors->has('mkst')) has-error @endif">
      <label class="control-label col-md-3">e. Musrembang RKP Kampung?
        <span class="required"> * </span>
      </label>
      <div class="col-md-2">
      {!! Form::select('mkst', ['1' => 'Berperan', '0' => 'Tidak Berperan'], null, ['class' => 'form-control', 'placeholder' => 'Pilih...', 'required']) !!}
      </div>
      <div class="col-md-4">
      {{ Form::text('ket_mkst', null, ['class' => 'form-control', 'placeholder' => 'Keterangan']) }}
      </div>
      @if ($errors->has('mkst')) <p class="help-block">{{ $errors->first('mkst') }}</p> @endif
    </div>

    <!--   Input -->
    <div class="form-group @if ($errors->has('pemantau_pelaksanaan')) has-error @endif">
      <label class="control-label col-md-3">f. Penyusunan rancangan RKP Kampung?
        <span class="required"> * </span>
      </label>
      <div class="col-md-2">
      {!! Form::select('pemantau_pelaksanaan', ['1' => 'Berperan', '0' => 'Tidak Berperan'], null, ['class' => 'form-control', 'placeholder' => 'Pilih...', 'required']) !!}
      </div>
      <div class="col-md-4">
      {{ Form::text('ket_pemantau_pelaksanaan', null, ['class' => 'form-control', 'placeholder' => 'Keterangan']) }}
      </div>
      @if ($errors->has('pemantau_pelaksanaan')) <p class="help-block">{{ $errors->first('pemantau_pelaksanaan') }}</p> @endif
    </div>

    <!--   Input -->
    <div class="form-group @if ($errors->has('peserta_musrembang')) has-error @endif">
      <label class="control-label col-md-3">g. Jumlah Masyarakat yang mengikuti Musrembang        
      </label>
      <div class="col-md-2">
      {!! Form::number('peserta_musrembang', null, ['class' => 'form-control', 'min'=>'0', 'placeholder' => 'Orang']) !!}
      </div>
      <div class="col-md-4">
      {{ Form::text('ket_peserta_musrembang', null, ['class' => 'form-control', 'placeholder' => 'Keterangan']) }}
      </div>
      @if ($errors->has('peserta_musrembang')) <p class="help-block">{{ $errors->first('peserta_musrembang') }}</p> @endif
    </div>