

<!-- using google CDN -->

<!-- <script src="./js/main.js" type="text/javascript"></script> -->



<header>

<nav>
  <ul>
<li class="<?php echo ($page == "portfolio" ? "active" : "")?>" ><a href='portfolio'>Portfolio</a></li>

<li class="<?php echo ($page == "about" ? "active" : "")?>"><a href='about'>About</a></li>

<!-- <li class="<?php echo ($page == "contact" ? "active" : "")?>"><a href='contact'>Contact</a></li> -->
</ul>
</nav>
</header>




<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>

<script>
$(window).scroll(function() {
    var scroll = $(window).scrollTop();

    if (scroll >= 20) {
        $("header").addClass("scrolledHeader");
        $("nav").addClass("scrollednav");
        $(".scroll").addClass("scroll_element");

    } else {
        $("header").removeClass("scrolledHeader");
        $("nav").removeClass("scrollednav");
        $(".scroll").removeClass("scroll_element");
    }
});

</script>


<div class="logo">

<span class="text_concept">text & concept</span>
<span class="kevin_bloch">Kevin Bloch</span>
<span class="cursor">|    </span>


</div>
