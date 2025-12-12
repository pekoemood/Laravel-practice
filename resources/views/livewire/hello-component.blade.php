<div>
    {{ $message }}
    <ul>
        <li>name: "{{ $name }}", pass: "{{ $pass }}"</li>
        <li>[update: {{ $check }}]</li>
    </ul>
    <form wire:submit="updateMessage">
        <div><input type="text" wire:model="name"></div>
        <div><input type="text" wire:model="pass"></div>
        <div><button type="submit">Click</button></div>
    </form>
</div>