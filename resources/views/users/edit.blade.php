@include('plantillas.navinicio')

    <br>
    <br>
    <br>
    <link rel="stylesheet" href="{{ asset('css/privada_admin.css') }}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">


    <div class="container">
        <h1>Editar Usuario <a href="{{ route('privada_admin') }}" class="btn btn-primary mb-2 float-right mt-2">Regresar</a></h1>

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('users.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Nombre:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $user->name) }}" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $user->email) }}" required>
            </div>
            <div class="form-group">
                <label for="password">Nueva Contraseña:</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="form-group">
                <label for="id_cargo">Cargo:</label>
                <select class="form-control" id="id_cargo" name="id_cargo">
                    @foreach($cargos as $cargo)
                    <option value="1" {{ $user->id_cargo == 1 ? 'selected' : '' }}>Administrador</option>
                    <option value="2" {{ $user->id_cargo == 2 ? 'selected' : '' }}>Usuario</option>
                    @endforeach
                    </select>

            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>

  
    @include('plantillas.fooster')
    @include('plantillas.Animacion')
