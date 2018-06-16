<!--Judul-->
<div class="container" style="margin-top: 70px">
    <div class="container" style="margin-left:45px;">
        <div class="row">
            <h3>Layanan Online</h3>
        </div>
    </div>
</div>
<!-- Pilih Data -->
<div class="container" style="background-color: white;margin-top: 2%; margin-bottom:70px;">

    <div class="col-lg-12" style="margin-bottom: 1%">
      <h3>Pemesanan Data</h3>
    </div>
    <div class="col-lg-12" style="margin-bottom: 1%">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#hari" data-toggle="tab">Data Harian</a></li>
            <li><a href="#bulan" data-toggle="tab">Data Bulanan</a></li>
            <li><a href="#tahun" data-toggle="tab">Data Tahunan</a></li>
        </ul>
    </div>

    <div class="tab-content">
      <script>
        //Hitung Harian
        function startharian(){
          interval = setInterval("harian()",1);}
        function harian(){
          harga = document.harian.txtHarian.value;
          jenis = document.harian.txtJenis.value;
          document.harian.txtHarga.value = (harga*1) * (jenis*1);}
        function stopharian(){
          clearInterval(interval);}

        //Hitung Bulanan
        function startbulanan(){
          interval = setInterval("bulanan()",1);}
        function bulanan(){
          harga = document.bulanan.txtBulanan.value;
          jenis = document.bulanan.txtJenis.value;
          document.bulanan.txtHarga.value = (harga*1) * (jenis*1);}
        function stopbulanan(){
          clearInterval(interval);}

          //Hitung Tahunan
          function starttahunan(){
            interval = setInterval("tahunan()",1);}
          function tahunan(){
            tahunM = document.tahunan.tahunM.value;
            tahunA = document.tahun.tahunA.value;
            jenis = document.tahunan.txtJenis.value;
            document.tahunan.txtHarga.value = (jenis*1) + ((tahunA*1) - (tahunM*1));}
          function stoptahunan(){
            clearInterval(interval);}
      </script>
        <!--Permintaan Harian-->
        <div id="hari" class="tab-pane fade in active">
            <div class="col-lg-12" style="margin-bottom: 1%">
              <form name='harian' action="<?php echo base_url('publikasi/pemesanan'); ?>" method="post">
                <table class="table" id="tblAddRow">
                    <thead>
                        <tr>
                            <th style="text-align:center;">Jenis Data</th>
                            <th style="text-align:center;">Tanggal Mulai</th>
                            <th style="text-align:center;">Jumlah Hari</th>
                            <th style="text-align:center;">Harga</th>
                            <th><input type="checkbox" id="checkedAll" style="width: 20px; height: 20px"></th>
                        </tr>
                    </thead>
                      <tbody>
                          <tr>
                              <td>
                                  <select name="txtJenis"class="form-group form-control">
                                      <option>--Jenis Data--</option>
                                      <option value="10000"  onfocus="startharian();" onblur="stopharian();">Data Gempa</option>
                                      <option value="10000"  onfocus="startharian();" onblur="stopharian();">Data Petir</option>
                                      <option value="10000"  onfocus="startharian();" onblur="stopharian();">Data Angin</option>
                                      <option value="10000"  onfocus="startharian();" onblur="stopharian();">Data Harian Hujan</option>
                                      <option value="10000"  onfocus="startharian();" onblur="stopharian();">Data Suhu</option>
                                      <option value="10000"  onfocus="startharian();" onblur="stopharian();">Data Kelembapan</option>
                                      <option value="10000"  onfocus="startharian();" onblur="stopharian();">Lama penyinaran</option>
                                      <option value="10000"  onfocus="startharian();" onblur="stopharian();">Arah/Kecepatan Angin</option>
                                      <option value="10000"  onfocus="startharian();" onblur="stopharian();">Data Penguapan</option>
                                      <option value="10000"  onfocus="startharian();" onblur="stopharian();">Data Curah Hujan</option>
                                      <option value="10000"  onfocus="startharian();" onblur="stopharian();">Data Intensitas Hujan</option>
                                  </select>
                              </td>
                              <td><input name="txtDate" type="date" class="form-group form-control"></td>
                              <td><input name="txtHarian" type="text" class="form-group form-control" onfocus="startharian();" onblur="stopharian();"></td>
                              <td><input name="txtHarga" type="readonly" class="form-group form-control" disabled="disabled"value="0"/></td>
                              <td><input name="ckcDel" type="checkbox" class="form-group form-control " style="width: 20px; height: 20px"></td>
                          </tr>
                      </tbody>
                      <thead>
                          <tr>
                              <td style="text-align:center;"></td>
                              <td style="text-align:center;"></td>
                              <td style="text-align:right;"><h4>Total Harga :</h4></td>
                              <td style="text-align:center;"><input name="txtTotal" type="input" class="form-group form-control" disabled="disabled"></td>
                              <td></td>
                          </tr>
                      </thead>
                    <thead>
                        <tr>
                            <td>
                                <span class="btn btn-primary" id="btnAddRow">Tambah Data</span>
                                <span class="btn btn-danger" id="btnDelCheckRow">Hapus Data</span>
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><button type="submit" class="btn btn-primary glyphicon glyphicon-menu-right" name="nextHarian"></button></td>
                        </tr>
                    </thead>
                </table>
              </form>
            </div>
        </div>

        <!--Permintaan Bulanan-->
        <div id="bulan" class="tab-pane fade">
            <div class="col-lg-12" style="margin-bottom: 1%">
              <form name="bulanan" action="<?php echo base_url('publikasi/pemesanan'); ?>" method="post">
                <table class="table" id="tblAddRow2">
                    <thead>
                        <tr>
                            <th style="text-align:center;">Jenis Data</th>
                            <th style="text-align:center;">Bulan Mulai</th>
                            <th style="text-align:center;">Tahun Akhir</th>
                            <th style="text-align:center;">Jumlah Bulan</th>
                            <th style="text-align:center;">Harga</th>
                            <th><input type="checkbox" id="checkedAll2" style="width: 20px; height: 20px"></th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <select name="txtJenis" class="form-group form-control">
                                  <option>--Jenis Data--</option>
                                  <option value="100000"  onfocus="startbulanan();" onblur="stopbulanan();">Data Gempa</option>
                                  <option value="100000"  onfocus="startbulanan();" onblur="stopbulanan();">Data Petir</option>
                                  <option value="100000"  onfocus="startbulanan();" onblur="stopbulanan();">Data Angin</option>
                                  <option value="100000"  onfocus="startbulanan();" onblur="stopbulanan();">Data Harian Hujan</option>
                                  <option value="100000"  onfocus="startbulanan();" onblur="stopbulanan();">Data Suhu</option>
                                  <option value="100000"  onfocus="startbulanan();" onblur="stopbulanan();">Data Kelembapan</option>
                                  <option value="100000"  onfocus="startbulanan();" onblur="stopbulanan();">Lama penyinaran</option>
                                  <option value="100000"  onfocus="startbulanan();" onblur="stopbulanan();">Arah/Kecepatan Angin</option>
                                  <option value="100000"  onfocus="startbulanan();" onblur="stopbulanan();">Data Penguapan</option>
                                  <option value="100000"  onfocus="startbulanan();" onblur="stopbulanan();">Data Curah Hujan</option>
                                  <option value="100000"  onfocus="startbulanan();" onblur="stopbulanan();">Data Intensitas Hujan</option>
                                </select>
                            </td>
                            <td>
                                <select name="Bulan" class="form-group form-control">
                                    <option>--Pilih Bulan--</option>
                                    <option value="01" onfocus="startbulanan();" onblur="stopbulanan();">Januari</option>
                                    <option value="02" onfocus="startbulanan();" onblur="stopbulanan();">Februari</option>
                                    <option value="03" onfocus="startbulanan();" onblur="stopbulanan();">Maret</option>
                                    <option value="04" onfocus="startbulanan();" onblur="stopbulanan();">April</option>
                                    <option value="05" onfocus="startbulanan();" onblur="stopbulanan();">Mei</option>
                                    <option value="06" onfocus="startbulanan();" onblur="stopbulanan();">Juni</option>
                                    <option value="07" onfocus="startbulanan();" onblur="stopbulanan();">Juli</option>
                                    <option value="08" onfocus="startbulanan();" onblur="stopbulanan();">Agustus</option>
                                    <option value="09" onfocus="startbulanan();" onblur="stopbulanan();">September</option>
                                    <option value="10" onfocus="startbulanan();" onblur="stopbulanan();">Oktober</option>
                                    <option value="11" onfocus="startbulanan();" onblur="stopbulanan();">November</option>
                                    <option value="12" onfocus="startbulanan();" onblur="stopbulanan();">Desember</option>
                                </select>
                            </td>
                            <td>
                                <select name="Tahun" class="form-group form-control">
                                    <option>--Pilih Tahun--</option>
                                    <option value="06" onfocus="startbulanan();" onblur="stopbulanan();">2006</option>
                                    <option value="07" onfocus="startbulanan();" onblur="stopbulanan();">2007</option>
                                    <option value="08" onfocus="startbulanan();" onblur="stopbulanan();">2008</option>
                                    <option value="09" onfocus="startbulanan();" onblur="stopbulanan();">2009</option>
                                    <option value="10" onfocus="startbulanan();" onblur="stopbulanan();">2010</option>
                                    <option value="11" onfocus="startbulanan();" onblur="stopbulanan();">2011</option>
                                    <option value="12" onfocus="startbulanan();" onblur="stopbulanan();">2012</option>
                                    <option value="13" onfocus="startbulanan();" onblur="stopbulanan();">2013</option>
                                    <option value="14" onfocus="startbulanan();" onblur="stopbulanan();">2014</option>
                                    <option value="15" onfocus="startbulanan();" onblur="stopbulanan();">2015</option>
                                    <option value="16" onfocus="startbulanan();" onblur="stopbulanan();">2016</option>
                                    <option value="17" onfocus="startbulanan();" onblur="stopbulanan();">2017</option>
                                </select>
                            </td>
                            <td><input name="txtBulanan" type="input" class="form-group form-control" onfocus="startbulanan();" onblur="stopbulanan();"></td>
                            <td><input name="txtHarga" type="input" class="form-group form-control" disabled="disabled" value="0"></td>
                            <td><input name="ckcDel[]" type="checkbox" class="form-group form-control " style="width: 20px; height: 20px"></td>
                        </tr>
                    </tbody>
                    <thead>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td style="text-align:right;"><h4>Total Harga :</h4></td>
                            <td style="text-align:center;"><input name="txtName[]" type="input" class="form-group form-control" disabled="disabled"></td>
                            <td></td>
                        </tr>
                    </thead>
                    <thead>
                        <tr>
                            <td>
                                <span class="btn btn-primary" id="btnAddRow2">Tambah Data</span>
                                <span class="btn btn-danger" id="btnDelCheckRow2">Hapus Data</span>
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><button type="submit" class="btn btn-primary glyphicon glyphicon-menu-right" name="nextBulanan"></button></td>
                        </tr>
                    </thead>
                </table>
              </form>
            </div>
        </div>

        <!--Permintaan Tahunan-->
        <div id="tahun" class="tab-pane fade">
            <div class="col-lg-12" style="margin-bottom: 1%">
              <form name="tahunan" action="<?php echo base_url('publikasi/pemesanan'); ?>" method="post">
                <table class="table" id="tblAddRow3">
                    <thead>
                        <tr>
                            <th style="text-align:center;">Jenis Data</th>
                            <th style="text-align:center;">Tahun Mulai</th>
                            <th style="text-align:center;">Tahun Akhir</th>
                            <th style="text-align:center;">Harga</th>
                            <th><input type="checkbox" id="checkedAll3" style="width: 20px; height: 20px"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                              <select name="txtJenis" class="form-group form-control">
                                <option>--Jenis Data--</option>
                                <option value="500000"  onfocus="starttahunan();" onblur="stoptahunan();">Data Gempa</option>
                                <option value="500000"  onfocus="starttahunan();" onblur="stoptahunan();">Data Petir</option>
                                <option value="500000"  onfocus="starttahunan();" onblur="stoptahunan();">Data Angin</option>
                                <option value="500000"  onfocus="starttahunan();" onblur="stoptahunan();">Data Harian Hujan</option>
                                <option value="500000"  onfocus="starttahunan();" onblur="stoptahunan();">Data Suhu</option>
                                <option value="500000"  onfocus="starttahunan();" onblur="stoptahunan();">Data Kelembapan</option>
                                <option value="500000"  onfocus="starttahunan();" onblur="stoptahunan();">Lama penyinaran</option>
                                <option value="500000"  onfocus="starttahunan();" onblur="stoptahunan();">Arah/Kecepatan Angin</option>
                                <option value="500000"  onfocus="starttahunan();" onblur="stoptahunan();">Data Penguapan</option>
                                <option value="500000"  onfocus="starttahunan();" onblur="stoptahunan();">Data Curah Hujan</option>
                                <option value="500000"  onfocus="starttahunan();" onblur="stoptahunan();">Data Intensitas Hujan</option>
                              </select>
                            </td>
                            <td>
                                <select name="TahunM" class="form-group form-control">
                                    <option>--Pilih Tahun--</option>
                                    <option value="2018">2018</option>
                                    <option value="2017">2017</option>
                                    <option value="2016">2016</option>
                                    <option value="2015">2015</option>
                                    <option value="2014">2014</option>
                                </select>
                            </td>
                            <td>
                                <select  name="TahunA" class="form-group form-control">
                                    <option>--Pilih Tahun--</option>
                                    <option value="2018">2018</option>
                                    <option value="2017">2017</option>
                                    <option value="2016">2016</option>
                                    <option value="2015">2015</option>
                                    <option value="2014">2014</option>
                                </select>
                            </td>
                            <td><input id="harga" name="txtHarga" type="input" class="form-group form-control" disabled="disabled" value="0"></td>
                            <td><input name="ckcDel[]" type="checkbox" class="form-group form-control " style="width: 20px; height: 20px"></td>
                        </tr>
                    </tbody>
                    <thead>
                        <tr>
                            <td style="text-align:center;"></td>
                            <td style="text-align:center;"></td>
                            <td style="text-align:right;"><h4>Total Harga :</h4></td>
                            <td style="text-align:center;"><input name="txtName[]" type="input" class="form-group form-control" disabled="disabled"></td>
                            <td></td>
                        </tr>
                    </thead>
                    <thead>
                        <tr>
                            <td>
                                <span class="btn btn-primary" id="btnAddRow3">Tambah Data</span>
                                <span class="btn btn-danger" id="btnDelCheckRow3">Hapus Data</span>
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><button type="submit" class="btn btn-primary glyphicon glyphicon-menu-right" name="nextTahn"></button></td>
                        </tr>
                    </thead>
                </table>
              </form>
            </div>
        </div>
    </div>
