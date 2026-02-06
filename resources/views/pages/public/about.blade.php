<x-layouts.webpage>
   <x-slot:pageTitle>About Us - Focus Assist LLC</x-slot:pageTitle>
   <x-slot:pageDescription>Focus Assist helps small and medium-sized businesses ship better products through expert Agile professionals and purpose-built software tools.</x-slot:pageDescription>
   <x-slot:metaData></x-slot:metaData>
   <x-slot:pageScripts></x-slot:pageScripts>
   <x-slot:pageStyles>
      <style id="about-page-styles">

         /* ═══════════════════════════════════════════
            ABOUT HERO SECTION
            ═══════════════════════════════════════════ */
         section[aria-describedby="about-hero-hgroup"] {
            background: var(--navy);
            padding: 140px var(--gutter) 100px;
            text-align: center;

            & > hgroup {
               margin-bottom: 24px;

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
               font-size: 1.1rem;
               color: var(--g300);
               line-height: 1.8;
               max-width: 680px;
               margin: 0 auto;
               animation: fadeUp .5s ease-out .4s both;
            }
         }

         /* ═══════════════════════════════════════════
            OUR STORY SECTION
            ═══════════════════════════════════════════ */
         section[aria-labelledby="our-story-label"] {
            background: var(--navy-deep);
            padding: 100px var(--gutter);
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;

            & > .story-content {
               & > hgroup {
                  margin-bottom: 24px;

                  & > h3 {
                     font-family: var(--font-m);
                     font-size: 11px;
                     font-weight: 500;
                     letter-spacing: .18em;
                     text-transform: uppercase;
                     color: var(--teal);
                     margin-bottom: 12px;
                  }

                  & > h2 {
                     font-family: var(--font-d);
                     font-size: clamp(26px, 3.4vw, 40px);
                     font-weight: 700;
                     letter-spacing: -.02em;
                     line-height: 1.15;
                     color: var(--white);
                  }
               }

               & > p {
                  font-size: .96rem;
                  color: var(--g300);
                  line-height: 1.85;
                  margin-bottom: 20px;
                  max-width: 540px;
               }

               & > p:last-of-type {
                  margin-bottom: 0;
               }
            }

            & > .story-visual {
               & > .visual-container {
                  aspect-ratio: 4 / 3;
                  border-radius: 20px;
                  overflow: hidden;
                  background: rgba(15, 32, 53, 0.6);
                  border: 1px solid rgba(255, 255, 255, .06);
                  display: flex;
                  align-items: center;
                  justify-content: center;

                  & > svg {
                     width: 100%;
                     height: 100%;
                  }
               }
            }
         }

         /* ═══════════════════════════════════════════
            VALUES SECTION
            ═══════════════════════════════════════════ */
         section[aria-labelledby="values-label"] {
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

            & > ul.values-grid {
               display: grid;
               grid-template-columns: repeat(3, 1fr);
               gap: 28px;
               max-width: 1100px;
               margin: 0 auto;

               & > li {
                  background: rgba(255, 255, 255, .03);
                  border: 1px solid rgba(255, 255, 255, .06);
                  border-radius: 18px;
                  padding: 32px;
                  text-align: center;
                  transition: all .35s cubic-bezier(.16, 1, .3, 1);

                  &:hover {
                     background: rgba(255, 255, 255, .05);
                     border-color: rgba(255, 255, 255, .1);
                     transform: translateY(-4px);
                  }

                  & > .value-icon {
                     width: 56px;
                     height: 56px;
                     margin: 0 auto 20px;
                     display: flex;
                     align-items: center;
                     justify-content: center;
                     border-radius: 14px;
                     background: rgba(104, 191, 209, .1);
                     border: 1px solid rgba(104, 191, 209, .2);
                     color: var(--teal);

                     & > svg {
                        width: 26px;
                        height: 26px;
                     }
                  }

                  & > hgroup > h3 {
                     font-family: var(--font-d);
                     font-size: 1.15rem;
                     font-weight: 600;
                     color: var(--white);
                     margin-bottom: 12px;
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
            FOUNDER / TEAM SECTION
            ═══════════════════════════════════════════ */
         section[aria-labelledby="team-label"] {
            background: var(--navy-deep);
            padding: 100px var(--gutter);

            & > hgroup {
               text-align: center;
               margin-bottom: 50px;

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

            & > .founder-card {
               max-width: 800px;
               margin: 0 auto;
               display: grid;
               grid-template-columns: auto 1fr;
               gap: 40px;
               align-items: center;
               background: rgba(255, 255, 255, .03);
               border: 1px solid rgba(255, 255, 255, .06);
               border-radius: 24px;
               padding: 40px;

               & > .founder-image {
                  width: 180px;
                  height: 180px;
                  border-radius: 20px;
                  overflow: hidden;
                  background: linear-gradient(135deg, var(--blue), var(--teal));
                  display: flex;
                  align-items: center;
                  justify-content: center;
                  flex-shrink: 0;

                  & > span {
                     font-family: var(--font-d);
                     font-size: 3.5rem;
                     font-weight: 700;
                     color: var(--white);
                     opacity: .9;
                  }
               }

               & > .founder-info {
                  & > hgroup {
                     margin-bottom: 16px;

                     & > h3 {
                        font-family: var(--font-d);
                        font-size: 1.5rem;
                        font-weight: 700;
                        color: var(--white);
                        margin-bottom: 4px;
                     }

                     & > p {
                        font-size: .92rem;
                        color: var(--teal);
                        font-weight: 500;
                     }
                  }

                  & > p {
                     font-size: .92rem;
                     color: var(--g300);
                     line-height: 1.8;
                     margin-bottom: 20px;
                  }

                  & > .founder-links {
                     display: flex;
                     gap: 12px;

                     & > a {
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        width: 40px;
                        height: 40px;
                        border-radius: 10px;
                        background: rgba(255, 255, 255, .05);
                        border: 1px solid rgba(255, 255, 255, .08);
                        color: var(--g300);
                        transition: all .25s;

                        &:hover {
                           background: rgba(104, 191, 209, .15);
                           border-color: rgba(104, 191, 209, .3);
                           color: var(--teal);
                        }

                        & > svg {
                           width: 18px;
                           height: 18px;
                        }
                     }
                  }
               }
            }
         }

         /* ═══════════════════════════════════════════
            TESTIMONIALS SECTION
            ═══════════════════════════════════════════ */
         section[aria-labelledby="testimonials-label"] {
            background: var(--navy);
            padding: 100px var(--gutter);

            & > hgroup {
               text-align: center;
               margin-bottom: 50px;

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

            & > ul.testimonials-grid {
               display: grid;
               grid-template-columns: repeat(3, 1fr);
               gap: 24px;
               max-width: 1200px;
               margin: 0 auto;

               & > li > figure {
                  background: rgba(255, 255, 255, .03);
                  border: 1px solid rgba(255, 255, 255, .06);
                  border-radius: 20px;
                  padding: 32px;
                  height: 100%;
                  display: flex;
                  flex-direction: column;

                  & > blockquote {
                     flex: 1;
                     position: relative;
                     padding-left: 20px;
                     border-left: 3px solid rgba(104, 191, 209, .3);

                     & > p {
                        font-size: .92rem;
                        color: var(--g200);
                        line-height: 1.75;
                        font-style: italic;
                     }
                  }

                  & > figcaption {
                     margin-top: 24px;
                     padding-top: 20px;
                     border-top: 1px solid rgba(255, 255, 255, .06);

                     & > cite {
                        display: flex;
                        align-items: center;
                        gap: 14px;
                        font-style: normal;

                        &::before {
                           content: attr(data-initials);
                           display: flex;
                           align-items: center;
                           justify-content: center;
                           width: 44px;
                           height: 44px;
                           border-radius: 50%;
                           background: linear-gradient(135deg, var(--blue), var(--blue-bright));
                           color: var(--white);
                           font-size: .8rem;
                           font-weight: 600;
                           flex-shrink: 0;
                        }

                        & > .name {
                           display: block;
                           font-weight: 600;
                           font-size: .92rem;
                           color: var(--white);
                        }

                        & > .title {
                           display: block;
                           font-size: .8rem;
                           color: var(--g400);
                           margin-top: 2px;
                        }
                     }
                  }
               }
            }
         }

         /* ═══════════════════════════════════════════
            CONNECT / SOCIAL SECTION
            ═══════════════════════════════════════════ */
         section[aria-labelledby="connect-label"] {
            background: var(--navy-deep);
            padding: 100px var(--gutter);
            text-align: center;

            & > hgroup {
               margin-bottom: 40px;

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
                  font-size: clamp(26px, 3.2vw, 38px);
                  font-weight: 700;
                  letter-spacing: -.02em;
                  line-height: 1.1;
                  color: var(--white);
                  margin-bottom: 16px;
               }

               & > p {
                  font-size: .96rem;
                  color: var(--g300);
                  line-height: 1.7;
                  max-width: 500px;
                  margin: 0 auto;
               }
            }

            & > ul.social-links {
               display: flex;
               justify-content: center;
               gap: 16px;
               margin-bottom: 40px;

               & > li > a {
                  display: flex;
                  align-items: center;
                  gap: 10px;
                  padding: 14px 24px;
                  border-radius: 12px;
                  background: rgba(255, 255, 255, .04);
                  border: 1px solid rgba(255, 255, 255, .08);
                  color: var(--g200);
                  font-size: .9rem;
                  font-weight: 500;
                  transition: all .25s;

                  &:hover {
                     background: rgba(104, 191, 209, .1);
                     border-color: rgba(104, 191, 209, .25);
                     color: var(--teal);
                  }

                  & > svg {
                     width: 20px;
                     height: 20px;
                  }
               }
            }

            & > .contact-info {
               display: flex;
               justify-content: center;
               gap: 40px;
               flex-wrap: wrap;

               & > div {
                  & > span.label {
                     display: block;
                     font-family: var(--font-m);
                     font-size: 10px;
                     font-weight: 500;
                     letter-spacing: .15em;
                     text-transform: uppercase;
                     color: var(--g500);
                     margin-bottom: 6px;
                  }

                  & > span.value,
                  & > a {
                     font-size: .95rem;
                     color: var(--g200);
                  }

                  & > a:hover {
                     color: var(--teal);
                  }
               }
            }
         }

         /* ═══════════════════════════════════════════
            CTA SECTION
            ═══════════════════════════════════════════ */
         section[aria-labelledby="cta-label"] {
            background: var(--navy);
            padding: 100px var(--gutter);

            & > .cta-container {
               max-width: 800px;
               margin: 0 auto;
               padding: 60px 40px;
               text-align: center;
               background: linear-gradient(135deg, rgba(15, 32, 53, 0.8), rgba(10, 22, 40, 0.9));
               border: 1px solid rgba(255, 255, 255, .06);
               border-radius: 24px;

               & > hgroup > h2 {
                  font-family: var(--font-d);
                  font-size: clamp(26px, 3.4vw, 40px);
                  font-weight: 700;
                  letter-spacing: -.02em;
                  line-height: 1.1;
                  color: var(--white);
                  margin-bottom: 16px;
               }

               & > p {
                  font-size: 1rem;
                  color: var(--g300);
                  line-height: 1.7;
                  margin-bottom: 28px;
                  max-width: 500px;
                  margin-left: auto;
                  margin-right: auto;
               }

               & > .cta-buttons {
                  display: flex;
                  justify-content: center;
                  gap: 16px;
                  flex-wrap: wrap;

                  & > a {
                     display: inline-flex;
                     align-items: center;
                     gap: 8px;
                     padding: 14px 28px;
                     border-radius: 999px;
                     font-weight: 600;
                     font-size: .88rem;
                     transition: transform .25s cubic-bezier(.16, 1, .3, 1), box-shadow .25s;

                     &.primary {
                        background: linear-gradient(135deg, var(--teal), var(--blue-bright));
                        color: var(--white);
                        box-shadow: 0 4px 20px rgba(104, 191, 209, .3);

                        &:hover {
                           transform: translateY(-2px) scale(1.01);
                           box-shadow: 0 8px 32px rgba(104, 191, 209, .4);
                        }
                     }

                     &.secondary {
                        background: rgba(255, 255, 255, .06);
                        border: 1px solid rgba(255, 255, 255, .12);
                        color: var(--white);

                        &:hover {
                           background: rgba(255, 255, 255, .1);
                           border-color: rgba(255, 255, 255, .2);
                        }
                     }
                  }
               }
            }
         }

         /* ═══════════════════════════════════════════
            ABOUT RESPONSIVE
            ═══════════════════════════════════════════ */
         @media (max-width: 1024px) {
            section[aria-labelledby="values-label"] > ul.values-grid {
               grid-template-columns: repeat(2, 1fr);
            }

            section[aria-labelledby="testimonials-label"] > ul.testimonials-grid {
               grid-template-columns: repeat(2, 1fr);
            }
         }

         @media (max-width: 768px) {
            section[aria-labelledby="our-story-label"] {
               grid-template-columns: 1fr;

               & > .story-visual { order: -1; }
            }

            section[aria-labelledby="values-label"] > ul.values-grid,
            section[aria-labelledby="testimonials-label"] > ul.testimonials-grid {
               grid-template-columns: 1fr;
            }

            section[aria-labelledby="team-label"] > .founder-card {
               grid-template-columns: 1fr;
               text-align: center;

               & > .founder-image {
                  margin: 0 auto;
               }

               & > .founder-info > .founder-links {
                  justify-content: center;
               }
            }

            section[aria-labelledby="connect-label"] > ul.social-links {
               flex-direction: column;
               align-items: center;

               & > li > a {
                  width: 100%;
                  max-width: 280px;
                  justify-content: center;
               }
            }

            section[aria-labelledby="cta-label"] > .cta-container {
               padding: 40px 24px;
            }
         }

      </style>
   </x-slot:pageStyles>

   {{-- ═══════════════════════════════════════════
      HERO SECTION
      ═══════════════════════════════════════════ --}}
   <section aria-describedby="about-hero-hgroup">
      <hgroup id="about-hero-hgroup">
         <h1><span>About Focus Assist</span></h1>
         <h2>
            <span>Helping Teams </span><span class="keyword">Ship Better Products</span>
         </h2>
      </hgroup>
      <p class="tagline">We're a small company with a clear mission: connect businesses with the professionals and tools they need to deliver real value to the people who matter most — their users.</p>
   </section>

   {{-- ═══════════════════════════════════════════
      OUR STORY SECTION
      ═══════════════════════════════════════════ --}}
   <section aria-labelledby="our-story-label" class="reveal">
      <div class="story-content">
         <hgroup>
            <h3>Our Story</h3>
            <h2 id="our-story-label">Born From Frustration, Built for Clarity</h2>
         </hgroup>
         <p>Focus Assist started because we saw too many teams struggling with the same problems: bloated enterprise tools that obscured more than they revealed, transformation consultants who pushed dogma over pragmatism, and a fundamental disconnect between what products were built and who they were built for.</p>
         <p>We believed there was a better way. Software should make complex work visible, not hide it behind layers of configuration. Consultants should meet teams where they are, not force-fit frameworks. And every decision should trace back to a real person with a real need.</p>
         <p>That belief became Focus Assist — a company dedicated to helping small and medium-sized businesses achieve the clarity and focus they need to ship products that actually matter.</p>
      </div>
      <div class="story-visual">
         <div class="visual-container">
            <svg viewBox="0 0 400 300" preserveAspectRatio="xMidYMid meet">
               <defs>
                  <linearGradient id="story-bg" x1="0" y1="0" x2="0" y2="1">
                     <stop offset="0%" stop-color="#0d1a2e"/>
                     <stop offset="100%" stop-color="#0a1424"/>
                  </linearGradient>
               </defs>
               <rect width="400" height="300" fill="url(#story-bg)"/>
               <!-- Focus circles -->
               <circle cx="200" cy="150" r="100" fill="none" stroke="rgba(104,191,209,0.08)" stroke-width="2"/>
               <circle cx="200" cy="150" r="70" fill="none" stroke="rgba(104,191,209,0.12)" stroke-width="2"/>
               <circle cx="200" cy="150" r="40" fill="none" stroke="rgba(104,191,209,0.18)" stroke-width="2"/>
               <circle cx="200" cy="150" r="12" fill="#68bfd1" opacity="0.4"/>
               <!-- Orbiting elements -->
               <circle cx="300" cy="150" r="8" fill="#68bfd1" opacity="0.3"/>
               <circle cx="200" cy="50" r="6" fill="#68bfd1" opacity="0.25"/>
               <circle cx="100" cy="150" r="7" fill="#68bfd1" opacity="0.2"/>
               <circle cx="200" cy="250" r="5" fill="#68bfd1" opacity="0.15"/>
               <!-- Connection lines -->
               <line x1="212" y1="150" x2="292" y2="150" stroke="#68bfd1" stroke-width="1" opacity="0.2" stroke-dasharray="4 3"/>
               <line x1="200" y1="138" x2="200" y2="56" stroke="#68bfd1" stroke-width="1" opacity="0.15" stroke-dasharray="4 3"/>
               <line x1="188" y1="150" x2="108" y2="150" stroke="#68bfd1" stroke-width="1" opacity="0.12" stroke-dasharray="4 3"/>
               <line x1="200" y1="162" x2="200" y2="244" stroke="#68bfd1" stroke-width="1" opacity="0.1" stroke-dasharray="4 3"/>
               <!-- Label -->
               <text x="200" y="155" fill="#68bfd1" font-size="10" text-anchor="middle" font-family="system-ui" opacity="0.8">FOCUS</text>
            </svg>
         </div>
      </div>
   </section>

   {{-- ═══════════════════════════════════════════
      VALUES SECTION
      ═══════════════════════════════════════════ --}}
   <section aria-labelledby="values-label" class="reveal">
      <hgroup>
         <h3>What We Believe</h3>
         <h2 id="values-label">Our Guiding Principles</h2>
      </hgroup>

      <ul class="values-grid">
         <li>
            <div class="value-icon">
               <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
                  <circle cx="9" cy="7" r="4"/>
                  <path d="M23 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75"/>
               </svg>
            </div>
            <hgroup>
               <h3>Beneficiaries First</h3>
            </hgroup>
            <p>Every product exists to serve someone. We help teams stay focused on who that someone is and what they actually need — not what stakeholders assume they need.</p>
         </li>
         <li>
            <div class="value-icon">
               <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                  <circle cx="12" cy="12" r="10"/>
                  <line x1="12" y1="8" x2="12" y2="12"/>
                  <line x1="12" y1="16" x2="12.01" y2="16"/>
               </svg>
            </div>
            <hgroup>
               <h3>Honesty Over Hype</h3>
            </hgroup>
            <p>Agile isn't magic. Not every team needs a transformation. We tell you what will actually work for your situation — even if that means recommending less of our services.</p>
         </li>
         <li>
            <div class="value-icon">
               <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
                  <circle cx="12" cy="12" r="3"/>
               </svg>
            </div>
            <hgroup>
               <h3>Visibility Creates Trust</h3>
            </hgroup>
            <p>When everyone can see the work, understand the progress, and track the priorities, politics fade and collaboration flourishes. Our tools and methods prioritize transparency.</p>
         </li>
         <li>
            <div class="value-icon">
               <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/>
               </svg>
            </div>
            <hgroup>
               <h3>Pragmatism Over Dogma</h3>
            </hgroup>
            <p>Frameworks are tools, not religions. We adapt methodologies to fit your reality — your team, your constraints, your industry — rather than forcing you into someone else's blueprint.</p>
         </li>
         <li>
            <div class="value-icon">
               <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                  <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
               </svg>
            </div>
            <hgroup>
               <h3>Build Capability, Not Dependency</h3>
            </hgroup>
            <p>Our goal is to make ourselves unnecessary. We transfer knowledge, build internal expertise, and leave your team stronger than we found them.</p>
         </li>
         <li>
            <div class="value-icon">
               <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                  <rect x="3" y="3" width="18" height="18" rx="2" ry="2"/>
                  <line x1="3" y1="9" x2="21" y2="9"/>
                  <line x1="9" y1="21" x2="9" y2="9"/>
               </svg>
            </div>
            <hgroup>
               <h3>Simplicity Is Strength</h3>
            </hgroup>
            <p>Complexity is easy; simplicity is hard. We build tools and processes that are as simple as possible — but no simpler. Clarity comes from removing the unnecessary.</p>
         </li>
      </ul>
   </section>

   {{-- ═══════════════════════════════════════════
      FOUNDER SECTION
      ═══════════════════════════════════════════ --}}
   <section aria-labelledby="team-label" class="reveal">
      <hgroup>
         <h3>Leadership</h3>
         <h2 id="team-label">Meet the Founder</h2>
      </hgroup>

      <div class="founder-card">
         <div class="founder-image">
            <span>FA</span>
         </div>
         <div class="founder-info">
            <hgroup>
               <h3>Focus Assist Team</h3>
               <p>Founder & Principal Consultant</p>
            </hgroup>
            <p>With over a decade of experience in product management and Agile transformations, our founder built Focus Assist to address the gaps they saw in the industry — tools that obscured instead of revealed, and consultants who prescribed instead of listened. Today, Focus Assist serves clients across industries, from healthcare startups to established fintech companies.</p>
            <div class="founder-links">
               <a href="https://linkedin.com/company/focus-assist" target="_blank" rel="noopener" aria-label="LinkedIn">
                  <svg viewBox="0 0 24 24" fill="currentColor">
                     <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                  </svg>
               </a>
               <a href="https://twitter.com/focusassist" target="_blank" rel="noopener" aria-label="X (Twitter)">
                  <svg viewBox="0 0 24 24" fill="currentColor">
                     <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                  </svg>
               </a>
               <a href="mailto:hello@focus-assist.com" aria-label="Email">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                     <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                     <polyline points="22,6 12,13 2,6"/>
                  </svg>
               </a>
            </div>
         </div>
      </div>
   </section>

   {{-- ═══════════════════════════════════════════
      TESTIMONIALS SECTION
      ═══════════════════════════════════════════ --}}
   <section aria-labelledby="testimonials-label" class="reveal">
      <hgroup>
         <h3>Client Stories</h3>
         <h2 id="testimonials-label">What People Are Saying</h2>
      </hgroup>

      <ul class="testimonials-grid">
         <li>
            <figure>
               <blockquote>
                  <p>Focus Assist transformed how we approach product development. Their team helped us move from chaotic waterfall to a lean Agile framework that actually fits our business.</p>
               </blockquote>
               <figcaption>
                  <cite data-initials="JR">
                     <span class="name">Jordan Rivera</span>
                     <span class="title">CTO, TechBridge Solutions</span>
                  </cite>
               </figcaption>
            </figure>
         </li>
         <li>
            <figure>
               <blockquote>
                  <p>Vista Opus gave us the visibility we desperately needed. For the first time, everyone from developers to stakeholders could see the full picture and understand where we stood.</p>
               </blockquote>
               <figcaption>
                  <cite data-initials="MK">
                     <span class="name">Morgan Kim</span>
                     <span class="title">VP Product, Lumera Health</span>
                  </cite>
               </figcaption>
            </figure>
         </li>
         <li>
            <figure>
               <blockquote>
                  <p>What I appreciated most was their honesty. They told us Agile wasn't the right fit for one of our projects and helped us build a hybrid approach instead. That's rare.</p>
               </blockquote>
               <figcaption>
                  <cite data-initials="AT">
                     <span class="name">Alex Thompson</span>
                     <span class="title">Director of Engineering, Vertex Labs</span>
                  </cite>
               </figcaption>
            </figure>
         </li>
         <li>
            <figure>
               <blockquote>
                  <p>The Scrum Master they placed with us didn't just run ceremonies — they genuinely transformed our team culture. Six months later, we're self-sustaining.</p>
               </blockquote>
               <figcaption>
                  <cite data-initials="SP">
                     <span class="name">Sam Patel</span>
                     <span class="title">Engineering Manager, CloudSync</span>
                  </cite>
               </figcaption>
            </figure>
         </li>
         <li>
            <figure>
               <blockquote>
                  <p>Libri Res replaced three different tools for us. It's the first bookkeeping software that doesn't feel like it was designed by accountants for accountants.</p>
               </blockquote>
               <figcaption>
                  <cite data-initials="RN">
                     <span class="name">Riley Nguyen</span>
                     <span class="title">Founder, Bright Studio</span>
                  </cite>
               </figcaption>
            </figure>
         </li>
         <li>
            <figure>
               <blockquote>
                  <p>Their Product Manager embedded with our team for three months. By the end, our backlog was finally prioritized around actual user needs instead of stakeholder politics.</p>
               </blockquote>
               <figcaption>
                  <cite data-initials="CH">
                     <span class="name">Casey Hart</span>
                     <span class="title">CEO, Meridian Software</span>
                  </cite>
               </figcaption>
            </figure>
         </li>
      </ul>
   </section>

   {{-- ═══════════════════════════════════════════
      CONNECT SECTION
      ═══════════════════════════════════════════ --}}
   <section aria-labelledby="connect-label" class="reveal">
      <hgroup>
         <h3>Stay Connected</h3>
         <h2 id="connect-label">Follow Our Journey</h2>
         <p>Get insights on Agile practices, product management, and building better teams.</p>
      </hgroup>

      <ul class="social-links">
         <li>
            <a href="https://linkedin.com/company/focus-assist" target="_blank" rel="noopener">
               <svg viewBox="0 0 24 24" fill="currentColor">
                  <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
               </svg>
               LinkedIn
            </a>
         </li>
         <li>
            <a href="https://twitter.com/focusassist" target="_blank" rel="noopener">
               <svg viewBox="0 0 24 24" fill="currentColor">
                  <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
               </svg>
               X (Twitter)
            </a>
         </li>
         <li>
            <a href="https://github.com/focus-assist" target="_blank" rel="noopener">
               <svg viewBox="0 0 24 24" fill="currentColor">
                  <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
               </svg>
               GitHub
            </a>
         </li>
      </ul>

      <div class="contact-info">
         <div>
            <span class="label">Email</span>
            <a href="mailto:hello@focus-assist.com">hello@focus-assist.com</a>
         </div>
         <div>
            <span class="label">Location</span>
            <span class="value">Washington State, USA</span>
         </div>
         <div>
            <span class="label">Availability</span>
            <span class="value">Worldwide (Remote)</span>
         </div>
      </div>
   </section>

   {{-- ═══════════════════════════════════════════
      CTA SECTION
      ═══════════════════════════════════════════ --}}
   <section aria-labelledby="cta-label" class="reveal">
      <div class="cta-container">
         <hgroup>
            <h2 id="cta-label">Ready to Work Together?</h2>
         </hgroup>
         <p>Whether you need expert professionals to guide your team or software tools to bring clarity to your work, we're here to help.</p>
         <div class="cta-buttons">
            <a href="/contact" class="primary">Start a Conversation</a>
            <a href="/services" class="secondary">Explore Services</a>
         </div>
      </div>
   </section>

</x-layouts.webpage>
