<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'ErpController@index');
Route::post('/prodinsform','ErpController@proinsert')->name('prodins');
Route::post('/produnsform','ErpController@prounsert')->name('produn');
Route::post('/produnsform1','ErpController@prounsert1')->name('produn1');
Route::post('/produnsform11','ErpController@prounsert11')->name('produn11');
Route::get('/addpro',function () {
   $tit = DB::table('brandtab')->get();
      $unn = DB::table('unitab')->get();
     if(Session::get('sess')=='success')
           {
    return view('pages/home',compact('tit','unn'));
    }
else
{
  return view('pages/login');
}
});
Route::get('/viewpro', function () {
    $users = DB::table('products')->select('pid','brand','spec1','spec2','spec3','type','product','hsn','product_full_name','model','unit','warranty','purchase_price','selling_price','gst','totprice')->get();
     if(Session::get('sess')=='success')
           {
    return view('pages/proview',compact('users'));
    }
else
{
  return view('pages/login');
}
});
Route::get('/unedd', function () {
    $users = DB::table('unitab')->get();
     if(Session::get('sess')=='success')
           {
    return view('pages/uned',compact('users'));
    }
else
{
  return view('pages/login');
}
});

Route::get('/unedd1', function () {
    $users = DB::table('brandtab')->get();
     if(Session::get('sess')=='success')
           {
    return view('pages/uned1',compact('users'));
    }
else
{
  return view('pages/login');
}
});
Route::get('/inv/add', function () {
	$users = DB::table('products')->select('pid','brand','spec1','spec2','type','product','hsn','product_full_name','model','unit','warranty','purchase_price','selling_price','gst','totprice')->get();
	  $maxcid = DB::table('custin')->max('cid');
	$mid = DB::table('custin')->where('cid', '=', $maxcid)->get();
        $proin=DB::table('prodin')->where('cid', '=', $maxcid)->get();
         $din=DB::table('deftab')->select('did','tc','ta','ac')->get();
      
        $chin=DB::table('prodin')->select('pid','prod_name')->get();
         $tmm = DB::table('custin')->where('cid', '=', $maxcid)->value('cterm');
        $mtt = DB::table('terms')->get()->where('tmt','!=',$tmm);
         if(Session::get('sess')=='success')
           {

	return view('pages/protoadd',compact('users','proin','chin','mid','mtt'));
   }
else
{
  return view('pages/login');
}
	
});
Route::get('/inv/add1', function () {
  $users = DB::table('products')->select('pid','brand','spec1','spec2','type','product','hsn','product_full_name','model','unit','warranty','purchase_price','selling_price','gst','totprice')->get();
    $maxcid = DB::table('custin')->max('cid');
  $mid = DB::table('custin')->where('cid', '=', $maxcid)->get();
        $proin1=DB::table('prodin')->orderby('prid','asc')->where('cid', '=', $maxcid)->get();
         $din=DB::table('deftab')->select('did','tc','ta','ac')->get();
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
                    
            
        $chin=DB::table('prodin')->select('pid','prod_name')->get();
         $tmm = DB::table('custin')->where('cid', '=', $maxcid)->value('cterm');
        $mtt = DB::table('terms')->get()->where('tmt','!=',$tmm);
         if(Session::get('sess')=='success')
           {

  return view('pages/editinvo1',compact('users','proin','chin','mid','mtt','upac'));
   }
else
{
  return view('pages/login');
}
  
});
Route::get('/inv/edit', function () {
	$users = DB::table('products')->select('pid','brand','spec1','spec2','type','product','hsn','product_full_name','model','unit','warranty','purchase_price','selling_price','gst','totprice')->get();
	  $maxcid = DB::table('custin')->max('cid');
	$mid = DB::table('custin')->where('cid', '=', $maxcid)->get();
        $proin=DB::table('prodin')->where('cid', '=', $maxcid)->get();
          $din=DB::table('deftab')->select('did','tc','ta','ac')->get();
        $chin=DB::table('prodin')->select('pid','prod_name')->get();
        $tmm = DB::table('custin')->where('cid', '=', $maxcid)->value('cterm');
        $mtt = DB::table('terms')->get()->where('tmt','!=',$tmm);
        if(Session::get('sess')=='success')
           {
        return view('pages/protoadd',compact('users','proin','chin','mid','mtt'));
        }
else
{
  return view('pages/login');
}

});

