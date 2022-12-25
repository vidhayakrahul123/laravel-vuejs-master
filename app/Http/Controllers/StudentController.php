<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentInfoModel;

class StudentController extends Controller
{
    public function addStudent(Request $request)
    {
        $addStudent = new StudentInfoModel;

        $addStudent->studentFName     =  $request->studentFName;  
        $addStudent->studentLName     =  $request->studentLName; 
        $addStudent->studentEmailId   =  $request->studentEmailId; 
        $addStudent->studentContactNo =  $request->studentContactNo;
        $addStudent->save();
        return array('success' => true, 'msg'=>['Student created successfully']);
    }

    public function allStudent()
    {
        $students = StudentInfoModel::get();
        return $students;
    }

    public function editStudent($Id)
    {
        $student = StudentInfoModel::where('id',$Id)->first();
        return $student;
    }

    public function updateStudent($Id,Request $request)
    {
        
        $editStudent = StudentInfoModel::where('id',$Id)->first();

        $editStudent->studentFName     =  $request->studentFName;  
        $editStudent->studentLName     =  $request->studentLName; 
        $editStudent->studentEmailId   =  $request->studentEmailId; 
        $editStudent->studentContactNo =  $request->studentContactNo;
        $editStudent->update();

        return array('success' => true, 'msg'=>['Student updated successfully']);
    }

    public function deleteStudent($Id)
    {
        $del = StudentInfoModel::where('id',$Id)->delete();
        return array('success' => true, 'msg'=>['Student deleted successfully']);
    }
}