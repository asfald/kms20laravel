@extends('layout')
@section('title', 'Posts')
@section('content')
    <table class="table">
        <tbody>
        <tr>
            <th scope="row">ID</th>
            <td scope="row">{{$post->id}}</td>
        </tr>
        <tr>
            <th scope="col">Title</th>
            <td>{{$post->title}}</td>
        </tr>
        <tr>
            <th scope="row">Body</th>
            <td scope="row">{{$post->body}}</td>
        </tr>
        <tr>
            <th scope="row">Created At</th>
            <td scope="row">{{$post->created_at}}</td>
        </tr>
        <tr>
            <th scope="row">Updated at</th>
            <td scope="row">{{$post->updated_at}}</td>
        </tr>
        </tbody>
    </table>

    <a href="/admin/posts/" class="btn btn-primary">admin</a>
@endsection
