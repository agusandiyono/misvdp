@extends('layouts.app')

@section('title', 'Kelompok Tani')

@section('content')
    <div class="row">
        <div class="col-md-5">
            <h3 class="modal-title">{{ $result->total() }} Jumlah Kelompok Tani</h3>
        </div>
        <div class="col-md-7 page-action text-right">
            @can('add_ikus')
                <a href="{{ route('poktan.create') }}" class="btn btn-primary btn-sm"> <i class="glyphicon glyphicon-plus-sign"></i> Tambah Baru</a>
            @endcan
        </div>
    </div>

    <div class="result-set">     
         <!-- BEGIN SAMPLE TABLE PORTLET-->
         <div class="portlet box blue">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-cogs"></i>Data Kelompok Tani</div>  
                    {!! link_to_route('poktan.evkinExcel', 
                'Export to Excel', null, 
                ['class' => 'btn btn-success']) 
            !!}             
            </div>            
            <div class="portlet-body">
            {!! Form::open(['method'=>'get']) !!}
                <div class="row">
                <div class="col-sm-4 form-group">
                    {!! Form::select('provinsi',['-1'=>'Pilih Provinsi','Papua'=>'Papua','Papua Barat'=>'Papua Barat'],null,['class'=>'form-control','onChange'=>'form.submit()']) !!}
                </div>
                
                <div class="col-sm-4 form-group">
                    <div class="input-group">
                        <input class="form-control" id="search"
                            value="{{ request('search') }}"
                            placeholder="Cari nama kelompok tani" name="search"
                            type="text" id="search"/>
                        <div class="input-group-btn">
                            <button type="submit" class="btn btn-warning">
                                Cari
                            </button>
                        </div>
                    </div>
                </div>
                <input type="hidden" value="{{request('field')}}" name="field"/>
                <input type="hidden" value="{{request('sort')}}" name="sort"/>
                </div>
            {!! Form::close() !!}
            
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Kode Poktan</th>
                                <th>Provinsi</th>
                                <th>Kabupaten</th>
                                <th>Kecamatan</th>
                                <th><a href="{{url('admin/poktan')}}?search={{request('search')}}&provinsi={{request('provinsi')}}&field=desa&sort={{request('sort','asc')=='asc'?'desc':'asc'}}">
                                    Desa</a>
                                </th>
                                <th><a href="{{url('admin/poktan')}}?search={{request('search')}}&provinsi={{request('provinsi')}}&field=nama_kelompok&sort={{request('sort','asc')=='asc'?'desc':'asc'}}">Nama Kelompok</a></th>
                                <th>Evkin</th>
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
                                    <td>{{ $item->provinsi }}</td>
                                    <td>{{ $item->kabupaten }}</td>
                                    <td>{{ $item->kecamatan }}</td>
                                    <td>{{ $item->desa }}</td>
                                    <td>{{ $item->nama_kelompok }}</td>                                    
                                    <td align="center">
                                    @if ($item->evkin->first->status['status'] == 1)                                    
                                    <a href="#evkin{{ $item->id }}" role="button" class="btn btn-sm btn-warning" data-toggle="modal"> <i class="fa fa-bullhorn"></i> Lihat </a>
                                    @else
                                    <a href="{{ route('evkin.tambah', $item->id) }}" class="btn btn-primary btn-sm"> <i class="glyphicon glyphicon-plus-sign"></i> Isi Evkin</a>
                                    @endif
                                    </td>                                                                   
                                    <td class="text-center">                                                                                                       
                                    <div class="modal fade bs-modal-lg" id="evkin{{ $item->id }}" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                                        <h4 class="modal-title">Evkin Kelompok {{ $item->nama_kelompok }}</h4>
                                                    </div>
                                                    <div class="modal-body"> 
                                                    <div class="scroller" style="height:400px" data-always-visible="1" data-rail-visible1="1">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <h4>Diagram Radar</h4>                                                                                                                                        
                                                                            <canvas id="evkinChart" width="500px" height="400px"></canvas>                                                                    
                                                                    
                                                            </div>
                                                            <div class="col-md-6">
                                                                <h4>Data Evkin</h4>
                                                                    <table class="table table-bordered table-striped">
                                                                        <thead>
                                                                            <tr>
                                                                                <th> Evkin </th>
                                                                                <th> Nilai </th>
                                                                                
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>                                                        
                                                                                <td>
                                                                                    <span class="label label-default"> Kelembagaan Kelompok </span>
                                                                                </td>                                                                                                                                            
                                                                                
                                                                                <td>{{$item->evkin->first->kelembagaan['kelembagaan']}}</td>
                                                                            </tr>
                                                                            <tr>                                                        
                                                                                <td>
                                                                                    <span class="label label-primary"> Dinamika Kelompok tani </span>
                                                                                </td>                                                                                                                                     
                                                                                <td>{{$item->evkin->first->dinamika['dinamika']}}</td>
                                                                            </tr>
                                                                            <tr>                                                            
                                                                                <td>
                                                                                    <span class="label label-info"> Kegiatan Usaha Tani </span>
                                                                                </td> 
                                                                                <td>{{$item->evkin->first->kegiatan['kegiatan']}}</td>                                                      
                                                                            </tr>
                                                                            <tr>
                                                                                
                                                                                <td>
                                                                                    <span class="label label-success"> Partisipasi Masyarakat </span>
                                                                                </td>         
                                                                                <td> </td>                                                                                                                                
                                                                            </tr>
                                                                            <tr>                                                                                
                                                                                <td>
                                                                                    <span class="label label-danger"> Kemitraan </span>
                                                                                </td>                                                                                    
                                                                                <td>{{$item->evkin->first->partisipasi['partisipasi']}}</td>
                                                                            </tr>
                                                                            <tr>                                                                                
                                                                                <td>
                                                                                    <span class="label label-warning"> Keberlanjutan </span>
                                                                                </td>                                                                                    
                                                                                <td>{{$item->evkin->first->keberlanjutan['keberlanjutan']}}</td>
                                                                            </tr> 
                                                                        </tbody>
                                                                    </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn dark btn-outline" data-dismiss="modal">Close</button>
                                                        
                                                    </div>
                                                </div>
                                                <!-- /.modal-content -->
                                            </div>
                                            <!-- /.modal-dialog -->
                                        </div>
                                    <a href="poktan/{{$item->id}}" class="btn btn-xs btn-success"><i class="fa fa-eye"></i> Detail</a>                                    
                                    @can('edit_poktans', 'delete_poktans')
                                        @include('shared._actions', [
                                            'entity' => 'poktan',
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
new Chart('evkinChart', {
          type: 'radar',
          data: {
            labels: ['Kelembagaan Kelompok', 'Dinamika Kelompok Tani', 'Kegiatan Usaha Tani', 'Partisipasi Masyarakat', 'Kemitraan', 'Sustainability'],
            datasets: [{
              "data": [5,
                        10,
                        11,
                        12,
                        14,
                        12,
              "label": 'Gelombang 1',
              "scaleStartValue": 0,
              "fill": true,
                "backgroundColor": "rgba(54, 162, 235, 0.2)",
                "borderColor": "rgb(54, 162, 235)",
                "pointBackgroundColor": "rgb(54, 162, 235)",
                "pointBorderColor": "#fff",
                "pointHoverBackgroundColor": "#fff",
                "pointHoverBorderColor": "rgb(54, 162, 235)"
            } ]
          },

          options: {
            maintainAspectRatio: true,
            spanGaps: false,
            tooltips: {
              mode: 'label'
            },
            scale: {
                ticks: {
                    beginAtZero: true,
                    min: 0
                }

            },
            elements: {
              line: {
                tension: 0.000001
              }
            },
            plugins: {
              filler: {
                propagate: false
              },
              samples_filler_analyser: {
                target: 'chart-analyser'
              }
            }
          }
        });
        </script>
@endpush 
