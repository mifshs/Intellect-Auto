<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ИНТЕЛЛЕКТ-АВТО - Надежные запчасти для коммерческой техники</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            color: #333;
            background: #fff;
        }

        .top-bar {
            background: #f5f5f5;
            padding: 8px 0;
            font-size: 13px;
        }

        .main-header {
            background: #fff;
            padding: 15px 0;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }

        .hero-section {
            position: relative;
            min-height: 600px;
            display: flex;
            align-items: center;
            background: linear-gradient(135deg, #1a1a1a 0%, #2d2d2d 50%, #1a1a1a 100%);
            overflow: hidden;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background:
                radial-gradient(circle at 20% 50%, rgba(0, 119, 204, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 80% 50%, rgba(0, 119, 204, 0.1) 0%, transparent 50%),
                url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.03'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
            opacity: 0.8;
        }

        .hero-content {
            position: relative;
            z-index: 10;
            max-width: 800px;
        }

        .hero-title {
            font-size: 48px;
            font-weight: 700;
            color: #fff;
            line-height: 1.2;
            margin-bottom: 20px;
        }

        .hero-subtitle {
            font-size: 18px;
            color: rgba(255,255,255,0.85);
            line-height: 1.6;
            margin-bottom: 30px;
            max-width: 600px;
        }

        .btn-primary {
            display: inline-block;
            background: #0077cc;
            color: #fff;
            padding: 16px 40px;
            font-size: 16px;
            font-weight: 600;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background: #005fa3;
            transform: translateY(-2px);
            box-shadow: 0 5px 20px rgba(0, 119, 204, 0.4);
        }

        .btn-catalog {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: #0077cc;
            color: #fff;
            padding: 10px 20px;
            font-size: 14px;
            font-weight: 500;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .btn-catalog:hover {
            background: #005fa3;
        }

        .btn-catalog svg {
            width: 16px;
            height: 16px;
        }

        .search-input {
            flex: 1;
            max-width: 500px;
            padding: 10px 15px;
            font-size: 14px;
            border: 1px solid #e0e0e0;
            border-radius: 4px;
            outline: none;
            transition: all 0.3s ease;
        }

        .search-input:focus {
            border-color: #0077cc;
            box-shadow: 0 0 0 3px rgba(0, 119, 204, 0.1);
        }

        .icon-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border: none;
            background: transparent;
            cursor: pointer;
            position: relative;
            transition: all 0.3s ease;
        }

        .icon-btn:hover {
            background: #f5f5f5;
            border-radius: 4px;
        }

        .cart-badge {
            position: absolute;
            top: 2px;
            right: 2px;
            background: #ff0000;
            color: #fff;
            font-size: 10px;
            font-weight: 600;
            min-width: 18px;
            height: 18px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .logo-icon {
            width: 40px;
            height: 40px;
        }

        .logo-text {
            font-size: 20px;
            font-weight: 700;
            color: #333;
        }

        .logo-tagline {
            font-size: 11px;
            color: #ffd700;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .nav-link {
            color: #666;
            text-decoration: none;
            font-size: 14px;
            transition: color 0.3s ease;
        }

        .nav-link:hover {
            color: #0077cc;
        }

        .city-selector {
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 5px;
            color: #666;
        }

        .city-selector:hover {
            color: #0077cc;
        }

        .phone-number {
            font-weight: 600;
            color: #333;
            text-decoration: none;
        }

        .phone-number:hover {
            color: #0077cc;
        }

        .hamburger-icon {
            width: 16px;
            height: 12px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .hamburger-icon span {
            display: block;
            width: 100%;
            height: 2px;
            background: #fff;
            border-radius: 1px;
        }

        .features-section {
            padding: 60px 0;
            background: #fff;
        }

        .feature-card {
            padding: 30px;
            background: #f9f9f9;
            border-radius: 8px;
            text-align: center;
            transition: all 0.3s ease;
        }

        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }

        .feature-icon {
            width: 60px;
            height: 60px;
            margin: 0 auto 20px;
            background: #0077cc;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .feature-icon svg {
            width: 30px;
            height: 30px;
            color: #fff;
        }

        .feature-title {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 10px;
            color: #333;
        }

        .feature-desc {
            font-size: 14px;
            color: #666;
            line-height: 1.5;
        }

        .catalog-section {
            padding: 60px 0;
            background: #f5f5f5;
        }

        .catalog-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin-top: 40px;
        }

        .catalog-item {
            background: #fff;
            padding: 30px;
            border-radius: 8px;
            text-align: center;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .catalog-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }

        .catalog-item-icon {
            width: 80px;
            height: 80px;
            margin: 0 auto 20px;
            background: linear-gradient(135deg, #0077cc 0%, #005fa3 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .catalog-item-icon svg {
            width: 40px;
            height: 40px;
            color: #fff;
        }

        .catalog-item-title {
            font-size: 16px;
            font-weight: 600;
            color: #333;
        }

        .cta-section {
            padding: 80px 0;
            background: linear-gradient(135deg, #0077cc 0%, #005fa3 100%);
            text-align: center;
        }

        .cta-title {
            font-size: 36px;
            font-weight: 700;
            color: #fff;
            margin-bottom: 20px;
        }

        .cta-subtitle {
            font-size: 18px;
            color: rgba(255,255,255,0.9);
            margin-bottom: 30px;
        }

        .btn-white {
            display: inline-block;
            background: #fff;
            color: #0077cc;
            padding: 16px 40px;
            font-size: 16px;
            font-weight: 600;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .btn-white:hover {
            background: #f5f5f5;
            transform: translateY(-2px);
            box-shadow: 0 5px 20px rgba(0,0,0,0.2);
        }

        .footer {
            background: #1a1a1a;
            color: #fff;
            padding: 40px 0 20px;
        }

        .footer-title {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 20px;
        }

        .footer-links {
            list-style: none;
            padding: 0;
        }

        .footer-links li {
            margin-bottom: 10px;
        }

        .footer-links a {
            color: rgba(255,255,255,0.7);
            text-decoration: none;
            font-size: 14px;
            transition: color 0.3s ease;
        }

        .footer-links a:hover {
            color: #fff;
        }

        .footer-bottom {
            border-top: 1px solid rgba(255,255,255,0.1);
            margin-top: 40px;
            padding-top: 20px;
            text-align: center;
            color: rgba(255,255,255,0.5);
            font-size: 14px;
        }

        @media (max-width: 768px) {
            .hero-title {
                font-size: 32px;
            }

            .hero-subtitle {
                font-size: 16px;
            }

            .catalog-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .top-bar .container {
                flex-direction: column;
                gap: 10px;
            }
        }
    </style>
</head>
<body>
    <!-- Top Bar -->
    <div class="top-bar">
        <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px; display: flex; justify-content: space-between; align-items: center;">
            <div class="city-selector">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                    <circle cx="12" cy="10" r="3"></circle>
                </svg>
                <span>Ваш город: Челябинск</span>
            </div>
            <div style="display: flex; gap: 25px; align-items: center;">
                <a href="#" class="nav-link">Акции</a>
                <a href="#" class="nav-link">О компании</a>
                <a href="#" class="nav-link">Адреса</a>
                <a href="#" class="nav-link">Контакты</a>
                <a href="tel:89000000000" class="phone-number">8 (900) 000 00 00</a>
            </div>
        </div>
    </div>

    <!-- Main Header -->
    <header class="main-header">
        <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
            <div style="display: flex; align-items: center; gap: 30px;">
                <!-- Logo -->
                <div class="logo">
                    <svg class="logo-icon" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="40" height="40" rx="8" fill="#0077cc"/>
                        <path d="M10 20L16 26L30 12" stroke="#ffd700" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <div>
                        <div class="logo-text">ИНТЕЛЛЕКТ-АВТО</div>
                        <div class="logo-tagline">Надежные запчасти</div>
                    </div>
                </div>

                <!-- Catalog Button -->
                <button class="btn-catalog">
                    <svg class="hamburger-icon" viewBox="0 0 16 12" fill="none">
                        <span></span>
                        <span></span>
                        <span></span>
                    </svg>
                    Каталог
                </button>

                <!-- Search -->
                <input type="text" class="search-input" placeholder="Поиск">

                <!-- Icons -->
                <div style="display: flex; gap: 10px; margin-left: auto;">
                    <button class="icon-btn">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#333" stroke-width="2">
                            <circle cx="9" cy="21" r="1"></circle>
                            <circle cx="20" cy="21" r="1"></circle>
                            <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                        </svg>
                        <span class="cart-badge">1</span>
                    </button>
                    <button class="icon-btn">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#333" stroke-width="2">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
            <div class="hero-content">
                <h1 class="hero-title">Запчасти для коммерческой техники и спецтехники</h1>
                <p class="hero-subtitle">
                    Ваш транспорт — это инструмент, который должен работать, а не стоять в ремонте.
                    Мы помогаем механикам, автопаркам и сервисным центрам держать технику в строю,
                    поставляя качественные запчасти для грузовиков, автобусов, спецтехники и прицепов —
                    точно в срок и по лучшей цене.
                </p>
                <a href="#" class="btn-primary">Стать клиентом</a>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features-section">
        <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
            <h2 style="text-align: center; font-size: 36px; font-weight: 700; margin-bottom: 40px; color: #333;">Почему выбирают нас</h2>
            <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px;">
                <div class="feature-card">
                    <div class="feature-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                            <polyline points="22 4 12 14.01 9 11.01"></polyline>
                        </svg>
                    </div>
                    <h3 class="feature-title">Гарантия качества</h3>
                    <p class="feature-desc">Все запчасти сертифицированы и имеют официальную гарантию</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="12" cy="12" r="10"></circle>
                            <polyline points="12 6 12 12 16 14"></polyline>
                        </svg>
                    </div>
                    <h3 class="feature-title">Быстрая доставка</h3>
                    <p class="feature-desc">Доставка по всей России в кратчайшие сроки</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <line x1="12" y1="1" x2="12" y2="23"></line>
                            <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                        </svg>
                    </div>
                    <h3 class="feature-title">Лучшие цены</h3>
                    <p class="feature-desc">Актуальные цены и специальные предложения для партнеров</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                        </svg>
                    </div>
                    <h3 class="feature-title">Профессиональная поддержка</h3>
                    <p class="feature-desc">Консультации экспертов и помощь в подборе запчастей</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Catalog Section -->
    <section class="catalog-section">
        <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
            <h2 style="text-align: center; font-size: 36px; font-weight: 700; color: #333;">Каталог запчастей</h2>
            <div class="catalog-grid">
                <div class="catalog-item">
                    <div class="catalog-item-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="12" cy="12" r="10"></circle>
                            <line x1="12" y1="8" x2="12" y2="12"></line>
                            <line x1="12" y1="16" x2="12.01" y2="16"></line>
                        </svg>
                    </div>
                    <h3 class="catalog-item-title">Двигатель и компоненты</h3>
                </div>
                <div class="catalog-item">
                    <div class="catalog-item-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="12" cy="12" r="3"></circle>
                            <path d="M12 1v6m0 6v10"></path>
                            <path d="m4.22 4.22 4.24 4.24m7.08 7.08 4.24 4.24"></path>
                            <path d="M1 12h6m6 0h10"></path>
                            <path d="m4.22 19.78 4.24-4.24m7.08-7.08 4.24-4.24"></path>
                        </svg>
                    </div>
                    <h3 class="catalog-item-title">Ходовая часть</h3>
                </div>
                <div class="catalog-item">
                    <div class="catalog-item-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect>
                            <path d="M16 3v4m-8-4v4"></path>
                        </svg>
                    </div>
                    <h3 class="catalog-item-title">Кузовные детали</h3>
                </div>
                <div class="catalog-item">
                    <div class="catalog-item-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"></path>
                        </svg>
                    </div>
                    <h3 class="catalog-item-title">Электрика</h3>
                </div>
                <div class="catalog-item">
                    <div class="catalog-item-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="1" y="3" width="15" height="13"></rect>
                            <polygon points="16 8 20 8 23 11 23 16 16 16 16 8"></polygon>
                            <circle cx="5.5" cy="18.5" r="2.5"></circle>
                            <circle cx="18.5" cy="18.5" r="2.5"></circle>
                        </svg>
                    </div>
                    <h3 class="catalog-item-title">Грузовики и прицепы</h3>
                </div>
                <div class="catalog-item">
                    <div class="catalog-item-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                        </svg>
                    </div>
                    <h3 class="catalog-item-title">Спецтехника</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container" style="max-width: 800px; margin: 0 auto; padding: 0 20px;">
            <h2 class="cta-title">Станьте нашим клиентом</h2>
            <p class="cta-subtitle">Оставьте заявку и получите консультацию специалиста</p>
            <a href="#" class="btn-white">Оставить заявку</a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
            <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 40px;">
                <div>
                    <div class="logo" style="margin-bottom: 20px;">
                        <svg class="logo-icon" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="40" height="40" rx="8" fill="#0077cc"/>
                            <path d="M10 20L16 26L30 12" stroke="#ffd700" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <div>
                            <div class="logo-text" style="color: #fff;">ИНТЕЛЛЕКТ-АВТО</div>
                        </div>
                    </div>
                    <p style="color: rgba(255,255,255,0.7); font-size: 14px; line-height: 1.6;">
                        Надежный поставщик запчастей для коммерческой и специальной техники
                    </p>
                </div>
                <div>
                    <h4 class="footer-title">Каталог</h4>
                    <ul class="footer-links">
                        <li><a href="#">Двигатель</a></li>
                        <li><a href="#">Ходовая часть</a></li>
                        <li><a href="#">Кузовные детали</a></li>
                        <li><a href="#">Электрика</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="footer-title">Компания</h4>
                    <ul class="footer-links">
                        <li><a href="#">О компании</a></li>
                        <li><a href="#">Акции</a></li>
                        <li><a href="#">Адреса</a></li>
                        <li><a href="#">Контакты</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="footer-title">Контакты</h4>
                    <ul class="footer-links">
                        <li><a href="tel:89000000000">8 (900) 000 00 00</a></li>
                        <li><a href="mailto:info@intellect-auto.ru">info@intellect-auto.ru</a></li>
                        <li><a href="#">Челябинск, ул. Примерная</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                © 2024 ИНТЕЛЛЕКТ-АВТО. Все права защищены.
            </div>
        </div>
    </footer>
</body>
</html>
