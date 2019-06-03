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
                        <li class="breadcrumb-item active">Overview</li>
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
                    <div class="card mb-3">
                        <div class="card-header">
                            <i class="fas fa-tags"></i>
                            Found Items</div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-sm" id="dataTable" width="100%" cellspacing="0">
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
                                    <tfoot>
                                        <tr>
                                            <th>Ref#</th>
                                            <th>Date</th>
                                            <th>Item</th>
                                            <th>Hotel</th>
                                            <th>Location</th>
                                            <th>Status</th>
                                            
                                            <th>More</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>01</td>
                                            <td>2011/04/25</td>
                                            <td>iPhone 6</td>
                                            <td>Room-555</td>
                                            <td>Hotel_001</td>

                                            <td><span class="badge badge-warning">Pending</span></td>
                                            
                                            <td><button class="btn btn-secondary btn-sm " data-toggle="modal" data-target="#exampleModalCenter">View</button> <button type="button" class="btn btn-primary btn-sm"><a href="Item_edit.html" style="text-decoration: none; color: #fff;"><i class="far fa-edit"></i> Edit</a></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>02</td>
                                            <td>2011/07/25</td>
                                            <td>iPhone 8+</td>
                                            <td>LOBBY 30TH FLOOR</td>
                                            <td>Hotel_002</td>

                                            <td><span class="badge badge-warning">Pending</span></td>
                                            
                                            <td><button class="btn btn-secondary btn-sm " data-toggle="modal" data-target="#exampleModalCenter">View</button> <button type="button" class="btn btn-primary btn-sm"><a href="Item_edit.html" style="text-decoration: none; color: #fff;"><i class="far fa-edit"></i> Edit</a></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>03</td>
                                            <td>2009/01/12</td>
                                            <td>volet purse</td>
                                            <td>Room-045</td>
                                            <td>Hotel_001</td>

                                            <td><span class="badge badge-warning">Pending</span></td>
                                            
                                            <td><button class="btn btn-secondary btn-sm " data-toggle="modal" data-target="#exampleModalCenter">View</button> <button type="button" class="btn btn-primary btn-sm"><a href="Item_edit.html" style="text-decoration: none; color: #fff;"><i class="far fa-edit"></i> Edit</a></button></td>
                                        </tr>
                                        <tr>
                                            <td>04</td>
                                            <td>2012/03/29</td>
                                            <td>head Phone</td>
                                            <td>Room-001</td>
                                            <td>Hotel_001</td>

                                            <td><span class="badge badge-warning">Pending</span></td>
                                            
                                            <td><button class="btn btn-secondary btn-sm " data-toggle="modal" data-target="#exampleModalCenter">View</button> <button type="button" class="btn btn-primary btn-sm"><a href="Item_edit.html" style="text-decoration: none; color: #fff;"><i class="far fa-edit"></i> Edit</a></button></td>
                                        </tr>
                                        <tr>
                                            <td>05</td>
                                            <td>2008/11/28</td>
                                            <td>Camera DSLR</td>
                                            <td>Room-032</td>
                                            <td>Hotel_002</td>

                                            <td><span class="badge badge-warning">Pending</span></td>
                                            
                                            <td><button class="btn btn-secondary btn-sm " data-toggle="modal" data-target="#exampleModalCenter">View</button> <button type="button" class="btn btn-primary btn-sm"><a href="Item_edit.html" style="text-decoration: none; color: #fff;"><i class="far fa-edit"></i> Edit</a></button></td>
                                        </tr>
                                        <tr>
                                            <td>06</td>
                                            <td>2012/12/02</td>
                                            <td>Camera Digital</td>
                                            <td>LOBBY 3TH FLOOR</td>
                                            <td>Hotel_001</td>

                                            <td><span class="badge badge-warning">Pending</span></td>
                                            
                                            <td><button class="btn btn-secondary btn-sm " data-toggle="modal" data-target="#exampleModalCenter">View</button> <button type="button" class="btn btn-primary btn-sm"><a href="Item_edit.html" style="text-decoration: none; color: #fff;"><i class="far fa-edit"></i> Edit</a></button></td>
                                        </tr>
                                        <tr>
                                            <td>07</td>
                                            <td>2012/08/06</td>
                                            <td>Pan Driver</td>
                                            <td>Room-041</td>
                                            <td>Hotel_002</td>

                                            <td><span class="badge badge-warning">Pending</span></td>
                                            
                                            <td><button class="btn btn-secondary btn-sm " data-toggle="modal" data-target="#exampleModalCenter">View</button> <button type="button" class="btn btn-primary btn-sm"><a href="Item_edit.html" style="text-decoration: none; color: #fff;"><i class="far fa-edit"></i> Edit</a></button></td>
                                        </tr>
                                        <tr>
                                            <td>08</td>
                                            <td>2010/10/14</td>
                                            <td>Vehical Key</td>
                                            <td>LOBBY 30TH FLOOR</td>
                                            <td>Hotel_002</td>

                                            <td><span class="badge badge-warning">Pending</span></td>
                                            
                                            <td><button class="btn btn-secondary btn-sm " data-toggle="modal" data-target="#exampleModalCenter">View</button> <button type="button" class="btn btn-primary btn-sm"><a href="Item_edit.html" style="text-decoration: none; color: #fff;"><i class="far fa-edit"></i> Edit</a></button></td>
                                        </tr>
                                        <tr>
                                            <td>09</td>
                                            <td>2009/09/15</td>
                                            <td>Baby Toys pack</td>
                                            <td>Room-001</td>
                                            <td>Hotel_002</td>

                                            <td><span class="badge badge-warning">Pending</span></td>
                                           
                                            <td><button class="btn btn-secondary btn-sm " data-toggle="modal" data-target="#exampleModalCenter">View</button> <button type="button" class="btn btn-primary btn-sm"><a href="Item_edit.html" style="text-decoration: none; color: #fff;"><i class="far fa-edit"></i> Edit</a></button></td>
                                        </tr>
                                        <tr>
                                            <td>10</td>
                                            <td>2008/12/13</td>
                                            <td>Ring</td>
                                            <td>Room-445</td>
                                            <td>Hotel_001</td>

                                            <td><span class="badge badge-warning">Pending</span></td>
                                            
                                            <td><button class="btn btn-secondary btn-sm " data-toggle="modal" data-target="#exampleModalCenter">View</button> <button type="button" class="btn btn-primary btn-sm"><a href="Item_edit.html" style="text-decoration: none; color: #fff;"><i class="far fa-edit"></i> Edit</a></button></td>
                                        </tr>
                                        <tr>
                                            <td>11</td>
                                            <td>2008/12/19</td>
                                            <td>Key</td>
                                            <td>BOA LOUNGE & CLUB</td>
                                            <td>Hotel_002</td>

                                            <td><span class="badge badge-warning">Pending</span></td>
                                           
                                            <td><button class="btn btn-secondary btn-sm " data-toggle="modal" data-target="#exampleModalCenter">View</button> <button type="button" class="btn btn-primary btn-sm"><a href="Item_edit.html" style="text-decoration: none; color: #fff;"><i class="far fa-edit"></i> Edit</a></button></td>
                                        </tr>
                                        <tr>
                                            <td>12</td>
                                            <td>2013/03/03</td>
                                            <td>Ring</td>
                                            <td>BOA LOUNGE & CLUB</td>
                                            <td>Hotel_001</td>

                                            <td><span class="badge badge-warning">Pending</span></td>
                                            
                                            <td><button class="btn btn-secondary btn-sm " data-toggle="modal" data-target="#exampleModalCenter">View</button> <button type="button" class="btn btn-primary btn-sm"><a href="Item_edit.html" style="text-decoration: none; color: #fff;"><i class="far fa-edit"></i> Edit</a></button></td>
                                        </tr>
                                        <tr>
                                            <td>13</td>
                                            <td>2008/10/16</td>
                                            <td>Ring</td>
                                            <td>CLUB</td>
                                            <td>Hotel_002</td>

                                            <td><span class="badge badge-warning">Pending</span></td>
                                            
                                            <td><button class="btn btn-secondary btn-sm " data-toggle="modal" data-target="#exampleModalCenter">View</button> <button type="button" class="btn btn-primary btn-sm"><a href="Item_edit.html" style="text-decoration: none; color: #fff;"><i class="far fa-edit"></i> Edit</a></button></td>
                                        </tr>
                                        <tr>
                                            <td>14</td>
                                            <td>2012/12/18</td>
                                            <td>Ring</td>
                                            <td>Room-001</td>
                                            <td>Hotel_002</td>

                                            <td><span class="badge badge-warning">Pending</span></td>
                                            
                                            <td><button class="btn btn-secondary btn-sm " data-toggle="modal" data-target="#exampleModalCenter">View</button> <button type="button" class="btn btn-primary btn-sm"><a href="Item_edit.html" style="text-decoration: none; color: #fff;"><i class="far fa-edit"></i> Edit</a></button></td>
                                        </tr>
                                        <tr>
                                            <td>15</td>
                                            <td>2010/03/17</td>
                                            <td>selfie stick</td>
                                            <td>CLUB</td>
                                            <td>Hotel_002</td>

                                            <td><span class="badge badge-warning">Pending</span></td>
                                            
                                            <td><button class="btn btn-secondary btn-sm " data-toggle="modal" data-target="#exampleModalCenter">View</button> <button type="button" class="btn btn-primary btn-sm"><a href="Item_edit.html" style="text-decoration: none; color: #fff;"><i class="far fa-edit"></i> Edit</a></button></td>
                                        </tr>
                                        <tr>
                                            <td>16</td>
                                            <td>2012/11/27</td>
                                            <td>Laptop</td>
                                            <td>CLUB</td>
                                            <td>Hotel_002</td>

                                            <td><span class="badge badge-warning">Pending</span></td>
                                            
                                            <td><button class="btn btn-secondary btn-sm " data-toggle="modal" data-target="#exampleModalCenter">View</button> <button type="button" class="btn btn-primary btn-sm"><a href="Item_edit.html" style="text-decoration: none; color: #fff;"><i class="far fa-edit"></i> Edit</a></button></td>
                                        </tr>
                                        <tr>
                                            <td>17</td>
                                            <td>2010/06/09</td>
                                            <td>Key</td>
                                            <td>Room-001</td>
                                            <td>Hotel_002</td>

                                            <td><span class="badge badge-warning">Pending</span></td>
                                            
                                            <td><button class="btn btn-secondary btn-sm " data-toggle="modal" data-target="#exampleModalCenter">View</button> <button type="button" class="btn btn-primary btn-sm"><a href="Item_edit.html" style="text-decoration: none; color: #fff;"><i class="far fa-edit"></i> Edit</a></button></td>
                                        </tr>
                                        <tr>
                                            <td>18</td>
                                            <td>2009/04/10</td>
                                            <td>Samsung Phone</td>
                                            <td>Room-001</td>
                                            <td>Hotel_001</td>

                                            <td><span class="badge badge-warning">Pending</span></td>
                                            
                                            <td><button class="btn btn-secondary btn-sm " data-toggle="modal" data-target="#exampleModalCenter">View</button> <button type="button" class="btn btn-primary btn-sm"><a href="Item_edit.html" style="text-decoration: none; color: #fff;"><i class="far fa-edit"></i> Edit</a></button></td>
                                        </tr>
                                        <tr>
                                            <td>19</td>
                                            <td>2012/10/13</td>
                                            <td>Laptop</td>
                                            <td>Room-001</td>
                                            <td>Hotel_002</td>

                                            <td><span class="badge badge-warning">Pending</span></td>
                                            
                                            <td><button class="btn btn-secondary btn-sm " data-toggle="modal" data-target="#exampleModalCenter">View</button> <button type="button" class="btn btn-primary btn-sm"><a href="Item_edit.html" style="text-decoration: none; color: #fff;"><i class="far fa-edit"></i> Edit</a></button></td>
                                        </tr>
                                        <tr>
                                            <td>20</td>
                                            <td>2012/09/26</td>
                                            <td>Nokia Phone</td>
                                            <td>Room-001</td>
                                            <td>Hotel_001</td>

                                            <td><span class="badge badge-warning">Pending</span></td>
                                            
                                            <td><button class="btn btn-secondary btn-sm " data-toggle="modal" data-target="#exampleModalCenter">View</button> <button type="button" class="btn btn-primary btn-sm"><a href="Item_edit.html" style="text-decoration: none; color: #fff;"><i class="far fa-edit"></i> Edit</a></button></td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                    </div>

                </div>
                <!-- /.container-fluid -->

                @include('/admin/partials/footer')