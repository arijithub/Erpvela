<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

use DB;

class ErpController extends Controller
{
    
      public function index(Request $request)
    {
        
        //return view('admin/pages/header');
     //  $users = DB::table('banner')->get();
      //if($request->session()->get('sess')=='success')
        //   {
      
        if($request->session()->get('sess')=='success')
           {
        return redirect('/inv');
      }
      else
{
  return view('pages/login');
}

//}
//else
//{
  // return redirect('/login');
//}

  //  }
}

 public function invlshow(Request $request)
    {

$qsers = DB::table('custin')
    ->orderBy('cid', 'desc')
  ->get();

  if($request->session()->get('sess')=='success')
           {

            $c11 = Input::get('tc');
        $c13 = Input::get('ta');
         $c14 = Input::get('ac');
        // echo $c11;
         $max2 = DB::table('custin')->max('cid');
         $id1= DB::table('custin')->where('cid',$max2)->update(
          ['tc'=>$c11,'ta'=>$c13,'ac'=>$c14]
            );
         ?>
         <!--<script>alert('Form submitted successfully');window.location.href='/inv';</script>-->
         <?php
                    
                 return view('pages/listview',['qsers'=>$qsers]);
                  }
else
{
  return view('pages/login');
}


      }

 public function proinsert(Request $request)
    {
    	 $sub=Input::get('sub');
        if(isset($sub))
        {
           $bdet = Input::get('brand');
        $s1det = Input::get('spec1');
        $s2det = Input::get('spec2');
        $s3det = Input::get('spec3');
        $tdet = Input::get('type');
        $prodet = Input::get('product');
         $hsn = Input::get('hsn');
        //$title3 = Input::get('product_full_name');
        $pfull="";
        if($bdet!='')
        {
        $pfull=$bdet.'_';
         }
         if($s1det!='')
         {
         	$pfull=$pfull.$s1det.'_';
         } 
         if($s2det!='')
         {
         	$pfull=$pfull.$s2det.'_';
         }
         if($s3det!='')
         {
         	$pfull=$pfull.$s3det.'_';
         }
         if($tdet!='')
         {
         	$pfull=$pfull.$tdet.'_';
         }     
           $pfull=$pfull.$prodet;
        $moddet = Input::get('model');
        $undet = Input::get('unit');
        $wndet = Input::get('wn');
        $wtdet = Input::get('wt');
        $wardet=$wndet.' '.$wtdet;
        $cpdet = Input::get('purchase_price');
        $spdet = Input::get('selling_price');
        $gstdet = Input::get('gstper');
       $totp=$spdet+(($gstdet/100.00)*$spdet);
       $id= DB::table('products')->insertGetId(
          ['brand'=>$bdet,'spec1'=>$s1det,'spec2'=>$s2det,'spec3'=>$s3det,'type'=>$tdet,'product'=>$prodet,'hsn'=>$hsn,'product_full_name'=>$pfull,'model'=>$moddet,'unit'=>$undet,'warranty'=>$wardet,'purchase_price'=>$cpdet,'selling_price'=>$spdet,'gst'=>$gstdet,'totprice'=>$totp]
            );
       if(isset($id)&&$request->session()->get('sess')=='success')
          {
            ?>
           <script> alert('Product added successfully');window.location.href='/';</script>
            <?php
              
               
           }else{

           }
           
       }
    }

    public function prounsert(Request $request)
    {
       $sub=Input::get('sub');
        if(isset($sub))
        {
            $s3det = Input::get('untt');

             $id= DB::table('unitab')->insertGetId(
          ['unitname'=>$s3det]
            );

             if(isset($id)&&$request->session()->get('sess')=='success')
          {
            ?>
           <script> alert('Unit added successfully');window.location.href='/tunadd';</script>
            <?php
              
               
           }
        }
      }

          public function prounsert1(Request $request)
    {
       $sub=Input::get('sub');
        if(isset($sub))
        {
            $s3det = Input::get('untt');

             $id= DB::table('brandtab')->insertGetId(
          ['bname'=>$s3det]
            );

             if(isset($id)&&$request->session()->get('sess')=='success')
          {
            ?>
           <script> alert('Brand added successfully');window.location.href='/tunadd1';</script>
            <?php
              
               
           }
        }
      }

       public function prounsert11(Request $request)
    {
       $sub=Input::get('sub');
        if(isset($sub))
        {
          $hid = Input::get('hid');
            $s3det = Input::get('untt');
            $s3det1 = Input::get('untt1');
              if($hid==''){
             $id= DB::table('img')->insertGetId(
          ['hmg'=>$s3det,'fmg'=>$s3det1]
            );
           }
           if($hid!=''){
             $id= DB::table('img')->where('imgid',$hid)->update(
          ['hmg'=>$s3det,'fmg'=>$s3det1]
            );
           }

             if(isset($id)&&$request->session()->get('sess')=='success')
          {
            ?>
           <script> alert('Images added successfully');window.location.href='/tunadd11';</script>
            <?php
              
               
           }
        }
      }


      public function unshow(Request $request){
              if($request->session()->get('sess')=='success')
           {
                 return view('pages/unad');
                  }
else
{
  return view('pages/login');
}
}

 public function unshow1(Request $request){
              if($request->session()->get('sess')=='success')
           {
                 return view('pages/unad1');
                  }
else
{
  return view('pages/login');
}
}

public function unshow11(Request $request){
   $ung = DB::table('img')->get();
              if($request->session()->get('sess')=='success')
           {
                 return view('pages/unad11',['ung'=>$ung]);
                  }
else
{
  return view('pages/login');
}
}
     public function proch(Request $request){
     	
     		
     	

     	 $sub=Input::get('sub');
        if(isset($sub))
        {
           $in = Input::get('inid');
        $sn = Input::get('sellids');
        $qn = Input::get('qtids');
             $tt=  Input::get('tot');
        $pid = DB::table('products')->where('product_full_name', $in)->value('pid');
       $id= DB::table('prodin')->insertGetId(
          ['pid'=>$pid,'prod_name'=>$in,'qty'=>$qn,'sp'=>$sn,'totpro'=>$tt]
            );
       
        $c1 = Input::get('cmob');
       $maxcid = DB::table('custin')->max('cid');

       $nm = DB::table('custin')->where('cid', '=', $maxcid)->value('cname');
	$mob = DB::table('custin')->where('cid', '=', $maxcid)->value('cmob');
	
     if($nm==''||$mob!=$c1)
       {
         $c111 = Input::get('cname');
       
       
        $c2 = Input::get('cmail');
        $c3 = Input::get('cgst');
        $c4 = Input::get('cadd');
        $c5 = Input::get('quot');
         $c6 = Input::get('indt');
          $c7 = Input::get('cord');
        $c8 = Input::get('oord');
        $c9 = Input::get('cterm');
        $c10 = Input::get('note');
        $c11 = Input::get('tc');
        $c13 = Input::get('ta');
         $c12 = Input::get('optradio');
         $c14 = Input::get('ac');
          $c15 = Input::get('adj');
           $c16 = Input::get('adj1');
           $maxmg = DB::table('img')->max('imgid');
            $hm = DB::table('img')->where('imgid', '=', $maxmg)->value('hmg');
  $gm = DB::table('img')->where('imgid', '=', $maxmg)->value('fmg');
                 
                   $id1= DB::table('custin')->insertGetId(
          ['cname'=>$c111,'cmob'=>$c1,'cmail'=>$c2,'qtype'=>$c12,'cgst'=>$c3,'cadd'=>$c4,'quot'=>$c5,'indt'=>$c6,'cord'=>$c7,'oord'=>$c8,'cterm'=>$c9,'note'=>$c10,'tc'=>$c11,'ta'=>$c13,'ac'=>$c14,'adjust'=>$c15,'ads'=>$c16,'hmg'=>$hm,'fmg'=>$gm]
            );
                    $max2 = DB::table('prodin')->max('cid');
                    $ppid = DB::table('prodin')->where('cid', $max2)->value('pid');
                  $ppr = DB::table('products')->where('pid', $ppid)->value('purchase_price');
                  $ttcp = DB::table('custin')->where('cid', $max2)->value('tcp');

                 $ppr=(float)$ppr;
                 $ttcp=(float)$ttcp;
                 $ppr=(float)($ppr+$ttcp);
             

           
                  $id88= DB::table('custin')->where('cid','=',$max2)->update(['tcp'=>$ppr]);
             
           //   $id9= DB::table('prodin')->where('cid','=',null)->update(['cid'=>$maxcid]);      

       if(isset($id1))
          {
          	
            $id7= DB::table('prodin')->where('cid','=',null)->update(['cid'=>$id1]);
           
             $max = DB::table('prodin')->max('cid');
       $price = DB::table('prodin')
                ->where('cid', $max)
                ->sum('totpro');
                 $id8= DB::table('custin')->where('tsp','=',null)->update(['tsp'=>$price]);

                    

          	 //return redirect('/inv'); 
                    
           }
       }
       $id9= DB::table('prodin')->where('cid','=',null)->update(['cid'=>$maxcid]);
      
        $max1 = DB::table('prodin')->max('cid');
       $price1 = DB::table('prodin')
                ->where('cid', $max1)
                ->sum('totpro');

                  $id8= DB::table('custin')->where('cid','=',$max1)->update(['tsp'=>$price1]);
                   
                   $maxn = DB::table('prodin')->max('prid');
                   $ppid = DB::table('prodin')->where('prid', $maxn)->value('pid');
                  $ppr = DB::table('products')->where('pid', $ppid)->value('purchase_price');
                  $ttcp = DB::table('custin')->where('cid', $max1)->value('tcp');

                 $ppr=(float)$ppr;
                 $ttcp=(float)$ttcp;
                 $ppr=(float)($ppr+$ttcp);
             

           
                  $id88= DB::table('custin')->where('cid','=',$max1)->update(['tcp'=>$ppr]);
           if(isset($id)&&$request->session()->get('sess')=='success')
          {
                 return redirect('/inv/add/#show');
           }else{

           }
           

        
    }
     }

