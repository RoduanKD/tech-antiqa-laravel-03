@extends('layouts.app', ['activePage' => 'place', 'titlePage' => 'Place'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-danger">
                            <h4 class="card-title ">Place</h4>
                            <p class="card-category"> You Can Change the all places from here</p>
                        </div>
                        {{-- COUNTRY --}}
                        <div class="card-body">
                            <table>
                                <tbody>
                                    <tr>
                                        <th>
                                            <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    Country
                                                </button>

                                                @foreach ($countries as $country)
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <a class="dropdown-item" href="#" value="{{ $country->id }}">
                                                            {{ $country->id == old('country_id') ? 'selected' : '' }}>
                                                            {{ $country->name }}</a>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </th>
                                        <td>
                                            <a href="{{ route('countries.create') }}" class="btn btn-sm btn-primary">Add
                                                Country</a>
                                        </td>

                                    </tr>
                                    {{-- CITY --}}
                                    <tr>
                                        <th>
                                            <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    City
                                                </button>
                                                @foreach ($citeis as $city)
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <a class="dropdown-item" href="#" value="{{ $city->id }}">
                                                            {{ $city->id == $country->id }}>
                                                            {{ $city->name_en }}</a>
                                                    </div>
                                                @endforeach
                                            </div>

                                        </th>
                                        <td>
                                            <a href="{{ route('cities.create') }}" class="btn btn-sm btn-primary">Add
                                                City</a>
                                        </td>
                                    </tr>
                                    {{-- Area --}}
                                    <tr>
                                        <th>
                                            <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    Area
                                                </button>
                                                {{-- @foreach ($areas as $area)
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#" value="{{ $area->id }}">
                                                {{ $area->id == old('area_id') ? 'selected' : '' }}>
                                                {{ $area->name }}</a>
                                        </div>
                                    @endforeach --}}
                                            </div>

                                        </th>
                                        <td>
                                            <a href="{{ route('cities.create') }}" class="btn btn-sm btn-primary">Add
                                                City</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            {{-- <div class="field is-grouped">
                                <div class="control">
                                    <button type="button-align:center" class="btn btn-success">Change</button>
                                    <button type="button" class="btn btn-danger">Cancel</button>
                                </div>

                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
