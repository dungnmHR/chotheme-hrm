@extends('admin.layouts.default')

@section('title')
Upload banner mới
@parent
@stop

@section('css')
<link href="{{asset('assets/css/plugins/jasny/jasny-bootstrap.min.css')}}" rel="stylesheet">
@stop

{{-- Page content --}}
@section('content')
{{-- Breadcrumb --}}
<div class="row wrapper border-bottom white-bg page-heading">
	<div class="col-sm-4">
        <h2>Upload theme mới</h2>
        <ol class="breadcrumb">
	        <li>
	            <a href="{{route('home')}}">Home</a>
	        </li>
	        <li>
	            <a href="{{route('list-banner')}}">Danh sách banners</a>
	        </li>
	        <li class="active">
	            <strong>Upload banner mới</strong>
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
	            <h5>Thông tin banner</h5>
	            <div class="ibox-tools">
		            <a class="collapse-link">
		                <i class="fa fa-chevron-up"></i>
		            </a>
	            </div>
	        </div>
	        <div class="ibox-content">
		        @if (count($errors) > 0)
		        	<div class="alert alert-danger">
	          			Thông tin đăng ký không đầy đủ, bạn cần chỉnh sửa như sau:
		          		<ul>
			              @foreach ($errors->all() as $error)
			                  <li>{{ $error }}</li>
			              @endforeach
		          		</ul>
	      			</div>
			    @endif
			    @if (isset($message))
				    <div class="alert alert-success">
				    {{ $message }}
				    </div>
			    @endif
	        	<form class="form-horizontal" role="form" action="{{route('create-banner')}}" 
	        	 enctype="multipart/form-data" method="POST">
	        		@csrf
		        	<div class="form-group {{ $errors->has('image') ? 'has-error' : '' }}">
	                	<label class="col-sm-2 control-label">Upload ảnh</label>
						<div class="col-sm-10">
							 <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                <div class="form-control" data-trigger="fileinput"><i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
                                <span class="input-group-addon btn btn-default btn-file"><span class="fileinput-new">Chọn ảnh</span><span class="fileinput-exists">Thay đổi</span>
                                <input type="file" name="image"></span>
                                <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Xóa</a>
                            </div>						
						</div>
	                </div>	                
	                <div class="hr-line-dashed"></div>

	                <div class="form-group {{ $errors->has('position') ? 'has-error' : '' }}">
	                 	<label class="col-sm-2 control-label">Vị trí</label>
						<div class="col-md-2">
							<select name="position" id="position" class="form-control">
	                          <option value="header-1" {{ old('position') == 'header-1'}} ? 'selected' : '' }}>Header 1</option>
	                          <option value="header-2" {{ old('position') == 'header-2'}} ? 'selected' : '' }}>Header 2</option>
	                          <option value="footer" {{ old('position') == 'footer'}} ? 'selected' : '' }}>Footer</option>
	                        </select>
                    	</div>
	                </div>
	                <div class="hr-line-dashed"></div>

	                <div class="form-group {{ $errors->has('order') ? 'has-error' : '' }}">
	                 	<label class="col-sm-2 control-label">Level</label>
						<div class="col-md-2">
							<select name="order" id="order" class="form-control">
	                          <option value="1" {{ old('order') == 1}} ? 'selected' : '' }}>1</option>
	                          <option value="2" {{ old('order') == 2}} ? 'selected' : '' }}>2</option>
	                          <option value="3" {{ old('order') == 3}} ? 'selected' : '' }}>3</option>
	                          <option value="0" {{ old('order') == 0}} ? 'selected' : '' }}>other</option>
	                        </select>
                    	</div>
	                </div>
	                <div class="hr-line-dashed"></div>
	

	              

	                <div class="form-group {{ $errors->has('status') ? 'has-error' : '' }}">
	                 	<label class="col-sm-2 control-label">Trạng thái</label>
						<div class="col-md-2">
							<select name="status" id="status" class="form-control">
	                          <option value="0" {{ old('status') == 0}} ? 'selected' : '' }}>Sử dụng</option>
	                          <option value="1" {{ old('status') == 1}} ? 'selected' : '' }}>Chưa sử dụngimage</option>
	                        </select>
                    	</div>
	                </div>	  
	                <div class="hr-line-dashed"></div></br>

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
<script src="{{asset('assets/js/plugins/jasny/jasny-bootstrap.min.js')}}"></script>
@stop