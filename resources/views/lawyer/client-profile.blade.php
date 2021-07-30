<?php $page="patient-profile";?>
@extends('layout.mainlayout')
@section('content')
<!-- Breadcrumb -->
<div class="breadcrumb-bar">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-md-12 col-12">
							<nav aria-label="breadcrumb" class="page-breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Profile</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">Profile</h2>
						</div>
					</div>
				</div>
			</div>
			<!-- /Breadcrumb -->

			<!-- Page Content -->
			<div class="content">
				<div class="container-fluid">

					<div class="row">
						<div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar dct-dashbd-lft">

							<!-- Profile Widget -->
							<div class="card widget-profile pat-widget-profile">
								<div class="card-body">
									<div class="pro-widget-content">
										<div class="profile-info-widget">
											<a href="#" class="booking-doc-img">
                                                @if(isset($user->image))
                                                    <img src="{{ asset('storage/'.$user->image) }}" alt="User Image">
                                                @else
                                                    <img src="{{ asset('assets/img/patients/patient.jpg') }}" alt="User Image">
                                                @endif
											</a>
											<div class="profile-det-info">
												<h3>{{ $user->name }}</h3>

												<div class="patient-details">
													<h5><b>Client ID :</b> C00{{ $user->id }}</h5>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /Profile Widget -->

							<!-- Last Booking -->
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Last Booking</h4>
								</div>
								<ul class="list-group list-group-flush">
                                    @foreach($lawyers as $lawyer)
                                        <li class="list-group-item">
                                            <div class="media align-items-center">
                                                <div class="mr-3">
                                                    @if(isset($lawyer->lawyer->image))
                                                        <img alt="Image placeholder" src="{{ asset('storage/'.$lawyer->lawyer->image) }}" class="avatar  rounded-circle">
                                                    @else
                                                        <img alt="Image placeholder" src="{{ asset('assets/img/doctors/doctor-thumb-02.jpg') }}" class="avatar  rounded-circle">
                                                    @endif
                                                </div>
                                                <div class="media-body">
                                                    <h5 class="d-block mb-0">{{ $lawyer->lawyer->name }} </h5>
                                                    <span class="d-block text-sm text-muted">{{ $lawyer->lawyerType->name }}</span>
                                                    <span class="d-block text-sm text-muted">{{ $lawyer->appointment_date }} {{ $lawyer->appointment_time }}</span>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
								</ul>
							</div>
							<!-- /Last Booking -->

						</div>

						<div class="col-md-7 col-lg-8 col-xl-9 dct-appoinment">
							<div class="card">
								<div class="card-body pt-0">
									<div class="user-tabs">
										<ul class="nav nav-tabs nav-tabs-bottom nav-justified flex-wrap">
											<li class="nav-item">
												<a class="nav-link active" href="#pat_appointments" data-toggle="tab">Appointments</a>
											</li>
										</ul>
									</div>
									<div class="tab-content">

										<!-- Appointment Tab -->
										<div id="pat_appointments" class="tab-pane fade show active">
											<div class="card card-table mb-0">
												<div class="card-body">
													<div class="table-responsive">
														<table class="table table-hover table-center mb-0">
															<thead>
																<tr>
																	<th>Lawyer</th>
																	<th>Appt Date</th>
																	<th>Booking Date</th>
																	<th>Status</th>
																	<th></th>
																</tr>
															</thead>
															<tbody>
                                                                @foreach($user->userAppointments as $appointment)
																<tr>
																	<td>
																		<h2 class="table-avatar">
																			<a href="{{ route('lawyers.show', ['lawyer' => $appointment->lawyer->id]) }}" class="avatar avatar-sm mr-2">
                                                                                @if(isset($appointment->lawyer->image))
																				    <img class="avatar-img rounded-circle" src="{{ asset('storage/'.$appointment->lawyer->image) }}" alt="User Image">
                                                                                @else
																				    <img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-02.jpg" alt="User Image">
                                                                                @endif
																			</a>
																			<a href="{{ route('lawyers.show', ['lawyer' => $appointment->lawyer->id]) }}">{{ $appointment->lawyer->name }} <span>{{ $appointment->lawyerType->name }}</span></a>
																		</h2>
																	</td>
																	<td>{{ $appointment->appointment_date }} <span class="d-block text-info">{{ $appointment->appointment_time }}</span></td>
																	<td>{{ $appointment->created_at }}</td>
                                                                    @if($appointment->status == 'Pending')
                                                                        <td><span class="badge badge-pill bg-info-light">{{ $appointment->status }}</span></td>
                                                                    @endif
                                                                    @if($appointment->status == 'Confirm')
                                                                        <td><span class="badge badge-pill bg-success-light">{{ $appointment->status }}</span></td>
                                                                    @endif
                                                                    @if($appointment->status == 'Reject')
                                                                        <td><span class="badge badge-pill bg-danger-light">{{ $appointment->status }}</span></td>
                                                                    @endif
																</tr>
                                                                @endforeach
															</tbody>
														</table>
													</div>
												</div>
											</div>
										</div>
										<!-- /Appointment Tab -->

									</div>
								</div>
							</div>
						</div>
					</div>

				</div>

			</div>
            <!-- /Page Content -->
</div>
@endsection
