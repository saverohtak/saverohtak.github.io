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
    <div class="columns small-12 medium-8"  id="images">
        <section>
            <div class="row columns small-12 medium-12 letter">
                <h4>Images</h4>
                <?php
                    $value=scandir("img/thumbnails");
                    for($j=2;$j<sizeof($value);$j++){
                        if($value[$j]!="." || $value[$j]!=".."){
                            echo '<a href="img/fullscreen/'.$value[$j].'" rel="Pray_For_Rohtak_Images[a]" title=""><img src="img/thumbnails/'.$value[$j].'"
                                                                                      width="80" height="80"
                                                                                      alt="Damage To Rohtak"/></a>';
                        }
                    }
                ?>
                </div>
            </section>
        </div>
    <?php require("sidebar.php");?>
    </div>
<?php require("footer.php");?>