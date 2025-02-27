@extends('layouts.main')
@section('title', 'Quiz step 3')
@section('content')

    <div class="bg-section">
        <div class="w-full custom-container">
            <div class="justify-center text-center">
                <img src="/assets/img/OrganizeOperations.png" alt="Organize Operations" class="w-72 mx-auto">
                <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold text-[#06052E] uppercase my-4">Welcome to</h1>
                <h2 class="text-base md:text-xl text-[#06052E] mb-2 md:mb-4">{{ $level_text }}</h2>

                <div class="mx-auto py-6">
                    <h3 class="text-lg font-semibold text-[#06052E] mb-6">Chọn bài kiểm tra:</h3>
                    <div class="slick-option-quiz">
                        @foreach ($tests as $test)
                            <label class="p-4 border rounded-lg cursor-pointer hover:bg-gray-100 quiz-option"
                                data-href="{{ route('quiz.' . $level, ['quiz' => $test['id']]) }}">
                                <input type="radio" name="quiz_selection" value="{{ $test['id'] }}" class="hidden">
                                <div class="text-lg font-bold">{{ $level_text }}</div>
                                <div class="text-sm">Test {{ $test['id'] }}</div>
                            </label>
                        @endforeach
                    </div>
                </div>

                <div class="flex justify-center mb-4">
                    <a href="{{ route('quiz.' . $level, ['quiz' => 1]) }}" id="startQuizBtn"
                        class="btn-primary w-fit opacity-50 pointer-events-none">
                        <span class="relative z-10">Bắt đầu</span>
                    </a>
                </div>
                <a href="javascript:history.back()" class="text-[#5A5A5A] font-base underline">Quay lại</a>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $(".quiz-option").click(function() {
                $(".quiz-option").removeClass("border-blue-500 bg-blue-100");
                $(this).addClass("border-blue-500 bg-blue-100");
                $(this).find("input").prop("checked", true);

                let quizUrl = $(this).data("href");

                $("#startQuizBtn").attr("href", quizUrl).removeClass("opacity-50 pointer-events-none");
            });

            $('.slick-option-quiz').slick({
                infinite: true,
                slidesToShow: 3,
                slidesToScroll: 1,
                dots: true,
                responsive: [{
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    },
                   
                ]
            });
        });
    </script>

@stop
