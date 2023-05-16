<?php
if (!isset($filter)) {
    $filter = Session::get('filter');
}
?>

@extends('admin')
@section('admin-content')
    <main id="main">
        <!-- ======= Form Section ======= -->
        <section id="form" class="form">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h3>Liste des véhicules</h3>
                </div>

                <div class="row content">
                    <div class="col-lg-6 mb-2">
                        <div class="form-control">
                            <form method="GET" class="form-inline" action="{{ route('vehicles-index-filtering') }}">
                                @csrf
                                <div class="search">
                                    @csrf
                                    <input type="text" name="filter" placeholder="Rechercher ici ..."
                                        value="{{ $filter }}">
                                    <button type="submit"><i role="button" class='fa-solid fa-search'></i></button>
                                </div>
                            </form>
                        </div>

                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr class="table-secondary">
                                    <th scope="col">#</th>
                                    <th scope="col">@sortablelink('manufacturer', 'Marque')</th>
                                    <th scope="col">@sortablelink('genre', 'Genre')</th>
                                    <th scope="col">@sortablelink('type', 'Type')</th>
                                    <th scope="col">@sortablelink('chassis', 'Chassis')</th>
                                    <th scope="col">@sortablelink('owner.name', 'Propriétaire')</th>
                                    <th scope="col">@sortablelink('driver.name', 'Conducteur')</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (!empty($vehicles) && $vehicles->count())
                                    @foreach ($vehicles as $key => $vehicle)
                                        <tr>
                                            <th scope="row">{{ $key + 1 }}</th>
                                            <td>{{ $vehicle->manufacturer }}</td>
                                            <td>{{ $vehicle->genre }}</td>
                                            <td>{{ $vehicle->type }}</td>
                                            <td>{{ $vehicle->chassis }}</td>
                                            <td>
                                                {{ $vehicle->owner == null ? '' : $vehicle->owner->name }}
                                                <br>
                                                {{ $vehicle->owner == null ? '' : $vehicle->owner->email }}

                                                @if ($vehicle->owner != null && $vehicle->owner->email != null && $vehicle->owner->phoneNumber != null)
                                                    /
                                                @endif
                                                {{ $vehicle->owner == null ? '' : $vehicle->owner->phoneNumber }}
                                            </td>

                                            <td>
                                                {{ $vehicle->driver == null ? '' : $vehicle->driver->name }}
                                                <br>
                                                {{ $vehicle->driver == null ? '' : $vehicle->driver->email }}

                                                @if ($vehicle->driver != null && $vehicle->driver->email != null && $vehicle->owner->phoneNumber != null)
                                                    /
                                                @endif
                                                {{ $vehicle->driver == null ? '' : $vehicle->driver->phoneNumber }}
                                            </td>
                                            <td class="d-flex">
                                                <a href="{{ route('vehicle-info', $vehicle) }}" title="modifier"
                                                    class="btn"><i class="fa-solid fa-info-circle"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="8">Aucun enrégistrement trouvé</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>

                    </div>
                    <div class="d-flex justify-content-end">
                        {!! $vehicles->appends(Request::except('page'))->render() !!}
                    </div>
                </div>

            </div>
        </section><!-- End Form Section -->
    </main><!-- End #main -->
@endsection
