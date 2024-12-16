@extends('layouts.main') @section('title', 'Blog') @section('content')
<div class="">
    <div class="relative w-full overflow-hidden rounded-3xl" style="max-height: 600px;">
        <div class="relative aspect-[16/9] w-full">
            <img src="{{ asset('images/banner-blog.png') }}" alt="Students writing during exam"
                class="absolute inset-0 w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-r from-white/50 to-transparent"></div>

            <!-- Content Container -->
            <div class="container absolute inset-0 flex items-center">
                <div class="relative ml-8 max-w-xl rounded-[2rem] bg-white p-8 shadow-lg">
                    <!-- Title -->
                    <h2 class="mb-4 text-2xl font-bold text-[#1a237e]">
                        LỘ TRÌNH LUYỆN THI IELTS CẤP TỐC TRONG 3 THÁNG, CAM KẾT TĂNG 1.0
                    </h2>

                    <!-- Description -->
                    <p class="mb-6 text-gray-600">
                        Làm sao luyện thi IELTS cấp tốc trong 3 tháng thành công? Với khối lượng kiến thức học thuật khó
                        và quỹ thời gian hẹp, các thí sinh trong giai đoạn này cần có tư duy và chiến lược đúng đắn...
                    </p>

                    <!-- Tags and Button -->
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-4">
                            <span class="flex items-center gap-2">
                                <span class="h-2 w-2 rounded-full bg-red-500"></span>
                                <span class="text-sm font-medium">IELTS</span>
                            </span>
                            <span class="text-sm text-gray-500">09/07/2024</span>
                        </div>

                        <button
                            class="flex items-center gap-2 rounded-full bg-red-500 px-6 py-2 text-white transition hover:bg-red-600">
                            ĐỌC THÊM
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M5.25 5.653c0-.856.917-1.398 1.667-.986l11.54 6.347a1.125 1.125 0 0 1 0 1.972l-11.54 6.347c-.75.412-1.667-.13-1.667-.986V5.653Z" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-6">
        <nav class="bg-rose-900 px-4 py-4">
            <div class="container mx-auto flex flex-wrap justify-center gap-4">
                <a href="#"
                    class="rounded-full bg-white px-6 py-2 text-[#1e2f6f] font-medium hover:bg-gray-100 transition-colors">
                    IELTS
                </a>
                <a href="#"
                    class="rounded-full bg-white px-6 py-2 text-[#1e2f6f] font-medium hover:bg-gray-100 transition-colors">
                    Học Tiếng Anh Cùng Bé
                </a>
                <a href="#"
                    class="rounded-full bg-white px-6 py-2 text-[#1e2f6f] font-medium hover:bg-gray-100 transition-colors">
                    Tiếng Anh Cơ Bản
                </a>
                <a href="#"
                    class="rounded-full bg-white px-6 py-2 text-[#1e2f6f] font-medium hover:bg-gray-100 transition-colors">
                    Tiếng Anh Nâng Cao
                </a>
                <a href="#"
                    class="rounded-full bg-white px-6 py-2 text-[#1e2f6f] font-medium hover:bg-gray-100 transition-colors">
                    Tiếng Anh Giao Tiếp
                </a>
            </div>
        </nav>
    </div>

    <div class="lg:p-20 px-4 py-10">
        <div class="mx-auto max-w-5xl flex flex-col lg:flex-row gap-4">
            <!-- Left side - 4 cards in 2x2 grid -->
            <div class="lg:w-1/2 grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="bg-white rounded-3xl p-6 shadow-lg">
                    <img src="{{ asset('images/card-blog.webp') }}" alt="OVI Parents" class="w-full h-40 object-cover rounded-2xl mb-4">
                    <h2 class="text-navy-800 text-xl font-bold mb-4">
                        Đặt lịch phụ đạo cho con nay chủ động hơn, tiện lợi hơn với ứng dụng OVI Parents
                    </h2>
                    <button class="bg-red-600 text-white px-6 py-2 rounded-full flex items-center mt-4">
                        Xem thêm
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>
                <div class="bg-white rounded-3xl p-6 shadow-lg">
                    <img src="{{ asset('images/card-blog.webp') }}" alt="OVI Parents" class="w-full h-40 object-cover rounded-2xl mb-4">
                    <h2 class="text-navy-800 text-xl font-bold mb-4">
                        Đặt lịch phụ đạo cho con nay chủ động hơn, tiện lợi hơn với ứng dụng OVI Parents
                    </h2>
                    <button class="bg-red-600 text-white px-6 py-2 rounded-full flex items-center mt-4">
                        Xem thêm
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>
                <div class="bg-white rounded-3xl p-6 shadow-lg">
                    <img src="{{ asset('images/card-blog.webp') }}" alt="OVI Parents" class="w-full h-40 object-cover rounded-2xl mb-4">
                    <h2 class="text-navy-800 text-xl font-bold mb-4">
                        Đặt lịch phụ đạo cho con nay chủ động hơn, tiện lợi hơn với ứng dụng OVI Parents
                    </h2>
                    <button class="bg-red-600 text-white px-6 py-2 rounded-full flex items-center mt-4">
                        Xem thêm
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>
                <div class="bg-white rounded-3xl p-6 shadow-lg">
                    <img src="{{ asset('images/card-blog.webp') }}" alt="OVI Parents" class="w-full h-40 object-cover rounded-2xl mb-4">
                    <h2 class="text-navy-800 text-xl font-bold mb-4">
                        Đặt lịch phụ đạo cho con nay chủ động hơn, tiện lợi hơn với ứng dụng OVI Parents
                    </h2>
                    <button class="bg-red-600 text-white px-6 py-2 rounded-full flex items-center mt-4">
                        Xem thêm
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>

            </div>

            <!-- Right side - 1 large card -->
            <div class="lg:w-1/2">
                <!-- OVI Kids Web Launch Card -->
                <div class="bg-gradient-to-r from-blue-500 to-blue-700 rounded-3xl p-6 shadow-lg text-white h-full">
                    <img src="{{ asset('images/card-blog.webp') }}" alt="OVI Kids Web" class="w-full h-64 object-cover rounded-2xl mb-4">
                    <h2 class="text-navy-800 text-xl font-bold mb-4">
                        Đặt lịch phụ đạo cho con nay chủ động hơn, tiện lợi hơn với ứng dụng OVI Parents
                    </h2>
                    <p class="mb-4">
                        Ba mẹ ơi, OVI Kids đã chính thức có mặt trên các phiên bản máy tính rồi. Giờ đây, trải nghiệm cùng OVI Kids sẽ trở nên liền mạch và thuận tiện hơn bao giờ hết vì ba mẹ và các bạn học viên có thể dễ dàng truy cập OVI mọi lúc, mọi nơi ngay trên mọi nền tảng, từ điện thoại đến máy tính bảng và laptop.
                    </p>
                    <button class="bg-red-600 text-white px-6 py-2 rounded-full flex items-center mt-4">
                        Xem thêm
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-rose-50 lg:p-20 px-4 py-10">
        <x-form-contact-component></x-form-contact-component>
    </div>
</div>

<script>
    var swiper = new Swiper(".mySwiper", {
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        loop: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
    });
</script>

@stop