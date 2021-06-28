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
<form method="post" action="{{ route('employee.update',$toEditEmp->id) }}">  
@method('PATCH') 
   @csrf     
   <div class="form-group">      
              <label for="name">Employee Name:</label><br/><br/>  
              <input type="text" class="form-control" name="name" value={{$toEditEmp->empName}} /><br/><br/>  
          </div>  
 
<div class="form-group">      
              <label for="degination">Department</label><br/><br/>  
              <input type="text" class="form-control" name="department" value={{$toEditEmp->department_id}} /><br/><br/>  
          </div>  
<div class="form-group">      
              <label for="gender">Gender</label><br/><br/>  
              <input type="text" class="form-control" name="gender" value={{$toEditEmp->empGender}} /><br/><br/>  
          </div> 
          <div class="form-group">      
              <label for="salary">Salary</label><br/><br/>  
              <input type="text" class="form-control" name="salary" value={{$toEditEmp->empSalary}} /><br/><br/>  
          </div>  
<br/>  
<button type="submit" class="btn-btn" >Update</button>  
</form>  
    
</body>
</html>