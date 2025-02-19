{{-- Part1 --}}
@if ($questions['part'] === 1)
    <h2 class="text-lg font-semibold mb-2">Listening:</h2>
    <p class="text-black mb-4">
        <strong>Part 1: (Questions 1–6)</strong><br>
        In this part, you will hear a short description of each photograph.
        For each question, choose the statement that best describes the photograph.
    </p>

    <audio controls class="w-full mb-4">
        <source src="{{ $questions['audio_url'] }}" type="audio/mp3">
        Your browser does not support the audio element.
    </audio>

    @foreach ($questions['questions'] as $question)
        <div class="mb-4 border p-4 rounded shadow question" id="question-{{ $question['question_id'] }}"
            data-id="question-{{ $question['question_id'] }}">
            <h2 class="font-medium text-base mb-2">Question {{ $question['question_id'] }}:</h2>
            <div class="w-[310px] mb-2">
                <img src="{{ $question['image_url'] }}" alt="Question {{ $question['question_id'] }}" class="w-full">
            </div>

            <div class="mt-3 space-y-2">
                @foreach (['A', 'B', 'C', 'D'] as $option)
                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="radio" name="q-{{ $question['question_id'] }}" value="{{ $option }}"
                            class="w-4 h-4">
                        <span>{{ $option }}</span>
                    </label>
                @endforeach
            </div>
        </div>
    @endforeach

    {{-- Part2 --}}
@elseif ($questions['part'] === 2)
    <p class="text-black mb-4">
        <strong>Part 2: (Questions 7–12)</strong><br>
        In this part, you will hear a question followed by three possible answers. Choose the best response.
    </p>
    <audio controls class="w-full mb-4">
        <source src="{{ $questions['audio_url'] }}" type="audio/mp3">
        Your browser does not support the audio element.
    </audio>
    @foreach ($questions['questions'] as $question)
        <div class="mb-4 border p-4 rounded shadow question"
            id="question-{{ $question['question_id'] }}"data-id="question-{{ $question['question_id'] }}">
            <h2 class="font-medium text-base mb-2">Question {{ $question['question_id'] }}:</h2>
            <div class="mt-3 space-y-2">
                @foreach (['A', 'B', 'C'] as $option)
                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="radio" name="q-{{ $question['question_id'] }}" value="{{ $option }}"
                            class="w-4 h-4">
                        <span>{{ $option }}</span>
                    </label>
                @endforeach
            </div>
        </div>
    @endforeach

    {{-- Part3 --}}
@elseif ($questions['part'] === 3)
    <p class="text-black mb-4">
        <strong>Part 3: (Questions 13–18)</strong><br>
        You will hear a conversation between two people. For each question, choose the best answer.
    </p>
    <audio controls class="w-full mb-4">
        <source src="{{ $questions['audio_url'] }}" type="audio/mp3">
        Your browser does not support the audio element.
    </audio>
    @foreach ($questions['questions'] as $question)
        <div class="mb-4 border p-4 rounded shadow question"
            id="question-{{ $question['question_id'] }}"data-id="question-{{ $question['question_id'] }}">
            <h2 class="font-medium text-base mb-2">Question {{ $question['question_id'] }}:
                {{ $question['question'] }}</h2>
            <div class="mt-3 space-y-2">
                @foreach ($question['options'] as $questionchild)
                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="radio" name="q-{{ $question['question_id'] }}"
                            value="{{ $questionchild['option'] }}" class="w-4 h-4">
                        <span>{{ $questionchild['option'] }}) {{ $questionchild['description'] }}</span>
                    </label>
                @endforeach
            </div>
        </div>
    @endforeach

    {{-- Part4 --}}
@elseif ($questions['part'] === 4)
    <p class="text-black mb-4">
        <strong>Part 4: (Questions 19-25)</strong><br>
        You will hear a short talk. For each question, choose the best answer.
    </p>
    <audio controls class="w-full mb-4">
        <source src="{{ $questions['audio_url'] }}" type="audio/mp3">
        Your browser does not support the audio element.
    </audio>
    @foreach ($questions['questions'] as $question)
        <div class="mb-4 border p-4 rounded shadow question"
            id="question-{{ $question['question_id'] }}"data-id="question-{{ $question['question_id'] }}">
            <h2 class="font-medium text-base mb-2">Question {{ $question['question_id'] }}:
                {{ $question['question'] }}</h2>
            <div class="mt-3 space-y-2">
                @foreach ($question['options'] as $questionchild)
                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="radio" name="q-{{ $question['question_id'] }}"
                            value="{{ $questionchild['option'] }}" class="w-4 h-4">
                        <span>{{ $questionchild['option'] }}) {{ $questionchild['description'] }}</span>
                    </label>
                @endforeach
            </div>
        </div>
    @endforeach

    {{-- Part5 --}}
