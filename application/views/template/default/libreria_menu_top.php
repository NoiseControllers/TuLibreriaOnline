<header>
    <div class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="navbar-brand">
                    <a href="{site_url}"><img src="{site_logo}" alt="BookStore" border="0"><div class="ripple-container"></div></a>
                </div>
            </div>
            <div class="navbar-collapse navbar-responsive-collapse collapse" aria-expanded="false">
                <ul class="nav navbar-nav">
                    <li><a href="#">Inicio</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown">Categorias <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <div class="drop-row">
                                {site_categories}
                                    <li><a href="">{name}</a></li>
                                {/site_categories}
                            </div>
                        </ul>
                    </li>
                </ul>
                <form action="#" class="navbar-form navbar-right hidden-sm">
                    <div class="form-group form-group-sm is-empty"><input type="text" placeholder="Buscar... " name="q" class="form-control" value=""><span class="material-input"></span></div>
                    <input type="hidden" name="change" value="1">
                    <button type="submit" class="searchbut"><i class="material-icons">search</i></button>
                </form>
            </div>
        </div>
    </div>
    <div class="top-bar-service">
        <div class="container">
            <div class="service-bar">
                <div class="service-list-item owl-carousel owl-theme owl-loaded">
                    <div class="service-item">
                        <div class="service-img"><img src="assets/img/services/bs-3_45x.png" alt=""></div>
                        <div class="text" style="color: #1b8bcc;">
                            <div class="title">Catalogo</div>
                            <div class="caption">Somos distribuidor oficial con envío 24h y garantía de originalidad.</div>
                        </div>
                    </div>
                    <div class="service-item">
                        <div class="service-img"><img src="assets/img/services/bs-1_45x.png" alt=""></div>
                        <div class="text" style="color: #1b8bcc;">
                            <div class="title">Envio Rapido</div>
                            <div class="caption">Envío y devolución GRATUITOS.</div>
                        </div>
                    </div>
                    <div class="service-item">
                        <div class="service-img"><img src="assets/img/services/bs-4_45x.png" alt=""></div>
                        <div class="text" style="color: #1b8bcc;">
                            <div class="title">Pago Seguro</div>
                            <div class="caption">Utilizamos la plataforma de pago seguro de Amazon.es</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>