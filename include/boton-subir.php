<style>
        .subir{
            display: none;
            padding: 20px;
            background-color: #13223f;
            color: white;
            font-size: 20px;
            cursor: pointer;
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 9999;
        }
</style>

<i class="fas fa-angle-double-up subir"></i>

<script>
        $(document).ready(function(){

            $('.subir').click(function(){
                $('body, html').animate({
                    scrollTop: '0px'
                }, 300);
            });

            $(window).scroll(function(){
                if($(this).scrollTop() > 200 ){
                    $('.subir').fadeIn(500);
                }else{
                    $('.subir').fadeOut(500);
                }
            });
        });
</script>