<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
<div class="container">
<br/>
<div class="row">
  @if ($message = Session::get('error'))
<div class="alert alert-danger alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>	
        <strong>{{ $message }}</strong>
</div>
@endif
@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>	
        <strong>{{ $message }}</strong>
</div>
@endif</div>
  <div class="row">

  <div class="col-auto me-auto">
    <a class="btn btn-primary" href="{{url('/dept/form')}}" role="button">Add Department</a>
    </div>
    <div class="col-auto">
    <a class="btn btn-primary" href="{{url('/create')}}" role="button">Add Employee</a>
    </div>
    
  
  </div>

  <br/>
  <div class="row">
  <div class="col-3">  <div class="list-group">
  <li class="list-group-item active" aria-current="true">Department Name</li>
@foreach($allDept as $deptdetails)
 <div><a href="{{ route('employee.show',$deptdetails->id) }}" class="list-group-item list-group-item-action">{{$deptdetails->departmentName}} 
 <form action="{{ route('department.destroy', $deptdetails->id)}}" method="post">  
                  @csrf  
                  @method('DELETE')  
                  <button class="btn btn-danger" type="submit">Delete</button>  
                </form> </a>
 
 </div>
 @endforeach
  </div > </div>
  <div class="col-sm-9">
  <li class="list-group-item active" aria-current="true">Employee Details</li>
  <table class="table table-success table-striped">  
<thead>  
<tr>  
<td>  
ID </td>  
 
<td>  
Name </td>  
<td>  
Department </td>  
<td>  
Gender </td>  
<td>Salary</td>
</tr>  
</thead>  
<tbody>  
@foreach($allEmp as $item)  
<tr>
<td>{{$item->id}}</td>
<td>{{$item->empName}}</td>
<td>{{$item->department->departmentName}}</td>
<td>{{$item->empGender}}</td>
<td>{{$item->empSalary}}</td>
<td >  
<form action="{{ route('employee.destroy', $item->id)}}" method="post">  
                  @csrf  
                  @method('DELETE')  
                  <button class="btn btn-danger" type="submit">Delete</button>  
                </form> 
                </td>   
                <td >  
<form action="{{ route('employee.edit', $item->id)}}" method="get">  
                  @csrf  
                   
                  <button class="btn btn-danger" type="submit">Edit</button>  
                </form>  
</td>  

</tr>

  
      
@endforeach  
</tbody>  
</table> 
  </div>

</div>
</body>
</html>