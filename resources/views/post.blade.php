
<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
  
    <article class="py-8 max-w-screen-md ">
        
        <h2 class="mb-1 text-3xl tracking-tighter font-bold text-gray-900">{{ $post['title'] }}</h2>
        
        <div >
            By
            <a href="/authors/{{ $post->author->username}}" class="hover:underline text-base text-gray-500">{{ $post->author->name}} </a>
            in
            <a href="/categories/{{ $post->category->slug }}"" class="hover:underline text-base text-gray-500">{{ $post->category->name }}</a>
            <a href="">| {{ $post->created_at -> diffForHumans() }}</a>
        </div>
        <p class="my-4 font-light">
            {{ $post['body']}}
        </p>
        <a href="/blog" class="font-medium text-blue-500 hover:underline">&laquo; Back to Blog</a>
    </article>


</x-layout>