<?php $page="appointments";?>
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
									<li class="breadcrumb-item active" aria-current="page">Appointments</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">Appointments</h2>
						</div>
					</div>
				</div>
			</div>
			<!-- /Breadcrumb -->

			<!-- Page Content -->
			<div class="content">
				<div class="container-fluid">

					<div class="row">
						<div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">

							<!-- Profile Sidebar -->
							<div class="profile-sidebar">
								<div class="widget-profile pro-widget-content">
									<div class="profile-info-widget">
                                        <a href="#" class="booking-doc-img">
                                            <img src="{{ asset('storage/' .$lawyer->user->image) }}" alt="User Image">
                                        </a>
                                        <div class="profile-det-info">
                                            <h3>{{ $lawyer->user->name }}</h3>

                                            <div class="patient-details">
                                                <h5 class="mb-0">{{ $lawyer->education }} - {{ $lawyer->lawyerType->name }}</h5>
                                            </div>
                                        </div>
									</div>
								</div>
								<div class="dashboard-widget">
									<nav class="dashboard-menu">
										<ul>
											<li>
												<a href="{{ route('lawyer') }}">
													<i class="fas fa-columns"></i>
													<span>Dashboard</span>
												</a>
											</li>
											<li class="active">
												<a href="{{ route('appointments') }}">
													<i class="fas fa-calendar-check"></i>
													<span>Appointments</span>
												</a>
											</li>
											<li>
												<a href="{{ route('my-clients') }}">
													<i class="fas fa-user-injured"></i>
													<span>My Clients</span>
												</a>
											</li>
											<li>
												<a href="{{ route('reviews') }}">
													<i class="fas fa-star"></i>
													<span>Reviews</span>
												</a>
											</li>
											<li>
												<a href="{{ route('profile-setting') }}">
													<i class="fas fa-user-cog"></i>
													<span>Profile Settings</span>
												</a>
											</li>
											<li>
												<a href="{{ route('change-lawyer-password') }}">
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
							<!-- /Profile Sidebar -->

						</div>

						<div class="col-md-7 col-lg-8 col-xl-9">
							<div class="appointments">
								<!-- Appointment List -->
                                @foreach($appointments as $appointment)
                                    <div class="appointment-list">
                                        <div class="profile-info-widget">
                                            <a href="patient-profile" class="booking-doc-img">
                                                @if(isset($appointment->user->image))
                                                    <img src="{{ asset('storage/'.$appointment->user->image) }}" alt="User Image">
                                                @else
                                                    <img src="assets/img/patients/patient.jpg" alt="User Image">
                                                @endif
                                            </a>
                                            <div class="profile-det-info">
                                                <h3><a href="patient-profile">{{ $appointment->user->name }}</a></h3>
                                                <div class="patient-details">
                                                    <h5><i class="far fa-clock"></i>{{ $appointment->appointment_date }}, {{ $appointment->appointment_time }}</h5>
                                                    <h5><i class="fas fa-envelope"></i> {{ $appointment->user->email }}</h5>
                                                    <h5 class="mb-0"><i class="fas fa-phone"></i> {{ $appointment->user->phone }}</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="appointment-action">
                                            <a href="#" class="btn btn-sm bg-info-light" data-toggle="modal" data-target="#appt_details">
                                                <i class="far fa-eye"></i> View
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
								<!-- /Appointment List -->
							</div>
						</div>
					</div>

				</div>

			</div>
            <!-- /Page Content -->
</div>

		<!-- Appointment Details Modal -->
		<div class="modal fade custom-modal" id="appt_details">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Appointment Details</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<ul class="info-details">
							<li>
								<div class="details-header">
									<div class="row">
										<div class="col-md-6">
											<span class="title">#APT0001</span>
											<span class="text">21 Oct 2019 10:00 AM</span>
										</div>
										<div class="col-md-6">
											<div class="text-right">
												<button type="button" class="btn bg-success-light btn-sm" id="topup_status">Completed</button>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li>
								<span class="title">Status:</span>
								<span class="text">Completed</span>
							</li>
							<li>
								<span class="title">Confirm Date:</span>
								<span class="text">29 Jun 2019</span>
							</li>
							<li>
								<span class="title">Paid Amount</span>
								<span class="text">$450</span>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- /Appointment Details Modal -->
@endsection
