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
    <div class="container" style="padding-top: 25px; margin-bottom: 50px">
        <div class="col-lg-12" >
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
</div>


<!-- Koding icon Circle X -->
<!-- <span class="glyphicon glyphicon-remove-circle" style="font-size:24px;"> -->
