<?php require("header.php")?>
    <div class="row fullWidth raise_your_voice" >
        <div class="columns small-10 small-offset-1">
            <section>
                <p><u>Raise Your Voice:</u> It's high time to raise our voice against the brutality of rioters.. Send a letter to CM now expressing your concern about the state. You can also use the template given below.</p>
                <ul class="share-buttons">
                    <li>Share This : </li>
                    <li><a href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fsaverohtak.com&t=" title="Share on Facebook" target="_blank" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(document.URL) + '&t=' + encodeURIComponent(document.URL)); return false;"><img src="img/inverted/Facebook.png"></a></li>
                    <li><a href="https://twitter.com/intent/tweet?source=http%3A%2F%2Fsaverohtak.com&text=:%20http%3A%2F%2Fsaverohtak.com" target="_blank" title="Tweet" onclick="window.open('https://twitter.com/intent/tweet?text=' + encodeURIComponent(document.title) + ':%20'  + encodeURIComponent(document.URL)); return false;"><img src="img/inverted/Twitter.png"></a></li>
                </ul>
            </section>
        </div>
    </div>
<div class="row fullWidth container">
    <div class="columns small-12 medium-8"  id="letter">
        <section>
            <div class="row columns small-12 medium-8 letter">
                <h2>Send Letter </h2>
                <form>
                    <label for="email">Email</label><input type="email" value="cmharyana@nic.in" id="email" name="email">
                    <label for="subject">Subject</label><input type="text" value="Seeking help for Rohtak Condition" id="subject" name="subject">
                    <label for="body">Body</label><textarea id="body" rows="13" cols="80" name="body" onclick="this.focus();this.select()">

To
Sh. Manohar Lal Khatter
Chief Minister of Haryana

Respected Sir

It's been more than 7 days Jaat community of Rohtak, Haryana are on strike for Reservation under OBC. We, the normal people of Society are getting  affected by this since Feb17, 2016. People are completely house arrested because rioters are roaming on roads with weapons in their hands,  destroying properties, burning vehicles and also beating up people badly. They've even burnt and looted most of the shops in the city. We have left nothing to feed ourselves or our families. We are afraid to move out of our houses.  Markets are closed and even we are not getting medicines and Medical Aid. Many offices are also destroyed and burned by Rioters in front of local police officials, and yet no action has been taken against them. With all this happening in City, there is no police on roads now and we are under the threat of life due to all this.

I request you on behalf of people of Haryana, to solve this matter as soon as possible, So that we can live peacefully.


Thanking You
Concerned Citizen</textarea>
                </form>
                <button id="submit" class="button alert">Send With Gmail</button>
                <button id="tweet" class=" button alert">Tweet This Letter</button>
            </div>
        </section>
    </div>
    <?php require ("sidebar.php");?>
</div>

<?php require("footer.php")?>