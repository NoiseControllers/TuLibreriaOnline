<div class="books-carousel">
    <div class="container">
        <div class="carousel-content">
            <div class="carousel fcarousel fcarousel-6">
                <div class="pagetitle">
                    <h1>Novedades</h1>
                </div>
                <div class="carousel-container">
                    <div class="jcarousel">
                        <ul>
                            {newBooks}
                                <li>
                                    <div class="homethumb">
                                        <a href="<?= base_url('libro/{slug}/{asin}'); ?>">
                                            <img src="<?= base_url("upload/images/{thumbnail}"); ?>" alt="{title}" width="180px" height="270px" >
                                            <span class="overlay"><p>{title}</p></span>
                                        </a>
                                    </div>
                                </li>
                            {/newBooks}
                        </ul>
                    </div>
                    <div class="carousel-prev"></div>
                    <div class="carousel-next"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="pagetitle">
        <h1>Libros destacados</h1>
    </div>
    <div class="pageresults">
        <ul class="bookslist">
            {randomBooks}
                <li class="book">
                    <div class="pagethumb">
                        <a href="<?= base_url('libro/{slug}/{asin}'); ?>">
                            <img src="<?= base_url('upload/images/{thumbnail}'); ?>" class="display: inline;" alt="{title}">
                        </a>
                    </div>
                    <div class="info">
                        <h3><a href="<?= base_url('libro/{slug}/{asin}'); ?>">{title}</a></h3>
                        <h4>{author}</h4>
                    </div>
                </li>
            {/randomBooks}
        </ul>
    </div>
</div>
<div class="newsletters">
    <div class="container">
        <div class="newsletters-txt">
            <h2>¡SUSCRÍBETE Y CONSIGUE GRANDES OFERTAS!</h2>
        </div>
        <div class="newsletters-input">
            <form>
                <input type="text" placeholder="Introduce tu email">
                <button>Suscribirme</button>
            </form>
        </div>
    </div>
</div>
