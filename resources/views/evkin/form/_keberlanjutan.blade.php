    <h3 class="form-section font-blue">VI. Daya Dukung Keberlanjutan Kelompok Tani</h3>
    <h5 class="form-section font-blue">6.1. </h5>
    
    <!-- Pewawancara Form Input -->
    <div class="form-group @if ($errors->has('dukungan_dd')) has-error @endif">
      <label class="control-label col-md-3">Apakah ada bantuan pendanaan atau lainnya?
        <span class="required"> * </span>
      </label>
      <div class="col-md-2">
      {!! Form::select('dukungan_dd', ['1' => 'Ada', '0' => 'Tidak Ada'], null, ['class' => 'form-control', 'placeholder' => 'Pilih...', 'required', 'id' =>'dukungan_dd']) !!}      
      </div>
      <div class="col-md-4">
      {{ Form::text('ket_dukungan_dd', null, ['class' => 'form-control', 'placeholder' => 'Keterangan']) }}
      </div>
      
      @if ($errors->has('dukungan_dd')) <p class="help-block">{{ $errors->first('dukungan_dd') }}</p> @endif
    </div>

    <!-- Pewawancara Form Input -->
    <div class="form-group @if ($errors->has('dukungan_dd')) has-error @endif">
      <label class="control-label col-md-3">a. Dana Kampung
        <span class="required"> * </span>
      </label>
      <div class="col-md-2">
      {!! Form::select('dukungan_dd', ['1' => 'Ada', '0' => 'Tidak Ada'], null, ['class' => 'form-control', 'placeholder' => 'Pilih...', 'required', 'id' =>'dukungan_dd']) !!}      
      </div>
      <div class="col-md-4">
      {{ Form::text('ket_dukungan_dd', null, ['class' => 'form-control', 'placeholder' => 'Keterangan']) }}
      </div>
      
      @if ($errors->has('dukungan_dd')) <p class="help-block">{{ $errors->first('dukungan_dd') }}</p> @endif
    </div>
    
    <!-- Pewawancara Form Input -->
    <div class="form-group @if ($errors->has('alokasi_dd')) has-error @endif">
      <label class="control-label col-md-3">b. Alokasi Dana Desa (ADD)
        <span class="required"> * </span>
      </label>
      <div class="col-md-2">
      {!! Form::select('alokasi_dd', ['1' => 'Ada', '0' => 'Tidak Ada'], null, ['class' => 'form-control',  'id' => 'alokasi_dd', 'placeholder' => 'Pilih...', 'required']) !!}
      </div>
      <div class="col-md-4">
      {{ Form::text('ket_alokasi_dd', null, ['class' => 'form-control', 'placeholder' => 'Keterangan']) }}
      </div>
      @if ($errors->has('alokasi_dd')) <p class="help-block">{{ $errors->first('alokasi_dd') }}</p> @endif
    </div>
    
    <!-- Ketua Form Input -->
    <div class="form-group @if ($errors->has('skpd_terkait')) has-error @endif">
      <label class="control-label col-md-3">c. Dana Alokasi Khusus (Prospek)
        <span class="required"> * </span>
      </label>
      <div class="col-md-2">
      {!! Form::select('skpd_terkait', ['1' => 'Ada', '0' => 'Tidak Ada'], null, ['class' => 'form-control', 'id' => 'skpd_terkait', 'placeholder' => 'Pilih...', 'required']) !!}
      </div>
      <div class="col-md-4">
      {{ Form::text('ket_skpd_terkait', null, ['class' => 'form-control', 'placeholder' => 'Keterangan']) }}
      </div>
      @if ($errors->has('skpd_terkait')) <p class="help-block">{{ $errors->first('skpd_terkait') }}</p> @endif
    </div>

    <!-- Ketua Form Input -->
    <div class="form-group @if ($errors->has('institusi_lain')) has-error @endif">
      <label class="control-label col-md-3">d. Lainnya sebutkan institusi  yang membantu
        <span class="required"> * </span>
      </label>
      <div class="col-md-2">
      {!! Form::select('institusi_lain', ['1' => 'a. Ada', '0' => 'b. Tidak Ada'], null, ['class' => 'form-control', 'id' => 'institusi_lain', 'placeholder' => 'Pilih...', 'required']) !!}
      </div>
      <div class="col-md-4">
      {{ Form::text('ket_institusi_lain', null, ['class' => 'form-control', 'placeholder' => 'Keterangan']) }}
      </div>
      @if ($errors->has('institusi_lain')) <p class="help-block">{{ $errors->first('institusi_lain') }}</p> @endif
    </div>

    <h5 class="form-section font-blue">6.2. </h5>
    <!-- Ketua Form Input -->
    <div class="form-group @if ($errors->has('produksi_berjalan')) has-error @endif">
      <label class="control-label col-md-3">Apakah perputaran Usaha Tani berjalan?
        <span class="required"> * </span>
      </label>
      <div class="col-md-2">
      {!! Form::select('produksi_berjalan', ['1' => 'a. Ya', '0' => 'b. Tidak'], null, ['class' => 'form-control', 'id' => 'produksi_berjalan', 'placeholder' => 'Pilih...', 'required']) !!}
      </div>
      <div class="col-md-4">
      {{ Form::text('ket_produksi_berjalan', null, ['class' => 'form-control', 'placeholder' => 'Keterangan']) }}
      </div>
      @if ($errors->has('produksi_berjalan')) <p class="help-block">{{ $errors->first('produksi_berjalan') }}</p> @endif
    </div>

    <h5 class="form-section font-blue">6.3. </h5>
    <!-- Ketua Form Input -->
    <div class="form-group @if ($errors->has('akses_pasar')) has-error @endif">
      <label class="control-label col-md-3">Apakah Kelompok Tani mempunyai Akses Pasar Yang tetap?
        <span class="required"> * </span>
      </label>
      <div class="col-md-2">
      {!! Form::select('akses_pasar', ['1' => 'a. Ya, mempunyai', '0' => 'b. Tidak'], null, ['class' => 'form-control', 'id' => 'akses_pasar', 'placeholder' => 'Pilih...', 'required']) !!}
      </div>
      <div class="col-md-4">
      {{ Form::text('ket_akses_pasar', null, ['class' => 'form-control', 'placeholder' => 'Keterangan']) }}
      </div>
      @if ($errors->has('akses_pasar')) <p class="help-block">{{ $errors->first('akses_pasar') }}</p> @endif
    </div>

@push('scripts')

@endpush