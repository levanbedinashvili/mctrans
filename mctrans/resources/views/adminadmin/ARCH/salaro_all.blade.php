@extends('layout.app')
@section('content')


<div class="app-content  my-3 my-md-5">
    <div class="side-app">
        <div class="page-header">

            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{Request::root()}}/home">მთავარი</a></li>
                <li class="breadcrumb-item active" aria-current="page">ფინანსები</li>
            </ol>

        </div>
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">თანხები</div>

                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="exampleXX" class="table table-striped table-bordered" >
                                <thead>
                                    <tr>
                                        <th class="wd-15p">ID</th>
                                        <th class="wd-15p">თანხა</th>
                                        <th class="wd-15p">აბონენტი</th>
                                        <th class="wd-20p">კატეგორია</th>
                                        <th class="wd-20p">დრო</th>
                                        <th class="wd-20p">არხი</th>
                                        <th class="wd-20p">TRANSACTION ID</th>
                                    </tr>
                                </thead>
                                <tbody>


                                    @foreach ($info as $task_item)
                                        <tr>
                                        <td>{{ $task_item->salaro_id  }}</td>
                                        <td>{{ $task_item->salaro_tanxa }}</td>
                                        <td>{{ \App\Helpers\AppHelper::instance()->get_fname(str_pad($task_item->salaro_abid, 6, "0", STR_PAD_LEFT)) }}</td>
                                        <td>@if ($task_item->salaro_ab_type=="1")
ფიზიკური პირი                                            
                                        @endif

                                        @if ($task_item->salaro_ab_type=="3")
იურიდიული                                          
                                        @endif
                                        @if ($task_item->salaro_ab_type=="2")
                                        სოციალურად დაუცველი                                          
                                                                                @endif
                                       </td>
                                       <td>{{ $task_item->salaro_dro_det  }}</td>
                                       <td>{{ $task_item->salaro_gatarebis_arxi  }}</td>
                                       <td>{{ $task_item->salaro_transaction_id  }}</td>
                                        
                                       
                                        
                                      
                                        </tr>
                                    @endforeach








                                </tbody>
                            </table>

                            {{ $info->links() }}


                        </div>
                    </div>
                    <!-- table-wrapper -->
                </div>
                <!-- section-wrapper -->
            </div>

        </div>



</div>
</div>


@endsection
