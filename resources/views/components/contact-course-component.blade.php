<div style="background: url({{ asset('images/back-gr-khoa-hoc-contact.avif') }}) no-repeat; background-size: cover;">
    <div class="container">
        <div class="flex-col flex lg:flex-row py-20 text-white">
            <div class="text-center lg:m-0 mb-10">
                <img src="{{ asset('images/contac-icon.avif') }}" alt="" class="lg:w-full w-1/2 m-auto" />
            </div>
            <div>
                <h1 class="text-4xl font-bold mb-4 text-center">Liên Hệ Ngay Để Được Tư Vấn</h1>
                <p class="text-lg text-center mb-8 opacity-90">
                    Tư vấn và kiểm tra năng lực ngay tại trung tâm để có lộ trình học phù hợp nhất
                </p>
                <div class="text-center">
                    <button
                        class="bg-white text-blue-600 px-8 py-3 rounded-full font-semibold hover:bg-opacity-90 transition-colors mb-12">
                        LIÊN HỆ
                    </button>
                </div>

                <!-- Countdown Timer Section -->
                <div class="text-center">
                    <h2 class="text-2xl font-semibold mb-6">Hạn chốt đăng ký</h2>
                    <div class="flex gap-4 justify-center" id="countdown">
                        <div class="flex flex-col items-center">
                            <div class="bg-red-800 rounded-lg p-4 w-16 h-16 flex items-center justify-center mb-2">
                                <span id="days" class="text-2xl font-bold">0</span>
                            </div>
                            <span class="text-sm">Ngày</span>
                        </div>

                        <div class="flex flex-col items-center">
                            <div class="bg-red-800 rounded-lg p-4 w-16 h-16 flex items-center justify-center mb-2">
                                <span id="hours" class="text-2xl font-bold">0</span>
                            </div>
                            <span class="text-sm">Giờ</span>
                        </div>

                        <div class="flex flex-col items-center">
                            <div class="bg-red-800 rounded-lg p-4 w-16 h-16 flex items-center justify-center mb-2">
                                <span id="minutes" class="text-2xl font-bold">0</span>
                            </div>
                            <span class="text-sm">Phút</span>
                        </div>

                        <div class="flex flex-col items-center">
                            <div class="bg-red-800 rounded-lg p-4 w-16 h-16 flex items-center justify-center mb-2">
                                <span id="seconds" class="text-2xl font-bold">0</span>
                            </div>
                            <span class="text-sm">Giây</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        var targetDate = new Date("2025-02-01T00:00:00").getTime();

        function updateCountdown() {
            var now = new Date().getTime();
            var distance = targetDate - now;

            if (distance < 0) {
                $("#countdown").html("<h3>Hết Hạn Đăng Ký</h3>");
                return;
            }

            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            $("#days").text(days);
            $("#hours").text(hours);
            $("#minutes").text(minutes);
            $("#seconds").text(seconds);
        }

        // Update the countdown every second
        setInterval(updateCountdown, 1000);
    });
</script>