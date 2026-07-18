<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($siteTitle, ENT_QUOTES, 'UTF-8') ?></title>
    <meta name="description" content="<?= htmlspecialchars($siteDescription, ENT_QUOTES, 'UTF-8') ?>">
    <meta property="og:title" content="<?= htmlspecialchars($siteTitle, ENT_QUOTES, 'UTF-8') ?>">
    <meta property="og:description" content="<?= htmlspecialchars($siteDescription, ENT_QUOTES, 'UTF-8') ?>">
    <meta property="og:type" content="website">
    <meta property="og:image" content="assets/images/hero-cover.svg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@600;700&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#7C3AED',
                        'primary-deep': '#5B21B6',
                        'primary-soft': '#EDE4FB',
                        gold: '#F5A524',
                        'gold-deep': '#C77C0E',
                        pink: '#F472B6',
                        canvas: '#FFFFFF',
                        'canvas-soft': '#FAF7FF',
                        'surface-card': '#FFFFFF',
                        'surface-card-alt': '#F4F0FC',
                        hairline: '#E7E1F5',
                        'hairline-strong': '#D4CBEF',
                        ink: '#1F1730',
                        body: '#4B4160',
                        mute: '#8A82A3',
                        'on-primary': '#FFFFFF',
                        success: '#16A34A',
                        'success-soft': '#DCFCE7',
                        error: '#DC2626',
                        'error-soft': '#FEE2E2',
                        info: '#7C3AED',
                        'info-soft': '#EDE4FB'
                    },
                    fontFamily: {
                        heading: ['Outfit', 'Inter', 'system-ui', 'sans-serif'],
                        sub: ['Inter', 'system-ui', 'sans-serif']
                    }
                }
            }
        }
    </script>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="bg-canvas text-body font-sub leading-relaxed">
    <div class="fixed inset-x-0 top-0 z-50 bg-white/90 backdrop-blur border-b border-hairline shadow-sm"> 
        <div class="mx-auto flex max-w-[1200px] items-center justify-between px-4 py-4 sm:px-6">
            <a href="#hero" class="flex items-center gap-3 font-heading text-xl text-ink">Pixel Tower</a>
            <button id="nav-toggle" class="inline-flex items-center gap-2 rounded-full border border-hairline px-4 py-2 text-sm text-body md:hidden" aria-expanded="false" aria-controls="nav-menu">
                Menu
            </button>
            <nav id="nav-menu" class="hidden space-x-6 text-sm md:flex">
                <a href="#hero" class="text-body hover:text-primary">Beranda</a>
                <a href="#about" class="text-body hover:text-primary">Tentang</a>
                <a href="#skills" class="text-body hover:text-primary">Keterampilan</a>
                <a href="#cases" class="text-body hover:text-primary">Studi Kasus</a>
                <a href="#projects" class="text-body hover:text-primary">Proyek</a>
                <a href="#organization" class="text-body hover:text-primary">Organisasi</a>
                <a href="#contact" class="text-body hover:text-primary">Kontak</a>
            </nav>
        </div>
    </div>
    <div class="h-16"></div>
