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
	<a class="scroll-to-top rounded" href="#page-top"> <i
		class="fas fa-angle-up"></i>
	</a>

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
					<a class="btn btn-primary btn-sm" href="{{url('admin/login')}}">Logout</a>
				</div>
			</div>
		</div>
	</div>
	<!-- View model -->

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

</body>
</html>