      public function proch11(Request $request){
      
        
      $kk=Input::get('hid');
     // echo $kk;
       $c111 = Input::get('cname');
       $c5 = Input::get('quot');
        $cq = Input::get('quot1');
      $j2 = Input::get('hhd11');
       $j3 = Input::get('hhd111');
        $j31 = Input::get('hhd1111');
           $in = Input::get('inid');
        $sn = Input::get('sellids');
        $qn = Input::get('qtids');
        $hn = Input::get('hidjana');
         $pid = DB::table('products')->where('product_full_name', $in)->value('pid');
        
             $tt=  Input::get('tot');
                $ggh1 = Input::get('arhid');
       
       

          $pro=DB::table('prodin')->select('prid','pid','qty','sp','prod_name','totpro')->where('cid',$kk)->get();
         
    
       
        $c1 = Input::get('cmob');
       $maxcid = DB::table('custin')->max('cid');

       $nm = DB::table('custin')->where('cid', '=', $maxcid)->value('cname');
  $mob = DB::table('custin')->where('cid', '=', $maxcid)->value('cmob');
  
    
        // $c111 = Input::get('cname');
       
       
        $c2 = Input::get('cmail');
        $c3 = Input::get('cgst');
        $c4 = Input::get('cadd');
        
         $c6 = Input::get('indt');
          $c7 = Input::get('cord');
        $c8 = Input::get('oord');
        $c9 = Input::get('cterm');
        $c10 = Input::get('note');
        $c11 = Input::get('tc');
        $c13 = Input::get('ta');
         $c12 = Input::get('optradio');
         $c14 = Input::get('ac');
          $c15 = Input::get('adj');
           $c16 = Input::get('adj1');
           $ggh = Input::get('arhid');
            $max22 = DB::table('custin')->max('cid');
                    $ppid1 = DB::table('custin')->where('cid', $max22)->value('quot');
                    $ppid2 = DB::table('custin')->where('cid', $max22)->value('rpn');
                     $maxmg = DB::table('img')->max('imgid');
            $hm = DB::table('img')->where('imgid', '=', $maxmg)->value('hmg');
  $gm = DB::table('img')->where('imgid', '=', $maxmg)->value('fmg');
                    if($cq!=$ppid2){
                
                   $id1= DB::table('custin')->insertGetId(
                 
          ['cname'=>$c111,'cmob'=>$c1,'cmail'=>$c2,'qtype'=>$c12,'cgst'=>$c3,'cadd'=>$c4,'quot'=>$c5,'indt'=>$c6,'cord'=>$c7,'oord'=>$c8,'cterm'=>$c9,'note'=>$c10,'tc'=>$c11,'ta'=>$c13,'ac'=>$c14,'adjust'=>$c15,'ads'=>$c16,'rpn'=>$cq,'hmg'=>$hm,'fmg'=>$gm]
            );


                   

                       if($request->session()->has('edidum')){

              

          $uss1 = DB::table('prodin')
            ->join('delpid', 'prodin.prod_name', '=', 'delpid.prod_name')
            ->select('prodin.*')
            ->where('prodin.cid',$kk)
            ->get();
            
            //$max224 = DB::table('custin')->max('cid');
            foreach($uss1 as $usr){
              echo $usr->prod_name."<br>";
              
               DB::table('prodin')->insertGetId(
         
          ['pid'=>$usr->pid,'prod_name'=>$usr->prod_name,'qty'=>$usr->qty,'sp'=>$usr->sp,'totpro'=>$usr->totpro,'cid'=>$id1]
            );
            


         }

    
            

             foreach($pro as $pros){
               $pid1 = DB::table('products')->where('product_full_name', $pros->prod_name)->value('pid');



        if($pros->prod_name!=''){
        
         if($pid1!=''){
          
            $id121= DB::table('prodin')->insertGetId(
         
          ['pid'=>$pid1,'prod_name'=>$pros->prod_name,'qty'=>$pros->qty,'sp'=>$pros->sp,'totpro'=>$pros->totpro,'cid'=>$id1]
            );
       
         }


        //echo $hn."<br>";

            

           // $request->session()->forget('edidum');
        }
      }
     


      
      if($pid!=''&&!$request->session()->has('edidum')){
        
        DB::table('prodin')->insertGetId(
          ['pid'=>$pid,'prod_name'=>$in,'qty'=>$qn,'sp'=>$sn,'totpro'=>$tt,'cid'=>$id1]
            );

            }
 $maxcid1 = DB::table('custin')->max('cid');
 echo $maxcid1."<br>";
 
             DB::table('prodin')->where([
    ['pid', '=', $hn],
    ['cid', '=', $maxcid1]
])->delete();

             
            
            
           // $request->session()->forget('edidum');
        }


                  /*
                   if(isset($ggh)){
                    $m = DB::table('deftab')->max('did');
                    $id11= DB::table('deftab')->where('did',$m)->update(
          ['tc'=>$c11]
            );
                      $id11= DB::table('deftab')->where('did',$m)->update(
          ['ta'=>$c13]
            );
                        $id11= DB::table('deftab')->where('did',$m)->update(
          ['ac'=>$c14]
            );
                      }
                      */
                 }
                  if($cq==$ppid2){
                     $max223 = DB::table('custin')->max('cid');
                    $id123= DB::table('custin')->where('cid',$max223)->update(
                 
          ['cname'=>$c111,'cmob'=>$c1,'cmail'=>$c2,'qtype'=>$c12,'cgst'=>$c3,'cadd'=>$c4,'quot'=>$c5,'indt'=>$c6,'cord'=>$c7,'oord'=>$c8,'cterm'=>$c9,'note'=>$c10,'tc'=>$c11,'ta'=>$c13,'ac'=>$c14,'adjust'=>$c15,'ads'=>$c16]
            );
 
                                           if($request->session()->has('edidum')){

                                             $uss1 = DB::table('prodin')
            ->join('delpid', 'prodin.pid', '=', 'delpid.dpid')
            ->select('prodin.*')
            ->where('prodin.cid',$kk)
            ->get();
          //  print_r($uss);
            //$max224 = DB::table('custin')->max('cid');
            foreach($uss1 as $usr){
              
               DB::table('prodin')->insertGetId(
         
          ['pid'=>$usr->pid,'prod_name'=>$usr->prod_name,'qty'=>$usr->qty,'sp'=>$usr->sp,'totpro'=>$usr->totpro,'cid'=>$id1]
            );
            


         }
            

             foreach($pro as $pros){
$pid11 = DB::table('products')->where('product_full_name', $pros->prod_name)->value('pid');
        if($pros->prod_name!=''){
        
         if($pid11!=''){
          
            $id121= DB::table('prodin')->insertGetId(
         
          ['pid'=>$pid11,'prod_name'=>$pros->prod_name,'qty'=>$pros->qty,'sp'=>$pros->sp,'totpro'=>$pros->totpro,'cid'=>$id1]
            );
       
         }
        

        //echo $hn."<br>";

            

           // $request->session()->forget('edidum');
        }
      }
      

         

       
     
      

      
      if($pid!=''&&!$request->session()->has('edidum')){
        
        DB::table('prodin')->insertGetId(
          ['pid'=>$pid,'prod_name'=>$in,'qty'=>$qn,'sp'=>$sn,'totpro'=>$tt,'cid'=>$id1]
            );

            }
 $maxcid1 = DB::table('custin')->max('cid');
 echo $maxcid1."<br>";
 
             DB::table('prodin')->where([
    ['pid', '=', $hn],
    ['cid', '=', $maxcid1]
])->delete();

           
                 
          
               
               
          
            
            
           // $request->session()->forget('edidum');
        }

/*
        if(isset($ggh)){
                    $m = DB::table('deftab')->max('did');
                    $id11= DB::table('deftab')->where('did',$m)->update(
          ['tc'=>$c11]
            );
                      $id11= DB::table('deftab')->where('did',$m)->update(
          ['ta'=>$c13]
            );
                        $id11= DB::table('deftab')->where('did',$m)->update(
          ['ac'=>$c14]
            );
                      }
                      */
                 }
                 

                  if($pid!=''){
            
       $id= DB::table('prodin')->insertGetId(
          ['pid'=>$pid,'prod_name'=>$in,'qty'=>$qn,'sp'=>$sn,'totpro'=>$tt]
            );
            
     }


                  



                  if(!isset($ggh1)&&!$request->session()->has('edidum')){
      //echo "hello";
      
       foreach($pro as $pros){

        if($pros->prod_name!=''){
         $pid1 = DB::table('products')->where('product_full_name', $pros->prod_name)->value('pid');
         $max22 = DB::table('custin')->max('cid');
          $max224 = DB::table('prodin')->max('cid');
                    $ppid1 = DB::table('custin')->where('cid', $kk)->value('quot');
          if($ppid1!=$c5){
        $id= DB::table('prodin')->insertGetId(
          ['pid'=>$pid1,'prod_name'=>$pros->prod_name,'qty'=>$pros->qty,'sp'=>$pros->sp,'totpro'=>$pros->totpro]
            );
         $id79= DB::table('prodin')->where('cid','=',null)->update(['cid'=>$max22]);
        if($pid1==''){
          //echo "hello";
           $uss = DB::table('prodin')
            ->join('delpid', 'prodin.pid', '=', 'delpid.dpid')
            ->select('prodin.*')
            ->where('prodin.cid',$kk)
            ->get();
          //  print_r($uss);
            foreach($uss as $usr){
              echo $usr->cid."<br>";
              $id886= DB::table('prodin')-> where([
    ['prod_name', '=', $usr->prod_name],
    ['cid', '=', $max22],
])->update(['pid'=>$usr->pid]);
            }

        }
      }
      
       }
     }
 }
          
               if(isset($ggh1)&&!$request->session()->has('edidum')){
       $pro=DB::table('prodin')->select('prid','pid','qty','sp','prod_name','totpro')->where('cid',$ggh1)->get();
        foreach($pro as $pros){

        if($pros->prod_name!=''){
         $pid1 = DB::table('products')->where('product_full_name', $pros->prod_name)->value('pid');
         $max22 = DB::table('custin')->max('cid');
                    $ppid1 = DB::table('custin')->where('cid', $request->segment(3))->value('quot');
       
        $id55= DB::table('prodin')->insertGetId(
          ['pid'=>$pid1,'prod_name'=>$pros->prod_name,'qty'=>$pros->qty,'sp'=>$pros->sp,'totpro'=>$pros->totpro]
            );
         $pid1 = DB::table('products')->where('product_full_name', $pros->prod_name)->value('pid');
         $max22 = DB::table('custin')->max('cid');

         if($pid1==''){
          //echo "hello";
           $uss = DB::table('prodin')
            ->join('delpid', 'prodin.pid', '=', 'delpid.dpid')
            ->select('prodin.*')
            ->where('prodin.cid',$kk)
            ->get();
          //  print_r($uss);
            foreach($uss as $usr){
              echo $usr->cid."<br>";
              $id886= DB::table('prodin')-> where([
    ['prod_name', '=', $usr->prod_name],
    ['cid', '=', $max22],
])->update(['pid'=>$usr->pid]);
            }

        }
      
       }
     }
     
     }        
                 
                 if(!isset($in)){
                    $max2 = DB::table('custin')->max('cid');
                     $max20 = DB::table('prodin')->max('cid');
                    //$ppid = DB::table('prodin')->where('cid', $max2)->value('purchase_price');
                    $ppid = DB::table('products')
            ->join('prodin', 'products.pid', '=', 'prodin.pid')
            ->select('products.purchase_price')
            ->where('prodin.cid',$max20)
            ->get();

                 // $ppr = DB::table('products')->where('pid', $ppid)->value('purchase_price');
                 // $ttcp = DB::table('custin')->where('cid', $max2)->value('tcp');
                 $ppr=0;
                 $kkr=0;
                 $ppr=(float)$ppr;
                 $kkr=(float)$kkr;
                 //$ttcp=(float)$ttcp;
                 //$ppr=(float)($ppr+$ttcp);
             foreach($ppid as $pd){
              $ppr=$ppr+$pd->purchase_price;
             }

              $uss = DB::table('prodin')
            ->join('delpid', 'prodin.pid', '=', 'delpid.dpid')
            ->select('delpid.*')
            ->where('prodin.cid',$max2)
            ->get();
          //  print_r($uss);
            foreach($uss as $usr){
            	$kkr=$kkr+$usr->cp;

            }
                echo "<h1>".$kkr."</h1>";
           
                  $id88= DB::table('custin')->where('cid','=',$max2)->update(['tcp'=>$ppr+$kkr]);
                }
                
             
           //   $id9= DB::table('prodin')->where('cid','=',null)->update(['cid'=>$maxcid]);      
        
       if(isset($id1))
          {
           
            $id7= DB::table('prodin')->where('cid','=',null)->update(['cid'=>$id1]);
              $max2 = DB::table('custin')->max('cid');
                     $max20 = DB::table('prodin')->max('cid');
                  //   echo $max20;
                   //  echo $id1;
                    //$ppid = DB::table('prodin')->where('cid', $max2)->value('purchase_price');
                     //echo $id1;
                    $ppid = DB::table('products')
            ->join('prodin', 'products.pid', '=', 'prodin.pid')
            ->select('products.purchase_price')
            ->where('prodin.cid',$id1)
            ->get();

                 // $ppr = DB::table('products')->where('pid', $ppid)->value('purchase_price');
                 // $ttcp = DB::table('custin')->where('cid', $max2)->value('tcp');
                 $ppr=0;
                 $kkr=0;
                 $ppr=(float)$ppr;
                 $kkr=(float)$kkr;
                 //$ttcp=(float)$ttcp;
                 //$ppr=(float)($ppr+$ttcp);
                 $uss = DB::table('prodin')
            ->join('delpid', 'prodin.pid', '=', 'delpid.dpid')
            ->select('delpid.*')
            ->where('prodin.cid',$max2)
            ->get();
          //  print_r($uss);
            foreach($uss as $usr){
            	$kkr=$kkr+$usr->cp;

            }
             foreach($ppid as $pd){
              $ppr=$ppr+$pd->purchase_price;
             }
               echo "<h1>".$kkr."</h1>";

          // echo $max2;
                 $id88= DB::table('custin')->where('cid','=',$max2)->update(['tcp'=>$ppr+$kkr]);
           
             $max = DB::table('prodin')->max('cid');
       $price = DB::table('prodin')
                ->where('cid', $max)
                ->sum('totpro');
                 $id8= DB::table('custin')->where('tsp','=',null)->update(['tsp'=>$price]);

                    

             //return redirect('/inv'); 
                    
           }

           if(isset($id)){
             $id9= DB::table('prodin')->where('cid','=',null)->update(['cid'=>$maxcid]);
           	  $max2 = DB::table('custin')->max('cid');
                     $max20 = DB::table('prodin')->max('cid');
                  //   echo $max20;
                   //  echo $id1;
                    //$ppid = DB::table('prodin')->where('cid', $max2)->value('purchase_price');
                    // echo $id1;
                    $ppid = DB::table('products')
            ->join('prodin', 'products.pid', '=', 'prodin.pid')
            ->select('products.purchase_price')
            ->where('prodin.cid',$max2)
            ->get();

                 // $ppr = DB::table('products')->where('pid', $ppid)->value('purchase_price');
                 // $ttcp = DB::table('custin')->where('cid', $max2)->value('tcp');
                 $ppr=0;
                 $kkr=0;
                 $ppr=(float)$ppr;
                 $kkr=(float)$kkr;
                 //$ttcp=(float)$ttcp;
                 //$ppr=(float)($ppr+$ttcp);
                 $uss = DB::table('prodin')
            ->join('delpid', 'prodin.pid', '=', 'delpid.dpid')
            ->select('delpid.*')
            ->where('prodin.cid',$max2)
            ->get();
          //  print_r($uss);
            foreach($uss as $usr){
            	$kkr=$kkr+$usr->cp;

            }
                 //$ttcp=(float)$ttcp;
                 //$ppr=(float)($ppr+$ttcp);
             foreach($ppid as $pd){
              $ppr=$ppr+$pd->purchase_price;
             }

        //   echo $ppr;
          // echo $max2;
             echo "<h1>".$kkr."</h1>";
                 $id88= DB::table('custin')->where('cid','=',$max2)->update(['tcp'=>$ppr+$kkr]);
           
             $max = DB::table('prodin')->max('cid');
       $price = DB::table('prodin')
                ->where('cid', $max)
                ->sum('totpro');
                 $id8= DB::table('custin')->where('tsp','=',null)->update(['tsp'=>$price]);





           }
       
       $id9= DB::table('prodin')->where('cid','=',null)->update(['cid'=>$maxcid]);
      
        $max1 = DB::table('prodin')->max('cid');
       $price1 = DB::table('prodin')
                ->where('cid', $max1)
                ->sum('totpro');

                  $id8= DB::table('custin')->where('cid','=',$max1)->update(['tsp'=>$price1]);
                   /*
                   $maxn = DB::table('prodin')->max('cid');
                   $ppid = DB::table('prodin')->where('prid', $maxn)->value('pid');
                  $ppr = DB::table('products')->where('pid', $ppid)->value('purchase_price');
                  $ttcp = DB::table('custin')->where('cid', $max1)->value('tcp');

                 $ppr=(float)$ppr;
                 $ttcp=(float)$ttcp;
                 $ppr=(float)($ppr+$ttcp);
             
    
           
                  $id88= DB::table('custin')->where('cid','=',$max1)->update(['tcp'=>$ppr]);
                  */
                   if(isset($ggh)){
            return redirect('/invlist');
           }
            if(isset($id)&&!isset($j2)&&!isset($j3)&&$request->session()->get('sess')=='success')
          {
                return redirect('/inv/add1/#show');
           }
           if(isset($j2)){
             return redirect('/proedit1/'.$j2.'/#show');
           }
           if(isset($j3)){
            return redirect('/prodel1/'.$j3.'/'.$j31.'/#show');
           }
           $ta22=Input::get('hid22');
           if(isset($ta22)){
             $ta1 = Input::get('hid23');
               $ta2 = Input::get('hid24');
               if($ta2=='tc'||$ta2=='ta'||$ta2=='ac'){
               	 return redirect($ta1);
               }
               echo $ta1;
           }
          
           

        
    
     }
     public function proadd(Request $request)
    {
        
        //return view('admin/pages/header');
     //  $users = DB::table('banner')->get();
      //if($request->session()->get('sess')=='success')
        //   {

if($request->session()->get('sess')=='success')
           {
        return view('pages/protoadd');
        }
else
{
  return view('pages/login');
}
//}
//else
//{
  // return redirect('/login');
//}

  //  }
}
 public function proshow(Request $request,$id)
    {
        $upro = DB::table('prodin')->get()->where('prid',$id);
       
           $prodjn = DB::table('products')
            ->join('prodin', 'products.pid', '=', 'prodin.pid')
            ->select('products.product_full_name')
           ->get();
           $pro=DB::table('prodin')->select('prid','pid','qty','sp','prod_name','totpro')->where('prid',$id)->get();
           $maxcid = DB::table('custin')->max('cid');
	//$mid = DB::table('custin')->where('cid', '=', $maxcid)->get();
         $prot=DB::table('prodin')->where('cid', '=', $maxcid)->get();
          $users = DB::table('products')->select('pid','brand','spec1','spec2','type','product','hsn','product_full_name','model','unit','warranty','purchase_price','selling_price','gst','totprice')->where('pid','!=','$id')->get();
           $maxcid = DB::table('custin')->max('cid');
	$mid = DB::table('custin')->where('cid', '=', $maxcid)->get();
  $tmm = DB::table('custin')->where('cid', '=', $maxcid)->value('cterm');
        $mt = DB::table('terms')->get()->where('tmt','!=',$tmm);
        if($request->session()->get('sess')=='success')
           {
        return view('pages/protoadd', ['pru' => $upro,'proins'=>$pro,'prodjn'=>$prodjn,'users'=>$users,'proj'=>$prot,'mid'=>$mid,'mtt'=>$mt]);
    }
else
{
  return view('pages/login');
}
         }

