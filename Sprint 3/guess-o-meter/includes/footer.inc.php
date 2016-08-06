</div><!-- container -->
</div>

<footer class="page-footer lime darken-4">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="white-text flashy-text">Find Me On</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
            </div>
            <div class="col l4 offset-l2 s12">
                <h5 class="white-text flashy-text">Links</h5>
                <ul>

                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
             	&copy; <?php echo date('Y'); ?> Ron Quartel
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
        </div>
    </div>
</footer>

<!--jQuery JS-->
<script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
<!--Angular JS-->
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.min.js"></script>
<!--Materialize JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
<!--Project JS-->
<script src="./js/main.js"></script>
</body>
</html>

<!-- Modal Structure -->
<div id="login" class="modal">
    <div class="modal-content">

        <div class="row valign-wrapper">
            <form class="col s10 offset-s1">
                <div class="row valign">
                    <h4 class="center-align">Login</h4>
                    <div class="input-field">
                        <i class="material-icons prefix">account_circle</i>
                        <input id="icon_prefix" type="text" class="validate">
                        <label for="icon_prefix">Username</label>
                    </div>
                    <div class="input-field">
                        <i class="material-icons prefix">lock</i>
                        <input id="icon_password" type="password" class="validate">
                        <label for="icon_password">Password</label>
                    </div>
                </div>
            </form>
        </div>



        <!-- for model functionality -->
        <div class="modal-footer">
            <a id="login-button" href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Login</a>
        </div>
