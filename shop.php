<?php ob_start(); ?>
<!--Admin page-->
    <h1>Welcome into the Shop</h1>
    <div class="Market">
        <div class="MarketTable">
            <div class="MarketCase">
                2
            </div>
        </div>
    </div>

    <script>
        functionAddModul(){
            
        }
    </script>

<?php 
    $content=ob_get_clean();
    require_once "template.php"
?>