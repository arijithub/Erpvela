    @extends('layouts.LayoutMaster')
       @section('content')
       <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Products</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <h2>View Units</h2>
      <br><br>
        <!-- /#page-wrapper -->
        <div class="panel panel-default">
                        <div class="panel-heading">
          View Units
                            
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Sl no.</th>
                                        <th>Unit</th>
                                        
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
                                        <td><?php echo $user->unitname; ?></td>
                                       
                                       
                                      <td class="center"><a href="/editun/<?php echo $user->uid; ?>"><i class="fa fa-pencil-square-o"></i></a>|<a href="/ndell/<?php echo $user->uid; ?>" onclick="return confirm('Do you want to delete?');"><i class="fa fa-trash-o"></i></a></td>
                                       
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
    
