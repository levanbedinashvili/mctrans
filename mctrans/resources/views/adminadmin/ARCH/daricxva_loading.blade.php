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

                       დაირცხვის სტატუსი
                    </div>
                    
                    <div class="card-body">
                     
                        გთხოვთ დაელოდოთ, მიმდინარეობს თანხების დარიცხვა

                        
                        <meta http-equiv="refresh" content="10;URL='{{Request::root()}}/daricxva/running/{{ $tve_id }}'" /> 
                        



                    </div>
                </div>
            </div>
        </div>







</div>
</div>


@endsection
