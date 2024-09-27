@extends('layouts.LayoutMaster')
       @section('content')
       <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Units</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <h2>Add Units</h2>
                <form name="frm" action="{{ route('produn') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                     <div class="form-group col-md-6">
    <label for="comment">Unit:</label>
   <input type="text" class="form-control" id="title" name="untt">
     </div>
      <br>
      <input type="submit" name="sub" class="btn btn-success" value="Submit">


  </form>
     

    </div>
   

   
    @stop
    