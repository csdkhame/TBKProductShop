<style>
	.panel-table .panel-body{
  padding:0;
}

.panel-table .panel-body .table-bordered{
  border-style: none;
  margin:0;
}

.panel-table .panel-body .table-bordered > thead > tr > th:first-of-type {
    text-align:center;
    width: 100px;
}

.panel-table .panel-body .table-bordered > thead > tr > th:last-of-type,
.panel-table .panel-body .table-bordered > tbody > tr > td:last-of-type {
  border-right: 0px;
}

.panel-table .panel-body .table-bordered > thead > tr > th:first-of-type,
.panel-table .panel-body .table-bordered > tbody > tr > td:first-of-type {
  border-left: 0px;
}

.panel-table .panel-body .table-bordered > tbody > tr:first-of-type > td{
  border-bottom: 0px;
}

.panel-table .panel-body .table-bordered > thead > tr:first-of-type > th{
  border-top: 0px;
}

.panel-table .panel-footer .pagination{
  margin:0; 
}

/*
used to vertically center elements, may need modification if you're not using default sizes.
*/
.panel-table .panel-footer .col{
 line-height: 34px;
 height: 34px;
}

.panel-table .panel-heading .col h3{
 line-height: 30px;
 height: 30px;
}

.panel-table .panel-body .table-bordered > tbody > tr > td{
  line-height: 34px;
}


</style>
<style>
	.blink {
  -webkit-animation-name: blink;
     -moz-animation-name: blink;
       -o-animation-name: blink;
          animation-name: blink;
  -webktit-animation-timing-function: linear;
      -moz-animation-timing-function: linear;
        -o-animation-timing-function: linear;
           animation-timing-function: linear;
  -webkit-animation-duration: 1s;
     -moz-animation-duration: 1s;
       -o-animation-duration: 1s;
          animation-duration: 1s;
          
}

.blink-infinite {
  -webkit-animation-iteration-count: infinite;
     -moz-animation-iteration-count: infinite;
       -o-animation-iteration-count: infinite;
          animation-iteration-count: infinite;
}

.blink-5 {
  -webkit-animation-iteration-count: 5;
     -moz-animation-iteration-count: 5;
       -o-animation-iteration-count: 5;
          animation-iteration-count: 5;
          
}
.blink-3 {
  -webkit-animation-iteration-count: 3;
     -moz-animation-iteration-count: 3;
       -o-animation-iteration-count: 3;
          animation-iteration-count: 3;
          
}

.blink-furiously {
  -webkit-animation-duration: 0.3s;
     -moz-animation-duration: 0.3s;
       -o-animation-duration: 0.3s;
          animation-duration: 0.3s;
}

@-webkit-keyframes blink {
  50% {
    opacity: 0;
  }
}
@-moz-keyframes blink {
  50% {
    opacity: 0;
  }
}
@-o-keyframes blink {
  50% {
    opacity: 0;
  }
}
@keyframes blink {
  50% {
    opacity: 0;
  }
}
</style>
<style>
.check
{
    opacity:0.5;
	color:#996;
	
}
</style>
<div class="jumbotron jumbotron-sm">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <h2 class="h2">
                    T-Booking<small> Increase Product Shop</small></h2>
            </div>
        </div>
    </div>
</div>
<div class="container">
    
<div class="row">
        
<div class="col-md-10 col-md-offset-1">

<style>
	
/* Table css Start */
a.del
{
    background:#d9534f;
    border-radius: 2px; 
    width: 35px;
    height:28px; 
    padding-left:12px;
    line-height:10px;
}

a.edit
{
    padding-left:10px;
    background:#337ab7;
    color:#fff;
    border-radius:2px;
    border:none;
}

tr.row-name
{
    font-size: 15px;
    color:#448aff;
}

tr.row-content
{
    color:#6c7173;
}

.table-bor
{
    border-bottom: 1px solid #448aff;
}

td.check
{
    text-align: center;
}

.table-striped>tbody>tr:nth-of-type(odd)
{
    background:#F0F2F2 !important; 
}

a.btn-danger:hover
{
    background: #de6c69;
}

a.btn-danger
{
    background:#d9534f;  
}

