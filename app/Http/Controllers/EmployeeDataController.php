<?php

namespace App\Http\Controllers;

use App\Models\EmployeeData;
use Illuminate\Http\Request;

class EmployeeDataController extends Controller
{


  
  //Get All Employee Data
  public function get() {
    return["api work"];
    }

  //Get All Employee Data
  public function getAllEmployees() {
      $employees = EmployeeData::get()->toJson(JSON_PRETTY_PRINT);
      return response($employees, 200);
    }


      //Add new Employee
      public function createEmployee(Request $request) {
        $employee = new EmployeeData;
        $employee->full_name = $request->full_name;
        $employee->email = $request->email;
        $employee->age = $request->age;
        $employee->salary = $request->salary;
        $employee->save();
  
        return response()->json([
          "message" => "employee record created"
        ], 201);
      }
  
      //Get employee by ID
      public function getEmployee($id) {
        if (EmployeeData::where('id', $id)->exists()) {
          $employee = EmployeeData::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
          return response($employee, 200);
        } else {
          return response()->json([
            "message" => "employee not found"
          ], 404);
        }
      }
  

      //Updata employee
      public function updateEmployee(Request $request, $id) {
        if (EmployeeData::where('id', $id)->exists()) {
          $employee = EmployeeData::find($id);
  
          $employee->full_name = is_null($request->full_name) ? $employee->full_name : $request->full_name;
          $employee->email = is_null($request->email) ? $employee->email : $request->email;
          $employee->age = is_null($request->age) ? $employee->age : $request->age;
          $employee->salary = is_null($request->salary) ? $employee->salary : $request->salary;
          $employee->save();
  
          return response()->json([
            "message" => "records updated successfully"
          ], 200);
        } else {
          return response()->json([
            "message" => "employee not found"
          ], 404);
        }
      }
  

      //Delete employee
      public function deleteEmployee ($id) {
        if(EmployeeData::where('id', $id)->exists()) {
          $employee = EmployeeData::find($id);
          $employee->delete();
  
          return response()->json([
            "message" => "records deleted"
          ], 202);
        } else {
          return response()->json([
            "message" => "employee not found"
          ], 404);
        }
      }
}
