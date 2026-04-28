<x-app>

    <x-slot:title>{{ $title }}</x-slot>

    <a class="btn btn-warning mb-3" href="{{ route('smartphone.index') }}" role="button">Back</a>

    {{-- smartphone --}}
    <h6>Data Smartphone</h6>
    <ul class="list-group mb-3">
        <li class="list-group-item">Name: {{ $smartphone->name }}</li>
        <li class="list-group-item">
            Price: Rp{{ number_format($smartphone->price) }}
        </li>
        <li class="list-group-item">
            RAM: {{ $smartphone->ram }} GB
        </li>
        <li class="list-group-item">
            Storage:
            {{ $smartphone->storage == 1024 ? '1 TB' : $smartphone->storage . ' GB' }}
        </li>
        <li class="list-group-item">
            Release Year: {{ $smartphone->release_year }}
        </li>
        <li class="list-group-item">
            Created At: {{ $smartphone->created_at->format('d F Y H:i:s') }}
        </li>
        <li class="list-group-item">
            Last Update: {{ $smartphone->updated_at->diffForHumans() }}
        </li>
    </ul>

    {{-- brand --}}
    <h6>Brand</h6>
    <ul class="list-group">
        <li class="list-group-item">
            {{ $smartphone->brand->name }}
        </li>
    </ul>

</x-app>
