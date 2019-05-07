<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Trans;
//use App\Feed;
use Illuminate\Support\Facades\Auth;
use Gate;


class TransController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $u_ = Auth::user();
        if (Gate::denies('admin-only', $u_)) {
            $trans = Trans::where('user_id', $u_->id)->get();
            //return view('font-end.trans')->with('data',$trans);
        }else {
            $trans = Trans::all();
            return view('admin.trans.list')->with('data',$trans)->with('flag','trans_l');
        }
        
    }
    /** 
     * Bảng tin người dùng
     */
    public function dashboard()
    {
        $u_ = Auth::user();
        $t_ = DB::table('trans')->where('user_id',$u_->id)->where('status',0)->count();
        $a_ = DB::table('trans')->where('user_id',$u_->id)->where('status',1)->count();
        $d_ = DB::table('trans')->where('user_id',$u_->id)->where('status',2)->count();
        return view('font-end.dashboard', compact('t_', 'a_','d_'));
    }

    /** 
     * Danh sách themes đã mua
     */
    public function myThemes()
    {
        $u_ = Auth::user();
        $trans = Trans::where('user_id', $u_->id)->where('status', 0)->get();
      
        return view('font-end.my-themes')->with('data',$trans);
    }


    public function adminGetList()
    {
        $trans = Trans::all(); 
        return view('admin.trans.list-trans')->with('data',$trans);
    }

    public function acitveTran($id)
    {
        $trans = Trans::find($id);
        $trans->status = 0;
        $trans->save();

        return redirect()->route('list-trans');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, $id)
    {
        $this->validate(request(), 
            [
                    'code_deposit' => 'required|unique:trans',
                    'code_bank' => 'required',
                    'sender_name' => 'required',
                    'acc_bank' => 'required',
                    'phone' => 'required'
            ],
            [
                    // 'title' => 'required|unique:games',
                    'code_deposit.required' => 'Mã gửi tiền là trường bắt buộc.',
                    'sender_name.required' => 'Yêu cầu nhập tên người chuyển tiền.',
                    'code_bank.required' => 'Yêu cầu chọn ngân hàng gửi tiền.',
                    'acc_bank.required' => 'Yêu cầu nhập mã tài khoản.',
                    'phone.required' => 'Yêu cầu nhập giá số điện thoại liên hệ.',
            ]
            
        );

        /* Tạo mới trans  */
        $tran = Trans::create($request->all());  
        /* 
            Save in database
        */
        $user = Auth::user();

        /* 
            Send notify to admin
        */
        // $feed = new Feed();
        // $feed->content = 'Khách hàng '.$user->name.' vừa đăng kí mua theme '.$request->item_name;
        // $feed->trans_id = $tran->id;
        // $feed->save();
        // try {
        //     // broadcast
        //     event(new \App\Events\FeedAdded($feed));
        //     \Log::info('succcess broadcasting');
        // }
        // catch (\Exception $ex) {
        //     \Log::error($ex->getMessage());
        // }

        
        return redirect()->route('show-trans');
    }

    public function getInfoTheme($id){
        $item = DB::table('items')->find($id);
        return view('font-end.item-info')->with('data',$item);

    }

    public function getDeposit($id){
        $item = DB::table('items')->find($id);
        return view('font-end.deposit-form')->with('data',$item);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
