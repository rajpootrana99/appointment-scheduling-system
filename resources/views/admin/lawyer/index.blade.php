@extends('layout.mainlayout_admin')
@section('content')

			<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">

					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-7 col-auto">
								<h3 class="page-title">List of Lawyers</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index">Dashboard</a></li>
									<li class="breadcrumb-item"><a href="javascript:(0);">Users</a></li>
									<li class="breadcrumb-item active">Lawyer</li>
								</ul>
							</div>
                            <div class="col-sm-5 col">
                                <a href="{{ route('lawyerInformation.create') }}" class="btn btn-primary float-right mt-2">Add Lawyer</a>
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
								<div class="card-body">
									<div class="table-responsive">
										<table class="datatable table table-hover table-center mb-0">
											<thead>
												<tr>
													<th>Lawyer Name</th>
													<th>Lawyer Type</th>
													<th>Address</th>
													<th>Phone</th>
													<th>Education</th>
                                                    <th>Action</th>

												</tr>
											</thead>
											<tbody>
                                            @foreach($lawyers as $lawyer)
												<tr>
													<td>
														<h2 class="table-avatar">
                                                            @if(isset($lawyer->user->image))
															    <a href="profile" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{ asset('storage/' .$lawyer->user->image) }}" alt="User Image"></a>
                                                            @endif
                                                            <a href="profile">{{ $lawyer->user->name }}</a>
														</h2>
													</td>
													<td>{{ $lawyer->lawyerType->name }}</td>

													<td>{{ $lawyer->address }}</td>

													<td>{{ $lawyer->user->phone }}</td>

													<td>{{ $lawyer->education }}</td>
                                                    <td><div class="action">
                                                            <a class="btn btn-sm bg-success-light float-right mr-2" href="{{ route('lawyerInformation.edit', ['lawyerInformation' => $lawyer]) }}">
                                                                <i class="fe fe-pencil"></i> Edit
                                                            </a>
                                                        </div> </td>
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

        </div>
		<!-- /Main Wrapper -->
@endsection
