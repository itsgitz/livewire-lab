<div>
    <h1 class="text-2xl font-bold mb-4">Drafted Posts</h1>

    @if (session()->has('success'))
    <div role="alert" class="alert alert-success mb-4">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 shrink-0 stroke-current" fill="none" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
        <span>{{ session('success') }}</span>
    </div>
    @endif

    <ul class="list bg-base-100 rounded-box shadow-md">
        @foreach($posts as $post)
        <li wire:key="post-{{ $post->id }}" class="list-row">
            <div>
                <div>{{ $post->title }}</div>
            </div>
            <div class="list-col-grow"></div>
            <button class="btn btn-square btn-ghost" wire:click="publish({{ $post->id }})">
                <svg class="size-[1.2em]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g stroke-linejoin="round" stroke-linecap="round" stroke-width="2" fill="none" stroke="currentColor"><path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"></path></g></svg>
            </button>
        </li>
        @endforeach
    </ul>

    <div class="mt-4">
        <a href="{{ route('posts.create') }}" wire:navigate class="link">Back</a>
    </div>
</div>