a.btn-top
{
    background:#448aff;
    color:#fff;
    border:1px solid #448aff; 
    padding: 7px 10px; 
    border-radius:4px; 
}

a.btn-top:hover
{
    text-decoration: none;
    box-shadow:3px 3px 5px #222; 
    transition:box-shadow 0.5s; 
}

/* Table css End */

</style>

  <div class="table-responsive">
  <table class="table table-striped " id="list_item">
 
    <div class="dropdown">
    	<div class="col-md-3">
	    <input type="text" class="form-control" id="filer_name" onkeyup="filerName()" placeholder="Search for names.." />
    	</div>
      <button  style="margin-right: 15px;"  class="btn btn-primary  pull-right" data-toggle="modal" data-target="#myModal" onclick="create_row();"> <span class="glyphicon glyphicon-plus"></span> &nbsp Increase New</button>
      </div>
  <br>
  <br>
     <thead>
        <tr class="row-name">
           <th style="width:7%">New/Old</th>
           <th>Id</th>
           <th>Product Name</th>
           <th>Category</th>
           <th>Price</th>
           <th>Promotion</th>
           <th width="20%" ><div style="text-align: center;">Setting</div></th>
           
        </tr>
     </thead>   
     <tbody>
      <?php 
            $db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);
            mysql_query("SET NAMES utf8"); 
			mysql_query("SET character_set_results=utf-8"); 
			$res[product] = $db->select_query("SELECT i_id,i_item_type,s_detail,s_name,d_last_update,i_price_unit FROM ".TB_Item." order by i_id asc ");
    		while($arr[product] = $db->fetch($res[product])){  
    		$date2 = $arr[product][d_last_update];
    		$date = date_create($date2);
			$date_compare = date_format($date, 'Y-m-d');
			
    		if($date_compare == date('Y-m-d')){
				$shownew_old = '<span class="label label-default" id="newold_'.$arr[product][i_id].'">New</span>';
			}else{
				$shownew_old = '<span class="label label-info" id="newold_'.$arr[product][i_id].'">Old</span>';
			}
    		?>
        <tr class="row-content" id="rowUpdate<?=$arr[product][i_id];?>">
        	
           <td align="center">  <?=$shownew_old;?></td>
           <td><p id="id"><?=$arr[product][i_id];?></p></td>
           <td><p id="name"><?=$arr[product][s_name];?></p></td>
           <td><?php  $res[type] = $db->select_query("SELECT s_name FROM ".TB_Type." where i_id = '".$arr[product][i_item_type]."' ");
           $arr[type] = $db->fetch($res[type]); ?>
           		<p id="type"> <? echo $arr[type][s_name]; ?></p> <?
            ?><!--<i class="fa fa-thumbs-up" aria-hidden="true"></i>--></td>
           <td><p id="price"><?=$arr[product][i_price_unit];?></p></td>
           <td><p id="pro">-</p></td>
           <td align="center">
              <button type="button" class="btn btn-danger btn-sm" onclick="deleteRow('<?=$arr[product][i_id];?>')" id="btn_del_<?=$arr[product][i_id];?>"> <i class="fa fa-trash" aria-hidden="true"></i></button>
               <button type="button" class="btn btn-warning btn-sm" onclick="restoreRow('<?=$arr[product][i_id];?>')" id="btn_re_<?=$arr[product][i_id];?>" style="display: none;"> <small>Restore</small></i></button> 
              &nbsp 
              <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#imgModal" onclick="edit_data('<?=$arr[product][i_id];?>','<?=$arr[product][s_name];?>')">   <i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
              &nbsp 
              <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#imgModal" onclick="edit_img('<?=$arr[product][i_id];?>','<?=$arr[product][s_name];?>')"> <i class="fa fa-file-image-o " aria-hidden="true"></i></button>
              
           </td>
		  
		   
        </tr>

	<? } ?>
     </tbody>
  </table>
  </div>

</div>

</div>

