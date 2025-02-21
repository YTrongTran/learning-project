@extends('layouts.main') @section('title', 'Blog') @section('content')
<div class="">
    <div class="relative w-full overflow-hidden" style="max-height: 600px;">
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
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M5.25 5.653c0-.856.917-1.398 1.667-.986l11.54 6.347a1.125 1.125 0 0 1 0 1.972l-11.54 6.347c-.75.412-1.667-.13-1.667-.986V5.653Z" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="">
        <nav class="bg-rose-700 px-4 py-8">
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

    <div class=" bg-[#7dd3fc] p-8">
        <div class="container mx-auto">
            <!-- Grid Container -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Card 1 -->
                <div class="bg-white rounded-3xl overflow-hidden shadow-lg">
                    <img src="{{ asset('images/card-blog.webp') }}" alt="Student learning"
                        class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-lg font-semibold mb-2">Học tiếng Anh cho bé liệu có thực sự cần thiết cho bé
                            giao tiếp với người nói?</h3>
                        <p class="text-gray-600 text-sm mb-4">Bạn có biết, chỉ mới 3 phút không học tiếng Anh cho bé sẽ
                            phụ hục có thể khiến con bạn bỏng cơ hội mà bé đáng có bởi khi các bạn trẻ con thế giới...
                        </p>
                        <a href="{{ route('blog.detail-1') }}"
                            class="bg-blue-600 text-white px-4 py-2 rounded-full text-sm hover:bg-blue-700 flex items-center w-fit transition-colors">
                            Xem thêm
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="bg-white rounded-3xl overflow-hidden shadow-lg">
                    <img src="{{ asset('images/card-blog.webp') }}" alt="Classroom" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-lg font-semibold mb-2">Tổng hợp toàn bộ 10 vựng tiếng Anh lớp 6 Global Success,
                            Friend Plus và Expert English</h3>
                        <p class="text-gray-600 text-sm mb-4">Khi bước vào lớp 6, việc học tiếng Anh không chỉ dừng
                            thuần là học từ vựng mà còn là cách sử dụng các đơn vị...</p>
                        <button
                            class="bg-blue-600 text-white px-4 py-2 rounded-full text-sm hover:bg-blue-700 transition-colors flex items-center gap-2">
                            Xem thêm
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7" />
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="bg-white rounded-3xl overflow-hidden shadow-lg">
                    <img src="{{ asset('images/card-blog.webp') }}" alt="Writing" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-lg font-semibold mb-2">App học tiếng Anh cho bé: Liệu có đủ sức mạnh mê lôi học
                            truyền thống?</h3>
                        <p class="text-gray-600 text-sm mb-4">Trước khi quyết định chọn một app học tiếng Anh cho bé,
                            các bậc phụ huynh nên tìm hiểu kỹ những ưu và nhược điểm của từng app học...</p>
                        <button
                            class="bg-blue-600 text-white px-4 py-2 rounded-full text-sm hover:bg-blue-700 transition-colors flex items-center gap-2">
                            Xem thêm
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Navigation Dots -->
            <div class="flex justify-center gap-2 mt-8">
                <button class="w-3 h-3 rounded-full bg-white"></button>
                <button class="w-3 h-3 rounded-full bg-blue-600"></button>
                <button class="w-3 h-3 rounded-full bg-white"></button>
                <button class="w-3 h-3 rounded-full bg-white"></button>
                <button class="w-3 h-3 rounded-full bg-white"></button>
            </div>
        </div>
    </div>

    <div class="bg-section">
        <div class="w-full custom-container padding-bottom-none">
            <x-form-contact-component></x-form-contact-component>
        </div>
    </div>
</div>

@stop
