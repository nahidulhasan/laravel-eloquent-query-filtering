@extends('layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left" style="margin-bottom: 2%">
                <h2>Laravel Eloquent Query Filtering</h2>
            </div>


            <div class="pull-right" style=" display:inline; margin-bottom: 5px" >
                <form class="form-inline" style="display: inline" action="articles">

                    <input type="text" style="width: 230px;" class="form-control" name="title" placeholder="Search">

                    <button type="submit" class="btn btn-primary"> Search </button>
                </form>
                <a class="btn btn-success"  href="{{ route('articles.create') }}"> Add New</a>
            </div>

        </div>
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Title</th>
            <th>Body</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($articles as $article)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $article->title}}</td>
                <td>{{ $article->body}}</td>
                <td>
                    <a class="btn btn-info" href="{{ route('articles.show',$article->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('articles.edit',$article->id) }}">Edit</a>
                    {!! Form::open(['method' => 'DELETE','route' => ['articles.destroy', $article->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </table>


    {!! $articles->links() !!}
@endsection