<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body class="font-satoshi">
    {{-- Hero Section --}}
    <div class="w-full h-[423px] px-4 bg-leads bg-cover text-white">
        <nav class="py-6 flex flex-row justify-between">
            <img src="../assets/vector/logo.svg" alt="Qarir Generator Logo" class="w-[150px]" />
            <a href="https://calendar.app.google/6xrDJSLWZhcYxYrs9"
                class="bg-gradient-to-r from-primary to-secondary text-sm font-medium leading-[8px] rounded-lg p-px cursor-pointer">
                <span class="flex items-center w-full h-full bg-secondary rounded-lg px-3.5 py-4">
                    Book A Call
                </span>
            </a>
            <img src="../assets/vector/menu.svg" alt="Menu" class="mr-2 cursor-pointer" />
        </nav>
        <h1 class="text-2xl font-bold mt-22">Tentukan Masa Depanmu</h1>
        <div class="flex flex-row justify-between mt-5">
            <div class="flex flex-col items-center gap-2 w-[100px] px-2 py-3 border-2 border-primary rounded-2xl">
                <img src="../assets/vector/marketing.svg" alt="Icon Digital Marketing" class="w-12" />
                <span class="text-sm font-medium text-center">Digital <br>Marketing</span>
            </div>
            <div class="flex flex-col items-center gap-2 w-[100px] px-2 py-3 border-2 border-primary rounded-2xl">
                <img src="../assets/vector/data.svg" alt="Icon Data Science" class="w-12" />
                <span class="text-sm font-medium text-center">Data <br>Science</span>
            </div>
            <div class="flex flex-col items-center gap-2 w-[100px] px-2 py-3 border-2 border-primary rounded-2xl">
                <img src="../assets/vector/artificial-intelligence.svg" alt="Icon AI Engineering" class="w-12" />
                <span class="text-sm font-medium text-center">AI <br>Engineering</span>
            </div>
        </div>
        <button class="inline-flex gap-2 items-center mt-5 px-5 h-10 bg-primary rounded-full text-sm font-bold">
            Pelajari Lebih Banyak
            <img src="../assets/vector/arrow-down.svg" alt="Arrow Down" />
        </button>
    </div>
    <div class="container mx-auto mt-4">
        {{-- Card Manfaat Program --}}
        <div class="bg-primary/10 p-4 rounded-[18px]">
            <h2 class="text-lg font-bold text-text">Manfaat Program</h2>
            <div class="mt-4 gap-2">
                <div class="inline-flex gap-2 text-text text-sm font-normal">
                    <img src="../assets/vector/live-tv.svg" alt="Icon Live TV" />
                    4 Bulan Program Intensif (Live Session)
                </div>
                <div class="inline-flex gap-2 text-text text-sm font-normal">
                    <img src="../assets/vector/work-update-b.svg" alt="Icon Work Update" />
                    Gratis layanan career coaching
                </div>
                <div class="inline-flex gap-2 text-text text-sm font-normal">
                    <img src="../assets/vector/work-history-b.svg" alt="Icon Work History" />
                    Dukungan Karir seumur hidup
                </div>
                <div class="inline-flex gap-2 text-text text-sm font-normal">
                    <img src="../assets/vector/domain-verification.svg" alt="Icon Domain Verification" />
                    Penyaluran kerja dan magang
                </div>
                <div class="inline-flex gap-2 text-text text-sm font-normal">
                    <img src="../assets/vector/public.svg" alt="Icon Public" />
                    Kesempatan bekerja di luar negeri
                </div>
                <div class="inline-flex gap-2 text-text text-sm font-normal">
                    <img src="../assets/vector/travel-explore.svg" alt="Icon Travel Explore" />
                    Tutor Internasional Magic Session Clinic+
                </div>
            </div>
        </div>
        {{-- Card Kata Mereka --}}
        <div class="bg-secondary/10 mt-4 p-4 rounded-[18px]">
            <h2 class="text-lg font-bold text-text">Kata Mereka</h2>
            <div class="mt-4 w-40 overflow-scroll">
                <div class="snap-start w-36">
                    <img
                        src="https://images.unsplash.com/photo-1604999565976-8913ad2ddb7c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=320&h=160&q=80" />
                </div>
                <div class="snap-start w-36">
                    <img
                        src="https://images.unsplash.com/photo-1604999565976-8913ad2ddb7c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=320&h=160&q=80" />
                </div>
            </div>
        </div>
    </div>
    {{-- Card Best Student --}}
    <div class="container mx-auto mt-10">
        <div class="px-2 flex flex-col gap-4">
            <h2 class="text-lg font-bold text-text">Student Terbaik 2023 : I Putu Harum Semadi</h2>
            <img src="../assets/img/avatar.png" alt="Best Student 2023: I Putu Harum Semadi" class="w-[100px]" />
            <p class="text-sm font-normal">Analisis sentimen adalah teknik pemrosesan bahasa alami (NLP) yang
                mengekstraksi
                dan mengklasifikasikan opini
                dan emosi dari teks.
                <br>
                <br>
                Dengan menerapkan analisis sentimen pada umpan balik siswa, kita dapat memperoleh wawasan berharga
                mengenai
                keseluruhan pengalaman mereka, mengidentifikasi bidang kepuasan atau ketidakpuasan tertentu, dan melacak
                tren dari waktu ke waktu.
            </p>
            <img src="../assets/img/n-gram.png" alt="Image about N Gram" class="w-full" />
            <a href="https://www.linkedin.com/posts/i-putu-harum-semadi-430380120_sentiment-analysis-qarir-generator-activity-7130065674034450432-H-iH?utm_source=share&utm_medium=member_desktop"
                class="inline-flex gap-2 justify-center items-center h-10 bg-primary rounded-full text-sm text-white font-bold cursor-pointer">
                Pelajari Lebih Banyak
            </a>
        </div>
    </div>
    {{-- Card Pengalaman di Kelas --}}
    <div class="container mx-auto mt-10">
        <div class="px-4 py-5 bg-secondary rounded-[18px] text-white">
            <h2 class="text-lg font-semibold">Pengalaman di Kelas</h2>
            <div class="mt-4 flex flex-col gap-5">
                <div class="flex flex-col gap-2">
                    <img src="../assets/img/class-exp.png" alt="Image about Class Experience" class="w-full" />
                    <p class="text-sm font-normal">Pengalaman kelas offline hybrid membahas industry case yang nyata
                        dengan
                        para pakar dari C-Level</p>
                </div>
                <div class="flex flex-col gap-2">
                    <img src="../assets/img/class-exp1.png" alt="Image about Class Experience" class="w-full" />
                    <p class="text-sm font-normal">Berlatih presentasi bisnis dalam bahasa inggris lebih intensif dengan
                        native speaker dari United Kingdom</p>
                </div>
                <div class="flex flex-col gap-2">
                    <img src="../assets/img/class-exp2.png" alt="Image about Class Experience" class="w-full" />
                    <p class="text-sm font-normal">Dukungan English Interview Practice bersama
                        native speaker langsung dari United Kingdom</p>
                </div>
            </div>
        </div>
    </div>
    {{-- Card Kenapa Harus --}}
    <div class="container mx-auto mt-10">
        <div class="px-2">
            <h2 class="text-lg font-semibold">Kenapa Harus Qarir Generator?</h2>
            <div class="mt-4 flex flex-col gap-2">
                <div class="inline-flex gap-2">
                    <img src="../assets/vector/check-circle.svg" alt="Icon Checkmark Circle" class="w-5" />
                    <p class="text-base font-light">Tersedia</p>
                </div>
                <div class="inline-flex gap-2">
                    <img src="../assets/vector/cancel.svg" alt="Icon Cancel" class="w-6" />
                    <p class="text-base font-light">Tidak Didukung</p>
                </div>
                <div class="inline-flex gap-2">
                    <img src="../assets/vector/all-inclusive.svg" alt="Icon All Inclusive" class="w-6" />
                    <p class="text-base font-light">Tergantung Operator</p>
                </div>
            </div>

            <div
                class="grid grid-cols-4 gap-2 mt-4 px-6 py-4 border border-primary rounded-t-[18px] bg-primary text-sm text-white font-medium">
                <div>Benefit</div>
                <div class="text-center">Campus Degree</div>
                <div class="text-center">Other Bootcamp</div>
                <div class="text-center">Qarir Generator</div>
            </div>
            <div class="border border-primary rounded-b-[18px] text-sm font-normal">
                <div class="grid grid-cols-4 gap-2 px-6 py-4">
                    <div>Theory Knowledge</div>
                    <img src="../assets/vector/check-circle.svg" alt="Icon Checkmark Circle"
                        class="w-5 justify-self-center self-center" />
                    <img src="../assets/vector/cancel.svg" alt="Icon Cancel"
                        class="w-6 justify-self-center self-center" />
                    <img src="../assets/vector/cancel.svg" alt="Icon Cancel"
                        class="w-6 justify-self-center self-center" />
                </div>
                <div class="grid grid-cols-4 gap-2 px-6 py-4">
                    <div>Theory Knowledge</div>
                    <img src="../assets/vector/check-circle.svg" alt="Icon Checkmark Circle"
                        class="w-5 justify-self-center self-center" />
                    <img src="../assets/vector/cancel.svg" alt="Icon Cancel"
                        class="w-6 justify-self-center self-center" />
                    <img src="../assets/vector/cancel.svg" alt="Icon Cancel"
                        class="w-6 justify-self-center self-center" />
                </div>
                <div class="grid grid-cols-4 gap-2 px-6 py-4">
                    <div>Validation of analytical thinking from Hands-on projects</div>
                    <img src="../assets/vector/check-circle.svg" alt="Icon Checkmark Circle"
                        class="w-5 justify-self-center self-center" />
                    <img src="../assets/vector/cancel.svg" alt="Icon Cancel"
                        class="w-6 justify-self-center self-center" />
                    <img src="../assets/vector/cancel.svg" alt="Icon Cancel"
                        class="w-6 justify-self-center self-center" />
                </div>
                <div class="grid grid-cols-4 gap-2 px-6 py-4">
                    <div>Theory Knowledge</div>
                    <img src="../assets/vector/check-circle.svg" alt="Icon Checkmark Circle"
                        class="w-5 justify-self-center self-center" />
                    <img src="../assets/vector/cancel.svg" alt="Icon Cancel"
                        class="w-6 justify-self-center self-center" />
                    <img src="../assets/vector/cancel.svg" alt="Icon Cancel"
                        class="w-6 justify-self-center self-center" />
                </div>
            </div>
        </div>
    </div>
    <div class="container mx-auto mt-10">
        {{-- Card Alur Pendaftaran --}}
        <div class="bg-primary/10 p-4 rounded-[18px]">
            <h2 class="text-lg font-bold text-text">Alur Pendaftaran</h2>
            <div class="mt-4 gap-2">
                <div class="inline-flex gap-2 text-text text-sm font-normal">
                    <img src="../assets/vector/live-tv.svg" alt="Icon Live TV" />
                    Mengisi form di sini
                </div>
                <div class="inline-flex gap-2 text-text text-sm font-normal">
                    <img src="../assets/vector/work-update-b.svg" alt="Icon Work Update" />
                    Konsultasi Karir dengan Mentor (via zoom)
                </div>
                <div class="inline-flex gap-2 text-text text-sm font-normal">
                    <img src="../assets/vector/work-history-b.svg" alt="Icon Work History" />
                    Review & Pengiriman CV/Resume
                </div>
                <div class="inline-flex gap-2 text-text text-sm font-normal">
                    <img src="../assets/vector/domain-verification.svg" alt="Icon Domain Verification" />
                    Pengumuman hasil & rekomendasi
                </div>
            </div>
            <button
                class="inline-flex gap-2 justify-center items-center mt-4 w-full h-10 bg-primary rounded-full text-sm text-white font-bold">
                Apply Now
            </button>
        </div>
        {{-- Card Biaya dan Investasi --}}
        <div class="mt-4 p-4 flex flex-col gap-4 border-2 border-primary rounded-[18px]">
            <h2 class="text-lg font-bold text-text">Biaya dan Investasi</h2>
            <img src="../assets/img/review1.png" alt="Image about N Gram" class="w-full rounded-xl" />
            <p class="text-sm font-light">Beasiswa potongan biaya pelatihan dan
                <b class="text-primary">pengembangan karir selama 4 bulan hingga 70%
                </b>
                <br>
                <br>
                Sebelum beasiswa : <span class="line-through">Rp 14,500,000</span>
            </p>
            <div class="flex flex-col gap-2">
                <p class="text-sm font-normal">
                    Setelah beasiswa :
                </p>
                <div class="w-full rounded-lg bg-primary-dark px-4 py-2 text-sm text-white font-normal">
                    Mulai dari Rp 2,990,000++* untuk 4 bulan program
                </div>
            </div>
            <div class="inline-flex gap-2">
                <img src="../assets/vector/work-update.svg" alt="Icon Work Update" class="fill-primary" />
                <span class="text-text text-sm font-normal">Gratis layanan career coaching</span>
            </div>
            <div class="inline-flex gap-2 items-start">
                <img src="../assets/vector/work-history.svg" alt="Icon Work Update" class="fill-primary" />
                <span class="text-text text-sm font-normal">Ditambah+ layanan dukungan karir seumur hidup oleh HR
                    Professional!</span>
            </div>
            <p class="text-text/50 text-xs font-normal">*Kursi terbatas
                <br> *Harga belum termasuk pajak dan enrollment fee
            </p>
        </div>
    </div>
    <div class="container mx-auto mt-10">
        <div class="px-2 flex flex-col gap-2">
            <h2 class="text-lg font-semibold">Dukungan Karir</h2>
            <p class="text-sm font-light">Temui Pelatih Karir dan bersiaplah untuk memulai karir Kamu</p>
            <img src="../assets/img/career_ill.png" alt="Image about career support" class="w-full" />
        </div>
    </div>
    <div class="container mx-auto mt-10">
        <div class="flex flex-col gap-1.5">
            <button
                class="inline-flex gap-2 px-6 items-center h-10 bg-primary rounded-full text-sm text-white font-bold">
                Personal Branding
            </button>
            <button
                class="inline-flex gap-2 px-6 items-center h-10 border border-primary rounded-full text-sm text-primary font-bold">
                Kursus Bahasa Inggris Bisnis
            </button>
            <button
                class="inline-flex gap-2 px-6 items-center h-10 border border-primary rounded-full text-sm text-primary font-bold">
                Praktek Public Speaking
            </button>
            <button
                class="inline-flex gap-2 px-6 items-center h-10 border border-primary rounded-full text-sm text-primary font-bold">
                Dukungan Mencari Pekerjaan
            </button>
            <button
                class="inline-flex gap-2 px-6 items-center h-10 border border-primary rounded-full text-sm text-primary font-bold">
                Praktek Interview
            </button>
            <button
                class="inline-flex gap-2 px-6 items-center h-10 border border-primary rounded-full text-sm text-primary font-bold">
                Project Management Trainee
            </button>
        </div>
        {{-- Card Personal Branding --}}
        <div class="bg-primary/10 mt-4 p-4 rounded-[18px]">
            <h2 class="text-lg font-bold text-text">Personal Branding</h2>
            <div class="mt-4 gap-2">
                <div class="inline-flex gap-2 text-text text-sm font-normal">
                    <img src="../assets/vector/for-you.svg" alt="Icon For You" />
                    Bangun profil profesional Kamu
                </div>
                <div class="inline-flex gap-2 text-text text-sm font-normal">
                    <img src="../assets/vector/airplane-ticket-b.svg" alt="Icon Airplane Ticket" />
                    Bagikan portofolio Kamu dengan penyampaian cerita yang bagus
                </div>
                <div class="inline-flex gap-2 text-text text-sm font-normal">
                    <img src="../assets/vector/add-reaction.svg" alt="Icon Add Reaction" />
                    Terhubung dengan para ahli
                </div>
                <div class="inline-flex gap-2 text-text text-sm font-normal">
                    <img src="../assets/vector/globe.svg" alt="Icon Globe" />
                    Menginspirasi dunia
                </div>
            </div>
        </div>
    </div>
    <div class="container mx-auto mt-10">
        <div class="px-4 py-5 bg-secondary rounded-[18px] text-white">
            <h2 class="text-lg font-semibold">Jadwal Kelas Terdekat</h2>
            <div class="flex flex-col gap-2 mt-4">
                <button
                    class="inline-flex gap-2 px-6 items-center h-10 bg-primary rounded-full text-sm text-white font-bold">
                    Januari 2024
                </button>
                <button
                    class="inline-flex gap-2 px-6 items-center h-10 border border-primary rounded-full text-sm text-primary font-bold">
                    Februari 2024
                </button>
            </div>
            <div class="mt-4 flex flex-col p-6 gap-4 bg-white/10 rounded-3xl">
                <div class="flex flex-row gap-2 items-start">
                    <img src="../assets/vector/airplane-ticket.svg" alt="Icon Airplane Ticket" />
                    <div class="text-sm font-normal">
                        <p><b>Kelas</b>
                            <br>
                            <br>
                            2x dalam seminggu
                        </p>
                        <ul class="list-disc ml-5">
                            <li>Kamis, 19.30 - 21.30 (UTC+7)</li>
                            <li> Sabtu, 10.30 - 12.30 (UTC+7) or Sabtu, 15.30 - 17.30 (UTC+7)</li>
                        </ul>
                    </div>
                </div>
                <p class="text-xs text-white/70 font-normal">*Magic Session Clinic+ dapat diselenggarakan untuk kelas
                    pendalaman
                    pemula setiap pekannya diluar
                    jadwal diatas</p>
                <button
                    class="inline-flex gap-2 justify-center items-center mt-4 w-full h-10 bg-primary rounded-full text-sm text-white font-bold">
                    Apply Now
                </button>
            </div>
        </div>
    </div>
    <div class="container mx-auto mt-10">
        <div class="bg-primary/10 p-4 rounded-[18px]">
            <h2 class="text-lg font-bold text-center">Masih Menentukan Pilihan?</h2>
            <p class="text-sm font-light text-center mt-2">Curhat dulu aja dengan Career Mentor Kamu!</p>
            <button
                class="inline-flex gap-2 justify-center items-center mt-4 w-full h-10 bg-primary rounded-full text-sm text-white font-bold">
                <img src="../assets/vector/whatsapp.svg" alt="WhastApp Logo" />
                Kontak Career Mentor Kamu
            </button>
        </div>
    </div>
    <footer class="bg-secondary mt-9 pt-[26px] pb-11">
        <div class="relative text-white">
            <img src="../assets/img/world-map-ill.png" alt="World Map Illustration" class="absolute mt-16">
            <div class="flex flex-col gap-10 px-4">
                <div class="flex flex-col gap-4">
                    <img src="../assets/vector/logo.svg" alt="Qarir Generator Logo" class="w-[150px]" />
                    <div class="flex flex-col gap-2">
                        <h3 class="text-base font-semibold">Jakarta</h3>
                        <p class="text-sm font-normal">QarirGenerator Office 8, level 18-A, Sudirman Central Business
                            District
                            (SCBD) Jl. Jenderal Sudirman
                            no.1, RT8/RW3, Senayan, Kebayoran Baru, Jakarta Selatan.</p>
                        <div class="inline-flex gap-2">
                            <img src="../assets/vector/phone.svg" alt="Icon Phone" />
                            <span class="text-sm font-normal">+62 811-1001-4420</span>
                        </div>
                    </div>
                    <div class="flex flex-col gap-2">
                        <h3 class="text-base font-semibold">Istanbul</h3>
                        <p class="text-sm font-normal">Maslak, Büyükdere Cad. No:255 Nurol Plaza B.02, 34450
                            Sarıyer/İstanbul
                        </p>
                        <div class="inline-flex gap-2">
                            <img src="../assets/vector/phone.svg" alt="Icon Phone" />
                            <span class="text-sm font-normal">+90 551 402 62 05</span>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col gap-2">
                    <h3 class="text-base font-semibold text-primary-darker">Service</h3>
                    <p class="text-sm font-normal">Career Survivor
                        <br>Career Accelerator
                        <br>Talent Pool
                    </p>
                </div>
                <div class="flex flex-col gap-2">
                    <h3 class="text-base font-semibold text-primary-darker">Global Career Center</h3>
                    <p class="text-sm font-normal">Indonesia
                        <br>Malaysia
                        <br>Istanbul
                    </p>
                </div>
                <div class="flex flex-col gap-2">
                    <h3 class="text-base font-semibold text-primary-darker">About US</h3>
                    <p class="text-sm font-normal">Career
                        <br>Partnership
                        <br>Pricing
                    </p>
                </div>
                <div class="flex flex-row gap-5">
                    <img src="../assets/vector/instagram.svg" alt="Icon Instagram" />
                    <img src="../assets/vector/linkedin.svg" alt="Icon LinkedIn" />
                    <img src="../assets/vector/twitter.svg" alt="Icon Twitter" />
                    <img src="../assets/vector/tiktok.svg" alt="Icon Tiktok" />
                    <img src="../assets/vector/youtube.svg" alt="Icon Youtube" />
                    <img src="../assets/vector/spotify.svg" alt="Icon Spotify" />

                </div>
            </div>
        </div>
    </footer>
</body>

</html>
