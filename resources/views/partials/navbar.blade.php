<!-- Main Menu Section -->
<section class="menu">
	<nav class="navbar navigation">
		<div class="container">
			<div class="navbar-header">
				<h2 class="menu-title">Main Menu</h2>
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
					aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>

			</div><!-- / .navbar-header -->

			<!-- Navbar Links -->
			<div id="navbar" class="navbar-collapse collapse text-center">
				<ul class="nav navbar-nav">

					<!-- Home -->
					<li class="dropdown ">
						<a href="/" class="nav-link {{ ($title === "Home") ? 'active' : '' }}">Home</a>
					</li><!-- / Home -->


					<!-- Elements -->
					<li class="dropdown dropdown-slide">
						<a href="/contact" class="nav-link {{ ($title === "Contact") ? 'active' : '' }}">Contact</a>
					</li><!-- / Elements -->


					<!-- Elements -->
					<li class="dropdown dropdown-slide">
						<a href="/about" class="nav-link {{ ($title === "About") ? 'active' : '' }}">About</a>
					</li><!-- / Elements -->

                    <!-- Elements -->
					<li class="dropdown dropdown-slide">
						<a href="/posts" class="nav-link {{ ($title === "Posts") ? 'active' : '' }}">FIND JOB</a>
					</li><!-- / Elements -->

				</ul><!-- / .nav .navbar-nav -->

			</div>
			<!--/.navbar-collapse -->
		</div><!-- / .container -->
	</nav>
</section>