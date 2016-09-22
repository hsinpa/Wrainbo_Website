<header class="top-bar web-topbar">
  <div class="title-bar-left show-for-small-only">
    <button class="menu-icon" type="button" data-open="offCanvas"></button>
    <span class="title-bar-title">
      <a href="http://wrainbo.com/" ><img src="{{ url('image/icon/logo.png')}}" /></a>
    </span>
  </div>


  <div class="top-bar-title show-for-medium">
    <!-- <span data-responsive-toggle="responsive-menu" data-hide-for="medium">
      <span class="menu-icon dark" data-toggle></span>
    </span> -->
    <a href="http://wrainbo.com/" ><img src="{{ url('image/icon/logo.png')}}" /></a>
  </div>

    <div id="responsive-menu">
      <div class="top-bar-right show-for-medium">
        <ul >
          <!-- <li><a href="/"><img src="image/icon/logo.png" /></a></li> -->
          <li><a href="/">HOME</a></li>
          <li><a href="gameplay">FEATURES</a>
            <ul>
            <li class="nav3"><a href="http://wrainbo.com/gameplay">Gameplay</a></li>
            <li class="nav3"><a href="http://wrainbo.com/learning">Practical Learning</a></li>
            <li class="nav3"><a href="http://wrainbo.com/assessment">Data Driven Assessment</a></li>
            <li class="nav3"><a href="http://wrainbo.com/platform">Platform</a></li>
            </ul>
          </li>
          <li><a href="http://wrainbo.com/magitech">MAGITECH</a></li>
          <li><a href="http://wrainbo.com/aboutUs" >ABOUT US</a></li>
          <li><a class="demo-button" href="http://wrainbo.com/demo" >GET DEMO</a></li>
          <li class="web-topbar-seperateLine"> | </li>
          <li><a href="http://wrainbo.com/cms">LOGIN</a></li>
        </ul>
      </div>
    </div>
</header>

<script text="text/javascript">
  $(".off-canvas-list a").click(function () {
            $("#offCanvas").foundation('close');
  });
</script>
