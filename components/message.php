<div class="container">
    <div >
        <p style="color: red;">
            <?php
                if ($message){
                    echo ($message);
                }
                if ($_SESSION['message']){
                    echo ($_SESSION['message']);
                    $_SESSION['message'] = null;
                }
            ?>
        </p>
    </div>
</div>