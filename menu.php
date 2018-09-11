

<div class="sidenav">
        <a href="view_feed.php">NEWS FEED<i class="fas fa-newspaper" style="font-size: 4.5em;"></i></a>
        <a href="create_post.php">NEW POST<i class="fas fa-pencil-alt" style="font-size: 4.5em;"></i/><br /></a><br/>
        <a href="friends.php">MESSAGE<i class="far fa-envelope" style="font-size: 4.4em;"></i></a>
        <a href="events.php">EVENTS<i class="fas fa-calendar-alt" style="font-size: 4.5em;"></i></a><br/>
        <a href="#" onclick="playAudio()">GET HELP<i class="fas fa-hands-helping" style="font-size: 4.5em;"></i></a>
</div>

<body>

<audio id="myAudio">
    <source src="sound/rooster.mp3" type="audio/mpeg">
</audio>

<script>
    var x = document.getElementById("myAudio");

    function playAudio() {
        x.play();
    }
</script>

</body>

    </body>


