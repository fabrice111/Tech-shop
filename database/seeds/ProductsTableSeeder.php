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
        for ($i=1; $i <= 3; $i++) {
            DB::table('products')->insert([
                'category_id' => '1',
                'image' => '/uploads/products/men1.jpg',
                'name' => 'Cleeve T Shirt',
                'long_description' => 'mdnwndwdonqwdkqjnmdnwndwdonqwdkqjnmdnwndwdonqwdkqjn mdnwndwdonqwdkqjnmdnwndwdonqwdkqjnmdnwndwdonqwdkqjn mdnwndwdonqwdkqjnmdnwndwdonqwdkqjn Casual Garb Men_s Snow Heather Fitted T Shirt Short Sleeve Crew Neck T_Shirts for Men Kelly Small _ Amazon_co
                                      Casual Garb Men_s Snow Heather Fitted T Shirt Short Sleeve Crew Neck T_Shirts for Men Kelly Small _ Amazon_comCasual Garb Men_s Snow Heather Fitted T Shirt Short Sleeve Crew Neck T_Shirts for Men Kelly Small _ Amazon_com
                                      Casual Garb Men_s Snow Heather Fitted T Shirt Short Sleeve Crew Neck T_Shirts for Men Kelly Small _ Amazon_comCasual Garb Men_s Snow Heather Fitted T Shirt Short Sleeve Crew Neck T_Shirts for Men Kelly Small _ Amazon_com',
                'price' => '12000',
                'color' => 'Blue,black,yellow,red',
                'size' => 'Medium',
            ]);
        }

        for ($i=1; $i <= 3; $i++) {
            DB::table('products')->insert([
                'category_id' => '2',
                'image' => '/uploads/products/wom1.jpg',
                'name' => 'Sleeveless Loose Plain Dresses',
                'long_description' => 'mdnwndwdonqwdkqjnmdnwndwdonqwdkqjnmdnwndwdonqwdkqjn mdnwndwdonqwdkqjnmdnwndwdonqwdkqjnmdnwndwdonqwdkqjn mdnwndwdonqwdkqjnmdnwndwdonqwdkqjn
                                      IWOLLENCE Women_s Sleeveless Loose Plain Dresses Casual Short Dress with Pockets Black_XL at Amazon Women’s Clothing store_IWOLLENCE Women_s Sleeveless Loose Plain Dresses Casual Short Dress with Pockets Black_XL at Amazon Women’s Clothing store_
                                      IWOLLENCE Women_s Sleeveless Loose Plain Dresses Casual Short Dress with Pockets Black_XL at Amazon Women’s Clothing store_IWOLLENCE Women_s Sleeveless Loose Plain Dresses Casual Short Dress with Pockets Black_XL at Amazon Women’s Clothing store_',
                'price' => '15000',
                'color' => 'Red,black,yellow,red',
                'size' => 'Short',
            ]);
        }

        for ($i=1; $i <= 3; $i++) {
            DB::table('products')->insert([
                'category_id' => '1',
                'image' => '/uploads/products/men2.jpg',
                'name' => 'Cleeve T Shirt',
                'long_description' => 'mdnwndwdonqwdkqjnmdnwndwdonqwdkqjnmdnwndwdonqwdkqjn mdnwndwdonqwdkqjnmdnwndwdonqwdkqjnmdnwndwdonqwdkqjn mdnwndwdonqwdkqjnmdnwndwdonqwdkqjn Casual Garb Men_s Snow Heather Fitted T Shirt Short Sleeve Crew Neck T_Shirts for Men Kelly Small _ Amazon_co
                                      Casual Garb Men_s Snow Heather Fitted T Shirt Short Sleeve Crew Neck T_Shirts for Men Kelly Small _ Amazon_comCasual Garb Men_s Snow Heather Fitted T Shirt Short Sleeve Crew Neck T_Shirts for Men Kelly Small _ Amazon_com
                                      Casual Garb Men_s Snow Heather Fitted T Shirt Short Sleeve Crew Neck T_Shirts for Men Kelly Small _ Amazon_comCasual Garb Men_s Snow Heather Fitted T Shirt Short Sleeve Crew Neck T_Shirts for Men Kelly Small _ Amazon_com',
                'price' => '10000',
                'color' => 'Blue,black,yellow',
                'size' => 'Medium',
            ]);
        }

        for ($i=1; $i <= 3; $i++) {
            DB::table('products')->insert([
                'category_id' => '4',
                'image' => '/uploads/products/tel3.jpg',
                'name' => 'Plain dresse',
                'long_description' => 'mdnwndwdonqwdkqjnmdnwndwdonqwdkqjnmdnwndwdonqwdkqjn mdnwndwdonqwdkqjnmdnwndwdonqwdkqjnmdnwndwdonqwdkqjn mdnwndwdonqwdkqjnmdnwndwdonqwdkqjn
                                      IWOLLENCE Women_s Sleeveless Loose Plain Dresses Casual Short Dress with Pockets Black_XL at Amazon Women’s Clothing store_IWOLLENCE Women_s Sleeveless Loose Plain Dresses Casual Short Dress with Pockets Black_XL at Amazon Women’s Clothing store_
                                      IWOLLENCE Women_s Sleeveless Loose Plain Dresses Casual Short Dress with Pockets Black_XL at Amazon Women’s Clothing store_IWOLLENCE Women_s Sleeveless Loose Plain Dresses Casual Short Dress with Pockets Black_XL at Amazon Women’s Clothing store_',
                'price' => '10000',
                'color' => 'Pink,yellow',
                'size' => 'Short',
            ]);
        }

        for ($i=1; $i <= 3; $i++) {
            DB::table('products')->insert([
                'category_id' => '1',
                'image' => '/uploads/products/men4.jpg',
                'name' => 'Cleeve T Shirt',
                'long_description' => 'mdnwndwdonqwdkqjnmdnwndwdonqwdkqjnmdnwndwdonqwdkqjn mdnwndwdonqwdkqjnmdnwndwdonqwdkqjnmdnwndwdonqwdkqjn mdnwndwdonqwdkqjnmdnwndwdonqwdkqjn Casual Garb Men_s Snow Heather Fitted T Shirt Short Sleeve Crew Neck T_Shirts for Men Kelly Small _ Amazon_co
                                      Casual Garb Men_s Snow Heather Fitted T Shirt Short Sleeve Crew Neck T_Shirts for Men Kelly Small _ Amazon_comCasual Garb Men_s Snow Heather Fitted T Shirt Short Sleeve Crew Neck T_Shirts for Men Kelly Small _ Amazon_com
                                      Casual Garb Men_s Snow Heather Fitted T Shirt Short Sleeve Crew Neck T_Shirts for Men Kelly Small _ Amazon_comCasual Garb Men_s Snow Heather Fitted T Shirt Short Sleeve Crew Neck T_Shirts for Men Kelly Small _ Amazon_com',
                'price' => '11000',
                'color' => 'Blue,black,yellow,red',
                'size' => 'Medium',
            ]);
        }

        for ($i=1; $i <= 3; $i++) {
            DB::table('products')->insert([
                'category_id' => '1',
                'image' => '/uploads/products/men5.jpg',
                'name' => 'Cleeve T Shirt',
                'long_description' => 'mdnwndwdonqwdkqjnmdnwndwdonqwdkqjnmdnwndwdonqwdkqjn mdnwndwdonqwdkqjnmdnwndwdonqwdkqjnmdnwndwdonqwdkqjn mdnwndwdonqwdkqjnmdnwndwdonqwdkqjn Casual Garb Men_s Snow Heather Fitted T Shirt Short Sleeve Crew Neck T_Shirts for Men Kelly Small _ Amazon_co
                                      Casual Garb Men_s Snow Heather Fitted T Shirt Short Sleeve Crew Neck T_Shirts for Men Kelly Small _ Amazon_comCasual Garb Men_s Snow Heather Fitted T Shirt Short Sleeve Crew Neck T_Shirts for Men Kelly Small _ Amazon_com
                                      Casual Garb Men_s Snow Heather Fitted T Shirt Short Sleeve Crew Neck T_Shirts for Men Kelly Small _ Amazon_comCasual Garb Men_s Snow Heather Fitted T Shirt Short Sleeve Crew Neck T_Shirts for Men Kelly Small _ Amazon_com',
                'price' => '11000',
                'color' => 'Blue,black,yellow,red',
                'size' => 'Medium',
            ]);
        }

        ///////////////End of Men's Product//////////

        for ($i=1; $i <= 3; $i++) {
            DB::table('products')->insert([
                'category_id' => '1',
                'image' => '/uploads/products/men3.jpg',
                'name' => 'Cleeve T Shirt',
                'long_description' => 'mdnwndwdonqwdkqjnmdnwndwdonqwdkqjnmdnwndwdonqwdkqjn mdnwndwdonqwdkqjnmdnwndwdonqwdkqjnmdnwndwdonqwdkqjn mdnwndwdonqwdkqjnmdnwndwdonqwdkqjn Casual Garb Men_s Snow Heather Fitted T Shirt Short Sleeve Crew Neck T_Shirts for Men Kelly Small _ Amazon_co
                                      Casual Garb Men_s Snow Heather Fitted T Shirt Short Sleeve Crew Neck T_Shirts for Men Kelly Small _ Amazon_comCasual Garb Men_s Snow Heather Fitted T Shirt Short Sleeve Crew Neck T_Shirts for Men Kelly Small _ Amazon_com
                                      Casual Garb Men_s Snow Heather Fitted T Shirt Short Sleeve Crew Neck T_Shirts for Men Kelly Small _ Amazon_comCasual Garb Men_s Snow Heather Fitted T Shirt Short Sleeve Crew Neck T_Shirts for Men Kelly Small _ Amazon_com',
                'price' => '15000',
                'color' => 'Red,black,blue',
                'size' => 'Medium',
            ]);
        }

        for ($i=1; $i <= 3; $i++) {
            DB::table('products')->insert([
                'category_id' => '2',
                'image' => '/uploads/products/wom2.jpg',
                'name' => 'Sleeveless Loose Plain Dresses',
                'long_description' => 'mdnwndwdonqwdkqjnmdnwndwdonqwdkqjnmdnwndwdonqwdkqjn mdnwndwdonqwdkqjnmdnwndwdonqwdkqjnmdnwndwdonqwdkqjn mdnwndwdonqwdkqjnmdnwndwdonqwdkqjn
                                      IWOLLENCE Women_s Sleeveless Loose Plain Dresses Casual Short Dress with Pockets Black_XL at Amazon Women’s Clothing store_IWOLLENCE Women_s Sleeveless Loose Plain Dresses Casual Short Dress with Pockets Black_XL at Amazon Women’s Clothing store_
                                      IWOLLENCE Women_s Sleeveless Loose Plain Dresses Casual Short Dress with Pockets Black_XL at Amazon Women’s Clothing store_IWOLLENCE Women_s Sleeveless Loose Plain Dresses Casual Short Dress with Pockets Black_XL at Amazon Women’s Clothing store_',
                'price' => '14000',
                'color' => 'Red,black,yellow,red',
                'size' => 'Short',
            ]);
        }

        for ($i=1; $i <= 3; $i++) {
            DB::table('products')->insert([
                'category_id' => '2',
                'image' => '/uploads/products/wom3.jpg',
                'name' => 'Sleeveless Loose Plain Dresses',
                'long_description' => 'mdnwndwdonqwdkqjnmdnwndwdonqwdkqjnmdnwndwdonqwdkqjn mdnwndwdonqwdkqjnmdnwndwdonqwdkqjnmdnwndwdonqwdkqjn mdnwndwdonqwdkqjnmdnwndwdonqwdkqjn
                                      IWOLLENCE Women_s Sleeveless Loose Plain Dresses Casual Short Dress with Pockets Black_XL at Amazon Women’s Clothing store_IWOLLENCE Women_s Sleeveless Loose Plain Dresses Casual Short Dress with Pockets Black_XL at Amazon Women’s Clothing store_
                                      IWOLLENCE Women_s Sleeveless Loose Plain Dresses Casual Short Dress with Pockets Black_XL at Amazon Women’s Clothing store_IWOLLENCE Women_s Sleeveless Loose Plain Dresses Casual Short Dress with Pockets Black_XL at Amazon Women’s Clothing store_',
                'price' => '12000',
                'color' => 'Red,black,white,red',
                'size' => 'Short',
            ]);
        }

        ///////////////End of Women's Product//////////

        for ($i=1; $i <= 3; $i++) {
            DB::table('products')->insert([
                'category_id' => '3',
                'image' => '/uploads/products/kid1.jpg',
                'name' => 'Plain dresse',
                'long_description' => 'mdnwndwdonqwdkqjnmdnwndwdonqwdkqjnmdnwndwdonqwdkqjn mdnwndwdonqwdkqjnmdnwndwdonqwdkqjnmdnwndwdonqwdkqjn mdnwndwdonqwdkqjnmdnwndwdonqwdkqjn
                                      IWOLLENCE Women_s Sleeveless Loose Plain Dresses Casual Short Dress with Pockets Black_XL at Amazon Women’s Clothing store_IWOLLENCE Women_s Sleeveless Loose Plain Dresses Casual Short Dress with Pockets Black_XL at Amazon Women’s Clothing store_
                                      IWOLLENCE Women_s Sleeveless Loose Plain Dresses Casual Short Dress with Pockets Black_XL at Amazon Women’s Clothing store_IWOLLENCE Women_s Sleeveless Loose Plain Dresses Casual Short Dress with Pockets Black_XL at Amazon Women’s Clothing store_',
                'price' => '10000',
                'color' => 'Pink,yellow',
                'size' => 'Short',
            ]);
        }

        for ($i=1; $i <= 3; $i++) {
            DB::table('products')->insert([
                'category_id' => '3',
                'image' => '/uploads/products/kid2.jpg',
                'name' => 'Plain dresse',
                'long_description' => 'mdnwndwdonqwdkqjnmdnwndwdonqwdkqjnmdnwndwdonqwdkqjn mdnwndwdonqwdkqjnmdnwndwdonqwdkqjnmdnwndwdonqwdkqjn mdnwndwdonqwdkqjnmdnwndwdonqwdkqjn
                                      IWOLLENCE Women_s Sleeveless Loose Plain Dresses Casual Short Dress with Pockets Black_XL at Amazon Women’s Clothing store_IWOLLENCE Women_s Sleeveless Loose Plain Dresses Casual Short Dress with Pockets Black_XL at Amazon Women’s Clothing store_
                                      IWOLLENCE Women_s Sleeveless Loose Plain Dresses Casual Short Dress with Pockets Black_XL at Amazon Women’s Clothing store_IWOLLENCE Women_s Sleeveless Loose Plain Dresses Casual Short Dress with Pockets Black_XL at Amazon Women’s Clothing store_',
                'price' => '10000',
                'color' => 'Pink,yellow',
                'size' => 'Short',
            ]);
        }

        for ($i=1; $i <= 3; $i++) {
            DB::table('products')->insert([
                'category_id' => '3',
                'image' => '/uploads/products/kid3.jpg',
                'name' => 'Plain dresse',
                'long_description' => 'mdnwndwdonqwdkqjnmdnwndwdonqwdkqjnmdnwndwdonqwdkqjn mdnwndwdonqwdkqjnmdnwndwdonqwdkqjnmdnwndwdonqwdkqjn mdnwndwdonqwdkqjnmdnwndwdonqwdkqjn
                                      IWOLLENCE Women_s Sleeveless Loose Plain Dresses Casual Short Dress with Pockets Black_XL at Amazon Women’s Clothing store_IWOLLENCE Women_s Sleeveless Loose Plain Dresses Casual Short Dress with Pockets Black_XL at Amazon Women’s Clothing store_
                                      IWOLLENCE Women_s Sleeveless Loose Plain Dresses Casual Short Dress with Pockets Black_XL at Amazon Women’s Clothing store_IWOLLENCE Women_s Sleeveless Loose Plain Dresses Casual Short Dress with Pockets Black_XL at Amazon Women’s Clothing store_',
                'price' => '10000',
                'color' => 'Pink,yellow',
                'size' => 'Short',
            ]);
        }

        for ($i=1; $i <= 3; $i++) {
            DB::table('products')->insert([
                'category_id' => '3',
                'image' => '/uploads/products/kid4.jpg',
                'name' => 'Plain dresse',
                'long_description' => 'mdnwndwdonqwdkqjnmdnwndwdonqwdkqjnmdnwndwdonqwdkqjn mdnwndwdonqwdkqjnmdnwndwdonqwdkqjnmdnwndwdonqwdkqjn mdnwndwdonqwdkqjnmdnwndwdonqwdkqjn
                                      IWOLLENCE Women_s Sleeveless Loose Plain Dresses Casual Short Dress with Pockets Black_XL at Amazon Women’s Clothing store_IWOLLENCE Women_s Sleeveless Loose Plain Dresses Casual Short Dress with Pockets Black_XL at Amazon Women’s Clothing store_
                                      IWOLLENCE Women_s Sleeveless Loose Plain Dresses Casual Short Dress with Pockets Black_XL at Amazon Women’s Clothing store_IWOLLENCE Women_s Sleeveless Loose Plain Dresses Casual Short Dress with Pockets Black_XL at Amazon Women’s Clothing store_',
                'price' => '10000',
                'color' => 'Pink,yellow',
                'size' => 'Short',
            ]);
        }

        ////////////////////End of Kids Products///////////////////////////

        for ($i=1; $i <= 3; $i++) {
            DB::table('products')->insert([
                'category_id' => '4',
                'image' => '/uploads/products/tel1.jpg',
                'name' => 'Plain dresse',
                'long_description' => 'mdnwndwdonqwdkqjnmdnwndwdonqwdkqjnmdnwndwdonqwdkqjn mdnwndwdonqwdkqjnmdnwndwdonqwdkqjnmdnwndwdonqwdkqjn mdnwndwdonqwdkqjnmdnwndwdonqwdkqjn
                                      IWOLLENCE Women_s Sleeveless Loose Plain Dresses Casual Short Dress with Pockets Black_XL at Amazon Women’s Clothing store_IWOLLENCE Women_s Sleeveless Loose Plain Dresses Casual Short Dress with Pockets Black_XL at Amazon Women’s Clothing store_
                                      IWOLLENCE Women_s Sleeveless Loose Plain Dresses Casual Short Dress with Pockets Black_XL at Amazon Women’s Clothing store_IWOLLENCE Women_s Sleeveless Loose Plain Dresses Casual Short Dress with Pockets Black_XL at Amazon Women’s Clothing store_',
                'price' => '10000',
                'color' => 'Pink,yellow',
                'size' => 'Short',
            ]);
        }

        for ($i=1; $i <= 3; $i++) {
            DB::table('products')->insert([
                'category_id' => '4',
                'image' => '/uploads/products/tel2.jpg',
                'name' => 'Plain dresse',
                'long_description' => 'mdnwndwdonqwdkqjnmdnwndwdonqwdkqjnmdnwndwdonqwdkqjn mdnwndwdonqwdkqjnmdnwndwdonqwdkqjnmdnwndwdonqwdkqjn mdnwndwdonqwdkqjnmdnwndwdonqwdkqjn
                                      IWOLLENCE Women_s Sleeveless Loose Plain Dresses Casual Short Dress with Pockets Black_XL at Amazon Women’s Clothing store_IWOLLENCE Women_s Sleeveless Loose Plain Dresses Casual Short Dress with Pockets Black_XL at Amazon Women’s Clothing store_
                                      IWOLLENCE Women_s Sleeveless Loose Plain Dresses Casual Short Dress with Pockets Black_XL at Amazon Women’s Clothing store_IWOLLENCE Women_s Sleeveless Loose Plain Dresses Casual Short Dress with Pockets Black_XL at Amazon Women’s Clothing store_',
                'price' => '10000',
                'color' => 'Pink,yellow',
                'size' => 'Short',
            ]);
        }



        for ($i=1; $i <= 3; $i++) {
            DB::table('products')->insert([
                'category_id' => '4',
                'image' => '/uploads/products/tel4.jpg',
                'name' => 'Plain dresse',
                'long_description' => 'mdnwndwdonqwdkqjnmdnwndwdonqwdkqjnmdnwndwdonqwdkqjn mdnwndwdonqwdkqjnmdnwndwdonqwdkqjnmdnwndwdonqwdkqjn mdnwndwdonqwdkqjnmdnwndwdonqwdkqjn
                                      IWOLLENCE Women_s Sleeveless Loose Plain Dresses Casual Short Dress with Pockets Black_XL at Amazon Women’s Clothing store_IWOLLENCE Women_s Sleeveless Loose Plain Dresses Casual Short Dress with Pockets Black_XL at Amazon Women’s Clothing store_
                                      IWOLLENCE Women_s Sleeveless Loose Plain Dresses Casual Short Dress with Pockets Black_XL at Amazon Women’s Clothing store_IWOLLENCE Women_s Sleeveless Loose Plain Dresses Casual Short Dress with Pockets Black_XL at Amazon Women’s Clothing store_',
                'price' => '10000',
                'color' => 'Pink,yellow',
                'size' => 'Short',
            ]);
        }
    }
}
