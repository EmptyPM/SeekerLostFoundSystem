<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Admin - Dashboard</title>
        
        

        <!-- Custom fonts for this template-->
        <link href="{{URL::asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">

        <!-- Page level plugin CSS-->
        <link href="{{URL::asset('vendor/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet">

        <!-- Custom styles for this template-->
        <link href="{{URL::asset('css/sb-admin.css')}}" rel="stylesheet">
        <link href="{{URL::asset('css/datetimepiker.css')}}" rel="stylesheet">
        
        
        <script>

        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
        <!-- Don't forget to include Jquery also -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>


    </head>

    <body id="page-top">

    @include('/admin/partials/nav')
@include('/admin/partials/sidebar')

            <div id="content-wrapper">

                <div class="container-fluid">

                    <!-- Breadcrumbs-->
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="../index.html" style="text-decoration: none;">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">Add Items</li>
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

                        <div class="col-xl-6 col-sm-6 col-mb-6">
                            <div class="card mb-3">
                                <div class="card-header">
                                    <i class="fas fa-table"></i>
                                    Add Item
                                </div>
                                <form action="" style="margin-left: 20px; margin-right: 20px; margin-bottom: 20px; margin-top: 10px;">

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Ref #</label>
                                            <input type="text" class="form-control" id="fname" placeholder="Id" required readonly>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">Date</label><br>
                                            <input style="border-radius: 5px;" id="date" class="form-control" name="date" />


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


                                    <button type="submit" class="btn btn-primary">Add Item</button>
                                </form>

                                <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-sm-6 mb-3">

                        </div>

                    </div>
                    <!-- /.container-fluid -->

                    <!-- Sticky Footer -->
                    <footer class="sticky-footer">
                        <div class="container my-auto">
                            <div class="copyright text-center my-auto">
                                <span>Copyright � Your Website 2019</span>
                            </div>
                        </div>
                    </footer>

                </div>
                <!-- /.content-wrapper -->

            </div>
            <!-- /#wrapper -->

            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fas fa-angle-up"></i>
            </a>

            <!-- Logout Modal-->
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">�</span>
                            </button>
                        </div>
                        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <a class="btn btn-primary" href="../User/Login.html">Logout</a>
                        </div>
                    </div>
                </div>
                </div>
            </div>

            <!-- Bootstrap core JavaScript-->
            <script src="{{URL::asset('vendor/jquery/jquery.min.js')}}"></script>
            <script src="{{URL::asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

            <!-- Core plugin JavaScript-->
            <script src="{{URL::asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

            <!-- Page level plugin JavaScript-->
            <script src="{{URL::asset('vendor/chart.js/Chart.min.js')}}"></script>
            <script src="{{URL::asset('vendor/datatables/jquery.dataTables.js')}}"></script>
            <script src="{{URL::asset('vendor/datatables/dataTables.bootstrap4.js')}}"></script>

            <!-- Custom scripts for all pages-->
            <script src="{{URL::asset('js/sb-admin.min.js')}}"></script>

            <!-- Demo scripts for this page-->
            <script src="{{URL::asset('js/demo/datatables-demo.js')}}"></script>
            <script src="{{URL::asset('js/demo/chart-area-demo.js')}}"></script>
            
<script src="{{URL::asset('js/datetimepiker.js')}}"></script>

    </body>

</html>
