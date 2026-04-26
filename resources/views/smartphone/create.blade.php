<x-app>

    <x-slot:title>{{ $title }}</x-slot>

    <form method="POST" action="{{ route('smartphone.store') }}">
        @csrf

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                value="{{ old('name') }}">

            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Price</label>
            <input type="number" class="form-control @error('price') is-invalid @enderror" name="price"
                value="{{ old('price') }}">

            @error('price')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">RAM</label>
            <input type="number" class="form-control @error('ram') is-invalid @enderror" name="ram"
                value="{{ old('ram') }}">

            @error('ram')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Storage</label>
            <input type="number" class="form-control @error('storage') is-invalid @enderror" name="storage"
                value="{{ old('storage') }}">

            @error('storage')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Release Year</label>
            <input type="number" class="form-control @error('release_year') is-invalid @enderror" name="release_year"
                value="{{ old('release_year') }}">

            @error('release_year')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <a class="btn btn-warning" href="{{ route('smartphone.index') }}" role="button">Cancel</a>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</x-app>
