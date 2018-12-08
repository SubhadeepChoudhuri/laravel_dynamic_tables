@extends('layouts.app')

@section('content')
 
  <!--  <nav class="navbar navbar-default" style="border:none;margin-top:1%;background-color:#337ab7;color:white">
    <div class="navbar-header">

                <!-- Collapsed Hamburger -->
              <!-- <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            <h3 style="position:absolute;padding-left:1%;bottom:2%;">Top</h3>
            </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
                   <ul class="nav navbar-nav navbar-right">
                        <li id="myLogout">
                            <a href="{{ url('/logout') }}" role="button" aria-expanded="false">
                                {{ Auth::user()->name }}&nbsp;&nbsp;&nbsp;<i class="fa fa-sign-out" aria-hidden="true"></i></a>

                            
                        </li>
                   </ul>
                </div>
    </nav> -->
    <h4 style="padding-left:1%;">North Content</h4><br>
    <div id="main" class="col-md-12">
        
    <div id="doclist" class="panel panel-default col-md-4" style="min-height:600px;">
        <div class="panel-heading" style="background-color:#337ab7;color:white;font-weight:bold;">Planning</div>
     
         <ul> 
    <li id="myRoot"><a href="#"><span>Tables</span></a></li>
        <ul id="tree1"> 
 
  <li class="treeview">
    <ul id="documents" >
        
        @foreach($categories as $category)
        
  
        <li class="cat"><a class="catlink" href="#">{{$category->cat_title}}</a>
            
            
        <ul id="mytreemenu" class="treeview-menu">
            
            @foreach($subcategories as $subcategory)
     
            
             @if($category->cat_id == $subcategory->cat_id)
            
            <li class="mylinkclass"><a class="subcat" href="#">{{$subcategory->subcat_title}}</a></li>
            
    
           @endif

            @endforeach
            
        </ul>
        </li>
        
        
       @endforeach 
        
        
    </ul>
  </li>

        </ul>
                        </ul>
    </div>
   <div id="wrapper" class="panel panel-default col-md-offset-1 col-md-7" style="min-height:600px;">
        <ul id="tabs">
            <!-- Tabs go here -->
           
        </ul>
        <div id="content">

            <div id="mycontent1" style='position:absolute;top:10%;'>
              <div id="divtable1"> 
            <table id="mytable1" class="table table-bordered table-hover">
                <thead>
          <tr>
              
            <th>Source Node</th>
            <th>Destination Node</th>
            <th>Reorder Period</th>
            <th>Actions</th>
          </tr>
         </thead>
         <tbody id="node1-list" name="node1-list">
           
            @foreach ($node1 as $n1)
            <tr id="table1row{{$n1->node1_id}}">
             <td>{{$n1->node1_sourcenode}}</td>
             <td>{{$n1->node1_destinationnode}}</td>
             <td>{{$n1->node1_reorderperiod}}</td>
              <td>
             <button class="btn btn-warning btn-detail open_modal1edit" value="{{$n1->node1_id}}">Edit</button>
              <button class="btn btn-danger btn-delete delete_table1row" value="{{$n1->node1_id}}">Delete</button>
              </td>
            </tr>
            @endforeach
           
        </tbody>
            </table>
                  </div> 
                <button id="open_modal1create" name="open_modal1create" class="createbtn pull-right">Add New Row</button>
                
                
                          <div class="modal fade" id="myModal1create" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
           <div class="modal-content">
             <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel">Node</h4>
            </div>
            <div class="modal-body">
            <form id="formnode1create" name="formnode1create" class="form-horizontal" novalidate="">
               
                <div class="form-group error">
                 <label for="inputName" class="col-sm-3 control-label">Source Node</label>
                   <div class="col-sm-9">
                    <input type="text" class="form-control has-error" id="node1_sourcenode" name="node1_sourcenode" placeholder="Source Node" value="">
                   </div>
                   </div>
                 <div class="form-group">
                 <label for="inputDetail" class="col-sm-3 control-label">Destination Node</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" id="node1_destinationnode" name="node1_destinationnode" placeholder="Destination Node" value="">
                    </div>
                </div>
                <div class="form-group">
                 <label for="inputDetail" class="col-sm-3 control-label">Reorder Period</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" id="node1_reorderperiod" name="node1_reorderperiod" placeholder="Reorder Period" value="">
                    </div>
                </div>
                 {{ csrf_field() }}
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </form>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-primary" id="btn_save_create1">Add</button>
            </div>
        </div>
      </div>
  </div>
                
                          <div class="modal fade" id="myModal1edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
           <div class="modal-content">
             <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel">Node</h4>
            </div>
            <div class="modal-body">
            <form id="formnode1edit" name="formnode1edit" class="form-horizontal" novalidate="">
                
                <div class="form-group error">
                 <label for="inputName" class="col-sm-3 control-label">Source Node</label>
                   <div class="col-sm-9">
                    <input type="text" class="form-control has-error" id="node1_sourcenode" name="node1_sourcenode" placeholder="Source Node" value="">
                   </div>
                   </div>
                 <div class="form-group">
                 <label for="inputDetail" class="col-sm-3 control-label">Destination Node</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" id="node1_destinationnode" name="node1_destinationnode" placeholder="Destination Node" value="">
                    </div>
                </div>
                <div class="form-group">
                 <label for="inputDetail" class="col-sm-3 control-label">Reorder Period</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" id="node1_reorderperiod" name="node1_reorderperiod" placeholder="Reorder Period" value="">
                    </div>
                </div>
                {{ csrf_field() }}
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </form>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-primary" id="btn_save_edit1">Update</button>
           
            </div>
        </div>
      </div>
  </div>
            
             
            </div>
            
                    <div id="mycontent2" style='position:absolute;top:10%;'>
              <div id="divtable2"> 
            <table id="mytable2" class="table table-bordered table-hover">
                <thead>
          <tr>
              
            <th>Source Node</th>
            <th>Destination Node</th>
            <th>Reorder Period</th>
            <th>Actions</th>
          </tr>
         </thead>
         <tbody id="node2-list" name="node2-list">
           
            @foreach ($node2 as $n2)
            <tr id="table2row{{$n2->node2_id}}">
             <td>{{$n2->node2_sourcenode}}</td>
             <td>{{$n2->node2_destinationnode}}</td>
             <td>{{$n2->node2_reorderperiod}}</td>
              <td>
             <button class="btn btn-warning btn-detail open_modal2edit" value="{{$n2->node2_id}}">Edit</button>
              <button class="btn btn-danger btn-delete delete_table2row" value="{{$n2->node2_id}}">Delete</button>
              </td>
            </tr>
            @endforeach
           
        </tbody>
            </table>
                  </div> 
                <button id="open_modal2create" name="open_modal2create" class="createbtn pull-right">Add New Row</button>
                
                
                          <div class="modal fade" id="myModal2create" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
           <div class="modal-content">
             <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel">Node</h4>
            </div>
            <div class="modal-body">
            <form id="formnode2create" name="formnode2create" class="form-horizontal" novalidate="">
                
                <div class="form-group error">
                 <label for="inputName" class="col-sm-3 control-label">Source Node</label>
                   <div class="col-sm-9">
                    <input type="text" class="form-control has-error" id="node2_sourcenode" name="node2_sourcenode" placeholder="Source Node" value="">
                   </div>
                   </div>
                 <div class="form-group">
                 <label for="inputDetail" class="col-sm-3 control-label">Destination Node</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" id="node2_destinationnode" name="node2_destinationnode" placeholder="Destination Node" value="">
                    </div>
                </div>
                <div class="form-group">
                 <label for="inputDetail" class="col-sm-3 control-label">Reorder Period</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" id="node2_reorderperiod" name="node2_reorderperiod" placeholder="Reorder Period" value="">
                    </div>
                </div>
                {{ csrf_field() }}
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </form>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-primary" id="btn_save_create2">Add</button>
            </div>
        </div>
      </div>
  </div>
                
                          <div class="modal fade" id="myModal2edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
           <div class="modal-content">
             <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel">Node</h4>
            </div>
            <div class="modal-body">
            <form id="formnode2edit" name="formnode2edit" class="form-horizontal" novalidate="">
               
                <div class="form-group error">
                 <label for="inputName" class="col-sm-3 control-label">Source Node</label>
                   <div class="col-sm-9">
                    <input type="text" class="form-control has-error" id="node2_sourcenode" name="node2_sourcenode" placeholder="Source Node" value="">
                   </div>
                   </div>
                 <div class="form-group">
                 <label for="inputDetail" class="col-sm-3 control-label">Destination Node</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" id="node2_destinationnode" name="node2_destinationnode" placeholder="Destination Node" value="">
                    </div>
                </div>
                <div class="form-group">
                 <label for="inputDetail" class="col-sm-3 control-label">Reorder Period</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" id="node2_reorderperiod" name="node2_reorderperiod" placeholder="Reorder Period" value="">
                    </div>
                </div>
                 {{ csrf_field() }}
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </form>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-primary" id="btn_save_edit2">Update</button>
           
            </div>
        </div>
      </div>
  </div>
            
             
            </div>
            
                    <div id="mycontent3" style='position:absolute;top:10%;'>
              <div id="divtable3"> 
            <table id="mytable3" class="table table-bordered table-hover">
                <thead>
          <tr>
              
            <th>Source Node</th>
            <th>Destination Node</th>
            <th>Reorder Period</th>
            <th>Actions</th>
          </tr>
         </thead>
         <tbody id="node3-list" name="node3-list">
           
            @foreach ($node3 as $n3)
            <tr id="table3row{{$n3->node3_id}}">
             <td>{{$n3->node3_sourcenode}}</td>
             <td>{{$n3->node3_destinationnode}}</td>
             <td>{{$n3->node3_reorderperiod}}</td>
              <td>
             <button class="btn btn-warning btn-detail open_modal3edit" value="{{$n3->node3_id}}">Edit</button>
              <button class="btn btn-danger btn-delete delete_table3row" value="{{$n3->node3_id}}">Delete</button>
              </td>
            </tr>
            @endforeach
           
        </tbody>
            </table>
                  </div> 
                <button id="open_modal3create" name="open_modal3create" class="createbtn pull-right">Add New Row</button>
                
                
                          <div class="modal fade" id="myModal3create" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
           <div class="modal-content">
             <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel">Node</h4>
            </div>
            <div class="modal-body">
            <form id="formnode3create" name="formnode3create" class="form-horizontal" novalidate="">
                <div class="form-group error">
                 <label for="inputName" class="col-sm-3 control-label">Source Node</label>
                   <div class="col-sm-9">
                    <input type="text" class="form-control has-error" id="node3_sourcenode" name="node3_sourcenode" placeholder="Source Node" value="">
                   </div>
                   </div>
                 <div class="form-group">
                 <label for="inputDetail" class="col-sm-3 control-label">Destination Node</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" id="node3_destinationnode" name="node3_destinationnode" placeholder="Destination Node" value="">
                    </div>
                </div>
                <div class="form-group">
                 <label for="inputDetail" class="col-sm-3 control-label">Reorder Period</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" id="node3_reorderperiod" name="node3_reorderperiod" placeholder="Reorder Period" value="">
                    </div>
                </div>
                {{ csrf_field() }}
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </form>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-primary" id="btn_save_create3">Add</button>
            </div>
        </div>
      </div>
  </div>
                
                          <div class="modal fade" id="myModal3edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
           <div class="modal-content">
             <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel">Node</h4>
            </div>
            <div class="modal-body">
            <form id="formnode3edit" name="formnode3edit" class="form-horizontal" novalidate="">
                <div class="form-group error">
                 <label for="inputName" class="col-sm-3 control-label">Source Node</label>
                   <div class="col-sm-9">
                    <input type="text" class="form-control has-error" id="node3_sourcenode" name="node3_sourcenode" placeholder="Source Node" value="">
                   </div>
                   </div>
                 <div class="form-group">
                 <label for="inputDetail" class="col-sm-3 control-label">Destination Node</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" id="node3_destinationnode" name="node3_destinationnode" placeholder="Destination Node" value="">
                    </div>
                </div>
                <div class="form-group">
                 <label for="inputDetail" class="col-sm-3 control-label">Reorder Period</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" id="node3_reorderperiod" name="node3_reorderperiod" placeholder="Reorder Period" value="">
                    </div>
                </div>
               {{ csrf_field() }}
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </form>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-primary" id="btn_save_edit3">Update</button>
           
            </div>
        </div>
      </div>
  </div>
            
             
            </div>
            
                    <div id="mycontent4" style='position:absolute;top:10%;'>
              <div id="divtable4"> 
            <table id="mytable4" class="table table-bordered table-hover">
                <thead>
          <tr>
              
            <th>Source Node</th>
            <th>Destination Node</th>
            <th>Reorder Period</th>
            <th>Actions</th>
          </tr>
         </thead>
         <tbody id="node4-list" name="node4-list">
           
            @foreach ($node4 as $n4)
            <tr id="table4row{{$n4->node4_id}}">
             <td>{{$n4->node4_sourcenode}}</td>
             <td>{{$n4->node4_destinationnode}}</td>
             <td>{{$n4->node4_reorderperiod}}</td>
              <td>
             <button class="btn btn-warning btn-detail open_modal4edit" value="{{$n4->node4_id}}">Edit</button>
              <button class="btn btn-danger btn-delete delete_table4row" value="{{$n4->node4_id}}">Delete</button>
              </td>
            </tr>
            @endforeach
           
        </tbody>
            </table>
                  </div> 
                <button id="open_modal4create" name="open_modal4create" class="createbtn pull-right">Add New Row</button>
                
                
                          <div class="modal fade" id="myModal4create" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
           <div class="modal-content">
             <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel">Node</h4>
            </div>
            <div class="modal-body">
            <form id="formnode4create" name="formnode4create" class="form-horizontal" novalidate="">
                <div class="form-group error">
                 <label for="inputName" class="col-sm-3 control-label">Source Node</label>
                   <div class="col-sm-9">
                    <input type="text" class="form-control has-error" id="node4_sourcenode" name="node4_sourcenode" placeholder="Source Node" value="">
                   </div>
                   </div>
                 <div class="form-group">
                 <label for="inputDetail" class="col-sm-3 control-label">Destination Node</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" id="node4_destinationnode" name="node4_destinationnode" placeholder="Destination Node" value="">
                    </div>
                </div>
                <div class="form-group">
                 <label for="inputDetail" class="col-sm-3 control-label">Reorder Period</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" id="node4_reorderperiod" name="node4_reorderperiod" placeholder="Reorder Period" value="">
                    </div>
                </div>
               {{ csrf_field() }}
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </form>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-primary" id="btn_save_create4">Add</button>
            </div>
        </div>
      </div>
  </div>
                
                          <div class="modal fade" id="myModal4edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
           <div class="modal-content">
             <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel">Node</h4>
            </div>
            <div class="modal-body">
            <form id="formnode4edit" name="formnode4edit" class="form-horizontal" novalidate="">
                <div class="form-group error">
                 <label for="inputName" class="col-sm-3 control-label">Source Node</label>
                   <div class="col-sm-9">
                    <input type="text" class="form-control has-error" id="node4_sourcenode" name="node4_sourcenode" placeholder="Source Node" value="">
                   </div>
                   </div>
                 <div class="form-group">
                 <label for="inputDetail" class="col-sm-3 control-label">Destination Node</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" id="node4_destinationnode" name="node4_destinationnode" placeholder="Destination Node" value="">
                    </div>
                </div>
                <div class="form-group">
                 <label for="inputDetail" class="col-sm-3 control-label">Reorder Period</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" id="node4_reorderperiod" name="node4_reorderperiod" placeholder="Reorder Period" value="">
                    </div>
                </div>
                {{ csrf_field() }}
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </form>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-primary" id="btn_save_edit4">Update</button>
           
            </div>
        </div>
      </div>
  </div>
            
             
            </div>
                
   
    </div>
        
         </div>
                

    </div>
        
          <script type="text/javascript">
            
            $(document).ready(function(){
                
          $('#mycontent1').hide();
            $('#mycontent2').hide();
            $('#mycontent3').hide();
            $('#mycontent4').hide();
            
           $('#tree1').hide(); 
        $('.subcat').hide();
            
         $( "#myRoot" ).click(function() {   
             
                  $('#tree1').toggle();  
                    
                
            });
        
            $( ".catlink" ).click(function() {
                        
                            $(this).closest('.cat').find('.subcat').toggle(); 
                            
  
            });
             
       
                 $(".subcat").one('click',function() {
                     
             $("#tabs li").removeClass("current");
           
            // add new tab and related content
            $("#tabs").append("<li class='current'><a class='tab' href='#'>" + $(this).text() + "</a><a href='#' class='remove'>x</a></li>");
                     
                     if($(this).text() === 'Network Details'){
                    
                  
                         $("#mycontent2").hide();
                          $("#mycontent3").hide();
                          $("#mycontent4").hide();
                         
                       $("#mycontent1").show();   
            
                    
                }
                     
                     if($(this).text() === 'Lead Time'){
                         
                         
                         $("#mycontent1").hide();
                          $("#mycontent3").hide();
                          $("#mycontent4").hide();
                
                     $("#mycontent2").show();
                    
                }
                     
                     if($(this).text() === 'Demand'){
                         
                         
                         $("#mycontent1").hide();
                          $("#mycontent2").hide();
                          $("#mycontent4").hide();
                    
                 $("#mycontent3").show();
                                    
                    
                }
                     if($(this).text() === 'Inventory Norms'){
                         
                         
                         $("#mycontent1").hide();
                          $("#mycontent2").hide();
                          $("#mycontent3").hide();
                    
                  $("#mycontent4").show();
        
                     }
                    
            });
            
       
              
            $(document).on('click', '#tabs a.tab', function() {
            
                // Get the tab name
                var contentname = $(this).attr("id") + "_content";

                // hide all other tabs
               
                $("#tabs li").removeClass("current");
                
                 if($(this).text() == 'Network Details'){
                    
                 
                    $("#mycontent2").hide();
                    
                    $("#mycontent3").hide();
                    
                    $("#mycontent4").hide();               
                    
                    $("#mycontent1").show();
                    
                    
                }
                if($(this).text() == 'Lead Time'){
                    
                    
                  
                    $("#mycontent1").hide();
                    
                    $("#mycontent3").hide();
                    
                    $("#mycontent4").hide();               
                    
                    $("#mycontent2").show();
                    
                }
                
                if($(this).text() == 'Demand'){
                    
                    $("#mycontent1").hide();
                    
                    $("#mycontent2").hide();
                    
                    $("#mycontent4").hide();               
                    
                    $("#mycontent3").show();
                    
                }
                
                if($(this).text() == 'Inventory Norms'){
                    
                     $("#mycontent1").hide();
                    
                    $("#mycontent2").hide();
                    
                    $("#mycontent3").hide();               
                    
                    $("#mycontent4").show();
                    
                }

                // show current tab
                $(".tab #" + contentname).show();
                $(this).parent().addClass("current");
            });

            
            $(document).on('click', '#tabs a.remove', function() { 
                
               var tabid = $(this).parent().find(".tab").attr("id");

                // remove tab and related content
                var contentname = tabid + "_content";
                $("#" + contentname).remove();
                $(this).parent().remove();
                
                $("#tabs li").removeClass("current");
                
                if($(this).closest('.current').find('.tab').text() == 'Network Details'){
                    
                    
                     $("#mycontent1").hide();
                    
        
                }
                if($(this).closest('.current').find('.tab').text() == 'Lead Time'){
                    
                    
                  
              
                       $("#mycontent2").hide();
                    
                }
                
                if($(this).closest('.current').find('.tab').text() == 'Demand'){
                    
                    
                   $("#mycontent3").hide();
                                    
                    
                }
                
                if($(this).closest('.current').find('.tab').text() == 'Inventory Norms'){
                    
                
                    
                   $("#mycontent4").hide();
                                    
                    
                }
                
                var shown = $(this).parent().find('a.tab').text();
                
              
                
                $(".subcat").one('click',function() {
                    
                    
                    
                     var clicked = $(this).text();
     
                    if(clicked === shown){
                        
                        $("#tabs li").removeClass("current");
          
                    $("#tabs").append("<li class='current'><a class='tab' href='#'>" + clicked + "</a><a href='#' class='remove'>x</a></li>");
                        
                        
                        if(shown === 'Network Details'){
                    
                    
                     $("#mycontent1").show();
                    
                }
                if(shown === 'Lead Time'){
                    
                    
                  
              
                      $("#mycontent2").show();
                    
                }
                
               if(shown === 'Demand'){
                    
                    
                  $("#mycontent3").show();
                                    
                    
                }
                
                if(shown === 'Inventory Norms'){
                    
                
                    
                  $("#mycontent4").show();
                    
                }
 
                    }
                });
                
                 // if there is no current tab and if there are still tabs left, show the first one
                if ($("#tabs li.current").length == 0 && $("#tabs li").length > 0) {

                    // find the first tab    
                    var firsttab = $("#tabs li:first-child");
                    firsttab.addClass("current");

                    // get its link name and show related content
                    var firsttabid = $(firsttab).find("a.tab").attr("id");
                    $("#" + firsttabid + "_content").show();
                    
                    if($("#tabs li:first-child a.tab").text() == 'Network Details'){
                           
                            $("#mycontent1").show();
                    
                    if($("#tabs li:first-child a.tab").text() == 'Lead Time'){
                           
                            $("#mycontent2").show();
                           
                       }
                     if($("#tabs li:first-child a.tab").text() == 'Demand'){
                           
                            $("#mycontent3").show();
                           
                       }
                     if($("#tabs li:first-child a.tab").text() == 'Inventory Norms'){
                           
                            $("#mycontent4").show();
                           
                       }
                    
                }
                    
                }

             
                });
        
            });
            
        </script>
        
    <meta name="_token" content="{!! csrf_token() !!}" /> 
          
        <script type="text/javascript">

 setInterval(function(){ $('#divtable1').load('home #mytable1'); }, 1000);
   // setInterval(function(){ $('#open_modal1create').load('home #open_modal1create'); }, 3000);
   // setInterval(function(){ $('#myModal1create').load('home #myModal1create'); }, 3000);
    //setInterval(function(){ $('#myModal1edit').load('home #myModal1edit'); }, 3000);

    //var url = "http://localhost/laravel_product/public/home";
    var my_url1 = 'http://localhost/laravel_product/public/Node1Controller';  
    var my_url2 = 'http://localhost/laravel_product/public/Node2Controller';
    var my_url3 = 'http://localhost/laravel_product/public/Node3Controller';  
    var my_url4 = 'http://localhost/laravel_product/public/Node4Controller'; 
        
        
    //display modal form for product editing
    $(document).on('click','.open_modal1edit',function(){
       
       var clicked_id= $(this).val();
        //alert(clicked);
         // var clicked_id = $(this).parent().parent().attr('data-id');
         
   //  $.get(url + '/' + clicked, function (data) {
            
            
            //success data
             //console.log(data);
            
           var clicked_text1 = $(this).parent().parent().find('td:eq(0)').text();
            var clicked_text2 = $(this).parent().parent().find('td:eq(1)').text();
            var clicked_text3 = $(this).parent().parent().find('td:eq(2)').text();
         
           
            $('#myModal1edit #node1_sourcenode').val(clicked_text1);
            $('#myModal1edit #node1_destinationnode').val(clicked_text2);
             $('#myModal1edit #node1_reorderperiod').val(clicked_text3);
            
            $('#myModal1edit').modal('show');
        
              $("#btn_save_edit1").one('click',function () {
    
     
      $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        })
     // event.preventDefault();
     
    var node1_sourcenode = $("#myModal1edit #node1_sourcenode").val();
     var node1_destinationnode = $("#myModal1edit #node1_destinationnode").val();
     var node1_reorderperiod = $("#myModal1edit #node1_reorderperiod").val();
    
var formdata = { node1_sourcenode: node1_sourcenode, node1_destinationnode: node1_destinationnode, node1_reorderperiod: node1_reorderperiod };

$.ajax({
    method: 'PUT',
    url: my_url1 + '/' + clicked_id,
    data: formdata,
     // Remember that you need to have your csrf token included
        dataType: 'json',
        success: function(response){
            // Handle your response..
         //console.log(data);
   /* $('#node1-list').append('<tr id="table1row' + response + '"><td>' + node1_sourcenode + '</td><td>' + node1_destinationnode + '</td><td>' + node1_reorderperiod + '</td><td><button class="btn btn-warning btn-detail open_modal1" value="' + response + '">Edit</button> <button class="btn btn-danger btn-delete delete-node1" value="' + response + '">Delete</button></td></tr>');*/
            $('#myModal1edit #formnode1edit').trigger("reset");
             $('#myModal1edit').modal('hide');
            
          
            
          
        },
        error: function(response){
            // Handle error
           //console.log('Error:', data);
        }
   
});
    
 });
        
     //  }) 
    });
    //display modal form for creating new product
    $('#open_modal1create').click(function(){
        
        $('#myModal1create #formnode1create').trigger("reset");
        $('#myModal1create').modal('show');
        
         $("#btn_save_create1").one('click',function() {
   
   
      $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        })
     // event.preventDefault();
     
    var node1_sourcenode = $("#myModal1create #node1_sourcenode").val();
     var node1_destinationnode = $("#myModal1create #node1_destinationnode").val();
     var node1_reorderperiod = $("#myModal1create #node1_reorderperiod").val();
    
var formdata = { node1_sourcenode: node1_sourcenode, node1_destinationnode: node1_destinationnode, node1_reorderperiod: node1_reorderperiod };

$.ajax({
    method: 'POST',
    url: my_url1,
    data: formdata,
     // Remember that you need to have your csrf token included
        dataType: 'json',
        success: function(response){
            // Handle your response..
         //console.log(data);
   /* $('#node1-list').append('<tr id="table1row' + response + '"><td>' + node1_sourcenode + '</td><td>' + node1_destinationnode + '</td><td>' + node1_reorderperiod + '</td><td><button class="btn btn-warning btn-detail open_modal1" value="' + response + '">Edit</button> <button class="btn btn-danger btn-delete delete-node1" value="' + response + '">Delete</button></td></tr>');*/
            $('#myModal1create #formnode1create').trigger("reset");
             $('#myModal1create').modal('hide');
            
          
            
          
        },
        error: function(response){
            // Handle error
           //console.log('Error:', data);
        }
   
});
    
 });
    });
    //delete product and remove it from list
    $(document).on('click','.delete_table1row',function(){
         var clicked_id= $(this).val();
        
       // alert(clicked_id);
        // var clicked_id = $(this).parent().parent().attr('id');
        //alert(clicked_id);
        
         $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        })
        
      // var data = { clicked_id: clicked_id};

        
     //   var rowdata = { clicked_id: clicked_id };
        $.ajax({
            type: "DELETE",
            url: my_url1 + '/' + clicked_id,
          // data : data,
         //   data: rowdata, // Remember that you need to have your csrf token included
        dataType: 'json',
        success: function(response){
            // Handle your response..
            //console.log(data);
            //$("#table1row" + clicked_id).remove();
        
            //alert('hello');
           //$(this).parent().parent().remove();
            
            //response.remove();
            //alert(response);
            
           // $("#table1row" + clicked_id).remove();
            
           
 
        },
        error: function(response){
            // Handle error
            
        }
           
        });
        
        
    });
    //create new product / update existing product
   /* $("#btn-save1").click(function (e) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        })
        e.preventDefault(); 
        var formData = {
            sourcenode: $('#myModal1 #sourcenode').val(),
            destinationnode: $('#myModal1 #destinationnode').val(),
            reorderperiod: $('#myModal1 #reorderperiod').val(),
        }
        //used to determine the http verb to use [add=POST], [update=PUT]
        var state = $('#btn-save1').val();
        var type = "POST"; //for creating new resource
        var idnode1 = $('#idnode1').val();;
        var my_url = url;
        if (state == "update"){
            type = "PUT"; //for updating existing resource
            my_url += '/' + idnode1;
        }
        console.log(formData);
        $.ajax({
            type: type,
            url: my_url,
            data: formData,
            dataType: 'json',
            success: function (data) {
                console.log(data);
                var table1row = '<tr id="table1row' + data.node1_id + '"><td>' + data.node1_sourcenode + '</td><td>' + data.node1_destinationnode + '</td><td>' + data.node1_reorderperiod + '</td>';
                table1row += '<td><button class="btn btn-warning btn-detail open_modal1" value="' + data.node1_id + '">Edit</button>';
                table1row += ' <button class="btn btn-danger btn-delete delete-node1" value="' + data.node1_id + '">Delete</button></td></tr>';
                if (state == "add"){ //if user added a new record
                    $('#node1-list').append(table1row);
                }else{ //if user updated an existing record
                    $("#table1row" + idnode1).replaceWith(table1row);
                }
                $('#myModal1 #formnode1').trigger("reset");
                $('#myModal1').modal('hide')
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });*/
    
        //setInterval(function(){ alert("Hello"); }, 3000);
    
    setInterval(function(){ $('#divtable2').load('home #mytable2'); }, 1000);
   // setInterval(function(){ $('#open_modal1create').load('home #open_modal1create'); }, 3000);
   // setInterval(function(){ $('#myModal1create').load('home #myModal1create'); }, 3000);
    //setInterval(function(){ $('#myModal1edit').load('home #myModal1edit'); }, 3000);

