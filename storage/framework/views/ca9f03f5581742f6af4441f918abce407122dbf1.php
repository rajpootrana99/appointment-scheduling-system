<?php $__env->startSection('content'); ?>
<!-- Page Wrapper -->
<div class="page-wrapper">
                <div class="content container-fluid">

					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">General Settings</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index">Dashboard</a></li>
									<li class="breadcrumb-item"><a href="javascript:(0)">Settings</a></li>
									<li class="breadcrumb-item active">General Settings</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->

					<div class="row">

						<div class="col-12">

							<!-- General -->

								<div class="card">
                                    <?php if(\Session::has('success')): ?>
                                        <div class="alert alert-success border-0" role="alert">
                                            <strong>Success!</strong> <?php echo e(\Session::get('success')); ?>

                                        </div>
                                    <?php endif; ?>
                                    <form action="<?php echo e(route('settings.store')); ?>" method="post" enctype="multipart/form-data">
                                        <div class="card-header">
                                            <h4 class="card-title">General</h4>
                                        </div>
                                        <div class="card-body">
                                                <?php echo csrf_field(); ?>
                                                <div class="form-group">
                                                    <label>Website Name</label>
                                                    <input type="text" name="website_name" class="form-control" value="<?php echo e($setting['website_name'] ?? ''); ?>">
                                                </div>
                                                <div class="form-group">
                                                    <?php if(isset($setting['logo'])): ?>
                                                        <img id="output" width="100" class="justify-content-center" src="<?php echo e(asset('storage/'.$setting['logo'])); ?>" alt="">
                                                    <?php else: ?>
                                                        <img id="output" width="100" class="justify-content-center" alt="">
                                                    <?php endif; ?>
                                                    <div class="form-group">
                                                        <label for="file" style="cursor: pointer; color: #ff0000" class="text-center mt-3 ml-1">Upload Logo</label>
                                                        <input type="file" name="logo" id="file" onchange="loadLogo(event)" style="display: none;" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group mb-0">
                                                    <?php if(isset($setting['fav_icon'])): ?>
                                                        <img id="output1" width="100" class="justify-content-center" src="<?php echo e(asset('storage/'.$setting['fav_icon'])); ?>" alt="">
                                                    <?php else: ?>
                                                        <img id="output1" width="100" class="justify-content-center" alt="">
                                                    <?php endif; ?>
                                                    <div class="form-group">
                                                        <label for="file1" style="cursor: pointer; color: #ff0000" class="text-center mt-3 ml-1">Upload Fav Icon</label>
                                                        <input type="file" name="fav_icon" id="file1" onchange="loadFav(event)" style="display: none;" class="form-control">
                                                    </div>
                                                </div>
                                        </div>
                                        <div class="card-header"></div>
                                        <div class="card-body">
                                            <button type="submit" class="btn btn-primary float-right">Save</button>
                                        </div>
                                    </form>
                                </div>

							<!-- /General -->

						</div>
					</div>

				</div>
			</div>
			<!-- /Page Wrapper -->

        </div>
		<!-- /Main Wrapper -->
<script>
    var loadLogo = function(event) {
        var image = document.getElementById('output');
        image.src = URL.createObjectURL(event.target.files[0]);
    };
    var loadFav = function(event) {
        var image = document.getElementById('output1');
        image.src = URL.createObjectURL(event.target.files[0]);
    };
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.mainlayout_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Workspace\appointment-scheduling-system\resources\views/admin/setting/index.blade.php ENDPATH**/ ?>