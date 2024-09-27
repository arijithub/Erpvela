@extends('layouts.LayoutMaster')
       @section('content')
       <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Images</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <h2>Add Images</h2>
                <form name="frm" action="{{ route('produn11') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <?php 
                     if($ung->isNotEmpty()){
                    foreach($ung as $un){?>
                     <div class="form-group col-md-6">
                    
    <label for="comment">Header image:</label>
    <input type="hidden" name="hid" value="<?php echo $un->imgid; ?>">
   <input type="text" class="form-control" id="title" name="untt" value="<?php echo $un->hmg; ?>">
     </div>
       <div class="form-group col-md-6">
    <label for="comment">Footer image:</label>
   <input type="text" class="form-control" id="title" name="untt1" value="<?php echo $un->fmg; ?>">
     </div><br>
   <?php }
     }
    ?>
    <?php if(!$ung->isNotEmpty()){?>
                     <div class="form-group col-md-6">
                    
    <label for="comment">Header image:</label>
    <input type="hidden" name="hid">
   <input type="text" class="form-control" id="title" name="untt" required>
     </div>
       <div class="form-group col-md-6">
    <label for="comment">Footer image:</label>
   <input type="text" class="form-control" id="title" name="untt1" required>
     </div><br>
  
     <?php } ?>
   
      <input type="submit" name="sub" class="btn btn-success" value="Submit">


  </form>
     

    </div>
   

   
    @stop
    