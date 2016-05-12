<!DOCTYPE html>
<html lang="en">
<?php include "header.php" ?>

<body>
	<div class="container">
		<div class="well well-sm" style="background-color:#ebebe0;">
			<div class="row">
				<div class="col-sm-2">
					<button type="button" class="btn btn-warning btn-md btn-block" data-toggle="modal" data-target="#myModal1">Area</button>
						<!-- Modal 1 -->
						<div class="modal fade" id="myModal1" role="dialog">
							<div class="modal-dialog modal-lg">
							  <div class="modal-content">
							    <div class="modal-header">
							      <button type="button" class="close" data-dismiss="modal">&times;</button>
							      <h4 class="modal-title">Select Area</h4>
							    </div>
							    
							    <div class="modal-body">
							    	<div class="row">
							    		<div class="col-sm-6">
							              <p>Select District</p>
							              <!-- District here -->
							              <button type="button" class="btn btn-default btn-block">Matara</button>
							              <button type="button" class="btn btn-default btn-block">Galle</button>
							              <button type="button" class="btn btn-default btn-block">Hambantota</button>
							              <button type="button" class="btn btn-default btn-block">Colombo</button>
							              <button type="button" class="btn btn-default btn-block">Kaluthara</button>
							              <button type="button" class="btn btn-default btn-block">Rathnapura</button>
							    		</div>
							    		<div class="col-sm-6">
							    			dfdsfsdfdf
							    		</div>	   
							      </div>
							  </div>
							    <div class="modal-footer">
							      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							    </div>
							  </div>
							</div>
						</div>
				</div>	
				<div class="col-sm-2">
					<button type="button" class="btn btn-warning btn-md btn-block" data-toggle="modal" data-target="#myModal2">Category</button>
						<!-- Modal 2 -->
						<div class="modal fade" id="myModal2" role="dialog">
							<div class="modal-dialog modal-lg">
							  <div class="modal-content">
							    <div class="modal-header">
							      <button type="button" class="close" data-dismiss="modal">&times;</button>
							      <h4 class="modal-title">Modal Header</h4>
							    </div>
							    <div class="modal-body">
							      <p>This is a large modal.</p>
							      <!-- District here -->
							      <button type="button" class="btn btn-default btn-block">Computers</button>
							      <button type="button" class="btn btn-default btn-block">Houses</button>
							      <button type="button" class="btn btn-default btn-block">Vehicles</button>
							      <button type="button" class="btn btn-default btn-block">Lands</button>
							      <button type="button" class="btn btn-default btn-block">Electronics</button>
							    </div>
							    <div class="modal-footer">
							      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							    </div>
							  </div>
							</div>
						</div>
				</div>
				<div class="col-sm-1">
					<label class="control-label pull-left" for="price">Search Now:</label>
					
				</div>	
				<div class="col-sm-2">
					<input type="text" class="form-control pull-left" id="price" placeholder="Search..">
				</div>	
				<div class="col-sm-1">
					<label class="control-label pull-left" for="closing_date">Closing Date:</label>
				</div>	
				<div class="col-sm-2">
					<input type="date" class="form-control pull-left" id="closing_date">
				</div>	
				<div class="col-sm-2">
					<button type="submit" class="btn btn-warning btn-block">Search</button>
				</div>					
			</div>
		</div>
	</div>
	<script src="js/jquery.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>