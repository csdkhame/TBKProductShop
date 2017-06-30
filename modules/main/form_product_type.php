<script>
$( document ).ready(function() {
  
});
</script>

<script src="jquery-tabledit/jquery.tabledit.js"></script>
<script src="jquery-tabledit/jquery.tabledit.min.js"></script>
<meta charset="UTF-8">
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

<div class='container'>
    <div class='row'>
        <div class='col-sm-10 col-sm-offset-1'>
            <div class='well'>
                <form method="post" id="form_type" name="form_type" enctype="multipart/form-data">
                    <div class='row'>
                        <div class='col-sm-10 col-sm-offset-1'  >
                            <div class='form-group'>
                                <label for='fname'>Name Category</label>
                                <input type='text' name='name_type' class='form-control' />
                            </div>
                            <div class='form-group'>
                                <label for='lname'>Dtail</label>
                                <textarea class='form-control' name='detail' rows='5' ></textarea>
                            </div>
                             <table  align="center" style="border-bottom: 0px;"><tr><td><button type="button" class="btn btn-success" id="submit">SUBMIT</button> <button type="reset" class="btn btn-info" id="reset">RESET</button></td></tr></table>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class='col-sm-10 col-sm-offset-1'>
         <table class="table table-striped table-bordered" id="example1">
		    <thead>
		      <tr>
		        <th width="5%">ID</th>
		        <th>NAME</th>
		        <th>DETAIL</th>
		        <!--<th align="center" width="9%">ACTION</th>-->
		      </tr>
		    </thead>
		    <tbody id="tbody_table_type">
		    <?php 
		$db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD); 
		$numrow = $db->num_rows(TB_Type,"i_id","i_deleted = 0"); 
		if($numrow==0){ ?>
				<tr data-id="0" id="0">
			        <td class="tabledit-data" ></td>
			        <td class="tabledit-data" ></td>
			        <td class="tabledit-data" ></td>
		        </tr>
		<? } else{
		mysql_query("SET NAMES utf8"); 
		mysql_query("SET character_set_results=utf-8");
		$res[other] = $db->select_query("select * from  ".TB_Type." where i_deleted = 0  ");
		$num = 0;
		  while($arr[other] = $db->fetch($res[other])) { ?>
		      <tr id="<?=$arr[other][i_id];?>" data-id="<?=$num=+1;?>" >
		        <td class="tabledit-data" ><?=$arr[other][i_id];?></td>
		        <td class="tabledit-data" ><?=$arr[other][s_name];?></td>
		        <td class="tabledit-data" ><?=$arr[other][s_detail];?></td>
		       
		      </tr>
		    <? }  } ?>
		    </tbody>
		  </table>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="defaultModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
</div>
<button class="btn" id="addRow"> 123 </button>

<!--<script>
$('#submit').one('click',function(){
	alert(123);
	$('#tbody_table_type tr[data-id="0"]').remove();
});
</script>-->

<script>
	$('#submit').click(function(){
		
		var url = "modules/main/test.php?action=type";
		
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
				$.post(url,$('#form_type').serialize(), function(data) {
					if(data==1){
						 swal("Success!", "Your imaginary file has been deleted.", "success");
						 load_type();
					}else{
						swal("Error!", "Your imaginary file has been deleted.", "error");
					}
					
		        });
			 
			});
	});
</script>
<script>
	function load_type(){
		var url = "modules/main/test.php?action=query_type";	
		$.post(url, function(data) {		
			var res = JSON.parse(data);
                        $.each(res, function (i, item) {
//							alert(item.s_name);
							 /*$("#tbody_table_type").append("<tr id='"+item.i_id+"'><td>"+item.i_id+"</td><td>"+item.s_name+"</td><td>"+item.s_detail+"</td><td></td></tr>");*/	
									 		addrow(item.i_id,item.s_name,item.s_detail);
                        });
		});


	}
	$("#addRow").click(function() {
		addrow(1);
	});
	function addrow(id,name,detail){
		var tableditTableName = '#example1';
	    var newID = parseInt($(tableditTableName + " tr:last").attr("data-id")) + 1;
	    var clone = $("#example1 tr:last").clone();
	    $(".tabledit-data span", clone).text("");
	    $(".tabledit-data input", clone).val("");
	    clone.appendTo("#example1");
	    $(tableditTableName + " tr:last").attr("data-id", newID)
	    $(tableditTableName + " tr:last td .tabledit-span.tabledit-identifier").text(id);
	    $(tableditTableName + " tr:last td .tabledit-input.tabledit-identifier").val(id);
	    
	    $(tableditTableName + " tr:last td .tabledit-input.tabledit-identifier").attr('id',id);
	    
	    $(tableditTableName + " tr:last td[class='tabledit-data tabledit-view-mode']:eq( 0 ) .tabledit-span").text(name);
	    $(tableditTableName + " tr:last td[class='tabledit-data tabledit-view-mode']:eq( 0 ) .tabledit-input").val(name);
	    
	    $(tableditTableName + " tr:last td[class='tabledit-data tabledit-view-mode']:eq( 1 ) .tabledit-span").text(detail);
	    $(tableditTableName + " tr:last td[class='tabledit-data tabledit-view-mode']:eq( 1 ) .tabledit-input").val(detail);
	
	   	$('#tbody_table_type tr[data-id="0"]').remove();
	}
	
</script>

<!--example-->
<script>
	$('#example1').Tabledit({
    url: 'jquery-tabledit/update.php',
    columns: {
        identifier: [0, 'id'],
        editable: [[1, 'NAME'], [2, 'DETAIL'], ]
    },
  onSuccess: function(data, textStatus, jqXHR) {
      console.log(data);
      console.log(textStatus);
      console.log(jqXHR);
  },
  onFail: function(jqXHR, textStatus, errorThrown) {
      console.log(jqXHR);
      console.log(textStatus);
      console.log(errorThrown);
  }
});
</script>

