
<table width="100%">
	<tr><td id="reload" align="center">
	
<?php 
$db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);
	$current_date = $current = date('Y-m-d h:i:s');
	mysql_query("SET NAMES utf8"); 
	mysql_query("SET character_set_results=utf-8"); 
	$res[product] = $db->select_query('SELECT s_name,i_price_unit,s_detail,i_item_type	 FROM '.TB_Item.' WHERE  i_id = "'.$_GET[id].'" '); 
	$arr[product] = $db->fetch($res[product]);
?>		
<div class="col-md-10 col-md-offset-1">
                <form  method="post" name="edit_item" id="edit_item"  enctype="multipart/form-data" >
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Name Product</label>
                            <input type="text" class="form-control" id="product_name" placeholder="Product name" required="required" name="product_name" value="<?=$arr[product][s_name];?>" />
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Price</label>
                            <div class="input-group">
                                
                                <input type="number" class="form-control" id="input_price" placeholder="Price" required="required" name="price" value="<?=$arr[product][i_price_unit];?>"/>
                                <span class="input-group-addon"><img src="baht2.png" width="20px"/></span>
                                </div>
                        </div>
                        <div class="form-group">
                            <label for="subject">
                                Types Product</label>
                            <select id="type" name="typeitem" class="form-control" required="required">
                            		<option value="0" ></option>
                            <?php 
                            
                            $db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD); 
                            mysql_query("SET NAMES utf8"); 
							mysql_query("SET character_set_results=utf-8");
							$res[type] = $db->select_query("select i_id,s_name from ".TB_Type." where i_deleted = 0  ");
							 while($arr[type] = $db->fetch($res[type])) { 
							 	if($arr[product][i_item_type]==$arr[type][i_id]){
									$selected = "selected";
								}else{
									$selected = "";
								}
							 ?>
                                <option value="<?=$arr[type][i_id];?>"  <?=$selected;?> > <?=$arr[type][s_name];?></option>
                                <!--<option value=""   > <?=$arr[product][i_item_type]." : ".$arr[type][i_id]." : ".$arr[type][s_name]." : ".$selected;?></option>-->
                             <? }  ?>   
                            </select>
                        </div>
                       
                    </div>
                    
                    <div class="col-md-6">
                        <div class="form-group col-md-12">
                            <label for="name">
                                Detail</label>
                            <textarea name="detail" id="detail" class="form-control" rows="9" cols="25" required="required"
                                placeholder=""><?=$arr[product][i_item_type];?></textarea>
                        </div>
                    </div>
                <input type="hidden" id="id_item" value="<?=$_GET[id];?>"/>
                </div>
                <table  align="center" style="border-bottom: 0px;"><tr><td><button type="submit" class="btn btn-success" id="submit">SUBMIT</button> <button type="reset" class="btn btn-info" id="reset">RESET</button></td></tr></table>
                </form>
</div>

	</td></tr>
</table>


<script>
	$( "#edit_item" ).submit(function( event ) {
	  var form_data = $(this).serialize();
	  var id_item = $('#id_item').val();
	  var url = "modules/main/edit_item_php?action=update_item&id_item="+id_item; 
	  
/*					$('#name').html('<img src="ellipsis.gif" width="40px;" />');
					$('#price').html('<img src="ellipsis.gif" width="40px;" />');
					$('#type').html('<img src="ellipsis.gif" width="40px;" />');
					$('#detail').html('<img src="ellipsis.gif" width="40px;" />');*/
	  $.post(url,form_data ,function(data) {
	  				
			  	if(data==1){
					
					swal("Success!", "Update Success!", "success");
					alertUpdate();
					$('#imgModal').modal('toggle')
					
				}
				console.log(data);
	  });
	  
	  event.preventDefault();
	});
function alertUpdate(){
					var product_name = $('#product_name').val();
					var price = $('#input_price').val();
					var typeitem = $('#typeitem').val();
					var detail = $('#detail').val();
					var id_item = $('#id_item').val();
					
					$('#name').html(product_name);
					$('#price').html(price);
					$('#type').html(typeitem);
					$('#pro').html('-');
					$('#rowUpdate'+id_item).addClass('success');
					$('#newold_'+id_item).addClass('label-danger blink blink-3');
  					setTimeout(function() {
				       $('#rowUpdate'+id_item).removeClass("success");
				        $('#newold_'+id_item).removeClass('label-danger');
				        $('#newold_'+id_item).removeClass('blink blink-3');
				   }, 3000);
}
/*$('#imgModal').on('hidden.bs.modal', function () {
 // alert();
  
  					var product_name = $('#product_name').val();
					var price = $('#input_price').val();
					var typeitem = $('#typeitem').val();
					var detail = $('#detail').val();
					var id_item = $('#id_item').val();
					
					$('#name').html(product_name);
					$('#price').html(price);
					$('#type').html(typeitem);
					$('#pro').html('-');
					$('#rowUpdate'+id_item).addClass('success');
					$('#newold_'+id_item).addClass('label-danger blink blink-3');
  					setTimeout(function() {
				       $('#rowUpdate'+id_item).removeClass("success");
				        $('#newold_'+id_item).removeClass('label-danger');
				        $('#newold_'+id_item).removeClass('blink blink-3');
				   }, 3000);
				   
				  
})*/
	
	
</script>

