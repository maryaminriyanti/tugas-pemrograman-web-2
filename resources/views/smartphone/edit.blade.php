<x-app>

    <x-slot:title>{{ $title }}</x-slot>

    <form method="POST" action="{{ route('smartphone.update', $smartphone) }}">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                value="{{ old('name', $smartphone->name) }}">

            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Price</label>
            <input type="number" class="form-control @error('price') is-invalid @enderror" name="price"
                value="{{ old('price', $smartphone->price) }}">

            @error('price')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">RAM</label>
            <select class="form-control @error('ram') is-invalid @enderror" name="ram">
                <option value="">-- Pilih RAM --</option>
                <option value="2" {{ old('ram', $smartphone->ram) == 2 ? 'selected' : '' }}>2 GB</option>
                <option value="3" {{ old('ram', $smartphone->ram) == 3 ? 'selected' : '' }}>3 GB</option>
                <option value="4" {{ old('ram', $smartphone->ram) == 4 ? 'selected' : '' }}>4 GB</option>
                <option value="6" {{ old('ram', $smartphone->ram) == 6 ? 'selected' : '' }}>6 GB</option>
                <option value="8" {{ old('ram', $smartphone->ram) == 8 ? 'selected' : '' }}>8 GB</option>
                <option value="12" {{ old('ram', $smartphone->ram) == 12 ? 'selected' : '' }}>12 GB</option>
                <option value="16" {{ old('ram', $smartphone->ram) == 16 ? 'selected' : '' }}>16 GB</option>
            </select>

            @error('ram')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Storage</label>
            <select class="form-control @error('storage') is-invalid @enderror" name="storage">
                <option value="">-- Pilih Storage --</option>
                <option value="32" {{ old('storage', $smartphone->storage) == 32 ? 'selected' : '' }}>32 GB
                </option>
                <option value="64" {{ old('storage', $smartphone->storage) == 64 ? 'selected' : '' }}>64 GB
                </option>
                <option value="128" {{ old('storage', $smartphone->storage) == 128 ? 'selected' : '' }}>128 GB
                </option>
                <option value="256" {{ old('storage', $smartphone->storage) == 256 ? 'selected' : '' }}>256 GB
                </option>
                <option value="512" {{ old('storage', $smartphone->storage) == 512 ? 'selected' : '' }}>512 GB
                </option>
                <option value="1" {{ old('storage', $smartphone->storage) == 1 ? 'selected' : '' }}>1 TB
                </option>
            </select>

            @error('storage')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Release Year</label>
            <input type="number" class="form-control @error('release_year') is-invalid @enderror" name="release_year"
                value="{{ old('release_year', $smartphone->release_year) }}">

            @error('release_year')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Brand</label>
            <select class="form-control @error('brand_id') is-invalid @enderror" name="brand_id">
                <option value="">-- Pilih Brand --</option>
                @foreach ($brands as $brand)
                    <option value="{{ $brand->id }}"
                        {{ old('brand_id', $smartphone->brand_id) == $brand->id ? 'selected' : '' }}>
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
