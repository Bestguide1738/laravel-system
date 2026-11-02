<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset password — Meridian University</title>
    <meta name="description" content="Reset password — Meridian University">
    <link rel="icon" type="image/svg+xml" href="assets/img/logo.svg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,500;9..144,600;9..144,700&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: { 50: '#eff6ff', 100: '#dbeafe', 200: '#bfdbfe', 400: '#60a5fa', 500: '#3b82f6', 600: '#2563eb', 700: '#1d4ed8', 800: '#1e40af', 900: '#1e3a8a' },
                        ink: { 50: '#f3f6fb', 100: '#e4eaf4', 200: '#c9d4e6', 300: '#9fb0cc', 400: '#7a8dad', 500: '#56688a', 600: '#41526f', 700: '#2c3b57', 800: '#17274a', 900: '#0f1c36', 950: '#0a1326' },
                        sand: { 50: '#faf8f4', 100: '#f4f1ea', 200: '#e7e2d6', 300: '#d6cfbe' },
                        coral: { 50: '#fff3ee', 100: '#ffe1d5', 500: '#f0653a', 600: '#d94f26' },
                    },
                    fontFamily: {
                        sans: ['Manrope', 'system-ui', '-apple-system', 'sans-serif'],
                        serif: ['Fraunces', 'Georgia', 'serif'],
                    },
                }
            }
        };
    </script>
    <link rel="stylesheet" href="assets/css/styles.css">
    <script src="https://unpkg.com/lucide@latest"></script>
</head>
<body class="bg-sand-50 text-ink-900 font-sans antialiased min-h-screen">
    <!-- Start: Auth layout -->
    <div class="min-h-screen grid lg:grid-cols-2">
        <!-- Start: Brand panel -->
        <aside class="hidden lg:flex flex-col justify-between bg-ink-900 dot-grid-dark p-12 text-white">
            <a href="index.html" class="flex items-center gap-3">
                <img src="assets/img/logo.svg" alt="Meridian University" class="h-10 w-10">
                <div class="leading-tight"><p class="font-serif text-lg font-semibold">Meridian University</p><p class="text-xs tracking-wide text-brand-200">Course Registration System</p></div>
            </a>
            <div>
                <p class="font-serif text-4xl font-semibold leading-tight mb-6">Your semester,<br>organised in one place.</p>
                <ul class="space-y-3 text-sm text-ink-200">
                    <li class="flex gap-3"><i data-lucide="circle-check" class="w-5 h-5 text-brand-400 shrink-0"></i>Students register for and drop courses online</li>
                    <li class="flex gap-3"><i data-lucide="circle-check" class="w-5 h-5 text-brand-400 shrink-0"></i>Lecturers see who is registered for their courses</li>
                    <li class="flex gap-3"><i data-lucide="circle-check" class="w-5 h-5 text-brand-400 shrink-0"></i>The registry manages every record in one place</li>
                </ul>
            </div>
            <p class="text-xs text-ink-400">Semester 1 · 2026/27 · Registration closes 6 November</p>
        </aside>
        <!-- End: Brand panel -->

        <!-- Start: Form panel -->
        <div class="flex flex-col bg-sand-50">
            <div class="lg:hidden bg-ink-900 px-4 py-4">
                <a href="index.html" class="flex items-center gap-3"><img src="assets/img/logo.svg" alt="" class="h-9 w-9"><span class="font-serif text-base font-semibold text-white">Meridian University</span></a>
            </div>
            <main class="flex-1 flex items-center justify-center px-4 sm:px-8 py-12">
                <div class="w-full max-w-md">
                    <h1 class="font-serif text-3xl font-semibold mb-2">Reset your password</h1>
                    <p class="text-sm text-ink-500 mb-8">Enter your email and we will send you a link to choose a new password.</p>
                    <form action="login.html" method="get" class="space-y-5">
                        <div>
                            <label class="block text-sm font-semibold text-ink-700 mb-2">University email</label>
                            <input class="input-field" type="email" placeholder="name@meridian.ac">
                        </div>
                        <button class="inline-flex items-center justify-center gap-2 rounded-md bg-brand-700 px-4 py-2 text-sm font-semibold text-white hover:bg-brand-800 transition-colors w-full py-3">Send reset link</button>
                        <a href="login.html" class="flex items-center justify-center gap-2 text-sm font-semibold text-brand-700"><i data-lucide="arrow-left" class="w-4 h-4"></i>Back to sign in</a>
                    </form>

                </div>
            </main>
            <footer class="border-t border-sand-200 bg-white">
                <div class="px-4 sm:px-8 py-4 flex flex-col sm:flex-row justify-between items-center gap-2 text-xs text-ink-500">
                    <p>© 2026 <span class="font-semibold text-ink-800">Meridian University</span></p>
                    <p><a href="contact.html" class="hover:text-ink-900">Need help? Contact the registry</a></p>
                </div>
            </footer>
        </div>
        <!-- End: Form panel -->
    </div>
    <!-- End: Auth layout -->

    <script>lucide.createIcons();</script>
</body>
</html>
