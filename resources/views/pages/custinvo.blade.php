    @extends('layouts.LayoutMaster')
       @section('content')
       <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">New Invoice/Quotation - Step(2/3)</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="col-md-12">
           <label class="radio-inline">
      <input type="radio" name="optradio" checked>Tax Invoice
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio">Proforma Invoice
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio">Quotation
    </label>
  </div>
  
            <h3 class="col-md-6">Customer Billing details</h3>
            <h3 class="col-md-6">Other details</h3>
                <form name="frm" action="{{ route('prodins') }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
  
    <div class="form-group col-md-6">
      <label for="title">Brand:</label>
     
      <input type="text" class="form-control" id="title" name="brand">
  
    </div>
    <div class="form-group col-md-6">
    <label for="comment">Model:</label>
   <input type="text" class="form-control" id="title" name="model">
     </div>
    <div class="form-group col-md-4">
      <label for="link">Spec1:</label>
      <input type="text" class="form-control" id="link" name="spec1">
    </div>
    <div class="form-group col-md-4">
      <label for="title">Spec2:</label>
      <input type="text" class="form-control" id="title" name="spec2">
    </div>
    <div class="form-group col-md-4">
      <label for="title">Spec3:</label>
      <input type="text" class="form-control" id="title" name="spec3">
    </div>
    <div class="form-group col-md-6">
      <label for="title">Type:</label>
      <input type="text" class="form-control" id="title" name="type">
    </div>
    <div class="form-group col-md-6">
    <label for="comment">Product:</label>
    <input type="text" class="form-control" id="title" name="product" required>
     </div>
      </br>  </br>
    <!--<div class="form-group col-md-12">
    <label for="comment">Model:</label>
   <input type="text" class="form-control" id="title" name="model">
     </div>-->
      <div class="form-group col-md-2">
      <label for="sel1">Unit:</label>
  <select class="form-control" id="sel1" name="unit" required>
    <option value="pcs">Pcs</option>
    <option value="dozen">Dozen</option>
    <option value="box">Box</option>
  </select>
    </div>
    <div class="form-group col-md-2">
      <label for="sel1">Warranty:</label>
  <input type="number" class="form-control" id="title" name="wn">
    </div>
    <div class="form-group col-md-2">
      <label for="sel1">&nbsp;</label>
  <select class="form-control" id="sel1" name="wt">
    <option value="year">Year</option>
    <option value="months">Months</option>
  </select>
    </div>
    <!--<div class="form-group col-md-4">
<div class="col-md-1">
    <label for="comment">Warranty:</label>
  </div>
    <div class="col-md-1">
   <input type="number" class="form-control" id="title" name="wn">
</div>
 <div class="col-md-1">
    <select class="form-control" id="sel1" name="wt">
    <option value="year">Year</option>
    <option value="months">Months</option>
  </select>
</div>

     </div>-->
     <!-- <div class="form-group col-md-2">
       <label for="title"></label>
      </div>-->
      <div class="form-group col-md-2">
      <label for="title">Purchase Price:</label>
     <input type="number" onchange="setTwoNumberDecimal" class="form-control"  step="1.00" name="purchase_price"/>
    </div>
    <div class="form-group col-md-2">
    <label for="comment">Selling Price:</label>
     <input type="number" onchange="setTwoNumberDecimal"  class="form-control" step="1.00"  name="selling_price" required />
     </div>
      <div class="form-group col-md-2">
      <label for="title">GST:</label>
     <input type="number" class="form-control" name="gstper">
    </div>
   <!-- <div class="form-group">
    <label for="comment">Total Price:</label>
   <input type="number" onchange="setTwoNumberDecimal" min="0" max="10" step="1.00" name="totprice" value="0.00" />
    </div>
      -->

    
    <input type="submit" name="sub" class="btn btn-success" value="Submit">


  </form>
     

    </div>
   

   
    @stop
    
