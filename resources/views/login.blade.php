<?php $page="login";?>
@extends('layout.mainlayout')
@section('content')
	<!-- Page Content -->
    <div class="content account-page" style="padding: 50px 0;">
				<div class="container-fluid">

					<div class="row">
						<div class="col-md-8 offset-md-2">

							<!-- Login Tab Content -->
							<div class="account-content">
								<div class="row align-items-center justify-content-center">
									<div class="col-md-7 col-lg-6 login-left">
										<img src="assets/img/login-banner.png" class="img-fluid" alt="Doccure Login">
									</div>
									<div class="col-md-12 col-lg-6 login-right">
										<div class="login-header">
											<h3>Login</h3>
										</div>
                                        <div style="color: #ff0000; font-size: small;">{{ $errors->first() }}</div>
										<form method="post" action="{{ route('login') }}">
                                            @csrf
											<div class="form-group form-focus">
												<input id="email" name="email" type="email" value="{{ old('email') }}" class="form-control floating">
												<label class="focus-label">Email</label>
											</div>
											<div class="form-group form-focus">
												<input id="password" name="password" type="password" class="form-control floating">
												<label class="focus-label">Password</label>
											</div>
											<div class="text-right">
                                                @if (Route::has('password.request'))
												<a class="forgot-link" href="{{ route('password.request') }}">Forgot Password ?</a>
                                                @endif
                                            </div>
											<button class="btn btn-primary btn-block btn-lg login-btn" type="submit">Login</button>
											<div class="login-or">
												<span class="or-line"></span>
												<span class="span-or">or</span>
											</div>
											<div class="row form-row social-login">
												<div class="col-6">
													<a href="#" class="btn btn-facebook btn-block"><i class="fab fa-facebook-f mr-1"></i> Login</a>
												</div>
												<div class="col-6">
													<a href="#" class="btn btn-google btn-block"><i class="fab fa-google mr-1"></i> Login</a>
												</div>
											</div>
											<div class="text-center dont-have">Don’t have an account? <a href="{{ route('register') }}">Register</a></div>
										</form>
									</div>
								</div>
							</div>
							<!-- /Login Tab Content -->

						</div>
					</div>

				</div>

			</div>
			<!-- /Page Content -->
            </div>
@endsection
