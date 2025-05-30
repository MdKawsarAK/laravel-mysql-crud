<h2>{{ $mode === 'edit' ? 'Edit Post' : 'Create Post'}}</h2>
{{-- errors will be shown here --}}

<form action="{{ $mode === 'edit' ? route('posts.update', $post) : route('posts.store') }}" method="POST">
    @csrf
    @if ($mode === 'edit')
        @method('PUT')
    @endif
    <div class="mb-2">
        <label for="title">Title</label>
        <input type="text" name="title" id="" value="{{ old('title', $post->title ?? '') }}" class='form-control'
            required>
    </div>
    <div class="mb-2">
        <label for="body">Body</label>
        <input type="text" name="body" id="" value="{{ old('body', $post->body ?? '') }}" class='form-control' required>
    </div>
    <button class="btn btn-success">{{ $mode === 'edit' ? 'Update' : "Create" }}</button>
    <a href="{{ route('posts.index') }}" class="btn btn-secondary">Back</a>
</form>