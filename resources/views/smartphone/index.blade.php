<x-app>

    <x-slot:title>{{ $title }}</x-slot>

    <ul class="list-group">
        @foreach ($smartphones as $smartphone)
            <li class="list-group-item">{{ $loop->iteration }}. {{ $smartphone->name }} --
                Rp{{ number_format($smartphone->price) }}</li>
        @endforeach

    </ul>

</x-app>
