<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iniciar sesión | PLESHMARK</title>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      text-decoration: none;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }


    body {
      background-image: url(fondo.png);
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      position: relative;
      margin: 0;
      padding: 20px;
      transition: margin-left 300ms ease;
    }


    /* Contenedor principal de formularios */
    .contenedor__login-register {
      width: 100%;
      max-width: 400px;
      position: relative;
      z-index: 10;
    }


    .contenedor__login-register form {
      width: 100%;
      padding: 40px;
      background: rgba(255, 255, 255, 0.95);
      border-radius: 20px;
      box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
      backdrop-filter: blur(10px);
      border: 1px solid rgba(255, 255, 255, 0.2);
    }


    .contenedor__login-register form h2 {
      font-size: 28px;
      text-align: center;
      margin-bottom: 30px;
      color: #333;
      font-weight: 600;
    }


    .contenedor__login-register form input,
    .contenedor__login-register form select {
      width: 100%;
      margin-bottom: 20px;
      padding: 15px;
      border: 2px solid #e1e5e9;
      background-color: #f8f9fa;
      border-radius: 10px;
      outline: none;
      font-size: 16px;
      transition: all 0.3s ease;
    }


    .contenedor__login-register form input:focus,
    .contenedor__login-register form select:focus {
      border-color: #667eea;
      background-color: #fff;
      transform: translateY(-2px);
      box-shadow: 0 5px 15px rgba(102, 126, 234, 0.2);
    }


    .contenedor__login-register form button {
      width: 100%;
      padding: 15px;
      margin-bottom: 15px;
      border: none;
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      color: white;
      border-radius: 10px;
      font-size: 16px;
      font-weight: 600;
      cursor: pointer;
      transition: all 0.3s ease;
    }


    .contenedor__login-register form button:hover {
      transform: translateY(-2px);
      box-shadow: 0 10px 25px rgba(102, 126, 234, 0.3);
    }


    .contenedor__login-register form button:active {
      transform: translateY(0);
    }


    /* Formularios de login y registro */
    .formulario__login {
      display: block;
    }


    .formulario__register {
      display: none;
    }


    /* Menú lateral */
    .menu_side {
      width: 80px;
      height: 100vh;
      background: linear-gradient(180deg, #2c3e50 0%, #3498db 100%);
      position: fixed;
      top: 0;
      left: 0;
      z-index: 1000;
      overflow: hidden;
      transition: width 300ms ease;
      border-top-right-radius: 15px;
      border-bottom-right-radius: 15px;
      box-shadow: 5px 0 15px rgba(0, 0, 0, 0.1);
    }


    .menu_side:hover {
      width: 250px;
    }


    .menu_side::-webkit-scrollbar {
      display: none;
    }


    .name_page {
      padding: 20px;
      display: flex;
      align-items: center;
      color: white;
      margin-bottom: 20px;
    }


    .name_page img {
      width: 40px;
      height: 40px;
      margin-right: 15px;
      border-radius: 8px;
    }


    .name_page h3 {
      font-size: 18px;
      white-space: nowrap;
      opacity: 0;
      transition: opacity 300ms ease;
    }


    .menu_side:hover .name_page h3 {
      opacity: 1;
    }


    .options_menu {
      padding: 0 20px;
    }


    .options_menu a {
      color: rgba(255, 255, 255, 0.8);
      display: block;
      margin-bottom: 10px;
      transition: all 0.3s ease;
    }


    .options_menu a:hover {
      color: white;
    }


    .option {
      display: flex;
      align-items: center;
      padding: 15px 0;
      border-radius: 10px;
      transition: all 0.3s ease;
    }


    .option:hover {
      background: rgba(255, 255, 255, 0.1);
      padding-left: 10px;
    }


    .option img {
      width: 24px;
      height: 24px;
      margin-right: 15px;
    }


    .option h4 {
      font-weight: 400;
      font-size: 16px;
      white-space: nowrap;
      opacity: 0;
      transition: opacity 300ms ease;
    }


    .menu_side:hover .option h4 {
      opacity: 1;
    }


    .Pleshmark {
      position: absolute;
      bottom: 20px;
      left: 20px;
      right: 20px;
      text-align: center;
    }


    .Pleshmark h4 {
      color: rgba(255, 255, 255, 0.6);
      font-size: 12px;
      font-weight: 300;
    }


    /* Header para el botón del menú */
    header {
      position: fixed;
      top: 20px;
      left: 20px;
      z-index: 1001;
    }


    .icon_menu {
      width: 50px;
      height: 50px;
      background: rgba(255, 255, 255, 0.2);
      border-radius: 12px;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      transition: all 0.3s ease;
      backdrop-filter: blur(10px);
    }


    .icon_menu:hover {
      background: rgba(255, 255, 255, 0.3);
      transform: scale(1.05);
    }


    .icon_menu img {
      width: 24px;
      height: 24px;
      filter: invert(1);
    }


    /* Estados del menú */
    .body_move {
      margin-left: 250px;
    }


    .menu_side_move {
      width: 250px;
    }


    /* Responsive */
    @media (max-width: 768px) {
      body {
        margin-left: 0;
        padding: 10px;
      }
     
      .contenedor__login-register {
        max-width: 100%;
      }
     
      .contenedor__login-register form {
        padding: 30px 20px;
      }
     
      .menu_side {
        transform: translateX(-100%);
        transition: transform 300ms ease;
      }
     
      .menu_side_move {
        transform: translateX(0);
      }
     
      header {
        display: block;
      }
    }


    @media (min-width: 1200px) {
      .contenedor__login-register {
        max-width: 450px;
      }
    }


    /* Botón del chat */
    .chat-button {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 60px;
            height: 60px;
            background: #007bff;
            border-radius: 50%;
            border: none;
            color: white;
            font-size: 24px;
            cursor: pointer;
            box-shadow: 0 4px 12px rgba(0,0,0,0.2);
        }


        .chat-button:hover {
            background: #ffffff;
        }


        /* Ventana del chatbot */
        .chatbot {
            position: fixed;
            bottom: 90px;
            right: 20px;
            width: 300px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.2);
            display: none;
        }


        .chatbot.active {
            display: block;
        }


        /* Header del chat */
        .chat-header {
            background: #007bff;
            color: white;
            padding: 15px;
            border-radius: 10px 10px 0 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }


        .close-btn {
            background: none;
            border: none;
            color: white;
            font-size: 20px;
            cursor: pointer;
        }


        /* Cuerpo del chat */
        .chat-body {
            padding: 20px;
        }


        .greeting {
            margin-bottom: 15px;
            color: #333;
        }


        /* Opciones del chat */
        .chat-option {
            display: block;
            width: 100%;
            padding: 10px;
            margin-bottom: 8px;
            background: #f8f9fa;
            border: 1px solid #ddd;
            border-radius: 5px;
            text-align: left;
            cursor: pointer;
            text-decoration: none;
            color: #333;
        }


        .chat-option:hover {
            background: #e9ecef;
        }


        /* Modal de ayuda */
        .help-modal {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.5);
            display: none;
            align-items: center;
            justify-content: center;
            padding: 20px;
            z-index: 10;
        }


        .help-modal.active {
            display: flex;
        }


        .help-content {
            background: white;
            padding: 20px;
            border-radius: 10px;
            max-width: 400px;
            width: 100%;
        }


        .help-title {
            margin-bottom: 15px;
            color: #333;
        }


        .help-text {
            margin-bottom: 15px;
            color: #666;
            line-height: 1.5;
        }


        .close-modal-btn {
            background: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }


        .close-modal-btn:hover {
            background: #0056b3;
        }


        /* Responsive */
        @media (max-width: 480px) {
            .chatbot {
                width: calc(100% - 40px);
                right: 20px;
            }
        }
   
  </style>
