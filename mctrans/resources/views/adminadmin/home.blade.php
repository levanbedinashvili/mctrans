@extends('adminadmin.layout.app')
@section('content')


<div class="app-content  my-3 my-md-5">
    <div class="side-app">
        <div class="page-header">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">სამართავი სისტემა</a></li>
                <li class="breadcrumb-item active" aria-current="page">VGIO V12.0</li>
            </ol>
        </div>

        <div class="row">
            <div class="col-xl-12">
                <div class="card m-b-20">
                    @if (session('successimage'))
                    <div class="alert alert-success">
                        {{ session('successimage') }}
                    </div>
                    @endif
                    @if (session('dangerimage'))
                    <div class="alert alert-success">
                        {{ session('dangerimage') }}
                    </div>
                    @endif
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.mtavari_update') }}" enctype="multipart/form-data">
                         @csrf

                        <div class="form-group">
                            <label class="form-label" for="exampleInputEmail1">მთავარი გვერდის ფოტო</label>
                            <input type="file" name="image" class="form-control">
                        </div>

                        <div class="form-group mb-0">
                            <div class="checkbox checkbox-secondary">
                                <button type="submit" class="btn btn-primary ">ფოტოს განახლება</button>
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
