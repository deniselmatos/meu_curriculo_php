<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Currículo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
    <?php
        $nomeCompleto = "Denise Lima de Matos"; 
        $idade = 20; 
        $fotoPerfil = "imagens/foto.jpg"; 
    ?>
    <div class="perfil">
        <img src="<?php echo $fotoPerfil; ?>" alt="Foto de Perfil">
        <h1><?php echo $nomeCompleto; ?></h1>
        <p>Idade: <?php echo $idade; ?> anos</p>
    </div>

    </header>

    <section id="experiencia">
        <h2>Experiência Profissional</h2>

        <?php
            $experiencias = [
            [
                "empresa" => "Secretaria de Saúde de Cedro, CE",
                "cargo" => "Estagiária",
                "periodo" => "Período: 2022",
                "descricao" => "Acompanhamento das atividades relacionadas ao departamento de informática em conjunto com a área da saúde. As atividades realizadas envolvem a atualização de sistemas, manutenção de computadores, elaboraração de relatórios das atividades e uso do Pacote Office"
            ],
           
        ];
    ?>

        <?php if (!empty($experiencias)): ?>
            <ul>
            <?php foreach ($experiencias as $experiencia): ?>
                <li>
                    <h3><?php echo $experiencia['cargo']; ?></h3>
                    <h4><?php echo $experiencia['empresa']; ?></h4>
                    <p class="periodo"><?php echo $experiencia['periodo']; ?></p>
                    <p><?php echo $experiencia['descricao']; ?></p>
                </li>
            <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <p>Sem experiência profissional para mostrar.</p>
        <?php endif; ?>

    </section>

    <section id="cursos">
        <h2>Cursos e Formações</h2>

        <?php
            $cursos = [
                [
                    "nome" => "Nome do Curso: Bacharelado em Sistemas de Informação",
                    "instituicao" => "Nome da Instituição: Instituto Federal de Educação, Ciência e Tecnologia do Ceará",
                    "periodo" => "2023 – Presente"

                    
                ],

                [
                    "nome" => "Nome do Curso: Técnico em Informática",
                    "instituicao" => "Nome da Instituição: Escola Estadual de Educação Profissional Francisca de Albuquerque Moura",
                    "periodo" => "2020 – 2022"
                ]
             
            ];
            ?>

            <?php if (!empty($cursos)): ?>
                <ul>
                    <?php foreach ($cursos as $curso): ?>
                        <li>
                            <h3><?php echo $curso['nome']; ?></h3>
                            <h4><?php echo $curso['instituicao']; ?></h4>
                            <p class="periodo"><?php echo $curso['periodo']; ?></p>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php else: ?>
                <p>Nenhum curso ou formação para mostrar.</p>
            <?php endif; ?>

    </section>

    <section id="habilidades">
        <h2>Habilidades</h2>

        <?php
            $habilidades = [
                "PHP" => 7, 
                "HTML" => 10,
                "CSS" => 10,
                "JavaScript" => 8,
                "Banco de Dados" => 10
            ];

            $hobbies = [
                "Ler" => 10, 
                "Estudar" => 10,
                "Desenhar" => 10
            ];
        ?>

        <h3>Habilidades</h3>
        
        <?php if (!empty($habilidades)): ?>
            <ul>
            <?php foreach ($habilidades as $habilidade => $nivel): ?>
                <li>
                    <?php echo $habilidade; ?>
                    <div class="barra-nivel">
                        <?php for ($i = 0; $i < $nivel; $i++): ?>
                            <span class="preenchido"></span>
                        <?php endfor; ?>
                        <?php for ($i = $nivel; $i < 10; $i++): ?>
                            <span></span>
                        <?php endfor; ?>
                    </div>
                    <?php echo $nivel; ?>/10
                </li>
            <?php endforeach; ?>
            </ul>
        <?php endif; ?>

        <h3>Hobbies</h3>
        <?php if (!empty($hobbies)): ?>
            <ul>
            <?php foreach ($hobbies as $hobby => $interesse): ?>
                <li>
                    <?php echo $hobby; ?>
                    <div class="barra-nivel">
                        <?php for ($i = 0; $i < $interesse; $i++): ?>
                            <span class="preenchido hobby"></span>
                        <?php endfor; ?>
                        <?php for ($i = $interesse; $i < 10; $i++): ?>
                            <span></span>
                        <?php endfor; ?>
                    </div>
                    (<?php echo $interesse; ?>/10)
                </li>
            <?php endforeach; ?>
            </ul>
        <?php endif; ?>


    </section>

    <footer>
        <p>© <?php echo date("Y"); ?> Denise </p>
    </footer>
</body>
</html>
