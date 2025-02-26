{{-- Part1 --}}
@if ($questions['part'] === 1)
    <h2 class="text-lg font-semibold mb-2">Listening:</h2>
    <p class="text-black mb-4">
        <strong>Section 1</strong>
    </p>
    <audio controls controlsList="nodownload" class="w-full mb-4 audio-listening">
        <source src="{{ $questions['audio_url'] }}" type="audio/mp3">
        Your browser does not support the audio element.
    </audio>

    @foreach ($questions['contents'] as $question)
        <h3 class="text-base font-semibold mb-4">{!! $question['title'] !!}</h3>
        <h3 class="text-base font-medium mb-4">{!! $question['subtitle'] !!}</h3>

        @foreach ($question['questions'] as $questionChild)
            @if (!empty($questionChild['options']))
                <div class="mb-4 question" id="question-1-{{ $questionChild['question_id'] }}"
                    data-id="question-1-{{ $questionChild['question_id'] }}">
                    <h2 class="font-medium text-base mb-2">{{ $questionChild['question_id'] }}.
                        {{ $questionChild['question'] }}</h2>
                    <div class="mt-3 space-y-2">
                        @foreach ($questionChild['options'] as $questionchild2)
                            <label class="flex items-center gap-2 cursor-pointer">
                                <input type="radio" name="q-{{ $questionChild['question_id'] }}"
                                    value="{{ $questionchild2['option'] }}" class="w-4 h-4">
                                <span>{{ $questionchild2['option'] }}) {{ $questionchild2['description'] }}</span>
                            </label>
                        @endforeach
                    </div>
                </div>
                <div class="border border-solid border-gray-400 mb-4"></div>
            @else
                <div class="flex items-center gap-2 mb-4 question" id="question-1-{{ $questionChild['question_id'] }}"
                    data-id="question-1-{{ $questionChild['question_id'] }}">
                    <div class="flex-1">
                        <p class="text-black">
                            {{ $questionChild['question'] }}
                        </p>
                    </div>
                    <div class="flex items-center gap-2">
                        <label
                            class="w-8 h-8 flex items-center justify-center rounded-full bg-blue-100 text-blue-600 font-bold">
                            {{ $questionChild['question_id'] }}
                        </label>
                        <div class="flex-1">
                            <input type="text" name="q-{{ $questionChild['question_id'] }}" value=""
                                class="border border-gray-300 px-3 py-2 w-full rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    @endforeach

    {{-- Part2 --}}
@elseif ($questions['part'] === 2)
    <h2 class="text-lg font-semibold mb-2">Listening:</h2>
    <p class="text-black mb-4">
        <strong>Section 2</strong>
    </p>
    <audio controls controlsList="nodownload" class="w-full mb-4 audio-listening">
        <source src="{{ $questions['audio_url'] }}" type="audio/mp3">
        Your browser does not support the audio element.
    </audio>

    @foreach ($questions['contents'] as $question)
        <h3 class="text-base font-semibold mb-4">{!! $question['title'] !!}</h3>
        <h3 class="text-base font-medium mb-4">{!! $question['subtitle'] !!}</h3>

        @foreach ($question['questions'] as $questionChild)
            @if (!empty($questionChild['options']))
                <div class="mb-4 question" id="question-1-{{ $questionChild['question_id'] }}"
                    data-id="question-1-{{ $questionChild['question_id'] }}">
                    <h2 class="font-medium text-base mb-2">{{ $questionChild['question_id'] }}.
                        {{ $questionChild['question'] }}</h2>
                    <div class="mt-3 space-y-2">
                        @foreach ($questionChild['options'] as $questionchild2)
                            <label class="flex items-center gap-2 cursor-pointer">
                                <input type="radio" name="q-{{ $questionChild['question_id'] }}"
                                    value="{{ $questionchild2['option'] }}" class="w-4 h-4">
                                <span>{{ $questionchild2['option'] }}) {{ $questionchild2['description'] }}</span>
                            </label>
                        @endforeach
                    </div>
                </div>
                <div class="border border-solid border-gray-400 mb-4"></div>
            @else
                <div class="flex items-center gap-2 mb-4 question" id="question-1-{{ $questionChild['question_id'] }}"
                    data-id="question-1-{{ $questionChild['question_id'] }}">
                    <div class="flex-1">
                        <p class="text-black">
                            {{ $questionChild['question_id'] }}. {{ $questionChild['question'] }}
                        </p>
                    </div>
                    <div class="flex items-center gap-2">
                        <label
                            class="w-8 h-8 flex items-center justify-center rounded-full bg-blue-100 text-blue-600 font-bold">
                            {{ $questionChild['question_id'] }}
                        </label>
                        <div class="flex-1">
                            <input type="text" name="q-{{ $questionChild['question_id'] }}" value=""
                                class="border border-gray-300 px-3 py-2 w-full rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    @endforeach

    {{-- Part3 --}}
