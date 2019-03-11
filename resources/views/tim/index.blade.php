@extends('layouts.app')

@section('title', 'Tim')

@section('content')
    <div class="row">
        <div class="col-md-5">
            <h3 class="modal-title">{{ $result->total() }} Tim</h3>
        </div>
        <div class="col-md-7 page-action text-right">
            @can('add_tims')
                <a href="{{ route('tim.create') }}" class="btn btn-primary btn-sm"> <i class="glyphicon glyphicon-plus-sign"></i> Tambah Baru</a>
            @endcan
        </div>
    </div>

    <div class="result-set">     
         <!-- BEGIN SAMPLE TABLE PORTLET-->
         <div class="portlet box blue">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-cogs"></i>Data Kelompok Tani</div>               
            </div>            
            <div class="portlet-body">
            
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Jabatan</th>
                                
                                <th class="text-center">Actions</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                        @php
                            $i=1;
                        @endphp
                            @foreach($result as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>                                    
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->jabatan }}</td>
                                    <td>{{ $item->tentang }}</td>
                                                                                                    
                                    <td class="text-center">                                                                    
                                   
                                    <a href="#" class="btn btn-xs btn-success"><i class="fa fa-eye"></i> Detail</a>                                    
                                    @can('edit_tims', 'delete_tims')
                                        @include('shared._actions', [
                                            'entity' => 'tim',
                                            'id' => $item->id
                                        ])
                                        @endcan
                                    </td>
                                    
                                </tr>
                            @endforeach                          
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- END SAMPLE TABLE PORTLET-->
    
        <div class="text-center">
            {{ $result->links() }}
        </div>
    </div>

@endsection

@push('scripts')
<script>
$("div[id^='Issues']").each(function(){
  
  var currentModal = $(this);
  
  //click next
  currentModal.find('.btn-next').click(function(){
    currentModal.modal('hide');
    currentModal.closest("div[id^='Issues']").nextAll("div[id^='Issues']").first().modal('show'); 
  });
  
  //click prev
  currentModal.find('.btn-prev').click(function(){
    currentModal.modal('hide');
    currentModal.closest("div[id^='Issues']").prevAll("div[id^='Issues']").first().modal('show'); 
  });

});

</script>
@endpush 
