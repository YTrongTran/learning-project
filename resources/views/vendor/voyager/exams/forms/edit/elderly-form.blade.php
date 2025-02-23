<form class="exam-form exam-form-elderly" method="POST">    
    <div class="exam-elderly questions-container">
    @foreach($questions as $question)
        <div class="question">
            <h4 class="question-title has-toggle" >Question {{ $question->_index + 1}}</h4>
            <div class="question-content">
                <div class="form-group">
                    <textarea type="text" class="form-control" name="questions[elderly][{{$question->_index}}][text]" placeholder="Question">{{ $question->question_text}}</textarea>
                </div>
                <h4>Answers</h4>
                <div class="form-group line-question">
                    <span class="title-choice">
                        <input type="radio" name="questions[elderly][{{$question->_index}}][correct]" value="1" {{ $question->answer_correct == 1 ? 'checked' : '' }}>
                        A)
                    </span>
                    <input type="text" class="form-control" name="questions[elderly][{{$question->_index}}][answers][]" placeholder="Answer" value="{{ $question->answer_1}}" required>
                </div>
                <div class="form-group line-question">
                    <span class="title-choice">
                        <input type="radio" name="questions[elderly][{{$question->_index}}][correct]" value="2" {{ $question->answer_correct == 2 ? 'checked' : '' }}>
                        B)
                    </span>
                    <input type="text" class="form-control" name="questions[elderly][{{$question->_index}}][answers][]" placeholder="Answer" value="{{ $question->answer_2}}" required>
                </div>
                <div class="form-group line-question">
                    <span class="title-choice">
                        <input type="radio"name="questions[elderly][{{$question->_index}}][correct]" value="3" {{ $question->answer_correct == 3 ? 'checked' : '' }}>
                        C)
                    </span>
                    <input type="text" class="form-control" name="questions[elderly][{{$question->_index}}][answers][]" placeholder="Answer" value="{{ $question->answer_3}}" required>
                </div>
                <div class="form-group line-question">
                    <span class="title-choice">
                        <input type="radio" name="questions[elderly][{{$question->_index}}][correct]" value="4" {{ $question->answer_correct == 4 ? 'checked' : '' }}>
                        D)
                    </span>
                    <input type="text" class="form-control" name="questions[elderly][{{$question->_index}}][answers][]" placeholder="Answer" value="{{ $question->answer_4}}" required>
                </div>
            </div>
        </div>
    @endforeach
    </div>
</form>