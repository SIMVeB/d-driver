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
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr class="table-secondary">
                                    <th scope="col">#</th>
                                    <th scope="col">Marque</th>
                                    <th scope="col">Genre</th>
                                    <th scope="col">Type</th>
                                    <th scope="col">Chassis</th>
                                    <th scope="col">Propriétaire</th>
                                    <th scope="col">Conducteur</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($vehicles as $key => $vehicle)
                                    <tr>
                                        <th scope="row">{{ $key + 1 }}</th>
                                        <td>{{ $vehicle->manufacturer }}</td>
                                        <td>{{ $vehicle->genre }}</td>
                                        <td>{{ $vehicle->type }}</td>
                                        <td>{{ $vehicle->chassis }}</td>
                                        <td>{{ $vehicle->driver == null ? '' : $vehicle->driver->name }}</td>
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
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </section><!-- End Form Section -->
    </main><!-- End #main -->
@endsection
