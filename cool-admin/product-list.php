 <?php 
 require_once '../connection.php';
 require_once 'session.php' ; 
 require_once 'top-header.php' ; 
 require_once 'sidebar.php';
?>
            <!-- END HEADER DESKTOP-->
<div class="main-content">
    <div class="section__content section__content--p10">
        <div class="container-fluid">
		    <div class="row m-t-10">
		        <div class="col-md-12">
		        	<div class="card">
                        <div class="card-header">
                            <h3 class="card-heading">Product</h3>
                            <a href="product-add.php" class="btn btn-primary btn-md right-button">
                               <i class="fas fa-plus"></i> Add
                            </a>
                        </div>
                        <div class="card-body card-block">
		            <div class="table-responsive m-b-80">
		                <table class="table table-borderless " id="dtBasicExample">
		                    <thead>
		                        <tr>
		                        	<th>id</th>
		                            <th>Category</th>
		                            <th>Name</th>
		                            <th>description</th>
		                            <th>Price</th>
		                            <th>Quantity</th>
		                            <th>Action</th>
		                        </tr>
		                    </thead>
		                    <tbody>
		                        <?php
                                   $query = "SELECT p.*, c.*,c.name as category_name FROM `products` as p
												INNER JOIN categories as c 
												ON p.category_id = c.id";
										$result = $conn->query($query);
										$i = 1;
										if($result->num_rows > 0){
									    	
										    while ($value = $result->fetch_assoc()) {  ?>

											    <tr>
											    	<td>
											    		<?php echo $i++?>
											    	</td>
											    	<td>
											    		<?php echo $value['category_name'] ?>
											    	</td>
											    	<td>
											    		<?php echo $value['name'] ?>
											    	</td>
											    	<td>
											    		<?php echo $value['description']; ?>
											    	</td>
											    	<td>
											    		<?php echo $value['price'] ?>
											    	</td>
											    	<td>
											    		<?php echo $value['quantity'] ?>
											    	</td>
											    	<td>
											    		<button class="btn btn-sm btn-primary">
											    			 <i class="fa fa-trash"></i> Edit
											    		</button>

											    		<button class="btn btn-sm btn-danger" >
											    			<i class="fa fa-trash"></i> Delete
											    		</button>
											    	</td>
											    </tr>	
											    
											    <?php
													
												}
										}else{
											 echo "in else";
											}
								?>
		                    </tbody>
		                </table>
		            </div>
		        </div>
		    </div>
		 </div>
	</div>
</div>	

   <?php  require_once 'main-footer.php'?>
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

   <?php require_once 'footer.php' ?>
   <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js"></script>
   <script type="text/javascript">
   	$(document).ready(function () {
		$('#dtBasicExample').DataTable();
		$('.dataTables_length').addClass('bs-select');
	});

   </script>