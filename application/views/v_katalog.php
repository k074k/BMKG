<!--Judul-->
<div class="container" style=" background-color: white;margin-top: 70px">
    <div class="container" style="margin-left:45px;">
        <div class="row">
            <h3>Layanan Online</h3>
        </div>
    </div>
</div>
<!--Tanggal dan Bulan-->
<div class="container" style="background-color: white; padding-top: 25px;">
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
<!-- Pilih Data -->
<div class="container" style="background-color: white; padding-top: 25px;margin-bottom: 75px;">
  <h2>Form Permintaan Data Online</h2>
  <div class="col-lg-12" style="padding-top: 25px;">
    <div class="col-lg-2">
      <form role="form">
        <div class="form-group">
          <select class="form-control">
            <option>--Jenis Data--</option>
            <option>Data Gempa</option>
            <option>Data Petir</option>
            <option>Data Angin</option>
            <option>Data Harian Hujan</option>
            <option>Data Suhu</option>
            <option>Data Kelembapan</option>
            <option>Lama penyinaran</option>
            <option>Arah/Kecepatan Angin</option>
            <option>Data Penguapan</option>
            <option>Data Curah Hujan</option>
            <option>Data Intensitas Hujan</option>
          </select>
        </div>
      </form>
    </div>
    <div class="col-lg-2">
      <form role="form">
        <div class="form-group">
          <select class="form-control">
            <option>--Mulai Hari--</option>
          </select>
        </div>
      </form>
    </div>
    <div class="col-lg-2">
      <form role="form">
        <div class="form-group">
          <select class="form-control">
            <option>--Sampai Hari--</option>
          </select>
        </div>
      </form>
    </div>
    <div class="col-lg-2">
      <form role="form">
        <div class="form-group">
          <input class="form-control" type="text" disabled="disabled" value="Rp.10000">
        </div>
      </form>
    </div>
    <div class="col-lg-2">
      <form role="form">
        <div class="form-group">
          <span class="glyphicon glyphicon-remove-circle" style="font-size:24px;">
        </div>
      </form>
    </div>
  </div>
  <div class="col-lg-12" style="padding-top: 25px;">
    <div class="col-lg-6">
      <form role="form">
        <div class="form-group">
          <span class="glyphicon glyphicon-plus-sign" style="font-size:24px;margin-left:50%;">
        </div>
      </form>
    </div>
    <div class="col-lg-2">
      <form role="form">
        <div class="form-group">
          <input class="form-control" type="text" disabled="disabled" value="Rp.10000">
        </div>
      </form>
    </div>
    <div class="col-lg-2">
      <form role="form">
        <div class="btn-group">
          <a type="submit" style="height:50" class="btn btn-default dropdown-toggle" aria-expanded="false" href="<?php echo base_url('publikasi/pemesanan');?>">Lanjutkan</a>
        </div>
      </form>
    </div>
  </div>
</div>
