<?php $page="my-patients";?>
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
									<li class="breadcrumb-item active" aria-current="page">My Clients</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">My Patients</h2>
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
                                                <h5 class="mb-0">
                                                    {{ $lawyer->education }} - {{ $lawyer->lawyerType->name }}</h5>
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
											<li>
												<a href="{{ route('appointments') }}">
													<i class="fas fa-calendar-check"></i>
													<span>Appointments</span>
												</a>
											</li>
											<li class="active">
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
												<a href="{{ route('profile-settings') }}">
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

							<div class="row row-grid">
                                @foreach($appointments as $appointment)
                                    <div class="col-md-6 col-lg-4 col-xl-3">
                                        <div class="card widget-profile pat-widget-profile">
                                            <div class="card-body">
                                                <div class="pro-widget-content">
                                                    <div class="profile-info-widget">
                                                        <a href="{{ route('client-profile.show', ['user' => $appointment->user]) }}" class="booking-doc-img">
                                                            @if(isset($appointment->user->image))
                                                                <img src="{{ asset('storage/'.$appointment->user->image) }}" alt="User Image">
                                                            @endif
                                                        </a>
                                                        <div class="profile-det-info">
                                                            <h3><a href="{{ route('client-profile.show', ['user' => $appointment->user]) }}">{{ $appointment->user->name }}</a></h3>

                                                            <div class="patient-details">
                                                                <h5><b>Client ID :</b> C00{{ $appointment->user->id }}</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="patient-info">
                                                    <ul>
                                                        <li>Phone <span>{{ $appointment->user->phone }}</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

							</div>

						</div>
					</div>

				</div>

			</div>
			<!-- /Page Content -->
@endsection
