<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Velacctv ERP</title>
    <style>
    #container { font: normal 13px/1.4em 'Open Sans', Sans-serif;
                 margin: 0 auto;
                 min-height: 1078px; }

    #container .header img { width: 100%;
                             height: auto; }

    #container .footer img { width: 100%;
                             height: auto;
                             margin-top:1%; }

    #invoice-info { float: right;
                    margin-top: 50px;
                    width:35%; }

    #invoice-info > div { float: right; }

    #client-info { float: left;
                   margin-top: 50px;
                   width:65%; }

    #client-info > div { float: left; }

    .title-l { margin-top:5px;
               font-weight: bold;
               font-size:large;
               color: #434343; }

    .title-m { margin-top:5px;
               font-size:120%;
               font-weight: bold;
               color: #434343; }

    .data { margin-top:5px;
            font-size:120%;
            color:#666666; }

    table { width:100%; }

    th .pr { color: #2a3990;
        font-size:150%;
        font-weight:bold; }

    td { color:#666666;
         font-size:120%; }

    #product-details { clear: both;
                       border-top:1px solid #b7b7b7; }

    .tab-sl { width:2%;
              text-align:right; }

    .tab-item { padding-left:1%;
                width:46%;
                text-align:left; }

    .tab-model { padding-left:1%;
                 width:20%;
                 text-align:left; }


    .tab-qty { padding-left:2%;
               width:12%;
               text-align:left; }

    .tab-unitprice { padding-left:1%;
                     width:10%;
                     text-align:right; }

    .tab-totalprice { padding-left:1%;
                      width:10%;
                      text-align:right; }

    #note-amount-tc-details { border-top:1px solid #b7b7b7;
                              width:100%; }

    .note-label { width:5%;
                  font-weight:bold;
                  text-align:left;
                  color:#666666;
                  vertical-align: top; }

    .note-data { padding-left:2%;
                 padding-right:2%;
                 width:70%;
                 text-align:left;
                 color:#434343;
                 vertical-align: top; }

    .adjustment-label { color:#2a3990;
                        padding-left:1%;
                        width:15%;
                        text-align:right;
                        vertical-align: top;
                        font-size:120%; }

    .subtotal-label { color:#2a3990;
                      padding-left:1%;
                      width:15%;
                      text-align:right;
                      vertical-align: top;
                      font-size:120%; }

    .adjustment-amount { padding-left:1%;
                         width:10%;
                         text-align:right;
                         vertical-align: top;
                         font-size:120%; }

    .subtotal-amount { font-weight:bold;
                       padding-left:1%;
                       width:10%;
                       text-align:right;
                       vertical-align: top;
                       font-size:120%; }

    .tpa-label { font-weight:bold;
                 color:#000000;
                 vertical-align: middle;
                 border:1px solid #b7b7b7;
                 padding:2%; }

    .tpa-amount { color:#e01b84;
                  font-size:250%;
                  font-weight: bold;
                  text-align:right;
                  vertical-align: middle;
                  border:1px solid #b7b7b7;
                  padding:2%; }

    .tc-label { font-weight:bold;
                color:#000000;
                font-size:120%;
                border-top:1px solid #b7b7b7;
                border-left:1px solid #b7b7b7;
                border-right:1px solid #b7b7b7;}

    .tc-details { font-size:90%;
                  color:#666666;
                  vertical-align: top;
                  border-bottom:1px solid #b7b7b7;
                  border-left:1px solid #b7b7b7;
                  border-right:1px solid #b7b7b7;
                  padding:2px;
                  line-height: 100%; }
                 hr .hrrt{

                    size:10px !important;
                    width:200%;
                    align:right;
                  }

                      #container1 {
             font: normal 13px/1.4em 'Open Sans', Sans-serif;
             margin: 0 auto;
             padding-left: 5%; 
             padding-right: 5%;
             min-height: 1030px;
            }

    .report-header1 {color:#0000ff;
                    position:relative;
                    width:100%;
                    text-align:left;
                    font-weight: bold;
                    font-size:large;}

    #invoice-info1 {
            float: right;
            margin-top: 50px;
            width:45%;
            }

    #invoice-info1 > div {
             float: right;
            }

    #client-info1 {
            float: left;
            margin-top: 50px;
            width:45%;
            }

    #client-info1 > div {
             float: left;
            }
    .title-l1 { margin-top:5px;
            font-weight: bold;
            font-size:large;
            color: #2a3990;
            }

    .title-m1 { margin-top:5px;
            font-weight: bold;
            color: #2a3990;
            }

    .data1 {
            margin-top:5px;
            color:#666666; 
            }

    .tab-label1 {color:#434343;
                font-weight: bold;
                font-size:large;
                text-align:center;
                padding-top:1%;
                }

    .tab-data1 {color:#666666;
                text-align:center;
                width:33%;
                padding-top:1%;
                padding-bottom:2%;
                font-size:140%;
                }

    .facts1 {clear:both;
            width:100%;
            border-top:1px solid #b7b7b7; 
            padding:2%;}

    .profit-label1{color:#2a3990;
                font-weight: bold;
                font-size:large;
                text-align:center;
            border-top:1px solid #b7b7b7;
            padding-top:20px;}

    .profit-amount1 {color:#000000;
                font-weight: bold;
                font-size:large;
                text-align:center;
                border: 1px solid #b7b7b7;
                padding:5px;}
    #invoice-info1 {margin-bottom:15%;}
