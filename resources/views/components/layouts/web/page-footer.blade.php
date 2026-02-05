<footer>
    <section>
        <hgroup>
            <h2><span>Focus Assist</span></h2>
        </hgroup>
        <p>Professional facilitation in Product Management and Project Management. Purpose-built software and expert professionals, available worldwide.</p>
    </section>

    <section aria-labelledby="quick-links-footer-section-label">
        <hgroup class="sr-only">
            <h3><span id="quick-links-footer-section-label">Quick Links</span></h3>
        </hgroup>

        <div aria-labelledby="quick-links-products-label">
            <hgroup>
            <h4><span id="quick-links-products-label">Products</span></h4>
            </hgroup>

            <ul>
            <li><a href="{{ route( 'public.page.products' ); }}#vista-opus"><span>Vista Opus</span></a></li>
            <li><a href="{{ route( 'public.page.products' ); }}#libri-res"><span>Libri Res</span></a></li>
            <li><a href="{{ route( 'public.page.products' ); }}#diarium-salus"><span>Diarium Salus</span></a></li>
            </ul>
        </div>

        <div aria-labelledby="quick-links-services-label">
            <hgroup>
            <h4><span id="quick-links-services-label">Services</span></h4>
            </hgroup>

            <ul>
            <li><a href="{{ route( 'public.page.services' ); }}#agile-transformations"><span>Agile Transformation</span></a></li>
            <li><a href="{{ route( 'public.page.services' ); }}#agile-coaching"><span>Agile Coaching</span></a></li>
            <li><a href="{{ route( 'public.page.services' ); }}#product-management"><span>Product Management</span></a></li>
            <li><a href="{{ route( 'public.page.services' ); }}#project-management"><span>Project Management</span></a></li>
            <li><a href="{{ route( 'public.page.services' ); }}#scrum-and-scrum_at_scale"><span>Scrum and Scrum@Scale</span></a></li>
            <li><a href="{{ route( 'public.page.services' ); }}#scaled-agile-framework-SAFe"><span>Scaled Agile Framework (SAFe)</span></a></li>
            </ul>
        </div>

        <div aria-labelledby="quick-links-company-label">
            <hgroup>
            <h4><span id="quick-links-company-label">Company</span></h4>
            </hgroup>

            <ul>
            <li><a href="{{ route( 'public.page.about' ); }}"><span>About Us</span></a></li>
            <li><a href="{{ route( 'public.blog.page.feed' ); }}"><span>Blog</span></a></li>
            <li><a href="{{ route( 'public.page.contact' ); }}"><span>Contact Us</span></a></li>
            </ul>
        </div>
    </section>

    <section aria-labelledby="legal-footer-section-label">
        <hgroup class="sr-only">
            <h3><span id="legal-footer-section-label">Legal</span></h3>
        </hgroup>

        <p>&copy; 2026 Focus Assist LLC. All rights reserved.</p>

        <ul>
            <li><a href="{{ route( 'public.page.accessibility-statement' ); }}">Accessibility Statement</a></li>
            <li><a href="{{ route( 'public.page.privacy-policy' ); }}">Privacy Policy</a></li>
            <li><a href="{{ route( 'public.page.terms-of-service' ); }}">Terms of Service</a></li>
        </ul>
    </section>
</footer>

