@foreach ($questions as $index => $item)

    @php
        $questionNumber = ($currentPage - 1) * 6 + $index + 1;
    @endphp
    <div class="mb-4 border p-4 rounded shadow question" id="question-{{ $questionNumber }}" data-id="{{$item['question_id']}}">
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
            @if (isset($item['correct']))
                    <input type="hidden" name="correct" value="{{$item['correct']}}" >
            @endif
        </div>
    </div>
@endforeach
