<?php
/*
Template Name: デフォルトの投稿（お知らせ「news」として使用）のアーカイブページ（index.php）
*/
get_header(); ?>
<body>

	<ul style="margin-bottom: 100px">
		<li><a href="<?php echo home_url(); ?>">TOPへ</a></li>
		<li><a href="<?php echo home_url(); ?>/news/">デフォルトの投稿へ</a></li>
		<li><a href="<?php echo home_url(); ?>/demopost/">DEMO投稿タイプ（demopost）へ</a></li>
	</ul>

	<h1>デフォルトの投稿（お知らせ「news」として使用）のアーカイブページ（index.php）</h1>




	<?php if (have_posts()): ?>
	<?php while ( have_posts() ) : the_post(); ?>
	<article>
		<a href="<?php the_permalink() ?>">
			<p><?php the_time('Y-m-d'); ?></p>
			<p><?php foreach((get_the_category()) as $cat){ if($cat->parent) echo $cat->name ; } ?></p>
			<h2><?php the_title() ?></h2>
		</a>
	</article>
	<?php endwhile; ?>
	<?php else: ?>
		<p>まだ投稿された記事がありません。</p>
	<?php endif; ?>

	<div>
		<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
	</div>

<?php get_footer() ?>