    @extends('layouts.LayoutMaster')
       @section('content')
       <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Products</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <h2>Add Products</h2>
                <form name="frm" action="{{ route('insnew') }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
  <?php foreach($np as $nps){?>
    <input type="hidden" name="hid" value="<?php echo $nps->pid; ?>">
    <div class="form-group col-md-6">
      <label for="title">Brand:</label>
     
     <!-- <input type="text" class="form-control" id="title" name="brand" value="<?php echo $nps->brand; ?>">-->
        <select class="form-control" id="sel1" name="brand">
      <?php
          if(isset($tit)){
            ?>
             
       <?php foreach($tit as $tt){ ?>
      
    <option value="<?php echo $tt->bname; ?>" <?php if($nps->brand==$tt->bname){ echo 'selected'; } ?>><?php echo $tt->bname; ?></option>
<?php 
  }
} ?>
    <!--<option>2</option>
    <option>3</option>
    <option>4</option>-->
  </select>
  
    </div>
    <div class="form-group col-md-6">
    <label for="comment">Model:</label>
   <input type="text" class="form-control" id="title" name="model" value="<?php echo $nps->model; ?>">
     </div>
    <div class="form-group col-md-4">
      <label for="link">Spec1:</label>
      <input type="text" class="form-control" id="link" name="spec1" value="<?php echo $nps->spec1; ?>">
    </div>
    <div class="form-group col-md-4">
      <label for="title">Spec2:</label>
      <input type="text" class="form-control" id="title" name="spec2" value="<?php echo $nps->spec2; ?>">
    </div>
    <div class="form-group col-md-4">
      <label for="title">Spec3:</label>
      <input type="text" class="form-control" id="title" name="spec3" value="<?php echo $nps->spec3; ?>">
    </div>
    <div class="form-group col-md-4">
      <label for="title">Type:</label>
      <input type="text" class="form-control" id="title" name="type" value="<?php echo $nps->type; ?>">
    </div>
    <div class="form-group col-md-4">
    <label for="comment">Product:</label>
    <input type="text" class="form-control" id="title" name="product" value="<?php echo $nps->product; ?>" required>
     </div>
      </br>  </br>
      <div class="form-group col-md-4">
    <label for="comment">HSN/SAC:</label>
    <input type="text" class="form-control" id="title" name="hsn" value="<?php echo $nps->hsn; ?>" required>
     </div>
    <!--<div class="form-group col-md-12">
    <label for="comment">Model:</label>
   <input type="text" class="form-control" id="title" name="model">
     </div>-->
      <div class="form-group col-md-2">
      <label for="sel1">Unit:</label>
  <select class="form-control" id="sel1" name="unit" required>
    <option value="pcs" <?php if($nps->unit=="pcs"){echo "selected"; } ?>>Pcs</option>
    <option value="dozen" <?php if($nps->unit=="dozen"){echo "selected"; } ?>>Dozen</option>
    <option value="box" <?php if($nps->unit=="box"){echo "selected"; } ?>>Box</option>
  </select>
    </div>
    <?php $arr=explode(" ",$nps->warranty);
  ?>
    <div class="form-group col-md-2">
      <label for="sel1">Warranty:</label>
  <input type="number" class="form-control" id="title" name="wn" value="<?php echo $arr[0]; ?>">
    </div>
    <div class="form-group col-md-2">
      <label for="sel1">&nbsp;</label>
  <select class="form-control" id="sel1" name="wt">
    <option value="year" <?php if($arr[1]=='year'){echo "selected"; } ?>>Year</option>
    <option value="months" <?php if($arr[1]=='months'){echo "selected"; } ?>>Months</option>
  </select>
    </div>
   
      <div class="form-group col-md-2">
      <label for="title">Purchase Price:</label>
     <input type="number" onchange="setTwoNumberDecimal" class="form-control"  step="1.00" name="purchase_price" value="<?php echo $nps->purchase_price; ?>"/>
    </div>
    <div class="form-group col-md-2">
    <label for="comment">Selling Price:</label>
     <input type="number" onchange="setTwoNumberDecimal"  class="form-control" step="1.00"  name="selling_price" value="<?php echo $nps->selling_price; ?>" required />
     </div>
      <div class="form-group col-md-2">
      <label for="title">GST:</label>
     <input type="number" class="form-control" name="gstper" value="<?php echo $nps->gst; ?>">
    </div>
 <?php } ?>

    
    <input type="submit" name="sub" class="btn btn-success" value="Submit">


  </form>
     

    </div>
   

   
    @stop
    
