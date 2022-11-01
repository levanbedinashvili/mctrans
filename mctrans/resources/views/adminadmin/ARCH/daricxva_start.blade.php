@extends('layout.app')
@section('content')


<div class="app-content  my-3 my-md-5">
    <div class="side-app">
        <div class="page-header">

            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{Request::root()}}/home">მთავარი</a></li>
                <li class="breadcrumb-item active" aria-current="page">თანხების დარიცხვა</li>
            </ol>

        </div>

        <div class="row">
           
            <div class="col-xl-6">
                <div class="card m-b-20">
                    <div class="card-header">

                       ახალი თვის შექმნა
                    </div>
                    
                    <div class="card-body">
                        <form method="POST" action="{{ route('daricxva_create_tve') }}" enctype="multipart/form-data">
                            @csrf
                           
                            
                            <div class="form-group">
                                <label class="form-label" for="exampleInputEmail1">თვის დასახელება (თვის ფორმატი დღე.თვე.წელი მაგ 31.01.2021)</label>
                                <input type="text" class="form-control" name="tve_name" id="exampleInputname" required>
                            </div>


                           
                         
                            <div class="form-group mb-0">
                                <div class="checkbox checkbox-secondary">
                                    <button type="submit" class="btn btn-primary ">თვის შექმნა</button>
                                </div>
                            </div>


                        </form>
                    </div>
                </div>
            </div>


            <div class="col-xl-6">
                <div class="card m-b-20">
                    <div class="card-header">

                        დარიცხვის დაწყება
                    </div>
                    <div class="card-body">




                        <form method="GET" action="" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="2" name="search_type">
                            
                            <div class="form-group">
                                <label class="form-label" for="exampleInputEmail1">დარიცხვა განხორცილედება შემდეგ თაირღზე {{ $tve_last->tve_name }}</label>
                                <input type="text" class="form-control" name="tve_name" value="{{ $tve_last->tve_name }}" id="exampleInputname" Readonly>
                            </div>
                         
                            <div class="form-group mb-0">
                                <div class="checkbox checkbox-secondary">
                                    
                                </div>
                            </div>
                        </form>



                        <a href="{{Request::root()}}/daricxva/running/{{ $tve_last->tve_id }}"><button class="btn btn-primary ">დარიცხვა</button></a>






                    </div>
                </div>
            </div>


        </div>




        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">შექმნილი თვეები</div>


                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="table table-striped table-bordered" >
                                <thead>
                                    <tr>
                                        <th class="wd-15p">ID</th>
                                        <th class="wd-20p">თვის დასახელება</th>
                                        <th class="wd-20p">წაშლა</th>

                                    </tr>
                                </thead>
                                <tbody>

                                        @foreach ($tve as $task_item)
                                        <tr>
                                        <td>{{ $task_item->tve_id }}</td>
                                        <td>{{ $task_item->tve_name }}</td>
                                        <td><a href="{{Request::root()}}/daricxva/tve_drop/{{ $task_item->tve_id }}">
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
