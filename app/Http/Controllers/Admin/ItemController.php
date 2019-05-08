<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Item;

class ItemController extends Controller
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
        //
        $items = Item::all();
        return view('admin.items.list')->with('data',$items)->with('flag','themes_l');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.items.create')->with('flag','themes_n');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $this->validate(request(), 
                [
                    // 'title' => 'required|unique:games',
                    'name' => 'required',
                    'price' => 'required|numeric',
                    'saleoff' => 'numeric',
                    'cartegory' => 'required',
                    'status' => 'required',
                    'content_des' => 'required',
                    'content_full' => 'required',
                    'fileTheme' => 'required|file',
                    'imgFile' => 'required|file',

                ],
                [
                    'name.required' => 'Yêu cầu nhập tên của sản phẩm',
                    'price.required' => 'Yêu cầu nhập giá sản phẩm',
                    'price.numeric' => 'Giá sản phẩm không hợp lệ',
                    'saleoff.numeric' => 'Giá khuyến mãi sản phẩm không hợp lệ',
                    'cartegory.required' => 'Yêu cầu nhập danh mục sản phẩm',
                    'status.required' => 'Yêu cầu nhập trạng thái sản phẩm',
                    'content_des.required' => 'Yêu cầu nhập miêu tả ngắn cho sản phẩm',
                    'content_full.required' => 'Yêu cầu nhập miêu tả chi tiết cho sản phẩm',
                    'fileTheme.required' => 'Yêu cầu tải file sản phẩm',
                    'imgFile.required' => 'Yêu cầu tải ảnh cho sản phẩm',

                ]            
            );
            $img = $request->imgFile;
            $nameImageFile = $img->getClientOriginalName();
            $file = $request->fileTheme;
            $nameThemeFile = $file->getClientOriginalName();
            $sizeThemeFile = $file->getSize();
            $typeThemeFile = $file->getMimeType();

            $random_file_img_name = str_random(4).'_'.$nameImageFile;
            $random_file_theme_name = str_random(4).'_'.$nameThemeFile;

            while(file_exists(config('upload.url.image').$random_file_img_name))
            {
                $random_file_img_name = str_random(4).'_'.$nameImageFile;
            }
            while(file_exists(config('upload.url.file').$random_file_theme_name)) 
            {
                $random_file_theme_name = str_random(4).'_'.$nameThemeFile;
            }

            $img->move(config('upload.url.image'), $random_file_img_name);
            $file->move(config('upload.url.file'), $random_file_theme_name);
            $item = new Item();
            $item->name = $request->name;
            $item->image_small = $random_file_img_name;
            $item->image_big = $random_file_img_name;
            $item->content_full = $request->content_full;
            $item->content_des = $request->content_des;
            $item->link = $random_file_theme_name;
            $item->link_demo = $request->link_demo;
            $item->file_size = $sizeThemeFile;
            $item->type = $typeThemeFile;
            $item->price = $request->price;
            $item->saleoff = $request->saleoff;
            $item->cartegory = $request->cartegory;
            $item->user_id = \Auth::user()->id;
            $item->status = $request->status;
            $item->save();
            return redirect()->route('list-item');;
            
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
