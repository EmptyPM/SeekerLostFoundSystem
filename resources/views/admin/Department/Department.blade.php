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
                        <li class="breadcrumb-item active">Department</li>
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
                        <div class="col-xl-8 col-sm-6 mb-8">
                            <div class="card mb-3">
                                <div class="card-header">
                                    <i class="fas fa-table"></i>
                                    Department Table 
                                </div>
                                
                                <div class="card-body">
                                
                                <div class="table-responsive">
                                <table class="table table-bordered table-sm" id="dataTable" width="100%" cellspacing="0">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>D_ID</th>
                                            <th>Name</th>
                                            
                                            <th>Description</th>
                                            <th>Status</th>
                                            
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>D_ID</th>
                                            <th>Name</th>
                                            
                                            <th>Description</th>
                                            <th>Status</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        
                                    
                                    
                                        <tr>
                                            <td></td>
                                            <td> </td>
                                            
                                            
                                            <td>Description....</td>
                                            <td><button type="button" class="btn btn-primary btn-sm"><a href="Department_edit.html" style="text-decoration: none; color: #fff;"><i class="far fa-edit"></i>Edit</a></button>
                                              <button type="button" class="btn btn-danger btn-sm">
												<i class="fas fa-trash-alt"></i>
											</button>
                                            </td>
                                        </tr>
                                        
                                           
                                    </tbody>
                                </table>
                            </div>
                                </div>
                                

                                <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                            </div>
                        </div>
                       <div class="col-xl-4 col-sm-6 mb-4">
                            <div class="card mb-3">
                                <div class="card-header">
                                    <i class="fas fa-table"></i>
                                    Add new Department
                                </div>
                                <form action="../department_add_action" method="post" style="margin-left: 20px; margin-right: 20px; margin-bottom: 20px; margin-top: 10px;">
                                    
                                   		<div class="form-group">
                                            <label for="inputdepratmentid">Department ID</label>
                                            <input type="text" class="form-control" id="depId" name="depId" placeholder="Department Id" >
                                        </div>
                                        <div class="form-group">
                                            <label for="inputEmail4">Name</label>
                                            <input type="text" class="form-control"  id="depName"   name="depName"  placeholder="Department Name" required>
                                        </div>
                                         <div class="form-group ">
                                            <label for="inputLocation">Hotel</label>
                                            
                                                
                                                <select class="form-control"  name="hotelsName">
                                                <option > -- Select Hotel --</option>
                                               
                                                    
                                                </select>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label for="Description">Description</label>
                                            <textarea class="form-control" rows="5" id="description" id="name" required>Description..</textarea>
                                        </div>
                                    
                                   
                                    
                                    
                                    <button type="submit" class="btn btn-primary" >Add Department</button>
                                </form>

                                <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                            </div>
                        </div>


                    </div>
                    <!-- /.container-fluid -->

                    @include('/admin/partials/footer')