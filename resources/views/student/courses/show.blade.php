<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course details — Meridian University</title>
    <meta name="description" content="Course details — Course Registration System at Meridian University">
    <link rel="icon" type="image/svg+xml" href="../../assets/img/logo.svg">
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
    <link rel="stylesheet" href="../../assets/css/styles.css">
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
                <a href="../../student/dashboard.html" class="flex items-center gap-3 ms-2">
                    <img src="../../assets/img/logo.svg" alt="Meridian University" class="h-9 w-9">
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
                            <a href="../../student/notifications.html" class="text-xs font-semibold text-brand-700">View all</a>
                        </div>
                        <a href="../../student/notifications.html" class="block px-4 py-3 hover:bg-sand-50 border-b border-sand-200">
                                <p class="text-sm text-ink-800">Your registration for CSC 2204 is pending (course full)</p>
                                <p class="text-xs text-ink-500 mt-1">14 min ago</p>
                            </a>
                            <a href="../../student/notifications.html" class="block px-4 py-3 hover:bg-sand-50 border-b border-sand-200">
                                <p class="text-sm text-ink-800">Registration closes on 6 November</p>
                                <p class="text-xs text-ink-500 mt-1">2 hrs ago</p>
                            </a>
                            <a href="../../student/notifications.html" class="block px-4 py-3 hover:bg-sand-50">
                                <p class="text-sm text-ink-800">CSC 2101 confirmed</p>
                                <p class="text-xs text-ink-500 mt-1">12 Oct</p>
                            </a>
                            
                    </div>
                </details>
                <!-- End: Header notifications -->
                <!-- Start: Header user menu -->
                <details class="menu-dropdown relative">
                    <summary class="flex items-center gap-2 rounded-md p-1 pr-2 text-sm hover:bg-ink-800 cursor-pointer list-none">
                        <div class="w-8 h-8 rounded-full bg-brand-500 text-white flex items-center justify-center text-xs font-bold">EN</div>
                        <div class="hidden md:block text-left">
                            <div class="text-xs font-semibold text-white">Esther Namuli</div>
                            <div class="text-[10px] text-brand-200">Student</div>
                        </div>
                        <i data-lucide="chevron-down" class="w-4 h-4 text-ink-300"></i>
                    </summary>
                    <div class="absolute right-0 mt-2 w-60 bg-white text-ink-900 border border-sand-200 rounded-lg shadow-lg overflow-hidden">
                        <div class="px-4 py-3 border-b border-sand-200 bg-sand-100">
                            <p class="text-sm font-bold">Esther Namuli</p>
                            <p class="text-xs text-ink-500 truncate">esther.namuli@students.meridian.ac</p>
                        </div>
                        <a href="../../student/profile.html" class="flex items-center gap-2 px-4 py-2 text-sm text-ink-700 hover:bg-sand-50"><i data-lucide="user" class="w-4 h-4"></i>My account</a>
                        <a href="../../student/notifications.html" class="flex items-center gap-2 px-4 py-2 text-sm text-ink-700 hover:bg-sand-50"><i data-lucide="bell" class="w-4 h-4"></i>Notifications</a>
                        <a href="../../login.html" class="flex items-center gap-2 px-4 py-2 text-sm font-semibold text-coral-600 hover:bg-sand-50 border-t border-sand-200"><i data-lucide="log-out" class="w-4 h-4"></i>Sign out</a>
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
            <div class="mb-6"><p class="px-3 mb-2 text-[11px] font-bold uppercase tracking-[0.14em] text-ink-400">Overview</p><div class="space-y-1"><a href="../../student/dashboard.html" class="group flex items-center gap-3 rounded-md px-3 py-2 text-sm font-semibold transition-colors text-ink-600 hover:bg-sand-100 hover:text-ink-900"><i data-lucide="layout-dashboard" class="w-[18px] h-[18px] text-ink-400 group-hover:text-brand-700"></i>Dashboard</a></div></div><div class="mb-6"><p class="px-3 mb-2 text-[11px] font-bold uppercase tracking-[0.14em] text-ink-400">Registration</p><div class="space-y-1"><a href="../../student/courses/index.html" class="group flex items-center gap-3 rounded-md px-3 py-2 text-sm font-semibold transition-colors bg-brand-700 text-white"><i data-lucide="library" class="w-[18px] h-[18px] text-brand-100"></i>Available courses</a><a href="../../student/registrations/index.html" class="group flex items-center gap-3 rounded-md px-3 py-2 text-sm font-semibold transition-colors text-ink-600 hover:bg-sand-100 hover:text-ink-900"><i data-lucide="clipboard-check" class="w-[18px] h-[18px] text-ink-400 group-hover:text-brand-700"></i>My registrations</a></div></div><div class="mb-6"><p class="px-3 mb-2 text-[11px] font-bold uppercase tracking-[0.14em] text-ink-400">Account</p><div class="space-y-1"><a href="../../student/notifications.html" class="group flex items-center gap-3 rounded-md px-3 py-2 text-sm font-semibold transition-colors text-ink-600 hover:bg-sand-100 hover:text-ink-900"><i data-lucide="bell" class="w-[18px] h-[18px] text-ink-400 group-hover:text-brand-700"></i>Notifications</a><a href="../../student/profile.html" class="group flex items-center gap-3 rounded-md px-3 py-2 text-sm font-semibold transition-colors text-ink-600 hover:bg-sand-100 hover:text-ink-900"><i data-lucide="user-cog" class="w-[18px] h-[18px] text-ink-400 group-hover:text-brand-700"></i>My account</a></div></div>
        </div>
        <!-- Start: Sidebar user card -->
        <div class="mt-auto border-t border-sand-200 p-4">
            <div class="flex items-center gap-3 mb-3">
                <div class="w-10 h-10 shrink-0 rounded-full bg-brand-100 text-brand-800 flex items-center justify-center text-xs font-bold">EN</div>
                <div class="flex-1 min-w-0">
                    <p class="text-sm font-bold truncate">Esther Namuli</p>
                    <p class="text-xs text-ink-500 truncate">BSc Computer Science · Year 2</p>
                </div>
            </div>
            <div class="flex items-center gap-2 rounded-md bg-brand-50 px-3 py-2">
                <i data-lucide="badge-check" class="w-4 h-4 text-brand-700"></i>
                <span class="text-xs font-bold uppercase tracking-wide text-brand-800">Student</span>
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
                    <p class="text-xs font-bold uppercase tracking-[0.18em] text-brand-700 mb-2">Course details</p>
                    <h1 class="font-serif text-3xl font-semibold text-ink-900">CSC 3302 · Software Engineering</h1>
                    <p class="text-sm text-ink-500 mt-2 max-w-2xl">Review the details before you register.</p>
                </div>
                
            </div>
            <!-- End: Page heading -->
            <!-- Start: Course detail -->
            <div class="grid lg:grid-cols-3 gap-6">
                <div class="lg:col-span-2 bg-white border border-sand-200 rounded-lg p-6">
                    <div class="flex items-center gap-2 mb-4"><span class="inline-flex items-center rounded-full px-2.5 py-0.5 text-xs font-semibold ring-1 ring-inset bg-emerald-50 text-emerald-700 ring-emerald-600/20">Open</span><span class="inline-flex items-center rounded-full px-2.5 py-0.5 text-xs font-semibold ring-1 ring-inset bg-brand-50 text-brand-800 ring-brand-600/20">Computing</span><span class="inline-flex items-center rounded-full px-2.5 py-0.5 text-xs font-semibold ring-1 ring-inset bg-sand-100 text-ink-600 ring-sand-300">3 credits</span></div>
                    <h2 class="font-serif text-xl font-semibold mb-2">About this course</h2>
                    <p class="text-sm text-ink-600 leading-relaxed mb-6">Covers the software development lifecycle: requirements, design, testing and maintenance. Students work in teams to design and deliver a small system and present it at the end of the semester.</p>
                    <h3 class="font-serif text-lg font-semibold mb-2">Prerequisites</h3>
                    <ul class="text-sm text-ink-600 space-y-1.5 list-disc pl-5"><li>CSC 2101 Data Structures and Algorithms</li><li>CSC 2204 Database Systems (recommended)</li></ul>
                </div>
                <aside class="bg-white border border-sand-200 rounded-lg p-6 h-fit">
                    <dl class="space-y-4 text-sm">
                        <div class="flex gap-3"><i data-lucide="presentation" class="w-4 h-4 mt-0.5 text-brand-700"></i><div><dt class="text-xs font-bold uppercase tracking-wider text-ink-500">Lecturer</dt><dd class="font-semibold">Dr. Amara Okello</dd></div></div>
                        <div class="flex gap-3"><i data-lucide="clock" class="w-4 h-4 mt-0.5 text-brand-700"></i><div><dt class="text-xs font-bold uppercase tracking-wider text-ink-500">Schedule</dt><dd class="font-semibold">Thu · 14:00–17:00</dd></div></div>
                        <div class="flex gap-3"><i data-lucide="map-pin" class="w-4 h-4 mt-0.5 text-brand-700"></i><div><dt class="text-xs font-bold uppercase tracking-wider text-ink-500">Room</dt><dd class="font-semibold">Lecture Hall 4</dd></div></div>
                        <div class="flex gap-3"><i data-lucide="armchair" class="w-4 h-4 mt-0.5 text-brand-700"></i><div><dt class="text-xs font-bold uppercase tracking-wider text-ink-500">Seats</dt><dd class="mt-1"><div class="flex items-center gap-2"><div class="h-1.5 w-28 rounded-full bg-sand-200"><div class="h-1.5 rounded-full bg-brand-600" style="width:72%"></div></div><span class="text-xs text-ink-500 tabular-nums">40/55</span></div></dd></div></div>
                    </dl>
                    <a href="../registrations/index.html" class="inline-flex items-center justify-center gap-2 rounded-md bg-brand-700 px-4 py-2 text-sm font-semibold text-white hover:bg-brand-800 transition-colors w-full mt-6 py-3">Register for this course</a>
                    <p class="text-xs text-ink-500 mt-3 text-center">This adds 3 credits to your load (13 of 18).</p>
                </aside>
            </div>
            <!-- End: Course detail -->
            <a href="index.html" class="inline-flex items-center gap-2 mt-6 text-sm font-semibold text-brand-700"><i data-lucide="arrow-left" class="w-4 h-4"></i>Back to available courses</a>

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
