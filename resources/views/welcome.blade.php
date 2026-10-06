<!DOCTYPE html>

<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

```
<title>LaraPress — Blog Modern</title>

<script src="https://cdn.tailwindcss.com"></script>

<script>
    tailwind.config = {
        theme: {
            extend: {
                fontFamily: {
                    sans: ['Inter', 'ui-sans-serif', 'system-ui', 'sans-serif'],
                },
                animation: {
                    'float': 'float 6s ease-in-out infinite',
                    'pulse-slow': 'pulse 4s ease-in-out infinite',
                },
                keyframes: {
                    float: {
                        '0%, 100%': { transform: 'translateY(0)' },
                        '50%': { transform: 'translateY(-12px)' },
                    }
                }
            }
        }
    }
</script>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
```

</head>

<body class="bg-slate-950 text-white antialiased">

```
<!-- Background -->
<div class="fixed inset-0 -z-10 overflow-hidden">
    <div class="absolute -top-40 -left-40 h-96 w-96 rounded-full bg-purple-600/20 blur-3xl"></div>
    <div class="absolute top-1/3 -right-40 h-96 w-96 rounded-full bg-blue-600/20 blur-3xl"></div>
    <div class="absolute bottom-0 left-1/3 h-80 w-80 rounded-full bg-pink-600/10 blur-3xl"></div>
</div>

<!-- Navbar -->
<nav class="border-b border-white/10 bg-slate-950/70 backdrop-blur-xl">
    <div class="mx-auto flex max-w-7xl items-center justify-between px-6 py-5 lg:px-8">

        <a href="/" class="flex items-center gap-3">
            <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-gradient-to-br from-purple-500 to-blue-500 font-bold shadow-lg shadow-purple-500/20">
                LP
            </div>

            <span class="text-xl font-bold tracking-tight">
                Lara<span class="text-purple-400">Press</span>
            </span>
        </a>

        <div class="hidden items-center gap-8 text-sm text-slate-300 md:flex">
            <a href="/" class="transition hover:text-white">Beranda</a>
            <a href="/tentang-kami" class="transition hover:text-white">Tentang Kami</a>
            <a href="/kontak" class="transition hover:text-white">Kontak</a>
        </div>

        <a href="/kontak"
           class="rounded-full bg-white px-5 py-2.5 text-sm font-semibold text-slate-950 transition hover:bg-purple-100 hover:shadow-lg hover:shadow-purple-500/20">
            Mulai Sekarang
        </a>
    </div>
</nav>

<!-- Hero -->
<main>
    <section class="relative">
        <div class="mx-auto grid min-h-[calc(100vh-81px)] max-w-7xl items-center gap-16 px-6 py-20 lg:grid-cols-2 lg:px-8">

            <!-- Hero Text -->
            <div>
                <div class="mb-6 inline-flex items-center gap-2 rounded-full border border-purple-400/20 bg-purple-400/10 px-4 py-2 text-sm text-purple-300">
                    <span class="h-2 w-2 animate-pulse rounded-full bg-purple-400"></span>
                    Platform Blog Modern
                </div>

                <h1 class="max-w-3xl text-5xl font-extrabold leading-tight tracking-tight sm:text-6xl lg:text-7xl">
                    Cerita.
                    <span class="bg-gradient-to-r from-purple-400 via-pink-400 to-blue-400 bg-clip-text text-transparent">
                        Ide.
                    </span>
                    Inspirasi.
                </h1>

                <p class="mt-7 max-w-xl text-lg leading-8 text-slate-400">
                    Selamat datang di <strong class="text-white">LaraPress</strong>,
                    tempat berbagi wawasan, pengalaman, dan cerita menarik
                    dalam satu ruang yang sederhana dan elegan.
                </p>

                <div class="mt-10 flex flex-col gap-4 sm:flex-row">
                    <a href="/tentang-kami"
                       class="group inline-flex items-center justify-center gap-2 rounded-xl bg-gradient-to-r from-purple-600 to-blue-600 px-6 py-3.5 font-semibold shadow-xl shadow-purple-600/20 transition duration-300 hover:-translate-y-1 hover:shadow-purple-500/30">
                        Jelajahi LaraPress
                        <span class="transition group-hover:translate-x-1">→</span>
                    </a>

                    <a href="/kontak"
                       class="inline-flex items-center justify-center rounded-xl border border-white/10 bg-white/5 px-6 py-3.5 font-semibold text-slate-200 backdrop-blur transition hover:bg-white/10">
                        Hubungi Kami
                    </a>
                </div>

                <!-- Stats -->
                <div class="mt-12 flex flex-wrap gap-8 border-t border-white/10 pt-8">
                    <div>
                        <p class="text-2xl font-bold">100+</p>
                        <p class="mt-1 text-sm text-slate-500">Artikel</p>
                    </div>

                    <div>
                        <p class="text-2xl font-bold">50K+</p>
                        <p class="mt-1 text-sm text-slate-500">Pembaca</p>
                    </div>

                    <div>
                        <p class="text-2xl font-bold">24/7</p>
                        <p class="mt-1 text-sm text-slate-500">Inspirasi</p>
                    </div>
                </div>
            </div>

            <!-- Hero Card -->
            <div class="relative hidden lg:block">
                <div class="absolute -inset-10 rounded-full bg-purple-600/20 blur-3xl"></div>

                <div class="relative animate-float">
                    <div class="rounded-3xl border border-white/10 bg-white/5 p-3 shadow-2xl shadow-purple-950/40 backdrop-blur-xl">

                        <div class="overflow-hidden rounded-2xl bg-slate-900">
                            <div class="flex items-center gap-2 border-b border-white/10 px-5 py-4">
                                <span class="h-3 w-3 rounded-full bg-red-400"></span>
                                <span class="h-3 w-3 rounded-full bg-yellow-400"></span>
                                <span class="h-3 w-3 rounded-full bg-green-400"></span>

                                <div class="ml-4 h-7 flex-1 rounded-lg bg-white/5"></div>
                            </div>

                            <div class="p-8">
                                <div class="mb-6 flex items-center justify-between">
                                    <div>
                                        <div class="h-3 w-24 rounded-full bg-purple-500/40"></div>
                                        <div class="mt-3 h-7 w-56 rounded-lg bg-white/10"></div>
                                    </div>

                                    <div class="h-10 w-10 rounded-full bg-gradient-to-br from-purple-500 to-blue-500"></div>
                                </div>

                                <div class="space-y-3">
                                    <div class="h-3 w-full rounded-full bg-white/10"></div>
                                    <div class="h-3 w-11/12 rounded-full bg-white/10"></div>
                                    <div class="h-3 w-8/12 rounded-full bg-white/10"></div>
                                </div>

                                <div class="mt-8 grid grid-cols-2 gap-4">
                                    <div class="h-28 rounded-2xl bg-gradient-to-br from-purple-500/20 to-purple-900/20"></div>
                                    <div class="h-28 rounded-2xl bg-gradient-to-br from-blue-500/20 to-blue-900/20"></div>
                                </div>

                                <div class="mt-6 h-12 rounded-xl bg-gradient-to-r from-purple-600/80 to-blue-600/80"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Floating badge -->
                    <div class="absolute -bottom-6 -left-8 rounded-2xl border border-white/10 bg-slate-900/90 px-5 py-4 shadow-2xl backdrop-blur-xl">
                        <div class="flex items-center gap-3">
                            <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-green-500/10 text-green-400">
                                ✓
                            </div>

                            <div>
                                <p class="text-sm font-semibold">Blog Aktif</p>
                                <p class="text-xs text-slate-500">Selalu berkembang</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Features -->
    <section class="border-t border-white/10 bg-white/[0.02]">
        <div class="mx-auto max-w-7xl px-6 py-24 lg:px-8">

            <div class="mx-auto max-w-2xl text-center">
                <p class="text-sm font-semibold uppercase tracking-widest text-purple-400">
                    Kenapa LaraPress?
                </p>

                <h2 class="mt-3 text-3xl font-bold sm:text-4xl">
                    Dibuat untuk berbagi sesuatu yang berarti.
                </h2>

                <p class="mt-4 text-slate-400">
                    Platform sederhana dengan pengalaman membaca yang nyaman,
                    cepat, dan modern.
                </p>
            </div>

            <div class="mt-16 grid gap-6 md:grid-cols-3">

                <div class="group rounded-2xl border border-white/10 bg-white/5 p-7 transition duration-300 hover:-translate-y-2 hover:border-purple-500/30 hover:bg-white/[0.07]">
                    <div class="mb-6 flex h-12 w-12 items-center justify-center rounded-xl bg-purple-500/10 text-2xl">
                        ✍️
                    </div>

                    <h3 class="text-xl font-semibold">Konten Berkualitas</h3>

                    <p class="mt-3 leading-7 text-slate-400">
                        Temukan artikel dan cerita yang dibuat untuk memberikan
                        wawasan serta inspirasi baru.
                    </p>
                </div>

                <div class="group rounded-2xl border border-white/10 bg-white/5 p-7 transition duration-300 hover:-translate-y-2 hover:border-blue-500/30 hover:bg-white/[0.07]">
                    <div class="mb-6 flex h-12 w-12 items-center justify-center rounded-xl bg-blue-500/10 text-2xl">
                        ⚡
                    </div>

                    <h3 class="text-xl font-semibold">Cepat & Modern</h3>

                    <p class="mt-3 leading-7 text-slate-400">
                        Tampilan bersih dan responsif sehingga nyaman digunakan
                        dari perangkat apa pun.
                    </p>
                </div>

                <div class="group rounded-2xl border border-white/10 bg-white/5 p-7 transition duration-300 hover:-translate-y-2 hover:border-pink-500/30 hover:bg-white/[0.07]">
                    <div class="mb-6 flex h-12 w-12 items-center justify-center rounded-xl bg-pink-500/10 text-2xl">
                        💡
                    </div>

                    <h3 class="text-xl font-semibold">Penuh Inspirasi</h3>

                    <p class="mt-3 leading-7 text-slate-400">
                        Satu tempat untuk menemukan ide, pengalaman, dan
                        perspektif baru setiap hari.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="px-6 py-24 lg:px-8">
        <div class="mx-auto max-w-5xl overflow-hidden rounded-3xl border border-white/10 bg-gradient-to-br from-purple-600/20 via-slate-900 to-blue-600/20 p-10 text-center shadow-2xl sm:p-16">

            <div class="mx-auto max-w-2xl">
                <p class="text-sm font-semibold uppercase tracking-widest text-purple-300">
                    Mari Terhubung
                </p>

                <h2 class="mt-4 text-3xl font-bold sm:text-5xl">
                    Punya sesuatu untuk dibagikan?
                </h2>

                <p class="mt-5 text-slate-400">
                    Jangan ragu untuk menghubungi kami. Mari berbagi ide,
                    cerita, dan inspirasi bersama.
                </p>

                <a href="/kontak"
                   class="mt-8 inline-flex rounded-xl bg-white px-7 py-3.5 font-semibold text-slate-950 transition hover:bg-purple-100 hover:shadow-xl">
                    Hubungi LaraPress →
                </a>
            </div>

        </div>
    </section>
</main>

<!-- Footer -->
<footer class="border-t border-white/10">
    <div class="mx-auto flex max-w-7xl flex-col items-center justify-between gap-4 px-6 py-8 text-sm text-slate-500 sm:flex-row lg:px-8">

        <p>
            © {{ date('Y') }} LaraPress. Semua hak dilindungi.
        </p>

        <div class="flex gap-6">
            <a href="/tentang-kami" class="transition hover:text-white">
                Tentang Kami
            </a>

            <a href="/kontak" class="transition hover:text-white">
                Kontak
            </a>
        </div>

    </div>
</footer>
```

</body>
</html>