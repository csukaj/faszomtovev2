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
                grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
                gap: 1.5rem;
                margin: 2rem 0;
            }

            .contact-item {
                background: rgba(255,255,255,0.05);
                padding: 1.5rem;
                border-radius: 8px;
                border-left: 4px solid #ffd700;
                text-align: center;
            }

            .contact-item h3 {
                margin-top: 0;
                color: #ffd700;
                font-size: 1.5rem;
            }

            .contact-item .value {
                font-size: 1.25rem;
                font-weight: 600;
                margin: 1rem 0;
                color: #fff;
            }

            .contact-item .icon {
                font-size: 2rem;
                margin-bottom: 0.5rem;
            }

            .guidance {
                background: rgba(255,255,255,0.05);
                padding: 2rem;
                border-radius: 8px;
                margin-top: 2rem;
                border: 1px solid rgba(255,255,255,0.1);
            }

            .guidance h3 {
                color: #ffd700;
                margin-top: 0;
            }

            .guidance ul {
                list-style: none;
                padding: 0;
            }

            .guidance li {
                padding: 0.5rem 0;
                padding-left: 1.5rem;
                position: relative;
            }

            .guidance li:before {
                content: "✓";
                color: #ffd700;
                font-weight: bold;
                position: absolute;
                left: 0;
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

            .nav-links {
                display: flex;
                gap: 1rem;
                flex-wrap: wrap;
                margin-top: 2rem;
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
        </style>
    </head>
    <body>
        <div class="header">
            <h1>📞 Kapcsolat</h1>
        </div>

        <div class="container">
            <div class="card">
                <h2>Vedd fel velünk a kapcsolatot!</h2>
                <p>Örülünk minden megkeresésnek! Az alábbi elérhetőségeken várjuk kérdéseidet, észrevételeidet.</p>
                
                <div class="contact-info">
                    <div class="contact-item">
                        <div class="icon">📱</div>
                        <h3>Telefonszám</h3>
                        <div class="value">+36 30 123 4567</div>
                        <p>Hívj bátran munkanapokon 9:00-17:00 között!</p>
                    </div>
                    
                    <div class="contact-item">
                        <div class="icon">✉️</div>
                        <h3>Email cím</h3>
                        <div class="value">info@faszomtove2.hu</div>
                        <p>Emailjeidet 24 órán belül megválaszoljuk!</p>
                    </div>
                </div>

                <div class="guidance">
                    <h3>📋 Hogyan vedd fel velünk a kapcsolatot?</h3>
                    
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem; margin-top: 1.5rem;">
                        <div>
                            <h4 style="color: #ffd700; margin-bottom: 1rem;">📧 Email írása</h4>
                            <ul>
                                <li>Használd a fenti email címet</li>
                                <li>Írd meg a tárgyat egyértelműen</li>
                                <li>Részletezd a problémádat vagy kérdésedet</li>
                                <li>Add meg elérhetőségeidet a gyors válaszhoz</li>
                                <li>Csatolj képernyőképet, ha szükséges</li>
                            </ul>
                        </div>
                        
                        <div>
                            <h4 style="color: #ffd700; margin-bottom: 1rem;">📞 Telefonálás</h4>
                            <ul>
                                <li>Hívd a fenti telefonszámot</li>
                                <li>Munkanapokon 9:00-17:00 között vagyunk elérhetők</li>
                                <li>Készülj fel a részletekkel előre</li>
                                <li>Tartsd kéznél a számítógépedet</li>
                                <li>Ha nem érünk rá, hagyj üzenetet!</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="nav-links">
                    <a href="/" class="nav-link">← Vissza a kezdőlapra</a>
                    <a href="/home" class="nav-link">🏠 Főoldal</a>
                </div>
            </div>
        </div>
    </body>
</html>