<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Henrique Bertini da Cruz</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="shortcut icon" type="imagex/png" href="images/ed3829f00f57b9013479c57dcee3a947.jpg">

</head>

<body>

<div class="theme-toggle text-center mt-3">
    <button id="toggleButton" onclick="toggleTheme()" class="btn btn-primary-custom">
        Alterar Tema
    </button>
</div>
    <header style="background-color: #243757; color: #fff; text-align: center; padding: 50px 0;">
        <div style="display: flex; align-items: center; justify-content: center; flex-wrap: wrap;">
            <img src="images/ed3829f00f57b9013479c57dcee3a947.jpg" alt="Sua Foto" style="width: 100px; height: 100px; border-radius: 50%; margin-right: 20px;">
            <div style="text-align: center;">
                <h1 style="font-size: 3rem; margin: 0;">Henrique Bertini da Cruz</h1>
                <p style="font-size: 1.5rem;">Desenvolvedor de Sistemas de Manufatura</p>
            </div>
        </div>
    </header>
    <nav class="bg-primary-custom">
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link text-white" href="#projetos">Projetos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#sobre">Sobre Mim</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#contato">Contato</a>
            </li>
        </ul>
    </nav>
    <section id="projetos" class="container mt-5">
        <h2 class="text-primary-custom text-center">Projetos de Sistemas de Manufatura</h2>
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-4 animated projeto">
                    <div class="card-body">
                        <h3 class="card-title">Watts Manaus-MAO</h3>
                        <p class="card-text">Desenvolvi um sistema único e integrado para a fábrica da marca da empresa
Watts de mobilidade elétrica, o sistema consiste em um ambiente de controle de produção e um hub
de ferramentas poka-yoke para serem usadas em linha, isso inclui controle e supervisão de testes em
linha, geração de etiquetas de controle de componentes, rastreabilidade de componentes em linha
de produção, coleta de logs para geração de relatórios de produção, coleta de registros para fim de
rastreabilidade em campo, geração de seriais de chassi, seriais esses que seriam usados para
emplacar motos produzidas na fábrica, módulo esse de geração que demandou uma grande
quantidade de inteligências por parte de software para evitar duplicidade e possíveis falhas na
geração. Desenvolvi utilizando ferramentas como CSharp, ASP.NET core, MySql e MySql Server.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-4 animated projeto">
                    <div class="card-body">
                        <h3 class="card-title">Mini-MES Production</h3>
                        <p class="card-text">Trabalhei no desenvolvimento do MES Production da empresa como
desenvolvedor back-end, um projeto desenvolvido internamente. Fui enviado para a fábrica de
Manaus-AM onde estudei o processo e coletei diversos logs de estações de teste durante todo o
processo de produção de placas-mãe, desenvolvi aplicações em C# e MySql para coleta automática
de logs em linha de produção, os dados coletados seriam enviados para um servidor dedicado onde
seriam apresentados em dashboards dinâmicos em tempo real e os dados armazenados para
posterior geração de relatório de produção.
</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-4 animated projeto">
                    <div class="card-body">
                        <h3 class="card-title">Desenvolvimento de uma plataforma WEB</h3>
                        <p class="card-text">Desenvolvi uma plataforma para controle de softwares em manufatura, 
                            cadastro e consulta de dados, validação de teste, exportação de relatórios customizados e Dashboards dinãmicos em tempo real dos demais softwares ativos no ambiente de manufatura, </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-4 animated projeto">
                    <div class="card-body">
                        <h3 class="card-title">Softwares poka-Yoke</h3>
                        <p class="card-text">Trabalhei no departamento de Eng. de Automação como responsável por
softwares POKA-YOKE para os processos industriais durante a integração do ERP SAP na empresa,
trabalhei também desenvolvendo softwares para os processos de linha de produção utilizando
tecnologias como CSharp e MySql, prestei suporte a aplicações web utilizando PHP, HTML e CSS.
</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-4 animated projeto">
                    <div class="card-body">
                        <h3 class="card-title">IFSP-BRA - BitTroopers.</h3>
                        <p class="card-text">Equipe de robótica do IFSP-BRA, atuei no desenvolvimento e construção de
