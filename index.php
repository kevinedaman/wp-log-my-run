
  <?php get_header() ?>

  <?php if( is_user_logged_in() && current_user_can( 'edit_posts' ) ) : ?>

    <div class="container">
      <div layout="column" layout-align="start center">
        <main ng-view></main>
      </div>
    </div>

  <?php else : ?>
  <div ng-hide="login">
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
        <md-button class="md-raised md-primary md-hue-1 login-button" ng-click="login = !login">Register</md-button></a>
      </div>
    </form>
  </div>

  <div ng-show="login">
    <div ng-controller="HomeController">
    <md-content layout="row" layout-align="center center">
      <div class = "column">
      <form ng-submit="addUser(newUser)">
        <md-input-container>
            <label for="username">Username:</label>
            <input type="text" ng-model="newUser.name" />
        </md-input-container>
      <br>
      <md-input-container>
          <label for="username">Email:</label>
          <input type="text" ng-model="newUser.email" />
      </md-input-container>
      <br>
        <md-input-container>
            <label for="password">Password:</label>
            <input type="password" ng-model="newUser.password" />
        </md-input-container>
      <br>
      <div layout="row" layout-align="center center">
        <md-button class="md-raised md-primary md-hue-1" type="submit" name="submit" value="Register">Register</md-button>
      </div>
      </form>
    </div>
    </md-content>
  </div>
  </div>

  <?php endif; ?>

  <?php get_footer() ?>
