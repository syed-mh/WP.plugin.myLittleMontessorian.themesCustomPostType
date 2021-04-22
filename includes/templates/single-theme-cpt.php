<?php

/**
 * Single Theme template for rendering the
 * Theme CPT on the front-end
 * 
 * @package WordPress
 * @subpackage ThemesCustomPostType
 * @author Syed Mohammed Hassan <contactsyedmh@gmail.com>
 * @since 1.0
 */

/**
 * Generic site header
 */

get_header();

/**
 * Theme Custom Post Type Content Start
 */

?>

<section class="theme-page-opener boxed">
  <div class="theme-page-opener__content-container">
    <h1 class="theme-page-opener__title typography--accent">
      <?php the_title() ?>
    </h1>
    <div class="theme-page-opener__description">
      <p>
        Lorem ipsum dolor sit amet consectetur, adipisicing elit.
        Dolorum laudantium doloremque eius, placeat praesentium possimus
        nisi fugit amet voluptatem. Asperiores, eum dolores illo quo,
        maxime exercitationem odit laboriosam eveniet unde quam odio,
        laborum voluptas quis sit ipsa quos placeat. Animi, tempora
        dolores at quisquam cumque quod dolore vel qui nulla?
      </p>
      <button class="theme-button fill--dark theme-page-opener__button buy-theme-button">
        <a href="#" class="rounded">
          Buy Theme
        </a>
      </button>
      <button class="theme-button fill--dark theme-page-opener__button subscribe-button">
        <a href="#" class="rounded">
          Subscribe
        </a>
      </button>
      </button>
    </div> <!-- .theme-page-opener__description -->
  </div> <!-- .theme-page-opener__content-container -->
</section> <!-- .theme-page-opener -->
<section class="page-divider--right page-divider">
  <figure class="page-divider__image-container">
    <img src="<?php echo plugin_dir_url(__FILE__) . '/assets/my-little-montessorian-page-divider-arrow-right' ?>" class="page-divider__image">
    <hr class="page-divider__divider divider">
  </figure>
</section> <!-- .page-divider -->
<section class="cta cta--right equal-height in-this-theme boxed">
  <img src="#" alt="" class="cta__image half cta-image" alt="in this theme">
  <div class="cta__content-container half cta-content-container">
    <h2 class="cta__title title cta-title typography--accent">
      In This Theme
    </h2>
    <ul class="in-this-theme__products inner">
      <li class="in-this-theme__product third">
        <h3 class="in-this-theme__product__title">
          <img src="" alt="" class="in-this-theme__thumbnail">
          <p class="in-this-theme__excerpt">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa
            molestias, saepe expedita voluptate dolorem laudantium.
          </p>
        </h3>
      </li> <!-- .in-this-theme__product -->
      <li class="in-this-theme__product third">
        <h3 class="in-this-theme__product__title">
          <img src="" alt="" class="in-this-theme__thumbnail">
          <p class="in-this-theme__excerpt">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa
            molestias, saepe expedita voluptate dolorem laudantium.
          </p>
        </h3>
      </li> <!-- .in-this-theme__product -->
      <li class="in-this-theme__product third">
        <h3 class="in-this-theme__product__title">
          <img src="" alt="" class="in-this-theme__thumbnail">
          <p class="in-this-theme__excerpt">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa
            molestias, saepe expedita voluptate dolorem laudantium.
          </p>
        </h3>
      </li> <!-- .in-this-theme__product -->
      <li class="in-this-theme__product third">
        <h3 class="in-this-theme__product__title">
          <img src="" alt="" class="in-this-theme__thumbnail">
          <p class="in-this-theme__excerpt">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa
            molestias, saepe expedita voluptate dolorem laudantium.
          </p>
        </h3>
      </li> <!-- .in-this-theme__product -->
      <li class="in-this-theme__product third">
        <h3 class="in-this-theme__product__title">
          <img src="" alt="" class="in-this-theme__thumbnail">
          <p class="in-this-theme__excerpt">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa
            molestias, saepe expedita voluptate dolorem laudantium.
          </p>
        </h3>
      </li> <!-- .in-this-theme__product -->
      <li class="in-this-theme__product third">
        <h3 class="in-this-theme__product__title">
          <img src="" alt="" class="in-this-theme__thumbnail">
          <p class="in-this-theme__excerpt">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa
            molestias, saepe expedita voluptate dolorem laudantium.
          </p>
        </h3>
      </li> <!-- .in-this-theme__product -->
    </ul> <!-- .in-this-theme__products -->
  </div> <!-- .cta__content-container -->
