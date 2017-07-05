
  <?php get_header() ?>

  <?php if( is_user_logged_in() && current_user_can( 'edit_posts' ) ) : ?>

    <div class="container">
      <div layout="column" layout-align="start center">
        <main ng-view></main>
      </div>
    </div>

  <?php else : ?>

    <form class="login-input" action="" method="post">
      <div layout="row" layout-align="space-around center">
        <md-input-container>
          <label>Username</label>
          <input type="text" name="log" />
        </md-input-container>
      </div>
      <div layout="row" layout-align="space-around center">
        <md-input-container>
          <label>Password</label>
          <input type="password" name="pwd" />
        </md-input-container>
      </div>
      <div layout="row" layout-align="space-around center">
        <md-button class="md-raised md-primary md-hue-1 login-button" id="wp-submit" type="submit" name="wp-submit" value="Login">Log In</md-button>
        <input type="hidden" name="action" value="my_login_action" />
        <md-button class="md-raised md-primary md-hue-1 login-button" a href="<?php get_template_directory_uri() ?>/register.php">Register</md-button></a>
      </div>
    </form>
  <?php endif; ?>

  <?php get_footer() ?>
