<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata Site</title>
    <link rel="stylesheet" href="{{ url('/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;1,300&display=swap" rel="stylesheet"> 
	
</head>

<body>
    <header>
		<div class="container">
			<a href=""><img src="{{ url('/img/no image.png') }}" class="rounded nav-link" value="home" id="icon_img"/></a>
			<div class="mbuh">
				<h3><a>M. Maahir Maulana</a></h3>
				<h4><a href="">home </a>/ <a href="" id="nav_url"></a></h4>
			</div>
			<ul>
				<li><a href="#biodata" class="nav-link" value="biodata">Biodata</a></li>
				<li><a href="#profile" class="nav-link" value="profile">Profile</a></li>
				<li><a href="#about" class="nav-link" value="about">About</a></li>
				<li><a href="#contact" class="nav-link" value="contact">Contact</a></li>
			</ul>
		</div>
	</header>
    <main>
        <div id="content">
            <article id="biodata" class="card">
                <h2> <span>Biodata</span> </h2>
				<table>
					<tr>
						<td> 
							<img src="{{ url('/img/Hydrangeas.jpg') }}" alt="asd" id="himg">
						</td>
					</tr> 
					<tr>
						<td><b>Nama :</b> M. Maahir Maulana</td>
					</tr>
					<tr>
						<td><b>Alamat :</b> Samborejo, Tirto, Pekalongan</td>
					</tr>
					<tr>
						<td><b>Tempat, Tanggal lahir :</b> Pekalongan, 23 November 2004</td>
					</tr> 
					<tr>
						<td><b>Email :</b> mbismbisbbl@gmail.com</td>
					</tr> 
					<tr>
						<td><b>Hobi :</b> Membaca Buku, Belajar Pemrograman,</td>
					</table><br/>
					<h3>Riwayat Pendidikan</h3> <br/>
					<tr>
						<td><b>SD :</b> MIS Samborejo 2</td>
					</tr> <br/>
					<tr>
						<td><b>SMP :</b> SMP Negeri 1 Tirto</td>
					</tr> <br/>
					<tr>
						<td><b>SMK :</b> SMK Negeri 1 Kedungwuni</td>
					</tr>
					</table>
            </article>
            <article id="about" class="card">
                <h2><span>About</span></h2>
                <p>...Hanya seorang pelajar</p>
            </article>
        </div>


        <aside>
            <article id="profile" class="card">
                <h2> <span>Profile</span> </h2>
				<figure>
					<div class="overlay">
						<img src="{{ url('/img/5. XII TKJ 2.JPG') }}" alt="maahir" id="pimg">
					</div>
						<h3>M. Maahir Maulana</h3></h3>
				</figure>
            </article>
            <article id="contact" class="card">
                <h2> <span>Contact</span> </h2>
                <div class="content-2">
					<ul class="contact-icons">
						<li><i class="fa fa-facebook"></i></li>
						<li><a href="https://www.linkedin.com/in/m-maahir-maulana-b76762214" target="_blank"><i class="fa fa-linkedin"></i></a></li>
						<li><i class="fa fa-twitter"></i></li>
						<li><a href="https://www.linkedin.com/in/m-maahir-maulana-b76762214" target="_blank"><i class="fa fa-instagram"></i></a></li>
					</ul>
                </div>

            </article>
        </aside>
    </main>
    <div class="footer">
		<h2> <span>Footer</span> </h2>
    </div>
	<div class="wrapper">
		<footer>
			<small>Created at : 20-09-2022</small>
		</footer>
		
	</div>
	
	<script src="https://code.jquery.com/jquery-3.6.1.slim.min.js" integrity="sha256-w8CvhFs7iHNVUtnSP0YKEg00p9Ih13rlL9zGqvLdePA=" crossorigin="anonymous"></script>
	<script>
		$(document).ready(function() {
			$('.nav-link').click(function(){
				var url = $(this).text().toLowerCase();
				$('#nav_url').text(url);
				$('#nav_url').attr("href", "#" + url);
			});
		});

	</script>
	
</body>

</html>