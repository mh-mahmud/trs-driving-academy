@extends('layouts.admin')
@section('title', 'Why Choose Us')
@section('page_title', 'Why Choose Us')
@section('content')
<div class="page-heading d-flex justify-content-between align-items-center mb-4">
    <div><h1>Why Choose Us</h1><p>Manage the homepage feature cards.</p></div>
    <button class="btn btn-admin-primary" data-bs-toggle="modal" data-bs-target="#addWhyChoose"><i class="bi bi-plus-lg"></i> Add Card</button>
</div>
@if(session('status'))<div class="alert alert-success">{{ session('status') }}</div>@endif
@if($errors->any())<div class="alert alert-danger">{{ $errors->first() }}</div>@endif

<div class="panel settings-panel mb-4">
    <div class="panel-head"><div><h3>Section Heading</h3><p>Change the heading displayed above the cards</p></div></div>
    <form class="settings-body d-flex flex-column flex-sm-row gap-2" method="POST" action="{{ route('admin.home.why-choose.title') }}">
        @csrf @method('PUT')
        <input class="form-control" name="why_choose_title" value="{{ $sectionTitle }}" required>
        <button class="btn btn-admin-primary flex-shrink-0">Update Title</button>
    </form>
</div>

<div class="row g-3">
    @forelse($items as $item)
        <div class="col-12 col-md-6 col-xl-4">
            <article class="panel p-3 h-100">
                <div class="d-flex gap-3 align-items-start">
                    <div class="flex-shrink-0 text-center" style="width:52px">
                        @if($item->image)<img src="{{ asset('storage/'.$item->image) }}" alt="" style="width:48px;height:48px;object-fit:contain">
                        @elseif($item->icon_class)<i class="{{ $item->icon_class }}" style="font-size:38px;color:#F15A26"></i>@endif
                    </div>
                    <div class="flex-grow-1"><h3 class="fs-6 mb-1">{{ $item->title }}</h3><p class="text-secondary small mb-2">{{ $item->description }}</p><small>Order: {{ $item->sort_order }} · <span class="{{ $item->is_active?'text-success':'text-danger' }}">{{ $item->is_active?'Active':'Inactive' }}</span></small></div>
                </div>
                <div class="d-flex justify-content-end gap-1 mt-3">
                    <button class="btn btn-sm btn-light border edit-why-choose" data-bs-toggle="modal" data-bs-target="#editWhyChoose" data-id="{{ $item->id }}" data-title="{{ $item->title }}" data-description="{{ $item->description }}" data-icon="{{ $item->icon_class }}" data-order="{{ $item->sort_order }}" data-active="{{ $item->is_active?1:0 }}"><i class="bi bi-pencil"></i></button>
                    <form method="POST" action="{{ route('admin.home.why-choose.destroy',$item) }}" onsubmit="return confirm('Delete this card?')">@csrf @method('DELETE')<button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button></form>
                </div>
            </article>
        </div>
    @empty
        <div class="col-12"><div class="panel text-center py-5 text-secondary">No cards found.</div></div>
    @endforelse
</div>
<div class="mt-4">{{ $items->links() }}</div>

@include('admin.home.partials.why-choose-modal',['id'=>'addWhyChoose','title'=>'Add Card','formId'=>'addWhyChooseForm','action'=>route('admin.home.why-choose.store'),'editing'=>false])
@include('admin.home.partials.why-choose-modal',['id'=>'editWhyChoose','title'=>'Edit Card','formId'=>'editWhyChooseForm','action'=>'#','editing'=>true])
@endsection
@push('scripts')
<script>
document.querySelectorAll('.edit-why-choose').forEach(button => button.addEventListener('click', () => {
    const form = document.getElementById('editWhyChooseForm');
    form.action = `{{ url('/admin/home/why-choose') }}/${button.dataset.id}`;
    form.title.value = button.dataset.title;
    form.description.value = button.dataset.description;
    form.icon_class.value = button.dataset.icon;
    form.sort_order.value = button.dataset.order;
    form.is_active.checked = button.dataset.active === '1';
}));
</script>
@endpush
