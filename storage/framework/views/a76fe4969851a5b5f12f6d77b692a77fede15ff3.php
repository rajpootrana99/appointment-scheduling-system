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
                                                <div class="col-6">
                                                    <a href="booking" class="btn book-btn">Book Now</a>
                                                </div>
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
	   <?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Workspace\appointment-scheduling-system\resources\views/index.blade.php ENDPATH**/ ?>