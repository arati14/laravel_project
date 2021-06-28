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

<div class="card  bg-dark text-white" style="width: 30rem;">
  <div class="card-body">
  <form method="post" action="{{ route('employee.store') }}">  
   @csrf     
          <div class="form-group">      
              <label for="name">Employee Name:</label><br/> 
              <input type="text" class="form-control" name="name"/><br/><br/>  
          <label for="degination">Department</label><br/><br/> 
          </div> 
          @foreach($allDept as $item) 
          <div class="form-check">
          
  <input class="form-check-input" type="radio" name="department" id="exampleRadios1" value={{$item->id}} >
  <label class="form-check-label" for="exampleRadios1">
  {{$item->departmentName}}
  </label>
</div>
@endforeach
 <br/><br/>
<div class="form-group">      
              <label for="gender">Gender</label><br/><br/>  
              <input type="text" class="form-control" name="gender"/><br/><br/>  
          </div> 
          <div class="form-group">      
              <label for="salary">Salary</label><br/><br/>  
              <input type="text" class="form-control" name="salary"/><br/><br/>  
          </div>  
<br/>  
<button type="submit" class="btn btn-primary" >Insert</button>  
</form>  
  </div>
</div>

    
</body>
</html>