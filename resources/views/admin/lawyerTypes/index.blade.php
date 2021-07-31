@extends('layout.mainlayout_admin')
@section('content')
<!-- Page Wrapper -->
<div class="page-wrapper">
                <div class="content container-fluid">

					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-7 col-auto">
								<h3 class="page-title">Lawyer Types</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index">Dashboard</a></li>
									<li class="breadcrumb-item active">Lawyer Types</li>
								</ul>
							</div>
							<div class="col-sm-5 col">
								<a href="#Add_Specialities_details" data-toggle="modal" class="btn btn-primary float-right mt-2">Add Type</a>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					<div class="row">
						<div class="col-sm-12">
							<div class="card">
                                @if(\Session::has('success'))
                                    <div class="alert alert-success border-0" role="alert">
                                        <strong>Success!</strong> {{ \Session::get('success') }}
                                    </div>
                                @endif
                                @if(\Session::has('warning'))
                                    <div class="alert alert-danger border-0" role="alert">
                                        <strong>Warning!</strong> {{ \Session::get('warning') }}
                                    </div>
                                @endif
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-bordered">
											<thead>
												<tr>
													<th>#</th>
													<th>Type</th>
													<th>Edit</th>
                                                    <th>Delete</th>
												</tr>
											</thead>
											<tbody>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /Page Wrapper -->


			<!-- Add Modal -->
			<div class="modal fade" id="Add_Specialities_details" aria-hidden="true" role="dialog">
				<div class="modal-dialog modal-dialog-centered" role="document" >
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Add Lawyer Type</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<form method="POST" id="Add_Specialities_details_form" enctype="multipart/form-data">
                                @csrf
								<div class="row form-row">
									<div class="col-12 col-sm-12">
										<div class="form-group">
											<label>Type Name</label>
											<input type="text" name="name" class="form-control">
                                            <span class="text-danger error-text name_error"></span>
										</div>
									</div>
                                    <div class="col-12 col-sm-12">
                                        <div class="form-group">
                                            <label>Image</label>
                                            <input type="file"  class="form-control" id="image" name="image">
                                            <span class="text-danger error-text image_error"></span>
                                        </div>
                                    </div>
								</div>
								<button type="submit" class="btn btn-primary btn-block">Add Type</button>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- /ADD Modal -->

			<!-- Edit Details Modal -->
			<div class="modal fade" id="edit_specialities_details" aria-hidden="true" role="dialog">
				<div class="modal-dialog modal-dialog-centered" role="document" >
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Edit Lawyer Type</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<form method="post" id="edit_specialities_details_form" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
								<div class="row form-row">
                                    <input type="hidden" name="lawyer_type_id" id="lawyer_type_id">
									<div class="col-12 col-sm-12">
										<div class="form-group">
											<label>Type Name</label>
											<input type="text" class="form-control" name="name" id="edit_name">
                                            <span class="text-danger error-text name_update_error"></span>
										</div>
									</div>
									<div class="col-12 col-sm-12">
										<div class="form-group">
											<label>Image</label>
											<input type="file" name="image" class="form-control">
										</div>
									</div>

								</div>
								<button type="submit" class="btn btn-primary btn-block">Update</button>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- /Edit Details Modal -->

			<!-- Delete Modal -->
			<div class="modal fade" id="delete_modal" aria-hidden="true" role="dialog">
				<div class="modal-dialog modal-dialog-centered" role="document" >
					<div class="modal-content">
                        <div class="modal-body">
                            <div class="form-content p-2">
                                <form method="post" id="delete_modal_form">
                                    @csrf
                                    @method('DELETE')
                                    <h4 class="modal-title">Delete</h4>
                                    <input type="hidden" id="lawyer_type_id" name="lawyer_type_id">
                                    <p class="mb-4">Are you sure want to delete?</p>
                                    <button type="submit" class="btn btn-primary">Yes </button>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                </form>
                            </div>
                        </div>
					</div>
				</div>
			</div>
			<!-- /Delete Modal -->
        </div>
		<!-- /Main Wrapper -->

