<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
         $product = new \App\Product([
            

            // fist Product
            'imagePath'=>'http://ecx.images-amazon.com/images/I/51ZU%2BCvkTyL.jpg',
            'title'=>'Samsung Galaxy S9 Plus',
            'description'=>'The Samsung Galaxy S9 Plus is a big phone that\'s designed for big hands - and it takes the very best of what\'s on the smartphone market and puts it together in a compelling package that we\'ve loved testing',
            'price'=>'799',
            'note'=>'1',
         ]);
        $product->save();


        // 2
   


        $product = new \App\Product([
            
            'imagePath'=>'http://ecx.images-amazon.com/images/I/51ZU%2BCvkTyL.jpg',
            'title'=>' iPhone X',
            'description'=>'The iPhone X (although it s pronounced ten) is the redesigned Apple phone that iFans have been crying out for. It s got an all new shape, the notch at the top and higher price... but it s the best iPhone that s ever been made too (as long as you don t miss the headphone jack).',
            'price'=>'1099',
            'note'=>'1',
         ]);
        $product->save();


    


      // 3
        $product = new \App\Product([
            
            'imagePath'=>'http://ecx.images-amazon.com/images/I/51ZU%2BCvkTyL.jpg',
            'title'=>'Samsung Galaxy S9',
            'description'=>'The Samsung Galaxy S9 is nt quite the phone that the S9 Plus is - it s only got a single camera sensor, for one - but it s a more palm-friendly model that still packs the power and top screen quality of its sibling.',
            'price'=>'699',
            'note'=>'1',
         ]);
        $product->save();


     // 4 

     $product = new \App\Product([
            
        'imagePath'=>'http://ecx.images-amazon.com/images/I/51ZU%2BCvkTyL.jpg',
        'title'=>' Google Pixel 2 XL',
        'description'=>'The Pixel 2 XL is all about the camera, with a wider frame and more expansive screen for watching all manner of content. You ll buy it for the pictures you can take, but the power and latest Android upgrades will impress too.',
        'price'=>'1103',
        'note'=>'1',
     ]);
    $product->save();


    // 5     

    $product = new \App\Product([
            
        'imagePath'=>'http://ecx.images-amazon.com/images/I/51ZU%2BCvkTyL.jpg',
        'title'=>'Huawei Mate 10 Pro',
        'description'=>'The Huawei Mate 10 Pro is a phone that might not instantly be on your wish list, but the brand has made huge strides of late, and the battery life is something that outranks most on this list. If you re feeling that it s time for a change, this is worth checking out',
        'price'=>'705',
        'note'=>'1',
     ]);
    $product->save();

    //  6
    $product = new \App\Product([
            
        'imagePath'=>'http://ecx.images-amazon.com/images/I/51ZU%2BCvkTyL.jpg',
        'title'=>'LG V30',
        'description'=>'The LG V30 is a quietly impressive phone, jam-packed with all manner of tech. It s offering some of the top specs around and does it with a strong battery life, as well as being an audio marvel... perfect if you love listening to tunes on the go.',
        'price'=>'859',
        'note'=>'1',
     ]);
    $product->save();

// 7
    $product = new \App\Product([
            
        'imagePath'=>'http://ecx.images-amazon.com/images/I/51ZU%2BCvkTyL.jpg',
        'title'=>'Samsung Galaxy S8',
        'description'=>'The Samsung Galaxy S8 looked space age when it was launched last year, and the Galaxy S9 apes it in many ways. It s not the top phone in Samsung s range any more, but it s jolly close and costs a whole lot less',
        'price'=>'519',
        'note'=>'1',
     ]);
    $product->save();


    // 8
    $product = new \App\Product([
            
        'imagePath'=>'http://ecx.images-amazon.com/images/I/51ZU%2BCvkTyL.jpg',
        'title'=>'iPhone 8 Plus',
        'description'=>'So the iPhone X is the phone to buy if you want the best from Apple right now, but if you re more of a traditionalist you ll love the familiar stylings of the 8 Plus. It s got a strong camera and all the power of the X, as well as an easier-to-understand interface if you re a long-time iOS user.',
        'price'=>'699',
        'note'=>'0',
     ]);
    $product->save();

   // 9
   $product = new \App\Product([
            
    'imagePath'=>'http://ecx.images-amazon.com/images/I/51ZU%2BCvkTyL.jpg',
    'title'=>'Samsung Galaxy S8 Plus',
    'description'=>'The Galaxy S8 Plus wasn t different enough to its smaller brother in 2017, and it remains more expensive, but it s still one of the top phones around right now. You can get incredible photos in many conditions, the screen is pin-sharp and it s a nice phablet for a little less this year.',
    'price'=>'619',
    'note'=>'0',
 ]);
$product->save();




 // 10
 $product = new \App\Product([
            
    'imagePath'=>'http://ecx.images-amazon.com/images/I/51ZU%2BCvkTyL.jpg',
    'title'=>' iPhone 8',
    'description'=>'If you want a smaller phone, the iPhone 8 continues to fill that gap. It s not the most mind-blowing in terms of some of the specs - it s only got the single sensor camera, for instance, and the screen isn t the highest-res - but it s the perfect upgrade if you just want a no-nonsense, cutting-edge iPhone. ',
    'price'=>'699',
    'note'=>'1',
 ]);
$product->save();



    }
}
