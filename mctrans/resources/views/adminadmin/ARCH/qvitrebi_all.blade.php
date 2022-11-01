@extends('layout.app')
@section('content')


<div class="app-content  my-3 my-md-5">
    <div class="side-app">
        <div class="page-header">

            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{Request::root()}}/home">მთავარი</a></li>
                <li class="breadcrumb-item active" aria-current="page">ქვითრების დაბეჭდვა</li>
            </ol>

        </div>

        <div class="row">
           
            <div class="col-xl-6">
                <div class="card m-b-20">
                    <div class="card-header">
                       მონიშნეთ პარამეტრები
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('qvitrebi_print_all') }}" enctype="multipart/form-data" onsubmit="return checkForm(this);">
                            @csrf
                            


                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="form-label">აირჩიეთ თვე</label>
                                    </div>
                                    <div class="col-md-9">
                                        <select class="form-control select2" name="tve" required>
                                            <option selected disabled value="">აირჩიეთ თვე</option>

                                            @foreach ($tve as $tve_item)
                                            <option value="{{ $tve_item->tve_id }}">{{ $tve_item->tve_name }}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="form-label">აირჩიეთ უბანი</label>
                                    </div>
                                    <div class="col-md-9">
                                        <select class="form-control select2" name="ubani" required>
                                            <option selected disabled value="">აირჩიეთ უბანი</option>

                                           
                                            @foreach ($ubani as $ubani_item)
                                            <option value="{{ $ubani_item->ubani_id }}">{{ $ubani_item->ubani_name }}</option>
                                            @endforeach
        
                                        </select>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="form-label">კატეგორია</label>
                                    </div>
                                    <div class="col-md-9">
                                        <select class="form-control select2" name="user_category" required>
                                            <option selected disabled value="">აირჩიეთ კატეგორია</option>

                                            <option value="1">ფიზიკური პირი</option>
                                            <option value="2">სოციალურად დაუცველი პირი</option>
                                            <option value="3">იურიდიული პირი</option>
        
                                        </select>
                                    </div>
                                </div>
                            </div>





                         
                            <div class="form-group mb-0">
                                <div class="checkbox checkbox-secondary">
                                    <button type="submit" id="btnSendDataDARICXVA"  name="myButton" class="btn btn-primary ">გენერაცია PDF</button>
                                </div>
                            </div>


                        </form>
                    </div>
                </div>
            </div>



        </div>



</div>
</div>


@push('js')

<script type="text/javascript">

    function checkForm(form)
    {
      //
      // validate form fields
      //
  
      form.myButton.disabled = true;
      document.getElementById("btnSendDataDARICXVA").innerText = 'მიმდინარეობს გენერაცია დახუროთ გვერდი';
      return true;
    }
  
  </script>
    
@endpush



@endsection


