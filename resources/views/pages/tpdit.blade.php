    @extends('layouts.LayoutMaster')
       @section('content')
       <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Terms and conditions</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <h2>Edit terms and conditions</h2>
                <form name="frm" action="{{ route('termdp') }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
  <?php foreach($up as $ups)
  {?>
    <div class="form-group col-md-12">
      <input type="hidden" name="hid" value="<?php echo $ups->tid; ?>">
      <label for="title">Terms Title:</label>
     
      <input type="text" class="form-control" id="title" name="tmt" value="<?php echo $ups->tmt; ?>">
  
    </div>
    <div class="form-group col-md-12">
  <label for="comment">Terms description:</label>
  <textarea class="form-control" id="summernote" name="tmd" rows="18"><?php echo $ups->tmd; ?></textarea>
</div>
   <?php } ?>
    
    <input type="submit" name="sub" class="btn btn-success" value="Submit">


  </form>
     

    </div>
   

   
    @stop
    
