<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anggun & Hendra Wedding Invitation</title>
    <link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><text y=%22.9em%22 font-size=%2290%22>❤️</text></svg>">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Montserrat:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&family=Amiri:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            scroll-behavior: smooth;
            background-color: rgb(220, 231, 243);
            color: #1e3a8a;
            overflow-x: hidden;
        }

        .script-font {
            font-family: 'Great Vibes', cursive;
        }

        .serif-font {
            font-family: 'Playfair Display', serif;
        }

        .arabic-font {
            font-family: 'Amiri', serif;
            direction: rtl;
        }

        .cover-section {
            background-image: url("foto/bg.jpeg");
            background-size: cover;
            background-position: center;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 9999;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            transition: all 1s ease;
        }

        .cover-hidden {
            opacity: 0;
            pointer-events: none;
        }

        .hero-section {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100%25' height='100%25' viewBox='0 0 1200 800'%3E%3Cdefs%3E%3CradialGradient id='a' cx='0' cy='800' r='800' gradientUnits='userSpaceOnUse'%3E%3Cstop offset='0' stop-color='%23e0f2fe'/%3E%3Cstop offset='1' stop-color='%23e0f2fe' stop-opacity='0'/%3E%3C/radialGradient%3E%3CradialGradient id='b' cx='1200' cy='800' r='800' gradientUnits='userSpaceOnUse'%3E%3Cstop offset='0' stop-color='%23e0f2fe'/%3E%3Cstop offset='1' stop-color='%23e0f2fe' stop-opacity='0'/%3E%3C/radialGradient%3E%3CradialGradient id='c' cx='600' cy='0' r='600' gradientUnits='userSpaceOnUse'%3E%3Cstop offset='0' stop-color='%23e0f2fe'/%3E%3Cstop offset='1' stop-color='%23e0f2fe' stop-opacity='0'/%3E%3C/radialGradient%3E%3CradialGradient id='d' cx='600' cy='800' r='600' gradientUnits='userSpaceOnUse'%3E%3Cstop offset='0' stop-color='%23f8fafc'/%3E%3Cstop offset='1' stop-color='%23f8fafc' stop-opacity='0'/%3E%3C/radialGradient%3E%3CradialGradient id='e' cx='0' cy='0' r='800' gradientUnits='userSpaceOnUse'%3E%3Cstop offset='0' stop-color='%23e0f2fe'/%3E%3Cstop offset='1' stop-color='%23e0f2fe' stop-opacity='0'/%3E%3C/radialGradient%3E%3CradialGradient id='f' cx='1200' cy='0' r='800' gradientUnits='userSpaceOnUse'%3E%3Cstop offset='0' stop-color='%23e0f2fe'/%3E%3Cstop offset='1' stop-color='%23e0f2fe' stop-opacity='0'/%3E%3C/radialGradient%3E%3C/defs%3E%3Crect fill='url(%23a)' width='1200' height='800'/%3E%3Crect fill='url(%23b)' width='1200' height='800'/%3E%3Crect fill='url(%23c)' width='1200' height='800'/%3E%3Crect fill='url(%23d)' width='1200' height='800'/%3E%3Crect fill='url(%23e)' width='1200' height='800'/%3E%3Crect fill='url(%23f)' width='1200' height='800'/%3E%3C/svg%3E");
            background-size: cover;
            background-position: center;
        }

        .flower-decoration {
            position: absolute;
            width: 150px;
            height: 150px;
            opacity: 0.6;
            z-index: 0;
        }

        .countdown-container {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(5px);
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(30, 58, 138, 0.1);
        }

        .couple-card {
            background: rgba(255, 255, 255, 0.9);
            border-radius: 20px;
            box-shadow: 0 4px 20px rgba(30, 58, 138, 0.08);
            transition: all 0.3s ease;
        }

        .couple-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(30, 58, 138, 0.1);
        }

        .event-card {
            background: rgba(255, 255, 255, 0.9);
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(30, 58, 138, 0.08);
        }

        .gallery-image {
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(30, 58, 138, 0.1);
            transition: all 0.3s ease;
        }

        .gallery-image:hover {
            transform: scale(1.03);
        }

        .quran-verse {
            background: linear-gradient(to right, #dbeafe, #f8fafc);
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(30, 58, 138, 0.05);
        }

        .map-container {
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(30, 58, 138, 0.1);
        }

        .twibbon-container,
        .gift-container,
        .wishes-container,
        .save-date-container {
            background: linear-gradient(135deg, #dbeafe 0%, #f8fafc 100%);
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(30, 58, 138, 0.08);
        }

        .music-control {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 100;
            background: rgba(255, 255, 255, 0.9);
            border-radius: 50%;
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 2px 10px rgba(30, 58, 138, 0.1);
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .music-control:hover {
            transform: scale(1.1);
        }

        .nav-dot {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background-color: #bfdbfe;
            margin: 8px 0;
            transition: all 0.3s ease;
        }

        .nav-dot.active {
            background-color: #1e40af;
            transform: scale(1.3);
        }

        .section {
            min-height: 100vh;
            padding: 4rem 1rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
            position: relative;
            scroll-margin-top: 1rem;
        }

        .ornament {
            position: absolute;
            opacity: 0.1;
            z-index: 0;
        }

        .ornament-top-left {
            top: 0;
            left: 0;
        }

        .ornament-bottom-right {
            bottom: 0;
            right: 0;
            transform: rotate(180deg);
        }

        .btn-primary {
            background-color: #1e40af;
            color: white;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #1e3a8a;
            transform: translateY(-2px);
        }

        .btn-outline {
            border: 2px solid #1e40af;
            color: #1e40af;
            transition: all 0.3s ease;
        }

        .btn-outline:hover {
            background-color: #1e40af;
            color: white;
        }

        .animate-float {
            animation: float 3s ease-in-out infinite;
        }

        .gallery-container {
            overflow-x: auto;
            scroll-snap-type: x mandatory;
            scrollbar-width: none;
            /* Firefox */
            -ms-overflow-style: none;
            /* IE and Edge */
        }

        .gallery-container::-webkit-scrollbar {
            display: none;
            /* Chrome, Safari, Opera */
        }

        .gallery-item {
            scroll-snap-align: start;
            flex: 0 0 auto;
        }

        .bank-card {
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(30, 58, 138, 0.08);
            transition: all 0.3s ease;
        }

        .bank-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(30, 58, 138, 0.12);
        }

        .form-input {
            border: 1px solid #bfdbfe;
            border-radius: 8px;
            padding: 0.75rem;
            width: 100%;
            transition: all 0.3s ease;
        }

        .form-input:focus {
            outline: none;
            border-color: #1e40af;
            box-shadow: 0 0 0 3px rgba(30, 64, 175, 0.1);
        }

        @keyframes float {
            0% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-10px);
            }

            100% {
                transform: translateY(0px);
            }
        }

        .cover-photo {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            overflow: hidden;
            border: 5px solid white;
            box-shadow: 0 5px 15px rgba(30, 58, 138, 0.2);
        }

        .main-content {
            opacity: 0;
            transition: opacity 1s ease;
        }

        .main-content.visible {
            opacity: 1;
        }

        .floral-border {
            position: absolute;
            width: 100%;
            height: 100px;
            pointer-events: none;
        }

        .floral-border-top {
            top: 0;
        }

        .floral-border-bottom {
            bottom: 0;
            transform: rotate(180deg);
        }

        .hero-photo {
            width: 100%;
            max-width: 500px;
            height: 280px;
            border-radius: 15px;
            overflow: hidden;
            border: 5px solid white;
            box-shadow: 0 5px 15px rgba(30, 58, 138, 0.2);
            margin: 0 auto;
        }

        .save-date-btn {
            background-color: #1e40af;
            color: white;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }

        .save-date-btn:hover {
            background-color: #1e3a8a;
            transform: translateY(-2px);
        }
    </style>
