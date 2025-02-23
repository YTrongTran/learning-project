@foreach ($questions as $index => $item)
    @php
        $questionNumber = ($currentPage - 1) * 6 + $index + 1;
    @endphp

    {{-- Communicate --}}
    @if ($type == 'communicate')
        <div class="mb-4 question" id="question-{{ $questionNumber }}">
            <div class="font-medium text-lg mb-2">Câu hỏi {{ $questionNumber }}</div>
            <div class="text-gray-700 mb-3">{!! $item['question'] !!}</div>
            <div class="space-y-2">
                <label class="flex items-center gap-2 cursor-pointer">
                    <input type="radio" name="q-{{ $questionNumber }}" value="A" class="w-4 h-4">
                    <span>A. {{ $item['A'] }}</span>
                </label>
                <label class="flex items-center gap-2 cursor-pointer">
                    <input type="radio" name="q-{{ $questionNumber }}" value="B" class="w-4 h-4">
                    <span>B. {{ $item['B'] }}</span>
                </label>
                @if (isset($item['C']))
                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="radio" name="q-{{ $questionNumber }}" value="C" class="w-4 h-4">
                        <span>C. {{ $item['C'] }}</span>
                    </label>
                @endif
                @if (isset($item['D']))
                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="radio" name="q-{{ $questionNumber }}" value="D" class="w-4 h-4">
                        <span>D. {{ $item['D'] }}</span>
                    </label>
                @endif
            </div>
        </div>
        <div class="border border-solid border-gray-400 mb-4"></div>

        {{-- Superkids --}}
    @elseif ($type == 'superkids')
        <div class="mb-4 question" id="question-{{ $questionNumber }}">
            <div class="font-medium text-lg mb-2">Question {{ $questionNumber }}:</div>
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
        <div class="border border-solid border-gray-400 mb-4"></div>
    @endif
@endforeach
