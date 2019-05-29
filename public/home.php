<div class="container-fluid">

    <div class="jumbotron home-jumbotron">
        <hgroup class="color-white">
            <h1>Meu lindo site do curso</h1>
            <p>Este site eu fiz eu sala de aula</p>
        </hgroup>
    </div>

    <!-- barra de navegação para os itens que serão de visualização public -->
    <nav class="navbar-expand-lg bg-dark justify-content-between color-white mb-1">
        <ul class="navbar navbar-nav ">

            <li class="navbar-item">
                <a class="nav-link color-white" href="#"><i class="fa fa-home" aria-hidden="true"></i>  Início <span class="sr-only">(current)</span></a>
            </li>

            <li class="navbar-item">
                <a class="nav-link color-white" href="manterdados.php">
                <i class="fa fa-table" aria-hidden="true"></i>  Sistema <span class="sr-only"></span></a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link color-white dropdown-toggle" href="#" id="navbarDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-list-alt" aria-hidden="true"></i>  Outras ações
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>

            <li class="navbar-item mr-auto disabled">
                <a class="nav-link color-white"
                    href="#">
                   <?=!empty($_SESSION['logado'])? "<i class='fa fa-user' aria-hidden='true'></i>  Seja bem vindo {$_SESSION['nome']}":""?>
                    <span class="sr-only"></span>
                </a>
            </li>

            <!-- exibe a opção Entrar ou Sair do sistema conforme status da sessão -->
            <li class="nav-item">
                <?php if ( isset($_SESSION["logado"]) && $_SESSION["logado"]){; ?>
                <a class="nav-link color-white" href="logout.php"> <i class="fa fa-door-open" aria-hidden="true"></i> Sair <span class="sr-only"></span></a>
                <?php } else { ?>
                <a class="nav-link color-white" href="login.php"><i class="fa fa-sign-in-alt" aria-hidden="true"></i>  Entrar <span class="sr-only"></span></a>
                <?php } ?>
            </li>
        </ul>


    </nav>


    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">

        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner h-180">
            <div class="carousel-item active">
                <img class="w-100" src="assets/img/foto1.jpeg" alt="First slide">
                <div class="carousel-caption d-none d-block">
                    <h5>O titulo do slide 1</h5>
                    <p>Este é o título do slide 1</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="assets/img/foto2.jpeg" alt="Second slide">
                <div class="carousel-caption d-none d-block">
                    <h5>O titulo do slide 2</h5>
                    <p>Este é o título do slide 2</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="assets/img/foto3.jpeg" alt="Third slide">
                <div class="carousel-caption d-none d-block">
                    <h5>O titulo do slide 3</h5>
                    <p>Este é o título do slide 3</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="assets/img/foto4.jpeg" alt="Third slide">
                <div class="carousel-caption d-none d-block">
                    <h5>O titulo do slide 4</h5>
                    <p>Este é o título do slide 4</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<div class="mt-4"></div>

<div class="row">
    <div class="col-4">
        <div class="card">
            <div class="card-heading">
                <div class="card-title text-center bg-dark color-white">Quem somos</div>
            </div>
            <div class="card-body text-justify">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore similique in quibusdam beatae
                voluptas. Odit maiores, tempore ipsum illum alias ab cumque reiciendis, quasi facere, cupiditate
                corporis nulla optio mollitia?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis illum dolores, sunt excepturi dicta
                vero, laudantium commodi quaerat, at possimus atque voluptatibus necessitatibus voluptas autem
                voluptatum deserunt consequatur nisi rerum!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem dicta enim ullam libero. Et similique
                quisquam tempore sapiente. Porro veritatis nulla aliquid illo possimus, quaerat exercitationem? Libero
                vero fuga ratione.
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sequi facere quisquam nobis laudantium
                doloribus dolorum, quidem consequatur enim voluptatibus labore, ad asperiores inventore ipsa aspernatur
                amet et voluptate reprehenderit officia.
            </div>
            <div class="card-footing text-center">
                <button class="btn btn-sm btn-primary">
                    Veja mais
                </button>
            </div>
        </div>
    </div>
    <div class="col-4">
        <div class="card">
            <div class="card-heading">
                <div class="card-title text-center bg-dark color-white">Quem somos</div>
            </div>
            <div class="card-body text-justify">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore similique in quibusdam beatae
                voluptas. Odit maiores, tempore ipsum illum alias ab cumque reiciendis, quasi facere, cupiditate
                corporis nulla optio mollitia?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. At molestias eos iusto in? Eligendi, beatae aut
                perferendis quia illum officia sequi asperiores tenetur ad, labore, reprehenderit commodi molestiae
                voluptatibus minus?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia quisquam consequuntur quidem? Officia
                minus possimus rerum eligendi iste? Velit illo non aspernatur sequi unde quod necessitatibus totam
                expedita. Necessitatibus, iure?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore similique in quibusdam beatae
                voluptas. Odit maiores, tempore ipsum illum alias ab cumque reiciendis, quasi facere, cupiditate
                corporis nulla optio mollitia?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. At molestias eos iusto in? Eligendi, beatae aut
                perferendis quia illum officia sequi asperiores tenetur ad, labore, reprehenderit commodi molestiae
                voluptatibus minus?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia quisquam consequuntur quidem? Officia
                minus possimus rerum eligendi iste? Velit illo non aspernatur sequi unde quod necessitatibus totam
                expedita. Necessitatibus, iure?
            </div>
            <div class="card-footing text-center">
                <button class="btn btn-sm btn-primary">
                    Veja mais
                </button>
            </div>
        </div>
    </div>
    <div class="col-4">
        <div class="card">
            <div class="card-heading">
                <div class="card-title text-center bg-dark color-white">Quem somos</div>
            </div>
            <div class="card-body text-justify">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore similique in quibusdam beatae
                voluptas. Odit maiores, tempore ipsum illum alias ab cumque reiciendis, quasi facere, cupiditate
                corporis nulla optio mollitia?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore similique in quibusdam beatae
                voluptas. Odit maiores, tempore ipsum illum alias ab cumque reiciendis, quasi facere, cupiditate
                corporis nulla optio mollitia?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore similique in quibusdam beatae
                voluptas. Odit maiores, tempore ipsum illum alias ab cumque reiciendis, quasi facere, cupiditate
                corporis nulla optio mollitia?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore similique in quibusdam beatae
                voluptas. Odit maiores, tempore ipsum illum alias ab cumque reiciendis, quasi facere, cupiditate
                corporis nulla optio mollitia?
            </div>
            <div class="card-footing text-center">
                <button class="btn btn-sm btn-primary">
                    Veja mais
                </button>
            </div>

        </div>
    </div>
</div>

<div class="footer-home mt-5 bg-dark">


</div>
</div>