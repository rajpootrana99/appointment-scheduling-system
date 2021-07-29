<?php $page="change-password";?>
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
									<li class="breadcrumb-item active" aria-current="page">Change Password</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">Change Password</h2>
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
											<li>
												<a href="{{ route('profile-settings') }}">
													<i class="fas fa-user-cog"></i>
													<span>Profile Settings</span>
												</a>
											</li>
											<li class="active">
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
							<!-- /Profile Sidebar -->

						</div>

						<div class="col-md-7 col-lg-8 col-xl-9">
							<div class="card">
								<div class="card-body">
                                    @if(\Session::has('success'))
                                        <div class="alert alert-success border-0" role="alert">
                                            <strong>Success!</strong> {{ \Session::get('success') }}
                                        </div>
                                    @endif
                                    @if(\Session::has('error'))
                                        <div class="alert alert-danger border-0" role="alert">
                                            <strong>Error!</strong> {{ \Session::get('error') }}
                                        </div>
                                    @endif
									<div class="row">
										<div class="col-md-12 col-lg-6">

											<!-- Change Password Form -->
											<form method="post" action="{{ route('change-user-password.updatePassword') }}">
                                                @csrf
												<div class="form-group">
													<label>Old Password</label>
													<input type="password"  name="old_password" class="form-control">
                                                    <div style="color: #ff0000; font-size: small;" class="mt-2">{{ $errors->first('old_password') }}</div>
												</div>
												<div class="form-group">
													<label>New Password</label>
													<input type="password" name="new_password" class="form-control">
                                                    <div style="color: #ff0000; font-size: small;" class="mt-2">{{ $errors->first('new_password') }}</div>
												</div>
												<div class="form-group">
													<label>Confirm Password</label>
													<input type="password" name="password_confirmation" class="form-control">
                                                    <div style="color: #ff0000; font-size: small;" class="mt-2">{{ $errors->first('password_confirmation') }}</div>
												</div>
												<div class="submit-section">
													<button type="submit" class="btn btn-primary submit-btn">Save Changes</button>
												</div>
											</form>
											<!-- /Change Password Form -->

										</div>
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
