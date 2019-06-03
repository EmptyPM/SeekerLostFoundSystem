@include('/admin/partials/header')
@include('/admin/partials/nav')
@include('/admin/partials/sidebar')
		<div id="content-wrapper">

			<div class="container-fluid">

				<!-- Breadcrumbs-->
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Dashboard</a></li>
					<li class="breadcrumb-item active">Item-Edit</li>
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
					<div class="col-xl-12 col-sm-12 col-mb-12 col-xs-12">
						<div class="card col-mb-3">


							<div class="card-body">czc</div>




						</div>
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-xl-6 col-sm-6 mb-6" style="margin-top: 1%; margin-bottom: 1%;">
						<div class="card col-mb-3" style=" margin-bottom: 1%;">
							<div class="card-header">
								<i class="fas fa-cubes"></i> Item Details
							</div>

							<div class="card-body">
								<h6></h6>

							</div>




						</div>
						
						<div class="card col-mb-3" style="margin-top: 1%; margin-bottom: 1%;">
							<div class="card-header">
								<i class="far fa-check-square"></i> Action
							</div>

							<div class="card-body">
								<button type="button" class="btn btn-warning" style="margin-top: 1%; margin-bottom: 1%;"><i class="fas fa-tasks"></i> Pending</button>
								<button type="button" class="btn btn-success" style="margin-top: 1%; margin-bottom: 1%;"><i class="fas fa-exchange-alt"></i> Mark as returned</button>
								<button type="button" class="btn btn-secondary" style="margin-top: 1%; margin-bottom: 1%;"><i class="fas fa-dice-d6"></i> Void</button>
								<button type="button" class="btn btn-danger" style="margin-top: 1%; margin-bottom: 1%;"><i class="fas fa-gift"></i> Donated</button>
								

							</div>




						</div>
						<div class="card col-mb-3" style="margin-top: 1%; margin-bottom: 1%;">
							<div class="card-header">
								<i class="fas fa-user-tie"></i> Owner Details
							</div>

							
								<form action=""
								style="margin-left: 20px; margin-right: 20px; margin-bottom: 20px; margin-top: 10px;">
								<div class="form-group">
                                        <label for="inputAddress">Owner Name</label>
                                        <input type="text" class="form-control" id="E_id" placeholder="Owner Name" required >
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAddress">Email</label>
                                        <input type="Email" class="form-control" id="E_id" placeholder="Email" required >
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAddress">Contact Number</label>
                                        <input type="text" class="form-control" id="E_id" placeholder="+94" required >
                                    </div>
                                    
                                    <button type="submit" class="btn btn-primary"><i class="far fa-edit"></i> Save</button>
								
								
								</form>
								

							




						</div>
					</div>

					<div class="col-xl-6 col-sm-6 mb-6" style="margin-top: 1%; margin-bottom: 1%;">
						<div class="card mb-3">
							<div class="card-header">
								<i class="far fa-edit"></i> Edit Item Details
							</div>
							<form action=""
								style="margin-left: 20px; margin-right: 20px; margin-bottom: 20px; margin-top: 10px;">


								<div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Ref #</label>
                                            <input type="text" class="form-control" id="fname" placeholder="Id" required readonly>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">Date</label><br>
                                            <input  id="date" class="form-control" name="date" required readonly/>


                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAddress">Item Name</label>
                                        <input type="text" class="form-control" id="E_id" placeholder="Item Name" required >
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputLocation">Item Category </label>
                                            
                                                
                                                <select class="form-control" id="ICategory">
                                                    <option>Jewellery</option>
                                                    <option>Electronic Item</option>
                                                    <option>Keys</option>
                                                    <option>Wallet/Purse</option>
                                                    <option>Clothing</option>
                                                </select>
                                            
                                        </div>
                                        <div class="form-group col-md-5">
                                            


                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAddress2">Item Description</label>
                                        <textarea class="form-control" rows="5" id="comment"></textarea>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputLocation">Hotel</label>
                                            
                                                
                                                <select class="form-control" id="HotelSelect">
                                                    <option>Hilton One</option>
                                                    <option>Hilton Next</option>
                                                    <option>Hilton Main</option>
                                                    
                                                </select>
                                            
                                        </div>
                                        <div class="form-group col-md-6">
                                            


                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputLocation">Location</label>
                                            
                                                
                                                <select class="form-control" id="LocationSelect">
                                                    <option>LOBBY</option>
                                                    <option>AL JOUD BALLROOM</option>
                                                    <option>BABIOLE</option>
                                                    <option>ROSE & CROWN</option>
                                                    <option>ROOM</option>
                                                </select>
                                            
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">Room Number</label><br>
                                            <input type="number" class="form-control" id="Room_No" placeholder="Room Number" required readonly >


                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputAddress2"> Handover by </label>
                                            <input type="text" class="form-control" id="Handover_By" placeholder="Employee ID" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputLocation">Depratment</label>
                                            
                                                
                                                <select class="form-control" id="DepratmentSelect">
                                                    <option>AYS</option>
                                                    <option>Banguet</option>
                                                    <option>Finance</option>
                                                    <option>Guest Services</option>
                                                    <option>Room Reservation</option>
                                                </select>


                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="inputAddress2">Received by</label>
                                        <input type="text" class="form-control" id="received_by" placeholder="Employee ID" required>
                                    </div>
                                    <div class="form-group ">
                                            <label for="inputLocation">Storage Loaction</label>
                                            
                                                
                                                <select class="form-control" id="StorageSelect">
                                                    <option>AYS</option>
                                                    <option>Banguet</option>
                                                    <option>Finance</option>
                                                    <option>Guest Services</option>
                                                    <option>Room Reservation</option>
                                                </select>


                                        </div>
                                    <div class="form-group">
                                        <label for="inputState">Remark</label>
                                        <textarea class="form-control" rows="5" id="comment"></textarea>
                                    </div>




								<button type="submit" class="btn btn-primary"><i class="far fa-edit"></i> Update</button>
							</form>

							<div class="card-footer small text-muted">Updated yesterday
								at 11:59 PM</div>
						</div>
					</div>


				</div>
				<!-- /.container-fluid -->

				@include('/admin/partials/footer')