<script>
    $(document).ready(function (){

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        fetchLawyerType();

        function fetchLawyerType()
        {
            $.ajax({
                type: "GET",
                url: "fetchLawyerType",
                dataType: "json",
                success: function (response) {
                    console.log(response);
                    $('tbody').html("");
                    $.each(response.lawyerTypes, function (key, item) {
                        $('tbody').append('<tr>\
                            <td>'+item.id+'</td>\
                            <td><h2 class="table-avatar"><img class="avatar-img rounded-circle" src="{{ asset('storage/')}}/'+item.image+'" width="50px" height="50px">'+item.name+'</h2></td>\
                            <td><button type="button" value="'+item.id+'" class="edit_btn btn btn-success btn-sm">Edit</button></td>\
                            <td><button type="button" value="'+item.id+'" class="delete_btn btn btn-danger btn-sm">Delete</button></td>\
                    </tr>');
                    });
                }
            });
        }

        $(document).on('click', '.delete_btn', function (e) {
            e.preventDefault();
            var lawyer_type_id = $(this).val();
            $('#delete_modal').modal('show');
            $('#lawyer_type_id').val(lawyer_type_id)
        });

        $(document).on('submit', '#delete_modal_form', function (e) {
            e.preventDefault();
            var lawyer_type_id = $('#lawyer_type_id').val();

            $.ajax({
                type: 'delete',
                url: 'lawyerType/'+lawyer_type_id,
                dataType: 'json',
                success: function (response) {
                    if (response.status == 0) {
                        alert(response.message);
                        $('#delete_modal').modal('hide');
                    }
                    else {
                        fetchLawyerType();
                        $('#delete_modal').modal('hide');
                    }
                }
            });
        });

        $(document).on('click', '.edit_btn', function (e) {
            e.preventDefault();
            var lawyer_type_id = $(this).val();
            $('#edit_specialities_details').modal('show');
            $.ajax({
                type: "GET",
                url: 'lawyerType/'+lawyer_type_id+'/edit',
                success: function (response) {
                    if (response.status == 404) {
                        alert(response.message);
                        $('#edit_specialities_details').modal('hide');
                    }
                    else {
                        $('#lawyer_type_id').val(response.lawyerType.id);
                        $('#edit_name').val(response.lawyerType.name);
                    }
                }
            });
        });

        $(document).on('submit', '#edit_specialities_details_form', function (e) {
            e.preventDefault();

            var lawyer_type_id = $('#lawyer_type_id').val();
            let EditFormData = new FormData($('#edit_specialities_details_form')[0]);
            console.log(EditFormData);

            $.ajax({
                type: "post",
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content'), '_method': 'patch'},
                url: "lawyerType/"+lawyer_type_id,
                data: EditFormData,
                contentType: false,
                processData: false,
                beforeSend:function (){
                    $(document).find('span.error-text').text('');
                },
                success: function (response) {
                    if (response.status == 0){
                        $('#edit_specialities_details').modal('show')
                        $.each(response.error, function (prefix, val){
                            $('span.'+prefix+'_update_error').text(val[0]);
                        });
                    }else {
                        $('#edit_specialities_details_form')[0].reset();
                        $('#edit_specialities_details').modal('hide')
                        fetchLawyerType()
                    }
                },
                error: function (error){
                    console.log(error)
                    $('#edit_specialities_details').modal('show')
                    alert(error.message)
                }
            });
        })

        $(document).on('submit', '#Add_Specialities_details_form', function (e){
            e.preventDefault();
            let formDate = new FormData($('#Add_Specialities_details_form')[0]);
            $.ajax({
                type: "post",
                url: "lawyerType",
                data: formDate,
                contentType: false,
                processData: false,
                beforeSend:function (){
                    $(document).find('span.error-text').text('');
                },
                success: function (response) {
                    if (response.status == 0){
                        $('#Add_Specialities_details').modal('show')
                        $.each(response.error, function (prefix, val){
                            $('span.'+prefix+'_error').text(val[0]);
                        });
                    }else {
                        $('#Add_Specialities_details_form')[0].reset();
                        $('#Add_Specialities_details').modal('hide')
                        alert("Lawyer Type Add Successfully")
                        fetchLawyerType()
                    }
                },
                error: function (error){
                    console.log(error)
                    $('#Add_Specialities_details').modal('show')
                    alert("Lawyer Type not added")
                }
            });
        });
    });
</script>
@endsection