          public function proshow1(Request $request,$id)
    {
        $upro = DB::table('prodin')->get()->where('prid',$id);
       
           $prodjn = DB::table('products')
            ->join('prodin', 'products.pid', '=', 'prodin.pid')
            ->select('products.product_full_name')
           ->get();
           $pro=DB::table('prodin')->select('prid','pid','qty','sp','prod_name','totpro')->where('prid',$id)->get();
           $maxcid = DB::table('custin')->max('cid');
  //$mid = DB::table('custin')->where('cid', '=', $maxcid)->get();
         $prot=DB::table('prodin')->where('cid', '=', $maxcid)->get();
          $users = DB::table('products')->select('pid','brand','spec1','spec2','type','product','hsn','product_full_name','model','unit','warranty','purchase_price','selling_price','gst','totprice')->where('pid','!=','$id')->get();
           $maxcid = DB::table('custin')->max('cid');
  $mid = DB::table('custin')->where('cid', '=', $maxcid)->get();
  $tmm = DB::table('custin')->where('cid', '=', $maxcid)->value('cterm');
        $mt = DB::table('terms')->get()->where('tmt','!=',$tmm);
         $proin1=DB::table('prodin')->where('cid', '=', $maxcid)->get();
         $upac = DB::table('prodin')
            ->join('delpid', 'prodin.pid', '=', 'delpid.dpid')
            ->select('prodin.*')
            ->where('prodin.cid',$maxcid)
            ->get();
            $proin2= DB::table('delpid')
            ->leftJoin('prodin', 'prodin.prod_name', '=', 'delpid.prod_name')
            ->select('prodin.*','delpid.*')
            -> where([
   
    ['prodin.cid', '=', $maxcid],
    
])
            

            ->get();
            $pror=array();
            foreach($proin2 as $prons){
              array_push($pror,$prons->prod_name);
            }
      $proin = DB::table('prodin')
      -> where([
   
    ['cid', '=', $maxcid],
    
])
                    ->whereNotIn('prod_name',$pror)
                    ->get();
        if($request->session()->get('sess')=='success')
           {
        return view('pages/editinvo1', ['pru' => $upro,'proins'=>$pro,'prodjn'=>$prodjn,'users'=>$users,'mid'=>$mid,'upac'=>$upac,'mtt'=>$mt,'proin'=>$proin]);
    }
else
{
  return view('pages/login');
}
         }
         public function prochet(Request $request){
         	 $sub=Input::get('sub');
        if(isset($sub))
        {
        	$hd = Input::get('hid');
                $in = Input::get('inid');
        $sn = Input::get('sellids');
        $qn = Input::get('qtids');
             $tt=  Input::get('tot');
        $pid = DB::table('products')->where('product_full_name', $in)->value('pid');
     		$id= DB::table('prodin')->where('prid',$hd)->update(
          ['pid'=>$pid,'prod_name'=>$in,'qty'=>$qn,'sp'=>$sn,'totpro'=>$tt]
            );
       
             if(isset($id)&&$request->session()->get('sess')=='success')
          {
          	$max2 = DB::table('prodin')->max('cid');
       $price2 = DB::table('prodin')
                ->where('cid', $max2)
                ->sum('totpro');
                  $id8= DB::table('custin')->where('cid','=',$max2)->update(['tsp'=>$price2]);

                 return redirect('/inv/edit/#show');
           }else{

           }
     	}

         }
          public function prochet11(Request $request){
          
          $hd = Input::get('hidjan');
          //echo $hd;
                $in = Input::get('inid');
        $sn = Input::get('sellids');
        $qn = Input::get('qtids');
             $tt=  Input::get('tot');
             $max22 = DB::table('prodin')->max('cid');
             echo $max22;
                 //   $ppid1 = DB::table('custin')->where('cid', $max22)->value('cname');

        $pid = DB::table('products')->where('product_full_name', $in)->value('pid');
        $id= DB::table('prodin')-> where([
    ['pid', '=', $hd],
    ['cid', '=', $max22],
])->update(
          ['pid'=>$pid,'prod_name'=>$in,'qty'=>$qn,'sp'=>$sn,'totpro'=>$tt]
            );
            
       
             if(isset($id)&&$request->session()->get('sess')=='success')
          {
            $max2 = DB::table('prodin')->max('cid');
       $price2 = DB::table('prodin')
                ->where('cid', $max2)
                ->sum('totpro');
                  $id8= DB::table('custin')->where('cid','=',$max2)->update(['tsp'=>$price2]);

                 return redirect('/inv/edit1/#show');
           }else{

           }
      

         }


