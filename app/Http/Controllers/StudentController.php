<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student = Student::orderBy('id','desc')->get();// Lấy ra hết
        //Hoặc $student = Student::oderBY('id),'desc')->get();

        return view('students.list',['students'=> $student]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // dd('Cretate');\
        return view('students.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student = new Student;
        // $student->name=$request->name;
        // $student->phone=$request->phone;
        // $student->age=$request->age;
        // $student->address=$request->address;
        // $student->gender=$request->gender;
        // $student->is_active=$request->is_active;
        $student->fill($request->all());

        $student->save();

        return redirect()->route('students.index');


    }


    //Sử dụng phương thức GEt, route name la students.show
    public function show(Student $student)
    {
        // dd($student);
        //Nếu chỉ truyền vào $student -> nhấn được ic của Student\
        // $studentObjEloquentModel = Student::find($student);
        // $studentObjQueryBuiler = DB::table('students')->find($student);
        //Nếu chỉ truyền Studen->$Student -> nhận dduowjc id của Student
        // dd($studentObjEloquentModel, $studentObjQueryBuiler);
        // return
        return view('students.show',['student'=>$student]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
        return view('students.edit', ['students'=>$student]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
        // dd($request->all());
        $student->name = $request->name;
        $student->update($request->all());
        $student->save();



        return redirect()->route('students.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
        if($student){

            $student->delete();//Trả về kết quả true hoặc là false
        }
        //Cách 2: Student::destroy($student->id); //trả về số lượng bản ghi bằng xóa
        //Redirect về danh sạc (có thực hiện tuy vấn lấy ds moi)
        return redirect()->route('students.index');
    }
}
