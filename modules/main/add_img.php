
<table width="100%">
	<tr><td id="reload" align="center">
	
	
<div class="col-md-10 col-md-offset-1">
                <form  method="post" name="insert_pic" id="insert_pic" action="modules/main/edit_img_php.php?action=insert_pic" enctype="multipart/form-data" >
			<div class="col-md-12">   
					 <div class="form-group">
                            <label for="subject">
                                Profile Images Product</label>
                                
           <input id="file-0" type="file"  class="file" name="profile"  >
     
                        </div>
                </div>
			<div class="col-md-12">   
					 <div class="form-group">
                            <label for="subject">
                                Images Product</label>
                       
           <input id="file-1" type="file" multiple class="file" data-overwrite-initial="false" data-min-file-count="2" name="files[]">
                        </div>
                </div> 
                <table  align="center" style="border-bottom: 0px;"><tr><td><button type="submit" class="btn btn-success" id="submit">SUBMIT</button> <button type="reset" class="btn btn-info" id="reset">RESET</button></td></tr></table>
                <input type="hidden" id="id_item_hide" name="id_item" value="<?=$_GET[id];?>"/>
			</form>
</div>

	</td></tr>
</table>


<script>
	$("#file-0").fileinput({
        'allowedFileExtensions': ['jpg', 'png', 'gif']
    });
    $("#file-1").fileinput({
   		uploadUrl: '#',
   		showUpload: false,
        allowedFileExtensions: ['jpg', 'png', 'gif'],
        overwriteInitial: false,
        maxFileSize: 1000,
        maxFilesNum: 10,
        //allowedFileTypes: ['image', 'video', 'flash'],
        slugCallback: function (filename) {
            return filename.replace('(', '_').replace(']', '_');
        }
    });
</script>
