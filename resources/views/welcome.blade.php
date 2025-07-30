<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>FaszomTove2</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            * {
                box-sizing: border-box;
            }

            body {
                font-family: Figtree, ui-sans-serif, system-ui, sans-serif;
                font-weight: 400;
                height: 100vh;
                margin: 0;
                background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
                display: flex;
                align-items: center;
                justify-content: center;
                color: white;
            }

            .container {
                text-align: center;
                max-width: 600px;
                padding: 2rem;
            }

            .logo {
                font-size: 3rem;
                font-weight: 600;
                margin-bottom: 1rem;
                text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
            }

            .subtitle {
                font-size: 1.25rem;
                margin-bottom: 2rem;
                opacity: 0.9;
            }

            .welcome-text {
                font-size: 1.1rem;
                line-height: 1.6;
                margin-bottom: 2rem;
            }

            .links {
                display: flex;
                justify-content: center;
                gap: 2rem;
                flex-wrap: wrap;
            }

            .link {
                color: white;
                text-decoration: none;
                padding: 0.75rem 1.5rem;
                border: 2px solid rgba(255,255,255,0.3);
                border-radius: 8px;
                transition: all 0.3s ease;
                backdrop-filter: blur(10px);
            }

            .link:hover {
                background: rgba(255,255,255,0.1);
                border-color: rgba(255,255,255,0.6);
                transform: translateY(-2px);
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="logo">🌟 FaszomTove2</div>
            <div class="subtitle">Laravel alkalmazás készen áll!</div>
            <div class="welcome-text">
                Üdvözöllek a FaszomTove2 Laravel projektben! 🚀<br>
                Az alkalmazás sikeresen felállt és működésre kész.
            </div>
            <div class="links">
                <a href="/home" class="link">Főoldal</a>
                <a href="/kapcsolat" class="link">Kapcsolat</a>
                <a href="https://laravel.com/docs" class="link" target="_blank">Laravel Docs</a>
            </div>
        </div>
    </body>
</html>