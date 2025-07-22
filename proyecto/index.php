
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PLESHMARK - Bolsa de Empleo</title>
    <link rel="stylesheet" href="inicio.css">
</head>
<body>


    <header>
        <div class="logo">PLESHMARK
            <img src="img/logo2.png" alt="logo pleshmark"
            width="15px"
            height="15px">
        </div>
        <div class="header-right">
            <a href="#">CONTACTO</a>
            <a href="#">OFERTAS</a>
            <a href="#" class="btn btn-black">INCIAR SESION</a>
            <a href="#" class="btn btn-outline">REGISTRO</a>
        </div>
    </header>


    <section class="hero">
        <div class="hero-content">
            <h1>Impulsamos el talento que mueve al mundo</h1>
            <p>Bienvenido a PLESHMARK: la bolsa de empleo que conecta a pequeños emprendimientos con grandes oportunidades y a empresas consolidadas con el talento que necesitan.</p>
            <a href="#" class="btn btn-black">CONTÁCTANOS</a>
        </div>
        <div class="logo-overlay">
            <img src="img/logo2.png" alt="logo pleshmark">
        </div>
        <div class="nav-buttons">
            <div class="nav-btn">&lt;</div>
            <div class="nav-btn">&gt;</div>
        </div>
    </section>


    <section class="search-section">
        <div class="search-container">
            <div class="filter-btn">
                Filtrar
                <span>≡</span>
            </div>
            <div class="search-input">
            <input type="text" placeholder="Buscar ofertas de empleo...">
            <button class="search-btn">🔍</button>
            </div>

        <div class="search-button">BUSCAR OFERTAS</div>
    </section>

    <section class="offers-section" style="padding: 0 40px 40px;">
            <main class="main-content" id="mainContent">
        <h2 class="section-title">Ofertas</h2>
        
        <div class="job-grid">
            <div class="job-card">
                <div class="job-header purple">
                    Desarrollador de Aplicaciones
                </div>
                <div class="job-content">
                    <h3 class="job-title">Desarrollador de Aplicaciones</h3>
                    <p class="job-description"></p>
                    <button class="apply-btn" onclick="openSidebar('Desarrollador de Aplicaciones')">aplicar</button>
                </div>
            </div>

            <div class="job-card">
                <div class="job-header blue">
                    Gestor de Bases de Datos
                </div>
                <div class="job-content">
                    <h3 class="job-title">Gestor de Bases de Datos</h3>
                    <p class="job-description"></p>
                    <button class="apply-btn" onclick="openSidebar('Gestor de Bases de Datos')">aplicar</button>
                </div>
            </div>

            <div class="job-card">
                <div class="job-header dark">
                    Desarrollador de Código
                </div>
                <div class="job-content">
                    <h3 class="job-title">Desarrollador de Código</h3>
                    <p class="job-description"></p>
                    <button class="apply-btn" onclick="openSidebar('Desarrollador de Código')">aplicar</button>
                </div>
            </div>

            <div class="job-card">
                <div class="job-header purple">
                    Ayudante de Mesero
                </div>
                <div class="job-content">
                    <h3 class="job-title">Ayudante de Mesero</h3>
                    <p class="job-description"></p>
                    <button class="apply-btn" onclick="openSidebar('Ayudante de Mesero')">aplicar</button>
                </div>
            </div>

            <div class="job-card">
                <div class="job-header blue">
                    Bombero
                </div>
                <div class="job-content">
                    <h3 class="job-title">Bombero</h3>
                    <p class="job-description"></p>
                    <button class="apply-btn" onclick="openSidebar('Bombero')">aplicar</button>
                </div>
            </div>

            <div class="job-card">
                <div class="job-header dark">
                    Profesor
                </div>
                <div class="job-content">
                    <h3 class="job-title">Profesor</h3>
                    <p class="job-description"></p>
                    <button class="apply-btn" onclick="openSidebar('Profesor')">aplicar</button>
                </div>
            </div>
        </div>
    </main>

    <!-- Overlay -->
    <div class="overlay" id="overlay" onclick="closeSidebar()"></div>

    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <div class="sidebar-header">
            <h3 class="sidebar-title" id="sidebarTitle">Aplicar a Trabajo</h3>
            <button class="close-btn" onclick="closeSidebar()">&times;</button>
        </div>
        <div class="sidebar-content">
            <form id="applicationForm">
                <div class="form-group">
                    <label for="fullName">Nombre Completo</label>
                    <input type="text" id="fullName" name="fullName" required>
                </div>

                <div class="form-group">
                    <label for="email">Correo Electrónico</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="phone">Teléfono</label>
                    <input type="tel" id="phone" name="phone" required>
                </div>

                <div class="form-group">
                    <label for="experience">Años de Experiencia</label>
                    <select id="experience" name="experience" required>
                        <option value="">Selecciona...</option>
                        <option value="0-1">0-1 años</option>
                        <option value="2-3">2-3 años</option>
                        <option value="4-5">4-5 años</option>
                        <option value="6+">6+ años</option>
                    </select>
                </div>

                <div class="form-group">
                <label for="motivation">¿Por qué estás interesado en aplicar a esta oferta?</label>
                <textarea id="motivation" name="motivation" placeholder="Cuéntanos el por qué..." required></textarea>
                </div>

                <button type="submit" class="submit-btn">Enviar aplicación</button>

            </form>
        </div>
    </div>

    <script>

    </script>


    <footer class="footer">
    <div class="footer-container">
        <div class="footer-column">
            <div class="footer-logo">PLESHMARK</div>
            <p>Conectamos el talento con las mejores oportunidades laborales en el mercado actual.</p>
            <div class="social-icons">
                <a href="#" aria-label="Facebook"><i class="social-icon">📘 </i></a>
                <a href="#" aria-label="Twitter"><i class="social-icon">🐦</i></a>
                <a href="#" aria-label="whatsapp"><i class="social-icon">📱</i></a>
                <a href="#" aria-label="Instagram"><i class="social-icon">📷</i></a>
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

        <!-- overlay -->
         
        <div class="overlay" id="overlay" onclick="closeSidebar()"></div>

        <!-- barra lateral -->


        <div class="sidebar" id="sidebar">
            <div class="sidebar-header">
                <h3 class="sidebar-title" id="sidebarTitle">Aplicar a oferta</h3>
                <button class="close-btn" onclick="closeSidebar()">&times;</button>
            </div>
            <div class="sidebar-content">
                <from id="applicationForm">
                    <div class="from-grup">
                        <label for="motivation">¿Porque estas interesado en aplicar a esta oferta?</label>
                        <textarea id="motivation" name="motivation" placeholder="cuentanos tu el porque..." required>
            </textarea>
                    </div>

                     <button type="submit" class="submit-btn">Enviar aplicación</button>

                </from>
            </div>
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
    <script src="script.js"></script>
</footer>

</body>
</html>