          public function delshow(Request $request,$id){
          	$ttd = DB::table('prodin')->where('prid', $id)->value('cid');
              $ttcp = DB::table('custin')->where('cid', $ttd)->value('tsp');
                $ttt = DB::table('prodin')->where('prid', $id)->value('totpro');
                 $ttcp=(float)$ttcp;
                 $ttt=(float)$ttt;
                 $ttcp=(float)($ttcp-$ttt);

                 $ttp = DB::table('prodin')->where('prid', $id)->value('pid');
                 $ttcr = DB::table('products')->where('pid', $ttp)->value('purchase_price');
                  $ttck = DB::table('custin')->where('cid', $ttd)->value('tcp');
                  $ttcr=(float)$ttcr;
                 $ttck=(float)$ttck;
                 $ttck=(float)($ttck-$ttcr);

           
                  $id88= DB::table('custin')->where('cid','=',$ttd)->update(['tsp'=>$ttcp]);
                  $id89= DB::table('custin')->where('cid','=',$ttd)->update(['tcp'=>$ttck]);
          	
          	$sc=DB::table('prodin')->where('prid',$id)->delete();

           if($sc!=''&&$request->session()->get('sess')=='success')
           {
             return redirect('/inv/delete/#show'); 
           }
          }

           public function delshow1(Request $request,$id1,$id2){
             $max22 = DB::table('prodin')->max('cid');
            $hd = $request->segment(2);
      
            $ttd = DB::table('prodin')-> where([
    ['pid', '=', $hd],
    ['cid', '=', $max22],
])->value('cid');
              $ttcp = DB::table('custin')->where('cid', $ttd)->value('tsp');
                $ttt = DB::table('prodin')-> where([
    ['pid', '=', $hd],
    ['cid', '=', $max22],
])->value('totpro');
                 $ttcp=(float)$ttcp;
                 $ttt=(float)$ttt;
                 $ttcp=(float)($ttcp-$ttt);

                
                        $kkr=0;
                   $kkr=(float)$kkr;
                    $kk = DB::table('custin')->max('cid');
                 //$ttcp=(float)$ttcp;
                 //$ppr=(float)($ppr+$ttcp);
                 $uss = DB::table('delpid')
            ->select('delpid.cp')
            ->where('delpid.dpid',$hd)
            ->get();
          //  print_r($uss);
            foreach($uss as $usr){
            	$kkr=$kkr+$usr->cp;

            }
                 $ttcr = DB::table('products')->where('pid', $hd)->value('purchase_price');
                  $ttck = DB::table('custin')->where('cid', $id2)->value('tcp');
                  $ttcr=(float)$ttcr;
                 $ttck=(float)$ttck;
                 if($ttcr!=''){
                 $ttck=(float)($ttck-$ttcr);
             }
             if($kkr!=''){
                    $ttck=(float)($ttck-$kkr);
             }
                 
          
               
               
            echo $ttck;
           
                  $id88= DB::table('custin')->where('cid','=',$ttd)->update(['tsp'=>$ttcp]);
                  $id89= DB::table('custin')->where('cid','=',$ttd)->update(['tcp'=>$ttck]);
            
            $sc=DB::table('prodin')-> where([
    ['pid', '=', $hd],
    ['cid', '=', $max22],
])->delete();

           if($request->session()->get('sess')=='success')
           {
             return redirect('/inv/delete1/#show'); 
           }
          }

