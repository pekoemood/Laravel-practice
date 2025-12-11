<div>
    This is Livewire component!!
    <ul>
        <li>{{ $message }}</li>
        <li>count: {{ $count }}</li>
    </ul>
    <input type="text" wire:model="message">
    <button wire:click="updateMessage">Click</button>
</div>
