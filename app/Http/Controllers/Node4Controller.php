<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class Node4Controller extends Controller
{
   
    public function insertTable4Record(Request $request)
    {
        //$data = $request->all(); // This will get all the request data.

       // dd($data); // This will dump and die
        
          $node4_sourcenode = Input::get('node4_sourcenode');
    $node4_destinationnode = Input::get('node4_destinationnode');
    $node4_reorderperiod = Input::get('node4_reorderperiod');
    
$inserted4 = DB::insert('insert into node4 (node4_sourcenode, node4_destinationnode,node4_reorderperiod) values (?, ?,?)', [$node4_sourcenode,$node4_destinationnode,$node4_reorderperiod]);
        
        return response()->json($inserted4);
    
    }

  
          public function updateTable4Record(Request $request,$clicked_id)
    {
    
    
          $node4_sourcenode = Input::get('node4_sourcenode');
    $node4_destinationnode = Input::get('node4_destinationnode');
    $node4_reorderperiod = Input::get('node4_reorderperiod');
              
    $updated4 = DB::update("update node4 set node4_sourcenode = '{$node4_sourcenode}', node4_destinationnode = '{$node4_destinationnode}', node4_reorderperiod = '{$node4_reorderperiod}' where node4_id = ?", [$clicked_id]); 
              
              return response()->json($updated4);
              
              $updated4->save();
              
           
    }
    
    
          public function deleteTable4Record($clicked_id)
    {
    
     $deleted4 = DB::table('node4')->where('node4_id', '=', $clicked_id)->delete();
    
    return response()->json($deleted4);
              
        
    }
}
