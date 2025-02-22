@extends('layouts.main') @section('title', 'Login') @section('content')

@if (session('error'))
    <p class="text-red-500">{{ session('error') }}</p>
@endif

<div class="bg-section">
    <div class="w-full custom-container flex flex-wrap bg-left-bottom bg-contain bg-no-repeat"
        style="background-image: url('/assets/img/bg-login.png');">
        <div class="w-full md:w-1/2 mb-6 md:mb-0">
            <div class="text-left">
                <h1 class="text-3xl sm:text-4xl md:text-6xl lg:text-7xl font-bold text-[#06052E] uppercase mb-2">Thi Thử
                </h1>
                <h2 class="text-xl md:text-5xl font-semibold uppercase text-[#06052E]">Nhận Kết Quả Ngay</h2>
            </div>
        </div>

        <div class="w-full md:w-1/2 bg-white shadow-lg rounded-lg p-6 md:p-10">
            <h2 class="text-lg md:text-3xl font-bold text-blue-900 uppercase mb-8 md:mb-12">
                Chọn độ tuổi, cấp độ phù hợp 👋
            </h2>

            <form action="{{ route('quiz.step3') }}" method="POST" class="space-y-6">
                @csrf
                <div class="space-y-4">
                    <label class="block text-sm md:text-base font-medium text-[#06052E] hover:cursor-pointer">
                        <input type="radio" name="level" value="superkids" class="mr-2 align-middle">
                        Tiếng Anh Thiếu Nhi Superkids (6-11 Tuổi)
                    </label>
                    <div class="w-full h-custom-line"></div>
                    <label class="block text-sm md:text-base font-medium text-[#06052E] hover:cursor-pointer">
                        <input type="radio" name="level" value="teen" class="mr-2 align-middle">
                        Tiếng Anh Thiếu Niên Young Leaders (11-15 Tuổi)
                    </label>
                    <div class="w-full h-custom-line"></div>
                    <label class="block text-sm md:text-base font-medium text-[#06052E] hover:cursor-pointer">
                        <input type="radio" name="level" value="communicate" class="mr-2 align-middle">
                        Tiếng Anh Người Lớn English Hub
                    </label>
                    <div class="w-full h-custom-line"></div>
                    <label class="block text-sm md:text-base font-medium text-[#06052E] hover:cursor-pointer">
                        <input type="radio" name="level" value="ielts" class="mr-2 align-middle">
                        Luyện Thi IELTS
                    </label>
                    <div class="w-full h-custom-line"></div>
                    <label class="block text-sm md:text-base font-medium text-[#06052E] hover:cursor-pointer">
                        <input type="radio" name="level" value="toeic" class="mr-2 align-middle">
                        Luyện Thi TOEIC
                    </label>
                    <div class="w-full h-custom-line"></div>
                </div>

                <input type="hidden" name="level_text" id="level_text">

                <div class="text-center">
                    <button type="submit" id="submit-btn" class="btn-primary w-full" disabled><span
                            class="relative z-10">
                            Xác nhận
                        </span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>


<script>
    $(document).ready(function() {
        $('input[name="level"]').change(function() {
            let selectedText = $(this).closest('label').text().trim();
            $("#level_text").val(selectedText);
            if ($('input[name="level"]:checked').length > 0) {
                $('#submit-btn').prop('disabled', false);
            } else {
                $('#submit-btn').prop('disabled', true);
            }
        });
    });
</script>
@stop