Route::get('/inv/edit1', function () {
  $users = DB::table('products')->select('pid','brand','spec1','spec2','type','product','hsn','product_full_name','model','unit','warranty','purchase_price','selling_price','gst','totprice')->get();
    $maxcid = DB::table('custin')->max('cid');
  $mid = DB::table('custin')->where('cid', '=', $maxcid)->get();
        $proin1=DB::table('prodin')->orderby('prid','asc')->where('cid', '=', $maxcid)->get();
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

         $proj=DB::table('prodin')->where('cid', '=', $maxcid)->get();
          $din=DB::table('deftab')->select('did','tc','ta','ac')->get();
        $chin=DB::table('prodin')->select('pid','prod_name')->get();
        $tmm = DB::table('custin')->where('cid', '=', $maxcid)->value('cterm');
        $mtt = DB::table('terms')->get()->where('tmt','!=',$tmm);
         $upac = DB::table('prodin')
            ->join('delpid', 'prodin.pid', '=', 'delpid.dpid')
            ->select('prodin.*')
            ->where('prodin.cid',$maxcid)
            ->get();
        if(Session::get('sess')=='success')
           {
        return view('pages/editinvo1',compact('users','proin','chin','mid','mtt','upac'));
        }
else
{
  return view('pages/login');
}

});
        Route::get('/inv/delete', function () {
	$users = DB::table('products')->select('pid','brand','spec1','spec2','type','product','hsn','product_full_name','model','unit','warranty','purchase_price','selling_price','gst','totprice')->get();
	  $maxcid = DB::table('custin')->max('cid');
	$mid = DB::table('custin')->where('cid', '=', $maxcid)->get();
         $proin=DB::table('prodin')->where('cid', '=', $maxcid)->get();
        $chin=DB::table('prodin')->select('pid','prod_name')->get();
          $din=DB::table('deftab')->select('did','tc','ta','ac')->get();
           $tmm = DB::table('custin')->where('cid', '=', $maxcid)->value('cterm');
        $mtt = DB::table('terms')->get()->where('tmt','!=',$tmm);
      if(Session::get('sess')=='success')
           {
	return view('pages/protoadd',compact('users','proin','chin','mid','mtt'));
  }
else
{
  return view('pages/login');
}
	
});

           Route::get('/inv/delete1', function () {
  $users = DB::table('products')->select('pid','brand','spec1','spec2','type','product','hsn','product_full_name','model','unit','warranty','purchase_price','selling_price','gst','totprice')->get();
    $maxcid = DB::table('custin')->max('cid');
  $mid = DB::table('custin')->where('cid', '=', $maxcid)->get();
         $proin1=DB::table('prodin')->orderby('prid','asc')->where('cid', '=', $maxcid)->get();
        $chin=DB::table('prodin')->select('pid','prod_name')->get();
          $din=DB::table('deftab')->select('did','tc','ta','ac')->get();
           $tmm = DB::table('custin')->where('cid', '=', $maxcid)->value('cterm');
        $mtt = DB::table('terms')->get()->where('tmt','!=',$tmm);
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
      if(Session::get('sess')=='success')
           {
  return view('pages/editinvo1',compact('users','proin','chin','mid','mtt','upac'));
  }
else
{
  return view('pages/login');
}
  
});
Route::get('/inv', function () {
	$users = DB::table('products')->select('pid','brand','spec1','spec2','type','product','hsn','product_full_name','model','unit','warranty','purchase_price','selling_price','gst','totprice')->get();
	
	
        //$proin=DB::table('prodin')->select('pid','prid','prod_name','qty','sp','totpro')->get();
        $chin=DB::table('prodin')->select('pid','prod_name')->get();
          $din=DB::table('deftab')->select('did','tc','ta','ac')->get();
          $mtt = DB::table('terms')->get();
if(Session::get('sess')=='success')
           {
	return view('pages/protoadd',compact('users','chin','din','mtt'));
	 }
else
{
  return view('pages/login');
}
});
Route::post('/prdadd','ErpController@proch')->name('adpro');
Route::post('/prdaddit','ErpController@prochet')->name('adprodit');
Route::post('/invl1','ErpController@invlshow')->name('adproo');
Route::get('/proedit/{id}', 'ErpController@proshow');
Route::get('/prodel/{id}', 'ErpController@delshow');
Route::get('/proedit1/{id}', 'ErpController@proshow1');
Route::get('/prodel1/{id1}/{id2}', 'ErpController@delshow1');
Route::get('/custinv', 'ErpController@custshow');
Route::get('/tunadd', 'ErpController@unshow');
Route::get('/tunadd1', 'ErpController@unshow1');
Route::get('/tunadd11', 'ErpController@unshow11');
Route::post('/csadd','ErpController@csshow')->name('csins');
//Route::get('/invlist','ErpController@invlshow1');


Route::get('/invlist', function () {
	$qsers = DB::table('custin')
    ->orderBy('cid', 'desc')
	->paginate(10);
  
	/*
    $pp = DB::table('products')
            ->join('prodin', 'products.pid', '=', 'prodin.pid')
            ->join('custin', 'prodin.cid', '=', 'custin.cid')
              ->select('prodin.pid','prodin.cid')
             
              ->get();
              
            echo "<pre>";
   print_r($pp);
   echo "</pre>";
   */
   
    if(Session::get('sess')=='success')
           {
	return view('pages/listview',compact('qsers'));
   }
else
{
  return view('pages/login');
}
	
});


Route::post('/deff','ErpController@defshow')->name('defpro');
Route::get('/default', 'ErpController@defcon');

