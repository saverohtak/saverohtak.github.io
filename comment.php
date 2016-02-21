<?php include("header.php");?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=1555480191431000";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<div class="row fullWidth raise_your_voice" >
    <div class="columns small-10 small-offset-1">
        <section>
            <p><u>Express Your Views:</u> If you believe you know well about the present condition of Rohtak and have better way to stop this, please express below. </p>
            <ul class="share-buttons">
                <li>Share This : </li>
                <li><a href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fsaverohtak.com&t=" title="Share on Facebook" target="_blank" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(document.URL) + '&t=' + encodeURIComponent(document.URL)); return false;"><img src="img/inverted/Facebook.png"></a></li>
                <li><a href="https://twitter.com/intent/tweet?source=http%3A%2F%2Fsaverohtak.com&text=:%20http%3A%2F%2Fsaverohtak.com" target="_blank" title="Tweet" onclick="window.open('https://twitter.com/intent/tweet?text=' + encodeURIComponent(document.title) + ':%20'  + encodeURIComponent(document.URL)); return false;"><img src="img/inverted/Twitter.png"></a></li>
            </ul>
        </section>
    </div>
</div>
<div class="row fullWidth container">
    <div class="columns small-12 medium-8"  id="comment">
        <section>
            <div class="row columns small-12 medium-12 letter">
                <h4>You can comment anonymously by choosing guest option.</h4>
                <div id="disqus_thread"></div>
                <script>
                    /**
                     * RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                     * LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables
                     */

                     var disqus_config = function () {
                     this.page.url = "http://saverohtak.com/comment.php"; // Replace PAGE_URL with your page's canonical URL variable
                     this.page.identifier = "comment"; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                     };

                    (function() { // DON'T EDIT BELOW THIS LINE
                        var d = document, s = d.createElement('script');

                        s.src = '//saverohtakcom.disqus.com/embed.js';

                        s.setAttribute('data-timestamp', +new Date());
                        (d.head || d.body).appendChild(s);
                    })();
                </script>
                <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>

            </div>
        </section>
    </div>
    <?php require("sidebar.php");?>
</div>