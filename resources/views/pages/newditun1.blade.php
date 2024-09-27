    @extends('layouts.LayoutMaster')
       @section('content')
       <div id="page-wrapper">
           
            <h2>Edit Brand</h2>
                <form name="frm" action="{{ route('unsnew1') }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
  <?php foreach($np as $nps){?>
   <input type="hidden" name="hid" value="<?php echo $nps->bid; ?>">
    <div class="form-group col-md-6">
    <label for="comment">Unit:</label>
   <input type="text" class="form-control" id="title" name="untt" value="<?php echo $nps->bname; ?>">
     </div>
  
 <?php } ?>

    <br>
    <input type="submit" name="sub" class="btn btn-success" value="Submit">


  </form>
     

    </div>
   

   
    @stop
    
