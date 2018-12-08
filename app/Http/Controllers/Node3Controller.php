<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class Node3Controller extends Controller
{
   
    public function insertTable3Record(Request $request)
    {
        //$data = $request->all(); // This will get all the request data.

       // dd($data); // This will dump and die
        
          $node3_sourcenode = Input::get('node3_sourcenode');
    $node3_destinationnode = Input::get('node3_destinationnode');
    $node3_reorderperiod = Input::get('node3_reorderperiod');
    
$inserted3 = DB::insert('insert into node3 (node3_sourcenode, node3_destinationnode,node3_reorderperiod) values (?, ?,?)', [$node3_sourcenode,$node3_destinationnode,$node3_reorderperiod]);
        
        return response()->json($inserted3);
    
    }

  
          public function updateTable3Record(Request $request,$clicked_id)
    {
    
     
          $node3_sourcenode = Input::get('node3_sourcenode');
    $node3_destinationnode = Input::get('node3_destinationnode');
    $node3_reorderperiod = Input::get('node3_reorderperiod');
    
    $updated3 = DB::update("update node3 set node3_sourcenode = '{$node3_sourcenode}', node3_destinationnode = '{$node3_destinationnode}', node3_reorderperiod = '{$node3_reorderperiod}' where node3_id = ?", [$clicked_id]); 
              
              return response()->json($updated3);
              
              $updated3->save();
        
    }
    
    
          public function deleteTable3Record($clicked_id)
    {
    
     $deleted3 = DB::table('node3')->where('node3_id', '=', $clicked_id)->delete();
    
    return response()->json($deleted3);
              
        
    }
}