            public function custshow(Request $request){
              if($request->session()->get('sess')=='success')
           {
                 return view('pages/custinvo');
                  }
else
{
  return view('pages/login');
}

            }
              public function csshow(Request $request){
                if($request->session()->get('sess')=='success')
           {
                 
          	 return redirect('/inv'); 
              }
else
{
  return view('pages/login');
}
                    
           

           
              }
                public function deftc(Request $request,$id)
    {

    	  $m = DB::table('deftab')->max('did');
    	   $mc = DB::table('custin')->max('cid');
    	   $r=$request->segment(2);
                   if($request->segment(1)=='tc')
                   {
                   $id1= DB::table('deftab')->where('did',$m)->update(
          ['tc'=>$r]
            );
               $id776= DB::table('custin')->where('cid',$mc)->update(
          ['tc'=>$r]
            );
           }
            if($request->segment(1)=='ta')
                   {
                   $id1= DB::table('deftab')->where('did',$m)->update(
          ['ta'=>$r]
            );
               $id776= DB::table('custin')->where('cid',$mc)->update(
          ['ta'=>$r]
            );
           }
            
             if($request->segment(1)=='ac')
                   {
                   $id1= DB::table('deftab')->where('did',$m)->update(
          ['ac'=>$r]
            );
               $id776= DB::table('custin')->where('cid',$mc)->update(
          ['ac'=>$r]
            );
           }
            
            
           // echo $id; 
         if($request->session()->get('sess')=='success')
           {  
   return redirect('/inv/deff/#show'); 
   }
else
{
  return view('pages/login');
}

}



             public function deftc11(Request $request,$id)
    {

        $m = DB::table('deftab')->max('did');
         $mc = DB::table('custin')->max('cid');
         $r=$request->segment(2);
                   if($request->segment(1)=='tc1')
                   {
                   $id1= DB::table('deftab')->where('did',$m)->update(
          ['tc'=>$r]
            );
               $id776= DB::table('custin')->where('cid',$mc)->update(
          ['tc'=>$r]
            );
           }
            if($request->segment(1)=='ta1')
                   {
                   $id1= DB::table('deftab')->where('did',$m)->update(
          ['ta'=>$r]
            );
               $id776= DB::table('custin')->where('cid',$mc)->update(
          ['ta'=>$r]
            );
           }
            
             if($request->segment(1)=='ac1')
                   {
                   $id1= DB::table('deftab')->where('did',$m)->update(
          ['ac'=>$r]
            );
               $id776= DB::table('custin')->where('cid',$mc)->update(
          ['ac'=>$r]
            );
           }
            
            
           // echo $id; 
         if($request->session()->get('sess')=='success')
           {  
   return redirect('/inv/deff1/#show'); 
   }
else
{
  return view('pages/login');
}

}

 public function listshow(Request $request)
    {
    	
    	 $t1 = Input::get('tsl');
        $t2 = Input::get('lsl');
        if($t2==''){
         $listr = DB::table('custin')
                ->where('cname', 'like','%'. $t1.'%')
                ->orWhere('cmob','like', '%'.$t1.'%')
                ->paginate(10);
                $listr->appends(['lsadd' => $t1]);
                 $listr1 = DB::table('custin')
                ->where('cname', 'like','%'. $t1.'%')
                ->orWhere('cmob','like', '%'.$t1.'%')
                ->get();
                //$listr->appends(['lsadd' => $t1]);
        }
        if($t2!=''){
        	/*
        $ls = DB::table('custin')
        ->where('qtype', $t2);
                ->or_where('cname', 'like','%'. $t1.'%')
                ->or_where('cmob','like','%'. $t1.'%')
                
                ->get();
                */
               $listr = DB::table('custin')
    ->where( function ( $query )
    {

    	 $t1 = Input::get('tsl');
        $t2 = Input::get('lsl');
        $query->where('cname', 'like','%'. $t1.'%')
            ->orWhere('cmob','like','%'. $t1.'%');
    })
    ->where('qtype', $t2)
    ->paginate(10);
     $listr->appends(['lsadd' => $t1]);

      $listr1 = DB::table('custin')
    ->where( function ( $query )
    {

       $t1 = Input::get('tsl');
        $t2 = Input::get('lsl');
        $query->where('cname', 'like','%'. $t1.'%')
            ->orWhere('cmob','like','%'. $t1.'%');
    })
    ->where('qtype', $t2)
    ->get();
            }
            if($t1==''){
            	$listr = DB::table('custin')
                ->where('qtype', $t2)
                    ->paginate(15);
                     $listr->appends(['lsadd' => $t2]);

                      $listr1 = DB::table('custin')
                ->where('qtype', $t2)
                ->get();
            }
            
           
                
               // echo "<pre>";
         //print_r($qsers1);
         //echo "</pre>";
            if($request->session()->get('sess')=='success')
           {

        return view('pages/listview', ['listr'=>$listr,'listr1'=>$listr1]);

}
else
{
  return view('pages/login');
}

    }
     public function ttshow(Request $request)
    {
    	 $tt1 = Input::get('tmt');
        $tt2 = Input::get('tmd');
             $idt= DB::table('terms')->insertGetId(
          ['tmt'=>$tt1,'tmd'=>$tt2]
            );
             if(isset($idt)&&$request->session()->get('sess')=='success'){
             	return redirect('/term'); 
             }

    }
 public function terdit(Request $request,$id)
    {
    	 $tt = DB::table('terms')->get()->where('tid', $id);
       if($request->session()->get('sess')=='success')
           {
    	  return view('pages/tpdit', ['up' => $tt]);
        }
else
{
  return view('pages/login');
}

    }

