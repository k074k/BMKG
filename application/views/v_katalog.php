<!--Judul-->
<div class="container" style="margin-top: 70px">
    <div class="container" style="margin-left:45px;">
        <div class="row">
            <h3>Layanan Online</h3>
        </div>
    </div>
</div>
<!--Tanggal dan Bulan-->
<div class="col-lg-12" style="background-color: white; margin-top: 25px; box-shadow: 1px 1px 1px;">
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
            <input type="submit" style="height:54px" class="btn btn-default dropdown-toggle" aria-expanded="false" value="Search">
            </a>
        </div>
    </div>
    </form>
</div>
<!--Tabel-->
<div style="margin-top:25px;">
    <table style="border:1px solid;">
      <thead style="border:1px solid;">
        <tr style="border:1px solid;">
          <th style="border:1px solid;"rowspan="2">Jenis</th>
          <th style="border:1px solid;"colspan="31">Bulan</th>
        </tr>
        <tr style="border:1px solid;">
          <?php for($i = 1; $i <= 31; $i++)
          {?>
            <th style="border:1px solid;"><?php echo $i?></th>
          <?php }?>
        </tr>
      </thead>
      <tbody style="border:1px solid;">
        <tr style="border:1px solid;">
          <td style="border:1px solid;">Data</td>
          <?php for($i = 1; $i <= 31; $i++)
          {?>
            <th style="border:1px solid;">V</th>
          <?php }?>
        </tr>

      </tbody>
    </table>
</div>
</div>
