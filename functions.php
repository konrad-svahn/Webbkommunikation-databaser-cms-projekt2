<?php
function our_theme_assets() {

    // CSS
    wp_enqueue_style(
        'theme-css',
        get_bloginfo('stylesheet_directory') . '/style.css',
        false,
        filemtime(get_template_directory() . '/style.css'),
        false
    );
}
add_action('wp_enqueue_scripts', 'our_theme_assets');

function mychildtheme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
 }
 add_action( 'wp_enqueue_scripts', 'mychildtheme_enqueue_styles' );
// koden ovan fick jag när jag frågade Ville om hjälp och är inte skriven av mig.
//Den fixar ett problem där sidan inte laddade parent theme utan bara child themets css



	
//koden nedan kommer delvis från https://presscoders.com/wordpress-theme-customization-guide/ men jag har gort ändringar i den                 <script src="./script.js"></script>
add_action( 'wp_footer', 'pc_custom_footer' );
 
function pc_custom_footer() {
	echo '<img width="165" height="300" src="https://cgi.arcada.fi/~svahnkon/wordpress-5.7.2/wordpress/wp-content/uploads/2021/05/gas-165x300.png" class="image wp-image-21  attachment-medium size-medium" alt="" loading="lazy" style="max-width: 100%; height: auto;" srcset="https://cgi.arcada.fi/~svahnkon/wordpress-5.7.2/wordpress/wp-content/uploads/2021/05/gas-165x300.png 165w, https://cgi.arcada.fi/~svahnkon/wordpress-5.7.2/wordpress/wp-content/uploads/2021/05/gas.png 241w" sizes="(max-width: 165px) 100vw, 165px">
    <script>
    
    </script>'
        ;}




//på sidan fins ett formulär som skickar epost till företaget (min epost adress) det är gort med en custom html widget som ineholler följande kod


        /*<form action="mailto:svahnkon@arcada.fi" method="POST" enctype="text/plain">
            <table>
                <tr>
                        <td> <label for="fname">förnamn:</label>
                        <input type="text" id="fname" name="fname"></td>
                </tr>
                <tr>
                        <td><label for="lname">efternam:</label>
                        <input type="text" id="lname" name="lname"></td>
                </tr>
                <tr>
                    <td><label for="email">email </label>
                    <input type="text" id="email" name="email"></td>
                </tr>
                <tr>
                        <td><label for="message">email lösenord</label>
                        <input type="password" id="message" name="message"></td>
                </tr>
                <tr>
                 <td><input type="submit" value="skika"> </td>
                </tr>
            </table>
        </form>*/


//kartan på samma sida är gord på samma sät och ineholler koden


        /*<div class="gridcontainer">
        <iframe  id="karta" src="https://www.openstreetmap.org/export/embed.html?bbox=24.98248100280762%2C60.178553544118714%2C25.00393867492676%2C60.18638503121964&amp;layer=mapnik&amp;marker=60.18246952114209%2C24.993209838867188" style="border: 1px solid black"></iframe>
        </div>*/      
 ?>