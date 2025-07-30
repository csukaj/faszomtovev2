<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Főoldal - FaszomTove2</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <style>
            * {
                box-sizing: border-box;
            }

            body {
                font-family: Figtree, ui-sans-serif, system-ui, sans-serif;
                font-weight: 400;
                margin: 0;
                background: linear-gradient(135deg, #2d5a87 0%, #1a365d 100%);
                color: white;
                min-height: 100vh;
            }

            .header {
                background: rgba(0,0,0,0.2);
                padding: 1rem 2rem;
                backdrop-filter: blur(10px);
            }

            .header h1 {
                margin: 0;
                font-size: 2rem;
                font-weight: 600;
            }

            .container {
                max-width: 800px;
                margin: 2rem auto;
                padding: 2rem;
            }

            .card {
                background: rgba(255,255,255,0.1);
                border-radius: 12px;
                padding: 2rem;
                margin-bottom: 2rem;
                backdrop-filter: blur(20px);
                border: 1px solid rgba(255,255,255,0.2);
            }

            .card h2 {
                color: #ffd700;
                margin-top: 0;
            }

            .features {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
                gap: 1.5rem;
                margin-top: 2rem;
            }

            .feature {
                background: rgba(255,255,255,0.05);
                padding: 1.5rem;
                border-radius: 8px;
                border-left: 4px solid #ffd700;
            }

            .feature h3 {
                margin-top: 0;
                color: #ffd700;
            }

            .back-link {
                color: #ffd700;
                text-decoration: none;
                display: inline-block;
                margin-top: 2rem;
                padding: 0.5rem 1rem;
                border: 1px solid #ffd700;
                border-radius: 4px;
                transition: all 0.3s ease;
            }

            .back-link:hover {
                background: #ffd700;
                color: #1a365d;
            }
        </style>
    </head>
    <body>
        <div class="header">
            <h1>🏠 FaszomTove2 Főoldal</h1>
        </div>

        <div class="container">
            <div class="card">
                <h2>Üdvözöllek a főoldalon!</h2>
                <p>Ez a FaszomTove2 Laravel alkalmazás főoldala. Az alkalmazás sikeresen működik és minden funkció elérhető.</p>
                
                <div class="features">
                    <div class="feature">
                        <h3>⚡ Laravel Framework</h3>
                        <p>Modern PHP framework a legújabb funkcionalitásokkal.</p>
                    </div>
                    
                    <div class="feature">
                        <h3>🎨 Responsive Design</h3>
                        <p>Minden eszközön tökéletesen működő dizájn.</p>
                    </div>
                    
                    <div class="feature">
                        <h3>🚀 Gyors Betöltés</h3>
                        <p>Optimalizált kód a legjobb teljesítményért.</p>
                    </div>
                    
                    <div class="feature">
                        <h3>🔒 Biztonság</h3>
                        <p>Laravel beépített biztonsági funkciói.</p>
                    </div>
                </div>

                <a href="/" class="back-link">← Vissza a kezdőlapra</a>
                <a href="/kapcsolat" class="back-link" style="margin-left: 1rem;">📞 Kapcsolat</a>
            </div>
        </div>
    </body>
</html>