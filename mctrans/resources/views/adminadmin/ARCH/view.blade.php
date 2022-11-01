@extends('layout.app')
@section('content')


				<div class="app-content  my-3 my-md-5">
					<div class="side-app">
						<div class="page-header">

                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{Request::root()}}/home">მთავარი</a></li>
                                <li class="breadcrumb-item active" aria-current="page">მიმოხილვა</li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $time }}</li>

                                <li class="breadcrumb-item active" aria-current="page"> SMS ბალანსი: {{ $sms_balance }}</li>
                            </ol>
						</div>




						<div class="row row-cards">


                            <div class="col-sm-12 col-lg-6 col-xl-3">
								<div class="card">
									<div class="card-body iconfont text-center">
										<h5 class="text-muted">სულ აბონენტები</h5>
										<h1 class="mb-2 text-warning">{{ $abonentebi_sul }}</h1>
									</div>
								</div>
                            </div>


                            <div class="col-sm-12 col-lg-6 col-xl-3">
								<div class="card">
									<div class="card-body iconfont text-center">
										<h5 class="text-muted">ფიზიკური პირები</h5>
										<h1 class="mb-2 text-primary">{{ $count_fizikuri }}</h1>
									</div>
								</div>
                            </div>


                            <div class="col-sm-12 col-lg-6 col-xl-3">
								<div class="card">
									<div class="card-body iconfont text-center">
										<h5 class="text-muted">იურიდიული პირები</h5>
										<h1 class="mb-2 text-warning">{{ $count_iuridiuli }}</h1>
									</div>
								</div>
                            </div>


                            <div class="col-sm-12 col-lg-6 col-xl-3">
								<div class="card">
									<div class="card-body iconfont text-center">
										<h5 class="text-muted">სოციალურად დაუცველები</h5>
										<h1 class="mb-2 text-primary">{{ $count_socl }}</h1>
									</div>
								</div>
                            </div>



                            <div class="col-sm-12 col-lg-6 col-xl-3">
								<div class="card">
									<div class="card-body iconfont text-center">
										<h5 class="text-muted">სულ ჩარიცხული</h5>
										<h1 class="mb-2 text-danger">{{ $sul_charicxuli }}</h1>
									</div>
								</div>
                            </div>


                            <div class="col-sm-12 col-lg-6 col-xl-3">
								<div class="card">
									<div class="card-body iconfont text-center">
										<h5 class="text-muted">დღეს ჩარიცხული</h5>
										<h1 class="mb-2 text-success">{{ $dges_charicxuli }}</h1>
									</div>
								</div>
                            </div>



                            <div class="col-sm-12 col-lg-6 col-xl-3">
								<div class="card">
									<div class="card-body iconfont text-center">
										<h5 class="text-muted">ფიზიკური პირები</h5>
										<h1 class="mb-2 text-danger">{{ $charicxva_fiz }}</h1>
									</div>
								</div>
                            </div>


                            <div class="col-sm-12 col-lg-6 col-xl-3">
								<div class="card">
									<div class="card-body iconfont text-center">
										<h5 class="text-muted">იურიდიული პირები</h5>
										<h1 class="mb-2 text-warning">{{ $charicxva_iuridiuli }}</h1>
									</div>
								</div>
                            </div>



                            <div class="col-sm-12 col-lg-6 col-xl-3">
								<div class="card">
									<div class="card-body iconfont text-center">
										<h5 class="text-muted">დავალიანებები</h5>
										<h1 class="mb-2 text-warning">{{ $davalianeba_sul }}</h1>
									</div>
								</div>
                            </div>


                            <div class="col-sm-12 col-lg-6 col-xl-3">
								<div class="card">
									<div class="card-body iconfont text-center">
										<h5 class="text-muted">ფიზიკური პირი</h5>
										<h1 class="mb-2 text-warning">{{ $davalianeba_fiz }}</h1>
									</div>
								</div>
                            </div>


                            <div class="col-sm-12 col-lg-6 col-xl-3">
								<div class="card">
									<div class="card-body iconfont text-center">
										<h5 class="text-muted">იურიდიული პირი</h5>
										<h1 class="mb-2 text-warning">{{ $davalianeba_iur }}</h1>
									</div>
								</div>
                            </div>


                            <div class="col-sm-12 col-lg-6 col-xl-3">
								<div class="card">
									<div class="card-body iconfont text-center">
										<h5 class="text-muted">სოც დაუცველი</h5>
										<h1 class="mb-2 text-warning">{{ $davalianeba_soc }}</h1>
									</div>
								</div>
                            </div>




                            <div class="col-sm-12 col-lg-6 col-xl-3">
								<div class="card">
									<div class="card-body iconfont text-center">
										<h5 class="text-muted">წინსწრებით ჩარიცხვა</h5>
										<h1 class="mb-2 text-success">{{ $winswrebit_charicxva }}</h1>
									</div>
								</div>
                            </div>


                            <div class="col-sm-12 col-lg-6 col-xl-3">
								<div class="card">
									<div class="card-body iconfont text-center">
										<h5 class="text-muted">ფიზიკური პირი</h5>
										<h1 class="mb-2 text-success">{{ $winswrebit_charicxva_fizikuri }}</h1>
									</div>
								</div>
                            </div>


                            <div class="col-sm-12 col-lg-6 col-xl-3">
								<div class="card">
									<div class="card-body iconfont text-center">
										<h5 class="text-muted">იურიდიული პირი</h5>
										<h1 class="mb-2 text-success">{{ $winswrebit_charicxva_iuridiuli }}</h1>
									</div>
								</div>
                            </div>


                            <div class="col-sm-12 col-lg-6 col-xl-3">
								<div class="card">
									<div class="card-body iconfont text-center">
										<h5 class="text-muted">სოც დაუცველი</h5>
										<h1 class="mb-2 text-success">{{ $winswrebit_charicxva_socialurad }}</h1>
									</div>
								</div>
                            </div>




						</div>








					</div>
				</div>
			</div>

            @endsection
