<div class="modal fade" id="{{ $id }}" tabindex="-1"><div class="modal-dialog modal-dialog-centered"><div class="modal-content">
<form id="{{ $formId }}" method="POST" action="{{ $action }}">@csrf @if($editing) @method('PUT') @endif
<div class="modal-header"><h5 class="modal-title">{{ $title }}</h5><button class="btn-close" type="button" data-bs-dismiss="modal"></button></div>
<div class="modal-body row g-3">
<div class="col-5"><label class="form-label">Value</label><input class="form-control" name="value" placeholder="1452" required></div>
<div class="col-7"><label class="form-label">Sort Order</label><input class="form-control" type="number" min="0" name="sort_order" value="0"></div>
<div class="col-12"><label class="form-label">Label</label><input class="form-control" name="label" required></div>
<div class="col-8"><label class="form-label">Font Awesome Icon Class</label><input class="form-control" name="icon_class" value="fas fa-star" required></div>
<div class="col-4"><label class="form-label">Icon Color</label><input class="form-control form-control-color w-100" type="color" name="icon_color" value="#F15A26" required></div>
<div class="col-12"><div class="form-check form-switch"><input class="form-check-input" type="checkbox" name="is_active" value="1" checked><label class="form-check-label">Active</label></div></div>
</div><div class="modal-footer"><button class="btn btn-light border" type="button" data-bs-dismiss="modal">Cancel</button><button class="btn btn-admin-primary">Save</button></div>
</form></div></div></div>
