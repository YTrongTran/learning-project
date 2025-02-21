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
