<?php $page="doctor-dashboard";?>
@extends('layout.mainlayout')
@section('content')
	<!-- Breadcrumb -->
    <div class="breadcrumb-bar">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-12 col-12">
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                        </ol>
                    </nav>
                    <h2 class="breadcrumb-title">Dashboard</h2>
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

                    <!-- Profile Sidebar -->
                    <div class="profile-sidebar">
                        <div class="widget-profile pro-widget-content">
                            <div class="profile-info-widget">
                                <a href="#" class="booking-doc-img">
                                    <img src="{{ asset('storage/' .$lawyer->user->image) }}" alt="User Image">
                                </a>
                                <div class="profile-det-info">
                                    <h3>{{ $lawyer->user->name }}</h3>

                                    <div class="patient-details">
                                        <h5 class="mb-0">
                                            {{ $lawyer->education }} - {{ $lawyer->lawyerType->name }}</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dashboard-widget">
                            <nav class="dashboard-menu">
                                <ul>
                                    <li class="active">
                                        <a href="{{ route('lawyer') }}">
                                            <i class="fas fa-columns"></i>
                                            <span>Dashboard</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('appointments') }}">
                                            <i class="fas fa-calendar-check"></i>
                                            <span>Appointments</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('my-clients') }}">
                                            <i class="fas fa-user-injured"></i>
                                            <span>My Clients</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('reviews') }}">
                                            <i class="fas fa-star"></i>
                                            <span>Reviews</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('profile-setting') }}">
                                            <i class="fas fa-user-cog"></i>
                                            <span>Profile Settings</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('change-lawyer-password') }}">
                                            <i class="fas fa-lock"></i>
                                            <span>Change Password</span>
                                        </a>
                                    </li>
                                    <li>
                                        <form action="{{ route('logout') }}"  style="display: none;" method="post" id="lgut">
                                            @csrf
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
                    <!-- /Profile Sidebar -->

                </div>

                <div class="col-md-7 col-lg-8 col-xl-9">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card dash-card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12 col-lg-4">
                                            <div class="dash-widget dct-border-rht">
                                                <div class="circle-bar circle-bar1">
                                                    <div class="circle-graph1" data-percent="75">
                                                        <img src="assets/img/icon-03.png" class="img-fluid" alt="patient">
                                                    </div>
                                                </div>
                                                <div class="dash-widget-info">
                                                    <h6>Total Client</h6>
                                                    <h3>{{ count($total_clients) }}</h3>
                                                    <p class="text-muted">Till Today</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12 col-lg-4">
                                            <div class="dash-widget dct-border-rht">
                                                <div class="circle-bar circle-bar2">
                                                    <div class="circle-graph2" data-percent="65">
                                                        <img src="assets/img/icon-03.png" class="img-fluid" alt="Patient">
                                                    </div>
                                                </div>
                                                <div class="dash-widget-info">
                                                    <h6>Today Client</h6>
                                                    <h3>{{ count($today_clients) }}</h3>
                                                    <p class="text-muted">06, Nov 2019</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="mb-4">Client Appoinment</h4>
                            <div class="appointment-tab">

                                <!-- Appointment Tab -->
                                <ul class="nav nav-tabs nav-tabs-solid nav-tabs-rounded">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#upcoming-appointments" data-toggle="tab">Upcoming</a>
                                    </li>
                                </ul>
                                <!-- /Appointment Tab -->

                                <div class="tab-content">

                                    <!-- Upcoming Appointment Tab -->
                                    <div class="tab-pane show active" id="upcoming-appointments">
                                        <div class="card card-table mb-0">
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table class="table table-hover table-center mb-0">
                                                        <thead>
                                                            <tr>
                                                                <th>Client Name</th>
                                                                <th>Appointment Date</th>
                                                                <th>Status</th>
                                                                <th class="text-center">Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach($appointments as $appointment)
                                                                <tr>
                                                                    <td>
                                                                        <h2 class="table-avatar">
                                                                            @if(isset($appointment->user->image))
                                                                                <a href="{{ route('client-profile.show', ['user' => $appointment->user]) }}" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{ asset('storage/'.$appointment->user->image) }}" alt="User Image"></a>
                                                                            @endif
                                                                            <a href="{{ route('client-profile.show', ['user' => $appointment->user]) }}">{{ $appointment->user->name }}</a>
                                                                        </h2>
                                                                    </td>
                                                                    <td>{{ $appointment->appointment_date }} <span class="d-block text-info">{{ $appointment->appointment_time }}</span></td>
                                                                    @if($appointment->status == 'Pending')
                                                                        <td><span class="badge badge-pill bg-info-light">{{ $appointment->status }}</span></td>
                                                                    @endif
                                                                    @if($appointment->status == 'Confirm')
                                                                        <td><span class="badge badge-pill bg-success-light">{{ $appointment->status }}</span></td>
                                                                    @endif
                                                                    @if($appointment->status == 'Reject')
                                                                        <td><span class="badge badge-pill bg-danger-light">{{ $appointment->status }}</span></td>
                                                                    @endif
                                                                    <td class="text-center">
                                                                        <div class="table-action row">
                                                                            <a href="#book_lawyer" data-date="{{ $appointment->appointment_date }}"
                                                                               data-time="{{ $appointment->appointment_time }}"
                                                                               data-id="{{ $appointment->id }}" data-toggle="modal"
                                                                               class="btn btn-sm bg-info-light col-4">
                                                                                <i class="fas fa-edit"></i> Edit
                                                                            </a>
                                                                            @if($appointment->status != 'Reject')
                                                                                <form id="{{ 'reject_'.$appointment->id }}" method="post" action="{{ route('appointment.updateStatus', ['appointment' => $appointment]) }}">
                                                                                    @csrf
                                                                                    @method('PATCH')
                                                                                    <input type="hidden" name="status" value="2">
                                                                                    <a class="btn btn-sm bg-danger-light ml-2" style="cursor: pointer;" onclick="document.getElementById('{{'reject_'.$appointment->id}}').submit()"><i class="fas fa-times"></i> Reject</a>
                                                                                </form>
                                                                            @endif
                                                                            @if($appointment->status != 'Confirm')
                                                                                <form id="{{ 'confirm_'.$appointment->id }}" method="post" action="{{ route('appointment.updateStatus', ['appointment' => $appointment]) }}">
                                                                                    @csrf
                                                                                    @method('PATCH')
                                                                                    <input type="hidden" name="status" value="1">
                                                                                    <a class="btn btn-sm bg-success-light ml-2" style="cursor: pointer;" onclick="document.getElementById('{{'confirm_'.$appointment->id}}').submit()"><i class="fas fa-check"></i> Confirm</a>
                                                                                </form>
                                                                            @endif
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
                                    <!-- /Upcoming Appointment Tab -->

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>
    <!-- /Page Content -->
    <div class="modal fade" id="book_lawyer" aria-hidden="true" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document" >
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Update Appointment</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="book_lawyer_form">
                        @csrf
                        <div class="row form-row">
                            <div class="col-12 col-sm-12">
                                <div class="form-group">
                                    <input type="hidden" id="id" name="id">
                                    <label>Select Date</label>
                                    <input type="date" name="appointment_date" id="appointment_date" class="form-control">
                                    <span class="text-danger error-text appointment_date_error"></span>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12">
                                <div class="form-group">
                                    <label>Select Time</label>
                                    <input type="time" name="appointment_time" id="appointment_time" class="form-control">
                                    <span class="text-danger error-text appointment_time_error"></span>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function (){
            $('#book_lawyer').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget)
                var appointment_date = button.data('date')
                var appointment_time = button.data('time')
                var id = button.data('id')
                var modal = $(this)
                modal.find('.modal-body #appointment_date').val(appointment_date);
                modal.find('.modal-body #appointment_time').val(appointment_time);
                modal.find('.modal-body #id').val(id);
            });
            $('#book_lawyer_form').on('submit', function (e){
                e.preventDefault();
                $('#book_lawyer').modal('show')
                $.ajax({
                    type: "post",
                    url: "appointment",
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
                            alert("Appointment Updated Successfully ")
                        }
                    },
                    error: function (error){
                        console.log(error)
                        $('#book_lawyer').modal('show')
                        alert("Appointment not updated")
                    }
                });
            });
        });
    </script>
@endsection