//var url = "http://localhost/optideskproduct/public/home";
    //display modal form for product editing
    $(document).on('click','.open_modal2edit',function(){
       
       var clicked_id= $(this).val();
        //alert(clicked);
         // var clicked_id = $(this).parent().parent().attr('data-id');
         
   //  $.get(url + '/' + clicked, function (data) {
            
            
            //success data
             //console.log(data);
            
           var clicked_text1 = $(this).parent().parent().find('td:eq(0)').text();
            var clicked_text2 = $(this).parent().parent().find('td:eq(1)').text();
            var clicked_text3 = $(this).parent().parent().find('td:eq(2)').text();
         
           
            $('#myModal2edit #node2_sourcenode').val(clicked_text1);
            $('#myModal2edit #node2_destinationnode').val(clicked_text2);
             $('#myModal2edit #node2_reorderperiod').val(clicked_text3);
            
            $('#myModal2edit').modal('show');
        
              $("#btn_save_edit2").one('click',function () {
    
     
      $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        })
     // event.preventDefault();
     
    var node2_sourcenode = $("#myModal2edit #node2_sourcenode").val();
     var node2_destinationnode = $("#myModal2edit #node2_destinationnode").val();
     var node2_reorderperiod = $("#myModal2edit #node2_reorderperiod").val();
    
var formdata = { node2_sourcenode: node2_sourcenode, node2_destinationnode: node2_destinationnode, node2_reorderperiod: node2_reorderperiod };

$.ajax({
    method: 'PUT',
    url: my_url2 + '/' + clicked_id,
    data: formdata,
     // Remember that you need to have your csrf token included
        dataType: 'json',
        success: function(response){
            // Handle your response..
         //console.log(data);
   /* $('#node1-list').append('<tr id="table1row' + response + '"><td>' + node1_sourcenode + '</td><td>' + node1_destinationnode + '</td><td>' + node1_reorderperiod + '</td><td><button class="btn btn-warning btn-detail open_modal1" value="' + response + '">Edit</button> <button class="btn btn-danger btn-delete delete-node1" value="' + response + '">Delete</button></td></tr>');*/
            $('#myModal2edit #formnode2edit').trigger("reset");
             $('#myModal2edit').modal('hide');
            
          
            
          
        },
        error: function(response){
            // Handle error
           //console.log('Error:', data);
        }
   
});
    
 });
        
     //  }) 
    });
    //display modal form for creating new product
    $('#open_modal2create').click(function(){
        
        $('#myModal2create #formnode2create').trigger("reset");
        $('#myModal2create').modal('show');
        
         $("#btn_save_create2").one('click',function() {
   
     
      $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        })
     // event.preventDefault();
     
    var node2_sourcenode = $("#myModal2create #node2_sourcenode").val();
     var node2_destinationnode = $("#myModal2create #node2_destinationnode").val();
     var node2_reorderperiod = $("#myModal2create #node2_reorderperiod").val();
    
var formdata = { node2_sourcenode: node2_sourcenode, node2_destinationnode: node2_destinationnode, node2_reorderperiod: node2_reorderperiod };

$.ajax({
    method: 'POST',
     url: my_url2,
    data: formdata,
     // Remember that you need to have your csrf token included
        dataType: 'json',
        success: function(response){
            // Handle your response..
         //console.log(data);
   /* $('#node1-list').append('<tr id="table1row' + response + '"><td>' + node1_sourcenode + '</td><td>' + node1_destinationnode + '</td><td>' + node1_reorderperiod + '</td><td><button class="btn btn-warning btn-detail open_modal1" value="' + response + '">Edit</button> <button class="btn btn-danger btn-delete delete-node1" value="' + response + '">Delete</button></td></tr>');*/
            $('#myModal2create #formnode2create').trigger("reset");
             $('#myModal2create').modal('hide');
            
          
            
          
        },
        error: function(response){
            // Handle error
           //console.log('Error:', data);
        }
   
});
    
 });
    });
    //delete product and remove it from list
    $(document).on('click','.delete_table2row',function(){
         var clicked_id= $(this).val();
        
       // alert(clicked_id);
        // var clicked_id = $(this).parent().parent().attr('id');
        //alert(clicked_id);
        
         $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        })
        
      // var data = { clicked_id: clicked_id};

        
     //   var rowdata = { clicked_id: clicked_id };
        $.ajax({
            type: "DELETE",
            url: my_url2 + '/' + clicked_id,
          // data : data,
         //   data: rowdata, // Remember that you need to have your csrf token included
        dataType: 'json',
        success: function(response){
            // Handle your response..
            //console.log(data);
            //$("#table1row" + clicked_id).remove();
        
            //alert('hello');
           //$(this).parent().parent().remove();
            
            //response.remove();
            //alert(response);
            
           // $("#table1row" + clicked_id).remove();
            
           
 
        },
        error: function(response){
            // Handle error
            
        }
           
        });
        
        
    });
    
        //setInterval(function(){ alert("Hello"); }, 3000);
    
   setInterval(function(){ $('#divtable3').load('home #mytable3'); }, 1000);
   // setInterval(function(){ $('#open_modal1create').load('home #open_modal1create'); }, 3000);
   // setInterval(function(){ $('#myModal1create').load('home #myModal1create'); }, 3000);
    //setInterval(function(){ $('#myModal1edit').load('home #myModal1edit'); }, 3000);

