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
        style="background-image: url('../assets/img/hero-landing.png');">
        <div class="flex flex-col gap-6 lg:gap-10">
            <h1 class="text-2xl lg:text-5xl font-bold mt-24 lg:mt-44 leading-10">An Emerging New Way to Success</h1>
            <p class="lg:w-[681px] text-sm lg:text-2xl text-white/75 font-normal lg:font-light leading-normal">As #1
                cross border
                talent enabler, Qarir Generator, dedicated to bridge young generation for career development focused in
                emerging countries to provide professional coaching directly from industry leaders, online course
                development, global mentorship, and bridging them directly to the potential hiring partners.</p>
            <a href="#program"
                class="inline-flex gap-2 lg:gap-4 items-center px-5 lg:px-10 w-fit h-10 lg:h-14 bg-primary rounded-full text-sm lg:text-lg font-bold">
                Explore Program
                <img src="../assets/vector/arrow-down.svg" alt="Arrow Down" class="w-4 lg:w-6" />
            </a>
        </div>
    </section>
    {{-- Card Our Impact --}}
    <section id="impact" class="mx-2 lg:mx-4 mt-[18px] lg:mt-8 flex flex-col lg:flex-row gap-6 lg:gap-8">
        {{-- Card Impact --}}
        <div class="flex flex-col lg:w-[409px]">
            <h2 class="px-4 lg:px-0 lg:pl-11 text-lg lg:text-3xl font-bold lg:font-medium text-text">Our Impact</h2>
            <p class="mt-4 px-4 lg:px-0 lg:pl-11 text-sm lg:text-lg font-normal">Since 2019, Connecting hundreds of
                people to the
                next
                level of their
                career.</p>
            <div class="flex flex-row mt-4 lg:mt-8 pl-4 lg:pl-11 gap-4">
                <span class="text-4xl font-bold">3000 ++</span>
                <div class="flex flex-row flex-1 justify-between">
                    <img src="../assets/img/person-impact.png" alt="Person Impact 1" class="w-10">
                    <img src="../assets/img/person-impact1.png" alt="Person Impact 2" class="w-10">
                    <img src="../assets/img/person-impact2.png" alt="Person Impact 3" class="w-10">
                    <img src="../assets/img/person-impact3.png" alt="Person Impact 4" class="w-10">
                </div>
            </div>
        </div>
        {{-- Card Impact Benefit --}}
        <div class="flex flex-col lg:flex-row gap-4">
            <div
                class="bg-primary-light p-4 rounded-[18px] lg:px-[60px] lg:py-[30px] lg:w-1/3 flex flex-col items-center gap-2">
                <img src="../assets/vector/coaching.svg" alt="Coaching Illustration" class="w-[100px]">
                <p class="text-base lg:text-2xl text-text text-center font-medium lg:w-[200px]">Supported by 570+
                    Mentors</p>
            </div>
            <div
                class="bg-primary-light p-4 rounded-[18px] lg:px-[60px] lg:py-[30px] lg:w-1/3 flex flex-col items-center gap-2">
                <img src="../assets/vector/team.svg" alt="Teams Illustration" class="w-[100px]">
                <p class="text-base lg:text-2xl text-text text-center font-medium lg:w-[180px]">300+ hiring partners
                    industry</p>
            </div>
            <div
                class="bg-primary-light p-4 rounded-[18px] lg:px-[60px] lg:py-[30px] lg:w-1/3 flex flex-col items-center gap-2">
                <img src="../assets/vector/suitcase.svg" alt="Suitcase Illustration" class="w-[100px]">
                <p class="text-base lg:text-2xl text-text text-center font-medium lg:w-[200px]">95% Employment Rate</p>
            </div>
        </div>
    </section>
    {{-- Card Program Topics --}}
    <section id="topic" class="mx-2 lg:mx-4 mt-[60px] flex flex-col gap-4">
        <h2 class="lg:hidden lg:ml-11 text-lg lg:text-3xl font-bold lg:font-medium text-text">Topics You Will Learn</h2>
        <h2 class="hidden lg:flex lg:ml-11 text-lg lg:text-3xl font-bold lg:font-medium text-text">Choose the Program
        </h2>
        <div class="flex flex-col lg:flex-row gap-4">
            {{-- Card Career Survivor --}}
            <div class="bg-primary/10 p-4 lg:px-[60px] lg:py-[30px] lg:w-1/2 rounded-[18px]">
                <img src="../assets/img/topic.png" alt="Career Survivor Illustration" class="w-full">
                <h4 class="text-lg text-text lg:text-[32px] font-medium mt-5">Career Survivor</h4>
                <p class="text-sm text-text lg:text-lg font-normal mt-2">Expand your networking access, Connect with
                    Experts and
                    join
                    their
                    mentorship program!</p>
                <a href="#program"
                    class="inline-flex justify-center items-center mt-6 w-full h-10 lg:h-14 bg-primary rounded-full text-sm lg:text-lg text-white font-bold">
                    Learn More
                </a>
            </div>

            {{-- Card Career Accelerator --}}
            <div class="bg-[#1AD0791A] p-4 lg:px-[60px] lg:py-[30px] lg:w-1/2 rounded-[18px]">
                <img src="../assets/img/topic1.png" alt="Career Accelerator Illustration" class="w-full">
                <h4 class="text-lg text-text lg:text-[32px] font-medium mt-5">Career Accelerator</h4>
                <p class="text-sm text-text lg:text-lg font-normal mt-2">Beyond tech-bootcamp Program. Excel your skill
                    in tech
                    within
                    16 Weeks. Guided by dozens of selected tutor</p>
                <a href="#program"
                    class="inline-flex justify-center items-center mt-6 w-full h-10 lg:h-14 bg-primary rounded-full text-sm lg:text-lg text-white font-bold">
                    Learn More
                </a>
            </div>
        </div>
    </section>
    {{-- Card Industry Academy --}}
    <section id="topic" class="mx-4 lg:mx-[60px] mt-[60px] flex flex-col gap-4">
        <h2 class="text-lg lg:text-3xl font-bold lg:font-medium text-text">Connect with Hundreds of Global Industry
            Leader</h2>
        <div class="flex flex-col lg:flex-row gap-4">
            {{-- Card Digital Marketing --}}
            <div class="p-4 lg:p-[30px] lg:w-1/2 border border-primary rounded-[32px]">
                <img src="../assets/img/academy-digital-marketing.png" alt="Digital Marketing Illustration"
                    class="w-full">
                <h4 class="text-lg lg:text-2xl font-medium lg:font-bold mt-5">Digital Marketing</h4>
                <p class="text-sm lg:text-lg text-text font-normal mt-2 lg:mt-4">3 months intensive
                    <br />Magic Session Clinic
                    <br />Available Job Priority+
                    <br />Working Abroad Access
                </p>
                <a href="#program"
                    class="inline-flex justify-center items-center mt-6 w-full h-10 lg:h-14 bg-primary rounded-full text-sm lg:text-lg text-white font-bold">
                    Learn More
                </a>
            </div>

            {{-- Card Data Science --}}
            <div class="p-4 lg:p-[30px] lg:w-1/2 border border-primary rounded-[32px]">
                <img src="../assets/img/academy-data-science.png" alt="Data Science Illustration" class="w-full">
                <h4 class="text-lg lg:text-2xl font-medium lg:font-bold mt-5">Data Science</h4>
                <p class="text-sm lg:text-lg text-text font-normal mt-2 lg:mt-4">3 months intensive
                    <br /> Magic Session Clinic
                    <br /> Available Job Priority+
                    <br /> Working Abroad Access
                </p>
                <a href="#program"
                    class="inline-flex justify-center items-center mt-6 w-full h-10 lg:h-14 bg-primary rounded-full text-sm lg:text-lg text-white font-bold">
                    Learn More
                </a>
            </div>

            {{-- Card Ai Engineering --}}
            <div class="flex flex-col p-4 lg:p-[30px] lg:w-1/2 border border-primary rounded-[32px]">
                <img src="../assets/img/academy-ai.png" alt="Ai Engineering Illustration" class="w-full">
                <h4 class="text-lg lg:text-2xl font-medium lg:font-bold mt-5">Ai Engineering</h4>
                <p class="text-sm lg:text-lg text-text font-normal mt-2 lg:mt-4">3 months intensive
                    <br /> Magic Session Clinic
                    <br /> Apprenticeship
                </p>
                <a href="#program"
                    class="inline-flex justify-center items-center mt-6 lg:mt-auto w-full h-10 lg:h-14 bg-primary rounded-full text-sm lg:text-lg text-white font-bold">
                    Learn More
                </a>
            </div>

            {{-- Card CEO Academy --}}
            <div class="p-4 lg:p-[30px] lg:w-1/2 border border-primary rounded-[32px]">
                <img src="../assets/img/academy-ceo.png" alt="CEO Academy Illustration" class="w-full">
                <h4 class="text-lg lg:text-2xl font-medium lg:font-bold mt-5">CEO Academy</h4>
                <p class="text-sm lg:text-lg text-text font-normal mt-2 lg:mt-4">8 Weeks Founder Development Program
                    <br /> Funding & Investor
                    <br /> Mini MBA Program
                </p>
                <a href="#program"
                    class="inline-flex justify-center items-center mt-6 w-full h-10 lg:h-14 bg-primary rounded-full text-sm lg:text-lg text-white font-bold">
                    Learn More
                </a>
            </div>
        </div>
    </section>
    {{-- Card Alumni --}}
    <section id="alumni"
        class="bg-secondary mx-2 lg:mx-4 mt-10 lg:mt-[60px] p-4 lg:p-[30px] rounded-[18px] lg:rounded-[32px] text-white">
        <h2 class="text-lg lg:text-3xl font-bold lg:font-medium">Discover our <span class="text-primary">alumni
                stories</span> and their works!</h2>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 lg:gap-6 mt-4 lg:mt-8">
            <div class="flex-1 flex flex-col gap-6 rounded-3xl bg-secondary-light p-4">
                <div class="inline-flex gap-2 items-center">
                    <img src="../assets/img/person-circle.png" alt="Hieronymus K Bali Picture" class="w-[60px]">
                    <div class="flex flex-col gap-2">
                        <h4 class="text-lg font-medium">Hieronymus K Bali</h4>
                        <p class="text-sm font-light">Full Stack Digital Marketing - Batch 1</p>
                    </div>
                </div>
                <p class="text-sm font-light">"Here, not only get to attend fun classes, but I also improve my
                    networking and knowledge
                    because of the highly experienced trainer." - Hieronymus</p>
                <a href="#program"
                    class="inline-flex gap-4 mt-auto justify-center items-center h-10 bg-secondary rounded-full text-sm text-white font-bold">
                    <img src="../assets/vector/linkedin.svg" alt="Icon LinkedIn" class="w-5">
                    Linkedin Profile
                </a>
            </div>
            <div class="flex-1 flex flex-col gap-6 rounded-3xl bg-secondary-light p-4">
                <div class="inline-flex gap-2 items-center">
                    <img src="../assets/img/person-circle1.png" alt="Agnes Friska C. P Picture" class="w-[60px]">
                    <div class="flex flex-col gap-2">
                        <h4 class="text-lg font-medium">Agnes Friska C. P</h4>
                        <p class="text-sm font-light">Full Stack Digital Marketing - Batch 6</p>
                    </div>
                </div>
                <p class="text-sm font-light">"High Quality Programme with the best mentors. Their services
                    meet 5 stars" - Agnes Friska
                </p>
                <a href="#program"
                    class="inline-flex gap-4 mt-auto justify-center items-center h-10 bg-secondary rounded-full text-sm text-white font-bold">
                    <img src="../assets/vector/linkedin.svg" alt="Icon LinkedIn" class="w-5">
                    Linkedin Profile
                </a>
            </div>
            <div class="flex-1 flex flex-col gap-6 rounded-3xl bg-secondary-light p-4">
                <div class="inline-flex gap-2 items-center">
                    <img src="../assets/img/person-circle2.png" alt="Balad Al Barokah Picture" class="w-[60px]">
                    <div class="flex flex-col gap-2">
                        <h4 class="text-lg font-medium">Balad Al Barokah</h4>
                        <p class="text-sm font-light">Full Stack Digital Marketing Analytics- Batch 8</p>
                    </div>
                </div>
                <p class="text-sm font-light">"QarirGenerator opens up a new opportunity to work in the digital
                    field!" - Balad
                </p>
                <a href="#program"
                    class="inline-flex gap-4 mt-auto justify-center items-center h-10 bg-secondary rounded-full text-sm text-white font-bold">
                    <img src="../assets/vector/linkedin.svg" alt="Icon LinkedIn" class="w-5">
                    Linkedin Profile
                </a>
            </div>
            <div class="flex-1 flex flex-col gap-6 rounded-3xl bg-secondary-light p-4">
                <div class="inline-flex gap-2 items-center">
                    <img src="../assets/img/person-circle3.png" alt="Zulkhaidir Purwanto Picture" class="w-[60px]">
                    <div class="flex flex-col gap-2">
                        <h4 class="text-lg font-medium">Zulkhaidir Purwanto</h4>
                        <p class="text-sm font-light">Data Science - Batch 25</p>
                    </div>
                </div>
                <p class="text-sm font-light">"QarirGenerator helped me to gain a deeper understanding of data
                    science. After taking their course and staying connected with my mentor, I was able to start
                    working at my dream company using the significantly improved skills."</p>
                <a href="#program"
                    class="inline-flex gap-4 mt-auto justify-center items-center h-10 bg-secondary rounded-full text-sm text-white font-bold">
                    <img src="../assets/vector/linkedin.svg" alt="Icon LinkedIn" class="w-5">
                    Linkedin Profile
                </a>
            </div>
            <div class="flex-1 flex flex-col gap-6 rounded-3xl bg-secondary-light p-4">
                <div class="inline-flex gap-2 items-center">
                    <img src="../assets/img/person-circle4.png" alt="Angeline Lie Picture" class="w-[60px]">
                    <div class="flex flex-col gap-2">
                        <h4 class="text-lg font-medium">Angeline Lie</h4>
                        <p class="text-sm font-light">Founder & CEO at Digmo Agency</p>
                    </div>
                </div>
                <p class="text-sm font-light">"The learning materials are very comprehensive, the classes are
                    well-structured, and the consultation service is satisfying." - Angeline Lie
                </p>
                <a href="#program"
                    class="inline-flex gap-4 mt-auto justify-center items-center h-10 bg-secondary rounded-full text-sm text-white font-bold">
                    <img src="../assets/vector/linkedin.svg" alt="Icon LinkedIn" class="w-5">
                    Linkedin Profile
                </a>
            </div>
            <div class="flex-1 flex flex-col gap-6 rounded-3xl bg-secondary-light p-4">
                <div class="inline-flex gap-2 items-center">
                    <img src="../assets/img/person-circle5.png" alt="Yanuar Rizky Picture" class="w-[60px]">
                    <div class="flex flex-col gap-2">
                        <h4 class="text-lg font-medium">Yanuar Rizky</h4>
                        <p class="text-sm font-light">Full Stack Digital Marketing Analytics- Batch 12</p>
                    </div>
                </div>
                <p class="text-sm font-light">"Turning my dream of working as a performance specialist into
                    reality by starting to learn Digital Marketing Bootcamp!" - Yanuar
                </p>
                <a href="#program"
                    class="inline-flex gap-4 mt-auto justify-center items-center h-10 bg-secondary rounded-full text-sm text-white font-bold">
                    <img src="../assets/vector/linkedin.svg" alt="Icon LinkedIn" class="w-5">
                    Linkedin Profile
                </a>
            </div>
        </div>
    </section>
    {{-- Marquee Company --}}
    <section id="company" class="flex flex-col mx-2 lg:mx-4 mt-10 lg:mt-[60px]">
        <h2 class="text-lg lg:text-3xl font-bold lg:font-medium">Our Alumni Sucessfully hired by</h2>
        <div class="relative mt-6 lg:mt-[60px] w-full h-[232px] lg:h-[464px] flex flex-row gap-10">
            <div
                class="absolute top-0 left-0 w-16 lg:w-36 h-[232px] lg:h-[464px] bg-gradient-to-r from-white to-transparent">
            </div>
            <div
                class="absolute top-0 right-0 w-16 lg:w-36 h-[232px] lg:h-[464px] bg-gradient-to-l from-white to-transparent">
            </div>
            <div class="flex flex-col justify-between">
                <img src="../assets/vector/logo-color.svg" alt="Qarir Generator Logo" class="w-24 lg:w-36" />
                <img src="../assets/vector/logo-color.svg" alt="Qarir Generator Logo" class="w-24 lg:w-36" />
                <img src="../assets/vector/logo-color.svg" alt="Qarir Generator Logo" class="w-24 lg:w-36" />
                <img src="../assets/vector/logo-color.svg" alt="Qarir Generator Logo" class="w-24 lg:w-36" />
                <img src="../assets/vector/logo-color.svg" alt="Qarir Generator Logo" class="w-24 lg:w-36" />
            </div>
            <div class="flex flex-col justify-between">
                <img src="../assets/vector/logo-color.svg" alt="Qarir Generator Logo" class="w-24 lg:w-36" />
                <img src="../assets/vector/logo-color.svg" alt="Qarir Generator Logo" class="w-24 lg:w-36" />
                <img src="../assets/vector/logo-color.svg" alt="Qarir Generator Logo" class="w-24 lg:w-36" />
                <img src="../assets/vector/logo-color.svg" alt="Qarir Generator Logo" class="w-24 lg:w-36" />
                <img src="../assets/vector/logo-color.svg" alt="Qarir Generator Logo" class="w-24 lg:w-36" />
            </div>
            <div class="flex flex-col justify-between">
                <img src="../assets/vector/logo-color.svg" alt="Qarir Generator Logo" class="w-24 lg:w-36" />
                <img src="../assets/vector/logo-color.svg" alt="Qarir Generator Logo" class="w-24 lg:w-36" />
                <img src="../assets/vector/logo-color.svg" alt="Qarir Generator Logo" class="w-24 lg:w-36" />
                <img src="../assets/vector/logo-color.svg" alt="Qarir Generator Logo" class="w-24 lg:w-36" />
                <img src="../assets/vector/logo-color.svg" alt="Qarir Generator Logo" class="w-24 lg:w-36" />
            </div>
            <div class="flex flex-col justify-between">
                <img src="../assets/vector/logo-color.svg" alt="Qarir Generator Logo" class="w-24 lg:w-36" />
                <img src="../assets/vector/logo-color.svg" alt="Qarir Generator Logo" class="w-24 lg:w-36" />
                <img src="../assets/vector/logo-color.svg" alt="Qarir Generator Logo" class="w-24 lg:w-36" />
                <img src="../assets/vector/logo-color.svg" alt="Qarir Generator Logo" class="w-24 lg:w-36" />
                <img src="../assets/vector/logo-color.svg" alt="Qarir Generator Logo" class="w-24 lg:w-36" />
            </div>
            <div class="hidden lg:flex flex-col justify-between">
                <img src="../assets/vector/logo-color.svg" alt="Qarir Generator Logo" class="w-24 lg:w-36" />
                <img src="../assets/vector/logo-color.svg" alt="Qarir Generator Logo" class="w-24 lg:w-36" />
                <img src="../assets/vector/logo-color.svg" alt="Qarir Generator Logo" class="w-24 lg:w-36" />
                <img src="../assets/vector/logo-color.svg" alt="Qarir Generator Logo" class="w-24 lg:w-36" />
                <img src="../assets/vector/logo-color.svg" alt="Qarir Generator Logo" class="w-24 lg:w-36" />
            </div>
            <div class="hidden lg:flex flex-col justify-between">
                <img src="../assets/vector/logo-color.svg" alt="Qarir Generator Logo" class="w-24 lg:w-36" />
                <img src="../assets/vector/logo-color.svg" alt="Qarir Generator Logo" class="w-24 lg:w-36" />
                <img src="../assets/vector/logo-color.svg" alt="Qarir Generator Logo" class="w-24 lg:w-36" />
                <img src="../assets/vector/logo-color.svg" alt="Qarir Generator Logo" class="w-24 lg:w-36" />
                <img src="../assets/vector/logo-color.svg" alt="Qarir Generator Logo" class="w-24 lg:w-36" />
            </div>
            <div class="hidden lg:flex flex-col justify-between">
                <img src="../assets/vector/logo-color.svg" alt="Qarir Generator Logo" class="w-24 lg:w-36" />
                <img src="../assets/vector/logo-color.svg" alt="Qarir Generator Logo" class="w-24 lg:w-36" />
                <img src="../assets/vector/logo-color.svg" alt="Qarir Generator Logo" class="w-24 lg:w-36" />
                <img src="../assets/vector/logo-color.svg" alt="Qarir Generator Logo" class="w-24 lg:w-36" />
                <img src="../assets/vector/logo-color.svg" alt="Qarir Generator Logo" class="w-24 lg:w-36" />
            </div>
            <div class="hidden lg:flex flex-col justify-between">
                <img src="../assets/vector/logo-color.svg" alt="Qarir Generator Logo" class="w-24 lg:w-36" />
                <img src="../assets/vector/logo-color.svg" alt="Qarir Generator Logo" class="w-24 lg:w-36" />
                <img src="../assets/vector/logo-color.svg" alt="Qarir Generator Logo" class="w-24 lg:w-36" />
                <img src="../assets/vector/logo-color.svg" alt="Qarir Generator Logo" class="w-24 lg:w-36" />
                <img src="../assets/vector/logo-color.svg" alt="Qarir Generator Logo" class="w-24 lg:w-36" />
            </div>

        </div>
    </section>
    <x-footer />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/owl.carousel.min.js"></script>
    <script src="{{ asset('js') }}/main.js"></script>
</body>

</html>
