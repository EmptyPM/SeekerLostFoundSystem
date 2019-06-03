@include('/admin/partials/header')

@include('/admin/partials/nav')
@include('/admin/partials/sidebar')

            <div id="content-wrapper">

                <div class="container-fluid">

                    <!-- Breadcrumbs-->
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="../index.html" style="text-decoration: none;">Dashboard</a>
                        </li>
                         <li class="breadcrumb-item active"><a href="Users.html" style="text-decoration: none;">Users</a></li>
                      <li class="breadcrumb-item active">Edit-User</li>
                    </ol>

                    <!-- Icon Cards-->
				<div class="row">
					<div class="col-xl-3 col-sm-6 mb-3">
						<div class="card text-white bg-primary  o-hidden h-100">
							<div class="card-body">
								<div class="card-body-icon">
									<i class="fas fa-fw fa-list"></i>
								</div>
								<div class="mr-5">205 All Items</div>
							</div>
							<a class="card-footer text-white clearfix small z-1"
								href="{{url('/')}}"> <span class="float-left">Show all
									items</span> <span class="float-right"> <i
									class="fas fa-angle-right"></i>
							</span>
							</a>
						</div>
					</div>
					<div class="col-xl-3 col-sm-6 mb-3">
						<div class="card text-white bg-warning o-hidden h-100">
							<div class="card-body">
								<div class="card-body-icon">
									<i class="fas fa-tags"></i>
								</div>
								<div class="mr-5">95 Found Items</div>
							</div>
							<a class="card-footer text-white clearfix small z-1"
								href="{{url('/admin/item/itemfound')}}"> <span class="float-left">Show
									all items</span> <span class="float-right"> <i
									class="fas fa-angle-right"></i>
							</span>
							</a>
						</div>
					</div>
					<div class="col-xl-3 col-sm-6 mb-3">
						<div class="card text-white bg-success o-hidden h-100">
							<div class="card-body">
								<div class="card-body-icon">
									<i class="fas fa-exchange-alt"></i>
								</div>
								<div class="mr-5">52 Successfully returned</div>
							</div>
							<a class="card-footer text-white clearfix small z-1"
								href="{{url('/admin/item/itemreturned')}}"> <span class="float-left">Show
									all items</span> <span class="float-right"> <i
									class="fas fa-angle-right"></i>
							</span>
							</a>
						</div>
					</div>
					<div class="col-xl-3 col-sm-6 mb-3">
						<div class="card text-white bg-danger o-hidden h-100">
							<div class="card-body">
								<div class="card-body-icon">
									<i class="fas fa-fw fa-life-ring"></i>
								</div>
								<style>
