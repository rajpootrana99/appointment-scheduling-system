<!-- Sidebar -->
<div class="sidebar" id="sidebar">
                <div class="sidebar-inner slimscroll">
					<div id="sidebar-menu" class="sidebar-menu">
						<ul>
							<li class="menu-title">
								<span>Main</span>
							</li>
							<li class="{{ Request::is('admin') ? 'active' : '' }}">
								<a href="{{ route('admin') }}"><i class="fe fe-home"></i> <span>Dashboard</span></a>
							</li>
							<li class="{{ Request::is('admin/appointment') ? 'active' : '' }}">
								<a href="{{ route('appointment.index') }}"><i class="fe fe-layout"></i> <span>Appointments</span></a>
							</li>
							<li  class="{{ Request::is('admin/lawyerType') ? 'active' : '' }}">
								<a href="{{ route('lawyerType.index')}}"><i class="fe fe-users"></i> <span>Lawyer Type</span></a>
							</li>
							<li  class="{{ Request::is('admin/lawyerInformation') ? 'active' : '' }}">
								<a href="{{ route('lawyerInformation.index')}}"><i class="fe fe-user-plus"></i> <span>Lawyers</span></a>
							</li>
							<li  class="{{ Request::is('admin/client') ? 'active' : '' }}">
								<a href="{{ route('client.index')}}"><i class="fe fe-user"></i> <span>Clients</span></a>
							</li>
							<li  class="{{ Request::is('admin/reviews') ? 'active' : '' }}">
								<a href="{{ route('reviews.index')}}"><i class="fe fe-star-o"></i> <span>Reviews</span></a>
							</li>
							<li   class="{{ Request::is('admin/settings') ? 'active' : '' }}">
								<a href="{{ route('settings.index')}}"><i class="fe fe-vector"></i> <span>Settings</span></a>
							</li>
							<li  class="{{ Request::is('admin/profile') ? 'active' : '' }}">
								<a href="{{ route('profile.index')}}"><i class="fe fe-user-plus"></i> <span>Profile</span></a>
							</li>
						</ul>
					</div>
                </div>
            </div>
			<!-- /Sidebar -->
