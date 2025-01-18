@extends('layouts.main') @section('title', 'Login') @section('content')

<div class="bg-section">
    <div class="w-full custom-container flex flex-wrap bg-left-bottom bg-no-repeat" style="background-image: url('/assets/img/bg-login.png');">
            <div class="w-full md:w-1/2 mb-6 md:mb-0  z-10">
                <div class="text-left">
                    <h1 class="text-3xl sm:text-4xl md:text-6xl lg:text-7xl font-bold text-[#06052E] uppercase mb-2">Thi Thử</h1>
                    <h2 class="text-xl md:text-5xl font-semibold uppercase text-[#06052E]">Nhận Kết Quả Ngay</h2>
                </div>
            </div>

            <div class="w-full md:w-1/2 bg-white shadow-lg rounded-lg p-6 md:p-10 relative">
                <h2 class="text-xl lg:text-3xl font-bold text-blue-900 uppercase mb-4">Đăng ký/ Đăng nhập nhanh 👋</h2>
                <form action="#" method="POST" class="space-y-6 md:space-y-8">
                    <div>
                        <label for="name" class="text-sm md:text-lg font-semibold text-[#06052E] mb-2">Họ và tên</label>
                        <input type="text" id="name" name="name" placeholder="Họ và tên" required
                            class="text-sm md:text-base w-full h-9 md:h-12 px-4 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
                    </div>
                    
                    <div>
                        <label for="phone" class="text-sm md:text-lg font-semibold text-[#06052E] mb-2">Số điện thoại</label>
                        <div class="flex space-x-4">
                            <input type="tel" id="phone" name="phone" placeholder="Số điện thoại" required
                                class="flex-1 text-sm md:text-base h-9 md:h-12 px-4 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
                            <button type="button"
                                class="text-sm font-semibold text-red-600 px-4 py-2 border border-red-600 rounded-lg hover:bg-red-600 hover:text-white transition">
                                Lấy mã OTP
                            </button>
                        </div>
                    </div>

                    <div class="mt-custom-otp">
                        {{-- <label for="otp" class="">Nhập mã OTP</label> --}}
                        <input type="text" id="otp" name="otp" placeholder="Nhập mã OTP"
                            class="text-sm md:text-base w-full h-9 md:h-12 px-4 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
                    </div>

                    <div>
                        <label for="email" class="text-sm md:text-lg font-semibold text-[#06052E] mb-2">Email</label>
                        <input type="email" id="email" name="email" placeholder="Email"
                            class="text-sm md:text-base w-full h-9 md:h-12 px-4 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
                    </div>

                    <div class="text-center">
                        <button type="submit"
                            class="btn-primary w-full"><span class="relative z-10">
                            Đăng ký
                            </span>
                        </button>
                    </div>
                </form>
            </div>
    </div>
</div>   
@stop