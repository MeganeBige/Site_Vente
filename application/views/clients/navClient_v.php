<nav class="top-bar" data-topbar role="navigation">
    <ul class="title-area">
        <li class="name">
            <h1><a href="<?=site_url("Produit_c/afficherProduitsClients");?>">Figurine Mania</a> </h1>
        </li>
        <li class="toggle-topbar menu-icon">
            <a href="#"><span>Menu</span></a></li>
    </ul>
    <section class="top-bar-section">
        <ul class="left">
            <li><a href="<?=site_url("Panier_c");?>">Mon Panier</a></li>
            <li class="has-dropdown">
                <a href="#">Mon Compte</a>
                <ul class="dropdown">
                    <li><a href="">Consulter mes Commandes</a></li>
                    <li><a href="">Modifier mes Coordonnées</a></li>
                </ul>
            </li>
        </ul>
        <ul class="right">
            <li class="name"><h1>Bonjour <?=$this->session->userdata('login')?></h1><li>
            <li><a href="<?=site_url('users_c/deconnexion');?>">Déconnexion</a></li>
        </ul>
    </section>
</nav>