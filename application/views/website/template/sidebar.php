 <ul class="spinner">
			<i class="spinner_icon"> </i>
			<li class="spinner_head"><h3>Login Anggota</h3></li>
			<div class="clearfix"> </div>
		  </ul>
		  <div class="login">
		  <script>
		  function isNumberKey(evt)
{
var charCode = (evt.which) ? evt.which : event.keyCode
if (charCode > 31 && (charCode < 48 || charCode > 57)) {
alert("Hanya dapat menginputkan nomor");
return false; 
	} 
	else  
	{ 
return true; 
	}
}
</script>
			  <form method="post" action="<?php echo base_url(); ?>index.php/login/masuk">
				<p id="login"><input type="text" id="nomor" onkeypress="return isNumberKey(event)" name="no_anggota" value="" placeholder="No Anggota" required></p>
				<p><input type="password" name="password" value="" placeholder="Password" required></p>
                <p><img src="<?php echo base_url(); ?>index.php/captcha" width="214px" alt="captcha"></p>
				<p><input type="text" name="captcha" value="" placeholder="Masukkan captcha diatas" required></p>
				
				
				<p class="submit">
				<div style="text-align: center">
				<input type="submit" name="login" value="Login"></p>
				</div>
			  </form>
		  </div>
		  
		  <br />
		  
		  <ul class="spinner">
			<i class="spinner_icon"> </i>
			<li class="spinner_head"><h3>Download</h3></li>
			<div class="clearfix"> </div>
		  </ul>
		  
		  <div class="download">
			  <ul>
					<li>
						<a href="#">Formulir Peminjaman </a>
					</li>
					<li>
						<a href="#">Persyaratan Anggota </a>
					</li>
				</ul>
		  </div>
		  
		  <br />
		 
		   <ul class="spinner">
		   <i class="spinner_icon"> </i>
			<li class="spinner_head"><h3>Kritik dan Saran</h3></li>
			<div class="clearfix"> </div>
		  </ul>
		  <div class="kritik-dan-saran">
			  <form method="post" action="<?php echo base_url(); ?>index.php/login/saran_kritik">
				<input type="text" name="kritik" placeholder="kritik">
				<input type="text" name="saran" placeholder="saran">
				<div style="text-align: center">
				<img src="http://localhost/CMS-Koperasi/index.php/captcha" width="214px" alt="captcha">
				</div>
				<p><input type="text" name="captcha" value="" placeholder="Masukkan captcha diatas" required></p>
				<div style="text-align: center">
				<input type="submit" name="login" value="submit">
				</div>
			  </form>
		  </div>
		  
		  <br />
		  
		  <ul class="spinner">
			<i class="spinner_icon"> </i>
			<li class="spinner_head"><h3>Layanan Anggota</h3></li>
			<div class="clearfix"> </div>
		  </ul>
		  
		  <div class="sidebar-box">
		   
		  <table class="scroll">
			<tbody>
			<tr>
				<td><li><a href="#">Tata cara Registrasi </a></li></td>
			</tr>
			<tr>
				<td><li><a href="#">Tata cara Login </a></li></td>
			</tr>
			<tr>
				<td><li><a href="#">Informasi terbaru tentang Koperasi  </a></li></td>
			</tr>
			<tr>
				<td><li><a href="#">Syarat Untuk Menjadi Member atau anggota Koperasi</a></li></td>
			</tr>
			
			</tbody>
		   </table>
		
		<div class="sidebar-box-fot"></div>
		
		</div>
