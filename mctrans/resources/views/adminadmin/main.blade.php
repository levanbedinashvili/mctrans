@extends('adminadmin.layout.app')



@section('content')



<div class="app-content  my-3 my-md-5">
    <div class="side-app">
        <div class="page-header">

            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{Request::root()}}/home">მთავარი</a></li>
                <li class="breadcrumb-item active" aria-current="page"> მთავარი გვერდის კონტენტის ცვლილება</li>
            </ol>

        </div>


        <div class="row">
            <div class="col-xl-12">
                <div class="card m-b-20">
                    @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.main_update') }}" enctype="multipart/form-data">
                         @csrf
                         <input type="hidden" value="1" name="tarifi_id">


                            <div class="form-group">
                                <label class="form-label" for="exampleInputEmail1">ქართულად</label>
                                <textarea class="content" id="editor1" name="ratom_chven_text_geo" required>

                                    {!! $info->ratom_chven_text_geo !!}

                                </textarea>
                            </div>


                            <div class="form-group">
                                <label class="form-label" for="exampleInputEmail1">ინგლისურად</label>
                                <textarea class="content" id="editor2" name="ratom_chven_text_eng" required>

                                    {!! $info->ratom_chven_text_eng !!}

                                </textarea>
                            </div>




                            <div class="form-group">
                                <label class="form-label" for="exampleInputEmail1">რუსულად</label>
                                <textarea class="content" id="editor3" name="ratom_chven_text_rus" required>

                                    {!! $info->ratom_chven_text_rus !!}

                                </textarea>
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


@push('js')

    <script src="{{ asset('assets/admin/assets/ckeditor/ckeditor.js') }}"></script>


    <script>
        CKEDITOR.replace('editor1', {
            language: 'ka',
            height: 200,
        });

        CKEDITOR.replace('editor2', {
            language: 'ka',
            height: 200,
        });
        CKEDITOR.replace('editor3', {
            language: 'ka',
            height: 200,
        });
    </script>
@endpush
