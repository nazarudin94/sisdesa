 <?php $this->load->view('template/templatecss'); ?>


 <div class="container">
 	<div class="row justify-content-center align-items-center">
 		<div class="card mt-2">
 			<div class="card-body">
 				<div class="col-md-12 ">
 					<center>
 						<h3>DATA PENDUDUK</h3><br>
 					</center>
 					<div class="row">
 						<div class="col-md-12">
 							<div class="row">
 								<div class="col-md-6" style="border-bottom: 1px">
 									<table>
 										<tbody><tr>
 											<td><strong>Kepala Keluarga</strong></td>
 											<td>:</td>
 											<td >Nazarudin Latif</td>
 											<td></td>
 										</tr>
 										<tr>
 											<td><strong>No.Kartu Keluarga</strong></td>
 											<td>:</td>
 											<td >3564785909847589</td>
 											<td></td>
 										</tr>
 										<tr >
 											<td><strong>NIK</strong></td>
 											<td>:</td>
 											<td >3767847656746464</td>
 											<td></td>
 										</tr>
 										<tr ng-show="resume.pendaftaran.bisaPilih" class="">
 											<td><strong>Tempat Lahir</strong></td>
 											<td>:</td>
 											<td >Garut
 											</td>
 											<td></td>
 										</tr>
 										<tr ng-show="resume.pendaftaran.bisaPilih" class="">
 											<td><strong>Tanggal Lahir</strong></td>
 											<td>:</td>
 											<td >17/01/1994</td>
 											<td></td>
 										</tr>
 										<tr ng-show="resume.pendaftaran.bisaPilih" class="">
 											<td><strong>Alamat Keluarga</strong></td>
 											<td>:</td>
 											<td ng-show="resume.pendaftaran.lokasiTest != null" >
 												Jl.Ciganitri Desa Cipagalo Kec.Bojongsoang Kab.Bandung 
 											</td>
 										</tr>
 										<tr ng-show="resume.pendaftaran.bisaPilih" class="">
 											<td><strong>RT/RW</strong></td>
 											<td>:</td>
 											<td ng-show="resume.pendaftaran.lokasiTest != null" >
 												06/02
 											</td>
 										</tr>
 									</tbody></table>
 									<br>

 								</div>
 								<div class="col-md-6" style="border-bottom: 1px">
 									<table>
 										<tbody><tr>
 											<td><strong>Golongan Darah</strong></td>
 											<td>:</td>
 											<td >B</td>
 											<td></td>
 										</tr>
 										<tr>
 											<td><strong>Pendidikan Terakhir</strong></td>
 											<td>:</td>
 											<td >S1</td>
 											<td></td>
 										</tr>
 										<tr >
 											<td><strong>Pekerjaan</strong></td>
 											<td>:</td>
 											<td >Karyawan Swasta</td>
 											<td></td>
 										</tr>
 										<tr ng-show="resume.pendaftaran.bisaPilih" class="">
 											<td><strong>Tlp/Wa</strong></td>
 											<td>:</td>
 											<td >081224207029
 											</td>
 										</tr>

 									</tbody>
 								</table>
 								<br>

 							</div>
 						</div>
 						<div class="row">
 							<div class="col-md-6">
 								<table>
 									<tbody>
 										<tr><td><strong>Hubungan Keluarga</strong></td>
 										</tr>
 										<tr>
 											<td><strong>Nama</strong></td>
 											<td>:</td>
 											<td >Nur Irma Juliani</td>
 											<td></td>
 										</tr>
 										<tr>
 											<td><strong>NIK</strong></td>
 											<td>:</td>
 											<td >8765656787656765</td>
 											<td></td>
 										</tr>
 										<tr>
 											<td><strong>Hubungan Keluarga</strong></td>
 											<td>:</td>
 											<td >Istri</td>
 											<td></td>
 										</tr>
 										<tr>
 											<td><strong>Tempat Lahir</strong></td>
 											<td>:</td>
 											<td >CIAMIS</td>
 											<td></td>
 										</tr>
 										<tr>
 											<td><strong>Tanggal Lahir</strong></td>
 											<td>:</td>
 											<td >10-07-1995</td>
 											<td></td>
 										</tr>
 										<tr>
 											<td><strong>Golongan Darah</strong></td>
 											<td>:</td>
 											<td >O</td>
 											<td></td>
 										</tr>
 										<tr ng-show="state.pendidikanKuliah==true &amp;&amp; resume.pendaftaran.jenisPengadaan.id == '2'" class="">
 											<td><strong>Pendidikan Terakhir</strong></td>
 											<td>:</td>
 											<td ng-show="resume.pendaftaran.akreditasiPTOtomatis != null" >
 												S1
 											</td>
 											<td></td>
 										</tr>
 										<tr>
 											<td><strong>Pekerjaan</strong></td>
 											<td>:</td>
 											<td >Ibu Rumah Tangga</td>
 											<td></td>
 										</tr>
 										<tr ng-show="state.pendidikanKuliah==true &amp;&amp; resume.pendaftaran.jenisPengadaan.id == '2'" class="">
 											<td><strong>Tlp</strong></td>
 											<td>:</td>
 											<td ng-show="resume.pendaftaran.akreditasiProdiOtomatis != null" class="ng-binding ng-hide">
 												08122738474
 											</td>
 											<td></td>
 										</tr>


 									</tbody>
 								</table>
 							</div>
 							<div class="col-md-6">
 								<table>
 									<tbody>
 										<tr>
 											<td><strong>Nama</strong></td>
 											<td>:</td>
 											<td >Nur Irma Juliani</td>
 											<td></td>
 										</tr>
 										<tr>
 											<td><strong>NIK</strong></td>
 											<td>:</td>
 											<td >8765656787656765</td>
 											<td></td>
 										</tr>
 										<tr>
 											<td><strong>Hubungan Keluarga</strong></td>
 											<td>:</td>
 											<td >Istri</td>
 											<td></td>
 										</tr>
 										<tr>
 											<td><strong>Tempat Lahir</strong></td>
 											<td>:</td>
 											<td >CIAMIS</td>
 											<td></td>
 										</tr>
 										<tr>
 											<td><strong>Tanggal Lahir</strong></td>
 											<td>:</td>
 											<td >10-07-1995</td>
 											<td></td>
 										</tr>
 										<tr>
 											<td><strong>Golongan Darah</strong></td>
 											<td>:</td>
 											<td >O</td>
 											<td></td>
 										</tr>
 										<tr ng-show="state.pendidikanKuliah==true &amp;&amp; resume.pendaftaran.jenisPengadaan.id == '2'" class="">
 											<td><strong>Pendidikan Terakhir</strong></td>
 											<td>:</td>
 											<td ng-show="resume.pendaftaran.akreditasiPTOtomatis != null" >
 												S1
 											</td>
 											<td></td>
 										</tr>
 										<tr>
 											<td><strong>Pekerjaan</strong></td>
 											<td>:</td>
 											<td >Ibu Rumah Tangga</td>
 											<td></td>
 										</tr>
 										<tr ng-show="state.pendidikanKuliah==true &amp;&amp; resume.pendaftaran.jenisPengadaan.id == '2'" class="">
 											<td><strong>Tlp</strong></td>
 											<td>:</td>
 											<td ng-show="resume.pendaftaran.akreditasiProdiOtomatis != null" class="ng-binding ng-hide">
 												08122738474
 											</td>
 											<td></td>
 										</tr>

 									</tbody>
 								</table>

 								<input name="status" value="sudah_diakhiri" type="hidden" autocomplete="off">
 							</div>

 						</div>
 						<div class="row">
 							<div class="col-md-5">
 								<table>
 									<tbody>
 										<tr>
 											<td><strong>Jenis Bantuan</strong></td>
 											<td>:</td>
 											<td>PKH</td>
 											<td></td>
 										</tr>
 										<tr>
 											<td><strong>Kepemilikan Rumah</strong></td>
 											<td>:</td>
 											<td >Milik Sendiri</td>
 											<td></td>
 										</tr>
 										<tr>
 											<td><strong>Jenis Rumah</strong></td>
 											<td>:</td>
 											<td >Permanen</td>
 											<td></td>
 										</tr>
 										<tr>
 											<td><strong>Bukti Kepemilikan</strong></td>
 											<td>:</td>
 											<td >Sertifikat Rumah</td>
 											<td></td>
 										</tr>
 										<tr>
 											<td><strong>Pekarangan Ruman</strong></td>
 											<td>:</td>
 											<td >Ada</td>
 											<td></td>
 										</tr>
 										<tr ng-show="resume.pendaftaran.lokasiKerja.keteranganPendidikan != null" class="ng-hide">
 											<td><strong>Luas Pekarangan</strong></td>
 											<td>:</td>
 											<td >500 M2</td>
 											<td></td>
 										</tr>
 										<tr ng-show="resume.pendaftaran.jenisPengadaan.id == '1'" class="ng-hide">
 											<td><strong>Tanaman di pekarangan</strong></td>
 											<td>:</td>
 											<td ng-show="resume.pendaftaran.dapodik.kodeBidangStudiSertifikasi != null " class="ng-binding ng-hide">
 												Ada
 											</td>

 										</tr>
 										<tr>
 											<td><strong>Jenis Tanaman</strong></td>
 											<td>:</td>
 											<td >Tanaman Hias</td>
 											<td></td>
 										</tr>
 										<tr>
 											<td><strong>Listrik</strong></td>
 											<td>:</td>
 											<td >KWH</td>
 											<td></td>
 										</tr>
 										<tr>
 											<td><strong>Besar KWH</strong></td>
 											<td>:</td>
 											<td >1300W</td>
 											<td></td>
 										</tr>
 										<tr>
 											<td><strong>Biaya Listrik</strong></td>
 											<td>:</td>
 											<td >RP.130.000</td>
 											<td></td>
 										</tr>
 										<tr>
 											<td><strong>Kuota/Pulsa Keluarga /Bulan</strong></td>
 											<td>:</td>
 											<td >Rp.500.000</td>
 											<td></td>
 										</tr>
 										<tr>
 											<td><strong>Sumber Air</strong></td>
 											<td>:</td>
 											<td > PDAM</td>
 											<td></td>
 										</tr>
 										<tr>
 											<td><strong>Bayar PDAM/Bulan</strong></td>
 											<td>:</td>
 											<td >Rp.200.000</td>
 											<td></td>
 										</tr>


 									</tbody>
 								</table>
 							</div>
 							<div class="col-md-7">
 								<table>
 									<tbody>
 										<tr>
 											<td><strong>Konsumsi Beras /Bulan</strong></td>
 											<td>:</td>
 											<td >20Kg, <strong>Stok Beras</strong> Ada</td>
 											<td></td>
 										</tr	>
 										<tr>
 											<td><strong>Konsumsi Minyak Goreng /Bulan</strong></td>
 											<td>:</td>
 											<td >20L, <strong>Stok Minyak</strong> Ada</td>
 											<td></td>
 										</tr>
 										<tr>
 											<td><strong>Konsumsi Gula Pasir /Bulan</strong></td>
 											<td>:</td>
 											<td >1Kg, <strong>Stok Gula</strong> Ada</td>
 											<td></td>
 										</tr>
 										<tr>
 											<td><strong>Konsumsi Telur /Bulan</strong></td>
 											<td>:</td>
 											<td >5Kg, <strong>Stok Telur</strong> Ada</td>
 											<td></td>
 										</tr>
 										<tr>
 											<td><strong>Konsumsi Daging /Bulan</strong></td>
 											<td>:</td>
 											<td >5Kg, <strong>Stok Daging</strong> Ada</td>
 											<td></td>
 										</tr>
 										<tr ng-show="resume.pendaftaran.lokasiKerja.keteranganPendidikan != null" class="ng-hide">
 											<td><strong>Sawah</strong></td>
 											<td>:</td>
 											<td >500 M2</td>
 											<td></td>
 										</tr>
 										<tr ng-show="resume.pendaftaran.jenisPengadaan.id == '1'" class="ng-hide">
 											<td><strong>Ladang</strong></td>
 											<td>:</td>
 											<td ng-show="resume.pendaftaran.dapodik.kodeBidangStudiSertifikasi != null " class="ng-binding ng-hide">
 												40ha
 											</td>

 										</tr>
 										<tr>
 											<td><strong>Tegalan</strong></td>
 											<td>:</td>
 											<td >30ha</td>
 											<td></td>
 										</tr>
 										<tr>
 											<td><strong>Kolam Ikan</strong></td>
 											<td>:</td>
 											<td >20ha</td>
 											<td></td>
 										</tr>
 										<tr>
 											<td><strong>Jenis Tanaman yang dibudidayakan</strong></td>
 											<td>:</td>
 											<td >Hias</td>
 											<td></td>
 										</tr>
 										<tr>
 											<td><strong>Jenis Ternak yang dibudidayakan</strong></td>
 											<td>:</td>
 											<td >Kambing</td>
 											<td></td>
 										</tr>
 										<tr>
 											<td><strong>UMKM/Industri Kreatif</strong></td>
 											<td>:</td>
 											<td >Rp.500.000</td>
 											<td></td>
 										</tr>
 										<tr>
 											<td><strong>Jenis</strong></td>
 											<td>:</td>
 											<td >Rajut</td>
 											<td></td>
 										</tr>
 										<tr>
 											<td><strong>Omset Perbulan</strong></td>
 											<td>:</td>
 											<td >Rp.200.000</td>
 											<td></td>
 										</tr>

 									</tbody>
 								</table>

 								<input name="status" value="sudah_diakhiri" type="hidden" autocomplete="off">
 							</div>

 						</div>
 					</div>
 				</div>
 			</div>   
 		</div>
 	</div>
 </div>  
</div>
<?php $this->load->view('template/templatejs'); ?>