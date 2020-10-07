<!-- Ke thua view-layout-master -->
@extends('admin-layout.master')



<!-- Thay đổi nội dung riêng ứng với @yield('title') ben master -->
@section('title','Test layout adminLTE')

<!-- Thay đổi nội dung riêng ứng với @yield('content') ben master -->
@section('content')

<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Danh Sách Sản Phẩm </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="container">
    <table boder="1" class="table table-striped table-dark">
        <thead class="thead" style="background-color: green;">
            <th scope="col">name</th>
            <th scope="col">phone</th>
            <th scope="col">age</th>
            <th scope="col">gender</th>
            <th scope="col">address</th>
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
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
