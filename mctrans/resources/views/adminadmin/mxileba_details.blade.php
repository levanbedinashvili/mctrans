@extends('adminadmin.layout.app')
@section('content')

<div class="app-content  my-3 my-md-5">
    <div class="side-app">
        <div class="page-header">
            <h4 class="page-title">წერილი</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">მთავარი</a></li>
                <li class="breadcrumb-item active" aria-current="page">წერილი</li>
            </ol>
        </div>
        <div class="row">
            <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">წერილი</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3 col-sm-4">
                                <img src="{{ asset('assets/admin/assets/images/svgs/admin/man.svg') }}" style="width: 250px; height: 250px;"class="imag-service" alt="user">
                            </div>
                            <div class="col-md-9 col-sm-8">
                                <p class="mt-4 mt-sm-0">IP: {!! $info->ip !!}</p>
                                <p class="mt-4 mt-sm-0">Browser: {!! $info->agent !!}</p>
                                <p class="mt-4 mt-sm-0">{!! $info->message !!}</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
