<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('home', 'HomeController@index');



Route::post('/Node1Controller', 'Node1Controller@insertTable1Record');

Route::put('/Node1Controller/{clicked_id}', 'Node1Controller@updateTable1Record');

Route::delete('/Node1Controller/{clicked_id}', 'Node1Controller@deleteTable1Record');



Route::post('/Node2Controller', 'Node2Controller@insertTable2Record');

Route::put('/Node2Controller/{clicked_id}', 'Node2Controller@updateTable2Record');

Route::delete('/Node2Controller/{clicked_id}', 'Node2Controller@deleteTable2Record');



Route::post('/Node3Controller', 'Node3Controller@insertTable3Record');

Route::put('/Node3Controller/{clicked_id}', 'Node3Controller@updateTable3Record');

Route::delete('/Node3Controller/{clicked_id}', 'Node3Controller@deleteTable3Record');



Route::post('/Node4Controller', 'Node4Controller@insertTable4Record');

Route::put('/Node4Controller/{clicked_id}', 'Node4Controller@updateTable4Record');

Route::delete('/Node4Controller/{clicked_id}', 'Node4Controller@deleteTable4Record');

/*
Route::get('home/{product_id?}',function($product_id){
    $product = App\Product::find($product_id);
    return response()->json($product);
});
Route::post('home',function(Request $request){   
    $product = App\Product::create($request->input());
    return response()->json($product);
});
Route::put('home/{product_id?}',function(Request $request,$product_id){
    $product = App\Product::find($product_id);
    $product->name = $request->name;
    $product->details = $request->details;
    $product->save();
    return response()->json($product);
});
Route::delete('home/{product_id?}',function($product_id){
    $product = App\Product::destroy($product_id);
    return response()->json($product);
});*/




/*Route::get('home/{clicked_id?}',function($clicked_id){
    
   $node1 =  App\Node1::select('node1_sourcenode','node1_destinationnode','node1_reorderperiod')->where('node1_id','=', $clicked_id)->get();
    return response()->json($node1);
    
});*/
   /* $node2 = App\Node2::find($node_id);
    return response()->json($node2);
    
    $node3 = App\Node3::find($node_id);
    return response()->json($node3);
    
    $node4 = App\Node4::find($node_id);
    return response()->json($node4);
});*/
/*Route::post('/home', function (Request $request) { 
    
   /* $node1_sourcenode = $request->input('node1_sourcenode');
     $node1_destinationnode = $request->input('node1_destinationnode');
    $node1_reorderperiod = $request->input('node1_reorderperiod');*/
  /* $node1_sourcenode = $request[56];
    $node1_destinationnode = $request[45];
    $node1_reorderperiod = $request['3'];

    return view('home', [
      'node1_sourcenode'=> node1_sourcenode,
      'node1_destinationnode' => node1_destinationnode,
        'node1_reorderperiod' => node1_reorderperiod */
    
   /* $created1 = App\Node1::create([
        Input::get('node1_sourcenode'),
        Input::get('node1_destinationnode'),
         Input::get('node1_reorderperiod')
    ]);

    
    $created2 = App\Node2::create([
        Input::get('node2_sourcenode'),
        Input::get('node2_destinationnode'),
         Input::get('node2_reorderperiod')
    ]);

    
    $created1 = App\Node3::create([
        Input::get('node3_sourcenode'),
        Input::get('node3_destinationnode'),
         Input::get('node3_reorderperiod')
    ]);*/
    
    
    
  /*  $node1_sourcenode = Input::get('node1_sourcenode');
    $node1_destinationnode = Input::get('node1_destinationnode');
    $node1_reorderperiod = Input::get('node1_reorderperiod');
    
$inserted1 = DB::insert('insert into node1 (node1_sourcenode, node1_destinationnode,node1_reorderperiod) values (?, ?,?)', [$node1_sourcenode,$node1_destinationnode,$node1_reorderperiod]);*/
    
    //return response()->json($inserted);  
    
 /* $id = DB::table('node1')->insertGetId(
            ['node1_sourcenode' => $node1_sourcenode, 'node1_destinationnode' => $node1_destinationnode, 'node1_reorderperiod' => $node1_reorderperiod] 
    );*/
    
  /*Route::post('/home', function (Request $request) { 
    
    $node2_sourcenode = Input::get('node2_sourcenode');
    $node2_destinationnode = Input::get('node2_destinationnode');
    $node2_reorderperiod = Input::get('node2_reorderperiod');
    
$inserted2 = DB::insert('insert into node2 (node1_sourcenode, node2_destinationnode,node2_reorderperiod) values (?, ?,?)', [$node2_sourcenode,$node2_destinationnode,$node2_reorderperiod]);*/
    
  // return response()->json($inserted1);
    
   
    
   // $data->save();

