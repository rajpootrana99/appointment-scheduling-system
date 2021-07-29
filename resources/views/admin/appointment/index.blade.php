@extends('layout.mainlayout_admin')
@section('content')
<!-- Page Wrapper -->
<div class="page-wrapper">
                <div class="content container-fluid">

					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">Appointments</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index">Dashboard</a></li>
									<li class="breadcrumb-item active">Appointments</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					<div class="row">
						<div class="col-md-12">

							<!-- Recent Orders -->
							<div class="card">
								<div class="card-body">
									<div class="table-responsive">
										<table class="datatable table table-hover table-center mb-0">
											<thead>
												<tr>
													<th>Lawyer Name</th>
													<th>Lawyer Type</th>
													<th>Client Name</th>
													<th>Apointment Time</th>
													<th>Status</th>
                                                    <th class="text-center">Action</th>
												</tr>
											</thead>
                                            <tbody>
                                                @foreach($appointments as $appointment)
                                                    <tr>
                                                        <td>
                                                            <h2 class="table-avatar">
                                                                @if(isset($appointment->lawyer->image))
                                                                <a href="profile" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{ asset('storage/'.$appointment->lawyer->image) }}" alt="User Image"></a>
                                                                @endif
                                                                <a href="profile">{{ $appointment->lawyer->name }}</a>
                                                            </h2>
                                                        </td>
                                                        <td>{{ $appointment->lawyerType->name }}</td>
                                                        <td>
                                                            <h2 class="table-avatar">
                                                                @if(isset($appointment->user->image))
                                                                    <a href="profile" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{ asset('storage/'.$appointment->user->image) }}" alt="User Image"></a>
                                                                @endif
                                                                <a href="profile">{{ $appointment->user->name }}</a>
                                                            </h2>
                                                        </td>
                                                        <td>{{ $appointment->appointment_date }} <span class="text-primary d-block">{{ $appointment->appointment_time }}</span></td>
                                                        @if($appointment->status == 'Pending')
                                                            <td><span class="badge badge-pill bg-info-light">{{ $appointment->status }}</span></td>
                                                        @endif
                                                        @if($appointment->status == 'Confirm')
                                                            <td><span class="badge badge-pill bg-success-light">{{ $appointment->status }}</span></td>
                                                        @endif
                                                        @if($appointment->status == 'Reject')
                                                            <td><span class="badge badge-pill bg-danger-light">{{ $appointment->status }}</span></td>
                                                        @endif
                                                        <td class="text-center">
                                                            <div class="dropdown d-inline-block">
                                                                <a class="dropdown-toggle arrow-none" id="dLabel11" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                                    <i class="las la-ellipsis-v font-20 text-muted"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dLabel11">
                                                                    @if($appointment->status != 'Reject')
                                                                        <form id="{{ 'reject_'.$appointment->id }}" method="post" action="">
                                                                            @csrf
                                                                            @method('PATCH')
                                                                            <input type="hidden" name="order_status" value="2">
                                                                            <a class="dropdown-item" style="cursor: pointer;" onclick="document.getElementById('{{'reject_'.$appointment->id}}').submit()">Reject</a>
                                                                        </form>
                                                                    @endif
                                                                    @if($appointment->status != 'Confirm')
                                                                        <form id="{{ 'confirm_'.$appointment->id }}" method="post" action="">
                                                                            @csrf
                                                                            @method('PATCH')
                                                                            <input type="hidden" name="order_status" value="1">
                                                                            <a class="dropdown-item" style="cursor: pointer;" onclick="document.getElementById('{{'confirm_'.$appointment->id}}').submit()">Confirm</a>
                                                                        </form>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
										</table>
									</div>
								</div>
							</div>
							<!-- /Recent Orders -->

						</div>
					</div>
				</div>
			</div>
			<!-- /Page Wrapper -->

        </div>
		<!-- /Main Wrapper -->
@endsection
