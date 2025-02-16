<?php

use Livewire\Volt\Component;

new class extends Component {

    public function with(): array
    {
        return [
            'schools' => \App\Models\School::all(),
        ];
    }
}; ?>

<div>
    <div class="grid gap-6 lg:grid-cols-2 lg:gap-8">
        @foreach($schools as $school)
            <a href="{{ route('institutions', [$school->id]) }}" id="docs-card" class="flex flex-row items-start gap-6 overflow-hidden rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] md:row-span-3 lg:p-10 lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]" wire:navigate>
                <img src="" alt="" class="h-20 w-20 border rounded-lg">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aut dicta enim est expedita harum id
                in iusto laudantium modi mollitia, neque nihil nobis odit quaerat quibusdam totam voluptatem voluptatum?
            </a>
        @endforeach

    </div>
</div>
