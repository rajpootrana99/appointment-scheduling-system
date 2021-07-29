<?php $page="doctor-profile";?>

<?php $__env->startSection('content'); ?>
<!-- Breadcrumb -->
<div class="breadcrumb-bar">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-md-12 col-12">
							<nav aria-label="breadcrumb" class="page-breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Lawyer Profile</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">Lawyer Profile</h2>
						</div>
					</div>
				</div>
			</div>
			<!-- /Breadcrumb -->

			<!-- Page Content -->
			<div class="content">
				<div class="container">

					<!-- Doctor Widget -->
					<div class="card">
						<div class="card-body">
							<div class="doctor-widget">
								<div class="doc-info-left">
									<div class="doctor-img">
                                        <?php if(isset($lawyer->user->image)): ?>
										    <img src="<?php echo e(asset('storage./'.$lawyer->user->image)); ?>" class="img-fluid" alt="User Image">
                                        <?php endif; ?>
                                    </div>
									<div class="doc-info-cont">
										<h4 class="doc-name"><?php echo e($lawyer->user->name); ?></h4>
										<p class="doc-speciality"><?php echo e($lawyer->education); ?></p>
										<p class="doc-department">
                                            <?php if(isset($lawyer->lawyerType->image)): ?>
                                                <img src="<?php echo e(asset('storage/'.$lawyer->lawyerType->image)); ?>" class="img-fluid" alt="Speciality">
                                            <?php endif; ?>
                                            <?php echo e($lawyer->lawyerType->name); ?></p>
                                        <div class="rating">
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star"></i>
											<span class="d-inline-block average-rating">(35)</span>
										</div>
									</div>
								</div>
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('book lawyer')): ?>
                                    <?php if(Auth::check() || Auth::user()->hasRole(Config::get('constants.roles.User'))): ?>
                                        <div class="doc-info-right">
                                            <div class="clinic-booking">
                                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('book lawyer')): ?>
                                                    <?php if(Auth::check() || Auth::user()->hasRole(Config::get('constants.roles.User'))): ?>
                                                        <a href="#book_lawyer" data-lawyer="<?php echo e($lawyer->user->id); ?>" data-type="<?php echo e($lawyer->lawyerType->id); ?>" data-toggle="modal" class="apt-btn">Book Appointment</a>
                                                    <?php endif; ?>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                <?php endif; ?>
							</div>
						</div>
					</div>
					<!-- /Doctor Widget -->

					<!-- Doctor Details Tab -->
					<div class="card">
						<div class="card-body pt-0">

							<!-- Tab Menu -->
							<nav class="user-tabs mb-4">
								<ul class="nav nav-tabs nav-tabs-bottom nav-justified">
									<li class="nav-item">
										<a class="nav-link active" href="#doc_overview" data-toggle="tab">Overview</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#doc_reviews" data-toggle="tab">Reviews</a>
									</li>
								</ul>
							</nav>
							<!-- /Tab Menu -->

							<!-- Tab Content -->
							<div class="tab-content pt-0">

								<!-- Overview Content -->
								<div role="tabpanel" id="doc_overview" class="tab-pane fade show active">
									<div class="row">
										<div class="col-md-12 col-lg-9">

											<!-- About Details -->
											<div class="widget about-widget">
												<h4 class="widget-title">About Me</h4>
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
											</div>
											<!-- /About Details -->

											<!-- Education Details -->
											<div class="widget education-widget">
												<h4 class="widget-title">Education</h4>
												<div class="experience-box">
													<ul class="experience-list">
														<li>
															<div class="experience-user">
																<div class="before-circle"></div>
															</div>
															<div class="experience-content">
																<div class="timeline-content">
																	<a href="#/" class="name"><?php echo e($lawyer->education); ?></a>
																	<span class="time"><?php echo e($lawyer->passing_year); ?></span>
																</div>
															</div>
														</li>
													</ul>
												</div>
											</div>
											<!-- /Education Details -->

											<!-- Specializations List -->
											<div class="service-list">
												<h4>Type</h4>
												<ul class="clearfix">
													<li><?php echo e($lawyer->lawyerType->name); ?></li>
												</ul>
											</div>
											<!-- /Specializations List -->

										</div>
									</div>
								</div>
								<!-- /Overview Content -->

								<!-- Reviews Content -->
								<div role="tabpanel" id="doc_reviews" class="tab-pane fade">

									<!-- Review Listing -->
									<div class="widget review-listing">
										<ul class="comments-list">

											<!-- Comment List -->
                                            <?php $__currentLoopData = $lawyer->user->lawyerReviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li>
                                                    <div class="comment">
                                                        <?php if(isset($review->user->image)): ?>
                                                        <img class="avatar avatar-sm rounded-circle" alt="User Image" src="<?php echo e(asset('storage/'.$review->user->image)); ?>">
                                                        <?php endif; ?>
                                                        <div class="comment-body">
                                                            <div class="meta-data">
                                                                <span class="comment-author"><?php echo e($review->user->name); ?></span>
                                                                <span class="comment-date">Reviewed 2 Days ago</span>
                                                                <div class="review-count rating">
                                                                    <?php $rating = $review->rating ; ?>
                                                                    <?php $remaining_rating = 5-$review->rating ; ?>
                                                                    <?php for($i = 1; $i <= $rating ; $i++): ?>
                                                                        <i class="fas fa-star filled"></i>
                                                                    <?php endfor; ?>
                                                                    <?php for($i = 1; $i <= $remaining_rating ; $i++): ?>
                                                                        <i class="fas fa-star"></i>
                                                                    <?php endfor; ?>
                                                                </div>
                                                            </div>
                                                            <p class="recommended"><i class="far fa-thumbs-up"></i> <?php echo e($review->title); ?></p>
                                                            <p class="comment-content">
                                                                <?php echo e($review->review); ?>

                                                            </p>
                                                        </div>
                                                    </div>
                                                </li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
											<!-- /Comment List -->
										</ul>

										<!-- Show All -->
										<div class="all-feedback text-center">
											<a href="#" class="btn btn-primary btn-sm">
												Show all feedback <strong><?php echo e(count($lawyer->user->lawyerReviews)); ?></strong>
											</a>
										</div>
										<!-- /Show All -->

									</div>
									<!-- /Review Listing -->

									<!-- Write Review -->
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('book lawyer')): ?>
                                        <?php if(Auth::check() || Auth::user()->hasRole(Config::get('constants.roles.User'))): ?>
                                            <div class="write-review">
                                                <h4>Write a review for <strong><?php echo e($lawyer->user->name); ?></strong></h4>

                                                <!-- Write Review Form -->
                                                <form id="review_form">
                                                    <?php echo csrf_field(); ?>
                                                    <div class="form-group">
                                                        <input type="hidden" name="lawyer_id" value="<?php echo e($lawyer->user->id); ?>">
                                                        <label>Review</label>
                                                        <div class="star-rating">
                                                            <input id="star-5" type="radio" name="rating" value="5">
                                                            <label for="star-5" title="5 stars">
                                                                <i class="active fa fa-star"></i>
                                                            </label>
                                                            <input id="star-4" type="radio" name="rating" value="4">
                                                            <label for="star-4" title="4 stars">
                                                                <i class="active fa fa-star"></i>
                                                            </label>
                                                            <input id="star-3" type="radio" name="rating" value="3">
                                                            <label for="star-3" title="3 stars">
                                                                <i class="active fa fa-star"></i>
                                                            </label>
                                                            <input id="star-2" type="radio" name="rating" value="2">
                                                            <label for="star-2" title="2 stars">
                                                                <i class="active fa fa-star"></i>
                                                            </label>
                                                            <input id="star-1" type="radio" name="rating" value="1">
                                                            <label for="star-1" title="1 star">
                                                                <i class="active fa fa-star"></i>
                                                            </label>
                                                        </div>
                                                        <span class="text-danger error-text rating_error"></span>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Title of your review</label>
                                                        <input class="form-control" type="text" name="title" placeholder="If you could say it in one sentence, what would you say?">
                                                        <span class="text-danger error-text title_error"></span>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Your review</label>
                                                        <textarea id="review_desc" maxlength="200" class="form-control" name="review"></textarea>

                                                      <div class="d-flex justify-content-between mt-3"><small class="text-muted"><span id="chars">100</span> characters remaining</small></div>
                                                        <span class="text-danger error-text review_error"></span>
                                                    </div>
                                                    <hr>
                                                    <div class="form-group">
                                                        <div class="terms-accept">
                                                            <div class="custom-checkbox">
                                                               <input type="checkbox" id="terms_accept">
                                                               <label for="terms_accept">I have read and accept <a href="#">Terms &amp; Conditions</a></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="submit-section">
                                                        <button type="submit" class="btn btn-primary submit-btn">Add Review</button>
                                                    </div>
                                                </form>
                                                <!-- /Write Review Form -->

                                            </div>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                            <!-- /Write Review -->

                                        </div>
								<!-- /Reviews Content -->

							</div>
						</div>
					</div>
					<!-- /Doctor Details Tab -->

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
        $('#review_form').on('submit', function (e){
            e.preventDefault();
            $.ajax({
                type: "post",
                url: "/review",
                data: $('#review_form').serialize(),
                dataType:'json',
                beforeSend:function (){
                    $(document).find('span.error-text').text('');
                },
                success: function (response) {
                    if (response.status == 0){
                        $('#doc_reviews').tab('show')
                        $.each(response.error, function (prefix, val){
                            $('span.'+prefix+'_error').text(val[0]);
                        });
                    }else {
                        $('#review_form')[0].reset();
                        alert("Review Send")
                    }
                },
                error: function (error){
                    console.log(error)
                    $('#doc_reviews').tab('show')
                    alert("Review Not Send")
                }
            });
        });
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Workspace\appointment-scheduling-system\resources\views/client/lawyer-profile.blade.php ENDPATH**/ ?>