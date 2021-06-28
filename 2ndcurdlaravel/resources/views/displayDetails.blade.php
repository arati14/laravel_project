

<table border="1px">  
<thead>  
<tr>  
<td>  
ID </td>  
 
<td>  
Name </td>  
<td>  
Course </td>  
<td>Gender</td>
<td>  
Salary</td>  
</tr>  
</thead>  
<tbody>  
@foreach($allEmp as $item)  
<tr>
<td>{{$item->id}}</td>
<td>{{$item->empName}}</td>
<td>{{$item->empDepartment}}</td>
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
