@extends('layout.plantilla')

@section('titulo', 'Registro de Libro')

@section('contentBook')

    <div class="container mt-4 text-center">
        <h2>{{ __('Registro de libro') }}</h2>
    </div>

    <div class="container d-flex justify-content-center mt-5">
        <div class="card p-4 shadow" style="max-width: 500px; width: 100%;">

            <form action="{{ route('guardarLibro') }}" method="POST">
                @csrf

                <!-- ISBN -->
                <div class="mb-3">
                    <label for="isbn" class="form-label">{{ __('ISBN') }}</label>
                    <input type="text" class="form-control @error('isbn') is-invalid @enderror" id="isbn"
                        name="isbn" value="{{ old('isbn') }}" maxlength="13" pattern="\d{13}" required>
                    @error('isbn')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Título -->
                <div class="mb-3">
                    <label for="titulo" class="form-label">{{ __('Titulo') }}</label>
                    <input type="text" class="form-control @error('titulo') is-invalid @enderror" id="titulo"
                        name="titulo" value="{{ old('titulo') }}" maxlength="150" required>
                    @error('titulo')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Autor -->
                <div class="mb-3">
                    <label for="autor" class="form-label">{{ __('Autor') }}</label>
                    <input type="text" class="form-control" id="autor" name="autor" value="{{ old('autor') }}"
                        required>
                </div>

                <!-- Páginas -->
                <div class="mb-3">
                    <label for="paginas" class="form-label">{{ __('Páginas') }}</label>
                    <input type="number" class="form-control @error('paginas') is-invalid @enderror" id="paginas"
                        name="paginas" value="{{ old('paginas') }}" min="1" required>
                    @error('paginas')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Año -->
                <div class="mb-3">
                    <label for="año" class="form-label">{{ __('Año') }}</label>
                    <input type="number" class="form-control @error('año') is-invalid @enderror" id="anio"
                        name="año" value="{{ old('año') }}" min="1000" max="{{ date('Y') }}" required>
                    @error('año')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Editorial -->
                <div class="mb-3">
                    <label for="editorial" class="form-label">{{ __('Editorial') }}</label>
                    <input type="text" class="form-control" id="editorial" name="editorial"
                        value="{{ old('editorial') }}" required>
                </div>

                <!-- Email de Editorial -->
                <div class="mb-3">
                    <label for="email_editorial" class="form-label">{{ __('Email de Editorial') }}</label>
                    <input type="email" class="form-control @error('email_editorial') is-invalid @enderror"
                        id="email_editorial" name="email_editorial" value="{{ old('email_editorial') }}" required>
                    @error('email_editorial')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-success">{{ __('Guardar libro') }}</button>
            </form>

        </div>

    </div>

    @if (session('success'))
        <script>
            Swal.fire({
                title: '¡Todo correcto!',
                text: "{{ session('success') }}",
                icon: 'success',
                confirmButtonText: 'OK'
            });
        </script>
    @endif

@endsection
