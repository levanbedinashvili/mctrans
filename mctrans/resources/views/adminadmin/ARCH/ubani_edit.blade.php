@extends('layout.app')
@section('content')


<div class="app-content  my-3 my-md-5">
    <div class="side-app">
        <div class="page-header">

            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{Request::root()}}/home">მთავარი</a></li>
                <li class="breadcrumb-item active" aria-current="page"> უბნის ინფორმაციის ცვლილება</li>
            </ol>

        </div>


        <div class="row">
            <div class="col-xl-12">
                <div class="card m-b-20">
                    <div class="card-header">
                        <h2>{{Session::get('Success')}}</h2><br>


                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('update_ubani') }}" enctype="multipart/form-data">
                         @csrf
                         <input type="hidden" value="{{ $info->ubani_id }}" name="ubani_id">
                            <div class="form-group">
                                <label class="form-label" for="exampleInputEmail1">პროდუქტის დასახელება</label>
                                <input type="text" class="form-control" name="ubani_name" value="{{ $info->ubani_name }}" required>
                            </div>

                            <div class="form-group mb-0">
                                <div class="checkbox checkbox-secondary">
                                    <button type="submit" class="btn btn-primary ">ცვლილება</button>
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
