<!-- ke thua view master: student-layout/master.blade.php -->
@extends('admin-layout.master')

<!-- Thay đổi nội dung đơn giản -->
@section('title','Title list extends form admin-layout' )
<!-- Thay đổi nội dung phức tạp -->
@section('content-header','Chi tiết sinh viên')

@section('content')

    <div class="container">
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">name</th>
                    <th scope="col">phone</th>
                    <th scope="col">age</th>
                    <th scope="col">gender</th>
                    <th scope="col">address</th>
                    <th scope="col">is_active</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td scope="col">{{$student->id}}</td>
                    <td scope="col">{{$student->name}}</td>
                    <td scope="col">{{$student->phone}}</td>
                    <td scope="col">{{$student->age}}</td>
                    <td scope="col">{{$student->gender}}</td>
                    <td scope="col">{{$student->address}}</td>
                    <td scope="col">{{$student->is_active}}</td>

                </tr>
            </tbody>
        </table>


    </div>

@endsection


@section('footer','Footer list extends');
