<div class="container">
    <h3>Data Sobat</h3>

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
                <td> <a href="{{ route('sobat.edit',$d->id) }}"> Ubah </a> | Hapus </td>
            </tr>
            @endforeach
        </tbody>

    </table>

</div>