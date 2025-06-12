@extends('layouts.app')

@section('title', 'About Us')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">

    <!-- Hero Section -->
    <section class="about-hero">
        <div class="container">
            <h1>Our Story</h1>
            <p class="subtitle">Discover how we started and where we're headed in fashion.</p>
        </div>
    </section>

    <!-- About Content -->
    <section class="about-content">
        <div class="container">
            <h2>Who We Are</h2>
            <p>
                Founded in 2010, Fashion Site has been at the forefront of contemporary fashion, blending style with comfort and sustainability. Our mission is to provide high-quality, fashionable clothing that doesn't compromise on ethics or the environment.
            </p>
            <p>
                From our humble beginnings as a small boutique to becoming a recognized name in fashion, we've stayed true to our core values of innovation, quality, and customer satisfaction.
            </p>
        </div>
    </section>

    <!-- Team Section -->
    <section class="team-section">
        <div class="container">
            <h2>Meet The Team</h2>
            <div class="team-grid">
                @foreach($team as $index => $member)
                    <div class="team-card">
                        <div class="team-photo">
                            @php
                                $photos = [
                                    'Tiara Basori.jpeg',
                                    'bochi.jpeg',
                                    'Nino _3.jpeg',

                                ];
                                $photoUrl = $photos[$index] ?? 'https://via.placeholder.com/150';
                            @endphp
                            <img src="{{ $photoUrl }}" alt="{{ $member['name'] }}">
                        </div>
                        <h3>{{ $member['name'] }}</h3>
                        <p class="position">{{ $member['position'] }}</p>
                        <p class="bio">{{ $member['bio'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <style>
        /* General Reset & Fonts */
        body {
            font-family: 'Segoe UI', sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
            line-height: 1.6;
            background-color: #f7f9fc;
        }

        .container {
            max-width: 1100px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Hero Section */
        .about-hero {
            background: linear-gradient(to right, #6a82fb, #fc5c7d);
            color: white;
            text-align: center;
            padding: 80px 20px;
            animation: fadeIn 1s ease-in-out;
        }

        .about-hero h1 {
            font-size: 3em;
            margin-bottom: 10px;
            animation: slideIn 0.5s ease forwards;
        }

        .about-hero .subtitle {
            font-size: 1.2em;
            opacity: 0.9;
        }

        /* About Content */
        .about-content {
            padding: 60px 20px;
            background: #ffffff;
            text-align: center;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 12px;
            animation: fadeIn 1s ease-in-out;
        }

        .about-content h2 {
            font-size: 2em;
            margin-bottom: 20px;
            color: #6a82fb;
        }

        .about-content p {
            max-width: 800px;
            margin: 10px auto;
            font-size: 1.05em;
            color: #555;
        }

        /* Team Section */
        .team-section {
            background-color: #f2f2f2;
            padding: 60px 20px;
        }

        .team-section h2 {
            text-align: center;
            font-size: 2em;
            margin-bottom: 40px;
            color: #6a82fb;
        }

        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 30px;
        }

        .team-card {
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            animation: fadeIn 1s ease-in-out;
        }

        .team-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }

        .team-photo {
            width: 100px;
            height: 100px;
            margin: 0 auto 15px;
            overflow: hidden;
            border-radius: 50%;
            background: #ddd;
        }

        .team-photo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .team-card h3 {
            margin: 10px 0 5px;
            font-size: 1.2em;
            color: #333;
        }

        .position {
            font-style: italic;
            color: #6a82fb;
            margin-bottom: 10px;
        }

        .bio {
            font-size: 0.95em;
            color: #555;
        }

        /* Animations */
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @keyframes slideIn {
            from {
                transform: translateY(-20px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }
    </style>
@endsection

