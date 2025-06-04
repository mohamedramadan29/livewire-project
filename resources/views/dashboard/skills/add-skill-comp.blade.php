  <!-- Modal -->
  <div class="modal fade" id="AddModel" tabindex="-1" style="display: none;" aria-hidden="true" wire:ignore.self>
      <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="addSkillTitle">Add New Skill</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <form wire:submit.prevent='submit'>
                  <div class="modal-body">
                      <div class="row">
                          <div class="mb-3 col">
                              <label for="nameWithTitle" class="form-label">Name</label>
                              <input type="text" id="nameWithTitle" class="form-control" placeholder="Enter Name"
                                  wire:model="name">
                                  @error('name')
                                      <span class="text-danger">{{ $message }}</span>
                                  @enderror
                          </div>
                      </div>
                      <div class="row g-2">
                          <div class="mb-0 col">
                              <label for="progressWithTitle" class="form-label">Progress</label>
                              <input type="number" id="progressWithTitle" class="form-control"
                                  placeholder="Enter Progress" min="0" max="100" wire:model="progress">
                                  @error('progress')
                                      <span class="text-danger">{{ $message }}</span>
                                  @enderror
                          </div>
                      </div>
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                          Close
                      </button>
                      <button type="submit" class="btn btn-primary">Save changes</button>
                  </div>
              </form>
          </div>
      </div>
  </div>

