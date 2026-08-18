@extends('layouts.admin')
@section('title', 'Header and Footer')
@section('page_title', 'Header and Footer')
@section('content')
<div class="page-heading mb-4"><h1>Header and Footer</h1><p>Manage the public website logo, navigation menu and footer information.</p></div>
@if(session('status'))<div class="alert alert-success"><i class="bi bi-check-circle me-2"></i>{{ session('status') }}</div>@endif
@if($errors->any())<div class="alert alert-danger"><strong>Please fix the following:</strong><ul class="mb-0 mt-2">@foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul></div>@endif
<form method="POST" action="{{ route('admin.home.header-footer.update') }}" enctype="multipart/form-data">@csrf @method('PUT')
    <div class="panel settings-panel mb-4">
        <div class="panel-head"><div><h3>Brand Logo</h3><p>Upload logos for the header and footer</p></div></div>
        <div class="settings-body row g-4">
            @foreach(['header_logo'=>'Header logo','footer_logo'=>'Footer logo'] as $field=>$label)
            <div class="col-md-6"><label class="form-label">{{ $label }}</label><div class="logo-upload"><div class="logo-preview">@if($settings->{$field})<img id="{{ $field }}Preview" src="{{ asset('storage/'.$settings->{$field}) }}" alt="{{ $label }}">@else<img id="{{ $field }}Preview" class="d-none" alt="{{ $label }}"><i class="bi bi-image"></i>@endif</div><div><input class="form-control" type="file" name="{{ $field }}" id="{{ $field }}" accept="image/*"><small>PNG, JPG or WEBP · Max 2MB</small></div></div></div>
            @endforeach
            <div class="col-md-6"><label class="form-label">Favicon</label><div class="logo-upload"><div class="logo-preview">@if($settings->favicon)<img id="faviconPreview" src="{{ asset('storage/'.$settings->favicon) }}" alt="Favicon" style="object-fit:contain">@else<img id="faviconPreview" class="d-none" alt="Favicon"><i class="bi bi-browser-chrome"></i>@endif</div><div><input class="form-control" type="file" name="favicon" id="favicon" accept=".ico,.png,.jpg,.jpeg,.webp,image/x-icon,image/png,image/jpeg,image/webp"><small>ICO, PNG, JPG or WEBP · Recommended 32×32 or 48×48 · Max 1MB</small></div></div></div>
        </div>
    </div>

    <div class="panel settings-panel mb-4">
        <div class="panel-head"><div><h3>Header Navigation</h3><p>Add, remove and reorder menu and submenu items</p></div><button class="btn btn-admin-outline" type="button" id="addMenu"><i class="bi bi-plus-lg me-1"></i>Add Menu</button></div>
        <div class="settings-body" id="menuBuilder">
            @foreach($menus as $menuIndex=>$menu)
                <div class="menu-editor" data-menu>
                    <div class="menu-editor-head" data-bs-toggle="collapse" data-bs-target="#menuEditor{{ $menuIndex }}" aria-expanded="false">
                        <span class="drag-handle"><i class="bi bi-grip-vertical"></i></span>
                        <strong class="menu-summary">{{ $menu->label }}</strong><small>{{ $menu->url }}</small>
                        <i class="bi bi-chevron-down menu-chevron"></i>
                        <button type="button" class="btn remove-menu" aria-label="Remove menu"><i class="bi bi-trash"></i></button>
                    </div>
                    <div class="collapse menu-editor-body" id="menuEditor{{ $menuIndex }}">
                        <div class="row g-3"><div class="col-md-5"><label class="form-label">Label</label><input class="form-control menu-label-input" name="menus[{{ $menuIndex }}][label]" value="{{ $menu->label }}" required></div><div class="col-md-7"><label class="form-label">URL</label><input class="form-control" name="menus[{{ $menuIndex }}][url]" value="{{ $menu->url }}" placeholder="/about or https://..."></div></div>
                        <div class="children-wrap">@foreach($menu->children as $childIndex=>$child)<div class="child-editor row g-2 align-items-end"><div class="col-md-5"><label class="form-label">Submenu label</label><input class="form-control" name="menus[{{ $menuIndex }}][children][{{ $childIndex }}][label]" value="{{ $child->label }}" required></div><div class="col-md-6"><label class="form-label">URL</label><input class="form-control" name="menus[{{ $menuIndex }}][children][{{ $childIndex }}][url]" value="{{ $child->url }}"></div><div class="col-md-1"><button type="button" class="btn btn-outline-danger remove-child"><i class="bi bi-x-lg"></i></button></div></div>@endforeach</div>
                        <button type="button" class="btn btn-sm btn-light border mt-3 add-child"><i class="bi bi-plus me-1"></i>Add Submenu</button>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="panel settings-panel mb-4"><div class="panel-head"><div><h3>Footer Information</h3><p>Content shown across every public page</p></div></div><div class="settings-body row g-3">
        <div class="col-12"><label class="form-label">About text</label><textarea class="form-control" name="footer_about" rows="4">{{ old('footer_about',$settings->footer_about) }}</textarea></div>
        <div class="col-md-4"><label class="form-label">Office title</label><input class="form-control" name="office_title" value="{{ old('office_title',$settings->office_title) }}"></div><div class="col-md-4"><label class="form-label">Office hours</label><input class="form-control" name="office_hours" value="{{ old('office_hours',$settings->office_hours) }}"></div><div class="col-md-4"><label class="form-label">Office days</label><input class="form-control" name="office_days" value="{{ old('office_days',$settings->office_days) }}"></div>
        <div class="col-12"><label class="form-label">Office note</label><input class="form-control" name="office_note" value="{{ old('office_note',$settings->office_note) }}"></div>
        <div class="col-12"><label class="form-label">Address</label><textarea class="form-control" name="address" rows="2">{{ old('address',$settings->address) }}</textarea></div><div class="col-md-6"><label class="form-label">Email</label><input type="email" class="form-control" name="email" value="{{ old('email',$settings->email) }}"></div><div class="col-md-6"><label class="form-label">Footer phone</label><input class="form-control" name="phone" value="{{ old('phone',$settings->phone) }}"></div>
        <div class="col-md-6"><label class="form-label">Floating call number</label><input class="form-control" name="floating_phone" value="{{ old('floating_phone',$settings->floating_phone) }}" placeholder="+8801321232982"><small class="text-secondary">Leave empty to hide the call button.</small></div><div class="col-md-6"><label class="form-label">WhatsApp number</label><input class="form-control" name="whatsapp_number" value="{{ old('whatsapp_number',$settings->whatsapp_number) }}" placeholder="8801321232982"><small class="text-secondary">Include country code without spaces. Leave empty to hide.</small></div>
    </div></div>

    <div class="panel settings-panel mb-4"><div class="panel-head"><div><h3>Social & Copyright</h3><p>Footer social profiles and legal text</p></div></div><div class="settings-body row g-3">
        @foreach(['facebook'=>'Facebook URL','linkedin'=>'LinkedIn URL','youtube'=>'YouTube URL','instagram'=>'Instagram URL'] as $field=>$label)<div class="col-md-6"><label class="form-label">{{ $label }}</label><input type="url" class="form-control" name="{{ $field }}" value="{{ old($field,$settings->{$field}) }}"></div>@endforeach
        <div class="col-md-6"><label class="form-label">Registration text</label><input class="form-control" name="registration_text" value="{{ old('registration_text',$settings->registration_text) }}"></div><div class="col-md-6"><label class="form-label">Copyright text</label><input class="form-control" name="copyright_text" value="{{ old('copyright_text',$settings->copyright_text) }}"></div>
    </div></div>
    <div class="sticky-save"><span><i class="bi bi-info-circle me-1"></i>Changes will appear on all public pages.</span><button class="btn btn-admin-primary px-4" type="submit"><i class="bi bi-check2 me-2"></i>Save Changes</button></div>
