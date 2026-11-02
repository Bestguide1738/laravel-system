<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact the registry — Meridian University</title>
    <meta name="description" content="Contact the Registry for help with registration.">
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
    <!-- Start: Header -->
    <header class="fixed top-0 left-0 right-0 z-50 bg-ink-900 border-b border-ink-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <a href="index.html" class="flex items-center gap-3">
                    <img src="assets/img/logo.svg" alt="Meridian University" class="h-9 w-9">
                    <div class="leading-tight">
                        <p class="font-serif text-base font-semibold text-white">Meridian University</p>
                        <p class="hidden sm:block text-[11px] tracking-wide text-brand-200">Course Registration System</p>
                    </div>
                </a>
                <nav class="hidden md:flex items-center gap-8">
                    <a href="index.html" class="text-sm font-semibold text-ink-300 hover:text-white transition-colors">Home</a>
                    <a href="index.html#how-it-works" class="text-sm font-semibold text-ink-300 hover:text-white transition-colors">How it works</a>
                    <a href="index.html#courses" class="text-sm font-semibold text-ink-300 hover:text-white transition-colors">Courses</a>
                    <a href="contact.html" class="text-sm font-semibold text-white transition-colors">Contact</a>
                    <a href="login.html" class="inline-flex items-center gap-2 rounded-md bg-brand-500 px-4 py-2 text-sm font-bold text-white hover:bg-brand-400 transition-colors"><i data-lucide="log-in" class="w-4 h-4"></i>Sign in</a>
                </nav>
                <label for="mobile-nav-toggle" class="md:hidden p-2 text-white cursor-pointer"><i data-lucide="menu" class="w-6 h-6"></i></label>
            </div>
            <input type="checkbox" id="mobile-nav-toggle" class="peer hidden">
            <div class="hidden peer-checked:block md:!hidden py-4 border-t border-ink-800">
                <div class="flex flex-col gap-4">
                    <a href="index.html" class="text-sm font-semibold text-ink-300">Home</a>
                    <a href="index.html#how-it-works" class="text-sm font-semibold text-ink-300">How it works</a>
                    <a href="index.html#courses" class="text-sm font-semibold text-ink-300">Courses</a>
                    <a href="contact.html" class="text-sm font-semibold text-white">Contact</a>
                    <a href="login.html" class="rounded-md bg-brand-500 px-4 py-2 text-center text-sm font-bold text-white">Sign in</a>
                </div>
            </div>
        </div>
    </header>
    <!-- End: Header -->

    <!-- Start: Contact -->
    <section class="pt-16 bg-sand-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="max-w-2xl mb-12">
                <p class="text-xs font-bold uppercase tracking-[0.18em] text-brand-700 mb-3">Contact</p>
                <h1 class="font-serif text-4xl font-semibold mb-4">Talk to the Registry</h1>
                <p class="text-ink-600">Problems with an account, a full course or a missing record? Send us a message and we will reply within one working day.</p>
            </div>
            <div class="grid lg:grid-cols-3 gap-8">
                <form action="index.html" method="get" class="bg-white border border-sand-200 rounded-lg lg:col-span-2 p-6 grid sm:grid-cols-2 gap-5">
                    <div class=""><label class="block text-sm font-semibold text-ink-700 mb-2">Full name</label><input class="input-field" type="text" name="name" value="" placeholder="Your name"></div>
                    <div class=""><label class="block text-sm font-semibold text-ink-700 mb-2">University email</label><input class="input-field" type="email" name="email" value="" placeholder="name@meridian.ac"></div>
                    <div class="sm:col-span-2"><label class="block text-sm font-semibold text-ink-700 mb-2">Topic</label><select class="input-field" name="topic"><option>Course registration</option><option>Account access</option><option>Student record correction</option><option>Lecturer allocation</option><option>Other</option></select></div>
                    <div class="sm:col-span-2"><label class="block text-sm font-semibold text-ink-700 mb-2">Message</label><textarea class="input-field" name="message" rows="6" placeholder="How can we help?"></textarea></div>
                    <div class="sm:col-span-2"><button class="inline-flex items-center justify-center gap-2 rounded-md bg-brand-700 px-4 py-2 text-sm font-semibold text-white hover:bg-brand-800 transition-colors"><i data-lucide="send" class="w-4 h-4"></i>Send message</button></div>
                </form>
                <div class="space-y-4">
                    <div class="bg-white border border-sand-200 rounded-lg p-5 flex gap-4"><div class="w-10 h-10 shrink-0 rounded-full bg-brand-100 text-brand-800 flex items-center justify-center text-xs font-bold"><i data-lucide="map-pin" class="w-4 h-4"></i></div><div><p class="font-bold">Registry office</p><p class="text-sm text-ink-500 mt-1">Admissions Building, Room 104<br>Mon–Fri, 8:30am – 4:30pm</p></div></div>
                    <div class="bg-white border border-sand-200 rounded-lg p-5 flex gap-4"><div class="w-10 h-10 shrink-0 rounded-full bg-brand-100 text-brand-800 flex items-center justify-center text-xs font-bold"><i data-lucide="mail" class="w-4 h-4"></i></div><div><p class="font-bold">Email</p><p class="text-sm text-ink-500 mt-1">registry@meridian.ac</p></div></div>
                    <div class="bg-white border border-sand-200 rounded-lg p-5 flex gap-4"><div class="w-10 h-10 shrink-0 rounded-full bg-brand-100 text-brand-800 flex items-center justify-center text-xs font-bold"><i data-lucide="phone" class="w-4 h-4"></i></div><div><p class="font-bold">Phone</p><p class="text-sm text-ink-500 mt-1">+256 414 000 300</p></div></div>
                </div>
            </div>
        </div>
    </section>
    <!-- End: Contact -->

    <!-- Start: Footer -->
    <footer class="bg-ink-950 text-ink-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-14">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 mb-12">
                <div>
                    <div class="flex items-center gap-3 mb-5">
                        <img src="assets/img/logo.svg" alt="" class="h-10 w-10">
                        <span class="font-serif text-lg font-semibold text-white">Meridian University</span>
                    </div>
                    <p class="text-sm leading-relaxed max-w-xs">One system for student records, course catalogues, lecturer allocations and semester registration.</p>
                </div>
                <div>
                    <h4 class="text-xs font-bold uppercase tracking-[0.16em] text-brand-200 mb-5">Portal</h4>
                    <ul class="space-y-3 text-sm">
                        <li><a href="login.html" class="hover:text-white">Sign in</a></li>
                        <li><a href="student/courses/index.html" class="hover:text-white">Available courses</a></li>
                        <li><a href="lecturer/dashboard.html" class="hover:text-white">Lecturer workspace</a></li>
                        <li><a href="admin/dashboard.html" class="hover:text-white">Registry administration</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-xs font-bold uppercase tracking-[0.16em] text-brand-200 mb-5">Registry</h4>
                    <ul class="space-y-3 text-sm">
                        <li>Admissions Building, Room 104</li>
                        <li>Mon–Fri, 8:30am – 4:30pm</li>
                        <li>Late registration closes 6 Nov 2026</li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-xs font-bold uppercase tracking-[0.16em] text-brand-200 mb-5">Contact</h4>
                    <ul class="space-y-3 text-sm">
                        <li><a href="contact.html" class="hover:text-white">registry@meridian.ac</a></li>
                        <li>+256 414 000 300</li>
                        <li><a href="forgot-password.html" class="hover:text-white">Forgot your password?</a></li>
                    </ul>
                </div>
            </div>
            <div class="pt-8 border-t border-ink-800 flex flex-col sm:flex-row justify-between items-center gap-3 text-xs text-ink-400">
                <p>© 2026 Meridian University. All rights reserved.</p>
                <p>Privacy · Acceptable use · Academic regulations</p>
            </div>
        </div>
    </footer>
    <!-- End: Footer -->

    <script>lucide.createIcons();</script>
</body>
</html>
