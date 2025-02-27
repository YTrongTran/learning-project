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
                            <h1 class="text-xl lg:text-2xl font-bold mb-4">{{ $data['title'] }}</h1>

                            <div class="pagination mb-6 grid grid-cols-2 gap-2 lg:flex">
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

    <div class="fixed inset-0 bg-black bg-opacity-50 hidden z-50 justify-center items-center" id="modal-result-test">
        <div class="bg-white w-[800px] max-h-[90vh] rounded-lg shadow-xl overflow-y-auto p-5 z-50 relative">
            <!-- Close Button -->
            <button id="close-modal-result-test" class="absolute right-4 top-4 text-gray-500 hover:text-gray-700">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>

            <!-- Modal Header -->
            <div class="py-6 px-10 flex items-center gap-4 border-b">
                <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center">
                    <svg class="w-6 h-6 text-red-600" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z" />
                        <path fill-rule="evenodd"
                            d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
                <div>
                    <h2 class="text-xl font-semibold">IELTS Test</h2>
                    <p class="text-sm text-gray-600 mt-1">Bài thi gồm 4 phần Listening, Reading, Writing và Speaking</p>
                    <p class="text-sm text-gray-600">2 phần thi đầu sẽ có kết quả ngay, 2 phần thi sau sẽ có kết quả gửi về
                        cho bạn sau.</p>
                </div>
            </div>

            <!-- Attempt Info -->
            <div class="px-10 py-4 bg-gray-50 text-sm">
                <span class="mr-6">Attempts allowed: 1</span>
                <span>Time limit: 45 mins</span>
            </div>

            <!-- Summary Table -->
            <div class="px-10 pb-6">
                <h3 class="text-lg font-semibold mb-4">Summary of your previous attempts</h3>
                <div class="border rounded-lg overflow-hidden">
                    <table class="w-full text-sm">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left">Count correct answers</th>
                                <th class="px-6 py-3 text-left">Listening</th>
                                <th class="px-6 py-3 text-left">Reading</th>
                                <th class="px-6 py-3 text-left">Writing</th>
                                <th class="px-6 py-3 text-left">Speaking</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-t">
                                <td class="px-6 py-4">
                                    <div>Finished</div>
                                    <div class="text-gray-500 text-xs modal-submitted-at">Submitted Wednesday, 8 January
                                        2025, 2:16 PM</div>
                                </td>
                                <td class="px-6 py-4"><span class="listening-correct-count">6</span></td>
                                <td class="px-6 py-4"><span class="reading-correct-count">6</span></td>
                                <td class="px-6 py-4">Not permitted</td>
                                <td class="px-6 py-4">Not permitted</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Final Grade -->
            <div class="px-10 py-4 border-t">
                <p class="font-medium grade-of-listening">Your grade listening for this quiz is <span>3</span>.</p>
                <p class="font-medium grade-of-reading">Your grade reading for this quiz is <span>3</span>.</p>
            </div>

        </div>
        <div class="bg-black bg-opacity-50 z-20 fixed top-0 right-0 bottom-0 left-0  inset-0 items-center justify-center "
            id="overlay-modal-result-test">

        </div>
    </div>

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
            let id = {{ $id }};
            let urlAjax = "route('quiz.ielts',['quiz'=>" + id + "])";
            let selectedAnswers = {};

            let writingAnswer = "";

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
                    if (partId == 1 && questionIndex > 13) {
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

                let audioData = {};
                Object.keys(localStorage).forEach(function(key) {
                    if (key.startsWith("audio_data_")) {
                        audioData[key] = localStorage.getItem(key);
                    }
                });

                $.ajax({
                    url: "{{ route('quiz.submitIelts') }}",
                    type: "POST",
                    data: {
                        answers: selectedAnswers,
                        answerWriting: writingAnswer,
                        audio_data: audioData,
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

                        Object.keys(localStorage).forEach(function(key) {
                            if (key.startsWith("audio_data_")) {
                                localStorage.removeItem(key);
                            }
                        });

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
                        attachAudioEvents();

                        if (currentPage == totalPages) {
                            attachAudioSpeakingEvents();
                            restoreAudio();
                        }

                        $("#audio-container audio").each(function() {
                            let audioSrc = $(this).find("source").attr("src");
                            if (sessionStorage.getItem(audioSrc) === "locked") {
                                $(this).data("locked", true);
                            }
                        });

                        if (callback && typeof callback === "function") {
                            callback();
                        }
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
                        let $input = $(`#quiz-container input[name="q-${questionIndex}"]`);

                        if ($input.attr("type") === "radio") {
                            $input.filter(`[value="${answerValue}"]`).prop("checked", true);
                        } else if ($input.attr("type") === "text") {
                            $input.val(answerValue);
                        }
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
            attachAudioEvents();

            //writing content
            $('#quiz-container').on('input', '#writing-textarea', function() {
                writingAnswer = $(this).val().trim();
            });
            if (writingAnswer) {
                $('#quiz-container #writing-textarea').val(writingAnswer);
            }
        });
    </script>
@stop
