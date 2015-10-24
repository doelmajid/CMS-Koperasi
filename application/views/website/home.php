<ul class="spinner1">
			<i class="paperclip"> </i>
			<li class="spinner_head"><h3>Berita</h3></li>
			<html>
<head>
<title>Berita Online</title> 
<style type="text/css">
	/* Photo album effect */
.esquinas {
  position: relative;  
  display: table;
  max-width: 90%;
  margin: 50px auto;
}
.esquinas img {
  display: table-cell;
  max-width:100%;
  height: auto;
  margin: 0 auto;
  padding: 8px;
  background: #fff;
  box-shadow: 0 0 2px #666;
  box-sizing: border-box;
}
.esquinas:before,
.esquinas:after,
.esquinasbis:before,
.esquinasbis:after {
  position: absolute;
  bottom: -20px;
  right: -40px;
  content: "";
  height: 40px;
  width: 80px;
  background: #ccc;
  box-shadow: 0 -6px 9px -8px #333;
  transform: rotate(-45deg);
}
.esquinas:after,
.esquinasbis:after {
  top: -20px;
  left: -40px;
  box-shadow: 0 6px 9px -8px #333;
}
.esquinasbis:before { 
  top: auto;
  left: -40px;
  transform: rotate(45deg);
}
.esquinasbis:after {
  left: auto;
  right: -40px;
  transform: rotate(45deg);
}

body {
	background: #ccc;
	margin: 0;
	padding: 20px;
}
h1, h3 {
  text-align: center;
}
</style>  
<meta http-equiv="content-type"content="text/html;
charset=UTF-8">
<!-- <link href="style.css"rel="stylesheet"type="text/css"> -->
</head>
<body>
<div id="kanvas">
 <div id="header">
  <h1 align="center"></h1>
  <h1 align="center"></h1><br>
  <font size="+3" color="white"><center>SEPUTAR KPRI ITS</center></font><br>
  
   <font size="+2"><center>Launching KPRI ITS</center></font>
   <h1 align="center"></h1>
  </div>
<div id="menu">
</div>
    <div id="content">
    <div class="deskripsi">
<center>
<div class="esquinas">
	<img src="http://localhost/CMS-koperasi/asset/website/images/kopma.jpg" alt="kopma dr angka ITS" width="640"height="155"><div class="esquinasbis"></div>
</div>
<p>KPRI ITS atau yang kepanjangannya adalah Koperasi Pegawai Republik Indonesia - Institut Teknologi Sepuluh Nopember Surabaya berlokasi di samping Gelanggang Olahraga (GOR) Bulutangkis ITS.</p>
<br><br><br><br><br><br><br><br><br><br>
</center></div></div>
<div id="sidebar">
 <div class="deskripsi">
</p>
</div>
</div>
  <div style="clear:both"></div>
  <div id="footer">
   <p>Copyright &copy; 2015 Koperasi Pegawai Republik Indonesia</p>
    </div>
</div>
	<div class="clearfix"> </div>
</ul>
<div class="berita">
<?php foreach($content as $c){ ?>
	<div class="a-top">
		<div class="left-grid">
		<img src="<?php echo base_url(); ?>asset/files/header_content/<?php echo $c['image_header']; ?>" class="img-responsive" alt=""/>
	</div>
		<div class="right-grid">
		<a href="<?php echo base_url(); ?>index.php/tutorial-<?php echo strtolower(str_replace(' ','-',preg_replace("/[^a-zA-Z0-9\s]/", "", $c['judul_content']))).'-'.$c['kode_content']; ?>">
			<?php echo $c['judul_content']; ?>
		</a>
					 <div class="clearfix"></div>
					<ul>
						<li>
                            <span>Tanggal : </span>
                            <span><?php echo $c['tanggal']; ?></span>
                        </li>
                        <li>
                            <span>Posted by : </span>
                            <span><?php echo $c['penulis']; ?></span>
                        </li>
                    </ul>
					
					<p><?php echo word_limiter($c['content'],50); ?></p>
				 </div>
				 <div class="but"></div>
                   <a href="<?php echo base_url(); ?>index.php/tutorial-<?php echo strtolower(str_replace(' ','-',preg_replace("/[^a-zA-Z0-9\s]/", "", $c['judul_content']))).'-'.$c['kode_content']; ?>">
				   <h4 class="pB-readmore"> Selengkapnya . . </h4>
				   </a>
				 </div>
				 <div class="clearfix"></div>
			<?php } ?>
			<?php echo $links; ?>
			</div>
	  </body>
  </html>