@extends('layout.app')
@section('content')


<div class="app-content  my-3 my-md-5">
    <div class="side-app">
        <div class="page-header">

            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{Request::root()}}/home">მთავარი</a></li>
                <li class="breadcrumb-item active" aria-current="page"> აბონენტის ინფორმაციის ცვლილება</li>
            </ol>

        </div>


        <div class="row">
            <div class="col-xl-12">
                <div class="card m-b-20">
                    <div class="card-header">
                       სტატუსები, ცვლილების განხორციელებისთვის დააკლიკეთ ღილაკებს
                    </div>
                    <div class="card-body">


                        {{ \App\Helpers\AppHelper::instance()->check_daricxva($info->abonentebi_id)}}

                        {{ \App\Helpers\AppHelper::instance()->check_uimedo($info->abonentebi_id)}}
                      
                        
                      




                    </div>
                </div>
            </div>
        </div>
        





        @if ($info->abonentebi_u_type=="2")



        <div class="row">
            <div class="col-xl-12">
                <div class="card m-b-20">
                    <div class="card-header">
                        <h2>{{Session::get('Success')}}</h2><br>
                        <br>

                        აბონენტის ნომერი {{ str_pad($info->abonentebi_id, 6, "0", STR_PAD_LEFT) }}
                    </div>
                    <div class="card-body">
                        
                        <form method="POST" action="{{ route('abonentebi_update_insert') }}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="{{ $info->abonentebi_id }}" name="abonentebi_id">


                            <div class="form-group">
                                <label class="form-label" for="exampleInputEmail1">აბონენტის სრული სახელი</label>
                                <input type="text" class="form-control" name="abonentebi_fname" id="exampleInputname" value="{{ $info->abonentebi_fname }}" required>
                            </div>


                            <div class="form-group">
                                <label class="form-label" for="exampleInputEmail1">საიდენტიფიკაციო</label>
                                <input type="text" class="form-control" name="abonentebi_saident" id="exampleInputname" value="{{ $info->abonentebi_saident }}" required>
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="exampleInputEmail1">მისამართი</label>
                                <input type="text" class="form-control" name="abonentebi_misamarti" id="exampleInputname" value="{{ $info->abonentebi_misamarti }}" required>
                            </div>


                            <div class="form-group">
                                <label class="form-label" for="exampleInputEmail1">რაოდენობა</label>
                                <input type="text" class="form-control" name="abonentebi_raodenoba" id="exampleInputname" value="{{ $info->abonentebi_raodenoba }}" required>
                            </div>


                            <div class="form-group">
                                <label class="form-label" for="exampleInputEmail1">გადასახდელი თანხა</label>
                                <input type="text" class="form-control" name="abonentebi_gadasaxdeli" value="{{ $info->abonentebi_gadasaxdeli }}" id="exampleInputname" required>
                            </div>


                            <div class="form-group">
                                <label class="form-label" for="exampleInputEmail1">ტელეფონის ნომერი</label>
                                <input type="text" class="form-control" name="abonentebi_telefoni" value="{{ $info->abonentebi_telefoni }}" id="exampleInputname" required>
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="exampleInputEmail1">ყოველთვიური დარიცხვა</label>
                                <input type="text" class="form-control" name="abonentebi_daricxva" value="{{ $info->abonentebi_daricxva }}" id="exampleInputname" required>
                            </div>



                            <div class="form-group">
                                <label class="form-label" for="exampleInputEmail1">კომენტარი</label>
                                <input type="text" class="form-control" name="abonentebi_comentari" id="exampleInputname"  value="{{ $info->abonentebi_comentari }}">
                            </div>



                            <div class="form-group mb-0">
                                <div class="checkbox checkbox-secondary">
                                    <button type="submit" class="btn btn-primary ">განახლება</button>
                                </div>
                            </div>




                        </form>




                    </div>
                </div>
            </div>
    </div>


            
        @else


        
        <div class="row">
            <div class="col-xl-12">
                <div class="card m-b-20">
                    <div class="card-header">
                        <h2>{{Session::get('Success')}}</h2><br>
                        <br>

                        აბონენტის ნომერი {{ str_pad($info->abonentebi_id, 6, "0", STR_PAD_LEFT) }}
                    </div>
                    <div class="card-body">
                        
                        <form method="POST" action="{{ route('abonentebi_update_insert') }}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="{{ $info->abonentebi_id }}" name="abonentebi_id">


                            <div class="form-group">
                                <label class="form-label" for="exampleInputEmail1">აბონენტის სრული სახელი</label>
                                <input type="text" class="form-control" name="abonentebi_fname" id="exampleInputname" value="{{ $info->abonentebi_fname }}" required>
                            </div>


                            <div class="form-group">
                                <label class="form-label" for="exampleInputEmail1">საიდენტიფიკაციო</label>
                                <input type="text" class="form-control" name="abonentebi_saident" id="exampleInputname" value="{{ $info->abonentebi_saident }}" required>
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="exampleInputEmail1">მისამართი</label>
                                <input type="text" class="form-control" name="abonentebi_misamarti" id="exampleInputname" value="{{ $info->abonentebi_misamarti }}" required>
                            </div>


                            <div class="form-group">
                                <label class="form-label" for="exampleInputEmail1">რაოდენობა</label>
                                <input type="text" class="form-control" name="abonentebi_raodenoba" id="exampleInputname" value="{{ $info->abonentebi_raodenoba }}" required>
                            </div>




                            <div class="form-group">
                                <label class="form-label" for="exampleInputEmail1">ტელეფონის ნომერი</label>
                                <input type="text" class="form-control" name="abonentebi_telefoni" value="{{ $info->abonentebi_telefoni }}" id="exampleInputname" required>
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="exampleInputEmail1">გადასახდელი თანხა</label>
                                <input type="text" class="form-control" name="abonentebi_gadasaxdeli" value="{{ $info->abonentebi_gadasaxdeli }}" id="exampleInputname" required>
                            </div>



                            <div class="form-group">
                                <label class="form-label" for="exampleInputEmail1">კომენტარი</label>
                                <input type="text" class="form-control" name="abonentebi_comentari" id="exampleInputname"  value="{{ $info->abonentebi_comentari }}">
                            </div>



                            <div class="form-group mb-0">
                                <div class="checkbox checkbox-secondary">
                                    <button type="submit" class="btn btn-primary ">განახლება</button>
                                </div>
                            </div>




                        </form>




                    </div>
                </div>
            </div>
    </div>
        


        @endif




     






</div>
</div>


@endsection
