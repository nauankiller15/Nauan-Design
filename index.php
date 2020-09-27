<?php include("includes/headindex.php"); ?>

<body>
    <?php include("includes/paginas/trabalhos.php"); ?>
    <?php include("includes/paginas/contato.php"); ?>
    <?php include("includes/paginas/sobre.php"); ?>
    <div id="quadrado-position">
        <div class="divSlide">
            <h2 class="nauan">NAUAN</h2>
            <h2 class="designn">design</h2>
        </div>
        <div class="quadrado-index">
        </div>
        <div class="quadradoUtilites">
            <li style="animation: LiAnim 3.5s;" class="Infograficos">InfoGráficos</li>
            <li style="animation: LiAnim 4.5s;" class="Web-Design">Web-Design</li>
            <li style="animation: LiAnim 5.5s;" class="Mockups">Mockups</li>
            <li style="animation: LiAnim 6.5s;" class="Web-Dev">Web-Dev</li>
        </div>
    </div>
    <div class="menu">
        <ul>
            <a id="fechar" href="javascript: FecharTudo();">Fechar Tudo</a>
            <a href="javascript: trabalhosAbrir();">
                <li style="animation: fadeIn 15.0s, slideMenu 4.5s;">Trabalhos</li>
            </a>
            <a href="javascript: contatoAbrir();">
                <li style="animation: fadeIn 15.0s, slideMenu 5.5s;">Contato</li>
            </a>
            <a href="javascript: sobreAbrir();">
                <li style="animation: fadeIn 10.0s, slideMenu 6.5s;">Sobre</li>
            </a>
            <li style="animation: fadeIn 10.0s, slideMenu 7.5s;">Menu</li>
            <li style="animation: fadeIn 10.0s, slideMenu 8.5s;">Menu</li>
        </ul>
    </div>
    <?php include("includes/footer.php"); ?>
</body>

</html>