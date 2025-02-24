<form class="exam-form exam-form-teen hidden" method="POST">
    <div class="exam-teen questions-container">
        <h3>LISTENING</h3>
        @for ($i = 0; $i < 25; $i++)
            <div class="question">
                <h4 class="question-title has-toggle" >Question {{$i+1}}</h4>
                <div class="question-content">
                    <div class="form-group">
                        <textarea type="text" class="form-control" name="questions[teen][{{$i}}][text]" placeholder="Question"></textarea>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="questions[teen][{{$i}}][passage]" placeholder="Passage"></textarea>
                    </div>
                    <h4>Answers</h4>
                    <div class="form-group line-question">
                        <span class="title-choice">
                            <input type="radio"  name="questions[teen][{{$i}}][correct]" value="1">
                            A)
                        </span>
                        <input type="text" class="form-control" name="questions[teen][{{$i}}][answers][]" placeholder="Answer" required>
                    </div>
                    <div class="form-group line-question">
                        <span class="title-choice">
                            <input type="radio" name="questions[teen][{{$i}}][correct]" value="2">
                            B)
                        </span>
                        <input type="text" class="form-control" name="questions[teen][{{$i}}][answers][]" placeholder="Answer" required>
                    </div>
                    <div class="form-group line-question">
                        <span class="title-choice">
                            <input type="radio"name="questions[teen][{{$i}}][correct]" value="3">
                            C)
                        </span>
                        <input type="text" class="form-control" name="questions[teen][{{$i}}][answers][]" placeholder="Answer" required>
                    </div>
                    <div class="form-group line-question">
                        <span class="title-choice">
                            <input type="radio" name="questions[teen][{{$i}}][correct]" value="4">
                            D)
                        </span>
                        <input type="text" class="form-control" name="questions[teen][{{$i}}][answers][]" placeholder="Answer" required>
                    </div>
                    <div class="form-group">
                        <span class="">Image</span>
                        @php
                            $rowMediaType = (object)[
                                "field" => "questions[teen][$i][image]",
                                "field_id" => "questions-teen-$i-image",
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
                                "field" => "questions[teen][$i][sound]",
                                "field_id" => "questions-teen-$i-sound",
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
                        <textarea type="text" class="form-control" name="questions[teen][{{$i+25}}][text]" placeholder="Question"></textarea>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="questions[teen][{{$i+25}}][passage]" placeholder="Passage"></textarea>
                    </div>
                    <h4>Answers</h4>
                    <div class="form-group line-question">
                        <span class="title-choice">
                            <input type="radio"  name="questions[teen][{{$i+25}}][correct]" value="1">
                            A)
                        </span>
                        <input type="text"  class="form-control" name="questions[teen][{{$i+25}}][answers][]" placeholder="Answer" required>
                    </div>
                    <div class="form-group line-question">
                        <span class="title-choice">
                            <input type="radio" name="questions[teen][{{$i+25}}][correct]" value="2">
                            B)
                        </span>
                        <input type="text"   class="form-control" name="questions[teen][{{$i+25}}][answers][]" placeholder="Answer" required>
                    </div>
                    <div class="form-group line-question">
                        <span class="title-choice">
                            <input type="radio"name="questions[teen][{{$i+25}}][correct]" value="3">
                            C)
                        </span>
                        <input type="text"  class="form-control" name="questions[teen][{{$i+25}}][answers][]" placeholder="Answer" required>
                    </div>
                    <div class="form-group line-question">
                        <span class="title-choice">
                            <input type="radio" name="questions[teen][{{$i+25}}][correct]" value="4">
                            D)
                        </span>
                        <input type="text"  class="form-control" name="questions[teen][{{$i+25}}][answers][]" placeholder="Answer" required>
                    </div>
                    <div class="form-group">
                        <span class="">Image</span>
                        @php
                            $j = $i + 25;
                            $rowMediaType = (object)[
                                "field" => "questions[teen][$j][image]",
                                "field_id" => "questions-teen-$j-image",
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
                                "field" => "questions[teen][$j][sound]",
                                "field_id" => "questions-teen-$j-sound",
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