@extends('layout.app')
@section('content')


<div class="app-content  my-3 my-md-5">
    <div class="side-app">
        <div class="page-header">

            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{Request::root()}}/home">მთავარი</a></li>
                <li class="breadcrumb-item active" aria-current="page">იურიდიული პირის აბონენტის დამატება</li>
            </ol>

        </div>


        <div class="row">
            <div class="col-xl-12">
                <div class="card m-b-20">
                    <div class="card-header">
                        <h2>{{Session::get('Success')}}</h2><br>


                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('abonentebi_insert_iuri') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label class="form-label" for="exampleInputEmail1">აბონენტის სრული სახელი</label>
                                <input type="text" class="form-control" name="abonentebi_fname" id="exampleInputname" required>
                            </div>


                            <div class="form-group">
                                <label class="form-label" for="exampleInputEmail1">საიდენტიფიკაციო</label>
                                <input type="text" class="form-control" name="abonentebi_saident" id="exampleInputname" required>
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="exampleInputEmail1">მისამართი</label>
                                <input type="text" class="form-control" name="abonentebi_misamarti" id="exampleInputname" required>
                            </div>

                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="form-label">მონიშნეთ უბანი</label>
                                    </div>
                                    <div class="col-md-9">
                                        <select class="form-control select2" name="abonentebi_ubanid" required>
                                            <option selected disabled value="">აირჩიეთ უბანი</option>


                                            @foreach ($ubani as $ubani_item)

                                            <option value="{{$ubani_item->ubani_id}}">{{$ubani_item->ubani_name}}</option>

                                            @endforeach



                                        </select>
                                    </div>
                                </div>
                            </div>

                        





                            <div class="form-group">
                                <label class="form-label" for="exampleInputEmail1">რაოდენობა</label>
                                <input type="text" class="form-control" name="abonentebi_raodenoba" id="exampleInputname" required>
                            </div>


                            <div class="form-group">
                                <label class="form-label" for="exampleInputEmail1">თვეში დარიცხვა</label>
                                <input type="text" class="form-control" name="abonentebi_daricxva" placeholder="მიუთითეთ რა თანხა უნდა დაერიცხოს თვეში" id="exampleInputname" required>
                            </div>


                            <div class="form-group">
                                <label class="form-label" for="exampleInputEmail1">ტელეფონის ნომერი აუცილებელია ნომერი ჩაიწეროს შემდეგი ფორმატით (5XXXXXXXX)</label>
                                <input type="text" class="form-control" name="abonentebi_telefoni" id="exampleInputname" minlength="9" maxlength="9" pattern="[0-9]*" placeholder="მაგ: 5XXXXXXXX"  autofocus required>
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="exampleInputEmail1">არსებული დავალიანება</label>
                                <input type="text" class="form-control" name="abonentebi_gadasaxdeli" id="exampleInputname"  value="0" required>
                            </div>


                            <div class="form-group">
                                <label class="form-label" for="exampleInputEmail1">კომენტარი</label>
                                <input type="text" class="form-control" name="abonentebi_comentari" id="exampleInputname"  placeholder="შეგიძლიათ დატოვოთ ცარიელი ველი">
                            </div>











                            <div class="form-group mb-0">
                                <div class="checkbox checkbox-secondary">
                                    <button type="submit" class="btn btn-primary ">დამატება</button>
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
