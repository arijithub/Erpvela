 @extends('layouts.LayoutMaster')
       @section('content')
       <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">New Invoice/Quotation - Step(1/3)</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <h2>Add Products and Services</h2>
             <form name="frm" action="{{ route('adpro') }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
      <br><br>
        <!-- /#page-wrapper -->
        <div class="panel panel-default">
                        <div class="panel-heading" style="height:80px">
                           <div class="col-sm-4 col-md-4">
                          <div class="dropdown form-group">
<label for="title">Search Products:</label>
 <!-- <button onclick="myFunction()" class="dropbtn">Dropdown</button>-->
  <div id="myDropdown" class="dropdown-content">
    
    <input type="text" class="form-control clb" name="inid" placeholder="Search.." id="myInput">
    <div id="dpdown">
  <?php foreach ($users as $user) { ?>
    <a onclick="return changeFreq(this)"  href=""><?php echo $user->product_full_name;
    ?></a>
    <?php } ?>
    <a onclick="return changeFreq(this)" href="">Base</a>
    <a onclick="return changeFreq(this)" href="">Blog</a>
    <a onclick="return changeFreq(this)" href="">Contact</a>
    <a onclick="return changeFreq(this)" href="">Custom</a>
    <a onclick="return changeFreq(this)" href="">Support</a>
    <a onclick="return changeFreq(this)" href="">Tools</a>
  </div>
  </div>
</div> 
                        </div>
                         <div class="col-sm-2 col-md-2">
                           <div class="form-group">
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
                         </div>

                           <div class="col-sm-2 col-md-2">
                           <div class="form-group row">
        <div style="padding-top:24px;"></div>
   <input type="submit" name="sub" class="btn btn-success" value="Submit">
    </div>
                         </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                           
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
                                 foreach ($proin as $userpro) { ?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $p++; ?></td>
                                      <?php  } ?>
                                        <?php
                                         foreach ($prodjn as $prods) { 
                                          ?>
                                        <td><?php echo $prods->product_full_name; ?></td>
                                     <?php  }
                                        ?>
                                        <?php 
                                  
                                 foreach ($proin as $userpro) { ?>
                                       
                                        <td><?php echo $userpro->sp; ?></td>
                                         <td><?php echo $userpro->qty; ?></td>
                                        <td><?php echo $userpro->totpro; ?></td>
                                        
                                      <td class="center"><a href="/proedit/<?php echo $userpro->pid; ?>">Edit</a>|<a href="/testbest/<?php echo $userpro->pid; ?>" onclick="return confirm('Do you want to delete?');">Delete</a></td>
                                       
                                    </tr>
                                    <?php } ?>
                                </tbody>
                        </div>
                        <!-- /.panel-body -->
                    </div>

    </div>
  </form>
    <!-- /#wrapper -->

    <!-- jQuery -->
    @stop
    