@elseif ($questions['part'] === 3)
    <h2 class="text-lg font-semibold mb-2">Reading:</h2>
    <p class="text-black mb-4">
        <strong>Time Allowed: </strong>30 minutes
    </p>

    @foreach ($questions['passages'] as $question)
        <h3 class="text-xl font-semibold mb-4 text-center">{{ $question['heading'] }}</h3>
        <p class="mb-4 border border-black bg-gray-100 rounded-lg text-base p-2">{!! nl2br(e($question['text'])) !!}</p>

        @foreach ($question['questions'] as $questionChild)
            <h3 class="text-base font-semibold mb-4">{!! $questionChild['title'] !!}</h3>
            <h3 class="text-base mb-4">{!! $questionChild['subtitle'] !!}</h3>
            @if (!empty($questionChild['text']))
                <p class="mb-4 border border-black bg-gray-100 rounded-lg text-base p-2">{!! nl2br(e($questionChild['text'])) !!}</p>
            @endif
            @foreach ($questionChild['questionsChild'] as $questionChild1)
                @if (!empty($questionChild1['options']))
                    <div class="mb-4 question" id="question-3-{{ $questionChild1['question_id'] }}"
                        data-id="question-3-{{ $questionChild1['question_id'] }}">
                        <p class="font-medium text-base mb-2">{{ $questionChild1['question_id'] }}.
                            {{ $questionChild1['question'] }}</p>
                        <div class="mt-3 space-y-2">
                            @foreach ($questionChild1['options'] as $questionChild2)
                                <label class="flex items-center gap-2 cursor-pointer">
                                    <input type="radio" name="q-{{ $questionChild1['question_id'] }}"
                                        value="{{ $questionChild2['option'] }}" class="w-4 h-4">
                                    <span>{{ $questionChild2['option'] }}) {{ $questionChild2['description'] }}
                                    </span>
                                </label>
                            @endforeach
                        </div>
                    </div>
                    <div class="border border-solid border-gray-400 mb-4"></div>
                @else
                    <div class="flex items-center gap-2 mb-4 question"
                        id="question-3-{{ $questionChild1['question_id'] }}"
                        data-id="question-3-{{ $questionChild1['question_id'] }}">
                        @if (empty($questionChild['text']))
                            <div class="flex-1">
                                <p class="text-black">
                                    {{ $questionChild1['question'] }}
                                </p>
                            </div>
                        @endif
                        <div class="flex items-center gap-2">
                            <label
                                class="w-8 h-8 flex items-center justify-center rounded-full bg-blue-100 text-blue-600 font-bold">
                                {{ $questionChild1['question_id'] }}
                            </label>
                            <div class="flex-1">
                                <input type="text" name="q-{{ $questionChild1['question_id'] }}" value=""
                                    class="border border-gray-300 px-3 py-2 w-full rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        @endforeach
    @endforeach

    {{-- Part4 --}}
@elseif ($questions['part'] === 4)
    <h2 class="text-lg font-semibold mb-2">Writing:</h2>
    <p class="text-black mb-4">
        <strong>Time Allowed: </strong>30 minutes
    </p>
    <p class="mb-4 border border-black bg-gray-100 rounded-lg text-base p-2">{!! nl2br(e($questions['question'])) !!}</p>

    <h3 class="text-base font-semibold mb-4">Write at least {!! $questions['at_least_words'] !!} words.</h3>
    <div class="w-full space-y-3">
        <textarea id="writing-textarea"
            class="p-2 block w-full border border-black rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
            rows="10" placeholder="Write here..."></textarea>
    </div>

    {{-- Part5 --}}
