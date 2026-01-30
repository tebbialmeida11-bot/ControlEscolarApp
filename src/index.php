<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Administrativo - Secundaria Tecnica 82</title>
    <link rel="stylesheet" href="assets/css/estilos.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #f4f4f4 0%, #e8e8e8 100%);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        
        .navbar {
            background: linear-gradient(135deg, #a30000 0%, #d62828 100%);
            color: #ffffffff;
            padding: 25px 40px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.2);
            display: flex;
            align-items: left;
            justify-content: flex-end;
        }
        
        .navbar-content {
            display: flex;
            justify-content: flex-end;
            align-items: left;
            gap: 15px;
        }
        
        .navbar-logo {
    width: 60px;
    height: 60px;
    object-fit: contain;
    margin-right: 15px;
}
        
        .navbar-text h1 {
            font-size: 26px;
            font-weight: bold;
            margin: 0;
            text-align: right;
        }
        
        .navbar-text p {
            font-size: 14px;
            opacity: 0.9;
            margin: 4px 0 0 0;
            text-align: right;
        }
        
        .main {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 40px 20px;
        }
        
        .welcome-section {
            text-align: center;
            margin-bottom: 50px;
            animation: fadeIn 0.8s ease-in;
        }
        
        .welcome-section h2 {
            font-size: 32px;
            color: #333;
            margin-bottom: 12px;
        }
        
        .welcome-section p {
            font-size: 16px;
            color: #666;
        }
        
        .menu-container {
            max-width: 1000px;
            width: 100%;
        }
        
        .menu-section {
            margin-bottom: 40px;
            animation: slideUp 0.8s ease-out;
        }
        
        .menu-section-title {
            font-size: 20px;
            color: #a30000;
            font-weight: bold;
            margin-bottom: 20px;
            padding-left: 10px;
            border-left: 4px solid #e63946;
        }
        
        .menu-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 25px;
        }
        
        .menu-card {
            background: white;
            border-radius: 14px;
            padding: 30px 25px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            cursor: pointer;
            transition: all 0.3s ease;
            border: 2px solid transparent;
            text-align: center;
        }
        
        .menu-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 8px 24px rgba(230, 57, 70, 0.25);
            border-color: #e63946;
        }
        
        .menu-card-icon {
            font-size: 48px;
            margin-bottom: 15px;
            display: block;
        }
        
        .menu-card-title {
            font-size: 18px;
            font-weight: bold;
            color: #333;
            margin-bottom: 8px;
        }
        
        .menu-card-desc {
            font-size: 13px;
            color: #666;
            line-height: 1.4;
        }
        
        .menu-card.primary {
            background: linear-gradient(135deg, #e63946 0%, #d62828 100%);
            color: white;
        }
        
        .menu-card.primary .menu-card-title,
        .menu-card.primary .menu-card-desc {
            color: white;
        }
        
        .menu-card.primary:hover {
            transform: translateY(-8px) scale(1.02);
            box-shadow: 0 12px 32px rgba(230, 57, 70, 0.4);
        }
        
        .footer {
            background: white;
            padding: 20px;
            text-align: center;
            color: #666;
            font-size: 13px;
            box-shadow: 0 -2px 8px rgba(0,0,0,0.05);
        }
        
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .navbar {
                padding: 20px;
            }
            
            .navbar-text h1 {
                font-size: 20px;
            }
            
            .navbar-logo {
                font-size: 30px;
            }
            
            .welcome-section h2 {
                font-size: 24px;
            }
            
            .menu-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="navbar">
         <div class="navbar-content" style="justify-content: flex-end;">
            
            <div class="navbar-text">
                <h1>Secundaria Técnica 82</h1>
                <p>C.C.T 31DST2028V</p>
            </div>
             <img src="logo.png" alt="Logo Secundaria Técnica 82" class="navbar-logo">
        </div>
    </div>
    
    <div class="main">
        <div class="welcome-section">
            <h2>Bienvenido al Sistema</h2>
            <p>Seleccione una opción para comenzar</p>
        </div>
        
        <div class="menu-container">
            <!-- Sección: Gestión de Alumnos -->
            <div class="menu-section">
                <h3 class="menu-section-title">👥 Gestión de Alumnos</h3>
                <div class="menu-grid">
                    <div class="menu-card" onclick="window.location.href='alumnos.php?anio=1'">
                        <span class="menu-card-icon">1️⃣</span>
                        <div class="menu-card-title">Primer Año</div>
                        <div class="menu-card-desc">Gestionar alumnos de 1° año</div>
                    </div>
                    
                    <div class="menu-card" onclick="window.location.href='alumnos.php?anio=2'">
                        <span class="menu-card-icon">2️⃣</span>
                        <div class="menu-card-title">Segundo Año</div>
                        <div class="menu-card-desc">Gestionar alumnos de 2° año</div>
                    </div>
                    
                    <div class="menu-card" onclick="window.location.href='alumnos.php?anio=3'">
                        <span class="menu-card-icon">3️⃣</span>
                        <div class="menu-card-title">Tercer Año</div>
                        <div class="menu-card-desc">Gestionar alumnos de 3° año</div>
                    </div>

                    <div class="menu-card" onclick="window.location.href='egresados.php'">
                        <span class="menu-card-icon">🎓</span>
                        <div class="menu-card-title">Egresados</div>
                        <div class="menu-card-desc">Ver y gestionar egresados</div>
                </div>
            </div>
            
            <!-- Sección: Documentación -->
            <div class="menu-section">
                <h3 class="menu-section-title">📁 Gestión Documental</h3>
                <div class="menu-grid">
                    <div class="menu-card primary" onclick="window.location.href='documentos_generales.php'">
                        <span class="menu-card-icon">📂</span>
                        <div class="menu-card-title">Documentos Generales</div>
                        <div class="menu-card-desc">Archivos y documentos institucionales</div>
                    </div>
                    
                    <div class="menu-card" onclick="window.location.href='documentos.php?anio=1'">
                        <span class="menu-card-icon">📄</span>
                        <div class="menu-card-title">Documentos 1° Año</div>
                        <div class="menu-card-desc">Documentación de primer año</div>
                    </div>
                    
                    <div class="menu-card" onclick="window.location.href='documentos.php?anio=2'">
                        <span class="menu-card-icon">📄</span>
                        <div class="menu-card-title">Documentos 2° Año</div>
                        <div class="menu-card-desc">Documentación de segundo año</div>
                    </div>
                    
                    <div class="menu-card" onclick="window.location.href='documentos.php?anio=3'">
                        <span class="menu-card-icon">📄</span>
                        <div class="menu-card-title">Documentos 3° Año</div>
                        <div class="menu-card-desc">Documentación de tercer año</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="footer">
        Sistema Administrativo Escolar &copy; <?php echo date('Y'); ?> | Soluciones Tecnológicas Ixchel
    </div>
</body>
</html>