//$lastInsertedId = $data->id;
   
      // return response()->json($id);    
  
  /*  $node1 = App\Node1::create($request->input('node1_sourcenode'));
    return response()->json($node1);
    $node2 = App\Node1::create($request->input('node1_destinationnode'));
    return response()->json($node2);
     $node3 = App\Node1::create($request->input('node1_reorderperiod'));
    return response()->json($node3);
  /*   $node2 = App\Node2::create($request->input());
    return response()->json($node2);
    
     $node3 = App\Node3::create($request->input());
    return response()->json($node3);
    
     $node4 = App\Node4::create($request->input());
    return response()->json($node4);*/
    
    /*$node2_sourcenode = Input::get('node2_sourcenode');
    $node2_destinationnode = Input::get('node2_destinationnode');
    $node2_reorderperiod = Input::get('node2_reorderperiod');
    
$inserted2 = DB::insert('insert into node2 (node2_sourcenode, node2_destinationnode,node2_reorderperiod) values (?, ?,?)', [$node2_sourcenode,$node2_destinationnode,$node2_reorderperiod]);*/
    
    //return response()->json($inserted);  
    
 /* $id = DB::table('node1')->insertGetId(
            ['node1_sourcenode' => $node1_sourcenode, 'node1_destinationnode' => $node1_destinationnode, 'node1_reorderperiod' => $node1_reorderperiod] 
    );*/
    
  
    
   // return response()->json($inserted2);

    
    //return response()->json($inserted);  
    
 /* $id = DB::table('node1')->insertGetId(
            ['node1_sourcenode' => $node1_sourcenode, 'node1_destinationnode' => $node1_destinationnode, 'node1_reorderperiod' => $node1_reorderperiod] 
    );*/
    
  
    
  // return response()->json($inserted2);
    
//});


/*Route::put('projectview/{clicked_id?}',function(Request $request,$clicked_id){
    
    $node1_sourcenode = Input::get('node1_sourcenode');
    $node1_destinationnode = Input::get('node1_destinationnode');
    $node1_reorderperiod = Input::get('node1_reorderperiod');
    
    $updated1 = DB::update("update node1 set node1_sourcenode = '{$node1_sourcenode}', node1_destinationnode = '{$node1_destinationnode}', node1_reorderperiod = '{$node1_reorderperiod}' where node1_id = ?", [$clicked_id]); 
    
   /* $query = "UPDATE users SET ";
            $query .= "user_firstname = '{$user_firstname}', ";
            $query .= "user_lastname = '{$user_lastname}', ";
            $query .= "user_role ='{$user_role}', ";
            $query .= "username = '{$username}', ";
            $query .= "user_email = '{$user_email}', ";
            $query .= "user_password = '{$user_password}' "; 
            $query .= "WHERE user_id = {$the_user_id}";*/
    
    //$users = DB::table('users')->where('votes', '=', 100)->get();
  /*  $node1 = DB::table('node1')->where('node1_id', '=', $clicked_id)->get();
    $node1->node1_sourcenode  = $request->node1_sourcenode ;
    $node1->node1_destinationnode  = $request->node1_destinationnode;
    $node1->node1_reorderperiod  = $request->node1_reorderperiod;*/
   /*
    return response()->json($updated1);
    $updated1->save();*/
    
 /*    $node2 = App\Node2::find($node_id);
    $node2->node2_sourcenode  = $request->node2_sourcenode ;
    $node2->node2_destinationnode  = $request->node2_destinationnode;
    $node2->node2_reorderperiod  = $request->node2_reorderperiod;
    $node2->save();
    return response()->json($node2);
    
     $node3 = App\Node3::find($node_id);
    $node3->node3_sourcenode  = $request->node3_sourcenode ;
    $node3->node1_destinationnode  = $request->node3_destinationnode;
    $node3->node1_reorderperiod  = $request->node3_reorderperiod;
    $node3->save();
    return response()->json($node3);*/
    
   /* $node2_sourcenode = Input::get('node2_sourcenode');
    $node2_destinationnode = Input::get('node2_destinationnode');
    $node2_reorderperiod = Input::get('node2_reorderperiod');
    
    $updated2 = DB::update("update node2 set node2_sourcenode = '{$node2_sourcenode}', node2_destinationnode = '{$node2_destinationnode}', node2_reorderperiod = '{$node2_reorderperiod}' where node2_id = ?", [$clicked_id]); */
    
   /* $query = "UPDATE users SET ";
            $query .= "user_firstname = '{$user_firstname}', ";
            $query .= "user_lastname = '{$user_lastname}', ";
            $query .= "user_role ='{$user_role}', ";
            $query .= "username = '{$username}', ";
            $query .= "user_email = '{$user_email}', ";
            $query .= "user_password = '{$user_password}' "; 
            $query .= "WHERE user_id = {$the_user_id}";*/
    
    //$users = DB::table('users')->where('votes', '=', 100)->get();
  /*  $node1 = DB::table('node1')->where('node1_id', '=', $clicked_id)->get();
    $node1->node1_sourcenode  = $request->node1_sourcenode ;
    $node1->node1_destinationnode  = $request->node1_destinationnode;
    $node1->node1_reorderperiod  = $request->node1_reorderperiod;*/
   
   /* return response()->json($updated2);
    $updated2->save();
    
});
Route::delete('projectview/{clicked_id?}',function($clicked_id){
    
    //$row = DB::select('node1_sourcenode','node1_destinationnode','node1_reorderperiod')->where('node1_id','=', $clicked_id)->get();
   
  //$deleted =  DB::delete('delete from node1')->where('node1_id', '=', $clicked_id);
    
    //return response()->json($deleted);
    
   //$row = App\Node1::find($clicked_id);
   //$deleted = $rsltDelRec->delete(); 
    
 $deleted1 = DB::table('node1')->where('node1_id', '=', $clicked_id)->delete();
    
    return response()->json($deleted1);
    
   
    
    //$row = App\Node1::select('node1_sourcenode','node1_destinationnode','node1_reorderperiod')->where('node1_id','=', $clicked_id)->get();
    
   // $deleted = App\Node1::where('node1_id', $clicked_id)->delete();
    
   //$deleted = App\Node1::destroy($clicked_id);
    $deleted2 = DB::table('node2')->where('node2_id', '=', $clicked_id)->delete();
    
    return response()->json($deleted2);
   
});*/






