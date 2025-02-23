@extends('layouts.main')
@section('title', 'Quiz TOEIC')

@section('content')

    <div class="w-full px-4">
        <div class="flex flex-col-reverse lg:flex-row lg:mb-20 mb-10 mt-10 gap-6 justify-between">
            <!-- Left Sidebar - Exact width and padding -->
            <div class="flex flex-col-reverse md:flex-row gap-6 lg:w-[40%] w-full">
                <div class="lg:w-[450px] w-full h-fit rounded-md overflow-hidden shadow-md border-r border-[#E5E7EB]">
                    <h2 class="font-bold text-[15px] bg-rose-200 p-2">Course Menu</h2>
                    <div class="p-2">
                        <div class="font-medium text-[13px] mb-2">Tiếng Anh Mẫu Hè Superkids (6-11 Tuổi)</div>
                        <ul class="space-y-2 text-[13px] pl-4 ">
                            <li>Học liệu</li>
                            <li>Viết</li>
                            <li>Nghe</li>
                            <li>Phát âm</li>
                        </ul>
                    </div>
                </div>
                <div class="w-full">
                    <div class="sticky top-[6.5rem]">
                        <!-- Timer -->
                        <div class="mb-4 shadow-md rounded-md border p-3">
                            <div class="text-[13px] text-rose-600 mb-2 font-bold">Thời gian còn lại</div>
                            <div class="text-[24px] font-bold">0:58:16</div>
                        </div>

                        <!-- Questions Grid -->
                        <div class="shadow-md border rounded-md p-3">
                            <div class="text-[20px] font-bold text-rose-600">Số câu hỏi</div>

                            @foreach ($quiz['parts'] as $partIndex => $part)
                                <h6 id="part-{{ $partIndex + 1 }}" class="font-medium text-base my-2">
                                    Part {{ $partIndex + 1 }}
                                </h6>
                                <div class="question-part" data-part="{{ $partIndex + 1 }}">
                                    <?php
                                    // print_r($part['description']);
                                    ?>
                                    <div class="question-list grid grid-cols-6 gap-2">
                                        @if (!empty($part['questions']))
                                            @foreach ($part['questions'] as $questionIndex => $question)
                                                <button
                                                    onclick="scrollToQuestion('question-{{ $question['question_id'] }}')"
                                                    class="question-button border border-gray-300 rounded p-3 text-sm text-gray-700 justify-self-center w-[42px]"
                                                    data-question="{{ $question['question_id'] }}">
                                                    {{ $question['question_id'] }}
                                                </button>
                                            @endforeach
                                        @endif
                                        @if (!empty($part['passages']))
                                            @foreach ($part['passages'] as $passageIndex => $passage)
                                                @if (!empty($passage['questions']))
                                                    @foreach ($passage['questions'] as $questionIndex => $question)
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
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="lg:w-[60%] flex-1">
                <div class="flex gap-8">
                    <div class="flex-1 text-[#06052E]">
                        <div class="flex lg:flex-row flex-col lg:gap-0 gap-4 justify-between items-center mb-8">
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

                            <div class="pagination mb-6">
                                @for ($i = 1; $i <= $data['totalPages']; $i++)
                                    <a href="#" data-page="{{ $i }}"
                                        class="page-link rounded-lg p-2 mr-2 hover:bg-rose-700 hover:text-white   {{ $i == $data['currentPage'] ? 'bg-rose-700 text-white' : ' bg-gray-200 text-black' }}">Part
                                        {{ $i }}</a>
                                @endfor
                            </div>

                            {{-- Area display question --}}
                            <div id="quiz-container">
                                @include('components.quiz_toeic', [
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
                    <h2 class="text-xl font-semibold">Placement Test - Superkids</h2>
                    <p class="text-sm text-gray-600 mt-1">Bài thi gồm 2 phần Listening và Reading, với tổng cộng 50
                        câu hỏi.</p>
                    <p class="text-sm text-gray-600">Bạn hãy trả lời hết sức mình nhé!</p>
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
                                <th class="px-6 py-3 text-left">State</th>
                                <th class="px-6 py-3 text-left">Grade/50</th>
                                <th class="px-6 py-3 text-left">Reviews</th>
                                <th class="px-6 py-3 text-left">Feedback</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-t">
                                <td class="px-6 py-4">
                                    <div>Finished</div>
                                    <div class="text-gray-500 text-xs modal-submitted-at">Submitted Wednesday, 8 January
                                        2025, 2:16 PM</div>
                                </td>
                                <td class="px-6 py-4"><span class="modal-grade">6</span></td>
                                <td class="px-6 py-4">Not permitted</td>
                                <td class="px-6 py-4">
                                    <p class="font-medium mb-2 modal-feedback">Khả năng Anh ngữ của bạn còn hạn chế!</p>
                                    <!-- Feedback sẽ được cập nhật ở đây -->
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Final Grade -->
            <div class="px-10 py-4 border-t">
                <p class="font-medium grade-of-total">Your final grade for this quiz is <span>3.00/24.00</span>.</p>
            </div>

            <!-- Overall Feedback -->
            <div class="px-10 py-4 pb-10 border-t">
                <h3 class="text-lg font-semibold mb-4">Overall feedback</h3>
                <p class="font-medium mb-2 level-user">Mức độ khả năng: <span>Sơ cấp (Beginner)</span></p>
                <p class="font-medium mb-2 class-user">
                    Lớp học tưng ứng: <span>Lớp TOEIC 300</span>
                </p>
            </div>
        </div>
        <div class="bg-black bg-opacity-50 z-20 fixed top-0 right-0 bottom-0 left-0  inset-0 items-center justify-center "
            id="overlay-modal-result-test">

        </div>
    </div>

    <div id="popup-modal" tabindex="-1"
        class="fixed inset-0 bg-black bg-opacity-75 hidden z-50 items-center justify-center ">
        <div class="relative p-4 w-full max-w-md max-h-full ">
            <div class="relative bg-white rounded-lg shadow-sm">
                <button type="button"
                    class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-hide="popup-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="p-4 md:p-5 text-center">
                    <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure you want to submit?
                    </h3>
                    <button data-modal-hide="popup-modal-yes" type="button"
                        class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                        Yes, I'm sure
                    </button>
                    <button data-modal-hide="popup-modal" type="button"
                        class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">No,
                        cancel</button>
                </div>
            </div>
        </div>
    </div>

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

            $(".page-link").on("click", function(e) {
                e.preventDefault();
                let page = $(this).data("page");
                loadQuestions(page);
            });

            // Function to scroll to question
            function scrollToQuestion(questionId) {
                // setTimeout(() => {
                //     const questionElement = document.getElementById(questionId);
                //     if (questionElement) {
                //         questionElement.scrollIntoView({
                //             behavior: 'smooth',
                //             block: 'start'
                //         });
                //     }
                // }, 200);

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
                const cleanQuestionIndex = questionIndex.trim();

                // Highlight the selected question button
                $(`.question-button[data-question="${cleanQuestionIndex}"]`).addClass(
                    'bg-rose-700 text-white');
                const answerValue = $(this).val();
                if (!selectedAnswers[currentPage]) {
                    selectedAnswers[currentPage] = {};
                }
                selectedAnswers[currentPage][cleanQuestionIndex] = answerValue;
            });

            // Attach click event to question buttons
            $(document).on('click', '.question-button', function() {
                const questionIndex = $(this).data('question');
                const questionId = `question-${questionIndex}`;

                const questionDiv = $(this).closest('.question-part');
                const partId = questionDiv.data('part');

                if ($(`#quiz-container #${questionId}`).length) {
                    scrollToQuestion(questionId);
                } else {

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
                    url: "{{ route('quiz.submitToeic') }}",
                    type: "POST",
                    data: {
                        answers: selectedAnswers,
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

                        $(".modal-grade").text(response.correctCount);
                        $(".modal-feedback").text(response.userComment);
                        $(".modal-submitted-at").text("Submitted on: " + response.submitted_at);
                        $(".grade-of-total span").text(response.correctCount +
                            "/" + response.totalQuestions);
                        $(".level-user span").text(response.userLevel);
                        $(".class-user span").text(response.userClass);
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
                    url: "{{ route('quiz.toeic', ['quiz' => $id]) }}",
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

            });

            updateButtons();
        });
    </script>
@stop