      public function dpshow(Request $request)
    {
    	$id=Input::get('hid');
    	$tt1 = Input::get('tmt');
        $tt2 = Input::get('tmd');
          $id1= DB::table('terms')->where('tid',$id)->update(
          ['tmt'=>$tt1,'tmd'=>$tt2]
            );
          if(isset($id1)&&$request->session()->get('sess')=='success'){
          	return redirect('/viewterm'); 
          }
    }
    public function tdshow(Request $request,$id){
          	$sc=DB::table('terms')->where('tid',$id)->delete();
           if(isset($sc)&&$request->session()->get('sess')=='success')
           {
             return redirect('/viewterm'); 
           }
          }
           public function newshow(Request $request,$id)
    {
    	 $tt = DB::table('products')->get()->where('pid', $id);
       $tit = DB::table('brandtab')->get();
        if($request->session()->get('sess')=='success')
           {
    	  return view('pages/newdit', ['np' => $tt,'tit'=>$tit]);
        }
else
{
  return view('pages/login');
}
    }


             public function unnshow(Request $request,$id)
    {
       $tt = DB::table('unitab')->get()->where('uid', $id);
        if($request->session()->get('sess')=='success')
           {
        return view('pages/newditun', ['np' => $tt]);
        }
else
{
  return view('pages/login');
}
    }
     public function unnshow1(Request $request,$id)
    {
       $tt = DB::table('brandtab')->get()->where('bid', $id);
        if($request->session()->get('sess')=='success')
           {
        return view('pages/newditun1', ['np' => $tt]);
        }
else
{
  return view('pages/login');
}
    }
     public function epshow(Request $request)
    {
    	
    	 $sub=Input::get('sub');
        if(isset($sub))
        {
        	$hid=Input::get('hid');
           $bdet = Input::get('brand');
        $s1det = Input::get('spec1');
        $s2det = Input::get('spec2');
        $s3det = Input::get('spec3');
        $tdet = Input::get('type');
        $prodet = Input::get('product');
         $hsn = Input::get('hsn');
        //$title3 = Input::get('product_full_name');
        $pfull="";
        if($bdet!='')
        {
        $pfull=$bdet.'_';
         }
         if($s1det!='')
         {
         	$pfull=$pfull.$s1det.'_';
         } 
         if($s2det!='')
         {
         	$pfull=$pfull.$s2det.'_';
         }
         if($s3det!='')
         {
         	$pfull=$pfull.$s3det.'_';
         }
         if($tdet!='')
         {
         	$pfull=$pfull.$tdet.'_';
         }     
           $pfull=$pfull.$prodet;
        $moddet = Input::get('model');
        $undet = Input::get('unit');
        $wndet = Input::get('wn');
        $wtdet = Input::get('wt');
        $wardet=$wndet.' '.$wtdet;
        $cpdet = Input::get('purchase_price');
        $spdet = Input::get('selling_price');
        $gstdet = Input::get('gstper');
       $totp=$spdet+(($gstdet/100.00)*$spdet);
       $id= DB::table('products')->where('pid',$hid)->update(
          ['brand'=>$bdet,'spec1'=>$s1det,'spec2'=>$s2det,'spec3'=>$s3det,'type'=>$tdet,'product'=>$prodet,'hsn'=>$hsn,'product_full_name'=>$pfull,'model'=>$moddet,'unit'=>$undet,'warranty'=>$wardet,'purchase_price'=>$cpdet,'selling_price'=>$spdet,'gst'=>$gstdet,'totprice'=>$totp]
            );
       if(isset($id)&&$request->session()->get('sess')=='success')
          {
                 return redirect('/viewpro');
           }else{

           }
           
       }

}



public function epshow1(Request $request)
    {
      
       $sub=Input::get('sub');
        if(isset($sub))
        {
          $hid=Input::get('hid');
           $bdet = Input::get('untt');
        
       $id= DB::table('unitab')->where('uid',$hid)->update(
          ['unitname'=>$bdet]
            );
       if(isset($id)&&$request->session()->get('sess')=='success')
          {
                 return redirect('/unedd');
           }else{

           }
           
       }

}

public function epshow11(Request $request)
    {
      
       $sub=Input::get('sub');
        if(isset($sub))
        {
          $hid=Input::get('hid');
           $bdet = Input::get('untt');
        
       $id= DB::table('brandtab')->where('bid',$hid)->update(
          ['bname'=>$bdet]
            );
       if(isset($id)&&$request->session()->get('sess')=='success')
          {
                 return redirect('/unedd1');
           }else{

           }
           
       }

}
public function nshow(Request $request,$id){
               $nd=DB::table('products')->where('pid', $id)->get();
               foreach($nd as $nds){
                 $id1188= DB::table('delpid')->insertGetId(
          ['dpid'=>$id,'prod_name'=>$nds->product_full_name,'warranty'=>$nds->warranty,'unit'=>$nds->unit,'model'=>$nds->model,'cp'=>$nds->purchase_price]
            );
               }
          	$sc=DB::table('products')->where('pid',$id)->delete();
           if(isset($sc)&&$request->session()->get('sess')=='success')
           {
             return redirect('/viewpro'); 
           }
          }

          public function nshow1(Request $request,$id){
            $sc=DB::table('unitab')->where('uid',$id)->delete();
           if(isset($sc)&&$request->session()->get('sess')=='success')
           {
             return redirect('/unedd'); 
           }
          }
           public function nshow11(Request $request,$id){
            $sc=DB::table('brandtab')->where('bid',$id)->delete();
           if(isset($sc)&&$request->session()->get('sess')=='success')
           {
             return redirect('/unedd1'); 
           }
          }

          public function mmdshow(Request $request,$id){
          	$sc=DB::table('prodin')->where('cid',$id)->delete();
          	$sc=DB::table('custin')->where('cid',$id)->delete();
           if(isset($sc)&&$request->session()->get('sess')=='success')
           {
             return redirect('/invlist'); 
           }
          }

          public function ppshow(Request $request,$id)
    {
    	$newr = DB::table('custin')->where('cid', $id)->get();
    	$njn = DB::table('products')
            ->join('prodin', 'products.pid', '=', 'prodin.pid')
            ->join('custin', 'custin.cid', '=', 'prodin.cid')
            ->select('products.warranty','products.unit','prodin.prod_name','prodin.qty','prodin.sp','prodin.totpro','custin.adjust','custin.ads','custin.tsp','products.model')
            ->where('prodin.cid',$id)->orderBy('prodin.prid','asc')->get();
            $njnp = DB::table('delpid')
            ->join('prodin', 'delpid.dpid', '=', 'prodin.pid')
            ->join('custin', 'custin.cid', '=', 'prodin.cid')
            ->select('delpid.warranty','delpid.unit','prodin.prod_name','prodin.qty','prodin.sp','prodin.totpro','custin.adjust','custin.ads','custin.tsp','delpid.model')
            ->where('prodin.cid',$id)->orderBy('prodin.prid','asc')->get();
           
            //$nec = DB::table('custin')->select('cterm')->where('cid', $id)->get();
            foreach($newr as $nr){
             $n1=DB::table('terms')->select('tmd')->where('tmt', $nr->cterm)->get();
            }
              if($request->session()->get('sess')=='success')
           {
       return view('pages/pview',['npp'=>$newr,'njn'=>$njn,'ncc'=>$n1,'njnp'=>$njnp]);
            }
else
{
  return view('pages/login');
}

    }
    public function buyshow(Request $request,$id)
    {
      $newr = DB::table('custin')->where('cid', $id)->get();
      $njn = DB::table('products')
            ->join('prodin', 'products.pid', '=', 'prodin.pid')
            ->join('custin', 'custin.cid', '=', 'prodin.cid')
            ->select('products.warranty','products.unit','prodin.prod_name','prodin.qty','prodin.sp','prodin.totpro','custin.adjust','custin.ads','custin.tsp','products.model')
            ->where('prodin.cid',$id)->orderBy('prodin.prid','asc')->get();
              $njnp = DB::table('delpid')
            ->join('prodin', 'delpid.dpid', '=', 'prodin.pid')
            ->join('custin', 'custin.cid', '=', 'prodin.cid')
            ->select('delpid.warranty','delpid.unit','prodin.prod_name','prodin.qty','prodin.sp','prodin.totpro','custin.adjust','custin.ads','custin.tsp','delpid.model')
            ->where('prodin.cid',$id)->orderBy('prodin.prid','asc')->get();
            //$nec = DB::table('custin')->select('cterm')->where('cid', $id)->get();
            foreach($newr as $nr){
             $n1=DB::table('terms')->select('tmd')->where('tmt', $nr->cterm)->get();
            }
              if($request->session()->get('sess')=='success')
           {
       return view('pages/buy',['npp'=>$newr,'njn'=>$njn,'ncc'=>$n1,'njnp'=>$njnp]);
         }
else
{
  return view('pages/login');
}


    }
     public function sellshow(Request $request,$id)
    {
      $newr = DB::table('custin')->where('cid', $id)->get();
      $njn = DB::table('products')
            ->join('prodin', 'products.pid', '=', 'prodin.pid')
            ->join('custin', 'custin.cid', '=', 'prodin.cid')
            ->select('products.warranty','products.unit','prodin.prod_name','prodin.qty','prodin.sp','prodin.totpro','custin.adjust','custin.ads','custin.tsp','products.model')
            ->where('prodin.cid',$id)->orderBy('prodin.prid','asc')->get();
              $njnp = DB::table('delpid')
            ->join('prodin', 'delpid.dpid', '=', 'prodin.pid')
            ->join('custin', 'custin.cid', '=', 'prodin.cid')
            ->select('delpid.warranty','delpid.unit','prodin.prod_name','prodin.qty','prodin.sp','prodin.totpro','custin.adjust','custin.ads','custin.tsp','delpid.model')
            ->where('prodin.cid',$id)->orderBy('prodin.prid','asc')->get();
            //$nec = DB::table('custin')->select('cterm')->where('cid', $id)->get();
            foreach($newr as $nr){
             $n1=DB::table('terms')->select('tmd')->where('tmt', $nr->cterm)->get();
            }
              if($request->session()->get('sess')=='success')
           {
       return view('pages/sell',['npp'=>$newr,'njn'=>$njn,'ncc'=>$n1,'njnp'=>$njnp]);
         }
else
{
  return view('pages/login');
}


    }

