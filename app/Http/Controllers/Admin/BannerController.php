<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Banner;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         return view('admin.banners.create')->with('flag', 'banner_n');
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
        $this->validate(request(), 
            [
                'image' => 'required',
                'position' => 'required',
                'order' => 'required',
                'status' => 'required',

            ],
            [
                'image.required' => 'Yêu cầu upload ảnh của banner',
                'position.required' => 'Yêu cầu chọn vị trí sử dụng banner',
                'order.numeric' => 'Yêu cầu chọn thứ tự ưu tiên cho banner',
                'status.numeric' => 'Yêu cầu chọn trạng thái cho banner',
            ]            
        );

        $img = $request->image;
        $nameImage = $img->getClientOriginalName();
        $random_file_img_name = str_random(4).'_'.$nameImage;
        while(file_exists(config('upload.url.banner').$random_file_img_name))
        {
            $random_file_img_name = str_random(4).'_'.$nameImageFile;
        }

        $img->move(config('upload.url.banner'), $random_file_img_name);
        $banner = new Banner();
        $banner->image = $random_file_img_name;
        $banner->position = $request->position;
        $banner->order = $request->order;
        $banner->status = $request->status;
        $banner->user_id = \Auth::user()->id;
        $banner->save();
        dd($banner);


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
