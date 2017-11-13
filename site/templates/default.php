<?php snippet('header') ?>
<?php snippet('breadcrumb') ?>
<main class="wrap">
	<div class="page-title small-push-4">
		<?php if($page->parent()->intendedTemplate() == "gn3t"):?>
			<h1><?php echo $page->parent()->title()->html()?></h1>
		<?php else: ?>
			<h1><?php echo $page->title()->html()?></h1>
		<?php endif;?>
	</div>
	<div class="row">
		<?php snippet('leftCol');?>
		<div class="page-text small-18 large-12 large-push-2 columns end">
			<?php echo $page->text()->kirbytext()?>
		</div>
	</div>
	<?php snippet('trame') ?>
</main>
<div class="blur"></div>

<?php snippet('footer') ?>
