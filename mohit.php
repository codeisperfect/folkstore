<?php
include "includes/app.php";
load_view("template/top.php");
?>

<div style="margin-left:200px;" >
	<li class="dropdown">
		<a class="dropdown-toggle" data-toggle="dropdown" href="#">Dropdown <b class="caret"></b></a>
		<ul class="dropdown-menu">
			<li><a href="#">Action</a></li>
			<li><a href="#">Another action</a></li>
			<li><a href="#">Something else here</a></li>
			<li class="divider"></li>
			<li><a href="#">Separated link</a></li>
			<li class="dropdown-submenu dropdown">
				<a tabindex="-1" class="dropdown-toggle" data-toggle="dropdown" href="#" >More options</a>
				<ul class="dropdown-menu">
					<li><a href="#">Action</a></li>
					<li><a href="#">Another action</a></li>
					<li><a href="#">Something else here</a></li>
				</ul>
			</li>

		</ul>
	</li>
</div>


<div class="bs-docs-example bs-docs-example-submenus">

            <div class="pull-left">
              <p class="muted">Default</p>
              <div class="dropdown clearfix">
                <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
                  <li><a tabindex="-1" href="#">Action</a></li>
                  <li><a tabindex="-1" href="#">Another action</a></li>
                  <li><a tabindex="-1" href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li class="dropdown-submenu">
                    <a tabindex="-1" href="#">More options</a>
                    <ul class="dropdown-menu">
                      <li><a tabindex="-1" href="#">Second level link</a></li>
                      <li><a tabindex="-1" href="#">Second level link</a></li>
                      <li><a tabindex="-1" href="#">Second level link</a></li>
                      <li><a tabindex="-1" href="#">Second level link</a></li>
                      <li><a tabindex="-1" href="#">Second level link</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>

            <div class="pull-left">
              <p class="muted">Dropup</p>
              <div class="dropup">
                <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
                  <li><a tabindex="-1" href="#">Action</a></li>
                  <li><a tabindex="-1" href="#">Another action</a></li>
                  <li><a tabindex="-1" href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li class="dropdown-submenu">
                    <a tabindex="-1" href="#">More options</a>
                    <ul class="dropdown-menu">
                      <li><a tabindex="-1" href="#">Second level link</a></li>
                      <li><a tabindex="-1" href="#">Second level link</a></li>
                      <li><a tabindex="-1" href="#">Second level link</a></li>
                      <li><a tabindex="-1" href="#">Second level link</a></li>
                      <li><a tabindex="-1" href="#">Second level link</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>

            <div class="pull-left">
              <p class="muted">Left submenu</p>
              <div class="dropdown">
                <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
                  <li><a tabindex="-1" href="#">Action</a></li>
                  <li><a tabindex="-1" href="#">Another action</a></li>
                  <li><a tabindex="-1" href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li class="dropdown-submenu pull-left">
                    <a tabindex="-1" href="#">More options</a>
                    <ul class="dropdown-menu">
                      <li><a tabindex="-1" href="#">Second level link</a></li>
                      <li><a tabindex="-1" href="#">Second level link</a></li>
                      <li><a tabindex="-1" href="#">Second level link</a></li>
                      <li><a tabindex="-1" href="#">Second level link</a></li>
                      <li><a tabindex="-1" href="#">Second level link</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>

          </div>



<?php
load_view("template/bottom.php");
closedb();
?>