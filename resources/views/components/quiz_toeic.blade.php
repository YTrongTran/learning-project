@php
    $showHeadingListening = true;
    $showHeadingReading = true;
    $showHeadingWriting = true;
@endphp
@foreach ($questions as $index => $item)
    @php
        $questionNumber = ($currentPage - 1) * 6 + $index + 1;
    @endphp

    {{-- Listening --}}
    @if (!empty($item['audio']))
        @if ($showHeadingListening)
            <div class="text-lg font-semibold mb-2">Listening:</div>
            <p class="text-gray-700 mb-6">
                <strong>Part 1: (Questions 1–6)</strong><br>
                In this part, you will hear a short description of each photograph.
                For each question, choose the statement that best describes the photograph.
            </p>
            @php
                $showHeadingListening = false;
            @endphp
        @endif
        <div class="mb-4 border p-4 rounded shadow question" id="question-{{ $questionNumber }}">
            <h2 class="font-semibold text-lg mb-2">Question {{ $questionNumber }}:</h2>
            <div class="w-[310px] mb-2">
                <img src="{{ $item['img'] }}" alt="Question {{ $questionNumber }}" class="w-full">
            </div>

            <audio controls class="w-full">
                <source src="{{ $item['audio'] }}" type="audio/mp3">
                Your browser does not support the audio element.
            </audio>

            <div class="mt-3 space-y-2">
                @foreach (['A', 'B', 'C', 'D'] as $option)
                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="radio" name="q-{{ $questionNumber }}" value="{{ $option }}"
                            class="w-4 h-4">
                        <span>{{ $option }}</span>
                    </label>
                @endforeach
            </div>
        </div>

        {{-- Grammar --}}
    @elseif (!empty($item['question']) && !empty($item['img']))
        <div class="mb-4 border p-4 rounded shadow question" id="question-{{ $questionNumber }}">
            <div class="font-medium text-lg mb-2">Question {{ $questionNumber }}</div>
            <div class="flex gap-6">
                <div class="w-[310px]">
                    <img src="{{ $item['img'] }}" alt="Grammar Question" class="w-full">
                </div>
                <div class="flex-1">
                    <div class="text-gray-700 mb-3">{{ $item['question'] }}</div>
                    <div class="space-y-2">
                        @foreach (['A', 'B', 'C', 'D'] as $option)
                            @if (!empty($item[$option]))
                                <label class="flex items-center gap-2 cursor-pointer">
                                    <input type="radio" name="q-{{ $questionNumber }}" value="{{ $option }}"
                                        class="w-4 h-4">
                                    <span>{{ $option }}. {{ $item[$option] }}</span>
                                </label>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        {{-- Reading --}}
    @elseif (!empty($item['title']) && !empty($item['content']))
        @if ($showHeadingReading)
            <div class="text-lg font-semibold mb-2">Reading:</div>
            <p class="text-gray-700 mb-6">
                Read the text below. For questions 61–65, choose the best answer (A, B or C)
            </p>
            @php
                $showHeadingReading = false;
            @endphp
        @endif

        <div class="mb-4 border p-4 rounded shadow question" id="question-{{ $questionNumber }}">
            <h2 class="font-semibold text-xl mb-2">{{ $item['title'] }}</h2>
            <p class="text-gray-700 mb-6">
                {{ $item['content'] }}
            </p>

            @foreach ($item['questions'] as $index => $itemChild)
                <h2 class="font-semibold text-lg mb-2">Question {{ $questionNumber }}:</h2>
                <div class="text-gray-700 mb-3">{{ $itemChild['question'] }}
                    <div class="space-y-2">
                        @foreach (['A', 'B', 'C', 'D'] as $option)
                            @if (!empty($itemChild[$option]))
                                <label class="flex items-center gap-2 cursor-pointer">
                                    <input type="radio" name="q-{{ $questionNumber }}" value="{{ $option }}"
                                        class="w-4 h-4">
                                    <span>{{ $option }}. {{ $itemChild[$option] }}</span>
                                </label>
                            @endif
                        @endforeach
                    </div>
                </div>
            @endforeach

        </div>

        {{-- Writing --}}
    @elseif (!empty($item['question']) && !empty($item['desc']))
        @if ($showHeadingWriting)
            <div class="text-lg font-semibold mb-2">Writing:</div>
            @php
                $showHeadingWriting = false;
            @endphp
        @endif
        <div class="mb-4 border p-4 rounded shadow question" id="question-{{ $questionNumber }}">
            <h2 class="font-medium text-lg mb-4">{{ $item['question'] }}</h2>
            <h2 class="text-lg mb-4">{{ $item['desc'] }}</h2>
            <h2 class="font-medium text-lg mb-2">{{ $item['required'] }}</h2>
            <input type="textarea" name="q-{{ $questionNumber }}" class="w-full h-[120px] p-2 border rounded"
                placeholder="Write 75–100 words.">
        </div>
    @endif
@endforeach
