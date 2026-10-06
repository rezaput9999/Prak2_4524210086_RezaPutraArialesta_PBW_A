<!DOCTYPE html> <html lang="id"> <head> <meta charset="UTF-8"> <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Kontak — LaraPress</title>

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

</head> <body class="min-h-screen bg-slate-950 text-white antialiased">
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
            <a href="/" class="transition hover:text-white">
                Beranda
            </a>

            <a href="/tentang-kami" class="transition hover:text-white">
                Tentang Kami
            </a>

            <a href="/kontak" class="text-white">
                Kontak
            </a>
        </div>

        <a href="/kontak"
           class="rounded-full bg-white px-5 py-2.5 text-sm font-semibold text-slate-950 transition hover:bg-purple-100 hover:shadow-lg hover:shadow-purple-500/20">
            Mulai Sekarang
        </a>

    </div>
</nav>

<!-- Contact Section -->
<main>
    <section class="relative">
        <div class="mx-auto flex min-h-[calc(100vh-81px)] max-w-7xl items-center justify-center px-6 py-20 lg:px-8">

            <div class="w-full max-w-3xl">

                <!-- Heading -->
                <div class="mb-10 text-center">

                    <div class="mb-6 inline-flex items-center gap-2 rounded-full border border-purple-400/20 bg-purple-400/10 px-4 py-2 text-sm text-purple-300">
                        <span class="h-2 w-2 animate-pulse rounded-full bg-purple-400"></span>
                        Hubungi LaraPress
                    </div>

                    <h1 class="text-5xl font-extrabold tracking-tight sm:text-6xl">
                        Mari
                        <span class="bg-gradient-to-r from-purple-400 via-pink-400 to-blue-400 bg-clip-text text-transparent">
                            Terhubung.
                        </span>
                    </h1>

                    <p class="mx-auto mt-6 max-w-xl text-lg leading-8 text-slate-400">
                        Punya pertanyaan, ide, atau ingin berbagi sesuatu?
                        Silakan hubungi kami melalui kontak yang tersedia.
                    </p>

                </div>

                <!-- Contact Card -->
                <div class="relative">

                    <div class="absolute -inset-4 rounded-3xl bg-gradient-to-r from-purple-600/20 to-blue-600/20 blur-2xl"></div>

                    <div class="relative rounded-3xl border border-white/10 bg-white/5 p-8 shadow-2xl shadow-purple-950/40 backdrop-blur-xl sm:p-10">

                        <!-- Contact Person -->
                        <div class="flex flex-col items-center gap-6 text-center sm:flex-row sm:text-left">

                            <div class="flex h-20 w-20 shrink-0 items-center justify-center rounded-2xl bg-gradient-to-br from-purple-500 to-blue-500 text-3xl font-bold shadow-lg shadow-purple-500/20">
                                R
                            </div>

                            <div class="flex-1">
                                <p class="text-sm font-semibold uppercase tracking-widest text-purple-400">
                                    Kontak Utama
                                </p>

                                <h2 class="mt-2 text-2xl font-bold">
                                    Reza
                                </h2>

                                <p class="mt-2 text-slate-400">
                                    Silakan hubungi Reza melalui nomor berikut.
                                </p>
                            </div>

                        </div>

                        <!-- Phone -->
                        <div class="mt-8 rounded-2xl border border-white/10 bg-slate-900/70 p-6">

                            <p class="text-sm text-slate-500">
                                Nomor Telepon
                            </p>

                            <a href="tel:085814723820"
                               class="mt-2 block text-2xl font-bold tracking-wide text-white transition hover:text-purple-400 sm:text-3xl">
                                0858 1472 3820
                            </a>

                            <a href="https://wa.me/6285814723820"
                               target="_blank"
                               rel="noopener noreferrer"
                               class="mt-6 inline-flex w-full items-center justify-center gap-2 rounded-xl bg-gradient-to-r from-purple-600 to-blue-600 px-6 py-3.5 font-semibold shadow-lg shadow-purple-600/20 transition duration-300 hover:-translate-y-1 hover:shadow-purple-500/30">
                                Hubungi via WhatsApp
                                <span>→</span>
                            </a>

                        </div>

                        <!-- Back Button -->
                        <div class="mt-8 text-center">

                            <a href="/"
                               class="inline-flex items-center gap-2 rounded-xl border border-white/10 bg-white/5 px-6 py-3 font-semibold text-slate-200 transition hover:bg-white/10">
                                <span>←</span>
                                Kembali ke Halaman Utama
                            </a>

                        </div>

                    </div>
                </div>

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

</body> </html>