@elseif ($questions['part'] === 5)
    <h2 class="text-lg font-semibold mb-2">Speaking:</h2>

    @foreach ($questions['questions'] as $section)
        <div class="mb-6 p-4 border border-gray-300 rounded-lg bg-gray-100">
            <h3 class="text-xl font-semibold mb-2">PART {{ $section['section'] }}</h3>

            @if (!empty($section['heading']))
                <h3 class="text-base font-semibold mb-2">{{ $section['heading'] }}</h3>
            @endif

            @if (!empty($section['question']) && isset($section['question'][0]['content']))
                @foreach ($section['question'] as $topic)
                    <div class="mb-4">
                        @if (!empty($topic['subheading']))
                            <h4 class="text-sm font-semibold">{{ $topic['subheading'] }}</h4>
                        @endif

                        <ul class="list-disc list-inside text-sm text-gray-700">
                            @foreach ($topic['content'] as $content)
                                <li class="flex items-center space-x-4 justify-between my-2">
                                    <p class="title-record flex-1">{{ $content['title'] }}
                                        @if (isset($content['time_limit']))
                                            ({{ $content['time_limit'] }}
                                            {{ $content['time_limit'] > 1 ? 'minutes' : 'minute' }})
                                        @endif
                                    </p>

                                    <div class="flex items-center space-x-3 flex-none">
                                        <button id="start-recording-{{ $content['question_id'] }}"
                                            class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">
                                            Start Recording
                                        </button>
                                        <button id="stop-recording-{{ $content['question_id'] }}"
                                            class="px-4 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600 hidden">
                                            Stop Recording
                                        </button>
                                        <span id="countdown-timer-{{ $content['question_id'] }}"
                                            class="text-lg font-semibold hidden">
                                            05:00
                                        </span>
                                    </div>

                                    <audio id="audio-playback-{{ $content['question_id'] }}" controls
                                        class="hidden mt-2 recorded"></audio>
                                    <input type="hidden" name="audio_data_{{ $content['question_id'] }}"
                                        id="audio_data_{{ $content['question_id'] }}">
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            @else
                <ul class="list-disc list-inside text-sm text-gray-700">
                    @foreach ($section['question'] as $q)
                        @if (!empty($q['title']))
                            <li class="flex items-center space-x-4 justify-between my-2">
                                <p class="title-record flex-1">{{ $q['title'] }}
                                    @if (isset($q['time_limit']))
                                        ({{ $q['time_limit'] }} {{ $q['time_limit'] > 1 ? 'minutes' : 'minute' }})
                                    @endif
                                </p>

                                <div class="flex items-center space-x-3 flex-none">
                                    <button id="start-recording-{{ $q['question_id'] }}"
                                        class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">
                                        Start Recording
                                    </button>
                                    <button id="stop-recording-{{ $q['question_id'] }}"
                                        class="px-4 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600 hidden">
                                        Stop Recording
                                    </button>
                                    <span id="countdown-timer-{{ $q['question_id'] }}"
                                        class="text-lg font-semibold hidden">
                                        05:00
                                    </span>
                                </div>

                                <audio id="audio-playback-{{ $q['question_id'] }}" controls
                                    class="hidden mt-2 recorded"></audio>
                                <input type="hidden" name="audio_data_{{ $q['question_id'] }}"
                                    id="audio_data_{{ $q['question_id'] }}">
                            </li>
                        @endif
                    @endforeach
                </ul>
            @endif
        </div>
    @endforeach


    {{-- 
    <h2 class="text-lg font-semibold mb-2">Speaking:</h2>
    <p class="text-black mb-4">
        <strong>Time Allowed: </strong>5 minutes
    </p>
    @foreach ($questions['questions'] as $section)
        <div class="mb-6 p-4 border border-gray-300 rounded-lg bg-gray-100">
            <h3 class="text-xl font-semibold mb-2">PART {{ $section['section'] }}</h3>

            @if (!empty($section['title']))
                <h3 class="text-base font-semibold mb-2">{{ $section['title'] }}</h3>
            @endif

            @if (isset($section['question'][0]) && is_array($section['question'][0]))
                @foreach ($section['question'] as $topic)
                    <div class="mb-4">
                        <h4 class="text-sm font-semibold">{{ $topic['title'] }}</h4>
                        <ul class="list-disc list-inside text-sm text-gray-700">
                            @foreach ($topic['content'] as $content)
                                <li>{{ $content }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            @else
                <ul class="list-disc list-inside text-sm text-gray-700">
                    @foreach ($section['question'] as $q)
                        <li>{{ $q }}</li>
                    @endforeach
                </ul>
            @endif
        </div>
    @endforeach

    <div class="flex items-center space-x-3">
        <button id="start-recording" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">Start
            Recording</button>
        <button id="stop-recording" class="px-4 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600 hidden">Stop
            Recording</button>
        <span id="countdown-timer" class="text-lg font-semibold hidden">05:00</span>
    </div>

    <audio id="audio-playback" controls class="hidden mt-2"></audio>
    <input type="hidden" name="audio_data" id="audio_data">

    </div> --}}


@endif
