@extends('templates.default-aboutus')
@section('content')

<div class=" justify-content-between">

    <div class="section0 h-50 ">
        <div class="" style="position: relative; display: inline-block; width: 100%;">
            <img src="assets/img/jumbotron.png" style="width:-webkit-fill-available; height:620px;" alt="">
            <div class="overlay-prpl-jumb">
                <p class="text-center text-white " id="typing-text2" style="margin-top: 14rem; font-size: 3.5rem; font-weight: bold;">

                </p>
            </div>
        </div>
    </div>
    <div class="section1 container justify-content-between">
        <div class="row">
            <div class="col-md-7">
                <div class="d-none d-md-block" style="padding: 6rem;">
                    <div>
                        <p style="color: #5D5FEF; font-weight:400; font-size:1.5rem;">About Us</p>
                    </div>

                    <div class="my-2">
                        <h4>We have been engaged in the services and services sector since 2013, both domestic and overseas services.</h4>
                    </div>

                    <div class="my-2">
                        <span>Goods procurement services such as:
                            <br>
                            1. Spices
                            <br>
                            2. Cloves
                            <br>
                            3. Flour
                            <br>
                            4. Various Types of Coffee
                            <br>
                            5. Organic agricultural fertilizers and pesticides
                            <br>
                            6. Agricultural equipment (Alsintan) <br></span>
                    </div>
                    <div class="my-3">
                        <span>
                            Services:
                            <br>
                            1. Fumigation Services
                            <br>
                            2. Cleaning, Removal and demolition of buildings
                            <br>
                            3. Freight forwarding
                            <br>
                            4. Ship repair and maintenance 
                            <br>
                            5. Ship agency
                        </span>
                    </div>
                </div>
                <div class="d-block d-md-none twxt-left" style="padding: 2rem;">
                    <div>
                        <p style="color: #5D5FEF; font-weight:400; font-size:1.5rem;">About Us</p>
                    </div>

                    <div class="my-2">
                        <h4>We have been engaged in the services and services sector since 2013, both domestic and overseas services.</h4>
                    </div>

                    <div class="my-2">
                        <span>Goods procurement services such as:
                            <br>
                            1. Spices
                            <br>
                            2. Cloves
                            <br>
                            3. Flour
                            <br>
                            4. Various Types of Coffee
                            <br>
                            5. Organic agricultural fertilizers and pesticides
                            <br>
                            6. Agricultural equipment (Alsintan) <br></span>
                    </div>
                    <div class="my-3">
                        <span>
                            Services:
                            <br>
                            1. Fumigation Services
                            <br>
                            2. Cleaning, Removal and demolition of buildings
                            <br>
                            3. Freight forwarding
                            <br>
                            4. Ship repair and maintenance 
                            <br>
                            5. Ship agency
                        </span>
                    </div>
                </div>
            </div>
            <img src="assets/img/berry.png" alt="" class="d-block d-md-none" style="padding-top: 6.5rem; padding-bottom: 6.5rem; position: absolute; opacity: 15%;" width="100">

            <div class="d-none d-md-block col-md-5">
                <div style="padding: 4rem;">
                    <img src="assets/img/berry.png" alt="" style="padding-top: 6.5rem; padding-bottom: 6.5rem;" width="400">
                </div>
            </div>
        </div>
    </div>

</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const interestSection = document.querySelector('.interest-section');
        const text2 = "About Us";
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

        window.addEventListener('scroll', () => {
            const scrollPosition = window.scrollY;
            const interestSectionTop = interestSection.offsetTop;

            if (scrollPosition >= interestSectionTop - 400) {
                interestSection.classList.add('active');
            } else {
                interestSection.classList.remove('active');
            }
        });


    });
</script>

@endsection