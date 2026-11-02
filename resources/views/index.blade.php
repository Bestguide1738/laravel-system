<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course registration — Meridian University</title>
    <meta name="description" content="Manage students, courses, lecturers and semester registrations in one place.">
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
                    <a href="index.html" class="text-sm font-semibold text-white transition-colors">Home</a>
                    <a href="index.html#how-it-works" class="text-sm font-semibold text-ink-300 hover:text-white transition-colors">How it works</a>
                    <a href="index.html#courses" class="text-sm font-semibold text-ink-300 hover:text-white transition-colors">Courses</a>
                    <a href="contact.html" class="text-sm font-semibold text-ink-300 hover:text-white transition-colors">Contact</a>
                    <a href="login.html" class="inline-flex items-center gap-2 rounded-md bg-brand-500 px-4 py-2 text-sm font-bold text-white hover:bg-brand-400 transition-colors"><i data-lucide="log-in" class="w-4 h-4"></i>Sign in</a>
                </nav>
                <label for="mobile-nav-toggle" class="md:hidden p-2 text-white cursor-pointer"><i data-lucide="menu" class="w-6 h-6"></i></label>
            </div>
            <input type="checkbox" id="mobile-nav-toggle" class="peer hidden">
            <div class="hidden peer-checked:block md:!hidden py-4 border-t border-ink-800">
                <div class="flex flex-col gap-4">
                    <a href="index.html" class="text-sm font-semibold text-white">Home</a>
                    <a href="index.html#how-it-works" class="text-sm font-semibold text-ink-300">How it works</a>
                    <a href="index.html#courses" class="text-sm font-semibold text-ink-300">Courses</a>
                    <a href="contact.html" class="text-sm font-semibold text-ink-300">Contact</a>
                    <a href="login.html" class="rounded-md bg-brand-500 px-4 py-2 text-center text-sm font-bold text-white">Sign in</a>
                </div>
            </div>
        </div>
    </header>
    <!-- End: Header -->

    <!-- Start: Hero -->
    <section class="relative pt-16 bg-sand-50 dot-grid overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-12 gap-12 items-center py-16 lg:py-24">
                <div class="lg:col-span-7">
                    <p class="inline-flex items-center gap-2 rounded-full bg-brand-100 px-3 py-1 text-xs font-bold uppercase tracking-wider text-brand-800 mb-6">
                        <i data-lucide="calendar-days" class="w-3.5 h-3.5"></i>Semester 1 · 2026/27 · Registration closes 6 November
                    </p>
                    <h1 class="font-serif text-4xl sm:text-5xl lg:text-6xl font-semibold leading-[1.08] text-ink-900 mb-6">
                        Choose your courses.<br><span class="text-brand-700">Confirm your semester.</span>
                    </h1>
                    <p class="text-base text-ink-600 max-w-xl leading-relaxed mb-8">
                        A single system where the registry keeps student, lecturer and course records accurate, lecturers see exactly who is in their class, and students register for the courses they need.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-3">
                        <a href="login.html" class="inline-flex items-center justify-center gap-2 rounded-md bg-ink-900 px-6 py-3 text-sm font-bold text-white hover:bg-ink-800 transition-colors">Sign in to register <i data-lucide="arrow-right" class="w-4 h-4"></i></a>
                        <a href="#courses" class="inline-flex items-center justify-center gap-2 rounded-md border border-ink-300 bg-white px-6 py-3 text-sm font-bold text-ink-800 hover:bg-sand-100 transition-colors">Browse this semester’s courses</a>
                    </div>
                </div>
                <div class="lg:col-span-5">
                    <div class="rounded-xl border border-sand-300 bg-white p-6 shadow-[8px_8px_0_0_#1d4ed8]">
                        <div class="flex items-center justify-between mb-5">
                            <div>
                                <p class="text-xs font-bold uppercase tracking-wider text-ink-500">Sample registration</p>
                                <p class="font-serif text-xl font-semibold mt-1">Esther Namuli</p>
                            </div>
                            <span class="inline-flex items-center rounded-full px-2.5 py-0.5 text-xs font-semibold ring-1 ring-inset bg-brand-50 text-brand-800 ring-brand-600/20">10 / 18 credits</span>
                        </div>
                        <ul class="divide-y divide-sand-200 text-sm">
                            <li class="flex items-center justify-between py-3"><div><p class="font-bold">CSC 2101</p><p class="text-xs text-ink-500">Data Structures and Algorithms</p></div><span class="inline-flex items-center rounded-full px-2.5 py-0.5 text-xs font-semibold ring-1 ring-inset bg-emerald-50 text-emerald-700 ring-emerald-600/20">Confirmed</span></li>
                            <li class="flex items-center justify-between py-3"><div><p class="font-bold">MAT 1102</p><p class="text-xs text-ink-500">Linear Algebra</p></div><span class="inline-flex items-center rounded-full px-2.5 py-0.5 text-xs font-semibold ring-1 ring-inset bg-emerald-50 text-emerald-700 ring-emerald-600/20">Confirmed</span></li>
                            <li class="flex items-center justify-between py-3"><div><p class="font-bold">ECO 1101</p><p class="text-xs text-ink-500">Microeconomics I</p></div><span class="inline-flex items-center rounded-full px-2.5 py-0.5 text-xs font-semibold ring-1 ring-inset bg-emerald-50 text-emerald-700 ring-emerald-600/20">Confirmed</span></li>
                            <li class="flex items-center justify-between py-3"><div><p class="font-bold">CSC 2204</p><p class="text-xs text-ink-500">Database Systems</p></div><span class="inline-flex items-center rounded-full px-2.5 py-0.5 text-xs font-semibold ring-1 ring-inset bg-amber-50 text-amber-800 ring-amber-600/20">Pending</span></li>
                        </ul>
                        <div class="mt-4 h-2 rounded-full bg-sand-200"><div class="h-2 w-[56%] rounded-full bg-brand-600"></div></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End: Hero -->

    <!-- Start: Stats band -->
    <section class="bg-ink-900 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 grid grid-cols-2 lg:grid-cols-4 gap-8">
            <div><p class="font-serif text-4xl font-semibold text-brand-200">4,820</p><p class="text-sm text-ink-300 mt-1">Students enrolled</p></div>
            <div><p class="font-serif text-4xl font-semibold text-brand-200">312</p><p class="text-sm text-ink-300 mt-1">Lecturers</p></div>
            <div><p class="font-serif text-4xl font-semibold text-brand-200">186</p><p class="text-sm text-ink-300 mt-1">Courses on offer</p></div>
            <div><p class="font-serif text-4xl font-semibold text-brand-200">12,904</p><p class="text-sm text-ink-300 mt-1">Registrations this semester</p></div>
        </div>
    </section>
    <!-- End: Stats band -->

    <!-- Start: Roles -->
    <section id="roles" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-2xl mb-12">
                <p class="text-xs font-bold uppercase tracking-[0.18em] text-brand-700 mb-3">Three workspaces</p>
                <h2 class="font-serif text-3xl sm:text-4xl font-semibold">Everyone sees what they need, and nothing more</h2>
            </div>
            <div class="grid md:grid-cols-3 gap-6">
                <div class="rounded-lg border border-sand-200 bg-sand-50 p-7">
                    <div class="w-11 h-11 rounded-md bg-ink-900 text-brand-200 flex items-center justify-center mb-5"><i data-lucide="shield-check" class="w-5 h-5"></i></div>
                    <h3 class="font-serif text-xl font-semibold mb-2">Administrators</h3>
                    <p class="text-sm text-ink-600 mb-5">Keep the academic records correct and the semester running.</p>
                    <ul class="space-y-2.5 text-sm text-ink-700">
                        <li class="flex gap-2"><i data-lucide="circle-check" class="w-4 h-4 mt-0.5 text-brand-700 shrink-0"></i>Add, edit and remove students and lecturers</li>
                        <li class="flex gap-2"><i data-lucide="circle-check" class="w-4 h-4 mt-0.5 text-brand-700 shrink-0"></i>Create courses and assign lecturers</li>
                        <li class="flex gap-2"><i data-lucide="circle-check" class="w-4 h-4 mt-0.5 text-brand-700 shrink-0"></i>Review and correct any registration</li>
                    </ul>
                    <a href="admin/dashboard.html" class="inline-flex items-center gap-2 mt-6 text-sm font-bold text-brand-700">Open admin workspace <i data-lucide="arrow-right" class="w-4 h-4"></i></a>
                </div>
                <div class="rounded-lg border border-sand-200 bg-sand-50 p-7">
                    <div class="w-11 h-11 rounded-md bg-ink-900 text-brand-200 flex items-center justify-center mb-5"><i data-lucide="presentation" class="w-5 h-5"></i></div>
                    <h3 class="font-serif text-xl font-semibold mb-2">Lecturers</h3>
                    <p class="text-sm text-ink-600 mb-5">Know your classes before the first lecture.</p>
                    <ul class="space-y-2.5 text-sm text-ink-700">
                        <li class="flex gap-2"><i data-lucide="circle-check" class="w-4 h-4 mt-0.5 text-brand-700 shrink-0"></i>See the courses assigned to you</li>
                        <li class="flex gap-2"><i data-lucide="circle-check" class="w-4 h-4 mt-0.5 text-brand-700 shrink-0"></i>View the list of registered students per course</li>
                        <li class="flex gap-2"><i data-lucide="circle-check" class="w-4 h-4 mt-0.5 text-brand-700 shrink-0"></i>Track seats left as registration closes</li>
                    </ul>
                    <a href="lecturer/dashboard.html" class="inline-flex items-center gap-2 mt-6 text-sm font-bold text-brand-700">Open lecturer workspace <i data-lucide="arrow-right" class="w-4 h-4"></i></a>
                </div>
                <div class="rounded-lg border border-sand-200 bg-sand-50 p-7">
                    <div class="w-11 h-11 rounded-md bg-ink-900 text-brand-200 flex items-center justify-center mb-5"><i data-lucide="graduation-cap" class="w-5 h-5"></i></div>
                    <h3 class="font-serif text-xl font-semibold mb-2">Students</h3>
                    <p class="text-sm text-ink-600 mb-5">Plan your semester from your phone or laptop.</p>
                    <ul class="space-y-2.5 text-sm text-ink-700">
                        <li class="flex gap-2"><i data-lucide="circle-check" class="w-4 h-4 mt-0.5 text-brand-700 shrink-0"></i>Browse the courses open for registration</li>
                        <li class="flex gap-2"><i data-lucide="circle-check" class="w-4 h-4 mt-0.5 text-brand-700 shrink-0"></i>Register for or drop a course</li>
                        <li class="flex gap-2"><i data-lucide="circle-check" class="w-4 h-4 mt-0.5 text-brand-700 shrink-0"></i>See only your own registrations and credits</li>
                    </ul>
                    <a href="student/dashboard.html" class="inline-flex items-center gap-2 mt-6 text-sm font-bold text-brand-700">Open student workspace <i data-lucide="arrow-right" class="w-4 h-4"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- End: Roles -->

    <!-- Start: How it works -->
    <section id="how-it-works" class="py-20 bg-sand-100 border-y border-sand-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-2xl mb-12">
                <p class="text-xs font-bold uppercase tracking-[0.18em] text-brand-700 mb-3">How it works</p>
                <h2 class="font-serif text-3xl sm:text-4xl font-semibold">From catalogue to class list in four steps</h2>
            </div>
            <ol class="grid sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <li><span class="font-serif text-5xl font-semibold text-brand-600/40">01</span><h3 class="font-bold mt-2 mb-2">Registry sets up courses</h3><p class="text-sm text-ink-600">Administrators create courses, set credits and capacity, and assign a lecturer.</p></li>
                <li><span class="font-serif text-5xl font-semibold text-brand-600/40">02</span><h3 class="font-bold mt-2 mb-2">Students browse</h3><p class="text-sm text-ink-600">Open courses show the lecturer, schedule, credits and the seats still available.</p></li>
                <li><span class="font-serif text-5xl font-semibold text-brand-600/40">03</span><h3 class="font-bold mt-2 mb-2">Students register</h3><p class="text-sm text-ink-600">One click registers a course. Dropping it frees the seat for someone else.</p></li>
                <li><span class="font-serif text-5xl font-semibold text-brand-600/40">04</span><h3 class="font-bold mt-2 mb-2">Lecturers get the roster</h3><p class="text-sm text-ink-600">Each lecturer sees a live list of the students registered for their courses.</p></li>
            </ol>
        </div>
    </section>
    <!-- End: How it works -->

    <!-- Start: Courses preview -->
    <section id="courses" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-4 mb-8">
                <div>
                    <p class="text-xs font-bold uppercase tracking-[0.18em] text-brand-700 mb-3">This semester</p>
                    <h2 class="font-serif text-3xl sm:text-4xl font-semibold">A glimpse of the course catalogue</h2>
                </div>
                <a href="login.html" class="inline-flex items-center justify-center gap-2 rounded-md border border-sand-300 bg-white px-4 py-2 text-sm font-semibold text-ink-700 hover:bg-sand-100 transition-colors">Sign in to see all 186 courses</a>
            </div>
            <div class="rounded-lg border border-sand-200 overflow-hidden">
                <table class="w-full">
                    <thead class="bg-sand-100 border-b border-sand-200"><tr><th class="px-4 py-3 text-left text-xs font-bold uppercase tracking-wider text-ink-500">Code</th><th class="px-4 py-3 text-left text-xs font-bold uppercase tracking-wider text-ink-500">Course</th><th class="px-4 py-3 text-left text-xs font-bold uppercase tracking-wider text-ink-500 hidden sm:table-cell">Lecturer</th><th class="px-4 py-3 text-left text-xs font-bold uppercase tracking-wider text-ink-500">Credits</th><th class="px-4 py-3 text-left text-xs font-bold uppercase tracking-wider text-ink-500">Status</th></tr></thead>
                    <tbody>
