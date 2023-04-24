<div>
    <div class="container d-flex justify-content-center mt-5">
        <div class="card col-md-6 my-auto">
            <div class="card-body">
                <h3 class="card-title text-center mb-4">Register</h3>
                <div class="my-3 form-floating">
                    <input type="text" class="form-control" wire:model="name">
                    <label for="name">Name</label>
                </div>
                <div class="my-3 form-floating">
                    <input type="email" class="form-control" wire:model="email">
                    <label for="email">Email</label>
                </div>
                <div class="my-3 form-floating">
                    <input type="password" class="form-control" wire:model="password">
                    <label for="password">Password</label>
                </div>
                <div class="my-3 form-floating">
                    <input type="password" class="form-control" wire:model="password_confirmation">
                    <label for="confirmpassword">Confirm Password</label>
                    {{-- @error('password.confirmed')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                    @enderror --}}
                </div>

                <div class="d-flex justify-content-between">
                    <p>Already have an account? <a href="/login">Login</a></p>
                    <button type="button" class="btn btn-primary btn-block" wire:click="submit">Register</button>
                </div>
            </div>
        </div>
    </div>
</div>
