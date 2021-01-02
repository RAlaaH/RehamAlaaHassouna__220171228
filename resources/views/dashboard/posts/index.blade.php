@extends('dashboard.layouts.master')
@section('title')
    List Posts
@endsection
@section('content')
    <!-- Main content -->
    <section class="content">
{{--        {{App::setLocale('ar')}}--}}
{{--            @if--}}
{{--            (App::isLocale('ar'))--}}
{{--            Arabic is the default language--}}
{{--            @endif--}}
{{--            <br>--}}
{{--            {{ __('messages.university') }}<br>--}}
{{--            @lang('messages.college')<br>--}}
{{--            {{__('welcome to course')}}--}}
            @include('dashboard.layouts.messages')
        <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Posts</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                                title="Collapse">
                            <i class="fas fa-minus"></i></button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip"
                                title="Remove">
                            <i class="fas fa-times"></i></button>
                    </div>
                </div>
                <div class="card-body p-0">
                    <table class="table table-striped projects">
                        <thead>
                        <tr>
                            <th>
                                #
                            </th>
                            <th>
                                Title
                            </th>
                            <th>
                                Image
                            </th>
                            <th>
                                Category
                            </th>
                            <th class="text-center">
                                Views
                            </th>
                            <th>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($posts as $post)
                            <tr>
                                <td>
                                    {{$loop->iteration}}
                                </td>
                                <td>
                                    <a>
                                        {{$post->title}}
                                    </a>
                                    <br/>
                                    <small>
                                        Created {{$post->created_at}}
                                    </small>
                                </td>
                                <td>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <img alt="Avatar" class="table-avatar"
                                                 src="{{asset('post_images/'.$post->feature_image)}}">
                                        </li>
                                    </ul>
                                </td>
                                <td class="project_progress">
{{--                                    {{$post->category->name}}--}}
                                    {{$post->category}}
                                </td>
                                <td class="project-state">
                                    {{$post->views}}
                                </td>
                                <td class="project-actions text-right">
                                    <form action="{{route('dashboard.posts.destroy',$post)}}" method="POST">
                                        <a class="btn btn-primary btn-sm" href="{{route('dashboard.posts.show',$post)}}">
                                            <i class="fas fa-folder">
                                            </i>
                                            View
                                        </a>
                                        <a class="btn btn-info btn-sm" href="{{route('dashboard.posts.edit',$post)}}">
                                            <i class="fas fa-pencil-alt">
                                            </i>
                                            Edit
                                        </a>
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
{{--            {{$posts->links()}}--}}

    </section>
    <!-- /.content -->
@endsection
