@extends('admin.layouts.default')

@section('title')
Tạo mới người dùng
@parent
@stop

@section('css')

@stop

{{-- Page content --}}
@section('content')
{{-- Breadcrumb --}}
<div class="row wrapper border-bottom white-bg page-heading">
	<div class="col-sm-4">
        <h2>Tạo mới người dùng</h2>
        <ol class="breadcrumb">
	        <li>
	            <a href="{{route('home')}}">Home</a>
	        </li>
	        <li>
	            <a href="{{route('list-user')}}">Danh sách người dùng</a>
	        </li>
	        <li class="active">
	            <strong>Tạo mới người dùng</strong>
	        </li>
        </ol>
    </div>
</div>
{{-- END Breadcrumb --}}

{{-- START Main Content --}}
<div class="wrapper wrapper-content">
	<div class="row animated fadeInRight">
		<div class="ibox float-e-margins">
			<div class="ibox-title">
	            <h5>Thông tin người dùng</h5>
	            <div class="ibox-tools">
		            <a class="collapse-link">
		                <i class="fa fa-chevron-up"></i>
		            </a>
	            </div>
	        </div>
	        <div class="ibox-content">
	        	
	        </div>
		</div>
	</div>		
</div>
{{-- END Main Content --}}

@stop
{{-- Page content --}}

@section('script')

@stop