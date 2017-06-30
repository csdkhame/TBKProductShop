

            <div class="well well-sm">
                <form  method="post" name="insert_item" id="insert_item" action="modules/main/test.php?action=product" enctype="multipart/form-data" >
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Name Product</label>
                            <input type="text" class="form-control" id="product_name" placeholder="Product name" required="required" name="product_name" />
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Price</label>
                            <div class="input-group">
                                
                                <input type="number" class="form-control" id="price" placeholder="Price" required="required" name="price"/>
                                <span class="input-group-addon"><img src="baht2.png" width="20px"/></span>
                                </div>
                        </div>
                        <div class="form-group">
                            <label for="subject">
                                Types Product</label>
                            <select id="type" name="typeitem" class="form-control" required="required">
                            		<option value="0" selected="selected"></option>
                            <?php 
                            
                            $db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD); 
                            mysql_query("SET NAMES utf8"); 
							mysql_query("SET character_set_results=utf-8");
							$res[other] = $db->select_query("select i_id,s_name from ".TB_Type." where i_deleted = 0  ");
							 while($arr[other] = $db->fetch($res[other])) { ?>
                                <option value="<?=$arr[other][i_id];?>"><?=$arr[other][s_name];?></option>
                             <? }  ?>   
                            </select>
                        </div>
                       
                    </div>
                    
                    <div class="col-md-6">
                        <div class="form-group col-md-12">
                            <label for="name">
                                Detail</label>
                            <textarea name="detail" id="detail" class="form-control" rows="9" cols="25" required="required"
                                placeholder=""></textarea>
                        </div>
                    </div>
             
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

                </div>
                <table  align="center" style="border-bottom: 0px;"><tr><td><button type="submit" class="btn btn-success" id="submit">SUBMIT</button> <button type="reset" class="btn btn-info" id="reset">RESET</button></td></tr></table>
                </form>
                <div align="center">
                </div>
            </div>
<script>
/*	$( "#insert_item" ).submit(function( event ) {
	var url = 'modules/main/test.php?action=product';

    data_form = $('#insert_item').serialize();    
	data = new FormData($('#insert_item')[0]);
	data.append('file', $('#file-1')[0].files[0]);          
	    $.ajax({
	                url: 'modules/main/test.php', // point to server-side PHP script 
	                dataType: 'text',  // what to expect back from the PHP script, if anything
	                cache: false,
	                contentType: false,
	                processData: false,
	                data: data,                         
	                type: 'post',
	                success: function(php_script_response){
	                    console.log(php_script_response);
	                }
	     });
	     event.preventDefault();
	});*/
</script>

<!--$( "#target" ).submit(function( event ) {
  alert( "Handler for .submit() called." );
  event.preventDefault();
});-->


<script>
    $('#file-fr').fileinput({
        language: 'fr',
        uploadUrl: '#',
        allowedFileExtensions: ['jpg', 'png', 'gif']
    });
    $('#file-es').fileinput({
        language: 'es',
        uploadUrl: '#',
        allowedFileExtensions: ['jpg', 'png', 'gif']
    });
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
    /*
     $(".file").on('fileselect', function(event, n, l) {
     alert('File Selected. Name: ' + l + ', Num: ' + n);
     });
     */
    $("#file-3").fileinput({
        showUpload: false,
        showCaption: false,
        browseClass: "btn btn-primary btn-lg",
        fileType: "any",
        previewFileIcon: "<i class='glyphicon glyphicon-king'></i>",
        overwriteInitial: false,
        initialPreviewAsData: true,
        initialPreview: [
            "http://lorempixel.com/1920/1080/transport/1",
            "http://lorempixel.com/1920/1080/transport/2",
            "http://lorempixel.com/1920/1080/transport/3"
        ],
        initialPreviewConfig: [
            {caption: "transport-1.jpg", size: 329892, width: "120px", url: "{$url}", key: 1},
            {caption: "transport-2.jpg", size: 872378, width: "120px", url: "{$url}", key: 2},
            {caption: "transport-3.jpg", size: 632762, width: "120px", url: "{$url}", key: 3}
        ]
    });
    $("#file-4").fileinput({
        uploadExtraData: {kvId: '10'}
    });
    $(".btn-warning").on('click', function () {
        var $el = $("#file-4");
        if ($el.attr('disabled')) {
            $el.fileinput('enable');
        } else {
            $el.fileinput('disable');
        }
    });
    $(".btn-info").on('click', function () {
        $("#file-4").fileinput('refresh', {previewClass: 'bg-info'});
    });
    /*
     $('#file-4').on('fileselectnone', function() {
     alert('Huh! You selected no files.');
     });
     $('#file-4').on('filebrowse', function() {
     alert('File browse clicked for #file-4');
     });
     */
    $(document).ready(function () {
        $("#test-upload").fileinput({
            'showPreview': false,
            'allowedFileExtensions': ['jpg', 'png', 'gif'],
            'elErrorContainer': '#errorBlock'
        });
        $("#kv-explorer").fileinput({
            'theme': 'explorer',
            'uploadUrl': '#',
            overwriteInitial: false,
            initialPreviewAsData: true,
            initialPreview: [
                "http://lorempixel.com/1920/1080/nature/1",
                "http://lorempixel.com/1920/1080/nature/2",
                "http://lorempixel.com/1920/1080/nature/3"
            ],
            initialPreviewConfig: [
                {caption: "nature-1.jpg", size: 329892, width: "120px", url: "{$url}", key: 1},
                {caption: "nature-2.jpg", size: 872378, width: "120px", url: "{$url}", key: 2},
                {caption: "nature-3.jpg", size: 632762, width: "120px", url: "{$url}", key: 3}
            ]
        });
        /*
         $("#test-upload").on('fileloaded', function(event, file, previewId, index) {
         alert('i = ' + index + ', id = ' + previewId + ', file = ' + file.name);
         });
         */
    });
</script>