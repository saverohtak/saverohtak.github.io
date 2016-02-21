<?php include("header.php");?>
<div class="row fullWidth raise_your_voice" >
    <div class="columns small-10 small-offset-1">
        <section>
            <p><u>Present State of Rohtak City:</u> Sharing the images of the damages being done by violent protestors. It will take years to see all this once again in city.</p>
            <ul class="share-buttons">
                <li>Share This : </li>
                <li><a href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fsaverohtak.com&t=" title="Share on Facebook" target="_blank" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(document.URL) + '&t=' + encodeURIComponent(document.URL)); return false;"><img src="img/inverted/Facebook.png"></a></li>
                <li><a href="https://twitter.com/intent/tweet?source=http%3A%2F%2Fsaverohtak.com&text=:%20http%3A%2F%2Fsaverohtak.com" target="_blank" title="Tweet" onclick="window.open('https://twitter.com/intent/tweet?text=' + encodeURIComponent(document.title) + ':%20'  + encodeURIComponent(document.URL)); return false;"><img src="img/inverted/Twitter.png"></a></li>
            </ul>
        </section>
    </div>
</div>
<div class="row fullWidth container">
    <div class="columns small-12 medium-8"  id="video">
        <section>
            <div class="row columns small-12 medium-12 letter">
                <h4>Videos</h4>
                <!--<a href="http://www.youtube.com/watch?v=S13IOhfvmgc" rel="pray_for_rohtak" title=""><img src="img/pray_for_rohtak.jpg" alt="YouTube" width="60" /></a>-->
                <iframe width="95%" height="350px" src="https://www.youtube.com/embed/S13IOhfvmgc" frameborder="0" allowfullscreen></iframe>
                <iframe width="95%" height="350px" src="https://www.youtube.com/embed/LC9iBW48m_4" frameborder="0" allowfullscreen></iframe>
                <iframe width="95%" height="350px" src="https://www.youtube.com/embed/1JewdIPm8L4" frameborder="0" allowfullscreen></iframe>

            </div>
        </section>
    </div>
    <?php require("sidebar.php");?>
</div>
<?php require("footer.php");?>
