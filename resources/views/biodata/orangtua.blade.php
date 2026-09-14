<div>
    <!-- Let all your things have their places; let each part of your business have its time. - Benjamin Franklin -->
    <br>
    <br>
    <table border="1" align="center">
        <tr align="center">
            <td colspan="3" align="center">
                {{ $judul }}
            </td>
        </tr>
        <tr>
            <td>Nama</td>
            <td> {{ $bapak }}</td>
            <td rowspan="7">
                <img src="{{ asset('img/bapak.jpg') }}" height="auto" width="150">
            </td>
        </tr>
        <tr>
            <td>Tempat, Tanggal Lahir</td>
            <td> {{ $ttl_b }} </td>
        </tr>
        <tr>
            <td>Pekerjaan</td>
            <td> {{ $kerja_b }} </td>
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
    <br><br>

    <table border="1" align="center">
        <tr align="center">
            <td colspan="3" align="center">
                {{ $judul }}
            </td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>{{ $ibu }}</td>
            <td rowspan="7">
                <img src="{{ asset('img/ibu.jpg') }}" height="auto" width="150">
            </td>
        </tr>
        <tr>
            <td>Tempat, Tanggal Lahir</td>
            <td>{{ $ttl_i }}</td>
        </tr>
        <tr>
            <td>Pekerjaan</td>
            <td>{{ $kerja_i }}</td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>{{ $alamat }}</td>
        </tr>
        <tr>
            <td>No.Telepon</td>
            <td>{{ $hp }}</td>
        </tr>
    </table>
</div>