um drone de competição, tanto na parte de hardware, software e administração da equipe.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-4 animated projeto">
                    <div class="card-body">
                        <h3 class="card-title">Softwares de teste</h3>
                        <p class="card-text">Desenvolvi ferramentes de software para coleta e processamento de arquivos de LOG em gigas de teste em produção, ferramentas essas desenvolvidas em CSharp Win Forms e Back-end em MySQL, 
                            os arquivos de LOG de cada estação eram coletados e processados, enviando seus dados para um banco de dados onde 
                            seriam consultados e tratativas seriam dadas posteriormente, com base nos dados coletados.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="sobre" class="container my-5">
        <h2 class="text-primary-custom text-center">Sobre Mim</h2>
        <p>Sou um entusiasta da computação e apaixonado por arquitetura de computadores e lógica computacional. Tenho
            formação como Técnico em Mecatrônica e atualmente estou cursando Análise e Desenvolvimento de Sistemas no
            Instituto Federal de Educação, Ciência e Tecnologia, Campus Bragança Paulista. Tenho ampla experiência e
            competência em programação, especialmente utilizando o .NET Framework e a programação orientada a objetos
            (OOP). Além disso, possuo conhecimentos sólidos em Cloud Computing, bancos de dados, SQL, automação e CSharp
            .NET Framework.</p>

        <p>Com um histórico comprovado em solução de problemas técnicos, tenho habilidade em encontrar e implementar
            soluções eficientes e inovadoras. Tenho inglês de nível intermediário, o que me permite lidar com projetos
            internacionais e colaborar com equipes multiculturais.</p>

        <p>Competências:</p>
        <ul>
            <li>Programação</li>
            <li>.NET Framework</li>
            <li>Programação Orientada a Objetos (OOP)</li>
            <li>Cloud Computing</li>
            <li>Bancos de Dados (SQL)</li>
            <li>Automação</li>
            <li>C#</li>
            <li>Robótica</li>
            <li>Solução de Problemas Técnicos</li>
            <li>MySQL</li>
            <li>Desenvolvimento de Software</li>
        </ul>
        <p>Estou em constante busca por aprendizado e crescimento profissional, sempre atualizando-me com as novas
            tecnologias e tendências da área. Tenho habilidade em trabalhar em equipe, sou proativo e comprometido com a
            entrega de resultados de alta qualidade.</p>
    </section>

    <section id="experiencia" class="my-5">
    <h2 class="text-primary-custom text-center">Experiência Profissional mais recente</h2>
    <div class="container">
        <div class="card-deck">
            <div class="card mb-4 animated custom-card light">
                <div class="card-body">
                    <img src="images/1659028914079.jpg" alt="Logo da Empresa" class="img-fluid">
                    <h3 class="card-title">Grupo Multi</h3>
                    <p class="card-text">Desenvolvedor de Sistemas de Manufatura</p>
                    <p class="card-text">3 anos</p>
                    <p class="card-text">Competências:</p>
                    <div class="row">
                        <div class="col-md-6">
                            <ul>
                                <li>ASP.NET MVC</li>
                                <li>Entity Framework</li>
                                <li>ASP.NET</li>
                                <li>Microsoft SQL Server</li>
                                <li>Desenvolvimento de software Windows</li>
                                <li>.NET Framework</li>
                                <li>Object-Oriented Programming (OOP)</li>
                                <li>Cloud Computing</li>
                                <li>Robótica</li>
                                <li>MySQL</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul>
                                <li>CSS</li>
                                <li>Teste de software</li>
                                <li>Análise de sistemas</li>
                                <li>Arquitetura de sistema</li>
                                <li>Software corporativo</li>
                                <li>Databases</li>
                                <li>SQL</li>
                                <li>Automação</li>
                                <li>C#</li>
                                <li>Desenvolvimento de software</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="experiencia" class="my-5">
    <h2 class="text-primary-custom text-center">Experiência Profissional</h2>
    <div class="container">
        <div class="card-deck">
            <div class="card mb-4 animated custom-card light">
                <div class="card-body">
                    <img src="images/1659028914079.jpg" alt="Logo da Empresa" class="img-fluid">
                    <h3 class="card-title">Grupo Multi</h3>
                    <p class="card-text">Técnico de Automação Jr.</p>
                    <p class="card-text">6 meses</p>
                    <p class="card-text">Trabalhei no departamento de Eng. de Automação como responsável por
softwares POKA-YOKE para os processos industriais durante a integração do ERP SAP na empresa,
trabalhei também desenvolvendo softwares para os processos de linha de produção utilizando
tecnologias como CSharp e MySql, prestei suporte a aplicações web utilizando PHP, HTML e CSS.:</p>
                    <div class="row">
                        <div class="col-md-6">
                            <ul>
                                <li>Trabalho em equipe</li>
                                <li>Reparo de equipamentos</li>
                                <li>Assistência técnica</li>
                                <li> Solução de problemas técnicos</li>
                                <li>Suporte técnico</li>
                                <li>Análise de PCBA</li>
                                <li>Componentes eletrônicos</li>
                                <li>Hardware</li>
                                <li>Robótica</li>
                                <li>MySQL</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



    <section id="contato" class="container my-5 text-center">
        <h2 class="text-primary-custom">Contato</h2>
        <p class="contact-info">Entre em contato comigo em: <a href="mailto:henriquebertinidacruz@email.com" class="contact-link">henriquebertinidacruz@email.com</a></p>

        <div class="contact-links">
            <p class="social-link">
                Siga-nos em <a href="LINK_DO_INSTAGRAM_DA_EMPRESA" target="_blank" class="instagram-link">TrySystems.so</a>.
            </p>
            <p class="social-link">
                Conecte-se comigo no <a href="SEU_LINK_DO_LINKEDIN" target="_blank" class="linkedin-link">LinkedIn</a> ou no <a href="SEU_LINK_DO_GITHUB" target="_blank" class="github-link">GitHub</a>.
            </p>
        </div>
    </section>

    <footer class="footer text-center">
        &copy; 2023 Henrique Bertini da Cruz
    </footer>

    <script>
        function toggleTheme() {
            var body = document.body;
            var button = document.getElementById('toggleButton');
            var experienciaSection = document.getElementById('experiencia');
            var customCard = document.querySelector('.custom-card');

            if (body.classList.contains('dark-theme')) {
                body.classList.remove('dark-theme');
                button.innerHTML = 'Alterar Tema';
                experienciaSection.classList.remove('dark-background');
                experienciaSection.classList.add('light-background');
                customCard.classList.remove('dark');
                customCard.classList.add('light');
            } else {
                body.classList.add('dark-theme');
                button.innerHTML = 'Tema Claro';
                experienciaSection.classList.remove('light-background');
                experienciaSection.classList.add('dark-background');
                customCard.classList.remove('light');
                customCard.classList.add('dark');
            }
        }
    </script>
</body>

</html>