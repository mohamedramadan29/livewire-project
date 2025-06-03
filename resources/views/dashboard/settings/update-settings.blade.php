<form wire:submit.prevent="updateSettings">
    @if (session('success'))
        <div class="alert alert-info alert-dismissible success-alert" id="alert">
            {{ session('success') }}
        </div>
    @endif

    @if (flash()->message)
        <div>
            {{ flash()->message }}
        </div>
    @endif

    <div class="mb-3 row">
        <label class="col-sm-2 col-form-label" for="basic-default-name">Name</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" wire:model='settings.name' />
            @error('settings.name')
                <span class="text-danger"> {{ $message }} </span>
            @enderror
        </div>
    </div>
    <div class="mb-3 row">
        <label class="col-sm-2 col-form-label" for="basic-default-email">Email</label>
        <div class="col-sm-10">
            <div class="input-group input-group-merge">
                <input type="text" id="basic-default-email" class="form-control" placeholder="john.doe"
                    aria-label="john.doe" aria-describedby="basic-default-email2" wire:model='settings.email' />
                <span class="input-group-text" id="basic-default-email2">@example.com</span>
            </div>
            @error('settings.email')
                <span class="text-danger"> {{ $message }} </span>
            @enderror
            <div class="form-text">You can use letters, numbers & periods</div>
        </div>
    </div>
    <div class="mb-3 row">
        <label class="col-sm-2 col-form-label" for="basic-default-phone">Phone No</label>
        <div class="col-sm-10">
            <input type="text" id="basic-default-phone" class="form-control phone-mask" placeholder="658 799 8941"
                aria-label="658 799 8941" aria-describedby="basic-default-phone" wire:model='settings.phone' />
            @error('settings.phone')
                <span class="text-danger"> {{ $message }} </span>
            @enderror
        </div>
    </div>
    <div class="mb-3 row">
        <label class="col-sm-2 col-form-label" for="basic-default-name">Address</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="basic-default-name" placeholder="Adress"
                wire:model='settings.address' />
            @error('settings.address')
                <span class="text-danger"> {{ $message }} </span>
            @enderror
        </div>
    </div>
    <div class="mb-3 row">
        <label class="col-sm-2 col-form-label" for="basic-default-name">Facebook </label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="basic-default-name" placeholder="Facebook "
                wire:model='settings.facebook' />
            @error('settings.facebook')
                <span class="text-danger"> {{ $message }} </span>
            @enderror
        </div>
    </div>
    <div class="mb-3 row">
        <label class="col-sm-2 col-form-label" for="basic-default-name">Instagram </label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="basic-default-name" placeholder="Instagram "
                wire:model='settings.instagram' />
            @error('settings.instagram')
                <span class="text-danger"> {{ $message }} </span>
            @enderror
        </div>
    </div>
    <div class="mb-3 row">
        <label class="col-sm-2 col-form-label" for="basic-default-name">Linkedin </label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="basic-default-name" placeholder="Linkedin "
                wire:model='settings.linkedin' />
            @error('settings.linkedin')
                <span class="text-danger"> {{ $message }} </span>
            @enderror
        </div>
    </div>

    <div class="mb-3 row">
        <label class="col-sm-2 col-form-label" for="basic-default-name"> Twitter </label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="basic-default-name" placeholder="Twitter "
                wire:model='settings.twitter' />
            @error('settings.twitter')
                <span class="text-danger"> {{ $message }} </span>
            @enderror
        </div>
    </div>


    <div class="row justify-content-end">
        <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Send</button>
        </div>
    </div>
</form>
