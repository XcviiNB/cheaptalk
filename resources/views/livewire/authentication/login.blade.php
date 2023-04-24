<div>
    <div class="container d-flex justify-content-center mt-5">
        <div class="card col-md-6 my-auto">
            <div class="card-body">
                <h3 class="card-title text-center mb-4">Login</h3>
                <div class="my-3 form-floating">
                    <input type="email" class="form-control" id="email" wire:model="email">
                    <label for="email">Email</label>
                </div>
                <div class="my-3 form-floating">
                    <input type="password" class="form-control" id="password" wire:model="password">
                    <label for="password">Password</label>
                </div>
                <div class="d-flex justify-content-between">
                    <p>Don't have an account? <a href="/register">Sign up</a></p>
                    <button type="submit" class="btn btn-primary btn-block" wire:click="submit()">Login</button>
                </div>
            </div>
        </div>
    </div>
</div>
