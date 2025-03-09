<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre-se - CalamityControl</title>
    <link rel="icon" href="<?= url("assets/web/images/logo.jpg"); ?>" type="image/jpg">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= url('assets/web/css/cadastro.css'); ?>">
</head>

<body>
    <div class="register-container">
        <div class="register-overlay"></div>
        
        <div class="return-home">
            <a href="<?= url(""); ?>" class="back-link">
                <i class="fas fa-arrow-left"></i> Voltar à página inicial
            </a>
        </div>
        
        <div class="container">
            <div class="row justify-content-center align-items-center min-vh-100">
                <div class="col-md-10 col-lg-8">
                    <div class="register-card">
                        <div class="row no-gutters">
                            <div class="col-md-5 d-none d-md-block">
                                <div class="register-image">
                                    <div class="overlay"></div>
                                    <div class="register-quote">
                                        <h3>Faça parte da mudança</h3>
                                        <p>Ao criar uma conta, você pode acompanhar suas doações e ajudar a reconstruir comunidades afetadas.</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-7">
                                <div class="register-form-container">
                                    <div class="register-header">
                                        <h2>Criar Conta</h2>
                                        <p>Preencha os campos abaixo para se cadastrar</p>
                                    </div>
                                    
                                    <form id="signin" class="register-form">
                                        <div class="form-group">
                                            <label for="email">E-mail</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fas fa-envelope"></i>
                                                    </span>
                                                </div>
                                                <input type="email" class="form-control" id="email" name="email" placeholder="Seu e-mail" required>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="signinPassword">Senha</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fas fa-lock"></i>
                                                    </span>
                                                </div>
                                                <input type="password" class="form-control" id="signinPassword" name="password" placeholder="Sua senha" required>
                                                <div class="input-group-append password-toggle">
                                                    <span class="input-group-text">
                                                        <i class="fas fa-eye"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="confirmPassword">Confirmar Senha</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fas fa-lock"></i>
                                                    </span>
                                                </div>
                                                <input type="password" class="form-control" id="confirmPassword" name="rptPassword" placeholder="Confirme sua senha" required>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="termsCheck" required>
                                            <label class="form-check-label" for="termsCheck">
                                                Concordo com os <a href="#" class="terms-link">termos de uso</a> e <a href="#" class="terms-link">política de privacidade</a>
                                            </label>
                                        </div>
                                        
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-register btn-block">Criar Conta</button>
                                        </div>
                                        
                                        <div class="register-footer">
                                            <p>Já tem uma conta? <a href="<?= url("login"); ?>" class="login-link">Entrar</a></p>
                                        </div>
                                        
                                        <div id="message" class="alert d-none">
                                            <!-- mensagem de resposta será exibida aqui -->
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        // Toggle de visibilidade da senha
        $('.password-toggle').on('click', function() {
            const passwordField = $('#signinPassword');
            const passwordIcon = $(this).find('i');
            
            if (passwordField.attr('type') === 'password') {
                passwordField.attr('type', 'text');
                passwordIcon.removeClass('fa-eye').addClass('fa-eye-slash');
            } else {
                passwordField.attr('type', 'password');
                passwordIcon.removeClass('fa-eye-slash').addClass('fa-eye');
            }
        });
        
        // Verificação de senhas iguais
        $('#confirmPassword').on('keyup', function() {
            const password = $('#signinPassword').val();
            const confirmPassword = $(this).val();
            
            if (password === confirmPassword) {
                $(this).addClass('is-valid').removeClass('is-invalid');
            } else {
                $(this).addClass('is-invalid').removeClass('is-valid');
            }
        });
        
        // Submissão do formulário
        const form = document.querySelector("#signin");
        const message = document.querySelector("#message");
        
        form.addEventListener("submit", async (e) => {
            e.preventDefault();
            
            const password = $('#signinPassword').val();
            const confirmPassword = $('#confirmPassword').val();
            
            if (password !== confirmPassword) {
                message.classList.remove('d-none');
                message.classList.add('alert-danger');
                message.innerHTML = 'As senhas não coincidem!';
                return;
            }
            
            // Mostrar indicador de carregamento
            $('button[type="submit"]').html('<i class="fas fa-spinner fa-spin"></i> Criando conta...');
            $('button[type="submit"]').prop('disabled', true);
            
            const dataUser = new FormData(form);
            try {
                const data = await fetch("<?= url("cadastrar"); ?>", {
                    method: "POST",
                    body: dataUser,
                });
                
                const user = await data.json();
                
                if (user) {
                    message.classList.remove('d-none');
                    message.classList.add(`alert-${user.type === 'success' ? 'success' : user.type === 'error' ? 'danger' : user.type}`);
                    message.innerHTML = user.message;
                    
                    if (user.type === 'success') {
                        setTimeout(() => {
                            window.location.href = "<?= url("login"); ?>";
                        }, 2000);
                    } else {
                        // Restaurar botão
                        $('button[type="submit"]').html('Criar Conta');
                        $('button[type="submit"]').prop('disabled', false);
                    }
                }
            } catch (error) {
                message.classList.remove('d-none');
                message.classList.add('alert-danger');
                message.innerHTML = 'Erro ao conectar com o servidor. Tente novamente.';
                
                // Restaurar botão
                $('button[type="submit"]').html('Criar Conta');
                $('button[type="submit"]').prop('disabled', false);
            }
        });
    </script>
</body>

</html>