<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - CalamityControl</title>
    <link rel="icon" href="<?= url("assets/web/images/logo.jpg"); ?>" type="image/jpg">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= url('assets/web/css/dashboard.css'); ?>">
</head>

<body>
    <div class="dashboard-container">
        <!-- Sidebar Navigation -->
        <aside class="sidebar">
            <div class="sidebar-header">
                <div class="logo">
                    <a href="<?= url(""); ?>">
                        <span class="logo-text">CalamityControl</span>
                    </a>
                </div>
                <button class="sidebar-toggle d-md-none">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            
            <div class="user-profile">
                <div class="user-avatar">
                    <span>JD</span>
                </div>
                <div class="user-info">
                    <h5>João Doador</h5>
                    <p>Doador Nível Prata</p>
                </div>
            </div>
            
            <nav class="sidebar-nav">
                <ul>
                    <li class="active">
                        <a href="#">
                            <i class="fas fa-tachometer-alt"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fas fa-hand-holding-heart"></i>
                            <span>Minhas Doações</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fas fa-city"></i>
                            <span>Cidades em Alerta</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fas fa-box-open"></i>
                            <span>Itens Necessários</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fas fa-newspaper"></i>
                            <span>Notícias Recentes</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fas fa-cog"></i>
                            <span>Configurações</span>
                        </a>
                    </li>
                    <li class="logout">
                        <a href="<?= url(""); ?>">
                            <i class="fas fa-sign-out-alt"></i>
                            <span>Sair</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </aside>
        
        <!-- Main Content -->
        <main class="main-content">
            <!-- Top Header -->
            <header class="top-header">
                <button class="menu-toggle d-md-none">
                    <i class="fas fa-bars"></i>
                </button>
                
                <div class="search-bar">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Buscar cidades, itens, doações...">
                        <div class="input-group-append">
                            <button class="btn btn-search">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
                
                <div class="header-actions">
                    <div class="notification-bell">
                        <a href="#" class="icon-button">
                            <i class="fas fa-bell"></i>
                            <span class="badge">3</span>
                        </a>
                    </div>
                    <div class="messages">
                        <a href="#" class="icon-button">
                            <i class="fas fa-envelope"></i>
                            <span class="badge">5</span>
                        </a>
                    </div>
                    <div class="user-dropdown">
                        <a href="#" class="user-toggle">
                            <div class="user-avatar-sm">
                                <span>JD</span>
                            </div>
                            <span class="d-none d-md-inline-block ml-2">João Doador</span>
                            <i class="fas fa-chevron-down ml-2"></i>
                        </a>
                    </div>
                </div>
            </header>
            
            <!-- Dashboard Content -->
            <div class="dashboard-content">
                <div class="page-header">
                    <h1>Dashboard</h1>
                    <p>Bem-vindo de volta, João! Veja o impacto de suas contribuições.</p>
                </div>
                
                <!-- Stats Cards -->
                <div class="row stats-row">
                    <div class="col-md-6 col-lg-3 mb-4">
                        <div class="stats-card">
                            <div class="stats-icon bg-primary">
                                <i class="fas fa-donate"></i>
                            </div>
                            <div class="stats-info">
                                <h5>Total Doado</h5>
                                <h3>R$ 580,00</h3>
                                <p class="trend up">
                                    <i class="fas fa-arrow-up"></i> 12% este mês
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-3 mb-4">
                        <div class="stats-card">
                            <div class="stats-icon bg-success">
                                <i class="fas fa-box"></i>
                            </div>
                            <div class="stats-info">
                                <h5>Itens Doados</h5>
                                <h3>24 itens</h3>
                                <p class="trend up">
                                    <i class="fas fa-arrow-up"></i> 8% este mês
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-3 mb-4">
                        <div class="stats-card">
                            <div class="stats-icon bg-warning">
                                <i class="fas fa-users"></i>
                            </div>
                            <div class="stats-info">
                                <h5>Pessoas Ajudadas</h5>
                                <h3>187</h3>
                                <p class="trend flat">
                                    <i class="fas fa-equals"></i> Estável
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-3 mb-4">
                        <div class="stats-card">
                            <div class="stats-icon bg-danger">
                                <i class="fas fa-city"></i>
                            </div>
                            <div class="stats-info">
                                <h5>Cidades Apoiadas</h5>
                                <h3>5</h3>
                                <p class="trend up">
                                    <i class="fas fa-arrow-up"></i> 2 novas
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Recent Donations & Cities in Need -->
                <div class="row">
                    <!-- Recent Donations -->
                    <div class="col-lg-6 mb-4">
                        <div class="content-card">
                            <div class="card-header">
                                <h4>
                                    <i class="fas fa-history"></i>
                                    Doações Recentes
                                </h4>
                                <a href="#" class="view-all">Ver todas</a>
                            </div>
                            <div class="card-body p-0">
                                <div class="donation-list">
                                    <div class="donation-item">
                                        <div class="donation-icon">
                                            <i class="fas fa-tshirt"></i>
                                        </div>
                                        <div class="donation-info">
                                            <h5>Roupas de Inverno</h5>
                                            <p>Doado para Porto Alegre</p>
                                        </div>
                                        <div class="donation-date">
                                            <span>Hoje</span>
                                        </div>
                                        <div class="donation-status success">
                                            Entregue
                                        </div>
                                    </div>
                                    
                                    <div class="donation-item">
                                        <div class="donation-icon">
                                            <i class="fas fa-money-bill-wave"></i>
                                        </div>
                                        <div class="donation-info">
                                            <h5>R$ 150,00</h5>
                                            <p>Doado para Lajeado</p>
                                        </div>
                                        <div class="donation-date">
                                            <span>Ontem</span>
                                        </div>
                                        <div class="donation-status success">
                                            Recebido
                                        </div>
                                    </div>
                                    
                                    <div class="donation-item">
                                        <div class="donation-icon">
                                            <i class="fas fa-prescription-bottle"></i>
                                        </div>
                                        <div class="donation-info">
                                            <h5>Medicamentos</h5>
                                            <p>Doado para Alegrete</p>
                                        </div>
                                        <div class="donation-date">
                                            <span>3 dias atrás</span>
                                        </div>
                                        <div class="donation-status pending">
                                            Em trânsito
                                        </div>
                                    </div>
                                    
                                    <div class="donation-item">
                                        <div class="donation-icon">
                                            <i class="fas fa-utensils"></i>
                                        </div>
                                        <div class="donation-info">
                                            <h5>Alimentos não perecíveis</h5>
                                            <p>Doado para Canoas</p>
                                        </div>
                                        <div class="donation-date">
                                            <span>1 semana atrás</span>
                                        </div>
                                        <div class="donation-status success">
                                            Entregue
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Cities in Need -->
                    <div class="col-lg-6 mb-4">
                        <div class="content-card">
                            <div class="card-header">
                                <h4>
                                    <i class="fas fa-exclamation-circle"></i>
                                    Cidades em Necessidade Urgente
                                </h4>
                                <a href="#" class="view-all">Ver todas</a>
                            </div>
                            <div class="card-body p-0">
                                <div class="city-list">
                                    <div class="city-item">
                                        <div class="city-info">
                                            <h5>Porto Alegre</h5>
                                            <div class="needs-tags">
                                                <span class="need-tag urgent">Água potável</span>
                                                <span class="need-tag urgent">Cobertores</span>
                                                <span class="need-tag high">Alimentos</span>
                                            </div>
                                        </div>
                                        <div class="city-alert critical">
                                            Crítico
                                        </div>
                                        <div class="city-action">
                                            <a href="#" class="btn btn-sm btn-outline-primary">Ajudar</a>
                                        </div>
                                    </div>
                                    
                                    <div class="city-item">
                                        <div class="city-info">
                                            <h5>São Leopoldo</h5>
                                            <div class="needs-tags">
                                                <span class="need-tag high">Roupas</span>
                                                <span class="need-tag high">Remédios</span>
                                            </div>
                                        </div>
                                        <div class="city-alert high">
                                            Alto
                                        </div>
                                        <div class="city-action">
                                            <a href="#" class="btn btn-sm btn-outline-primary">Ajudar</a>
                                        </div>
                                    </div>
                                    
                                    <div class="city-item">
                                        <div class="city-info">
                                            <h5>Canoas</h5>
                                            <div class="needs-tags">
                                                <span class="need-tag medium">Alimentos</span>
                                                <span class="need-tag medium">Kit Higiene</span>
                                            </div>
                                        </div>
                                        <div class="city-alert medium">
                                            Médio
                                        </div>
                                        <div class="city-action">
                                            <a href="#" class="btn btn-sm btn-outline-primary">Ajudar</a>
                                        </div>
                                    </div>
                                    
                                    <div class="city-item">
                                        <div class="city-info">
                                            <h5>Lajeado</h5>
                                            <div class="needs-tags">
                                                <span class="need-tag high">Água</span>
                                                <span class="need-tag medium">Itens de Limpeza</span>
                                            </div>
                                        </div>
                                        <div class="city-alert high">
                                            Alto
                                        </div>
                                        <div class="city-action">
                                            <a href="#" class="btn btn-sm btn-outline-primary">Ajudar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Donation Progress & Quick Actions -->
                <div class="row">
                    <!-- Donation Progress -->
                    <div class="col-lg-8 mb-4">
                        <div class="content-card">
                            <div class="card-header">
                                <h4>
                                    <i class="fas fa-chart-pie"></i>
                                    Progresso das Metas de Doação
                                </h4>
                                <div class="time-filter">
                                    <select class="form-control form-control-sm">
                                        <option>Este mês</option>
                                        <option>Último trimestre</option>
                                        <option>Este ano</option>
                                    </select>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="progress-container mb-4">
                                    <div class="progress-header">
                                        <div class="progress-label">
                                            <h6>Alimentos</h6>
                                            <span>75% completo</span>
                                        </div>
                                        <div class="progress-value">
                                            750kg / 1000kg
                                        </div>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 75%"></div>
                                    </div>
                                </div>
                                
                                <div class="progress-container mb-4">
                                    <div class="progress-header">
                                        <div class="progress-label">
                                            <h6>Itens de Higiene</h6>
                                            <span>45% completo</span>
                                        </div>
                                        <div class="progress-value">
                                            450 / 1000 unidades
                                        </div>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 45%"></div>
                                    </div>
                                </div>
                                
                                <div class="progress-container mb-4">
                                    <div class="progress-header">
                                        <div class="progress-label">
                                            <h6>Roupas e Cobertores</h6>
                                            <span>30% completo</span>
                                        </div>
                                        <div class="progress-value">
                                            300 / 1000 peças
                                        </div>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 30%"></div>
                                    </div>
                                </div>
                                
                                <div class="progress-container">
                                    <div class="progress-header">
                                        <div class="progress-label">
                                            <h6>Medicamentos</h6>
                                            <span>60% completo</span>
                                        </div>
                                        <div class="progress-value">
                                            600 / 1000 unidades
                                        </div>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 60%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Quick Actions -->
                    <div class="col-lg-4 mb-4">
                        <div class="content-card">
                            <div class="card-header">
                                <h4>
                                    <i class="fas fa-bolt"></i>
                                    Ações Rápidas
                                </h4>
                            </div>
                            <div class="card-body">
                                <div class="quick-actions">
                                    <a href="#" class="quick-action-btn">
                                        <i class="fas fa-hand-holding-heart"></i>
                                        <span>Fazer Nova Doação</span>
                                    </a>
                                    
                                    <a href="#" class="quick-action-btn">
                                        <i class="fas fa-truck"></i>
                                        <span>Acompanhar Entregas</span>
                                    </a>
                                    
                                    <a href="#" class="quick-action-btn">
                                        <i class="fas fa-clipboard-list"></i>
                                        <span>Ver Necessidades Urgentes</span>
                                    </a>
                                    
                                    <a href="#" class="quick-action-btn">
                                        <i class="fas fa-certificate"></i>
                                        <span>Gerar Certificado</span>
                                    </a>
                                    
                                    <a href="#" class="quick-action-btn">
                                        <i class="fas fa-file-pdf"></i>
                                        <span>Baixar Relatório</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            // Toggle sidebar on mobile
            $('.menu-toggle').on('click', function() {
                $('.sidebar').addClass('active');
            });
            
            $('.sidebar-toggle').on('click', function() {
                $('.sidebar').removeClass('active');
            });
            
            // Dropdown menu toggle
            $('.user-toggle').on('click', function(e) {
                e.preventDefault();
                // Toggle dropdown menu code would go here
            });
        });
    </script>
</body>

</html> 