{{-- @extends('layouts.app') --}}
<div class="container">
    {{-- {{ route('examinations.store') }} --}}
    
    <form id="exam-form" method="POST">
        <input type="hidden" name="exam-id" id="exam-id" value="{{ $dataTypeContent->getKey() }}" />
        <div class="form-group">
            <label for="exam-title">Title</label>
            <input type="text" class="form-control" name="exam-title" id="exam-title" value="{{$dataTypeContent->title}}" required>
        </div>
        <div class="form-group">
            <label for="exam-type">Type</label>
            <select type="select" class="form-control" name="exam-type" id="exam-type" required>
                <option value="toeic" {{ $dataTypeContent->type == 'toeic' ? 'selected' : '' }} >TOEIC</option>
                <option value="superkid" {{ $dataTypeContent->type == 'superkid' ? 'selected' : '' }} >Superkids</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exam-duration">Duration(minutes)</label>
            <input type="number" class="form-control" name="exam-duration" id="exam-duration" min="0" value="{{$dataTypeContent->duration}}" required>
        </div>
        <div class="form-group">
            <label for="exam-point">Point</label>
            <input type="number" class="form-control" name="exam-point" id="exam-point" min="0" value="{{$dataTypeContent->point}}" required>
        </div>
        <div class="form-group">
            <label for="exam-visible">Visible</label>
            <input type="checkbox" name="exam-visible" id="exam-visible" value="true" {{ $dataTypeContent->visible ? 'checked' : '' }}>
        </div>
        
        <div class="exam-toeic questions-container {{ $dataTypeContent->type == 'toeic' ? '' : 'hidden' }}">
            <h3>LISTENING</h3>
            <div class="question">
                <h4 class="question-title has-toggle" data-question-id="0">Question 1</h4>
                <div class="question-content">
                    <div class="form-group">
                        <input type="text" class="form-control" name="questions[toeic][0][text]" placeholder="Question">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="questions[toeic][0][passage]" placeholder="Passage"></textarea>
                    </div>
                    <h4>Answers</h4>
                    <div class="form-group line-question">
                        <span class="title-choice">
                            <input type="radio" id="question-0-correct" name="questions[toeic][0][correct]" value="1">
                            A)
                        </span>
                        <input type="text" id="question-0-answer-A" class="form-control" name="questions[toeic][0][answers][]" placeholder="Answer" required>
                    </div>
                    <div class="form-group line-question">
                        <span class="title-choice">
                            <input type="radio" name="questions[toeic][0][correct]" value="2">
                            B)
                        </span>
                        <input type="text" id="question-0-answer-B" class="form-control" name="questions[toeic][0][answers][]" placeholder="Answer" required>
                    </div>
                    <div class="form-group line-question">
                        <span class="title-choice">
                            <input type="radio"name="questions[toeic][0][correct]" value="3">
                            C)
                        </span>
                        <input type="text" id="question-0-answer-C" class="form-control" name="questions[toeic][0][answers][]" placeholder="Answer" required>
                    </div>
                    <div class="form-group line-question">
                        <span class="title-choice">
                            <input type="radio" name="questions[toeic][0][correct]" value="4">
                            D)
                        </span>
                        <input type="text" id="question-0-answer-D" class="form-control" name="questions[toeic][0][answers][]" placeholder="Answer" required>
                    </div>
                    <div class="form-group">
                        <span class="">Image</span>
                        <input type="file" class="form-control" name="questions[toeic][0][image]" placeholder="Image">
                    </div>
                    <div class="form-group">
                        <span class="">Voice</span>
                        <input type="file" class="form-control" name="questions[toeic][0][voice]" placeholder="Voice">
                    </div>
                </div>
            </div>
            <button type="button" id="add-question" class="btn btn-secondary add-question">Thêm Câu Hỏi</button>
            <h3>READING</h3>
            <div class="question">
                <h4 class="question-title has-toggle" data-question-id="0">Question 1</h4>
                <div class="question-content">
                    <div class="form-group">
                        <input type="text" class="form-control" name="questions[toeic][0][text]" placeholder="Question">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="questions[toeic][0][passage]" placeholder="Passage"></textarea>
                    </div>
                    <h4>Answers</h4>
                    <div class="form-group line-question">
                        <span class="title-choice">
                            <input type="radio" id="question-0-correct" name="questions[toeic][0][correct]" value="0">
                            A)
                        </span>
                        <input type="text" id="question-0-answer-A" class="form-control" name="questions[toeic][0][answers][]" placeholder="Answer" required>
                    </div>
                    <div class="form-group line-question">
                        <span class="title-choice">
                            <input type="radio" name="questions[toeic][0][correct]" value="1">
                            B)
                        </span>
                        <input type="text" id="question-0-answer-B" class="form-control" name="questions[toeic][0][answers][]" placeholder="Answer" required>
                    </div>
                    <div class="form-group line-question">
                        <span class="title-choice">
                            <input type="radio"name="questions[toeic][0][correct]" value="2">
                            C)
                        </span>
                        <input type="text" id="question-0-answer-C" class="form-control" name="questions[toeic][0][answers][]" placeholder="Answer" required>
                    </div>
                    <div class="form-group line-question">
                        <span class="title-choice">
                            <input type="radio" name="questions[toeic][0][correct]" value="4">
                            D)
                        </span>
                        <input type="text" id="question-0-answer-D" class="form-control" name="questions[toeic][0][answers][]" placeholder="Answer" required>
                    </div>
                    <div class="form-group">
                        <span class="">Image</span>
                        <input type="file" class="form-control" name="questions[toeic][0][image]" placeholder="Image">
                    </div>
                    <div class="form-group">
                        <span class="">Voice</span>
                        <input type="file" class="form-control" name="questions[toeic][0][voice]" placeholder="Voice">
                    </div>
                </div>
            </div>
            <button type="button" id="add-question" class="btn btn-secondary add-question">Thêm Câu Hỏi</button>
        </div>

        <div class="exam-superkid questions-container {{ $dataTypeContent->type == 'superkid' ? '' : 'hidden' }}">
        @foreach($questions as $question)
            <div class="question">
                <h4 class="question-title has-toggle" >Question {{ $question->_index + 1}}</h4>
                <div class="question-content">
                    <div class="form-group">
                        <textarea class="form-control" name="questions[kid][{{$question->_index}}][text]" placeholder="Question">{{ $question->question_text}}</textarea>
                    </div>
                    <h4>Answers</h4>
                    <div class="form-group line-question">
                        <span class="title-choice">
                            <input type="radio" name="questions[kid][{{$question->_index}}][correct]" value="1" {{ $question->answer_correct == 1 ? 'checked' : '' }}>
                            A)
                        </span>
                        <input type="text" id="question-{{$question->_index}}-answer-A" class="form-control" name="questions[kid][{{$question->_index}}][answers][]" placeholder="Answer" value="{{ $question->answer_1}}" required>
                    </div>
                    <div class="form-group line-question">
                        <span class="title-choice">
                            <input type="radio" name="questions[kid][{{$question->_index}}][correct]" value="2" {{ $question->answer_correct == 2 ? 'checked' : '' }}>
                            B)
                        </span>
                        <input type="text" id="question-{{$question->_index}}-answer-B" class="form-control" name="questions[kid][{{$question->_index}}][answers][]" placeholder="Answer" value="{{ $question->answer_2}}" required>
                    </div>
                    <div class="form-group line-question">
                        <span class="title-choice">
                            <input type="radio"name="questions[kid][{{$question->_index}}][correct]" value="3" {{ $question->answer_correct == 3 ? 'checked' : '' }}>
                            C)
                        </span>
                        <input type="text" id="question-{{$question->_index}}-answer-C" class="form-control" name="questions[kid][{{$question->_index}}][answers][]" placeholder="Answer" value="{{ $question->answer_3}}" required>
                    </div>
                    <div class="form-group line-question">
                        <span class="title-choice">
                            <input type="radio" name="questions[kid][{{$question->_index}}][correct]" value="4" {{ $question->answer_correct == 4 ? 'checked' : '' }}>
                            D)
                        </span>
                        <input type="text" id="question-{{$question->_index}}-answer-D" class="form-control" name="questions[kid][{{$question->_index}}][answers][]" placeholder="Answer" value="{{ $question->answer_4}}" required>
                    </div>
                </div>
            </div>
        @endforeach
        </div>

        <button type="submit" class="btn btn-primary process-exam-form">Lưu Đề Thi</button>
    </form>
</div>