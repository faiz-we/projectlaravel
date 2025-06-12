<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FashionController extends Controller
{
    public function home()
    {
        $featuredProducts = [
            [
                'id' => 1,
                'name' => 'Varsity Jacket',
                'price' => '250K Rp',
                'image' => 'Haruja.jpeg',
                'is_new' => true
            ],
            [
                'id' => 2,
                'name' => 'Nike Air Max',
                'price' => '$1,2JT Rp',
                'image' => 'product2.jpg',
                'is_new' => false
            ],
            [
                'id' => 3,
                'name' => 'Backpack',
                'price' => '150K Rp',
                'image' => 'product3.jpg',
                'is_new' => true
            ]
        ];

        return view('home', ['featuredProducts' => $featuredProducts]);
    }

    public function products()
    {
        $allProducts = [
            [
                'id' => 1,
                'name' => 'Hoodie Jacket',
                'price' => '235K Rp',
                'image' => 'product1.jpg',
                'category' => 'outerwear'
            ],
            [
                'id' => 2,
                'name' => 'Adidas sandals',
                'price' => '450K Rp',
                'image' => 'product2.jpg',
                'category' => 'footwear'
            ],
            [
                'id' => 3,
                'name' => 'Batik',
                'price' => '345K Rp',
                'image' => 'product3.jpg',
                'category' => 'accessories'
            ],
            [
                'id' => 4,
                'name' => 'Graphic T-Shirt',
                'price' => '200K Rp',
                'image' => 'product1.jpg', // Using same image for demo
                'category' => 'tops'
            ],
            [
                'id' => 5,
                'name' => 'Slim Fit Jeans',
                'price' => '300K Rp',
                'image' => 'product2.jpg', // Using same image for demo
                'category' => 'bottoms'
            ],
            [
                'id' => 6,
                'name' => 'Baseball Cap',
                'price' => '100K Rp',
                'image' => 'product3.jpg', // Using same image for demo
                'category' => 'accessories'
            ]
        ];

        return view('products', ['products' => $allProducts]);
    }

    public function about()
    {
        $teamMembers = [
            ['name' => 'Tiara Basori', 'position' => 'Founder', 'bio' => 'Fashion is art.'],
            ['name' => 'Hitori Gotou', 'position' => 'Marketing', 'bio' => 'I-I dont know wwhat to say.'],
            ['name' => 'Nakano Nino', 'position' => 'Supervisor', 'bio' => 'You better take responsibility..']
        ];

        return view('about', ['team' => $teamMembers]);
    }

    public function contact()
    {
        $contactInfo = [
            'email' => 'Duniafashion@gmail.com',
            'phone' => '+62 357 2425 2421',
            'address' => 'Streets. Fashion No. 123, Yogyakarta, Indonesia',
        ];

        return view('contact', ['contact' => $contactInfo]);
    }
}
