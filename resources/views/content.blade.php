<x-layout>
<div class="col-sm-12">
    <div class="card">
        <div class="card-header">
            <h5>Semua Data</h5>
        </div>
        <div class="datatable-container">
                <div class="shrink-0 m-1">
                    <a href="{{ route('admin.create') }}" class="btn btn-primary btn-sm">Tambah</a>
                </div>
                <div class="table-responsive">
                <table class="table table-sm align-middle table-hover mb-0">
                    <thead class="table-light">
                        <tr class="text-nowrap">
                            <th style="width: 50px">#</th>
                            <th>Judul</th>
                            <th>Category</th>
                            <th>Headline</th>
                            <th class="text-center" style="width: 150px">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($contents as $content)
                        <tr>
                            <td class="fw-semibold">{{ $loop->iteration }}</td>
                            <td class="fw-semibold">{{ $content->name }}</td>
                            <td class="fw-semibold">{{ $content->category->name ?? '-' }}</td>
                            <td class="fw-semibold">{{ $content->headline }}</td>
                            <td class="text-center">
                            <div class="d-flex justify-content-center gap-2">
                                <a href="{{ route('admin.edit', $content->id) }}" class="btn btn-sm btn-outline-primary px-3">Edit</a>
                                <a href="{{ route('admin.delete', $content->id) }}" class="btn btn-sm btn-outline-danger px-3" onclick="return confirm('Yakin ingin menghapus data ini?')">Delete</a>
                            </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>
</x-layout>
