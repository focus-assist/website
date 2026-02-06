<x-layouts.webpage>
   <x-slot:pageTitle>Services - Focus Assist LLC</x-slot:pageTitle>
   <x-slot:pageDescription>Expert Agile and management professionals on demand. We connect experienced consultants with small and medium-sized businesses for transformations, coaching, and project support.</x-slot:pageDescription>
   <x-slot:metaData></x-slot:metaData>
   <x-slot:pageScripts></x-slot:pageScripts>
   <x-slot:pageStyles>
      <style id="services-page-styles">

         /* ═══════════════════════════════════════════
            SERVICES HERO SECTION
            ═══════════════════════════════════════════ */
         section[aria-describedby="services-hero-hgroup"] {
            background: var(--navy);
            padding: 140px var(--gutter) 90px;
            text-align: center;

            & > hgroup {
               margin-bottom: 20px;

               & > h1 {
                  font-family: var(--font-m);
                  font-size: 11px;
                  font-weight: 500;
                  letter-spacing: .18em;
                  text-transform: uppercase;
                  color: var(--teal);
                  margin-bottom: 16px;
                  animation: fadeUp .5s ease-out .2s both;
               }

               & > h2 {
                  font-family: var(--font-d);
                  font-size: clamp(32px, 4.8vw, 58px);
                  font-weight: 700;
                  letter-spacing: -.025em;
                  line-height: 1.05;
                  color: var(--white);
                  animation: fadeUp .55s ease-out .3s both;

                  & > span.keyword { color: var(--teal); }
               }
            }

            & > p.tagline {
               font-size: 1.05rem;
               color: var(--g300);
               line-height: 1.75;
               max-width: 620px;
               margin: 0 auto;
               animation: fadeUp .5s ease-out .4s both;
            }
         }

         /* ═══════════════════════════════════════════
            SERVICES GRID (6 Cards)
            ═══════════════════════════════════════════ */
         section[aria-labelledby="services-grid-label"] {
            background: var(--navy-deep);
            padding: 80px var(--gutter) 100px;

            & > hgroup {
               position: absolute;
               left: -1000vw;
            }

            & > ul.services-grid {
               display: grid;
               grid-template-columns: repeat(3, 1fr);
               gap: 24px;
               max-width: 1200px;
               margin: 0 auto;

               & > li {
                  background: rgba(255, 255, 255, .03);
                  border: 1px solid rgba(255, 255, 255, .06);
                  border-radius: 18px;
                  padding: 28px;
                  transition: all .35s cubic-bezier(.16, 1, .3, 1);

                  &:hover {
                     background: rgba(255, 255, 255, .05);
                     border-color: rgba(255, 255, 255, .1);
                     transform: translateY(-4px);
                     box-shadow: 0 16px 40px rgba(0, 0, 0, .25);
                  }

                  & > .service-icon {
                     width: 48px;
                     height: 48px;
                     margin-bottom: 18px;
                     display: flex;
                     align-items: center;
                     justify-content: center;
                     border-radius: 12px;
                     background: rgba(104, 191, 209, .08);
                     border: 1px solid rgba(104, 191, 209, .15);
                     color: var(--teal);

                     & > svg {
                        width: 24px;
                        height: 24px;
                     }
                  }

                  & > hgroup > h3 {
                     font-family: var(--font-d);
                     font-size: 1.15rem;
                     font-weight: 600;
                     color: var(--white);
                     margin-bottom: 10px;
                  }

                  & > p {
                     font-size: .88rem;
                     color: var(--g300);
                     line-height: 1.7;
                  }
               }
            }
         }

         /* ═══════════════════════════════════════════
            SHOWCASE IMAGES (Sprint Retro & Planning Poker)
            ═══════════════════════════════════════════ */
         section[aria-labelledby="showcase-images-label"] {
            background: var(--navy-deep);
            padding: 0 var(--gutter) 100px;

            & > hgroup {
               position: absolute;
               left: -1000vw;
            }

            & > .showcase-grid {
               display: grid;
               grid-template-columns: 1fr 1fr;
               gap: 24px;
               max-width: 1200px;
               margin: 0 auto;

               & > figure {
                  position: relative;
                  aspect-ratio: 16 / 10;
                  border-radius: 16px;
                  overflow: hidden;
                  background: rgba(15, 32, 53, 0.6);
                  border: 1px solid rgba(255, 255, 255, .06);

                  & > img {
                     width: 100%;
                     height: 100%;
                     object-fit: cover;
                     opacity: .85;
                     transition: opacity .3s, transform .5s;
                  }

                  &:hover > img {
                     opacity: 1;
                     transform: scale(1.02);
                  }

                  & > figcaption {
                     position: absolute;
                     top: 16px;
                     left: 16px;
                     display: inline-flex;
                     align-items: center;
                     gap: 8px;
                     padding: 8px 14px;
                     background: rgba(6, 14, 26, .75);
                     backdrop-filter: blur(12px);
                     -webkit-backdrop-filter: blur(12px);
                     border-radius: 8px;
                     font-size: .82rem;
                     font-weight: 500;
                     color: var(--white);

                     &::before {
                        content: "";
                        width: 16px;
                        height: 16px;
                        background: var(--icon-calendar) center / contain no-repeat;
                        opacity: .7;
                     }
                  }
               }
            }
         }

         /* ═══════════════════════════════════════════
            ENGAGEMENT PROCESS SECTION
            ═══════════════════════════════════════════ */
         section[aria-labelledby="engagement-process-label"] {
            background: var(--navy);
            padding: 100px var(--gutter);

            & > hgroup {
               text-align: center;
               margin-bottom: 60px;

               & > h3 {
                  font-family: var(--font-m);
                  font-size: 11px;
                  font-weight: 500;
                  letter-spacing: .18em;
                  text-transform: uppercase;
                  color: var(--teal);
                  margin-bottom: 14px;
               }

               & > h2 {
                  font-family: var(--font-d);
                  font-size: clamp(28px, 3.6vw, 44px);
                  font-weight: 700;
                  letter-spacing: -.02em;
                  line-height: 1.1;
                  color: var(--white);
               }
            }

            & > ul.process-steps {
               display: grid;
               grid-template-columns: repeat(4, 1fr);
               gap: 24px;
               max-width: 1100px;
               margin: 0 auto;

               & > li {
                  position: relative;
                  background: rgba(255, 255, 255, .03);
                  border: 1px solid rgba(255, 255, 255, .06);
                  border-radius: 16px;
                  padding: 32px 24px;
                  text-align: center;

                  & > .step-number {
                     display: flex;
                     align-items: center;
                     justify-content: center;
                     width: 42px;
                     height: 42px;
                     margin: 0 auto 18px;
                     border-radius: 12px;
                     background: linear-gradient(135deg, var(--blue-bright), var(--teal));
                     font-family: var(--font-d);
                     font-size: 1rem;
                     font-weight: 700;
                     color: var(--white);
                  }

                  & > hgroup > h3 {
                     font-family: var(--font-d);
                     font-size: 1.1rem;
                     font-weight: 600;
                     color: var(--white);
                     margin-bottom: 10px;
                  }

                  & > p {
                     font-size: .84rem;
                     color: var(--g400);
                     line-height: 1.65;
                  }
               }
            }
         }

         /* ═══════════════════════════════════════════
            PHILOSOPHY SECTION
            ═══════════════════════════════════════════ */
         section[aria-labelledby="philosophy-label"] {
            background: var(--navy-deep);
            padding: 100px var(--gutter);
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;

            & > .philosophy-content {
               & > hgroup {
                  margin-bottom: 24px;

                  & > h3 {
                     font-family: var(--font-m);
                     font-size: 11px;
                     font-weight: 500;
                     letter-spacing: .18em;
                     text-transform: uppercase;
                     color: var(--teal);
                     margin-bottom: 14px;
                  }

                  & > h2 {
                     font-family: var(--font-d);
                     font-size: clamp(26px, 3.2vw, 40px);
                     font-weight: 700;
                     letter-spacing: -.02em;
                     line-height: 1.15;
                     color: var(--white);

                     & > span.keyword {
                        display: block;
                        background: linear-gradient(135deg, var(--blue-bright), var(--teal));
                        background-clip: text;
                        -webkit-background-clip: text;
                        -webkit-text-fill-color: transparent;
                     }
                  }
               }

               & > p {
                  font-size: .96rem;
                  color: var(--g300);
                  line-height: 1.8;
                  margin-bottom: 16px;
                  max-width: 520px;
               }

               & > p:last-of-type {
                  margin-top: 28px;
                  margin-bottom: 0;

                  & > a {
                     display: inline-flex;
                     align-items: center;
                     gap: 8px;
                     padding: 14px 28px;
                     border-radius: 999px;
                     font-weight: 600;
                     font-size: .88rem;
                     background: linear-gradient(135deg, var(--teal), var(--blue-bright));
                     color: var(--white);
                     box-shadow: 0 4px 20px rgba(104, 191, 209, .3);
                     transition: transform .25s cubic-bezier(.16, 1, .3, 1), box-shadow .25s;

                     &:hover {
                        transform: translateY(-2px) scale(1.01);
                        box-shadow: 0 8px 32px rgba(104, 191, 209, .4);
                     }
                  }
               }
            }

            & > .philosophy-visual {
               position: relative;

               & > .visual-container {
                  aspect-ratio: 4 / 3;
                  border-radius: 18px;
                  overflow: hidden;
                  background: rgba(15, 32, 53, 0.6);
                  border: 1px solid rgba(255, 255, 255, .06);

                  & > img {
                     width: 100%;
                     height: 100%;
                     object-fit: cover;
                  }
               }
            }
         }

         /* ═══════════════════════════════════════════
            SERVICES DETAILS (Expanded Cards with SVGs)
            ═══════════════════════════════════════════ */
         section[aria-labelledby="services-details-label"] {
            background: var(--navy);
            padding: 100px var(--gutter);

            & > hgroup {
               text-align: center;
               margin-bottom: 60px;

               & > h3 {
                  font-family: var(--font-m);
                  font-size: 11px;
                  font-weight: 500;
                  letter-spacing: .18em;
                  text-transform: uppercase;
                  color: var(--teal);
                  margin-bottom: 14px;
               }

               & > h2 {
                  font-family: var(--font-d);
                  font-size: clamp(28px, 3.6vw, 44px);
                  font-weight: 700;
                  letter-spacing: -.02em;
                  line-height: 1.1;
                  color: var(--white);
               }
            }

            & > ul.services-detailed {
               display: grid;
               grid-template-columns: repeat(3, 1fr);
               gap: 24px;
               max-width: 1200px;
               margin: 0 auto;

               & > li {
                  background: rgba(255, 255, 255, .03);
                  border: 1px solid rgba(255, 255, 255, .06);
                  border-radius: 20px;
                  padding: 0;
                  overflow: hidden;
                  transition: all .35s cubic-bezier(.16, 1, .3, 1);

                  &:hover {
                     background: rgba(255, 255, 255, .05);
                     border-color: rgba(255, 255, 255, .1);
                     transform: translateY(-4px);
                     box-shadow: 0 20px 50px rgba(0, 0, 0, .25);
                  }

                  & > .service-visual {
                     padding: 20px 20px 0;

                     & > svg {
                        width: 100%;
                        height: auto;
                        display: block;
                     }
                  }

                  & > .service-content {
                     padding: 24px 28px 32px;

                     & > hgroup > h3 {
                        font-family: var(--font-d);
                        font-size: 1.3rem;
                        font-weight: 600;
                        color: var(--white);
                        margin-bottom: 12px;
                     }

                     & > p {
                        font-size: .9rem;
                        color: var(--g300);
                        line-height: 1.75;
                     }
                  }
               }
            }
         }

         /* ═══════════════════════════════════════════
            SERVICES RESPONSIVE
            ═══════════════════════════════════════════ */
         @media (max-width: 1024px) {
            section[aria-labelledby="services-grid-label"] > ul.services-grid,
            section[aria-labelledby="services-details-label"] > ul.services-detailed {
               grid-template-columns: repeat(2, 1fr);
            }

            section[aria-labelledby="engagement-process-label"] > ul.process-steps {
               grid-template-columns: repeat(2, 1fr);
            }

            section[aria-labelledby="philosophy-label"] {
               grid-template-columns: 1fr;

               & > .philosophy-visual {
                  order: -1;
               }
            }
         }

         @media (max-width: 768px) {
            section[aria-labelledby="services-grid-label"] > ul.services-grid,
            section[aria-labelledby="services-details-label"] > ul.services-detailed,
            section[aria-labelledby="engagement-process-label"] > ul.process-steps {
               grid-template-columns: 1fr;
            }

            section[aria-labelledby="showcase-images-label"] > .showcase-grid {
               grid-template-columns: 1fr;
            }
         }

      </style>
   </x-slot:pageStyles>

   {{-- ═══════════════════════════════════════════
      HERO SECTION
      ═══════════════════════════════════════════ --}}
   <section aria-describedby="services-hero-hgroup">
      <hgroup id="services-hero-hgroup">
         <h1><span>Professional Services</span></h1>
         <h2>
            <span>Expert </span><span class="keyword">Professionals</span><span> on Demand</span>
         </h2>
      </hgroup>
      <p class="tagline">We connect experienced Agile and management professionals with small and medium-sized businesses. Whether you're embarking on an Agile transformation or need traditional project management support, we've got the right people.</p>
   </section>

   {{-- ═══════════════════════════════════════════
      SERVICES ICON GRID (Quick Overview)
      ═══════════════════════════════════════════ --}}
   <section aria-labelledby="services-grid-label" class="reveal">
      <hgroup>
         <h2 id="services-grid-label">Our Services</h2>
      </hgroup>

      <ul class="services-grid">
         <li>
            <div class="service-icon">
               <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
                  <circle cx="9" cy="7" r="4"/>
                  <path d="M23 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75"/>
               </svg>
            </div>
            <hgroup>
               <h3>Agile Transformation</h3>
            </hgroup>
            <p>Experienced experts who guide your organization through the cultural and structural shifts needed to become truly agile — at your pace.</p>
         </li>
         <li>
            <div class="service-icon">
               <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                  <circle cx="12" cy="12" r="10"/>
                  <polyline points="12 6 12 12 16 14"/>
               </svg>
            </div>
            <hgroup>
               <h3>Agile Coaching</h3>
            </hgroup>
            <p>Hands-on coaches who work with your teams day-to-day, embedding best practices and building self-sustaining Agile habits.</p>
         </li>
         <li>
            <div class="service-icon">
               <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                  <rect x="2" y="3" width="20" height="14" rx="2" ry="2"/>
                  <line x1="8" y1="21" x2="16" y2="21"/>
                  <line x1="12" y1="17" x2="12" y2="21"/>
               </svg>
            </div>
            <hgroup>
               <h3>Product Management</h3>
            </hgroup>
            <p>Seasoned Product Managers who keep your product vision sharp, your backlog prioritized, and your delivery beneficiary-focused.</p>
         </li>
         <li>
            <div class="service-icon">
               <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
                  <polyline points="22 4 12 14.01 9 11.01"/>
               </svg>
            </div>
            <hgroup>
               <h3>Project Management</h3>
            </hgroup>
            <p>Both Agile and traditional (waterfall) Project Managers who keep your timelines, budgets, and teams on track.</p>
         </li>
         <li>
            <div class="service-icon">
               <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
               </svg>
            </div>
            <hgroup>
               <h3>Scrum Masters</h3>
            </hgroup>
            <p>Certified Scrum Masters who facilitate ceremonies, remove impediments, and protect team velocity from organizational friction.</p>
         </li>
         <li>
            <div class="service-icon">
               <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                  <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
               </svg>
            </div>
            <hgroup>
               <h3>Product Owners</h3>
            </hgroup>
            <p>Dedicated Product Owners who bridge stakeholders and development teams, ensuring every sprint delivers maximum business value.</p>
         </li>
      </ul>
   </section>

   {{-- ═══════════════════════════════════════════
      SHOWCASE IMAGES
      ═══════════════════════════════════════════ --}}
   <section aria-labelledby="showcase-images-label" class="reveal">
      <hgroup>
         <h2 id="showcase-images-label">Team Activities</h2>
      </hgroup>

      <div class="showcase-grid">
         <figure>
            <img src="https://focus-assist.us/assets/media/daily-standup-01.webp" alt="Team conducting a sprint retrospective meeting" loading="lazy">
            <figcaption>Sprint retrospective</figcaption>
         </figure>
         <figure>
            <img src="https://focus-assist.us/assets/media/product-pitch.webp" alt="Team engaged in planning poker estimation session" loading="lazy">
            <figcaption>Planning poker</figcaption>
         </figure>
      </div>
   </section>

   {{-- ═══════════════════════════════════════════
      ENGAGEMENT PROCESS
      ═══════════════════════════════════════════ --}}
   <section aria-labelledby="engagement-process-label" class="reveal">
      <hgroup>
         <h3>How We Work</h3>
         <h2 id="engagement-process-label">Our Engagement Process</h2>
      </hgroup>

      <ul class="process-steps">
         <li>
            <div class="step-number">1</div>
            <hgroup>
               <h3>Discovery</h3>
            </hgroup>
            <p>We learn your business, your challenges, and your goals to understand what you actually need.</p>
         </li>
         <li>
            <div class="step-number">2</div>
            <hgroup>
               <h3>Match</h3>
            </hgroup>
            <p>We select the right professionals from our network — people whose experience fits your specific situation.</p>
         </li>
         <li>
            <div class="step-number">3</div>
            <hgroup>
               <h3>Embed</h3>
            </hgroup>
            <p>Our professionals integrate with your team, working alongside your people to drive real change.</p>
         </li>
         <li>
            <div class="step-number">4</div>
            <hgroup>
               <h3>Sustain</h3>
            </hgroup>
            <p>We build lasting capabilities within your organization so improvements stick long after we leave.</p>
         </li>
      </ul>
   </section>

   {{-- ═══════════════════════════════════════════
      PHILOSOPHY SECTION
      ═══════════════════════════════════════════ --}}
   <section aria-labelledby="philosophy-label" class="reveal">
      <div class="philosophy-content">
         <hgroup>
            <h3 id="philosophy-label">Our Philosophy</h3>
            <h2>
               <span>Agile When It Fits,</span>
               <span class="keyword">Traditional When It Doesn't</span>
            </h2>
         </hgroup>
         <p>We champion Agile transformation because it delivers real results for most teams. But we're honest about its limitations. Some projects, industries, and regulatory environments still benefit from traditional, waterfall methodologies — and we support that fully.</p>
         <p>The right methodology is the one that helps your team ship better products to the people who need them. We'll help you find that fit.</p>
         <p><a href="/contact">Start a Conversation</a></p>
      </div>
      <div class="philosophy-visual">
         <div class="visual-container">
            <img src="https://focus-assist.us/assets/media/daily-standup-01.webp" alt="Agile team collaborating during a planning session" loading="lazy">
         </div>
      </div>
   </section>

   {{-- ═══════════════════════════════════════════
      DETAILED SERVICES WITH SVG ILLUSTRATIONS
      ═══════════════════════════════════════════ --}}
   <section aria-labelledby="services-details-label" class="reveal">
      <hgroup>
         <h3>What We Offer</h3>
         <h2 id="services-details-label">Services In Detail</h2>
      </hgroup>

      <ul class="services-detailed">
         {{-- Agile Transformations --}}
         <li>
            <div class="service-visual">
               <svg viewBox="0 0 200 140" width="100%" height="120" style="border-radius: 12px; display: block;">
                  <rect width="200" height="140" rx="12" fill="rgba(6,10,20,0.6)"/>
                  <path d="M100 30 A40 40 0 1 1 60 70" fill="none" stroke="#68bfd1" stroke-width="2.5" opacity="0.5" stroke-linecap="round"/>
                  <polygon points="58,64 55,74 65,71" fill="#68bfd1" opacity="0.5"/>
                  <path d="M100 30 A40 40 0 0 0 140 70" fill="none" stroke="#68bfd1" stroke-width="2.5" opacity="0.3" stroke-dasharray="4 3"/>
                  <rect x="82" y="52" width="36" height="18" rx="4" fill="#68bfd115" stroke="#68bfd140" stroke-width="1"/>
                  <text x="100" y="64" fill="#68bfd1" font-size="7" text-anchor="middle" opacity="0.8">Sprint</text>
                  <path d="M30 115 Q100 90 170 115" fill="none" stroke="#68bfd1" stroke-width="1.5" opacity="0.3" stroke-dasharray="4 3"/>
                  <rect x="15" y="105" width="34" height="20" rx="5" fill="#68bfd110" stroke="#68bfd125" stroke-width="0.8"/>
                  <text x="32" y="118" fill="#68bfd180" font-size="6" text-anchor="middle">Before</text>
                  <rect x="155" y="105" width="34" height="20" rx="5" fill="#68bfd120" stroke="#68bfd140" stroke-width="0.8"/>
                  <text x="172" y="118" fill="#68bfd1" font-size="6" text-anchor="middle">After</text>
               </svg>
            </div>
            <div class="service-content">
               <hgroup>
                  <h3>Agile Transformations</h3>
               </hgroup>
               <p>End-to-end organizational transformations. We assess where you are, define where you want to be, and guide every step of the journey.</p>
            </div>
         </li>

         {{-- Agile Coaching --}}
         <li>
            <div class="service-visual">
               <svg viewBox="0 0 200 140" width="100%" height="120" style="border-radius: 12px; display: block;">
                  <rect width="200" height="140" rx="12" fill="rgba(6,10,20,0.6)"/>
                  <circle cx="60" cy="40" r="14" fill="#68bfd110" stroke="#68bfd130" stroke-width="1"/>
                  <circle cx="60" cy="36" r="5" fill="#68bfd140"/>
                  <path d="M51 48 Q60 43 69 48" fill="none" stroke="#68bfd140" stroke-width="1.5"/>
                  <g><circle cx="120" cy="35" r="10" fill="#68bfd108" stroke="#68bfd120" stroke-width="0.8"/><circle cx="120" cy="32" r="3.5" fill="#68bfd130"/></g>
                  <g><circle cx="145" cy="55" r="10" fill="#68bfd108" stroke="#68bfd120" stroke-width="0.8"/><circle cx="145" cy="52" r="3.5" fill="#68bfd130"/></g>
                  <g><circle cx="120" cy="75" r="10" fill="#68bfd108" stroke="#68bfd120" stroke-width="0.8"/><circle cx="120" cy="72" r="3.5" fill="#68bfd130"/></g>
                  <line x1="78" y1="36" x2="108" y2="38" stroke="#68bfd1" stroke-width="1" opacity="0.3" stroke-dasharray="3 2"/>
                  <line x1="78" y1="40" x2="115" y2="55" stroke="#68bfd1" stroke-width="1" opacity="0.25" stroke-dasharray="3 2"/>
                  <line x1="78" y1="44" x2="108" y2="72" stroke="#68bfd1" stroke-width="1" opacity="0.2" stroke-dasharray="3 2"/>
                  <path d="M25 120 L55 105 L85 110 L115 95 L145 85 L175 70" fill="none" stroke="#68bfd1" stroke-width="1.5" opacity="0.35" stroke-linecap="round"/>
                  <circle cx="175" cy="70" r="3" fill="#68bfd1" opacity="0.4"/>
               </svg>
            </div>
            <div class="service-content">
               <hgroup>
                  <h3>Agile Coaching</h3>
               </hgroup>
               <p>Embedded coaches who mentor your teams in Scrum, Kanban, SAFe, and lean practices — building sustainable capability, not dependency.</p>
            </div>
         </li>

         {{-- Product Management --}}
         <li>
            <div class="service-visual">
               <svg viewBox="0 0 200 140" width="100%" height="120" style="border-radius: 12px; display: block;">
                  <rect width="200" height="140" rx="12" fill="rgba(6,10,20,0.6)"/>
                  <g><rect x="20" y="30" width="90" height="16" rx="4" fill="#68bfd112" stroke="#68bfd130" stroke-width="0.8"/><rect x="20" y="30" width="55" height="16" rx="4" fill="#68bfd125"/><text x="26" y="41" fill="#68bfd1" font-size="6.5" opacity="0.7">Discovery</text></g>
                  <g><rect x="20" y="55" width="60" height="16" rx="4" fill="#68bfd112" stroke="#68bfd130" stroke-width="0.8"/><rect x="20" y="55" width="40" height="16" rx="4" fill="#68bfd125"/><text x="26" y="66" fill="#68bfd1" font-size="6.5" opacity="0.7">Design</text></g>
                  <g><rect x="20" y="80" width="110" height="16" rx="4" fill="#68bfd112" stroke="#68bfd130" stroke-width="0.8"/><rect x="20" y="80" width="70" height="16" rx="4" fill="#68bfd125"/><text x="26" y="91" fill="#68bfd1" font-size="6.5" opacity="0.7">Delivery</text></g>
                  <circle cx="160" cy="50" r="20" fill="#68bfd106" stroke="#68bfd115" stroke-width="1"/><circle cx="160" cy="50" r="13" fill="none" stroke="#68bfd120" stroke-width="1"/><circle cx="160" cy="50" r="6" fill="none" stroke="#68bfd130" stroke-width="1"/><circle cx="160" cy="50" r="2" fill="#68bfd1" opacity="0.5"/>
                  <rect x="20" y="110" width="50" height="20" rx="5" fill="#68bfd108" stroke="#68bfd120" stroke-width="0.6"/><text x="45" y="123" fill="#68bfd160" font-size="6" text-anchor="middle">NPS: 72</text>
                  <rect x="78" y="110" width="50" height="20" rx="5" fill="#68bfd108" stroke="#68bfd120" stroke-width="0.6"/><text x="103" y="123" fill="#68bfd160" font-size="6" text-anchor="middle">OKR: 85%</text>
               </svg>
            </div>
            <div class="service-content">
               <hgroup>
                  <h3>Product Management</h3>
               </hgroup>
               <p>Experienced PMs and POs who focus on discovery, strategy, and roadmapping to ensure you're building the right thing for the right people.</p>
            </div>
         </li>

         {{-- Project Management --}}
         <li>
            <div class="service-visual">
               <svg viewBox="0 0 200 140" width="100%" height="120" style="border-radius: 12px; display: block;">
                  <rect width="200" height="140" rx="12" fill="rgba(6,10,20,0.6)"/>
                  <g><rect x="30" y="20" width="60" height="12" rx="3" fill="#68bfd115" stroke="#68bfd130" stroke-width="0.6"/><text x="34" y="29" fill="#68bfd1" font-size="6" opacity="0.7">Plan</text></g>
                  <g><rect x="70" y="40" width="50" height="12" rx="3" fill="#68bfd120" stroke="#68bfd130" stroke-width="0.6"/><text x="74" y="49" fill="#68bfd1" font-size="6" opacity="0.7">Build</text></g>
                  <g><rect x="100" y="60" width="40" height="12" rx="3" fill="#68bfd125" stroke="#68bfd130" stroke-width="0.6"/><text x="104" y="69" fill="#68bfd1" font-size="6" opacity="0.7">Test</text></g>
                  <g><rect x="120" y="80" width="55" height="12" rx="3" fill="#68bfd130" stroke="#68bfd130" stroke-width="0.6"/><text x="124" y="89" fill="#68bfd1" font-size="6" opacity="0.7">Deploy</text></g>
                  <path d="M90 27 L100 27 L100 47" fill="none" stroke="#68bfd130" stroke-width="0.8"/>
                  <path d="M120 47 L130 47 L130 67" fill="none" stroke="#68bfd130" stroke-width="0.8"/>
                  <path d="M140 67 L150 67 L150 87" fill="none" stroke="#68bfd130" stroke-width="0.8"/>
                  <line x1="130" y1="14" x2="130" y2="100" stroke="#e07b9b" stroke-width="1" stroke-dasharray="3 2" opacity="0.4"/>
                  <text x="130" y="10" fill="#e07b9b" font-size="6" text-anchor="middle" opacity="0.5">Today</text>
                  <polygon points="175,86 180,92 175,98 170,92" fill="#68bfd1" opacity="0.4"/>
                  <rect x="20" y="110" width="160" height="18" rx="5" fill="#68bfd106" stroke="#68bfd115" stroke-width="0.6"/>
                  <rect x="20" y="110" width="104" height="18" rx="5" fill="#68bfd112"/>
                  <text x="100" y="122" fill="#68bfd160" font-size="6.5" text-anchor="middle">65% Complete</text>
               </svg>
            </div>
            <div class="service-content">
               <hgroup>
                  <h3>Project Management</h3>
               </hgroup>
               <p>Seasoned project managers who keep initiatives on track — Agile or Waterfall — with clear communication and accountability.</p>
            </div>
         </li>

         {{-- Scrum Masters --}}
         <li>
            <div class="service-visual">
               <svg viewBox="0 0 200 140" width="100%" height="120" style="border-radius: 12px; display: block;">
                  <rect width="200" height="140" rx="12" fill="rgba(6,10,20,0.6)"/>
                  <g><rect x="18" y="14" width="52" height="16" rx="3" fill="#68bfd18"/><text x="44" y="25" fill="#68bfd1" font-size="6" text-anchor="middle" opacity="0.4">To Do</text><rect x="20" y="36" width="48" height="14" rx="3" fill="#68bfd108" stroke="#68bfd118" stroke-width="0.6"/><rect x="20" y="54" width="48" height="14" rx="3" fill="#68bfd108" stroke="#68bfd118" stroke-width="0.6"/></g>
                  <g><rect x="76" y="14" width="52" height="16" rx="3" fill="#68bfd113"/><text x="102" y="25" fill="#68bfd1" font-size="6" text-anchor="middle" opacity="0.55">In Progress</text><rect x="78" y="36" width="48" height="14" rx="3" fill="#68bfd108" stroke="#68bfd118" stroke-width="0.6"/><rect x="78" y="54" width="48" height="14" rx="3" fill="#68bfd108" stroke="#68bfd118" stroke-width="0.6"/></g>
                  <g><rect x="134" y="14" width="52" height="16" rx="3" fill="#68bfd118"/><text x="160" y="25" fill="#68bfd1" font-size="6" text-anchor="middle" opacity="0.7">Done</text><rect x="136" y="36" width="48" height="14" rx="3" fill="#68bfd108" stroke="#68bfd118" stroke-width="0.6"/></g>
                  <path d="M148 78 L148 100 Q148 112 160 118 Q172 112 172 100 L172 78 Z" fill="#68bfd110" stroke="#68bfd130" stroke-width="1"/>
                  <path d="M155 95 L159 100 L167 88" fill="none" stroke="#68bfd1" stroke-width="1.5" opacity="0.5" stroke-linecap="round"/>
                  <path d="M20 120 L40 118 L60 112 L80 114 L100 106 L120 100" fill="none" stroke="#68bfd1" stroke-width="1.2" opacity="0.35" stroke-linecap="round"/>
               </svg>
            </div>
            <div class="service-content">
               <hgroup>
                  <h3>Scrum Masters</h3>
               </hgroup>
               <p>Certified Scrum Masters who protect the process, remove blockers, and help your teams reach peak velocity.</p>
            </div>
         </li>

         {{-- Custom Staffing --}}
         <li>
            <div class="service-visual">
               <svg viewBox="0 0 200 140" width="100%" height="120" style="border-radius: 12px; display: block;">
                  <rect width="200" height="140" rx="12" fill="rgba(6,10,20,0.6)"/>
                  <rect x="55" y="25" width="35" height="35" rx="4" fill="#68bfd112" stroke="#68bfd130" stroke-width="1"/>
                  <path d="M90 38 Q96 38 96 44 Q96 50 90 50" fill="#68bfd112" stroke="#68bfd130" stroke-width="1"/>
                  <rect x="96" y="25" width="35" height="35" rx="4" fill="#68bfd108" stroke="#68bfd120" stroke-width="1"/>
                  <rect x="55" y="66" width="35" height="35" rx="4" fill="#68bfd108" stroke="#68bfd120" stroke-width="1"/>
                  <path d="M72 60 Q72 54 78 54 Q84 54 84 60" fill="#68bfd108" stroke="#68bfd120" stroke-width="1"/>
                  <rect x="96" y="66" width="35" height="35" rx="4" fill="#68bfd115" stroke="#68bfd135" stroke-width="1"/>
                  <text x="100" y="122" fill="#68bfd140" font-size="7" text-anchor="middle">Tailored Solutions</text>
               </svg>
            </div>
            <div class="service-content">
               <hgroup>
                  <h3>Custom Staffing</h3>
               </hgroup>
               <p>Need a unique combination? We broker specialized professionals tailored to your exact needs and team dynamics.</p>
            </div>
         </li>
      </ul>
   </section>

</x-layouts.webpage>
