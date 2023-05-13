@extends('admin')
@section('admin-content')
    <main id="main">
        <!-- ======= Form Section ======= -->
        <section id="form" class="form">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h3>Liste des conducteurs</h3>
                </div>

                <div class="row content">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr class="table-secondary">
                                    <th scope="col">#</th>
                                    <th scope="col">Nom & Prénom</th>
                                    <th scope="col">Date de naissance</th>
                                    <th scope="col">Lieu de résidence</th>
                                    <th scope="col">Numéro permis</th>
                                    <th scope="col">Téléphone</th>
                                    <th scope="col">Actions</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($drivers as $key => $driver)
                                    <tr>
                                        <th scope="row">{{ $key + 1 }}</th>
                                        <td>{{ $driver->name }}</td>
                                        <td>{{ $driver->birthDate }}</td>
                                        <td>{{ $driver->birthPlace }}</td>
                                        <td>{{ $driver->permis }}</td>
                                        <td>{{ $driver->phoneNumber }}</td>
                                        <td class="d-flex">
                                            <a href="{{ route('driver-edit', $driver) }}" title="modifier" class="btn"><i
                                                    class="fa-solid fa-pen-to-square"></i></a>
                                            <a href="{{ route('driver-info', $driver) }}" title="modifier" class="btn"><i
                                                    class="fa-solid fa-info-circle"></i></a>
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
