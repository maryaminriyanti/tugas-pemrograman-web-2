<x-app>

    <x-slot:title>{{ $title }}</x-slot>

    @session('success')
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endsession

    <a class="btn btn-primary mb-3" href="{{ route('smartphone.create') }}" role="button">Create</a>

    <ul class="list-group">
        @foreach ($smartphones as $smartphone)
            <li class="list-group-item">
                {{ $loop->iteration }}. {{ $smartphone->name }} -- Rp{{ number_format($smartphone->price) }}

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
