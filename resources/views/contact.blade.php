@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
    <section class="contact-hero">
        <div class="container">
            <div class="hero-content" data-aos="fade-up">
                <h1 class="hero-title">Let's Connect</h1>
                <p class="hero-subtitle">We'd love to hear from you! Reach out with questions, feedback, or just to say hello.</p>
            </div>
        </div>
    </section>

    <section class="contact-content">
        <div class="container">
            <div class="contact-grid">
                <div class="contact-info" data-aos="fade-right">
                    <div class="info-card">
                        <h2 class="section-title">Contact Information</h2>

                        <div class="contact-method">
                            <div class="contact-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                    <polyline points="22,6 12,13 2,6"></polyline>
                                </svg>
                            </div>
                            <div class="contact-detail">
                                <h3>Email</h3>
                                <a href="mailto:{{ $contact['email'] }}">{{ $contact['email'] }}</a>
                            </div>
                        </div>

                        <div class="contact-method">
                            <div class="contact-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                                </svg>
                            </div>
                            <div class="contact-detail">
                                <h3>Phone</h3>
                                <a href="tel:{{ $contact['phone'] }}">{{ $contact['phone'] }}</a>
                            </div>
                        </div>

                        <div class="contact-method">
                            <div class="contact-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                    <circle cx="12" cy="10" r="3"></circle>
                                </svg>
                            </div>
                            <div class="contact-detail">
                                <h3>Address</h3>
                                <address>{{ $contact['address'] }}</address>
                            </div>
                        </div>
                    </div>

                    <div class="hours-card">
                        <h3 class="hours-title">Business Hours</h3>
                        <ul class="hours-list">
                            <li>
                                <span>Monday - Friday</span>
                                <span>9:00 AM - 6:00 PM</span>
                            </li>
                            <li>
                                <span>Saturday</span>
                                <span>10:00 AM - 4:00 PM</span>
                            </li>
                            <li>
                                <span>Sunday</span>
                                <span>Closed</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="contact-form" data-aos="fade-left">
                    <div class="form-card">
                        <h2 class="section-title">Send Us a Message</h2>
                        <form class="message-form">
                            <div class="form-group">
                                <input type="text" id="name" name="name" required>
                                <label for="name">Your Name</label>
                                <span class="underline"></span>
                            </div>
                            <div class="form-group">
                                <input type="email" id="email" name="email" required>
                                <label for="email">Email Address</label>
                                <span class="underline"></span>
                            </div>
                            <div class="form-group">
                                <input type="text" id="subject" name="subject">
                                <label for="subject">Subject</label>
                                <span class="underline"></span>
                            </div>
                            <div class="form-group">
                                <textarea id="message" name="message" rows="5" required></textarea>
                                <label for="message">Your Message</label>
                                <span class="underline"></span>
                            </div>
                            <button type="submit" class="btn btn-primary">
                                <span>Send Message</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <line x1="22" y1="2" x2="11" y2="13"></line>
                                    <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        :root {
            --primary: #4361ee;
            --primary-light: #4895ef;
            --secondary: #3f37c9;
            --dark: #1a1a2e;
            --light: #f8f9fa;
            --gray: #6c757d;
            --light-gray: #e9ecef;
            --white: #ffffff;
            --black: #212529;
            --transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
        }

        /* Hero Section */
        .contact-hero {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: var(--white);
            padding: 100px 0;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .hero-content {
            max-width: 800px;
            margin: 0 auto;
        }

        .hero-title {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
            line-height: 1.2;
        }

        .hero-subtitle {
            font-size: 1.25rem;
            opacity: 0.9;
            max-width: 600px;
            margin: 0 auto;
        }

        /* Contact Content */
        .contact-content {
            padding: 80px 0;
            background-color: var(--light);
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .contact-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
        }

        /* Contact Info */
        .contact-info {
            display: flex;
            flex-direction: column;
            gap: 30px;
        }

        .info-card, .hours-card, .form-card {
            background: var(--white);
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: var(--transition);
        }

        .info-card:hover, .hours-card:hover, .form-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .section-title {
            font-size: 2rem;
            color: var(--dark);
            margin-bottom: 1.5rem;
            position: relative;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 50px;
            height: 3px;
            background: var(--primary);
        }

        .contact-method {
            display: flex;
            align-items: flex-start;
            gap: 15px;
            margin-bottom: 25px;
        }

        .contact-icon {
            width: 50px;
            height: 50px;
            background: rgba(67, 97, 238, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            color: var(--primary);
        }

        .contact-icon svg {
            width: 24px;
            height: 24px;
        }

        .contact-detail h3 {
            font-size: 1.1rem;
            margin-bottom: 5px;
            color: var(--dark);
        }

        .contact-detail a, .contact-detail address {
            color: var(--gray);
            text-decoration: none;
            font-style: normal;
            transition: var(--transition);
        }

        .contact-detail a:hover {
            color: var(--primary);
        }

        /* Hours Card */
        .hours-title {
            font-size: 1.5rem;
            margin-bottom: 1.5rem;
            color: var(--dark);
        }

        .hours-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .hours-list li {
            display: flex;
            justify-content: space-between;
            padding: 12px 0;
            border-bottom: 1px solid var(--light-gray);
        }

        .hours-list li:last-child {
            border-bottom: none;
        }

        /* Contact Form */
        .contact-form {
            position: relative;
        }

        .message-form {
            display: flex;
            flex-direction: column;
            gap: 25px;
        }

        .form-group {
            position: relative;
        }

        .form-group input, .form-group textarea {
            width: 100%;
            padding: 15px 0 5px 0;
            border: none;
            border-bottom: 1px solid var(--light-gray);
            font-size: 1rem;
            background: transparent;
            transition: var(--transition);
        }

        .form-group textarea {
            resize: vertical;
            min-height: 100px;
        }

        .form-group label {
            position: absolute;
            top: 15px;
            left: 0;
            color: var(--gray);
            pointer-events: none;
            transition: var(--transition);
        }

        .form-group .underline {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--primary);
            transition: var(--transition);
        }

        .form-group input:focus, .form-group textarea:focus {
            outline: none;
            border-bottom-color: transparent;
        }

        .form-group input:focus ~ .underline,
        .form-group textarea:focus ~ .underline {
            width: 100%;
        }

        .form-group input:focus ~ label,
        .form-group textarea:focus ~ label,
        .form-group input:valid ~ label,
        .form-group textarea:valid ~ label {
            top: -5px;
            font-size: 0.8rem;
            color: var(--primary);
        }

        /* Button */
        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            padding: 12px 24px;
            border-radius: 8px;
            font-weight: 600;
            text-decoration: none;
            transition: var(--transition);
            cursor: pointer;
            border: none;
        }

        .btn-primary {
            background: var(--primary);
            color: var(--white);
            align-self: flex-start;
        }

        .btn-primary:hover {
            background: var(--secondary);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(67, 97, 238, 0.3);
        }

        .btn svg {
            width: 16px;
            height: 16px;
        }

        /* Animations */
        [data-aos] {
            transition: opacity 0.5s ease, transform 0.5s ease;
        }

        [data-aos="fade-up"] {
            transform: translateY(20px);
            opacity: 0;
        }

        [data-aos="fade-right"] {
            transform: translateX(-20px);
            opacity: 0;
        }

        [data-aos="fade-left"] {
            transform: translateX(20px);
            opacity: 0;
        }

        [data-aos].aos-animate {
            transform: translate(0);
            opacity: 1;
        }

        /* Responsive */
        @media (max-width: 992px) {
            .contact-grid {
                grid-template-columns: 1fr;
            }

            .hero-title {
                font-size: 2.5rem;
            }
        }

        @media (max-width: 576px) {
            .contact-hero {
                padding: 80px 0;
            }

            .hero-title {
                font-size: 2rem;
            }

            .hero-subtitle {
                font-size: 1rem;
            }

            .info-card, .hours-card, .form-card {
                padding: 20px;
            }
        }
    </style>

    <!-- Animation on Scroll -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Simple AOS implementation
            const aosElements = document.querySelectorAll('[data-aos]');

            const animateOnScroll = function() {
                aosElements.forEach(element => {
                    const elementPosition = element.getBoundingClientRect().top;
                    const windowHeight = window.innerHeight;

                    if (elementPosition < windowHeight - 100) {
                        element.classList.add('aos-animate');
                    }
                });
            };

            window.addEventListener('scroll', animateOnScroll);
            animateOnScroll(); // Run once on load
        });
    </script>
@endsection
