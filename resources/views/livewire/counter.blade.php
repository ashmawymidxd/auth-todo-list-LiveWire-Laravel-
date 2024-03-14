<div>
    <h1>Hello World!</h1>
    <div style="text-align: center">
        <button wire:click="increment">+</button>
        <h1>{{ $count }}</h1>
    </div>
    <!-- display the users -->
    {{-- <div class="flex flex-col space-y-4">
        @foreach ($users as $user)
            <div class="flex items-center space-x-4">
                <div>
                    <h2>{{ $user->name }}</h2>
                    <p>{{ $user->email }}</p>
                </div>
            </div>
        @endforeach
    </div> --}}
    <div class="flex flex-col space-y-4">
        <input wire:model="name" type="text" class="form">
        welcome {{ $name }}
    </div>
    <div class="flex flex-col space-y-4">
        <input wire:model="load" type="checkbox">
        @if ($load)
            !
        @endif
    </div>
    <div class="flex flex-col space-y-4 my-3">
        <button wire:click = "resetName" class="btn btn-primary">Reset</button>
    </div>
    <div class="flex flex-col space-y-4 my-3">
        <button wire:click = "RefreshChilder" class="btn btn-primary">alert</button>
    </div>
    @if ($status == true)
        <script>
            alert('Hello World!');
        </script>
    @endif


</div>
