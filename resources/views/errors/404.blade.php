@extends('admin.layouts.default')

@section('title')
Lỗi không tìm thấy
@parent
@stop

{{-- Page content --}}
@section('content')
<div class="middle-box text-center animated fadeInDown">
    <h1>404</h1>
    <h3 class="font-bold">Không tìm thấy trang</h3>

    <div class="error-desc">
        Xin lỗi, hệ thống không thể tìm thấy thông tin trang bạn yêu cầu.Vui lòng kiểm tra lại thông tin hoặc
        liên lạc với admin hệ thống! </br>
        Xin cảm ơn.</br></br></br>
       <a href="{{route('dashboard')}}" class="btn btn-primary">Quay về trang chủ</a>
    </div>
</div>
@stop
{{-- Page content --}}