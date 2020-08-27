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
      
        \App\Product::truncate();
            //phones and tablets
        $product = new \App\Product([
            'imagePath' => 'phones and tablets/1 (1).jpg',
           'title' => 'Binary',
           'description' => 'Lorem ipsum dolor sit amet consectetur',
           'price' => 10 
          ]);
          $product->save();
        $product = new \App\Product([
             'imagePath' => 'phones and tablets/1 (2).jpg',
             'title' => 'Microsoft-edge',
             'description' => 'Lorem ipsum dolor sit amet consectetur',
             'price' => 6 
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'phones and tablets/1 (3).jpg',
            'title' => 'Avast',
            'description' => 'Lorem ipsum dolor sit amet consectetur',
            'price' => 10 
       ]);
       $product->save();

       $product = new \App\Product([
        'imagePath' => 'phones and tablets/1 (4).jpg',
        'title' => 'Microsoft Windows 10',
        'description' => 'Lorem ipsum dolor sit amet consectetur',
        'price' => 10 
       ]);
       $product->save();
       $product = new \App\Product([
        'imagePath' => 'phones and tablets/1 (5).jpg',
        'title' => 'cyber security',
        'description' => 'Lorem ipsum dolor sit amet consectetur',
        'price' => 6 
   ]);
   $product->save();

   $product = new \App\Product([
    'imagePath' => 'phones and tablets/1 (6).jpg',
       'title' => 'Computer',
       'description' => 'Lorem ipsum dolor sit amet consectetur',
       'price' => 10 
  ]);
  $product->save();

  $product = new \App\Product([
    'imagePath' => 'phones and tablets/1 (7).jpg',
   'title' => 'Binary',
   'description' => 'Lorem ipsum dolor sit amet consectetur',
   'price' => 10 
  ]);
  $product->save();

  $product = new \App\Product([
    'imagePath' => 'phones and tablets/1 (8).jpg',
   'title' => 'Binary',
   'description' => 'Lorem ipsum dolor sit amet consectetur',
   'price' => 10 
  ]);
  $product->save();

  $product = new \App\Product([
    'imagePath' => 'phones and tablets/1 (9).jpg',
   'title' => 'Binary',
   'description' => 'Lorem ipsum dolor sit amet consectetur',
   'price' => 10 
  ]);
  $product->save();

  $product = new \App\Product([
    'imagePath' => 'phones and tablets/1 (10).jpg',
   'title' => 'Binary',
   'description' => 'Lorem ipsum dolor sit amet consectetur',
   'price' => 10 
  ]);

  $product->save();

  //Electronics
  $product = new \App\Product([
    'imagePath' => 'Electronics/1 (1).jpg',
   'title' => 'Binary',
   'description' => 'Lorem ipsum dolor sit amet consectetur',
   'price' => 10 
  ]);
  $product->save();
$product = new \App\Product([
     'imagePath' => 'Electronics/1 (2).jpg',
     'title' => 'Microsoft-edge',
     'description' => 'Lorem ipsum dolor sit amet consectetur',
     'price' => 6 
]);
$product->save();

$product = new \App\Product([
    'imagePath' => 'Electronics/1 (3).jpg',
    'title' => 'Avast',
    'description' => 'Lorem ipsum dolor sit amet consectetur',
    'price' => 10 
]);
$product->save();

$product = new \App\Product([
'imagePath' => 'Electronics/1 (4).jpg',
'title' => 'Microsoft Windows 10',
'description' => 'Lorem ipsum dolor sit amet consectetur',
'price' => 10 
]);
$product->save();
$product = new \App\Product([
'imagePath' => 'Electronics/1 (5).jpg',
'title' => 'cyber security',
'description' => 'Lorem ipsum dolor sit amet consectetur',
'price' => 6 
]);
$product->save();

$product = new \App\Product([
'imagePath' => 'Electronics/1 (6).jpg',
'title' => 'Computer',
'description' => 'Lorem ipsum dolor sit amet consectetur',
'price' => 10 
]);
$product->save();

$product = new \App\Product([
'imagePath' => 'Electronics/1 (7).jpg',
'title' => 'Binary',
'description' => 'Lorem ipsum dolor sit amet consectetur',
'price' => 10 
]);
$product->save();

$product = new \App\Product([
'imagePath' => 'Electronics/1 (8).jpg',
'title' => 'Binary',
'description' => 'Lorem ipsum dolor sit amet consectetur',
'price' => 10 
]);
$product->save();

$product = new \App\Product([
'imagePath' => 'Electronics/1 (9).jpg',
'title' => 'Binary',
'description' => 'Lorem ipsum dolor sit amet consectetur',
'price' => 10 
]);
$product->save();

$product = new \App\Product([
'imagePath' => 'Electronics/1 (10).jpg',
'title' => 'Binary',
'description' => 'Lorem ipsum dolor sit amet consectetur',
'price' => 10 
]);

