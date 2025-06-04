  <!-- Modal -->
  <div class="modal fade" id="DeleteModel" tabindex="-1" style="display: none;" aria-hidden="true" wire:ignore.self>
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addSkillTitle"> Are You Sure Delete This Skill  </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form wire:submit.prevent='submit'>
                <div class="modal-body">
                    <div class="row">
                        <div class="mb-3 col">
                            <label for="nameWithTitle" class="form-label">Name</label>
                            <input type="text" readonly disabled id="nameWithTitle" class="form-control" placeholder="Enter Name"
                                wire:model="name">
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="submit" class="btn btn-danger"> Delete Skill  </button>
                </div>
            </form>
        </div>
    </div>
</div>

