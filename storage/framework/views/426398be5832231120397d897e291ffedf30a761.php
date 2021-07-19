<?php $page="register1";?>

<?php $__env->startSection('content'); ?>
<!-- Page Content -->
<div class="content account-page" style="padding: 50px 0;">
				<div class="container-fluid">

					<div class="row">
						<div class="col-md-8 offset-md-2">

							<!-- Register Content -->
							<div class="account-content">
								<div class="row align-items-center justify-content-center">
									<div class="col-md-7 col-lg-6 login-left">
										<img src="assets/img/login-banner.png" class="img-fluid" alt="Doccure Register">
									</div>
									<div class="col-md-12 col-lg-6 login-right">
										<div class="login-header">
											<h3>Client Register </h3>
										</div>

										<!-- Register Form -->
										<form method="post" action="<?php echo e(route('register')); ?>">
                                            <?php echo csrf_field(); ?>
											<div class="form-group form-focus">
												<input id="name" name="name" type="text" value="<?php echo e(old('name')); ?>" class="form-control floating">
												<label class="focus-label">Name</label>
                                                <div style="color: #ff0000; font-size: x-small;"><?php echo e($errors->first('name')); ?></div>
											</div>
											<div class="form-group form-focus">
												<input id="email" name="email" type="text" value="<?php echo e(old('email')); ?>" class="form-control floating">
												<label class="focus-label">Email</label>
                                                <div style="color: #ff0000; font-size: x-small;"><?php echo e($errors->first('email')); ?></div>
											</div>
											<div class="form-group form-focus">
												<input id="password" name="password" type="password" class="form-control floating">
												<label class="focus-label">Create Password</label>
                                                <div style="color: #ff0000; font-size: x-small;"><?php echo e($errors->first('password')); ?></div>
											</div>
                                            <div class="form-group form-focus">
                                                <input id="password_confirmation" name="password_confirmation" type="password" class="form-control floating">
                                                <label class="focus-label">Create Password</label>
                                            </div>
											<div class="text-right">
												<a class="forgot-link" href="<?php echo e(route('login')); ?>">Already have an account?</a>
											</div>
											<button class="btn btn-primary btn-block btn-lg login-btn" type="submit">Signup</button>
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
										</form>
										<!-- /Register Form -->

									</div>
								</div>
							</div>
							<!-- /Register Content -->

						</div>
					</div>

				</div>

			</div>
			<!-- /Page Content -->
            </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Workspace\appointment-scheduling-system\resources\views/register.blade.php ENDPATH**/ ?>