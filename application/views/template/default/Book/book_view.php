<div class="container">
    <div class="col-md-8" style="margin-top: 30px;padding-left: 0px;">
        <div class="postmain">
            <div class="headpageimage">
                <img src="<?= base_url('upload/images/{book_thumbnail}'); ?>" width="180px" height="270px" alt="{book_title} - {book_author}" style="display: inline;">
            </div>
            <div class="headpageinfo">
                <h1 class="product-title">{book_title}</h1>
                <h2 class="product-stock">Por {book_author}</h2>
                <ul style="list-style:none;padding: 0px;">
                    <li><b>Fecha de lanzamiento:</b> {book_checkOutDate}</li>
                    <li><b>Genero:</b> {book_categorie}</li>
                </ul>
            </div>
            <div class="postactions">
                <a href="#" target="_blank" class="btn btn-raised btn-danger">Comprar</a>
                <div style="margin-top: 10px;display: inline-block;float: right;">
                    <div class="addthis_inline_share_toolbox"></div>
                </div>
            </div>
            <div class="postmaintitle" style="margin-bottom: 15px;">
                <h3>Sinopsis</h3>
            </div>
            <div class="postmaindescr">
                {book_sinopsis}
            </div>
        </div>
        <div class="postmain">
            <div class="postmaintitle">
                <h3>Comentarios</h3>
            </div>
            <div class="postmaindescr">
                <div class="alert alert-danger">
                    <p>Los comentarios están desactivados.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">

    </div>
</div>