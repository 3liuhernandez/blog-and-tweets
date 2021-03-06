@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>My Entries:</p>
                        <ul>
                            @foreach($entries as $entry)
                                <li>
                                    <a href="{{ $entry->getUrl() }}">
                                        Entry ID: {{ $entry->id }} - {{ $entry->title }} - User ID {{ $entry->user->id }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
