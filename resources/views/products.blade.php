@extends('layouts.app')

@section('title', 'Products')

@section('content')
    <section class="products-header">
        <div class="container">
            <h1>Our Products</h1>
            <div class="filter-options">
                <select>
                    <option value="">All Categories</option>
                    <option value="tops">Tops</option>
                    <option value="bottoms">Bottoms</option>
                    <option value="footwear">Footwear</option>
                    <option value="outerwear">Outerwear</option>
                    <option value="accessories">Accessories</option>
                </select>
                <select>
                    <option value="">Sort By</option>
                    <option value="price-low">Price: Low to High</option>
                    <option value="price-high">Price: High to Low</option>
                    <option value="newest">Newest</option>
                </select>
            </div>
        </div>
    </section>

    <section class="all-products">
        <div class="container">
            <div class="product-grid">
                <!-- Product 1 -->
                <div class="product-card">
                    <img src="TOPI.jpeg" alt="Summer Collection" width="300" height="400">
                    <h3>Topi</h3>
                    <p class="price">RP150.000</p>
                    <button class="btn btn-secondary">Add to Cart</button>
                </div>

                <!-- Product 2 -->
                <div class="product-card">
                    <img src="OUTERLAKI.jpeg" alt="Casual Outfit" width="300" height="400">
                    <h3>Brown Jacket</h3>
                    <p class="price">RP200.000</p>
                    <button class="btn btn-secondary">Add to Cart</button>
                </div>

                <!-- Product 3 -->
                <div class="product-card">
                    <img src="BACKPACK.jpeg" alt="Luxury Dress" width="300" height="400">
                    <h3>Modern Backpack</h3>
                    <p class="price">RP165.000</p>
                    <button class="btn btn-secondary">Add to Cart</button>
                </div>
            </div>
        </div>
    </section>

    <style>
        .products-header {
            padding: 40px 0;
            text-align: center;
            background: #f8f9fa;
        }

        .products-header h1 {
            margin-bottom: 20px;
            font-size: 2.5rem;
            color: #14213d;
        }

        .filter-options {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 20px;
        }

        .filter-options select {
            padding: 10px 15px;
            border-radius: 5px;
            border: 1px solid #ddd;
            background: white;
        }

        .all-products {
            padding: 40px 0;
        }

        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 30px;
            padding: 20px 0;
        }

        .product-card {
            border: 1px solid #eee;
            border-radius: 8px;
            overflow: hidden;
            transition: transform 0.3s ease;
            background: white;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .product-card img {
            width: 100%;
            height: 300px;
            object-fit: cover;
            border-bottom: 1px solid #eee;
        }

        .product-card h3 {
            padding: 15px 15px 5px;
            font-size: 1.2rem;
            color: #333;
        }

        .product-card .price {
            padding: 0 15px 15px;
            font-weight: bold;
            color: #3a0ca3;
            font-size: 1.1rem;
        }

        .btn-secondary {
            display: block;
            width: calc(100% - 30px);
            margin: 0 15px 15px;
            padding: 10px;
            background: #14213d;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .btn-secondary:hover {
            background: #3a0ca3;
        }
    </style>
@endsection
