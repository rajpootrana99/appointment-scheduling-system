<?php $page="login";?>

<?php $__env->startSection('content'); ?>
	<!-- Page Content -->
    <div class="content account-page" style="padding: 50px 0;">
				<div class="container-fluid">

					<div class="row">
						<div class="col-md-8 offset-md-2">

							<!-- Login Tab Content -->
							<div class="account-content">
								<div class="row align-items-center justify-content-center">
									<div class="col-md-7 col-lg-6 login-left">

									</div>
									<div class="col-md-12 col-lg-6 login-right">
										<div class="login-header">
											<h3>Login</h3>
										</div>
                                        <div style="color: #ff0000; font-size: small;"><?php echo e($errors->first()); ?></div>
										<form method="post" action="<?php echo e(route('login')); ?>">
                                            <?php echo csrf_field(); ?>
											<div class="form-group form-focus">
												<input id="email" name="email" type="email" value="<?php echo e(old('email')); ?>" class="form-control floating">
												<label class="focus-label">Email</label>
											</div>
											<div class="form-group form-focus">
												<input id="password" name="password" type="password" class="form-control floating">
												<label class="focus-label">Password</label>
											</div>
											<div class="text-right">
                                                <?php if(Route::has('password.request')): ?>
												<a class="forgot-link" href="<?php echo e(route('password.request')); ?>">Forgot Password ?</a>
                                                <?php endif; ?>
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
											<div class="text-center dont-have">Don’t have an account? <a href="<?php echo e(route('register')); ?>">Register</a></div>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Workspace\appointment-scheduling-system\resources\views/login.blade.php ENDPATH**/ ?>