@extends('layouts.app')

@section('title', 'About Us')

@section('content')
    <section class="about-hero">
        <div class="container">
            <h1 class="hero-title">Our Story</h1>
        </div>
    </section>

    <section class="about-content">
        <div class="container">
            <div class="about-text">
                <h2 class="section-title">Who We Are</h2>
                <p class="fade-in">Dunia Fashion is a vibrant and inspiring fashion store that has been serving style lovers since 2010. Founded in the heart of Yogyakarta, Indonesia, Dunia Fashion began as a small boutique with a big vision: to bring the latest fashion trends to everyone</p>
                <p class="fade-in">In its early years, Dunia Fashion mainly offered casual wear and traditional clothing such as batik dresses and modern kebaya. With limited space and a small team, the boutique focused on building a loyal customer base by providing high-quality products and personalized service.</p>
            </div>
        </div>
    </section>

    <section class="team-section">
        <div class="container">
            <h2 class="section-title">Meet The Team</h2>
            <div class="team-grid">
                <!-- Team Member 1 -->
                <div class="team-card" data-aos="fade-up">
                    <div class="team-photo" style="background-image: url('/Tiara basori.jpeg');"></div>
                    <h3>Sarah Johnson</h3>
                    <p class="position">Founder</p>
                    <p class="bio">Fashion is about art.</p>
                </div>

                <!-- Team Member 2 -->
                <div class="team-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="team-photo" style="background-image: url('/Bochi.jpeg');"></div>
                    <h3>Michael Chen</h3>
                    <p class="position">Marketing</p>
                    <p class="bio">I-I don't know what to say.</p>
                </div>

                <!-- Team Member 3 -->
                <div class="team-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="team-photo" style="background-image: url('/Nino _3.jpeg');"></div>
                    <h3>Emma Rodriguez</h3>
                    <p class="position">Supervisor</p>
                    <p class="bio">There has to be at least one person on Earth, who would love a tactless guy like you.</p>
                </div>
            </div>
        </div>
    </section>

    <style>
        :root {
            --primary: #6C63FF;
            --accent: #F6F7FB;
            --text-dark: #1f1f1f;
            --text-light: #5f5f5f;
            --white: #ffffff;
            --glass: rgba(255, 255, 255, 0.7);
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--accent);
            color: var(--text-dark);
            margin: 0;
            padding: 0;
            line-height: 1.7;
        }

        .about-hero {
            background: linear-gradient(135deg, var(--primary), #9e9dff);
            color: var(--white);
            padding: 120px 0;
            text-align: center;
        }

        .hero-title {
            font-size: 3.5rem;
            font-weight: 700;
            animation: fadeInUp 0.8s ease-out forwards;
        }

        .about-content {
            padding: 70px 20px;
            max-width: 800px;
            margin: 0 auto;
            text-align: center;
        }

        .section-title {
            font-size: 2.5rem;
            color: var(--primary);
            margin-bottom: 30px;
            position: relative;
        }

        .section-title::after {
            content: '';
            width: 60px;
            height: 4px;
            background: var(--primary);
            display: block;
            margin: 10px auto 0;
            border-radius: 2px;
        }

        .about-text p {
            margin-bottom: 20px;
            color: var(--text-light);
            font-size: 1.1rem;
        }

        .team-section {
            padding: 70px 20px;
        }

        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 40px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .team-card {
            background: var(--glass);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: transform 0.3s ease;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .team-card:hover {
            transform: translateY(-8px);
        }

        .team-photo {
            width: 110px;
            height: 110px;
            background-size: cover;
            background-position: center;
            border-radius: 50%;
            margin: 0 auto 15px;
            border: 4px solid var(--primary);
        }

        .team-card h3 {
            margin-top: 10px;
            font-size: 1.3rem;
            color: var(--text-dark);
        }

        .position {
            color: var(--primary);
            font-weight: 600;
            margin-bottom: 10px;
        }

        .bio {
            font-size: 0.95rem;
            color: var(--text-light);
        }

        /* Animation */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .fade-in {
            opacity: 0;
            animation: fadeInUp 0.6s ease-out forwards;
        }

        .fade-in:nth-child(1) {
            animation-delay: 0.2s;
        }

        .fade-in:nth-child(2) {
            animation-delay: 0.4s;
        }
    </style>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init({
                duration: 900,
                easing: 'ease-out-cubic',
                once: true
            });
        });
    </script>
@endsection