//var url = "http://localhost/optideskproduct/public/home";
    //display modal form for product editing
    $(document).on('click','.open_modal3edit',function(){
       
       var clicked_id= $(this).val();
        //alert(clicked);
         // var clicked_id = $(this).parent().parent().attr('data-id');
         
   //  $.get(url + '/' + clicked, function (data) {
            
            
            //success data
             //console.log(data);
            
           var clicked_text1 = $(this).parent().parent().find('td:eq(0)').text();
            var clicked_text2 = $(this).parent().parent().find('td:eq(1)').text();
            var clicked_text3 = $(this).parent().parent().find('td:eq(2)').text();
         
           
            $('#myModal3edit #node3_sourcenode').val(clicked_text1);
            $('#myModal3edit #node3_destinationnode').val(clicked_text2);
             $('#myModal3edit #node3_reorderperiod').val(clicked_text3);
            
            $('#myModal3edit').modal('show');
        
              $("#btn_save_edit3").one('click',function () {
    
     
      $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        })
     // event.preventDefault();
     
    var node3_sourcenode = $("#myModal3edit #node3_sourcenode").val();
     var node3_destinationnode = $("#myModal3edit #node3_destinationnode").val();
     var node3_reorderperiod = $("#myModal3edit #node3_reorderperiod").val();
    
var formdata = { node3_sourcenode: node3_sourcenode, node3_destinationnode: node3_destinationnode, node3_reorderperiod: node3_reorderperiod };

$.ajax({
    method: 'PUT',
    url: my_url3 + '/' + clicked_id,
    data: formdata,
     // Remember that you need to have your csrf token included
        dataType: 'json',
        success: function(response){
            // Handle your response..
         //console.log(data);
   /* $('#node1-list').append('<tr id="table1row' + response + '"><td>' + node1_sourcenode + '</td><td>' + node1_destinationnode + '</td><td>' + node1_reorderperiod + '</td><td><button class="btn btn-warning btn-detail open_modal1" value="' + response + '">Edit</button> <button class="btn btn-danger btn-delete delete-node1" value="' + response + '">Delete</button></td></tr>');*/
            $('#myModal3edit #formnode3edit').trigger("reset");
             $('#myModal3edit').modal('hide');
            
          
            
          
        },
        error: function(response){
            // Handle error
           //console.log('Error:', data);
        }
   
});
    
 });
        
     //  }) 
    });
    //display modal form for creating new product
    $('#open_modal3create').click(function(){
        
        $('#myModal3create #formnode3create').trigger("reset");
        $('#myModal3create').modal('show');
        
         $("#btn_save_create3").one('click',function () {
   
     
      $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        })
     // event.preventDefault();
     
    var node3_sourcenode = $("#myModal3create #node3_sourcenode").val();
     var node3_destinationnode = $("#myModal3create #node3_destinationnode").val();
     var node3_reorderperiod = $("#myModal3create #node3_reorderperiod").val();
    
var formdata = { node3_sourcenode: node3_sourcenode, node3_destinationnode: node3_destinationnode, node3_reorderperiod: node3_reorderperiod };

$.ajax({
    method: 'POST',
    url: my_url3,
    data: formdata,
     // Remember that you need to have your csrf token included
        dataType: 'json',
        success: function(response){
            // Handle your response..
         //console.log(data);
   /* $('#node1-list').append('<tr id="table1row' + response + '"><td>' + node1_sourcenode + '</td><td>' + node1_destinationnode + '</td><td>' + node1_reorderperiod + '</td><td><button class="btn btn-warning btn-detail open_modal1" value="' + response + '">Edit</button> <button class="btn btn-danger btn-delete delete-node1" value="' + response + '">Delete</button></td></tr>');*/
            $('#myModal3create #formnode3create').trigger("reset");
             $('#myModal3create').modal('hide');
            
          
            
          
        },
        error: function(response){
            // Handle error
           //console.log('Error:', data);
        }
   
});
    
 });
    });
    //delete product and remove it from list
    $(document).on('click','.delete_table3row',function(){
         var clicked_id= $(this).val();
        
       // alert(clicked_id);
        // var clicked_id = $(this).parent().parent().attr('id');
        //alert(clicked_id);
        
         $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        })
        
      // var data = { clicked_id: clicked_id};

        
     //   var rowdata = { clicked_id: clicked_id };
        $.ajax({
            type: "DELETE",
            url: my_url3 + '/' + clicked_id,
          // data : data,
         //   data: rowdata, // Remember that you need to have your csrf token included
        dataType: 'json',
        success: function(response){
            // Handle your response..
            //console.log(data);
            //$("#table1row" + clicked_id).remove();
        
            //alert('hello');
           //$(this).parent().parent().remove();
            
            //response.remove();
            //alert(response);
            
           // $("#table1row" + clicked_id).remove();
            
           
 
        },
        error: function(response){
            // Handle error
            
        }
           
        });
        
        
    });
    
        //setInterval(function(){ alert("Hello"); }, 3000);
    
    setInterval(function(){ $('#divtable4').load('home #mytable4'); }, 1000);
   // setInterval(function(){ $('#open_modal1create').load('home #open_modal1create'); }, 3000);
   // setInterval(function(){ $('#myModal1create').load('home #myModal1create'); }, 3000);
    //setInterval(function(){ $('#myModal1edit').load('home #myModal1edit'); }, 3000);

