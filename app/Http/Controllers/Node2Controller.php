<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class Node2Controller extends Controller
{
   
    public function insertTable2Record(Request $request)
    {
        //$data = $request->all(); // This will get all the request data.

       // dd($data); // This will dump and die
        
          $node2_sourcenode = Input::get('node2_sourcenode');
    $node2_destinationnode = Input::get('node2_destinationnode');
    $node2_reorderperiod = Input::get('node2_reorderperiod');
    
$inserted2 = DB::insert('insert into node2 (node2_sourcenode, node2_destinationnode,node2_reorderperiod) values (?, ?,?)', [$node2_sourcenode,$node2_destinationnode,$node2_reorderperiod]);
        
        return response()->json($inserted2);
    
    }

  
          public function updateTable2Record(Request $request,$clicked_id)
    {
    
     $node2_sourcenode = Input::get('node2_sourcenode');
    $node2_destinationnode = Input::get('node2_destinationnode');
    $node2_reorderperiod = Input::get('node2_reorderperiod');
    
    $updated2 = DB::update("update node2 set node2_sourcenode = '{$node2_sourcenode}', node2_destinationnode = '{$node2_destinationnode}', node2_reorderperiod = '{$node2_reorderperiod}' where node2_id = ?", [$clicked_id]); 
              
              return response()->json($updated2);
              
              $updated2->save();
        
    }
    
    
          public function deleteTable2Record($clicked_id)
    {
    
     $deleted2 = DB::table('node2')->where('node2_id', '=', $clicked_id)->delete();
    
    return response()->json($deleted2);
              
        
    }
}
