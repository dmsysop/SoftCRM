@extends('layouts.base')

@section('caption', 'Information about mailing')

@section('title', 'Information about mailing')

@section('lyric', 'Information about mailing')

@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-6">
            <!-- will be used to show any messages -->
            @if(session()->has('message_success'))
                <div class="alert alert-success">
                    <strong>Well done!</strong> {{ session()->get('message_success') }}
                </div>
            @elseif(session()->has('message_danger'))
                <div class="alert alert-danger">
                    <strong>Danger!</strong> {{ session()->get('message_danger') }}
                </div>
            @endif
            <div class="panel panel-default">
                <div class="panel-heading">
                    More information about {{ $mailing->name }}
                </div>

                <div class="panel-body">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#home" data-toggle="tab">The basic information</a>
                        </li>
                        <div class="text-right">
                            {{ Form::open(array('url' => 'mailing/' . $mailing->id, 'class' => 'pull-right')) }}
                            {{ Form::hidden('_method', 'DELETE') }}
                            {{ Form::submit('Delete this mailing', array('class' => 'btn btn-small btn-danger')) }}
                            {{ Form::close() }}
                        </div>

                    </ul>

                </div>
            </div>
        </div>
    </div>
@endsection