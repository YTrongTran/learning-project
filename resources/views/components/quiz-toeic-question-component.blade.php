@if ($type == 'teen')
    @if ($questions['part'] === 1)
        @foreach ($questions['questions'] as $question)
            @if (!empty($question['img']))
                <div class="mb-4 question" id="question-{{ $question['question_id'] }}" data-id="{{$question['question_id']}}" data-exam_id="{{$question['exam_id']}}">
                    <div class="font-medium text-lg mb-2">Question {{ $question['question_id'] }}:</div>
                    <div class="flex gap-6">
                        <div class="w-[310px]">
                            <img src="{{ $question['img'] }}" alt="Grammar Question" class="w-full">
                        </div>
                        <div class="flex-1">
                            <div class="text-gray-700 mb-3">{{ $question['question'] }}</div>
                            <div class="space-y-2">
                                @foreach (['A', 'B', 'C', 'D'] as $option)
                                    @if (!empty($question[$option]))
                                        <label class="flex items-center gap-2 cursor-pointer">
                                            <input type="radio" name="q-{{ $question['question_id'] }}"
                                                value="{{ $option }}" class="w-4 h-4">
                                            <span>{{ $option }}. {{ $question[$option] }}</span>
                                        </label>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="border border-solid border-gray-400 mb-4"></div>
            @else
                <div class="mb-4 question" id="question-{{ $question['question_id'] }}" data-id="{{$question['question_id']}}" data-exam_id="{{$question['exam_id']}}">
                    <div class="font-medium text-lg mb-2">Question {{ $question['question_id'] }}:</div>
                    <div class="text-gray-700 mb-3">{!! $question['question'] !!}</div>
                    <div class="space-y-2">
                        <label class="flex items-center gap-2 cursor-pointer">
                            <input type="radio" name="q-{{ $question['question_id'] }}" value="A"
                                class="w-4 h-4">
                            <span>A. {{ $question['A'] }}</span>
                        </label>
                        <label class="flex items-center gap-2 cursor-pointer">
                            <input type="radio" name="q-{{ $question['question_id'] }}" value="B"
                                class="w-4 h-4">
                            <span>B. {{ $question['B'] }}</span>
                        </label>
                        @if (isset($question['C']))
                            <label class="flex items-center gap-2 cursor-pointer">
                                <input type="radio" name="q-{{ $question['question_id'] }}" value="C"
                                    class="w-4 h-4">
                                <span>C. {{ $question['C'] }}</span>
                            </label>
                        @endif
                        @if (isset($question['D']))
                            <label class="flex items-center gap-2 cursor-pointer">
                                <input type="radio" name="q-{{ $question['question_id'] }}" value="D"
                                    class="w-4 h-4">
                                <span>D. {{ $question['D'] }}</span>
                            </label>
                        @endif
                    </div>
                </div>
                <div class="border border-solid border-gray-400 mb-4"></div>
            @endif
        @endforeach
    @elseif ($questions['part'] === 2)
        <h2 class="text-lg font-semibold mb-2">Reading:</h2>
        <p class="text-black mb-4">
            <strong>Time Allowed: </strong>30 minutes
        </p>

        @foreach ($questions['passages'] as $question)
            @foreach ($question['questions'] as $questionChild)
            
                @if ($questionChild['passage'] != null)
                 {{-- {{print_r($questionChild)}} --}}
                 <h3 class="text-xl font-semibold mb-4 text-center">{{ $questionChild['heading'] }}</h3>
                 <p class="mb-4 border border-black bg-gray-100 rounded-lg text-base p-2">
                    {!! nl2br(e($questionChild['passage'])) !!}
                </p>
                @endif
                @if ($questionChild['passage'] == null)
                <div class="mb-4 question" id="question-{{ $questionChild['question_id'] }}"
                data-id="question-{{ $questionChild['question_id'] }}">
                <p class="font-medium text-base mb-2">
                    {{ $questionChild['question_id'] }}. {{ $questionChild['heading'] }}
                </p>
                <div class="mt-3 space-y-2">
                    @foreach ($questionChild['options'] as $item)
                        @if ($item['description'] !== null)
                            <label class="flex items-center gap-2 cursor-pointer">
                                <input type="radio" name="q-{{ $questionChild['question_id'] }}"
                                    value="{{ $item['option'] }}" class="w-4 h-4">
                                <span>{{ $item['description'] }}</span>
                            </label>
                        @endif
                    @endforeach
                </div> 
                @endif
               
                
            </div>
            <div class="border border-solid border-gray-400 mb-4"></div>
            @endforeach
        @endforeach

    @else
        @if ($questions['part'] === 3)
            <h2 class="text-lg font-semibold mb-2">Writing:</h2>
            <p class="text-black mb-4">
                <strong>Time Allowed: </strong>30 minutes
            </p>
            @foreach ($questions['questions'] as $item)
                {{print_r($item)}}
            @endforeach
            <p class="text-black mb-4">
                {!! $questions['title'] !!}
            </p>
            <p class="mb-4 border border-black bg-gray-100 rounded-lg text-base p-2">{!! nl2br(e($questions['question'])) !!}</p>

            <h3 class="text-base font-semibold mb-4">Write at least {!! $questions['at_least_words'] !!} words.</h3>
            <div class="w-full space-y-3">
                <textarea id="writing-textarea"
                    class="p-2 block w-full border border-black rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                    rows="10" placeholder="Write here..."></textarea>
            </div>
        @endif
    @endif
