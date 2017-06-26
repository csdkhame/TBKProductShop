<!--<script>
$(document).ready(function(){
    $("#b1").click(function(){
       swal("Here's a message!");
    });
});
	
</script>-->
<button id="b1">123</button>
<div class="jumbotron jumbotron-sm">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <h1 class="h1">
                    Contact us <small>Feel free to contact us</small></h1>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                							<form  method="post" name="insert_item" id="insert_item" action="modules/main/test.php" enctype="multipart/form-data" >
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
                                <option value="0" selected="">Choose One:</option>
                                <option value="1">General Customer Service</option>
                                <option value="2">Suggestions</option>
                                <option value="3">Product Support</option>
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
                    <!--<div class="col-md-12" style="display: none;">
                        <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                            Send Message</button>
                    </div>-->
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
                                
                            <!-- <input type="file" class="form-control" id="images" name="images[]" onchange="preview_images();" multiple />
							 <div class="row" id="image_preview"></div>-->
		
           <input id="file-1" type="file" multiple class="file" data-overwrite-initial="false" data-min-file-count="2" name="files[]">
     
                        </div>
                </div> 

                </div>
                
				<button type="submit" class="btn" id="submits">SUBMIT</button>
                <button type="reset" class="btn" id="reset">RESET</button>
                </form>
                <div align="center">
                
                </div>
            </div>
        </div>
   
    </div>
</div>
<script>
	$('#submit').click(function(){
	var url = 'modules/main/test.php';
	
	/*var file_data = $('#file-0').prop('files')[0];   
	
    var form_data = new FormData();                  
    form_data.append('file', file_data);*/
    
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

    

    
		
	});
</script>


<script>
 $(document).on('click', 'button[name="remove_img"]', function(e) {

//	$('#preview-'+this.id+'').remove();
//$('#preview-'+this.id+'').remove();
var aaaa = $('#images').get(0).files[this.id].name;
//$("#idofinput")[0].files;
//ArrayName.splice(indexValueOfArray,aaaa);
//$('#preview-1').parent().remove();
});

 </script>
 
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


