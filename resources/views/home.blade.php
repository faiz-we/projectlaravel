@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <section class="hero">
        <div class="container">
            <div class="hero-content" data-aos="fade-up">
                <h1 class="hero-title">Welcome to Dunia Fashion <br>With Our 2025 Collection</h1>
                <p class="hero-subtitle">Discover curated pieces that blend comfort with cutting-edge design</p>
                <div class="hero-cta">
                    <a href="{{ route('products') }}" class="btn btn-primary">Shop Now</a>
                    <a href="#featured" class="btn btn-outline">Explore</a>
                </div>
            </div>
        </div>
    </section>

    <section class="featured-products" id="featured">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2 class="section-title">Featured Collection</h2>
                <p class="section-subtitle">Handpicked selections for your wardrobe</p>
            </div>
            <div class="product-grid">
                <!-- kotak 1 -->
                <div class="product-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="product-badge">
                        <span class="new-badge">New Arrival</span>
                        <span class="discount-badge">-15%</span>
                    </div>
                  <div class="product-image">
                        <img src="{{ asset('Haruja.jpeg') }}" alt="Summer Collection" loading="lazy">
                    </div>
                    <div class="product-info">
                        <h3 class="product-name">Varsity Jacket</h3>
                        <div class="product-price">
                            <span class="original-price">RP450.000</span>
                            <span class="current-price">RP250.000</span>
                        </div>
                    </div>
                    <button class="btn btn-add-to-cart">Add to Cart</button>
                </div>

                <!-- kotak 2 -->
                <div class="product-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="product-badge">
                        <span class="new-badge">New Arrival</span>
                    </div>
                 <div class="product-image">
                        <img src="{{ asset('JEANS.jpeg') }}" alt="Summer Collection" loading="lazy">
                    </div>
                    <div class="product-info">
                        <h3 class="product-name">Celana Jeans</h3>
                        <div class="product-price">
                            <span class="current-price">RP235.000</span>
                        </div>
                    </div>
                    <button class="btn btn-add-to-cart">Add to Cart</button>
                </div>

                <!-- kotak 3 -->
                <div class="product-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="product-badge">
                        <span class="discount-badge">-20%</span>
                    </div>
                  <div class="product-image">
                        <img src="{{ asset('SEPATUNEW.jpeg') }}" alt="Summer Collection" loading="lazy">
                    </div>
                    <div class="product-info">
                        <h3 class="product-name">New balance</h3>
                        <div class="product-price">
                            <span class="original-price">RP.4.500.000</span>
                            <span class="current-price">RP.3.500.000</span>
                        </div>
                    </div>
                    <button class="btn btn-add-to-cart">Add to Cart</button>
                </div>
            </div>
            <div class="section-footer" data-aos="fade-up">
                <a href="{{ route('products') }}" class="btn btn-view-all">View All Products →</a>
            </div>
        </div>
    </section>

    <section class="cta-banner">
        <div class="container">
            <div class="cta-content" data-aos="fade-up">
                <h2 class="cta-title">Stay In The Loop</h2>
                <p class="cta-subtitle">Subscribe to get 15% off your first order and exclusive access to new collections</p>
                <form class="newsletter-form">
                    <input type="email" placeholder="Your email address" required>
                    <button type="submit" class="btn btn-primary">Subscribe</button>
                </form>
                <p class="form-note">We respect your privacy. Unsubscribe at any time.</p>
            </div>
        </div>
    </section>

    <style>
        :root {
            --primary: #3a0ca3;
            --secondary: #f72585;
            --dark: #14213d;
            --light: #f8f9fa;
            --white: #ffffff;
            --transition: all 0.3s ease;
        }

        .hero {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: var(--white);
            padding: 120px 0;
            position: relative;
        }

        .hero-content {
            max-width: 600px;
            z-index: 1;
        }

        .hero-title {
            font-size: 3rem;
            margin-bottom: 1rem;
        }

        .hero-cta {
            display: flex;
            gap: 1rem;
        }

        .featured-products {
            padding: 80px 0;
            background-color: var(--light);
        }

        .section-header {
            text-align: center;
            margin-bottom: 3rem;
        }

        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 30px;
        }

        .product-card {
            background: var(--white);
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: var(--transition);
            overflow: hidden;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .product-badge {
            position: absolute;
            top: 10px;
            right: 10px;
            display: flex;
            flex-direction: column;
            gap: 5px;
        }

        .new-badge {
            background: var(--secondary);
            color: white;
            padding: 3px 8px;
            border-radius: 4px;
            font-size: 0.8rem;
            font-weight: bold;
        }

        .discount-badge {
            background: var(--primary);
            color: white;
            padding: 3px 8px;
            border-radius: 4px;
            font-size: 0.8rem;
            font-weight: bold;
        }

        .product-image {
            position: relative;
        }

        .product-image img {
            width: 100%;
            height: 300px;
            object-fit: cover;
            border-radius: 12px 12px 0 0;
        }

        .product-info {
            padding: 1.5rem;
        }

        .product-name {
            font-size: 1.1rem;
            margin-bottom: 0.5rem;
        }

        .product-price {
            display: flex;
            gap: 8px;
            align-items: center;
        }

        .current-price {
            font-weight: bold;
            color: var(--primary);
            font-size: 1.2rem;
        }

        .original-price {
            text-decoration: line-through;
            color: #999;
            font-size: 0.9rem;
        }

        .btn-add-to-cart {
            width: 100%;
            padding: 0.75rem;
            background: var(--dark);
            color: white;
            border: none;
            cursor: pointer;
            transition: var(--transition);
        }

        .btn-add-to-cart:hover {
            background: var(--primary);
        }

        .btn {
            padding: 0.75rem 1.5rem;
            border-radius: 8px;
            font-weight: 600;
            text-align: center;
            transition: var(--transition);
            display: inline-block;
        }

        .btn-primary {
            background: var(--secondary);
            color: var(--white);
            border: none;
        }

        .btn-primary:hover {
            background: #e5177e;
        }

        .btn-outline {
            background: transparent;
            color: var(--white);
            border: 2px solid var(--white);
        }

        .btn-outline:hover {
            background: rgba(255, 255, 255, 0.1);
        }

        .btn-view-all {
            margin-top: 2rem;
            background: transparent;
            color: var(--primary);
            border: 2px solid var(--primary);
        }

        .btn-view-all:hover {
            background: var(--primary);
            color: white;
        }

        .cta-banner {
            padding: 80px 0;
            background: var(--dark);
            color: var(--white);
            text-align: center;
        }

        .newsletter-form {
            display: flex;
            justify-content: center;
            gap: 0.5rem;
            margin-top: 1rem;
            max-width: 500px;
            margin-left: auto;
            margin-right: auto;
        }

        .newsletter-form input {
            padding: 0.75rem 1rem;
            border-radius: 8px;
            border: none;
            flex-grow: 1;
            min-width: 0;
        }

        .form-note {
            font-size: 0.8rem;
            opacity: 0.7;
            margin-top: 1rem;
        }
    </style>

    
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init({ duration: 800, once: true });
        });
    </script>
@endsection
