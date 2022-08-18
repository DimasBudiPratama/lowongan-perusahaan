<!DOCTYPE html>
<html>

<head>
    <title>Cetak Gaji</title>
    <link href="{{ URL::to('assets/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::to('assets/css/dist/bootstrap.min.css') }}">
    <style type="text/css">
        body {
            font-family: Arial;
            color: black;
        }
    </style>
</head>

<body>
    <center>
        <h2><img src="{{ URL::to('assets/img/ginkk.png') }}" width="100px" height="100px" alt="Logo" class="pull-left"> <b style="color:red;">GINK TECHNOLOGY</b>
            <h4>Connecting Your Business To The World</h4>
        </h2>
        <h4 style="font-size: 18px;">Enggal, Jl. Way Pengubuan No.16, Pahoman, Engal, Kota Bandar Lampung, Lampung 35132</h4>
        <hr style="width: 100%; border-width: 2px; color: black">
    </center>
    <h4>
        <b> Slip Gaji Karyawan</b>
    </h4>
    <hr style="width: 100%; border-width: 2px; color: black">
    <table>
        <tr>
            <td width="10%">Nama Perusahaan </td>
            <td width="1%"> : </td>
            <td width="70%">CV. Gink Technology</td>
        </tr>
        <tr>
            <td width="10%">Periode </td>
            <td width="1%"> : </td>
            <td width="70%"></td>
        </tr>
        <tr>
            <td width="10%">Nama Karyawan </td>
            <td width="1%"> : </td>
            <td width="70%"></td>
        </tr>
        <tr>
            <td width="10%">Jabatan </td>
            <td width="1%"> : </td>
            <td width="70%"></td>
        </tr>
        <tr>
            <td width="10%">Divisi </td>
            <td width="1%"> : </td>
            <td width="70%"></td>
        </tr>
    </table>
    <hr style="width: 100%; border-width: 2px; color: black">
    <h4>
        <b> Penerimaan</b>
    </h4>
    <hr style="width: 100%; border-width: 2px; color: black">
    <table>
        <tr>
            <td width="10%">Gaji Pokok </td>
            <td width="1%"> : </td>
            <td width="70%">Rp. </td>
        </tr>
        <tr>
            <td width="10%">Tunjangan Jabatan </td>
            <td width="1%"> : </td>
            <td width="70%">Rp. </td>
        </tr>
        <tr>
            <td width="10%">Potongan Absensi </td>
            <td width="1%"> : </td>
            <td width="70%">Rp. </td>
        </tr>
        <tr>
            <td width="10%">Bonus </td>
            <td width="1%"> : </td>
            <td width="70%">Rp. </td>
        </tr>
    </table>
    <hr style="width: 100%; border-width: 2px; color: black">
    <h4 style="text-align: center;">
        <b> Total Penerimanan Bersih : Rp.</b>
    </h4>
    <hr style="width: 100%; border-width: 2px; color: black">

    <table width="100%">
        <tr>
            <td></td>
            <td>
                <p>Admin</p>
                <br>
                <br>
                <p>___________________</p>
            </td>

            <td width="200px">
                <p>Bandar Lampung <?php echo date("d M Y") ?> <br> Mentari Puji Lestari,</p>
                <br>
                <br>
                <p>___________________</p>
            </td>
        </tr>
    </table>
</body>

</html>

<script type="text/javascript">
    window.print();
</script>