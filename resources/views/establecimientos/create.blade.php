<form action="{{ route('establecimientos.create') }}" method="POST">
    @csrf

    <label for="categoria">Categoría:</label>
    <select name="categoria_id" id="categoria" class="form-control">
        <option value="">Seleccione una categoría</option>
        @foreach($categorias as $categoria)
            <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
        @endforeach
    </select>
       <select name="ciudad_id" id="ciudad" class="form-control">
        <option value="">Seleccione una categoría</option>
        @foreach($ciudades as $ciudad)
            <option value="{{ $ciudad->id }}">{{ $ciudad->nombre }}</option>
        @endforeach
    </select>

    <button type="submit" class="btn btn-primary">Guardar</button>
</form>