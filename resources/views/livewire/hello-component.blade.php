<div>
    This is Livewire component!!
    <ul>
        <li>{{ $message }}</li>
        <li>count: {{ $count }}</li>
    </ul>
    <form wire:submit="updateMessage">
        <input type="text" wire:model="message">
        <button type="submit">Click</button>
    </form>

</div>
