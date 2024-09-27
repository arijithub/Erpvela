    @extends('layouts.LayoutMaster')
       @section('content')
       <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Terms and conditions</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <h2>Add terms and conditions</h2>
<form name="frm" action="{{ route('termins') }}" method="post">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="title">Term Title:</label>
      <input type="text" class="form-control" id="title" name="tmt">
    </div>
    <div class="form-group">
      <label for="title">Term Description:</label>
      <textarea class="form-control" id="summernote" name="tmd" rows="18">
          </textarea>
    </div>
    
    
    
    <input type="submit" name="sub" class="btn btn-success" value="Submit">
  </form>

            <!-- /.row -->
                       <!-- /.row -->
                

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    @stop
    
