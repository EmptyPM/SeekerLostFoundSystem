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
                        
                        <li class="breadcrumb-item active">Manage</li>
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
                    <hr>
                    <div class="row">
                        <div class="col-xl-3 col-sm-6 mb-3">
                            <div class="card  o-hidden h-100">
                                <div class="card-body">
                                   
                                    <div class="mr-5" ><h4  ><a href="{{url('/admin/locations/locations')}}" style="color: #000; text-decoration: none;"><i class="fas fa-map-marker-alt"></i> Locations</a></h4></div>
                                </div>
                                <a class="card-footer clearfix small z-1" >
                                    <span class="float-left" style="color: #000;">Add and edit locations for places in your hotel and /or premises, where items maybe lost or found</span>
                                    
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 mb-3">
                            <div class="card  o-hidden h-100">
                                <div class="card-body">
                                   
                                    <div class="mr-5" ><h4  ><a href="{{url('/admin/storage/storagelocations')}}" style="color: #000; text-decoration: none;"><i class="fas fa-archive"></i> Storages</a></h4></div>
                                </div>
                                <a class="card-footer clearfix small z-1" >
                                    <span class="float-left" style="color: #000;">Add and edit storage locations for each place or container, where you could store found items</span>
                                    
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 mb-3">
                            <div class="card  o-hidden h-100">
                                <div class="card-body">
                                   
                                    <div class="mr-5" ><h4  ><a href="{{url('/admin/department/department')}}" style="color: #000; text-decoration: none;"><i class="fas fa-building"></i> Department</a></h4></div>
                                </div>
                                <a class="card-footer clearfix small z-1" >
                                    <span class="float-left" style="color: #000;">Add and edit department for places in your hotel and /or premises,handover employee department</span>
                                    
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 mb-3">
                            <div class="card  o-hidden h-100">
                                <div class="card-body">
                                   
                                    <div class="mr-5" ><h4  ><a href="{{url('/admin/category/category')}}" style="color: #000; text-decoration: none;"><i class="fas fa-sitemap"></i> Categories</a></h4></div>
                                </div>
                                <a class="card-footer clearfix small z-1" >
                                    <span class="float-left" style="color: #000;">Add and edit categories for item type lost or found at your hotel or premises</span>
                                    
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 col-sm-6 mb-3">
                            <div class="card  o-hidden h-100">
                                <div class="card-body">
                                   
                                    <div class="mr-5" ><h4  ><a href="{{url('/admin/user/users_edit')}}" style="color: #000; text-decoration: none;"><i class="fas fa-users"></i> Users</a></h4></div>
                                </div>
                                <a class="card-footer clearfix small z-1" >
                                    <span class="float-left" style="color: #000;">Add and edit theam members who need access to mange your lost and found System</span>
                                    
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 mb-3">
                            
                        </div>
                        <div class="col-xl-3 col-sm-6 mb-3">
                            
                        </div>
                        <div class="col-xl-3 col-sm-6 mb-3">
                            
                        </div>
                    </div>
                    
                    <hr>

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

                    <!-- 
                    <div class="row">
                        <div class="col-xl-3 col-sm-6 mb-3">
                           
                        </div>
                        <div class="col-xl-6 col-sm-6 mb-6">
                            <div class="card mb-3">
                                <div class="card-header">
                                    <i class="fas fa-table"></i>
                                    Edit Location
                                </div>
                                <form action="" style="margin-left: 20px; margin-right: 20px; margin-bottom: 20px; margin-top: 10px;">
                                    
                                    
                                   <div class="form-group">
                                            <label for="Name">Name</label>
                                            <input type="text" class="form-control" id="SName" placeholder="Location Name" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="Description">Description</label>
                                            <textarea class="form-control" rows="5" id="Description" required></textarea>
                                        </div>
                                    
                                    
                                    
                                    <button type="submit" class="btn btn-primary">Save Changers</button>
                                </form>

                                <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 mb-3">
                           
                        </div>


                    </div> -->
                    <!-- /.container-fluid -->

                    @include('/admin/partials/footer')