.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 8px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
  background-color: #3e8e41;
}

#myInput {
  border-box: box-sizing;
  background-image: url('{{asset('images/searchicon.png')}}');
  background-position: 14px 12px;
  background-repeat: no-repeat;
  font-size: 16px;
  padding: 14px 20px 12px 45px;
  border: none;
  border-bottom: 1px solid #ddd;
}

#myInput:focus {outline: 3px solid #ddd;}

.dropdown {
  position: relative;
  display: inline-block;

}

.dropdown-content {
  position: absolute;
  background-color: #f6f6f6;
  min-width: 300px;
  
  border: 1px solid #ddd;
  z-index: 1;
}
#dpdown{
  overflow-y: scroll;
  height:200px;
z-index: 1;
display:none;
}

.dropdown-content a {
  color: black;
   font-size:20px;
 
  text-decoration: none;
   display: none;
}

.dropdown a:hover {background-color: #ddd;
text-decoration: none;
}

.show {display: block;}

.topnav {
  overflow: hidden;
}



.topnav input[type=text] {
  float: left;
  padding: 6px;
  margin-top: 8px;
  margin-right: 16px;
  border: none;
  font-size: 17px;
}

@media screen and (max-width: 600px) {
   .topnav input[type=text] {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}

</style>
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}" type="image/x-icon">

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{ asset('css/metisMenu.min.css') }}" rel="stylesheet">

     <!-- DataTables CSS -->
    <link href="{{ asset('css/dataTables.bootstrap.css') }}" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="{{ asset('css/dataTables.responsive.css') }}" rel="stylesheet">


    <!-- Custom CSS -->
    <link href="{{ asset('css/sb-admin-2.css') }}" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{{ asset('css/morris.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
      <link href="{{ asset('css/external.css') }}" rel="stylesheet">
  
    


    <link href="{{ asset('css/summernote.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-datetimepicker.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">
      <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
   <script src="{{ asset('js/jquery.min.js') }}"></script>

    
    <script>
      function editbttn(e){
      
      document.getElementById('hdc11').value=e;
    document.getElementById("frm11").submit();
  
      }
      function editbttn1(e){
      <?php Session::put('edidum','succ'); ?>
      //document.getElementById('hdc11').value=e;
    //document.getElementById("frm11").submit();
     document.getElementById("myInput").focus();
      document.getElementById("hidjan").value=e;

  
      }

      function delbttn(e,f){
        
       var c=confirm('Do you want to delete?');
  if(c==true)
  {
     document.getElementById('hdc111').value=e;
      document.getElementById('hdc1111').value=f;
   document.getElementById("frm11").submit();
    }
      }
      function bpch(){
      //e.preventDefault();
  //document.getElementById("dpdown").style.display = "none";
  //document.getElementById("myInput").addEventListener("click", function(event){
    document.getElementById("myForm").submit();
 

}
 function mddch(e){
     // e.preventDefault();
      document.getElementById("arhid1").value=e;
  //document.getElementById("dpdown").style.display = "none";
  //document.getElementById("myInput").addEventListener("click", function(event){
    document.getElementById("frm11").submit();
   
 

}
function del1ch(p,k)
{
  
    var c=confirm('Do you want to delete?');
  if(c==true)
  {

  

   document.getElementById("hdc").value="delto";
    document.getElementById("hdc1").value=k;
   document.getElementById("frm11").submit();
}

}
function ed1ch(p,k)
{
   document.getElementById("hdc1").value=k;
   document.getElementById("hdc").value="edto";
  var c= document.getElementById("frm11").submit();

}
                
$(document).ready(function(){
  $('#myModal').on('show.bs.modal', function (e) {
        var id = $(e.relatedTarget).attr('id');
        $('.modal-body').html(id);
       
    });


 $('#myButton').click(function() {
  $('#myModal').modal('show')
});
 
date = new Date();
if(document.getElementById('r1').checked){
var pstr="VI-IN";
}
if(document.getElementById('r2').checked){
var pstr="VI-TM";
}
if(document.getElementById('r3').checked){
var pstr="VI-QU";
}
var month = date.getMonth()+1;
if(month=='10'){
  month='A';
}
if(month=='11'){
  month='B';
}
if(month=='12'){
  month='C';
}
var day = date.getDate();
var year = date.getFullYear().toString().substr(2,2);
var hour= date.getHours();
var min= date.getMinutes();
var sec=date.getSeconds();
var sstr=year+month+day+hour+min+sec;
var fstr=pstr+sstr;
//var kk=document.getElementById("hidr").value;
//var kkr=document.getElementById("tq").value;


 

$('#tq').val(fstr);
$('#tp').val(fstr);
    $("#myInput").focus(function(){
   
       
        div = document.getElementById("myDropdown");
  a = div.getElementsByTagName("a"); 
  for (i = 0; i < a.length; i++) {

      a[i].style.display = "block";
    }
   
   document.getElementById("dpdown").style.display = "block";

 }); 
    $("#myInput").click(function(){


        div = document.getElementById("myDropdown");
  a = div.getElementsByTagName("a"); 
  for (i = 0; i < a.length; i++) {

      a[i].style.display = "block";
    }
   
   document.getElementById("dpdown").style.display = "block";

    });
    $("#myInput").keyup(function(){
      var input, filter, ul, li, a, i;
      input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  div = document.getElementById("myDropdown");
  a = div.getElementsByTagName("a");
  for (i = 0; i < a.length; i++) {
    txtValue = a[i].textContent || a[i].innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      a[i].style.display = "block";
    } else {
      a[i].style.display = "none";
    }
  }
});




 var specifiedElement = document.getElementById("myInput");
    document.addEventListener('click', function(event) {
        var isClickInside = specifiedElement.contains(event.target);
        if (!isClickInside) {
         
        div = document.getElementById("myDropdown");
  a = div.getElementsByTagName("a"); 
  for (i = 0; i < a.length; i++) {

      a[i].style.display = "none";
    }
      document.getElementById("dpdown").style.display = "none";
        }
        
    });

});


function tcch(){
  var k=document.getElementById("tc1").value;
  var str="/tc/"+k;
  var c=confirm('Do you want to set it as default?');
  if(c==true)
  {
    
  window.location.href=str;
}
}
function tach(){
  var k=document.getElementById("ta1").value;
  var str="/ta/"+k;
  var c=confirm('Do you want to set it as default?');
  if(c==true)
  {
    
  window.location.href=str;
}
}
function acch(){
  var k=document.getElementById("ac1").value;
  var str="/ac/"+k;
  var c=confirm('Do you want to set it as default?');
  if(c==true)
  {
    
  window.location.href=str;
}
}


function tcch1(){
  
 
  var k=document.getElementById("tc11").value;
   var r=document.getElementById("hd2").value;
  var str="/tc1/"+k;
  document.getElementById("hd3").value=str;
    document.getElementById("hd4").value="tc";
  var c=confirm('Do you want to set it as default?');
  if(c==true)
  {
    
      document.getElementById("frm11").submit();
 // window.location.href=str;
}
}

function tach1(){
  var k=document.getElementById("ta11").value;
   var r=document.getElementById("hd2").value;
  var str="/ta1/"+k;
   document.getElementById("hd3").value=str;
    document.getElementById("hd4").value="ta";
  var c=confirm('Do you want to set it as default?');
  if(c==true)
  {
    
    
    
 document.getElementById("frm11").submit();
}
}
function acch1(){
  var k=document.getElementById("ac11").value;
   var r=document.getElementById("hd2").value;
  var str="/ac1/"+k;
   document.getElementById("hd3").value=str;
    document.getElementById("hd4").value="ac";
  var c=confirm('Do you want to set it as default?');
  if(c==true)
  {
    
    
    
  document.getElementById("frm11").submit();
}
}

function rch(){
if(document.getElementById('r1').checked){
var pstr="VI-IN";
}
if(document.getElementById('r2').checked){
var pstr="VI-TM";
}
if(document.getElementById('r3').checked){
var pstr="VI-QU";
}
date = new Date();

var month = date.getMonth()+1;
if(month=='10'){
  month='A';
}
if(month=='11'){
  month='B';
}
if(month=='12'){
  month='C';
}
var day = date.getDate();
var year = date.getFullYear().toString().substr(2,2);
var hour= date.getHours();
var min= date.getMinutes();
var sec=date.getSeconds();
var sstr=year+month+day+hour+min+sec;
var fstr=pstr+sstr;
document.getElementById("tq").value=fstr;
document.getElementById("tq1").value=fstr;
alert(fstr);
}
function rch1(){

 if(document.getElementById('r1').checked){
var pstr="VI-IN";
}
if(document.getElementById('r2').checked){
var pstr="VI-TM";
}
if(document.getElementById('r3').checked){
var pstr="VI-QU";
}
date = new Date();

var month = date.getMonth()+1;
if(month=='10'){
  month='A';
}
if(month=='11'){
  month='B';
}
if(month=='12'){
  month='C';
}
var day = date.getDate();
var year = date.getFullYear().toString().substr(2,2);
var hour= date.getHours();
var min= date.getMinutes();
var sec=date.getSeconds();
var sstr=year+month+day+hour+min+sec;
var fstr=pstr+sstr;

document.getElementById("tq1").value=fstr;

}



function changeFreq(element)
{
  var ftt=document.getElementById("qtid").value;
 ftt=parseFloat(ftt).toFixed(2);
    // this is reference to the a tag you clicked on
    //alert(element.textContent);
     document.getElementById("myInput").value=element.textContent;
   //  document.getElementById("anhide").style.visibility = "hidden";
     div = document.getElementById("myDropdown");
  a = div.getElementsByTagName("a"); 
  for (i = 0; i < a.length; i++) {

      a[i].style.display = "none";
    }
    document.getElementById("dpdown").style.display = "none";
       
      var dataTosend='user='+element.textContent;
      
      
        $.ajax({
        type: "post",
        url: "<?php echo url('/ajax_requests.php'); ?>",
        data: dataTosend,
        success: function(result){
          // document.getElementById("sellid").value=result;
           temp = result.split(" ");
           //alert(ftt);
          // alert(temp[1]);
           var ftr=ftt*temp[0];
           var frr=temp[2];
           ftr=parseFloat(ftr).toFixed(2);
           document.getElementById("sellid").value=temp[0];
              
            document.getElementById("totid").value=ftr;
            //localStorage.setItem("lastname", temp[0]);
        }
    });

    
  
    return false;
}



function qtych(){
   var qtd=document.getElementById("qtid").value;
   if(qtd=='')
   {
    qtd=0;
   }
  
  var value =document.getElementById("sellid").value;
  value=parseFloat(value).toFixed(2);
  qtd=parseFloat(qtd).toFixed(2);
  var total=qtd*value;
  total=parseFloat(total).toFixed(2);
  
    document.getElementById("totid").value=total;
  

}
function spch(){
   var srr=document.getElementById("sellid").value;
    srr=parseFloat(srr).toFixed(2);
    var qt=document.getElementById("qtid").value;
    qt=parseFloat(qt).toFixed(2);
     if(qt=='')
   {
    qt=0;
   }
   
     if(isNaN(srr))
     {
      srr=0;
     }
   
    var total=qt*srr;
  total=parseFloat(total).toFixed(2);
   document.getElementById("totid").value=total;

  }


        function setTwoNumberDecimal(event) {
    this.value = parseFloat(this.value).toFixed(2);
}
    
        function updateId(id)
{
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
        {
            location.reload();
        }
    };
    xmlhttp.open("GET", "/upd/" +id, true);
    xmlhttp.send();
}
 function updId(id)
{
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
        {
            location.reload();
        }
    };
    xmlhttp.open("GET", "/updt/" +id, true);
    xmlhttp.send();
}
  function updateId1(id)
{
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
        {
            location.reload();
        }
    };
    xmlhttp.open("GET", "/upd1/" +id, true);
    xmlhttp.send();
}
 function updId1(id)
{
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
        {
            location.reload();
        }
    };
    xmlhttp.open("GET", "/updt1/" +id, true);
    xmlhttp.send();
}
 function updateId2(id)
{
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
        {
            location.reload();
        }
    };
    xmlhttp.open("GET", "/upd2/" +id, true);
    xmlhttp.send();
}
 function updId2(id)
{
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
        {
            location.reload();
        }
    };
    xmlhttp.open("GET", "/updt2/" +id, true);
    xmlhttp.send();
}
function updateId3(id)
{
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
        {
            location.reload();
        }
    };
    xmlhttp.open("GET", "/upd3/" +id, true);
    xmlhttp.send();
}
 function updId3(id)
{
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
        {
            location.reload();
        }
    };
    xmlhttp.open("GET", "/updt3/" +id, true);
    xmlhttp.send();
}
function updateId4(id)
{
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
        {
            location.reload();
        }
    };
    xmlhttp.open("GET", "/upd4/" +id, true);
    xmlhttp.send();
}
 function updId4(id)
{
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
        {
            location.reload();
        }
    };
    xmlhttp.open("GET", "/updt4/" +id, true);
    xmlhttp.send();
}
</script>


