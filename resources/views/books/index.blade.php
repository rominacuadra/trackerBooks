<x-layout>
    <section>
        <x-section-heading>Books List</x-section-heading>

        <div class="mt-6 space-y-6">
            @foreach($books as $book)
                <x-book-card :$book/>
            @endforeach
        </div>

    </section>
</x-layout>