</head>
<body id="body">
  <header>
    <div class="icon_menu" id="btn_open">
      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M3 12H21M3 6H21M3 18H21" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
    </div>
  </header>




  <main class="contenedor__todo">
    <div class="contenedor__login-register">
      <form action="" method="POST" class="formulario__login">
        <input type="hidden" name="accion" value="login">
        <h2>PLESHMARK</h2>
        <input type="email" placeholder="Correo Electrónico" name="correo_electronico" required>
        <input type="password" placeholder="Contraseña" name="contrasena" required>
        <button type="submit">Entrar</button>
        <button id="register_btn" type="button">Registrarme</button>
      </form>


      <form id="formRegistro" method="POST" class="formulario__register">
        <input type="hidden" name="accion" value="registro">
        <h2>Registrarse</h2>
        <input type="text" placeholder="Nombre completo" name="nombre_completo" required>
        <select name="tipo_documento" required>
          <option value="">Seleccione un tipo de documento</option>
          <option value="Cedula_ciudadania">Cédula de ciudadanía</option>
          <option value="Cedula_extranjeria">Cédula de extranjería</option>
          <option value="Pasaporte">Pasaporte</option>
        </select>
        <input type="text" placeholder="Número de Documento" name="numero_documento" required>
        <input type="email" placeholder="Correo Electrónico" name="correo_electronico" required>
        <input type="tel" placeholder="Teléfono" name="telefono" required>
        <input type="password" placeholder="Contraseña" name="contrasena" required>
        <button type="submit">Crear Usuario</button>
        <button id="login_btn" type="button">Iniciar Sesión</button>
      </form>
    </div>
  </main>


  <script>
    // Funcionalidad del menú
    const btnOpen = document.getElementById('btn_open');
    const menuSide = document.getElementById('menu_side');
    const body = document.getElementById('body');


    btnOpen.addEventListener('click', () => {
      menuSide.classList.toggle('menu_side_move');
      body.classList.toggle('body_move');
    });


    // Cambio entre formularios
    const registerBtn = document.getElementById('register_btn');
    const loginBtn = document.getElementById('login_btn');
    const formularioLogin = document.querySelector('.formulario__login');
    const formularioRegister = document.querySelector('.formulario__register');


    registerBtn.addEventListener('click', () => {
      formularioLogin.style.display = 'none';
      formularioRegister.style.display = 'block';
    });


    loginBtn.addEventListener('click', () => {
      formularioRegister.style.display = 'none';
      formularioLogin.style.display = 'block';
    });
  </script>
  <!-- Botón del chat -->
  <button class="chat-button" onclick="toggleChat()">🤖</button>


  <!-- Ventana del chatbot -->
  <div class="chatbot" id="chatbot">
      <div class="chat-header">
          <span>Asistente PLESHMARK</span>
          <button class="close-btn" onclick="closeChat()">×</button>
      </div>
      <div class="chat-body">
          <div class="greeting">¡Hola! ¿En qué puedo ayudarte?</div>
         
          <button class="chat-option" onclick="showHelp('usuario')">
              ¿No puedes crear un usuario?
          </button>
         
          <button class="chat-option" onclick="showHelp('buscar')">
              ¿No recuerdas tu contraseña?
          </button>
         
          <button class="chat-option" onclick="showHelp('recarga')">
              ¿No te permite ingresar?
          </button>
         
          <a href="https://w.app/0cirto" target="_blank" class="chat-option">
              ¿Quieres hablar con un asesor?
          </a>
      </div>
  </div>


  <!-- Modal de ayuda -->
  <div class="help-modal" id="helpModal">
      <div class="help-content">
          <h3 class="help-title" id="helpTitle">Ayuda</h3>
          <div class="help-text" id="helpText"></div>
          <button class="close-modal-btn" onclick="closeModal()">Cerrar</button>
      </div>
  </div>


  <script>
      function toggleChat() {
          const chatbot = document.getElementById('chatbot');
          chatbot.classList.toggle('active');
      }


      function closeChat() {
          const chatbot = document.getElementById('chatbot');
          chatbot.classList.remove('active');
      }


      function showHelp(type) {
          const modal = document.getElementById('helpModal');
          const title = document.getElementById('helpTitle');
          const text = document.getElementById('helpText');


          let helpInfo = {
              usuario: {
                  title: 'Crear Usuario',
                  text: 'Para crear un usuario:\n\n1. Haz clic en "REGISTRO"\n2. Completa todos los campos\n3. Verifica tu email\n4. ¡Listo para usar!'
              },
              buscar: {
                  title: 'Olvido contraseña',
                  text: 'En este caso:\n\n1. en la parte superior\n2. Aplica olvide contreseña\n3. Revisa el correo de recuperacion\n4. sigue lso paso enviados al correo'
              },
              recarga: {
                  title: 'Problema de Ingresar',
                  text: 'Si no puedes entrar:\n\n1. Verifica tu internet\n2. Limpia la caché del navegador\n3. Prueba en modo incógnito\n4. Actualiza tu navegador'
              }
          };


          title.textContent = helpInfo[type].title;
          text.textContent = helpInfo[type].text;
          modal.classList.add('active');
      }


      function closeModal() {
          const modal = document.getElementById('helpModal');
          modal.classList.remove('active');
      }


      // Cerrar al hacer clic fuera
      document.addEventListener('click', function(event) {
          const chatbot = document.getElementById('chatbot');
          const chatButton = document.querySelector('.chat-button');
          const modal = document.getElementById('helpModal');


          // Cerrar chatbot si se hace clic fuera
          if (!chatbot.contains(event.target) && event.target !== chatButton) {
              chatbot.classList.remove('active');
          }


          // Cerrar modal si se hace clic fuera
          if (event.target === modal) {
              modal.classList.remove('active');
          }
      });
  </script>
 
