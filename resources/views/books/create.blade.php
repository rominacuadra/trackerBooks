<x-layout>
    <x-section-heading>Create a new book to your collection!</x-section-heading>

    <x-forms.form>
        <x-forms.input label="Title" name="title"/>
        <x-forms.input label="Author" name="author" />
        <x-forms.select label="Type" name="type" autocomplete="Paper" />
        <x-forms.rating label="Ranting" name="rating" autocomplete="3" />
        <x-forms.select label="Status" name="status" autocomplete="3"/>
        <x-forms.select label="Start Date" name="start" autocomplete="3"/>
        <x-forms.select label="End Date" name="end" autocomplete="3"/>
        <x-forms.input label="Review" name="review"/>
        <x-forms.input label="Phrase" name="phrases"/>

        <x-forms.button>Create</x-forms.button>
    </x-forms.form>
</x-layout>