<!-- ACM Menu Script -->
<script data-component="accessible-menu">
    /** ACCESSIBLE COLLAPSIBLE MENU (ACM) */
    (function ACM() {
        'use strict';

        const CONFIG = {
            selectors: { toggle: '#acm-toggle', dropdown: '[data-acm-dropdown]', panel: '.acm-panel', nested: '.acm-nested' },
            classes: { right: 'acm-panel--right', above: 'acm-panel--above', left: 'acm-panel--left' },
            breakpoint: 768,
            padding: 16
        };

        const navToggle = document.querySelector(CONFIG.selectors.toggle);
        const dropdowns = document.querySelectorAll(CONFIG.selectors.dropdown);

        function getFocusable(container) {
            return [...container.querySelectorAll('a[href], button, [tabindex]:not([tabindex="-1"]), summary')]
            .filter(el => el.offsetParent !== null);
        }

        function isNested(el) { return el.classList.contains('acm-nested'); }

        function positionPanel(dropdown) {
            const panel = dropdown.querySelector(CONFIG.selectors.panel);
            if (!panel || window.innerWidth <= CONFIG.breakpoint) return;
            panel.classList.remove(CONFIG.classes.right, CONFIG.classes.above, CONFIG.classes.left);
            void panel.offsetHeight;
            const rect = panel.getBoundingClientRect();
            const vw = window.innerWidth, vh = window.innerHeight, pad = CONFIG.padding;
            if (isNested(dropdown)) {
            if (rect.right > vw - pad) panel.classList.add(CONFIG.classes.left);
            } else {
            if (rect.right > vw - pad) panel.classList.add(CONFIG.classes.right);
            }
            const newRect = panel.getBoundingClientRect();
            if (newRect.bottom > vh - pad) panel.classList.add(CONFIG.classes.above);
        }

        function closeOthers(except) {
            dropdowns.forEach(d => { if (d !== except && d.open && !d.contains(except)) d.open = false; });
        }

        function closeAll() {
            dropdowns.forEach(d => d.open = false);
            if (navToggle) navToggle.open = false;
        }

        function handleKey(e, dropdown) {
            const panel = dropdown.querySelector(CONFIG.selectors.panel);
            if (!panel) return;
            const items = getFocusable(panel);
            const idx = items.indexOf(document.activeElement);
            switch (e.key) {
            case 'Escape':
                e.preventDefault(); e.stopPropagation();
                dropdown.open = false;
                dropdown.querySelector('summary').focus();
                break;
            case 'ArrowDown':
                e.preventDefault();
                items[(idx + 1) % items.length]?.focus();
                break;
            case 'ArrowUp':
                e.preventDefault();
                items[(idx - 1 + items.length) % items.length]?.focus();
                break;
            case 'ArrowRight': {
                const nested = document.activeElement.closest(CONFIG.selectors.nested);
                if (nested && !nested.open) {
                    e.preventDefault(); nested.open = true;
                    setTimeout(() => getFocusable(nested.querySelector(CONFIG.selectors.panel))[0]?.focus(), 10);
                }
                break;
            }
            case 'ArrowLeft':
                if (isNested(dropdown)) {
                    e.preventDefault(); dropdown.open = false;
                    dropdown.querySelector('summary').focus();
                }
                break;
            case 'Home': e.preventDefault(); items[0]?.focus(); break;
            case 'End': e.preventDefault(); items[items.length - 1]?.focus(); break;
            case 'Tab':
                setTimeout(() => { if (!dropdown.contains(document.activeElement)) dropdown.open = false; }, 0);
                break;
            }
        }

        dropdowns.forEach(dropdown => {
            const summary = dropdown.querySelector('summary');
            dropdown.addEventListener('toggle', () => {
            if (dropdown.open) {
                positionPanel(dropdown);
                if (!isNested(dropdown)) closeOthers(dropdown);
            }
            });
            dropdown.addEventListener('keydown', e => {
            if (dropdown.open) handleKey(e, dropdown);
            else if (e.key === 'ArrowDown' && document.activeElement === summary) {
                e.preventDefault(); dropdown.open = true;
                setTimeout(() => getFocusable(dropdown.querySelector(CONFIG.selectors.panel))[0]?.focus(), 10);
            }
            });
            summary.addEventListener('keydown', e => {
            if (e.key === 'Enter' || e.key === ' ') {
                setTimeout(() => {
                    if (dropdown.open) getFocusable(dropdown.querySelector(CONFIG.selectors.panel))[0]?.focus();
                }, 10);
            }
            });
        });

        if (navToggle) {
            const mq = window.matchMedia(`(min-width: ${CONFIG.breakpoint + 1}px)`);
            function setToggleState(desktop) {
            if (desktop) {
                navToggle.open = true;
            } else if (!navToggle.hasAttribute('data-user-toggled')) {
                navToggle.open = false;
            }
            }
            setToggleState(mq.matches);
            mq.addEventListener('change', e => {
            navToggle.removeAttribute('data-user-toggled');
            setToggleState(e.matches);
            });
            navToggle.addEventListener('toggle', () => {
            if (window.innerWidth <= CONFIG.breakpoint) {
                navToggle.setAttribute('data-user-toggled', '');
            }
            if (!navToggle.open) closeAll();
            });
        }

        document.addEventListener('click', e => {
            if (!e.target.closest(CONFIG.selectors.dropdown) && !e.target.closest(CONFIG.selectors.toggle)) {
            dropdowns.forEach(d => d.open = false);
            if (navToggle && window.innerWidth <= CONFIG.breakpoint) navToggle.open = false;
            }
        });
        document.addEventListener('keydown', e => {
            if (e.key === 'Escape') {
            dropdowns.forEach(d => d.open = false);
            if (navToggle && window.innerWidth <= CONFIG.breakpoint) navToggle.open = false;
            }
        });

        let resizeTimer;
        window.addEventListener('resize', () => {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(() => dropdowns.forEach(d => { if (d.open) positionPanel(d); }), 100);
        });

        /* Gamepad support */
        class GamepadInput {
            constructor() {
            this.state = {}; this.poll = null;
            window.addEventListener('gamepadconnected', () => this.start());
            window.addEventListener('gamepaddisconnected', () => this.stop());
            }
            start() { if (!this.poll) this.poll = setInterval(() => this.check(), 100); }
            stop() { if (!navigator.getGamepads().some(g => g)) { clearInterval(this.poll); this.poll = null; } }
            check() {
            for (const gp of navigator.getGamepads()) {
                if (!gp) continue;
                const [ax0, ax1] = gp.axes, btns = gp.buttons;
                this.input('up', btns[12]?.pressed || ax1 < -0.5);
                this.input('down', btns[13]?.pressed || ax1 > 0.5);
                this.input('left', btns[14]?.pressed || ax0 < -0.5);
                this.input('right', btns[15]?.pressed || ax0 > 0.5);
                this.input('a', btns[0]?.pressed);
                this.input('b', btns[1]?.pressed);
            }
            }
            input(name, pressed) {
            if (pressed && !this.state[name]) {
                const keys = { up: 'ArrowUp', down: 'ArrowDown', left: 'ArrowLeft', right: 'ArrowRight', a: 'Enter', b: 'Escape' };
                document.activeElement.dispatchEvent(new KeyboardEvent('keydown', { key: keys[name], bubbles: true }));
                if (name === 'a') document.activeElement.click?.();
            }
            this.state[name] = pressed;
            }
        }
        new GamepadInput();
    })();
    </script>

    <!-- Page Scripts -->
    <script>
    'use strict';

    /* ═══════════════════════════════════════════
        HEADER SCROLL STATE
        ═══════════════════════════════════════════ */
    const siteHeader = document.getElementById('site-header');
    window.addEventListener('scroll', () => {
        siteHeader.classList.toggle('scrolled', scrollY > 80);
    }, { passive: true });

    /* ═══════════════════════════════════════════
        SMOOTH SCROLL for in-page hash links
        ═══════════════════════════════════════════ */
    document.addEventListener('click', (e) => {
        const link = e.target.closest('a[href^="#"]');
        if (!link) return;
        const id = link.getAttribute('href').slice(1);
        const target = document.getElementById(id);
        if (target) {
            e.preventDefault();
            target.scrollIntoView({ behavior: 'smooth' });
        }
    });

    /* ═══════════════════════════════════════════
        SCROLL REVEAL (IntersectionObserver)
        ═══════════════════════════════════════════ */
    const io = new IntersectionObserver((entries) => {
        for (const entry of entries) {
            if (entry.isIntersecting) {
            entry.target.classList.add('visible');
            io.unobserve(entry.target);
            }
        }
    }, { threshold: .1, rootMargin: '0px 0px -30px 0px' });

    document.querySelectorAll('.reveal').forEach(el => io.observe(el));

    /* ═══════════════════════════════════════════
        HERO PARALLAX on scroll (desktop only)
        ═══════════════════════════════════════════ */
    const heroSection = document.querySelector('section[aria-describedby="hero-section-hgroup"]');

    if (heroSection && window.matchMedia('(min-width: 1025px)').matches) {
        const hgroup   = heroSection.querySelector('hgroup');
        const tagline  = heroSection.querySelector('.tagline');
        const ctaLinks = heroSection.querySelectorAll(':scope > p:has(> a)');
        const schedule = heroSection.querySelector('#example-schedule');

        let ticking = false;
        window.addEventListener('scroll', () => {
            if (ticking) return;
            ticking = true;
            requestAnimationFrame(() => {
            const rect = heroSection.getBoundingClientRect();
            const progress = Math.max(0, Math.min(1, -rect.top / (heroSection.offsetHeight * .6)));

            if (hgroup) {
                hgroup.style.transform  = 'translateY(' + (progress * -40) + 'px)';
                hgroup.style.opacity    = 1 - progress * .8;
            }
            if (tagline) {
                tagline.style.transform = 'translateY(' + (progress * -20) + 'px)';
                tagline.style.opacity   = 1 - progress;
            }
            ctaLinks.forEach(cta => {
                cta.style.transform = 'translateY(' + (progress * -10) + 'px)';
                cta.style.opacity   = 1 - progress;
            });
            if (schedule) {
                schedule.style.transform = 'translateY(' + (progress * -30) + 'px) translateX(' + (progress * 20) + 'px)';
                schedule.style.opacity   = 1 - progress * .7;
            }

            ticking = false;
            });
        }, { passive: true });
    }
</script>