@extends('_layouts.master')

@section('body')
    <section class="container max-w-6xl mx-auto px-6 py-10 md:py-12">
        <h1 class="uppercase py-5 font-extrabold mx-auto text-center justify-center text-4xl">{{ $page->siteName }}</h1>
        <div class="flex flex-col-reverse mb-10 lg:flex-row lg:mb-24">
            <div class="mt-10 mb-14">
                <div class="lg:flex grid space-x-6 lg:pb-11 pb-5">
                    <div class="flex-shrink-0">
                        <img src="/assets/img/logo-large.jpeg" alt="{{ $page->siteName }} large logo"
                            class="mx-auto rounded-md w-64 h-64">
                    </div>
                    <div class="grid lg:text-left text-center">

                        <h2 class="text-3xl font-bold mb-4">Hi, I'm <span class="uppercase">Haziq</span>!</h2>
                        <div class="text-justify lg:w-3/4 w-full">
                            <p class="font-mono text-sm mb-2">
                                Full-Stack developer based in Terengganu. I make some
                                <span class="font-bold"><a href="#project">projects</a></span> here and they're kinda dope!
                            </p>
                            <p class="font-mono text-sm">
                                I have over 6 months of hands-on experience in
                                <span class="font-bold bg-white text-yellow-400">Laravel, Tailwind CSS, Alpine.js,
                                    Livewire</span>
                                and
                                <span class="font-bold bg-white text-yellow-400">Node.js</span>. I enjoy building responsive
                                web
                                applications that
                                solve
                                real-world problems. Currently, I'm focused on projects that connect people and promote
                                local
                                businesses, leveraging my skills in
                                <span class="italic">full-stack development</span> and <span class="italic">UI/UX
                                    design</span>.
                            </p>

                        </div>
                        <div class="mx-auto py-2"> <a href="mailto:syhaziqdev@gmail.com"
                                title="{{ $page->siteName }} getting started" class="rounded mr-4 py-1 px-3"><span
                                    class="relative inline-block text-base group">
                                    <span
                                        class="relative z-10 block px-5 py-3 overflow-hidden font-medium leading-tight text-gray-800 border-2 border-gray-900 rounded-lg ">
                                        <span class="absolute inset-0 w-full h-full px-5 py-3 rounded-lg bg-gray-50"></span>
                                        <span
                                            class="absolute left-0 w-32 h-32 -ml-2 origin-top-right -rotate-90 -translate-x-full translate-y-10 bg-gray-900 "></span>
                                        <span class="relative">Get Started</span>
                                    </span>
                                    <span
                                        class="absolute bottom-0 right-0 w-full h-10 -mb-1 -mr-1 bg-gray-900 rounded-lg "></span>
                                </span></a></div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="block my-16 border lg:hidden">
        <!-- Project Section -->
        <div class="container mx-auto mt-12">
            <div>
                <h1 class="text-4xl font-bold text-center uppercase text-gray-800">Past Project</h1>
            </div>
            <div id="project" class="md:flex lg:mt-10 -mx-2">
                <!-- MySPM Project -->
                <div class="mb-8 mx-3 px-2 md:w-1/3">
                    <img src="/assets/img/epens.png" class="rounded-t-lg object-cover w-full" alt="MySPM">
                    <div class="p-4 shadow-md">
                        <h4 class="text-xl font-semibold">MySPM</h4>
                        <p class="text-sm text-gray-600">A management website for a company</p>
                        <div class="flex flex-wrap mt-2">
                            <span class="bg-slate-600 text-slate-100 px-2 py-1 rounded-md text-xs mr-2 mb-2">Laravel</span>
                            <span
                                class="bg-slate-600 text-slate-100 px-2 py-1 rounded-md text-xs mr-2 mb-2">Alpine.js</span>
                            <span class="bg-slate-600 text-slate-100 px-2 py-1 rounded-md text-xs mr-2 mb-2">Livewire</span>
                            <span class="bg-slate-600 text-slate-100 px-2 py-1 rounded-md text-xs mr-2 mb-2">Node.js</span>
                            <span class="bg-slate-600 text-slate-100 px-2 py-1 rounded-md text-xs mb-2">Tailwind</span>
                        </div>
                    </div>
                </div>

                  <!-- Capybara Project -->
                <div class="mb-8 mx-3 px-2 md:w-1/3">
                <a href="https://yeet-a-capybara.vercel.app"><img src="/assets/img/" class="rounded-t-lg object-cover w-full" alt="yeet-that-capybara">
                </a> 
                    <div class="p-4 shadow-md">
                        <h4 class="text-xl font-semibold">Yeet that Capybara</h4>
                        <p class="text-sm text-gray-600">A simple game that lauch capybara to the sky</p>
                        <div class="flex flex-wrap mt-2">
                            <span class="bg-slate-600 text-slate-100 px-2 py-1 rounded-md text-xs mr-2 mb-2">Laravel</span>
                            <span class="bg-slate-600 text-slate-100 px-2 py-1 rounded-md text-xs mr-2 mb-2">Livewire</span>
                                       <span class="bg-slate-600 text-slate-100 px-2 py-1 rounded-md text-xs mb-2">Php</span>
                            <span class="bg-slate-600 text-slate-100 px-2 py-1 rounded-md text-xs mb-2">Tailwind</span>
                        </div>
                    </div>
                </div>
                <!-- Lapacee Project -->
                <div class="mb-8 mx-3 px-2 md:w-1/3">
                    <a href="https://lapacee.com"><img src="/assets/img/lapacee.png"
                            class="rounded-t-lg object-cover w-full" alt="Lapacee"></a>
                    <div class="p-4 shadow-md">
                        <h4 class="text-xl font-semibold">Lapacee</h4>
                        <p class="text-sm text-gray-600">A local social network + special feature</p>
                        <div class="flex flex-wrap mt-2">
                            <span class="bg-slate-600 text-slate-100 px-2 py-1 rounded-md text-xs mr-2 mb-2">Laravel</span>
                            <span class="bg-slate-600 text-slate-100 px-2 py-1 rounded-md text-xs mr-2 mb-2">Livewire</span>
                            <span class="bg-slate-600 text-slate-100 px-2 py-1 rounded-md text-xs mr-2 mb-2">Node.js</span>
                            <span class="bg-slate-600 text-slate-100 px-2 py-1 rounded-md text-xs mb-2">Tailwind</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr class="block my-8 border lg:hidden">
        <div class="container mx-auto my-12">
            <!-- Header Section -->
            <header class="text-center">
                <h1 class="text-4xl font-bold uppercase text-gray-800">Freelance Web Design</h1>
                <p class="text-lg text-gray-600 mt-2">Affordable and professional landing pages for your business</p>
            </header>

            <!-- Services Section -->
            <section class="mt-12">
                <h2 class="text-3xl font-semibold text-gray-800 mb-6">What We Offer</h2>
                <div class="grid md:grid-cols-3 gap-6">
                    <div class="text-center p-4 border rounded-lg shadow-md">
                        <img src="/assets/img/icon-window.svg" class="h-12 w-12 mx-auto" alt="Templating">
                        <h3 class="text-2xl text-blue-900 mt-4">Custom Landing Pages</h3>
                        <p class="text-gray-600 mt-2">Tailored designs with Jigsaw & Tailwind CSS for a professional online
                            presence.</p>
                    </div>
                    <div class="text-center p-4 border rounded-lg shadow-md">
                        <img src="/assets/img/icon-terminal.svg" class="h-12 w-12 mx-auto" alt="Markdown">
                        <h3 class="text-2xl text-blue-900 mt-4">Portfolio Updates</h3>
                        <p class="text-gray-600 mt-2">Showcase your work with stunning mockups and GitHub integration.</p>
                    </div>
                    <div class="text-center p-4 border rounded-lg shadow-md">
                        <img src="/assets/img/icon-stack.svg" class="h-12 w-12 mx-auto" alt="Laravel Mix">
                        <h3 class="text-2xl text-blue-900 mt-4">SEO & Analytics</h3>
                        <p class="text-gray-600 mt-2">Basic SEO, Google Analytics, and Search Console setup included.</p>
                    </div>
                </div>
            </section>

            <!-- Pricing Section -->
            <section class="mt-12">
                <h2 class="text-3xl font-semibold text-gray-800 mb-6">Pricing</h2>
                <div class="grid md:grid-cols-3 gap-6">
                    <div class="p-4 border rounded-lg shadow-md">
                        <h3 class="text-2xl font-bold text-blue-900 text-center mb-4">Basic Package</h3>
                        <ul class="list-disc ml-6 text-gray-600">
                            <li>Custom landing page design</li>
                            <li>Google Analytics & Search Console setup</li>
                            <li>Basic SEO configuration</li>
                        </ul>
                        <p class="text-center text-xl text-gray-800 font-bold mt-4">RM 500 - RM 700</p>
                        <p class="text-center text-sm text-gray-600">(Delivery: 1 week)</p>
                    </div>
                </div>
            </section>

            <!-- Contact Section -->
            <section class="mt-12">
                <h2 class="text-3xl font-semibold text-gray-800 mb-6">Let's Work Together</h2>
                <p class="text-lg text-gray-600 mb-6">Contact me through social media or email to discuss your project.
                    Clear scope, timeline, and payment methods will be defined for each project.</p>
                <div class="flex space-x-6">
                    <a href="https://www.linkedin.com/in/syhaziqdev" target="_blank"
                        class="text-gray-400 hover:text-white">
                        <svg class="w-6 h-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path
                                d="M4.98 3.5C4.98 4.88 3.87 6 2.5 6S0 4.88 0 3.5 1.12 1 2.5 1s2.48 1.12 2.48 2.5zM0 22h5V7H0v15zm8-15v15h5v-8.35c0-3.93 5-4.25 5 0V22h5v-9.62c0-6.07-6.56-5.85-8.55-2.87V7h-5z" />
                        </svg>
                    </a>
                    <a href="https://github.com/Azza-arch" target="_blank" class="text-gray-400 hover:text-white">
                        <svg class="w-6 h-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path
                                d="M12 .297c-6.63 0-12 5.373-12 12 0 5.302 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577v-2.165c-3.338.726-4.033-1.415-4.033-1.415-.546-1.387-1.333-1.757-1.333-1.757-1.089-.745.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.834 2.809 1.304 3.495.997.108-.775.418-1.305.762-1.605-2.665-.305-5.466-1.333-5.466-5.932 0-1.31.469-2.381 1.236-3.22-.124-.303-.536-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.398 3.003-.404 1.02.006 2.047.138 3.006.404 2.289-1.553 3.295-1.23 3.295-1.23.656 1.653.244 2.874.12 3.176.77.839 1.233 1.91 1.233 3.22 0 4.61-2.807 5.624-5.479 5.921.43.37.814 1.096.814 2.21v3.283c0 .322.216.694.824.576C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12" />
                        </svg>
                    </a>
                    <a href="mailto:syhaziqdev@gmail.com" class="text-blue-500 hover:underline">Email</a>
                </div>
        </div>
    </section>
    </div>



    </section>
@endsection
