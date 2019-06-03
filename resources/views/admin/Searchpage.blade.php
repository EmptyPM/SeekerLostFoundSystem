<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Search Items</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
	
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css" />
	<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet" type="text/css" />
	<link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
	
	
	
</head>
<body>
	<div class="container-fluid">
	<div class="row" id="header">
			<nav class="navbar navbar-inverse -top" 
				style="margin-bottom: 0px; padding-bottom: 0px;">
				
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse"
							data-target="#myNavbar">
							<span class="icon-bar"></span> <span class="icon-bar"></span> <span
								class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="{{url('/')}}">Lost & Found System</a>
					</div>
					<div class="collapse navbar-collapse" id="myNavbar">
						
						<ul class="nav navbar-nav navbar-right">
						<li><a href="{{url('/admin/searchpage')}}"><span class="glyphicon glyphicon-search"></span>
									Search</a></li>
							<li><a href="{{url('/admin/user/user_profile')}}"><span class="glyphicon glyphicon-user"></span>
									Profile</a></li>
							<li><a href="#" data-toggle="modal"
						data-target="#logoutModal"><span class="glyphicon glyphicon-log-out"></span>
									Logout</a></li>
						</ul>
					</div>
				
			</nav>
		</div>
		<div class="container">
		
		
		<div class="row" id="search" style="margin-top: 2%;">
		<form id="search-form" action="" method="POST" enctype="multipart/form-data">
			<div class="form-group col-xs-9">
				<input class="form-control" type="text" placeholder="Search" />
			</div>
			<div class="form-group col-xs-3">
				<button type="submit" class="btn btn-block btn-primary">Search</button>
			</div>
		</form>
	</div>
	
	<div class="row" id="filter">
		<form>
			<div class="form-group col-sm-6 col-md-3 col-xl-3 col-xs-12">
				<select class="selectpicker filter-type filter form-control" data-show-subtext="true" data-live-search="true">
        			<option>Category</option>
        			<option>Bill Gordon</option>
        			<option>Elizabeth Warren</option>
        			<option>Mario Flores</option>
       			 	<option>Don Young</option>
        			<option>Marvin Martinez</option>
      			</select>
			</div>
			<div class="form-group col-sm-6 col-md-3 col-xl-3 col-xs-12">
				<div class='input-group date' id='datepicker'>
          				<input type='text' class="form-control" />
          				<span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
          				</span>
          				
          				<script>
          				$(function () {
          				  $("#datepicker").datepicker({ 
          				        autoclose: true, 
          				        todayHighlight: true
          				  }).datepicker('update', new Date());
          				});
          				</script>
       			 </div>
				
			</div>
			<div class="form-group col-sm-6 col-md-3 col-xl-3 col-xs-12">
				<select class="selectpicker filter-type filter form-control" data-show-subtext="true" data-live-search="true">
        			<option>Hotel</option>
        			<option>Bill Gordon</option>
        			<option>Elizabeth Warren</option>
        			<option>Mario Flores</option>
       			 	<option>Don Young</option>
        			<option>Marvin Martinez</option>
      			</select>
        
			</div>
			<div class="form-group col-sm-6 col-md-3 col-xl-3 col-xs-12">
				<select class="selectpicker filter-type filter form-control" data-show-subtext="true" data-live-search="true">
        			<option>Location</option>
        			<option>Bill Gordon</option>
        			<option>Elizabeth Warren</option>
        			<option>Mario Flores</option>
       			 	<option>Don Young</option>
        			<option>Marvin Martinez</option>
      			</select>
			</div>
		</form>
	</div>
	<div class="row">
	<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
									<tr>
										<th>Ref#</th>
										<th>Date</th>
										<th>Item</th>
										<th>Hotel</th>
										<th>Location</th>
										<th>Status</th>

										<th>More</th>
									</tr>
								</thead>
								
								<tbody>
									<tr>
										<td>01</td>
										<td>2011/04/25</td>
										<td>iPhone 6</td>
										<td>Room-555</td>
										<td>Hotel_001</td>

										<td><label for="collaborativa_utenti_pollo"><span class="badge progress-bar-warning">Pending</span><br></label></td>

										<td><button class="btn btn-primary btn-sm " data-toggle="modal" data-target="#exampleModalCenter">View</button>
										</td>
									</tr>
									<tr>
										<td>02</td>
										<td>2011/07/25</td>
										<td>iPhone 8+</td>
										<td>LOBBY 30TH FLOOR</td>
										<td>Hotel_002</td>

										<td><label for="collaborativa_utenti_pollo"><span class="badge progress-bar-warning">Pending</span><br></label></td>

										<td><button class="btn btn-primary btn-sm " data-toggle="modal" data-target="#exampleModalCenter">View</button>
										 </td>
									</tr>
									<tr>
										<td>03</td>
										<td>2009/01/12</td>
										<td>volet purse</td>
										<td>Room-045</td>
										<td>Hotel_001</td>

										<td><label for="collaborativa_utenti_pollo"><span class="badge progress-bar-success">Returned</span><br></label></td>

										<td><button class="btn btn-primary btn-sm " data-toggle="modal" data-target="#exampleModalCenter">View</button> </td>
									</tr>
            
    </table>
    <script type="text/javascript"> 

	    $(document).ready(function() {
	        $('#example').DataTable( {
	            "paging":   false,
	            "ordering": true,
	            "info":     false,
	            
	        } );
	    } );
	    
	</script>
    </div>
    </div>
    	<!-- Logout Modal-->
	<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog"
		aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
					<button class="close" type="button" data-dismiss="modal"
						aria-label="Close">
						<span aria-hidden="true">�</span>
					</button>
				</div>
				<div class="modal-body">Select "Logout" below if you are ready
					to end your current session.</div>
				<div class="modal-footer">
					<button class="btn btn-secondary" type="button"
						data-dismiss="modal">Cancel</button>
					<a class="btn btn-primary btn-sm" href="{{url('/')}}">Logout</a>
				</div>
			</div>
		</div>
	</div>
	<!-- Modal -->
	<div class="modal fade" id="exampleModalCenter" tabindex="-1"
		role="dialog" aria-labelledby="exampleModalCenterTitle"
		aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="ItemName">IPhone 8+</h5>
					<button type="button" class="close" data-dismiss="modal"
						aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
				<div class="row">
				<div class="col-sm-6 col-md-6 col-xl-6 col-xs-12">
				<h6>Item ID: <span class="badge badge-light">I_001</span></h6>
				<h6>Name: <span class="badge badge-light">IPhone 8+</span></h6>
				<h6>Storage: <span class="badge badge-light">LP</span></h6>
				<h6>HandOver By: <span class="badge badge-light">E_00235</span></h6>
				<h6>Department: <span class="badge badge-light">Room clean</span></h6>
				</div>
				<div class="col-sm-6 col-md-6 col-xl-6 col-xs-12">
				<h6>Status: <span class="badge badge-success">Returned</span></h6>
				<h6>Date: <span class="badge badge-warning">18/04/2019</span></h6>
				<h6>Hotel: <span class="badge badge-light">Hilton</span></h6>
				<h6>Location: <span class="badge badge-light">Room-002</span></h6>
				</div>
				
				</div>
				
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary btn-sm"
						data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary btn-sm"><a href="{{url('/admin/item/item_edit')}}" style="text-decoration: none; color: #fff;"><i class="far fa-edit"></i> Edit</a></button>
				</div>
			</div>
		</div>
	</div>
	</div>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
	

	

</body>
</html>