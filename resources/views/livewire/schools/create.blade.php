<?php

use Livewire\Volt\Component;

new class extends Component {
//    public function create(): void:
//    {
//        auth()->user()->schools()->create([
//            'name' =>
//        ]);
//    }
}; ?>

<div class="container mx-auto justify-center">
    <form action="" method="POST" wire:submit="create()">
        @csrf
        <label for="region">Region</label>
        <select id="region" name="region">
            <option></option>
        </select>
        <label for="district">District</label>
        <select id="district" name="district">
            <option></option>
        </select>
    </form>
</div>
