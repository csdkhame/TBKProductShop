<script src="jquery-tabledit/jquery.tabledit.js"></script>
<script src="jquery-tabledit/jquery.tabledit.min.js"></script>
<table class="table table-striped table-bordered" id="example1"> 
<thead> 

	<th>#</th> 
	<th>Nickname</th> 
	<th>Firstname</th> 
	<th>Lastname</th> 
</thead> 

<tbody> 
		<tr data-id="1"> 
		<td class="tabledit-data">1</td> 
		<td class="tabledit-data">markcell</td> 
		<td class="tabledit-data">Celso</td> 
		<td class="tabledit-data">Marques</td> 
		</tr> 
		<tr data-id="2"> 
		<td class="tabledit-data">2</td> 
		<td class="tabledit-data">dotz</td>
		<td class="tabledit-data">Márcio</td> 
		<td class="tabledit-data">Quental</td> 
		</tr> 
		<tr data-id="3"> 
		<td class="tabledit-data">3</td> 
		<td class="tabledit-data">zikospeed</td> 
		<td class="tabledit-data">António</td> 
		<td class="tabledit-data">Figueiredo</td> 
		</tr> 
</tbody>

</table>

<button class="btn" id="addRow"></button>
<script>
	$("#addRow").click(function() {
    var tableditTableName = '#example5';
    var newID = parseInt($(tableditTableName + " tr:last").attr("data-id")) + 1;
    var clone = $("table tr:last").clone();
    $(".tabledit-data span", clone).text("");
    $(".tabledit-data input", clone).val("");
    clone.appendTo("table");
    $(tableditTableName + " tr:last").attr("data-id", newID);
    $(tableditTableName + " tr:last td .tabledit-span.tabledit-identifier").text(newID);
    $(tableditTableName + " tr:last td .tabledit-input.tabledit-identifier").val(newID);
});

	$('#example1').Tabledit({
    url: 'jquery-tabledit/example.php',
    columns: {
        identifier: [0, 'id'],
        editable: [[1, 'NAME'], [2, 'DETAIL'], ]
    }
});
</script>