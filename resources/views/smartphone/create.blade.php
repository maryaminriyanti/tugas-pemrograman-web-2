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
            <select class="form-control @error('ram') is-invalid @enderror" name="ram">
                <option value="">-- Pilih RAM --</option>
                <option value="4">2 GB</option>
                <option value="4">3 GB</option>
                <option value="4">4 GB</option>
                <option value="6">6 GB</option>
                <option value="8">8 GB</option>
                <option value="12">12 GB</option>
                <option value="12">16 GB</option>
            </select>

            @error('ram')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Storage</label>
            <select class="form-control @error('storage') is-invalid @enderror" name="storage">
                <option value="">-- Pilih Storage --</option>
                <option value="64">32 GB</option>
                <option value="64">64 GB</option>
                <option value="128">128 GB</option>
                <option value="256">256 GB</option>
                <option value="512">512 GB</option>
                <option value="512">1 TB</option>
            </select>

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

        <div class="mb-3">
            <label class="form-label">Brand</label>
            <select class="form-control @error('brand_id') is-invalid @enderror" name="brand_id">
                <option value="">-- Pilih Brand --</option>
                @foreach ($brands as $brand)
                    <option value="{{ $brand->id }}" {{ old('brand_id') == $brand->id ? 'selected' : '' }}>
                        {{ $brand->name }}
                    </option>
                @endforeach
            </select>

            @error('brand_id')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <a class="btn btn-warning" href="{{ route('smartphone.index') }}" role="button">Cancel</a>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</x-app>
