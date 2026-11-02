<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lecturer dashboard — Meridian University</title>
    <meta name="description" content="Lecturer dashboard — Course Registration System at Meridian University">
    <link rel="icon" type="image/svg+xml" href="../assets/img/logo.svg">
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
    <link rel="stylesheet" href="../assets/css/styles.css">
    <script src="https://unpkg.com/lucide@latest"></script>
</head>
<body class="bg-sand-50 text-ink-900 font-sans antialiased min-h-screen">
    <!-- Start: Sidebar toggle (checkbox, no JavaScript) -->
    <input type="checkbox" id="sidebar-toggle" class="peer hidden">
    <label for="sidebar-toggle" class="fixed inset-0 bg-ink-950/40 z-30 hidden peer-checked:block sm:!hidden"></label>
    <!-- End: Sidebar toggle -->

    <!-- Start: Header -->
    <header class="fixed top-0 z-50 w-full bg-ink-900 border-b border-ink-800 text-white">
        <div class="h-16 px-3 lg:px-6 flex items-center justify-between gap-4">
            <div class="flex items-center">
                <label for="sidebar-toggle" class="inline-flex items-center p-2 text-ink-200 rounded-md sm:hidden hover:bg-ink-800 cursor-pointer">
                    <span class="sr-only">Open sidebar</span>
                    <i data-lucide="menu" class="w-6 h-6"></i>
                </label>
                <a href="../lecturer/dashboard.html" class="flex items-center gap-3 ms-2">
                    <img src="../assets/img/logo.svg" alt="Meridian University" class="h-9 w-9">
                    <div class="hidden sm:block leading-tight">
                        <span class="block font-serif text-base font-semibold">Meridian University</span>
                        <span class="block text-[11px] tracking-wide text-brand-200">Course Registration System</span>
                    </div>
                </a>
            </div>
            <form action="#" class="hidden md:block flex-1 max-w-md">
                <label class="relative block">
                    <span class="sr-only">Search</span>
                    <i data-lucide="search" class="w-4 h-4 text-ink-300 absolute left-3 top-1/2 -translate-y-1/2"></i>
                    <input type="search" placeholder="Search courses, students or lecturers" class="w-full rounded-md bg-ink-800 border border-ink-700 py-2 pl-9 pr-3 text-sm text-white placeholder-ink-300 focus:outline-none focus:border-brand-400">
                </label>
            </form>
            <div class="flex items-center gap-2">
                <!-- Start: Header notifications -->
                <details class="menu-dropdown relative">
                    <summary class="p-2 text-ink-200 rounded-md hover:text-white hover:bg-ink-800 cursor-pointer relative list-none">
                        <i data-lucide="bell" class="w-5 h-5"></i>
                        <span class="absolute top-1.5 right-1.5 w-2 h-2 bg-coral-500 rounded-full"></span>
                    </summary>
                    <div class="absolute right-0 mt-2 w-80 bg-white text-ink-900 border border-sand-200 rounded-lg shadow-lg overflow-hidden">
                        <div class="px-4 py-2.5 border-b border-sand-200 flex justify-between items-center bg-sand-100">
                            <p class="text-sm font-bold">Notifications</p>
                            <a href="../lecturer/notifications.html" class="text-xs font-semibold text-brand-700">View all</a>
                        </div>
                        <a href="../lecturer/notifications.html" class="block px-4 py-3 hover:bg-sand-50 border-b border-sand-200">
                                <p class="text-sm text-ink-800">Hannah Nansubuga registered for CSC 2101</p>
                                <p class="text-xs text-ink-500 mt-1">12 min ago</p>
                            </a>
                            <a href="../lecturer/notifications.html" class="block px-4 py-3 hover:bg-sand-50 border-b border-sand-200">
                                <p class="text-sm text-ink-800">CSC 3302 is 73% full</p>
                                <p class="text-xs text-ink-500 mt-1">3 hrs ago</p>
                            </a>
                            <a href="../lecturer/notifications.html" class="block px-4 py-3 hover:bg-sand-50">
                                <p class="text-sm text-ink-800">Isaac Ddungu dropped CSC 2101</p>
                                <p class="text-xs text-ink-500 mt-1">Yesterday</p>
                            </a>
                            
                    </div>
                </details>
                <!-- End: Header notifications -->
                <!-- Start: Header user menu -->
                <details class="menu-dropdown relative">
                    <summary class="flex items-center gap-2 rounded-md p-1 pr-2 text-sm hover:bg-ink-800 cursor-pointer list-none">
                        <div class="w-8 h-8 rounded-full bg-brand-500 text-white flex items-center justify-center text-xs font-bold">AO</div>
                        <div class="hidden md:block text-left">
                            <div class="text-xs font-semibold text-white">Dr. Amara Okello</div>
                            <div class="text-[10px] text-brand-200">Lecturer</div>
                        </div>
                        <i data-lucide="chevron-down" class="w-4 h-4 text-ink-300"></i>
                    </summary>
                    <div class="absolute right-0 mt-2 w-60 bg-white text-ink-900 border border-sand-200 rounded-lg shadow-lg overflow-hidden">
                        <div class="px-4 py-3 border-b border-sand-200 bg-sand-100">
                            <p class="text-sm font-bold">Dr. Amara Okello</p>
                            <p class="text-xs text-ink-500 truncate">amara.okello@meridian.ac</p>
                        </div>
                        <a href="../lecturer/profile.html" class="flex items-center gap-2 px-4 py-2 text-sm text-ink-700 hover:bg-sand-50"><i data-lucide="user" class="w-4 h-4"></i>My account</a>
                        <a href="../lecturer/notifications.html" class="flex items-center gap-2 px-4 py-2 text-sm text-ink-700 hover:bg-sand-50"><i data-lucide="bell" class="w-4 h-4"></i>Notifications</a>
                        <a href="../login.html" class="flex items-center gap-2 px-4 py-2 text-sm font-semibold text-coral-600 hover:bg-sand-50 border-t border-sand-200"><i data-lucide="log-out" class="w-4 h-4"></i>Sign out</a>
                    </div>
                </details>
                <!-- End: Header user menu -->
            </div>
        </div>
    </header>
    <!-- End: Header -->

    <!-- Start: Sidebar -->
    <aside class="fixed top-0 left-0 z-40 w-64 h-screen pt-16 -translate-x-full peer-checked:translate-x-0 sm:translate-x-0 bg-white border-r border-sand-200 flex flex-col transition-transform">
        <div class="flex-1 px-3 py-6 overflow-y-auto sidebar-scrollbar">
            <div class="mb-6"><p class="px-3 mb-2 text-[11px] font-bold uppercase tracking-[0.14em] text-ink-400">Overview</p><div class="space-y-1"><a href="../lecturer/dashboard.html" class="group flex items-center gap-3 rounded-md px-3 py-2 text-sm font-semibold transition-colors bg-brand-700 text-white"><i data-lucide="layout-dashboard" class="w-[18px] h-[18px] text-brand-100"></i>Dashboard</a></div></div><div class="mb-6"><p class="px-3 mb-2 text-[11px] font-bold uppercase tracking-[0.14em] text-ink-400">Teaching</p><div class="space-y-1"><a href="../lecturer/courses/index.html" class="group flex items-center gap-3 rounded-md px-3 py-2 text-sm font-semibold transition-colors text-ink-600 hover:bg-sand-100 hover:text-ink-900"><i data-lucide="book-open" class="w-[18px] h-[18px] text-ink-400 group-hover:text-brand-700"></i>My courses</a><a href="../lecturer/students/index.html" class="group flex items-center gap-3 rounded-md px-3 py-2 text-sm font-semibold transition-colors text-ink-600 hover:bg-sand-100 hover:text-ink-900"><i data-lucide="users" class="w-[18px] h-[18px] text-ink-400 group-hover:text-brand-700"></i>My students</a></div></div><div class="mb-6"><p class="px-3 mb-2 text-[11px] font-bold uppercase tracking-[0.14em] text-ink-400">Account</p><div class="space-y-1"><a href="../lecturer/notifications.html" class="group flex items-center gap-3 rounded-md px-3 py-2 text-sm font-semibold transition-colors text-ink-600 hover:bg-sand-100 hover:text-ink-900"><i data-lucide="bell" class="w-[18px] h-[18px] text-ink-400 group-hover:text-brand-700"></i>Notifications</a><a href="../lecturer/profile.html" class="group flex items-center gap-3 rounded-md px-3 py-2 text-sm font-semibold transition-colors text-ink-600 hover:bg-sand-100 hover:text-ink-900"><i data-lucide="user-cog" class="w-[18px] h-[18px] text-ink-400 group-hover:text-brand-700"></i>My account</a></div></div>
        </div>
        <!-- Start: Sidebar user card -->
        <div class="mt-auto border-t border-sand-200 p-4">
            <div class="flex items-center gap-3 mb-3">
                <div class="w-10 h-10 shrink-0 rounded-full bg-brand-100 text-brand-800 flex items-center justify-center text-xs font-bold">AO</div>
                <div class="flex-1 min-w-0">
                    <p class="text-sm font-bold truncate">Dr. Amara Okello</p>
                    <p class="text-xs text-ink-500 truncate">Department of Computing</p>
                </div>
            </div>
            <div class="flex items-center gap-2 rounded-md bg-brand-50 px-3 py-2">
                <i data-lucide="badge-check" class="w-4 h-4 text-brand-700"></i>
                <span class="text-xs font-bold uppercase tracking-wide text-brand-800">Lecturer</span>
            </div>
        </div>
        <!-- End: Sidebar user card -->
    </aside>
    <!-- End: Sidebar -->

    <!-- Start: Main content -->
    <div class="pt-16 sm:pl-64 min-h-screen flex flex-col">
        <main class="flex-1 px-4 sm:px-8 lg:px-10 py-8">
            <!-- Start: Page heading -->
            <div class="flex flex-col sm:flex-row justify-between items-start sm:items-end gap-4 mb-8">
                <div>
                    <p class="text-xs font-bold uppercase tracking-[0.18em] text-brand-700 mb-2">Lecturer workspace</p>
                    <h1 class="font-serif text-3xl font-semibold text-ink-900">Good afternoon, Dr. Okello</h1>
                    <p class="text-sm text-ink-500 mt-2 max-w-2xl">You are teaching three courses this semester.</p>
                </div>
                
            </div>
            <!-- End: Page heading -->
            <!-- Start: Stats cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-4 mb-8">
                <div class="bg-white border border-sand-200 rounded-lg p-5">
                    <div class="flex items-start justify-between">
                        <p class="text-sm font-semibold text-ink-500">Assigned courses</p>
                        <span class="w-8 h-8 rounded-md bg-brand-50 text-brand-700 flex items-center justify-center"><i data-lucide="book-open" class="w-4 h-4"></i></span>
                    </div>
                    <p class="font-serif text-3xl font-semibold mt-3 tabular-nums">3</p>
                    <p class="text-xs text-ink-500 mt-1">Semester 1 · 2026/27</p>
                </div>
                <div class="bg-white border border-sand-200 rounded-lg p-5">
                    <div class="flex items-start justify-between">
                        <p class="text-sm font-semibold text-ink-500">Registered students</p>
                        <span class="w-8 h-8 rounded-md bg-ink-100 text-ink-700 flex items-center justify-center"><i data-lucide="users" class="w-4 h-4"></i></span>
                    </div>
                    <p class="font-serif text-3xl font-semibold mt-3 tabular-nums">122</p>
                    <p class="text-xs text-ink-500 mt-1">Across your courses</p>
                </div>
                <div class="bg-white border border-sand-200 rounded-lg p-5">
                    <div class="flex items-start justify-between">
                        <p class="text-sm font-semibold text-ink-500">Seats still open</p>
                        <span class="w-8 h-8 rounded-md bg-coral-50 text-coral-600 flex items-center justify-center"><i data-lucide="armchair" class="w-4 h-4"></i></span>
                    </div>
                    <p class="font-serif text-3xl font-semibold mt-3 tabular-nums">33</p>
                    <p class="text-xs text-ink-500 mt-1">Until 6 November</p>
                </div>
                <div class="bg-white border border-sand-200 rounded-lg p-5">
                    <div class="flex items-start justify-between">
                        <p class="text-sm font-semibold text-ink-500">Next class</p>
                        <span class="w-8 h-8 rounded-md bg-brand-50 text-brand-700 flex items-center justify-center"><i data-lucide="clock" class="w-4 h-4"></i></span>
                    </div>
                    <p class="font-serif text-3xl font-semibold mt-3 tabular-nums">Wed 08:00</p>
                    <p class="text-xs text-ink-500 mt-1">CSC 2101 · Lecture Hall 2</p>
                </div>
            </div>
            <!-- End: Stats cards -->
            <!-- Start: Courses and recent registrations -->
            <div class="grid grid-cols-1 xl:grid-cols-3 gap-6">
                <div class="xl:col-span-2">
                    <div class="flex justify-between items-center mb-4"><h2 class="font-serif text-xl font-semibold">My courses</h2><a href="courses/index.html" class="text-sm font-semibold text-brand-700">All courses</a></div>
                    <div class="grid sm:grid-cols-2 gap-4">
                    <div class="bg-white border border-sand-200 rounded-lg p-5">
                        <div class="flex items-start justify-between gap-3"><div><p class="text-xs font-bold text-brand-800">CSC 2101</p><h3 class="font-serif text-lg font-semibold leading-snug">Data Structures and Algorithms</h3></div><span class="inline-flex items-center rounded-full px-2.5 py-0.5 text-xs font-semibold ring-1 ring-inset bg-emerald-50 text-emerald-700 ring-emerald-600/20">Open</span></div>
                        <p class="flex items-center gap-2 text-xs text-ink-500 mt-3"><i data-lucide="clock" class="w-3.5 h-3.5"></i>Mon & Wed · 08:00–10:00</p>
                        <p class="flex items-center gap-2 text-xs text-ink-500 mt-1"><i data-lucide="map-pin" class="w-3.5 h-3.5"></i>Lecture Hall 2</p>
                        <div class="mt-4"><div class="flex items-center gap-2"><div class="h-1.5 w-32 rounded-full bg-sand-200"><div class="h-1.5 rounded-full bg-amber-500" style="width:90%"></div></div><span class="text-xs text-ink-500 tabular-nums">54/60</span></div></div>
                        <a href="courses/show.html" class="inline-flex items-center gap-2 mt-4 text-sm font-bold text-brand-700">View students <i data-lucide="arrow-right" class="w-4 h-4"></i></a>
                    </div>
                    <div class="bg-white border border-sand-200 rounded-lg p-5">
                        <div class="flex items-start justify-between gap-3"><div><p class="text-xs font-bold text-brand-800">CSC 3302</p><h3 class="font-serif text-lg font-semibold leading-snug">Software Engineering</h3></div><span class="inline-flex items-center rounded-full px-2.5 py-0.5 text-xs font-semibold ring-1 ring-inset bg-emerald-50 text-emerald-700 ring-emerald-600/20">Open</span></div>
                        <p class="flex items-center gap-2 text-xs text-ink-500 mt-3"><i data-lucide="clock" class="w-3.5 h-3.5"></i>Thu · 14:00–17:00</p>
                        <p class="flex items-center gap-2 text-xs text-ink-500 mt-1"><i data-lucide="map-pin" class="w-3.5 h-3.5"></i>Lecture Hall 4</p>
                        <div class="mt-4"><div class="flex items-center gap-2"><div class="h-1.5 w-32 rounded-full bg-sand-200"><div class="h-1.5 rounded-full bg-brand-600" style="width:72%"></div></div><span class="text-xs text-ink-500 tabular-nums">40/55</span></div></div>
                        <a href="courses/show.html" class="inline-flex items-center gap-2 mt-4 text-sm font-bold text-brand-700">View students <i data-lucide="arrow-right" class="w-4 h-4"></i></a>
                    </div>
                    <div class="bg-white border border-sand-200 rounded-lg p-5">
                        <div class="flex items-start justify-between gap-3"><div><p class="text-xs font-bold text-brand-800">CSC 4101</p><h3 class="font-serif text-lg font-semibold leading-snug">Introduction to Artificial Intelligence</h3></div><span class="inline-flex items-center rounded-full px-2.5 py-0.5 text-xs font-semibold ring-1 ring-inset bg-emerald-50 text-emerald-700 ring-emerald-600/20">Open</span></div>
                        <p class="flex items-center gap-2 text-xs text-ink-500 mt-3"><i data-lucide="clock" class="w-3.5 h-3.5"></i>Fri · 09:00–12:00</p>
                        <p class="flex items-center gap-2 text-xs text-ink-500 mt-1"><i data-lucide="map-pin" class="w-3.5 h-3.5"></i>Computer Lab 1</p>
                        <div class="mt-4"><div class="flex items-center gap-2"><div class="h-1.5 w-32 rounded-full bg-sand-200"><div class="h-1.5 rounded-full bg-brand-600" style="width:70%"></div></div><span class="text-xs text-ink-500 tabular-nums">28/40</span></div></div>
                        <a href="courses/show.html" class="inline-flex items-center gap-2 mt-4 text-sm font-bold text-brand-700">View students <i data-lucide="arrow-right" class="w-4 h-4"></i></a>
                    </div>
                    </div>
                </div>
                <div class="bg-white border border-sand-200 rounded-lg p-5 h-fit">
                    <h2 class="font-serif text-xl font-semibold mb-2">Latest registrations</h2>
                    <ul class="divide-y divide-sand-200"><li class="flex items-center justify-between gap-3 py-3"><div class="flex items-center gap-3"><div class="w-9 h-9 shrink-0 rounded-full bg-brand-100 text-brand-800 flex items-center justify-center text-xs font-bold">EN</div><div class="min-w-0"><p class="font-semibold text-ink-900 truncate">Esther Namuli</p><p class="text-xs text-ink-500 truncate">CSC 2101 · 12 Oct 2026</p></div></div><span class="inline-flex items-center rounded-full px-2.5 py-0.5 text-xs font-semibold ring-1 ring-inset bg-emerald-50 text-emerald-700 ring-emerald-600/20">Confirmed</span></li><li class="flex items-center justify-between gap-3 py-3"><div class="flex items-center gap-3"><div class="w-9 h-9 shrink-0 rounded-full bg-brand-100 text-brand-800 flex items-center justify-center text-xs font-bold">BK</div><div class="min-w-0"><p class="font-semibold text-ink-900 truncate">Brian Kato</p><p class="text-xs text-ink-500 truncate">CSC 2101 · 11 Oct 2026</p></div></div><span class="inline-flex items-center rounded-full px-2.5 py-0.5 text-xs font-semibold ring-1 ring-inset bg-emerald-50 text-emerald-700 ring-emerald-600/20">Confirmed</span></li><li class="flex items-center justify-between gap-3 py-3"><div class="flex items-center gap-3"><div class="w-9 h-9 shrink-0 rounded-full bg-brand-100 text-brand-800 flex items-center justify-center text-xs font-bold">HN</div><div class="min-w-0"><p class="font-semibold text-ink-900 truncate">Hannah Nansubuga</p><p class="text-xs text-ink-500 truncate">CSC 2101 · 15 Oct 2026</p></div></div><span class="inline-flex items-center rounded-full px-2.5 py-0.5 text-xs font-semibold ring-1 ring-inset bg-emerald-50 text-emerald-700 ring-emerald-600/20">Confirmed</span></li><li class="flex items-center justify-between gap-3 py-3"><div class="flex items-center gap-3"><div class="w-9 h-9 shrink-0 rounded-full bg-brand-100 text-brand-800 flex items-center justify-center text-xs font-bold">ID</div><div class="min-w-0"><p class="font-semibold text-ink-900 truncate">Isaac Ddungu</p><p class="text-xs text-ink-500 truncate">CSC 3302 · 10 Oct 2026</p></div></div><span class="inline-flex items-center rounded-full px-2.5 py-0.5 text-xs font-semibold ring-1 ring-inset bg-emerald-50 text-emerald-700 ring-emerald-600/20">Confirmed</span></li><li class="flex items-center justify-between gap-3 py-3"><div class="flex items-center gap-3"><div class="w-9 h-9 shrink-0 rounded-full bg-brand-100 text-brand-800 flex items-center justify-center text-xs font-bold">ID</div><div class="min-w-0"><p class="font-semibold text-ink-900 truncate">Isaac Ddungu</p><p class="text-xs text-ink-500 truncate">CSC 4101 · 10 Oct 2026</p></div></div><span class="inline-flex items-center rounded-full px-2.5 py-0.5 text-xs font-semibold ring-1 ring-inset bg-emerald-50 text-emerald-700 ring-emerald-600/20">Confirmed</span></li></ul>
                    <a href="students/index.html" class="inline-flex items-center gap-2 mt-3 text-sm font-bold text-brand-700">All my students <i data-lucide="arrow-right" class="w-4 h-4"></i></a>
                </div>
            </div>
            <!-- End: Courses and recent registrations -->

        </main>
        <!-- Start: Footer -->
        <footer class="mt-auto bg-white border-t border-sand-200">
            <div class="px-4 sm:px-8 lg:px-10 py-4">
                <div class="flex flex-col md:flex-row justify-between items-center gap-2 text-xs text-ink-500">
                    <p>© 2026 <span class="font-semibold text-ink-800">Meridian University</span> · Course Registration System</p>
                    <p>Students · Lecturers · Courses · Registrations</p>
                </div>
            </div>
        </footer>
        <!-- End: Footer -->
    </div>
    <!-- End: Main content -->

    <script>lucide.createIcons();</script>
</body>
</html>
