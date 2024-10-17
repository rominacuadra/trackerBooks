@props(['book'])

<x-panel class="flex gap-x-6">
    <div>
        <x-book-logo :book="$book" />
    </div>

    <div class="flex-1 flex flex-col">

        <h3 class="font-bold text-xl mt-3 group-hover:text-blue-800">
            {{ $book->title }}
        </h3>

        <a href="#" class="self-start text-sm text-gray-400 transition-colors duration-300">{{ $book->author }}</a>

        <p class="text-sm text-gray-400 mt-auto">{{ $book->review }}</p>
    </div>

{{--    <div>--}}
{{--        @foreach($book->tags as $tag)--}}
{{--            <x-tag :$tag />--}}
{{--        @endforeach--}}
{{--    </div>--}}
</x-panel>
