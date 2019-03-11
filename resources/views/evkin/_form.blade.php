<div class="form-body">
    

    <!-- Nama Kelompok Form Input -->
    <div class="form-group @if ($errors->has('poktan_id')) has-error @endif">
      <label class="control-label col-md-3">Nomor Kelompok Tani
          <span class="required"> * </span>
      </label>
      <div class="col-md-6">
        <input type="hidden" name="poktan_id" value="{{$poktan->id}}">
        {{ Form::text('poktan_id',null, ['class' => 'form-control', 'placeholder' => $poktan->id ,  'disabled' => 'disabled']) }}
      </div>
      @if ($errors->has('poktan_id')) <p class="help-block">{{ $errors->first('poktan_id') }}</p> @endif
    </div> 
    
    <!-- Nama Kelompok Form Input -->
    <div class="form-group @if ($errors->has('nama_kelompok')) has-error @endif">
      <label class="control-label col-md-3">Nama Kelompok
          <span class="required"> * </span>
      </label>
      <div class="col-md-6">
        {{ Form::text('nama_kelompok', null, ['class' => 'form-control', 'placeholder' => $poktan->nama_kelompok ,  'readonly' => 'readonly']) }}
      </div>
      @if ($errors->has('nama_kelompok')) <p class="help-block">{{ $errors->first('nama_kelompok') }}</p> @endif
    </div> 

    <!-- Gelombang Form Input -->
    <div class="form-group @if ($errors->has('gelombang')) has-error @endif">
      <label class="control-label col-md-3">Gelombang
          <span class="required"> * </span>
      </label>
      <div class="col-md-6">
      <input type="hidden" name="gelombang" value="2">
        {{ Form::text('gelombang', null, ['class' => 'form-control', 'placeholder' => '3' , 'disabled' => 'disabled']) }}
      </div>
      @if ($errors->has('gelombang')) <p class="help-block">{{ $errors->first('gelombang') }}</p> @endif
    </div> 
    
    <!-- Gelombang Form Input -->
    <div class="form-group @if ($errors->has('pewawancara')) has-error @endif">
      <label class="control-label col-md-3">Pewawancara
          <span class="required"> * </span>
      </label>
      <div class="col-md-6">
        {{ Form::text('pewawancara', null, ['class' => 'form-control', 'placeholder' => 'Pewawancara', 'required']) }}
      </div>
      @if ($errors->has('pewawancara')) <p class="help-block">{{ $errors->first('pewawancara') }}</p> @endif
    </div> 

    <!-- Gelombang Form Input -->
    <div class="form-group @if ($errors->has('tanggal_wawancara')) has-error @endif">
      <label class="control-label col-md-3">Tanggal Wawancara
          <span class="required"> * </span>
      </label>
      <div class="col-md-6">
        {{ Form::date('tanggal_wawancara', \Carbon\Carbon::now(), ['class' => 'form-control', 'placeholder' => 'Tanggal Wawancara']) }}
      </div>
      @if ($errors->has('tanggal_wawancara')) <p class="help-block">{{ $errors->first('tanggal_wawancara') }}</p> @endif
    </div> 
      

  
    


    @include('evkin.form._kelembagaan') 
    @include('evkin.form._dinamika')

    @include('evkin.form._pertemuan')

    @include('evkin.form._administrasi')
    @include('evkin.form._kegiatan')
    @include('evkin.form._partisipasi')
    @include('evkin.form._kemitraan')
    @include('evkin.form._keberlanjutan')
	



    


</div>

@push('scripts')
<script>
    // $('#rencana_kerja').on('change', function(e){
    //     console.log(e);

    //     window.alert('yes');
    //   });
</script>
@endpush