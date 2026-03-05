<?php get_header();?>
<div class="score-ticker">
<span style="position:absolute;left:0;top:0;bottom:0;display:flex;align-items:center;padding:0 20px;background:rgba(29,66,138,.9);font-weight:800;font-size:.75rem;z-index:2">⚡ LIVE</span>
<div class="score-wrap">
<?php $tk=new WP_Query(["posts_per_page"=>8]);
while($tk->have_posts()):$tk->the_post();
echo "<span class=score-item>".get_the_title()."</span>";
endwhile;wp_reset_postdata();
$tk2=new WP_Query(["posts_per_page"=>8]);
while($tk2->have_posts()):$tk2->the_post();
echo "<span class=score-item>".get_the_title()."</span>";
endwhile;wp_reset_postdata();?></div></div>
<main class="container">
<section style="margin:2rem 0">
<div class="section-header"><h2 class="section-title">🏀 Ultime dal Basket</h2><a href="<?php echo home_url("/basket");?>" style="color:#FFD700;font-size:.85rem">Tutte →</a></div>
<div class="grid-3">
<?php $news=new WP_Query(["posts_per_page"=>6]);
while($news->have_posts()):$news->the_post();?>
<article class="article-card">
<div class="card-image"><?php if(has_post_thumbnail()):the_post_thumbnail("card-thumb");else:echo "<div style=background:linear-gradient(135deg,#E8821A,#FFD700);height:100%;display:flex;align-items:center;justify-content:center;font-size:3rem>🏀</div>";endif;?></div>
<div class="card-content">
<div style="font-size:.75rem;color:#707090;margin-bottom:.5rem"><?php echo get_the_date("d M Y");?></div>
<h3 style="font-size:.95rem;font-weight:700;text-transform:uppercase;margin-bottom:.5rem"><a href="<?php the_permalink();?>" style="color:#F8F8FF"><?php the_title();?></a></h3>
<a href="<?php the_permalink();?>" style="color:#FFD700;font-size:.8rem">Leggi →</a></div></article>
<?php endwhile;wp_reset_postdata();?>
</div></section>
<section class="newsletter-section">
<h2>🏀 Newsletter Basket</h2>
<p style="color:rgba(0,0,0,.7)">NBA, Serie A e EuroLega nella tua inbox ogni giorno.</p>
<form class="newsletter-form" method="post">
<input type="email" name="email" placeholder="Email..." required>
<button type="submit">Iscriviti</button></form>
</section>
</main>
<?php get_footer();?>