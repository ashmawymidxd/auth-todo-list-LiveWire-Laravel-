{{-- <div>
    <input type="text" wire:model='message'>
    <h1>{{ $message }}</h1>
</div>

<div>
    <label for="">
        <input wire:model="showEmail" type="checkbox">
        Show Email ?
    </label><br>
    <p>Show Emial {{ var_export($showEmail) }}</p>
</div>

<div class="radio">
    <label for="">
        <input wire:model="color" type="radio" value="red">
        Red
    </label>
    <label for="">
        <input wire:model="color" type="radio" value="green">
        Green
    </label>
    <label for="">
        <input wire:model="color" type="radio" value="blue">
        Blue
    </label>
    <p>Color: {{ $color }}</p>
</div> --}}

<!-- select size -->
{{-- <div>
    <select wire:model="size">
        <option value="sm" disabled>Select Size</option>
        <option value="sm">Small</option>
        <option value="md">Medium</option>
        <option value="lg">Large</option>
    </select>
    <p>Size: {{ $size }}</p>
</div> --}}

<!-- multi select swag -->
<div>
    <select wire:model="swag" multiple name="" id="">
        <option value="t-shirt">T-Shirt</option>
        <option value="sticker">Sticker</option>
        <option value="hoodie">Hoodie</option>
    </select>
    <p>Swag: {{ json_encode($swag) }}</p>
</div>
