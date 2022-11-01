@extends('layout.app')
@section('content')


<div class="app-content  my-3 my-md-5">
    <div class="side-app">
        <div class="page-header">

            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{Request::root()}}/home">მთავარი</a></li>
                <li class="breadcrumb-item active" aria-current="page">დარიცხვის სტატისტიკა</li>
            </ol>

        </div>

        <div class="row">
           
            <div class="col-xl-6">
                <div class="card m-b-20">
                    <div class="card-header">

                        ძებნა დღის მიხედვით
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('daricxva_statistic_post') }}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="1" name="search_type">
                            
                            <div class="form-group">
                                <label class="form-label" for="exampleInputEmail1">ფილტრაცია თვის მიხედვით (თვის ფორმატი 12/2021)</label>
                                <input type="text" class="form-control" name="search_tve" id="exampleInputname" required>
                            </div>


                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="form-label">კატეგორია</label>
                                    </div>
                                    <div class="col-md-9">
                                        <select class="form-control select2" name="user_type" required>
                                            <option selected disabled value="">აირჩიეთ კატეგორია</option>

                                            <option value="0">ყველა</option>
                                            <option value="1">ფიზიკური პირი</option>
                                            <option value="2">იურიდიული პირი</option>
        
                                        </select>
                                    </div>
                                </div>
                            </div>

                         
                            <div class="form-group mb-0">
                                <div class="checkbox checkbox-secondary">
                                    <button type="submit" class="btn btn-primary ">დაანგარიშება</button>
                                </div>
                            </div>


                        </form>
                    </div>
                </div>
            </div>


            <div class="col-xl-6">
                <div class="card m-b-20">
                    <div class="card-header">

                        ძებნა წლის მიხედვით
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('daricxva_statistic_post') }}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="2" name="search_type">
                            
                            <div class="form-group">
                                <label class="form-label" for="exampleInputEmail1">ფილტრაცია წლის მიხედვით (წლის ფორმატი 2021)</label>
                                <input type="text" class="form-control" name="search_weli" id="exampleInputname" required>
                            </div>


                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="form-label">კატეგორია</label>
                                    </div>
                                    <div class="col-md-9">
                                        <select class="form-control select2" name="user_type" required>
                                            <option selected disabled value="">აირჩიეთ კატეგორია</option>

                                            <option value="0">ყველა</option>
                                            <option value="1">ფიზიკური პირი</option>
                                            <option value="2">იურიდიული პირი</option>
        
                                        </select>
                                    </div>
                                </div>
                            </div>

                         
                            <div class="form-group mb-0">
                                <div class="checkbox checkbox-secondary">
                                    <button type="submit" class="btn btn-primary ">დაანგარიშება</button>
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