.card-body-icon:hover {
	transition: all .5s ease-in-out;
	transform: scale(1.5);
}
</style>
								<div class="mr-5">13 Donated</div>
							</div>
							<a class="card-footer text-white clearfix small z-1" href="{{url('/admin/item/donated')}}">
								<span class="float-left">Show all items</span> <span
								class="float-right"> <i class="fas fa-angle-right"></i>
							</span>
							</a>
						</div>
					</div>
				</div>

                    <!-- Area Chart Example-->
                    <!-- <div class="card mb-3">
                        <div class="card-header">
                            <i class="fas fa-chart-area"></i>
                            Area Chart Example</div>
                        <div class="card-body">
                            <canvas id="myAreaChart" width="100%" height="30"></canvas>
                        </div>
                        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                    </div> -->

                    <!-- DataTables Example -->
                    <div class="row">
                        <div class="col-xl-3 col-sm-6 mb-3">
                           
                        </div>
                        <div class="col-xl-6 col-sm-6 mb-6">
                            <div class="card mb-3">
                                <div class="card-header">
                                    <i class="fas fa-table"></i>
                                    Edit User
                                </div>
                                <form action="" style="margin-left: 20px; margin-right: 20px; margin-bottom: 20px; margin-top: 10px;">
                                    
                                    <div class="form-group">
                                            <label for="inputStorageID">User ID</label>
                                            <input type="text" class="form-control" id="user" placeholder="user Id" required readonly>
                                        </div>
                                   
                                        <div class="form-group">
                                        <label for="inputAddress2">Email</label>
                                        <input type="email" class="form-control" id="email" placeholder="Email" required>
                                    </div>
                                    <div class="form-group ">
                                            <label for="inputLocation">Hotel</label>
                                            
                                                
                                                <select class="form-control" id="HotelSelect">
                                                    <option>Hilton One</option>
                                                    <option>Hilton Next</option>
                                                    <option>Hilton Main</option>
                                                    
                                                </select>
                                            
                                        </div>
                                    <div class="form-group">
                                        <label for="inputLocation">Depratment</label>
                                            
                                                
                                                <select class="form-control" id="DepratmentSelect">
                                                    <option>AYS</option>
                                                    <option>Banguet</option>
                                                    <option>Finance</option>
                                                    <option>Guest Services</option>
                                                    <option>Room Reservation</option>
                                                </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAddress2"> Password</label>
                                        <input type="password" class="form-control" id="password" placeholder="Password" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAddress2">Confirm Password</label>
                                        <input type="password" class="form-control" id="C-password" placeholder="Confirm Password" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputState">User Type</label>
                                            <select id="inputState" class="form-control" required>
                                                <option  value="" selected>Choose...</option>
                                                <option value="Admin">Admin</option>
                                                <option value="Standard">Standard user</option>
                                            </select>
                                    </div>
                                   
	
	<div class="toggle">
		<input type="radio" name="Action" value="Active" id="ActionActive" checked="checked" />
		<label for="ActionActive">Active</label>
		<input type="radio" name="Action" value="Disable" id="ActionDisable" />
		<label for="ActionDisable">Disable</label>
	</div>
	
                         <style>
								/* TOGGLE STYLING */
								.toggle {
								  margin: 0 0 1.5rem;
								  box-sizing: border-box;
								  font-size: 0;
								  display: flex;
								  flex-flow: row nowrap;
								  justify-content: flex-start;
								  align-items: stretch;
								}
								.toggle input {
								  width: 0;
								  height: 0;
								  position: absolute;
								  left: -9999px;
								}
								.toggle input + label {
								  margin: 0;
								  padding: .75rem 2rem;
								  box-sizing: border-box;
								  position: relative;
								  display: inline-block;
								  border: solid 1px #DDD;
								  background-color: #FFF;
								  font-size: 1rem;
								  line-height: 100%;
								  font-weight: 60;
								  text-align: center;
								  box-shadow: 0 0 0 rgba(255, 255, 255, 0);
								  transition: border-color .15s ease-out,  color .25s ease-out,  background-color .15s ease-out, box-shadow .15s ease-out;
								  /* ADD THESE PROPERTIES TO SWITCH FROM AUTO WIDTH TO FULL WIDTH */
								  /*flex: 0 0 50%; display: flex; justify-content: center; align-items: center;*/
								  /* ----- */
								}
								.toggle input + label:first-of-type {
								  border-radius: 6px 0 0 6px;
								  border-right: none;
								}
								.toggle input + label:last-of-type {
								  border-radius: 0 6px 6px 0;
								  border-left: none;
								}
								.toggle input:hover + label {
								  border-color: #213140;
								}
								.toggle input:checked + label {
								  background-color: #4B9DEA;
								  color: #FFF;
								  box-shadow: 0 0 10px rgba(102, 179, 251, 0.5);
								  border-color: #4B9DEA;
								  z-index: 1;
								}
								.toggle input:focus + label {
								  outline: dotted 1px #CCC;
								  outline-offset: .45rem;
								}
								@media (max-width: 800px) {
								  .toggle input + label {
								    padding: .75rem .25rem;
								    flex: 0 0 50%;
								    display: flex;
								    justify-content: center;
								    align-items: center;
								  }
								}
                         </style>
                			
                                    
                                    
                                    
                                    <button type="submit" class="btn btn-primary">Save Changers</button>
                                </form>

                                <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 mb-3">
                           
                        </div>


                    </div>
                    <!-- /.container-fluid -->

                    @include('/admin/partials/footer')