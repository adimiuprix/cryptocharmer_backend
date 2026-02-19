<x-layout>
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h5>Edit Konten</h5>
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

                <form action="{{ route('admin.update', $content->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input type="text" name="name" class="form-control"
                            value="{{ old('name', $content->name) }}" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Logo</label>
                        @if ($content->logo)
                            <div class="mb-2">
                                <img src="{{ asset('logos/' . $content->logo) }}" alt="logo"
                                    style="max-height:80px;">
                            </div>
                        @endif
                        <input type="file" name="logo" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Headline</label>
                        <input type="text" name="headline" class="form-control"
                            value="{{ old('headline', $content->headline) }}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Kategori</label>
                        <select name="category_id" class="form-select">
                            <option value="">-- Pilih Kategori --</option>
                            @foreach ($categories as $cat)
                                <option value="{{ $cat->id }}"
                                    {{ old('category_id', $content->category_id) == $cat->id ? 'selected' : '' }}>
                                    {{ $cat->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Wallet</label>
                        <select name="wallet_id" class="form-select">
                            <option value="">-- Pilih Wallet --</option>
                            @foreach ($wallets as $w)
                                <option value="{{ $w->id }}"
                                    {{ old('wallet_id', $content->wallet_id) == $w->id ? 'selected' : '' }}>
                                    {{ $w->provider }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Link</label>
                        <input type="url" name="link" class="form-control"
                            value="{{ old('link', $content->link) }}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Highlight (tulisan hijau)</label>
                        <input type="text" name="highlight" class="form-control"
                            value="{{ old('highlight', $content->highlight) }}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Badges</label>
                        <div id="badges-list">
                            @php
                                $badges = old('badges', $content->badges ?? ['']);
                                if (!is_array($badges)) {
                                    $badges = [$badges];
                                }
                                $badges = array_map(function ($v) {
                                    return is_scalar($v) ? $v : json_encode($v);
                                }, $badges);
                            @endphp
                            @foreach ($badges as $b)
                                <div class="mb-2">
                                    <input type="text" name="badges[]" class="form-control mb-2"
                                        value="{{ $b }}" placeholder="Badge" />
                                </div>
                            @endforeach
                        </div>
                        <button type="button" class="btn btn-sm btn-outline-primary mt-2" id="add-badge">Tambah
                            Badge</button>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Features</label>
                        <div id="features-list">
                            @php
                                $features = old('features', $content->features ?? ['']);
                                if (!is_array($features)) {
                                    $features = [$features];
                                }
                                $features = array_map(function ($v) {
                                    return is_scalar($v) ? $v : json_encode($v);
                                }, $features);
                            @endphp
                            @foreach ($features as $f)
                                <div class="mb-2"><input type="text" name="features[]" class="form-control mb-2"
                                        value="{{ $f }}" placeholder="Feature"></div>
                            @endforeach
                        </div>
                        <button type="button" class="btn btn-sm btn-outline-primary mt-2" id="add-feature">Tambah
                            Feature</button>
                    </div>

                    <div class="mb-3">
                        <label class="form-label d-block">Currencies</label>
                        @foreach ($currencies as $currency)
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="currencies[]" type="checkbox"
                                    value="{{ $currency->id }}" id="curr-{{ $currency->id }}"
                                    {{ (is_array(old('currencies')) && in_array($currency->id, old('currencies'))) || (is_null(old('currencies')) && $content->currencies->contains($currency->id)) ? 'checked' : '' }}>
                                <label class="form-check-label"
                                    for="curr-{{ $currency->id }}">{{ $currency->name }}</label>
                            </div>
                        @endforeach
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


        document.addEventListener('click', function(e) {
            if (e.target && e.target.classList.contains('btn-remove')) {
                e.target.closest('.input-group').remove();
            }
        });
    </script>
</x-layout>
