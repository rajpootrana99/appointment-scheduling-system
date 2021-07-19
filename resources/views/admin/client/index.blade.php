@extends('layout.mainlayout_admin')
@section('content')
<!-- Page Wrapper -->
<div class="page-wrapper">
                <div class="content container-fluid">

					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">List of Client</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index">Dashboard</a></li>
									<li class="breadcrumb-item"><a href="javascript:(0);">Users</a></li>
									<li class="breadcrumb-item active">Client</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->

					<div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-body">
									<div class="table-responsive">
										<div class="table-responsive">
										<table class="datatable table table-hover table-center mb-0">
											<thead>
												<tr>
													<th>Client ID</th>
													<th>Client Name</th>
													<th>Client Email</th>
													<th>Phone</th>
												</tr>
											</thead>
											<tbody>
                                            @foreach($clients as $client)
												<tr>
													<td>{{ $client->id }}</td>
													<td>
														<h2 class="table-avatar">
                                                            @if(isset($client->image))
															    <a href="profile" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{ asset('storage/'.$client->image) }}" alt="User Image"></a>
                                                            @endif
                                                            <a href="profile">{{ $client->name }}</a>
														</h2>
													</td>
													<td>{{ $client->email }}</td>
													<td>{{ $client->phone }}</td>
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
			</div>
			<!-- /Page Wrapper -->

        </div>
		<!-- /Main Wrapper -->
@endsection
