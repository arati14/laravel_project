<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Department;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $employeeDetails=Employee::create([
           'empName'=>$request->name,
           'department_id'=>$request->department,
           'empGender'=>$request->gender,
           'empSalary'=>$request->salary
       ]) ;
       $allEmp=Employee::get();
       $allDept=Department::get();
       return redirect('/mainPage');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show($name)
    {
        // return $name;
        // $allEmp=Employee::get();
        $allDept=Department::get();
       
        $dept=Department::with('employees')->where('id',$name)->first();
        $allEmp=$dept->employees;
        return redirect('/mainPage');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $toEditEmp=Employee::find($id);
        return view('editForm',compact('toEditEmp'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id )
    {
        $toupdateEmployee=Employee::where('id',$id)->update([ 'empName'=>$request->name,
        'department_id'=>$request->department,
        'empGender'=>$request->gender,
        'empSalary'=>$request->salary]);
        $allEmp=Employee::get();
        $allDept=Department::get();
        return redirect('/mainPage');
        // return view('displayDetails',compact('allEmp'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $toDeleteEmployee=Employee::find($id);
        $toDeleteEmployee->delete();
        $allEmp=Employee::get();
        $allDept=Department::get();
        return redirect('/mainPage');
        // return view('displayDetails',compact('allEmp'));
    }
}
