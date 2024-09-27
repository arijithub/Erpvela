    @extends('layouts.LayoutMaster')
       @section('content')
       <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Products</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <h2>View Products</h2>
      <br><br>
        <!-- /#page-wrapper -->
        <div class="panel panel-default">
                        <div class="panel-heading">
          View Products
                            
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body" style="overflow-x:scroll">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Sl no.</th>
                                        <th>Brand</th>
                                        <th>Spec1</th>
                                        <th>Spec2</th>
                                         <th>Spec3</th>
                                        <th>Type</th>
                                        <th>Product</th>
                                        <th>HSN/SAC</th>
                                        <th>Product full name</th>
                                        <th>Model</th>
                                        <th>Unit</th>
                                        <th>Warranty</th>
                                        <th>Purchase Price</th>
                                        <th>Selling Price</th>
                                        <th>GST %</th>
                                        <th>Total Price</th>
                                        <th>Action</th>
                                        <!--<th>Status</th>
                                        <th>Action</th>-->
                                    </tr>
                                </thead>
                                <tbody>
                                 <?php 
                                  $p=1;
                                 foreach ($users as $user) { ?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $p++; ?></td>
                                        <td><?php echo $user->brand; ?></td>
                                        <td><?php echo $user->spec1; ?></td>
                                        <td><?php echo $user->spec2; ?></td>
                                        <td><?php echo $user->spec3; ?></td>
                                        <td><?php echo $user->type; ?></td>
                                        <td><?php echo $user->product; ?></td>
                                         <td><?php echo $user->hsn; ?></td>
                                        <td><?php echo $user->product_full_name; ?></td>
                                        <td><?php echo $user->model; ?></td>
                                        <td><?php echo $user->unit; ?></td>
                                        <td><?php echo $user->warranty; ?></td>
                                        <td><?php echo $user->purchase_price; ?></td>
                                        <td><?php echo $user->selling_price; ?></td>
                                        <td><?php
                                           $gst=filter_var($user->gst, FILTER_SANITIZE_NUMBER_INT);
                                         echo $gst; ?></td>
                                        <td><?php echo $user->totprice; ?></td>
                                      <td class="center"><a href="/editnew/<?php echo $user->pid; ?>"><i class="fa fa-pencil-square-o"></i></a>|<a href="/ndel/<?php echo $user->pid; ?>" onclick="return confirm('Do you want to delete?');"><i class="fa fa-trash-o"></i></a></td>
                                       
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                           
                        </div>
                        <!-- /.panel-body -->
                    </div>

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    @stop
    
