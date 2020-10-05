<!-- ke thua view master: student-layout/master.blade.php -->
@extends('admin-layout.master')

<!-- Thay đổi nội dung đơn giản -->
@section('title','Title list extends form admin-layout' )
<!-- Thay đổi nội dung phức tạp -->
@section('content-header','Chi tiết sinh viên')

@section('content')

    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>phone</th>
                    <th>age</th>
                    <th>gender</th>
                    <th>address</th>
                    <th>is_active</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>{{$student->id}}</th>
                    <th>{{$student->name}}</th>
                    <th>{{$student->phone}}</th>
                    <th>{{$student->age}}</th>
                    <th>{{$student->gender}}</th>
                    <th>{{$student->address}}</th>
                    <th>{{$student->is_active}}</th>
                </tr>
            </tbody>
        </table>


    </div>

@endsection


@section('footer','Footer list extends');
