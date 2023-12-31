<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body class="font-satoshi">
    {{-- Hero Section --}}
    <div class="w-full h-[423px] lg:h-[708px] px-4 lg:px-[60px] bg-leads bg-center bg-cover text-white">
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
        <h1 class="text-2xl lg:text-5xl font-bold mt-14 lg:mt-20">Tentukan Masa Depanmu</h1>
        <div class="flex flex-row justify-between lg:justify-start lg:gap-6 mt-5 lg:mt-10">
            <img src="../assets/vector/digital-marketing.svg" alt="Icon Digital Marketing" class="hidden lg:flex" />
            <img src="../assets/vector/data-science.svg" alt="Icon Data Science" class="hidden lg:flex" />
            <img src="../assets/vector/ai.svg" alt="Icon AI Engineering" class="hidden lg:flex" />
            <img src="../assets/vector/digital-marketing-m.svg" alt="Icon Digital Marketing" class="lg:hidden" />
            <img src="../assets/vector/data-science-m.svg" alt="Icon Data Science" class="lg:hidden" />
            <img src="../assets/vector/ai-m.svg" alt="Icon AI Engineering" class="lg:hidden" />
        </div>
        <button
            class="inline-flex gap-2 lg:gap-4 items-center mt-5 lg:mt-10 px-5 lg:px-10 h-10 lg:h-14 bg-primary rounded-full text-sm lg:text-lg font-bold">
            Pelajari Lebih Banyak
            <img src="../assets/vector/arrow-down.svg" alt="Arrow Down" class="w-4 lg:w-6" />
        </button>
    </div>
    <div class="mx-2 lg:mx-4 mt-4 flex flex-col lg:flex-row gap-4">
        {{-- Card Manfaat Program --}}
        <div class="bg-primary/10 p-4 lg:px-[60px] lg:py-[30px] lg:w-1/2 rounded-[18px]">
            <h2 class="text-lg lg:text-3xl font-bold lg:font-medium text-text">Manfaat Program</h2>
            <div class="mt-4 gap-2 flex flex-col">
                <div class="inline-flex gap-2 text-text text-sm lg:text-lg font-normal">
                    <img src="../assets/vector/live-tv.svg" alt="Icon Live TV" class="w-4 lg:w-6" />
                    4 Bulan Program Intensif (Live Session)
                </div>
                <div class="inline-flex gap-2 text-text text-sm lg:text-lg font-normal">
                    <img src="../assets/vector/work-update-b.svg" alt="Icon Work Update" class="w-4 lg:w-6" />
                    Gratis layanan career coaching
                </div>
                <div class="inline-flex gap-2 text-text text-sm lg:text-lg font-normal">
                    <img src="../assets/vector/work-history-b.svg" alt="Icon Work History" class="w-4 lg:w-6" />
                    Dukungan Karir seumur hidup
                </div>
                <div class="inline-flex gap-2 text-text text-sm lg:text-lg font-normal">
                    <img src="../assets/vector/domain-verification.svg" alt="Icon Domain Verification"
                        class="w-4 lg:w-6" />
                    Penyaluran kerja dan magang
                </div>
                <div class="inline-flex gap-2 text-text text-sm lg:text-lg font-normal">
                    <img src="../assets/vector/public.svg" alt="Icon Public" class="w-4 lg:w-6" />
                    Kesempatan bekerja di luar negeri
                </div>
                <div class="inline-flex gap-2 text-text text-sm lg:text-lg font-normal">
                    <img src="../assets/vector/travel-explore.svg" alt="Icon Travel Explore" class="w-4 lg:w-6" />
                    Tutor Internasional Magic Session Clinic+
                </div>
            </div>
        </div>
        {{-- Card Kata Mereka --}}
        <div class="bg-secondary/10 p-4 rounded-[18px] lg:px-[60px] lg:py-[30px] lg:w-1/2 flex flex-col gap-4">
            <h2 class="text-lg lg:text-3xl font-bold lg:font-medium text-text">Kata Mereka</h2>
            <img src="../assets/img/review1.png" class="w-[280px] lg:w-[600px] rounded-xl" />
            <div class="w-20 h-1 lg:h-3 rounded-full relative bg-secondary/40 self-center">
                <div class="w-10 h-1 lg:h-3 rounded-full absolute bg-secondary self-center"></div>
            </div>
        </div>
    </div>
    {{-- Card Best Student --}}
    <div class="mx-2 lg:ml-[60px] lg:mr-[18px] mt-10 lg:mt-[42px]">
        <div class="px-2 flex flex-col lg:flex-row gap-4 lg:gap-8">
            <div class="flex flex-col gap-4">
                <h2 class="text-lg lg:text-3xl font-bold lg:font-medium text-text">Student Terbaik 2023 : I Putu Harum
                    Semadi</h2>
                <img src="../assets/img/avatar.png" alt="Best Student 2023: I Putu Harum Semadi" class="w-[100px]" />
                <p class="text-sm lg:text-lg font-normal">Analisis sentimen adalah teknik pemrosesan bahasa alami (NLP)
                    yang
                    mengekstraksi
                    dan mengklasifikasikan opini
                    dan emosi dari teks.
                    <br>
                    <br>
                    Dengan menerapkan analisis sentimen pada umpan balik siswa, kita dapat memperoleh wawasan berharga
                    mengenai
                    keseluruhan pengalaman mereka, mengidentifikasi bidang kepuasan atau ketidakpuasan tertentu, dan
                    melacak
                    tren dari waktu ke waktu.
                </p>
                <a href="https://www.linkedin.com/posts/i-putu-harum-semadi-430380120_sentiment-analysis-qarir-generator-activity-7130065674034450432-H-iH?utm_source=share&utm_medium=member_desktop"
                    class="items-center px-10 w-[300px] h-10 lg:h-14 bg-primary rounded-full text-sm lg:text-lg text-white font-bold cursor-pointer hidden lg:flex">
                    Lihat Karya I Putu Harum
                </a>
            </div>
            <img src="../assets/img/n-gram.png" alt="Image about N Gram" class="w-full lg:w-[668px]" />
            <a href="https://www.linkedin.com/posts/i-putu-harum-semadi-430380120_sentiment-analysis-qarir-generator-activity-7130065674034450432-H-iH?utm_source=share&utm_medium=member_desktop"
                class="inline-flex lg:hidden justify-center items-center h-10 bg-primary rounded-full text-sm text-white font-bold cursor-pointer">
                Pelajari Lebih Banyak
            </a>
        </div>
    </div>
    {{-- Card Pengalaman di Kelas --}}
    <div class="mx-2 lg:mx-4 mt-10 lg:mt-8">
        <div class="px-4 lg:px-[60px] py-5 lg:py-[30px] bg-secondary rounded-[18px] text-white">
            <h2 class="text-lg lg:text-3xl font-semibold lg:font-medium">Pengalaman di Kelas</h2>
            <div class="mt-4 lg:mt-8 flex flex-col lg:flex-row gap-5">
                <div class="flex flex-col gap-2 lg:w-1/3">
                    <img src="../assets/img/class-exp.png" alt="Image about Class Experience" class="w-full" />
                    <p class="text-sm lg:text-base font-normal lg:font-light">Pengalaman kelas offline hybrid membahas
                        industry case
                        yang nyata
                        dengan
                        para pakar dari C-Level</p>
                </div>
                <div class="flex flex-col gap-2 lg:w-1/3">
                    <img src="../assets/img/class-exp1.png" alt="Image about Class Experience" class="w-full" />
                    <p class="text-sm lg:text-base font-normal lg:font-light">Berlatih presentasi bisnis dalam bahasa
                        inggris lebih
                        intensif
                        dengan
                        native speaker dari United Kingdom</p>
                </div>
                <div class="flex flex-col gap-2 lg:w-1/3">
                    <img src="../assets/img/class-exp2.png" alt="Image about Class Experience" class="w-full" />
                    <p class="text-sm lg:text-base font-normal lg:font-light">Dukungan English Interview Practice
                        bersama
                        native speaker langsung dari United Kingdom</p>
                </div>
            </div>
        </div>
    </div>
    {{-- Card Kenapa Harus --}}
    <div class="mx-4 lg:mx-[60px] mt-10 lg:mt-12">
        <h2 class="text-lg lg:text-3xl font-semibold lg:font-medium">Kenapa Harus Qarir Generator?</h2>
        <div class="mt-4 flex flex-col gap-2 lg:gap-4">
            <div class="inline-flex gap-2 lg:gap-4">
                <img src="../assets/vector/check-circle.svg" alt="Icon Checkmark Circle" class="w-5" />
                <p class="text-base lg:text-lg font-light">Tersedia</p>
            </div>
            <div class="inline-flex gap-2 lg:gap-4">
                <img src="../assets/vector/cancel.svg" alt="Icon Cancel" class="w-6" />
                <p class="text-base lg:text-lg font-light">Tidak Didukung</p>
            </div>
            <div class="inline-flex gap-2 lg:gap-4">
                <img src="../assets/vector/all-inclusive.svg" alt="Icon All Inclusive" class="w-6" />
                <p class="text-base lg:text-lg font-light">Tergantung Operator</p>
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
    {{--  --}}
    <div class="mx-2 lg:mx-4 mt-10 lg:mt-12 flex flex-col lg:flex-row gap-4">
        {{-- Card Alur Pendaftaran --}}
        <div class="bg-primary/10 p-4 lg:px-[60px] lg:py-[30px] rounded-[18px] lg:w-1/2 flex flex-col justify-center">
            <h2 class="text-lg lg:text-3xl font-bold lg:font-medium text-text">Alur Pendaftaran</h2>
            <div class="mt-4 gap-2 flex flex-col">
                <div class="inline-flex gap-2 text-text text-sm lg:text-lg font-normal">
                    <img src="../assets/vector/live-tv.svg" alt="Icon Live TV" class="w-4 lg:w-6" />
                    Mengisi form di sini
                </div>
                <div class="inline-flex gap-2 text-text text-sm lg:text-lg font-normal">
                    <img src="../assets/vector/work-update-b.svg" alt="Icon Work Update" class="w-4 lg:w-6" />
                    Konsultasi Karir dengan Mentor (via zoom)
                </div>
                <div class="inline-flex gap-2 text-text text-sm lg:text-lg font-normal">
                    <img src="../assets/vector/work-history-b.svg" alt="Icon Work History" class="w-4 lg:w-6" />
                    Review & Pengiriman CV/Resume
                </div>
                <div class="inline-flex gap-2 text-text text-sm lg:text-lg font-normal">
                    <img src="../assets/vector/domain-verification.svg" alt="Icon Domain Verification"
                        class="w-4 lg:w-6" />
                    Pengumuman hasil & rekomendasi
                </div>
            </div>
            <button
                class="inline-flex gap-2 justify-center items-center mt-4 lg:mt-10 w-full lg:w-[354px] h-10 lg:h-14 bg-primary rounded-full text-sm lg:text-lg text-white font-bold">
                Apply Now
            </button>
        </div>
        {{-- Card Biaya dan Investasi --}}
        <div
            class="p-4 lg:px-[60px] lg:py-[30px] flex flex-col gap-4 border-2 border-primary-dark rounded-[18px] lg:w-1/2">
            <h2 class="text-lg lg:text-3xl font-bold lg:font-medium text-text">Biaya dan Investasi</h2>
            <img src="../assets/img/review1.png" alt="Image about N Gram" class="w-full rounded-xl" />
            <p class="text-sm lg:text-lg font-light">Beasiswa potongan biaya pelatihan dan
                <b class="text-primary">pengembangan karir selama 4 bulan hingga 70%
                </b>
                <br>
                <br>
                Sebelum beasiswa : <span class="line-through">Rp 14,500,000</span>
            </p>
            <div class="flex flex-col lg:flex-row gap-2 lg:gap-4">
                <p class="text-sm lg:text-lg font-normal lg:w-56">
                    Setelah beasiswa :
                </p>
                <div class="w-full rounded-lg bg-primary-dark px-4 py-2 text-sm lg:text-lg text-white font-normal">
                    Mulai dari Rp 2,990,000++* untuk 4 bulan program
                </div>
            </div>
            <div class="inline-flex gap-2">
                <img src="../assets/vector/work-update.svg" alt="Icon Work Update" class="w-4 lg:w-6" />
                <span class="text-text text-sm lg:text-lg font-normal">Gratis layanan career coaching</span>
            </div>
            <div class="inline-flex gap-2 items-start">
                <img src="../assets/vector/work-history.svg" alt="Icon Work Update" class="w-4 lg:w-6" />
                <span class="text-text text-sm lg:text-lg font-normal">Ditambah+ layanan dukungan karir seumur hidup
                    oleh HR
                    Professional!</span>
            </div>
            <p class="text-text/50 text-xs lg:text-sm font-normal">*Kursi terbatas
                <br> *Harga belum termasuk pajak dan enrollment fee
            </p>
        </div>
    </div>
    <div class="mx-4 lg:mx-[60px] mt-10 lg:mt-12 flex flex-col lg:flex-row">
        <div class="flex flex-col gap-2 lg:gap-4 w-full lg:w-[450px] lg:mr-8">
            <h2 class="text-lg lg:text-3xl font-semibold lg:font-medium">Dukungan Karir</h2>
            <p class="text-sm lg:text-lg font-light">Temui Pelatih Karir dan bersiaplah untuk memulai karir Kamu</p>
            <img src="../assets/img/career_ill.png" alt="Image about career support" class="w-full lg:w-96" />
        </div>
        <div class="flex-1 flex flex-col gap-1.5 mt-8 lg:mt-0 lg:mr-4">
            <button
                class="inline-flex gap-2 items-center px-6 lg:px-10 w-full lg:w-[354px] h-10 lg:h-14 bg-primary rounded-full text-sm lg:text-lg text-white font-bold">
                Personal Branding
            </button>
            <button
                class="inline-flex gap-2 items-center px-6 lg:px-10 w-full lg:w-[354px] h-10 lg:h-14 border border-primary rounded-full text-sm lg:text-lg text-primary font-bold">
                Kursus Bahasa Inggris Bisnis
            </button>
            <button
                class="inline-flex gap-2 items-center px-6 lg:px-10 w-full lg:w-[354px] h-10 lg:h-14 border border-primary rounded-full text-sm lg:text-lg text-primary font-bold">
                Praktek Public Speaking
            </button>
            <button
                class="inline-flex gap-2 items-center px-6 lg:px-10 w-full lg:w-[354px] h-10 lg:h-14 border border-primary rounded-full text-sm lg:text-lg text-primary font-bold">
                Dukungan Mencari Pekerjaan
            </button>
            <button
                class="inline-flex gap-2 items-center px-6 lg:px-10 w-full lg:w-[354px] h-10 lg:h-14 border border-primary rounded-full text-sm lg:text-lg text-primary font-bold">
                Praktek Interview
            </button>
            <button
                class="inline-flex gap-2 items-center px-6 lg:px-10 w-full lg:w-[354px] h-10 lg:h-14 border border-primary rounded-full text-sm lg:text-lg text-primary font-bold">
                Project Management Trainee
            </button>
        </div>
        <div class="bg-primary/10 p-4 lg:px-[60px] lg:py-[30px] rounded-[18px] w-full mt-4 lg:mt-0 lg:w-[512px]">
            <h2 class="text-lg lg:text-3xl font-bold lg:font-medium text-text">Personal Branding</h2>
            <div class="flex flex-col mt-4 gap-2 lg:gap-4">
                <div class="inline-flex items-start gap-2 text-text text-sm lg:text-lg font-normal">
                    <img src="../assets/vector/for-you.svg" alt="Icon For You" class="w-4 lg:w-6" />
                    Bangun profil profesional Kamu
                </div>
                <div class="inline-flex items-start gap-2 text-text text-sm lg:text-lg font-normal">
                    <img src="../assets/vector/airplane-ticket-b.svg" alt="Icon Airplane Ticket"
                        class="w-4 lg:w-6" />
                    Bagikan portofolio Kamu dengan penyampaian cerita yang bagus
                </div>
                <div class="inline-flex items-start gap-2 text-text text-sm lg:text-lg font-normal">
                    <img src="../assets/vector/add-reaction.svg" alt="Icon Add Reaction" class="w-4 lg:w-6" />
                    Terhubung dengan para ahli
                </div>
                <div class="inline-flex items-start gap-2 text-text text-sm lg:text-lg font-normal">
                    <img src="../assets/vector/globe.svg" alt="Icon Globe" class="w-4 lg:w-6" />
                    Menginspirasi dunia
                </div>
            </div>
        </div>
    </div>
    <div class="mx-2 lg:mx-4 mt-10 lg:mt-12">
        <div class="px-4 lg:px-[60px] py-5 lg:py-[30px] bg-secondary rounded-[18px] text-white">
            <h2 class="text-lg lg:text-3xl font-semibold lg:font-medium">Jadwal Kelas Terdekat</h2>
            <div class="flex flex-col lg:flex-row mt-4 lg:mt-8 gap-8">
                <div class="flex flex-col gap-2 lg:gap-4">
                    <button onclick="jadwalKelas(event)" data-label="0"
                        class="jadwalKelas inline-flex gap-2 items-center px-10 w-full lg:w-[354px] h-10 lg:h-14 bg-primary rounded-full text-sm lg:text-lg text-white font-bold">
                        Januari 2024
                    </button>
                    <button onclick="jadwalKelas(event)" data-label="1"
                        class="jadwalKelas inline-flex gap-2 items-center px-10 w-full lg:w-[354px] h-10 lg:h-14 border border-primary rounded-full text-sm lg:text-lg text-primary font-bold">
                        Februari 2024
                    </button>
                </div>
                <div class="flex flex-col p-6 gap-4 bg-white/10 rounded-3xl">
                    <div class="flex flex-row gap-2 items-start">
                        <img src="../assets/vector/airplane-ticket.svg" alt="Icon Airplane Ticket"
                            class="w-4 lg:w-6" />
                        <div class="text-sm lg:text-lg font-normal">
                            <p><b>Kelas</b>
                                <br>
                                <br>
                            <p id="info">2x dalam seminggu</p>
                            </p>
                            <ul id="listJadwal" class="list-disc ml-5">
                                <li>Kamis, 19.30 - 21.30 (UTC+7)</li>
                                <li> Sabtu, 10.30 - 12.30 (UTC+7) or Sabtu, 15.30 - 17.30 (UTC+7)</li>
                            </ul>
                        </div>
                    </div>
                    <p class="text-xs lg:text-base text-white/70 font-normal">*Magic Session Clinic+ dapat
                        diselenggarakan untuk
                        kelas
                        pendalaman
                        pemula setiap pekannya diluar
                        jadwal diatas</p>
                    <button
                        class="inline-flex gap-2 items-center justify-center px-10 w-full lg:w-[354px] h-10 lg:h-14 bg-primary rounded-full text-sm lg:text-lg text-white font-bold">
                        Apply Now
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="mx-2 lg:mx-4 mt-10 lg:mt-8">
        <div class="bg-primary/10 p-4 lg:py-[60px] rounded-[18px] flex flex-col items-center">
            <h2 class="text-lg lg:text-3xl font-bold lg:font-medium text-center">Masih Menentukan Pilihan?</h2>
            <p class="text-sm lg:text-2xl font-light text-center mt-2 lg:mt-4">Curhat dulu aja dengan Career Mentor
                Kamu!</p>
            <button
                class="inline-flex gap-2 lg:gap-4 justify-center items-center mt-4 lg:mt-8 lg:px-10 w-full lg:w-auto h-10 lg:h-14 bg-primary rounded-full text-sm lg:text-lg text-white font-bold">
                <img src="../assets/vector/whatsapp.svg" alt="WhastApp Logo" class="w-[18px] lg:w-8" />
                Kontak Career Mentor Kamu
            </button>
        </div>
    </div>
    <footer class="bg-secondary mt-9 lg:mt-[52px] pt-[26px] lg:pt-10 pb-11 lg:pb-7">
        <div class="relative text-white">
            <img src="../assets/img/world-map-ill.png" alt="World Map Illustration" class="absolute mt-16 lg:h-96">
            <div class="flex flex-col lg:flex-row gap-10 px-4 lg:px-20">
                <div class="flex flex-col gap-4 lg:w-2/5">
                    <img src="../assets/vector/logo.svg" alt="Qarir Generator Logo"
                        class="w-[150px] lg:w-[167px] lg:h-10" />
                    <div class="flex flex-col gap-2">
                        <h3 class="text-base font-semibold">Jakarta</h3>
                        <p class="text-sm lg:text-base font-normal">QarirGenerator Office 8, level 18-A, Sudirman
                            Central Business
                            District
                            (SCBD) Jl. Jenderal Sudirman
                            no.1, RT8/RW3, Senayan, Kebayoran Baru, Jakarta Selatan.</p>
                        <div class="inline-flex gap-2">
                            <img src="../assets/vector/phone.svg" alt="Icon Phone" class="w-4 lg:w-6" />
                            <span class="text-sm lg:text-base font-normal">+62 811-1001-4420</span>
                        </div>
                    </div>
                    <div class="flex flex-col gap-2">
                        <h3 class="text-base font-semibold">Istanbul</h3>
                        <p class="text-sm lg:text-base font-normal">Maslak, Büyükdere Cad. No:255 Nurol Plaza B.02,
                            34450
                            Sarıyer/İstanbul
                        </p>
                        <div class="inline-flex gap-2">
                            <img src="../assets/vector/phone.svg" alt="Icon Phone" class="w-4 lg:w-6" />
                            <span class="text-sm lg:text-base font-normal">+90 551 402 62 05</span>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col gap-8 lg:gap-16">
                    <div class="flex flex-col lg:flex-row gap-10">
                        <div class="flex flex-col gap-2 w-52">
                            <h3 class="text-base font-semibold text-primary-darker">Service</h3>
                            <p class="text-sm font-normal">Career Survivor
                                <br>Career Accelerator
                                <br>Talent Pool
                            </p>
                        </div>
                        <div class="flex flex-col gap-2 w-52">
                            <h3 class="text-base font-semibold text-primary-darker">Global Career Center</h3>
                            <p class="text-sm font-normal">Indonesia
                                <br>Malaysia
                                <br>Istanbul
                            </p>
                        </div>
                        <div class="flex flex-col gap-2 w-52">
                            <h3 class="text-base font-semibold text-primary-darker">About US</h3>
                            <p class="text-sm font-normal">Career
                                <br>Partnership
                                <br>Pricing
                            </p>
                        </div>
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
        </div>
    </footer>
    <script src="{{ asset('js') }}/main.js"></script>
</body>

</html>
