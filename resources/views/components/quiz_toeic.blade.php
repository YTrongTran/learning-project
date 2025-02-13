@if (isset($listening))
    @foreach ($listening as $index => $item)
        <div class="mb-4 border p-4 rounded shadow question" id="question-{{ ($currentPage - 1) * 6 + $index + 1 }}">
            {{-- Câu hỏi 1 --}}
            <div class="border p-4 rounded-lg shadow-md mb-6">
                <h2 class="font-semibold text-lg mb-2">Question {{ ($currentPage - 1) * 6 + $index + 1 }}:</h2>
                <div class="w-[310px] mb-2">
                    <img src="{{ $item['img'] }}" alt="Question 1" class="w-full">
                </div>

                {{-- Audio --}}
                <audio controls class="w-full">
                    <source src="{{ $item['audio'] }}" type="audio/mp3">
                    Your browser does not support the audio element.
                </audio>

                {{-- Lựa chọn câu trả lời --}}
                <div class="mt-3 space-y-2">
                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="radio" name="q-1" value="A" class="w-4 h-4">
                        <span>A</span>
                    </label>
                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="radio" name="q-1" value="B" class="w-4 h-4">
                        <span>B</span>
                    </label>
                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="radio" name="q-1" value="C" class="w-4 h-4">
                        <span>C</span>
                    </label>
                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="radio" name="q-1" value="D" class="w-4 h-4">
                        <span>D</span>
                    </label>
                </div>
            </div>
        </div>
    @endforeach
@endif

@if (isset($grammar))
    @foreach ($grammar as $index => $item)
        <div class="mb-4 border p-4 rounded shadow question" id="question-{{ ($currentPage - 1) * 6 + $index + 1 }}">
            <div class="font-medium text-lg mb-2">Question {{ ($currentPage - 1) * 6 + $index + 1 }}</div>
            <div class="flex gap-6">
                <div class="w-[310px]">
                    <img src="{{ $item['img'] }}" alt="Grammar Question" class="w-full">
                </div>
                <div class="flex-1">
                    <div class="text-gray-700 mb-3">{{ $item['question'] }}</div>
                    <div class="space-y-2">
                        <label class="flex items-center gap-2 cursor-pointer">
                            <input type="radio" name="q-{{ $index }}" value="A" class="w-4 h-4">
                            <span>A. {{ $item['A'] }}</span>
                        </label>
                        <label class="flex items-center gap-2 cursor-pointer">
                            <input type="radio" name="q-{{ $index }}" value="B" class="w-4 h-4">
                            <span>B. {{ $item['B'] }}</span>
                        </label>
                        @if (isset($item['C']))
                            <label class="flex items-center gap-2 cursor-pointer">
                                <input type="radio" name="q-{{ $index }}" value="C" class="w-4 h-4">
                                <span>C. {{ $item['C'] }}</span>
                            </label>
                        @endif
                        @if (isset($item['D']))
                            <label class="flex items-center gap-2 cursor-pointer">
                                <input type="radio" name="q-{{ $index }}" value="D" class="w-4 h-4">
                                <span>D. {{ $item['D'] }}</span>
                            </label>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endif
