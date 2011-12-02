<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>
</div>
</div><!-- #main -->
<aside>
    <section class="partners">
        <div class="busta">
            <h2>Our partners</h2>
            <ul>
                <li><a href="http://www.nsf.gov"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nsf.png" height="75" width="90" alt="NSF" /></a></li>
                <li><a href="http://www.geni.net"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/geni.png" width="90" height="75" alt="geni - exploring networks of the future" /></a></li>
                <li><a href="http://www.zerodivide.org"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/zd.png" width="90" height="75" alt="Zero Divide" /></a></li>
                <li><a href="http://www.webfwd.org"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/webfwd.png" width="90" height="75" alt="WebFWD" /></a></li>
                <li><a href="http://developer.mozilla.org"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/mdn.png" width="90" height="75" alt="Mozilla Developer Network" /></a></li>
                <li><a href="http://us-ignite.org"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ignite.png" width="90" height="75" alt="US Ignite" /></a></li>
            </ul>
        </div>
    </section>

    <section class="external">
        <div class="busta">
            <div class="col box tweet">
                <h2>Follow and tweet</h2>
                <p>What becomes possible at 1GBps? What's the future of the web and smart networks? Tweet your thoughts with <a href="https://twitter.com/#!/search?q=%23usignite">#usignite</a>.</p>
                <a href="https://twitter.com/mozilla" class="twitter-follow-button" data-show-count="false">Follow @mozilla</a>
                <script src="//platform.twitter.com/widgets.js" type="text/javascript"></script>
           </div>
            <div class="col box learn">
                <h2>Learn more</h2>
                <ul>
                    <li><a href="mailto:ben@mozillafoundation.org">Contact us</a></li>
                    <li><a href="http://www.geni.net">Visit <abbr title="Global Environment for Network Innovations">GENI</abbr> website</a></li>
                    <li><a href="http://www.nsf.gov/cise/usignite/">Visit <abbr title="United States">US</abbr> Ignite website</a></li>
                </ul>
            </div>
            <div class="col box mozilla">
                <h2>Connect with Mozilla</h2>
                <ul>
                    <li><a href="http://www.mozilla.org/about/mission.html">Learn about Mozilla's mission</a></li>
                    <li><a href="https://donate.mozilla.org/join/">Join Mozilla</a></li>
                    <li><a href="http://www.facebook.com/mozilladrumbeat/">Like us on Facebook</a></li>                                                             
                </ul>
            </div>                                                                          
        </div>                                                                              
    </section>
    </aside>
<?php wp_footer(); ?>

</body>
</html>
