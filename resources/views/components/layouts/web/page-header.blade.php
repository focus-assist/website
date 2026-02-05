<a id="skip-link" href="#main"><span>Skip to Main Content</span></a>

<header class="acm-header" id="site-header">
    <div class="acm-header-inner">
        <a href="/" class="acm-logo" aria-label="Focus Assist — Home">Focus Assist</a>

        <details class="acm-toggle" id="acm-toggle" open>
            <summary aria-label="Toggle navigation menu">
            <span class="acm-toggle-icon" aria-hidden="true"></span>
            <span class="sr-only">Menu</span>
            </summary>

            <nav class="acm-nav" aria-label="Primary navigation">
            <ul class="acm-list" role="menubar">
                <li role="none">
                    <a href="{{ route( 'public.page.home' ); }}" class="acm-link" role="menuitem" aria-current="page">Home</a>
                </li>

                <li role="none">
                    <details class="acm-dropdown" data-acm-dropdown>
                        <summary class="acm-dropdown-toggle" role="menuitem" aria-haspopup="true">Services</summary>
                        <div class="acm-panel" role="menu">
                        <ul class="acm-panel-list">
                            <li role="none"><a href="{{ route( 'public.page.services' ); }}#agile-transformation" class="acm-panel-link" role="menuitem">Agile Transformation</a></li>
                            <li role="none"><a href="{{ route( 'public.page.services' ); }}#agile-coaching" class="acm-panel-link" role="menuitem">Agile Coaching</a></li>
                            <li role="none"><a href="{{ route( 'public.page.services' ); }}#product-management" class="acm-panel-link" role="menuitem">Product Management</a></li>
                            <li role="none"><a href="{{ route( 'public.page.services' ); }}#project-management" class="acm-panel-link" role="menuitem">Project Management</a></li>
                            <li class="acm-divider" role="separator"></li>
                            <li role="none"><a href="{{ route( 'public.page.services' ); }}" class="acm-panel-link" role="menuitem">View All Services</a></li>
                        </ul>
                        </div>
                    </details>
                </li>

                <li role="none">
                    <details class="acm-dropdown" data-acm-dropdown>
                        <summary class="acm-dropdown-toggle" role="menuitem" aria-haspopup="true">Products</summary>
                        <div class="acm-panel" role="menu">
                        <ul class="acm-panel-list">
                            <li role="none"><a href="{{ route( 'public.page.products' ); }}#vista-opus" class="acm-panel-link" role="menuitem">Vista Opus</a></li>
                            <li role="none"><a href="{{ route( 'public.page.products' ); }}#libri-res" class="acm-panel-link" role="menuitem">Libri Res</a></li>
                            <li role="none"><a href="{{ route( 'public.page.products' ); }}#diarium-salus" class="acm-panel-link" role="menuitem">Diarium Salus</a></li>
                            <li class="acm-divider" role="separator"></li>
                            <li role="none"><a href="{{ route( 'public.page.products' ); }}" class="acm-panel-link" role="menuitem">View All Products</a></li>
                        </ul>
                        </div>
                    </details>
                </li>

                <li role="none"><a href="{{ route( 'public.blog.page.feed' ); }}#libri-res" class="acm-panel-link" role="menuitem">Blog</a></li>
                <li role="none"><a href="{{ route( 'public.page.about' ); }}#vista-opus" class="acm-panel-link" role="menuitem">About Us</a></li>
                <li role="none"><a href="{{ route( 'public.page.contact' ); }}#diarium-salus" class="acm-panel-link" role="menuitem">Contact Us</a></li>
            </ul>
            </nav>
        </details>
    </div>
</header>