</div>

<!--Tanggal dan Bulan-->
<div class="container" style="background-color: white; margin-top: 25px;">
    <div class="container" style="padding-top: 25px; margin-bottom: 50px">
        <div class="col-lg-12">
            <div class="col-lg-2">
                <form role="form">
                    <div class="form-group">
                        <select class="form-control">
                            <option>---- Pilih Bulan ----</option>
                            <option>Januari</option>
                            <option>Februari</option>
                            <option>Maret</option>
                            <option>April</option>
                            <option>Mei</option>
                            <option>Juni</option>
                            <option>Juli</option>
                            <option>Agustus</option>
                            <option>September</option>
                            <option>Oktober</option>
                            <option>November</option>
                            <option>Desember</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="col-lg-2">
                <form role="form">
                    <div class="form-group">
                        <select class="form-control">
                            <option>---- Pilih Tahun ----</option>
                            <option>2015</option>
                            <option>2016</option>
                            <option>2017</option>
                            <option>2018</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="col-lg-2">
              <form role="form">
              <div class="form-group">
                <a type="button" class="btn btn-default" href=" ">Search</a>
              </div>
              </form>
            </div>

            <table class="table table-striped" style="width: 100%;">
            <!--Table Head-->
                <thead>
                    <tr>
                        <th rowspan="2" style="text-align: center; padding-bottom: 2.5%; font-size: 16px">Jenis Data</th>
                        <th colspan="31" style="text-align: center">Bulan : Tahun</th>
                    </tr>
                    <tr>
                        <?php for($i = 1; $i <= 31; $i++)
                        {?>
                            <th><?php echo $i?></th>
                        <?php }?>
                    </tr>
                </thead>

            <!--Table Body-->
                <tbody>

            <!--Data Gempa-->
                    <tr>
                        <td>Data Gempa</td>
                        <?php for($i = 1; $i <= 31; $i++)
                        {?>
                        <th><span class="glyphicon glyphicon-ok-circle" style="font-size:14px;color:green"></span></th>
                        <?php }?>
                    </tr>

                    <!--Data Petir-->
                    <tr>
                        <td>Data Petir</td>
                        <?php for($i = 1; $i <= 31; $i++)
                        {?>
                        <th><span class="glyphicon glyphicon-ok-circle" style="font-size:14px;color:green"></span></th>
                        <?php }?>
                    </tr>

                    <!--Data Angin-->
                    <tr>
                        <td>Data Angin</td>
                        <?php for($i = 1; $i <= 31; $i++)
                        {?>
                        <th><span class="glyphicon glyphicon-ok-circle" style="font-size:14px;color:green"></span></th>
                        <?php }?>
                    </tr>

                    <!--Data Hari Hujan-->
                    <tr>
                        <td>Data Harian Hujan</td>
                        <?php for($i = 1; $i <= 31; $i++)
                        {?>
                        <th><span class="glyphicon glyphicon-ok-circle" style="font-size:14px;color:green"></span></th>
                        <?php }?>
                    </tr>

                    <!--Data Suhu-->
                    <tr>
                        <td>Data Suhu</td>
                        <?php for($i = 1; $i <= 31; $i++)
                        {?>
                        <th><span class="glyphicon glyphicon-ok-circle" style="font-size:14px;color:green"></span></th>
                        <?php }?>
                    </tr>

                    <!--Data Kelembapan-->
                    <tr>
                        <td>Data Kelembapan</td>
                        <?php for($i = 1; $i <= 31; $i++)
                        {?>
                        <th><span class="glyphicon glyphicon-ok-circle" style="font-size:14px;color:green"></span></th>
                        <?php }?>
                    </tr>

                    <!--Lama Penyinaran-->
                    <tr>
                        <td>Lama penyinaran</td>
                        <?php for($i = 1; $i <= 31; $i++)
                        {?>
                        <th><span class="glyphicon glyphicon-ok-circle" style="font-size:14px;color:green"></span></th>
                        <?php }?>
                    </tr>

                    <!--Arah/Kecepatan Angin-->
                    <tr>
                        <td>Arah/Kecepatan Angin</td>
                        <?php for($i = 1; $i <= 31; $i++)
                        {?>
                        <th><span class="glyphicon glyphicon-ok-circle" style="font-size:14px;color:green"></span></th>
                        <?php }?>
                    </tr>

                    <!--Data Penguapan-->
                    <tr>
                        <td>Data Penguapan</td>
                        <?php for($i = 1; $i <= 31; $i++)
                        {?>
                        <th><span class="glyphicon glyphicon-ok-circle" style="font-size:14px;color:green"></span></th>
                        <?php }?>
                    </tr>

                    <!--Data Curah Hujan-->
                    <tr>
                        <td>Data Curah Hujan</td>
                        <?php for($i = 1; $i <= 31; $i++)
                        {?>
                        <th><span class="glyphicon glyphicon-ok-circle" style="font-size:14px;color:green"></span></th>
                        <?php }?>
                    </tr>

                    <!--Data Intensitas Hujan-->
                    <tr>
                        <td>Data Intensitas Hujan</td>
                        <?php for($i = 1; $i <= 31; $i++)
                        {?>
                        <th><span class="glyphicon glyphicon-ok-circle" style="font-size:14px;color:green"></span></th>
                        <?php }?>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Koding icon Circle X -->
