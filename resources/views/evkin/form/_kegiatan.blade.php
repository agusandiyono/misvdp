    <!-- Poin 3 -->
    <h3 class="form-section font-blue">III. Kegiatan Usaha Tani</h3>
    
    <h4 class="form-section font-blue">3.1 Teknik Budidaya</h4>
     <h5 class="form-section font-blue">3.1.1.</h5>
    <!-- Ketua Form Input -->
    <div class="form-group @if ($errors->has('pelaksanaan_teknik')) has-error @endif">
      <label class="control-label col-md-3">Apakah "Kelompok tani" sudah melaksanakan teknik-teknik Dasar Budidaya yang dianjurkan?
        <span class="required"> * </span>
      </label>
      <div class="col-md-2">
      {!! Form::select('pelaksanaan_teknik', ['1' => 'Sudah', '0' => 'Belum'], null, ['class' => 'form-control', 'placeholder' => 'Pilih...' , 'required', 'id' => 'pelaksanaan_teknik', 'autocomplete' => 'off']) !!}
      </div>
      <div class="col-md-4">
      {{ Form::text('ket_pelaksanaan_teknik', null, ['class' => 'form-control', 'placeholder' => 'Keterangan']) }}
      </div>
      @if ($errors->has('pelaksanaan_teknik')) <p class="help-block">{{ $errors->first('pelaksanaan_teknik') }}</p> @endif
    </div>

    <!-- <div class="form-group">
      <div class="col-md-3">
        
      </div>
      <div class="col-md-6">
      <code>Jika Belum lanjut ke pertanyaan 3.1.2.</code>
      </div>
    </div> -->

    <!-- <h5 class="form-section font-blue">Jika "Sudah" hal apa yang mendukung terlaksananya kegiatan budidaya</h5>
    <!-- Ketua Form Input -->
    <!-- <div class="form-group @if ($errors->has('sdm_teknik')) has-error @endif">
      <label class="control-label col-md-3">a. Sumber daya Manusia?
        <span class="required"> * </span>
      </label>
      <div class="col-md-2">
      {!! Form::select('sdm_teknik', ['1' => 'Ya', '0' => 'Tidak'], null, ['class' => 'form-control', 'placeholder' => 'Pilih...' , 'required', 'disabled' , 'id' => 'sdm_teknik', 'autocomplete' => 'off']) !!}
      </div>
      <div class="col-md-4">
      {{ Form::text('ket_sdm_teknik', null, ['class' => 'form-control', 'placeholder' => 'Keterangan']) }}
      </div>
      @if ($errors->has('sdm_teknik')) <p class="help-block">{{ $errors->first('sdm_teknik') }}</p> @endif
    </div> -->

    <!-- Ketua Form Input -->
    <!-- <div class="form-group @if ($errors->has('keuangan_teknik')) has-error @endif">
      <label class="control-label col-md-3">b. Faktor Keuangan?
        <span class="required"> * </span>
      </label>
      <div class="col-md-2">
      {!! Form::select('keuangan_teknik', ['1' => 'Ya', '0' => 'Tidak'], null, ['class' => 'form-control', 'placeholder' => 'Pilih...' , 'required', 'disabled' , 'id' => 'keuangan_teknik', 'autocomplete' => 'off']) !!}
      </div>
      <div class="col-md-4">
      {{ Form::text('ket_keuangan_teknik', null, ['class' => 'form-control', 'placeholder' => 'Keterangan']) }}
      </div>
      @if ($errors->has('keuangan_teknik')) <p class="help-block">{{ $errors->first('keuangan_teknik') }}</p> @endif
    </div> -->

    <!-- Ketua Form Input -->
    <!-- <div class="form-group @if ($errors->has('sarana_teknik')) has-error @endif">
      <label class="control-label col-md-3">c. Sarana?
        <span class="required"> * </span>
      </label>
      <div class="col-md-2">
      {!! Form::select('sarana_teknik', ['1' => 'Ya', '0' => 'Tidak'], null, ['class' => 'form-control', 'placeholder' => 'Pilih...', 'required', 'disabled' , 'id' => 'sarana_teknik', 'autocomplete' => 'off']) !!}
      </div>
      <div class="col-md-4">
      {{ Form::text('ket_sarana_teknik', null, ['class' => 'form-control', 'placeholder' => 'Keterangan']) }}
      </div>
      @if ($errors->has('sarana_teknik')) <p class="help-block">{{ $errors->first('sarana_teknik') }}</p> @endif
    </div> -->

      <!-- Ketua Form Input -->
    <!-- <div class="form-group @if ($errors->has('teknik_lain')) has-error @endif">
      <label class="control-label col-md-3">d. Lainnya
        <span class="required"> * </span>
      </label>
      <div class="col-md-2">
      {{ Form::text('teknik_lain', null, ['class' => 'form-control', 'placeholder' => 'Keterangan', 'id' => 'teknik_lain', 'disabled', 'autocomplete' => 'off']) }}
      </div>
      <div class="col-md-4">
      {{ Form::text('ket_teknik_lain', null, ['class' => 'form-control', 'placeholder' => 'Keterangan']) }}
      </div>
      @if ($errors->has('teknik_lain')) <p class="help-block">{{ $errors->first('teknik_lain') }}</p> @endif
    </div> -->

    <h5 class="form-section font-blue">Bila belum melaksanakan teknik-teknik dasar budidaya yang dianjurkan, apa penyebabnya?</h5>
    <!-- Ketua Form Input -->
    <div class="form-group @if ($errors->has('sdm_anjuran')) has-error @endif">
      <label class="control-label col-md-3">a. Sumber daya Manusia?
        <span class="required"> * </span>
      </label>
      <div class="col-md-2">
      {!! Form::select('sdm_anjuran', ['1' => 'Ya', '0' => 'Tidak'], null, ['class' => 'form-control', 'placeholder' => 'Pilih...' , 'required', 'id' => 'sdm_anjuran', 'disabled', 'autocomplete' => 'off']) !!}
      </div>
      <div class="col-md-4">
      {{ Form::text('ket_sdm_anjuran', null, ['class' => 'form-control', 'placeholder' => 'Keterangan']) }}
      </div>
      @if ($errors->has('sdm_anjuran')) <p class="help-block">{{ $errors->first('sdm_anjuran') }}</p> @endif
    </div>

    <!-- Ketua Form Input -->
    <div class="form-group @if ($errors->has('keuangan_anjuran')) has-error @endif">
      <label class="control-label col-md-3">b. Kendala Keuangan
        <span class="required"> * </span>
      </label>
      <div class="col-md-2">
      {!! Form::select('keuangan_anjuran', ['1' => 'Ya', '0' => 'Tidak'], null, ['class' => 'form-control', 'placeholder' => 'Pilih...' , 'required', 'id' => 'keuangan_anjuran', 'disabled', 'autocomplete' => 'off']) !!}
      </div>
      <div class="col-md-4">
      {{ Form::text('ket_keuangan_anjuran', null, ['class' => 'form-control', 'placeholder' => 'Keterangan']) }}
      </div>
      @if ($errors->has('keuangan_anjuran')) <p class="help-block">{{ $errors->first('keuangan_anjuran') }}</p> @endif
    </div>

    <!-- Ketua Form Input -->
    <div class="form-group @if ($errors->has('sarana_anjuran')) has-error @endif">
      <label class="control-label col-md-3">c. Sarana
        <span class="required"> * </span>
      </label>
      <div class="col-md-2">
      {!! Form::select('sarana_anjuran', ['1' => 'Ya', '0' => 'Tidak'], null, ['class' => 'form-control', 'placeholder' => 'Pilih...' , 'required', 'id' => 'sarana_anjuran', 'disabled', 'autocomplete' => 'off']) !!}
      </div>
      <div class="col-md-4">
      {{ Form::text('ket_sarana_anjuran', null, ['class' => 'form-control', 'placeholder' => 'Keterangan']) }}
      </div>
      @if ($errors->has('sarana_anjuran')) <p class="help-block">{{ $errors->first('sarana_anjuran') }}</p> @endif
    </div>

    <!-- Ketua Form Input -->
    <div class="form-group @if ($errors->has('anjuran_lain')) has-error @endif">
      <label class="control-label col-md-3">d. Lainnya, sebutkan
        <span class="required"> * </span>
      </label>
      <div class="col-md-2">
      {{ Form::text('anjuran_lain', null, ['class' => 'form-control', 'placeholder' => 'Sebutkan', 'id'=>'anjuran_lain', 'disabled', 'autocomplete' => 'off']) }}
      </div>
      <div class="col-md-4">
      {{ Form::text('ket_anjuran_lain', null, ['class' => 'form-control', 'placeholder' => 'Keterangan']) }}
      </div>
      @if ($errors->has('anjuran_lain')) <p class="help-block">{{ $errors->first('anjuran_lain') }}</p> @endif
    </div>

    <h4 class="form-section font-blue">3.2 Hasil Produksi Pertanian/Perkebunan/peternakan/pengolahan hasil</h4>
     <h5 class="form-section font-blue">Komoditi Unggulan</h5>
     <div class="form-group">
      <div class="col-md-3">
        
      </div>
      <div class="col-md-6">
      <code>Komoditi unggulan masukkan satu</code>
      </div>
    </div>
    <!-- Ketua Form Input -->
    <div class="form-group @if ($errors->has('komoditi_unggulan')) has-error @endif">
    <label class="control-label col-md-3">Komoditi Unggulan
        <span class="required"> * </span>
      </label>
      <div class="col-md-8">
      {{ Form::text('komoditi_unggulan', null, ['class' => 'form-control', 'required', 'placeholder' => 'Komoditi Unggulan']) }}
      </div>
      @if ($errors->has('komoditi_unggulan')) <p class="help-block">{{ $errors->first('komoditi_unggulan') }}</p> @endif
    </div>
    
    <div class="form-group">
      <div class="col-md-3">
        
      </div>
      <div class="col-md-6">
      <code>Gunakan tanda koma(,) apabila komoditi lebih dari satu</code>
      </div>
    </div>
    <!-- Ketua Form Input -->
    <div class="form-group @if ($errors->has('komoditi_lain')) has-error @endif">
    <label class="control-label col-md-3">Komoditi Unggulan Lain
        <span class="required"> * </span>
      </label>
      <div class="col-md-8">
      {{ Form::text('komoditi_lain', null, ['class' => 'form-control', 'required', 'placeholder' => 'Komoditi Unggulan lain']) }}
      </div>
      @if ($errors->has('komoditi_lain')) <p class="help-block">{{ $errors->first('komoditi_lain') }}</p> @endif
    </div>
    
    <h5 class="form-section font-blue">3.2.1. Sebelum Program PPDM</h5>
      <!-- Ketua Form Input -->
      <div class="form-group @if ($errors->has('panen_sebelum')) has-error @endif">
      <label class="control-label col-md-3">a. Dalam satu tahun berapa kali panen
        <span class="required"> * </span>
      </label>
      <div class="col-md-2">
        {!! Form::select('panen_sebelum', ['0' => 'Tidak Ada', '1' => '1 Kali setahun', '2' => '2 kali setahun', '3' => '3 kali setahun', '4' => 'Lebih dari 3 kali setahun'], null, ['class' => 'form-control', 'placeholder' => 'Pilih...' , 'id' => 'panen_sebelum']) !!}
      </div>
      <div class="col-md-6">
        {{ Form::text('ket_panen_sebelum', null, ['class' => 'form-control', 'placeholder' => 'Keterangan']) }}
      </div>
        @if ($errors->has('panen_sebelum')) <p class="help-block">{{ $errors->first('panen_sebelum') }}</p> @endif
      </div>

      <!-- Ketua Form Input -->
      <div class="form-group @if ($errors->has('hasil_panen_sebelum')) has-error @endif">
      <label class="control-label col-md-3">b. Hasil yang didapat dalam satu kali panen
        <span class="required"> * </span>
      </label>
      <div class="col-md-3">
        {!! Form::text('hasil_panen_sebelum', null, ['class' => 'form-control', 'placeholder' => 'Hasil' , 'required', 'id' => 'hasil_panen_sebelum']) !!}
      </div>
      <div class="col-md-2">
        {!! Form::select('satuan_hasil_panen_sebelum', $satuan , null, ['class' => 'form-control', 'required', 'placeholder' => 'Pilih Satuan...' , 'id' => 'satuan_hasil_panen_sebelum']) !!}
      </div>
      <div class="col-md-3">
        {{ Form::text('ket_hasil_panen_sebelum', null, ['class' => 'form-control', 'placeholder' => 'Keterangan']) }}
      </div>
        @if ($errors->has('hasil_panen_sebelum')) <p class="help-block">{{ $errors->first('hasil_panen_sebelum') }}</p> @endif
      </div>

      <!-- Ketua Form Input -->
      <div class="form-group @if ($errors->has('harga_penjualan_sebelum')) has-error @endif">
      <label class="control-label col-md-3">c. Harga penjualan 
        <span class="required"> * </span>
      </label>
      <div class="col-md-3">
        {!! Form::text('harga_penjualan_sebelum', null, ['class' => 'form-control', 'placeholder' => 'Rp. ' , 'id' => 'harga_penjualan_sebelum']) !!}
      </div>
      <div class="col-md-2">
        {!! Form::select('satuan_harga_penjualan_sebelum', $satuan, null, ['class' => 'form-control', 'placeholder' => 'Pilih Satuan...' , 'id' => 'satuan_harga_penjualan_sebelum', 'required']) !!}
      </div>
      <div class="col-md-3">
        {{ Form::text('ket_harga_penjualan_sebelum', null, ['class' => 'form-control', 'placeholder' => 'Keterangan']) }}
      </div>
        @if ($errors->has('harga_penjualan_sebelum')) <p class="help-block">{{ $errors->first('harga_penjualan_sebelum') }}</p> @endif
      </div>

    <h5 class="form-section font-blue">3.2.2. Setelah Program PPDM </h5>

    <!-- Ketua Form Input -->
    <div class="form-group @if ($errors->has('panen_setelah')) has-error @endif">
    <label class="control-label col-md-3">a. Dalam satu tahun berapa kali panen
      <span class="required"> * </span>
    </label>
    <div class="col-md-2">
      {!! Form::select('panen_setelah', ['0' => 'Tidak Ada', '1' => '1 Kali setahun', '2' => '2 kali setahun', '3' => '3 kali setahun', '4' => 'Lebih dari 3 kali setahun'], null, ['class' => 'form-control', 'required', 'placeholder' => 'Pilih...' , 'id' => 'panen_setelah']) !!}
    </div>
    <div class="col-md-6">
      {{ Form::text('ket_panen_setelah', null, ['class' => 'form-control', 'placeholder' => 'Keterangan']) }}
    </div>
      @if ($errors->has('panen_setelah')) <p class="help-block">{{ $errors->first('panen_setelah') }}</p> @endif
    </div>

    <!-- Ketua Form Input -->
    <div class="form-group @if ($errors->has('hasil_panen_setelah')) has-error @endif">
    <label class="control-label col-md-3">b. Hasil yang didapat dalam satu kali panen
      <span class="required"> * </span>
    </label>
    <div class="col-md-3">
      {!! Form::text('hasil_panen_setelah', null, ['class' => 'form-control', 'placeholder' => 'Hasil' , 'required', 'id' => 'hasil_panen_setelah']) !!}
    </div>
    <div class="col-md-2">
      {!! Form::select('satuan_hasil_panen_setelah', $satuan, null, ['class' => 'form-control', 'required', 'placeholder' => 'Pilih Satuan...' , 'id' => 'satuan_hasil_panen_setelah']) !!}
    </div>
    <div class="col-md-3">
      {{ Form::text('ket_hasil_panen_setelah', null, ['class' => 'form-control', 'placeholder' => 'Keterangan']) }}
    </div>
      @if ($errors->has('hasil_panen_setelah')) <p class="help-block">{{ $errors->first('hasil_panen_setelah') }}</p> @endif
    </div>

     <!-- Ketua Form Input -->
     <div class="form-group @if ($errors->has('harga_penjualan_setelah')) has-error @endif">
    <label class="control-label col-md-3">c. Harga penjualan 
      <span class="required"> * </span>
    </label>
    <div class="col-md-3">
      {!! Form::text('harga_penjualan_setelah', null, ['class' => 'form-control', 'placeholder' => 'Rp. ' , 'id' => 'harga_penjualan_setelah', 'required']) !!}
    </div>
    <div class="col-md-2">
     {!! Form::select('satuan_harga_penjualan_setelah', $satuan, null, ['class' => 'form-control', 'placeholder' => 'Pilih Satuan...' , 'id' => 'satuan_harga_penjualan_setelah', 'required']) !!}
    </div>
    <div class="col-md-3">
      {{ Form::text('ket_harga_penjualan_setelah', null, ['class' => 'form-control', 'placeholder' => 'Keterangan']) }}
    </div>
      @if ($errors->has('harga_penjualan_setelah')) <p class="help-block">{{ $errors->first('harga_penjualan_setelah') }}</p> @endif
    </div>

    @push('scripts')
<script>
    $('#pelaksanaan_teknik').on('change', function(e){
        console.log(e);
        var value=$(this).val();
        if(value=='' || value=='1'){
          
          document.getElementById("sdm_anjuran").disabled=true;
          $("#sdm_anjuran").each(function() { this.selectedIndex = 0 });

          document.getElementById("keuangan_anjuran").disabled=true;
          $("#keuangan_anjuran").each(function() { this.selectedIndex = 0 });

          document.getElementById("sarana_anjuran").disabled=true;
          $("#sarana_anjuran").each(function() { this.selectedIndex = 0 });
          
          document.getElementById("anjuran_lain").disabled=true;
          $("#anjuran_lain").value="";

         
          
        }else if(value=='0'){
          
          document.getElementById("sdm_anjuran").disabled=false;
          document.getElementById("keuangan_anjuran").disabled=false;
          document.getElementById("sarana_anjuran").disabled=false;
          document.getElementById("anjuran_lain").disabled=false;
                              
        }
      });  
      
     
</script>
@endpush    