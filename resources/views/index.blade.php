@extends('layouts.main') @section('title', 'Home') @section('content')

<div class="homepage">
    <div class="bg-cover bg-no-repeat" style="background-image: url('/assets/img/bg-banner-home.png');">
        <div class="custom-container">
            <div class="flex justify-center items-center lg:flex-row flex-col">
                <div class="w-full items-center flex flex-col">
                    <h1 class="text-black font-bold text-2xl lg:text-5xl mb-4">
                        TRUNG TÂM ANH NGỮ TỰ NHIÊN
                    </h1>
                    <h2 class="lg:text-3xl text-xl font-bold text-yellow-400 mb-4 lg:mb-10">
                        NATURAL ENGLISH CENTER
                    </h2>
                    <p class="mb-4 lg:mb-10 text-gray-600 text-sm lg:text-base text-center">
                        NES tự hào là một trong những trung tâm Anh ngữ hàng đầu,
                        chúng tôi chuyên tâm vào việc xây dựng cơ sở hạ tầng giáo
                        dục vững chắc, giúp học viên tiếp cận kiến thức một cách tự
                        nhiên và dễ dàng nhất. Với đội ngũ giáo viên giàu kinh
                        nghiệm và đam mê, chúng tôi cam kết đem đến cho học viên sự
                        tự tin trong việc sử dụng tiếng Anh, từ việc giao tiếp hàng
                        ngày đến việc áp dụng trong công việc và học tập.
                    </p>
                    <a href="/thi-thu" class="btn-primary w-fit "><span class="relative z-10">Thi thử nhận kết quả
                            ngay</span></a>
                    <div class="lg:pl-0 pl-14">
                        <img src="/images/img-home.png" alt="" />
                    </div>
                </div>
            </div>
    
            <div class="max-w-[1110px] mx-auto bg-white rounded-[32px] shadow-xl p-6">
                <div class="flex-1 mb-6 lg:mb-0">
                    <div class="sm:flex-row gap-4 items-center justify-between">
                        <h2 class="md:text-lg text-sm text-center font-bold mb-8">
                            Tìm khóa học theo độ tuổi và nhu cầu
                        </h2>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            <select class="w-full sm:w-[327px] p-2 rounded-2xl bg-white border border-[#5A5A5A]"
                                aria-label="Độ tuổi">
                                <option value="" disabled selected>Độ tuổi</option>
                                <option value="6-8">6-8 tuổi</option>
                                <option value="9-11">9-11 tuổi</option>
                                <option value="12-15">12-15 tuổi</option>
                            </select>
    
                            <select class="w-full sm:w-[327px] p-2 rounded-2xl bg-white border border-[#5A5A5A]"
                                aria-label="Chương trình học">
                                <option value="" disabled selected>Chương trình học</option>
                                <option value="math">Toán học</option>
                                <option value="english">Tiếng Anh</option>
                                <option value="science">Khoa học</option>
                            </select>
                            <button
                                class="bg-red-800 hover:bg-red-700 transition-all font-bold text-white px-6 py-2 rounded-[30px] flex items-center justify-center w-full sm:w-[327px]">
                                Tìm kiếm
                            </button>
                        </div>
    
    
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-[#F9FAFC]">
        <div class="w-full custom-container">
            <div class="flex flex-wrap items-center gap-16">
                <div class="w-full md:w-5/12 flex justify-center">
                    <div class="relative">
                        <img src="/images/Image-section2.png" alt="" class="">
                    </div>
                </div>
                <div class="w-full md:flex-1">
                    <p class="text-gray-400 text-xl mb-2">Về chúng tôi</p>

                    <h2 class="text-2xl lg:text-4xl font-black text-black mb-2">
                        TRUNG TÂM ANH NGỮ TỰ NHIÊN<br>
                        NATURAL ENGLISH CENTER
                    </h2>
                    <div class="w-16 h-1 bg-red-700 mb-8"></div>

                    <p class="text-gray-700 leading-relaxed mb-6">
                        NES tự hào là một trong những trung tâm Anh ngữ hàng đầu, chúng tôi chuyên tâm vào việc xây dựng
                        cơ sở hạ tầng giáo dục vững chắc, giúp học viên tiếp cận kiến thức một cách tự nhiên và dễ dàng
                        nhất. Với đội ngũ giáo viên giàu kinh nghiệm và đam mê, chúng tôi cam kết đem đến cho học viên
                        sự tự tin trong việc sử dụng tiếng Anh, từ việc giao tiếp hàng ngày đến việc áp dụng trong công
                        việc và học tập.
                    </p>
                    <div class="flex gap-12 mb-6">
                        <div>
                            <h3 class="text-4xl font-bold">18+</h3>
                            <p>Năm phát triển</p>
                        </div>
                        <div>
                            <h3 class="text-4xl font-bold">100+</h3>
                            <p>Học viên đã tham gia</p>
                        </div>
                        <div>
                            <h3 class="text-4xl font-bold">70+</h3>
                            <p>Học viên đạt chứng chỉ quốc tế</p>
                        </div>
                    </div>
                    <a href="#" class="btn-primary w-fit">
                        <span class="relative z-10">Xem chi tiết</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white">
        <div class="w-full custom-container">
            <div class="text-center mb-12">
                <p class="text-gray-500 text-xl">Chương trình đào tạo</p>
                <h2 class="text-2xl md:text-4xl font-black text-black mt-2">
                    CHƯƠNG TRÌNH HỌC
                </h2>
                <div class="w-16 h-1 bg-red-700 mx-auto mt-4"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                <div class="bg-black px-14 py-12 pb-20 rounded-2xl shadow-md md:col-span-2">
                    <h3 class="text-5xl text-white font-bold mb-8">Tự tin - Học tập - Thành công</h3>
                    <p class="text-white text-base mb-8">
                        NES cung cấp cho bạn nhiều khóa học tiếng Anh đa dạng, phù hợp với mọi lứa tuổi & nhu cầu, từ
                        tiếng
                        Anh thiếu nhi đến các khóa học ôn luyện IELTS và TOEIC, chuẩn bị hành trang cho bạn sẵn sàng
                        vươn ra
                        thế giới.
                    </p>
                    <div class="flex gap-4 items-center">
                        <a href="#" class="btn-primary">
                            <span class="relative z-10">Gọi ngay để nhận tư vấn !</span>
                        </a>
                        <a href="#" class="color-primary font-medium underline">
                            Tìm hiểu thêm
                        </a>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-2xl lg:mt-[90px]">
                    <h4 class="text-2xl font-bold mb-4 flex items-center">
                        <span class="text-red-500 mr-2">📢</span> Tiếng Anh Thiếu Nhi
                    </h4>
                    <p class="text-gray-500 font-medium mb-4">Chuẩn bị vững vàng cho tương lai của con bạn.</p>
                    <p class="text-gray-500 mb-4">
                        Chương trình Tiếng Anh cho Trẻ em của chúng tôi khuyến khích sự yêu thích việc học ngôn ngữ, xây
                        dựng nền tảng vững chắc để tâm hồn trẻ trở thành công dân toàn cầu tự tin với đam mê giao tiếp
                    </p>
                    <a href="#" class="color-primary font-medium underline">
                        Tìm hiểu thêm
                    </a>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-2xl">
                    <h4 class="text-2xl font-bold mb-4 flex items-center">
                        <span class="text-red-500 mr-2">📢</span> Tiếng Anh Giao Tiếp
                    </h4>
                    <p class="text-gray-500 font-medium mb-6">Kết Nối, Giao Tiếp, Chinh Phục!</p>
                    <p class="text-gray-500 mb-4">
                        Mở khóa sức mạnh của giao tiếp hiệu quả với khóa học Giao Tiếp Tiếng Anh của chúng tôi. Nâng cao
                        kỹ năng nói Tiếng Anh của bạn, kết nối với người khác và chinh phục mọi cuộc trò chuyện, có thể
                        là trong công việc hoặc cuộc sống hàng ngày.
                    </p>
                    <a href="#" class="color-primary font-medium underline">
                        Tìm hiểu thêm
                    </a>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-2xl">
                    <h4 class="text-2xl font-bold mb-4 flex items-center">
                        <span class="text-red-500 mr-2">📢</span> Chứng Chỉ Quốc Tế
                    </h4>
                    <p class="text-gray-500 font-medium mb-6">Xuất Sắc Toàn Cầu, Chứng Nhận Địa Phương!</p>
                    <p class="text-gray-500 mb-4">
                        Chương trình Chứng Chỉ Quốc Tế của chúng tôi trang bị bạn với khả năng sử dụng ngôn ngữ cần
                        thiết để xuất sắc toàn cầu. Đạt được các chứng chỉ được công nhận, giúp bạn tỏa sáng cả ở cấp
                        địa phương và quốc tế.
                    </p>
                    <a href="#" class="color-primary font-medium underline">
                        Tìm hiểu thêm
                    </a>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-2xl">
                    <h4 class="text-2xl font-bold mb-4 flex items-center">
                        <span class="text-red-500 mr-2">📢</span> Tiếng Anh Phổ Thông
                    </h4>
                    <p class="text-gray-500 font-medium mb-6">Nâng Tầm Xuất Sắc Ngôn Ngữ trong Học Vụ!</p>
                    <p class="text-gray-500 mb-4">
                        Nâng tầm hành trình học tập của bạn với chương trình Tiếng Anh Phổ Thông của chúng tôi. Thiết kế
                        cho học viên ở mọi cấp độ, chúng tôi cung cấp kỹ năng ngôn ngữ toàn diện giúp bạn xuất sắc trong
                        giáo dục chính thống và hơn thế nữa.
                    </p>
                    <a href="#" class="color-primary font-medium underline">
                        Tìm hiểu thêm
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-[#F9FAFC]">
        <div class="w-full custom-container">

            <div class="flex flex-wrap md:flex-nowrap items-center gap-6">

                <div class="w-full md:w-1/2 bg-contain bg-no-repeat bg-center h-screen items-center flex justify-center"
                    style="background-image: url('/images/Frame1.png');">

                    <div class="items-center max-w-[337px]">

                        <p class="text-black text-center text-sm max-w-[249px] m-auto mb-2">
                            Được thành lập vào năm 1843, Macmillan là nhà xuất bản giáo trình dạy tiếng Anh với gần 180
                            năm lịch sử.
                        </p>
                        <p class="text-black text-center text-sm">
                            Bộ giáo trình được Trung tâm Anh Ngữ Tự Nhiên - NES chọn lọc với mục tiêu giúp học viên phát
                            triển toàn diện 4 kỹ năng nghe, nói, đọc, viết cùng đa dạng chủ đề để có thể ứng dụng trong
                            mọi tình huống.
                        </p>
                    </div>
                </div>

                <div class="w-full md:w-1/2 p-6">
                    <div class="mb-12">
                        <p class="text-gray-400 text-xl mb-2">Chương trình đào tạo</p>

                        <h2 class="text-3xl md:text-4xl font-black text-black">
                            GIÁO TRÌNH CHUẨN QUỐC TẾ
                        </h2>
                        <div class="w-16 h-[2px] bg-red-500 mt-2"></div>
                    </div>
                    <div class="flex gap-4 items-start">
                        <img src="/images/Frame.svg" alt="">
                        <div>
                            <p class="text-base text-gray-700 font-bold mb-2">
                                Nội dung học tập đa phương tiện, giàu tính tương tác:
                            </p>
                            <p class="text-base text-gray-700">
                                Bộ giáo trình truyền tải kiến thức thông qua nhiều phương tiện như video, bản ghi âm,
                                câu đố
                                trực tuyến giúp nâng cao trải nghiệm học tập cho học viên.
                            </p>
                        </div>
                    </div>
                    <div class="flex gap-4 items-start">
                        <img src="/images/Frame.svg" alt="">
                        <div>
                            <h3 class="text-xl font-bold mb-6">
                                Phát triển toàn diện 4 kỹ năng:
                            </h3>
                            <p class="text-gray-600">
                                Bộ sách tạo cơ hội cho học viên thực hành 4 kỹ năng nghe, nói, đọc, viết. Giúp học viên
                                xây chắc
                                nền tảng Anh ngữ để vượt qua nỗi sợ mất gốc.
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white">
        <div class="w-full custom-container">
            <div class="text-center mb-12">
                <p class="text-gray-500 text-xl">Tin Tức</p>
                <h2 class="text-2xl md:text-4xl font-black uppercase text-black mt-2">
                    Bài viết nổi bật
                </h2>
                <div class="w-16 h-1 bg-red-700 mx-auto mt-4"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6">

                <div class="bg-white md:col-span-2 md:row-span-2">
                    <img src="/images/Future.png" alt="" class="mb-6">
                    <p class="text-sm text-[#2E3E5C] mb-4">Tiếng Anh nâng cao</p>
                    <h3 class="text-2xl text-black font-medium mb-2">Bỏ túi ngay kiến thức tổng hợp về thì tương lai
                        hoàn thành tiếp diễn</h3>
                    <p class="text-gray-400 text-sm mb-8">
                        Bạn đã bao giờ gặp tình huống mà bạn biết rõ ý mình muốn nói nhưng lại loay hoay không biết dùng
                        thì nào cho chính xác?
                    </p>
                    <div class="flex gap-4 items-center">
                        <a href="#" class="color-primary font-medium underline">
                            Tìm hiểu thêm
                        </a>
                    </div>
                </div>

                <div class="bg-white">
                    <img src="/images/child.png" alt="" class="mb-2">
                    <p class="text-sm color-secondary mb-2">Tiếng Anh cùng bé</p>
                    <h3 class="text-lg capitalize color-secondary font-bold mb-4">SmartKids - Lựa chọn số 1 khi nhắc
                        đến chương trình tiếng Anh cho bé</h3>
                    <a href="#" class="color-primary font-medium underline">
                        Tìm hiểu thêm
                    </a>
                </div>
                <div class="bg-white">
                    <img src="/images/aeiou.png" alt="" class="mb-2">
                    <p class="text-sm color-secondary mb-2">Tiếng Anh cơ bản</p>
                    <h3 class="text-lg capitalize color-secondary font-bold mb-4">Nguyên âm tiếng Anh gồm bao nhiêu âm?
                        Phụ âm thì sao?</h3>
                    <a href="#" class="color-primary font-medium underline">
                        Tìm hiểu thêm
                    </a>
                </div>
                <div class="bg-white">
                    <img src="/images/meeting.png" alt="" class="mb-2">
                    <p class="text-sm color-secondary mb-2">Tiếng Anh cùng bé</p>
                    <h3 class="text-lg color-secondary font-bold mb-4">Trung tâm tiếng Anh cho bé: Trẻ chủ động khám
                        phá ngoại ngữ cùng NES</h3>
                    <a href="#" class="color-primary font-medium underline">
                        Tìm hiểu thêm
                    </a>
                </div>
                <div class="bg-white">
                    <img src="/images/if.png" alt="" class="mb-2">
                    <p class="text-sm color-secondary mb-2">Tiếng Anh cơ bản</p>
                    <h3 class="text-lg capitalize color-secondary font-bold mb-4">Chinh phục cấu trúc if only: Nắm vững
                        công thức và cách sử dụng ...</h3>
                    <a href="#" class="color-primary font-medium underline">
                        Tìm hiểu thêm
                    </a>
                </div>
            </div>

            <div class="text-center mt-10 flex justify-center">
                <a href="#" class="btn-primary w-fit">
                    <span class="relative z-10">Xem tất cả bài viết</span>
                </a>
            </div>
        </div>
    </div>

    <div class="bg-[#F9FAFC]">
        <div class="w-full custom-container">

            <div class="text-center mb-12">
                <p class="text-gray-500 text-xl">Khách hàng</p>
                <h2 class="text-2xl md:text-4xl font-black uppercase text-black mt-2">
                    Đối tác chính thức của NES
                </h2>
                <div class="w-16 h-1 bg-red-700 mx-auto mt-4"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-6 gap-6">

                <div class="bg-white">
                    <a href="#"><img src="/assets/img/client_1.svg" alt="client1"></a>
                </div>
                <div class="bg-white">
                    <a href="#"><img src="/assets/img/client2.png" alt="client1"></a>
                </div>
                <div class="bg-white">
                    <a href="#"><img src="/assets/img/client3.png" alt="client1"></a>
                </div>
                <div class="bg-white">
                    <a href="#"><img src="/assets/img/client4.png" alt="client1"></a>
                </div>
                <div class="bg-white">
                    <a href="#"><img src="/assets/img/client5.png" alt="client1"></a>
                </div>
                <div class="bg-white">
                    <a href="#"><img src="/assets/img/client6.png" alt="client1"></a>
                </div>

            </div>
        </div>
    </div>

    <div class="bg-white">
        <div class="w-full custom-container">
            <div class="text-center mb-8">
                <h2 class="text-2xl lg:text-4xl font-black text-blue-900 uppercase">Học viên trải nghiệm</h2>
            </div>
            <div class="section testimonials-section clearfix" data-aos="fade-in" data-aos-delay="350"
                data-aos-duration="600">
                <div class="row clearfix">
                    <div
                        class="col-md-6 testimonial-section-col testimonial-section-col-left clearfix p-5 d-flex align-items-center relative">
                        <img src="/assets/img/nhay.svg" alt="tsukaeru" class="w-16 absolute top-0 left-40 lg:left-52" />
                        <img src="/assets/img/nhay2.svg" alt="tsukaeru" class="w-16 absolute top-0 right-40 lg:right-52" />
                        <div class="slider slider-for w-100">
                            <div class="testimonial-section-col-content-holder clearfix p-5">
                                <p class="text-[#5A5A5A] text-center text-base mx-auto max-w-[620px] lg:max-w-[620px]">Trung tâm tiếng Anh này rất tốt, giáo viên thân thiện và phương
                                    pháp giảng dạy hợp lý. Tôi đã cảm thấy tiến bộ lớn trong việc giao tiếp.</p>
                            </div>
                            <div class="testimonial-section-col-content-holder clearfix p-5">
                                <p class="text-[#5A5A5A] text-hite text-center text-base mx-auto max-w-[620px] lg:max-w-[620px]">Trung tâm tiếng Anh này rất tốt, giáo viên thân thiện
                                    và phương pháp giảng dạy hợp lý. Tôi đã cảm thấy tiến bộ lớn trong việc giao tiếp 2.
                                </p>
                            </div>
                            <div class="testimonial-section-col-content-holder clearfix p-5">
                                <p class="text-[#5A5A5A] text-hite text-center text-base mx-auto max-w-[620px] lg:max-w-[620px]">Trung tâm tiếng Anh này rất tốt, giáo viên thân thiện
                                    và phương pháp giảng dạy hợp lý. Tôi đã cảm thấy tiến bộ lớn trong việc giao tiếp 3.
                                </p>
                            </div>
                            <div class="testimonial-section-col-content-holder clearfix p-5">
                                <p class="text-[#5A5A5A] text-hite text-center text-base mx-auto max-w-[620px] lg:max-w-[620px]">Trung tâm tiếng Anh này rất tốt, giáo viên thân thiện
                                    và phương pháp giảng dạy hợp lý. Tôi đã cảm thấy tiến bộ lớn trong việc giao tiếp 4.
                                </p>
                            </div>
                            <div class="testimonial-section-col-content-holder clearfix p-5">
                                <p class="text-[#5A5A5A] text-hite text-center text-base mx-auto max-w-[620px] lg:max-w-[620px]">Trung tâm tiếng Anh này rất tốt, giáo viên thân thiện
                                    và phương pháp giảng dạy hợp lý. Tôi đã cảm thấy tiến bộ lớn trong việc giao tiếp 5.
                                </p>
                            </div>
                            <div class="testimonial-section-col-content-holder clearfix p-5">
                                <p class="text-[#5A5A5A] text-hite text-center text-base mx-auto max-w-[620px] lg:max-w-[620px]">Trung tâm tiếng Anh này rất tốt, giáo viên thân thiện
                                    và phương pháp giảng dạy hợp lý. Tôi đã cảm thấy tiến bộ lớn trong việc giao tiếp 6.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-md-6 testimonial-section-col testimonial-section-col-right clearfix bg-orange-1">
                        <div class="slider slider-nav m-0">
                            <div class="testimonial-section-col-logo-holder clearfix text-center">
                                <img src="/assets/img/avt1.svg" alt="tsukaeru" class="w-16 mx-auto" />
                                <p class="text-2xl capitalize text-[#06052E] font-bold hidden">Nguyễn Thị Hương</p>
                                <p class="text-xl color-secondary font-medium hidden">Sinh Viên</p>

                            </div>
                            <div class="testimonial-section-col-logo-holder clearfix text-center">
                                <img src="/assets/img/avt2.svg" alt="tsukaeru" class="w-16 mx-auto" />
                                <p class="text-2xl capitalize text-[#06052E] font-bold hidden">Nguyễn Thị Hương</p>
                                <p class="text-xl color-secondary font-medium hidden">Sinh Viên</p>

                            </div>
                            <div class="testimonial-section-col-logo-holder clearfix text-center">
                                <img src="/assets/img/avt3.svg" alt="tsukaeru" class="w-16 mx-auto" />
                                <p class="text-2xl capitalize text-[#06052E] font-bold hidden">Nguyễn Thị Hương</p>
                                <p class="text-xl color-secondary font-medium hidden">Sinh Viên</p>

                            </div>
                            <div class="testimonial-section-col-logo-holder clearfix text-center">
                                <img src="/assets/img/avt4.svg" alt="tsukaeru" class="w-16 mx-auto" />
                                <p class="text-2xl capitalize text-[#06052E] font-bold hidden">Nguyễn Thị Hương</p>
                                <p class="text-xl color-secondary font-medium hidden">Sinh Viên</p>

                            </div>
                            <div class="testimonial-section-col-logo-holder clearfix text-center">
                                <img src="/assets/img/avt1.svg" alt="tsukaeru" class="w-16 mx-auto" />
                                <p class="text-2xl capitalize text-[#06052E] font-bold hidden">Nguyễn Thị Hương</p>
                                <p class="text-xl color-secondary font-medium hidden">Sinh Viên</p>

                            </div>
                            <div class="testimonial-section-col-logo-holder clearfix text-center">
                                <img src="/assets/img/avt5.svg" alt="tsukaeru" class="w-16 mx-auto" />
                                <p class="text-2xl capitalize text-[#06052E] font-bold hidden">Nguyễn Thị Hương</p>
                                <p class="text-xl color-secondary font-medium hidden">Sinh Viên</p>

                            </div>

                        </div>

                    </div>
                </div>
            </div>


        </div>
    </div>

    <div class="bg-[#F9FAFC]">
        <div class="w-full custom-container" style="padding-bottom: 0px;">
            <x-form-contact-component></x-form-contact-component>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>

<script>
    $(document).ready(function(e) {

        var sliderfor = $('.slider-for').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            dots: false,
            fade: true,
            asNavFor: '.slider-nav'
        });

        var slidernav = $('.slider-nav').slick({
            slidesToShow: 5,
            slidesToScroll: 1,
            asNavFor: '.slider-for',
            dots: true,
            arrows: false,
            centerMode: true,
            appendDots: $(".custom-slick-dots")
        });

        $('.custom-slick-arrow-left').on('click', function() {


            $('.slider-for').slick('slickPrev');
            $('.slider-nav').slick('slickPrev');
        });
        $('.custom-slick-arrow-right').on('click', function() {
            $('.slider-for').slick('slickNext');
            $('.slider-nav').slick('slickNext');
        });


    });
</script>

@stop
