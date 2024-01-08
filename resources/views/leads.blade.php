<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/assets/owl.theme.default.min.css">
    @vite('resources/css/app.css')
</head>

<body class="font-satoshi bg-body relative">

    <x-navbar />

    {{-- Hero Section --}}
    <section class="w-full h-[423px] lg:h-[708px] px-4 lg:px-[60px] bg-center bg-cover text-white"
        style="background-image: url('../assets/img/hero-leads.png');">

        <h1 class="text-2xl lg:text-5xl font-bold mt-14 lg:mt-20">Tentukan Masa Depanmu</h1>
        <div class="flex flex-row justify-between lg:justify-start lg:gap-6 mt-5 lg:mt-10">
            <img src="../assets/vector/digital-marketing.svg" alt="Icon Digital Marketing" class="hidden lg:flex" />
            <img src="../assets/vector/data-science.svg" alt="Icon Data Science" class="hidden lg:flex" />
            <img src="../assets/vector/ai.svg" alt="Icon AI Engineering" class="hidden lg:flex" />
            <img src="../assets/vector/digital-marketing-m.svg" alt="Icon Digital Marketing" class="lg:hidden" />
            <img src="../assets/vector/data-science-m.svg" alt="Icon Data Science" class="lg:hidden" />
            <img src="../assets/vector/ai-m.svg" alt="Icon AI Engineering" class="lg:hidden" />
        </div>
        <a href="#program"
            class="inline-flex gap-2 lg:gap-4 items-center mt-5 lg:mt-10 px-5 lg:px-10 h-10 lg:h-14 bg-primary rounded-full text-sm lg:text-lg font-bold">
            Pelajari Lebih Banyak
            <img src="../assets/vector/arrow-down.svg" alt="Arrow Down" class="w-4 lg:w-6" />
        </a>
    </section>
    {{-- Card Manfaat Program & Kata Mereka --}}
    <section id="program" class="mx-2 lg:mx-4 mt-4 flex flex-col lg:flex-row gap-4">
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

            <div class="owl-slider">
                <div class="owl-carousel owl-theme">
                    <img src="../assets/img/review1.png" class="rounded-xl" style="height: 200px; width: 550px;" />
                    <img src="../assets/img/review1.png" class="rounded-xl" style="height: 200px; width: 550px;" />
                </div>
            </div>

            <div class="w-20 h-1 lg:h-3 rounded-full relative bg-secondary/40 self-center owl-dots">
                <button
                    class="w-10 h-1 lg:h-3 rounded-full absolute left-0 bg-secondary self-center owl-dot active transition-all"
                    data-hash="1"></button>

                <button
                    class="w-10 h-1 lg:h-3 rounded-full absolute right-0 bg-secondary self-center owl-dot transition-all"
                    data-hash="2"></button>
            </div>

        </div>

    </section>
    {{-- Card Best Student --}}
    <section class="mx-2 lg:ml-[60px] lg:mr-[18px] mt-10 lg:mt-[42px]">
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
                    <br />
                    <br />
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
    </section>
    {{-- Card Pengalaman di Kelas --}}
    <section class="mx-2 lg:mx-4 mt-10 lg:mt-8">
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
    </section>
    {{-- Card Kenapa Harus --}}
    <section class="mx-4 lg:mx-[60px] mt-10 lg:mt-12">
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
            class="flex flex-row gap-4 lg:gap-2 mt-4 px-6 py-4 bg-primary rounded-t-3xl text-base text-white font-normal">
            <span class="w-3/6 lg:w-2/5">Benefit</span>
            <span class="w-1/6 lg:w-1/5 flex justify-center text-center">
                Campus Degree
            </span>
            <span class="w-1/6 lg:w-1/5 flex justify-center text-center">
                Other Bootcamp
            </span>
            <span class="w-1/6 lg:w-1/5 flex justify-center text-center">
                Qarir Generator
            </span>
        </div>
        <div class="border border-primary rounded-b-3xl">
            <div class="flex flex-row gap-4 lg:gap-2 px-6 py-4 text-base font-normal">
                <span class="w-3/6 lg:w-2/5">Theory Knowledge</span>
                <span class="w-1/6 lg:w-1/5 flex justify-center">
                    <img src="../assets/vector/check-circle.svg" alt="Icon Checkmark Circle" class="w-5" />
                </span>
                <span class="w-1/6 lg:w-1/5 flex justify-center">
                    <img src="../assets/vector/cancel.svg" alt="Icon Cancel" class="w-6" />
                </span>
                <span class="w-1/6 lg:w-1/5 flex justify-center">
                    <img src="../assets/vector/cancel.svg" alt="Icon Cancel" class="w-6" />
                </span>
            </div>
            <div class="flex flex-row gap-4 lg:gap-2 px-6 py-4 text-base font-normal">
                <span class="w-3/6 lg:w-2/5">Social Life</span>
                <span class="w-1/6 lg:w-1/5 flex justify-center">
                    <img src="../assets/vector/check-circle.svg" alt="Icon Checkmark Circle" class="w-5" />
                </span>
                <span class="w-1/6 lg:w-1/5 flex justify-center">
                    <img src="../assets/vector/cancel.svg" alt="Icon Cancel" class="w-6" />
                </span>
                <span class="w-1/6 lg:w-1/5 flex justify-center">
                    <img src="../assets/vector/check-circle.svg" alt="Icon Checkmark Circle" class="w-5" />
                </span>
            </div>
            <div class="flex flex-row gap-4 lg:gap-2 px-6 py-4 text-base font-normal">
                <span class="w-3/6 lg:w-2/5">Management trainee access</span>
                <span class="w-1/6 lg:w-1/5 flex justify-center">
                    <img src="../assets/vector/cancel.svg" alt="Icon Cancel" class="w-6" />
                </span>
                <span class="w-1/6 lg:w-1/5 flex justify-center">
                    <img src="../assets/vector/cancel.svg" alt="Icon Cancel" class="w-6" />
                </span>
                <span class="w-1/6 lg:w-1/5 flex justify-center">
                    <img src="../assets/vector/check-circle.svg" alt="Icon Checkmark Circle" class="w-5" />
                </span>
            </div>
            <div class="flex flex-row gap-4 lg:gap-2 px-6 py-4 text-base font-normal">
                <span class="w-3/6 lg:w-2/5">
                    Validation of analytical thinking from Hands-on projects
                </span>
                <span class="w-1/6 lg:w-1/5 flex justify-center">
                    <img src="../assets/vector/cancel.svg" alt="Icon Cancel" class="w-6" />
                </span>
                <span class="w-1/6 lg:w-1/5 flex justify-center">
                    <img src="../assets/vector/check-circle.svg" alt="Icon Checkmark Circle" class="w-5" />
                </span>
                <span class="w-1/6 lg:w-1/5 flex justify-center">
                    <img src="../assets/vector/check-circle.svg" alt="Icon Checkmark Circle" class="w-5" />
                </span>
            </div>
            <div class="flex flex-row gap-4 lg:gap-2 px-6 py-4 text-base font-normal">
                <span class="w-3/6 lg:w-2/5">
                    Network of professionals and industry leaders
                </span>
                <span class="w-1/6 lg:w-1/5 flex justify-center">
                    <img src="../assets/vector/cancel.svg" alt="Icon Cancel" class="w-6" />
                </span>
                <span class="w-1/6 lg:w-1/5 flex justify-center">
                    <img src="../assets/vector/cancel.svg" alt="Icon Cancel" class="w-6" />
                </span>
                <span class="w-1/6 lg:w-1/5 flex justify-center">
                    <img src="../assets/vector/check-circle.svg" alt="Icon Checkmark Circle" class="w-5" />
                </span>
            </div>
            <div class="flex flex-row gap-4 lg:gap-2 px-6 py-4 text-base font-normal">
                <span class="w-3/6 lg:w-2/5">
                    Soft skills management, leadership and communication
                </span>
                <span class="w-1/6 lg:w-1/5 flex justify-center">
                    <img src="../assets/vector/all-inclusive.svg" alt="Icon All Inclusive" class="w-6" />
                </span>
                <span class="w-1/6 lg:w-1/5 flex justify-center">
                    <img src="../assets/vector/all-inclusive.svg" alt="Icon All Inclusive" class="w-6" />
                </span>
                <span class="w-1/6 lg:w-1/5 flex justify-center">
                    <img src="../assets/vector/check-circle.svg" alt="Icon Checkmark Circle" class="w-5" />
                </span>
            </div>
            <div class="flex flex-row gap-4 lg:gap-2 px-6 py-4 text-base font-normal">
                <span class="w-3/6 lg:w-2/5">Connection with Global HR</span>
                <span class="w-1/6 lg:w-1/5 flex justify-center">
                    <img src="../assets/vector/cancel.svg" alt="Icon Cancel" class="w-6" />
                </span>
                <span class="w-1/6 lg:w-1/5 flex justify-center">
                    <img src="../assets/vector/cancel.svg" alt="Icon Cancel" class="w-6" />
                </span>
                <span class="w-1/6 lg:w-1/5 flex justify-center">
                    <img src="../assets/vector/check-circle.svg" alt="Icon Checkmark Circle" class="w-5" />
                </span>
            </div>
            <div class="flex flex-row gap-4 lg:gap-2 px-6 py-4 text-base font-normal">
                <span class="w-3/6 lg:w-2/5">Apprenticeship</span>
                <span class="w-1/6 lg:w-1/5 flex justify-center">
                    <img src="../assets/vector/all-inclusive.svg" alt="Icon All Inclusive" class="w-6" />
                </span>
                <span class="w-1/6 lg:w-1/5 flex justify-center">
                    <img src="../assets/vector/all-inclusive.svg" alt="Icon All Inclusive" class="w-6" />
                </span>
                <span class="w-1/6 lg:w-1/5 flex justify-center">
                    <img src="../assets/vector/check-circle.svg" alt="Icon Checkmark Circle" class="w-5" />
                </span>
            </div>
        </div>
    </section>
    {{-- Card Bootcamp --}}
    <section class="mx-2 lg:mx-4 mt-10 lg:mt-12 flex flex-col lg:flex-row gap-4">
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
            <a href="https://form.jotform.com/Consultant_Admission/college-admission-form"
                class="inline-flex gap-2 justify-center items-center mt-4 lg:mt-10 w-full lg:w-[354px] h-10 lg:h-14 bg-primary rounded-full text-sm lg:text-lg text-white font-bold cursor-pointer">
                Apply Now
            </a>
        </div>
        {{-- Card Biaya dan Investasi --}}
        <div
            class="p-4 lg:px-[60px] lg:py-[30px] flex flex-col gap-4 border-2 border-primary-dark rounded-[18px] lg:w-1/2">
            <h2 class="text-lg lg:text-3xl font-bold lg:font-medium text-text">Biaya dan Investasi</h2>
            <img src="../assets/img/review1.png" alt="Image about N Gram" class="w-full rounded-xl" />
            <p class="text-sm lg:text-lg font-light">Beasiswa potongan biaya pelatihan dan
                <b class="text-primary">pengembangan karir selama 4 bulan hingga 70%
                </b>
                <br />
                <br />
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
                <br /> *Harga belum termasuk pajak dan enrollment fee
            </p>
        </div>
    </section>
    {{-- Card Dukungan Karir & Personal Branding --}}
    <section class="mx-4 lg:mx-[60px] mt-10 lg:mt-12 flex flex-col lg:flex-row">
        <div class="flex flex-col gap-2 lg:gap-4 w-full lg:w-[450px] lg:mr-8">
            <h2 class="text-lg lg:text-3xl font-semibold lg:font-medium">Dukungan Karir</h2>
            <p class="text-sm lg:text-lg font-light">Temui Pelatih Karir dan bersiaplah untuk memulai karir Kamu</p>
            <img src="../assets/img/career_ill.png" alt="Image about career support" class="w-full lg:w-96" />
        </div>
        <div class="flex-1 flex flex-col gap-1.5 mt-8 lg:mt-0 lg:mr-4">
            <button onclick="jadwalKelas(event)" data-label="0" data-title="branding"
                class="jadwalKelas inline-flex gap-2 items-center px-6 lg:px-10 w-full lg:w-[354px] h-10 lg:h-14 bg-primary rounded-full text-sm lg:text-lg text-white font-bold">
                Personal Branding
            </button>
            <button onclick="jadwalKelas(event)" data-label="1" data-title="branding"
                class="jadwalKelas inline-flex gap-2 items-center px-6 lg:px-10 w-full lg:w-[354px] h-10 lg:h-14 border border-primary rounded-full text-sm lg:text-lg text-primary font-bold">
                Kursus Bahasa Inggris Bisnis
            </button>
            <button onclick="jadwalKelas(event)" data-label="2" data-title="branding"
                class="jadwalKelas inline-flex gap-2 items-center px-6 lg:px-10 w-full lg:w-[354px] h-10 lg:h-14 border border-primary rounded-full text-sm lg:text-lg text-primary font-bold">
                Praktek Public Speaking
            </button>
            <button onclick="jadwalKelas(event)" data-label="3" data-title="branding"
                class="jadwalKelas inline-flex gap-2 items-center px-6 lg:px-10 w-full lg:w-[354px] h-10 lg:h-14 border border-primary rounded-full text-sm lg:text-lg text-primary font-bold">
                Dukungan Mencari Pekerjaan
            </button>
            <button onclick="jadwalKelas(event)" data-label="4" data-title="branding"
                class="jadwalKelas inline-flex gap-2 items-center px-6 lg:px-10 w-full lg:w-[354px] h-10 lg:h-14 border border-primary rounded-full text-sm lg:text-lg text-primary font-bold">
                Praktek Interview
            </button>
            <button onclick="jadwalKelas(event)" data-label="5" data-title="branding"
                class="jadwalKelas inline-flex gap-2 items-center px-6 lg:px-10 w-full lg:w-[354px] h-10 lg:h-14 border border-primary rounded-full text-sm lg:text-lg text-primary font-bold">
                Project Management Trainee
            </button>
        </div>
        <div class="bg-primary/10 p-4 lg:px-[60px] lg:py-[30px] rounded-[18px] w-full mt-4 lg:mt-0 lg:w-[512px]">
            <h2 class="text-lg lg:text-3xl font-bold lg:font-medium text-text">Personal Branding</h2>
            <div class="flex flex-col mt-4 gap-2 lg:gap-4">
                <div class="inline-flex items-start gap-2 text-text text-sm lg:text-lg font-normal">
                    <img src="../assets/vector/for-you.svg" alt="Icon For You" class="w-4 lg:w-6" />
                    <p id="person">Bangun profil profesional Kamu</p>
                </div>
                <div class="inline-flex items-start gap-2 text-text text-sm lg:text-lg font-normal">
                    <img src="../assets/vector/airplane-ticket-b.svg" alt="Icon Airplane Ticket"
                        class="w-4 lg:w-6" />
                    <p id="flight">Bagikan portofolio Kamu dengan penyampaian cerita yang bagus</p>
                </div>
                <div class="inline-flex items-start gap-2 text-text text-sm lg:text-lg font-normal">
                    <img src="../assets/vector/add-reaction.svg" alt="Icon Add Reaction" class="w-4 lg:w-6" />
                    <p id="emote">Terhubung dengan para ahli</p>
                </div>
                <div class="inline-flex items-start gap-2 text-text text-sm lg:text-lg font-normal">
                    <img src="../assets/vector/globe.svg" alt="Icon Globe" class="w-4 lg:w-6" />
                    <p id="earth">Menginspirasi dunia</p>
                </div>
            </div>
        </div>
    </section>
    {{-- Jadwal Kelas Terdekat --}}
    <section class="mx-2 lg:mx-4 mt-10 lg:mt-12">
        <div class="px-4 lg:px-[60px] py-5 lg:py-[30px] bg-secondary rounded-[18px] text-white">
            <h2 class="text-lg lg:text-3xl font-semibold lg:font-medium">Jadwal Kelas Terdekat</h2>
            <div class="flex flex-col lg:flex-row mt-4 lg:mt-8 gap-8">
                <div class="flex flex-col gap-2 lg:gap-4">
                    <button onclick="jadwalKelas(event)" data-label="0" data-title="kelas"
                        class="jadwalKelas inline-flex gap-2 items-center px-10 w-full lg:w-[354px] h-10 lg:h-14 bg-primary rounded-full text-sm lg:text-lg text-white font-bold">
                        Januari 2024
                    </button>
                    <button onclick="jadwalKelas(event)" data-label="1" data-title="kelas"
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
                                <br />
                                <br />
                            <p id="infoJadwal">2x dalam seminggu</p>
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
                    <a href="https://form.jotform.com/Consultant_Admission/college-admission-form"
                        class="inline-flex gap-2 items-center justify-center px-10 w-full lg:w-[354px] h-10 lg:h-14 bg-primary rounded-full text-sm lg:text-lg text-white font-bold cursor-pointer">
                        Apply Now
                    </a>
                </div>
            </div>
        </div>
    </section>
    {{-- Card Kontak --}}
    <section class="mx-2 lg:mx-4 mt-10 lg:mt-8">
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
    </section>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/owl.carousel.min.js"></script>
    <script src="{{ asset('js') }}/main.js"></script>
    <script src="{{ asset('js') }}/leads.js"></script>
</body>

</html>
