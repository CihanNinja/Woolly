@extends('layouts.app')

@section('sidebar')
<div class="col-md-4">
    <div class="card">
        <div class="card-header">{{ Auth::user()->name }}</div>

        <div class="card-body">
            <div class="list-group" id="list-tab" role="tablist">
                <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Home</a>
                <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-crimes" role="tab" aria-controls="crimes">Crimes</a>
                <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-jail" role="tab" aria-controls="jail">Jail</a>
                <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-fight" role="tab" aria-controls="fight">Fight</a>
              </div>
        </div>
    </div>
</div>
@endsection
