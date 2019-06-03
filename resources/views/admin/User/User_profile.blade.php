@include('/admin/partials/header')

@include('/admin/partials/nav')
@include('/admin/partials/sidebar')

		<div id="content-wrapper">

			<div class="container-fluid">

				<!-- Breadcrumbs-->
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Dashboard</a></li>
					<li class="breadcrumb-item active">User Profile</li>
				</ol>

				<!-- Icon Cards-->
				<div class="row">
					<div class="col-xl-8 col-sm-6 mb-8">
						<div class="card col-mb-3">
							<div class="card-header">
								<i class="fas fa-user"></i> Profile Information
							</div>
							<div style="margin-left: 1%;">
								<h5>Name : Testing Name</h5>
								<h5>Email : Testing@gmail.com</h5>
								<h5>Destination : Manager</h5>
								<h5>Admin Type : Super User</h5>
								<h5>Department : HouseKeeping</h5>
							</div>
							
							

							<div class="card-footer small text-muted">Updated yesterday
								at 11:59 PM</div>
						</div>
					</div>
					<div class="col-xl-4 col-sm-6 mb-4">
						<div class="card mb-3">
							<div class="card-header">
								<i class="fas fa-users-cog"></i> Change Password
							</div>
							<form action=""
								style="margin-left: 20px; margin-right: 20px; margin-bottom: 20px; margin-top: 10px;">


								<div class="form-group">
									<label for="inputEmail4">Current Password</label> 
									<input type="password" class="form-control" id="cpassword" placeholder="Current password" required>
								</div>
								<div class="form-group">
									<label for="inputEmail4">New Password</label> <input
										type="password" class="form-control" id="fname"
										placeholder="New Password" required>
								</div>
								<div class="form-group">
									<label for="inputEmail4">Confirm Password</label> <input
										type="password" class="form-control" id="fname"
										placeholder="Confirm Password" required>
								</div>




								<button type="submit" class="btn btn-success"
									data-toggle="modal" data-target="#passwordchangeModal">Change
									Password</button>
							</form>
							<!--  <div class="modal fade" id="passwordchangeModal" tabindex="-1"
								role="dialog" aria-labelledby="exampleModalLabel"
								aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLabel">Change Passwords</h5>
											<button type="button" class="close" data-dismiss="modal"
												aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">Are you sure you want to change the password</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary"
												data-dismiss="modal">Close</button>
											<button type="button" class="btn btn-primary">Change Password
												</button>
										</div>
									</div>
								</div>
							</div>-->

							<div class="card-footer small text-muted">Updated yesterday
								at 11:59 PM</div>
						</div>
					</div>


				</div>
				<!-- /.container-fluid -->

				@include('/admin/partials/footer')