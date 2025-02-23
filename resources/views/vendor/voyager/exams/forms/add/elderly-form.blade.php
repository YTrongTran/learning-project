<form class="exam-form exam-form-elderly hidden" method="POST">    
    <div class="exam-elderly questions-container">
    @for ($i = 0; $i < 25; $i++)
        <div class="question">
            <h4 class="question-title has-toggle" >Question {{$i+1}}</h4>
            <div class="question-content">
                <div class="form-group">
                    <textarea type="text" class="form-control" name="questions[elderly][{{$i}}][text]" placeholder="Question"></textarea>
                </div>
                <h4>Answers</h4>
                <div class="form-group line-question">
                    <span class="title-choice">
                        <input type="radio" name="questions[elderly][{{$i}}][correct]" value="1" checked>
                        A)
                    </span>
                    <input type="text" class="form-control" name="questions[elderly][{{$i}}][answers][]" placeholder="Answer" required>
                </div>
                <div class="form-group line-question">
                    <span class="title-choice">
                        <input type="radio" name="questions[elderly][{{$i}}][correct]" value="2">
                        B)
                    </span>
                    <input type="text" class="form-control" name="questions[elderly][{{$i}}][answers][]" placeholder="Answer" required>
                </div>
                <div class="form-group line-question">
                    <span class="title-choice">
                        <input type="radio"name="questions[elderly][{{$i}}][correct]" value="3">
                        C)
                    </span>
                    <input type="text" class="form-control" name="questions[elderly][{{$i}}][answers][]" placeholder="Answer" required>
                </div>
                <div class="form-group line-question">
                    <span class="title-choice">
                        <input type="radio" name="questions[elderly][{{$i}}][correct]" value="4">
                        D)
                    </span>
                    <input type="text" class="form-control" name="questions[elderly][{{$i}}][answers][]" placeholder="Answer" required>
                </div>
            </div>
        </div>
    @endfor
    </div>
</form>