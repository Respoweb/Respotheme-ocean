<?php
/**
 * Template Name: Confirmation du resposcore
 *
 * @package OceanWP WordPress theme
 */ ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?><?php oceanwp_schema_markup( 'html' ); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiiv=refresh content="6; url=/testez-votre-referencement/">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <?php wp_head(); ?>
  </head>

  <!-- Begin Body -->
  <body <?php body_class(); ?><?php oceanwp_schema_markup( 'body' ); ?>>

    <?php do_action( 'ocean_before_outer_wrap' ); ?>

    <div id="outer-wrap" class="site clr">

      <?php do_action( 'ocean_before_wrap' ); ?>

      <div id="wrap" class="clr">

        <?php do_action( 'ocean_before_main' ); ?>

        <main id="main" class="site-main clr"<?php oceanwp_schema_markup( 'main' ); ?>>

          <?php do_action( 'ocean_before_content_wrap' ); ?>

          <div id="content-wrap" class="container clr">

            <?php do_action( 'ocean_before_primary' ); ?>

            <section id="primary" class="content-area clr">

              <?php do_action( 'ocean_before_content' ); ?>

              <div id="content" class="site-content clr">

                <?php do_action( 'ocean_before_content_inner' ); ?>

                <?php while ( have_posts() ) : the_post(); ?>

                  <div class="entry-content entry clr">
                    <?php the_content(); ?>
                  </div><!-- .entry-content -->

                <?php endwhile; ?>

                <?php do_action( 'ocean_after_content_inner' ); ?>

              </div><!-- #content -->

              <?php do_action( 'ocean_after_content' ); ?>

            </section><!-- #primary -->

            <?php do_action( 'ocean_after_primary' ); ?>

          </div><!-- #content-wrap -->

          <?php do_action( 'ocean_after_content_wrap' ); ?>

            </main><!-- #main-content -->

            <?php do_action( 'ocean_after_main' ); ?>

        </div><!-- #wrap -->

        <?php do_action( 'ocean_after_wrap' ); ?>

    </div><!-- .outer-wrap -->

    <?php do_action( 'ocean_after_outer_wrap' ); ?>

    <?php wp_footer(); ?>

    <script type="text/javascript">
      setTimeout("window.location='https://www.respoweb.com/testez-votre-referencement/'",5000);
    </script>
  </body>
</html>
