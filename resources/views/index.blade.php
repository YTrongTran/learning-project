@extends('layouts.main') @section('title', 'Home') @section('content')
<div class="banner-homepage">
    <div class="container">
        <div class="flex justify-between my-20 items-center border-b-4 border-rose-900">
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
                <button class="btn-primary w-fit">Đăng ký ngay</button>
            </div>
            <div>
                <img src="/banner-home.avif" alt="" />
            </div>
        </div>
        <div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- JumpStart Card -->
                <div class="bg-sky-100 rounded-xl overflow-hidden">
                    <div class="relative">
                        <img
                            src="https://placehold.co/400x200"
                            alt="Young student in astronaut helmet"
                            class="w-full h-48 object-cover"
                        />
                        <span
                            class="absolute top-4 left-4 bg-white/90 text-blue-600 px-3 py-1 rounded-full text-sm font-semibold"
                        >
                            JUMPSTART
                        </span>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-1">
                            Tiếng Anh Mầm non
                        </h3>
                        <p class="text-gray-600 mb-4">(3-6 tuổi)</p>
                        <a
                            href="#"
                            class="inline-flex items-center text-blue-600 font-medium"
                        >
                            Khám phá
                            <svg
                                class="w-4 h-4 ml-2"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                            >
                                <path d="M5 12h14m-7-7l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Super Juniors Card -->
                <div class="bg-sky-100 rounded-xl overflow-hidden">
                    <div class="relative">
                        <img
                            src="https://placehold.co/400x200"
                            alt="Elementary students learning together"
                            class="w-full h-48 object-cover"
                        />
                        <span
                            class="absolute top-4 left-4 bg-white/90 text-blue-600 px-3 py-1 rounded-full text-sm font-semibold"
                        >
                            SUPER JUNIORS
                        </span>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-1">
                            Tiếng Anh Tiểu học
                        </h3>
                        <p class="text-gray-600 mb-4">(6-11 tuổi)</p>
                        <a
                            href="#"
                            class="inline-flex items-center text-blue-600 font-medium"
                        >
                            Khám phá
                            <svg
                                class="w-4 h-4 ml-2"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                            >
                                <path d="M5 12h14m-7-7l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Smart Teens Card -->
                <div class="bg-sky-100 rounded-xl overflow-hidden">
                    <div class="relative">
                        <img
                            src="https://placehold.co/400x200"
                            alt="Secondary students with laptop"
                            class="w-full h-48 object-cover"
                        />
                        <span
                            class="absolute top-4 left-4 bg-white/90 text-blue-600 px-3 py-1 rounded-full text-sm font-semibold"
                        >
                            SMART TEENS
                        </span>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-1">
                            Tiếng Anh Trung học
                        </h3>
                        <p class="text-gray-600 mb-4">(11-16 tuổi)</p>
                        <a
                            href="#"
                            class="inline-flex items-center text-blue-600 font-medium"
                        >
                            Khám phá
                            <svg
                                class="w-4 h-4 ml-2"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                            >
                                <path d="M5 12h14m-7-7l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Du Hoc Card -->
                <div class="bg-sky-100 rounded-xl overflow-hidden">
                    <div class="relative">
                        <img
                            src="https://placehold.co/400x200"
                            alt="International students taking selfie"
                            class="w-full h-48 object-cover"
                        />
                        <span
                            class="absolute top-4 left-4 bg-white/90 text-blue-600 px-3 py-1 rounded-full text-sm font-semibold"
                        >
                            DU HOC
                        </span>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-1">
                            Du học ngắn & dài hạn
                        </h3>
                        <p class="text-gray-600 mb-4">(9-17 tuổi)</p>
                        <a
                            href="#"
                            class="inline-flex items-center text-blue-600 font-medium"
                        >
                            Khám phá
                            <svg
                                class="w-4 h-4 ml-2"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                            >
                                <path d="M5 12h14m-7-7l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Exam English Card -->
                <div class="bg-sky-100 rounded-xl overflow-hidden">
                    <div class="relative">
                        <img
                            src="https://placehold.co/400x200"
                            alt="Student studying at desk"
                            class="w-full h-48 object-cover"
                        />
                        <span
                            class="absolute top-4 left-4 bg-white/90 text-blue-600 px-3 py-1 rounded-full text-sm font-semibold"
                        >
                            EXAM ENGLISH
                        </span>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-1">
                            Khóa học Luyện thi
                        </h3>
                        <p class="text-gray-600 mb-4">IELTS - SAT</p>
                        <a
                            href="#"
                            class="inline-flex items-center text-blue-600 font-medium"
                        >
                            Khám phá
                            <svg
                                class="w-4 h-4 ml-2"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                            >
                                <path d="M5 12h14m-7-7l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Business English Card -->
                <div class="bg-sky-100 rounded-xl overflow-hidden">
                    <div class="relative">
                        <img
                            src="https://placehold.co/400x200"
                            alt="Professional in classroom"
                            class="w-full h-48 object-cover"
                        />
                        <span
                            class="absolute top-4 left-4 bg-white/90 text-blue-600 px-3 py-1 rounded-full text-sm font-semibold"
                        >
                            BUSINESS ENGLISH
                        </span>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-1">
                            Tiếng Anh Chuyên ngành
                        </h3>
                        <p class="text-gray-600 mb-4">(cho người đi làm)</p>
                        <a
                            href="#"
                            class="inline-flex items-center text-blue-600 font-medium"
                        >
                            Khám phá
                            <svg
                                class="w-4 h-4 ml-2"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                            >
                                <path d="M5 12h14m-7-7l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
