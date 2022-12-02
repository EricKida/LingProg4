<nav class="navbar navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
        <!-- Título do Site -->
        <h2 class="navbar-brand">Bem vindo <b class="text-primary">
                <?php echo $_SESSION['user']; ?>
            </b>!</h2>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar"
            aria-controls="offcanvasDarkNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Abrir Menu Lateral -->
        <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar"
            aria-labelledby="offcanvasDarkNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Menu</h5>
                <!-- Botão de Logout -->
                <button class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exitLogin"><i
                        class="bi bi-box-arrow-left"></i> Sair</button>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close">
                </button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <!-- Página Inicial -->
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="historic.php">Histórico</a>
                    </li>
                </ul>
                <!-- Adicionar Produto -->
                <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#modalAdd"
                    style="width:100%" title="Adicionar Item">
                    <b>+</b>
                </button>
            </div>
        </div>
    </div>
</nav>

<!-- Modal de Confirmação de Logout -->
<div class="modal fade" id="exitLogin" tabindex="-1" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="text-center mt-2">
                <h5 class="modal-title" id="modalTitleId">Já vai
                    <?php echo $_SESSION['user']; ?>?
                </h5>
            </div>
            <div class="modal-body text-center">
                <div class="container-fluid">
                    Quer mesmo sair da sua conta atual?
                </div>
            </div>
            <div class="modal-footer mx-auto">
                <form action="inc/logout.php" method="POST">
                    <button type="submit" class="btn btn-danger" data-bs-dismiss="modal">Sair</button>
                </form>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">Não</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal de Adição de Produto -->
<div class="modal fade" id="modalAdd" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Adicionar Item</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form action="inc/addprodt.php" method="POST">
                        <div class="mb-3">
                            <input type="text" class="form-control" name="nm_ssd" placeholder="Nome do Produto"
                                required>
                            <input type="text" class="form-control mt-3" name="nm_marca_ssd"
                                placeholder="Marca do Produto" required>
                            <input type="number" class="form-control mt-3" name="qt_armazenamento_ssd"
                                placeholder="Armazenamento do Produto (Somente Números)" required>
                            <input type="number" class="form-control mt-3" name="vl_preco_ssd"
                                placeholder="Preço do Produto" required>
                        </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success">Cadastrar Produto</button>
                </form>
            </div>
        </div>
    </div>
</div>
