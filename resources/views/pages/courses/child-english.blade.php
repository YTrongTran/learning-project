@extends('layouts.main') @section('title', 'Khóa học thiếu nhi') @section('content')
<div style="background: url({{ asset('images/banner-khoa-hoc-thieu-nhi.avif') }}) no-repeat; background-size: contain;"
    class="min-h-[25vw]"></div>
<div class="mt-20 max-w-[1440px] mx-auto">
    <h2 class="course-title">NES, Phát Huy Tối Đa Khả Năng NGHE - NÓI Phản Xạ</h2>
    <div class="bg-white p-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Feature 1 -->
            <div class="flex flex-col gap-4 p-3 rounded-lg border border-gray-200 hover:shadow-lg transition-shadow">
                <div class="flex items-center gap-3">
                    <div class="w-24 h-24 flex-shrink-0">
                        <img src="{{ asset('/images/ky-nang-1.avif') }}" alt="Global education icon"
                            class="w-full h-full object-contain" />
                    </div>
                    <h3 class="font-semibold text-lg">1. Chương trình đào tạo chuẩn tế</h3>
                </div>
                <p class="text-gray-600">Kết hợp ngôn ngữ, toán học và luyện viết chữ.</p>
            </div>

            <!-- Feature 2 -->
            <div class="flex flex-col gap-4 p-3 rounded-lg border border-gray-200 hover:shadow-lg transition-shadow">
                <div class="flex items-center gap-3">
                    <div class="w-24 h-24 flex-shrink-0">
                        <img src="{{ asset('/images/ky-nang-2.avif') }}" alt="Macmillan logo"
                            class="w-full h-full object-contain" />
                    </div>
                    <h3 class="font-semibold text-lg">2. Giáo trình tích hợp công nghệ mới nhất</h3>
                </div>
                <p class="text-gray-600">của NXB Ma
                    cmillan - Mỹ giúp kích thích trí não cho trẻ, cung cấp vốn từ
                    vựng phong phú và những kỹ năng cần thiết cho bé</p>
            </div>

            <!-- Feature 3 -->
            <div class="flex flex-col gap-4 p-3 rounded-lg border border-gray-200 hover:shadow-lg transition-shadow">
                <div class="flex items-center gap-3">
                    <div class="w-24 h-24 flex-shrink-0">
                        <img src="{{ asset('/images/ky-nang-3.avif') }}" alt="Macmillan logo"
                            class="w-full h-full object-contain" />
                    </div>
                    <h3 class="font-semibold text-lg">3. 100% Giáo viên bản ngữ có chứng chỉ sư phạm</h3>
                </div>
                <p class="text-gray-600">Chuyên nghiệp, tận tâm và yêu nghề.</p>
            </div>

            <!-- Feature 4 -->
            <div class="flex flex-col gap-4 p-3 rounded-lg border border-gray-200 hover:shadow-lg transition-shadow">
                <div class="flex items-center gap-3">
                    <div class="w-24 h-24 flex-shrink-0">
                        <img src="{{ asset('/images/phan xa nhanh.avif') }}" alt="Teaching method icon"
                            class="w-full h-full object-contain" />
                    </div>
                    <h3 class="font-semibold text-lg">4. Phương pháp giảng dạy chuyên biệt</h3>
                </div>
                <p class="text-gray-600">Phản xạ nhanh (QRA) giúp bé tự tin giáo tiếp NGHE NÓI như ngôn ngữ thứ 2
                </p>
            </div>

            <!-- Feature 5 -->
            <div class="flex flex-col gap-4 p-3 rounded-lg border border-gray-200 hover:shadow-lg transition-shadow">
                <div class="flex items-center gap-3">
                    <div class="w-24 h-24 flex-shrink-0">
                        <img src="{{ asset('/images/ky-nang-5.avif') }}" alt="Learning method icon"
                            class="w-full h-full object-contain" />
                    </div>
                    <h3 class="font-semibold text-lg">5. Đa dạng phương pháp</h3>
                </div>
                <p class="text-gray-600">Hỗ trợ cho bé nhớ bài, từ vựng ngay trên lớp bằng hình ảnh, câu văn ngắn,
                    diễn kịch hay kể truyện.</p>
            </div>

            <!-- Feature 6 -->
            <div class="flex flex-col gap-4 p-3 rounded-lg border border-gray-200 hover:shadow-lg transition-shadow">
                <div class="flex items-center gap-3">
                    <div class="w-24 h-24 flex-shrink-0">
                        <img src="{{ asset('/images/ky-nang-6.avif') }}" alt="Pronunciation icon"
                            class="w-full h-full object-contain" />
                    </div>
                    <h3 class="font-semibold text-lg">6. Phát âm chuẩn</h3>
                </div>
                <p class="text-gray-600">Tập và hướng dẫn cho bé bản năng phát âm chuẩn giọng Anh/Mỹ</p>
            </div>

            <!-- Feature 7 -->
            <div class="flex flex-col gap-4 p-3 rounded-lg border border-gray-200 hover:shadow-lg transition-shadow">
                <div class="flex items-center gap-3">
                    <div class="w-24 h-24 flex-shrink-0">
                        <img src="{{ asset('/images/ky-nang-7.avif') }}" alt="Back to school icon"
                            class="w-full h-full object-contain" />
                    </div>
                    <h3 class="font-semibold text-lg">7. Nội dung luôn mới và thú vị</h3>
                </div>
                <p class="text-gray-600">Chương trình học đang vừa học, vừa chơi tạo cho bé sự hứng khởi mỗi khi tới
                    trường.</p>
            </div>

            <!-- Feature 8 -->
            <div class="flex flex-col gap-4 p-3 rounded-lg border border-gray-200 hover:shadow-lg transition-shadow">
                <div class="flex items-center gap-3">
                    <div class="w-24 h-24 flex-shrink-0">
                        <img src="{{ asset('/images/ky-nang-8.avif') }}" alt="Support icon"
                            class="w-full h-full object-contain" />
                    </div>
                    <h3 class="font-semibold text-lg">8. Hỗ trợ, kèm riêng (1 kèm 1)</h3>
                </div>
                <p class="text-gray-600">với những bé chưa theo kịp chương trình và cập nhật kết quả cho phụ huynh
                    liên tục bằng hình ảnh/clip, số liên lạc, điện thoại hay email</p>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="mt-20">
        <h2 class="course-title">PHƯƠNG PHÁP CHUYÊN BIỆT CỦA NES</h2>
        <div class="flex flex-col gap-10">
            <div class="flex gap-8 justify-between flex-col lg:flex-row">
                <p class="lg:w-4/5 w-full lg:text-xl text-sm lg:text-left text-center w">Phương pháp QRA (Quick Reaction
                    Approach) –
                    Phản Ứng Nhanh là phương pháp tối
                    ưu, giúp
                    cho các học
                    viên nhí nhớ bài ngay tại lớp và vận dụng được kiến thức Anh ngữ một cách tự nhiên nhất vào giao
                    tiếp hàng ngày. Phát huy tốt đa khả năng giao tiếp tiếng Anh từ cơ bản đến nâng cao, từ tổng quát
                    đến học thuật, mang lại môi trường học tích cực để các bé có thể phát triển sự tự tin, khả năng tư
                    duy nhạy bén, và hình thành niềm đam mê đối với bộ môn tiếng Anh.</p>
                <img class="" src="{{ asset('/images/123.avif') }}" alt="">
            </div>
            <div class="flex gap-8 justify-between flex-col-reverse lg:flex-row">
                <img class="lg:w-1/3 w-full" src="{{ asset('/images/122.avif') }}" alt="">
                <p class="lg:text-xl text-sm lg:text-left text-center w"> Các chương trình phụ trợ đi kèm (bài hát,
                    truyện
                    tranh, chuyện cổ tích, phim
                    hoạt
                    hình, những câu chuyện về các danh nhân Việt Nam cũng như thế giới, hoạt động ngoại khóa như cắm
                    trại, picnic, thăm bảo tàng, tham gia các chương trình thực nghiệm cuộc sống thật giúp các bé phát
                    huy tối đa khả năng giao tiếp tiếng Anh trong những năm đầu đời, giúp tạo ra một môi trường học tập
                    tích cực nơi trẻ em, giúp các bé có thể phát triển toàn diện kỹ năng tư duy, sự tự tin, kỹ năng xây
                    dựng vốn từ vựng, ngữ âm và thực hành giao tiếp tốt.</p>
            </div>
        </div>
    </div>
    <div class="mt-20">
        <h2 class="course-title">Lộ Trình Đào tạo tại NES </h2>
        <div>
            <img src="{{ asset('/images/so do dao tao.avif') }}" class="m-auto" alt="">
        </div>
    </div>
    <div class="mt-20">
        <h2 class="course-title">​CƠ SỞ VẬT CHẤT</h2>\

        <div>
            <img src="{{ asset('/images/nt---1.avif') }}" class="m-auto" alt="">
        </div>
    </div>

</div>
<div class="mt-20">
    <h2 class="course-title">Các chi nhánh của NES </h2>
    <div class="flex justify-center">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4783.678715751408!2d106.6760061!3d10.9859405!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3174d1177169d3df%3A0xa5e9b1d1c322491c!2zQW5oIE5n4buvIFThu7EgTmhpw6pu!5e1!3m2!1svi!2s!4v1736070419612!5m2!1svi!2s"
            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>
<div class="container">
    <div class="my-20">
        <h2 class="course-title">​HỌC VIÊN CỦA NES</h2>
        <div class="flex lg:flex-row flex-col items-center gap-20 justify-between lg:px-[100px]">
            <ul class="flex flex-col lg:gap-10">
                <li class="flex lg:text-3xl text-xl items-center"><span class="leading-4 text-rose-600 mr-2"><svg
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-14">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
                        </svg></span>
                    Trải dài mọi lứa tuổi</li>
                <li class="flex lg:text-3xl text-xl items-center">
                    <span class="leading-4 text-rose-600 mr-2">
                        ​<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-14">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
                        </svg>
                    </span>
                    18,000+ Học Viên
                </li>
                <li class="flex lg:text-3xl text-xl items-center"><span class="leading-4 text-rose-600 mr-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-14">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
                        </svg>
                    </span>
                    ​Đạt nhiều kết quả cao</li>
            </ul>
            <img src="{{ asset('/images/Thiết kế chưa có tên (2).avif') }}" class="s" alt="">
        </div>
    </div>
</div>
<x-contact-course-component></x-contact-course-component>
@stop