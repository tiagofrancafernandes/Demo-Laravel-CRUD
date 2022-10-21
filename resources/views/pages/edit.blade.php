@extends('pages.layout')

@section('action_title', __("Edit: {$page->name}"))

@section('sub_content')
<div class="row">
    <div class="col-12 mb-4">
        <form method="POST" action="{{ route('pages.update', $page->id) }}">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">
                    Title
                    <em class="text-muted text-small">(Le blank if you don't want to change)</em>
                </label>
                <input
                    type="text"
                    class="form-control"
                    id="title"
                    name="title"
                    value="{{ old('title') ?? $page->title ?? null }}"
                    aria-describedby="titleHelp"
                    placeholder="Your Title"
                    required>
                <div id="title" class="form-text">Your Title</div>
            </div>

            <div class="mb-3">
                <label for="slug" class="form-label">
                    Slug
                    <em class="text-muted text-small">(Leave blanf you don't want to change)</em>
                </label>
                <input
                    type="text"
                    class="form-control"
                    id="slug"
                    name="slug"
                    value="{{ old('slug') ?? $page->slug ?? null }}"
                    aria-describedby="slugHelp"
                    placeholder="Your slug"
                    required>
                <div id="slugHelp" class="form-text">Your slug</div>
            </div>

            <div class="mb-3">
                <label for="active" class="form-label">
                    Acive
                    <em class="text-muted text-small">(Leave blan)</em>
                </label>

                <div class="mb-2">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">1</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">2</label>
                    </div>
                </div>
                <div id="nameHelp" class="form-text">Your name</div>
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-success w-100">Submit</button>
            </div>
        </form>

    </div>
</div>
@endsection
