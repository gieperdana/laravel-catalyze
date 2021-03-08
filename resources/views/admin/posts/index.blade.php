@extends('admin.layouts.admin')

@section('title', __('views.admin.posts.index.title'))

@section('content')
    <div class="row">
        <br/><br/><br/>
        <a class="btn btn-sm btn-primary" href="{{ route('admin.posts.create') }}" data-toggle="tooltip" data-placement="top" data-title="{{ __('views.admin.users.index.show') }}">
            <i class="fa fa-plus"></i> Create Post
        </a>
        <br/><br/>
        <table class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0"
               width="100%">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Sub Title</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach($posts as $post)
                <tr>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->sub_title }}</td>
                    <td>
                        <a class="btn btn-xs btn-primary" href="{{ route('admin.posts.show', [$post->id]) }}" data-toggle="tooltip" data-placement="top" data-title="{{ __('views.admin.users.index.show') }}">
                            <i class="fa fa-eye"></i>
                        </a>
                        <a class="btn btn-xs btn-info" href="{{ route('admin.posts.edit', [$post->id]) }}" data-toggle="tooltip" data-placement="top" data-title="{{ __('views.admin.users.index.edit') }}">
                            <i class="fa fa-pencil"></i>
                        </a><br/>
                        <a class="btn btn-xs btn-danger" href="{{ route('admin.posts.destroy', [$post->id]) }}" data-toggle="tooltip" data-placement="top" data-title="{{ __('views.admin.users.index.delete') }}">
                            <i class="fa fa-trash"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
