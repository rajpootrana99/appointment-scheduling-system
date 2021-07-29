<?php $__env->startSection('content'); ?>
			<!-- Home Banner -->
			<section class="section section-search">
				<div class="container-fluid">
					<div class="banner-wrapper">
						<div class="banner-header text-center">
							<h1 style="color: #fff;">Search Lawyer, Make an Appointment</h1>
							<p style="color: #fff;">Discover the best lawyers nearest to you.</p>
						</div>

						<!-- Search -->
						<div class="search-box d-flex justify-content-center">
							<form action="search">
								<div class="form-group search-info">
									<input type="text" class="form-control" placeholder="Search Lawyer">
									<span class="form-text" style="color: #fff;">Ex : Lawyer Name</span>
								</div>
								<button type="submit" class="btn btn-primary search-btn"><i class="fas fa-search"></i> <span>Search</span></button>
							</form>
						</div>
						<!-- /Search -->

					</div>
				</div>
			</section>
			<!-- /Home Banner -->

			<!-- Clinic and Specialities -->
			<section class="section section-specialities">
				<div class="container-fluid">
					<div class="section-header text-center">
						<h2>Lawyer Type</h2>
						<p class="sub-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
					<div class="row justify-content-center">
						<div class="col-md-9">
							<!-- Slider -->
							<div class="specialities-slider slider">

								<!-- Slider Item -->
                                <?php $__currentLoopData = $lawyersTypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lawyersType): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="speicality-item text-center">
                                        <div class="speicality-img overflow-hidden">
                                            <img src="<?php echo e(asset('storage/'.$lawyersType->image)); ?>" class="img-fluid" alt="Lawyer Type">
                                            <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                        </div>
                                        <p><?php echo e($lawyersType->name); ?></p>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


							</div>
							<!-- /Slider -->

						</div>
					</div>
				</div>
			</section>
			<!-- Clinic and Specialities -->

			<!-- Popular Section -->
			<section class="section section-doctor">
				<div class="container-fluid">
				   <div class="row">
						<div class="col-lg-4">
							<div class="section-header ">
								<h2>Book Our Lawyer</h2>
								<p>Lorem Ipsum is simply dummy text </p>
							</div>
							<div class="about-content">
								<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum.</p>
								<p>web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes</p>
								<a href="javascript:;">Read More..</a>
							</div>
						</div>
						<div class="col-lg-8">
							<div class="doctor-slider slider">

								<!-- Doctor Widget -->
                                <?php $__currentLoopData = $lawyers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lawyer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="profile-widget">
                                        <div class="doc-img">
                                            <a href="doctor-profile">
                                                <img class="img-fluid" style="height: 200px" alt="User Image" src="<?php echo e(asset('storage/' .$lawyer->user->image)); ?>">
                                            </a>
                                            <a href="javascript:void(0)" class="fav-btn">
                                                <i class="far fa-bookmark"></i>
                                            </a>
                                        </div>
                                        <div class="pro-content">
                                            <h3 class="title">
                                                <a href="doctor-profile"><?php echo e($lawyer->user->name); ?></a>
                                                <i class="fas fa-check-circle verified"></i>
                                            </h3>
                                            <p class="speciality"><?php echo e($lawyer->education); ?> - <?php echo e($lawyer->lawyerType->name); ?></p>
                                            <div class="rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <span class="d-inline-block average-rating">(17)</span>
                                            </div>
                                            <ul class="available-info">
                                                <li>
                                                    <i class="fas fa-map-marker-alt"></i> <?php echo e($lawyer->address); ?>

                                                </li>
                                                <li>
                                                    <i class="far fa-clock"></i> Available on Fri, 22 Mar
                                                </li>
                                                <li>
                                                    <i class="far fa-money-bill-alt"></i> 3000 - 5000
                                                    <i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i>
                                                </li>
                                            </ul>
                                            <div class="row row-sm">
                                                <div class="col-6">
                                                    <a href="doctor-profile" class="btn view-btn">View Profile</a>
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
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								<!-- /Doctor Widget -->
							</div>
						</div>
				   </div>
				</div>
			</section>
			<!-- /Popular Section -->













































































































































































	   </div>
	   <!-- /Main Wrapper -->

        <!-- Book Lawyer Model -->
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

<?php echo $__env->make('layout.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Workspace\appointment-scheduling-system\resources\views/index.blade.php ENDPATH**/ ?>