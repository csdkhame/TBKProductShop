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

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css' />
<style>
	.gallery
{
    display: inline-block;
    margin-top: 20px;
}
.check
{
    opacity:0.5;
	color:#996;
	
}

</style>

<style>
	.badgebox
{
    opacity: 0;
}

.badgebox + .badge
{
    /* Move the check mark away when unchecked */
    text-indent: -999999px;
    /* Makes the badge's width stay the same checked and unchecked */
    width: 27px;
}

.badgebox:focus + .badge
{
    /* Set something to make the badge looks focused */
    /* This really depends on the application, in my case it was: */
    
    /* Adding a light border */
    box-shadow: inset 0px 0px 5px;
    /* Taking the difference out of the padding */
}

.badgebox:checked + .badge
{
    /* Move the check mark back when checked */
	text-indent: 0;
}
</style>
<!--<div class="container">
    <div class="row">-->
        <table width="100%">
        	<tr>
        		<td>
        		
        <div class="col-md-10 col-md-offset-1">

		    <div class="panel panel-info">
		    
		      <div class="panel-heading"><table width="100%"><tr><td>Image file</td>
		      <td align="right" id="all_btn">
		      	<button class="btn btn-danger" id='remove_all'><strong>Remove All</strong></button>
		        <button class="btn btn-warning" id="restore_all" style="display: none"><strong>Restore All</strong></button>
		      </td></tr></table></div>
		      <div class="panel-body">
		      	
		      	<?php $id_product = $_GET[id]; 
		      	
		      	$db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);
                  mysql_query("SET NAMES utf8"); 
				  mysql_query("SET character_set_results=utf-8"); 
		      	  $res[img] = $db->select_query("SELECT s_name,i_id_item,i_id,i_img_cover FROM ".TB_Imag." where i_id_item = '".$id_product."' and i_deleted = 0 ");
                  while($arr[img] = $db->fetch($res[img])){ 
                  if($arr[img][i_img_cover]==1){
				  	$checked = "checked";
				  }else{
				  	$checked = "";
				  }
				  
                  ?>

			<div class='col-sm-4 col-xs-6 col-md-3 col-lg-3' id="col_<?=$arr[img][i_id];?>">
				<div class="thumbnail">
                	 <img class="fixsize img-responsive img-radio" alt="" src="images_upload/<?=$arr[img][s_name];?>"  style="max-width:100px; height: 100px;"  id="thumb_<?=$arr[img][i_id];?>" />
                    <div class='text-center'>
                        <small ><?=$arr[img][s_name];?></small>	
      <div style="margin-top: 5px;" >                  
      <a class="fancybox" rel="ligthbox" href="images_upload/<?=$arr[img][s_name];?>"><button type="button" class="kv-file-remove btn btn-xs btn-default"><i class="glyphicon glyphicon-eye-open"></i></button></a>
      
      <button type="button" class="kv-file-remove btn btn-xs btn-default" id="remove<?=$arr[img][i_id];?>" title="Remove file"  onclick="remove_img('<?=$arr[img][i_id];?>','<?=$id_product;?>');"  >
      <i class="glyphicon glyphicon-trash text-danger"></i>
      </button>
      
      <button type="button" style="display: none;" id="restore<?=$arr[img][i_id];?>" class="kv-file-remove btn btn-xs btn-warning" title="Restore file" onclick="restore_img('<?=$arr[img][i_id];?>','<?=$id_product;?>');" >
      <small>Restore</small>
      </button>
      
      </div>     	 
                    </div> <!-- text-right / end -->
    		</div>
                  <!--<div class="checkbox checkbox-primary" style="display: nones;">
                        <input id="checkbox<?=$arr[img][i_id];?>" type="checkbox"  class="<?=$arr[img][i_id];?>" <?=$checked;?>  />
                        <label for="checkbox<?=$arr[img][i_id];?>">
                        <small>Cover picture</small>   
                        </label>
         		</div>-->
         		<div align="center" >
         		
         		<label for="<?=$arr[img][i_id];?>" class="btn btn-default">Cover <input type="checkbox" id="<?=$arr[img][i_id];?>"  class="badgebox" name="ff[1][]" <?=$checked;?>><span class="badge">&check;</span></label>
         		</div>
            </div> <!-- col-6 / end -->		
            	
                <?  } 	?><input type="hidden" id="id_product" value="<?=$id_product;?>"/>
		      </div>
		       
		    
		    </div>
			
			
		</div>
	
        		</td>
        	</tr>
        </table>
<!--	</div>

</div>-->

<script>
	$(document).ready(function(){
    //FANCYBOX
    //https://github.com/fancyapps/fancyBox
    $(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none"
    });
    
    
});
</script>



<script>

$("input:checkbox").on('click', function() {
  // in the handler, 'this' refers to the box clicked on
  var url = 'modules/main/edit_img_php.php?action=cover_img'  ;
  var id_product = $('#id_product').val();
  var $box = $(this);
  var id_img = $(this).attr('id');
  var url = 'modules/main/edit_img_php.php?action=cover_img'  ;
  var id_product = $('#id_product').val();
  $.post(url,{ id_img:id_img, id_product:id_product }, function(data) {
		           console.log(data);
  });
  
  if ($box.is(":checked")) {
		        
    var group = "input:checkbox[name='" + $box.attr("name") + "']";
    // the checked state of the group/box on the other hand will change
    // and the current value is retrieved using .prop() method
    $(group).prop("checked", false);
    $box.prop("checked", true);
  } else {
    $box.prop("checked", false);
  }
});

</script>


<script>
	function remove_img(id_img,id_product){
		url = "modules/main/edit_img_php.php?action=remove_each";
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
				$.post(url,{ id_img:id_img , id_product:id_product }, function(data) {
					console.log("remove : "+data);
		           if(data==1){
				   			$('#restore'+id_img).show(5);
				   			$('#remove'+id_img).hide(5);
				   			
//				   			$('#btn_restore'+id_img).attr('display',"");
				   			$('#thumb_'+id_img).toggleClass("check");
				   }
				   
		        });

			});
	}
	
	function restore_img(id_img,id_product){
		url = "modules/main/edit_img_php.php?action=restore_each";
		$.post(url,{ id_img:id_img , id_product:id_product }, function(data) {
					console.log("restore : "+data);
		           if(data==1){
				   			$('#restore'+id_img).hide(5);
				   			$('#remove'+id_img).show(5);
				   			
				   			$('#thumb_'+id_img).removeClass("check");
				   }
				   
		        });
		
	}
	
	$('#remove_all').click(function(){
		url = "modules/main/edit_img_php.php?action=remove_all";
		var id_product = $('#id_product').val();
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
				$.post(url,{id_product:id_product} , function(data) {
					console.log("remove all: "+data);
		           if(data==1){
					   	$('button[title="Remove file"]').hide(5);
						$('button[title="Restore file"]').show(5);
					   	$('img').toggleClass("check");
						
						$('#remove_all').hide(5);
						$('#restore_all').show(5);
				   }
		        });
		        	
			});
	})
	
	$('#restore_all').click(function(){
		url = "modules/main/edit_img_php.php?action=restore_all";
		var id_product = $('#id_product').val();
		
				$.post(url,{id_product:id_product} , function(data) {
					console.log("restore all : "+data);
		          if(data==1){
					   	$('button[title="Remove file"]').show(5);
						$('button[title="Restore file"]').hide(5);
					   	$('img').removeClass("check");
						
						$('#remove_all').show(5);
						$('#restore_all').hide(5);
				   }
		        });
		
	});
</script>
