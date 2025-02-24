<div class="bg-[#1B1D20]">
    <div class="w-full custom-container">
        <div class="mx-auto text-white">
            <div class="grid grid-cols-custom gap-4 md:gap-8 lg:gap-32 lg:px-20">
                <!-- Logo and Social Media -->
                <div class="mx-auto">
                    <img src="/assets/img/logox3.png" class="w-32 md:w-40 mb-4" alt="NES Logo" />
                    <div class="flex space-x-4 justify-center">
                        <img src="/assets/img/insta.png" class="w-6 md:w-[30px]" alt="Instagram" />
                        <img src="/assets/img/twitter.png" class="w-6 md:w-[30px]" alt="Twitter" />
                        <img src="/assets/img/fb.png" class="w-6 md:w-[30px]" alt="Facebook" />
                    </div>
                </div>

                <!-- Address -->
                <div class="md:w-[352] text-center md:text-left">
                    <h2 class="text-lg md:text-2xl mb-4 md:mb-6">Adress</h2>
                    <ul class="space-y-2">
                        <li class="text-sm md:text-base">5G - 5H - 5I Huynh Van Nghe, Phu Loi, Binh Duong</li>
                        <li class="text-sm md:text-base">3K1 - 4K1 Nguyen Thai Hoc, P.7, Vung Tau</li>
                        <li class="text-sm md:text-base">498-500 duong 30/4, P. Rach Dua, Vung Tau</li>
                    </ul>
                </div>

                <!-- Contact -->
                <div class="text-center md:text-left">
                    <h2 class="text-lg md:text-2xl mb-4 md:mb-6">Call Us</h2>
                    <ul class="space-y-2">
                        <li class="text-sm md:text-base">0274 3878 576</li>
                        <li class="text-sm md:text-base">0254 3 616 159</li>
                        <li class="text-sm md:text-base">0254 3 616 896</li>
                        <li class="text-sm md:text-base">info@nes.edu.vn</li>
                    </ul>
                </div>

                <!-- Links -->
                <div class="text-center md:text-left">
                    <h2 class="text-lg md:text-2xl mb-4 md:mb-6">Link</h2>
                    <ul class="space-y-2">
                        <li class="text-sm md:text-base">Trang chủ</li>
                        <li class="text-sm md:text-base">Các khóa học</li>
                        <li class="text-sm md:text-base">Đối tác</li>
                        <li class="text-sm md:text-base">Tư vấn</li>
                        <li class="text-sm md:text-base">Cơ hội việc làm</li>
                        <li class="text-sm md:text-base">Về chúng tôi</li>
                        <li class="text-sm md:text-base">Tin tức</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<<<<<<< HEAD
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
=======
>>>>>>> 344fd79 (update submit)
<script>
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#code-otp').click(function() {
            let phone = $('#phone').val();

            $.ajax({
                type: 'POST',
                url: "{{ route('customes.getcode') }}",
                data: {
                    'phone': phone,
                }
            }).done(function(result) {
                console.log(result);
            });

        });
    })
</script>

