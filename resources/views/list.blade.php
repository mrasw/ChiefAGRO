<table>
    <tr>
        <td>Id</td>
        <td>Nama</td>
        <td>deskripsi</td>
        <td>Kategori</td>
        <td>Gambar</td>
    </tr>
    @foreach ($item as $i )
        <td>{{ $i['id'] }}</td>
        <td>{{ $i['nama_item'] }}</td>
        <td>{{ $i['deskripsi_item'] }}</td>
        <td>{{ $i['category'] }}</td>
        <td>{{ $i['src'] }}</td>
    @endforeach
</table>