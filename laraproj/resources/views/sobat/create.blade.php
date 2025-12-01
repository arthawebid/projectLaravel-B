<div class="container">
    <h3>Tambah Data Sobat</h3>

    <form action="{{ route('sobat.store') }}" method="POST">
        @csrf

        <div>
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required maxlength="50">
        </div>

        <div>
            <label for="alamat">Alamat:</label>
            <textarea id="alamat" name="alamat" required></textarea>
        </div>

        <div>
            <label for="kota">Kota:</label>
            <input type="text" id="kota" name="kota" required maxlength="50">
        </div>

        <div>
            <label for="telp">Telp:</label>
            <input type="text" id="telp" name="telp" required maxlength="20">
        </div>

        <button type="submit">Simpan</button>
        <a href="{{ route('sobat.index') }}">Batal</a>
    </form>
</div>