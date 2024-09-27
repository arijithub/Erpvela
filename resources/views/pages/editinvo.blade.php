@extends('layouts.LayoutMaster1')
       @section('content')
       <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">New Invoice/Quotation</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
             <?php if(Request::segment(2)=='add'){ ?>
             <form name="frm" id="frm11" action="{{ route('adpro1') }}" method="post" enctype="multipart/form-data">
             <?php } ?>
             <?php if(Request::segment(2)=='edit'){ ?>
             <form name="frm" id="frm11" action="{{ route('adprodit1') }}" method="post" enctype="multipart/form-data">
             <?php } ?>
    {{ csrf_field() }}
            <?php if(isset($mid))
{
  foreach($mid as $mids){
  ?>
  <input type="hidden" name="hhd" id="hdc" value="">
  <input type="hidden" name="hhd1" id="hdc1" value="">
  <input type="hidden" name="hid" value="<?php echo $mids->cid; ?>">
  <input type="hidden" name="hidsess" id="hds1" value="">
    <input type="hidden" name="arhid" id="arhid1" value="">
     <input type="hidden" name="hhd11" id="hdc11" value="">
     <input type="hidden" name="hhd111" id="hdc111" value="">
      <input type="hidden" name="hhd1111" id="hdc1111" value="">
     <input type="hidden" name="hidjana" id="hidjan" value="">
<div class="col-md-12">
	  <input type="hidden" id="hidr" value="<?php echo $mids->quot; ?>">
            <label class="radio-inline">
      <input type="radio" name="optradio" id="r1" onchange="rch()" value="tax invoice" <?php if($mids->qtype=='tax invoice'){echo "checked"; } ?>>Tax Invoice
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio" id="r2" onchange="rch()" value="proforma invoice" <?php if($mids->qtype=='proforma invoice'){echo "checked"; } ?>>Proforma Invoice
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio" id="r3" onchange="rch()" value="quotation" <?php if($mids->qtype=='quotation'){echo "checked"; } ?>>Quotation
    </label>
  </div>
  
            <h3 class="col-md-6">Customer Billing details</h3>
            <h3 class="col-md-6">Other details</h3>
              
  
    <div class="form-group col-md-6">
      <label for="title">Customer Name:</label>
     
      <input type="text" class="form-control" id="title" name="cname" value="<?php echo $mids->cname; ?>">
  
    </div>
    <div class="form-group col-md-6">
    <label for="comment">Invoice/Quotation number:</label>
   <input type="text" class="form-control" id="tq" name="quot" value="">
    <input type="hidden" class="form-control" id="tp" name="quot1" value="">
     </div>
    <div class="form-group col-md-6">
      <label for="link">Customer Mobile No.:</label>
      <input type="text" class="form-control" id="link" name="cmob" value="<?php echo $mids->cmob; ?>">
    </div>
    <div class="form-group col-md-6">
      <label for="title">Invoice Date:</label>
      <input type="text" class="form-control" id="datetimepicker4" name="indt" placeholder="dd/mm/yy" value="<?php echo $mids->indt; ?>" autocomplete="off">
    </div>
    <div class="form-group col-md-6">
      <label for="title">Customer Email-Id:</label>
      <input type="email" class="form-control" id="title" name="cmail" value="<?php echo $mids->cmail; ?>">
    </div>
    <div class="form-group col-md-6">
      <label for="title">Customer Order Number:</label>
      <input type="text" class="form-control" id="title" name="cord" value="<?php echo $mids->cord; ?>">
    </div>
    <div class="form-group col-md-6">
    <label for="comment">Customer GSTIN:</label>
    <input type="text" class="form-control" id="title" name="cgst" value="<?php echo $mids->cgst; ?>">
     </div>
      </br>  </br>
      <div class="form-group col-md-6">
    <label for="comment">Our Order Number:</label>
    <input type="text" class="form-control" id="title" name="oord" value="<?php echo $mids->oord; ?>">
     </div>
  <div class="form-group col-md-6">
  <label for="comment">Billing Address:</label>
  <textarea class="form-control" rows="9" id="comment" name="cadd"><?php echo $mids->cadd; ?></textarea>
</div>
<div class="form-group col-md-6">
  <label for="sel1">Any Terms and conditions:</label>
  <select class="form-control" id="sel1" name="cterm">
    <option value="<?php echo $mids->cterm; ?>" selected><?php echo $mids->cterm; ?></option>
     <?php foreach($mtt as $mts){ ?>
    <option value="<?php echo $mts->tmt; ?>"><?php echo $mts->tmt; ?></option>
    
  <?php } ?>
   
  </select>
</div>
 <div class="form-group col-md-6">
  <label for="comment">Note:</label>
  <textarea class="form-control" rows="5" id="comment" name="note"><?php echo $mids->note; ?></textarea>
</div>
<div class="form-group col-md-3">
    <label for="comment">Adjustment:</label>
   <input type="text" class="form-control" id="addj" name="adj" value="<?php echo $mids->adjust; ?>">
     </div>

     <div class="form-group col-md-3">
   <label for="comment" style="visibility:hidden">Adjustment:</label>
  <select class="form-control" name="adj1" id="sel1">
    <option value="plus" <?php if($mids->ads=='plus'){echo "selected"; } ?>>+</option>
    <option value="minus" <?php if($mids->ads=='minus'){echo "selected"; } ?>>-</option>
    
  </select>
</div>


  <?php
}
}
?>

   <div class="form-group col-md-12" id="show">
    <h1 class="page-header"></h1>
  </div>