</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">Velacctv ERP</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <!--<li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>-->
                        <!--<li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>-->
                        <!--<li class="divider"></li>-->
                        <li><a href="/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                         <li><a href="/inv"><i class="fa fa-quote-left fa-fw"></i> Invoice and Quotation<span class="fa arrow"></span></a>
                          <ul class="nav nav-second-level">
                                <li>
                                    <a href="/inv">Add</a>
                                </li>
                                <li>
                                    <a href="/invlist">Manage</a>
                                </li>
                                  </ul>
                             </li>
                         <li>
                        
                            <a href="/addpro"><i class="fa fa-product-hunt fa-fw"></i> Products<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="/addpro">Add</a>
                                </li>
                                <li>
                                    <a href="/viewpro">Manage</a>
                                </li>
                                
                              
                                
                            </ul>
                        
                        </li>

                       <li>
                            <a href="/term"><i class="fa fa-info-circle fa-fw"></i> Terms and conditions<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="/term">Add</a>
                                </li>
                                <li>
                                    <a href="/viewterm">Manage</a>
                                </li>
                                
                              
                                
                            </ul>
                        
                        </li>
                                 <li>
                           <a href=""><i class="fa fa-gear fa-fw"></i> Settings<span class="fa arrow"></span></a>
                           <ul class="nav nav-second-level">

                                    <li>
                        
                            <a href="/tunadd1"><i class="fa fa-apple fa-fw"></i> Brand<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="/tunadd1">Add</a>
                                </li>
                                <li>
                                    <a href="/unedd1">Manage</a>
                                </li>
                                
                              
                                
                            </ul>
                        
                        </li>
                         <li>
                        
                            <a href="/tunadd"><i class="fa fa-balance-scale fa-fw"></i> Units<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="/tunadd">Add</a>
                                </li>
                                <li>
                                    <a href="/unedd">Manage</a>
                                </li>
                                
                              
                                
                            </ul>
                        
                        </li>
                         <li>
                        
                            <a href="/tunadd11"><i class="fa fa-image fa-fw"></i>Images</span></a>
                           
                        
                        </li>


                
                      </ul>
                      </li>
                         <?php if(Request::segment(1)=='editmm'){ ?>
                        <li>
                            <a href="/term"><i class="fa fa-gear fa-spin"></i> Print Options<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="/editinv/add/<?php echo $nps->cid; ?>">Edit</a>
                                </li>
                                <li>
                                    <a href="#myModal1" data-toggle="modal" data-target="#myModal1">Note</a>
                                     
                                </li>
                                <li>
                                    <a href="/buycopy/<?php echo $nps->cid; ?>">Buyers copy</a>
                                </li>
                                <li>
                                    <a href="/sellcopy/<?php echo $nps->cid; ?>">Sellers copy</a>
                                </li>
                                
                              
                                
                            </ul>
                        
                        </li>
                      <?php } ?>
                       
                                            </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
            
