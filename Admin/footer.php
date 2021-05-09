<?php if (!empty($_SESSION['current_user'])) { ?>
    <div class="clear-both"></div>
    </div>
    </div>
    <div id="admin-footer">
    <div clas="container">
        <div class="left-panel">
        &commat; Copyright Hanoi Hotel 2020
        </div>
        <div class="right-panel">
                <a target="_blank" href="https://www.facebook.com/hanoihotelvietnam" title="FB Hà Nội Hotel"><img height="48" src="../images/facebook.png" /></a>
                <a target="_blank" href="https://hanoihotel.com.vn/" title="Trang chủ Hà Nội Hotel"><img style="background: white;" height="48" src="../images/Logo-Hanoihotel.png" /></a>
            </div>
        <div class="clear-both"></div>
    </div>
</div>
<?php } else { ?>
    <div class="container">
        <div class="box-content">
            Bạn chưa đăng nhập. Mời bạn quay lại đăng nhập quản trị <a href="index.php">tại đây</a>
        </div>
    </div>
<?php } ?>
<script src="../js/index.js"></script>
</body>
</html>