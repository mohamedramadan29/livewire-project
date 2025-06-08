<form class="mb-3" wire:submit.prevent="submit">
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input wire:model = 'email' type="text" class="form-control" placeholder="Enter your email" autofocus />
        <span class="text-danger">
            @error('email')
                {{ $message }}
            @enderror
        </span>
    </div>

    <div class="mb-3 form-password-toggle">
        <div class="d-flex justify-content-between">
            <label class="form-label" for="password">Password</label>
        </div>
        <div class="input-group input-group-merge">
            <input wire:model='password' type="password" class="form-control"
                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                aria-describedby="password" />
            <span class="cursor-pointer input-group-text"><i class="bx bx-hide"></i></span>
        </div>
        <span class="text-danger">
            @error('password')
                {{ $message }}
            @enderror
        </span>
    </div>
    <div class="mb-3">
        <div class="form-check">
            <input wire:model='remember' class="form-check-input" type="checkbox" id="remember-me" />
            <label class="form-check-label" for="remember-me"> Remember Me </label>
        </div>
    </div>
    <div class="mb-3">
        <button wire:loading.attr="disabled" wire:target="submit" class="btn btn-primary d-grid w-100" type="submit">

            @include('dashboard.loading', ['buttonName' => 'Sign in'])

        </button>

    </div>
</form>
