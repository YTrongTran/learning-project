<form class="exam-form exam-form-ielts" method="POST">
    <div class="exam-ielts questions-container">
        <!-- LISTENING SECTION -->
        <h3 class="text-primary">LISTENING TEST</h3>
        {{-- <div class="form-group">
            <label>Upload Listening Audio</label>
            <input type="file" class="form-control" name="listening_audio" accept="audio/*" required>
        </div> --}}

        <!-- Section 1 -->
        <div class="listening-section">
            <h4>Section 1</h4>
            <div class="form-group">
                <label>Upload Listening Audio</label>
                <input type="file" class="form-control" name="listening_audio" accept="audio/*" required>
            </div>
            <div class="form-group">
                <label>Number of questions</label>
                <input type="number" class="form-control question-count" id="listening-section1-count" min="10"
                    value="10" data-section="listening1">
            </div>
            <div class="form-group">
                <textarea class="form-control" name="listening_section1_text" placeholder="Section 1 Text/Instructions" required></textarea>
            </div>
            <div id="listening-section1-questions"></div>
        </div>

        <!-- Section 2 -->
        <div class="listening-section">
            <h4>Section 2</h4>
            <div class="form-group">
                <label>Upload Listening Audio</label>
                <input type="file" class="form-control" name="listening_audio" accept="audio/*" required>
            </div>
            <div class="form-group">
                <label>Number of questions</label>
                <input type="number" class="form-control question-count" id="listening-section2-count" min="11"
                    value="11" data-section="listening2">
            </div>
            <div class="form-group">
                <textarea class="form-control" name="listening_section2_text" placeholder="Section 2 Text/Instructions" required></textarea>
            </div>
            <div id="listening-section2-questions"></div>
        </div>

        <!-- READING SECTION -->
        <h3 class="text-primary">READING TEST</h3>
        <!-- Passage 1 -->
        <div class="reading-section">
            <h4>Passage 1</h4>
            <div class="form-group">
                <label>Number of questions</label>
                <input type="number" class="form-control question-count" id="reading-passage1-count" min="14"
                    value="14" data-section="reading1">
            </div>
            <div class="form-group">
                <textarea class="form-control" name="reading_passage1_text" style="height: 300px" placeholder="Reading Passage 1"
                    required></textarea>
            </div>
            <div id="reading-passage1-questions"></div>
        </div>

        <!-- Passage 2 -->
        <div class="reading-section">
            <h4>Passage 2</h4>
            <div class="form-group">
                <label>Number of questions</label>
                <input type="number" class="form-control question-count" id="reading-passage2-count" min="9"
                    value="9" data-section="reading2">
            </div>
            <div class="form-group">
                <textarea class="form-control" name="reading_passage2_text" style="height: 300px" placeholder="Reading Passage 2"
                    required></textarea>
            </div>
            <div id="reading-passage2-questions"></div>
        </div>

        <!-- WRITING SECTION -->
        <h3 class="text-primary">WRITING TEST</h3>
        <!-- Task 1 -->
        {{-- <div class="writing-section">
            <h4>Task 1</h4>
            <div class="form-group">
                <label>Upload Image/Graph/Chart</label>
                <input type="file" class="form-control" name="writing_task1_image" accept="image/*" required>
            </div>
            <div class="form-group">
                <textarea class="form-control" name="writing_task1_prompt" placeholder="Task 1 Instructions" required></textarea>
            </div>
        </div>

        <!-- Task 2 -->
        <div class="writing-section">
            <h4>Task 2</h4>
            <div class="form-group">
                <textarea class="form-control" name="writing_task2_prompt" placeholder="Task 2 Essay Question" required></textarea>
            </div>
        </div> --}}

        <div class="writing-section">
            <h4>Task 1</h4>
            <div class="form-group">
                <textarea class="form-control" name="writing_task1_prompt" placeholder="Task 1 Essay Question" required></textarea>
            </div>
            <div class="form-group">
                <input type="number" class="form-control" name="word_limit_44" placeholder="Word Limit (e.g., 150)"
                    required>
            </div>
        </div>

        <!-- SPEAKING SECTION -->
        <h3 class="text-primary">SPEAKING TEST</h3>
        <!-- Part 1 -->
        <div class="speaking-section">
            <h4>Part 1: Introduction and Interview</h4>
            <h5>Topic 1</h5>
            <input type="text" class="form-control" name="topic_1_speaking" placeholder="Topic 1" required>
            <div class="form-group">
                <label>Number of questions</label>
                <input type="number" class="form-control question-count" id="speaking-part1-count" min="1"
                    value="1" data-section="speaking1">
            </div>
            <div id="speaking-part1-questions"></div>
        </div>

        <div class="speaking-section">
            <h5>Topic 2</h5>
            <input type="text" class="form-control" name="topic_2_speaking" placeholder="Topic 2" required>
            <div class="form-group">
                <label>Number of questions</label>
                <input type="number" class="form-control question-count" id="speaking-part2-count" min="1"
                    value="1" data-section="speaking2">
            </div>
            <div id="speaking-part2-questions"></div>
        </div>

        <!-- Part 2 -->
        <div class="speaking-section">
            <h4>Part 2: Individual Long Turn</h4>
            <div class="form-group">
                <label>Number of questions</label>
                <input type="number" class="form-control question-count" id="speaking-part3-count" min="1"
                    value="1" data-section="speaking3">
            </div>
            <div id="speaking-part3-questions"></div>
            {{-- <div class="form-group">
                <textarea class="form-control" name="speaking_part2_topic" placeholder="Cue Card Topic" required></textarea>
            </div> --}}
        </div>

        <!-- Part 3 -->
        <div class="speaking-section">
            <h4>Part 3: Two-way Discussion</h4>
            <div class="form-group">
                <label>Number of questions</label>
                <input type="number" class="form-control question-count" id="speaking-part4-count" min="1"
                    value="1" data-section="speaking4">
            </div>
            <div id="speaking-part4-questions"></div>
        </div>
    </div>

