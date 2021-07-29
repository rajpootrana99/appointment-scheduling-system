<?php $page="patient-dashboard";?>
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
									<li class="breadcrumb-item active" aria-current="page">Dashboard</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">Dashboard</h2>
						</div>
					</div>
				</div>
			</div>
			<!-- /Breadcrumb -->

			<!-- Page Content -->
			<div class="content">
				<div class="container-fluid">

					<div class="row">

						<!-- Profile Sidebar -->
						<div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">
							<div class="profile-sidebar">
								<div class="widget-profile pro-widget-content">
									<div class="profile-info-widget">
                                        <a href="#" class="booking-doc-img">
                                            @if(isset(Auth::user()->image))
                                                <img src="{{ asset('storage/'.Auth::user()->image) }}" alt="User Image">
                                            @else
                                                <img src="assets/img/patients/patient.jpg" alt="User Image">
                                            @endif
                                        </a>
                                        <div class="profile-det-info">
                                            <h3>{{ Auth::user()->name }}</h3>
                                        </div>
									</div>
								</div>
								<div class="dashboard-widget">
									<nav class="dashboard-menu">
										<ul>
											<li class="active">
												<a href="{{ route('user') }}">
													<i class="fas fa-columns"></i>
													<span>Dashboard</span>
												</a>
											</li>
											<li>
												<a href="{{ route('favourites') }}">
													<i class="fas fa-bookmark"></i>
													<span>Favourites</span>
												</a>
											</li>
											<li>
												<a href="{{ route('profile-settings') }}">
													<i class="fas fa-user-cog"></i>
													<span>Profile Settings</span>
												</a>
											</li>
											<li>
												<a href="{{ route('change-user-password') }}">
													<i class="fas fa-lock"></i>
													<span>Change Password</span>
												</a>
											</li>
											<li>
                                                <form action="{{ route('logout') }}"  style="display: none;" method="post" id="lgut">
                                                    @csrf
                                                    <input type="submit" id="logoutbtn">
                                                </form>
                                                <a type="button" onclick="$('#lgut').submit()">
                                                    <i class="fas fa-sign-out-alt"></i>
                                                    <span>Logout</span>
                                                </a>
											</li>
										</ul>
									</nav>
								</div>

							</div>
						</div>
						<!-- / Profile Sidebar -->

						<div class="col-md-7 col-lg-8 col-xl-9">
							<div class="card">
								<div class="card-body pt-0">

									<!-- Tab Menu -->
									<nav class="user-tabs mb-4">
										<ul class="nav nav-tabs nav-tabs-bottom nav-justified">
											<li class="nav-item">
												<a class="nav-link active" href="#client_appointments" data-toggle="tab">Appointments</a>
											</li>
										</ul>
									</nav>
									<!-- /Tab Menu -->

									<!-- Tab Content -->
									<div class="tab-content pt-0">

										<!-- Appointment Tab -->
										<div id="client_appointments" class="tab-pane fade show active">
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
                                                                @foreach($appointments as $appointment)
                                                                    <tr>
                                                                        <td>
                                                                            <h2 class="table-avatar">
                                                                                @if(isset($appointment->lawyer->image))
                                                                                    <a href="{{ route('lawyer.show', ['lawyer' => $appointment->lawyer->id]) }}" class="avatar avatar-sm mr-2">
                                                                                        <img class="avatar-img rounded-circle" src="{{ asset('storage/'.$appointment->lawyer->image) }}" alt="User Image">
                                                                                    </a>
                                                                                @endif
                                                                                <a href="{{ route('lawyer.show', ['lawyer' => $appointment->lawyer->id]) }}">{{ $appointment->lawyer->name }} <span>{{ $appointment->lawyerType->name }}</span></a>
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
                                                                        <td class="text-right">
                                                                            <div class="table-action">
                                                                                <a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
                                                                                    <i class="fas fa-print"></i> Print
                                                                                </a>
                                                                                <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
                                                                                    <i class="far fa-eye"></i> View
                                                                                </a>
                                                                            </div>
                                                                        </td>
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
									<!-- Tab Content -->

								</div>
							</div>
						</div>
					</div>

				</div>

			</div>
			<!-- /Page Content -->
</div>
@endsection
