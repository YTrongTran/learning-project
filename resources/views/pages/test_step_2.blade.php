@extends('layouts.main') @section('title', 'Login') @section('content')

<div class="bg-section">
    <div class="w-full custom-container flex flex-wrap bg-left-bottom bg-contain bg-no-repeat" style="background-image: url('/assets/img/bg-login.png');">
            <div class="w-full md:w-1/2 mb-6 md:mb-0  z-10">
                <div class="text-left">
                    <h1 class="text-3xl sm:text-4xl md:text-6xl lg:text-7xl font-bold text-[#06052E] uppercase mb-2">Thi Thử</h1>
                    <h2 class="text-xl md:text-5xl font-semibold uppercase text-[#06052E]">Nhận Kết Quả Ngay</h2>
                </div>
            </div>

            <div class="w-full md:w-1/2 bg-white shadow-lg rounded-lg p-6 md:p-10">
                <h2 class="text-lg md:text-3xl font-bold text-blue-900 uppercase mb-8 md:mb-12">
                    Chọn độ tuổi, cấp độ phù hợp 👋
                </h2>
    
                <form action="#" method="POST" class="space-y-6">
                    <div class="space-y-4">
                        <label class="block text-sm md:text-base font-medium text-[#06052E]">
                            <input type="radio" name="level" value="superkids" class="mr-2">
                            Tiếng Anh Thiếu Nhi Superkids (6-11 Tuổi)
                        </label>
                        <div class="w-full h-custom-line"></div>
                        <label class="block text-sm md:text-base font-medium text-[#06052E]">
                            <input type="radio" name="level" value="young-leaders" class="mr-2">
                            Tiếng Anh Thiếu Niên Young Leaders (11-15 Tuổi)
                        </label>
                        <div class="w-full h-custom-line"></div>
                        <label class="block text-sm md:text-base font-medium text-[#06052E]">
                            <input type="radio" name="level" value="english-hub" class="mr-2">
                            Tiếng Anh Người Lớn English Hub
                        </label>
                        <div class="w-full h-custom-line"></div>
                        <label class="block text-sm md:text-base font-medium text-[#06052E]">
                            <input type="radio" name="level" value="ielts" class="mr-2">
                            Luyện Thi IELTS
                        </label>
                        <div class="w-full h-custom-line"></div>
                    </div>
    
                    <div class="text-center">
                        <button type="submit"
                            class="btn-primary w-full"><span class="relative z-10">
                            Xác nhận
                            </span>
                        </button>
                    </div>
                </form>
            </div>
    </div>
</div>   
@stop