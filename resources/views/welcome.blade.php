<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Content Management System</title>
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif; }
        body { background-color: #f3f4f6; color: #1f2937; min-height: 100vh; display: flex; flex-direction: column; justify-content: space-between; }
        header { width: 100%; max-width: 1200px; margin: 0 auto; padding: 20px; display: flex; justify-content: space-between; align-items: center; }
        .logo { font-weight: 700; font-size: 1.125rem; color: #111827; text-decoration: none; display: flex; align-items: center; gap: 8px; }
        .nav-links { display: flex; gap: 12px; align-items: center; }
        .nav-link { font-weight: 600; font-size: 0.875rem; color: #4b5563; text-decoration: none; padding: 6px 12px; border-radius: 6px; }
        .nav-link:hover { color: #111827; }
        .btn-primary { background-color: #4f46e5; color: #ffffff !important; font-weight: 600; font-size: 0.875rem; text-decoration: none; padding: 10px 20px; border-radius: 8px; display: inline-block; transition: background-color 0.2s; }
        .btn-primary:hover { background-color: #4338ca; }
        main { flex-grow: 1; display: flex; align-items: center; justify-content: center; padding: 20px; }
        .card { background-color: #ffffff; border-radius: 16px; border: 1px solid #e5e7eb; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05); padding: 32px 24px; max-width: 480px; width: 100%; text-align: center; }
        .card-icon { width: 48px; height: 48px; color: #4f46e5; margin: 0 auto 16px auto; }
        .card h1 { font-size: 1.5rem; font-weight: 800; color: #111827; margin-bottom: 12px; line-height: 1.2; }
        .card p { font-size: 0.875rem; color: #6b7280; line-height: 1.5; margin-bottom: 24px; }
        footer { padding: 20px; text-align: center; font-size: 0.75rem; color: #9ca3af; }
    </style>
</head>
<body>

    <!-- Header Navigation -->
    <header>
        <a href="/" class="logo">
            <svg class="card-icon" style="width:28px; height:28px; margin:0;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
            </svg>
            <span>Laravel CMS</span>
        </a>

        <nav class="nav-links">
            @auth
                <a href="{{ url('/dashboard') }}" class="nav-link">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="nav-link">Log in</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="btn-primary" style="padding: 6px 14px; font-size: 0.8125rem;">Register</a>
                @endif
            @endauth
        </nav>
    </header>

    <!-- Main Card Section -->
    <main>
        <div class="card">
            <svg class="card-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
            </svg>
            
            <h1>Content Management System</h1>
            <p>A lightweight Laravel application for managing posts and categories built with Blade, Eloquent, and Laravel Breeze.</p>

            <div>
                @auth
                    <a href="{{ route('posts.index') }}" class="btn-primary">Go to Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="btn-primary">Get Started</a>
                @endauth
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer>
        Laravel CMS &bull; Built with Laravel 11 & Breeze
    </footer>

</body>
</html>