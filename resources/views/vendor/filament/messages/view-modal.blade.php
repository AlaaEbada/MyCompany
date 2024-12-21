<x-filament::modal>
    <x-slot name="title">Message Details</x-slot>

    <x-slot name="content">
        <div>
            <p><strong>Name:</strong> {{ $message->name }}</p>
            <p><strong>Email:</strong> {{ $message->email }}</p>
            <p><strong>Message:</strong> {{ $message->message }}</p>
            <p><strong>Submitted At:</strong> {{ $message->created_at->format('F j, Y, g:i a') }}</p>
        </div>
    </x-slot>

    <x-slot name="footer">
        <x-filament::button type="button" class="w-full" wire:click="closeModal">Close</x-filament::button>
    </x-slot>
</x-filament::modal>
