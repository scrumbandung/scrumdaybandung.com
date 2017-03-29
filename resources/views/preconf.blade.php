@extends('layout')

@section('title', 'Pre-conference Workshop')

@section('content')

<img src="/img/Preconf_SDB_2018.png" alt="Scrum Day Bandung 2018 Pre-conference" class="img-responsive"  />

<div id="resources" class="container push-top">
	<div class="row">
		<div class="col-md-12">

			<p>Kami sudah belajar banyak dari edisi pertama Scrum Day Bandung. Kami ingin mempersempit kesenjangan pengetahuan tentang Scrum antara kota-kota di Indonesia dan memberi lebih banyak kesempatan kepada banyak orang untuk dapat mengikuti workshop simulasi Scrum. Oleh karena itu kami akan melibatkan komunitas Scrum lokal di kota-kota di Indonesia yang akan menjadi penyelenggara dalam mengadakan Pre-conference Scrum Day Bandung 2018. Berbeda dengan edisi pertama, Pre-conference Scrum Day Bandung 2018 akan diadakan di masing-masing kota di Indonesia. Semangat Scrum Day Bandung 2018 adalah <em>dari komunitas untuk komunitas</em>.
			</p> 

			<h2>Panduan untuk penyelenggara</h2>
			<ol>
				<li>Penyelenggara semuanya diserahkan kepada komunitas Scrum di daerah masing-masing. Tim Scrum Day Bandung tidak termasuk penyelenggara. Tim Scrum Day Bandung hanya menyediakan fasilitator.</li>
				<li>Pre-conference adalah berupa workshop simulasi Scrum dalam 1-hari yang akan difasilitasi oleh salah satu anggota tim Scrum Day Bandung.</li>
				<li>Acara akan diadakan di hari Sabtu atau Minggu tergantung dari ketersediaan waktu fasilitator.</li>
				<li>Acara akan dimulai dari 08:00 - 17:30.</li>
				<li>Penyelenggara diharapkan untuk memungut biaya dari peserta dengan biaya minimal Rp. 100,000,-</li>
				<li>Biaya digunakan untuk menutup biaya transportasi dan akomodasi fasilitator workshop dari Jakarta/Bandung ke kota dimana workshop tersebut diadakan.</li>
				<li>Untuk efektifitas, jumlah maksimal untuk workshop adalah 30 orang.</li>
				<li>Ruangan harus dapat mengakomodasi 30 orang dengan layout seperti di <a href="/img/Table_Layout_Preconf.png">gambar berikut</a>.</li>
				<li>Penyelenggara bertanggung-jawab untuk menyediakan coffee break dan makan siang untuk peserta.</li>
				<li>Penyelenggara bertanggung-jawab untuk menyediakan akses internet yang akan digunakan oleh peserta selama workshop.</li>
				<li>Penyelenggara dapat memberikan sertifikat kehadiran untuk masing-masing peserta.</li>
				<li>Penyelenggara boleh mengambil untung dari acara namun keuntungan atau sisa pemasukan dikembalikan ke komunitas Scrum di kota tersebut untuk memajukan kegiatan Scrum di kota tersebut.</li>
				<li>Apabila acara ini membutuhkan sponsor, maka penyelenggara yang bertanggung-jawab untuk mencari sponsor.</li>
				<li>Flyer promosi harus memuat teks <strong>Road to #ScrumDayBdg2018</strong> dan pranala <strong>www.scrumdaybandung.com</strong>.</li>
				<li>Prioritas akan diberikan untuk komunitas Scrum dari luar pulau Jawa.</li>
			</ol>
			<p>
			Apakah anda siap untuk menyelenggarakan Pre-conference dan bekerja bersama kami untuk membuat perubahan di ekosistem software development Indonesia? Silahkan hubungi kami melalui <a href="{{ route('contact', ['locale' => 'en']) }}">halaman kontak</a>.
			</p> 

			<h2>Jadwal Pre-conference Workshop</h2>
			<table class="table table-striped" width="100%">
			  <tr>
 				<th>Tanggal</th>
 				<th>Kota</th>
 				<th>Biaya</th>
 				<th>Alamat</th>
 				<th>Kontak</th>
			  </tr>
			  <tr>
			  	<td>30 April 2017</td>
			  	<td>Malang, Jawa Timur</td>
			  	<td>Rp. 300,000,-</td>
			  	<td>Terra Building Lt. 3. Jl. Terusan Candi Mendut</td>
			  	<td>Disyam (+628113654829)</td>
			  </tr>
			</table>
		</div>
	</div>
</div>

@endsection