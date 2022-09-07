<?php
    include '../include/header.php';
    include '../include/topnav.php';
?>
    <!-- forgot password start -->
    <section class="section-tb-padding">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="forgat-password-area">
                        <h4 class="forgot-title">Forgot password?</h4>
                        <p class="forgot" style="text-align: center;">Reset your password here</p>
                        <div class="forgot-p">
                            <form>
                                <input type="text" name="text" placeholder="Username or email">
                            </form>
                            <a href="login.php" class="forgot-link">Get new password <i
                                        class="fa fa-unlock"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- forgot password end -->
    <?php
    include '../include/footer.php'
  ?>