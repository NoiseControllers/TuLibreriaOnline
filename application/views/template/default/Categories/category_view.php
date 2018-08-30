<div class="container">
    <div class="pagetitle">
        <h1>Libros {category_name}</h1>
    </div>
        <div class="pageresults">
            <ul class="bookslist">
                {category_books}
                    <li class="book">
                        <div class="pagethumb">
                            <a href="<?= base_url('libro/{slug}/{asin}'); ?>">
                                <img src="<?= base_url('upload/images/{thumbnail}'); ?>" class="display: inline;" alt="{title} - {author}">
                            </a>
                        </div>
                        <div class="info">
                            <h3><a href="<?= base_url('libro/{slug}/{asin}'); ?>" >{title}</a></h3>
                            <h4>{author}</h4>
                        </div>
                    </li>
                {/category_books}
            </ul>
        </div>
    </div>