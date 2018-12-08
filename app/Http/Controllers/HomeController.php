<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Category;
use App\subCategory;
use App\Node1;
use App\Node2;
use App\Node3;
use App\Node4;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
     $categories = Category::all();
     $subcategories = subCategory::all();
   $node1 = Node1::all();
    $node2 = Node2::all();
    $node3 = Node3::all();
    $node4 = Node4::all();
    
   
    return view('home')
        ->with('categories',$categories)
        ->with('subcategories',$subcategories)
        ->with('node1',$node1)
        ->with('node2',$node2)
        ->with('node3',$node3)
        ->with('node4',$node4);
    }
   
    
  /*  public function insertTable2Record(Request $request)
    {
        //$data = $request->all(); // This will get all the request data.

       // dd($data); // This will dump and die
      $node2_sourcenode = Input::get('node2_sourcenode');
    $node2_destinationnode = Input::get('node2_destinationnode');
    $node2_reorderperiod = Input::get('node2_reorderperiod');
    
$inserted2 = DB::insert('insert into node2 (node1_sourcenode, node2_destinationnode,node2_reorderperiod) values (?, ?,?)', [$node2_sourcenode,$node2_destinationnode,$node2_reorderperiod]);
    
   return response()->json($inserted2);
    
        
        
    }*/
}
