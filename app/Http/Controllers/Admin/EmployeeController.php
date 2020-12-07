<?php

namespace App\Http\Controllers\Admin;
use App\Employee;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    function GetEmployee(){
        $employees = Employee::all();
        return view('admin.employee', compact('employees'));
    }
    function createEmployee(){
        return view('admin.employees.createEmployee');
    }
    function AddEmployee(Request $request){
        $name = $request->input('name');
        $gender = $request->input('gender');
        $address = $request->input('address');
        $phone = $request->input('phone');

        $employee = new Employee();
        $employee->name = $name;
        $employee->gender = $gender;
        $employee->address = $address;
        $employee->phone = $phone;
        $employee->save();
        return redirect()->route('nhanvien');
    }
    function deleteEmployee($id){
        DB::table('employees')->where('id_Emp','=',$id)->delete();
        return redirect()->route('nhanvien');
    }
    function editEmployee($id){
        $employee = DB::table('employees')->where('id_Emp','=',$id)->first();
        return view('admin.employees.editEmployee', compact('employee'));
    }
    function updateEmployee($id,Request $request ){
        $name = $request->input('name');
        $gender = $request->input('gender');
        $address = $request->input('address');
        $phone = $request->input('phone');
        DB::table('employees')->where('id_Emp','=',$id)->update(['name'=>$name, 'gender'=>$gender,'address'=>$address,'phone'=>$phone]);
        return redirect()->route('nhanvien');
    }
    function searchEmployee(Request $request){
        $search = $request->input('search');
        $findEmp = Employee::where('name','LIKE','%'.$search.'%' )->orwhere('id_Emp','LIKE','%'.$search.'%')->get();
        return view('admin.employees.searchEmploye',compact('findEmp'));
    }
}
