@extends('layouts.main')
@section('title', 'Quiz')

@section('content')

    <div class="container">
        <div class="flex flex-col-reverse lg:flex-row lg:my-20 my-10 gap-6 justify-between">
            <!-- Left Sidebar - Exact width and padding -->
            <div class="flex flex-col-reverse md:flex-row gap-6 lg:w-[45%] w-full">
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
                            <div class="text-[20px] mb-2 font-bold text-rose-600">Số câu hỏi</div>
                            <div class="grid grid-cols-5 gap-1">

                                @foreach ($questionsMerged as $index => $question)
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
            <div class="lg:w-[55%] flex-1">
                <div class="flex gap-8">
                    <div class="flex-1 text-[#06052E]">
                        <div class="flex lg:flex-row flex-col lg:gap-0 gap-4 justify-between items-center mb-8">
                            <div class="flex items-center gap-3">
                                <h1 class="text-[17px] font-semibold">Placement Test - Superkids</h1>
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
                            <h1 class="text-2xl font-bold mb-4">TOEIC 1</h1>

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

                                <button id="finishTest"
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
    <div class="fixed inset-0 bg-black bg-opacity-50 hidden z-50" id="modal-result-test">
        <div class="bg-white w-[800px] z-40 rounded-lg shadow-xl fixed left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2">
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
                    <p class="text-sm text-gray-600 mt-1">Bài thi thử ngỏm 2 phần Listening và Reading, với tổng cộng 22
                        câu
                        hỏi.</p>
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
                                <th class="px-6 py-3 text-left">Grade/24.00</th>
                                <th class="px-6 py-3 text-left">Reviews</th>
                                <th class="px-6 py-3 text-left">Feedback</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-t">
                                <td class="px-6 py-4">
                                    <div>Finished</div>
                                    <div class="text-gray-500 text-xs">Submitted Wednesday, 8 January 2025, 2:16 PM</div>
                                </td>
                                <td class="px-6 py-4">6.00</td>
                                <td class="px-6 py-4">Not permitted</td>
                                <td class="px-6 py-4">
                                    <p class="font-medium mb-2">Khả năng Anh ngữ của bạn còn hạn chế!</p>
                                    <p class="text-gray-600">Kết quả bài kiểm tra nhanh cho thấy khả năng diễn đạt và đọc
                                        hiểu của bạn đang gặp hạn ở mức cơ bản, bạn gặp khó khăn lớn trong việc đọc - hiểu
                                        tiếng Anh.</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Final Grade -->
            <div class="px-10 py-4 border-t">
                <p class="font-medium">Your final grade for this quiz is 3.00/24.00.</p>
            </div>

            <!-- Overall Feedback -->
            <div class="px-10 py-4 pb-10 border-t">
                <h3 class="font-medium mb-2">Overall feedback</h3>
                <p class="font-medium mb-2">Khả năng Anh ngữ của bạn hạn chế!</p>
                <p class="text-sm text-gray-600 mb-3">
                    Kết quả bài kiểm tra nhanh cho thấy khả năng diễn đạt và đọc hiểu của bạn đang gặp hạn ở mức cơ bản, bạn
                    gặp khó khăn lớn trong việc đọc - hiểu tiếng Anh.
                </p>
                <p class="text-sm text-gray-600 mb-3">
                    Bạn cần khóa học phụ hợp để hình thành nền tảng Anh ngữ vững chắc. Bạn có thể tham khảo chương trình
                    English Hub với các cấp học từ Foundation Hub đến Global Hub. Các khóa học giúp bạn cải thiện đồng đều
                    04 kỹ năng và cũng có lộ trình tăng tiếng Anh vững chắc, làm tiền đề để bạn hướng đến các khóa học nâng
                    cấp hơn như IELTS.
                </p>
                <p class="text-sm text-gray-600">
                    Nhưng đừng lo, chỉ cần bạn không ngừng cố gắng, VUS tin bạn sẽ làm được!
                </p>
            </div>
        </div>
        <div class="bg-black bg-opacity-50 z-20 fixed top-0 right-0 bottom-0 left-0  inset-0 items-center justify-center "
            id="overlay-modal-result-test">

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

            // Function to scroll to question
            function scrollToQuestion(questionId) {
                const questionElement = document.getElementById(questionId);
                if (questionElement) {
                    questionElement.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
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
            // Con truong hop click cau hoi o next page chua lam
            $(document).on('click', '.question-button', function() {
                const questionId = $(this).data('question');
                console.log("Scrolling to question:", questionId);
                scrollToQuestion(`question-${questionId}`);
            });

            // Show result modal on next page button click
            $("#finishTest").click(function() {
                $("#modal-result-test").css("display", "flex");
            });

            // Close modal when clicking outside or on close button
            $("#close-modal-result-test, #overlay-modal-result-test").click(function() {
                $("#modal-result-test").css("display", "none");
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
