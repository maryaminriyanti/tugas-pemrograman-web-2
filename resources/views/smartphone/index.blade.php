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
            <li class="list-group-item">{{ $loop->iteration }}. {{ $smartphone->name }} --
                Rp{{ number_format($smartphone->price) }}</li>
        @endforeach

    </ul>

</x-app>