</form>
@endsection
@push('scripts')
<script>
const builder=document.getElementById('menuBuilder');
function reindex(){builder.querySelectorAll('[data-menu]').forEach((menu,i)=>{menu.querySelectorAll('input').forEach(input=>{input.name=input.name.replace(/menus\[\d+\]/,`menus[${i}]`)});menu.querySelectorAll('.child-editor').forEach((child,j)=>child.querySelectorAll('input').forEach(input=>input.name=input.name.replace(/\[children\]\[\d+\]/,`[children][${j}]`)))})}
function menuTemplate(){const id=`newMenu${Date.now()}`;return `<div class="menu-editor" data-menu><div class="menu-editor-head" data-bs-toggle="collapse" data-bs-target="#${id}" aria-expanded="false"><span class="drag-handle"><i class="bi bi-grip-vertical"></i></span><strong class="menu-summary">New Menu</strong><small>#</small><i class="bi bi-chevron-down menu-chevron"></i><button type="button" class="btn remove-menu"><i class="bi bi-trash"></i></button></div><div class="collapse menu-editor-body" id="${id}"><div class="row g-3"><div class="col-md-5"><label class="form-label">Label</label><input class="form-control menu-label-input" name="menus[0][label]" required></div><div class="col-md-7"><label class="form-label">URL</label><input class="form-control" name="menus[0][url]" value="#"></div></div><div class="children-wrap"></div><button type="button" class="btn btn-sm btn-light border mt-3 add-child"><i class="bi bi-plus me-1"></i>Add Submenu</button></div></div>`}
function childTemplate(){return `<div class="child-editor row g-2 align-items-end"><div class="col-md-5"><label class="form-label">Submenu label</label><input class="form-control" name="menus[0][children][0][label]" required></div><div class="col-md-6"><label class="form-label">URL</label><input class="form-control" name="menus[0][children][0][url]" value="#"></div><div class="col-md-1"><button type="button" class="btn btn-outline-danger remove-child"><i class="bi bi-x-lg"></i></button></div></div>`}
document.getElementById('addMenu').addEventListener('click',()=>{builder.insertAdjacentHTML('beforeend',menuTemplate());reindex()});builder.addEventListener('click',e=>{const removeMenu=e.target.closest('.remove-menu'),removeChild=e.target.closest('.remove-child'),addChild=e.target.closest('.add-child');if(removeMenu){e.stopPropagation();removeMenu.closest('[data-menu]').remove()}if(removeChild)removeChild.closest('.child-editor').remove();if(addChild)addChild.previousElementSibling.insertAdjacentHTML('beforeend',childTemplate());reindex()});builder.addEventListener('input',e=>{if(e.target.classList.contains('menu-label-input'))e.target.closest('[data-menu]').querySelector('.menu-summary').textContent=e.target.value||'New Menu'});
['header_logo','footer_logo','favicon'].forEach(id=>document.getElementById(id)?.addEventListener('change',e=>{const file=e.target.files[0];if(!file)return;const img=document.getElementById(id+'Preview');img.src=URL.createObjectURL(file);img.classList.remove('d-none');img.parentElement.querySelector('i')?.remove()}));
</script>
@endpush
