@extends('layouts.main')
@section('title', 'Quiz IELTS')

@section('content')

    <div class="w-full px-4">
        <div class="flex flex-col-reverse lg:flex-row lg:mb-20 mb-10 mt-10 gap-6 justify-between">

            <x-left-sidebar-quiz-component></x-left-sidebar-quiz-component>

            <div class="flex flex-col-reverse md:flex-row gap-6 lg:w-[82%] w-full flex-1">
                <div class="flex-1 gap-8 w-full">
                    <div class="flex-1 text-[#06052E]">
                        <div class="flex lg:flex-row flex-col lg:gap-0 gap-4 justify-between items-center mb-4">
                            <div class="flex items-center gap-3">
                                <h1 class="text-xl lg:text-2xl font-bold uppercase">{{ $data['desc'] }}</h1>
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
                                <span class="text-gray-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1" stroke="currentColor" class="size-12">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    </svg>
                                </span>

                            </div>
                        </div>
                        <div class="bg-white shadow-md border border-[#E5E7EB] rounded-lg p-6">
                            <h1 class="text-xl lg:text-2xl font-bold mb-4">{{ $data['title'] }}</h1>

                            <div class="pagination mb-6 flex">
                                @for ($i = 1; $i <= $data['totalPages']; $i++)
                                    <a href="#" data-page="{{ $i }}"
                                        class="page-link page-link-{{ $i }} block text-center rounded-lg p-2 mr-2 hover:bg-rose-700 hover:text-white {{ $i == $data['currentPage'] ? 'bg-rose-700 text-white' : ' bg-gray-200 text-black' }}">
                                        @if ($i == 1)
                                            Listening
                                        @elseif($i == 3)
                                            Reading
                                        @elseif($i == 4)
                                            Writing
                                        @elseif($i == 5)
                                            Speaking
                                        @endif
                                    </a>
                                @endfor
                            </div>

                            {{-- Area display question --}}
                            <div id="quiz-container">
                                @include('components.quiz-ielts-question-component', [
                                    'questions' => $data['questions'],
                                    'currentPage' => $data['currentPage'],
                                ])
                            </div>

                            {{-- Page transfer button --}}
                            <div class="flex justify-between mt-6">
                                <button id="prevPage"
                                    class="bg-white text-[#BA121A] px-4 py-2 rounded md:rounded-3xl hidden border border-solid border-[#BA121A]">
                                    Previous Page
                                </button>

                                <button id="nextPage"
                                    class="bg-[#BA121A] text-white px-4 py-2 rounded md:rounded-3xl ml-auto">
                                    Next Page
                                </button>

                                <button id="finishTest" data-modal-target="popup-modal" data-modal-toggle="popup-modal"
                                    class="bg-[#BA121A] text-white px-4 py-2 rounded md:rounded-3xl hidden">
                                    Finish attempt...
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full lg:w-[278px]">
                    <div class="sticky top-[6.5rem]">
                        <!-- Timer -->
                        <div class="mb-4 shadow-md rounded-md border p-3">
                            <div class="text-[13px] text-rose-600 mb-2 font-bold">Thời gian còn lại</div>
                            <div class="text-[24px] font-bold">0:58:16</div>
                        </div>

                        <!-- Questions Grid -->
                        <div class="shadow-md border rounded-md p-3">
                            <div class="text-[20px] font-bold text-rose-600">Số câu hỏi</div>

                            <h6 class="font-medium text-base my-2" id="part-1">Listening</h6>
                            <div class="question-part" data-part="1">
                                <div class="question-list grid grid-cols-6 gap-2">
                                    @foreach ($quiz['parts'] as $part)
                                        @if (!empty($part['contents']))
                                            @foreach ($part['contents'] as $questionIndexParent => $questionParent)
                                                @if (!empty($questionParent['questions']))
                                                    @foreach ($questionParent['questions'] as $questionIndex => $question)
                                                        <button
                                                            onclick="scrollToQuestion('question-{{ $question['question_id'] }}')"
                                                            class="question-button border border-gray-300 rounded p-3 text-sm text-gray-700 justify-self-center w-[42px]"
                                                            data-question="{{ $question['question_id'] }}">
                                                            {{ $question['question_id'] }}
                                                        </button>
                                                    @endforeach
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                            <h6 class="font-medium text-base my-2" id="part-3">Reading</h6>
                            <div class="question-part" data-part="3">
                                <div class="question-list grid grid-cols-6 gap-2">
                                    @foreach ($quiz['parts'] as $part)
                                        @if (!empty($part['passages']))
                                            @foreach ($part['passages'] as $questionIndexParent => $questionParent)
                                                @if (!empty($questionParent['questions']))
                                                    @foreach ($questionParent['questions'] as $questionIndex => $question)
                                                        @if (!empty($question['questionsChild']))
                                                            @foreach ($question['questionsChild'] as $questionIndex => $questionChild)
                                                                <button
                                                                    onclick="scrollToQuestion('question-{{ $questionChild['question_id'] }}')"
                                                                    class="question-button border border-gray-300 rounded p-3 text-sm text-gray-700 justify-self-center w-[42px]"
                                                                    data-question="{{ $questionChild['question_id'] }}">
                                                                    {{ $questionChild['question_id'] }}
                                                                </button>
                                                            @endforeach
                                                        @endif
                                                    @endforeach
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                            <h6 class="font-medium text-base my-2" id="part-4">Writing</h6>
                            <h6 class="font-medium text-base my-2" id="part-5">Speaking</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <x-result-quiz-component :data="$data"></x-result-quiz-component> --}}
    <x-result-quiz-component></x-result-quiz-component>

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
            let selectedAnswers = {};

            let writingAnswer = "";
            let mediaRecorder;
            let audioChunks = [];
            let countdown;
            let timeLeft = 300; // 5 phút = 300 giây

            $(".page-link").on("click", function(e) {
                e.preventDefault();
                let page = $(this).data("page");
                loadQuestions(page);
            });

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
            $('#quiz-container').on('change', 'input[type="radio"], input[type="text"]', function() {
                const questionDiv = $(this).closest('.question');
                const questionId = questionDiv.attr('id'); // Example: "question-1-13"
                const partIndex = questionId.split('-')[1]; // Extract number (e.g., "1")
                const questionIndex = questionId.split('-')[2]; // Extract number (e.g., "13")

                $(`.question-part[data-part="${partIndex}"] .question-button[data-question="${questionIndex}"]`)
                    .addClass('bg-rose-700 text-white');
                const answerValue = $(this).val();
                if (!selectedAnswers[currentPage]) {
                    selectedAnswers[currentPage] = {};
                }
                selectedAnswers[currentPage][questionIndex] = answerValue;
            });

            // Attach click event to question buttons
            $(document).on('click', '.question-button', function() {
                const questionIndex = $(this).data('question');
                const questionDiv = $(this).closest('.question-part');
                let partId = questionDiv.data('part');
                const questionId = `question-${partId}-${questionIndex}`;

                if ($(`#quiz-container #${questionId}`).length) {
                    scrollToQuestion(questionId);
                } else {
                    if (partId == 1) {
                        partId = 2;
                    }
                    if (partId !== null && partId !== currentPage) {
                        loadQuestions(partId, function() {
                            scrollToQuestion(questionId);
                        });
                    }
                }
            });

            // Show result modal on next page button click
            $("#finishTest").click(function() {
                $("#popup-modal").removeClass("hidden").addClass("flex");
            });

            // Submit test
            $("[data-modal-hide='popup-modal-yes']").click(function() {
                $("#popup-modal").addClass("hidden").removeClass("flex");

                $.ajax({
                    url: "{{ route('quiz.submitIelts') }}",
                    type: "POST",
                    data: {
                        answers: selectedAnswers,
                        answerWriting: writingAnswer,
                        audio_data: $('#audio_data').val(),
                        _token: "{{ csrf_token() }}"
                    },
                    beforeSend: function() {
                        $("#overlay").show();
                    },
                    error: function(response) {
                        $("#overlay").hide();
                        console.log("error: ", response.responseText);
                    },
                    success: function(response) {
                        $("#overlay").hide();
                        console.log("response: ", response);

                        $("#modal-result-test").removeClass("hidden").addClass("flex");

                        $(".modal-submitted-at").text("Submitted on: " + response.submitted_at);
                        $(".reading-correct-count").text(response.correctCountReading);
                        $(".listening-correct-count").text(response.correctCountListening);
                        $(".grade-of-listening span").text(response.listeningScore);
                        $(".grade-of-reading span").text(response.readingScore);
                    }
                });

            });

            $("[data-modal-hide='popup-modal']").click(function() {
                $("#popup-modal").addClass("hidden").removeClass("flex");
            });

            // Close modal when clicking outside or on close button
            $("#close-modal-result-test, #overlay-modal-result-test").click(function() {
                $("#modal-result-test").addClass("hidden").removeClass("flex");
            });

            function loadQuestions(page) {
                // if (page < 1 || page > totalPages) return; 
                $.ajax({
                    url: "{{ route('quiz.ielts', ['quiz' => $id]) }}",
                    type: "GET",
                    data: {
                        page: page
                    },
                    beforeSend: function() {
                        $("#overlay").show();
                    },
                    error: function(response) {
                        $("#overlay").hide();
                        console.log("error: ", response.responseText);
                    },
                    success: function(response) {
                        $("#overlay").hide();
                        $("#quiz-container").html(response.html);
                        currentPage = response.currentPage;

                        updateButtons();
                        restoreAnswers(currentPage);

                    }
                });
            }

            function restoreAnswers(page) {
                $(".page-link").removeClass('bg-rose-700 text-white').addClass('bg-gray-200 text-black');
                $(`.page-link[data-page="${page}"]`).removeClass('bg-gray-200 text-black').addClass(
                    'bg-rose-700 text-white');
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
                console.log("selectedAnswers: ", selectedAnswers);
            });

            updateButtons();

            // audio processing
            function updateTimerDisplay() {
                let minutes = Math.floor(timeLeft / 60);
                let seconds = timeLeft % 60;
                $('#countdown-timer').text(
                    `${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`);
            }

            $('#quiz-container').on('click', '#start-recording', function() {
                navigator.mediaDevices.getUserMedia({
                    audio: true
                }).then(stream => {
                    mediaRecorder = new MediaRecorder(stream);
                    mediaRecorder.start();
                    audioChunks = [];

                    mediaRecorder.ondataavailable = event => {
                        audioChunks.push(event.data);
                    };

                    mediaRecorder.onstop = () => {
                        const audioBlob = new Blob(audioChunks, {
                            type: 'audio/wav'
                        });
                        const reader = new FileReader();
                        reader.readAsDataURL(audioBlob);
                        reader.onloadend = function() {
                            $('#audio_data').val(reader.result);
                        };
                        const audioUrl = URL.createObjectURL(audioBlob);
                        $('#audio-playback').attr('src', audioUrl).removeClass('hidden');
                    };

                    timeLeft = 300;
                    updateTimerDisplay();
                    $('#countdown-timer').removeClass('hidden');
                    countdown = setInterval(() => {
                        timeLeft--;
                        updateTimerDisplay();
                        if (timeLeft <= 0) {
                            clearInterval(countdown);
                            mediaRecorder.stop();
                            $('#start-recording').removeClass('hidden');
                            $('#stop-recording').addClass('hidden');
                        }
                    }, 1000);

                    $(this).addClass('hidden');
                    $('#stop-recording').removeClass('hidden');
                });
            });

            $('#quiz-container').on('click', '#stop-recording', function() {
                if (mediaRecorder) {
                    mediaRecorder.stop();
                }
                clearInterval(countdown);
                $('#countdown-timer').addClass('hidden');
                $(this).addClass('hidden');
                $('#start-recording').removeClass('hidden');
                // cursor-not-allowed
            });

            //writing content
            $('#quiz-container').on('input', '#writing-textarea', function() {
                writingAnswer = $(this).val().trim();
            });
        });
    </script>
@stop