</head>

<body>
    <section id="cover" class="cover-section">
        <div class="container mx-auto px-4 text-center">
            <div class="cover-photo mx-auto mb-8 bg-blue-100 flex items-center justify-center">
                <img src="foto/fto2.jpeg" alt="Foto" class="rounded-full object-cover" />
            </div>
            <h1 class="script-font text-5xl md:text-7xl mb-4 text-blue-800 animate-float">Hendra & Anggun</h1>
            <p class="serif-font text-xl md:text-2xl mb-8">Wedding Invitation</p>
            <div class="w-24 h-1 bg-blue-800 mx-auto mb-12"></div>

            <button id="openInvitation" class="btn-primary px-8 py-4 rounded-full text-lg">
                <i class="fas fa-envelope-open-text mr-2"></i> Buka Undangan
            </button>
        </div>
    </section>

    <div id="mainContent" class="main-content">
        <audio id="backgroundMusic" loop>
            <source src="musik/Tahta Hatiku.mp3" type="audio/mpeg">
            Your browser does not support the audio element.
        </audio>

        <div class="music-control" id="musicControl">
            <i class="fas fa-music text-blue-800"></i>
        </div>

        <div class="fixed top-1/2 left-4 transform -translate-y-1/2 z-40 hidden md:block">
            <div class="flex flex-col items-center">
                <a href="#hero" class="nav-dot active" data-section="hero"></a>
                <a href="#quran" class="nav-dot" data-section="quran"></a>
                <a href="#couple" class="nav-dot" data-section="couple"></a>
                <a href="#events" class="nav-dot" data-section="events"></a>
                <a href="#save-date" class="nav-dot" data-section="save-date"></a>
                <a href="#map" class="nav-dot" data-section="map"></a>
                <a href="#gallery" class="nav-dot" data-section="gallery"></a>
                <a href="#twibbon" class="nav-dot" data-section="twibbon"></a>
                <a href="#gift" class="nav-dot" data-section="gift"></a>
                <a href="#wishes" class="nav-dot" data-section="wishes"></a>
            </div>
        </div>

        <section id="hero" class="section hero-section">
            <div class="container mx-auto relative z-5">
                <div class="text-center">
                    <div class="relative w-full">
                        <!-- Background Image -->
                        <img src="foto/bg.jpeg" alt="Background" class="w-full h-60 object-cover">

                        <!-- Lingkaran Foto di Tengah Bawah (ukuran besar) -->
                        <div class="absolute left-1/2 transform -translate-x-1/2 bottom-0 translate-y-1/2">
                            <img src="foto/fto2.jpeg" alt="Foto Profil"
                                class="cover-photo mx-auto mb-8 bg-blue-100 flex border-white shadow-lg object-cover">
                        </div>
                    </div>

                    <!-- Konten di bawah foto, diberi padding top agar tidak menabrak -->
                    <div class="text-center pt-24">
                        <h1 class="script-font text-5xl md:text-7xl mb-4 text-blue-800 animate-float">Anggun & Hendra</h1>
                        <p class="serif-font text-xl md:text-2xl mb-4">Wedding Invitation</p>
                        <div class="w-24 h-1 bg-blue-800 mx-auto mb-4"></div>
                    </div>

                    <div class="countdown-container p-6 md:p-8 max-w-2xl mx-auto mb-6">
                        <p class="serif-font text-lg mb-2">We're getting married on</p>
                        <p class="serif-font text-2xl md:text-3xl font-semibold mb-2">19 Juni 2025</p>

                        <div class="grid grid-cols-4 gap-2 md:gap-4">
                            <div class="text-center">
                                <div id="days" class="text-2xl md:text-4xl font-bold text-blue-800">00</div>
                                <div class="text-xs md:text-sm mt-1">Days</div>
                            </div>
                            <div class="text-center">
                                <div id="hours" class="text-2xl md:text-4xl font-bold text-blue-800">00</div>
                                <div class="text-xs md:text-sm mt-1">Hours</div>
                            </div>
                            <div class="text-center">
                                <div id="minutes" class="text-2xl md:text-4xl font-bold text-blue-800">00</div>
                                <div class="text-xs md:text-sm mt-1">Minutes</div>
                            </div>
                            <div class="text-center">
                                <div id="seconds" class="text-2xl md:text-4xl font-bold text-blue-800">00</div>
                                <div class="text-xs md:text-sm mt-1">Seconds</div>
                            </div>
                        </div>
                    </div>
                    <a href="#couple" class="inline-block animate-bounce mt-2">
                        <i class="fas fa-chevron-down text-blue-800 text-2xl"></i>
                    </a>
                </div>
            </div>
        </section>

        <section id="quran" class="section bg-blue-70">
            <div class="container mx-auto px-4 py-16 relative z-10">
                <div class="quran-verse p-8 md:p-12 max-w-4xl mx-auto text-center">
                    <h2 class="serif-font text-3xl md:text-4xl mb-6 text-blue-800">Bismillahirrahmanirrahim</h2>
                    <div class="w-16 h-1 bg-blue-800 mx-auto mb-8"></div>

                    <p class="arabic-font text-2xl md:text-3xl mb-8 font-semibold text-blue-900">
                        وَمِنْ آيَاتِهِ أَنْ خَلَقَ لَكُم مِّنْ أَنفُسِكُمْ أَزْوَاجًا لِّتَسْكُنُوا إِلَيْهَا وَجَعَلَ بَيْنَكُم مَّوَدَّةً وَرَحْمَةً ۚ إِنَّ فِي ذَٰلِكَ لَآيَاتٍ لِّقَوْمٍ يَتَفَكَّرُونَ
                    </p>

                    <p class="text-xl md:text-2xl mb-6 serif-font text-blue-800 serif-font">
                        "Dan di antara tanda-tanda kekuasaan-Nya ialah Dia menciptakan untukmu istri-istri dari jenismu sendiri, supaya kamu cenderung dan merasa tenteram kepadanya, dan dijadikan-Nya diantaramu rasa kasih dan sayang. Sesungguhnya pada yang demikian itu benar-benar terdapat tanda-tanda bagi kaum yang berfikir."
                    </p>
                    <p class="text-lg md:text-xl text-blue-800 font-semibold ">
                        (QS. Ar-Rum: 21)
                    </p>
                </div>
            </div>
        </section>

        <section id="couple" class="section">
            <div class="container mx-auto px-4 py-16 relative z-10">
                <h2 class="script-font text-4xl md:text-5xl mb-2 text-center text-blue-800">The Bride & Groom</h2>
                <p class="serif-font text-center mb-12">
                    Assalamu’alaikum Wr. Wb.<br>
                    Dengan memohon rahmat dan ridho Allah SWT, kami mengundang sekaligus mengharapkan doa restu dari Bapak/Ibu dan Saudara/i dalam acara pernikahan kami:
                </p>

                <div class="flex flex-col md:flex-row gap-8 max-w-5xl mx-auto">
                    <!-- Pengantin Wanita -->
                    <div class="couple-card p-6 md:p-8 flex-1">
                        <div class="text-center">
                            <div class="w-48 h-48 mx-auto mb-6 rounded-full overflow-hidden bg-blue-100 flex items-center justify-center">
                                <img src="foto/wanita.jpeg" alt="Anggun" class="w-full h-full object-cover">
                            </div>
                            <br>
                            <h3 class="script-font text-3xl md:text-4xl mb-2 text-blue-800">Anggun Novita Sari</h3>
                            <p class="mb-4">Putri kedua dari</p>
                            <p class="font-medium mb-1">Bapak Masbuk & Ibu Sri Mulyati</p>
                            <p class="text-sm text-gray-600 mb-4">
                                Dsn. Pancur Rt 01/Rw 04 Ds. Minohorejo Kec. Widang Kab. Tuban
                            </p>
                            <div class="flex justify-center space-x-4">
                                <a href="#" class="text-blue-800 hover:text-blue-600">
                                    <i class="fab fa-instagram text-xl"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Simbol & -->
                    <div class="flex items-center justify-center">
                        <div class="hidden md:block text-5xl text-blue-800">&</div>
                    </div>

                    <!-- Pengantin Pria -->
                    <div class="couple-card p-6 md:p-8 flex-1">
                        <div class="text-center">
                            <div class="w-48 h-48 mx-auto mb-6 rounded-full overflow-hidden bg-blue-100 flex items-center justify-center">
                                <img src="foto/pria.jpeg" alt="Hendra" class="w-full h-full object-cover">
                            </div>
                            <br>
                            <h3 class="script-font text-3xl md:text-4xl mb-2 text-blue-800">Eko Hendra Gunawan</h3>
                            <p class="mb-4">Putra pertama dari</p>
                            <p class="font-medium mb-1">Bapak Tasrip & Ibu Yatmiatun</p>
                            <p class="text-sm text-gray-600 mb-4">
                                Dan. Karang Lor Rt 01/Rw 02 Ds. Waieran Kec. Grabagan Kab. Tuban
                            </p>
                            <div class="flex justify-center space-x-4">
                                <a href="#" class="text-blue-800 hover:text-blue-600">
                                    <i class="fab fa-instagram text-xl"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section id="events" class="section bg-blue-50">
            <div class="container mx-auto px-4 py-16 relative z-10">
                <h2 class="script-font text-4xl md:text-5xl mb-6 text-center text-blue-800">Wedding Events</h2>
                <p class="serif-font text-center mb-12">Kami bermaksud untuk mengundang saudara/(i) dalam acara pernikahan kami pada:</p>

                <div class="flex flex-col md:flex-row gap-8 max-w-5xl mx-auto">
                    <div class="event-card p-6 md:p-8 flex-1">
                        <div class="text-center">
                            <div class="w-16 h-16 mx-auto mb-4 rounded-full bg-blue-100 flex items-center justify-center">
                                <i class="fas fa-ring text-blue-800 text-2xl"></i>
                            </div>
                            <h3 class="serif-font text-2xl md:text-3xl mb-2 text-blue-800">Akad Nikah</h3>
                            <div class="w-12 h-1 bg-blue-800 mx-auto mb-4"></div>

                            <p class="font-medium text-lg mb-2">Kamis, 19 Juni 2025</p>
                            <p class="mb-2">08:00 - 09:00 WIB</p>
                            <p class="mb-4">Kediaman Mempelai Wanita</p>
                            <p class="text-sm text-gray-600">Dsn. Pancur Rt 01/Rw 04 Ds. Minohorejo kec. Widang kab. Tuban</p>
                        </div>
                    </div>

                    <div class="event-card p-6 md:p-8 flex-1">
                        <div class="text-center">
                            <div class="w-16 h-16 mx-auto mb-4 rounded-full bg-blue-100 flex items-center justify-center">
                                <i class="fas fa-glass-cheers text-blue-800 text-2xl"></i>
                            </div>
                            <h3 class="serif-font text-2xl md:text-3xl mb-2 text-blue-800">Resepsi Pernikahan</h3>
                            <div class="w-12 h-1 bg-blue-800 mx-auto mb-4"></div>

                            <p class="font-medium text-lg mb-2">Kamis, 19 Juni 2025</p>
                            <p class="mb-2">09:30 WIB - Smapai Selesai</p>
                            <p class="mb-4">Kediaman Mempelai Wanita</p>
                            <p class="text-sm text-gray-600">Dsn. Pancur Rt 01/Rw 04 Ds. Minohorejo Kec. Widang Kab. Tuban</p>
                        </div>
                    </div>
                </div>

                <div class="text-center mt-12">
                    <a href="#map" class="btn-primary inline-block px-6 py-3 rounded-full">
                        <i class="fas fa-map-marker-alt mr-2"></i> View Location
                    </a>
                </div>
            </div>
        </section>

        <section id="save-date" class="section">
            <div class="container mx-auto px-4 py-16 relative z-10">
                <h2 class="script-font text-4xl md:text-5xl mb-6 text-center text-blue-800">Save the Date</h2>
                <p class="serif-font text-center mb-12">Tandai kalender Anda untuk hari spesial kami</p>

                <div class="save-date-container p-10 max-w-6xl mx-auto text-center">
                    <div class="bg-white rounded-lg p-8 shadow-md">
                        <div class="flex flex-col md:flex-row items-center justify-center gap-8">
                            <div class="text-center md:text-right">
                                <h3 class="text-3xl font-bold text-blue-800">19</h3>
                                <p class="text-xl">Juni</p>
                                <p class="text-lg">2025</p>
                            </div>

                            <div class="hidden md:block w-px h-20 bg-blue-800"></div>

                            <div class="text-center md:text-left">
                                <p class="text-xl mb-2">Akad Nikah: 08:00 WIB</p>
                                <p class="text-xl">Resepsi Pernikahan: 09:30 WIB</p>
                            </div>
                        </div>

                        <div class="mt-8">
                            <button id="addToCalendar" class="save-date-btn px-6 py-3 rounded-full">
                                <i class="far fa-calendar-plus mr-2"></i> Add to Calendar
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="map" class="section bg-blue-50">
            <div class="container mx-auto px-4 py-16 relative z-10">
                <h2 class="script-font text-4xl md:text-5xl mb-6 text-center text-blue-800">Location</h2>
                <p class="serif-font text-center mb-12">Ini adalah denah lokasi acara dilaksanakan</p>

                <!-- Peta dengan tinggi besar dan lebar tengah -->
                <div class="w-full max-w-5xl h-[500px] mx-auto overflow-hidden rounded-xl shadow-lg mb-6">
                    <iframe
                        src="https://www.google.com/maps?q=-7.006325,112.143449&hl=id&z=17&output=embed"
                        width="100%"
                        height="100%"
                        style="border:0;"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>

                <!-- Tombol Lokasi -->
                <div class="text-center">
                    <a href="https://www.google.com/maps/place/7%C2%B000'22.8%22S+112%C2%B008'36.4%22E/@-7.006325,112.143449,17z"
                        target="_blank"
                        class="inline-block bg-blue-800 text-white px-6 py-3 rounded-full shadow hover:bg-blue-700 transition duration-300">
                        <i class="fas fa-map-marker-alt mr-2"></i> Buka Lokasi di Google Maps
                    </a>
                </div>
            </div>
        </section>


        <section id="gallery" class="section">
            <div class="container mx-auto px-4 py-16 relative z-10">
                <h2 class="script-font text-4xl md:text-5xl mb-6 text-center text-blue-800">Our Moments</h2>
                <p class="serif-font text-center mb-12">Beautiful memories we've shared together</p>

                <!-- Tambahkan wrapper overflow -->
                <div class="overflow-x-auto">
                    <div class="gallery-container flex space-x-4 pb-6 snap-x snap-mandatory scroll-smooth w-max">
                        <!-- Gambar 1 -->
                        <div class="gallery-item flex-shrink-0 w-72 h-96 rounded-xl overflow-hidden shadow-md snap-center">
                            <img src="foto/fto1.jpeg" alt="Gallery Image 1" class="w-full h-full object-cover">
                        </div>
                        <!-- Gambar 2 -->
                        <div class="gallery-item flex-shrink-0 w-72 h-96 rounded-xl overflow-hidden shadow-md snap-center">
                            <img src="foto/fto2.jpeg" alt="Gallery Image 2" class="w-full h-full object-cover">
                        </div>
                        <!-- Gambar 3 -->
                        <div class="gallery-item flex-shrink-0 w-72 h-96 rounded-xl overflow-hidden shadow-md snap-center">
                            <img src="foto/fto3.jpeg" alt="Gallery Image 3" class="w-full h-full object-cover">
                        </div>
                        <!-- Gambar 4 -->
                        <div class="gallery-item flex-shrink-0 w-72 h-96 rounded-xl overflow-hidden shadow-md snap-center">
                            <img src="foto/fto4.jpeg" alt="Gallery Image 4" class="w-full h-full object-cover">
                        </div>
                        <!-- Gambar 5 -->
                        <div class="gallery-item flex-shrink-0 w-72 h-96 rounded-xl overflow-hidden shadow-md snap-center">
                            <img src="foto/fto5.jpeg" alt="Gallery Image 5" class="w-full h-full object-cover">
                        </div>
                        <!-- Gambar 6 -->
                        <div class="gallery-item flex-shrink-0 w-72 h-96 rounded-xl overflow-hidden shadow-md snap-center">
                            <img src="foto/bg.jpeg" alt="Gallery Image 6" class="w-full h-full object-cover">
                        </div>
                    </div>
                </div>

                <div class="text-center mt-6">
                    <p class="text-sm text-blue-800">
                        <i class="fas fa-arrow-left mr-2"></i> Swipe to see more <i class="fas fa-arrow-right ml-2"></i>
                    </p>
                </div>
            </div>
        </section>

        <section id="twibbon" class="section bg-blue-50">
            <div class="container mx-auto px-4 py-16 relative z-10">
                <h2 class="script-font text-4xl md:text-5xl mb-6 text-center text-blue-800">Wedding Twibbon</h2>
                <p class="serif-font text-center mb-12">
                    Abadikan momen bersama kami dengan foto dan tag kami di sosial media
                </p>

                <div class="twibbon-container grid grid-cols-1 md:grid-cols-3 gap-6 max-w-5xl mx-auto mb-12">
                    <div class="bg-blue-100 rounded-lg overflow-hidden aspect-[9/16]">
                        <img src="foto/twbn1.jpg" alt="Twibbon 1" class="w-full h-full object-cover object-top">
                    </div>
                    <div class="bg-blue-100 rounded-lg overflow-hidden aspect-[9/16]">
                        <img src="foto/twbn-temp.png" alt="Twibbon 2" class="w-full h-full object-cover object-top">
                    </div>
                    <div class="bg-blue-100 rounded-lg overflow-hidden aspect-[9/16]">
                        <img src="foto/twbn2.jpg" alt="Twibbon 3" class="w-full h-full object-cover object-top">
                    </div>
                </div>

                <div class="text-center">
                    <a href="https://www.twibbonize.com/hendra-anggun-wedding" class="btn-primary inline-block px-6 py-3 rounded-full">
                        <i class="fas fa-download mr-2"></i> Download Twibbon
                    </a>
                </div>
            </div>
        </section>



        <section id="gift" class="section">
            <div class="container mx-auto px-4 py-16 relative z-10">
                <h2 class="script-font text-4xl md:text-5xl mb-6 text-center text-blue-800">Wedding Gift</h2>
                <p class="serif-font text-center mb-12">Your prayers and blessings are our greatest gift, but if you wish to honor us with a gift, we've provided the following options</p>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                    <div class="bank-card p-6">
                        <div class="text-center">
                            <div class="w-16 h-16 mx-auto mb-4 rounded-full bg-blue-100 flex items-center justify-center">
                                <i class="fas fa-university text-blue-800 text-2xl"></i>
                            </div>
                            <h3 class="text-xl font-semibold mb-2">Bank BCA</h3>
                            <p class="text-gray-600 mb-4">Anggun</p>
                            <div class="bg-blue-50 rounded-lg p-4 mb-4">
                                <p class="text-2xl font-mono font-semibold">1234 5678 9012 3456</p>
                            </div>
                            <button class="btn-outline px-4 py-2 rounded-full text-sm copy-btn" data-clipboard="1234 5678 9012 3456">
                                <i class="far fa-copy mr-2"></i> Copy Number
                            </button>
                        </div>
                    </div>

                    <div class="bank-card p-6">
                        <div class="text-center">
                            <div class="w-16 h-16 mx-auto mb-4 rounded-full bg-blue-100 flex items-center justify-center">
                                <i class="fas fa-university text-blue-800 text-2xl"></i>
                            </div>
                            <h3 class="text-xl font-semibold mb-2">Bank Mandiri</h3>
                            <p class="text-gray-600 mb-4">Hendra</p>
                            <div class="bg-blue-50 rounded-lg p-4 mb-4">
                                <p class="text-2xl font-mono font-semibold">9876 5432 1098 7654</p>
                            </div>
                            <button class="btn-outline px-4 py-2 rounded-full text-sm copy-btn" data-clipboard="9876 5432 1098 7654">
                                <i class="far fa-copy mr-2"></i> Copy Number
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="wishes" class="section bg-blue-50">
            <div class="container mx-auto px-4 py-16 relative z-10">
                <h2 class="script-font text-4xl md:text-5xl mb-6 text-center text-blue-800">Wishes & Prayers</h2>
                <p class="serif-font text-center mb-12">Merupakan suatu kehormatan dan kebahagiaan bagi kami apabila Bapak/Ibu/Saudara/i berkenan hadir untuk memberikan doa restu kepada kami</p>

                <div class="wishes-container p-8 max-w-4xl mx-auto">
                    <form id="wishesForm" class="mb-12">
                        <div class="mb-6">
                            <label for="name" class="block mb-2 font-medium">Your Name</label>
                            <input type="text" id="name" name="nama" class="form-input" placeholder="Enter your name" required>
                        </div>
                        <div class="mb-6">
                            <label for="message" class="block mb-2 font-medium">Your Message</label>
                            <textarea id="message" name="pesan" rows="4" class="form-input" placeholder="Write your wishes and prayers here" required></textarea>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn-primary px-6 py-3 rounded-full">
                                <i class="fas fa-paper-plane mr-2"></i> Send Wishes
                            </button>
                        </div>
                    </form>

                    <div class="border-t border-blue-200 pt-8">
                        <h3 class="text-xl font-semibold mb-6 text-center">Ucapan & Doa</h3>

                        <div id="wishesList" class="space-y-6">
                            <p class="text-center text-gray-500" id="loadingWishes">Memuat ucapan...</p>
                        </div>
                    </div>

                    <div class="text-center mt-12">
                        <p class="text-lg font-medium">Wassalamu'alaikum Warahmatullahi Wabarakatuh</p>
                    </div>
                </div>
            </div>
        </section>

        <footer class="bg-blue-800 text-white py-8">
            <div class="container mx-auto px-4 text-center">
                <h2 class="script-font text-3xl mb-4">Anggun & Hendra</h2>
                <p class="mb-6">Thank you for being part of our special day</p>
                <p class="text-sm">June 19, 2025</p>
            </div>
        </footer>
    </div>

    <script>
        // Variabel global untuk objek audio
        let backgroundMusic;

        document.addEventListener('DOMContentLoaded', function() {
            // Inisialisasi elemen audio setelah DOM dimuat
            backgroundMusic = document.getElementById('backgroundMusic');
            if (backgroundMusic) {
                backgroundMusic.pause(); // Pastikan dalam keadaan jeda di awal
            }

            // Cover Open Animation
            document.getElementById('openInvitation').addEventListener('click', function() {
                document.getElementById('cover').classList.add('cover-hidden');
                document.getElementById('mainContent').classList.add('visible');

                // Putar musik setelah interaksi pengguna (klik tombol)
                if (backgroundMusic) {
                    backgroundMusic.play().catch(e => {
                        console.error("Autoplay gagal:", e);
                        // Opsional: Tampilkan pesan ke pengguna bahwa musik tidak bisa diputar otomatis
                        alert("Musik tidak dapat diputar otomatis. Silakan gunakan tombol musik di pojok kanan bawah.");
                    });
                    updateMusicControlIcon(true); // Perbarui ikon menjadi pause
                }

                // Gulir otomatis ke bagian hero
                setTimeout(function() {
                    document.getElementById('hero').scrollIntoView({
                        behavior: 'smooth'
                    });
                    // Tampilkan notifikasi musik
                    showMusicNotification();
                }, 500);
            });

            // Tampilkan notifikasi musik
            function showMusicNotification() {
                const notification = document.createElement('div');
                notification.className = 'fixed top-4 right-4 bg-white p-4 rounded-lg shadow-lg z-50 flex items-center';
                notification.innerHTML = `
                    <i class="fas fa-music text-blue-800 mr-3"></i>
                    <div>
                        <p class="font-medium">Now Playing</p>
                        <p class="text-sm text-gray-600">Tahta Hatiku</p>
                    </div>
                    <button class="ml-4 text-gray-400 hover:text-gray-600" id="closeNotification">
                        <i class="fas fa-times"></i>
                    </button>
                `;
                document.body.appendChild(notification);

                document.getElementById('closeNotification').addEventListener('click', function() {
                    notification.remove();
                });

                setTimeout(function() {
                    notification.classList.add('opacity-0', 'transition-opacity', 'duration-500');
                    setTimeout(function() {
                        notification.remove();
                    }, 500);
                }, 5000);
            }

            // Countdown Timer
            function updateCountdown() {
                const weddingDate = new Date("June 19, 2025 08:00:00").getTime();
                const now = new Date().getTime();
                const distance = weddingDate - now;

                const days = Math.floor(distance / (1000 * 60 * 60 * 24));
                const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((distance % (1000 * 60)) / 1000);

                document.getElementById("days").innerText = days.toString().padStart(2, '0');
                document.getElementById("hours").innerText = hours.toString().padStart(2, '0');
                document.getElementById("minutes").innerText = minutes.toString().padStart(2, '0');
                document.getElementById("seconds").innerText = seconds.toString().padStart(2, '0');
            }

            setInterval(updateCountdown, 1000);
            updateCountdown();

            // Smooth scrolling for navigation
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();

                    const targetId = this.getAttribute('href');
                    const targetElement = document.querySelector(targetId);

                    window.scrollTo({
                        top: targetElement.offsetTop,
                        behavior: 'smooth'
                    });

                    // Update active nav dot
                    document.querySelectorAll('.nav-dot').forEach(dot => {
                        dot.classList.remove('active');
                    });
                    this.classList.add('active');
                });
            });

            // Update active nav dot on scroll
            window.addEventListener('scroll', function() {
                const sections = document.querySelectorAll('.section');
                const navDots = document.querySelectorAll('.nav-dot');

                let current = '';

                sections.forEach(section => {
                    const sectionTop = section.offsetTop;
                    const sectionHeight = section.clientHeight;

                    // Sesuaikan offset agar dot aktif ketika bagian tengah section terlihat
                    if (pageYOffset >= sectionTop - window.innerHeight / 3) {
                        current = section.getAttribute('id');
                    }
                });

                navDots.forEach(dot => {
                    dot.classList.remove('active');
                    if (dot.getAttribute('data-section') === current) {
                        dot.classList.add('active');
                    }
                });
            });

            // Kontrol Musik
            const musicControl = document.getElementById('musicControl');
            if (musicControl && backgroundMusic) {
                musicControl.addEventListener('click', function() {
                    if (backgroundMusic.paused) {
                        backgroundMusic.play().catch(e => console.error("Play failed:", e));
                        updateMusicControlIcon(true);
                    } else {
                        backgroundMusic.pause();
                        updateMusicControlIcon(false);
                    }
                });
            }

            // Fungsi untuk memperbarui ikon kontrol musik
            function updateMusicControlIcon(isPlaying) {
                const icon = musicControl.querySelector('i');
                if (isPlaying) {
                    icon.classList.remove('fa-music');
                    icon.classList.add('fa-pause');
                } else {
                    icon.classList.remove('fa-pause');
                    icon.classList.add('fa-music');
                }
            }

            // Copy to clipboard functionality
            document.querySelectorAll('.copy-btn').forEach(button => {
                button.addEventListener('click', function() {
                    const textToCopy = this.getAttribute('data-clipboard');

                    const tempInput = document.createElement('input');
                    tempInput.value = textToCopy;
                    document.body.appendChild(tempInput);

                    tempInput.select();
                    document.execCommand('copy');

                    document.body.removeChild(tempInput);

                    const originalText = this.innerHTML;
                    this.innerHTML = '<i class="fas fa-check mr-2"></i> Copied!';

                    setTimeout(() => {
                        this.innerHTML = originalText;
                    }, 2000);
                });
            });

            // --- PERUBAHAN UNTUK INTEGRASI GOOGLE SHEETS API ---

            // URL Web App Google Apps Script Anda (URL yang Anda berikan)
            const GOOGLE_SHEETS_WEB_APP_URL = 'https://script.google.com/macros/s/AKfycbxhhCmUaRDXRPeUwqPOMgaFw475A2BaeOsCS2SbQcUjiWitoNcLgSuBMwbD51DkyBrD/exec';

            // Fungsi untuk mengambil dan menampilkan ucapan
            async function loadWishes() {
                const wishesListDiv = document.getElementById('wishesList');
                // Tampilkan loading state
                wishesListDiv.innerHTML = '<p class="text-center text-gray-500" id="loadingWishes"><i class="fas fa-spinner fa-spin mr-2"></i> Memuat ucapan...</p>';

                try {
                    const response = await fetch(GOOGLE_SHEETS_WEB_APP_URL);
                    const wishes = await response.json();

                    wishesListDiv.innerHTML = ''; // Kosongkan loading state

                    if (wishes.length === 0) {
                        wishesListDiv.innerHTML = '<p class="text-center text-gray-500">Belum ada ucapan. Jadilah yang pertama!</p>';
                    } else {
                        // Tampilkan ucapan terbaru di atas (reverse order)
                        // Karena Apps Script mengirimkan data dari baris pertama ke terakhir,
                        // kita ingin menampilkan yang terbaru di atas, jadi kita reverse array-nya.
                        wishes.reverse().forEach(wish => {
                            const wishDiv = document.createElement('div');
                            wishDiv.className = 'bg-white p-4 rounded-lg shadow-sm';

                            // Format timestamp agar lebih mudah dibaca
                            // Perhatikan: Google Sheets mungkin mengembalikan timestamp dalam format string
                            // Kita perlu memastikan Date object bisa mem-parse-nya dengan benar.
                            const date = new Date(wish.timestamp);
                            const options = {
                                year: 'numeric',
                                month: 'long',
                                day: 'numeric',
                                hour: '2-digit',
                                minute: '2-digit',
                                second: '2-digit',
                                hour12: false // format 24 jam
                            };
                            const formattedDate = date.toLocaleDateString('id-ID', options);

                            wishDiv.innerHTML = `
                                <p class="font-medium text-blue-800 mb-1">${wish.nama}</p>
                                <p class="text-sm text-gray-500 mb-2">${formattedDate}</p>
                                <p class="text-gray-600">${wish.pesan}</p>
                            `;
                            wishesListDiv.appendChild(wishDiv);
                        });
                    }
                } catch (error) {
                    console.error('Gagal memuat ucapan:', error);
                    wishesListDiv.innerHTML = '<p class="text-center text-red-500">Gagal memuat ucapan. Periksa koneksi internet Anda atau coba lagi nanti.</p>';
                }
            }

            // Handle form submission for wishes
            document.getElementById('wishesForm').addEventListener('submit', async function(e) {
                e.preventDefault();

                const nameInput = document.getElementById('name');
                const messageInput = document.getElementById('message');
                const name = nameInput.value;
                const message = messageInput.value;

                const submitButton = this.querySelector('button[type="submit"]');
                const originalButtonHtml = submitButton.innerHTML; // Simpan HTML asli tombol

                submitButton.disabled = true; // Nonaktifkan tombol
                submitButton.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i> Mengirim...'; // Ubah teks tombol

                try {
                    const formData = new FormData();
                    formData.append('nama', name); // Gunakan 'name' dari input HTML
                    formData.append('pesan', message); // Gunakan 'name' dari input HTML

                    const response = await fetch(GOOGLE_SHEETS_WEB_APP_URL, {
                        method: 'POST',
                        body: formData,
                    });

                    const result = await response.json();

                    if (result.status === 'success') {
                        alert(`Terima kasih, ${name}! Ucapan Anda telah terkirim.`);
                        nameInput.value = ''; // Bersihkan input nama
                        messageInput.value = ''; // Bersihkan input pesan
                        loadWishes(); // Muat ulang ucapan untuk menampilkan yang baru
                    } else {
                        alert(`Gagal mengirim ucapan: ${result.message}`);
                    }
                } catch (error) {
                    console.error('Error mengirim ucapan:', error);
                    alert('Terjadi kesalahan saat mengirim ucapan. Mohon coba lagi.');
                } finally {
                    submitButton.disabled = false; // Aktifkan kembali tombol
                    submitButton.innerHTML = originalButtonHtml; // Kembalikan teks tombol
                }
            });

            // Panggil fungsi loadWishes saat halaman dimuat untuk menampilkan ucapan yang sudah ada
            loadWishes();

            // --- END PERUBAHAN UNTUK INTEGRASI GOOGLE SHEETS API ---

            // Auto scroll functionality
            let lastScrollPosition = 0;
            let isScrollingProgrammatically = false;
            let scrollTimeout;

            function autoScroll(event) {
                if (isScrollingProgrammatically) return;

                const sections = document.querySelectorAll('.section');
                const currentPosition = window.pageYOffset;

                const scrollingDown = event.deltaY > 0;

                let currentSectionIndex = 0;
                let minDistance = Infinity;

                sections.forEach((section, index) => {
                    const distance = Math.abs(section.offsetTop - currentPosition);
                    if (distance < minDistance) {
                        minDistance = distance;
                        currentSectionIndex = index;
                    }
                });

                let targetSectionIndex;
                if (scrollingDown) {
                    targetSectionIndex = Math.min(currentSectionIndex + 1, sections.length - 1);
                } else {
                    targetSectionIndex = Math.max(currentSectionIndex - 1, 0);
                }

                if (sections[targetSectionIndex] && targetSectionIndex !== currentSectionIndex) {
                    isScrollingProgrammatically = true;

                    sections[targetSectionIndex].scrollIntoView({
                        behavior: 'smooth'
                    });

                    document.querySelectorAll('.nav-dot').forEach(dot => {
                        dot.classList.remove('active');
                        if (dot.getAttribute('data-section') === sections[targetSectionIndex].id) {
                            dot.classList.add('active');
                        }
                    });

                    clearTimeout(scrollTimeout);
                    scrollTimeout = setTimeout(() => {
                        isScrollingProgrammatically = false;
                    }, 1000);
                }
            }

            if (window.innerWidth > 768) {
                window.addEventListener('wheel', function(e) {
                    e.preventDefault();
                    autoScroll(e);
                }, {
                    passive: false
                });
            }
        });
    </script>
</body>

</html>