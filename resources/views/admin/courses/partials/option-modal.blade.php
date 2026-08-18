<div class="modal fade" id="{{ $modalId }}" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form id="{{ $formId }}" method="POST" action="{{ $action }}" enctype="multipart/form-data">
                @csrf
                @if ($method === 'PUT')
                    @method('PUT')
                @endif

                <div class="modal-header">
                    <h5 class="modal-title">{{ $modalTitle }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input class="form-control" name="name" required>
                    </div>

                    @if ($option === 'types')
                        <div class="mb-3">
                            <label class="form-label">Icon Image</label>
                            <input class="form-control" type="file" name="image" accept="image/*">
                            <small class="text-secondary">Optional · Max 2MB</small>
                        </div>
                    @endif

                    @if ($option === 'branches')
                        <div class="mb-3">
                            <label class="form-label">District / City</label>
                            <select class="form-select" name="city_id" required>
                                <option value="">Select City</option>
                                @foreach ($cities as $city)
                                    <option value="{{ $city->id }}">{{ $city->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Address</label>
                            <textarea class="form-control" name="address" rows="3"></textarea>
                        </div>
                    @endif

                    <div class="form-check form-switch">
                        <input type="checkbox" class="form-check-input" name="is_active" value="1" checked>
                        <label class="form-check-label">Active</label>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-light border" data-bs-dismiss="modal">Cancel</button>
                    <button class="btn btn-admin-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
