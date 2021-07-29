<?php $page="review";?>
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
									<li class="breadcrumb-item active" aria-current="page">Reviews</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">Reviews</h2>
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
                                            <li>
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
                                            <li class="active">
                                                <a href="{{ route('reviews') }}">
                                                    <i class="fas fa-star"></i>
                                                    <span>Reviews</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('profile-setting')}}">
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
							<div class="doc-review review-listing">

								<!-- Review Listing -->
								<ul class="comments-list">

									<!-- Comment List -->
                                    @foreach($reviews as $review)
                                        <li>
                                            <div class="comment">
                                                @if(isset($review->user->image))
                                                    <img class="avatar rounded-circle" alt="User Image" src="{{ asset('storage/'.$review->user->image) }}">
                                                @endif
                                                <div class="comment-body">
                                                    <div class="meta-data">
                                                        <span class="comment-author">{{ $review->user->name }}</span>
                                                        <span class="comment-date">Reviewed 2 Days ago</span>
                                                        <div class="review-count rating">
                                                            <?php $rating = $review->rating ; ?>
                                                            <?php $remaining_rating = 5-$review->rating ; ?>
                                                            @for ($i = 1; $i <= $rating ; $i++)
                                                                <i class="fas fa-star filled"></i>
                                                            @endfor
                                                            @for ($i = 1; $i <= $remaining_rating ; $i++)
                                                                <i class="fas fa-star"></i>
                                                            @endfor
                                                        </div>
                                                    </div>
                                                    <p class="recommended"><i class="far fa-thumbs-up"></i> {{ $review->title }}</p>
                                                    <p class="comment-content">
                                                        {{ $review->review }}
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
									<!-- /Comment List -->

								</ul>
								<!-- /Comment List -->

							</div>
						</div>
					</div>
				</div>

			</div>
			<!-- /Page Content -->
</div>
@endsection