$product->save();


  //Computing
  $product = new \App\Product([
    'imagePath' => 'Computing/1 (1).jpg',
   'title' => 'Binary',
   'description' => 'Lorem ipsum dolor sit amet consectetur',
   'price' => 10 
  ]);
  $product->save();
$product = new \App\Product([
     'imagePath' => 'Computing/1 (2).jpg',
     'title' => 'Microsoft-edge',
     'description' => 'Lorem ipsum dolor sit amet consectetur',
     'price' => 6 
]);
$product->save();

$product = new \App\Product([
    'imagePath' => 'Computing/1 (3).jpg',
    'title' => 'Avast',
    'description' => 'Lorem ipsum dolor sit amet consectetur',
    'price' => 10 
]);
$product->save();

$product = new \App\Product([
'imagePath' => 'Computing/1 (4).jpg',
'title' => 'Microsoft Windows 10',
'description' => 'Lorem ipsum dolor sit amet consectetur',
'price' => 10 
]);
$product->save();
$product = new \App\Product([
'imagePath' => 'Computing/1 (5).jpg',
'title' => 'cyber security',
'description' => 'Lorem ipsum dolor sit amet consectetur',
'price' => 6 
]);
$product->save();

$product = new \App\Product([
'imagePath' => 'Computing/1 (6).jpg',
'title' => 'Computer',
'description' => 'Lorem ipsum dolor sit amet consectetur',
'price' => 10 
]);
$product->save();

$product = new \App\Product([
'imagePath' => 'Computing/1 (7).jpg',
'title' => 'Binary',
'description' => 'Lorem ipsum dolor sit amet consectetur',
'price' => 10 
]);
$product->save();

$product = new \App\Product([
'imagePath' => 'Fashions/1 (8).jpg',
'title' => 'Binary',
'description' => 'Lorem ipsum dolor sit amet consectetur',
'price' => 10 
]);
$product->save();

$product = new \App\Product([
'imagePath' => 'Fashions/1 (9).jpg',
'title' => 'Binary',
'description' => 'Lorem ipsum dolor sit amet consectetur',
'price' => 10 
]);
$product->save();

$product = new \App\Product([
'imagePath' => 'Computing/1 (10).jpg',
'title' => 'Binary',
'description' => 'Lorem ipsum dolor sit amet consectetur',
'price' => 10 
]);

$product->save();


  //Fashions
  $product = new \App\Product([
    'imagePath' => 'Fashions/1 (1).jpg',
   'title' => 'Binary',
   'description' => 'Lorem ipsum dolor sit amet consectetur',
   'price' => 10 
  ]);
  $product->save();
$product = new \App\Product([
     'imagePath' => 'Fashions/1 (2).jpg',
     'title' => 'Microsoft-edge',
     'description' => 'Lorem ipsum dolor sit amet consectetur',
     'price' => 6 
]);
$product->save();

$product = new \App\Product([
    'imagePath' => 'Fashions/1 (3).jpg',
    'title' => 'Avast',
    'description' => 'Lorem ipsum dolor sit amet consectetur',
    'price' => 10 
]);
$product->save();

$product = new \App\Product([
'imagePath' => 'Fashions/1 (4).jpg',
'title' => 'Microsoft Windows 10',
'description' => 'Lorem ipsum dolor sit amet consectetur',
'price' => 10 
]);
$product->save();
$product = new \App\Product([
'imagePath' => 'Fashions/1 (5).jpg',
'title' => 'cyber security',
'description' => 'Lorem ipsum dolor sit amet consectetur',
'price' => 6 
]);
$product->save();

$product = new \App\Product([
'imagePath' => 'Fashions/1 (6).jpg',
'title' => 'Computer',
'description' => 'Lorem ipsum dolor sit amet consectetur',
'price' => 10 
]);
$product->save();

$product = new \App\Product([
'imagePath' => 'Fashions/1 (7).jpg',
'title' => 'Binary',
'description' => 'Lorem ipsum dolor sit amet consectetur',
'price' => 10 
]);
$product->save();

$product = new \App\Product([
'imagePath' => 'Fashions/1 (8).jpg',
'title' => 'Binary',
'description' => 'Lorem ipsum dolor sit amet consectetur',
'price' => 10 
]);
$product->save();

$product = new \App\Product([
'imagePath' => 'Fashions/1 (9).jpg',
'title' => 'Binary',
'description' => 'Lorem ipsum dolor sit amet consectetur',
'price' => 10 
]);
$product->save();

$product = new \App\Product([
'imagePath' => 'Fashions/1 (10).jpg',
'title' => 'Binary',
'description' => 'Lorem ipsum dolor sit amet consectetur',
'price' => 10 
]);

$product->save();

