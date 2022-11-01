@extends('layout.app')
@section('content')


<div class="app-content  my-3 my-md-5">
    <div class="side-app">
        <div class="page-header">

            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{Request::root()}}/home">მთავარი</a></li>
                <li class="breadcrumb-item active" aria-current="page">ძებნა ტრანსაქციის ID მიხედვით</li>
            </ol>

        </div>
    
        
        <div class="row">
            <div class="col-xl-12">
                <div class="card m-b-20">
                    <div class="card-header">
                       

                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('salaro_search_transaction_result') }}" enctype="multipart/form-data">
                            @csrf
                           

                            <div class="form-group">
                                <label class="form-label" for="exampleInputEmail1">ჩაწერეთ ტრანზაქციის ID</label>
                                <input type="text" class="form-control" name="transaction_id" id="exampleInputname" required>
                            </div>


                            <div class="form-group mb-0">
                                <div class="checkbox checkbox-secondary">
                                    <button type="submit" class="btn btn-primary ">ძებნა</button>
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
