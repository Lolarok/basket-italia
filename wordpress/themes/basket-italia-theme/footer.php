<footer id="site-footer"><div class="container">
<div class="footer-grid">
<div class="footer-col"><a href="<?php echo home_url();?>" class="site-logo" style="margin-bottom:1rem"><div class="logo-icon">🏀</div><span><?php bloginfo("name");?></span></a>
<p style="color:#707090;font-size:.9rem">Il portale italiano per le notizie di basket: NBA, Serie A e EuroLega.</p></div>
<div class="footer-col"><h4>Sezioni</h4><ul>
<li><a href="<?php echo home_url("/nba");?>">🏀 NBA</a></li>
<li><a href="<?php echo home_url("/serie-a");?>">🇮🇹 Serie A</a></li>
<li><a href="<?php echo home_url("/eurolega");?>">🌍 EuroLega</a></li>
<li><a href="<?php echo home_url("/italbasket");?>">🦅 ItalBasket</a></li>
</ul></div>
<div class="footer-col"><h4>Info</h4><ul>
<li><a href="/chi-siamo">Chi Siamo</a></li>
<li><a href="/newsletter">Newsletter</a></li>
<li><a href="/contatti">Contatti</a></li>
</ul></div>
<div class="footer-col"><h4>Fonti</h4><ul>
<li><a href="https://www.nba.com" target="_blank">NBA.com</a></li>
<li><a href="https://www.gazzetta.it" target="_blank">Gazzetta</a></li>
<li><a href="https://www.euroleague.net" target="_blank">EuroLeague</a></li>
</ul></div></div>
<div class="footer-bottom"><span>&copy; <?php echo date("Y");?> <?php bloginfo("name");?></span><span><a href="/privacy">Privacy</a></span></div>
</div></footer>
<?php wp_footer();?>
</body>
</html>