@extends('layouts.app')

@section('content')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Dashboard</h1>
      </div>
    </div>
  </div>
</div>

<div>Session locale: {{ session('locale') }}</div>
<div>Direction: {{ $direction ?? 'not set' }}</div>
<div>
        Session locale: {{ session('locale') }}
        <br>
        Direction: {{ $direction ?? 'not set' }}
    </div>

@endsection
