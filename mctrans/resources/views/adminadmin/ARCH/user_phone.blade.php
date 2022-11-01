@extends('layout.app')
@section('content')


<div class="app-content  my-3 my-md-5">
    <div class="side-app">
        <div class="page-header">

            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{Request::root()}}/home">მთავარი</a></li>
                <li class="breadcrumb-item active" aria-current="page">აბონენტების ბაზა</li>
            </ol>

        </div>
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">{{ $title }}</div>

                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="exampleXX" class="table table-striped table-bordered" >
                                <thead>
                                    <tr>
                                        <th class="wd-15p">UID</th>
                                        <th class="wd-15p">დასახელება</th>
                                        <th class="wd-15p">მისამართი</th>
                                        <th class="wd-20p">გადასახდელი</th>
                                        <th class="wd-20p">თვეში დარიცხვა</th>
                                        <th class="wd-20p">ტელეფონის ნომერი</th>
                                        <th class="wd-20p">ცვლილება</th>
                                        <th class="wd-20p">დეტალები</th>

                                    </tr>
                                </thead>
                                <tbody>


                                    @foreach ($info as $task_item)
                                        

                                    @php
                                    $phone = $task_item->abonentebi_telefoni;
                                    $string = strlen($phone);    
                                    @endphp    

                                    @if ($string=="0")
                                    
                                    
                                    <tr>
                                        <td>{{ str_pad($task_item->abonentebi_id, 6, "0", STR_PAD_LEFT) }}</td>
                                        <td>{{ $task_item->abonentebi_fname }}</td>
                                        <td>{{ $task_item->abonentebi_misamarti }}</td>
                                        <td>{{ $task_item->abonentebi_gadasaxdeli }}</td>
                                        <td>{{ $task_item->abonentebi_daricxva }}</td>
                                        <td>{{ $task_item->abonentebi_telefoni }}</td>
                                        <td><a href="{{Request::root()}}/abonentebi/edit/{{ $task_item->abonentebi_id   }}"><button class="btn btn-danger btn-sm">ცვლილება</button></a></td>
                                        <td><a href="{{Request::root()}}/open_abonenti/{{ $task_item->abonentebi_id }}"><button class="btn btn-warning btn-sm">დეტალები</button></a></td>
                                    </tr>


                                    @endif


                                    
                                    
                                       
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
