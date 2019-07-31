<?php
/**
 Template Name: Распродажа
 */
get_header(); ?>
<? echo do_shortcode('[sale_products columns="4" order="ASC" orderby="price"]'); ?>
<? get_footer(); ?>
