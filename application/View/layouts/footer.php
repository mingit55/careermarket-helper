<!-- 푸터 영역 -->
<?php if($noLayout == false):?>
<footer>
    <div class="container py-3">
        <div class="d-between">
            <div>
                <p class="mb-0 d-none d-sm-block">ⓒCOPYRIGHT 수원정보과학고등학교 ALL RIGHT RESOLVED.</p>
            </div>
            <div>
                <strong>by. MING</strong>
            </div>
        </div>
    </div>
</footer>
<?php endif;?>
<!-- /푸터 영역 -->
</div>
    <!-- Scripts -->
    <script src="/resources/js/common.js"></script>
    <?php if(is_file(RES.DS."js".DS.$viewName.".js")):?>
        <script src="/resources/js/<?=$viewName?>.js"></script>
    <?php endif;?>
    <!-- /Scripts -->   
</body>
</html>