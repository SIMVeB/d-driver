@extends('admin')
@section('admin-content')
    <main id="main">
        <!-- ======= Form Section ======= -->
        <section id="form" class="form">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h3>Liste des abonnés</h3>
                </div>

                <div class="row content">
                    {{-- <div class="row mb-3">
                    <h4 class="text-uppercase"><i class="fa-solid fa-user-tie"></i> Liste des conducteurs</h4>
                </div> --}}
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr class="table-secondary">
                                    <th scope="col">#</th>
                                    <th scope="col">@sortablelink('email', 'Email') </th>
                                    <th scope="col">@sortablelink('created_at', 'Date') </th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (!empty($newsLetters) && $newsLetters->count())
                                    @foreach ($newsLetters as $key => $email)
                                        <tr>
                                            <th scope="row">{{ $key + 1 }}</th>
                                            <td>{{ $email->email }}</td>
                                            <td>{{ $email->created_at }}</td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="3">Aucun enrégistrement trouvé</td>
                                    </tr>
                                @endif

                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex justify-content-end">
                        {!! $newsLetters->appends(Request::except('page'))->render() !!}
                    </div>
                </div>

            </div>
        </section><!-- End Form Section -->
    </main><!-- End #main -->
@endsection