      public function invshow(Request $request,$id)
    {

    	$mid = DB::table('custin')->where('cid', '=', $id)->get();
    	   $tmm = DB::table('custin')->where('cid', '=', $id)->value('cterm');
        $mtt = DB::table('terms')->get()->where('tmt','!=',$tmm);
        $upac = DB::table('prodin')
            ->join('delpid', 'prodin.pid', '=', 'delpid.dpid')
            ->select('prodin.*','delpid.*')
            ->where('prodin.cid',$id)
            ->get();
            $upac1 = DB::table('prodin')
            ->join('delpid', 'prodin.pid', '=', 'delpid.dpid')
            ->select('delpid.dpid')
            ->where('prodin.cid',$id)
            ->get();
            
         $proin= DB::table('delpid')
            ->leftJoin('prodin', 'prodin.prod_name', '=', 'delpid.prod_name')
            ->select('prodin.*','delpid.*')
            -> where([
   
    ['prodin.cid', '=', $id],
    
])
            

            ->get();
            $pror=array();
            foreach($proin as $prons){
              array_push($pror,$prons->prod_name);
            }
      $upro = DB::table('prodin')
      -> where([
   
    ['cid', '=', $id],
    
])
                    ->whereNotIn('prod_name',$pror)
                    ->get();
                    

         //$din=DB::table('deftab')->select('did','tc','ta','ac')->get();
         
      
        $chin=DB::table('prodin')->select('pid','prod_name')->get();
        $users = DB::table('products')->select('pid','brand','spec1','spec2','type','product','hsn','product_full_name','model','unit','warranty','purchase_price','selling_price','gst','totprice')->get();
           if($request->session()->get('sess')=='success')
           {
    	  return view('pages/editinvo',['mid'=>$mid,'mtt'=>$mtt,'proin'=>$upro,'chin'=>$chin,'users'=>$users,'upac'=>$upac]);
        }
else
{
  return view('pages/login');
}
    }
     public function showedit(Request $request){
     	

     }



      public function proch1(Request $request){
     	
     		$hd=Input::get('hid');
         $hd111=Input::get('hid111');
     	$c111 = Input::get('cname');
         $c1 = Input::get('cmob');
       
        $c2 = Input::get('cmail');
        $c3 = Input::get('cgst');
        $c4 = Input::get('cadd');
        $c5 = Input::get('quot');
         $c6 = Input::get('indt');
          $c7 = Input::get('cord');
        $c8 = Input::get('oord');
        $c9 = Input::get('cterm');
        $c10 = Input::get('note');
        $c11 = Input::get('tc');
        $c13 = Input::get('ta');
         $c12 = Input::get('optradio');
         $c14 = Input::get('ac');
         $in = Input::get('inid');
         $ar=Input::get('arhid');
          $c15 = Input::get('adj');
           $c16 = Input::get('adj1');
           $c17 = Input::get('hidsess');
        
$prm=DB::table('custin')->select('tc','ta','ac')->where('cid',$hd)->get();
          $hid=Input::get('hid1');
         if(!isset($in)){
        foreach($prm as $prms)
        {
        	if($prms->tc==$c11&&$prms->ta==$c11&&$prms->ac==$c14)
        	{
           
        $sn = Input::get('sellids');
        $qn = Input::get('qtids');
             $tt=  Input::get('tot');
        $pid = DB::table('products')->where('product_full_name', $in)->value('pid');
       $id= DB::table('prodin')->insertGetId(
          ['pid'=>$pid,'prod_name'=>$in,'qty'=>$qn,'sp'=>$sn,'totpro'=>$tt]
            );
     
      echo $hid;
        } 
        }  
        }  
        if(isset($in)){

                $sn = Input::get('sellids');
        $qn = Input::get('qtids');
             $tt=  Input::get('tot');
        $pid = DB::table('products')->where('product_full_name', $in)->value('pid');
       $id= DB::table('prodin')->insertGetId(
          ['pid'=>$pid,'prod_name'=>$in,'qty'=>$qn,'sp'=>$sn,'totpro'=>$tt]
            );


         $m = DB::table('deftab')->max('did');
    	   //$mc = DB::table('custin')->max('cid');
    	            if($c17=='succ')
                  {
                   $id112= DB::table('deftab')->where('did',$m)->update(
                  
          ['tc'=>$c11]
            );
                   $id113= DB::table('deftab')->where('did',$m)->update(
          ['ta'=>$c13]
            );
                   $id114= DB::table('deftab')->where('did',$m)->update(
          ['ac'=>$c14]
            );
               }
              
                   $id117= DB::table('custin')->insertGetId(
          ['cname'=>$c111,'cmob'=>$c1,'cmail'=>$c2,'qtype'=>$c12,'cgst'=>$c3,'cadd'=>$c4,'quot'=>$c5,'indt'=>$c6,'cord'=>$c7,'oord'=>$c8,'cterm'=>$c9,'note'=>$c10,'tc'=>$c11,'ta'=>$c13,'ac'=>$c14,'adjust'=>$c15,'ads'=>$c16]
            );
                  
     	
}
     	
    
                // echo $hd;
                    //$max2 = DB::table('prodin')->max('cid');
                   $prc = DB::table('prodin')->max('prid');
                   //echo $prc;
                   $ppid=DB::table('prodin')->where('prid', $prc)->value('pid');
                    //$ppid = DB::table('prodin')->orderBy('prid', 'desc')->select('pid')->first();
                
                     
                   
                  $ppr = DB::table('products')->where('pid', $ppid)->value('purchase_price');
                  $ttcp = DB::table('custin')->where('cid', $hid)->value('tcp');

                 $ppr=(float)$ppr;
                 $ttcp=(float)$ttcp;
                 $ppr=(float)($ppr+$ttcp);
             
                    
           
                  
             
           //   $id9= DB::table('prodin')->where('cid','=',null)->update(['cid'=>$maxcid]);      
        $c210 = Input::get('hhd');
           	 $c215 = Input::get('hhd1');
       if(isset($id117)&&!isset($c215)&&!isset($ar))
          {
            if($c17==''){
               DB::table('custin')->where('cid','=',$hd)->update(['tcp'=>$ppr]);
          	}
            $id7= DB::table('prodin')->where('cid','=',null)->update(['cid'=>$hid]);
            
             //$max = DB::table('prodin')->max('cid');
       $price = DB::table('prodin')
                ->where('cid', $hid)
                ->sum('totpro');
                 $id8= DB::table('custin')->where('cid','=',$hid)->update(['tsp'=>$price]);

                     // echo $hid;
                  return redirect('/editinv/add/'.$hid);   

          	 //return redirect('/inv'); 
                    
           }
       
           	if(isset($c215))
           	{
           if($c210=='edto'){
             return redirect('/editinv/edit/'.$hid.'/'.$c215); 
           }
           if($c210=='delto'){
           	 return redirect('/editinv/del/'.$hid.'/'.$c215); 
           }
       }
          
       if(!isset($in)&&isset($ar)){
        return redirect('/editmm/'.$hid); 
       }
         
      
               
          

        
    
  }

