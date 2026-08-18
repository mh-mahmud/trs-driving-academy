@extends('layouts.admin')
@section('title','Edit Course')
@section('page_title','Edit Course')
@section('content')
<div class="page-heading mb-4"><h1>Edit Course</h1><p>Update course information, description and image.</p></div>
@if($errors->any())<div class="alert alert-danger"><ul class="mb-0">@foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul></div>@endif
<form method="POST" action="{{ route('admin.courses.update',$course) }}" enctype="multipart/form-data">@csrf @method('PUT')<div class="panel settings-panel"><div class="panel-head"><div><h3>Course Information</h3><p>Update the required fields and save changes</p></div></div><div class="settings-body row g-3">
<div class="col-md-7"><label class="form-label fw-bold">Course Title</label><input id="courseTitle" class="form-control" name="title" value="{{ old('title',$course->title) }}" required></div><div class="col-md-5"><label class="form-label fw-bold">Current Slug</label><div class="input-group"><span class="input-group-text">/courses/</span><input id="slugPreview" class="form-control" value="{{ $course->slug }}" readonly></div><small class="text-secondary">Changing the title generates a new unique slug.</small></div>
<div class="col-xl-4 col-lg-4 col-md-6 my-2"><label class="form-label fw-bold">Course Type</label><select name="course_type_id" class="form-select" required><option value="">Select Type</option>@foreach($types as $type)<option value="{{ $type->id }}" @selected(old('course_type_id',$course->course_type_id)==$type->id)>{{ $type->name }}</option>@endforeach</select></div>
<div class="col-xl-4 col-lg-4 col-md-6 my-2"><label class="form-label fw-bold">District / City</label><select id="courseCity" name="city_id" class="form-select" required><option value="">Select City</option>@foreach($cities as $city)<option value="{{ $city->id }}" @selected(old('city_id',$course->city_id)==$city->id)>{{ $city->name }}</option>@endforeach</select></div>
<div class="col-xl-4 col-lg-4 col-md-6 my-2"><label class="form-label fw-bold">Branch</label><select id="courseBranch" name="branch_id" class="form-select" required><option value="">Select Branch</option>@foreach($branches as $branch)<option value="{{ $branch->id }}" data-city="{{ $branch->city_id }}" @selected(old('branch_id',$course->branch_id)==$branch->id)>{{ $branch->name }}</option>@endforeach</select></div>
<div class="col-md-6"><label class="form-label fw-bold">Course Fee</label><input type="number" min="0" step="0.01" class="form-control" name="fee" value="{{ old('fee',$course->fee) }}" required></div><div class="col-md-6"><label class="form-label fw-bold">Duration</label><input class="form-control" name="duration" value="{{ old('duration',$course->duration) }}"></div>
<div class="col-12"><label class="form-label fw-bold">Description</label><textarea id="courseDescription" class="form-control" name="description" rows="8">{{ old('description',$course->description) }}</textarea></div>
<div class="col-md-6"><label class="form-label fw-bold">Replace Image</label><input type="file" class="form-control" name="image" accept="image/*">@if($course->image)<img style="max-width:180px;max-height:110px;object-fit:cover;border-radius:8px" class="mt-3" src="{{ asset('storage/'.$course->image) }}" alt="{{ $course->title }}">@endif</div><div class="col-md-6 d-flex align-items-end"><div class="form-check form-switch mb-2"><input class="form-check-input" type="checkbox" name="is_active" value="1" @checked(old('is_active',$course->is_active))><label class="form-check-label">Active course</label></div></div>
<div class="col-12 text-end mt-4"><a class="btn btn-light border" href="{{ route('admin.courses.index') }}">Cancel</a><button class="btn btn-admin-primary px-4">Update Course</button></div>
</div></div></form>
@endsection
@push('scripts')
<script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>
<script>
const city=document.getElementById('courseCity'),branch=document.getElementById('courseBranch'),options=[...branch.options];function filterBranches(){const selected=branch.value;branch.innerHTML='';options.forEach(option=>{if(!option.value||!city.value||option.dataset.city===city.value)branch.append(option)});if([...branch.options].some(o=>o.value===selected))branch.value=selected}city.addEventListener('change',filterBranches);filterBranches();
const title=document.getElementById('courseTitle'),slug=document.getElementById('slugPreview'),originalTitle=@json($course->title),originalSlug=@json($course->slug);function slugify(value){return value.toLowerCase().trim().replace(/[^a-z0-9\s-]/g,'').replace(/[\s-]+/g,'-').replace(/^-|-$/g,'')}title.addEventListener('input',()=>slug.value=title.value===originalTitle?originalSlug:slugify(title.value));
ClassicEditor.create(document.querySelector('#courseDescription'),{toolbar:['heading','|','bold','italic','link','bulletedList','numberedList','blockQuote','undo','redo']}).catch(error=>console.error(error));
</script>
@endpush
