@extends('layout.app')
@section('content')
    

<div class="app-content  my-3 my-md-5">
					<div class="side-app">
						<div class="page-header">
							<h4 class="page-title">პროფილი</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{Request::root()}}/adminadmin/home">მთავარი</a></li>
                                <li class="breadcrumb-item active" aria-current="page">დეტალური ინფორმაცია</li>
                            </ol>

						</div>

						<div class="row">
							<div class="col-lg-12 col-xl-12">
								

								<div class="card p-5 ">
									<div class="card-title">
										დეტალური ინფორმაცია
										<br>
										<a href="{{Request::root()}}/abonentebi/edit/{{ $info->abonentebi_id }}">ცვლილება</a>
                                    </div>
                                    

                                    <div class="table-responsive border ">
                                        <table class="table row table-borderless w-100 m-0 ">
                                            <tbody class="col-lg-6 col-xl-6 p-0">
                                               
												<tr>
                                                    <td><strong>მომხმარებლის სახელი :</strong> {{ $info->abonentebi_fname }}</td>
                                                </tr>
												
												<tr>
                                                    <td><strong>უნიკალური ID :</strong> {{ str_pad($info->abonentebi_id, 6, "0", STR_PAD_LEFT) }}</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>უბანი: </strong>{{ $info->abonentebi_ubaname }} </td>
                                                </tr>

												<tr>
                                                    <td><strong>მისამართი :</strong> {{ $info->abonentebi_misamarti }}</td>
                                                </tr>

												<tr>
                                                    <td><strong>ტარიფი :</strong> {{ \App\Helpers\AppHelper::instance()->get_tarifi_tanxa($info->abonentebi_tarifi)}}</td>
                                                </tr>


												

                                            
										    </tbody>



                                            <tbody class="col-lg-6 col-xl-6 p-0">
												<tr>
                                                    <td><strong>რაოდენობა :</strong> {{ $info->abonentebi_raodenoba }}</td>
                                                </tr>

												<tr>
                                                    <td><strong>დარიცხვა თვეში :</strong> {{ $info->abonentebi_daricxva }}</td>
                                                </tr>

												<tr>
                                                    <td><strong>მიმდინარე გადასახადი :</strong> {{ $info->abonentebi_gadasaxdeli }}</td>
                                                </tr>

                                                <tr>
                                                    <td><strong>ტელეფონის ნომერი :</strong>{{ $info->abonentebi_telefoni }}</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>საიდენტიფიკაციო ნომერი :</strong> {{ $info->abonentebi_saident }}</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>რეგისტრაციის დრო:</strong> {{ $info->abonentebi_reged }}</td>
                                                </tr>

												<tr>
                                                    <td><strong>კომენტარი:</strong> {{ $info->abonentebi_comentari }}</td>
                                                </tr>


                                            </tbody>
                                        </table>
                                    </div>


									<!-- media-list -->
                                </div>
                            </div>
                            
						</div>




						<div class="row">
							<div class="col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">აბონენტზე დარიცხული თანხები</div>
				
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table id="exampleXX" class="table table-striped table-bordered" >
												<thead>
													<tr>
														<th>დარიცხული თანხა</th>
														<th>დარიცხვამდე თანხა</th>
														<th>დარიცხვის შემდეგ თანხა</th>
														<th>დრო</th>
													</tr>
												</thead>
												<tbody>
				
													@foreach ($daricxva as $daricxva_item)

													<tr>
														<td>{{ $daricxva_item->daricxva_tanxa }}</td>

														<td>{{ $daricxva_item->daricxva_arsebuli_gadasaxdeli }}</td>

														<td>{{ $daricxva_item->daricxva_axali_gadasaxdeli }}</td>

														<td>{{ $daricxva_item->daricxva_tarigi }}</td>
														
													</tr>
														
													@endforeach
													
		
				
				
												</tbody>
											</table>
				

				
										</div>
									</div>
									<!-- table-wrapper -->
								</div>
								<!-- section-wrapper -->
							</div>
				
						</div>



						<div class="row">
							<div class="col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">აბონენტის მიერ გადახდილი თანხები</div>
				
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table id="exampleXX" class="table table-striped table-bordered" >
												<thead>
													<tr>
														<th>თანხა</th>
														<th>დრო</th>
														<th>არხი</th>
														
													</tr>
												</thead>
												<tbody>
				
													@foreach ($salaro as $salaro_item)

													<tr>
														<td>{{ $salaro_item->salaro_tanxa }}</td>

														<td>{{ $salaro_item->salaro_dro_det }}</td>

														<td>{{ $salaro_item->salaro_gatarebis_arxi }}</td>
														
													</tr>
														
													@endforeach
		
				
				
												</tbody>
											</table>
				

				
										</div>
									</div>
									<!-- table-wrapper -->
								</div>
								<!-- section-wrapper -->
							</div>
				
						</div>



						<div class="row">
							<div class="col-xl-12">
								<div class="card m-b-20">
									<div class="card-header">
										<h3>
										
											აბონენტის ანგარიშზე თანხის ხელით გატარება
										
										</h3><br>
				
				
									</div>
									<div class="card-body">
										<form method="POST" action="{{ route('abonentebi_xelit_gatareba') }}" enctype="multipart/form-data">
											<input type="hidden" value="{{ str_pad($info->abonentebi_id, 6, "0", STR_PAD_LEFT) }}" name="abonenti_uid">
											@csrf
				
											<div class="form-group">
												<label class="form-label" for="exampleInputEmail1">მიუთითეთ თანხა (მათემატიკურად მთელი რიცხვი მაგ 5 ლარი უნდა დაწეროთ უბრალოდ 5)</label>
												<input type="text" class="form-control" name="abonentebi_xelit_gatareba_tanxa" id="exampleInputname" required>
											</div>
				
				
				
				
											<div class="form-group mb-0">
												<div class="checkbox checkbox-secondary">
													<button type="submit" class="btn btn-primary ">თანხის გადახდა</button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
					    </div>


						<div class="row">
							<div class="col-xl-12">
								<div class="card m-b-20">
									<div class="card-header">
										<h3>
										
											აბონენტის წაშლა
										
										</h3><br>
				
				
									</div>
									<div class="card-body">
										

										<a href="{{Request::root()}}/abonentebi/delete_user/{{ str_pad($info->abonentebi_id, 6, "0", STR_PAD_LEFT) }}" class="slide-item"><button type="submit" class="btn btn-primary ">აბონენტის წაშლა</button></a>


									</div>



								</div>
							</div>
					    </div>



					</div>
				</div>
			</div>

            @endsection