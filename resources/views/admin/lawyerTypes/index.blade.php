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
										<table class="datatable table table-hover table-center mb-0">
											<thead>
												<tr>
													<th>#</th>
													<th>Type</th>
													<th class="text-right">Actions</th>
												</tr>
											</thead>
											<tbody>
                                            @foreach($lawyerTypes as $lawyerType)
												<tr>
													<td>{{ $lawyerType->id }}</td>

													<td>
														<h2 class="table-avatar">
                                                            @if(isset($lawyerType->image))
                                                                <a href="profile" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{ asset('storage/'.$lawyerType->image) }}" alt="User Image"></a>
                                                            @endif
                                                            <a href="profile">{{ $lawyerType->name }}</a>
														</h2>
													</td>

													<td class="text-right">
														<div class="actions">
                                                            <form method="post" id="{{'delete_'.$lawyerType->id}}" action="{{ route('lawyerType.destroy', ['lawyerType' => $lawyerType]) }}">
                                                                @method('DELETE')
                                                                @csrf
                                                                <a  data-toggle="modal" onclick="document.getElementById('{{ 'delete_'.$lawyerType->id }}').submit()" href="" class="btn btn-sm bg-danger-light float-right">
                                                                    <i class="fe fe-trash"></i> Delete
                                                                </a>
                                                            </form>
															<a class="btn btn-sm bg-success-light float-right mr-2" data-toggle="modal" href="#edit_specialities_details">
																<i class="fe fe-pencil"></i> Edit
															</a>
														</div>
													</td>
												</tr>
                                            @endforeach
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
							<form method="post" action="{{ route('lawyerType.store') }}" enctype="multipart/form-data">
                                @csrf
								<div class="row form-row">
									<div class="col-12 col-sm-6">
										<div class="form-group">
											<label>Type Name</label>
											<input type="text" name="name" class="form-control">
                                            <div style="color: #ff0000; font-size: small;" class="mt-2">{{ $errors->first('name') }}</div>
										</div>
									</div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label>Image</label>
                                            <input type="file"  class="form-control" name="image">
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
							<h5 class="modal-title">Edit Specialities</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<form>
								<div class="row form-row">
									<div class="col-12 col-sm-6">
										<div class="form-group">
											<label>Specialities</label>
											<input type="text" class="form-control" value="Cardiology">
										</div>
									</div>
									<div class="col-12 col-sm-6">
										<div class="form-group">
											<label>Image</label>
											<input type="file"  class="form-control">
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

			<!-- Delete Modal -->
			<div class="modal fade" id="delete_modal" aria-hidden="true" role="dialog">
				<div class="modal-dialog modal-dialog-centered" role="document" >
					<div class="modal-content">
					<!--	<div class="modal-header">
							<h5 class="modal-title">Delete</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>-->
						<div class="modal-body">
							<div class="form-content p-2">
								<h4 class="modal-title">Delete</h4>
								<p class="mb-4">Are you sure want to delete?</p>
								<button type="button" class="btn btn-primary">Yes </button>
								<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /Delete Modal -->
        </div>
		<!-- /Main Wrapper -->
@endsection
