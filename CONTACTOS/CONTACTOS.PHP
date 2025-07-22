<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PLESHMARK</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
            background: #f5f5f5;
        }

        /* Header */
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 2rem;
            background: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
        }

        .logo {
            display: flex;
            align-items: center;
            font-size: 1.5rem;
            font-weight: bold;
            color: #333;
            gap: 0.5rem;
        }

        .logo img {
            width: 30px;
            height: 30px;
        }

        .header-right {
            display: flex;
            align-items: center;
            gap: 1.5rem;
        }

        .header-right a {
            text-decoration: none;
            color: #666;
            font-weight: 500;
            padding: 0.5rem 1.5rem;
            border-radius: 5px;
            transition: all 0.3s ease;
            font-size: 14px;
        }

        .btn-btn-black {
            background: #333 !important;
            color: white !important;
            border-radius: 5px;
        }

        .btn-outline {
            border: 1px solid #333 !important;
            color: #333 !important;
            border-radius: 5px;
        }

        /* Main Content */
        main {
            margin-top: 70px;
        }

        /* Team Section */
        .team-section {
         background-image: url(fondo.jpeg) ;
            background-size: cover;
            background-position: center;
            padding: 4rem 2rem;
            text-align: center;
            color: white;
            position: relative;
            min-height: 60vh;
        }


        .team-section > * {
            position: relative;
            z-index: 2;
        }

        .team-section h2 {
            font-size: 3.5rem;
            margin-bottom: 3rem;
            font-weight: bold;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .team-grid {
            display: flex;
            justify-content: center;
            gap: 3rem;
            max-width: 1200px;
            margin: 0 auto;
            flex-wrap: wrap;
        }

        .team-member {
            text-align: center;
            background: rgba(255, 255, 255, 0.1);
            padding: 2rem 1.5rem;
            border-radius: 15px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            transition: transform 0.3s ease;
            min-width: 280px;
        }

        .team-member:hover {
            transform: translateY(-10px);
        }

        .team-photo {
            width: 150px;
            height: 150px;
            border-radius: 10px;
            margin: 0 auto 1.5rem;
            object-fit: cover;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
        }

        .team-member h3 {
            font-size: 1rem;
            color: white;
            margin-bottom: 0.5rem;
            font-weight: bold;
            text-transform: uppercase;
            line-height: 1.3;
        }

        /* Contact Section */
        .contact-section {
            background: linear-gradient(135deg, rgba(78, 87, 128, 0.8), rgba(129, 95, 163, 0.8)), 
                        url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000"><defs><linearGradient id="grad2" x1="0%" y1="0%" x2="100%" y2="100%"><stop offset="0%" style="stop-color:%23667eea;stop-opacity:0.8" /><stop offset="100%" style="stop-color:%23764ba2;stop-opacity:0.8" /></linearGradient></defs><rect width="1000" height="1000" fill="url(%23grad2)"/></svg>');
            background-size: cover;
            background-position: center;
            padding: 4rem 2rem;
            text-align: center;
            color: white;
            position: relative;
            min-height: 60vh;
        }

        .contact-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, 
                rgba(102, 126, 234, 0.7) 0%, 
                rgba(75, 162, 89, 0.7) 50%,
                rgba(102, 126, 234, 0.6) 100%);
            z-index: 1;
        }

        .contact-section > * {
            position: relative;
            z-index: 2;
        }

        .contact-section h2 {
            font-size: 3rem;
            margin-bottom: 3rem;
            font-weight: bold;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .contact-content {
            max-width: 800px;
            margin: 0 auto 3rem;
        }

        .contact-content p {
            font-size: 1.2rem;
            line-height: 1.8;
            margin-bottom: 3rem;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
        }

        .contact-bottom {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 800px;
            margin: 0 auto;
            flex-wrap: wrap;
            gap: 2rem;
        }

        .social-icons {
            display: flex;
            gap: 2rem;
        }

        .social-icon {
            width: 60px;
            height: 60px;
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            text-decoration: none;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        }

        .whatsapp {
            background: #25D366;
        }

        .instagram {
            background: linear-gradient(45deg, #f09433 0%,#e6683c 25%,#dc2743 50%,#cc2366 75%,#bc1888 100%);
        }

        .facebook {
            background: #1877F2;
        }

        .social-icon:hover {
            transform: translateY(-5px) scale(1.1);
        }

        .search-button {
            background: rgba(255, 255, 255, 0.9);
            color: #333;
            padding: 1rem 3rem;
            border: none;
            border-radius: 25px;
            font-size: 1.2rem;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .search-button:hover {
            background: white;
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
        }

        /* Footer */
        .footer {
            background: #2c3e50;
            color: white;
            padding: 3rem 2rem 1rem;
        }

        .footer-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .footer-column h3 {
            margin-bottom: 1rem;
            color: #ecf0f1;
        }

        .footer-links {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 0.5rem;
        }

        .footer-links a {
            color: #bdc3c7;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer-links a:hover {
            color: #3498db;
        }

        .contact-info {
            list-style: none;
        }

        .contact-info li {
            margin-bottom: 0.5rem;
            color: #bdc3c7;
        }

        .newsletter {
            margin-top: 1rem;
        }

        .newsletter p {
            margin-bottom: 1rem;
            color: #bdc3c7;
        }

        .newsletter-form {
            display: flex;
            gap: 0.5rem;
        }

        .newsletter-form input {
            flex: 1;
            padding: 0.5rem;
            border: none;
            border-radius: 5px;
        }

        .newsletter-form button {
            padding: 0.5rem 1rem;
            background: #3498db;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .footer-bottom {
            text-align: center;
            padding-top: 2rem;
            margin-top: 2rem;
            border-top: 1px solid #34495e;
            color: #95a5a6;
        }

        .legal-links {
            margin-top: 1rem;
        }

        .legal-links a {
            color: #95a5a6;
            text-decoration: none;
            margin: 0 1rem;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .header-right {
                gap: 1rem;
            }

            .team-section h2 {
                font-size: 2.5rem;
            }

            .contact-section h2 {
                font-size: 2rem;
            }

            .team-grid {
                flex-direction: column;
                align-items: center;
                gap: 2rem;
            }

            .contact-bottom {
                flex-direction: column;
                text-align: center;
            }

            .social-icons {
                justify-content: center;
            }
        }

        /* Chat widget positioning */
        .chat-widget {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 1000;
        }

        .chat-button {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: white;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .chat-button:hover {
            transform: scale(1.1);
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">
            PLESHMARK
            <img src="logo.png">
            
        </div>
        <div class="header-right">
            <a href="#contact">CONTACTO</a>
            <a href="#offers">OFERTAS</a>
            <a href="#" class="btn-btn-black">INICIAR SESIÓN</a>
            <a href="#" class="btn-outline">REGISTRO</a>
        </div>
    </header>

    <main>
        <section class="team-section">
            <h2>Quiénes somos</h2>
            <div class="team-grid">
                <div class="team-member">
                    <img src="paula.jpeg" alt="Administradora de Base de Datos" class="team-photo">
                    <h3>ADMINISTRADORA<br>DE BASE DE DATOS</h3>
                </div>
                <div class="team-member">
                    <img src="kevin.jpeg" alt="Gestor de Marketing" class="team-photo">
                    <h3>GESTOR DE MARKETING<br>Y PROGRAMADOR</h3>
                </div>
                <div class="team-member">
                    <img src="samuel.jpeg" alt="Líder de Proyecto" class="team-photo">
                    <h3>LÍDER DE PROYECTO<br>Y PROGRAMADOR</h3>
                </div>
            </div>
        </section>

        <section class="contact-section" id="contact">
            <h2>¿TE GUSTARÍA CONTACTARNOS?</h2>
            <div class="contact-content">
                <p>"En PLESHMARK, estamos aquí para ayudarte con tus solicitudes. Si eres una empresa, no dudes en escribirnos para gestionar tu cuenta y recibir solicitudes de personas interesadas en tus puestos vacantes. Si eres una persona en busca de trabajo, podrás conocer las ofertas laborales más destacadas del mercado a través de nuestras redes sociales. ¡Descubre las oportunidades que tenemos para ti!"</p>
                
                <div class="contact-bottom">
                    <div class="social-icons">
                        <a href="#" class="social-icon whatsapp" aria-label="WhatsApp">
                            <span>💬</span>
                        </a>
                        <a href="#" class="social-icon instagram" aria-label="Instagram">
                            <span>📷</span>
                        </a>
                        <a href="#" class="social-icon facebook" aria-label="Facebook">
                            <span>👍</span>
                        </a>
                    </div>

                    <button class="search-button" type="button">BUSCAR</button>
                </div>
            </div>
        </section>
    </main>

    <!-- Chat Widget -->
    <div class="chat-widget">
        <div class="chat-button">
            <img src="logo.png" alt="Chat" width="45" height="45">
        </div>
    </div>

    <footer class="footer">
        <div class="footer-container">
            <div class="footer-column">
                <div class="footer-logo" style="font-weight: bold; font-size: 1.5rem; margin-bottom: 1rem;">PLESHMARK</div>
                <p>Conectamos el talento con las mejores oportunidades laborales en el mercado actual.</p>
                <div class="social-icons" style="margin-top: 1rem;">
                    <a href="#" style="color: #bdc3c7; margin-right: 1rem;">📘</a>
                    <a href="#" style="color: #bdc3c7; margin-right: 1rem;">🐦</a>
                    <a href="#" style="color: #bdc3c7; margin-right: 1rem;">📱</a>
                    <a href="#" style="color: #bdc3c7;">📷</a>
                </div>
            </div>
            
            <div class="footer-column">
                <h3>Enlaces rápidos</h3>
                <ul class="footer-links">
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Ofertas de empleo</a></li>
                    <li><a href="#">Empresas</a></li>
                    <li><a href="#">Candidatos</a></li>
                    <li><a href="#">Blog</a></li>
                </ul>
            </div>
            
            <div class="footer-column">
                <h3>Categorías</h3>
                <ul class="footer-links">
                    <li><a href="#">Tecnología</a></li>
                    <li><a href="#">Marketing</a></li>
                    <li><a href="#">Diseño</a></li>
                    <li><a href="#">Administración</a></li>
                    <li><a href="#">Recursos Humanos</a></li>
                </ul>
            </div>

            <div class="footer-column">
                <h3>Contacto</h3>
                <ul class="contact-info">
                    <li>📍 Calle 164b #1-04</li>
                    <li>📱 301 506 8257</li>
                    <li>✉️ samuelarm2314@gmail.com</li>
                </ul>
                <div class="newsletter">
                    <p>ingresa a nuestros servicios</p>
                    <div class="newsletter-form">
                        <input type="email" placeholder="Tu correo electrónico">
                        <button type="submit">Enviar</button>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="footer-bottom">
            <p>&copy; 2025 PLESHMARK. Todos los derechos reservados.</p>
            <div class="legal-links">
                <a href="#">Términos y condiciones</a>
                <a href="#">Política de privacidad</a>
                <a href="#">Cookies</a>
            </div>
        </div>
    </footer>
</body>
</html>