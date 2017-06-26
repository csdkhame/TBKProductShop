
 <div class="col-md-12">
                        <div class="card">

                            <div class="toolbar">
                                <!--        Here you can write extra buttons/actions for the toolbar              -->
                            </div>

                            <table id="bootstrap-table" class="table">
                                <thead>
                                    <th data-field="state" data-checkbox="true"></th>
                                    <th data-field="id" class="text-center">ID</th>
                                	<th data-field="name" data-sortable="true">Name</th>
                                	<th data-field="salary" data-sortable="true">Salary</th>
                                	<th data-field="country" data-sortable="true">Country</th>
                                	<th data-field="city">City</th>
                                	<th data-field="actions" class="td-actions text-right" data-events="operateEvents" data-formatter="operateFormatter">Actions</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td></td>
                                    	<td>1</td>
                                    	<td>Dakota Rice</td>
                                    	<td>$36,738</td>
                                    	<td>Niger</td>
                                    	<td>Oud-Turnhout</td>
                                    	  <td class="td-actions text-right" style="">
                                    	  <a rel="tooltip" title="" class="btn btn-simple btn-info btn-icon table-action view" href="javascript:void(0)" data-original-title="View"><i class="fa fa-image"></i></a>
                                    	  <a rel="tooltip" title="" class="btn btn-simple btn-warning btn-icon table-action edit" href="javascript:void(0)" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                                    	  <a rel="tooltip" title="" class="btn btn-simple btn-danger btn-icon table-action remove" href="javascript:void(0)" data-original-title="Remove"><i class="fa fa-remove"></i></a>
                                    	  </td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div><!--  end card  -->
                    </div> <!-- end col-md-12 -->



 <script>
$(document).ready(function(){

   		//$("li[class='active']").removeClass("active");
   		$('#ul-menu #l1').addClass("active");
   		$('#pagesExamples').addClass("collapse in");

});
</script>