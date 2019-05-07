@extends('admin.layouts.default')

@section('title')
Danh sách sản phẩm
@parent
@stop

@section('css')
<link href="{{asset('assets/css/plugins/iCheck/custom.css')}}" rel="stylesheet">
@stop

{{-- Page content --}}
@section('content')
{{-- Breadcrumb --}}
<div class="row wrapper border-bottom white-bg page-heading">
	<div class="col-sm-4">
        <h2>Danh sách sản phẩm</h2>
        <ol class="breadcrumb">
	        <li>
	            <a href="{{route('home')}}">Home</a>
	        </li>
	        <li>
	            <a href="{{route('list-item')}}">Danh sách sản phẩm</a>
	        </li>
	        <li class="active">
	            <strong>Thêm sản phẩm mới</strong>
	        </li>
        </ol>
    </div>
    <div class="col-sm-8">
        <div class="title-action">
            <a href="{{route('create-item')}}" class="btn btn-primary">Thêm mới</a>
        </div>
    </div>
</div>
{{-- END Breadcrumb --}}

{{-- START Main Content --}}
<div class="wrapper wrapper-content">
	<div class="row animated fadeInRight">
		<div class="ibox float-e-margins">
			<div class="ibox-title">
	            <h5>Danh sách sản phẩm</h5>
	            <div class="ibox-tools">
		            <a class="collapse-link">
		                <i class="fa fa-chevron-up"></i>
		            </a>
	            </div>
	        </div>
	        <div class="ibox-content">
	        		<div class="row">
                        <div class="col-sm-5 m-b-xs">
                            <div class="btn-group">
	                            <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle">Tác vụ <span class="caret"></span></button>
	                            <ul class="dropdown-menu">
	                                <li><a href="#" class="font-bold">Xóa</a></li>
	                                <li><a href="#" class="font-bold">Chỉnh sửa</a></li>
	                            </ul>
                        	</div>
                        </div>
                    </div>
					{{-- Data table --}}
					<div class="table-responsive">
						<table class="table table-striped">
							<thead>						
								<tr>
									<th class="text-center"><input type="checkbox"  checked class="i-checks" namse="input[]"></th>
								    <th class="text-center">ID</th>
								    <th class="text-center">Tên</th>
								    <th class="text-center">Ảnh</th>
								    <th class="text-center">Miêu tả</th>
								    <th class="text-center">Chủ đề</th>
								    <th class="text-center">Kích thước</th>
								    <th class="text-center">Giá</th>
								    <th class="text-center">Trạng Thái</th>
								    <th class="text-center">Action</th>
    							</tr>
							</thead>
							<tbody>
								@foreach($data as $u)
								<tr>
									<td class="text-center"><input type="checkbox"  checked class="i-checks" name="input[]"></td>
									<td class="text-center">{{ $u->id }}</td>
            						<td class="text-center">{{ $u->name }}</td>
            						<td class="text-center"><img src="/{{$u->image_small}}" alt="" width="100px"></td>
            						<td class="text-center">{{ $u->content_des }}</td>
            						<td class="text-center">{{ $u->cartegory }}</td>
            						<td class="text-center">{{ $u->file_size }}</td>
            						<td class="text-center">{{$u->price}}đ</td>            
									<td class="text-center"><a href="#" class="btn btn-success btn-circle"><i class="fa fa-eye"></i></a>
										<a href="#" class="btn btn-warning btn-circle"><i class="fa fa-edit"></i></a>
										<a href="#" class="btn btn-danger btn-circle"><i class="fa fa-trash"></i></a>
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				{{-- END Data table --}}	
	        </div>
		</div>
	</div>		
</div>
{{-- END Main Content --}}

@stop
{{-- Page content --}}

@section('script')	
<!-- iCheck -->
<script src="{{asset('assets/js/plugins/iCheck/icheck.min.js')}}"></script>

<!-- Peity -->
<script src="{{asset('assets/js/demo/peity-demo.js')}}"></script>
<script>
    $(document).ready(function(){
        $('.i-checks').iCheck({
            checkboxClass: 'icheckbox_square-green',
            radioClass: 'iradio_square-green',
         });
    });
</script>
@stop