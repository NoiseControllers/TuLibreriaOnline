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
                    <div class="addthis_toolbox addthis_default_style addthis_32x32_style">
                        <a class="addthis_button_twitter addthis_button_preferred_1 at300b at300b" title="Preferred_1" href="#"><span class="at-icon-wrapper" style="background-color: rgb(29, 161, 242); line-height: 32px; height: 32px; width: 32px;"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" version="1.1" role="img" aria-labelledby="at-svg-twitter-1" title="Twitter" alt="Twitter" class="at-icon at-icon-twitter" style="width: 32px; height: 32px;"><title id="at-svg-twitter-1">Twitter</title><g><path d="M27.996 10.116c-.81.36-1.68.602-2.592.71a4.526 4.526 0 0 0 1.984-2.496 9.037 9.037 0 0 1-2.866 1.095 4.513 4.513 0 0 0-7.69 4.116 12.81 12.81 0 0 1-9.3-4.715 4.49 4.49 0 0 0-.612 2.27 4.51 4.51 0 0 0 2.008 3.755 4.495 4.495 0 0 1-2.044-.564v.057a4.515 4.515 0 0 0 3.62 4.425 4.52 4.52 0 0 1-2.04.077 4.517 4.517 0 0 0 4.217 3.134 9.055 9.055 0 0 1-5.604 1.93A9.18 9.18 0 0 1 6 23.85a12.773 12.773 0 0 0 6.918 2.027c8.3 0 12.84-6.876 12.84-12.84 0-.195-.005-.39-.014-.583a9.172 9.172 0 0 0 2.252-2.336" fill-rule="evenodd"></path></g></svg></span></a>
                        <a class="addthis_button_facebook addthis_button_preferred_2 at300b at300b" title="Preferred_2" href="#"><span class="at-icon-wrapper" style="background-color: rgb(59, 89, 152); line-height: 32px; height: 32px; width: 32px;"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" version="1.1" role="img" aria-labelledby="at-svg-facebook-2" title="Facebook" alt="Facebook" class="at-icon at-icon-facebook" style="width: 32px; height: 32px;"><title id="at-svg-facebook-2">Facebook</title><g><path d="M22 5.16c-.406-.054-1.806-.16-3.43-.16-3.4 0-5.733 1.825-5.733 5.17v2.882H9v3.913h3.837V27h4.604V16.965h3.823l.587-3.913h-4.41v-2.5c0-1.123.347-1.903 2.198-1.903H22V5.16z" fill-rule="evenodd"></path></g></svg></span></a>
                        <a class="addthis_button_print addthis_button_preferred_3 at300b at300b" title="Preferred_3" href="#" target="_blank"><span class="at-icon-wrapper" style="background-color: rgb(115, 138, 141); line-height: 32px; height: 32px; width: 32px;"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" version="1.1" role="img" aria-labelledby="at-svg-print-3" title="Print" alt="Print" class="at-icon at-icon-print" style="width: 32px; height: 32px;"><title id="at-svg-print-3">Print</title><g><path d="M24.67 10.62h-2.86V7.49H10.82v3.12H7.95c-.5 0-.9.4-.9.9v7.66h3.77v1.31L15 24.66h6.81v-5.44h3.77v-7.7c-.01-.5-.41-.9-.91-.9zM11.88 8.56h8.86v2.06h-8.86V8.56zm10.98 9.18h-1.05v-2.1h-1.06v7.96H16.4c-1.58 0-.82-3.74-.82-3.74s-3.65.89-3.69-.78v-3.43h-1.06v2.06H9.77v-3.58h13.09v3.61zm.75-4.91c-.4 0-.72-.32-.72-.72s.32-.72.72-.72c.4 0 .72.32.72.72s-.32.72-.72.72zm-4.12 2.96h-6.1v1.06h6.1v-1.06zm-6.11 3.15h6.1v-1.06h-6.1v1.06z"></path></g></svg></span></a>
                        <a class="addthis_button_compact at300m" href="#"><span class="at-icon-wrapper" style="background-color: rgb(255, 101, 80); line-height: 32px; height: 32px; width: 32px;"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" version="1.1" role="img" aria-labelledby="at-svg-addthis-4" title="More" alt="More" class="at-icon at-icon-addthis" style="width: 32px; height: 32px;"><title id="at-svg-addthis-4">Addthis</title><g><path d="M18 14V8h-4v6H8v4h6v6h4v-6h6v-4h-6z" fill-rule="evenodd"></path></g></svg></span></a>
                        <div class="atclear"></div>
                    </div>
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
        </div>
    </div>
    <div class="col-md-4">

    </div>
</div>