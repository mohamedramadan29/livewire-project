<x-delete-model title="Delete Subscriber" >

    <div class="mb-3 col">
        <label for="nameWithTitle" class="form-label">Email</label>
        <input type="text" readonly disabled id="nameWithTitle" class="form-control" placeholder="Enter Name"
            wire:model="email"
        >
    </div>
</x-delete-model>
