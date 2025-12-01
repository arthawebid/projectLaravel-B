<div class="container">
    <h3>Ubah Data Sobat</h3>

    <form action="{{ route('sobat.update', $d->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required maxlength="50" value="{{ old('nama', $d->nama) }}">
        </div>

        <div>
            <label for="alamat">Alamat:</label>
            <textarea id="alamat" name="alamat" required>{{ old('alamat', $d->alamat) }}</textarea>
        </div>

        <div>
            <label for="kota">Kota:</label>
            <input type="text" id="kota" name="kota" required maxlength="50" value="{{ old('kota', $d->kota) }}">
        </div>

        <div>
            <label for="telp">Telp:</label>
            <input type="text" id="telp" name="telp" required maxlength="20" value="{{ old('telp', $d->telp) }}">
        </div>

        <button type="submit">Simpan Perubahan</button>
        <a href="{{ route('sobat.index') }}">Batal</a>
    </form>
</div>