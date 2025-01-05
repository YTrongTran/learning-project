@extends('layouts.quiz')
@section('title', 'Quiz')

@section('header')
<div class="container ">
    <div class="p-2 px-10 border-b border-r border-l border-rose-900 rounded-b shadow flex justify-between">
        <h2 class="flex items-center gap-10 text-2xl font-bold">
            <span class="w-[100px] h-[100px] p-4 bg-rose-900 rounded-full text-white block">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5}
                    stroke="currentColor">
                    <path strokeLinecap="round" strokeLinejoin="round"
                        d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
                </svg>
            </span>
            <span>{{ $quiz->title }}</span>
        </h2>
    </div>
</div>
@stop

@section('content')
<div class="container">
    <div class="mt-10 border-2 p-10">
        <form method="get" action="">
            <p>{{ $questions}}</p>
            <b class="text-2xl font-bold mb-4">Cau 1</b>
            <p class="text-gray-600 text-sm mb-4">Vui lòng nhánh thực hành lớp 6</p>
            <div>
                <p class="text-gray-600">A: hellohellohellohello</p>
                <p class="text-gray-600">B hellohellohello</p>
                <p class="text-gray-600">C hellohellohello</p>
                <p class="text-gray-600">D hellohellohellohellohellohellohello</p>
            </div>
            <div class="flex gap-4 mt-4">
                <input type="radio" class="hidden" name="answer" value="A" id="answer-1">
                <label for="answer-1"
                    class="p-2 rounded-full bg-gray-200 border-2 cursor-pointer w-10 h-10 flex items-center justify-center">A</label>

                <input type="radio" class="hidden" name="answer" id="answer-2">
                <label for="answer-2"
                    class="p-2 rounded-full bg-gray-200 border-2 cursor-pointer w-10 h-10 flex items-center justify-center">B</label>

                <input type="radio" class="hidden" name="answer" id="answer-3">
                <label for="answer-3"
                    class="p-2 rounded-full bg-gray-200 border-2 cursor-pointer w-10 h-10 flex items-center justify-center">C</label>

                <input type="radio" class="hidden" name="answer" id="answer-4">
                <label for="answer-4"
                    class="p-2 rounded-full bg-gray-200 border-2 cursor-pointer w-10 h-10 flex items-center justify-center">D</label>
            </div>
            <button class="btn-primary mt-4" type="submit"><span class="relative z-10">Submit</span></button>
        </form>
    </div>
</div>

<script>
    $(document).ready(function () {
      $('input[name="answer"]').on('change', function () {
        // Remove active styles from all labels
        $('label').removeClass('bg-blue-500 text-white border-blue-500');
        $('label').addClass('bg-gray-200 border-gray-300');

        // Add active styles to the selected label
        const selectedLabel = $('label[for="' + $(this).attr('id') + '"]');
        selectedLabel.addClass('bg-blue-500 text-white border-blue-500');
        selectedLabel.removeClass('bg-gray-200 border-gray-300');
      });
    });
</script>
@stop