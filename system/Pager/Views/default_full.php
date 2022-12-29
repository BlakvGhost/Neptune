<?php

use CodeIgniter\Pager\PagerRenderer;

/**
 * @var PagerRenderer $pager
 */
$pager->setSurroundCount(2);
?>

<nav class="fv-sm-col-12 fv-sm-text-center">
    <p class="text-dark">Affichage de 2 pages sur 6.</p>
</nav>

<nav aria-label="<?= lang('Pager.pageNavigation') ?>" class="fv-sm-col-12 fv-sm-text-center">
		<?php if ($pager->hasPrevious()) : ?>
				<a href="<?= $pager->getFirst() ?>" aria-label="<?= lang('Pager.first') ?>" role="button" class="btn btn-light btn-outline-dange">
                    <i class="fa fa-chevron-left"></i>
				</a>
				<a href="<?= $pager->getPrevious() ?>" aria-label="<?= lang('Pager.previous') ?>" role="button" class="btn btn-light btn-outline-dange">
                    <i class="fa fa-chevron-left"></i>
				</a>
		<?php endif ?>

		<?php foreach ($pager->links() as $link) : ?>
				<a href="<?= $link['uri'] ?>" role="button" class="<?= $link['active'] ? 'class="active"' : '' ?> btn btn-light btn-outline-dange">
					<?= $link['title'] ?>
				</a>
		<?php endforeach ?>

		<?php if ($pager->hasNext()) : ?>
				<a href="<?= $pager->getNext() ?>" aria-label="<?= lang('Pager.next') ?>" role="button" class="btn btn-light btn-outline-dange">
                    <i class="fa fa-chevron-right"></i>
				</a>
				<a href="<?= $pager->getLast() ?>" aria-label="<?= lang('Pager.last') ?>" role="button" class="btn btn-light btn-outline-dange">
                    <i class="fa fa-chevron-right"></i></a>
		<?php endif ?>
</nav>
