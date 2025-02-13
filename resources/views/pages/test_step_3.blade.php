@extends('layouts.main') @section('title', 'Login') @section('content')

<div class="bg-section">
    <div class="w-full custom-container ">
        <div class="w-full grid justify-center text-center">
            <img src="/assets/img/OrganizeOperations.png" alt="Organize Operations" class="w-72 md-8 md:mb-10">
            <h1 class="text-2xl sm:text-3xl md:text-4xl  font-bold text-[#06052E] uppercase mb-4">Welcome to</h1>
            <h2 class="text-base md:text-xl text-[#06052E] mb-6 md:mb-10">Tiếng Anh thiếu nhi Superkids (6-11 Tuổi)</h2>
            <div class="flex justify-center mb-4">
                <a href="{{route('quiz', ['quiz' => 1])}}" class="btn-primary w-fit"><span class="relative z-10">
                        Bắt đầu
                    </span>
                </a>
            </div>
            <a href="#" class="text-[#5A5A5A] font-base underline">Quay lại</a>
        </div>
    </div>

</div>
</div>
@stop