Route::get('/inv/deff', function () {
	$users = DB::table('products')->select('pid','brand','spec1','spec2','type','product','hsn','product_full_name','model','unit','warranty','purchase_price','selling_price','gst','totprice')->get();
	  $maxcid = DB::table('custin')->max('cid');
	$mid = DB::table('custin')->where('cid', '=', $maxcid)->get();
        $proin=DB::table('prodin')->where('cid', '=', $maxcid)->get();
         $din=DB::table('deftab')->select('did','tc','ta','ac')->get();

        $chin=DB::table('prodin')->select('pid','prod_name')->get();
         $tmm = DB::table('custin')->where('cid', '=', $maxcid)->value('cterm');
        $mtt = DB::table('terms')->get()->where('tmt','!=',$tmm);
         $proj=DB::table('prodin')->where('cid', '=', $maxcid)->get();
          
if(Session::get('sess')=='success')
           {
	return view('pages/protoadd',compact('users','chin','mid','proin','mtt','upac'));
   }
else
{
  return view('pages/login');
}
	});



Route::get('/inv/deff1', function () {
  $users = DB::table('products')->select('pid','brand','spec1','spec2','type','product','hsn','product_full_name','model','unit','warranty','purchase_price','selling_price','gst','totprice')->get();
    $maxcid = DB::table('custin')->max('cid');
  $mid = DB::table('custin')->where('cid', '=', $maxcid)->get();
        $proin1=DB::table('prodin')->where('cid', '=', $maxcid)->get();
         $din=DB::table('deftab')->select('did','tc','ta','ac')->get();
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

        $chin=DB::table('prodin')->select('pid','prod_name')->get();
         $tmm = DB::table('custin')->where('cid', '=', $maxcid)->value('cterm');
        $mtt = DB::table('terms')->get()->where('tmt','!=',$tmm);
         $proj=DB::table('prodin')->where('cid', '=', $maxcid)->get();
         $upac = DB::table('prodin')
            ->join('delpid', 'prodin.pid', '=', 'delpid.dpid')
            ->select('prodin.*')
            ->where('prodin.cid',$maxcid)
            ->get();
          
if(Session::get('sess')=='success')
           {
  return view('pages/editinvo1',compact('users','chin','mid','proin','mtt','upac'));
   }
else
{
  return view('pages/login');
}
  });
Route::get('/tc/{id}', 'ErpController@deftc');
Route::get('/ta/{id}', 'ErpController@deftc');
Route::get('/ac/{id}', 'ErpController@deftc');

Route::get('/tc1/{id}', 'ErpController@deftc11');
Route::get('/ta1/{id}', 'ErpController@deftc11');
Route::get('/ac1/{id}', 'ErpController@deftc11');

//Route::post('/lsadd{page?}','ErpController@listshow')->name('listpro');
Route::get('lsadd', 'ErpController@listshow');

Route::get('/term', function () {
  if(Session::get('sess')=='success')
           {
    return view('pages/tadd');
     }
else
{
  return view('pages/login');
}
});
Route::post('/termadd','ErpController@ttshow')->name('termins');
Route::get('/viewterm', function () {
    $users = DB::table('terms')->get();
     if(Session::get('sess')=='success')
           {
    return view('pages/tview',compact('users'));
    }
else
{
  return view('pages/login');
}

});

Route::get('/tedit/{id}', 'ErpController@terdit');
Route::post('/dpadd','ErpController@dpshow')->name('termdp');
Route::get('/tdel/{id}', 'ErpController@tdshow');
Route::get('/editnew/{id}', 'ErpController@newshow');
Route::get('/editun/{id}', 'ErpController@unnshow');
Route::get('/editun1/{id}', 'ErpController@unnshow1');
Route::post('/npp','ErpController@epshow')->name('insnew');
Route::post('/npp1','ErpController@epshow1')->name('unsnew');
Route::post('/npp11','ErpController@epshow11')->name('unsnew1');
Route::get('/ndel/{id}', 'ErpController@nshow');
Route::get('/ndell/{id}', 'ErpController@nshow1');
Route::get('/ndell1/{id}', 'ErpController@nshow11');
Route::get('/delmm/{id}', 'ErpController@mmdshow');
Route::get('/editmm/{id}', 'ErpController@ppshow');

Route::get('/editinv/add/{id}', 'ErpController@invshow');
Route::get('/editinv/add1/{id}', 'ErpController@invshow1');
//Route::get('/editinv/add/', 'ErpController@invshow');

Route::post('/ttedit','ErpController@showedit')->name('ppdd');

Route::post('/prdadd1','ErpController@proch11')->name('adpro1');
Route::post('/prdaddit1','ErpController@prochet11')->name('adprodit1');
Route::get('/editinv/edit/{id1}/{id2}', 'ErpController@proshow1');
Route::get('/editinv/del/{id1}/{id2}', 'ErpController@delshow1');

Route::get('/tc1/{id1}/{id2}', 'ErpController@deftc1');
Route::get('/ta1/{id1}/{id2}', 'ErpController@deftc1');
Route::get('/ac1/{id1}/{id2}', 'ErpController@deftc1');
Route::get('/buycopy/{id}', 'ErpController@buyshow');
Route::get('/sellcopy/{id}', 'ErpController@sellshow');
Route::get('/logout','ErpController@logoutform');
Route::post('/logquote','ErpController@logform')->name('logquote');

