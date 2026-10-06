<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tentang Kami — LaraPress</title>

    <!-- Tailwind CSS -->
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
                            '0%, 100%': {
                                transform: 'translateY(0)'
                            },
                            '50%': {
                                transform: 'translateY(-12px)'
                            },
                        }
                    }
                }
            }
        }
    </script>

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
        rel="stylesheet"
    >
</head>

<body class="bg-slate-950 text-white antialiased">

    <!-- ========================================
         BACKGROUND
    ========================================= -->
    <div class="fixed inset-0 -z-10 overflow-hidden">

        <div class="absolute -top-40 -left-40
                    h-96 w-96 rounded-full
                    bg-purple-600/20 blur-3xl">
        </div>

        <div class="absolute top-1/3 -right-40
                    h-96 w-96 rounded-full
                    bg-blue-600/20 blur-3xl">
        </div>

        <div class="absolute bottom-0 left-1/3
                    h-80 w-80 rounded-full
                    bg-pink-600/10 blur-3xl">
        </div>

    </div>


    <!-- ========================================
         NAVBAR
    ========================================= -->
    <nav class="border-b border-white/10
                bg-slate-950/70 backdrop-blur-xl">

        <div class="mx-auto flex max-w-7xl
                    items-center justify-between
                    px-6 py-5 lg:px-8">

            <!-- Logo -->
            <a href="/" class="flex items-center gap-3">

                <div class="flex h-10 w-10
                            items-center justify-center
                            rounded-xl
                            bg-gradient-to-br
                            from-purple-500 to-blue-500
                            font-bold
                            shadow-lg shadow-purple-500/20">
                    LP
                </div>

                <span class="text-xl font-bold tracking-tight">
                    Lara<span class="text-purple-400">Press</span>
                </span>

            </a>


            <!-- Menu -->
            <div class="hidden items-center gap-8
                        text-sm text-slate-300 md:flex">

                <a href="/"
                   class="transition hover:text-white">
                    Beranda
                </a>

                <a href="/tentang-kami"
                   class="text-purple-400 transition hover:text-purple-300">
                    Tentang Kami
                </a>

                <a href="/kontak"
                   class="transition hover:text-white">
                    Kontak
                </a>

            </div>


            <!-- Button -->
            <a href="/kontak"
               class="rounded-full
                      bg-white
                      px-5 py-2.5
                      text-sm font-semibold
                      text-slate-950
                      transition
                      hover:bg-purple-100
                      hover:shadow-lg
                      hover:shadow-purple-500/20">

                Mulai Sekarang

            </a>

        </div>

    </nav>


    <!-- ========================================
         MAIN
    ========================================= -->
    <main>


        <!-- ====================================
             HERO TENTANG KAMI
        ===================================== -->
        <section class="relative">

            <div class="mx-auto grid
                        min-h-[calc(100vh-81px)]
                        max-w-7xl
                        items-center
                        gap-16
                        px-6 py-20
                        lg:grid-cols-2
                        lg:px-8">


                <!-- LEFT CONTENT -->
                <div>

                    <!-- Badge -->
                    <div class="mb-6 inline-flex
                                items-center gap-2
                                rounded-full
                                border border-purple-400/20
                                bg-purple-400/10
                                px-4 py-2
                                text-sm text-purple-300">

                        <span class="h-2 w-2
                                     animate-pulse
                                     rounded-full
                                     bg-purple-400">
                        </span>

                        Tentang LaraPress

                    </div>


                    <!-- Heading -->
                    <h1 class="max-w-3xl
                               text-5xl
                               font-extrabold
                               leading-tight
                               tracking-tight
                               sm:text-6xl">

                        Mengenal
                        <span class="bg-gradient-to-r
                                     from-purple-400
                                     via-pink-400
                                     to-blue-400
                                     bg-clip-text
                                     text-transparent">
                            LaraPress
                        </span>

                    </h1>


                    <!-- Description -->
                    <p class="mt-7 max-w-xl
                              text-lg
                              leading-8
                              text-slate-400">

                        LaraPress adalah platform blog modern yang
                        dibuat sebagai ruang untuk berbagi cerita,
                        pengetahuan, pengalaman, dan ide yang
                        bermanfaat bagi banyak orang.

                    </p>


                    <p class="mt-5 max-w-xl
                              text-lg
                              leading-8
                              text-slate-400">

                        Kami percaya bahwa setiap cerita memiliki
                        nilai dan setiap ide dapat menjadi awal
                        dari sesuatu yang besar.

                    </p>


                    <!-- Buttons -->
                    <div class="mt-10 flex
                                flex-col gap-4
                                sm:flex-row">

                        <a href="/"
                           class="group inline-flex
                                  items-center
                                  justify-center
                                  gap-2
                                  rounded-xl
                                  bg-gradient-to-r
                                  from-purple-600
                                  to-blue-600
                                  px-6 py-3.5
                                  font-semibold
                                  shadow-xl
                                  shadow-purple-600/20
                                  transition
                                  duration-300
                                  hover:-translate-y-1">

                            Kembali ke Beranda

                            <span class="transition
                                         group-hover:translate-x-1">
                                →
                            </span>

                        </a>


                        <a href="/kontak"
                           class="inline-flex
                                  items-center
                                  justify-center
                                  rounded-xl
                                  border border-white/10
                                  bg-white/5
                                  px-6 py-3.5
                                  font-semibold
                                  text-slate-200
                                  backdrop-blur
                                  transition
                                  hover:bg-white/10">

                            Hubungi Kami

                        </a>

                    </div>

                </div>


                <!-- RIGHT CARD -->
                <div class="relative hidden lg:block">

                    <!-- Glow -->
                    <div class="absolute -inset-10
                                rounded-full
                                bg-purple-600/20
                                blur-3xl">
                    </div>


                    <div class="relative animate-float">

                        <!-- Main Card -->
                        <div class="rounded-3xl
                                    border border-white/10
                                    bg-white/5
                                    p-3
                                    shadow-2xl
                                    shadow-purple-950/40
                                    backdrop-blur-xl">

                            <div class="rounded-2xl
                                        bg-slate-900
                                        p-8">


                                <!-- Icon -->
                                <div class="mb-8
                                            flex items-center
                                            justify-between">

                                    <div>
                                        <p class="text-sm
                                                  font-semibold
                                                  text-purple-400">
                                            LARAPRESS
                                        </p>

                                        <h2 class="mt-2
                                                   text-2xl
                                                   font-bold">
                                            Ruang untuk
                                            <span class="text-blue-400">
                                                berbagi
                                            </span>
                                        </h2>
                                    </div>


                                    <div class="flex h-14 w-14
                                                items-center
                                                justify-center
                                                rounded-2xl
                                                bg-gradient-to-br
                                                from-purple-500
                                                to-blue-500
                                                text-lg
                                                font-bold
                                                shadow-lg
                                                shadow-purple-500/20">
                                        LP
                                    </div>

                                </div>


                                <!-- Content -->
                                <div class="space-y-4">

                                    <div class="rounded-2xl
                                                border border-white/10
                                                bg-white/5
                                                p-5">

                                        <div class="flex gap-4">

                                            <div class="flex h-11 w-11
                                                        shrink-0
                                                        items-center
                                                        justify-center
                                                        rounded-xl
                                                        bg-purple-500/10
                                                        text-xl">
                                                ✍️
                                            </div>

                                            <div>
                                                <h3 class="font-semibold">
                                                    Berbagi Cerita
                                                </h3>

                                                <p class="mt-1 text-sm
                                                          leading-6
                                                          text-slate-500">
                                                    Tempat untuk menuangkan
                                                    cerita dan pengalaman.
                                                </p>
                                            </div>

                                        </div>

                                    </div>


                                    <div class="rounded-2xl
                                                border border-white/10
                                                bg-white/5
                                                p-5">

                                        <div class="flex gap-4">

                                            <div class="flex h-11 w-11
                                                        shrink-0
                                                        items-center
                                                        justify-center
                                                        rounded-xl
                                                        bg-blue-500/10
                                                        text-xl">
                                                💡
                                            </div>

                                            <div>
                                                <h3 class="font-semibold">
                                                    Berbagi Ide
                                                </h3>

                                                <p class="mt-1 text-sm
                                                          leading-6
                                                          text-slate-500">
                                                    Menghadirkan perspektif
                                                    dan wawasan baru.
                                                </p>
                                            </div>

                                        </div>

                                    </div>


                                    <div class="rounded-2xl
                                                border border-white/10
                                                bg-white/5
                                                p-5">

                                        <div class="flex gap-4">

                                            <div class="flex h-11 w-11
                                                        shrink-0
                                                        items-center
                                                        justify-center
                                                        rounded-xl
                                                        bg-pink-500/10
                                                        text-xl">
                                                🚀
                                            </div>

                                            <div>
                                                <h3 class="font-semibold">
                                                    Terus Berkembang
                                                </h3>

                                                <p class="mt-1 text-sm
                                                          leading-6
                                                          text-slate-500">
                                                    Tumbuh bersama pembaca
                                                    dan komunitas.
                                                </p>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>


                        <!-- Floating Badge -->
                        <div class="absolute
                                    -bottom-6
                                    -left-8
                                    rounded-2xl
                                    border border-white/10
                                    bg-slate-900/90
                                    px-5 py-4
                                    shadow-2xl
                                    backdrop-blur-xl">

                            <div class="flex items-center gap-3">

                                <div class="flex h-10 w-10
                                            items-center
                                            justify-center
                                            rounded-xl
                                            bg-green-500/10
                                            text-green-400">
                                    ✓
                                </div>

                                <div>

                                    <p class="text-sm font-semibold">
                                        Platform Aktif
                                    </p>

                                    <p class="text-xs text-slate-500">
                                        Terus berkembang
                                    </p>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>


        <!-- ====================================
             VISI MISI
        ===================================== -->
        <section class="border-t border-white/10
                        bg-white/[0.02]">

            <div class="mx-auto max-w-7xl
                        px-6 py-24
                        lg:px-8">


                <!-- Header -->
                <div class="mx-auto max-w-2xl text-center">

                    <p class="text-sm
                              font-semibold
                              uppercase
                              tracking-widest
                              text-purple-400">
                        Visi & Misi
                    </p>

                    <h2 class="mt-3
                               text-3xl
                               font-bold
                               sm:text-4xl">
                        Apa yang ingin kami capai?
                    </h2>

                    <p class="mt-4
                              leading-7
                              text-slate-400">
                        LaraPress dibangun dengan tujuan sederhana:
                        menciptakan ruang digital yang nyaman untuk
                        membaca, menulis, dan berbagi.
                    </p>

                </div>


                <!-- Cards -->
                <div class="mt-16
                            grid gap-6
                            md:grid-cols-2">


                    <!-- VISI -->
                    <div class="group rounded-3xl
                                border border-white/10
                                bg-white/5
                                p-8
                                transition duration-300
                                hover:-translate-y-2
                                hover:border-purple-500/30
                                hover:bg-white/[0.07]">

                        <div class="mb-6 flex h-14 w-14
                                    items-center
                                    justify-center
                                    rounded-2xl
                                    bg-purple-500/10
                                    text-2xl">
                            🎯
                        </div>

                        <h3 class="text-2xl
                                   font-bold">
                            Visi Kami
                        </h3>

                        <p class="mt-4
                                  leading-8
                                  text-slate-400">

                            Menjadi ruang digital yang membantu
                            orang menemukan pengetahuan, inspirasi,
                            dan perspektif baru melalui tulisan
                            yang mudah dipahami dan menyenangkan.

                        </p>

                    </div>


                    <!-- MISI -->
                    <div class="group rounded-3xl
                                border border-white/10
                                bg-white/5
                                p-8
                                transition duration-300
                                hover:-translate-y-2
                                hover:border-blue-500/30
                                hover:bg-white/[0.07]">

                        <div class="mb-6 flex h-14 w-14
                                    items-center
                                    justify-center
                                    rounded-2xl
                                    bg-blue-500/10
                                    text-2xl">
                            🚀
                        </div>

                        <h3 class="text-2xl
                                   font-bold">
                            Misi Kami
                        </h3>

                        <p class="mt-4
                                  leading-8
                                  text-slate-400">

                            Menghadirkan konten yang informatif,
                            relevan, dan inspiratif sekaligus
                            membangun pengalaman membaca yang
                            sederhana dan nyaman.

                        </p>

                    </div>

                </div>

            </div>

        </section>


        <!-- ====================================
             NILAI-NILAI
        ===================================== -->
        <section>

            <div class="mx-auto max-w-7xl
                        px-6 py-24
                        lg:px-8">

                <div class="mx-auto max-w-2xl text-center">

                    <p class="text-sm
                              font-semibold
                              uppercase
                              tracking-widest
                              text-purple-400">
                        Nilai Kami
                    </p>

                    <h2 class="mt-3
                               text-3xl
                               font-bold
                               sm:text-4xl">
                        Dibangun dengan nilai yang berarti.
                    </h2>

                </div>


                <div class="mt-16
                            grid gap-6
                            md:grid-cols-3">


                    <!-- Card 1 -->
                    <div class="group rounded-2xl
                                border border-white/10
                                bg-white/5
                                p-7
                                transition duration-300
                                hover:-translate-y-2
                                hover:border-purple-500/30">

                        <div class="mb-6 flex h-12 w-12
                                    items-center
                                    justify-center
                                    rounded-xl
                                    bg-purple-500/10
                                    text-2xl">
                            ❤️
                        </div>

                        <h3 class="text-xl font-semibold">
                            Sederhana
                        </h3>

                        <p class="mt-3
                                  leading-7
                                  text-slate-400">
                            Kami percaya pengalaman yang sederhana
                            membuat informasi lebih mudah dinikmati.
                        </p>

                    </div>


                    <!-- Card 2 -->
                    <div class="group rounded-2xl
                                border border-white/10
                                bg-white/5
                                p-7
                                transition duration-300
                                hover:-translate-y-2
                                hover:border-blue-500/30">

                        <div class="mb-6 flex h-12 w-12
                                    items-center
                                    justify-center
                                    rounded-xl
                                    bg-blue-500/10
                                    text-2xl">
                            💡
                        </div>

                        <h3 class="text-xl font-semibold">
                            Bermakna
                        </h3>

                        <p class="mt-3
                                  leading-7
                                  text-slate-400">
                            Setiap konten diharapkan memberikan
                            wawasan atau inspirasi bagi pembaca.
                        </p>

                    </div>


                    <!-- Card 3 -->
                    <div class="group rounded-2xl
                                border border-white/10
                                bg-white/5
                                p-7
                                transition duration-300
                                hover:-translate-y-2
                                hover:border-pink-500/30">

                        <div class="mb-6 flex h-12 w-12
                                    items-center
                                    justify-center
                                    rounded-xl
                                    bg-pink-500/10
                                    text-2xl">
                            🤝
                        </div>

                        <h3 class="text-xl font-semibold">
                            Bersama
                        </h3>

                        <p class="mt-3
                                  leading-7
                                  text-slate-400">
                            LaraPress berkembang melalui ide,
                            cerita, dan kontribusi dari banyak orang.
                        </p>

                    </div>

                </div>

            </div>

        </section>


        <!-- ====================================
             CTA
        ===================================== -->
        <section class="px-6 py-24 lg:px-8">

            <div class="mx-auto max-w-5xl
                        overflow-hidden
                        rounded-3xl
                        border border-white/10
                        bg-gradient-to-br
                        from-purple-600/20
                        via-slate-900
                        to-blue-600/20
                        p-10
                        text-center
                        shadow-2xl
                        sm:p-16">

                <div class="mx-auto max-w-2xl">

                    <p class="text-sm
                              font-semibold
                              uppercase
                              tracking-widest
                              text-purple-300">
                        Mari Terhubung
                    </p>

                    <h2 class="mt-4
                               text-3xl
                               font-bold
                               sm:text-5xl">
                        Punya cerita untuk dibagikan?
                    </h2>

                    <p class="mt-5
                              leading-7
                              text-slate-400">

                        Kami selalu terbuka untuk ide,
                        masukan, pertanyaan, dan kolaborasi baru.

                    </p>

                    <a href="/kontak"
                       class="mt-8
                              inline-flex
                              rounded-xl
                              bg-white
                              px-7 py-3.5
                              font-semibold
                              text-slate-950
                              transition
                              hover:bg-purple-100
                              hover:shadow-xl">

                        Hubungi LaraPress →

                    </a>

                </div>

            </div>

        </section>

    </main>


    <!-- ========================================
         FOOTER
    ========================================= -->
    <footer class="border-t border-white/10">

        <div class="mx-auto
                    flex max-w-7xl
                    flex-col
                    items-center
                    justify-between
                    gap-4
                    px-6 py-8
                    text-sm
                    text-slate-500
                    sm:flex-row
                    lg:px-8">

            <p>
                © {{ date('Y') }} LaraPress.
                Semua hak dilindungi.
            </p>

            <div class="flex gap-6">

                <a href="/"
                   class="transition hover:text-white">
                    Beranda
                </a>

                <a href="/tentang-kami"
                   class="transition hover:text-white">
                    Tentang Kami
                </a>

                <a href="/kontak"
                   class="transition hover:text-white">
                    Kontak
                </a>

            </div>

        </div>

    </footer>

</body>
</html>
