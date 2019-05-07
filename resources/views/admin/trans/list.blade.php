@extends('admin.layouts.default')

@section('title')
Tất cả giao dịch
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
        <h2>Tất cả giao dịch</h2>
        <ol class="breadcrumb">
	        <li>
	            <a href="{{route('home')}}">Home</a>
	        </li>
	        <li>
	            <a href="{{route('list-trans')}}">Tất cả giao dịch</a>
	        </li>
        </ol>
    </div>
    <div class="col-sm-8">
        <div class="title-action">
            <a href="{{route('create-trans')}}" class="btn btn-primary">Thêm mới</a>
        </div>
    </div>
</div>
{{-- END Breadcrumb --}}

{{-- START Main Content --}}
<div class="wrapper wrapper-content">
	<div class="row animated fadeInRight">
		<div class="ibox float-e-margins">
			<div class="ibox-title">
	            <h5>Tất cả giao dịch</h5>
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
								<th><input type="checkbox"  checked class="i-checks" namse="input[]"></th>
								<tr>
								    <tr>
								        <th class="text-center">ID</th>
								        <th class="text-center">Tên theme</th>
								        <th class="text-center">Ảnh</th>
								        <th class="text-center">Giá</th>
								        <th class="text-center">Trạng thái</th>
								        <th class="text-center">Thời gian đăng ký</th>
								        <th class="text-center">Thời gian phản hồi</th>
								        <th class="text-center">Action</th>
								    </tr>
    							</tr>
							</thead>
							<tbody>
								@foreach($data as $u)
								<tr>
									<td class="text-center"><input type="checkbox"  checked class="i-checks" name="input[]"></td>
									<td>{{ $t->id }}</td>
						            <td>{{ $t->item->name }}</td>
						            <td><img src="/{{$t->item->image_small}}" alt="" width="100px"></td>
						            <td>{{number_format($t->item->price,0,',','.')}}đ</td>
						            <td>
						                @if($t->status == 0)
						                    <button type="button" class="btn btn-block btn-success btn-sm">Đã chấp thuận</button>
						                @elseif($t->status == 1)
						                    <button type="button" class="btn btn-block btn-warning btn-sm">Đang chờ</button>
						                @else
						                    <button type="button" class="btn btn-block btn-danger btn-sm">Từ chối</button>
						                @endif
						            </td>  
						            <td>{{ $t->created_at }}</td>
						            <td>
						                @if($t->updated_at != $t->created_at)
						                    {{ $t->updated_at }}
						                @endif
						            </td>            
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