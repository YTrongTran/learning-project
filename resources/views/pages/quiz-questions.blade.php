@extends('layouts.main')
@section('title', 'Quiz ' . $quiz['type'])

@section('content')

    <div class="w-full px-4">
        <div class="flex flex-col-reverse lg:flex-row lg:mb-20 mb-10 mt-10 gap-6 justify-between">

            <x-left-sidebar-quiz-component></x-left-sidebar-quiz-component>

            <div class="flex flex-col-reverse md:flex-row gap-6 lg:w-[82%] w-full flex-1">

                <div class="flex-1 gap-8 w-full">
                    <div class="flex gap-8">
                        <div class="flex-1 text-[#06052E]">

                            <div class="flex lg:flex-row flex-col lg:gap-0 gap-4 justify-between items-center mb-4">
                                <div class="flex items-center gap-3">
                                    <h1 class="text-xl lg:text-2xl font-bold uppercase">{{ $quiz['desc'] }}</h1>
                                </div>
                                <div class="flex items-center gap-4">
                                    <div class="relative">
                                        <input class="outline-none border p-3 rounded-full pl-10" type="text"
                                            placeholder="Search for something"
                                            class="w-[240px] border-[#E5E7EB] text-[14px] placeholder-gray-400">
                                        <svg class="w-4 h-4 absolute left-3 top-[15px] text-gray-400" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24">
                                            <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2" />
                                        </svg>
                                    </div>
                                    <a href="/profile" class="text-gray-600">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1" stroke="currentColor" class="size-12 hover:text-rose-700">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                        </svg>
                                    </a>

                                </div>
                            </div>

                            <div class="bg-white shadow-md border border-[#E5E7EB] rounded-lg p-6">
                                <h1 class="text-xl lg:text-2xl font-bold mb-4">{{ $quiz['title'] }}</h1>

                                <div id="quiz-container">
                                    @include('components.quiz-question-component', [
                                        'type' => $quiz['type'],
                                        'questions' => $data['questions'],
                                        'currentPage' => $data['currentPage'],
                                        
                                    ])
                                </div>

                                <input type="hidden" name="type-quiz" id="type-quiz" value="{{ $quiz['type'] }}">

                                <div class="flex justify-between mt-6">
                                    <button id="prevPage"
                                        class="bg-white text-[#BA121A] px-4 py-2 rounded md:rounded-3xl hidden border border-solid border-[#BA121A]">
                                        Previous Page
                                    </button>

                                    <button id="nextPage"
                                        class="bg-[#BA121A] text-white px-4 py-2 rounded md:rounded-3xl ml-auto">
                                        Next Page
                                    </button>

                                    <button id="finishTest"
                                        class="bg-[#BA121A] text-white px-4 py-2 rounded md:rounded-3xl hidden">
                                        Finish attempt...
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="w-full lg:w-[278px]">
                    <div class="sticky top-[6.5rem]">
                        <!-- Timer -->
                        <div class="mb-4 shadow-md rounded-md border p-3">
                            <div class="text-[13px] text-rose-600 mb-2 font-bold">Thời gian còn lại</div>
                            <div class="text-[24px] font-bold" id="countdown"></div>
                        </div>

                        <!-- Questions Grid -->
                        <div class="shadow-md border rounded-md p-3">
                            <div class="text-[20px] mb-2 font-bold text-rose-600">Số câu hỏi</div>
                            <div class="grid grid-cols-6 gap-1">
                                <!-- Red buttons 1-5 -->
                                @foreach ($quiz['questions'] as $index => $question)
                                    <button onclick="scrollToQuestion('question-{{ $index + 1 }}')"
                                        class="question-button border border-[#E5E7EB] w-full h-full rounded p-3 text-[13px] text-gray-700"
                                        data-question="{{ $index + 1 }}">
                                        {{ $index + 1 }}
                                    </button>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    @include('components.popup-yes-no-component')
    @include('components.modal-result-quiz-component')
    @include('components.loading')
    

    <x-popup-yes-no-component></x-popup-yes-no-component>

    <div id="overlay">
        <div class="cv-spinner">
            <span class="spinner"></span>
        </div>
    </div>

    <script>
        $(document).ready(function() {

            let currentPage = 1;
            let totalPages = {{ $data['totalPages'] }};
            let typeQuiz = $("#type-quiz").val();
            let urlAjax = "route('quiz." + typeQuiz + "'" + ",['quiz'=>$id])";
            let selectedAnswers = {};

            // Function to scroll to question
            function scrollToQuestion(questionId) {
                setTimeout(() => {
                    const questionElement = document.getElementById(questionId);
                    const header = document.querySelector('header.sticky');
                    const headerHeight = header ? header.offsetHeight : 0;

                    if (questionElement) {
                        const elementPosition = questionElement.getBoundingClientRect().top + window
                            .scrollY;
                        const offsetPosition = elementPosition - headerHeight - 10;

                        window.scrollTo({
                            top: offsetPosition,
                            behavior: 'smooth'
                        });
                    }
                }, 200);
            }


            // Highlight selected question button when an answer is chosen
            $('#quiz-container').on('change', 'input[type="radio"]', function() {
                const questionDiv = $(this).closest('.question');
                const questionId = questionDiv.attr('id'); // Example: "question-1"
                const questionIndex = questionId.split('-')[1]; // Extract number (e.g., "1")

                // Highlight the selected question button
                $(`.question-button[data-question="${questionIndex}"]`).addClass('bg-rose-700 text-white');

                const answerValue = $(this).val();
                if (!selectedAnswers[currentPage]) {
                    selectedAnswers[currentPage] = {};
                }
                selectedAnswers[currentPage][questionIndex] = answerValue;
            });

            // Attach click event to question buttons
            $(document).on('click', '.question-button', function() {
                const questionIndex = $(this).data('question');
                const targetPage = Math.ceil(questionIndex / 6);

                // console.log("Target question:", questionIndex, "Target page:", targetPage);
                // console.log("current page:", currentPage)

                if (targetPage != currentPage) {
                    currentPage = targetPage;
                    loadQuestions(targetPage, function() {
                        scrollToQuestion(`question-${questionIndex}`);
                    });
                } else {
                    scrollToQuestion(`question-${questionIndex}`);
                }
            });

            // Show result modal on next page button click
            // $("#finishTest").click(function() {
            //     $("#modal-result-test").css("display", "flex");
            // });
            $("#finishTest").click(function() {
                $("#popup-modal").css("display", "flex");
            });

            // Close modal when clicking outside or on close button
            $("#close-modal-result-test, #overlay-modal-result-test").click(function() {
                $("#modal-result-test").css("display", "none");
            });

            function loadQuestions(page, callback = null) {
                // if (page < 1 || page > totalPages) return; 
                $.ajax({
                    url: urlAjax,
                    type: "GET",
                    data: {
                        page: page
                    },
                    beforeSend: function() {
                        $("#overlay").show();
                    },
                    success: function(response) {
                        $("#overlay").hide();
                        $("#quiz-container").html(response.html);
                        currentPage = response.currentPage;
                        updateButtons();
                        restoreAnswers(currentPage);

                        if (callback && typeof callback === "function") {
                            callback();
                        }
                    }
                });
            }

            function restoreAnswers(page) {
                if (selectedAnswers[page]) {
                    for (let questionIndex in selectedAnswers[page]) {
                        let answerValue = selectedAnswers[page][questionIndex];
                        $(`#quiz-container input[name="q-${questionIndex}"][value="${answerValue}"]`).prop(
                            "checked", true);
                    }
                }
            }

            function updateButtons() {
                $("#prevPage").toggle(currentPage > 1);
                $("#nextPage").toggle(currentPage < totalPages);
                $("#finishTest").toggle(currentPage >= totalPages);
            }

            $("#prevPage").click(function() {
                if (currentPage > 1) loadQuestions(currentPage - 1);
            });

            $("#nextPage").click(function() {
                if (currentPage < totalPages) {
                    currentPage++;
                    loadQuestions(currentPage);
                }
            });

            updateButtons();
            startCountdown();


             //show popup
             $("#popup-modal-yes").click(function() {
                duration = 0; // Đặt về 0 thay vì xóa
                localStorage.setItem('duration', duration);
                $("#popup-modal").css("display", "none");

                //lấy giá trị
                let id = $(this).closest('#app').find('.question').data('exam_id');
                let customsId = localStorage.getItem('customsId') ? JSON.parse(localStorage.getItem('customsId')) : 0;

                let questionDivs = $('#app .question');
                let questionIds = [];
                
                questionDivs.each(function() {
                    let keyid = $(this).data('id'); 
                    let selectedValues = $(this).find('input[type="radio"]:checked').map(function() {
                        return $(this).val(); 
                    }).get();

                    selectedValues.forEach(value => {
                            questionIds.push(keyid + '-' + value);
                    });
                });
                $.ajax({
                    url: "{{ route('quiz.englishHub')}}",
                    type: "POST",
                    data: {
                        exam_id:id,
                        customsId:customsId,
                        questionIds:questionIds
                    },
                    beforeSend: function() {
                        // Hiển thị loading
                        $(".loading-overlay").show();
                    },
                    success: function(response) {
                        if(response){
                            const {time, correct_count, point ,size , wrong_answers} = response;
                            $('.correct_count').text(correct_count);
                            let number = (size / point) * correct_count;
                            $('.total').text(`${number}/${point}`);
                            $('.time-submit').text(`Submitted ${time}`);
                            $("#modal-result-test").css("display", "flex");
                        }
                    },
                    complete: function() {
                        // Ẩn loading khi request hoàn tất (thành công hoặc thất bại)
                        $(".loading-overlay").hide();
                    }
                });
                
            });

        });
        var duration = localStorage.getItem('duration')|| {{$duration}} * 60 * 60;
            
            function startCountdown(){
                var countdownInterval = setInterval(() => {
                    var h = Math.floor(duration/ 3600);
                    var m = Math.floor(duration % 3600 / 60);
                    var s = Math.floor(duration %  60);
                    $("#countdown").text(
                        (h < 10 ? '0' + h : h) + ":"+
                        (m < 10 ? '0' + m : m) + ":"+
                        (s < 10 ? '0' + s : s) 
                    );
                    localStorage.setItem('duration', duration);
                    
                    if(duration <= 0){
                        clearInterval(countdownInterval);
                        $("#countdown").text("Time's up!");
                        localStorage.removeItem('duration');
                        $("#finishTest").css('pointer-events','none');
                    }else{
                        duration --;
                    }
                }, 1000);
            } 
    </script>
@stop
