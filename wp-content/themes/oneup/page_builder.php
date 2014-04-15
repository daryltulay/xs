<?php
/*
 * Template Name: Content Builder
 * Description: A Page Template which uses the drag and drop builder to compose content
 *
 * @package WordPress
 * @subpackage Theme
 * @since 1.0
 */
?>
<?php $t =& peTheme(); ?>
<?php $content =& $t->content; ?>

<?php get_header(); ?>

<?php if (post_password_required()): ?>
<?php endif; ?>

<?php while ($content->looping() ) : ?>

<?php if ($t->splash()): ?>
<?php $t->layout->title = "no"; ?>
<?php $t->layout->sidebar = "no"; ?>
<?php endif; ?>

<?php $t->get_template_part("common","layout-start"); ?>
<?php $t->get_template_part("splash"); ?>
<?php $content->builder(); ?>
<?php $t->get_template_part("common","layout-end"); ?>
<?php endwhile; ?>

<?php get_footer(); ?>

