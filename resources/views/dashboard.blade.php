@extends('templates.default')
@section('content')

<div class=" justify-content-between">

    <div class="section0 h-50 ">
        <div class="" style="position: relative; display: inline-block; width: 100%;">
            <img src="assets/img/jumbotron.png" style="width:100%; height:620px;" alt="">
            <div class="overlay-prpl-jumb">
                <p class="text-center text-white d-none d-md-block" id="typing-text2-desktop" style="margin-top: 13rem; font-size: 3.5rem; font-weight: bold;">
                </p>

                <p class="text-left text-white d-block d-md-none px-3" id="typing-text2-mobile" style="margin-top: 13rem; font-size: 3rem; font-weight: bold;">
                </p>
            </div>
        </div>
    </div>
    <div class="section1">
        <div class="card bg-white" style="margin-bottom: 0;">
            <div class="card-body p-5 text-center">
                <div>
                    <h4 style="color: #5D5FEF;">Why choose us ?</h4>
                </div>
                <div class="mt-5 row" style="align-items: center;">
                    <!-- Gambar Desktop -->
                    <div class="col-4 d-none d-md-block">
                        <img src="assets/img/cengkeh.png" alt="" style="width: 155px;">
                    </div>
                    <div class="col-4 d-none d-md-block">
                        <img src="assets/img/daun.png" alt="" style="width: 155px;">
                    </div>
                    <div class="col-4 d-none d-md-block">
                        <img src="assets/img/kopi.png" alt="" style="width: 155px;">
                    </div>

                    <!-- Gambar Mobile -->
                    <div class="col-4 d-block d-md-none">
                        <img src="assets/img/cengkeh.png" alt="" style="width: 100px;">
                    </div>
                    <div class="col-4 d-block d-md-none">
                        <img src="assets/img/daun.png" alt="" style="width: 100px;">
                    </div>
                    <div class="col-4 d-block d-md-none">
                        <img src="assets/img/kopi.png" alt="" style="width: 100px;">
                    </div>
                </div>
                <div class="text-center mt-5">
                    <!-- Untuk desktop -->
                    <h2 class="d-none d-md-block" id="typing-text-desktop"></h2>
                    <!-- Untuk mobile -->
                    <h4 class="d-block d-md-none" id="typing-text-mobile"></h4>
                    </h4>
                </div>
            </div>
        </div>
    </div>

    <div class="justify-content-between" style="position: relative; display:inline-block; width: 100%;">
        <img src="assets/img/row-products.png" alt="" style="width:-webkit-fill-available; height:14rem; ">
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
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const images = document.querySelectorAll('.image-slide-in');
        let delay = 0;

        function revealImages() {
            const windowHeight = window.innerHeight;

            images.forEach((img, index) => {
                const imgTop = img.getBoundingClientRect().top;

                if (imgTop < windowHeight - 50) {

                    setTimeout(() => {
                        img.classList.add('image-visible');
                    }, delay);
                    delay += 400;
                }
            });
        }

        window.addEventListener('scroll', revealImages);
        revealImages();

        const text = "''We are good servants for <br> service users <br> your satisfaction is our good.''";
        const typingTextDesktop = document.getElementById('typing-text-desktop');
        const typingTextMobile = document.getElementById('typing-text-mobile');
        let index = 0;

        function type() {
            if (index < text.length) {
                const char = text.charAt(index);

                if (char === '<' && text.substr(index, 4) === '<br>') {
                    typingTextDesktop.innerHTML += '<br>';
                    typingTextMobile.innerHTML += '<br>';
                    index += 4;
                } else {
                    typingTextDesktop.innerHTML += char;
                    typingTextMobile.innerHTML += char;
                    index++;
                }
                setTimeout(type, 60);
            }
        }

        type();
        const text2 = "Find products with the best <br> quality";
        const typingText2Desktop = document.getElementById('typing-text2-desktop');
        const typingText2Mobile = document.getElementById('typing-text2-mobile');
        let index2 = 0;

        function type2() {
            if (index2 < text2.length) {
                const char = text2.charAt(index2);

                if (char === '<' && text2.substr(index2, 4) === '<br>') {
                    typingText2Desktop.innerHTML += '<br>';
                    typingText2Mobile.innerHTML += '<br>';
                    index2 += 4;
                } else {
                    typingText2Desktop.innerHTML += char;
                    typingText2Mobile.innerHTML += char;
                    index2++;
                }
                setTimeout(type2, 40);
            }
        }

        type2();

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