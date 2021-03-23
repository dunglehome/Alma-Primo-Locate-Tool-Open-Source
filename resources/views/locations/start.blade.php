@extends('layouts.app')
@section('css')
@endsection

@section('content')
<!-- SECTION content -->
<h2>Generate a new location description</h2>
<hr>
<h4>Step 1: select an Alma library</h4>
<label for="location_name">Alma library Name</label>
<small class="text-muted">Choose the <i>Alma library</i> where the <i>Alma location</i> is. This list is
    generated by Alma. </small>
<table class="table table-striped table-hover" id="alma-locations-table">
    <thead>
        <tr>
            <th> Alma library name</th>
            <th> Alma library ID</th>
            <th> Select </th>
        </tr>
    </thead>
    <tbody>
        @foreach($libraries['library'] as $library)
        <tr>
            <td> {{$library['name']}} </td>
            <td> {{$library['code']}} </td>
            <td> <a class="btn btn-primary" href="{{ url('create/location/' . $library['code']) }}"
                @if(env('APP_ENV')!='production')
                    @if (($library['code']) === 'UBGM')
                        id="{{$library['code'] . '_select'}}" dusk="test-location"
                    @endif
                @endif
                    id="{{$library['code'] . '_select'}}" role="button">Select</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection

@section('javascript')
@endsection
