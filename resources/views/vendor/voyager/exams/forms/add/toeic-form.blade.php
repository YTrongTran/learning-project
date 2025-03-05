    <form class="exam-form exam-form-toeic" method="POST">
    <div class="exam-toeic questions-container">
        <h3 class="text-danger">PART 1: Photographs</h3>
        <div class="form-group">
            <label for="number-of-questions-part1">Number of questions</label>
            <input type="number" class="form-control question-count" id="number-of-questions-part1" min="6"
                value="6" data-section="part1">
        </div>
        <div class="form-group">
            <label>Upload Audio</label>
            <input type="file" class="form-control" name="questions[part1][1][audio]" accept="audio/*" required>
        </div>
        <div id="part1-questions"></div>

        <h3 class="text-danger">PART 2: Question-Response</h3>
        <div class="form-group">
            <label for="number-of-questions-part2">Number of questions</label>
            <input type="number" class="form-control question-count" id="number-of-questions-part2" min="6"
                value="6" data-section="part2">
        </div>
        <div class="form-group">
            <label>Upload Audio</label>
            <input type="file" class="form-control" name="questions[part2][2][audio]" accept="audio/*" required>
        </div>
        <div id="part2-questions"></div>

        <h3 class="text-danger">PART 3: Conversations</h3>
        <div class="form-group">
            <label for="number-of-questions-part3">Number of questions</label>
            <input type="number" class="form-control question-count" id="number-of-questions-part3" min="6"
                value="6" data-section="part3">
        </div>
        <div class="form-group">
            <label>Upload Audio</label>
            <input type="file" class="form-control" name="questions[part3][3][audio]" accept="audio/*" required>
        </div>
        <div id="part3-questions"></div>

        <h3 class="text-danger">PART 4: Talks</h3>
        <div class="form-group">
            <label for="number-of-questions-part4">Number of questions</label>
            <input type="number" class="form-control question-count" id="number-of-questions-part4" min="7"
                value="7" data-section="part4">
        </div>
        <div class="form-group">
            <label>Upload Audio</label>
            <input type="file" class="form-control" name="questions[part4][4][audio]" accept="audio/*" required>
        </div>
        <div id="part4-questions"></div>

        <h3 class="text-danger">PART 5: Incomplete Sentences</h3>
        <div class="form-group">
            <label for="number-of-questions-part5">Number of questions</label>
            <input type="number" class="form-control question-count" id="number-of-questions-part5" min="10"
                value="10" data-section="part5">
        </div>
        <div id="part5-questions"></div>

        <h3 class="text-danger">PART 6: Text Completion</h3>
        <div class="form-group">
            <label for="number-of-questions-part6">Number of questions</label>
            <input type="number" class="form-control question-count" id="number-of-questions-part6" min="5"
                value="5" data-section="part6">
        </div>
        <div class="form-group">
            <textarea class="form-control" name="questions[toeic][part6][passage]" placeholder="Passage" required></textarea>
        </div>
        <div id="part6-questions"></div>

        <h3 class="text-danger">PART 7: Reading Comprehension</h3>
        <div class="form-group">
            <label for="number-of-questions-part7">Number of messages</label>
            <input type="number" class="form-control question-count" id="number-of-questions-part7" min="1"
                value="1" data-section="part7">
        </div>

        <div id="part7-questions"></div>
    </div>
