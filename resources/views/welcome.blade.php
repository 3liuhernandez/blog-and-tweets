@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="text-primary mb-4">Last Entries</h1>
                @foreach($entries as $entry)
                    <div class="card mb-4">
                        <div class="card-header">
                            {{ $entry->id }}. {{ $entry->title }}
                        </div>

                        <div class="card-body">
                            {{ $entry->content }}
                        </div>

                        <div class="card-footer">
                            Author:
                            <a href="{{ url('/users/'.$entry->user_id) }}">
                                {{ $entry->user->name }}
                            </a>
                        </div>
                    </div>
                @endforeach
                {{ $entries->links() }}
            </div>
        </div>
    </div>
@endsection