</body>
</html>
</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iniciar sesión | PLESHMARK</title>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      text-decoration: none;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }


    body {
      background-image: url(fondo.png);
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      position: relative;
      margin: 0;
      padding: 20px;
      transition: margin-left 300ms ease;
    }


    /* Contenedor principal de formularios */
    .contenedor__login-register {
      width: 100%;
      max-width: 400px;
      position: relative;
      z-index: 10;
    }


    .contenedor__login-register form {
      width: 100%;
      padding: 40px;
      background: rgba(255, 255, 255, 0.95);
      border-radius: 20px;
      box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
      backdrop-filter: blur(10px);
      border: 1px solid rgba(255, 255, 255, 0.2);
    }


    .contenedor__login-register form h2 {
      font-size: 28px;
      text-align: center;
      margin-bottom: 30px;
      color: #333;
      font-weight: 600;
    }


    .contenedor__login-register form input,
    .contenedor__login-register form select {
      width: 100%;
      margin-bottom: 20px;
      padding: 15px;
      border: 2px solid #e1e5e9;
      background-color: #f8f9fa;
      border-radius: 10px;
      outline: none;
      font-size: 16px;
      transition: all 0.3s ease;
    }


    .contenedor__login-register form input:focus,
    .contenedor__login-register form select:focus {
      border-color: #667eea;
      background-color: #fff;
      transform: translateY(-2px);
      box-shadow: 0 5px 15px rgba(102, 126, 234, 0.2);
    }


    .contenedor__login-register form button {
      width: 100%;
      padding: 15px;
      margin-bottom: 15px;
      border: none;
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      color: white;
      border-radius: 10px;
      font-size: 16px;
      font-weight: 600;
      cursor: pointer;
      transition: all 0.3s ease;
    }


    .contenedor__login-register form button:hover {
      transform: translateY(-2px);
      box-shadow: 0 10px 25px rgba(102, 126, 234, 0.3);
    }


    .contenedor__login-register form button:active {
      transform: translateY(0);
    }


    /* Formularios de login y registro */
    .formulario__login {
      display: block;
    }


    .formulario__register {
      display: none;
    }


    /* Menú lateral */
    .menu_side {
      width: 80px;
      height: 100vh;
      background: linear-gradient(180deg, #2c3e50 0%, #3498db 100%);
      position: fixed;
      top: 0;
      left: 0;
      z-index: 1000;
      overflow: hidden;
      transition: width 300ms ease;
      border-top-right-radius: 15px;
      border-bottom-right-radius: 15px;
      box-shadow: 5px 0 15px rgba(0, 0, 0, 0.1);
    }


    .menu_side:hover {
      width: 250px;
    }


    .menu_side::-webkit-scrollbar {
      display: none;
    }


    .name_page {
      padding: 20px;
      display: flex;
      align-items: center;
      color: white;
      margin-bottom: 20px;
    }


    .name_page img {
      width: 40px;
      height: 40px;
      margin-right: 15px;
      border-radius: 8px;
    }


    .name_page h3 {
      font-size: 18px;
      white-space: nowrap;
      opacity: 0;
      transition: opacity 300ms ease;
    }


    .menu_side:hover .name_page h3 {
      opacity: 1;
    }


    .options_menu {
      padding: 0 20px;
    }


    .options_menu a {
      color: rgba(255, 255, 255, 0.8);
      display: block;
      margin-bottom: 10px;
      transition: all 0.3s ease;
    }


    .options_menu a:hover {
      color: white;
    }


    .option {
      display: flex;
      align-items: center;
      padding: 15px 0;
      border-radius: 10px;
      transition: all 0.3s ease;
    }


    .option:hover {
      background: rgba(255, 255, 255, 0.1);
      padding-left: 10px;
    }


    .option img {
      width: 24px;
      height: 24px;
      margin-right: 15px;
    }


    .option h4 {
      font-weight: 400;
      font-size: 16px;
      white-space: nowrap;
      opacity: 0;
      transition: opacity 300ms ease;
    }


    .menu_side:hover .option h4 {
      opacity: 1;
    }


    .Pleshmark {
      position: absolute;
      bottom: 20px;
      left: 20px;
      right: 20px;
      text-align: center;
    }


    .Pleshmark h4 {
      color: rgba(255, 255, 255, 0.6);
      font-size: 12px;
      font-weight: 300;
    }


    /* Header para el botón del menú */
    header {
      position: fixed;
      top: 20px;
      left: 20px;
      z-index: 1001;
    }


    .icon_menu {
      width: 50px;
      height: 50px;
      background: rgba(255, 255, 255, 0.2);
      border-radius: 12px;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      transition: all 0.3s ease;
      backdrop-filter: blur(10px);
    }


    .icon_menu:hover {
      background: rgba(255, 255, 255, 0.3);
      transform: scale(1.05);
    }


    .icon_menu img {
      width: 24px;
      height: 24px;
      filter: invert(1);
    }


    /* Estados del menú */
    .body_move {
      margin-left: 250px;
    }


    .menu_side_move {
      width: 250px;
    }


    /* Responsive */
    @media (max-width: 768px) {
      body {
        margin-left: 0;
        padding: 10px;
      }
     
      .contenedor__login-register {
        max-width: 100%;
      }
     
      .contenedor__login-register form {
        padding: 30px 20px;
      }
     
      .menu_side {
        transform: translateX(-100%);
        transition: transform 300ms ease;
      }
     
      .menu_side_move {
        transform: translateX(0);
      }
     
      header {
        display: block;
      }
    }


    @media (min-width: 1200px) {
      .contenedor__login-register {
        max-width: 450px;
      }
    }


    /* Botón del chat */
    .chat-button {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 60px;
            height: 60px;
            background: #007bff;
            border-radius: 50%;
            border: none;
            color: white;
            font-size: 24px;
            cursor: pointer;
            box-shadow: 0 4px 12px rgba(0,0,0,0.2);
        }


        .chat-button:hover {
            background: #ffffff;
        }


        /* Ventana del chatbot */
        .chatbot {
            position: fixed;
            bottom: 90px;
            right: 20px;
            width: 300px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.2);
            display: none;
        }


        .chatbot.active {
            display: block;
        }


        /* Header del chat */
        .chat-header {
            background: #007bff;
            color: white;
            padding: 15px;
            border-radius: 10px 10px 0 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }


        .close-btn {
            background: none;
            border: none;
            color: white;
            font-size: 20px;
            cursor: pointer;
        }


        /* Cuerpo del chat */
        .chat-body {
            padding: 20px;
        }


        .greeting {
            margin-bottom: 15px;
            color: #333;
        }


        /* Opciones del chat */
        .chat-option {
            display: block;
            width: 100%;
            padding: 10px;
            margin-bottom: 8px;
            background: #f8f9fa;
            border: 1px solid #ddd;
            border-radius: 5px;
            text-align: left;
            cursor: pointer;
            text-decoration: none;
            color: #333;
        }


        .chat-option:hover {
            background: #e9ecef;
        }


        /* Modal de ayuda */
        .help-modal {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.5);
            display: none;
            align-items: center;
            justify-content: center;
            padding: 20px;
            z-index: 10;
        }


        .help-modal.active {
            display: flex;
        }


        .help-content {
            background: white;
            padding: 20px;
            border-radius: 10px;
            max-width: 400px;
            width: 100%;
        }


        .help-title {
            margin-bottom: 15px;
            color: #333;
        }


        .help-text {
            margin-bottom: 15px;
            color: #666;
            line-height: 1.5;
        }


        .close-modal-btn {
            background: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }


        .close-modal-btn:hover {
            background: #0056b3;
        }


        /* Responsive */
        @media (max-width: 480px) {
            .chatbot {
                width: calc(100% - 40px);
                right: 20px;
            }
        }
   
  </style>
