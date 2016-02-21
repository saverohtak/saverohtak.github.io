    <footer>
        <span>Just Trying to Save Rohtak with <3. Please suggest us other ways too to awake media and Government.</span>
    </footer>

    <script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
    <script src="js/vendor/what-input.min.js"></script>
    <script src="js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
    <!--<script src="js/foundation.min.js"></script>-->
    <script src="js/app.js"></script>
    <!--<script async src="https://static.addtoany.com/menu/page.js"></script>-->
    <script type="text/javascript" charset="utf-8">
        $(document).ready(function(){
            $("a[rel^='Pray_For_Rohtak[r]']").prettyPhoto();
            $("a[rel^='Pray_For_Rohtak_Images[a]']").prettyPhoto();
            $("#submit").click(function(e){
               var body=$("#body").val();
               var email=$("#email").val();
               var subject=$("#subject").val();
                window.open("https://mail.google.com/mail/u/0/?view=cm&fs=1&tf=1&source=mailto&to="+email+"&su="+subject,"_blank");
            });
            $("#tweet").click(function(e){
                window.open("https://twitter.com/home?status=Need%20strict%20action%20in%20Rohtak%20%40smritiirani%20%40narendramodi%20%40PMOIndia%20%40SushmaSwaraj%20%40manoharparrikar%20%23jaatreservation%20http%3A//goo.gl/L3Bgs8",'_blank', 'width=600,height=400');
            });
            $("#tweet_share").click(function(e){
                window.open("https://twitter.com/home?status=Need%20strict%20action%20in%20Rohtak%20%40smritiirani%20%40narendramodi%20%40PMOIndia%20%40SushmaSwaraj%20%40manoharparrikar%20%23jaatreservation%20http%3A//goo.gl/L3Bgs8",'_blank', 'width=600,height=400');
            });
        });
    </script>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-74090636-1', 'auto');
        ga('send', 'pageview');

    </script>
  </body>
</html>