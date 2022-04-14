<div id="wrapper">
    <!-- <nav id="nav">
        <div class="nav-container">
            <?php 
               /* $custom_logo_id = get_theme_mod( 'custom_logo' );
                $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                    if ( has_custom_logo() ) {
                        echo '<a href="'.get_site_url().'"><img id="logo" src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '"></a>';
                    } else {
                        echo '<h1>' . get_bloginfo('name') . '</h1>';
                    } */
                ?>
            <ul>
                <li><a href="#">Seccion 1</a></li>
                <li><a href="#">Seccion 2</a></li>
            </ul>
        </div>
    </nav> -->
    <header id="header">
        <div class="header-container">
            <div class="welcome"> 
                <p>Bienvenido al</p>
                <h1>Plugin de Zaalto 🙌🚀</h1>
            </div>
            <div class="version">
                <img src="<?php echo plugins_url( '../images/zaalto.com-logo.svg' , __FILE__ ) ?>">
                <p>Versión<img src="<?php echo plugins_url( '../images/zaalto.com-github.svg' , __FILE__ ) ?>"></p>
                <h4>1.0.0</h4>
            </div>
        </div> 
    </header>
    <main id="main">
        <div class="main-container">
            <section>
                <h3>🎉 Introducción</h3>
                <p>Observa el siguiente video y aprende lo que el plugin trae para ti.</p>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/HN4FMT0jZp8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </section>
            <section>
                <h6>🎬 Videos tutoriales</h6>
                <p>Aprende como autogestionar tu sitio web construido por zaalto.com, a través de estos sencillos tutoriales.</p>
                <div class="video-gallery">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/HN4FMT0jZp8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/HN4FMT0jZp8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/HN4FMT0jZp8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/HN4FMT0jZp8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </section>
            <section class="section-social-media">
                <h6>📲 Síguenos en las redes sociales</h6>
                <ul>
                    <li><a href=""><img src="<?php echo plugins_url( '../images/zaalto.com-instagram.svg' , __FILE__ ) ?>" ></a></li>
                    <li><a href=""><img src="<?php echo plugins_url( '../images/zaalto.com-facebook.svg' , __FILE__ ) ?>" ></a></li>
                    <li><a href=""><img src="<?php echo plugins_url( '../images/zaalto.com-linkedin.svg' , __FILE__ ) ?>" ></a></li>
                    <li><a href=""><img src="<?php echo plugins_url( '../images/zaalto.com-pinterest.svg' , __FILE__ ) ?>" ></a></li>
                    <li><a href=""><img src="<?php echo plugins_url( '../images/zaalto.com-youtube.svg' , __FILE__ ) ?>" ></a></li>
                    <li><a href=""><img src="<?php echo plugins_url( '../images/zaalto.com-tiktok.svg' , __FILE__ ) ?>"></a></li>
                </ul>
            </section>
            <section class="section-reviews">
                <h6>💬 Déjanos tu comentario en Google</h6>
                <script defer async src='https://cdn.trustindex.io/loader.js?98eb7b1445f119883f5a318c68'></script>
            </section>
        </div>
    </main>
    <footer id="footer">
        <div class="footer-container">
            <!-- <div class="footer-columns">Footer 1</div> -->
        </div>
        <div id="copyright"><span>© 2022 zaalto.com. <br> Todo los derechos reservados.</span></div>
        <!--Start of Tawk.to Script-->
        <script type="text/javascript">
            var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
            (function(){
            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
            s1.async=true;
            s1.src='https://embed.tawk.to/6172dac0f7c0440a591f89f6/1fikbprsh';
            s1.charset='UTF-8';
            s1.setAttribute('crossorigin','*');
            s0.parentNode.insertBefore(s1,s0);
            })();
        </script>
        <!--End of Tawk.to Script-->
    </footer>
</div>