//Gaming
$product = new \App\Product([
    'imagePath' => 'Gaming/1 (1).jpg',
   'title' => 'Binary',
   'description' => 'Lorem ipsum dolor sit amet consectetur',
   'price' => 10 
  ]);
  $product->save();
$product = new \App\Product([
     'imagePath' => 'Gaming/1 (2).jpg',
     'title' => 'Microsoft-edge',
     'description' => 'Lorem ipsum dolor sit amet consectetur',
     'price' => 6 
]);
$product->save();

$product = new \App\Product([
    'imagePath' => 'Gaming/1 (3).jpg',
    'title' => 'Avast',
    'description' => 'Lorem ipsum dolor sit amet consectetur',
    'price' => 10 
]);
$product->save();

$product = new \App\Product([
'imagePath' => 'Gaming/1 (4).jpg',
'title' => 'Microsoft Windows 10',
'description' => 'Lorem ipsum dolor sit amet consectetur',
'price' => 10 
]);
$product->save();
$product = new \App\Product([
'imagePath' => 'Gaming/1 (5).jpg',
'title' => 'cyber security',
'description' => 'Lorem ipsum dolor sit amet consectetur',
'price' => 6 
]);
$product->save();

$product = new \App\Product([
'imagePath' => 'Gaming/1 (6).jpg',
'title' => 'Computer',
'description' => 'Lorem ipsum dolor sit amet consectetur',
'price' => 10 
]);
$product->save();

$product = new \App\Product([
'imagePath' => 'Gaming/1 (7).jpg',
'title' => 'Binary',
'description' => 'Lorem ipsum dolor sit amet consectetur',
'price' => 10 
]);
$product->save();

$product = new \App\Product([
'imagePath' => 'Gaming/1 (8).jpg',
'title' => 'Binary',
'description' => 'Lorem ipsum dolor sit amet consectetur',
'price' => 10 
]);
$product->save();

$product = new \App\Product([
'imagePath' => 'Gaming/1 (9).jpg',
'title' => 'Binary',
'description' => 'Lorem ipsum dolor sit amet consectetur',
'price' => 10 
]);
$product->save();

$product = new \App\Product([
'imagePath' => 'Gaming/1 (10).jpg',
'title' => 'Binary',
'description' => 'Lorem ipsum dolor sit amet consectetur',
'price' => 10 
]);

$product->save();

//Sporting Goods
$product = new \App\Product([
    'imagePath' => 'Sporting Goods/1 (1).jpg',
   'title' => 'Binary',
   'description' => 'Lorem ipsum dolor sit amet consectetur',
   'price' => 10 
  ]);
  $product->save();
$product = new \App\Product([
     'imagePath' => 'Sporting Goods/1 (2).jpg',
     'title' => 'Microsoft-edge',
     'description' => 'Lorem ipsum dolor sit amet consectetur',
     'price' => 6 
]);
$product->save();

$product = new \App\Product([
    'imagePath' => 'Sporting Goods/1 (3).jpg',
    'title' => 'Avast',
    'description' => 'Lorem ipsum dolor sit amet consectetur',
    'price' => 10 
]);
$product->save();

$product = new \App\Product([
'imagePath' => 'Sporting Goods/1 (4).jpg',
'title' => 'Microsoft Windows 10',
'description' => 'Lorem ipsum dolor sit amet consectetur',
'price' => 10 
]);
$product->save();
$product = new \App\Product([
'imagePath' => 'Sporting Goods/1 (5).jpg',
'title' => 'cyber security',
'description' => 'Lorem ipsum dolor sit amet consectetur',
'price' => 6 
]);
$product->save();

$product = new \App\Product([
'imagePath' => 'Sporting Goods/1 (6).jpg',
'title' => 'Computer',
'description' => 'Lorem ipsum dolor sit amet consectetur',
'price' => 10 
]);
$product->save();

$product = new \App\Product([
'imagePath' => 'Sporting Goods/1 (7).jpg',
'title' => 'Binary',
'description' => 'Lorem ipsum dolor sit amet consectetur',
'price' => 10 
]);
$product->save();

$product = new \App\Product([
'imagePath' => 'Sporting Goods/1 (8).jpg',
'title' => 'Binary',
'description' => 'Lorem ipsum dolor sit amet consectetur',
'price' => 10 
]);
$product->save();

$product = new \App\Product([
'imagePath' => 'Sporting Goods/1 (9).jpg',
'title' => 'Binary',
'description' => 'Lorem ipsum dolor sit amet consectetur',
'price' => 10 
]);
$product->save();

$product = new \App\Product([
'imagePath' => 'Sporting Goods/1 (10).jpg',
'title' => 'Binary',
'description' => 'Lorem ipsum dolor sit amet consectetur',
'price' => 10 
]);

$product->save();