</form>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
     $(document).ready(function() {
        function generateQuestions(section, minQuestions, answerCount = 0, requiresText = true, requiresImage =
            false, requiresQuestion = false, requiresMessage = false) {
            let $input = $(`#number-of-questions-${section}`);
            let $container = $(`#${section}-questions`);

            function updateQuestions(startNumber) {
                let count = Math.max(parseInt($input.val(), 10), minQuestions);
                $container.empty();

                for (let i = 0; i < count; i++) {
                    let questionNumber = startNumber + i;
                    let messageHtml = `<div class="form-group form-group-message">
                    <div class="form-group">
                        <textarea class="form-control" name="questions[toeic][part7][passage]" placeholder="Passage" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="number-of-questions-part77">Number of questions</label>
                        <input type="number" class="form-control question-count-part7" id="number-of-questions-part77" min="1"
                            value="1" data-section="part77">
                    </div></div>
                    `;

                    let questionHtml = `
                    <div class="question form-group">
                        <h4 class="question-title">Question ${questionNumber}</h4>`;
                           if(requiresQuestion)
                 {
questionHtml +=   `<div class="form-group">
                        <textarea type="text" class="form-control" name="questions" placeholder="Question" required></textarea>
                    </div>`;
                 }
                    questionHtml +=   ` <div class="question-content">
                `;


                    if (requiresImage) {
                        questionHtml += `
                        <div class="form-group">
                            <label>Upload Image</label>
                            <input type="file" class="form-control" name="questions[${section}][${questionNumber}][image]" accept="image/*" required>
                        </div>
                    `;
                    }

                    if (answerCount > 0) {
                        questionHtml += `<h4>Answers</h4>`;
                        for (let j = 1; j <= answerCount; j++) {
                            let answerLabel = String.fromCharCode(64 +
                                j); // Chuyển số thành chữ cái A, B, C, D...
                            questionHtml += `
                            <div class="form-group line-question">
                                <label>
                                    <input type="radio" name="questions[${section}][${questionNumber}][correct]" value="${j}" required> ${answerLabel})
                                </label>`;

                            if (requiresText) {
                                questionHtml +=
                                    `
                                <input type="text" class="form-control" name="questions[${section}][${questionNumber}][answers][]" placeholder="Answer ${answerLabel}" required>`;
                            }

                            questionHtml += `</div>`;
                        }
                    }

                    questionHtml += `</div></div>`;

                    if (requiresMessage) $container.append(messageHtml);
                    if (questionHtml) $container.append(questionHtml);
                }
            }

            return updateQuestions;
        }

        let updatePart1 = generateQuestions("part1", 6, 3, false, true, false, false);
        let updatePart2 = generateQuestions("part2", 6, 3, false, false, false, false);
        let updatePart3 = generateQuestions("part3", 6, 4, true, false, true, false);
        let updatePart4 = generateQuestions("part4", 7, 4, true, false, true, false);
        let updatePart5 = generateQuestions("part5", 10, 4, true, false, true, false);
        let updatePart6 = generateQuestions("part6", 5, 4, true, false, true, false);
        let updatePart7 = generateQuestions("part7", 1, 4, true, false,true, true);

        function updateAllSections() {
            let part1Count = Math.max(parseInt($("#number-of-questions-part1").val(), 10), 6);
            let part2Count = Math.max(parseInt($("#number-of-questions-part2").val(), 10), 6);
            let part3Count = Math.max(parseInt($("#number-of-questions-part3").val(), 10), 6);
            let part4Count = Math.max(parseInt($("#number-of-questions-part4").val(), 10), 7);
            let part5Count = Math.max(parseInt($("#number-of-questions-part5").val(), 10), 10);
            let part6Count = Math.max(parseInt($("#number-of-questions-part6").val(), 10), 5);
            let part7Count = Math.max(parseInt($("#number-of-questions-part7").val(), 10), 10);

            let startPart2 = part1Count + 1;
            let startPart3 = part1Count + part2Count + 1;
            let startPart4 = part1Count + part2Count + part3Count + 1;
            let startPart5 = part1Count + part2Count + part3Count + part4Count + 1;
            let startPart6 = part1Count + part2Count + part3Count + part4Count + part5Count + 1;
            let startPart7 = part1Count + part2Count + part3Count + part4Count + part5Count + part6Count + 1;

            updatePart1(1);
            updatePart2(startPart2);
            updatePart3(startPart3);
            updatePart4(startPart4);
            updatePart5(startPart5);
            updatePart6(startPart6);
            updatePart7(startPart7);
        }

        $(".question-count").on("input", updateAllSections);

        $(document).on("change", ".question-count-part7", function () {
            console.log("vo day 1");
             var count = $(this).val(); // Lấy số lượng câu hỏi từ input select hoặc input number
            var container = $("#question-answer-container"); // Chọn container chứa câu hỏi và câu trả lời
            container.empty(); // Xóa các câu hỏi cũ trước khi thêm mới

            for (var i = 1; i <= count; i++) {
                var questionHtml = `
                    <div class="question-answer-block">
                        <label for="question_${i}">Question ${i}:</label>
                        <input type="text" id="question_${i}" name="questions[]" class="question-input" placeholder="Enter question ${i}">
                        
                        <label for="answer_${i}">Answer ${i}:</label>
                        <input type="text" id="answer_${i}" name="answers[]" class="answer-input" placeholder="Enter answer ${i}">
                    </div>
                `;
                container.append(questionHtml);
            }
        });
        updateAllSections();
    });
</script>
