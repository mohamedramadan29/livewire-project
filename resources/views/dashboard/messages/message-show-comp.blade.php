<x-show-model title="Show Message">
    <div class="row">
        <div class="mb-3 col">
            <label for="nameWithTitle" class="form-label">Name</label>
            <input type="text" id="nameWithTitle" class="form-control" placeholder="Enter Name" wire:model="name"
                readonly>
            @include('dashboard.error', ['property' => 'name'])
        </div>
    </div>
    <div class="row">
        <div class="mb-3 col">
            <label for="emailWithTitle" class="form-label">Email</label>
            <input type="text" id="emailWithTitle" class="form-control" placeholder="Enter Email" wire:model="email"
                readonly>
            @include('dashboard.error', ['property' => 'email'])
        </div>
    </div>
    <div class="row">
        <div class="mb-3 col">
            <label for="subjectWithTitle" class="form-label">Subject</label>
            <input type="text" id="subjectWithTitle" class="form-control" placeholder="Enter Subject"
                wire:model="subject" readonly>
            @include('dashboard.error', ['property' => 'subject'])
        </div>
    </div>
    <div class="row">
        <div class="mb-3 col">
            <label for="messageWithTitle" class="form-label">Message</label>
            <textarea id="messageWithTitle" class="form-control" placeholder="Enter Message" wire:model="body" readonly></textarea>
            @include('dashboard.error', ['property' => 'message'])
        </div>
    </div>
    <div class="row">
        <div class="mb-3 col">
            <label for="statusWithTitle" class="form-label">Status</label>
            <input type="text" id="statusWithTitle" class="form-control" placeholder="Enter Status"
                wire:model="status" readonly>
            @include('dashboard.error', ['property' => 'status'])
        </div>
    </div>
    
</x-show-model>
