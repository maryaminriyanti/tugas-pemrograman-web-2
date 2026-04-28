<x-app>

    <x-slot:title>{{ $title }}</x-slot>

    @session('success')
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endsession

    <a class="btn btn-primary mb-3" href="{{ route('smartphone.create') }}" role="button">Create</a>

    <table class="table table-bordered table-striped table-hover">
        <thead class="table-warning">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Harga</th>
                <th>RAM</th>
                <th>Storage</th>
                <th>Tahun Rilis</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($smartphones as $smartphone)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $smartphone->name }}</td>
                    <td>Rp{{ number_format($smartphone->price) }}</td>
                    <td>{{ $smartphone->ram }} GB</td>
                    <td>{{ $smartphone->storage }} GB</td>
                    <td>{{ $smartphone->release_year }}</td>

                    <td>

                        <a class="btn btn-warning btn-sm" href="{{ route('smartphone.edit', $smartphone) }}"
                            role="button">Edit</a>

                        <form action="{{ route('smartphone.destroy', $smartphone) }}" method="POST" class="d-inline">
                            @method('DELETE')
                            @csrf

                            <button type="submit" class="btn btn-danger btn-sm"
                                onclick="return confirm('Anda yakin?')">Delete</button>
                        </form>

                        </li>
            @endforeach

            </ul>

</x-app>
