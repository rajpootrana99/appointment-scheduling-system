<?php error_reporting(0);?>
<!-- Loader -->
@if(Route::is(['map-grid','map-list']))
<div id="loader">
		<div class="loader">
			<span></span>
			<span></span>
		</div>
	</div>
	@endif
	<!-- /Loader  -->
<div class="main-wrapper">
<!-- Header -->
<header class="header">
				<nav class="navbar navbar-expand-lg header-nav">
					<div class="navbar-header">
						<a id="mobile_btn" href="javascript:void(0);">
							<span class="bar-icon">
								<span></span>
								<span></span>
								<span></span>
							</span>
						</a>
						<a href="{{ route('index') }}" class="navbar-brand logo">
                            @if(isset($setting['logo']))
							    <img src="{{ asset('storage/'.$setting['logo'])}}" alt="Logo" width="80" height="50">
                            @endif
						</a>
					</div>
					<div class="main-menu-wrapper">
						<div class="menu-header">
							<a href="{{ route('index') }}" class="menu-logo">
                                @if(isset($setting['logo']))
								    <img src="{{ asset('storage/'.$setting['logo'])}}" alt="Logo" width="80" height="50" class="img-fluid">
                                @endif
                            </a>
							<a id="menu_close" class="menu-close" href="javascript:void(0);">
								<i class="fas fa-times"></i>
							</a>
						</div>
						<ul class="main-nav">
							<li class="{{ Request::is('index') ? 'active' : '' }}">
								<a href="{{ route('index') }}">Home</a>
							</li>
                            @if(Auth::check())
                                @if(Auth::user()->hasRole(Config::get('constants.roles.Lawyer')))
                                    <li class="has-submenu <?php if($page=="review" || $page=="register" || $page=="doctor-dashboard" || $page=="appointments" || $page=="schedule-timings" || $page=="my-patients" || $page=="patient-profile" || $page=="chat-doctor" || $page=="invoices" || $page=="doctor-profile-settings") { echo 'active'; } ?>">
                                    <a href="">Lawyer <i class="fas fa-chevron-down"></i></a>
                                    <ul class="submenu">
                                        <li class="<?php if($page=="index") { echo 'active'; } ?>"><a href="{{ route('lawyer') }}">Lawyer Dashboard</a></li>
                                        <li class="<?php if($page=="appointments") { echo 'active'; } ?>"><a href="{{ route('appointments') }}">Appointments</a></li>
                                        <li class="<?php if($page=="schedule-timings") { echo 'active'; } ?>"><a href="{{ route('schedule-timings') }}">Schedule Timing</a></li>
                                        <li class="<?php if($page=="my-patients") { echo 'active'; } ?>"><a href="{{ route('my-clients') }}">Patients List</a></li>
                                        <li class="<?php if($page=="patient-profile") { echo 'active'; } ?>"><a href="{{ route('client-profile') }}">Clients Profile</a></li>
                                        <li class="<?php if($page=="doctor-profile-settings") { echo 'active'; } ?>"><a href="{{ route('profile-settings') }}">Profile Settings</a></li>
                                        <li class="<?php if($page=="review") { echo 'active'; } ?>"><a href="{{ route('reviews') }}">Reviews</a></li>
                                    </ul>
                                </li>
                                @endif
                            @endif
                            @if(Auth::check())
                                @if(Auth::user()->hasRole(Config::get('constants.roles.User')))
                                    <li class="has-submenu <?php if($page=="map-grid" || $page=="map-list" || $page=="search1" || $page=="doctor-profile" || $page=="booking" || $page=="checkout" || $page=="booking-success" || $page=="patient-dashboard" || $page=="favourites" || $page=="chat" || $page=="profile-settings" || $page=="change-password") { echo 'active'; } ?>">
								<a href="">User <i class="fas fa-chevron-down"></i></a>
								<ul class="submenu">
									<li class="has-submenu <?php if($page=="map-grid" || $page=="map-list") { echo 'active'; } ?>">
										<a href="#">Lawyer</a>
										<ul class="submenu">
											<li class="<?php if($page=="map-grid") { echo 'active'; } ?>"><a href="map-grid">Map Grid</a></li>
											<li class="<?php if($page=="map-list") { echo 'active'; } ?>"><a href="map-list">Map List</a></li>
										</ul>
									</li>
									<li class="<?php if($page=="search1") { echo 'active'; } ?>"><a href="search">Search Lawyer</a></li>
									<li class="<?php if($page=="doctor-profile") { echo 'active'; } ?>"><a href="lawyer-profile">Lawyer Profile</a></li>
									<li class="<?php if($page=="booking") { echo 'active'; } ?>"><a href="booking">Booking</a></li>
									<li class="<?php if($page=="checkout") { echo 'active'; } ?>"><a href="checkout">Checkout</a></li>
									<li class="<?php if($page=="booking-success") { echo 'active'; } ?>"><a href="booking-success">Booking Success</a></li>
									<li class="<?php if($page=="patient-dashboard") { echo 'active'; } ?>"><a href="{{ route('user') }}">Dashboard</a></li>
									<li class="<?php if($page=="favourites") { echo 'active'; } ?>"><a href="{{ route('favourites') }}">Favourites</a></li>
									<li class="<?php if($page=="profile-settings") { echo 'active'; } ?>"><a href="{{ route('profile-settings') }}">Profile Settings</a></li>
									<li class="<?php if($page=="change-password") { echo 'active'; } ?>"><a href="{{ route('change-user-password') }}">Change Password</a></li>
								</ul>
							</li>
                                @endif
                            @endif
                        </li>
						</ul>
					</div>
					<ul class="nav header-navbar-rht">
                        @guest
						<li class="nav-item contact-item">
							<div class="header-contact-img">
								<i class="far fa-hospital"></i>
							</div>
							<div class="header-contact-detail">
								<p class="contact-header">Contact</p>
								<p class="contact-info-header"> +92 313 5263526 </p>
							</div>
							<li class="nav-item">
							<a class="nav-link header-login" href="{{ route('login') }}">login / Signup </a>
							</li>
						</li>
                        @endguest
                        @if(Auth::check())
                            @if(Auth::user()->hasRole(Config::get('constants.roles.User')))
                            <li class="nav-item dropdown has-arrow logged-item">
                                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                    <span class="user-img">
                                        @if(isset(Auth::user()->image))
                                        <img class="rounded-circle" src="{{ asset('storage/'.Auth::user()->image) }}" width="31" alt="Ryan Taylor">
                                        @else
                                        {{ Auth::user()->name }}
                                        @endif
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <div class="user-header">
                                        <div class="avatar avatar-sm">
                                            @if(isset(Auth::user()->image))
                                            <img src="{{ asset('storage/'.Auth::user()->image) }}" alt="User Image" class="avatar-img rounded-circle">
                                            @endif
                                        </div>
                                        <div class="user-text">
                                            <h6>{{ \Illuminate\Support\Facades\Auth::user()->name }}</h6>
                                        </div>
                                    </div>
                                    <a class="dropdown-item" href="patient-dashboard">Dashboard</a>
                                    <a class="dropdown-item" href="profile-settings">Profile Settings</a>
                                    <form action="{{ route('logout') }}"  style="display: none;" method="post" id="lgut">
                                        @csrf
                                        <input type="submit" id="logoutbtn">
                                    </form>
                                    <a class="dropdown-item" type="button" onclick="$('#lgut').submit()">Logout</a>
                                </div>
                            </li>
                            @endif
                        @endif
                        @if(Auth::check())
                            @if(Auth::user()->hasRole(Config::get('constants.roles.Lawyer')))
                            <!-- User Menu -->
                            <li class="nav-item dropdown has-arrow logged-item">
                                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                    <span class="user-img">
                                        <img class="rounded-circle" src="{{ asset('storage/' .Auth::user()->image) }}" width="31" alt="Darren Elder">
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <div class="user-header">
                                        <div class="avatar avatar-sm">
                                            <img src="{{ asset('storage/' .Auth::user()->image) }}" alt="User Image" class="avatar-img rounded-circle">
                                        </div>
                                        <div class="user-text">
                                            <h6>{{ Auth::user()->name }}</h6>
                                        </div>
                                    </div>
                                    <a class="dropdown-item" href="{{ route('lawyer') }}">Dashboard</a>
                                    <a class="dropdown-item" href="{{ route('profile-settings') }}">Profile Settings</a>
                                    <form action="{{ route('logout') }}"  style="display: none;" method="post" id="lgut">
                                        @csrf
                                        <input type="submit" id="logoutbtn">
                                    </form>
                                    <a class="dropdown-item" type="button" onclick="$('#lgut').submit()">Logout</a>
                                </div>
                            </li>
                            <!-- /User Menu -->
                            @endif
                        @endif

					</ul>
				</nav>
			</header>
			<!-- /Header -->