<tr class="border-b border-sand-200 hover:bg-sand-50"><td class="px-4 py-3 text-sm font-bold text-brand-800">CSC 2101</td><td class="px-4 py-3 text-sm font-semibold">Data Structures and Algorithms</td><td class="px-4 py-3 text-sm text-ink-500 hidden sm:table-cell">Dr. Amara Okello</td><td class="px-4 py-3 text-sm tabular-nums">4</td><td class="px-4 py-3"><span class="inline-flex items-center rounded-full px-2.5 py-0.5 text-xs font-semibold ring-1 ring-inset bg-emerald-50 text-emerald-700 ring-emerald-600/20">Open</span></td></tr>
<tr class="border-b border-sand-200 hover:bg-sand-50"><td class="px-4 py-3 text-sm font-bold text-brand-800">CSC 2204</td><td class="px-4 py-3 text-sm font-semibold">Database Systems</td><td class="px-4 py-3 text-sm text-ink-500 hidden sm:table-cell">Dr. Peter Ssemakula</td><td class="px-4 py-3 text-sm tabular-nums">3</td><td class="px-4 py-3"><span class="inline-flex items-center rounded-full px-2.5 py-0.5 text-xs font-semibold ring-1 ring-inset bg-rose-50 text-rose-700 ring-rose-600/20">Full</span></td></tr>
<tr class="border-b border-sand-200 hover:bg-sand-50"><td class="px-4 py-3 text-sm font-bold text-brand-800">CSC 3302</td><td class="px-4 py-3 text-sm font-semibold">Software Engineering</td><td class="px-4 py-3 text-sm text-ink-500 hidden sm:table-cell">Dr. Amara Okello</td><td class="px-4 py-3 text-sm tabular-nums">3</td><td class="px-4 py-3"><span class="inline-flex items-center rounded-full px-2.5 py-0.5 text-xs font-semibold ring-1 ring-inset bg-emerald-50 text-emerald-700 ring-emerald-600/20">Open</span></td></tr>
<tr class="border-b border-sand-200 hover:bg-sand-50"><td class="px-4 py-3 text-sm font-bold text-brand-800">CSC 4101</td><td class="px-4 py-3 text-sm font-semibold">Introduction to Artificial Intelligence</td><td class="px-4 py-3 text-sm text-ink-500 hidden sm:table-cell">Dr. Amara Okello</td><td class="px-4 py-3 text-sm tabular-nums">3</td><td class="px-4 py-3"><span class="inline-flex items-center rounded-full px-2.5 py-0.5 text-xs font-semibold ring-1 ring-inset bg-emerald-50 text-emerald-700 ring-emerald-600/20">Open</span></td></tr>
<tr class="border-b border-sand-200 hover:bg-sand-50"><td class="px-4 py-3 text-sm font-bold text-brand-800">MAT 1102</td><td class="px-4 py-3 text-sm font-semibold">Linear Algebra</td><td class="px-4 py-3 text-sm text-ink-500 hidden sm:table-cell">Prof. Daniel Mwesige</td><td class="px-4 py-3 text-sm tabular-nums">3</td><td class="px-4 py-3"><span class="inline-flex items-center rounded-full px-2.5 py-0.5 text-xs font-semibold ring-1 ring-inset bg-emerald-50 text-emerald-700 ring-emerald-600/20">Open</span></td></tr>
<tr class="border-b border-sand-200 hover:bg-sand-50"><td class="px-4 py-3 text-sm font-bold text-brand-800">MAT 2201</td><td class="px-4 py-3 text-sm font-semibold">Probability and Statistics</td><td class="px-4 py-3 text-sm text-ink-500 hidden sm:table-cell">Prof. Daniel Mwesige</td><td class="px-4 py-3 text-sm tabular-nums">3</td><td class="px-4 py-3"><span class="inline-flex items-center rounded-full px-2.5 py-0.5 text-xs font-semibold ring-1 ring-inset bg-emerald-50 text-emerald-700 ring-emerald-600/20">Open</span></td></tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <!-- End: Courses preview -->

    <!-- Start: Call to action -->
    <section class="bg-brand-700">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 flex flex-col md:flex-row items-center justify-between gap-6">
            <div>
                <h2 class="font-serif text-3xl font-semibold text-white">Registration closes on 6 November.</h2>
                <p class="text-brand-100 mt-2">Sign in with your university account and secure your seats today.</p>
            </div>
            <a href="login.html" class="inline-flex items-center gap-2 rounded-md bg-white px-6 py-3 text-sm font-bold text-brand-800 hover:bg-brand-50 transition-colors">Sign in <i data-lucide="arrow-right" class="w-4 h-4"></i></a>
        </div>
    </section>
    <!-- End: Call to action -->

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
