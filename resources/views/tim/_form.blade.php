<div class="form-body">
    

    <!-- Nama Kelompok Form Input -->
    <div class="form-group @if ($errors->has('nama')) has-error @endif">
      <label class="control-label col-md-3">Nama Lengkap
          <span class="required"> * </span>
      </label>
      <div class="col-md-6">        
        {{ Form::text('nama',null, ['class' => 'form-control', 'placeholder' => 'Nama Lengkap', 'required']) }}
      </div>
      @if ($errors->has('nama')) <p class="help-block">{{ $errors->first('nama') }}</p> @endif
    </div> 
    
    <!-- Nama Kelompok Form Input -->
    <div class="form-group @if ($errors->has('jabatan')) has-error @endif">
      <label class="control-label col-md-3">Jabatan
          <span class="required"> * </span>
      </label>
      <div class="col-md-6">
        {{ Form::text('jabatan', null, ['class' => 'form-control', 'placeholder' => 'Jabatan', 'required']) }}
      </div>
      @if ($errors->has('jabatan')) <p class="help-block">{{ $errors->first('jabatan') }}</p> @endif
    </div>

    <!-- Nama Kelompok Form Input -->
    <div class="form-group @if ($errors->has('email')) has-error @endif">
      <label class="control-label col-md-3">Email
          <span class="required"> * </span>
      </label>
      <div class="col-md-6">        
        {{ Form::email('email',null, ['class' => 'form-control', 'placeholder' => 'Email']) }}
      </div>
      @if ($errors->has('email')) <p class="help-block">{{ $errors->first('email') }}</p> @endif
    </div> 

    <!-- Nama Kelompok Form Input -->
    <div class="form-group @if ($errors->has('telp')) has-error @endif">
      <label class="control-label col-md-3">No. Telp
          <span class="required"> * </span>
      </label>
      <div class="col-md-6">        
        {{ Form::text('telp',null, ['class' => 'form-control', 'placeholder' => 'No. Telp']) }}
      </div>
      @if ($errors->has('telp')) <p class="help-block">{{ $errors->first('telp') }}</p> @endif
    </div> 

    <!-- Gelombang Form Input -->
    <div class="form-group @if ($errors->has('jenis')) has-error @endif">
      <label class="control-label col-md-3">Jenis
          <span class="required"> * </span>
      </label>
      <div class="col-md-6">      
        {{ Form::select('jenis', ['1' => 'Manajemen', '2' => 'Konsultan', '3' => 'Satker Papua', '4'=>'satker Pabar'], null, ['class' => 'form-control', 'placeholder' => 'Pilih...', 'required']) }}
      </div>
      @if ($errors->has('jenis')) <p class="help-block">{{ $errors->first('jenis') }}</p> @endif
    </div> 
    
    <!-- Gelombang Form Input -->
    <div class="form-group @if ($errors->has('tentang')) has-error @endif">
      <label class="control-label col-md-3">Tentang
          <span class="required"> * </span>
      </label>
      <div class="col-md-6">
        {{ Form::textarea('tentang', null, ['class' => 'form-control', 'placeholder' => 'Tentang', 'required']) }}
      </div>
      @if ($errors->has('tentang')) <p class="help-block">{{ $errors->first('tentang') }}</p> @endif
    </div> 

    <!-- Gelombang Form Input -->
    <div class="form-group @if ($errors->has('fb')) has-error @endif">
      <label class="control-label col-md-3">Facebook          
      </label>
      <div class="col-md-6">
        {{ Form::text('fb', null, ['class' => 'form-control', 'placeholder' => 'Facebook']) }}
      </div>
      @if ($errors->has('fb')) <p class="help-block">{{ $errors->first('fb') }}</p> @endif
    </div> 

    <!-- Gelombang Form Input -->
    <div class="form-group @if ($errors->has('twitter')) has-error @endif">
      <label class="control-label col-md-3">Twitter          
      </label>
      <div class="col-md-6">
        {{ Form::text('twitter', null, ['class' => 'form-control', 'placeholder' => 'Twitter']) }}
      </div>
      @if ($errors->has('twitter')) <p class="help-block">{{ $errors->first('twitter') }}</p> @endif
    </div> 

    <!-- Gelombang Form Input -->
    <div class="form-group @if ($errors->has('ig')) has-error @endif">
      <label class="control-label col-md-3">Instagram          
      </label>
      <div class="col-md-6">
        {{ Form::text('ig', null, ['class' => 'form-control', 'placeholder' => 'Instagram']) }}
      </div>
      @if ($errors->has('ig')) <p class="help-block">{{ $errors->first('ig') }}</p> @endif
    </div> 

    <!-- Foto Form Input -->
    <div class="form-group @if ($errors->has('foto')) has-error @endif">
      <label class="control-label col-md-3">Foto
          <span class="required"> * </span>
      </label>
      <div class="col-md-6">
        {{ Form::file('foto', null, ['class' => 'form-control',  'required']) }}
      </div>
      @if ($errors->has('foto')) <p class="help-block">{{ $errors->first('foto') }}</p> @endif
    </div>


</div>

@push('scripts')

@endpush