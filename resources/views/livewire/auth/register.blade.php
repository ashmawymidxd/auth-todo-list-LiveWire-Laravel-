<div class="registration-form">
    <div class="form-icon">
        @if ($registration_status == true)
            <span><i class="icon icon-check"></i></span>
            <h4>Registration Successful</h4>
            <p>
                A verification link has been sent to your email address. Please click on the link to verify your
                email address.
            </p>
        @endif
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="card p-3">
                <form wire:submit.prevent="register">
                    <div class="form-icon">
                        <span><i class="icon icon-user"></i></span>
                    </div>
                    <div class="form-group
                    @error('name') is-invalid @enderror">
                        <input type="text" class="form-control my-3" placeholder="Full Name" wire:model="name">
                        @error('name')
                            <div class="text-warning">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group
                    @error('email') is-invalid @enderror">
                        <input type="email" class="form-control my-3" placeholder="Email" wire:model="email">
                        @error('email')
                            <div class="text-warning">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group
                    @error('password') is-invalid @enderror">
                        <input type="password" class="form-control my-3" placeholder="Password" wire:model="password">
                        @error('password')
                            <div class="text-warning">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group
                    @error('password_confirmation') is-invalid @enderror">
                        <input type="password" class="form-control my-3" placeholder="Confirm Password"
                            wire:model="password_confirmation">
                        @error('password_confirmation')
                            <div class="text-warning">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group my-3">
                        <button type="submit" class="btn btn-primary w-100">Register</button>
                    </div>
                </form>

            </div>
        </div>
        <div class="col-md-6">
            <div class="card p-3">
                @foreach ($users as $user)
                    <div class="flex items-center space-x-4">
                        <div>
                            <h5>Username : {{ $user->name }}</h5>
                            <p>Email : {{ $user->email }}</p>
                            <hr>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="card">
                {{-- {{ $users->links() }} --}}
            </div>
        </div>
    </div>
</div>
