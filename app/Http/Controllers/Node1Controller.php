<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class Node1Controller extends Controller
{
   
    public function insertTable1Record(Request $request)
    {
        //$data = $request->all(); // This will get all the request data.

       // dd($data); // This will dump and die
        
          $node1_sourcenode = Input::get('node1_sourcenode');
    $node1_destinationnode = Input::get('node1_destinationnode');
    $node1_reorderperiod = Input::get('node1_reorderperiod');
    
$inserted1 = DB::insert('insert into node1 (node1_sourcenode, node1_destinationnode,node1_reorderperiod) values (?, ?,?)', [$node1_sourcenode,$node1_destinationnode,$node1_reorderperiod]);
        
        return response()->json($inserted1);
    
    }

  
          public function updateTable1Record(Request $request,$clicked_id)
    {
    
     $node1_sourcenode = Input::get('node1_sourcenode');
    $node1_destinationnode = Input::get('node1_destinationnode');
    $node1_reorderperiod = Input::get('node1_reorderperiod');
    
    $updated1 = DB::update("update node1 set node1_sourcenode = '{$node1_sourcenode}', node1_destinationnode = '{$node1_destinationnode}', node1_reorderperiod = '{$node1_reorderperiod}' where node1_id = ?", [$clicked_id]); 
              
              return response()->json($updated1);
              
              $updated1->save();
        
    }
    
    
          public function deleteTable1Record($clicked_id)
    {
    
     $deleted1 = DB::table('node1')->where('node1_id', '=', $clicked_id)->delete();
    
    return response()->json($deleted1);
              
        
    }
}
