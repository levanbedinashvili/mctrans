@extends('layout.app')
@section('content')


<div class="app-content  my-3 my-md-5">
    <div class="side-app">
        <div class="page-header">

            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{Request::root()}}/home">მთავარი</a></li>
                <li class="breadcrumb-item active" aria-current="page">ფიზიკური პირის აბონენტის დამატება</li>
            </ol>

        </div>

        <div class="row">
            <div class="col-xl-4">
                <div class="card m-b-20">
                    <div class="card-header">

                        ძებნა დღის მიხედვით
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('salaro_filter_post') }}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="1" name="search_type">
                            <div class="form-group">
                                <label class="form-label" for="exampleInputEmail1">ძებნა დღის მიხედვით (შენდეგი ფორმატით დღე.თვე.წელი)</label>
                                <input type="text" class="form-control" name="search_dge" id="exampleInputname" required>
                            </div>

                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="form-label">მომხმარებლის კატეგორია</label>
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

                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="form-label">გადახდის არხი</label>
                                    </div>
                                    <div class="col-md-9">
                                        <select class="form-control select2" name="payment_type" required>
                                            <option selected disabled value="">აირჩიეთ არხი</option>
                                            <option value="0">ყველა</option>
                                            <option value="1">ხელით გატარებული</option>
                                            <option value="2">ონლაინ ჩარიცხვები</option>
                            
                                        </select>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group mb-0">
                                <div class="checkbox checkbox-secondary">
                                    <button type="submit" class="btn btn-primary ">ძებმა</button>
                                </div>
                            </div>


                        </form>
                    </div>
                </div>
            </div>


            <div class="col-xl-4">
                <div class="card m-b-20">
                    <div class="card-header">

                        ძებნა თვის მიხედვით
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('salaro_filter_post') }}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="2" name="search_type">
                            <div class="form-group">
                                <label class="form-label" for="exampleInputEmail1">ძებნა თვის მიხედვით (ჩაწერეთ შემდეგი ფორმატით თვე/წელი)</label>
                                <input type="text" class="form-control" name="search_tve" id="exampleInputname" required>
                            </div>

                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="form-label">მომხმარებლის კატეგორია</label>
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

                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="form-label">გადახდის არხი</label>
                                    </div>
                                    <div class="col-md-9">
                                        <select class="form-control select2" name="payment_type" required>
                                            <option selected disabled value="">აირჩიეთ არხი</option>
                                            <option value="0">ყველა</option>
                                            <option value="1">ხელით გატარებული</option>
                                            <option value="2">ონლაინ ჩარიცხვები</option>
                            
                                        </select>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group mb-0">
                                <div class="checkbox checkbox-secondary">
                                    <button type="submit" class="btn btn-primary ">ძებმა</button>
                                </div>
                            </div>


                        </form>
                    </div>
                </div>
            </div>



            
            <div class="col-xl-4">
                <div class="card m-b-20">
                    <div class="card-header">

                        ძებნა წლის მიხედვით
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('salaro_filter_post') }}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="3" name="search_type">
                            <div class="form-group">
                                <label class="form-label" for="exampleInputEmail1">ძებნა წლის მიხედვით (ჩაწერეთ შემდეგი ფორმატით წელი)</label>
                                <input type="text" class="form-control" name="search_weli" id="exampleInputname" required>
                            </div>

                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="form-label">მომხმარებლის კატეგორია</label>
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

                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="form-label">გადახდის არხი</label>
                                    </div>
                                    <div class="col-md-9">
                                        <select class="form-control select2" name="payment_type" required>
                                            <option selected disabled value="">აირჩიეთ არხი</option>
                                            <option value="0">ყველა</option>
                                            <option value="1">ხელით გატარებული</option>
                                            <option value="2">ონლაინ ჩარიცხვები</option>
                            
                                        </select>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group mb-0">
                                <div class="checkbox checkbox-secondary">
                                    <button type="submit" class="btn btn-primary ">ძებმა</button>
                                </div>
                            </div>


                        </form>
                    </div>
                </div>
            </div>



                 
            <div class="col-xl-6">
                <div class="card m-b-20">
                    <div class="card-header">

                        ძებნა პროვაიდერის მიხედვით
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('salaro_filter_post') }}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="4" name="search_type">

                            <div class="form-group">
                                <label class="form-label" for="exampleInputEmail1">ძებნა წლის მიხედვით (ჩაწერეთ შემდეგი ფორმატით წელი)</label>
                                <input type="text" class="form-control" name="search_weli" id="exampleInputname" required>
                            </div>
                    
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="form-label">გადახდის არხი</label>
                                    </div>
                                    <div class="col-md-9">
                                        <select class="form-control select2" name="payment_type_arxi" required>
                                            <option selected disabled value="">აირჩიეთ არხი</option>
                                            <option value="3">ხელით გატარებული</option>
                                            <option value="1">კრილინგ ცენტრი</option>
                            
                                        </select>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group mb-0">
                                <div class="checkbox checkbox-secondary">
                                    <button type="submit" class="btn btn-primary ">ძებმა</button>
                                </div>
                            </div>


                        </form>
                    </div>
                </div>
            </div>



            <div class="col-xl-6">
                <div class="card m-b-20">
                    <div class="card-header">

                        ძებნა პროვაიდერის მიხედვით
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('salaro_filter_post') }}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="5" name="search_type">

                            <div class="form-group">
                                <label class="form-label" for="exampleInputEmail1">ძებნა თვის მიხედვით (ჩაწერეთ შემდეგი ფორმატით თვე/წელი)</label>
                                <input type="text" class="form-control" name="search_tve" id="exampleInputname" required>
                            </div>
                    
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="form-label">გადახდის არხი</label>
                                    </div>
                                    <div class="col-md-9">
                                        <select class="form-control select2" name="payment_type_arxi" required>
                                            <option selected disabled value="">აირჩიეთ არხი</option>
                                            <option value="3">ხელით გატარებული</option>
                                            <option value="1">კრილინგ ცენტრი</option>
                            
                                        </select>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group mb-0">
                                <div class="checkbox checkbox-secondary">
                                    <button type="submit" class="btn btn-primary ">ძებმა</button>
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
