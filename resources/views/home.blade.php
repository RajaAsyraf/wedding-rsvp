@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>

                <div class="panel-body">
                  <h1>RSVP</h1>
                    <table class="table">
                      <thead class="thead-inverse">
                        <tr>
                          <th>No</th>
                          <th>Name</th>
                          <th>RSVP</th>
                          <th>Added On</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($rsvp as $rsvp)
                        <tr>
                          <td>{{ $loop->iteration }}</td>
                          <td>{{ $rsvp->name }}</td>
                          <td>{{ $rsvp->rsvp }}</td>
                          <td>{{ $rsvp->created_at->toFormattedDateString() }} &nbsp; <small>{{ $rsvp->created_at->diffForHumans() }}</small> </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                </div>

                <div class="panel-body">
                  <h1>Wishes</h1>
                    <table class="table" style="table-layout: fixed; width: 100%">
                      <thead class="thead-inverse">
                        <tr>
                          <th>No</th>
                          <th>Name</th>
                          <th>Wish</th>
                          <th>Added On</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($wishes as $wish)
                        <tr>
                          <td>{{ $loop->iteration }}</td>
                          <td>{{ $wish->name }}</td>
                          <td style="word-wrap:break-word;">{{ $wish->wish }}</td>
                          <td>{{ $wish->created_at->toFormattedDateString() }} &nbsp; <small>{{ $wish->created_at->diffForHumans() }}</small> </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
