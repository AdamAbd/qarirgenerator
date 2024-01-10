<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body class="font-satoshi bg-body relative">
    <x-navbar />

    {{-- Hero Section --}}
    <section class="w-full h-[423px] lg:h-[708px] px-4 lg:px-[60px] bg-ai bg-center bg-cover text-white">
        <div class="flex flex-col lg:w-[681px] gap-6 lg:gap-10">
            <h1 class="text-2xl lg:text-5xl font-bold mt-24 lg:mt-44 leading-10">Accelerate Your Career in Program AI
            </h1>
            <p class="text-sm lg:text-2xl text-white/75 font-normal lg:font-light leading-normal">Keep up to date with
                the latest
                technology of
                Artificial Intelligence and the implementation in Business. Become AI Engineer and get ready to make an
                impact with AI</p>
            <div class="flex flex-col lg:flex-row gap-2 lg:gap-6">
                <a href="https://api.whatsapp.com/send?phone=6281110014420"
                    class="inline-flex lg:gap-4 items-center px-5 lg:px-10 w-fit h-10 lg:h-14 bg-primary rounded-full text-sm lg:text-lg font-bold">
                    Free Mentor Consultation
                </a>
                <a href="#program"
                    class="inline-flex gap-4 items-center px-5 lg:px-10 w-fit h-10 lg:h-14 bg-secondary border border-white/20 rounded-full text-sm lg:text-lg font-bold">
                    <img src="../assets/vector/work.svg" alt="Icon Work">
                    Scholarship
                </a>
            </div>
        </div>
    </section>

    <div class="flex flex-col lg:flex-row gap-10 mx-4 lg:mx-[60px] mt-[18px] lg:mt-12">
        <aside
            class="px-[30px] py-6 w-[280px] hidden lg:flex flex-col h-min gap-4 bg-white rounded-2xl drop-shadow-md sideBar sticky left-10 top-28">
            <h3 class="text-2xl text-text font-semibold">Course Details AI Engineer</h3>

            <a href="#about" id="about-lk" class="inline-flex gap-4 items-center text-lg text-primary font-bold">
                <div class="w-0.5 h-[34px] bg-primary branch"></div>
                About Program
            </a>

            <a href="#curriculum" id="curriculum-lk"
                class="inline-flex gap-4 items-center text-lg text-text-light font-medium">
                <div class="w-0.5 h-[34px] bg-white branch"></div>
                Curriculum
            </a>

            <a href="#learning-phase" id="learning-phase-lk"
                class="inline-flex gap-4 items-center text-lg text-text-light font-medium">
                <div class="w-0.5 h-[34px] bg-white branch"></div>
                Learning phase
            </a>

            <a href="#proven-wethodology" id="proven-wethodology-lk"
                class="inline-flex gap-4 items-center text-lg text-text-light font-medium">
                <div class="w-0.5 h-[34px] bg-white branch"></div>
                Proven Methodology
            </a>

            <a href="#halal-guaranted" id="halal-guaranted-lk" class="inline-flex gap-4 items-center">
                <div class="w-0.5 h-[34px] bg-white branch"></div>
                <div
                    class="inline-flex justify-center gap-2 py-1 w-[187px] bg-chips/10 rounded-xl text-lg text-chips font-medium">
                    <img src="../assets/vector/mosque.svg" alt="Icon Mosque">
                    Halal Guaranteed
                </div>
            </a>

            <a href="#alumni" id="alumni-lk" class="inline-flex gap-4 items-center text-lg text-text-light font-medium">
                <div class="w-0.5 h-[34px] bg-white branch"></div>
                Alumni
            </a>

            <a href="#country-fees" id="country-fees-lk"
                class="inline-flex gap-4 items-center text-lg text-text-light font-medium">
                <div class="w-0.5 h-[34px] bg-white branch"></div>
                Countries & Edu Fees
            </a>

            <a href="#faq" id="faq-lk" class="inline-flex gap-4 items-center text-lg text-text-light font-medium">
                <div class="w-0.5 h-[34px] bg-white branch"></div>
                FAQ
            </a>

            <a href="https://form.jotform.com/Consultant_Admission/non-sch-admission"
                class="inline-flex justify-center items-center px-5 lg:px-10 h-10 lg:h-14 bg-primary rounded-full text-sm lg:text-lg text-white font-bold">
                Apply Now
            </a>
        </aside>

        <div class="lg:flex-1 flex flex-col gap-10">
            <section id="about" class="flex flex-col gap-4">
                <h2 class="text-lg lg:text-3xl font-bold lg:font-medium text-text">About Program</h2>
                <p class="text-sm lg:text-lg font-normal">This new collaborative bootcamp delves into topics such as
                    fundamentals
                    of AI, data mining, neural
                    networks and deep learning allowing you to understand and utilize algorithms and data structures,
                    critique the role of implications of AI in society and apply that in-depth knowledge to address
                    engineering problems.
                    <br />
                    <br />
                    You will also learn from Product Manager of AI development to implement AI and communicate it well
                    to potential user.
                    This program require you to have minimum 3 months intensive session live through zoom with Senior
                    Data Scientist
                </p>
            </section>
            <section class="bg-primary/10 p-4 lg:px-[60px] lg:py-[30px] rounded-[18px] lg:rounded-[32px]">
                <h2 class="text-lg lg:text-3xl font-bold lg:font-medium text-text">What you will get</h2>
                <div class="gap-4 flex flex-col lg:flex-row mt-4">
                    <div class="gap-4 flex flex-col">
                        <div class="inline-flex gap-2 lg:gap-3">
                            <img src="../assets/vector/check-circle.svg" alt="Icon Checkmark Circle"
                                class="w-4 lg:w-5" />
                            <p class="text-sm lg:text-lg font-light">High quality professional network</p>
                        </div>
                        <div class="inline-flex gap-2 lg:gap-3">
                            <img src="../assets/vector/check-circle.svg" alt="Icon Checkmark Circle"
                                class="w-4 lg:w-5" />
                            <p class="text-sm lg:text-lg font-light">Unlimited Live Class</p>
                        </div>
                        <div class="inline-flex gap-2 lg:gap-3">
                            <img src="../assets/vector/check-circle.svg" alt="Icon Checkmark Circle"
                                class="w-4 lg:w-5" />
                            <p class="text-sm lg:text-lg font-light">Maximum 20-35 students per class (general)</p>
                        </div>
                        <div class="inline-flex gap-2 lg:gap-3">
                            <img src="../assets/vector/check-circle.svg" alt="Icon Checkmark Circle"
                                class="w-4 lg:w-5" />
                            <p class="text-sm lg:text-lg font-light">Career support (Career guidance, CV creation,
                                Interview simulation)</p>
                        </div>
                        <div class="inline-flex gap-2 lg:gap-3">
                            <img src="../assets/vector/check-circle.svg" alt="Icon Checkmark Circle"
                                class="w-4 lg:w-5" />
                            <p class="text-sm lg:text-lg font-light">Practical session</p>
                        </div>
                        <div class="inline-flex gap-2 lg:gap-3">
                            <img src="../assets/vector/check-circle.svg" alt="Icon Checkmark Circle"
                                class="w-4 lg:w-5" />
                            <p class="text-sm lg:text-lg font-light">Proven method by Magic Session Clinic +</p>
                        </div>
                    </div>
                    <div class="gap-4 flex flex-col">
                        <div class="inline-flex gap-2 lg:gap-3">
                            <img src="../assets/vector/check-circle.svg" alt="Icon Checkmark Circle"
                                class="w-4 lg:w-5" />
                            <p class="text-sm lg:text-lg font-light">Hands on project based on Industry trend</p>
                        </div>
                        <div class="inline-flex gap-2 lg:gap-3">
                            <img src="../assets/vector/check-circle.svg" alt="Icon Checkmark Circle"
                                class="w-4 lg:w-5" />
                            <p class="text-sm lg:text-lg font-light">Experienced Mentors to Assist Learning Within
                                and Beyond the Classroom</p>
                        </div>
                        <div class="inline-flex gap-2 lg:gap-3">
                            <img src="../assets/vector/check-circle.svg" alt="Icon Checkmark Circle"
                                class="w-4 lg:w-5" />
                            <p class="text-sm lg:text-lg font-light">Business english course</p>
                        </div>
                        <div class="inline-flex gap-2 lg:gap-3">
                            <img src="../assets/vector/check-circle.svg" alt="Icon Checkmark Circle"
                                class="w-4 lg:w-5" />
                            <p class="text-sm lg:text-lg font-light">Apprenticeship program for real work experience
                            </p>
                        </div>
                        <div class="inline-flex gap-2 lg:gap-3">
                            <img src="../assets/vector/check-circle.svg" alt="Icon Checkmark Circle"
                                class="w-4 lg:w-5" />
                            <p class="text-sm lg:text-lg font-light">Management trainee access & Job simulation</p>
                        </div>
                    </div>
                </div>
            </section>
            <section id="curriculum">
                <h2 class="text-lg lg:text-3xl font-bold lg:font-medium text-text">Topics You Will Learn</h2>
                <div id="accordion-collapse" data-accordion="collapse" class="mt-6">

                    <h2 id="accordion-collapse-heading-1" onclick="accordian(event, 'accordion-collapse-body-1')">
                        <button type="button"
                            class="flex items-center justify-between w-full px-4 lg:px-8 py-2 lg:py-4 bg-primary rounded-full"
                            data-accordion-target="#accordion-collapse-body-1" aria-expanded="true"
                            aria-controls="accordion-collapse-body-1">
                            <span class="font-semibold text-white text-base lg:text-2xl">Core topic</span>
                            <img src="../assets/vector/expand-more.svg" alt="Icon Expand More">
                        </button>
                    </h2>
                    <div id="accordion-collapse-body-1" aria-labelledby="accordion-collapse-heading-1">
                        <ul
                            class="accordion-animator flex flex-col h-auto transition-all duration-500 ease-out overflow-hidden gap-4 px-4 lg:px-8 py-4 bg-white rounded-[32px] text-text text-sm lg:text-lg font-bold drop-shadow-md">
                            <li>01. Introduction AI</li>
                            <li>02. Phyton for Data Science & AI Development</li>
                            <li>03. Overview Machine Learning
                                <ul class="ml-9 font-medium">
                                    <li>Regresion</li>
                                    <li>Clasification</li>
                                    <li>Clustering</li>
                                </ul>
                            </li>
                            <li>04. Recommender System & Big Data</li>
                            <li>05. Deep Learning with Keras</li>
                            <li>06. Natural Language Processing</li>
                            <li>07. Deep Learning with Tensorflow</li>
                            <li>08. AI Capstone Project</li>
                        </ul>
                    </div>

                    <h2 id="accordion-collapse-heading-2" onclick="accordian(event, 'accordion-collapse-body-2')">
                        <button type="button"
                            class="flex items-center justify-between w-full mt-4 px-4 lg:px-8 py-2 lg:py-4 bg-primary rounded-full"
                            data-accordion-target="#accordion-collapse-body-2" aria-expanded="false"
                            aria-controls="accordion-collapse-body-2">
                            <span class="font-semibold text-white text-base lg:text-2xl">Elective module</span>
                            <img src="../assets/vector/expand-more.svg" alt="Icon Expand More">
                        </button>
                    </h2>
                    <div id="accordion-collapse-body-2" aria-labelledby="accordion-collapse-heading-2">
                        <ul
                            class="accordion-animator flex flex-col h-[0px] transition-all duration-500 ease-out overflow-hidden gap-4 bg-white rounded-[32px] text-text text-sm lg:text-lg font-bold drop-shadow-md">
                            <li>01. Business Mindset</li>
                            <li>02. Story Telling</li>
                            <li>03. Overview Machine Learning</li>
                            <li>04. EDA & SQL</li>
                            <li>05. Statistic</li>
                            <li>06. AI for Business Implementation</li>
                        </ul>
                    </div>
                    <h2 id="accordion-collapse-heading-3" onclick="accordian(event, 'accordion-collapse-body-3')">
                        <button type="button"
                            class="flex items-center justify-between w-full mt-4 px-4 lg:px-8 py-2 lg:py-4 bg-primary rounded-full"
                            data-accordion-target="#accordion-collapse-body-3" aria-expanded="false"
                            aria-controls="accordion-collapse-body-3">
                            <span class="font-semibold text-white text-base lg:text-2xl">Job Simulation</span>
                            <img src="../assets/vector/expand-more.svg" alt="Icon Expand More">
                        </button>
                    </h2>
                    <div id="accordion-collapse-body-3" aria-labelledby="accordion-collapse-heading-3">
                        <div
                            class="accordion-animator flex flex-col h-[0px] transition-all duration-500 ease-out overflow-hidden gap-4 bg-white rounded-[32px] text-text text-lg font-bold drop-shadow-md">
                            <h4 class="text-lg font-bold">Powered by Forage & CSR Partner</h4>
                            <div class="inline-flex items-end gap-4 mt-8">
                                <img src="../assets/img/accenture.png" alt="Accenture Logo">
                                <img src="../assets/img/bcg.png" alt="BCG Logo">
                                <img src="../assets/img/flip.png" alt="Flip Logo">
                                <img src="../assets/img/kawan-lama-group.png" alt="Kawan Lama Group Logo">
                                <img src="../assets/img/kata.ai.png" alt="Kata.ai Logo">
                                <span class="text-lg font-bold">and many more..</span>
                            </div>
                        </div>
                    </div>
                    <h2 id="accordion-collapse-heading-4" onclick="accordian(event, 'accordion-collapse-body-4')">
                        <button type="button"
                            class="flex items-center justify-between w-full mt-4 px-4 lg:px-8 py-2 lg:py-4 bg-primary rounded-full"
                            data-accordion-target="#accordion-collapse-body-4" aria-expanded="false"
                            aria-controls="accordion-collapse-body-4">
                            <span class="font-semibold text-white text-base lg:text-2xl">Career Accelerator
                                Journey</span>
                            <img src="../assets/vector/expand-more.svg" alt="Icon Expand More">
                        </button>
                    </h2>
                    <div id="accordion-collapse-body-4" aria-labelledby="accordion-collapse-heading-4">
                        <div
                            class="accordion-animator flex flex-row h-[0px] transition-all duration-500 ease-out overflow-hidden gap-6 bg-white rounded-[32px] drop-shadow-md">
                            <div class="flex flex-col items-center gap-3 p-4 w-1/5 rounded-3xl bg-primary-light">
                                <img src="../assets/vector/work-p.svg" alt="Icon Work" class="w-16">
                                <span class="text-lg text-center font-normal">
                                    <b>Month 1 :</b>
                                    <br />Career mapping & Anlytical thinking evaluation
                                </span>
                            </div>
                            <div class="flex flex-col items-center gap-3 p-4 w-1/5 rounded-3xl bg-primary-light">
                                <img src="../assets/vector/for-you-p.svg" alt="Icon For You" class="w-16">
                                <span class="text-lg text-center font-normal">
                                    <b>Month 2 :</b>
                                    <br />CV preparation & personal branding
                                </span>
                            </div>
                            <div class="flex flex-col items-center gap-3 p-4 w-1/5 rounded-3xl bg-primary-light">
                                <img src="../assets/vector/co-present.svg" alt="Icon Co Present" class="w-16">
                                <span class="text-lg text-center font-normal">
                                    <b>Month 3 :</b>
                                    <br />Elective modul & Skill presentation
                                </span>
                            </div>
                            <div class="flex flex-col items-center gap-3 p-4 w-1/5 rounded-3xl bg-primary-light">
                                <img src="../assets/vector/business-messages.svg" alt="Icon Business Messages"
                                    class="w-16">
                                <span class="text-lg text-center font-normal">
                                    <b>Month 4 :</b>
                                    <br />Interview practice & English course
                                </span>
                            </div>
                            <div class="flex flex-col items-center gap-3 p-4 w-1/5 rounded-3xl bg-primary-light">
                                <img src="../assets/vector/work-history.svg" alt="Icon Work history" class="w-16">
                                <span class="text-lg text-center font-normal">
                                    <b>Month 5 - 12 :</b>
                                    <br />Apprenticeship & Job simulation
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="learning-phase">
                <h2 class="text-lg lg:text-3xl font-bold lg:font-medium text-text">Learning Phase</h2>
                <div
                    class="bg-secondary mt-6 p-4 lg:px-[60px] lg:py-[30px] rounded-[18px] lg:rounded-[32px] text-white">
                    <h2 class="text-lg lg:text-3xl font-bold lg:font-medium">Bootcamp Journey</h2>
                    <div class="gap-6 flex flex-col lg:flex-row mt-8">
                        <div class="flex-1 flex flex-col items-center h-[228px] rounded-3xl bg-secondary-light p-4">
                            <img src="../assets/vector/ac-unit.svg" alt="Funda Icon">
                            <p class="text-base mt-3 text-center"><b>Month 1 :</b>
                                <br />Fundamental of AI & EDA
                            </p>
                        </div>
                        <div class="flex-1 flex flex-col items-center h-[228px] rounded-3xl bg-secondary-light p-4">
                            <img src="../assets/vector/database.svg" alt="Database Icon">
                            <p class="text-base mt-3 text-center"><b>Month 2 :</b>
                                <br /> ML review & Big data
                            </p>
                        </div>
                        <div class="flex-1 flex flex-col items-center h-[228px] rounded-3xl bg-secondary-light p-4">
                            <img src="../assets/vector/donut-small.svg" alt="Chart Icon">
                            <p class="text-base mt-3 text-center"><b>Month 3 :</b>
                                <br /> Deep learning & NLP
                            </p>
                        </div>
                        <div class="flex-1 flex flex-col items-center h-[228px] rounded-3xl bg-secondary-light p-4">
                            <img src="../assets/vector/bid-landscape.svg" alt="Progress Icon">
                            <p class="text-base mt-3 text-center"><b>Month 4 :</b>
                                <br /> Recommender , Business Performance & Final Project
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <section id="proven-wethodology">
                <h2 class="text-lg lg:text-3xl font-bold lg:font-medium text-text">Proven Methodology</h2>
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mt-6">
                    <div
                        class="flex flex-col gap-2 px-4 py-6 lg:p-6 bg-primary-light rounded-[18px] lg:rounded-[32px]">
                        <div
                            class="w-12 lg:w-[72px] h-12 lg:h-[72px] bg-container-icon rounded-full flex items-center justify-center">
                            <img src="../assets/vector/live-tv-w.svg" alt="Icon Live TV" class="w-6 lg:w-10">
                        </div>
                        <h3 class="text-base lg:text-2xl font-semibold">Live classes every week</h3>
                        <p class="text-sm lg:text-lg text-text font-normal">This is live session with our experienced
                            tutor & senior experts</p>
                    </div>
                    <div
                        class="flex flex-col gap-2 px-4 py-6 lg:p-6 bg-primary-light rounded-[18px] lg:rounded-[32px]">
                        <div
                            class="w-12 lg:w-[72px] h-12 lg:h-[72px] bg-container-icon rounded-full flex items-center justify-center">
                            <img src="../assets/vector/thinking-problem.svg" alt="Icon Thinking Problem"
                                class="w-6 lg:w-10">
                        </div>
                        <h3 class="text-base lg:text-2xl font-semibold">Analytical thinking test improvement</h3>
                        <p class="text-sm lg:text-lg text-text font-normal">Well designed-Evaluation to identify
                            student’s
                            capabilities when participating in company recruitment</p>
                    </div>
                    <div
                        class="flex flex-col gap-2 px-4 py-6 lg:p-6 bg-primary-light rounded-[18px] lg:rounded-[32px]">
                        <div
                            class="w-12 lg:w-[72px] h-12 lg:h-[72px] bg-container-icon rounded-full flex items-center justify-center">
                            <img src="../assets/vector/user.svg" alt="Icon User" class="w-6 lg:w-10">
                        </div>
                        <h3 class="text-base lg:text-2xl font-semibold">Limited student per class (avr max 35)</h3>
                        <p class="text-sm lg:text-lg text-text font-normal">Maximum 15-35 students per class to
                            maintain the effectiveness of learning in the class</p>
                    </div>
                    <div
                        class="flex flex-col gap-2 px-4 py-6 lg:p-6 bg-primary-light rounded-[18px] lg:rounded-[32px]">
                        <div
                            class="w-12 lg:w-[72px] h-12 lg:h-[72px] bg-container-icon rounded-full flex items-center justify-center">
                            <img src="../assets/vector/graduation-cap.svg" alt="Icon Live TV" class="w-6 lg:w-10">
                        </div>
                        <h3 class="text-base lg:text-2xl font-semibold">Tutor+ 4.0</h3>
                        <p class="text-sm lg:text-lg text-text font-normal">Tutor+ 4th generation is the newest service
                            for creating productivity group discussions with tutors via WhatsApp. No additional costs!
                        </p>
                    </div>
                    <div
                        class="flex flex-col gap-2 px-4 py-6 lg:p-6 bg-primary-light rounded-[18px] lg:rounded-[32px]">
                        <div
                            class="w-12 lg:w-[72px] h-12 lg:h-[72px] bg-container-icon rounded-full flex items-center justify-center">
                            <img src="../assets/vector/talk.svg" alt="Icon Talk" class="w-6 lg:w-10">
                        </div>
                        <h3 class="text-base lg:text-2xl font-semibold">Magic session clinic+</h3>
                        <p class="text-sm lg:text-lg text-text font-normal">Understanding deeper through magic session
                            clinic+ feature also you can request elective module of learning on this session. All for
                            you!
                        </p>
                    </div>
                    <div
                        class="flex flex-col gap-2 px-4 py-6 lg:p-6 bg-primary-light rounded-[18px] lg:rounded-[32px]">
                        <div
                            class="w-12 lg:w-[72px] h-12 lg:h-[72px] bg-container-icon rounded-full flex items-center justify-center">
                            <img src="../assets/vector/game.svg" alt="Icon Live TV" class="w-6 lg:w-10">
                        </div>
                        <h3 class="text-base lg:text-2xl font-semibold">Game & Hackathon</h3>
                        <p class="text-sm lg:text-lg text-text font-normal">Join our online or offline hackathon
                            (industry case & job simulation) with C-Level from 500Fortune company to boost your skill,
                            build portfolio, indulge your extrovert soul, and accelerate your network!</p>
                    </div>
                </div>
            </section>
            <section class="flex flex-col lg:flex-row gap-3 items-center" id="halal-guaranted">
                <div class="flex flex-row w-full justify-between">
                    <div class="flex flex-col gap-4">
                        <div
                            class="inline-flex items-center justify-center gap-2 px-4 w-fit h-[38px] lg:h-12 bg-chips/10 rounded-2xl lg:rounded-xl text-base lg:text-2xl text-chips font-medium">
                            <img src="../assets/vector/mosque.svg" alt="Icon Mosque" class="w-4 lg:w-6">
                            Halal Guaranteed
                        </div>
                        <h2 class="text-lg lg:text-3xl font-bold lg:font-medium text-text">Best resources, Halal at
                            all.
                        </h2>
                        <p class="hidden lg:flex">First Bootcamp Platform wihtout overpromise marketing campaign, real
                            result, focused on value of
                            people and using halal payment only to ensure your best learning experience. Our halal
                            commitment is prepared to brightening your future !
                            <br /> We provide installment without interest rate up to 6 months installment to help
                            people
                            from
                            everywhere afford our high quality training program.
                        </p>
                    </div>
                    <img src="../assets/img/halal-indonesia.png" alt="Logo Halal Indonesia"
                        class="w-[93px] lg:w-[200px]">
                </div>
                <p class="lg:hidden text-sm font-normal">First Bootcamp Platform wihtout overpromise marketing
                    campaign, real
                    result, focused on value of
                    people and using halal payment only to ensure your best learning experience. Our halal
                    commitment is prepared to brightening your future !
                    <br /> We provide installment without interest rate up to 6 months installment to help people
                    from
                    everywhere afford our high quality training program.
                </p>
            </section>
            <section id="alumni" class="bg-secondary p-4 lg:p-[30px] rounded-[18px] lg:rounded-[32px] text-white">
                <h2 class="text-lg lg:text-3xl font-bold lg:font-medium">Our Alumni & Student’s <span
                        class="text-primary">Experiences</span></h2>
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 lg:gap-6 mt-4 lg:mt-8">
                    <div class="flex-1 flex flex-col gap-6 rounded-3xl bg-secondary-light p-4">
                        <div class="inline-flex gap-2 items-center">
                            <img src="../assets/img/person-circle.png" alt="Hieronymus K Bali Picture"
                                class="w-[60px]">
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
                            <img src="../assets/img/person-circle1.png" alt="Agnes Friska C. P Picture"
                                class="w-[60px]">
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
                            <img src="../assets/img/person-circle2.png" alt="Balad Al Barokah Picture"
                                class="w-[60px]">
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
                            <img src="../assets/img/person-circle3.png" alt="Zulkhaidir Purwanto Picture"
                                class="w-[60px]">
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
            <section id="country-fees" class="flex flex-col">
                <h2 class="text-lg lg:text-3xl font-bold lg:font-medium text-text"><span
                        class="text-primary">Education Fees &
                        Countries</span>
                    <br /> Valuable for your future
                </h2>
                <p class="mt-2 text-sm lg:text-lg font-light">
                    Transparent & Halal Payment Options
                </p>
                <div class="flex flex-col-reverse lg:flex-row-reverse gap-4 mt-4">
                    <div
                        class="p-4 lg:px-[60px] lg:py-[30px] w-full border border-primary rounded-[18px] lg:rounded-[32px]">
                        <div class="flex flex-col gap-4">
                            <h3 class="text-lg lg:text-2xl text-text font-semibold text-center">International Student
                                <br /> (English & Turkiye)
                            </h3>
                            <h4
                                class="bg-primary-light rounded-full py-2 text-base lg:text-lg font-medium text-center">
                                Pricing
                                <br> USD 1,300
                            </h4>
                            <div class="inline-flex gap-2 lg:gap-3">
                                <img src="../assets/vector/check-circle.svg" alt="Icon Checkmark Circle"
                                    class="w-3.5 lg:w-5" />
                                <p class="text-sm lg:text-lg font-light">Lifetime career support</p>
                            </div>
                            <div class="inline-flex gap-2 lg:gap-3">
                                <img src="../assets/vector/check-circle.svg" alt="Icon Checkmark Circle"
                                    class="w-3.5 lg:w-5" />
                                <p class="text-sm lg:text-lg font-light">Unlimited live class session with mentor</p>
                            </div>
                            <div class="inline-flex gap-2 lg:gap-3">
                                <img src="../assets/vector/check-circle.svg" alt="Icon Checkmark Circle"
                                    class="w-3.5 lg:w-5" />
                                <p class="text-sm lg:text-lg font-light">Online materials</p>
                            </div>
                            <div class="inline-flex gap-2 lg:gap-3">
                                <img src="../assets/vector/check-circle.svg" alt="Icon Checkmark Circle"
                                    class="w-3.5 lg:w-5" />
                                <p class="text-sm lg:text-lg font-light">Magic session clinic+</p>
                            </div>
                            <div class="inline-flex gap-2 lg:gap-3">
                                <img src="../assets/vector/check-circle.svg" alt="Icon Checkmark Circle"
                                    class="w-3.5 lg:w-5" />
                                <p class="text-sm lg:text-lg font-light">Working Abroad Access</p>
                            </div>
                            <div class="inline-flex gap-2 lg:gap-3">
                                <img src="../assets/vector/check-circle.svg" alt="Icon Checkmark Circle"
                                    class="w-3.5 lg:w-5" />
                                <p class="text-sm lg:text-lg font-light">Global Expert</p>
                            </div>
                            <div class="inline-flex gap-2 lg:gap-3">
                                <img src="../assets/vector/check-circle.svg" alt="Icon Checkmark Circle"
                                    class="w-3.5 lg:w-5" />
                                <p class="text-sm lg:text-lg font-light">Down Payment Min 10%</p>
                            </div>
                            <div class="inline-flex gap-2 lg:gap-3">
                                <img src="../assets/vector/check-circle.svg" alt="Icon Checkmark Circle"
                                    class="w-3.5 lg:w-5" />
                                <p class="text-sm lg:text-lg font-light">30 Days money back guarantee</p>
                            </div>
                        </div>
                        <div class="flex flex-col gap-2 lg:gap-4 mt-6 lg:mt-8">
                            <a href="https://form.jotform.com/Consultant_Admission/non-sch-admission"
                                class="inline-flex justify-center items-center px-5 lg:px-10 h-10 lg:h-14 bg-primary rounded-full text-sm lg:text-lg text-white font-bold">
                                Pay in Installment
                            </a>
                            <a href="https://form.jotform.com/Consultant_Admission/non-sch-admission"
                                class="inline-flex justify-center items-center px-5 lg:px-10 h-10 lg:h-14 border border-primary rounded-full text-sm lg:text-lg text-primary font-bold">
                                Sign Up Now!!
                            </a>
                        </div>
                    </div>
                    <div class="p-4 lg:px-[60px] lg:py-[30px] w-full bg-primary/10 rounded-[18px] lg:rounded-[32px]">
                        <div class="flex flex-col gap-4">
                            <h3 class="text-lg lg:text-2xl text-text font-semibold text-center">Southeast Asia
                                <br /> (Bahasa Indonesia)
                            </h3>
                            <h4
                                class="bg-primary rounded-full py-2 text-base lg:text-lg text-white font-medium text-center">
                                Career
                                Accelerator
                                <br /> IDR 15,000,000
                            </h4>
                            <div class="inline-flex gap-2 lg:gap-3">
                                <img src="../assets/vector/check-circle.svg" alt="Icon Checkmark Circle"
                                    class="w-3.5 lg:w-5" />
                                <p class="text-sm lg:text-lg font-light">Lifetime career support</p>
                            </div>
                            <div class="inline-flex gap-2 lg:gap-3">
                                <img src="../assets/vector/check-circle.svg" alt="Icon Checkmark Circle"
                                    class="w-3.5 lg:w-5" />
                                <p class="text-sm lg:text-lg font-light">Unlimited live class session with mentor</p>
                            </div>
                            <div class="inline-flex gap-2 lg:gap-3">
                                <img src="../assets/vector/check-circle.svg" alt="Icon Checkmark Circle"
                                    class="w-3.5 lg:w-5" />
                                <p class="text-sm lg:text-lg font-light">Online materials</p>
                            </div>
                            <div class="inline-flex gap-2 lg:gap-3">
                                <img src="../assets/vector/check-circle.svg" alt="Icon Checkmark Circle"
                                    class="w-3.5 lg:w-5" />
                                <p class="text-sm lg:text-lg font-light">Hybrid offline</p>
                            </div>
                            <div class="inline-flex gap-2 lg:gap-3">
                                <img src="../assets/vector/check-circle.svg" alt="Icon Checkmark Circle"
                                    class="w-3.5 lg:w-5" />
                                <p class="text-sm lg:text-lg font-light">Magic session clinic+</p>
                            </div>
                            <div class="inline-flex gap-2 lg:gap-3">
                                <img src="../assets/vector/check-circle.svg" alt="Icon Checkmark Circle"
                                    class="w-3.5 lg:w-5" />
                                <p class="text-sm lg:text-lg font-light">Working Abroad Access</p>
                            </div>
                            <div class="inline-flex gap-2 lg:gap-3">
                                <img src="../assets/vector/check-circle.svg" alt="Icon Checkmark Circle"
                                    class="w-3.5 lg:w-5" />
                                <p class="text-sm lg:text-lg font-light">Global Expert</p>
                            </div>
                            <div class="inline-flex gap-2 lg:gap-3">
                                <img src="../assets/vector/check-circle.svg" alt="Icon Checkmark Circle"
                                    class="w-3.5 lg:w-5" />
                                <p class="text-sm lg:text-lg font-light">Down Payment Min 10%</p>
                            </div>
                        </div>
                        <div class="flex flex-col gap-2 lg:gap-4 mt-6 lg:mt-8">
                            <a href="https://form.jotform.com/Consultant_Admission/non-sch-admission"
                                class="inline-flex justify-center items-center px-5 lg:px-10 h-10 lg:h-14 bg-primary rounded-full text-sm lg:text-lg text-white font-bold">
                                Pay in Installment
                            </a>
                            <a href="https://form.jotform.com/Consultant_Admission/non-sch-admission"
                                class="inline-flex justify-center items-center px-5 lg:px-10 h-10 lg:h-14 border border-primary bg-white rounded-full text-sm lg:text-lg text-primary font-bold">
                                Sign Up Now!!
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <section id="faq">
                <h2 class="text-lg lg:text-3xl font-bold lg:font-medium text-text">Wondering about our Bootcamp?
                </h2>
                <p class="mt-2 text-sm lg:text-lg font-light">
                    Here are Frequently asked questions from our previous students
                </p>
                <div id="accordion-collapse" class="mt-6">
                    <h4 id="accordion-collapse-heading-1"
                        onclick="accordian(event, 'bottom-accordion-collapse-body-1')">
                        <button type="button"
                            class="flex gap-2 items-center justify-between w-full px-5 lg:px-8 py-2 bg-primary-light rounded-full"
                            data-accordion-target="#accordion-collapse-body-1" aria-expanded="true"
                            aria-controls="accordion-collapse-body-1">
                            <span class="font-medium text-text text-base lg:text-lg text-start">Do you provide
                                installment?</span>
                            <img src="../assets/vector/expand-more-b.svg" alt="Icon Expand More">
                        </button>
                    </h4>
                    <div id="bottom-accordion-collapse-body-1" aria-labelledby="accordion-collapse-heading-1">
                        <p
                            class="accordion-animator h-auto transition-all duration-500 ease-out overflow-hidden px-4 lg:px-8 py-4 bg-white rounded-[32px] text-text text-sm lg:text-lg font-light drop-shadow-md">
                            Yes but WITHOUT INTEREST ! Your installment will be provided by our financial aid department
                            to avoid you from interest rate! 100% Halal guaranteed.
                        </p>
                    </div>
                    <h4 id="accordion-collapse-heading-2"
                        onclick="accordian(event, 'bottom-accordion-collapse-body-2')">
                        <button type="button"
                            class="flex gap-2 items-center justify-between w-full mt-4 px-5 lg:px-8 py-2 bg-primary-light rounded-full"
                            data-accordion-target="#accordion-collapse-body-2" aria-expanded="false"
                            aria-controls="accordion-collapse-body-2">
                            <span class="font-medium text-text text-base lg:text-lg text-start">Do you provide
                                consultation
                                directly with
                                tutor?</span>
                            <img src="../assets/vector/expand-more-b.svg" alt="Icon Expand More">
                        </button>
                    </h4>
                    <div id="bottom-accordion-collapse-body-2" aria-labelledby="accordion-collapse-heading-2">
                        <p
                            class="accordion-animator h-[0px] transition-all duration-500 ease-out overflow-hidden bg-white rounded-[32px] text-text text-sm lg:text-lg font-light drop-shadow-md">
                            Yes we do provide the session including zoom session through magic session clinic
                        </p>
                    </div>
                    <h4 id="accordion-collapse-heading-3"
                        onclick="accordian(event, 'bottom-accordion-collapse-body-3')">
                        <button type="button"
                            class="flex gap-2 items-center justify-between w-full mt-4 px-5 lg:px-8 py-2 bg-primary-light rounded-full"
                            data-accordion-target="#accordion-collapse-body-3" aria-expanded="false"
                            aria-controls="accordion-collapse-body-3">
                            <span class="font-medium text-text text-base lg:text-lg text-start">Do you have make up
                                class if i
                                miss the
                                session?</span>
                            <img src="../assets/vector/expand-more-b.svg" alt="Icon Expand More">
                        </button>
                    </h4>
                    <div id="bottom-accordion-collapse-body-3" aria-labelledby="accordion-collapse-heading-3">
                        <p
                            class="accordion-animator h-[0px] transition-all duration-500 ease-out overflow-hidden bg-white rounded-[32px] text-text text-sm lg:text-lg font-light drop-shadow-md">
                            Yes we do provide the session including zoom session through magic session clinic
                        </p>
                    </div>
                    <h4 id="accordion-collapse-heading-4"
                        onclick="accordian(event, 'bottom-accordion-collapse-body-4')">
                        <button type="button"
                            class="flex gap-2 items-center justify-between w-full mt-4 px-5 lg:px-8 py-2 bg-primary-light rounded-full"
                            data-accordion-target="#accordion-collapse-body-4" aria-expanded="false"
                            aria-controls="accordion-collapse-body-4">
                            <span class="font-medium text-text text-base lg:text-lg text-start">Maximum age to join
                                this program
                                ?</span>
                            <img src="../assets/vector/expand-more-b.svg" alt="Icon Expand More">
                        </button>
                    </h4>
                    <div id="bottom-accordion-collapse-body-4" aria-labelledby="accordion-collapse-heading-4">
                        <p
                            class="accordion-animator h-[0px] transition-all duration-500 ease-out overflow-hidden bg-white rounded-[32px] text-text text-sm lg:text-lg font-light drop-shadow-md">
                            We appreciate everyone to learn digital and tech skill !
                            <br />
                            <br />No discrimination of age, sex, and race to learn this session. However some our
                            program only conducted in Malay/indonesian language. Ask our admission for International
                            Program
                        </p>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <div class="z-50 lg:hidden flex justify-center fixed bottom-0 left-0 px-2 pt-4 pb-6 w-full bg-white">
        <a href="#program"
            class="inline-flex justify-center items-center w-full h-14 bg-primary rounded-full text-lg text-white font-bold">
            Apply Now
        </a>
    </div>
    <x-footer />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('js') }}/main.js"></script>
    <script src="{{ asset('js') }}/ai.js"></script>
</body>

</html>
