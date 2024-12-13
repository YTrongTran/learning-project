@extends('layouts.main') @section('title', 'Home') @section('content')
<div class="banner-homepage">
    <div class="container">
        <div class="flex justify-between mt-20 items-center border-b-4 border-rose-900">
            <div class="w-3/5 flex flex-col">
                <h1 class="text-rose-900 font-bold text-5xl mb-4">
                    TRUNG TÂM ANH NGỮ TỰ NHIÊN
                </h1>
                <h2 class="text-3xl font-bold text-yellow-600 mb-10">
                    NATURAL ENGLISH CENTER
                </h2>
                <p class="mb-10 text-gray-600">
                    NES tự hào là một trong những trung tâm Anh ngữ hàng đầu,
                    chúng tôi chuyên tâm vào việc xây dựng cơ sở hạ tầng giáo
                    dục vững chắc, giúp học viên tiếp cận kiến thức một cách tự
                    nhiên và dễ dàng nhất. Với đội ngũ giáo viên giàu kinh
                    nghiệm và đam mê, chúng tôi cam kết đem đến cho học viên sự
                    tự tin trong việc sử dụng tiếng Anh, từ việc giao tiếp hàng
                    ngày đến việc áp dụng trong công việc và học tập.
                </p>
                <a href="/thi-thu" class="btn-primary w-fit">Thi thử nhận kết quả ngay</a>
            </div>
            <div>
                <img src="/banner-home.avif" alt="" />
            </div>
        </div>

    </div>
    <div class="bg-rose-50 py-20">
        <div class="container">
            <h2 class="text-4xl text-rose-900 font-bold text-center mb-10">KHOÁ HỆ THỐNG GIÁO DỤC</h2>
            <div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- JumpStart Card -->
                    <div
                        class="group bg-blue-900 rounded-xl overflow-hidden transition-all duration-500 cursor-pointer hover:bg-white">
                        <div class="relative">
                            <img src="{{ asset('images/card-blog.webp') }}" alt="Professional in classroom"
                                class="w-full h-48 object-cover" />
                            <span
                                class="absolute top-4 left-4 bg-white/90 text-rose-900 px-3 py-1 rounded-full text-sm font-semibold group-hover:text-white group-hover:bg-rose-900 transition-colors">
                                BUSINESS ENGLISH
                            </span>
                        </div>
                        <div class="p-6">
                            <h3
                                class="text-xl font-semibold mb-1 text-white group-hover:text-blue-900 transition-colors">
                                Tiếng Anh Chuyên ngành
                            </h3>
                            <p class="text-white mb-4 group-hover:text-blue-900 transition-colors">(cho người đi làm)
                            </p>
                            <a href="#"
                                class="inline-flex items-center text-white font-bold text-xl hover:underline group-hover:text-blue-900 transition-colors">
                                Khám phá
                                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" class="group-hover:stroke-blue-900 transition-colors">
                                    <path d="M5 12h14m-7-7l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- Super Juniors Card -->
                    <div
                        class="group bg-blue-900 rounded-xl overflow-hidden transition-all duration-500 cursor-pointer hover:bg-white">
                        <div class="relative">
                            <img src="{{ asset('images/card-blog.webp') }}" alt="Professional in classroom"
                                class="w-full h-48 object-cover" />
                            <span
                                class="absolute top-4 left-4 bg-white/90 text-rose-900 px-3 py-1 rounded-full text-sm font-semibold group-hover:text-white group-hover:bg-rose-900 transition-colors">
                                BUSINESS ENGLISH
                            </span>
                        </div>
                        <div class="p-6">
                            <h3
                                class="text-xl font-semibold mb-1 text-white group-hover:text-blue-900 transition-colors">
                                Tiếng Anh Chuyên ngành
                            </h3>
                            <p class="text-white mb-4 group-hover:text-blue-900 transition-colors">(cho người đi làm)
                            </p>
                            <a href="#"
                                class="inline-flex items-center text-white font-bold text-xl hover:underline group-hover:text-blue-900 transition-colors">
                                Khám phá
                                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" class="group-hover:stroke-blue-900 transition-colors">
                                    <path d="M5 12h14m-7-7l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- Smart Teens Card -->
                    <div
                        class="group bg-blue-900 rounded-xl overflow-hidden transition-all duration-500 cursor-pointer hover:bg-white">
                        <div class="relative">
                            <img src="{{ asset('images/card-blog.webp') }}" alt="Professional in classroom"
                                class="w-full h-48 object-cover" />
                            <span
                                class="absolute top-4 left-4 bg-white/90 text-rose-900 px-3 py-1 rounded-full text-sm font-semibold group-hover:text-white group-hover:bg-rose-900 transition-colors">
                                BUSINESS ENGLISH
                            </span>
                        </div>
                        <div class="p-6">
                            <h3
                                class="text-xl font-semibold mb-1 text-white group-hover:text-blue-900 transition-colors">
                                Tiếng Anh Chuyên ngành
                            </h3>
                            <p class="text-white mb-4 group-hover:text-blue-900 transition-colors">(cho người đi làm)
                            </p>
                            <a href="#"
                                class="inline-flex items-center text-white font-bold text-xl hover:underline group-hover:text-blue-900 transition-colors">
                                Khám phá
                                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" class="group-hover:stroke-blue-900 transition-colors">
                                    <path d="M5 12h14m-7-7l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- Du Hoc Card -->
                    <div
                        class="group bg-blue-900 rounded-xl overflow-hidden transition-all duration-500 cursor-pointer hover:bg-white">
                        <div class="relative">
                            <img src="{{ asset('images/card-blog.webp') }}" alt="Professional in classroom"
                                class="w-full h-48 object-cover" />
                            <span
                                class="absolute top-4 left-4 bg-white/90 text-rose-900 px-3 py-1 rounded-full text-sm font-semibold group-hover:text-white group-hover:bg-rose-900 transition-colors">
                                BUSINESS ENGLISH
                            </span>
                        </div>
                        <div class="p-6">
                            <h3
                                class="text-xl font-semibold mb-1 text-white group-hover:text-blue-900 transition-colors">
                                Tiếng Anh Chuyên ngành
                            </h3>
                            <p class="text-white mb-4 group-hover:text-blue-900 transition-colors">(cho người đi làm)
                            </p>
                            <a href="#"
                                class="inline-flex items-center text-white font-bold text-xl hover:underline group-hover:text-blue-900 transition-colors">
                                Khám phá
                                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" class="group-hover:stroke-blue-900 transition-colors">
                                    <path d="M5 12h14m-7-7l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- Exam English Card -->
                    <div
                        class="group bg-blue-900 rounded-xl overflow-hidden transition-all duration-500 cursor-pointer hover:bg-white">
                        <div class="relative">
                            <img src="{{ asset('images/card-blog.webp') }}" alt="Professional in classroom"
                                class="w-full h-48 object-cover" />
                            <span
                                class="absolute top-4 left-4 bg-white/90 text-rose-900 px-3 py-1 rounded-full text-sm font-semibold group-hover:text-white group-hover:bg-rose-900 transition-colors">
                                BUSINESS ENGLISH
                            </span>
                        </div>
                        <div class="p-6">
                            <h3
                                class="text-xl font-semibold mb-1 text-white group-hover:text-blue-900 transition-colors">
                                Tiếng Anh Chuyên ngành
                            </h3>
                            <p class="text-white mb-4 group-hover:text-blue-900 transition-colors">(cho người đi làm)
                            </p>
                            <a href="#"
                                class="inline-flex items-center text-white font-bold text-xl hover:underline group-hover:text-blue-900 transition-colors">
                                Khám phá
                                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" class="group-hover:stroke-blue-900 transition-colors">
                                    <path d="M5 12h14m-7-7l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- Business English Card -->
                    <div
                        class="group bg-blue-900 rounded-xl overflow-hidden transition-all duration-500 cursor-pointer hover:bg-white">
                        <div class="relative">
                            <img src="{{ asset('images/card-blog.webp') }}" alt="Professional in classroom"
                                class="w-full h-48 object-cover" />
                            <span
                                class="absolute top-4 left-4 bg-white/90 text-rose-900 px-3 py-1 rounded-full text-sm font-semibold group-hover:text-white group-hover:bg-rose-900 transition-colors">
                                BUSINESS ENGLISH
                            </span>
                        </div>
                        <div class="p-6">
                            <h3
                                class="text-xl font-semibold mb-1 text-white group-hover:text-blue-900 transition-colors">
                                Tiếng Anh Chuyên ngành
                            </h3>
                            <p class="text-white mb-4 group-hover:text-blue-900 transition-colors">(cho người đi làm)
                            </p>
                            <a href="#"
                                class="inline-flex items-center text-white font-bold text-xl hover:underline group-hover:text-blue-900 transition-colors">
                                Khám phá
                                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" class="group-hover:stroke-blue-900 transition-colors">
                                    <path d="M5 12h14m-7-7l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="p-20">
        <div class="container">
            <h2 class="text-4xl text-rose-900 font-bold text-center mb-10">BÀI VIẾT</h2>
            </h2>
            <x-blog-components data=""></x-blog-components>
        </div>
    </div>
    <div class="bg-rose-50 p-20">
        <x-form-contact-component></x-form-contact-component>
    </div>
</div>

@stop