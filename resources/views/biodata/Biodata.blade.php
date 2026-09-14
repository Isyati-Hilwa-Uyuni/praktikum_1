<div>
    <!-- Life is available only in the present moment. - Thich Nhat Hanh -->
    <br>
    <br>

    <body bgcolor="#FFF8DC">
        <table border="1" align="center" bgcolor="white">
            <tr align="center">
                <td colspan="3" align="center">
                    {{ $judul }}
                </td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>{{ $nama }}</td>
                <td rowspan="7">
                    <img src="{{ asset('img/saya.jpg') }}" height="250" width="150">
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
        <br>

        <div style="text-align: center">
            <form action="ortu">
                <input type="submit" value="orangtua">
            </form>
            <form action="smk">
                <input type="submit" value="sekolah">
            </form>
        </div>
    </body>
</div>
