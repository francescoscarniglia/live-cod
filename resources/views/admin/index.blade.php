@extends('layouts.admin')

@section('content')
<div class="container">

        <table>
            <thead>
                <tr>
                    <th>
                        ID
                    </th>
                    <th>
                        Title
                    </th>
                    <th colspan="3"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->title }}</td>
                        <td>SHOW</td>
                        <td>EDIT</td>
                        <td>DELETE</td>
                    </tr>
                @endforeach

            </tbody>
        </table>

        {{$posts->links()}}
        
</div>
@endsection