//var url = "http://localhost/optideskproduct/public/home";
    //display modal form for product editing
    $(document).on('click','.open_modal4edit',function(){
       
       var clicked_id= $(this).val();
        //alert(clicked);
         // var clicked_id = $(this).parent().parent().attr('data-id');
         
   //  $.get(url + '/' + clicked, function (data) {
            
            
            //success data
             //console.log(data);
            
           var clicked_text1 = $(this).parent().parent().find('td:eq(0)').text();
            var clicked_text2 = $(this).parent().parent().find('td:eq(1)').text();
            var clicked_text3 = $(this).parent().parent().find('td:eq(2)').text();
         
           
            $('#myModal4edit #node4_sourcenode').val(clicked_text1);
            $('#myModal4edit #node4_destinationnode').val(clicked_text2);
             $('#myModal4edit #node4_reorderperiod').val(clicked_text3);
            
            $('#myModal4edit').modal('show');
        
              $("#btn_save_edit4").one('click',function () {
    
     
      $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        })
     // event.preventDefault();
     
    var node4_sourcenode = $("#myModal4edit #node4_sourcenode").val();
     var node4_destinationnode = $("#myModal4edit #node4_destinationnode").val();
     var node4_reorderperiod = $("#myModal4edit #node4_reorderperiod").val();
    
var formdata = { node4_sourcenode: node4_sourcenode, node4_destinationnode: node4_destinationnode, node4_reorderperiod: node4_reorderperiod };

$.ajax({
    method: 'PUT',
    url: my_url4 + '/' + clicked_id,
    data: formdata,
     // Remember that you need to have your csrf token included
        dataType: 'json',
        success: function(response){
            // Handle your response..
         //console.log(data);
   /* $('#node1-list').append('<tr id="table1row' + response + '"><td>' + node1_sourcenode + '</td><td>' + node1_destinationnode + '</td><td>' + node1_reorderperiod + '</td><td><button class="btn btn-warning btn-detail open_modal1" value="' + response + '">Edit</button> <button class="btn btn-danger btn-delete delete-node1" value="' + response + '">Delete</button></td></tr>');*/
            $('#myModal4edit #formnode4edit').trigger("reset");
             $('#myModal4edit').modal('hide');
            
          
            
          
        },
        error: function(response){
            // Handle error
           //console.log('Error:', data);
        }
   
});
    
 });
        
     //  }) 
    });
    //display modal form for creating new product
    $('#open_modal4create').click(function(){
        
        $('#myModal4create #formnode4create').trigger("reset");
        $('#myModal4create').modal('show');
        
         $("#btn_save_create4").one('click',function () {
   
     
      $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        })
     // event.preventDefault();
     
    var node4_sourcenode = $("#myModal4create #node4_sourcenode").val();
     var node4_destinationnode = $("#myModal4create #node4_destinationnode").val();
     var node4_reorderperiod = $("#myModal4create #node4_reorderperiod").val();
    
var formdata = { node4_sourcenode: node4_sourcenode, node4_destinationnode: node4_destinationnode, node4_reorderperiod: node4_reorderperiod };

$.ajax({
    method: 'POST',
    url: my_url4,
    data: formdata,
     // Remember that you need to have your csrf token included
        dataType: 'json',
        success: function(response){
            // Handle your response..
         //console.log(data);
   /* $('#node1-list').append('<tr id="table1row' + response + '"><td>' + node1_sourcenode + '</td><td>' + node1_destinationnode + '</td><td>' + node1_reorderperiod + '</td><td><button class="btn btn-warning btn-detail open_modal1" value="' + response + '">Edit</button> <button class="btn btn-danger btn-delete delete-node1" value="' + response + '">Delete</button></td></tr>');*/
            $('#myModal4create #formnode4create').trigger("reset");
             $('#myModal4create').modal('hide');
            
          
            
          
        },
        error: function(response){
            // Handle error
           //console.log('Error:', data);
        }
   
});
    
 });
    });
    //delete product and remove it from list
    $(document).on('click','.delete_table4row',function(){
         var clicked_id= $(this).val();
        
       // alert(clicked_id);
        // var clicked_id = $(this).parent().parent().attr('id');
        //alert(clicked_id);
        
         $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        })
        
      // var data = { clicked_id: clicked_id};

        
     //   var rowdata = { clicked_id: clicked_id };
        $.ajax({
            type: "DELETE",
            url: my_url4 + '/' + clicked_id,
          // data : data,
         //   data: rowdata, // Remember that you need to have your csrf token included
        dataType: 'json',
        success: function(response){
            // Handle your response..
            //console.log(data);
            //$("#table1row" + clicked_id).remove();
        
            //alert('hello');
           //$(this).parent().parent().remove();
            
            //response.remove();
            //alert(response);
            
           // $("#table1row" + clicked_id).remove();
            
           
 
        },
        error: function(response){
            // Handle error
            
        }
           
        });
        
        
    });
    
   
        </script>
  
   
   
    @endsection
    
  

    
