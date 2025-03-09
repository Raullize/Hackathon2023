<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?= url("assets/web/images/logo.jpg"); ?>" type="image/jpg">
    <link rel="stylesheet" href="<?= url("assets/web/css/style.css"); ?>">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>CalamityControl - Gestão de Ajuda Humanitária</title>
</head>

<body class="home-page">
    <header class="main-header">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="<?= url(""); ?>">
                    <span class="logo-text">CalamityControl</span>
                </a>
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMain" 
                        aria-controls="navbarMain" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarMain">
                    <form class="form-inline my-2 my-lg-0 flex-grow-1 mx-lg-4">
                        <div class="input-group search-container">
                            <input type="text" class="form-control search-input" placeholder="Buscar cidade afetada...">
                            <div class="input-group-append">
                                <button class="btn btn-search" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                    
                    <div class="nav-actions">
                        <a href="#" class="btn btn-donate">
                            <i class="fa fa-gift"></i> Doar agora
                        </a>
                        <a href="#" class="btn btn-help ml-2">
                            <i class="fas fa-question-circle"></i> Suporte
                        </a>
                        <a href="<?= url("login"); ?>" class="user-profile ml-2">
                            <div class="profile-icon">
                                <i class="fas fa-user"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <main class="main-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <section class="calamity-ranking card-container">
                        <div class="section-header">
                            <h2><i class="fas fa-chart-line"></i> Ranking de Necessidades</h2>
                            <p class="section-description">Cidades que mais precisam de ajuda neste momento</p>
                        </div>
                        
                        <div class="ranking-list">
                            <div class="ranking-item critical">
                                <div class="rank-number">1</div>
                                <div class="rank-info">
                                    <h4>Cidade 1</h4>
                                    <div class="rank-details">
                                        <span class="rank-label">Nível de necessidade:</span>
                                        <div class="progress-container">
                                            <div class="progress">
                                                <div class="progress-bar bg-critical" role="progressbar" style="width: 100%"></div>
                                            </div>
                                            <span class="progress-value">10</span>
                                        </div>
                                    </div>
                                    <div class="rank-needs">
                                        <span class="need-tag">Alimentos</span>
                                        <span class="need-tag">Água</span>
                                        <span class="need-tag">Medicamentos</span>
                                    </div>
                                </div>
                                <a href="#" class="btn-help-now">Ajudar</a>
                            </div>
                            
                            <div class="ranking-item critical">
                                <div class="rank-number">2</div>
                                <div class="rank-info">
                                    <h4>Cidade 2</h4>
                                    <div class="rank-details">
                                        <span class="rank-label">Nível de necessidade:</span>
                                        <div class="progress-container">
                                            <div class="progress">
                                                <div class="progress-bar bg-critical" role="progressbar" style="width: 80%"></div>
                                            </div>
                                            <span class="progress-value">8</span>
                                        </div>
                                    </div>
                                    <div class="rank-needs">
                                        <span class="need-tag">Roupas</span>
                                        <span class="need-tag">Abrigo</span>
                                    </div>
                                </div>
                                <a href="#" class="btn-help-now">Ajudar</a>
                            </div>
                            
                            <div class="ranking-item high">
                                <div class="rank-number">3</div>
                                <div class="rank-info">
                                    <h4>Cidade 3</h4>
                                    <div class="rank-details">
                                        <span class="rank-label">Nível de necessidade:</span>
                                        <div class="progress-container">
                                            <div class="progress">
                                                <div class="progress-bar bg-high" role="progressbar" style="width: 70%"></div>
                                            </div>
                                            <span class="progress-value">7</span>
                                        </div>
                                    </div>
                                    <div class="rank-needs">
                                        <span class="need-tag">Higiene</span>
                                        <span class="need-tag">Roupas</span>
                                    </div>
                                </div>
                                <a href="#" class="btn-help-now">Ajudar</a>
                            </div>
                            
                            <div class="ranking-item medium">
                                <div class="rank-number">4</div>
                                <div class="rank-info">
                                    <h4>Cidade 4</h4>
                                    <div class="rank-details">
                                        <span class="rank-label">Nível de necessidade:</span>
                                        <div class="progress-container">
                                            <div class="progress">
                                                <div class="progress-bar bg-medium" role="progressbar" style="width: 50%"></div>
                                            </div>
                                            <span class="progress-value">5</span>
                                        </div>
                                    </div>
                                    <div class="rank-needs">
                                        <span class="need-tag">Água</span>
                                    </div>
                                </div>
                                <a href="#" class="btn-help-now">Ajudar</a>
                            </div>
                            
                            <div class="ranking-item medium">
                                <div class="rank-number">5</div>
                                <div class="rank-info">
                                    <h4>Cidade 5</h4>
                                    <div class="rank-details">
                                        <span class="rank-label">Nível de necessidade:</span>
                                        <div class="progress-container">
                                            <div class="progress">
                                                <div class="progress-bar bg-medium" role="progressbar" style="width: 50%"></div>
                                            </div>
                                            <span class="progress-value">5</span>
                                        </div>
                                    </div>
                                    <div class="rank-needs">
                                        <span class="need-tag">Alimentos</span>
                                    </div>
                                </div>
                                <a href="#" class="btn-help-now">Ajudar</a>
                            </div>
                        </div>
                    </section>
                </div>
                
                <div class="col-lg-5">
                    <section class="weather-card card-container">
                        <div class="section-header">
                            <h2><i class="fas fa-cloud-sun"></i> Previsão do Tempo</h2>
                            <p class="section-description">Porto Alegre, RS</p>
                        </div>
                        <div id="weather" class="weather-content"></div>
                    </section>
                    
                    <section class="news-card card-container">
                        <div class="section-header">
                            <h2><i class="fas fa-newspaper"></i> Últimas Notícias</h2>
                            <p class="section-description">Atualizações sobre eventos climáticos</p>
                        </div>
                        
                        <div class="news-content">
                            <article class="news-item">
                                <h3>Rio Ibirapuitã volta a atingir cota de inundação em Alegrete</h3>
                                <div class="news-meta">
                                    <span class="news-date"><i class="far fa-calendar-alt"></i> 28/09/2023</span>
                                    <span class="news-source"><i class="fas fa-newspaper"></i> Fonte: Defesa Civil</span>
                                </div>
                                <p class="news-excerpt">Segundo a defesa civil, 266 pessoas continuam fora de casa e ainda não devem retornar.</p>
                                <a href="#" class="news-link">Leia mais <i class="fas fa-arrow-right"></i></a>
                            </article>
                            
                            <article class="news-item">
                                <h3>Meteorologia prevê mais chuvas para região Sul</h3>
                                <div class="news-meta">
                                    <span class="news-date"><i class="far fa-calendar-alt"></i> 27/09/2023</span>
                                    <span class="news-source"><i class="fas fa-newspaper"></i> Fonte: INMET</span>
                                </div>
                                <p class="news-excerpt">Previsão indica novos volumes significativos de precipitação para os próximos dias.</p>
                                <a href="#" class="news-link">Leia mais <i class="fas fa-arrow-right"></i></a>
                            </article>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </main>

    <footer class="main-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h4>CalamityControl</h4>
                    <p>Plataforma de gerenciamento de doações e suprimentos em cidades afetadas por inundações.</p>
                </div>
                <div class="col-md-4">
                    <h4>Links Úteis</h4>
                    <ul>
                        <li><a href="#">Defesa Civil</a></li>
                        <li><a href="#">Como Ajudar</a></li>
                        <li><a href="#">Sobre Nós</a></li>
                        <li><a href="#">Contato</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h4>Contato de Emergência</h4>
                    <p><i class="fas fa-phone"></i> Defesa Civil: 199</p>
                    <p><i class="fas fa-phone"></i> Bombeiros: 193</p>
                    <p><i class="fas fa-phone"></i> SAMU: 192</p>
                </div>
            </div>
            <div class="copyright">
                <p>&copy; 2023 CalamityControl. Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script async src="<?= url("assets/web/scripts/apiTempo.js"); ?>"></script>
</body>

</html>