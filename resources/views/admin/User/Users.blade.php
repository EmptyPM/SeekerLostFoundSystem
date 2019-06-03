@include('/admin/partials/header')

@include('/admin/partials/nav')
@include('/admin/partials/sidebar')


            <div id="content-wrapper">

                <div class="container-fluid">

                    <!-- Breadcrumbs-->
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="../index.html">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">User</li>
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
                                    User Table 
                                </div>
                                
                                <div class="card-body">
                                
                                <div class="table-responsive">
                                <table class="table table-bordered table-sm" id="dataTable" width="100%" cellspacing="0">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>E_ID</th>
                                            <th>Email</th>
                                            
                                            <th>Type</th>
                                            <th>Active Status</th>
                                            <th>More</th>
                                            
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>E_ID</th>
                                            <th>Email</th>
                                            
                                            <th>Type</th>
                                            <th>Active Status</th>
                                            <th>More</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                   
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            
                                            
                                            <td></td>
                                            <td>
                                              
                                            </td>
                                            <td><button class="btn btn-secondary btn-sm " data-toggle="modal" data-target="#userview">View</button> <button type="button" class="btn btn-primary btn-sm"><a href="Users_edit.html" style="text-decoration: none; color: #fff;"><i class="far fa-edit"></i>Edit</a></button>
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
                                    Add New User
                                </div>
                                <form action="../employee_add_action" method="post" style="margin-left: 20px; margin-right: 20px; margin-bottom: 20px; margin-top: 10px;">
                                    
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">First Name</label>
                                            <input type="text" class="form-control" name="empFname" placeholder="First Name" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">Last Name</label>
                                            <input type="text" class="form-control" name="empLname" placeholder="Last Name" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAddress">Employee Id </label>
                                        <input type="text" class="form-control" name="empID" placeholder="Employee Id" required >
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAddress2">Email</label>
                                        <input type="email" class="form-control" name="email" placeholder="Email" required>
                                    </div>
                                     <div class="form-group ">
                                            <label for="inputLocation">Hotel</label>
                                            
                                                
                                                <select class="form-control" id="HotelSelect" name="hotelsID">
                                                <option>-- Select Hotel --</option>
                                                
                                                     
                                                    <option value=""></option>
                                                    
                                               
                                                    
                                                </select>
                                            
                                        </div>
                                    <div class="form-group">
                                        <label for="inputLocation">Depratment</label>
                                            
                                                
                                                <select class="form-control" id="DepratmentSelect" name="departmentId">
                                                    <option>-- Select Department--</option>
                                                
                                                     <%
                                               try{
                                            	   
                                            	String sql=null,depName=null,depID=null;
                                           		sql= "select * from department";
                                           		PreparedStatement ps2 = conn.prepareStatement(sql);
                                           		ResultSet r = ps2.executeQuery();
                                           		while(r.next()){
                                           			
                                           			depName= r.getString(2);
                                           			depID=r.getString(1);
                                           	
                                               %>
                                                    <option value="<%=depID%>"> <%=depName%> </option>
                                                    
                                              <%
                                           		}
												}catch( Exception e){
                                       	   
                                       	   
                                         		 }
                                              %> 
                                               
                                           		
                                                   
                                                </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAddress2"> Password</label>
                                        <input type="password" class="form-control" id="password"  placeholder="Password" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAddress2">Confirm Password</label>
                                        <input type="password" class="form-control" id="C-password" name="cPassword" placeholder="Confirm Password" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputState">User Type</label>
                                            <select id="inputState" class="form-control" required name="userType">
                                                <option >-- User TYpe --</option>
                                                      <%
                                               try{
                                            	   
                                            	String sql=null,usertype=null,UTID=null;
                                            	int deleteStatus;
                                           		sql= "select * from usertype";
                                           		PreparedStatement ps3 = conn.prepareStatement(sql);
                                           		ResultSet r = ps3.executeQuery();
                                           		while(r.next()){
                                           			deleteStatus=r.getInt(3);
                                           			if(deleteStatus==1){
                                           				usertype= r.getString(2);
                                               			UTID=r.getString(1);
                                           			
                                           			
                                           	
                                               %>
                                                    <option value="<%=UTID%>"><%=usertype%></option>
                                                    
                                               <%
                                           			}
                                           		}
													}catch( Exception e){
                                            	   
                                            	   
                                              		 }
                                                    %>
                                            </select>
                                    </div>
                                    
                                    
                                    <button type="submit" class="btn btn-primary">Create User</button>
                                </form>

                                <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                            </div>
                        </div>


                    </div>
                    <!-- /.container-fluid -->

                    @include('/admin/partials/footer')