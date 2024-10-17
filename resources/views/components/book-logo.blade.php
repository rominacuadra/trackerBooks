@props(['book', 'width' => 90])

<img src="{{ asset($book->cover) }}" alt="" class="rounded-xl" width="{{ $width }}">
