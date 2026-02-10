<x-layout>
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h5>Buat Konten Baru</h5>
            </div>
            <div class="card-body">
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('admin.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Logo</label>
                        <input type="file" name="logo" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Headline</label>
                        <input type="text" name="headline" class="form-control" value="{{ old('headline') }}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Kategori</label>
                        <select name="category_id" class="form-select">
                            <option value="">-- Pilih Kategori --</option>
                            @foreach ($categories as $cat)
                                <option value="{{ $cat->id }}"
                                    {{ old('category_id') == $cat->id ? 'selected' : '' }}>{{ $cat->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Wallet</label>
                        <select name="wallet_id" class="form-select">
                            <option value="">-- Pilih Wallet --</option>
                            @foreach ($wallets as $w)
                                <option value="{{ $w->id }}" {{ old('wallet_id') == $w->id ? 'selected' : '' }}>
                                    {{ $w->provider }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Link</label>
                        <input type="url" name="link" class="form-control" value="{{ old('link') }}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Highlight (tulisan hijau)</label>
                        <input type="text" name="highlight" class="form-control" value="{{ old('highlight') }}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Badges</label>
                        <div id="badges-list">
                            <input type="text" name="badges[]" class="form-control mb-2" placeholder="Badge 1">
                        </div>
                        <button type="button" class="btn btn-sm btn-outline-primary mt-2" id="add-badge">Tambah
                            Badge</button>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Features</label>
                        <div id="features-list">
                            <input type="text" name="features[]" class="form-control mb-2" placeholder="Feature 1">
                        </div>
                        <button type="button" class="btn btn-sm btn-outline-primary mt-2" id="add-feature">Tambah
                            Feature</button>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Currencies</label>
                        <div id="currencies-list">
                            <input type="text" name="currencies[]" class="form-control mb-2"
                                placeholder="Currency 1">
                        </div>
                        <button type="button" class="btn btn-sm btn-outline-primary mt-2" id="add-currency">Tambah
                            Currency</button>
                    </div>

                    <div class="mt-4">
                        <button class="btn btn-primary">Simpan</button>
                        <a href="{{ route('admin.content') }}" class="btn btn-secondary">Batal</a>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('add-badge').addEventListener('click', function() {
            const div = document.createElement('div');
            div.innerHTML =
                '<div class="input-group mb-2"><input type="text" name="badges[]" class="form-control" placeholder="Badge"><button type="button" class="btn btn-outline-danger btn-remove">Hapus</button></div>';
            document.getElementById('badges-list').appendChild(div);
        });

        document.getElementById('add-feature').addEventListener('click', function() {
            const div = document.createElement('div');
            div.innerHTML =
                '<div class="input-group mb-2"><input type="text" name="features[]" class="form-control" placeholder="Feature"><button type="button" class="btn btn-outline-danger btn-remove">Hapus</button></div>';
            document.getElementById('features-list').appendChild(div);
        });

        document.getElementById('add-currency').addEventListener('click', function() {
            const div = document.createElement('div');
            div.innerHTML =
                '<div class="input-group mb-2"><input type="text" name="currencies[]" class="form-control" placeholder="Currency"><button type="button" class="btn btn-outline-danger btn-remove">Hapus</button></div>';
            document.getElementById('currencies-list').appendChild(div);
        });

        document.addEventListener('click', function(e) {
            if (e.target && e.target.classList.contains('btn-remove')) {
                e.target.closest('.input-group').remove();
            }
        });
    </script>
</x-layout>
