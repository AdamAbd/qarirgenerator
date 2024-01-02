<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body class="font-satoshi bg-body">
    {{-- Hero Section --}}
    <section class="w-full h-[423px] lg:h-[708px] px-4 lg:px-[60px] bg-ai bg-center bg-cover text-white">
        <nav class="py-6 flex flex-row justify-between">
            <img src="../assets/vector/logo.svg" alt="Qarir Generator Logo" class="w-[150px] lg:hidden" />
            <div class="hidden lg:flex flex-row gap-[60px] items-center">
                <img src="../assets/vector/logo.svg" alt="Qarir Generator Logo" class="w-[200px]" />
                <a href="/" class="text-base font-medium">Product</a>
                <a href="/" class="text-base font-medium">Partnership</a>
                <a href="/" class="text-base font-medium">Scholarship</a>
                <a href="/" class="text-base font-medium">Article</a>
            </div>
            <div class="flex flex-row gap-6 items-center">
                <a href="https://calendar.app.google/6xrDJSLWZhcYxYrs9"
                    class="bg-gradient-to-r from-primary to-secondary h-10 lg:h-12 rounded-lg p-px cursor-pointer">
                    <span
                        class="flex items-center w-full h-full bg-secondary rounded-lg px-3.5 lg:px-5 py-4 text-sm lg:text-base font-medium">
                        Book A Call
                    </span>
                </a>
                <div class="w-px h-6 bg-white hidden lg:flex"></div>
                <button class="gap-2 hidden lg:inline-flex ">
                    <img src="../assets/vector/globe1.svg" alt="Icon Globe" />
                    <span class="text-base font-medium">English</span>
                    <img src="../assets/vector/dropdown.svg" alt="Icon Globe" />
                </button>
            </div>
            <img src="../assets/vector/menu.svg" alt="Menu" class="mr-2 cursor-pointer lg:hidden" />
        </nav>
        <div class="flex flex-col w-[681px] gap-10">
            <h1 class="text-2xl lg:text-5xl font-bold mt-14 lg:mt-20 leading-10">Accelerate Your Career in Program AI
            </h1>
            <p class="text-2xl text-white/75 font-light leading-normal">More than learning! Work on projects, get expert
                mentorship,
                meet data
                industry leaders, and get ready to
                start your Program AI career!😎</p>
            <div class="flex flex-row gap-6">
                <a href="#program"
                    class="inline-flex lg:gap-4 items-center px-5 lg:px-10 h-10 lg:h-14 bg-primary rounded-full text-sm lg:text-lg font-bold">
                    Free Mentor Consultation
                </a>
                <a href="#program"
                    class="inline-flex lg:gap-4 items-center px-5 lg:px-10 h-10 lg:h-14 bg-secondary border border-white/20 rounded-full text-sm lg:text-lg font-bold">
                    <img src="../assets/vector/work.svg" alt="Icon Work">
                    Scholarship
                </a>
            </div>
        </div>
    </section>
    <div class="flex flex-row gap-10 mx-4 lg:mx-[60px] mt-10 lg:mt-12">
        <aside class="px-[30px] py-6 w-[280px] flex flex-col h-min gap-4 bg-white rounded-2xl">
            <h3 class="text-2xl text-text font-semibold">Course Details AI Engineer</h3>
            <div class="inline-flex gap-4 items-center text-lg text-primary font-bold">
                <div class="w-0.5 h-[34px] bg-primary"></div>
                About Program
            </div>
            <div class="inline-flex gap-4 items-center text-lg text-text-light font-medium">
                <div class="w-0.5 h-[34px] bg-white"></div>
                Curriculum
            </div>
            <div class="inline-flex gap-4 items-center text-lg text-text-light font-medium">
                <div class="w-0.5 h-[34px] bg-white"></div>
                Learning phase
            </div>
            <div class="inline-flex gap-4 items-center text-lg text-text-light font-medium">
                <div class="w-0.5 h-[34px] bg-white"></div>
                Proven Methodology
            </div>
            <div class="inline-flex gap-4 items-center">
                <div class="w-0.5 h-[34px] bg-white"></div>
                <div
                    class="inline-flex justify-center gap-2 py-1 w-[187px] bg-chips/10 rounded-xl text-lg text-chips font-medium">
                    <img src="../assets/vector/mosque.svg" alt="Icon Mosque">
                    Halal Guaranteed
                </div>
            </div>
            <div class="inline-flex gap-4 items-center text-lg text-text-light font-medium">
                <div class="w-0.5 h-[34px] bg-white"></div>
                Alumni
            </div>
            <div class="inline-flex gap-4 items-center text-lg text-text-light font-medium">
                <div class="w-0.5 h-[34px] bg-white"></div>
                Countries & Edu Fees
            </div>
            <div class="inline-flex gap-4 items-center text-lg text-text-light font-medium">
                <div class="w-0.5 h-[34px] bg-white"></div>
                FAQ
            </div>
            <a href="#program"
                class="inline-flex justify-center items-center px-5 lg:px-10 h-10 lg:h-14 bg-primary rounded-full text-sm lg:text-lg text-white font-bold">
                Apply Now
            </a>
        </aside>
        <div class="flex-1 h-[2000px] bg-red-500"></div>
    </div>
    <footer class="bg-secondary mt-9 lg:mt-[52px] pb-11 lg:pb-7">
        <div class="relative text-white flex justify-center">
            <img src="../assets/img/world-map.png" alt="World Map Illustration"
                class="absolute z-0 w-full h-[440px] lg:w-2/3 lg:h-[380px] object-cover object-right opacity-30 mt-20 lg:mt-0" />
            <div class="flex flex-col lg:flex-row gap-10 px-4 pt-[26px] lg:pt-10 lg:px-20">
                <div class="flex flex-col gap-4 lg:w-2/5">
                    <img src="../assets/vector/logo.svg" alt="Qarir Generator Logo"
                        class="w-[150px] lg:w-[167px] lg:h-10" width={167} height={40} />
                    <div class="flex flex-col gap-2">
                        <h4 class="text-base font-semibold">Jakarta</h4>
                        <p class="text-sm lg:text-base font-normal">
                            QarirGenerator Office 8, level 18-A, Sudirman Central Business
                            District (SCBD) Jl. Jenderal Sudirman no.1, RT8/RW3, Senayan,
                            Kebayoran Baru, Jakarta Selatan.
                        </p>
                        <div class="inline-flex gap-2">
                            <img src="../assets/vector/phone.svg" alt="Icon Phone" class="w-4 lg:w-6" width={24}
                                height={24} />
                            <span class="text-sm lg:text-base font-normal">
                                +62 811-1001-4420
                            </span>
                        </div>
                    </div>
                    <div class="flex flex-col gap-2">
                        <h4 class="text-base font-semibold">Istanbul</h4>
                        <p class="text-sm lg:text-base font-normal">
                            Maslak, Büyükdere Cad. No:255 Nurol Plaza B.02, 34450
                            Sarıyer/İstanbul
                        </p>
                        <div class="inline-flex gap-2">
                            <img src="../assets/vector/phone.svg" alt="Icon Phone" class="w-4 lg:w-6" width={24}
                                height={24} />
                            <span class="text-sm lg:text-base font-normal">
                                +90 551 402 62 05
                            </span>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col gap-8 lg:gap-16">
                    <div class="flex flex-col lg:flex-row gap-10">
                        <div class="flex flex-col gap-2 w-52">
                            <h4 class="text-base font-semibold text-primary-darker">
                                Service
                            </h4>
                            <p class="text-sm font-normal">
                                Career Survivor
                                <br />
                                Career Accelerator
                                <br />
                                Talent Pool
                            </p>
                        </div>
                        <div class="flex flex-col gap-2 w-52">
                            <h4 class="text-base font-semibold text-primary-darker">
                                Global Career Center
                            </h4>
                            <p class="text-sm font-normal">
                                Indonesia
                                <br />
                                Malaysia
                                <br />
                                Istanbul
                            </p>
                        </div>
                        <div class="flex flex-col gap-2 w-52">
                            <h4 class="text-base font-semibold text-primary-darker">
                                About US
                            </h4>
                            <p class="text-sm font-normal">
                                Career
                                <br />
                                Partnership
                                <br />
                                Pricing
                            </p>
                        </div>
                    </div>
                    <div class="flex flex-row gap-5">
                        <img src="../assets/vector/instagram.svg" alt="Icon Instagram" width={26} height={26} />
                        <img src="../assets/vector/linkedin.svg" alt="Icon LinkedIn" width={26} height={26} />
                        <img src="../assets/vector/twitter.svg" alt="Icon Twitter" width={26} height={26} />
                        <img src="../assets/vector/tiktok.svg" alt="Icon Tiktok" width={26} height={26} />
                        <img src="../assets/vector/youtube.svg" alt="Icon Youtube" width={26} height={26} />
                        <img src="../assets/vector/spotify.svg" alt="Icon Spotify" width={26} height={26} />
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="{{ asset('js') }}/main.js"></script>
</body>

</html>