</div>

 <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog" style="width: 800px;" id="setClass">
    
      <!-- Modal content-->
      <div class="modal-content" >
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" id="header_modal">Modal Header</h4>
        </div>
        <div class="modal-body" id="body_modal">
         <!-- <p>Some text in the modal.</p>-->
        </div>
        <div class="modal-footer" id="footer_modal" >
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
   <!-- Modal -->
  <div class="modal fade" id="imgModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><strong id="headTxt">Modal Header</strong></h4>
        </div>
        <div class="modal-body" id="modal_imgBody">
          <p>This is a large modal.</p>
        </div>
        <div class="modal-body" id="modal_imgBody_add" style="display: none;">
          <p>This is a large modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" id="add_img">Add Images</button>
          <button type="button" class="btn btn-danger"  id="edit_img" style="display: none;">Edit Images</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  
  <script>
  	function create_row(){
  		 $("#header_modal").html('Increase Product');
  		 $("#footer_modal").hide();
  		$("#body_modal").html('<div align="center"><img src="loader.gif"/></div>');
  		var url = "popup.php?name=main&file=product_increase";
		$.post(url, function(data) {
			
            $("#body_modal").html(data);
           
            //alert(url);	
        });
	}
  </script>

  <script>
  	
  	function edit_img(id,topic_item){
  		url = "popup.php?name=main&file=edit_img&id="+id;
  		$("#modal_imgBody").html('<div align="center"><img src="loader.gif"/></div>');
  		$("#headTxt").text(topic_item);
		$.post(url, function(data) {
				$("#modal_imgBody").html(data);
		});
		var url2 = "popup.php?name=main&file=add_img&id="+id;
		$.post(url2, function(data) {
				$("#modal_imgBody_add").html(data);
		});
		
	}
	 $('#add_img').click(function(){
	 	$("#modal_imgBody_add").show();
	 	$("#modal_imgBody").hide();
	 	$('#add_img').hide(5);
		$('#edit_img').show(5);
	 });
	 $('#edit_img').click(function(){
	 	$("#modal_imgBody_add").hide();
	 	$("#modal_imgBody").show();
	 	$('#add_img').show(5);
		$('#edit_img').hide(5);
	 });
/*	function addImg(id,topic_item){
  		url = "popup.php?name=main&file=add_img&id="+id;
  		$("#modal_imgBody").html('<div align="center"><img src="loader.gif"/></div>');
  		$("#headTxt").text(topic_item);

		$.post(url, function(data) {
				
				$("#modal_imgBody").html(data);
				
		});
		$('#add_img').hide(5);
		$('#edit_img').show(5);
	}*/
	
	function edit_data(id,topic_item){
  		url = "popup.php?name=main&file=edit_item&id="+id;
  		$("#modal_imgBody").html('<div align="center"><img src="loader.gif"/></div>');
  		$("#headTxt").text(topic_item);

		$.post(url, function(data) {
				
				$("#modal_imgBody").html(data);
		        });
	}
	
	function deleteRow(id){
			var url = "modules/main/edit_item_php.php?action=remove_row";
			swal({
			  title: "Are you sure?",
			  text: "Your will not be able to recover this imaginary file!",
			  type: "warning",
			  showCancelButton: true,
			  confirmButtonClass: "btn-danger",
			  confirmButtonText: "Yes, delete it!",
			  closeOnConfirm: false
			},
			function(){
			  swal("Deleted!", "Your imaginary file has been deleted.", "success");	
				$.post(url,{ id:id }, function(data) {
					console.log("remove : "+data);
		           if(data==1){
				   			$('#btn_del_'+id).hide(5);
				   			$('#btn_re_'+id).show(5);
				   			$('#rowUpdate'+id_img).toggleClass("check");
				   }
				   
		        });

			});
				
	}
	
	function restoreRow(id){
		
	}
	
  </script>

<!--  Filter By Name-->
  <script>
		function filerName(){
			 var input, filter, table, tr, td, i;
			  input = document.getElementById("filer_name");
			  filter = input.value.toUpperCase();
			  table = document.getElementById("list_item");
			  tr = table.getElementsByTagName("tr");
			  for (i = 0; i < tr.length; i++) {
			    td = tr[i].getElementsByTagName("td")[2];
			    if (td) {
			      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
			        tr[i].style.display = "";
			      } else {
			        tr[i].style.display = "none";
			      }
			    }       
			  }
		}
   </script>
