<x-settings-layout title="Posts">
    <table class="table caption-top">
        <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Status</th>
            <th scope="col">Edit</th>
        </tr>
        </thead>

        @foreach($posts as $post)
            <tbody>

            <td>{{$post->title}}</td>

            <td>{{ $post->status ?? 'todo' }}</td>

            <td><a href="/admin/posts/{{$post->id}}/edit">Edit</a></td>
            </tbody>
        @endforeach

    </table>
</x-settings-layout>
