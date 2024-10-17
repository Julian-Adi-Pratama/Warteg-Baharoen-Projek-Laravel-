@extends('templates.app')

@section('content-dinamis')
<section id="home" class="hero">
    <div class="container text-center text-white position-relative" >
        <div class="selamatdatang">
        <h1 class="display-3 fw-bold mb-4">Selamat Datang di Wateg Baharoen</h1>
    </div>
    <div class="silahkan">
    <p class="lead mb-5">Silahkan Untuk Memesan Makanan Dan Minuman Kami Yang Dijamin Akan Membuat Kalian Akan Balik Lagi</p>
</div>
</div>
</section>
<section id="contact" class="py-5">
    <div class="container">
        <h2 class="text-center mb-5 fade-in">Hubungi Kami <i class="bi bi-chat-dots"></i></h2>
        <h3 class="text-center mb-5 fade-in">Berikan Masukkan Serta Kritik</h3>
        <div class="row justify-content-center">
            <div class="col-md-8 fade-in">
                <form>
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Nama">
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control" rows="5" placeholder="Pesan"></textarea>
                    </div>
                    <button type="submit" class="btn btn-modern w-100">Kirim Pesan</button>
                </form>
            </div>
        </div>
        <div class="row mt-5 text-center">
            <div class="col-md-4 fade-in">
                <i class="fas fa-map-marker-alt fa-3x mb-3"></i>
                <p>Jl. Cibedug Raya, Ciawi, Washington DC</p>
            </div>
            <div class="col-md-4 fade-in">
                <i class="fas fa-phone fa-3x mb-3"></i>
                <p>+62 1234 5678</p>
            </div>
            <div class="col-md-4 fade-in">
                <i class="fas fa-envelope fa-3x mb-3"></i>
                <p>baharoenwarteg@gmail.com</p>
            </div>
        </div>
    </div>
</section>

<footer class="bg-dark text-white py-4">
    <div class="container text-center">
        <p>&copy; 1945 Warteg Baharoen. Semua hak cipta dilindungi oleh yang maha kuasa.</p>
        <div class="mt-3">
            <a href="https://www.instagram.com/julianadiprtm_/" class="text-white me-3"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.instagram.com/julianadiprtm_/" class="text-white me-3"><i class="fab fa-instagram"></i></a>
            <a href="https://www.instagram.com/julianadiprtm_/" class="text-white"><i class="fab fa-twitter"></i></a>
        </div>
    </div>
</footer>
@endsection

@push('style')
<style>
    .selamatdatang {
font-family: "Londrina Sketch", sans-serif;
  font-weight: 500;
  font-style: normal;
  margin-right: 10px;
    }

    .silahkan {

  font-family: "Lilita One", sans-serif;
  font-weight: 400;
  font-style: normal;
}
.container h2, h3 {
    font-family: "Lilita One", sans-serif;
  font-weight: 400;
  font-style: normal;
}


    :root {
        --primary-color: green;
        --accent-color: red;
    }
    body {
        font-family: 'Poppins', sans-serif;
        overflow-x: hidden;
    }
    .navbar {
        backdrop-filter: blur(10px);
    }
    .hero {
        height: 100vh;
        background: linear-gradient(45deg, var(--primary-color), var(--accent-color));
        display: flex;
        align-items: center;
        overflow: hidden;
        position: relative;
    }

    .btn-modern {
        background: linear-gradient(45deg, var(--primary-color), var(--accent-color));
        border: none;
        color: white;
        padding: 15px 30px;
        border-radius: 50px;
        font-weight: bold;
        text-transform: uppercase;
        transition: all 0.3s ease;
    }
    .btn-modern:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,123,255,0.3);
    }
    .card {
        border: none;
        border-radius: 15px;
        overflow: hidden;
        transition: all 0.3s ease;
    }
    .card:hover {
        transform: translateY(-10px) rotate(2deg);
        box-shadow: 0 15px 30px rgba(0,0,0,0.2);
    }
    .card-img-overlay {
        background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);
    }
    .parallax {
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
    .fade-in {
        opacity: 0;
        transform: translateY(50px);
        transition: opacity 0.8s ease, transform 0.8s ease;
    }
    .fade-in.visible {
        opacity: 1;
        transform: translateY(0);
    }
    #contact {
        background: linear-gradient(45deg, var(--primary-color), var(--accent-color));
        color: white;
    }
    .form-control {
        border-radius: 20px;
        border: none;
        padding: 15px 20px;
    }
</style>
    
@endpush

@push('script')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Navbar scroll effect
    // Smooth scrolling


    // Fade-in effect
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, { threshold: 0.1 });

    document.querySelectorAll('.fade-in').forEach(el => observer.observe(el));

    // Parallax effect
    window.addEventListener('scroll', function() {
        const parallax = document.querySelector('.parallax');
        let scrollPosition = window.pageYOffset;
        parallax.style.backgroundPositionY = scrollPosition * 0.7 + 'px';
    });
</script>
@endpush

