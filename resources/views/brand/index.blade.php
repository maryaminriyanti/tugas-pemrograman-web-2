<x-app>

    <x-slot:title>{{ $title }}</x-slot>

    @session('success')
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endsession

    <a class="btn btn-primary mb-3" href="{{ route('brand.create') }}" role="button">Create</a>

    <table class="table table-bordered table-striped table-hover">
        <thead class="table-warning">
            <tr>
                <th>Nama</th>
                <th>Origin</th>
                <th>Categori</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($brands as $brand)
                <tr>
                    <td>{{ $brand->name }}</td>
                    <td>{{ $brand->origin }}</td>
                    <td>{{ $brand->category }}</td>

                    <td>

                        <a class="btn btn-warning btn-sm" href="{{ route('brand.edit', $brand) }}" role="button">Edit</a>

                        <form action="{{ route('brand.destroy', $brand) }}" method="POST" class="d-inline">
                            @method('DELETE')
                            @csrf

                            <button type="submit" class="btn btn-danger btn-sm"
                                onclick="return confirm('Anda yakin?')">Delete</button>
                        </form>

                        </li>
            @endforeach

            </ul>

</x-app>
