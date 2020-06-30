@component('mail::message')
# New Post created

A new Post has been created on your blog:

{{ $title }}

@component('mail::button', [ 'url' => config('app.url') . '/posts' ])
View Blog archive
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent