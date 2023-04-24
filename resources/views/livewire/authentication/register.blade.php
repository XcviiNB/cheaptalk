<div>
    <div class="container d-flex justify-content-center mt-5">
        <div class="card col-md-6 my-auto">
            <div class="card-body">
                <h3 class="card-title text-center mb-4">Register</h3>
                <div class="my-3 form-floating">
                    <input type="text" class="form-control @error('name') is-invalid @enderror" wire:model="name">
                    <label for="name">Name</label>
                    @error('name')
                        <div class="invalid-feedback" style="display: block; font-style: italic; font-size: small;">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="my-3 form-floating">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" wire:model="email">
                    <label for="email">Email</label>
                    @error('email')
                        <div class="invalid-feedback" style="display: block; font-style: italic; font-size: small;">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="my-3 form-floating">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" wire:model="password">
                    <label for="password">Password</label>
                    @error('password')
                        <div class="invalid-feedback" style="display: block; font-style: italic; font-size: small;">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="my-3 form-floating">
                    <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" wire:model="password_confirmation">
                    <label for="password_confirmation">Confirm Password</label>
                    @if (!$passwordMatch)
                        <div class="invalid-feedback" style="display: block; font-style: italic; font-size: small;">
                            <p class="text-danger">Passwords do not match!</p>
                        </div>
                    @endif
                </div>

                <div class="d-flex justify-content-between">
                    <p>Already have an account? <a href="/login">Login</a></p>
                    <button type="button" class="btn btn-primary btn-block" wire:click="submit">Register</button>
                </div>
            </div>
        </div>
    </div>
</div>