@elseif ($questions['part'] === 5)
    <h2 class="text-lg font-semibold mb-2">Reading:</h2>
    <p class="text-black mb-4">
        <strong>Part 5: (Questions 26-35)</strong><br>
        For each question, choose the best answer to complete the sentence.
    </p>

    @foreach ($questions['questions'] as $question)
        <div class="mb-4 border p-4 rounded shadow question"
            id="question-{{ $question['question_id'] }}"data-id="question-{{ $question['question_id'] }}">
            <p class="font-medium text-base mb-2">{{ $question['question_id'] }}. {{ $question['text'] }}</p>
            <div class="mt-3 space-y-2">
                @foreach ($question['options'] as $questionchild)
                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="radio" name="q-{{ $question['question_id'] }}"
                            value="{{ $questionchild['option'] }}" class="w-4 h-4">
                        <span>{{ $questionchild['option'] }}) {{ $questionchild['description'] }}</span>
                    </label>
                @endforeach
            </div>
        </div>
    @endforeach

    {{-- Part6 --}}
@elseif ($questions['part'] === 6)
    <p class="text-black mb-4">
        <strong>Part 6: (Questions 36-40)</strong><br>
        Read the text and choose the best answer to fill each blank.
    </p>

    @foreach ($questions['passages'] as $question)
        <h3 class="text-base font-semibold mb-2">Passage:</h3>
        <p class="mb-4">{{ $question['text'] }}</p>

        @foreach ($question['questions'] as $questionChild1)
            <div class="mb-4 border p-4 rounded shadow question" id="question-{{ $questionChild1['question_id'] }}"
                data-id="question-{{ $questionChild1['question_id'] }}">
                <p class="font-medium text-base mb-2">{{ $questionChild1['question_id'] }}.</p>
                <div class="mt-3 space-y-2">
                    @foreach ($questionChild1['options'] as $questionChild2)
                        <label class="flex items-center gap-2 cursor-pointer">
                            <input type="radio" name="q-{{ $questionChild1['question_id'] }}"
                                value="{{ $questionChild2['option'] }}" class="w-4 h-4">
                            <span>{{ $questionChild2['option'] }}) {{ $questionChild2['description'] }} </span>
                        </label>
                    @endforeach
                </div>
            </div>
        @endforeach
    @endforeach

    {{-- Part7 --}}
@elseif ($questions['part'] === 7)
    <p class="text-black mb-4">
        <strong>Part 7: (Questions 40-50)</strong><br>
        Read the passage and answer the questions that follow.
    </p>

    @foreach ($questions['passages'] as $question)
        <h3 class="text-base font-semibold mb-2">Passage {{ $question['passage_id'] }}:</h3>
        <p class="mb-4">{{ $question['text'] }}</p>

        @foreach ($question['questions'] as $questionChild1)
            <div class="mb-4 border p-4 rounded shadow question" id="question-{{ $questionChild1['question_id'] }}"
                data-id="question-{{ $questionChild1['question_id'] }}">
                <p class="font-medium text-base mb-2">{{ $questionChild1['question_id'] }}.
                    {{ $questionChild1['question'] }}</p>
                <div class="mt-3 space-y-2">
                    @foreach ($questionChild1['options'] as $questionChild2)
                        <label class="flex items-center gap-2 cursor-pointer">
                            <input type="radio" name="q-{{ $questionChild1['question_id'] }}"
                                value="{{ $questionChild2['option'] }}" class="w-4 h-4">
                            <span>{{ $questionChild2['option'] }}) {{ $questionChild2['description'] }}</span>
                        </label>
                    @endforeach
                </div>
            </div>
        @endforeach
    @endforeach

@endif
