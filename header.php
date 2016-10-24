        <link rel="stylesheet" type="text/css" href="css/header.css"/>
		
		 <script>
        jQuery(document).ready(function() {
            jQuery('.toggle-nav-menu').click(function() {
                jQuery('.nav_bar').slideToggle(250);

                e.preventDefault();
            });
        });
    </script>
	
	  <header>
        <div class="main header_container header_bar main_menu">
            <div id="header_logo">
                <a class="logoo" href="/">
                    <img href="/" src="image/3dprotologoo.png" alt="logo"/>
                </a>
            </div>
            <a class="toggle-nav-menu" href="#"><img src="image/menuu.png"/></a>
            <div class="nav_bar large-9">
                <nav class="nav_menu">
                    <ul class="active_nav">
                        <li class="store">
                            <a href="3d.html">3D Printers</a>
                        </li>
                        <li class="scanner">
                            <a href="scanners.html">Scanners</a>
                        </li>
                        <li class="services">
                            <a href="rint.html">3D Printing Services</a>
                        </li>
                        <li class="selfiy">
                            <a href="http://www.3dselfiy.com/">3D Selfiy</a>
                        </li>
                        <li>
                            <a class="contact" href=".fa-contact-container">Contact</a>
                        </li>
                    </ul>

                </nav>
            </div>
        </div>
    </header>