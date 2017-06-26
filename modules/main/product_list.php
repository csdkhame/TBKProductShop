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
    font-size: 18px;
    color:#448aff;
}

tr.row-content
{
    color:#6c7173;
}

table
{
    border-bottom: 8px solid #448aff;
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
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" />    
        

  <table class="table table-striped ">
    <div class="dropdown">
      <button class="btn btn-default dropdown-toggle pull-right" type="button" data-toggle="dropdown"> <span class="glyphicon glyphicon-check"></span> &nbspMark/ UnMark All
      <span class="caret"></span></button>
      <ul class="dropdown-menu dropdown-menu-right" style="margin-top: 17px">
        <li><a href="#">Mark All</a></li>
        <li><a href="#">Unmark All</a></li>
      </ul>
      <a class="btn-top" style="margin-right: 15px;" href="#" class="btn btn-primary btn-success pull-right"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit All</a>
      <a class="btn-top" style="margin-right: 15px;" href="#" class="btn btn-primary btn-success pull-right"> <span class="glyphicon glyphicon-plus"></span> &nbsp Create Table</a>
  </div>

     <thead>
        <tr class="row-name">
           <th style="width:12%">Check/UnCheck</th>
           <th style="width:10%">New/Old</th>
           <th>Id</th>
           <th>Name</th>
           <th>Products</th>
           <th>Review</th>
           <th>Price(In Rs)</th>
           <th>Settings</th>
        </tr>
     </thead>   
     <tbody>
        <tr class="row-content">
           <td class="check" "> <label><input type="checkbox" value=""></label></td>
           <td> <span class="label label-default"> New </span></td>
           <td>FA101</td>
           <td>Akshay</td>
           <td>Alumin foil</td>
           <td>Super... <i class="fa fa-thumbs-up" aria-hidden="true"></i></td>
           <td>3600/-</td>
           <td>
              <a class="btn btn-danger edit" href="path/to/settings" aria-label="Settings">
                <i class="fa fa-trash" aria-hidden="true"></i>
              </a>
              &nbsp 
              <a class="btn btn-info edit" href="path/to/settings" aria-label="Settings">
                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
              </a> 
           </td>
        </tr>
        <tr class="row-content">
           <td class="check" "> <label><input type="checkbox" value=""></label></td>
           <td> <span class="label label-info"> Old </span></td>
           <td>FA102</td>
           <td>Yusuf</td>
           <td> Carbon Paper</td>
           <td>Wow wonderful</td>
           <td>1000/-</td>
           <td>
              <a class="btn btn-danger edit" href="path/to/settings" aria-label="Settings">
                <i class="fa fa-trash" aria-hidden="true"></i>
              </a>
              &nbsp 
              <a class="btn btn-info edit" href="path/to/settings" aria-label="Settings">
                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
              </a> 
           </td>
        </tr>
        <tr class="row-content">
           <td class="check" "> <label><input type="checkbox" value=""></label></td>
           <td> <span class="label label-info"> Old </span></td>
           <td>FA103</td>
           <td>Ajay</td>
           <td>Rubber</td>
           <td>I like It</td>
           <td>5000/-</td>
           <td>
              <a class="btn btn-danger edit" href="path/to/settings" aria-label="Settings">
                <i class="fa fa-trash" aria-hidden="true"></i>
              </a>
              &nbsp 
              <a class="btn btn-info edit" href="path/to/settings" aria-label="Settings">
                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
              </a> 
           </td>
        </tr>
        <tr class="row-content">
           <td class="check" "> <label><input type="checkbox" value=""></label></td>
           <td> <span class="label label-default"> New </span></td>
           <td>FA104</td>
           <td>Kajol</td>
           <td>Pencil</td>
           <td>I love this...<i class="fa fa-heart" aria-hidden="true"></i></td>
           <td>600/-</td>
           <td>
              <a class="btn btn-danger edit" href="path/to/settings" aria-label="Settings">
                <i class="fa fa-trash" aria-hidden="true"></i>
              </a>
              &nbsp 
              <a class="btn btn-info edit" href="path/to/settings" aria-label="Settings">
                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
              </a> 
           </td>
        </tr>
        <tr class="row-content">
           <td class="check" "> <label><input type="checkbox" value=""></label></td>
           <td> <span class="label label-info"> Old </span></td>
           <td>FA105</td>
           <td>Amitabh</td>
           <td> Scale</td>
           <td>Wonderful Idea</td>
           <td>10,000/-</td>
           <td>
              <a class="btn btn-danger edit" href="path/to/settings" aria-label="Settings">
                <i class="fa fa-trash" aria-hidden="true"></i>
              </a>
              &nbsp 
              <a class="btn btn-info edit" href="path/to/settings" aria-label="Settings">
                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
              </a> 
           </td>
        </tr>
        <tr class="row-content">
           <td class="check" "> <label><input type="checkbox" value=""></label></td>
           <td> <span class="label label-default"> New </span></td>
           <td>FA106</td>
           <td>Twinkle</td>
           <td>Pen</td>
           <td>Very Happy.. <i class="fa fa-smile-o" aria-hidden="true"></i></td>
           <td>780/-</td>
           <td>
              <a class="btn btn-danger edit" href="path/to/settings" aria-label="Settings">
                <i class="fa fa-trash" aria-hidden="true"></i>
              </a>
              &nbsp 
              <a class="btn btn-info edit" href="path/to/settings" aria-label="Settings">
                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
              </a> 
           </td>
        </tr>
     </tbody>
  </table>


</div></div></div>