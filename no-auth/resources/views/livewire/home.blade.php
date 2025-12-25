<div>
    <h1 class="text-3xl font-bold text-gray-900">{{ $title }}</h1>
    <p class="mt-4 text-gray-600">
        <a href="{{ route('posts.create') }}" wire:navigate class="link link-primary">Create a new post</a>
    </p>

   <livewire:posts.list-posts />
</div>
