<div class="container">
    <h3>Data Sobat</h3>

        <a href="{{ route('sobat.create') }}"> Tambah Data </a>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            @foreach($dta as $d)
            <tr>
                <td> {{ $loop->iteration }} </td>
                <td> {{ $d->nama }} </td>
                <td> <a href="{{ route('sobat.edit',$d->id) }}"> Ubah </a> | 
                <form action="{{ route('sobat.destroy', $d->id) }}" method="POST" style="display:inline" onsubmit="return confirm('Yakin ingin menghapus data ini?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Hapus</button>
                    </form> </td>
            </tr>
            @endforeach
        </tbody>

    </table>

</div>