      public function proshow1_back(Request $request,$id1,$id2)
           {
           	$request->session()->forget('ppid');
           	$hd=Input::get('hid');

     	$c111 = Input::get('cname');
         $c1 = Input::get('cmob');
       
        $c2 = Input::get('cmail');
        $c3 = Input::get('cgst');
        $c4 = Input::get('cadd');
        $c5 = Input::get('quot');
         $c6 = Input::get('indt');
          $c7 = Input::get('cord');
        $c8 = Input::get('oord');
        $c9 = Input::get('cterm');
        $c10 = Input::get('note');
        $c11 = Input::get('tc');
        $c13 = Input::get('ta');
         $c12 = Input::get('optradio');
         $c14 = Input::get('ac');
          $c15 = Input::get('adj');
           $c16 = Input::get('adj1');
                 
                   $id11= DB::table('custin')->where('cid',$hd)->update(
          ['cname'=>$c111,'cmob'=>$c1,'cmail'=>$c2,'qtype'=>$c12,'cgst'=>$c3,'cadd'=>$c4,'quot'=>$c5,'indt'=>$c6,'cord'=>$c7,'oord'=>$c8,'cterm'=>$c9,'note'=>$c10,'tc'=>$c11,'ta'=>$c13,'ac'=>$c14,'adjust'=>$c15,'ads'=>$c16]
            );
                 
           	
           	$mid = DB::table('custin')->where('cid', '=', $id1)->get();
    	   $tmm = DB::table('custin')->where('cid', '=', $id1)->value('cterm');
        $mtt = DB::table('terms')->get()->where('tmt','!=',$tmm);
         $proin=DB::table('prodin')->where('cid', '=', $id1)->get();
         //$din=DB::table('deftab')->select('did','tc','ta','ac')->get();
      
        $chin=DB::table('prodin')->select('pid','prod_name')->get();
        $users = DB::table('products')->select('pid','brand','spec1','spec2','type','product','hsn','product_full_name','model','unit','warranty','purchase_price','selling_price','gst','totprice')->get();
        $pro=DB::table('prodin')->select('cid','prid','pid','qty','sp','prod_name','totpro')->where('prid',$id2)->get();

    	  return view('pages/editinvo',['mid'=>$mid,'mtt'=>$mtt,'proin'=>$proin,'users'=>$users,'proins'=>$pro]);
           }
       public function prochet1(Request $request)
       {
       	$hd=Input::get('hid');

     	$c111 = Input::get('cname');
         $c1 = Input::get('cmob');
       
        $c2 = Input::get('cmail');
        $c3 = Input::get('cgst');
        $c4 = Input::get('cadd');
        $c5 = Input::get('quot');
         $c6 = Input::get('indt');
          $c7 = Input::get('cord');
        $c8 = Input::get('oord');
        $c9 = Input::get('cterm');
        $c10 = Input::get('note');
        $c11 = Input::get('tc');
        $c13 = Input::get('ta');
         $c12 = Input::get('optradio');
         $c14 = Input::get('ac');
          $c15 = Input::get('adj');
           $c16 = Input::get('adj1');
                 
                   $id1= DB::table('custin')->where('cid',$hd)->update(
          ['cname'=>$c111,'cmob'=>$c1,'cmail'=>$c2,'qtype'=>$c12,'cgst'=>$c3,'cadd'=>$c4,'quot'=>$c5,'indt'=>$c6,'cord'=>$c7,'oord'=>$c8,'cterm'=>$c9,'note'=>$c10,'tc'=>$c11,'ta'=>$c13,'ac'=>$c14,'adjust'=>$c15,'ads'=>$c16]
            );
                  
       		$pd = Input::get('hid111');
       
        	$hd1 = Input::get('hid2');
                $in = Input::get('inid');
        $sn = Input::get('sellids');
        $qn = Input::get('qtids');
             $tt=  Input::get('tot');
        $pid = DB::table('products')->where('product_full_name', $in)->value('pid');
     		$id= DB::table('prodin')->where('prid',$pd)->update(
          ['pid'=>$pid,'prod_name'=>$in,'qty'=>$qn,'sp'=>$sn,'totpro'=>$tt]
            );
       
             if(isset($id))
          {
          	//$max2 = DB::table('prodin')->max('cid');
       $price2 = DB::table('prodin')
                ->where('cid', $hd1)
                ->sum('totpro');
                  $id8= DB::table('custin')->where('cid','=',$hd1)->update(['tsp'=>$price2]);
                 return redirect('/editinv/add/'.$hd1);
           }else{

           }
     	


       }
       public function delshow1_back(Request $request,$id1,$id2)
       {
       	$request->session()->forget('ppid');

       $hd=Input::get('hid');

     	$c111 = Input::get('cname');
         $c1 = Input::get('cmob');
       
        $c2 = Input::get('cmail');
        $c3 = Input::get('cgst');
        $c4 = Input::get('cadd');
        $c5 = Input::get('quot');
         $c6 = Input::get('indt');
          $c7 = Input::get('cord');
        $c8 = Input::get('oord');
        $c9 = Input::get('cterm');
        $c10 = Input::get('note');
        $c11 = Input::get('tc');
        $c13 = Input::get('ta');
         $c12 = Input::get('optradio');
         $c14 = Input::get('ac');
          $c15 = Input::get('adj');
           $c16 = Input::get('adj1');
                 
                   $id11= DB::table('custin')->where('cid',$hd)->update(
          ['cname'=>$c111,'cmob'=>$c1,'cmail'=>$c2,'qtype'=>$c12,'cgst'=>$c3,'cadd'=>$c4,'quot'=>$c5,'indt'=>$c6,'cord'=>$c7,'oord'=>$c8,'cterm'=>$c9,'note'=>$c10,'tc'=>$c11,'ta'=>$c13,'ac'=>$c14,'adjust'=>$c15,'ads'=>$c16]
            );
                 

          	$ttd = DB::table('prodin')->where('prid', $id2)->value('cid');
              $ttcp = DB::table('custin')->where('cid', $id1)->value('tsp');
                $ttt = DB::table('prodin')->where('prid', $id2)->value('totpro');
                 $ttcp=(float)$ttcp;
                 $ttt=(float)$ttt;
                 $ttcp=(float)($ttcp-$ttt);

                 $ttp = DB::table('prodin')->where('prid', $id2)->value('pid');
                 $ttcr = DB::table('products')->where('pid', $ttp)->value('purchase_price');
                  $ttck = DB::table('custin')->where('cid', $ttd)->value('tcp');
                  $ttcr=(float)$ttcr;
                 $ttck=(float)$ttck;
                 $ttck=(float)($ttck-$ttcr);

           
                  $id88= DB::table('custin')->where('cid','=',$ttd)->update(['tsp'=>$ttcp]);
                  $id89= DB::table('custin')->where('cid','=',$ttd)->update(['tcp'=>$ttck]);
          	
          	$sc=DB::table('prodin')->where('prid',$id2)->delete();
          
             return redirect('/editinv/add1/'.$id1); 
           
          



       }

        public function deftc1(Request $request,$id1,$id2)
    {

    	  $m = DB::table('deftab')->max('did');
    	   //$mc = DB::table('custin')->max('cid');
    	   $r=$request->segment(3);
                   if($request->segment(1)=='tc1')
                   {
                   $id11= DB::table('deftab')->where('did',$m)->update(
          ['tc'=>$r]
            );
               $id776= DB::table('custin')->where('cid',$id1)->update(
          ['tc'=>$r]
            );
           }
            if($request->segment(1)=='ta1')
                   {
                   $id12= DB::table('deftab')->where('did',$m)->update(
          ['ta'=>$r]
            );
               $id776= DB::table('custin')->where('cid',$id1)->update(
          ['ta'=>$r]
            );
           }
            
             if($request->segment(1)=='ac1')
                   {
                   $id13= DB::table('deftab')->where('did',$m)->update(
          ['ac'=>$r]
            );
               $id776= DB::table('custin')->where('cid',$id1)->update(
          ['ac'=>$r]
            );
           }
            
            
           // echo $id; 
           
  // return redirect('/editinv/add1/'.$id1); 

}
 public function logform(Request $request){
        
            $uname = Input::get('username');
             $pass = Input::get('pass');
             $users = DB::table('login')
                    ->where('username', $uname)
                    ->where('password',$pass)
                    ->get();
              
      $request->session()->put('u_name',$uname);
                     $request->session()->put('u_pass',$pass);
                     
                   $count = $users->count();
                    if($count>0)
                    {
                      $request->session()->put('sess','success');
                    return redirect('/inv');   
                    }
                    else{
                       $request->session()->put('err','succ');
                     return view('pages/login');
                       
                    
         }
       }

        public function logoutform(Request $request){
          $request->session()->forget('u_name');
           $request->session()->forget('u_pass');
           $request->session()->forget('sess');
           $request->session()->forget('edidum');
             return view('pages/login');  
      }

     



}
