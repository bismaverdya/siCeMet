
<?php
	
	class metodologi{

		public $judul;
		public $pengertian;
		public $kelebihan;
		public $kelemahan;
		public $gambar;
		
		public function __construct($met){
			if($met == 0)
				$this->increment();
			elseif ($met == 1)
				$this->vShaped();
			elseif ($met == 2)
				$this->spiral();
			elseif ($met == 3)
				$this->rad();
			elseif ($met == 4)
				$this->prototyping();
			elseif ($met == 5)
				$this->scrum();
			elseif ($met == 6)
				$this->extremePrograming();
				
		}
		
		protected function increment(){
			$this->judul="Increment";
			$this->pengertian="
			Metodologi incremental adalah sebuah model pengembangan sistem yang berdasarkan requirement 
			software yang dipecah menjadi beberapa fungsi sehingga model pengembangannya 
			secara bertahap.Model ini lebih mengutamakan perhatian pada system requirement 
			dan mengimplementasinya dalam team development.";
			
			$this->kelebihan ="
			<li>Model dengan manajemen yang sederhana.</li>
			<li>Memiliki risiko lebih rendah terhadap keseluruhan pengembangan sistem.</li>
			<li>Prioritas tertinggi terdapat pada pelayanan sistem yang paling diuji.</li>";
			
			$this->kelemahan ="
			<li>Kemungkinan tiap bagian tidak dapat diintegrasikan</li>
			<li>Harus Open Architecture</li>
			<li>Memungkinkan terjadinya kesulitan untuk memetakan kebutuhan pengguna ke dalam rencana spesifikasi masing-masing hasil increment</li>
			";
			$this->gambar="Incremental.png";
		}
		
		protected function vShaped(){
			$this->judul="vShaped";
			
			$this->pengertian="
			Metodologi V Shaped adalah Model pengembangan perangkat lunak yang didasarkan 
			pada hubungan antara setiap fase pengembangan siklus hidup yang tercantum 
			dalam mode waterfall yang merupakan pengembangan perangkat lunak dan 
			fase yang terkait pengujian.";
			$this->kelebihan="
			<li>VShaped Model sangat fleksibel</li>
			<li>VShaped Model dikembangankan dan maintance oleh  publik, maksud dari ini adalah user/client dapat berpartisipasi dalam melakukan perbaikan tampilan sehingga request akan mudah ke client.</li>
			<li>Mudah dimonitor karena memiliki milestones yang jelas</li>
			";
			$this->kelemahan="
			<li>Terlalu Fleksibel sehingga dapat menampilkan sebuah statement abstrak</li>
			<li>Tidak dapat digunakan untuk perubahan yang sangat besar.</li>
			";
			$this->gambar="Vshaped.png";
		}
		
		
		protected function spiral(){
			$this->judul="Spiral";
			
			$this->pengertian="
			Metodologi Spiral Model prototyping dengan penggunaannya dan model waterfall d
			engan pengendalian dan sistematikanya. Model ini dekanl juga dengan Spiral Boehm. 
			Pengembagan dalam model ini memadukan beberapa model untuk menghasilkan produk khusus 
			atau untuk menjawab persoalan selama proses pengerjaan proyek.
			";
			$this->kelebihan="
			<li>Pembangunan dan perubahan yang dapat diselesaikan secara sistematis</li>
			<li>Mudah memperkirakan biaya karena adanya proses prototype yang jelas dan terencana</li>
			<li>Manajemen dan Analisa risiko yang lebih cepat dan mudah</li>
			<li>Produksi software bisa terjadi cepat</li>
			";
			$this->kelemahan="
			<li>Tidak cocok dan sulit diimplementasikan dalam proyek kecil</li>
			<li>Memakan waktu yang lama</li>
			<li>Membutuhkan best practice</li>
			<li>Resiko dalam tahap planning cukup besar misal jadwal dan anggaran belanja</li>
			";
			$this->gambar="Spiral.png";
		}
		
		protected function rad(){
			$this->judul="RAD";
			
			$this->pengertian="
			Metodologi RAD adalah Model Pengembangan dengan bertujuan untuk mempersingkat waktu
			yang biasanya diperlukan dalam siklus hidup pengembangan sistem tradisional antara
			perancangan dan penerapan suatu sistem informasi yang dapat dikatakan berusaha untuk 
			memenuhi syarat syarat bisnis yang berubah secara cepat.
			";
			$this->kelebihan="
			<li>Penghematan waktu 
			<li>Mengurangi seluruh kebutuhan yang berkaitan dengan biaya proyek dan sumber daya manusia</li>
			<li>Membantu pengembangan aplikasi yang berfokus pada waktu penyelesaian proyek</li>
			<li>Perubahan desain sistem dapat lebih berpengaruh dengan cepat dibandingkan SDLC tradisional</li>
			";
			$this->kelemahan="
			<li>Menyulitkan programmer yang tidak berpengalaman dan analyst dituntut menguasai kemampuan baru sementara harus bekerja juga dalam mengembangkan sistem</li>
			<li>Penganalisis biasanya berusaha mempercepat projek dengan terburu buru karena tuntutan harus menguasai hal baru</li>
			";
			$this->gambar="RAD.png";
		}
		protected function prototyping(){
			$this->judul="Prototyping";
			
			$this->pengertian="
			Metodologi Prototyping adalah metode yang didasarkan pada konsep model bekerja (working model).
			Tujuannya dalah mengembangkan model menjadi sistem final yang artinya sistem dapat dikembangkan
			lebih cepat dari pada metode tradisional dan biayanya pun menjadi lebih rendah. ";
			$this->kelebihan="
			<li>User/Client ikut dalam pengembangan sistem sehingga memudahkan developer mengetahui produk yang diinginkan user/client</li>
			<li>Analisa kebutuhan lebih mudah diwujudkan </li>
			<li>Komunikasi yang baik antara developer dengan user/client</li>
			";
			$this->kelemahan="
			<li>Kurang fleksibel jika terjadi perubahan</li>
			<li>Proses yang dilakukan untuk analisis dan perancangan terlalu singkat</li>
			";
			$this->gambar="Prototyping.png ";
		}
		protected function scrum(){
			$this->judul="Scrum";
			
			$this->pengertian="
			Metodologi Scrum adalah metode yang berdasar menggunakan prinsip-prinsip 
			pendekatan AGILE, yang bertumpu pada kekuatan kolaborasi tim, incremental 
			product dan proses iterasi untuk mewujudkan hasil akhir.
			";
			$this->kelebihan="
			<li>Scrum dapat membantu perusahaan dalam menghemat waktu dan biaya
			<li>Dapat mengontrol dan memonitoring aktivitas peningkatan dan penurunan beban pekerjaan yang bisa terjadi kapan saja</li>
			<li>Dengan SCRUM, setiap ada masalah yang timbul dapat di identifikasi dengan baik pada perteman harian dan oleh karena itu setiap masalah dapat diselesaikan dengan cepat</li>
			<li>Dapat mudah mengirim produk berkualitas sesuai dengan waktunya</li>
			";
			$this->kelemahan="
			<li>Jika anggota tim tidak berkomitmen dengan baik maka proyek akan tidak selesai bahkan bisa gagal</li>
			<li>Metode ini membutuhkan anggota tim yang sudah berpengalaman</li>
			<li>Jika sering terjadi pergantian anggota tim dapat menyebabkan efek yang kurang baik bagi perkembangan proyek tersebut</li>
			";
			$this->gambar="Scrum.png";
		}
		protected function extremePrograming(){

			$this->judul="ExtremePrograming";
			
			$this->pengertian="
			Metodologi Extreme Programing adalah sebuah metode pengembangan yang cenderung menggunakan pendekatan object-oriented.
			Dimana tim yang dibentuk berukuran kecil atau medium hal ini untuk menghadapi requirements 
			yang tidak jelas maupun terjadi perubahan perubahan requirements yang sangat cepat";
			$this->kelebihan="
			<li>Pembangunan sistem dibuat lebih cepat</li>
			<li>Menjalin komunikasi yang baik dengan client</li>
			<li>Meningkat komunikasi dan sifat saling menghargai antar developer</li>
			";
			$this->kelemahan="
			<li>Tidak bisa membuat kode yang detail di awal </li>
			<li>Extreme Programing tidak memiliki dokumentasi formal yang dibuat selama pengembangan sehingga dokumentasi adalah dokumenasi awal yang dilakukan oleh user </li>
			";
			$this->gambar="XP.png";
		}
		
	}
	
?>