//Home and Office
$product = new \App\Product([
    'imagePath' => 'Home and Office/1 (1).jpg',
   'title' => 'Binary',
   'description' => 'Lorem ipsum dolor sit amet consectetur',
   'price' => 10 
  ]);
  $product->save();
$product = new \App\Product([
     'imagePath' => 'Home and Office/1 (2).jpg',
     'title' => 'Microsoft-edge',
     'description' => 'Lorem ipsum dolor sit amet consectetur',
     'price' => 6 
]);
$product->save();

$product = new \App\Product([
    'imagePath' => 'Home and Office/1 (3).jpg',
    'title' => 'Avast',
    'description' => 'Lorem ipsum dolor sit amet consectetur',
    'price' => 10 
]);
$product->save();

$product = new \App\Product([
'imagePath' => 'Home and Office/1 (4).jpg',
'title' => 'Microsoft Windows 10',
'description' => 'Lorem ipsum dolor sit amet consectetur',
'price' => 10 
]);
$product->save();
$product = new \App\Product([
'imagePath' => 'Home and Office/1 (5).jpg',
'title' => 'cyber security',
'description' => 'Lorem ipsum dolor sit amet consectetur',
'price' => 6 
]);
$product->save();

$product = new \App\Product([
'imagePath' => 'Home and Office/1 (6).jpg',
'title' => 'Computer',
'description' => 'Lorem ipsum dolor sit amet consectetur',
'price' => 10 
]);
$product->save();

$product = new \App\Product([
'imagePath' => 'Home and Office/1 (7).jpg',
'title' => 'Binary',
'description' => 'Lorem ipsum dolor sit amet consectetur',
'price' => 10 
]);
$product->save();

$product = new \App\Product([
'imagePath' => 'Home and Office/1 (8).jpg',
'title' => 'Binary',
'description' => 'Lorem ipsum dolor sit amet consectetur',
'price' => 10 
]);
$product->save();

$product = new \App\Product([
'imagePath' => 'Home and Office/1 (9).jpg',
'title' => 'Binary',
'description' => 'Lorem ipsum dolor sit amet consectetur',
'price' => 10 
]);
$product->save();

$product = new \App\Product([
'imagePath' => 'Home and Office/1 (10).jpg',
'title' => 'Binary',
'description' => 'Lorem ipsum dolor sit amet consectetur',
'price' => 10 
]);

$product->save();


//Garden outdoors
$product = new \App\Product([
    'imagePath' => 'Garden outdoors/1 (1).jpg',
   'title' => 'Binary',
   'description' => 'Lorem ipsum dolor sit amet consectetur',
   'price' => 10 
  ]);
  $product->save();
$product = new \App\Product([
     'imagePath' => 'Garden outdoors/1 (2).jpg',
     'title' => 'Microsoft-edge',
     'description' => 'Lorem ipsum dolor sit amet consectetur',
     'price' => 6 
]);
$product->save();

$product = new \App\Product([
    'imagePath' => 'Garden outdoors/1 (3).jpg',
    'title' => 'Avast',
    'description' => 'Lorem ipsum dolor sit amet consectetur',
    'price' => 10 
]);
$product->save();

$product = new \App\Product([
'imagePath' => 'Garden outdoors/1 (4).jpg',
'title' => 'Microsoft Windows 10',
'description' => 'Lorem ipsum dolor sit amet consectetur',
'price' => 10 
]);
$product->save();
$product = new \App\Product([
'imagePath' => 'Garden outdoors/1 (5).jpg',
'title' => 'cyber security',
'description' => 'Lorem ipsum dolor sit amet consectetur',
'price' => 6 
]);
$product->save();

$product = new \App\Product([
'imagePath' => 'Garden outdoors/1 (6).jpg',
'title' => 'Computer',
'description' => 'Lorem ipsum dolor sit amet consectetur',
'price' => 10 
]);
$product->save();

$product = new \App\Product([
'imagePath' => 'Garden outdoors/1 (7).jpg',
'title' => 'Binary',
'description' => 'Lorem ipsum dolor sit amet consectetur',
'price' => 10 
]);
$product->save();

$product = new \App\Product([
'imagePath' => 'Garden outdoors/1 (8).jpg',
'title' => 'Binary',
'description' => 'Lorem ipsum dolor sit amet consectetur',
'price' => 10 
]);
$product->save();

$product = new \App\Product([
'imagePath' => 'Garden outdoors/1 (9).jpg',
'title' => 'Binary',
'description' => 'Lorem ipsum dolor sit amet consectetur',
'price' => 10 
]);
$product->save();

$product = new \App\Product([
'imagePath' => 'Garden outdoors/1 (10).jpg',
'title' => 'Binary',
'description' => 'Lorem ipsum dolor sit amet consectetur',
'price' => 10 
]);

//$product->save();

//\App\Product::truncate();

    }



}
