@extends('admin.layouts.default')

@section('title')
Danh sách người dùng
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
        <h2>Danh sách người dùng</h2>
        <ol class="breadcrumb">
	        <li>
	            <a href="index.html">Home</a>
	        </li>
	        <li class="active">
	            <strong>Danh sách người dùng</strong>
	        </li>
        </ol>
    </div>
    <div class="col-sm-8">
        <div class="title-action">
            <a href="{{route('create-user')}}" class="btn btn-primary">Thêm mới</a>
        </div>
    </div>
</div>
{{-- END Breadcrumb --}}
{{-- Main content --}}
<div class="wrapper wrapper-content animated fadeInRight">
	<div class="row">
		<div class="col-lg-12">
			<div class="ibox float-e-margins">
				{{-- Header table --}}
				<div class="ibox-title">
					<h5>Danh sách người dùng</h5>
					<div class="ibox-tools">
						<a class="collapse-link">
							<i class="fa fa-chevron-up"></i>
						</a>						
					</div>
				</div>
				{{-- END Header table --}}
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
									<th><input type="checkbox"  checked class="i-checks" namse="input[]"></th>
									<th class="text-center">ID </th>
									<th class="text-center">Tên </th>
									<th class="text-center">SĐT </th>
									<th class="text-center">Email </th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								@if($data->count()>0)
                                    @foreach($data as $item)
                                    <tr>
                                        <td><input type="checkbox"  checked class="i-checks" name="input[]"></td>
                                        <td class="text-center">{{$item->id}}</td>
                                        <td class="text-center">{{$item->name}}</td>
                                        <td class="text-center">{{$item->phone}}</td>
                                        <td class="text-center">{{$item->email}}</td>
                                        <td>
                                        	<a href="#" class="btn btn-success btn-circle"><i class="fa fa-eye"></i></a>
											<a href="#" class="btn btn-warning btn-circle"><i class="fa fa-edit"></i></a>
											<a href="#" class="btn btn-danger btn-circle"><i class="fa fa-trash"></i></a>
										</td>
                                    </tr>
                                    @endforeach
                                @else
                                    <tr><td colspan="5"><h4>Không có dữ liệu để hiển thị</h4></td></tr>  
                                @endif      														
							</tbody>
						</table>
					</div>
				{{-- END Data table --}}
				</div>
			</div>
		</div>
	</div>
</div>
{{-- END Main content --}}
@stop
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