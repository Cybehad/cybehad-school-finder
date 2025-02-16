<?php

use Livewire\Volt\Component;

new class extends Component {
    public function with(): array
    {
        return [
            'schools' => auth()->user()->schools,
        ];
    }
};
?>
<div>
    <div class="grid lg:grid-cols-3 space-y-6 space-x-6 my-4">
        @foreach($schools as $school)
            <div
                class="border border-gray-700 rounded-lg flex flex-col p-6 shadow-lg transition duration-300 hover:dark:bg-gray-800/40 hover:border-gray-600 hover:dark:bg-gray-800">
                <a href="{{ route('schools.show', [$school->id]) }}" wire:navigate>
                    <h2 class="font-bold text-lg">{{ \Illuminate\Support\Str::limit($school->name, 20, '...') }}</h2>
                    <img src="" alt="{{ $school->name }}" height="30" width="30">
                    <p>{{ \Illuminate\Support\Str::limit($school->description, 160, '...') }} Lorem ipsum dolor sit
                        amet, consectetur adipisicing elit. Alias aut autem consequuntur doloremque dolorum
                        exercitationem, fuga in maiores, neque nesciunt nulla odit pariatur porro saepe sed sit suscipit
                        temporibus, velit.</p>
                </a>
                <div class="mt-6 flex flex-row justify-between">
                    <a href="{{ route('schools.show', [$school->id]) }}"
                       class="ring-1 ring-gray-600 transition duration-300 bg-gray-800/10 hover:dark:bg-gray-900 text-center py-2 px-4 rounded-lg"
                       wire:navigate>View</a>
                    <a href="{{ route('schools.edit', [$school->id]) }}"
                       class="ring-1 ring-gray-600 transition duration-300 bg-gray-800/10 hover:dark:bg-gray-900 text-center py-2 px-4 rounded-lg"
                       wire:navigate>Edit</a>
                </div>
            </div>
        @endforeach
    </div>
    <hr>
    <div class="mt-4">
        <a href="{{ route('schools.create') }}"
           class="ring-1 ring-gray-600 transition duration-300 bg-gray-800/10 hover:dark:bg-gray-900 text-center py-2 px-4 rounded-lg"
           wire:navigate>Create School</a>
    </div>
</div>
