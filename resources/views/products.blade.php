@extends('templates.default')
@section('content')
<div>
    <div class="justify-content-between">

        <div class="section0 h-50">
            <div class="" style="position: relative; display: inline-block; width: 100%;">
                <img src="assets/img/jumbotron.png" style="width:-webkit-fill-available; height:620px;" alt="">
                <div class="overlay-prpl-jumb">
                    <p class="text-center text-white" id="typing-text2" style="margin-top: 14rem; font-size: 3.5rem; font-weight: bold;"></p>
                </div>
            </div>
        </div>

        <div class="section1 container justify-content-center custom-padding">
            <div class="row text-center">
                <div class="col-6 col-md-4 mb-4">
                    <div class="card" style="width: 100%;">
                        <img class="card-img-top" src="assets/img/candlenut.png" alt="Card image">
                        <div class="card-body text-center" style="background-color: #5D5DEF; padding: 0; border-radius: 0 0 5px 5px;">
                            <p class="card-title text-white">Candlenut</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 mb-4">
                    <div class="card" style="width: 100%;">
                        <img class="card-img-top" src="assets/img/briquettes.png" alt="Card image">
                        <div class="card-body text-center" style="background-color: #5D5DEF; padding: 0; border-radius: 0 0 5px 5px;">
                            <p class="card-title text-white">Briquettes</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 mb-4">
                    <div class="card" style="width: 100%;">
                        <img class="card-img-top" src="assets/img/cloves.png" alt="Card image">
                        <div class="card-body text-center" style="background-color: #5D5DEF; padding: 0; border-radius: 0 0 5px 5px;">
                            <p class="card-title text-white">Cloves</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 mb-4">
                    <div class="card" style="width: 100%;">
                        <img class="card-img-top" src="assets/img/coffe.png" alt="Card image">
                        <div class="card-body text-center" style="background-color: #5D5DEF; padding: 0; border-radius: 0 0 5px 5px;">
                            <p class="card-title text-white">Coffee</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 mb-4">
                    <div class="card" style="width: 100%; position: relative;">
                        <img class="card-img-top carousel-image active" src="assets/img/organic.png" alt="Organic Fertilizer">
                        <img class="card-img-top carousel-image" src="assets/img/inorganic.png" alt="Inorganic Fertilizer">
                        <button class="prev-btn" onclick="prevSlide()">
                            <span>&#10094;</span>
                        </button>
                        <button class="nxt-btn" onclick="nextSlide()">
                            <span>&#10095;</span>
                        </button>
                        <div class="card-body text-center" style="background-color: #5D5DEF; padding: 0; border-radius: 0 0 5px 5px;">
                            <p id="fertilizer-title" class="card-title text-white">Organic Fertilizer</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 mb-4">
                    <div class="card" style="width: 100%;">
                        <img class="card-img-top" src="assets/img/ship.png" alt="Card image">
                        <div class="card-body text-center" style="background-color: #5D5DEF; padding: 0; border-radius: 0 0 5px 5px;">
                            <p class="card-title text-white">Ship's Service</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="justify-content-between" style="position: relative; display:inline-block; width: 100%;">
            <img src="assets/img/row-products.png" alt="" style="width:-webkit-fill-available; height:14rem;">
            <div class="overlay-prpl text-center text-white p-md-4 interest-section d-none d-md-block">
                <p class="my-2 mt-md-5 mb-md-3 fs-4 fs-md-1 container">Interest in our products?</p>
                <button type="button" class="my-md-1 btn-custom slide-btn" style="font-family: poppins, sans-serif;" onclick="window.open('https://wa.me/6281312625300')">Contact us</button>
            </div>
            <div class="overlay-prpl text-center text-white p-md-4 interest-section d-block d-md-none" style="padding-top:54px">
                <p class="my-2 mt-md-5 mb-md-3 fs-4 fs-md-1 container">Interest in our products?</p>
                <button type="button" class="my-md-1 btn-custom slide-btn" style="font-family: poppins, sans-serif;" onclick="window.open('https://wa.me/6281312625300')">Contact us</button>
            </div>
        </div>

    </div>
</div>

