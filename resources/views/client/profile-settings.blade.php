<?php $page="profile-settings";?>
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
									<li class="breadcrumb-item active" aria-current="page">Profile Settings</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">Profile Settings</h2>
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
											<li>
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
											<li class="active">
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
						<!-- /Profile Sidebar -->

						<div class="col-md-7 col-lg-8 col-xl-9">
							<div class="card">
								<div class="card-body">

									<!-- Profile Settings Form -->
									<form method="post" action="{{ route('profile-settings.store') }}" enctype="multipart/form-data">
                                        @csrf
										<div class="row form-row">
											<div class="col-12 col-md-12">
												<div class="form-group">
													<div class="change-avatar">
														<div class="profile-img">
                                                            @if(isset(Auth::user()->image))
                                                                <img src="{{ asset('storage/'.Auth::user()->image) }}" alt="User Image">
                                                            @else
                                                                <img src="assets/img/patients/patient.jpg" alt="User Image">
                                                            @endif
														</div>
														<div class="upload-img">
															<div class="change-photo-btn">
																<span><i class="fa fa-upload"></i> Upload Photo</span>
																<input type="file" name="image" class="upload">
															</div>
															<small class="form-text text-muted">Allowed JPG, GIF or PNG. Max size of 2MB</small>
														</div>
													</div>
												</div>
											</div>
											<div class="col-12 col-md-12">
												<div class="form-group">
													<label>Name</label>
													<input type="text" class="form-control" name="name" value="{{ Auth::user()->name }}">
                                                    <div style="color: #ff0000; font-size: small;" class="mt-2">{{ $errors->first('name') }}</div>
												</div>
											</div>
											<div class="col-12 col-md-6">
												<div class="form-group">
													<label>Email ID</label>
													<input type="email" class="form-control" name="email" value="{{ Auth::user()->email }}" readonly>
                                                    <div style="color: #ff0000; font-size: small;" class="mt-2">{{ $errors->first('email') }}</div>
												</div>
											</div>
											<div class="col-12 col-md-6">
												<div class="form-group">
													<label>Mobile</label>
													<input type="text" value="{{ Auth::user()->phone }}" name="phone" class="form-control">
                                                    <div style="color: #ff0000; font-size: small;" class="mt-2">{{ $errors->first('phone') }}</div>
												</div>
											</div>
										</div>
										<div class="submit-section">
											<button type="submit" class="btn btn-primary submit-btn">Save Changes</button>
										</div>
									</form>
									<!-- /Profile Settings Form -->

								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
            <!-- /Page Content -->
</div>
@endsection
