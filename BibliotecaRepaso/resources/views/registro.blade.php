@extends('layout.plantilla')

@section('titulo', 'Registro de Libro')

@section('contentBook')

    <div class="container mt-4 text-center">
        <h2>{{ __('Registro de libro') }}</h2>
    </div>

    <div class="container d-flex justify-content-center mt-5">
        <div class="card p-4 shadow" style="max-width: 500px; width: 100%;">

            @if (session('exito'))
            <script>
                Swal.fire({
                    title: "Buen trabajo!",
                    text: '{{ session('exito') }}',
                    icon: "success"
                });
            </script> 
        @endif
    
    
            <form action="{{ route('guardarLibro') }}" method="POST">
                @csrf

                <!-- ISBN -->
                <div class="mb-3">
                    <label for="isbn" class="form-label">{{ __('ISBN') }}</label>
                    <input type="text" class="form-control @error('isbn') is-invalid @enderror" id="isbn"
                        name="isbn" value="{{ old('isbn') }}"  >
                    @error('isbn')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Título -->
                <div class="mb-3">
                    <label for="titulo" class="form-label">{{ __('Titulo') }}</label>
                    <input type="text" class="form-control @error('titulo') is-invalid @enderror" id="titulo"
                        name="titulo" value="{{ old('titulo') }}"  >
                    @error('titulo')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Autor -->
                <div class="mb-3">
                    <label for="autor" class="form-label">{{ __('Autor') }}</label>
                    <input type="text" class="form-control @error('autor') is-invalid @enderror" id="autor" name="autor" value="{{ old('autor') }}"
                       >
                       @error('autor')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Páginas -->
                <div class="mb-3">
                    <label for="paginas" class="form-label">{{ __('Páginas') }}</label>
                    <input type="number" class="form-control @error('paginas') is-invalid @enderror" id="paginas"
                        name="paginas" value="{{ old('paginas') }}" >
                    @error('paginas')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Año -->
                <div class="mb-3">
                    <label for="año" class="form-label">{{ __('Año') }}</label>
                    <input type="number" class="form-control @error('año') is-invalid @enderror" id="anio"
                        name="año" value="{{ old('año') }}" >
                    @error('año')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Editorial -->
                <div class="mb-3">
                    <label for="editorial" class="form-label">{{ __('Editorial') }}</label>
                    <input type="text" class="form-control @error('editorial') is-invalid @enderror" id="editorial" name="editorial"
                        value="{{ old('editorial') }}" >
                        @error('editorial')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Email de Editorial -->
                <div class="mb-3">
                    <label for="email_editorial" class="form-label">{{ __('Email de Editorial') }}</label>
                    <input type="email" class="form-control @error('email_editorial') is-invalid @enderror"
                        id="email_editorial" name="email_editorial" value="{{ old('email_editorial') }}" >
                    @error('email_editorial')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-success">{{ __('Guardar libro') }}</button>
            </form>

        </div>

    </div>

    

@endsection
