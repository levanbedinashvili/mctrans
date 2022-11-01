@extends('layout.app')
@section('content')


<div class="app-content  my-3 my-md-5">
    <div class="side-app">
        <div class="page-header">

            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{Request::root()}}/home">მთავარი</a></li>
                <li class="breadcrumb-item active" aria-current="page">აქტიური ტარიფი</li>
            </ol>

        </div>
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">ტარიფის ჩამონათვალი</div>


                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="table table-striped table-bordered" >
                                <thead>
                                    <tr>
                                        <th class="wd-15p">ტარიფის დასახელება</th>
                                        <th class="wd-15p">ტარიფის ფასი</th>
                                        <th class="wd-20p">ცვლილება</th>
                                        <th class="wd-20p">წაშლა</th>

                                    </tr>
                                </thead>
                                <tbody>

                                        @foreach ($info as $task_item)
                                        <tr>
                                        <td>{{ $task_item->tarifi_dasaxeleba }}</td>
                                        <td>{{ $task_item->tarifi_fasi }}</td>
                                        <td><a href="{{Request::root()}}/tarifebi_edit/{{ $task_item->tarifi_id }}">
                                            <button class="btn btn-warning btn-sm">ცვლილება</button>
                                        </a></td>
                                        <td><a href="{{Request::root()}}/tarifebi_drop/{{ $task_item->tarifi_id   }}">
                                            <button class="btn btn-danger btn-sm">წაშლა</button>
                                        </a>
                                        </td>
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
