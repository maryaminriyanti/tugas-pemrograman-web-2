<x-app>

    <x-slot:title>{{ $title }}</x-slot>

    @session('success')
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endsession

    <a class="btn btn-primary mb-3" href="{{ route('smartphone.create') }}" role="button">Create</a>

    <form action="{{ route('smartphone.index') }}" method="GET">
        <div class="row g-3 mb-3">
            <div class="col-md-8">
                <input type="text" class="form-control" name="keyword" placeholder="Search Smartphone name ..."
                    value="{{ request('keyword') }}">
            </div>
            <div class="col-md-4">
                <button type="submit" class="btn btn-primary">Search</button>
            </div>
        </div>
    </form>

    <table class="table table-bordered table-striped table-hover">
        <thead class="table-warning">
            <tr>
                <th>No</th>
                <th>Brand</th>
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
                    <td>{{ $smartphones->firstItem() + $loop->index }}</td>
                    <td>{{ $smartphone->brand->name }}</td>
                    <td>{{ $smartphone->name }}</td>
                    <td>Rp{{ number_format($smartphone->price) }}</td>
                    <td>{{ $smartphone->ram }} GB</td>
                    <td>{{ $smartphone->storage }} GB</td>
                    <td>{{ $smartphone->release_year }}</td>

                    <td>
                        <a class="btn btn-warning btn-sm" href="{{ route('smartphone.edit', $smartphone) }}">
                            Edit
                        </a>

                        <form action="{{ route('smartphone.destroy', $smartphone) }}" method="POST" class="d-inline">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm"
                                onclick="return confirm('Anda yakin?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $smartphones->links() }}

</x-app>
