
<?php $__env->startSection('content'); ?>
<!-- Page Wrapper -->
<div class="page-wrapper">
                <div class="content container-fluid">

					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col">
								<h3 class="page-title">Profile</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index">Dashboard</a></li>
									<li class="breadcrumb-item active">Profile</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->

					<div class="row">
						<div class="col-md-12">
							<div class="profile-header">
                                <?php if(\Session::has('success')): ?>
                                    <div class="alert alert-success border-0" role="alert">
                                        <strong>Success!</strong> <?php echo e(\Session::get('success')); ?>

                                    </div>
                                <?php endif; ?>
								<div class="row align-items-center">
									<div class="col-auto profile-image">
										<a href="#">
                                            <?php if(isset(Auth::user()->image)): ?>
                                                <img class="rounded-circle" alt="User Image" src="<?php echo e(asset('storage/'.Auth::user()->image)); ?>">
                                            <?php else: ?>
											    <img class="rounded-circle" alt="User Image" src="../assets_admin/img/profiles/avatar-01.jpg">
                                            <?php endif; ?>
                                        </a>
									</div>
									<div class="col ml-md-n2 profile-user-info">
										<h4 class="user-name mb-0"><?php echo e(Auth::user()->name); ?></h4>
										<h6 class="text-muted"><?php echo e(Auth::user()->email); ?></h6>
									</div>
									<div class="col-auto profile-btn">

										<a data-toggle="modal" href="#edit_personal_details" class="btn btn-primary">
											Edit
										</a>
									</div>
								</div>
							</div>
							<div class="profile-menu">
								<ul class="nav nav-tabs nav-tabs-solid">
									<li class="nav-item">
										<a class="nav-link active" data-toggle="tab" href="#per_details_tab">About</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" data-toggle="tab" href="#password_tab">Password</a>
									</li>
								</ul>
							</div>
							<div class="tab-content profile-tab-cont">

								<!-- Personal Details Tab -->
								<div class="tab-pane fade show active" id="per_details_tab">

									<!-- Personal Details -->
									<div class="row">
										<div class="col-lg-12">
											<div class="card">
												<div class="card-body">
													<h5 class="card-title d-flex justify-content-between">
														<span>Personal Details</span>
														<a class="edit-link" data-toggle="modal" href="#edit_personal_details"><i class="fa fa-edit mr-1"></i>Edit</a>
													</h5>
													<div class="row">
														<p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">Name</p>
														<p class="col-sm-10"><?php echo e(Auth::user()->name); ?></p>
													</div>
													<div class="row">
														<p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">Email ID</p>
														<p class="col-sm-10"><?php echo e(Auth::user()->email); ?></p>
													</div>
													<div class="row">
														<p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">Phone</p>
														<p class="col-sm-10"><?php echo e(Auth::user()->phone); ?></p>
													</div>
												</div>
											</div>

											<!-- Edit Details Modal -->
											<div class="modal fade" id="edit_personal_details" aria-hidden="true" role="dialog">
												<div class="modal-dialog modal-dialog-centered" role="document" >
													<div class="modal-content">
														<div class="modal-header">
															<h5 class="modal-title">Personal Details</h5>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>
														<div class="modal-body">
															<form method="post" action="<?php echo e(route('profile.update', ['profile' => Auth::user()])); ?>" enctype="multipart/form-data">
																<?php echo method_field('PATCH'); ?>
                                                                <?php echo csrf_field(); ?>
                                                                <div class="row form-row">
																	<div class="col-12 col-sm-6">
																		<div class="form-group">
																			<label>Name</label>
																			<input type="text" name="name" class="form-control" value="<?php echo e(Auth::user()->name); ?>">
																		</div>
																	</div>
																	<div class="col-12 col-sm-6">
																		<div class="form-group">
																			<label>Email ID</label>
																			<input type="email" name="email" class="form-control" readonly value="<?php echo e(Auth::user()->email); ?>">
																		</div>
																	</div>
																	<div class="col-12 col-sm-6">
																		<div class="form-group">
																			<label>Phone</label>
																			<input type="text" name="phone" value="<?php echo e(Auth::user()->phone); ?>" class="form-control">
																		</div>
																	</div>
																	<div class="col-12">
                                                                        <h5 class="form-title"><span>Profile Image</span></h5>
																	</div>
																	<div class="col-12">
                                                                        <img id="output" width="200" class="justify-content-center" alt="" src="<?php echo e(asset('storage/'.Auth::user()->image)); ?>">
																		<div class="form-group">
																		<label for="file" style="cursor: pointer;" class="text-center">Upload Image</label>
																			<input type="file" name="image" id="file" onchange="loadFile(event)" style="display: none;" class="form-control">
																		</div>
																	</div>

																</div>
																<button type="submit" class="btn btn-primary btn-block">Save Changes</button>
															</form>
														</div>
													</div>
												</div>
											</div>
											<!-- /Edit Details Modal -->

										</div>


									</div>
									<!-- /Personal Details -->

								</div>
								<!-- /Personal Details Tab -->

								<!-- Change Password Tab -->
								<div id="password_tab" class="tab-pane fade">

									<div class="card">
										<div class="card-body">
											<h5 class="card-title">Change Password</h5>
											<div class="row">
												<div class="col-md-10 col-lg-6">
													<form>
														<div class="form-group">
															<label>Old Password</label>
															<input type="password" class="form-control">
														</div>
														<div class="form-group">
															<label>New Password</label>
															<input type="password" class="form-control">
														</div>
														<div class="form-group">
															<label>Confirm Password</label>
															<input type="password" class="form-control">
														</div>
														<button class="btn btn-primary" type="submit">Save Changes</button>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /Change Password Tab -->

							</div>
						</div>
					</div>

				</div>
			</div>
			<!-- /Page Wrapper -->

        </div>
		<!-- /Main Wrapper -->
<script>
    var loadFile = function(event) {
        var image = document.getElementById('output');
        image.src = URL.createObjectURL(event.target.files[0]);
    };
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.mainlayout_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Workspace\appointment-scheduling-system\resources\views/admin/index.blade.php ENDPATH**/ ?>
