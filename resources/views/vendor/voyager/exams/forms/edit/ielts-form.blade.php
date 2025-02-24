<form class="exam-form exam-form-ielts" method="POST">    
    <div class="exam-ielts questions-container">
    @php
        $listeningQuestions = $questions->take(25);
        $readingQuestions = $questions->skip(25)->take(25);
    @endphp
    <h3>LISTENING</h3>
    @foreach($listeningQuestions as $question)
        <div class="question">
            <h4 class="question-title has-toggle" >Question {{ $question->_index + 1}}</h4>
            <div class="question-content">
                <div class="form-group">
                    <textarea type="text" class="form-control" name="questions[ielts][{{$question->_index}}][text]" placeholder="Question">{{ $question->question_text}}</textarea>
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="questions[ielts][{{$question->_index}}][passage]" placeholder="Passage">{{ $question->question_passage}}</textarea>
                </div>
                <h4>Answers</h4>
                <div class="form-group line-question">
                    <span class="title-choice">
                        <input type="radio" name="questions[ielts][{{$question->_index}}][correct]" value="1" {{ $question->answer_correct == 1 ? 'checked' : '' }}>
                        A)
                    </span>
                    <input type="text" class="form-control" name="questions[ielts][{{$question->_index}}][answers][]" placeholder="Answer" value="{{ $question->answer_1}}" required>
                </div>
                <div class="form-group line-question">
                    <span class="title-choice">
                        <input type="radio" name="questions[ielts][{{$question->_index}}][correct]" value="2" {{ $question->answer_correct == 2 ? 'checked' : '' }}>
                        B)
                    </span>
                    <input type="text" class="form-control" name="questions[ielts][{{$question->_index}}][answers][]" placeholder="Answer" value="{{ $question->answer_2}}" required>
                </div>
                <div class="form-group line-question">
                    <span class="title-choice">
                        <input type="radio"name="questions[ielts][{{$question->_index}}][correct]" value="3" {{ $question->answer_correct == 3 ? 'checked' : '' }}>
                        C)
                    </span>
                    <input type="text" class="form-control" name="questions[ielts][{{$question->_index}}][answers][]" placeholder="Answer" value="{{ $question->answer_3}}" required>
                </div>
                <div class="form-group line-question">
                    <span class="title-choice">
                        <input type="radio" name="questions[ielts][{{$question->_index}}][correct]" value="4" {{ $question->answer_correct == 4 ? 'checked' : '' }}>
                        D)
                    </span>
                    <input type="text" class="form-control" name="questions[ielts][{{$question->_index}}][answers][]" placeholder="Answer" value="{{ $question->answer_4}}" required>
                </div>
                <div class="form-group">
                    <span class="">Image</span>
                    @php
                        $rowMediaType = (object)[
                            "field" => "questions[ielts][$question->_index][image]",
                            "field_id" => "questions-ielts-$question->_index-image",
                            "value" => "",
                            'slug'=>'exams/Images',
                            "type" => "media_picker", 
                            "display_name" => "Image", 
                            "required" => 1, 
                            "browse" => 1, 
                            "read" => 1, 
                            "edit" => 1, 
                            "add" => 1, 
                            "delete" => 1, 
                            "details" => (object) [
                            ], 
                            "order" => 2, 
                            "col_width" => 100           
                        ];
                        $content = "'".$question->question_image."'";;
                        $options = (object)[
                            'allow_create_folder' => false,
                        ];
                    @endphp
                    {{  view('voyager::formfields.media_picker', [ 'row'  => $rowMediaType, 'options'  => $options, 'dataType' => $rowMediaType, 'content'  => $content, ]); }}
                </div>
                <div class="form-group">
                    <span class="">Sound</span>
                    @php
                        $rowMediaType = (object)[
                            "field" => "questions[ielts][$question->_index][sound]",
                            "field_id" => "questions-ielts-$question->_index-sound",
                            "value" => "",
                            'slug'=>'exams/Sounds',
                            "type" => "media_picker", 
                            "display_name" => "Sound", 
                            "required" => 1, 
                            "browse" => 1, 
                            "read" => 1, 
                            "edit" => 1, 
                            "add" => 1, 
                            "delete" => 1, 
                            "details" => (object) [
                            ], 
                            "order" => 2, 
                            "col_width" => 100           
                        ];
                        $content = "'".$question->sound."'";;
                        $options = (object)[
                            'allow_create_folder' => false,
                        ];
                    @endphp
                    {{  view('voyager::formfields.media_picker', [ 'row'  => $rowMediaType, 'options'  => $options, 'dataType' => $rowMediaType, 'content'  => $content, ]); }}
                </div>
            </div>
        </div>
    @endforeach
    </div>
    <h3>READING</h3>
    @foreach($readingQuestions as $question)
        <div class="question">
            <h4 class="question-title has-toggle" >Question {{ $question->_index + 1}}</h4>
            <div class="question-content">
                <div class="form-group">
                    <textarea type="text" class="form-control" name="questions[ielts][{{$question->_index}}][text]" placeholder="Question">{{ $question->question_text}}</textarea>
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="questions[ielts][{{$question->_index}}][passage]" placeholder="Passage">{{ $question->question_passage}}</textarea>
                </div>
                <h4>Answers</h4>
                <div class="form-group line-question">
                    <span class="title-choice">
                        <input type="radio" name="questions[ielts][{{$question->_index}}][correct]" value="1" {{ $question->answer_correct == 1 ? 'checked' : '' }}>
                        A)
                    </span>
                    <input type="text" class="form-control" name="questions[ielts][{{$question->_index}}][answers][]" placeholder="Answer" value="{{ $question->answer_1}}" required>
                </div>
                <div class="form-group line-question">
                    <span class="title-choice">
                        <input type="radio" name="questions[ielts][{{$question->_index}}][correct]" value="2" {{ $question->answer_correct == 2 ? 'checked' : '' }}>
                        B)
                    </span>
                    <input type="text" class="form-control" name="questions[ielts][{{$question->_index}}][answers][]" placeholder="Answer" value="{{ $question->answer_2}}" required>
                </div>
                <div class="form-group line-question">
                    <span class="title-choice">
                        <input type="radio"name="questions[ielts][{{$question->_index}}][correct]" value="3" {{ $question->answer_correct == 3 ? 'checked' : '' }}>
                        C)
                    </span>
                    <input type="text" class="form-control" name="questions[ielts][{{$question->_index}}][answers][]" placeholder="Answer" value="{{ $question->answer_3}}" required>
                </div>
                <div class="form-group line-question">
                    <span class="title-choice">
                        <input type="radio" name="questions[ielts][{{$question->_index}}][correct]" value="4" {{ $question->answer_correct == 4 ? 'checked' : '' }}>
                        D)
                    </span>
                    <input type="text" class="form-control" name="questions[ielts][{{$question->_index}}][answers][]" placeholder="Answer" value="{{ $question->answer_4}}" required>
                </div>
                <div class="form-group">
                    <span class="">Image</span>
                    @php
                        $rowMediaType = (object)[
                            "field" => "questions[ielts][$question->_index][image]",
                            "field_id" => "questions-ielts-$question->_index-image",
                            "value" => "",
                            'slug'=>'exams/Images',
                            "type" => "media_picker", 
                            "display_name" => "Image", 
                            "required" => 1, 
                            "browse" => 1, 
                            "read" => 1, 
                            "edit" => 1, 
                            "add" => 1, 
                            "delete" => 1, 
                            "details" => (object) [
                            ], 
                            "order" => 2, 
                            "col_width" => 100           
                        ];
                        $content = "'".$question->question_image."'";;
                        $options = (object)[
                            'allow_create_folder' => false,
                        ];
                    @endphp
                    {{  view('voyager::formfields.media_picker', [ 'row'  => $rowMediaType, 'options'  => $options, 'dataType' => $rowMediaType, 'content'  => $content, ]); }}
                </div>
                <div class="form-group">
                    <span class="">Sound</span>
                    @php
                        $rowMediaType = (object)[
                            "field" => "questions[ielts][$question->_index][sound]",
                            "field_id" => "questions-ielts-$question->_index-sound",
                            "value" => "",
                            'slug'=>'exams/Sounds',
                            "type" => "media_picker", 
                            "display_name" => "Sound", 
                            "required" => 1, 
                            "browse" => 1, 
                            "read" => 1, 
                            "edit" => 1, 
                            "add" => 1, 
                            "delete" => 1, 
                            "details" => (object) [
                            ], 
                            "order" => 2, 
                            "col_width" => 100           
                        ];
                        $content = "'".$question->sound."'";;
                        $options = (object)[
                            'allow_create_folder' => false,
                        ];
                    @endphp
                    {{  view('voyager::formfields.media_picker', [ 'row'  => $rowMediaType, 'options'  => $options, 'dataType' => $rowMediaType, 'content'  => $content, ]); }}
                </div>
            </div>
        </div>
    @endforeach
    </div>
</form>