<!--  Customer detail ends -->
            <div class="row">
                <div class="col-lg-12">
                    <h2>Add Products and Services</h2>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            
      <br><br>
        <!-- /#page-wrapper -->
        <div class="panel panel-info">


                        <div class="panel-heading" style="height:80px;">
                           <div class="col-sm-4 col-md-4">
                          <div class="dropdown form-group">
                          	 
<label for="title">Search Products:</label>
 <!-- <button onclick="myFunction()" class="dropbtn">Dropdown</button>-->
  <div id="myDropdown" class="dropdown-content">
     <?php if(isset($proins))
  {
    foreach ($proins as $pruts) { 
    ?>
    <input type="text" class="form-control clb" autocomplete="off"  name="inid" value="<?php echo $pruts->prod_name; ?>" placeholder="Search.." id="myInput" required>
    <?php }} ?>
     <?php 
   if(isset($chin)){ ?>
       <input type="text" class="form-control clb" autocomplete="off" name="inid" value="" placeholder="Search.." id="myInput" required>
    <?php } ?>
    <div id="dpdown">
   
  <?php 
   if(isset($users)){
  foreach ($users as $user) { ?>
    <a onclick="return changeFreq(this)"  href=""><?php echo $user->product_full_name;
    ?></a>
    <?php }
    } ?>
 
  </div>
  </div>
