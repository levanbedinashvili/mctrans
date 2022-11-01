@extends('layout.app')
@section('content')


<div class="app-content  my-3 my-md-5">
    <div class="side-app">
        <div class="page-header">

            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{Request::root()}}/home">მთავარი</a></li>
                <li class="breadcrumb-item active" aria-current="page">დავალიანების ფილტრაცია</li>
            </ol>

        </div>
      

        <div class="row">
            <div class="col-xl-12">
                <div class="card m-b-20">
                    <div class="card-header">
                        <h2>{{Session::get('Success')}}</h2><br>


                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('davalianeba_filter_post') }}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="1" name="search_type">
                            

                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="form-label">ფილტრაცია უბნის მიხედვით</label>
                                    </div>
                                    <div class="col-md-9">
                                        <select class="form-control select2" name="ubani_name" required>
                                            <option selected disabled value="">აირჩიეთ უბანი</option>
                                            @foreach ($info as $info_item)
                                            <option value="{{$info_item->ubani_id}}">{{$info_item->ubani_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>



                            <div class="form-group mb-0">
                                <div class="checkbox checkbox-secondary">
                                    <button type="submit" class="btn btn-primary ">დამუშავება</button>
                                </div>
                            </div>
                        </form>
                    </div>


                </div>
            </div>
    </div>


        

    <div class="row">
        <div class="col-xl-12">
            <div class="card m-b-20">
                <div class="card-header">
                    <h2>{{Session::get('Success')}}</h2><br>


                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('davalianeba_filter_post') }}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" value="2" name="search_type">
                        

                        <div class="form-group ">
                            <div class="row">
                                <div class="col-md-3">
                                    <label class="form-label">ფილტრაცია უბნის და თანხის მიხედვით</label>
                                </div>
                                <div class="col-md-9">
                                    <select class="form-control select2" name="ubani_name" required>
                                        <option selected disabled value="">აირჩიეთ უბანი</option>
                                        @foreach ($info as $info_item)
                                        <option value="{{$info_item->ubani_id}}">{{$info_item->ubani_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="exampleInputEmail1">მიუთითეთ დავალიანების თანხა რაზე მეტი უნდა იყოს</label>
                            <input type="text" class="form-control" name="davalianeba_tanxa" id="exampleInputname" required>
                        </div>



                        <div class="form-group mb-0">
                            <div class="checkbox checkbox-secondary">
                                <button type="submit" class="btn btn-primary ">დამუშავება</button>
                            </div>
                        </div>
                    </form>
                </div>


            </div>
        </div>
</div>




<div class="row">
    <div class="col-xl-12">
        <div class="card m-b-20">
            <div class="card-header">
                <h2>{{Session::get('Success')}}</h2><br>


            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('davalianeba_filter_post') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="3" name="search_type">
                    

                    <div class="form-group ">
                        <div class="row">
                            <div class="col-md-3">
                                <label class="form-label">ფილტრაცია იურიდიული პირები</label>
                            </div>
                            <div class="col-md-9">
                                <select class="form-control select2" name="user_type" required>
                                    <option selected disabled value="">აირჩიეთ კატეგორია</option>
                                    <option value="2">იურიდიული პირი</option>
                                </select>
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="form-label" for="exampleInputEmail1">მიუთითეთ დავალიანების თანხა რაზე მეტი უნდა იყოს</label>
                        <input type="text" class="form-control" name="davalianeba_tanxa" id="exampleInputname" required>
                    </div>



                    <div class="form-group mb-0">
                        <div class="checkbox checkbox-secondary">
                            <button type="submit" class="btn btn-primary ">დამუშავება</button>
                        </div>
                    </div>
                </form>
            </div>


        </div>
    </div>
</div>





</div>
</div>


@endsection