<!-- <span class="glyphicon glyphicon-remove-circle" style="font-size:24px;"> -->

<script>
  // For select all checkbox in table
  $('#checkedAll').click(function (e) {
  	//e.preventDefault();
      $(this).closest('#tblAddRow').find('td input:checkbox').prop('checked', this.checked);
  });

  $('#checkedAll2').click(function (e) {
  	//e.preventDefault();
      $(this).closest('#tblAddRow2').find('td input:checkbox').prop('checked', this.checked);
  });

  $('#checkedAll3').click(function (e) {
  	//e.preventDefault();
      $(this).closest('#tblAddRow3').find('td input:checkbox').prop('checked', this.checked);
  });

  // Add row the table
  $('#btnAddRow').on('click', function() {
      var lastRow = $('#tblAddRow tbody tr:last').html();
      //alert(lastRow);
      $('#tblAddRow tbody').append('<tr>' + lastRow + '</tr>');
      $('#tblAddRow tbody tr:last input').val('');
  });

  $('#btnAddRow2').on('click', function() {
      var lastRow = $('#tblAddRow2 tbody tr:last').html();
      //alert(lastRow);
      $('#tblAddRow2 tbody').append('<tr>' + lastRow + '</tr>');
      $('#tblAddRow2 tbody tr:last input').val('');
  });

  $('#btnAddRow3').on('click', function() {
      var lastRow = $('#tblAddRow3 tbody tr:last').html();
      //alert(lastRow);
      $('#tblAddRow3 tbody').append('<tr>' + lastRow + '</tr>');
      $('#tblAddRow3 tbody tr:last input').val('');
  });

  // Delete row on click in the table
  $('#tblAddRow').on('click', 'tr a', function(e) {
      var lenRow = $('#tblAddRow tbody tr').length;
      e.preventDefault();
      if (lenRow == 1 || lenRow <= 1) {
          alert("Can't remove all row!");
      } else {
          $(this).parents('tr').remove();
      }
  });

  $('#tblAddRow2').on('click', 'tr a', function(e) {
      var lenRow = $('#tblAddRow2 tbody tr').length;
      e.preventDefault();
      if (lenRow == 1 || lenRow <= 1) {
          alert("Can't remove all row!");
      } else {
          $(this).parents('tr').remove();
      }
  });

  $('#tblAddRow3').on('click', 'tr a', function(e) {
      var lenRow = $('#tblAddRow3 tbody tr').length;
      e.preventDefault();
      if (lenRow == 1 || lenRow <= 1) {
          alert("Can't remove all row!");
      } else {
          $(this).parents('tr').remove();
      }
  });

  // Delete selected checkbox in the table
  $('#btnDelCheckRow').click(function() {
  	var lenRow		= $('#tblAddRow tbody tr').length;
      var lenChecked	= $("#tblAddRow input[type='checkbox']:checked").length;
      var row	= $("#tblAddRow tbody input[type='checkbox']:checked").parent().parent();
      //alert(lenRow + ' - ' + lenChecked);
      if (lenRow == 1 || lenRow <= 1 || lenChecked>= lenRow) {
          alert("Can't remove all row!");
      } else {
          row.remove();
      }
  });

  $('#btnDelCheckRow2').click(function() {
  	var lenRow		= $('#tblAddRow2 tbody tr').length;
      var lenChecked	= $("#tblAddRow2 input[type='checkbox']:checked").length;
      var row	= $("#tblAddRow2 tbody input[type='checkbox']:checked").parent().parent();
      //alert(lenRow + ' - ' + lenChecked);
      if (lenRow == 1 || lenRow <= 1 || lenChecked>= lenRow) {
          alert("Can't remove all row!");
      } else {
          row.remove();
      }
  });

  $('#btnDelCheckRow3').click(function() {
  	var lenRow		= $('#tblAddRow3 tbody tr').length;
      var lenChecked	= $("#tblAddRow3 input[type='checkbox']:checked").length;
      var row	= $("#tblAddRow3 tbody input[type='checkbox']:checked").parent().parent();
      //alert(lenRow + ' - ' + lenChecked);
      if (lenRow == 1 || lenRow <= 1 || lenChecked>= lenRow) {
          alert("Can't remove all row!");
      } else {
          row.remove();
      }
  });
</script>
