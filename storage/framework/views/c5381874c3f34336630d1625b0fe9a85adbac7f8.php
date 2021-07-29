<?php $page="favourites";?>

<?php $__env->startSection('content'); ?>
	<!-- Breadcrumb -->
    <div class="breadcrumb-bar">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-md-12 col-12">
							<nav aria-label="breadcrumb" class="page-breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Favourites</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">Favourites</h2>
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
							<div class="profile-sidebar">
								<div class="widget-profile pro-widget-content">
									<div class="profile-info-widget">
										<a href="#" class="booking-doc-img">
                                            <?php if(isset(Auth::user()->image)): ?>
											    <img src="<?php echo e(asset('storage/'.Auth::user()->image)); ?>" alt="User Image">
                                            <?php else: ?>
                                                <img src="assets/img/patients/patient.jpg" alt="User Image">
                                            <?php endif; ?>
                                        </a>
										<div class="profile-det-info">
											<h3><?php echo e(Auth::user()->name); ?></h3>
										</div>
									</div>
								</div>
								<div class="dashboard-widget">
									<nav class="dashboard-menu">
										<ul>
											<li>
												<a href="<?php echo e(route('user')); ?>">
													<i class="fas fa-columns"></i>
													<span>Dashboard</span>
												</a>
											</li>
											<li class="active">
												<a href="<?php echo e(route('favourites')); ?>">
													<i class="fas fa-bookmark"></i>
													<span>Favourites</span>
												</a>
											</li>
											<li>
												<a href="<?php echo e(route('profile-settings')); ?>">
													<i class="fas fa-user-cog"></i>
													<span>Profile Settings</span>
												</a>
											</li>
											<li>
												<a href="<?php echo e(route('change-user-password')); ?>">
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
						</div>
						<div class="col-md-7 col-lg-8 col-xl-9">
							<div class="row row-grid">
                                <?php $__currentLoopData = $lawyers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lawyer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-md-6 col-lg-4 col-xl-3">
                                        <div class="profile-widget">
                                            <div class="doc-img">
                                                <a href="<?php echo e(route('lawyer.show', ['lawyer' => $lawyer->user->id])); ?>">
                                                    <?php if(isset($lawyer->user->image)): ?>
                                                        <img class="img-fluid" style="height: 200px" alt="User Image" src="<?php echo e(asset('storage/' .$lawyer->user->image)); ?>">
                                                    <?php endif; ?>
                                                </a>
                                                <a href="javascript:void(0)" class="fav-btn">
                                                    <i class="far fa-bookmark"></i>
                                                </a>
                                            </div>
                                            <div class="pro-content">
                                                <h3 class="title">
                                                    <a href="<?php echo e(route('lawyer.show', ['lawyer' => $lawyer->user->id])); ?>"><?php echo e($lawyer->user->name); ?></a>
                                                    <i class="fas fa-check-circle verified"></i>
                                                </h3>
                                                <p class="speciality"><?php echo e($lawyer->education); ?> - <?php echo e($lawyer->lawyerType->name); ?></p>
                                                <div class="rating">
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <span class="d-inline-block average-rating">(<?php echo e(count($lawyer->user->lawyerReviews)); ?>)</span>
                                                </div>
                                                <ul class="available-info">
                                                    <li>
                                                        <i class="fas fa-map-marker-alt"></i> <?php echo e($lawyer->address); ?>

                                                    </li>
                                                    <li>
                                                        <i class="far fa-clock"></i> Available on Fri, 22 Mar
                                                    </li>
                                                    <li>
                                                        <i class="far fa-money-bill-alt"></i> $300 - $1000 <i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i>
                                                    </li>
                                                </ul>
                                                <div class="row row-sm">
                                                    <div class="col-6">
                                                        <a href="<?php echo e(route('lawyer.show', ['lawyer' => $lawyer->user->id])); ?>" class="btn view-btn">View Profile</a>
                                                    </div>
                                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('book lawyer')): ?>
                                                        <?php if(Auth::check() || Auth::user()->hasRole(Config::get('constants.roles.User'))): ?>
                                                            <div class="col-6">
                                                                <a href="#book_lawyer" data-lawyer="<?php echo e($lawyer->user->id); ?>" data-type="<?php echo e($lawyer->lawyerType->id); ?>" data-toggle="modal" class="btn book-btn">Book Now</a>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</div>
						</div>
					</div>
				</div>

			</div>
			<!-- /Page Content -->
</div>
    <div class="modal fade" id="book_lawyer" aria-hidden="true" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document" >
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Book Lawyer</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="book_lawyer_form">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="lawyer_id" id="lawyer_id">
                        <input type="hidden" name="lawyer_type_id" id="lawyer_type_id">
                        <div class="row form-row">
                            <div class="col-12 col-sm-12">
                                <div class="form-group">
                                    <label>Select Date</label>
                                    <input type="date" name="appointment_date" class="form-control">
                                    <span class="text-danger error-text appointment_date_error"></span>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12">
                                <div class="form-group">
                                    <label>Select Time</label>
                                    <input type="time" name="appointment_time" class="form-control">
                                    <span class="text-danger error-text appointment_time_error"></span>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Book Lawyer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function (){
            $('#book_lawyer').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget)
                var lawyer_id = button.data('lawyer')
                var lawyer_type_id = button.data('type')
                console.log('hello')
                var modal = $(this)
                modal.find('.modal-body #lawyer_id').val(lawyer_id);
                modal.find('.modal-body #lawyer_type_id').val(lawyer_type_id);
            });
            $('#book_lawyer_form').on('submit', function (e){
                e.preventDefault();
                $.ajax({
                    type: "post",
                    url: "appointment/store",
                    data: $('#book_lawyer_form').serialize(),
                    dataType:'json',
                    beforeSend:function (){
                        $(document).find('span.error-text').text('');
                    },
                    success: function (response) {
                        if (response.status == 0){
                            $('#book_lawyer').modal('show')
                            $.each(response.error, function (prefix, val){
                                $('span.'+prefix+'_error').text(val[0]);
                            });
                        }else {
                            $('#book_lawyer_form')[0].reset();
                            $('#book_lawyer').modal('hide')
                            alert("Appointment Booked ")
                        }
                    },
                    error: function (error){
                        console.log(error)
                        $('#book_lawyer').modal('show')
                        alert("Appointment not booked")
                    }
                });
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Workspace\appointment-scheduling-system\resources\views/client/favourites.blade.php ENDPATH**/ ?>