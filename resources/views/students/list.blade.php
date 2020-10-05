<!-- ke thua view master: student-layout/master.blade.php -->
@extends('admin-layout.master')

<!-- Thay đổi nội dung đơn giản -->
@section('title','Title list extends form admin-layout' )
<!-- Thay đổi nội dung phức tạp -->
@section('content-header','Danh sach sinh vien')

@section('content')


<div class="container">
    <table boder="1" class="table table-striped table-dark">
        <thead class="thead" style="background-color: green;">
            <th scope="col">name</th>
            <th scope="col">phone</th>
            <th scope="col">age</th>
            <th scope="col">gender</th>
            <th scope="col">address</th>
            <th scope="col">active</th>
            <th scope="col">active</th>

        </thead>
        <tbody>
            @foreach($students as $student)
            <tr>
                <td>{{$student->name}}</td>
                <td>{{$student->phone}}</td>
                <td>{{$student->age}}</td>
                <td>
                    @if ($student->gender == 0)
                    Female
                    @elseif($student->gender ==1)
                    Male
                    @else
                    nothing
                    @endif
                </td>

                <td>{{$student->address}}</td>
                <td>{{$student->is_active == 1 ? 'Yes' : 'No'}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection


@section('footer','Footer list extends');
