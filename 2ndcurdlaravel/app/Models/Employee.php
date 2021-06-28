<?php

namespace App\Models;
use App\Models\Department;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $table='employee';  
protected $fillable=['empName','department_id','empGender','empSalary'];  

public function department(){
    return $this->belongsTo(Department::class);
}
}