<style>
    .custom-padding {
        padding: 2rem;
        /* Padding untuk tampilan mobile */
    }

    /* Tambahkan padding 4rem untuk tampilan desktop */
    @media (min-width: 768px) {

        /* 768px adalah breakpoint untuk perangkat tablet */
        .custom-padding {
            padding: 4rem;
        }
    }

    .carousel-image {
        display: none;
        width: 100%;
        height: auto;
        object-fit: cover;
        border-radius: 0.375rem 0.375rem 0 0;
    }

    .carousel-image.active {
        display: block;
        border: 0px;
        padding: 0;
        border-radius: 0.375rem 0.375rem 0 0;
    }

    .slide-in {
        animation: slideIn 0.5s forwards;
    }

    .slide-out {
        animation: slideOut 0.5s forwards;
    }

    @keyframes slideIn {
        from {
            transform: translateX(100%);
            /* Masuk dari kanan */
            opacity: 0;
        }

        to {
            transform: translateX(0);
            opacity: 1;
        }
    }

    @keyframes slideOut {
        from {
            transform: translateX(0);
            opacity: 1;
        }

        to {
            transform: translateX(-100%);
            /* Keluar ke kiri */
            opacity: 0;
        }
    }

    .prev-btn,
    .nxt-btn {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        width: 40px;
        height: 40px;
        background-color: rgba(200, 200, 200, 0.7);
        border: none;
        border-radius: 50%;
        color: white;
        font-size: 1.5rem;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
    }

    .prev-btn {
        left: 10px;
    }

    .nxt-btn {
        right: 10px;
    }

    .prev-btn:hover,
    .nxt-btn:hover {
        background-color: rgba(0, 0, 0, 0.7);
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const slides = document.querySelectorAll('.carousel-image');
        const fertilizerTitle = document.getElementById('fertilizer-title');
        let currentSlide = 0;

        const prevBtn = document.querySelector('.prev-btn');
        const nextBtn = document.querySelector('.nxt-btn');
        const text2 = " Products";
        const typingText2 = document.getElementById('typing-text2');
        let index2 = 0;

        function type2() {
            if (index2 < text2.length) {
                if (text2.charAt(index2) === '<' && text2.substr(index2, 4) === '<br>') {
                    typingText2.innerHTML += '<br>';
                    index2 += 4;
                } else {
                    typingText2.innerHTML += text2.charAt(index2);
                    index2++;
                }
                setTimeout(type2, 40);
            }
        }

        type2();

        function showSlide(index) {
            // Tambahkan kelas slide-out untuk slide saat ini
            slides[currentSlide].classList.add('slide-out');

            // Tunggu animasi selesai sebelum mengubah slide
            setTimeout(() => {
                currentSlide = (index + slides.length) % slides.length;
                slides.forEach(slide => {
                    slide.classList.remove('active', 'slide-out'); // Hapus active dan slide-out
                });
                slides[currentSlide].classList.add('active', 'slide-in'); // Tambahkan slide-in untuk slide baru

                // Update title berdasarkan slide saat ini
                fertilizerTitle.textContent = currentSlide === 0 ? 'Organic Fertilizer' : 'Inorganic Fertilizer';

                // Tampilkan atau sembunyikan tombol navigasi berdasarkan slide saat ini
                prevBtn.style.display = currentSlide === 0 ? 'none' : 'block';
                nextBtn.style.display = currentSlide === slides.length - 1 ? 'none' : 'block';
            }, 500); // Durasi animasi slide-out
        }

        window.nextSlide = function() {
            showSlide(currentSlide + 1);
        }

        window.prevSlide = function() {
            showSlide(currentSlide - 1);
        }

        // Initialize the first slide
        showSlide(currentSlide);

        const interestSections = document.querySelectorAll('.interest-section');

        window.addEventListener('scroll', () => {
            const scrollPosition = window.scrollY;

            interestSections.forEach(section => {
                const sectionTop = section.offsetTop;

                if (scrollPosition >= sectionTop - 400) {
                    section.classList.add('active');
                } else {
                    section.classList.remove('active');
                }
            });
        });
    });
</script>

@endsection