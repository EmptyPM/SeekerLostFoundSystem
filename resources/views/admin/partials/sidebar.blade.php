<div id="wrapper">

		<!-- Sidebar -->
		<ul class="sidebar navbar-nav">
			<li class="nav-item active"><a class="nav-link" href="{{url('/')}}">
					<i class="fas fa-fw fa-tachometer-alt"></i> <span>Dashboard</span>
			</a></li>
			<li class="nav-item dropdown"><a
				class="nav-link dropdown-toggle" href="#" id="pagesDropdown"
				role="button" data-toggle="dropdown" aria-haspopup="true"
				aria-expanded="false"> <i class="fas fa-list-ul"></i> <span>Items</span>
			</a>
				<div class="dropdown-menu" aria-labelledby="pagesDropdown">
					<h6 class="dropdown-header">Manage Items:</h6>
					<a class="dropdown-item" href="{{url('/')}}">All Items</a> <a
						class="dropdown-item" href="{{url('/admin/item/itemfound')}}">Found Items </a> 
					<a class="dropdown-item" href="{{url('/admin/item/itemreturned')}}">Returned
						Items</a> <a class="dropdown-item" href="{{url('/admin/item/donated')}}">Donated
						Items</a> <a class="dropdown-item" href="{{url('/admin/item/voiditems')}}">Void
						Items</a>

				</div></li>
			<li class="nav-item dropdown"><a
				class="nav-link dropdown-toggle" href="#" id="pagesDropdown"
				role="button" data-toggle="dropdown" aria-haspopup="true"
				aria-expanded="false"> <i class="fas fa-cog"></i> <span>Settings</span>
			</a>
				<div class="dropdown-menu" aria-labelledby="pagesDropdown">
					<h6 class="dropdown-header">Admin:</h6>
					<a class="dropdown-item" href="{{url('/admin/manage/manage')}}"><i
						class="fas fa-list-ul"></i> &nbsp Manage Items</a> <a
						class="dropdown-item" href="{{url('/admin/user/users')}}"><i class="fas fa-users"></i>
						&nbsp Users</a> <a class="dropdown-item" href="{{url('/admin/storage/storagelocations')}}"><i
						class="fas fa-archive"></i> &nbsp Storage</a>

				</div></li>
			<!--<li class="nav-item"><a class="nav-link" href="#">
					<i class="fas fa-fw fa-chart-area"></i> <span>Reports</span>
			</a></li>-->
			<!-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-fw fa-folder"></i>
                        <span>Pages</span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                        <h6 class="dropdown-header">Login Screens:</h6>
                        <a class="dropdown-item" href="login.html">Login</a>
                        <a class="dropdown-item" href="register.html">Register</a>
                        <a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
                        <div class="dropdown-divider"></div>
                        <h6 class="dropdown-header">Other Pages:</h6>
                        <a class="dropdown-item" href="404.html">404 Page</a>
                        <a class="dropdown-item" href="blank.html">Blank Page</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="charts.html">
                        <i class="fas fa-fw fa-chart-area"></i>
                        <span>Charts</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="tables.html">
                        <i class="fas fa-fw fa-table"></i>
                        <span>Tables</span></a>
                </li>-->
		</ul>