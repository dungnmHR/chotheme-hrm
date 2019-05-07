<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         DB::table('products')->insert([
            'name' => 'Chè Vằng Lợi Sữa',
            'code_product' => '00345435',
            'slug' => 'che-vang-loi-sua',
            'price' => '103000',
            'discount' => '10000',
            'made_in' => 'Việt Nam',
            'type' => 'Thực phẩm chức năng',
            'unit' => 'chai',
            'category' => 'Mẹ và bé',
            'status' => '0',
            'image' => 'che-vang-1.jpg,che-vang-2.jpg,che-vang-3.jpg',
            'description' => 'Chè Vằng Lợi Sữa Kingfar là sản phẩm  dành riêng cho phụ nữ sau khi sinh, với tác dụng lợi sữa giảm cân tốt hơn do thành phần alcaloid , flavonoid cao hơn ở thân cây Chè vằng.',
        ]);
        DB::table('products')->insert([
            'name' => 'Ích Mẫu Lợi Nhi Lọ 60V',
            'code_product' => '00016927',
            'slug' => 'ich-mau-loi-nhi-lo-60v',
            'price' => '695000',
            'discount' => '10000',
            'made_in' => 'Việt Nam',
            'type' => 'Thực phẩm chức năng',
            'unit' => 'hộp',
            'category' => 'Phụ nữ có thai và cho con bú',
            'status' => '0',
            'image' => 'ich-mau-1,ich-mau-2,ich-mau3,ich-mau-4',
            'description' => 'Ích Mẫu Lợi Nhi được chiết xuất hoàn toàn từ các loại dược liệu thiên nhiên quý hiếm có tác dụng bình can, kiện tỳ, giúp phụ nữ sau sinh ăn ngon miệng, tăng hấp thu, tăng chuyển hóa đồng thời lấy lại vóc dáng thon gọn cho phụ nữ sau sinh.',
        ]);
    }
}