</form>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        let globalQuestionCounter = 1;
        let sectionQuestionCounts = {};
        function generateQuestionsByType(questionType, container, questionNumber) {
            let questionHtml = '';

            switch (questionType) {
                case 'multiple_choice':
                    questionHtml = `
                    <div class="form-group">
                        <textarea class="form-control" name="question_text_${questionNumber}" placeholder="Question Text" required></textarea>
                    </div>
                    <div class="answers-container">
                        <div class="form-group">
                            <label>
                                <input type="radio" name="correct_answer_${questionNumber}" value="A" required>
                                Option A
                            </label>
                            <input type="text" class="form-control" name="answer_a_${questionNumber}" placeholder="Option A" required>
                        </div>
                        <div class="form-group">
                            <label>
                                <input type="radio" name="correct_answer_${questionNumber}" value="B">
                                Option B
                            </label>
                            <input type="text" class="form-control" name="answer_b_${questionNumber}" placeholder="Option B" required>
                        </div>
                        <div class="form-group">
                            <label>
                                <input type="radio" name="correct_answer_${questionNumber}" value="C">
                                Option C
                            </label>
                            <input type="text" class="form-control" name="answer_c_${questionNumber}" placeholder="Option C" required>
                        </div>
                        <div class="form-group">
                            <label>
                                <input type="radio" name="correct_answer_${questionNumber}" value="D">
                                Option D
                            </label>
                            <input type="text" class="form-control" name="answer_d_${questionNumber}" placeholder="Option D" required>
                        </div>
                    </div>`;
                    break;

                case 'fill_blank':
                    questionHtml = `
                    <div class="form-group">
                        <textarea class="form-control" name="question_text_${questionNumber}" placeholder="Question Text (use ___ for blank)" required></textarea>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="correct_answer_${questionNumber}" placeholder="Correct Answer" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="word_limit_${questionNumber}" placeholder="Word Limit (e.g., NO MORE THAN TWO WORDS)" required>
                    </div>`;
                    break;

                case 'matching':
                    questionHtml = `
                    <div class="form-group">
                        <textarea class="form-control" name="question_text_${questionNumber}" placeholder="Matching Question Instructions" required></textarea>
                    </div>
                    <div class="matching-items">
                        <div class="form-group">
                            <input type="text" class="form-control" name="item_${questionNumber}" placeholder="Item to Match" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="match_options_${questionNumber}" placeholder="Matching Options (comma separated)" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="correct_match_${questionNumber}" placeholder="Correct Match" required>
                        </div>
                    </div>`;
                    break;

                case 'true_false':
                    questionHtml = `
                    <div class="form-group">
                        <textarea class="form-control" name="statement_${questionNumber}" placeholder="Statement" required></textarea>
                    </div>
                    <div class="form-group">
                        <label>Correct Answer:</label>
                        <select class="form-control" name="correct_answer_${questionNumber}" required>
                            <option value="true">True</option>
                            <option value="false">False</option>
                            <option value="not_given">Not Given</option>
                        </select>
                    </div>`;
                    break;

                case 'matching_headings':
                    questionHtml = `
                    <div class="form-group">
                        <textarea class="form-control" name="paragraph_${questionNumber}" placeholder="Paragraph Text" required></textarea>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="headings_${questionNumber}" placeholder="List of Headings (one per line)" required></textarea>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="correct_heading_${questionNumber}" placeholder="Correct Heading Number" required>
                    </div>`;
                    break;

                case 'summary_completion':
                    questionHtml = `
                    <div class="form-group">
                        <textarea class="form-control" name="summary_text_${questionNumber}" placeholder="Summary Text (use ___ for blanks)" required></textarea>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="word_bank_${questionNumber}" placeholder="Word Bank (comma separated)" required></textarea>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="correct_answer_${questionNumber}" placeholder="Correct Answer" required>
                    </div>`;
                    break;
            }

            return questionHtml;
        }

       function generateQuestions(section, questionType) {
        let $input = $(`#${section}-count`);
        let $container = $(`#${section}-questions`);
        let sectionPrefix = section.split('-')[0]; 

        const allSections = [
            'listening-section1', 'listening-section2',
            'reading-passage1', 'reading-passage2',
            'speaking-part1', 'speaking-part2', 'speaking-part3', 'speaking-part4'
        ];

        function updateQuestions() {
            let startQuestionNumber;
            let sectionIndex = allSections.indexOf(section);
            if (sectionIndex === 0) {
                startQuestionNumber = 1;
            } else {
                let previousSection = allSections[sectionIndex - 1];
                if (sectionQuestionCounts[previousSection]) {
                    let previousMax = Math.max(...Object.keys(sectionQuestionCounts[previousSection]).map(Number));
                    startQuestionNumber = previousMax + 1;
                } else {
                    startQuestionNumber = globalQuestionCounter;
                }
            }
            let count = parseInt($input.val(), 10);
            $container.empty();
            sectionQuestionCounts[section] = {};
            for (let i = 0; i < count; i++) {
                let questionNumber = startQuestionNumber + i;
                sectionQuestionCounts[section][questionNumber] = true;

                let questionHtml = `<div class="question-group mb-4" data-question-number="${questionNumber}">
                                    <h5>Question ${questionNumber}</h5>`;
                if (sectionPrefix === 'speaking') {
                    questionHtml += `
                        <div class="form-group">
                            <textarea class="form-control" name="speaking_part${questionNumber}_topic" placeholder="Question text" required></textarea>
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control" name="time_limit_${questionNumber}" placeholder="Time minute Limit (e.g., 1)" required>
                        </div>`;
                } else {
                    questionHtml += `
                        <div class="form-group">
                            <label>Question Type</label>
                            <select class="form-control question-type-selector" data-question="${questionNumber}">
                                ${sectionPrefix === 'listening' ? `
                                    <option value="multiple_choice">Multiple Choice</option>
                                    <option value="fill_blank">Fill in the Blank</option>
                                    <option value="matching">Matching</option>
                                    <option value="true_false">True/False/Not Given</option>` : ''}
                                ${sectionPrefix === 'reading' ? `
                                    <option value="multiple_choice">Multiple Choice</option>
                                    <option value="true_false">True/False/Not Given</option>
                                    <option value="matching_headings">Matching Headings</option>
                                    <option value="fill_blank">Fill in the Blank</option>
                                    <option value="summary_completion">Summary Completion</option>` : ''}
                            </select>
                        </div>
                        <div class="question-content" id="question-content-${questionNumber}"></div>`;
                }
                questionHtml += `</div>`;
                $container.append(questionHtml);

                let $questionContent = $(`#question-content-${questionNumber}`);
                let defaultType = $(`select[data-question="${questionNumber}"]`).val();
                if (defaultType) {
                    $questionContent.html(generateQuestionsByType(defaultType, $questionContent, questionNumber));
                }

                if (i === count - 1) {
                    globalQuestionCounter = questionNumber + 1;
                }
            }

            updateSubsequentSections(section);
        }

        function updateSubsequentSections(currentSection) {
            let startUpdating = false;
            for (let sec of allSections) {
                if (sec === currentSection) {
                    startUpdating = true;
                    continue;
                }
                if (startUpdating) {
                    let $nextInput = $(`#${sec}-count`);
                    if ($nextInput.length) {
                        let nextCount = parseInt($nextInput.val(), 10);
                        $nextInput.val(nextCount).trigger('input');
                    }
                }
            }
        }

        $input.on('input', updateQuestions);

        $(document).on('change', '.question-type-selector', function() {
            let questionNumber = $(this).data('question');
            let selectedType = $(this).val();
            let $questionContent = $(`#question-content-${questionNumber}`);
            $questionContent.html(generateQuestionsByType(selectedType, $questionContent, questionNumber));
        });

        updateQuestions();
    }

        generateQuestions('listening-section1', 'listening');
        generateQuestions('listening-section2', 'listening');

        generateQuestions('reading-passage1', 'reading');
        generateQuestions('reading-passage2', 'reading');

        generateQuestions('speaking-part1', 'speaking');
        generateQuestions('speaking-part2', 'speaking');
        generateQuestions('speaking-part3', 'speaking');
        generateQuestions('speaking-part4', 'speaking');

    });
</script>

<style>
    .question-group {
        background-color: #f8f9fa;
        padding: 20px;
        border-radius: 8px;
        margin-bottom: 20px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .question-type-selector {
        max-width: 300px;
        margin-bottom: 15px;
    }

    .answers-container {
        margin-left: 20px;
    }

    .matching-items {
        padding: 10px;
        background: #fff;
        border-radius: 5px;
        margin-top: 10px;
    }

    .form-control {
        margin-bottom: 10px;
    }

    .radio-group {
        margin-bottom: 15px;
    }

    textarea.form-control {
        min-height: 100px;
    }

    .question-content {
        margin-top: 15px;
        padding: 15px;
        background: #fff;
        border-radius: 5px;
    }

    .section-title {
        color: #007bff;
        margin: 30px 0 20px;
        padding-bottom: 10px;
        border-bottom: 2px solid #007bff;
    }

    .form-group label {
        font-weight: 500;
        color: #495057;
    }
</style>
