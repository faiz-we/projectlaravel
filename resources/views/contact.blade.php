@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')

    <section class="contact-hero">
        <div class="container">
            <h1>Get In Touch</h1>
        </div>
    </section>

    <section class="contact-content">
        <div class="container">
            <div class="contact-grid" role="main">
                <aside class="contact-info" aria-label="Contact Information">
                    <h2>Contact Information</h2>
                    <ul>
                        <li><strong>Email:</strong> {{ $contact['email'] }}</li>
                        <li><strong>Phone:</strong> {{ $contact['phone'] }}</li>
                        <li><strong>Address:</strong> {{ $contact['address'] }}</li>
                    </ul>

                    <h3>Business Hours</h3>
                    <p>Monday - Friday: 9:00 AM - 6:00 PM</p>
                    <p>Saturday: 10:00 AM - 4:00 PM</p>
                    <p>Sunday: Closed</p>
                </aside>

                <section class="contact-form" aria-label="Send a message form">
                    <h2>Send Us a Message</h2>
                    <form novalidate>
                        <div class="form-group">
                            <label for="name">Name<span aria-hidden="true">*</span></label>
                            <input type="text" id="name" name="name" required aria-required="true" aria-describedby="nameNote">
                            <span id="nameNote" class="sr-only">Required</span>
                        </div>
                        <div class="form-group">
                            <label for="email">Email<span aria-hidden="true">*</span></label>
                            <input type="email" id="email" name="email" required aria-required="true" aria-describedby="emailNote">
                            <span id="emailNote" class="sr-only">Required</span>
                        </div>
                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <input type="text" id="subject" name="subject" aria-describedby="subjectNote">
                            <span id="subjectNote" class="sr-only">Optional</span>
                        </div>
                        <div class="form-group">
                            <label for="message">Message<span aria-hidden="true">*</span></label>
                            <textarea id="message" name="message" rows="5" required aria-required="true" aria-describedby="messageNote"></textarea>
                            <span id="messageNote" class="sr-only">Required</span>
                        </div>
                        <button type="submit" class="btn" aria-label="Send message button">Send Message</button>
                    </form>
                </section>
            </div>
        </div>
    </section>
    <style>
        :root {
            --primary-color: #3a86ff;
            --primary-dark: #265bb5;
            --accent-color: #ffbe0b;
            --background-light: #f0f4f8;
            --text-dark: #1e1e2f;
            --text-muted: #555a7b;
            --border-color: #d1d9e6;
        }

        /* Animations */
        @keyframes slideInFromBottom {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes buttonGlow {
            0%, 100% {
                box-shadow: 0 0 8px var(--accent-color);
            }
            50% {
                box-shadow: 0 0 20px var(--accent-color);
            }
        }

        body {
            background-color: var(--background-light);
            color: var(--text-dark);
            font-family: 'Poppins', sans-serif;
            margin: 0;
        }

        .container {
            max-width: 1100px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .contact-hero {
            background-image: linear-gradient(120deg, var(--primary-color) 0%, var(--accent-color) 100%);
            color: white;
            text-align: center;
            padding: 120px 20px;
            animation: slideInFromBottom 0.8s ease forwards;
        }

        .contact-hero h1 {
            font-size: 3.5rem;
            font-weight: 900;
            letter-spacing: 1.2px;
            margin: 0;
            user-select: none;
        }

        .contact-content {
            padding: 60px 0;
            animation: slideInFromBottom 1s ease forwards;
        }

        .contact-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 48px;
        }

        @media (max-width: 768px) {
            .contact-grid {
                grid-template-columns: 1fr;
            }
        }

        .contact-info, .contact-form {
            background: white;
            padding: 40px 30px;
            border-radius: 16px;
            box-shadow: 0 6px 18px rgba(58, 134, 255, 0.15);
            border: 1px solid var(--border-color);
            transition: box-shadow 0.3s ease;
        }

        .contact-info:hover, .contact-form:hover {
            box-shadow: 0 12px 24px rgba(58, 134, 255, 0.25);
        }

        .contact-info h2, .contact-form h2 {
            font-size: 2.2rem;
            font-weight: 700;
            margin-bottom: 24px;
            color: var(--primary-dark);
            user-select: none;
        }

        .contact-info ul {
            list-style: none;
            padding: 0;
            margin: 0 0 36px 0;
            color: var(--text-muted);
            font-size: 1.1rem;
            line-height: 1.7;
        }

        .contact-info ul li {
            margin-bottom: 14px;
        }

        .contact-info ul li strong {
            color: var(--primary-color);
            width: 90px;
            display: inline-block;
            user-select: text;
        }

        .contact-info h3 {
            font-size: 1.8rem;
            color: var(--primary-color);
            margin-bottom: 12px;
            user-select: none;
        }

        .contact-info p {
            font-size: 1rem;
            color: var(--text-muted);
            margin: 4px 0;
            user-select: text;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        .form-group {
            margin-bottom: 20px;
            user-select: none;
        }

        label {
            display: inline-block;
            margin-bottom: 8px;
            font-weight: 600;
            color: var(--primary-dark);
            font-size: 1rem;
            cursor: pointer;
            user-select: text;
        }

        input[type="text"], input[type="email"], textarea {
            width: 100%;
            padding: 14px 18px;
            border-radius: 12px;
            border: 1.8px solid var(--border-color);
            font-size: 1rem;
            font-family: 'Poppins', sans-serif;
            color: var(--text-dark);
            background-color: #fff;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
            user-select: text;
        }

        input[type="text"]:focus, input[type="email"]:focus, textarea:focus {
            border-color: var(--primary-color);
            outline: none;
            box-shadow: 0 0 10px var(--primary-color);
        }

        textarea {
            resize: vertical;
            min-height: 110px;
        }

        button.btn {
            background-color: var(--primary-color);
            border: none;
            color: white;
            font-size: 1.25rem;
            padding: 14px 0;
            border-radius: 14px;
            font-weight: 700;
            cursor: pointer;
            user-select: none;
            transition: background-color 0.3s ease, box-shadow 0.6s ease-in-out;
            animation: buttonGlow 3s ease-in-out infinite;
            box-shadow: 0 0 8px var(--accent-color);
            letter-spacing: 0.06em;
            letter-spacing: 1px;
        }

        button.btn:hover, button.btn:focus {
            background-color: var(--primary-dark);
            animation-play-state: paused;
            box-shadow: 0 0 20px var(--accent-color);
            outline: none;
        }


        input:focus-visible, textarea:focus-visible, button:focus-visible {
            outline: 3px solid var(--accent-color);
            outline-offset: 4px;
        }
    </style>

@endsection

