 <?php 
               if( isset($_SESSION['success']) &&  $_SESSION['success'] == true ) {
                     ?>

                        <div class="alert alert-success alert-dismissible fade show offset-md-2 col-md-6" role="alert">
                            <strong>Success!</strong>  <?php echo $_SESSION['message'] ;?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <?php  
                            $_SESSION['success'] = false;
                        ?>
                <?php  }else if( isset($_SESSION['error']) &&  $_SESSION['error'] == true){  ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Success!</strong>  <?php echo $_SESSION['message'] ;?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                            <?php  
                                $_SESSION['success'] = false;
 } 
 ?>