<?php $page="schedule-timings";?>

<?php $__env->startSection('content'); ?>

			<!-- Breadcrumb -->
			<div class="breadcrumb-bar">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-md-12 col-12">
							<nav aria-label="breadcrumb" class="page-breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Schedule Timings</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">Schedule Timings</h2>
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
                                            <img src="<?php echo e(asset('storage/' .$lawyer->user->image)); ?>" alt="User Image">
                                        </a>
                                        <div class="profile-det-info">
                                            <h3><?php echo e($lawyer->user->name); ?></h3>

                                            <div class="patient-details">
                                                <h5 class="mb-0">
                                                    <?php echo e($lawyer->education); ?> - <?php echo e($lawyer->lawyerType->name); ?></h5>
                                            </div>
                                        </div>
									</div>
								</div>
								<div class="dashboard-widget">
									<nav class="dashboard-menu">
										<ul>
											<li>
												<a href="<?php echo e(route('lawyer')); ?>">
													<i class="fas fa-columns"></i>
													<span>Dashboard</span>
												</a>
											</li>
											<li>
												<a href="<?php echo e(route('appointments')); ?>">
													<i class="fas fa-calendar-check"></i>
													<span>Appointments</span>
												</a>
											</li>
											<li>
												<a href="<?php echo e(route('my-clients')); ?>">
													<i class="fas fa-user-injured"></i>
													<span>My Clients</span>
												</a>
											</li>
											<li class="active">
												<a href="<?php echo e(route('schedule-timings')); ?>">
													<i class="fas fa-hourglass-start"></i>
													<span>Schedule Timings</span>
												</a>
											</li>

											<li>
												<a href="<?php echo e(route('reviews')); ?>">
													<i class="fas fa-star"></i>
													<span>Reviews</span>
												</a>
											</li>
											<li>
												<a href="<?php echo e(route('profile-settings')); ?>">
													<i class="fas fa-user-cog"></i>
													<span>Profile Settings</span>
												</a>
											</li>
											<li>
												<a href="<?php echo e(route('change-lawyer-password')); ?>">
													<i class="fas fa-lock"></i>
													<span>Change Password</span>
												</a>
											</li>
											<li>
                                                <form action="<?php echo e(route('logout')); ?>"  style="display: none;" method="post" id="lgut">
                                                    <?php echo csrf_field(); ?>
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

							<div class="row">
								<div class="col-sm-12">
									<div class="card">
										<div class="card-body">
											<h4 class="card-title">Schedule Timings</h4>
											<div class="profile-box">
												<div class="row">
													<div class="col-lg-4">
														<div class="form-group">
															<label>Timing Slot Duration</label>
															<select class="select form-control">
																<option>-</option>
																<option>15 mins</option>
																<option selected="selected">30 mins</option>
																<option>45 mins</option>
																<option>1 Hour</option>
															</select>
														</div>
													</div>

												</div>
												<div class="row">
													<div class="col-md-12">
														<div class="card schedule-widget mb-0">

															<!-- Schedule Header -->
															<div class="schedule-header">

																<!-- Schedule Nav -->
																<div class="schedule-nav">
																	<ul class="nav nav-tabs nav-justified">
																		<li class="nav-item">
																			<a class="nav-link" data-toggle="tab" href="#slot_sunday">Sunday</a>
																		</li>
																		<li class="nav-item">
																			<a class="nav-link active" data-toggle="tab" href="#slot_monday">Monday</a>
																		</li>
																		<li class="nav-item">
																			<a class="nav-link" data-toggle="tab" href="#slot_tuesday">Tuesday</a>
																		</li>
																		<li class="nav-item">
																			<a class="nav-link" data-toggle="tab" href="#slot_wednesday">Wednesday</a>
																		</li>
																		<li class="nav-item">
																			<a class="nav-link" data-toggle="tab" href="#slot_thursday">Thursday</a>
																		</li>
																		<li class="nav-item">
																			<a class="nav-link" data-toggle="tab" href="#slot_friday">Friday</a>
																		</li>
																		<li class="nav-item">
																			<a class="nav-link" data-toggle="tab" href="#slot_saturday">Saturday</a>
																		</li>
																	</ul>
																</div>
																<!-- /Schedule Nav -->

															</div>
															<!-- /Schedule Header -->

															<!-- Schedule Content -->
															<div class="tab-content schedule-cont">

																<!-- Sunday Slot -->
																<div id="slot_sunday" class="tab-pane fade">
																	<h4 class="card-title d-flex justify-content-between">
																		<span>Time Slots</span>
																		<a class="edit-link" data-toggle="modal" href="#add_time_slot"><i class="fa fa-plus-circle"></i> Add Slot</a>
																	</h4>
																	<p class="text-muted mb-0">Not Available</p>
																</div>
																<!-- /Sunday Slot -->

																<!-- Monday Slot -->
																<div id="slot_monday" class="tab-pane fade show active">
																	<h4 class="card-title d-flex justify-content-between">
																		<span>Time Slots</span>
																		<a class="edit-link" data-toggle="modal" href="#edit_time_slot"><i class="fa fa-edit mr-1"></i>Edit</a>
																	</h4>

																	<!-- Slot List -->
																	<div class="doc-times">
																		<div class="doc-slot-list">
																			8:00 pm - 11:30 pm
																			<a href="javascript:void(0)" class="delete_schedule">
																				<i class="fa fa-times"></i>
																			</a>
																		</div>
																		<div class="doc-slot-list">
																			11:30 pm - 1:30 pm
																			<a href="javascript:void(0)" class="delete_schedule">
																				<i class="fa fa-times"></i>
																			</a>
																		</div>
																		<div class="doc-slot-list">
																			3:00 pm - 5:00 pm
																			<a href="javascript:void(0)" class="delete_schedule">
																				<i class="fa fa-times"></i>
																			</a>
																		</div>
																		<div class="doc-slot-list">
																			6:00 pm - 11:00 pm
																			<a href="javascript:void(0)" class="delete_schedule">
																				<i class="fa fa-times"></i>
																			</a>
																		</div>
																	</div>
																	<!-- /Slot List -->

																</div>
																<!-- /Monday Slot -->

																<!-- Tuesday Slot -->
																<div id="slot_tuesday" class="tab-pane fade">
																	<h4 class="card-title d-flex justify-content-between">
																		<span>Time Slots</span>
																		<a class="edit-link" data-toggle="modal" href="#add_time_slot"><i class="fa fa-plus-circle"></i> Add Slot</a>
																	</h4>
																	<p class="text-muted mb-0">Not Available</p>
																</div>
																<!-- /Tuesday Slot -->

																<!-- Wednesday Slot -->
																<div id="slot_wednesday" class="tab-pane fade">
																	<h4 class="card-title d-flex justify-content-between">
																		<span>Time Slots</span>
																		<a class="edit-link" data-toggle="modal" href="#add_time_slot"><i class="fa fa-plus-circle"></i> Add Slot</a>
																	</h4>
																	<p class="text-muted mb-0">Not Available</p>
																</div>
																<!-- /Wednesday Slot -->

																<!-- Thursday Slot -->
																<div id="slot_thursday" class="tab-pane fade">
																	<h4 class="card-title d-flex justify-content-between">
																		<span>Time Slots</span>
																		<a class="edit-link" data-toggle="modal" href="#add_time_slot"><i class="fa fa-plus-circle"></i> Add Slot</a>
																	</h4>
																	<p class="text-muted mb-0">Not Available</p>
																</div>
																<!-- /Thursday Slot -->

																<!-- Friday Slot -->
																<div id="slot_friday" class="tab-pane fade">
																	<h4 class="card-title d-flex justify-content-between">
																		<span>Time Slots</span>
																		<a class="edit-link" data-toggle="modal" href="#add_time_slot"><i class="fa fa-plus-circle"></i> Add Slot</a>
																	</h4>
																	<p class="text-muted mb-0">Not Available</p>
																</div>
																<!-- /Friday Slot -->

																<!-- Saturday Slot -->
																<div id="slot_saturday" class="tab-pane fade">
																	<h4 class="card-title d-flex justify-content-between">
																		<span>Time Slots</span>
																		<a class="edit-link" data-toggle="modal" href="#add_time_slot"><i class="fa fa-plus-circle"></i> Add Slot</a>
																	</h4>
																	<p class="text-muted mb-0">Not Available</p>
																</div>
																<!-- /Saturday Slot -->

															</div>
															<!-- /Schedule Content -->

														</div>
													</div>
												</div>
											</div>
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
<!-- Add Time Slot Modal -->
<div class="modal fade custom-modal" id="add_time_slot">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Add Time Slots</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form>
							<div class="hours-info">
								<div class="row form-row hours-cont">
									<div class="col-12 col-md-10">
										<div class="row form-row">
											<div class="col-12 col-md-6">
												<div class="form-group">
													<label>Start Time</label>
													<select class="form-control">
														<option>-</option>
														<option>12.00 am</option>
														<option>12.30 am</option>
														<option>1.00 am</option>
														<option>1.30 am</option>
													</select>
												</div>
											</div>
											<div class="col-12 col-md-6">
												<div class="form-group">
													<label>End Time</label>
													<select class="form-control">
														<option>-</option>
														<option>12.00 am</option>
														<option>12.30 am</option>
														<option>1.00 am</option>
														<option>1.30 am</option>
													</select>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="add-more mb-3">
								<a href="javascript:void(0);" class="add-hours"><i class="fa fa-plus-circle"></i> Add More</a>
							</div>
							<div class="submit-section text-center">
								<button type="submit" class="btn btn-primary submit-btn">Save Changes</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- /Add Time Slot Modal -->

		<!-- Edit Time Slot Modal -->
		<div class="modal fade custom-modal" id="edit_time_slot">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Edit Time Slots</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form>
							<div class="hours-info">
								<div class="row form-row hours-cont">
									<div class="col-12 col-md-10">
										<div class="row form-row">
											<div class="col-12 col-md-6">
												<div class="form-group">
													<label>Start Time</label>
													<select class="form-control">
														<option>-</option>
														<option selected>12.00 am</option>
														<option>12.30 am</option>
														<option>1.00 am</option>
														<option>1.30 am</option>
													</select>
												</div>
											</div>
											<div class="col-12 col-md-6">
												<div class="form-group">
													<label>End Time</label>
													<select class="form-control">
														<option>-</option>
														<option>12.00 am</option>
														<option selected>12.30 am</option>
														<option>1.00 am</option>
														<option>1.30 am</option>
													</select>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="row form-row hours-cont">
									<div class="col-12 col-md-10">
										<div class="row form-row">
											<div class="col-12 col-md-6">
												<div class="form-group">
													<label>Start Time</label>
													<select class="form-control">
														<option>-</option>
														<option>12.00 am</option>
														<option selected>12.30 am</option>
														<option>1.00 am</option>
														<option>1.30 am</option>
													</select>
												</div>
											</div>
											<div class="col-12 col-md-6">
												<div class="form-group">
													<label>End Time</label>
													<select class="form-control">
														<option>-</option>
														<option>12.00 am</option>
														<option>12.30 am</option>
														<option selected>1.00 am</option>
														<option>1.30 am</option>
													</select>
												</div>
											</div>
										</div>
									</div>
									<div class="col-12 col-md-2"><label class="d-md-block d-sm-none d-none">&nbsp;</label><a href="#" class="btn btn-danger trash"><i class="far fa-trash-alt"></i></a></div>
								</div>

								<div class="row form-row hours-cont">
									<div class="col-12 col-md-10">
										<div class="row form-row">
											<div class="col-12 col-md-6">
												<div class="form-group">
													<label>Start Time</label>
													<select class="form-control">
														<option>-</option>
														<option>12.00 am</option>
														<option>12.30 am</option>
														<option selected>1.00 am</option>
														<option>1.30 am</option>
													</select>
												</div>
											</div>
											<div class="col-12 col-md-6">
												<div class="form-group">
													<label>End Time</label>
													<select class="form-control">
														<option>-</option>
														<option>12.00 am</option>
														<option>12.30 am</option>
														<option>1.00 am</option>
														<option selected>1.30 am</option>
													</select>
												</div>
											</div>
										</div>
									</div>
									<div class="col-12 col-md-2"><label class="d-md-block d-sm-none d-none">&nbsp;</label><a href="#" class="btn btn-danger trash"><i class="far fa-trash-alt"></i></a></div>
								</div>

							</div>

							<div class="add-more mb-3">
								<a href="javascript:void(0);" class="add-hours"><i class="fa fa-plus-circle"></i> Add More</a>
							</div>
							<div class="submit-section text-center">
								<button type="submit" class="btn btn-primary submit-btn">Save Changes</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- /Edit Time Slot Modal -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Workspace\appointment-scheduling-system\resources\views/lawyer/schedule-timings.blade.php ENDPATH**/ ?>