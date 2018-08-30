<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <a href="#"><span class="fa fa-facebook"></span></a>
                <a href="#"><span class="fa fa-twitter"></span></a>
                <a href="#"><span class="fa fa-pinterest"></span></a>
                <a href="#"><span class="fa fa-instagram"></span></a>
                <a href="#"><span class="fa fa-google-plus"></span></a>
            </div>
            <div class="col-md-3">
                <h2>Preguntas</h2>
                <ul>
                    <li><a rel="nofollow" href="#">Envios / Devoluciones</a></li>
                    <li><a rel="nofollow" href="#">Faq</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h2>Sobre Nosotros</h2>
                <ul>
                    <li><a rel="nofollow" href="#">¿Quienes somos?</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h2>Politicas</h2>
                <ul>
                    <li><a rel="nofollow" href="#">Aviso Legal</a></li>
                    <li><a rel="nofollow" href="#">Política de Cookies</a></li>
                    <li><a rel="nofollow" href="#">Política de Privacidad</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="<?= base_url('assets/js/owl.carousel.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/bootstrap.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/jcarousel.js'); ?>"></script>
<script>
    $(document).ready(function(){
        jQuery(".service-list-item").length && jQuery('.service-list-item').owlCarousel({
            nav			: true
            ,dots 		: false
            ,items		: 3
            ,margin		: 0
            ,responsive : {
                0:{
                    items: 1
                }
                ,768:{
                    items: 2
                }
                ,980:{
                    items: 3
                }
                /*,1024:{
                    items: 4,
                    nav	: false
                }*/
            }
            ,navText	: ['<span class="button-prev"></span>', '<span class="button-next"></span>']
        });

        if(jQuery().jcarousel) {
            // games carousel
            $('.jcarousel').jcarousel({
                wrap: 'circular'
            });
            $('.jcarousel').jcarouselAutoscroll({
                target: '+=3',
                interval: 4000,
                autostart: true
            });

            // Featured Carousel - Vertical
            $('.carousel-clip').jcarousel({
                vertical: true,
                wrap: 'circular'
            });
            $('.carousel-prev').jcarouselControl({target: '-=4'});
            $('.carousel-next').jcarouselControl({target: '+=4'});
        }

        /**/

        $('#search-form').keyup(function(e){
            console.log(e);
        })


    });
</script>
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5b784b4780cb9edb"></script>

</body>
</html>