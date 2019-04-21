   
<?php  
require_once '../connection.php';
require_once 'session.php' ; 
require_once 'top-header.php' ;
require_once 'sidebar.php';
?>

<div class="main-content">
<?php require_once 'success-error-alert.php'?>
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                    <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong><i class="fas fa-plus"></i> Add Product</strong>
                            <a href="product-list.php" class="btn btn-primary btn-md right-button">
                              <i class="fas fa-arrow-left"> </i>   Back
                            </a>
                        </div>
                        <form action="logic.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                        <div class="card-body card-block">
                                <div class="row form-group">
                                     <div class="col col-md-3">
                                        <label for="text-input" class=" form-control-label">category</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <select  id="text-input" name="category_id" placeholder="Text" class="form-control">
                                            <option>Select Category</option>
                                             <?php 
                                                $query = "SELECT * from categories ";
                                                $result = $conn->query($query);
                                                if($result->num_rows > 0){
                                                    $i = 1;
                                                    while ($value = $result->fetch_assoc()) {

                                                        ?>

                                                        <option value="<?php  echo $value['id'] ?>">
                                                        <?php  echo $value['name'] ?>  </option>
                                           <?php
                                                    } 
                                                }
                                       ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="row form-group"> 
                                    <div class="col col-md-3">
                                        <label for="text-input" class=" form-control-label">Name</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="text-input" name="name" placeholder="Text" class="form-control">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="textarea-input" class=" form-control-label">Description</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <textarea name="description" id="textarea-input" rows="9" placeholder="Content..." class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="textarea-input" class=" form-control-label">Price</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input name="price" id="textarea-input" rows="9"  class="form-control">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="textarea-input" class=" form-control-label">Quantity</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input name="quantity" id="textarea-input" rows="9" placeholder="i.e 21" class="form-control">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="file-multiple-input" class=" form-control-label">Picture</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="file" id="file-multiple-input" name="filetoupload"  class="form-control-file">
                                    </div>
                                </div>
                            
                        </div>
                        <div class="card-footer">
                            <button name="product_submit" type="submit" class="btn btn-primary btn-md right-button">
                                <i class="fa fa-dot-circle-o"></i> <b>Submit</b>
                            </button>
                            <button type="reset" class="btn btn-danger btn-md right-button">
                                <i class="fa fa-ban"></i>  <b>Reset</b>
                            </button>
                        </div>
                    </form>
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