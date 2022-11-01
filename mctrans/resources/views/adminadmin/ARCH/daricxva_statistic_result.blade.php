@extends('layout.app')
@section('content')


<div class="app-content  my-3 my-md-5">
    <div class="side-app">
        <div class="page-header">

            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{Request::root()}}/home">მთავარი</a></li>
                <li class="breadcrumb-item active" aria-current="page">დარიცხვები</li>
            </ol>

        </div>
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">დარიცხვები თანხები</div>

                       <br><br>
                       სულ თანხა: {{ $count_tanxa }}

                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="exampleXX" class="table table-striped table-bordered" >
                                <thead>
                                    <tr>
                                        <th class="wd-15p">ID</th>
                                        <th class="wd-15p">დარიცხული თანხა</th>
                                        <th class="wd-15p">დარიცხვამდე გადასახდელი</th>
                                        <th class="wd-20p">დარიცხვის შემდეგ გადასახდელი</th>
                                        <th class="wd-20p">აბონენტის კოდი</th>
                                        <th class="wd-20p">აბონენტი</th>
                                        <th class="wd-20p">დრო</th>
                                        <th class="wd-20p">ქვითრის ნომერი</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>


                                    @foreach ($info as $task_item)
                                        <tr>
                                        <td>{{ $task_item->daricxva_id }}</td>
                                        <td>{{ $task_item->daricxva_tanxa }}</td>
                                        <td>{{ $task_item->daricxva_arsebuli_gadasaxdeli }}</td>
                                        <td>{{ $task_item->daricxva_axali_gadasaxdeli }}</td>
                                        <td>{{ $task_item->daricxva_abonenti_id }}</td>
                                        <td>{{ \App\Helpers\AppHelper::instance()->get_fname(str_pad($task_item->daricxva_abonenti_id, 6, "0", STR_PAD_LEFT)) }}</td>
                                        <td>{{ $task_item->daricxva_tarigi  }}</td>
                                        <td>{{ $task_item->daricxva_qvitris_nomeri  }}</td>

                                        </tr>
                                    @endforeach








                                </tbody>
                            </table>

                          


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
