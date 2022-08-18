<!DOCTYPE html>
<html>

<head>
    <title>Cetak Laporan Penggajian</title>
    <link id="pagestyle" href="{{ asset('assets/dashboard/css/material-dashboard.css?v=3.0.4') }}" rel="stylesheet" />
    <style type="text/css">
        body {
            font-family: Arial;
            color: black;
        }
    </style>
</head>

<body>
    <center>
        <h4 style="padding-top:30px"><img src="{{ URL::to('assets/images/itn.png') }}" width="100px" height="100px" alt="Logo" style="position:absolute;top:8px;left:16px;"> <b style="color:red;">PT. Indonesia Trans Network</b>
        </h4>
        <p style="font-size: 10px;">Jl.Kimaja (Ruko Kimaja Icon) Kel.Sepang Jaya, Kec.Labuhan Ratu, Kota Bandar Lampung Lampung - 35148</p>
        <hr style="width: 100%; border-width: 2px; color: black">
    </center>

    <h6>
        <td></td>
    </h6>
    <table style="width:100%" class="table table-bordered">
        <thead>
            <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">No</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Pelamar</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Lowongan</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Lamaran</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1;
            ?>
            @foreach ($lamars as $lamar)
            <tr>
                <td>
                    <p class="text-xs font-weight-bold mb-0">{{ $loop->iteration }}</p>
                </td>
                <td>
                    <p class="text-xs font-weight-bold mb-0">Nama :{{ $lamar->name}}</p>
                    <p class="text-xs font-weight-bold mb-0">Jenis Kelamin:{{ $lamar->jenis_kelamin}}</p>
                    <p class="text-xs font-weight-bold mb-0">Email :{{ $lamar->email}}</p>
                    <p class="text-xs font-weight-bold mb-0">NoHP:{{ $lamar->no_hp}}</p>
                    <p class="text-xs font-weight-bold mb-0">Pendidikan:{{ $lamar->name_pendidikan}}|Tahun:{{$lamar->tahun_lulus}}</p>
                </td>
                <td>
                    <p class="text-xs font-weight-bold mb-0">Lowongan :{{ $lamar->lowongan}}</p>
                    <p class="text-xs font-weight-bold mb-0">Gaji:{{ $lamar->gaji}}</p>
                    <p class="text-xs font-weight-bold mb-0">Deadline :{{ $lamar->selesai}}</p>
                </td>
                <td>
                    <p class="text-xs font-weight-bold mb-0">Waktu :{{ $lamar->waktu}}</p>
                    <p class="text-xs font-weight-bold mb-0">Berkas: <a href="{{ asset('storage/' . $lamar->berkas)}}" style="color:red;">Lihat File</a></p>
                    <p class="text-xs font-weight-bold mb-0">Status:{{ $lamar->status}}</p>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <table width="100%">
        <tr>
            <td></td>
            <td>
                <p style="padding-left:50px">Ahmad Dwi Kurnia</p>
                <br>
                <br>
                <p style="padding-left:30px">___________________</p>
            </td>
            <p style="padding-left:20px">Bandar Lampung, <?php echo date("d M Y") ?></p>
            <td width="200px">
                
                <p style="padding-left:80px"> Manager</p>
                <br>
                <br>
                <p style="padding-left:30px">___________________</p>
            </td>
        </tr>
    </table>
</body>

</html>

<script type="text/javascript">
    window.print();
</script>