<div>
    {{ $message }}
    @livewire('notification', [
        'title' => $alert_title,
        'content' => $alert_content])
    <input type="text" wire:model="input">
    <button wire:click="doAction">click</button>
</div>