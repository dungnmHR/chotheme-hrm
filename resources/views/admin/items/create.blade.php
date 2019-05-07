@extends('admin.layouts.default')

@section('title')
Upload theme mới
@parent
@stop

@section('css')
<link href="{{asset('assets/css/plugins/datapicker/datepicker3.css')}}" rel="stylesheet">
<link href="{{asset('assets/css/plugins/summernote/summernote.css')}}" rel="stylesheet">
<link href="{{asset('assets/css/plugins/summernote/summernote-bs3.css')}}" rel="stylesheet">
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
	            <a href="{{route('list-item')}}">Danh sách themes</a>
	        </li>
	        <li class="active">
	            <strong>Upload theme mới</strong>
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
	            <h5>Thông tin themes</h5>
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
	        	<form class="form-horizontal" role="form" action="{{route('create-item')}}" 
	        	 enctype="multipart/form-data" method="POST">
	        		@csrf
		        	<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
		        		<label class="col-sm-2 control-label">Tên themes </label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="name" id="name" value="{{old('name')}}">
						</div>
	                </div>	                
	                <div class="hr-line-dashed"></div>

	                 <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
	                 	<label class="col-sm-2 control-label">Chủ đề</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="cartegory" id="cartegory" placeholder="Thể thao" value="{{old('cartegory')}}">
						</div>
	                </div>
	                <div class="hr-line-dashed"></div>

	                <div class="form-group {{ $errors->has('content_des') ? 'has-error' : '' }}">
	                	<label class="col-sm-2 control-label">Miêu tả ngắn</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="content_des" id="content_des" value="{{old('content_des')}}">
                    	</div>
	                </div>
	                <div class="hr-line-dashed"></div>

	                <div class="form-group {{ $errors->has('content_full') ? 'has-error' : '' }}">
	                	<label class="col-sm-2 control-label">Miêu tả chi tiêt</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="content_full" id="content_full" value="{{old('content_full')}}">
                    	</div>
	                </div>
	                <div class="hr-line-dashed"></div>

	                <div class="form-group {{ $errors->has('link_demo') ? 'has-error' : '' }}">
	                	<label class="col-sm-2 control-label">Link demo</label>
						<div class="col-sm-10"><input type="text" class="form-control" name="link_demo" id="link_demo" value="{{old('link_demo')}}"></div>
	                </div>	  
	                <div class="hr-line-dashed"></div>

	                <div class="form-group {{ $errors->has('price') ? 'has-error' : '' }}">
	                	<label class="col-sm-2 control-label">Giá tiền</label>
						<div class="col-md-2">
							<div class="input-group m-b">
								<input type="text" name="price" id="price" class="form-control" 
								value="{{old('price')}}"> 
								<span class="input-group-addon">VNĐ</span>
							</div>
						</div>
	                </div>
	                <div class="hr-line-dashed"></div>

	                <div class="form-group {{ $errors->has('saleoff') ? 'has-error' : '' }}">
	                	<label class="col-sm-2 control-label">Giá khuyến mãi</label>
						<div class="col-md-2">
							<div class="input-group m-b">
								<input type="text" name="saleoff" id="saleoff" class="form-control" 
								value="{{old('saleoff')}}"> 
								<span class="input-group-addon">VNĐ</span>
							</div>
						</div>
	                </div>
	                <div class="hr-line-dashed"></div>
	                
	                <div class="form-group {{ $errors->has('imgFile') ? 'has-error' : '' }}">
	                	<label class="col-sm-2 control-label">Upload ảnh</label>
						<div class="col-sm-10">
							 <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                <div class="form-control" data-trigger="fileinput"><i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
                                <span class="input-group-addon btn btn-default btn-file"><span class="fileinput-new">Chọn ảnh</span><span class="fileinput-exists">Thay đổi</span>
                                <input type="file" name="imgFile"></span>
                                <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Xóa</a>
                            </div>						
						</div>
	                </div>
	                 <div class="hr-line-dashed"></div>
	                <div class="form-group {{ $errors->has('fileTheme') ? 'has-error' : '' }}">
	                	<label class="col-sm-2 control-label">Upload file</label>
						<div class="col-sm-10">
							 <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                <div class="form-control" data-trigger="fileinput"><i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
                                <span class="input-group-addon btn btn-default btn-file"><span class="fileinput-new">Chọn file</span><span class="fileinput-exists">Thay đổi</span>
                                <input type="file" name="fileTheme"></span>
                                <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Xóa</a>
                            </div>						
						</div>
	                </div>	  	  
	                <div class="hr-line-dashed"></div>

	                <div class="form-group {{ $errors->has('status') ? 'has-error' : '' }}">
	                 	<label class="col-sm-2 control-label">Trạng thái</label>
						<div class="col-md-2">
							<select name="status" id="status" class="form-control">
	                          <option value="0" {{ old('status') == 0}} ? 'selected' : '' }}>Đăng bán</option>
	                          <option value="1" {{ old('status') == 1}} ? 'selected' : '' }}>Chưa đăng bán</option>
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
<!-- SUMMERNOTE -->
<script src="{{asset('assets/js/plugins/summernote/summernote.min.js')}}"></script>
<script>
    $(document).ready(function(){
		$('.summernote').summernote();
	});
</script>
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
<script src="{{asset('assets/js/plugins/jasny/jasny-bootstrap.min.js')}}"></script>


@stop