</head>
<body id="body">
  <header>
    <div class="icon_menu" id="btn_open">
      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M3 12H21M3 6H21M3 18H21" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
    </div>
  </header>




  <main class="contenedor__todo">
    <div class="contenedor__login-register">
      <form action="" method="POST" class="formulario__login">
        <input type="hidden" name="accion" value="login">
        <h2>PLESHMARK</h2>
        <input type="email" placeholder="Correo Electrónico" name="correo_electronico" required>
        <input type="password" placeholder="Contraseña" name="contrasena" required>
        <button type="submit">Entrar</button>
        <button id="register_btn" type="button">Registrarme</button>
      </form>


      <form id="formRegistro" method="POST" class="formulario__register">
        <input type="hidden" name="accion" value="registro">
        <h2>Registrarse</h2>
        <input type="text" placeholder="Nombre completo" name="nombre_completo" required>
        <select name="tipo_documento" required>
          <option value="">Seleccione un tipo de documento</option>
          <option value="Cedula_ciudadania">Cédula de ciudadanía</option>
          <option value="Cedula_extranjeria">Cédula de extranjería</option>
          <option value="Pasaporte">Pasaporte</option>
        </select>
        <input type="text" placeholder="Número de Documento" name="numero_documento" required>
        <input type="email" placeholder="Correo Electrónico" name="correo_electronico" required>
        <input type="tel" placeholder="Teléfono" name="telefono" required>
        <input type="password" placeholder="Contraseña" name="contrasena" required>
        <button type="submit">Crear Usuario</button>
        <button id="login_btn" type="button">Iniciar Sesión</button>
      </form>
    </div>
  </main>


  <script>
    // Funcionalidad del menú
    const btnOpen = document.getElementById('btn_open');
    const menuSide = document.getElementById('menu_side');
    const body = document.getElementById('body');


    btnOpen.addEventListener('click', () => {
      menuSide.classList.toggle('menu_side_move');
      body.classList.toggle('body_move');
    });


    // Cambio entre formularios
    const registerBtn = document.getElementById('register_btn');
    const loginBtn = document.getElementById('login_btn');
    const formularioLogin = document.querySelector('.formulario__login');
    const formularioRegister = document.querySelector('.formulario__register');


    registerBtn.addEventListener('click', () => {
      formularioLogin.style.display = 'none';
      formularioRegister.style.display = 'block';
    });


    loginBtn.addEventListener('click', () => {
      formularioRegister.style.display = 'none';
      formularioLogin.style.display = 'block';
    });
  </script>
  <!-- Botón del chat -->
  <button class="chat-button" onclick="toggleChat()">🤖</button>


  <!-- Ventana del chatbot -->
  <div class="chatbot" id="chatbot">
      <div class="chat-header">
          <span>Asistente PLESHMARK</span>
          <button class="close-btn" onclick="closeChat()">×</button>
      </div>
      <div class="chat-body">
          <div class="greeting">¡Hola! ¿En qué puedo ayudarte?</div>
         
          <button class="chat-option" onclick="showHelp('usuario')">
              ¿No puedes crear un usuario?
          </button>
         
          <button class="chat-option" onclick="showHelp('buscar')">
              ¿No recuerdas tu contraseña?
          </button>
         
          <button class="chat-option" onclick="showHelp('recarga')">
              ¿No te permite ingresar?
          </button>
         
          <a href="https://w.app/0cirto" target="_blank" class="chat-option">
              ¿Quieres hablar con un asesor?
          </a>
      </div>
  </div>


  <!-- Modal de ayuda -->
  <div class="help-modal" id="helpModal">
      <div class="help-content">
          <h3 class="help-title" id="helpTitle">Ayuda</h3>
          <div class="help-text" id="helpText"></div>
          <button class="close-modal-btn" onclick="closeModal()">Cerrar</button>
      </div>
  </div>


  <script>
      function toggleChat() {
          const chatbot = document.getElementById('chatbot');
          chatbot.classList.toggle('active');
      }


      function closeChat() {
          const chatbot = document.getElementById('chatbot');
          chatbot.classList.remove('active');
      }


      function showHelp(type) {
          const modal = document.getElementById('helpModal');
          const title = document.getElementById('helpTitle');
          const text = document.getElementById('helpText');


          let helpInfo = {
              usuario: {
                  title: 'Crear Usuario',
                  text: 'Para crear un usuario:\n\n1. Haz clic en "REGISTRO"\n2. Completa todos los campos\n3. Verifica tu email\n4. ¡Listo para usar!'
              },
              buscar: {
                  title: 'Olvido contraseña',
                  text: 'En este caso:\n\n1. en la parte superior\n2. Aplica olvide contreseña\n3. Revisa el correo de recuperacion\n4. sigue lso paso enviados al correo'
              },
              recarga: {
                  title: 'Problema de Ingresar',
                  text: 'Si no puedes entrar:\n\n1. Verifica tu internet\n2. Limpia la caché del navegador\n3. Prueba en modo incógnito\n4. Actualiza tu navegador'
              }
          };


          title.textContent = helpInfo[type].title;
          text.textContent = helpInfo[type].text;
          modal.classList.add('active');
      }


      function closeModal() {
          const modal = document.getElementById('helpModal');
          modal.classList.remove('active');
      }


      // Cerrar al hacer clic fuera
      document.addEventListener('click', function(event) {
          const chatbot = document.getElementById('chatbot');
          const chatButton = document.querySelector('.chat-button');
          const modal = document.getElementById('helpModal');


          // Cerrar chatbot si se hace clic fuera
          if (!chatbot.contains(event.target) && event.target !== chatButton) {
              chatbot.classList.remove('active');
          }


          // Cerrar modal si se hace clic fuera
          if (event.target === modal) {
              modal.classList.remove('active');
          }
      });
  </script>
 
</body>
</html>
</body>
</html>
