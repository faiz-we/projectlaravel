<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fashion Site - @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <header class="site-header">
        <div class="container">
            <div class="header-content">
                <a href="{{ route('home') }}" class="logo">
                    <img src="{{ asset('Clothing shop logo to _ I_D FASHION STORE_.jpeg') }}" alt="Fashion Site Logo">
                </a>
                <nav class="main-nav">
                    <ul>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('products') }}">Products</a></li>
                        <li><a href="{{ route('about') }}">About</a></li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                    </ul>
                </nav>
                <div class="header-actions">
                    <button class="search-btn">Search</button>
                    <button class="cart-btn">Cart (0)</button>
                </div>
            </div>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="site-footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col">
                    <h3>Shop</h3>
                    <ul>
                        <li><a href="#">Men</a></li>
                        <li><a href="#">Women</a></li>
                        <li><a href="#">Kids</a></li>
                        <li><a href="#">Accessories</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h3>Help</h3>
                    <ul>
                        <li><a href="#">Customer Service</a></li>
                        <li><a href="#">Track Order</a></li>
                        <li><a href="#">Returns & Exchanges</a></li>
                        <li><a href="#">Shipping Info</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h3>About Us</h3>
                    <ul>
                        <li><a href="#">Our Story</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Sustainability</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h3>Connect</h3>
                    <div class="social-links">
                        <a href="#" class="social-icon">Instagram</a>
                        <a href="#" class="social-icon">Facebook</a>
                        <a href="#" class="social-icon">Twitter</a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2023 Fashion Site. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>
