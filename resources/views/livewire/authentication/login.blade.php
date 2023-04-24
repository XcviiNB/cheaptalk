<div>

    @if (session()->has('message'))
        <div class="alert alert-success col-md-8 mx-auto mt-3">
            {{ session('message') }}
        </div>
    @endif



    <div class="container d-flex justify-content-center mt-5">
        <div class="card col-md-6 my-auto">
            <div class="card-body">
                <h3 class="card-title text-center mb-4">Login</h3>
                @if (!empty($errormsg))
                    <div class="alert text-danger col-md-8 mx-auto mt-3 text-center" style="display: block; font-style: italic; font-size: medium;">
                        {{ $errormsg }}
                    </div>
                @endif
                <div class="my-3 form-floating">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" wire:model="email">
                    <label for="email">Email</label>
                    @error('email')
                        <div class="invalid-feedback" style="display: block; font-style: italic; font-size: small;">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="my-3 form-floating">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" wire:model="password">
                    <label for="password">Password</label>
                    @error('password')
                        <div class="invalid-feedback" style="display: block; font-style: italic; font-size: small;">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="d-flex justify-content-between">
                    <p>Don't have an account? <a href="/register">Sign up</a></p>
                    <button type="submit" class="btn btn-primary btn-block" wire:click="submit()">Login</button>
                </div>
            </div>
        </div>
    </div>
</div>