</div> 
                        </div>
                        <?php 
                        if(isset($proins)){ 
                           foreach($proins as $prus){
                          ?>
                          <input type="hidden" name="hid111" value="<?php echo $prus->prid; ?>">
                            <input type="hidden" name="hid2" value="<?php echo $prus->cid; ?>">


                         <div class="col-sm-2 col-md-2">
                           <div class="form-group">
                        
      <label for="title">S.P:</label>
      <input type="text" class="form-control" id="sellid"  name="sellids" value="<?php echo $prus->sp; ?>" onkeyup="spch()">
    </div>
                         </div>
                          <div class="col-sm-2 col-md-2">
                           <div class="form-group">
      <label for="title">Qty:</label>
      <input type="number" class="form-control" id="qtid" min="1" name="qtids" value="<?php echo $prus->qty; ?>" onclick="qtych()">
    </div>
  </div>
    <div class="col-sm-2 col-md-2">
                           <div class="form-group">
      <label for="title">Total:</label>
   <input type="text" class="form-control" id="totid" name="tot" value="<?php echo $prus->totpro; ?>">
    </div>
             <?php } }
             else{  ?>          

 <div class="col-sm-2 col-md-2">
                           <div class="form-group">
                           	<input type="hidden" name="hid1" value="<?php echo Request::segment(3); ?>">
                        
      <label for="title">S.P:</label>
      <input type="text" class="form-control" id="sellid" name="sellids" value="" onkeyup="spch()">
    </div>
                         </div>
                          <div class="col-sm-2 col-md-2">
                           <div class="form-group">
      <label for="title">Qty:</label>
      <input type="number" class="form-control" id="qtid" min="1" name="qtids" value="1" onclick="qtych()">
    </div>
  </div>
    <div class="col-sm-2 col-md-2">
                           <div class="form-group">
      <label for="title">Total:</label>
   <input type="text" class="form-control" id="totid" name="tot" value="">
    </div>
<?php

 } ?>
             </div>

                           <div class="col-sm-2 col-md-2">
                           <div class="form-group row">
        <div style="padding-top:24px;"></div>
         <?php if(Request::segment(2)=='add'){ ?>
   <input type="submit" name="sub" class="btn btn-success"  value="Add">
 <?php } ?>
 <?php if(Request::segment(2)=='edit'){ ?>
  <input type="submit" name="sub" class="btn btn-success" value="Edit">
<?php } ?>
    </div>

                         </div>
                        <!-- /.panel-heading -->
                       
                           
                                  <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Sl no.</th>
                                        <th>Product/Service</th>
                                        <th>Sell Rs.</th>
                                        <th>Qty</th>
                                         <th>Total</th>
                                        
                                        <th>Action</th>
                                        <!--<th>Status</th>
                                        <th>Action</th>-->
                                    </tr>
                                </thead>
                           <tbody>
                           	 <?php 
                                  $p=1;
                                  if(isset($upac)){
                                 foreach ($upac as $userpro) { ?>
                                    <tr style="background-color: red;color:white;">
                                        <td style="color:white"><?php echo $p++; ?></td>
                                     
                                       
                                        
                                        <td style="color:white"><?php echo $userpro->prod_name; ?></td>
                                    
                                       
                                        <td style="color:white"><?php echo $userpro->sp; ?></td>
                                         <td style="color:white"><?php echo $userpro->qty; ?></td>
                                        <td style="color:white"><?php echo $userpro->totpro; ?></td>
                                        
                                     <!-- <td class="center"><a href="/editinv/edit/<?php echo $userpro->cid; ?>/<?php echo $userpro->prid; ?>"><i class="fa fa-pencil-square-o"></i></a>|<a href="/editinv/del/<?php echo $userpro->cid; ?>/<?php echo $userpro->prid; ?>" onclick="return confirm('Do you want to delete?');"><i class="fa fa-trash-o"></i></a></td>-->
                                     <?php Session::put('ppid',$userpro->prid); ?>
                                    <!--<td class="center"><a href="/proedit1/<?php echo $userpro->prid; ?>/#show"><i class="fa fa-pencil-square-o"></i></a>|<a href="/prodel1/<?php echo $userpro->prid; ?>/#show" onclick="return confirm('Do you want to delete?');"><i class="fa fa-trash-o"></i></a></td>
                                       -->
                                       <td class="center"><a onclick="editbttn1(<?php echo $userpro->pid; ?>);"><i class="fa fa-pencil-square-o" style="color:white"></i></a>|<a onclick="delbttn(<?php echo $userpro->pid.','; ?><?php echo $userpro->cid; ?>);"><i class="fa fa-trash-o" style="color:white"></i></a></td>
                                    </tr>
                                    <?php }
                                    } ?>



                
                                    <?php 
                                  
                                  if(isset($proin)){
                                 foreach ($proin as $userpro) { ?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $p++; ?></td>
                                     
                                       
                                        
                                        <td><?php echo $userpro->prod_name; ?></td>
                                    
                                       
                                        <td><?php echo $userpro->sp; ?></td>
                                         <td><?php echo $userpro->qty; ?></td>
                                        <td><?php echo $userpro->totpro; ?></td>
                                        
                                     <!--<td class="center"><a href="/editinv/edit/<?php echo $userpro->cid; ?>/<?php echo $userpro->prid; ?>"><i class="fa fa-pencil-square-o"></i></a>|<a href="/editinv/del/<?php echo $userpro->prid; ?>" onclick="return confirm('Do you want to delete?');"><i class="fa fa-trash-o"></i></a></td>
                                       -->
                                  <!-- <td class="center"><a href="/proedit1/<?php echo $userpro->prid; ?>/#show"><i class="fa fa-pencil-square-o"></i></a>|<a href="/prodel1/<?php echo $userpro->prid; ?>/#show" onclick="return confirm('Do you want to delete?');"><i class="fa fa-trash-o"></i></a></td>-->
                                  <td class="center"><a onclick="editbttn(<?php echo $userpro->prid; ?>);"><i class="fa fa-pencil-square-o"></i></a>|<a onclick="delbttn(<?php echo $userpro->pid.','; ?><?php echo $userpro->cid; ?>);"><i class="fa fa-trash-o"></i></a></td>
                                    </tr>
                                    <?php }
                                    } ?>
                                    
                                    <?php 
                                  $p=1;
                                  if(isset($proj)){
                                 foreach ($proj as $userpro) { ?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $p++; ?></td>
                                     
                                       
                                        
                                        <td><?php echo $userpro->prod_name; ?></td>
                                    
                                       
                                        <td><?php echo $userpro->sp; ?></td>
                                         <td><?php echo $userpro->qty; ?></td>
                                        <td><?php echo $userpro->totpro; ?></td>
                                        
                                     <!--<td class="center"><a href="/editinv/edit/<?php echo $userpro->cid; ?>/<?php echo $userpro->prid; ?>"><i class="fa fa-pencil-square-o"></i></a>|<a href="/editinv/del/<?php echo $userpro->prid; ?>" onclick="return confirm('Do you want to delete?');"><i class="fa fa-trash-o"></i></a></td>
                                       -->
                                  <!-- <td class="center"><a href="/proedit1/<?php echo $userpro->prid; ?>/#show"><i class="fa fa-pencil-square-o"></i></a>|<a href="/prodel1/<?php echo $userpro->prid; ?>/#show" onclick="return confirm('Do you want to delete?');"><i class="fa fa-trash-o"></i></a></td>-->
                                  <td class="center"><a onclick="editbttn(<?php echo $userpro->prid; ?>);"><i class="fa fa-pencil-square-o"></i></a>|<a onclick="delbttn(<?php echo $userpro->pid.','; ?><?php echo $userpro->cid; ?>);"><i class="fa fa-trash-o"></i></a></td>
                                    </tr>
                                    <?php }
                                    } ?>
                                    
                                </tbody>
                              </table>
                                </form>

  
    <?php if(isset($mid)){
       foreach($mid as $mids){
      ?>
      <div class="form-group col-md-12">
    <h1 class="page-header"></h1>
  </div>
 <input type="hidden" name="hid22" id="hd2" value="<?php echo $mids->cid; ?>">
    <input type="hidden" name="hid23" id="hd3" value="">
     <input type="hidden" name="hid24" id="hd4" value="">
    <div class="form-group col-md-2">
      <label for="title">Technician Cost:</label>
      <input type="text" class="form-control" id="tc11" name="tc" value="<?php echo $mids->tc; ?>">
    </div> 
    <div class="form-group col-md-2">
      <label for="title" style="visibility: hidden">dsdsds</label>
    <a class="btn btn-success" onclick="tcch1();">Set as default</a>
    </div> 
    <div class="form-group col-md-2">
      <label for="title">Travel Allowance:</label>
      <input type="text" class="form-control" id="ta11" name="ta" value="<?php echo $mids->ta; ?>">
    </div>
    <div class="form-group col-md-2">
       <label for="title" style="visibility: hidden">dsdsds</label>
    <a class="btn btn-success" onclick="tach1();">Set as default</a>
    </div> 
     <div class="form-group col-md-2">
      <label for="title">Additional Cost:</label>
      <input type="text" class="form-control" id="ac11" name="ac" value="<?php echo $mids->ac; ?>">
    </div>
    <div class="form-group col-md-2">
       <label for="title" style="visibility: hidden">sdsds</label>
    <a class="btn btn-success" onclick="acch1()">Set as default</a>
    </div> 

    <?php }}?>
    <br>
    <div class="form-group col-md-12">
   
  </div>
   <?php
     $i=1;
    foreach ($proin as $userpro) {if($i==1){ ?>
                           <table style="float:right"><tr><td colspan="6"><a style="float:right" onclick="mddch(<?php echo $userpro->cid; ?>)" class="btn btn-primary">Save</a></td></tr></table> 
                           <?php $i++;} }?>  

                        </div>
                        <!-- /.panel-body -->

     </div>
 
  

  
    <!-- /#wrapper -->

    <!-- jQuery -->
    @stop
    
