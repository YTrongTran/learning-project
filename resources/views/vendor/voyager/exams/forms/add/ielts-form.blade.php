<form class="exam-form exam-form-ielts hidden" method="POST">
    <div class="exam-ielts questions-container">
        <h3>LISTENING</h3>
        @for ($i = 0; $i < 25; $i++)
            <div class="question">
                <h4 class="question-title has-toggle" >Question {{$i+1}}</h4>
                <div class="question-content">
                    <div class="form-group">
                        <input type="text" class="form-control" name="questions[ielts][{{$i}}][text]" placeholder="Question">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="questions[ielts][{{$i}}][passage]" placeholder="Passage"></textarea>
                    </div>
                    <h4>Answers</h4>
                    <div class="form-group line-question">
                        <span class="title-choice">
                            <input type="radio"  name="questions[ielts][{{$i}}][correct]" value="0">
                            A)
                        </span>
                        <input type="text" class="form-control" name="questions[ielts][{{$i}}][answers][]" placeholder="Answer" required>
                    </div>
                    <div class="form-group line-question">
                        <span class="title-choice">
                            <input type="radio" name="questions[ielts][{{$i}}][correct]" value="1">
                            B)
                        </span>
                        <input type="text" class="form-control" name="questions[ielts][{{$i}}][answers][]" placeholder="Answer" required>
                    </div>
                    <div class="form-group line-question">
                        <span class="title-choice">
                            <input type="radio"name="questions[ielts][{{$i}}][correct]" value="2">
                            C)
                        </span>
                        <input type="text" class="form-control" name="questions[ielts][{{$i}}][answers][]" placeholder="Answer" required>
                    </div>
                    <div class="form-group line-question">
                        <span class="title-choice">
                            <input type="radio" name="questions[ielts][{{$i}}][correct]" value="4">
                            D)
                        </span>
                        <input type="text" class="form-control" name="questions[ielts][{{$i}}][answers][]" placeholder="Answer" required>
                    </div>
                    <div class="form-group">
                        <span class="">Image</span>
                        @php
                            $rowMediaType = (object)[
                                "field" => "questions[ielts][$i][image]",
                                "field_id" => "questions-ielts-$i-image",
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
                                "field" => "questions[ielts][$i][sound]",
                                "field_id" => "questions-ielts-$i-sound",
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
        <h3>READING</h3>
        @for ($i = 0; $i < 25; $i++)
            <div class="question">
                <h4 class="question-title has-toggle" >Question {{$i+1}}</h4>
                <div class="question-content">
                    <div class="form-group">
                        <input type="text" class="form-control" name="questions[ielts][{{$i+25}}][text]" placeholder="Question">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="questions[ielts][{{$i+25}}][passage]" placeholder="Passage"></textarea>
                    </div>
                    <h4>Answers</h4>
                    <div class="form-group line-question">
                        <span class="title-choice">
                            <input type="radio"  name="questions[ielts][{{$i+25}}][correct]" value="0">
                            A)
                        </span>
                        <input type="text"  class="form-control" name="questions[ielts][{{$i+25}}][answers][]" placeholder="Answer" required>
                    </div>
                    <div class="form-group line-question">
                        <span class="title-choice">
                            <input type="radio" name="questions[ielts][{{$i+25}}][correct]" value="1">
                            B)
                        </span>
                        <input type="text"   class="form-control" name="questions[ielts][{{$i+25}}][answers][]" placeholder="Answer" required>
                    </div>
                    <div class="form-group line-question">
                        <span class="title-choice">
                            <input type="radio"name="questions[ielts][{{$i+25}}][correct]" value="2">
                            C)
                        </span>
                        <input type="text"  class="form-control" name="questions[ielts][{{$i+25}}][answers][]" placeholder="Answer" required>
                    </div>
                    <div class="form-group line-question">
                        <span class="title-choice">
                            <input type="radio" name="questions[ielts][{{$i+25}}][correct]" value="4">
                            D)
                        </span>
                        <input type="text"  class="form-control" name="questions[ielts][{{$i+25}}][answers][]" placeholder="Answer" required>
                    </div>
                    <div class="form-group">
                        <span class="">Image</span>
                        @php
                            $j = $i + 25;
                            $rowMediaType = (object)[
                                "field" => "questions[ielts][$j][image]",
                                "field_id" => "questions-ielts-$j-image",
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
                            $j = $i + 25;
                            $rowMediaType = (object)[
                                "field" => "questions[ielts][$j][sound]",
                                "field_id" => "questions-ielts-$j-sound",
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