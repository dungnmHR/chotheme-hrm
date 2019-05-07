@extends('admin.layouts.default')

@section('title')
Tạo mới người dùng
@parent
@stop

@section('css')
<link href="{{asset('assets/css/plugins/datapicker/datepicker3.css')}}" rel="stylesheet">
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
	        	<form method="get" class="form-horizontal">
		        	<div class="form-group"><label class="col-sm-2 control-label">Tên đầy đủ</label>
						<div class="col-sm-10"><input type="text" class="form-control" name="name" id="name"></div>
	                </div>
	                <div class="hr-line-dashed"></div>
	                <div class="form-group"><label class="col-sm-2 control-label">Email</label>
						<div class="col-sm-10"><input type="email" class="form-control" name="email" id="email" placeholder="example@example.com"></div>
	                </div>
	                <div class="hr-line-dashed"></div>
	                <div class="form-group"><label class="col-sm-2 control-label">Số điện thoại</label>
						<div class="col-sm-10"><input type="text" class="form-control" name="phone" id="phone"></div>
	                </div>
	                <div class="hr-line-dashed"></div>
	                <div class="form-group" id="data_1">
                        <label class="col-sm-2 control-label">Ngày sinh</label>
                        <div class="col-sm-10">
	                        <div class="input-group date">
	                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" value="03/04/2014">
	                        </div>
                        </div>
                    </div>
	                <div class="hr-line-dashed"></div>	                    
	                <div class="form-group"><label class="col-sm-2 control-label">Giới tính</label>
						<div class="col-sm-10">
                            <div><label> <input type="radio" checked="" value="0" id="male" name="sex">Nam</label></div>
                            <div><label> <input type="radio" value="1" id="female" name="sex">Nữ</label></div>
                        </div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group"><label class="col-sm-2 control-label">Mật khẩu</label>
						<div class="col-sm-10"><input type="password" class="form-control" name="password" id="password"></div>
	                </div>
	                <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <div class="col-sm-4 col-sm-offset-2">
                            <button class="btn btn-white" >Làm mới</button>
                            <button class="btn btn-primary" type="submit">Tạo mới</button>
                        </div>
                    </div>
            	</form>
	        </div>
		</div>
	</div>		
</div>
{{-- END Main Content --}}

@stop
{{-- Page content --}}

@section('script')
<script src="{{asset('assets/js/plugins/datapicker/bootstrap-datepicker.js')}}"></script>
<script>
    $(document).ready(function(){
		$('#data_1 .input-group.date').datepicker({
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                calendarWeeks: true,
                autoclose: true
            });
    });
</script>	
@stop