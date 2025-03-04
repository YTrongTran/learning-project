<form class="exam-form exam-form-teen hidden" method="POST">
    <div class="exam-teen questions-container">
        <h3 class="text-danger">LISTENING</h3>
        <div class="form-group">
            <label for="number-of-questions-listening">Number of questions</label>
            <input type="number" class="form-control question-count" id="number-of-questions-listening" min="25"
                value="25" data-section="listening">
        </div>
        <div id="listening-questions"></div>

        <h3 class="text-danger">READING</h3>
        <div class="form-group">
            <label for="number-of-questions-reading">Number of questions</label>
            <input type="number" class="form-control question-count" id="number-of-questions-reading" min="12"
                value="12" data-section="reading">
        </div>
        <div id="reading-questions"></div>

        <h3 class="text-danger">WRITING</h3>
        <div class="form-group">
            <label for="number-of-questions-writing">Number of questions</label>
            <input type="number" class="form-control question-count" id="number-of-questions-writing" min="1"
                value="1" data-section="writing">
        </div>
        <div id="writing-questions"></div>
    </div>
</form>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function() {

        function generateQuestions(section, minQuestions, answerCount = 0, isWriting = false) {
            let $input = $(`#number-of-questions-${section}`);
            let $container = $(`#${section}-questions`);

            function updateQuestions(startNumber) {
                let count = Math.max(parseInt($input.val(), 10), minQuestions);
                $container.empty();

                for (let i = 0; i < count; i++) {
                    let questionNumber = startNumber + i;
                    let questionHtml = `
                    <div class="question form-group">
                        <h4 class="question-title">Question ${questionNumber}</h4>
                        <div class="question-content">
                            <div class="form-group">
                                <textarea class="form-control" name="questions[${section}][${questionNumber}][text]" placeholder="Enter question here..." required></textarea>
                            </div>`;

                    if (!isWriting) {
                        questionHtml += `<h4>Answers</h4>`;
                        for (let j = 1; j <= answerCount; j++) {
                            let answerLabel = String.fromCharCode(64 +
                                j); // Chuyển số thành chữ cái A, B, C, D...
                            questionHtml += `
                            <div class="form-group line-question">
                                <label>
                                    <input type="radio" name="questions[${section}][${questionNumber}][correct]" value="${j}" required> ${answerLabel})
                                </label>
                                <input type="text" class="form-control" name="questions[${section}][${questionNumber}][answers][]" placeholder="Answer ${answerLabel}" required>
                            </div>`;
                        }
                    } else {
                        questionHtml += `
                        <div class="form-group">
                            <textarea class="form-control" name="questions[${section}][${questionNumber}][answer]" placeholder="Enter your answer..." required></textarea>
                        </div>`;
                    }

                    questionHtml += `</div></div>`;
                    $container.append(questionHtml);
                }
            }

            return updateQuestions;
        }

        function updateAllSections() {
            let listeningCount = Math.max(parseInt($("#number-of-questions-listening").val(), 10), 25);
            let readingCount = Math.max(parseInt($("#number-of-questions-reading").val(), 10), 12);
            let writingCount = Math.max(parseInt($("#number-of-questions-writing").val(), 10), 2);

            let startReading = listeningCount + 1;
            let startWriting = listeningCount + readingCount + 1;

            updateListening(1);
            updateReading(startReading);
            updateWriting(startWriting);
        }

        let updateListening = generateQuestions("listening", 25, 3);
        let updateReading = generateQuestions("reading", 12, 4);
        let updateWriting = generateQuestions("writing", 2, 0, true);

        $(".question-count").on("input", updateAllSections);

        updateAllSections();
    });
</script>
