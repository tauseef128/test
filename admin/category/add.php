 
    <?php 
        require_once  '../session.php';
        require_once '../top-header.php';
        require_once  '../header.php';
    ?>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            
        <?php 
            require_once '../sidebar.php';
        ?>
            
            <!-- // current file content  -->
            <aside class="right-side">
                <section class="content">
                    <div class="row">
                       <div class="col-md-12">
                            <!-- general form elements disabled -->
                            <div class="box box-warning">
                                <div class="box-header">
                                    <h3 class="box-title">Add Category</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                    <form role="form">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" class="form-control" placeholder="Enter ..."/>
                                        </div>

                                        <!-- textarea -->
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                                        </div>

                                        <div class="form-group">
                                           <button style="float: right;margin-bottom: 20px !important;" class="btn btn-primary ">Submit</button>
                                        </div>


                                    </form>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                    </div>   <!-- /.row -->
                </section>
            </aside>
           
            
        </div>

       <?php require_once '../footer.php'?>

