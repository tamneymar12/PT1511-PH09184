@extends('admin-layout.master')

@section('title','edit student')

@section('content-header',"Sửa sản phẩm")

@section('content')

<form  action="{{route('students.update', $students->id)}}" method="POST">
    @csrf
    <input type="hidden" name="_method" value="PUT">
    <div>
        <label for="name">Name</label>
        <input class="form-control"  type="text" id="name" name="name"  value="{{$students->name}}">
    </div>
    <div>
        <label for="phone">Phone</label>
        <input class="form-control"  type="text" id="phone" name="phone"  value="{{$students->phone}}">
    </div>
    <div>
        <label for="age">Age</label>
        <input class="form-control" type="number" id="age" name="age"  value="{{$students->age}}">
    </div>
    <div>
        <label for="address">Address</label>
        <input class="form-control" type="text" id="address" name="address"  value="{{$students->address}}">
    </div>
    <div>
        <label >Gender</label>
        Nữ
        <input  type="radio"  name="gender"  value="0" {{$students->gender === 0 ? "checked" : ""}}>
        Nam
        <input  type="radio"  name="gender"  value="1" {{$students->gender === 1 ? "checked" : ""}}>
        Khong xac dinh
        <input  type="radio"  name="gender"  value="2" {{$students->gender === 2 ? "checked" : ""}}>
</div>
    <div>
        <label >Status</label>
        Deative
        <input  type="radio"  name="is_active"  value="0" {{$students->is_active == 0  ? "checked" : ""}}>
        Active
        <input  type="radio"  name="is_active"  value="1" {{$students->is_active == 1  ? "checked" : ""}}>
    </div>
    <button class="btn btn-primary" type="sumbit">UPDATE</button>
    <a class="btn btn-primary" href="{{route('students.index')}}">Hủy</a>
</form>
@endsection
