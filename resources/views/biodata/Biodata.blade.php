<div>
    <!-- Life is available only in the present moment. - Thich Nhat Hanh -->
    <form action="Orangtua">
        <table border="1" align="center">
            <tr align="center">
                <td colspan="3" align="center">
                    {{ $judul }}
                </td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>{{ $nama }}</td>
                <td rowspan="7">
                    <img src="img/hilwa.jpeg" height="auto" width="150">
                </td>
            </tr>
            <tr>
                <td>Tempat, Tanggal Lahir</td>
                <td>{{ $ttl }}</td>
            </tr>
            <tr>
                <td>NIM</td>
                <td>{{ $nim }}</td>
            </tr>
            <tr>
                <td>Program Studi</td>
                <td>{{ $prodi }}</td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td> {{ $jurusan }} </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td> {{ $alamat }} </td>
            </tr>
            <tr>
                <td>No.Telepon</td>
                <td> {{ $hp }} </td>

            </tr>
        </table>

        <input style="align-items: center" type="button" value="orangtua">

    </form>
    <form action="sekolah">
        <input type="button" value="sekolah">
    </form>
</div>