</section> <!-- .cta -->
<section class="theme-work theme-work-container boxed">
  <!-- theme work slider -->
</section>
<section class="subscription-cta boxed equal-height">
  <div class="half subscription-cta__slider-container">
    <!-- subscription cta slider -->
  </div> <!-- .subscription-cta__slider-container -->
  <div class="half subscription-cta__description-container">
    <h2 class="title subscription-cta__title">
      Subscribe to our Program
    </h2>
    <div class="subscription-cta__description description">
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora,
        reiciendis. Velit dicta, deserunt quaerat repudiandae magnam
        consequatur! Iusto recusandae totam autem inventore? Autem nostrum
        dolores laborum ea natus dignissimos voluptatem odit, alias nobis
        assumenda molestias, repellendus, fuga recusandae ipsa praesentium
        unde voluptatum voluptas reiciendis aliquam. Impedit tenetur cum
        voluptas quam a reiciendis id dolor. Iure voluptatum ratione vel
        expedita quidem.
      </p>
    </div>
  </div> <!-- .subscription-cta__description-container -->
</section> <!-- .subscription-cta -->
<section class="text-area text-area--right equal-height alternate boxed who-is">
  <div class="text-area__image-container text-area-image-container half">
    <div class="text-area-image-container-inner">
      <img src="<?php echo get_stylesheet_directory_uri() . "/assets/sprites/my-little-montessorian-pebble-sprite-large.svg" ?>" class="shadow-filter sprite--pebble large">
      <img <?php echo $this->get_render_attribute_string('section_image') ?> />
      <img src="<?php echo get_stylesheet_directory_uri() . "/assets/sprites/my-little-montessorian-pebble-sprite-medium.svg" ?>" class="shadow-filter sprite--pebble medium">
      <img src="<?php echo get_stylesheet_directory_uri() . "/assets/sprites/my-little-montessorian-pebble-sprite-small.svg" ?>" class="shadow-filter sprite--pebble small">
    </div>
  </div>
  <div class='text-area__content-container third text-area-content-container'>
    <h2 <?php echo $this->get_render_attribute_string('section_title') ?> >
      <?php echo $settings['section_title'] ?>
    </h2>
    <div <?php echo $this->get_render_attribute_string('section_description') ?> >
      <?php echo $settings['section_description'] ?>
    </div>
  </div> <!-- .text-area__content-container -->
</section> <!-- .text-area.who-is -->
<section class="get-this-theme boxed">
  <div class="get-this-theme__content">
    <h2 class="get-this-theme__title title">
      Get This Theme
    </h2>
    <div class="get-this-theme__description description">
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora,
        reiciendis. Velit dicta, deserunt quaerat repudiandae magnam
        consequatur! Iusto recusandae totam autem inventore? Autem nostrum
        dolores laborum ea natus dignissimos voluptatem odit, alias nobis
        assumenda molestias, repellendus, fuga recusandae ipsa praesentium
        unde voluptatum voluptas reiciendis aliquam. Impedit tenetur cum
        voluptas quam a reiciendis id dolor. Iure voluptatum ratione vel
        expedita quidem.
      </p>
    </div>
  </div> <!-- .get-this-theme__content -->
  <img src="#" alt="Get this theme" class="get-this-theme__hero">
</section> <!-- .get-this-theme -->
<section class="book-recommendations boxed">
  <!-- book recommendations -->
</section>
<section class="past-themes boxed">
  <!-- past themes -->
</section>
<?php

/**
 * Generic site footer
 */

get_footer();