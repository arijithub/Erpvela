    @extends('layouts.LayoutMaster')
       @section('content')
       <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Invoice/Quotation - History</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
        
      <br><br>
        <!-- /#page-wrapper -->
        <div class="panel panel-default">
    <div class="panel-heading col-md-12">
    <div class="form-group col-md-3">
            <form name="frm" action="{{ url('/lsadd') }}" method="get" enctype="multipart/form-data">
            {{ csrf_field() }}
          <div class="topnav">
  
  <input type="text" placeholder="Search Customers" name="tsl">
</div>
</div>
<div style="padding-top:1%"></div>
<div class="form-group col-md-3">
     
  <select class="form-control" id="sel1" name="lsl">
    <option value=""></option>
    <option value="tax invoice">Tax Invoice</option>
    <option value="proforma invoice">Proforma Invoice</option>
    <option value="quotation">Quotation</option>
  </select>
    </div>
    <div class="form-group col-md-3">

        <input type="submit" class="btn btn-success" value="Find" name="sub">
    </div>

</form>
     <div class="form-group col-md-3">
     </div>
                            
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example1">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Invoice No.</th>
                                        <th>Qt</th>
                                        <th>Customer Name</th>
                                         <th>Date</th>
                                         <th>Pay Amount</th>
                                         <th>Material %</th>
                                        <th>Action</th>
                                        <!--<th>Status</th>
                                        <th>Action</th>-->
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                  $p=1;
                                  if(isset($qsers)&&!isset($listr))
                                  {
                                 foreach ($qsers as $user) { ?>
                                    <tr class="odd gradeX">
                                        <td>
                                            <?php if($user->qtype=="proforma invoice"){
                                                $p="proforma.jpg";
                                            }
                                                if($user->qtype=="quotation"){
                                                   $p="quotation.png"; 
                                                }
                                                 if($user->qtype=="tax invoice"){
                                                   $p="tax.png"; 
                                                }
                                                ?>
                                                <img src="<?php echo url('/images/'.$p); ?>" height="30px" width="30px">
                                             

                                        </td>
                                        <td><?php echo $user->quot; ?></td>
                                        <td><?php echo $user->qtype; ?></td>
                                        <td><?php echo $user->cname; ?><br><?php echo $user->cmob; ?></td>
                                        <td><?php echo $user->indt; ?></td>
                                         <td><?php echo $user->tsp; ?></td>
                                         <td><?php// echo (round(($user->tcp/$user->tsp)*100,2)); ?></td>
                                          <td><a href="#myModal" data-toggle="modal" data-target="#myModal" id="<?php echo $user->note; ?>" class="service_title"><i class="fa fa-info"></i></a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="/editmm/<?php echo $user->cid; ?>"><i class="fa fa-print"></i></a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="/delmm/<?php echo $user->cid; ?>" onclick="return confirm('Do you want to delete?');"><i class="fa fa-trash-o" style="color:red"></i></a></td>
                                                                <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Note:</h4>
        </div>
        <div class="modal-body">

          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
                                            </tr>
                                    <?php }

                                    } ?>
                                     <?php 
                                  $p=1;
                                  if(isset($listr))
                                  {
                                 foreach ($listr as $user) { ?>
                                    <tr class="odd gradeX">
                                        <td>
                                            <?php if($user->qtype=="proforma invoice"){
                                                $p="proforma.jpg";
                                            }
                                                if($user->qtype=="quotation"){
                                                   $p="quotation.png"; 
                                                }
                                                 if($user->qtype=="tax invoice"){
                                                   $p="tax.png"; 
                                                }
                                                ?>
                                                <img src="<?php echo url('/images/'.$p); ?>" height="30px" width="30px">
                                             

                                        </td>
                                        <td><?php echo $user->quot; ?></td>
                                        <td><?php echo $user->qtype; ?></td>
                                        <td><?php echo $user->cname; ?><br><?php echo $user->cmob; ?></td>
                                        <td><?php echo $user->indt; ?></td>
                                         <td><?php echo $user->tsp; ?></td>
                                           <td><?php // echo (round(($user->tcp/$user->tsp)*100,2)); ?></td>
                                          <td><a href="#myModal" data-toggle="modal" data-target="#myModal" id="<?php echo $user->note; ?>" class="service_title"><i class="fa fa-info"></i></a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="/editmm/<?php echo $user->cid; ?>"><i class="fa fa-print"></i></a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="/delmm/<?php echo $user->cid; ?>" onclick="return confirm('Do you want to delete?');"><i class="fa fa-trash-o" style="color:red"></i></a></td>
                                            </tr>
                                               <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Note:</h4>
        </div>
        <div class="modal-body">

          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
                                    <?php }

                                    } ?>
                                </tbody>

                            </table>
                            <!-- /.table-responsive -->
                           <!-- Modal -->
        <div style="float:right;margin-top:-5%;">
          <?php if(isset($qsers)){?>
   {{ $qsers->links() }}
 <?php } ?>
</div>
 
 <div style="float:right;margin-top:-5%;">
  <?php if(isset($listr)&&isset($listr1)){ 
    // echo count($listr1);
    $lss=count($listr1);
   
    $tot=$lss%10;
    $totp=$lss/10;
    if($tot>0){
      $totp=$totp+1;
    }
   $sturl=Request::fullUrl(); ?>

   <nav aria-label="Page navigation example">
  <ul class="pagination">
   
   <?php 
   for($i=1;$i<=$totp;$i++){ ?>
    <li class="page-item"><a class="page-link" href="<?php echo $sturl.'&page='.$i; ?>"><?php echo $i; ?></a></li>
  <?php } ?>
    <!--<li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>-->
   
  </ul>
</nav>
  
  
 <?php } ?>
  
                           <!----------->
                        </div>
                        <!-- /.panel-body -->

                    </div>

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    @stop
    
