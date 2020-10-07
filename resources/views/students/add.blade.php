@extends('admin-layout.master')

@section('title','add student')

@section('content-header',"Thêm mới sản phẩm")

@section('content')
<div>
    <form class="container" action="{{route('students.store')}}" method="POST">
        @csrf
        <div class="form-froup">
            <label for="name">Name</label>
            <input class="form-control" type="text" id="name" name="name" ">
    </div>
    <div>
        <label for=" phone">Phone</label>
            <input class="form-control" type="text" id="phone" name="phone" ">
    </div>
    <div>
        <label for=" age">Age</label>
            <input class="form-control" type="number" id="age" name="age" ">
    </div>
    <div>
        <label for=" address">Address</label>
            <input class="form-control" type="text" id="address" name="address" ">
    </div>
    <div class=" form-group form-check">
            <label>Gender</label><br>
            Nữ
            <input type="radio" name="gender" value="0">Nam
            <input type="radio" name="gender" value="1">Khong xac dinh
            <input type="radio" name="gender" value="2"></div>
        <div class="form-group form-check">
            <label>Status:</label><br>
            Deative
            <input type="radio" name="is_active" value="0">
            Active
            <input type="radio" name="is_active" value="1">
        </div>
        <button class="btn btn-warning" type="sumbit">Save</button>
        <a class="btn btn-warning" href="{{route('students.index')}}">Hủy</a>
    </form>
</div>

@endsection
