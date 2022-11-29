<table border="1">

    <tr>
        <td>Nama Siswa</td>
        <td>
            {{$siswa->nama}}
        </td>
    </tr>

    <tr>
        <td>Jurusan</td>
        <td>
            {{$siswa->jurusan->nama}}
        </td>
    </tr>

    <tr>
        <td>Keterangan</td>
        <td>
            {{$siswa->keterangan}}
        </td>
    </tr>
</table>