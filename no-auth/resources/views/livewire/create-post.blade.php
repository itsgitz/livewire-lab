<div>
    @if (session()->has('success'))
        <div role="alert" class="alert alert-success">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 shrink-0 stroke-current" fill="none" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
          <span>{{ session('success') }}</span>
        </div>
    @endif
    <form wire:submit="save">
        <fieldset class="fieldset">
            <legend class="fieldset-legend">Title</legend>
            <input type="text" id="title" wire:model="form.title" class="input" placeholder="Enter title">
            @error('form.title')
                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
            @enderror
        </fieldset>
        <fieldset class="fieldset">
            <legend class="fieldset-legend">Content</legend>
            <textarea id="content" wire:model="form.content" class="textarea" placeholder="Enter content"></textarea>
            @error('form.content')
                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
            @enderror
        </fieldset>
        <div class="mt-3">
            <button type="submit" class="btn">Create Post</button>
        </div>
    </form>
    <div class="mt-5">
        <a href="{{ route('home') }}" class="link link-primary" wire:navigate>Back</a>
    </div>
</div>
