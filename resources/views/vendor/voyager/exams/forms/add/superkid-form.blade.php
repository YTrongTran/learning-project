<form class="exam-form exam-form-superkid hidden" method="POST">
    <div class="exam-superkid questions-container">
        @for ($i = 0; $i < 2; $i++)
            <div class="question">
                <h4 class="question-title has-toggle" >Question {{$i+1}}</h4>
                <div class="question-content">
                    <div class="form-group">
                        <textarea type="text" class="form-control" name="questions[superkid][{{$i}}][text]" placeholder="Question"></textarea>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="questions[superkid][{{$i}}][passage]" placeholder="Passage"></textarea>
                    </div>
                    <h4>Answers</h4>
                    <div class="form-group line-question">
                        <span class="title-choice">
                            <input type="radio"  name="questions[superkid][{{$i}}][correct]" value="1">
                            A)
                        </span>
                        <input type="text" class="form-control" name="questions[superkid][{{$i}}][answers][]" placeholder="Answer" required>
                    </div>
                    <div class="form-group line-question">
                        <span class="title-choice">
                            <input type="radio" name="questions[superkid][{{$i}}][correct]" value="2">
                            B)
                        </span>
                        <input type="text" class="form-control" name="questions[superkid][{{$i}}][answers][]" placeholder="Answer" required>
                    </div>
                    <div class="form-group line-question">
                        <span class="title-choice">
                            <input type="radio"name="questions[superkid][{{$i}}][correct]" value="3">
                            C)
                        </span>
                        <input type="text" class="form-control" name="questions[superkid][{{$i}}][answers][]" placeholder="Answer" required>
                    </div>
                    <div class="form-group line-question">
                        <span class="title-choice">
                            <input type="radio" name="questions[superkid][{{$i}}][correct]" value="4">
                            D)
                        </span>
                        <input type="text" class="form-control" name="questions[superkid][{{$i}}][answers][]" placeholder="Answer" required>
                    </div>
                    <div class="form-group">
                        <span class="">Image</span>
                        @php
                            $rowMediaType = (object)[
                                "field" => "questions[superkid][$i][image]",
                                "field_id" => "questions-superkid-$i-image",
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
                            $content = "'".$rowMediaType->value."'";;
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
                                "field" => "questions[superkid][$i][sound]",
                                "field_id" => "questions-superkid-$i-sound",
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
                            $content = "'".$rowMediaType->value."'";;
                            $options = (object)[
                                'allow_create_folder' => false,
                            ];
                        @endphp
                        {{  view('voyager::formfields.media_picker', [ 'row'  => $rowMediaType, 'options'  => $options, 'dataType' => $rowMediaType, 'content'  => $content, ]); }}
                    </div>
                </div>
            </div>
        @endfor
    </div>
</form>