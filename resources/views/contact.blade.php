<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Kapcsolat - FaszomTove2</title>
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

            .navigation {
                display: flex;
                gap: 1rem;
                margin-top: 1rem;
            }

            .nav-link {
                color: #ffd700;
                text-decoration: none;
                padding: 0.5rem 1rem;
                border: 1px solid #ffd700;
                border-radius: 4px;
                transition: all 0.3s ease;
            }

            .nav-link:hover {
                background: #ffd700;
                color: #1a365d;
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

            .contact-info {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
                gap: 1.5rem;
                margin-top: 2rem;
            }

            .contact-item {
                background: rgba(255,255,255,0.05);
                padding: 1.5rem;
                border-radius: 8px;
                border-left: 4px solid #ffd700;
            }

            .contact-item h3 {
                margin-top: 0;
                color: #ffd700;
            }

            .contact-item p {
                margin: 0.5rem 0;
            }
        </style>
    </head>
    <body>
        <div class="header">
            <h1>📞 Kapcsolat</h1>
            <div class="navigation">
                <a href="/" class="nav-link">← Kezdőlap</a>
                <a href="/home" class="nav-link">Főoldal</a>
            </div>
        </div>

        <div class="container">
            <div class="card">
                <h2>Vedd fel velünk a kapcsolatot!</h2>
                <p>Ha bármilyen kérdésed van a FaszomTove2 alkalmazással kapcsolatban, ne habozz felvenni velünk a kapcsolatot.</p>
                
                <div class="contact-info">
                    <div class="contact-item">
                        <h3>📧 Email</h3>
                        <p>info@faszomtove2.hu</p>
                        <p>support@faszomtove2.hu</p>
                    </div>
                    
                    <div class="contact-item">
                        <h3>📱 Telefon</h3>
                        <p>+36 1 234 5678</p>
                        <p>Hétfő-Péntek: 9:00-17:00</p>
                    </div>
                    
                    <div class="contact-item">
                        <h3>📍 Cím</h3>
                        <p>1051 Budapest</p>
                        <p>Példa utca 123.</p>
                        <p>Magyarország</p>
                    </div>
                    
                    <div class="contact-item">
                        <h3>🌐 Online</h3>
                        <p>GitHub: github.com/csukaj</p>
                        <p>Laravel Közösség</p>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>