@elseif ($type == 'toeic')
    {{-- Part1 --}}
    @if ($questions['part'] === 1)
        <h2 class="text-lg font-semibold mb-2">Listening:</h2>
        <p class="text-black mb-4">
            <strong>Part 1: (Questions 1–6)</strong><br>
            In this part, you will hear a short description of each photograph.
            For each question, choose the statement that best describes the photograph.
        </p>

        <audio controls controlsList="nodownload" class="w-full mb-4">
            <source src="{{ $questions['audio_url'] }}" type="audio/mp3">
            Your browser does not support the audio element.
        </audio>

        @foreach ($questions['questions'] as $question)
            <div class="mb-4 question" id="question-{{ $question['question_id'] }}"
                data-id="question-{{ $question['question_id'] }}">
                <h2 class="font-medium text-base mb-2">Question {{ $question['question_id'] }}:</h2>
                <div class="w-[310px] mb-2">
                    <img src="{{ $question['image_url'] }}" alt="Question {{ $question['question_id'] }}"
                        class="w-full">
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
            <div class="border border-solid border-gray-400 mb-4"></div>
        @endforeach

        {{-- Part2 --}}
    @elseif ($questions['part'] === 2)
        <p class="text-black mb-4">
            <strong>Part 2: (Questions 7–12)</strong><br>
            In this part, you will hear a question followed by three possible answers. Choose the best response.
        </p>
        <audio controls controlsList="nodownload" class="w-full mb-4">
            <source src="{{ $questions['audio_url'] }}" type="audio/mp3">
            Your browser does not support the audio element.
        </audio>
        @foreach ($questions['questions'] as $question)
            <div class="mb-4 question"
                id="question-{{ $question['question_id'] }}"data-id="question-{{ $question['question_id'] }}">
                <h2 class="font-medium text-base mb-2">Question {{ $question['question_id'] }}:</h2>
                <div class="mt-3 space-y-2">
                    @foreach (['A', 'B', 'C'] as $option)
                        <label class="flex items-center gap-2 cursor-pointer">
                            <input type="radio" name="q-{{ $question['question_id'] }}"
                                value="{{ $option }}" class="w-4 h-4">
                            <span>{{ $option }}</span>
                        </label>
                    @endforeach
                </div>
            </div>
            <div class="border border-solid border-gray-400 mb-4"></div>
        @endforeach

        {{-- Part3 --}}
    @elseif ($questions['part'] === 3)
        <p class="text-black mb-4">
            <strong>Part 3: (Questions 13–18)</strong><br>
            You will hear a conversation between two people. For each question, choose the best answer.
        </p>
        <audio controls controlsList="nodownload" class="w-full mb-4">
            <source src="{{ $questions['audio_url'] }}" type="audio/mp3">
            Your browser does not support the audio element.
        </audio>
        @foreach ($questions['questions'] as $question)
            <div class="mb-4 question"
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
            <div class="border border-solid border-gray-400 mb-4"></div>
        @endforeach

        {{-- Part4 --}}
    @elseif ($questions['part'] === 4)
        <p class="text-black mb-4">
            <strong>Part 4: (Questions 19-25)</strong><br>
            You will hear a short talk. For each question, choose the best answer.
        </p>
        <audio controls controlsList="nodownload" class="w-full mb-4">
            <source src="{{ $questions['audio_url'] }}" type="audio/mp3">
            Your browser does not support the audio element.
        </audio>
        @foreach ($questions['questions'] as $question)
            <div class="mb-4 question"
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
            <div class="border border-solid border-gray-400 mb-4"></div>
        @endforeach

        {{-- Part5 --}}
    @elseif ($questions['part'] === 5)
        <h2 class="text-lg font-semibold mb-2">Reading:</h2>
        <p class="text-black mb-4">
            <strong>Part 5: (Questions 26-35)</strong><br>
            For each question, choose the best answer to complete the sentence.
        </p>

        @foreach ($questions['questions'] as $question)
            <div class="mb-4 question"
                id="question-{{ $question['question_id'] }}"data-id="question-{{ $question['question_id'] }}">
                <p class="font-medium text-base mb-2">{{ $question['question_id'] }}. {{ $question['text'] }}</p>
                <div class="mt-3 space-y-2">
                    @foreach ($question['options'] as $questionchild)
                        <label class="flex items-center gap-2 cursor-pointer">
                            <input type="radio" name="q-{{ $question['question_id'] }}"
                                value="{{ $questionchild['option'] }}" class="w-4 h-4">
                            <span>{{ $questionchild['option'] }} {{ $questionchild['description'] }}</span>
                        </label>
                    @endforeach
                </div>
            </div>
            <div class="border border-solid border-gray-400 mb-4"></div>
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
                <div class="mb-4 question" id="question-{{ $questionChild1['question_id'] }}"
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
                <div class="border border-solid border-gray-400 mb-4"></div>
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
            <p class="mb-4 border border-solid border-gray-800 p-2 rounded">{!! nl2br(e($question['text'])) !!}</p>

            @foreach ($question['questions'] as $questionChild1)
                <div class="mb-4 question" id="question-{{ $questionChild1['question_id'] }}"
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
                <div class="border border-solid border-gray-400 mb-4"></div>
            @endforeach
        @endforeach

    @endif
@endif
