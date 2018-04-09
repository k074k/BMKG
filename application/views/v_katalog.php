<!--Judul-->
<div class="container" style=" background-color: white;margin-top: 70px">
    <div class="container" style="margin-left:45px;">
        <div class="row">
            <h3>Layanan Online</h3>
        </div>
    </div>
</div>
<!--Tanggal dan Bulan-->
<div class="container" style="background-color: white; padding-top: 25px ">
  <div class="btn-group m-r-sm mail-hidden-options" style="display: inline-block;">
      <form action="#" method="post">
        <div class="btn-group">
            <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                <select name="slc_bulan" id="slc_bulan" class="form-control1">
                    <option value="">Bulan</option>
                </select>
            </a>
        </div>
        <div class="btn-group">
            <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                <select name="slc_tahun" id="slc_tahun" class="form-control1">
                    <option value="">Tahun</option>
                </select>
            </a>
        </div>
        <div class="btn-group">
            <input type="submit" style="height:50" class="btn btn-default dropdown-toggle" aria-expanded="false" value="Search">
            </a>
        </div>
    </div>
    <!--Tabel-->
    <div class="table-responsive" style="margin-top:25px;">
    </form>
    <table class="table">
      <!--Table Head-->
      <thead>
        <tr>
          <th rowspan="2">Jenis Data</th>
          <th colspan="31">Bulan : Tahun</th>
        </tr>
        <tr>
          <?php for($i = 1; $i <= 31; $i++)
          {?>
            <th ><?php echo $i?></th>
          <?php }?>
        </tr>
      </thead>
      <!--Table Body-->
      <tbody >
        <!--Data Gempa-->
        <tr>
          <td>Data Gempa</td>
          <?php for($i = 1; $i <= 31; $i++)
          {?>
            <th ><span class="glyphicon glyphicon-ok-circle" style="font-size:14px;color:green"></span></th>
          <?php }?>
        </tr>
        <!--Data Petir-->
        <tr>
          <td>Data Petir</td>
          <?php for($i = 1; $i <= 31; $i++)
          {?>
            <th ><span class="glyphicon glyphicon-ok-circle" style="font-size:14px;color:green"></span></th>
          <?php }?>
        </tr>
        <!--Data Angin-->
        <tr>
          <td>Data Angin</td>
          <?php for($i = 1; $i <= 31; $i++)
          {?>
            <th ><span class="glyphicon glyphicon-ok-circle" style="font-size:14px;color:green"></span></th>
          <?php }?>
        </tr>
        <!--Data Hari Hujan-->
        <tr>
          <td>Data Harian Hujan</td>
          <?php for($i = 1; $i <= 31; $i++)
          {?>
            <th ><span class="glyphicon glyphicon-ok-circle" style="font-size:14px;color:green"></span></th>
          <?php }?>
        </tr>
        <!--Data Suhu-->
        <tr>
          <td>Data Suhu</td>
          <?php for($i = 1; $i <= 31; $i++)
          {?>
            <th ><span class="glyphicon glyphicon-ok-circle" style="font-size:14px;color:green"></span></th>
          <?php }?>
        </tr>
        <!--Data Kelembapan-->
        <tr>
          <td>Data Kelembapan</td>
          <?php for($i = 1; $i <= 31; $i++)
          {?>
            <th ><span class="glyphicon glyphicon-ok-circle" style="font-size:14px;color:green"></span></th>
          <?php }?>
        </tr>
        <!--Lama Penyinaran-->
        <tr>
          <td>Lama penyinaran</td>
          <?php for($i = 1; $i <= 31; $i++)
          {?>
            <th ><span class="glyphicon glyphicon-ok-circle" style="font-size:14px;color:green"></span></th>
          <?php }?>
        </tr>
        <!--Arah/Kecepatan Angin-->
        <tr>
          <td>Arah/Kecepatan Angin</td>
          <?php for($i = 1; $i <= 31; $i++)
          {?>
            <th ><span class="glyphicon glyphicon-ok-circle" style="font-size:14px;color:green"></span></th>
          <?php }?>
        </tr>
        <!--Data Penguapan-->
        <tr>
          <td>Data Penguapan</td>
          <?php for($i = 1; $i <= 31; $i++)
          {?>
            <th ><span class="glyphicon glyphicon-ok-circle" style="font-size:14px;color:green"></span></th>
          <?php }?>
        </tr>
        <!--Data Curah Hujan-->
        <tr>
          <td>Data Curah Hujan</td>
          <?php for($i = 1; $i <= 31; $i++)
          {?>
            <th ><span class="glyphicon glyphicon-ok-circle" style="font-size:14px;color:green"></span></th>
          <?php }?>
        </tr>
        <!--Data Intensitas Hujan-->
        <tr>
          <td>Data Intensitas Hujan</td>
          <?php for($i = 1; $i <= 31; $i++)
          {?>
            <th ><span class="glyphicon glyphicon-ok-circle" style="font-size:14px;color:green"></span></th>
          <?php }?>
        </tr>
      </tbody>
    </table>
</div>
</div>

<!-- Koding icon Circle X -->
<!-- <span class="glyphicon glyphicon-remove-circle" style="font-size:24px;"> -->
