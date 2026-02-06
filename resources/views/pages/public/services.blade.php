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
            SERVICE BLURB SECTIONS (Alternating Layout)
            ═══════════════════════════════════════════ */
         .service-blurb {
            padding: 100px var(--gutter);
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
            max-width: 1300px;
            margin: 0 auto;

            &:nth-of-type(odd) {
               & > .service-visual { order: -1; }
            }

            & > .service-content {
               & > hgroup {
                  margin-bottom: 20px;

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
                     font-size: clamp(26px, 3.4vw, 42px);
                     font-weight: 700;
                     letter-spacing: -.02em;
                     line-height: 1.1;
                     color: var(--white);
                  }
               }

               & > p {
                  font-size: .96rem;
                  color: var(--g300);
                  line-height: 1.8;
                  margin-bottom: 24px;
                  max-width: 520px;
               }

               & > ul.feature-list {
                  margin-bottom: 28px;

                  & > li {
                     display: flex;
                     align-items: flex-start;
                     gap: 12px;
                     font-size: .9rem;
                     color: var(--g200);
                     line-height: 1.6;
                     margin-bottom: 10px;

                     &::before {
                        content: "";
                        flex-shrink: 0;
                        width: 18px;
                        height: 18px;
                        margin-top: 2px;
                        background: var(--icon-check-circle) center / contain no-repeat;
                        opacity: .8;
                     }
                  }
               }

               & > p.cta {
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

                     &::after {
                        content: "";
                        width: 14px;
                        height: 14px;
                        background: currentColor;
                        mask-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2'%3E%3Cpath d='M5 12h14M12 5l7 7-7 7'/%3E%3C/svg%3E");
                        -webkit-mask-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2'%3E%3Cpath d='M5 12h14M12 5l7 7-7 7'/%3E%3C/svg%3E");
                        mask-size: contain;
                        -webkit-mask-size: contain;
                     }
                  }
               }
            }

            & > .service-visual {
               & > .visual-container {
                  aspect-ratio: 4 / 3;
                  border-radius: 18px;
                  overflow: hidden;
                  background: rgba(6, 10, 20, 0.6);
                  border: 1px solid rgba(255, 255, 255, .06);
                  display: flex;
                  align-items: center;
                  justify-content: center;
                  padding: 24px;

                  & > svg {
                     width: 100%;
                     height: 100%;
                     max-height: 280px;
                  }

                  & > img {
                     width: 100%;
                     height: 100%;
                     object-fit: cover;
                  }
               }
            }
         }

         /* Alternate backgrounds */
         section#agile-transformations,
         section#product-management,
         section#scrum-and-scrum_at_scale {
            background: var(--navy-deep);
         }

         section#agile-coaching,
         section#project-management,
         section#scaled-agile-framework-SAFe {
            background: var(--navy);
         }

         /* ═══════════════════════════════════════════
            ENGAGEMENT PROCESS SECTION
            ═══════════════════════════════════════════ */
         section[aria-labelledby="engagement-process-label"] {
            background: var(--navy-deep);
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
            PHILOSOPHY / CTA SECTION
            ═══════════════════════════════════════════ */
         section[aria-labelledby="philosophy-label"] {
            background: var(--navy);
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
                  background: rgba(6, 10, 20, 0.6);
                  border: 1px solid rgba(255, 255, 255, .06);

                  & > svg {
                     width: 100%;
                     height: 100%;
                  }
               }
            }
         }

         /* ═══════════════════════════════════════════
            SERVICES RESPONSIVE
            ═══════════════════════════════════════════ */
         @media (max-width: 1024px) {
            .service-blurb {
               grid-template-columns: 1fr;
               gap: 40px;

               & > .service-visual { order: -1 !important; }
            }

            section[aria-labelledby="engagement-process-label"] > ul.process-steps {
               grid-template-columns: repeat(2, 1fr);
            }

            section[aria-labelledby="philosophy-label"] {
               grid-template-columns: 1fr;

               & > .philosophy-visual { order: -1; }
            }
         }

         @media (max-width: 768px) {
            section[aria-labelledby="engagement-process-label"] > ul.process-steps {
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
      AGILE TRANSFORMATION
      ═══════════════════════════════════════════ --}}
   <section id="agile-transformations" class="service-blurb reveal" aria-labelledby="agile-transformations-heading">
      <div class="service-content">
         <hgroup>
            <h3>Organizational Change</h3>
            <h2 id="agile-transformations-heading">Agile Transformation</h2>
         </hgroup>
         <p>End-to-end organizational transformations. We assess where you are, define where you want to be, and guide every step of the journey. Our transformation experts work at every level — from executive alignment to team-level coaching.</p>
         <ul class="feature-list">
            <li>Comprehensive organizational assessment and roadmap</li>
            <li>Executive coaching and leadership alignment</li>
            <li>Change management and cultural transformation</li>
            <li>Metrics and KPIs to measure transformation success</li>
         </ul>
         <p class="cta"><a href="/contact?topic=agile-transformation">Start Your Transformation</a></p>
      </div>
      <div class="service-visual">
         <div class="visual-container">
            <svg viewBox="0 0 400 280" preserveAspectRatio="xMidYMid meet">
               <rect width="400" height="280" fill="transparent"/>
               <!-- Transformation cycle -->
               <path d="M200 60 A80 80 0 1 1 120 140" fill="none" stroke="#68bfd1" stroke-width="4" opacity="0.5" stroke-linecap="round"/>
               <polygon points="116,128 110,148 130,142" fill="#68bfd1" opacity="0.5"/>
               <path d="M200 60 A80 80 0 0 0 280 140" fill="none" stroke="#68bfd1" stroke-width="4" opacity="0.3" stroke-dasharray="8 6"/>
               <!-- Sprint box -->
               <rect x="164" y="104" width="72" height="36" rx="8" fill="#68bfd115" stroke="#68bfd140" stroke-width="2"/>
               <text x="200" y="128" fill="#68bfd1" font-size="14" text-anchor="middle" opacity="0.8" font-family="system-ui">Sprint</text>
               <!-- Journey path -->
               <path d="M60 230 Q200 180 340 230" fill="none" stroke="#68bfd1" stroke-width="3" opacity="0.3" stroke-dasharray="8 6"/>
               <!-- Before/After boxes -->
               <rect x="30" y="210" width="68" height="40" rx="10" fill="#68bfd110" stroke="#68bfd125" stroke-width="1.5"/>
               <text x="64" y="236" fill="#68bfd180" font-size="12" text-anchor="middle" font-family="system-ui">Before</text>
               <rect x="310" y="210" width="68" height="40" rx="10" fill="#68bfd120" stroke="#68bfd140" stroke-width="1.5"/>
               <text x="344" y="236" fill="#68bfd1" font-size="12" text-anchor="middle" font-family="system-ui">After</text>
            </svg>
         </div>
      </div>
   </section>

   {{-- ═══════════════════════════════════════════
      AGILE COACHING
      ═══════════════════════════════════════════ --}}
   <section id="agile-coaching" class="service-blurb reveal" aria-labelledby="agile-coaching-heading">
      <div class="service-content">
         <hgroup>
            <h3>Team Development</h3>
            <h2 id="agile-coaching-heading">Agile Coaching</h2>
         </hgroup>
         <p>Embedded coaches who mentor your teams in Scrum, Kanban, SAFe, and lean practices. We build sustainable capability, not dependency — our goal is to make ourselves unnecessary by developing your internal expertise.</p>
         <ul class="feature-list">
            <li>Hands-on coaching for Scrum, Kanban, and hybrid teams</li>
            <li>Facilitation of ceremonies and retrospectives</li>
            <li>Team health assessments and improvement plans</li>
            <li>Training and certification preparation</li>
         </ul>
         <p class="cta"><a href="/contact?topic=agile-coaching">Get a Coach</a></p>
      </div>
      <div class="service-visual">
         <div class="visual-container">
            <svg viewBox="0 0 400 280" preserveAspectRatio="xMidYMid meet">
               <rect width="400" height="280" fill="transparent"/>
               <!-- Coach figure -->
               <circle cx="120" cy="80" r="28" fill="#68bfd110" stroke="#68bfd130" stroke-width="2"/>
               <circle cx="120" cy="72" r="10" fill="#68bfd140"/>
               <path d="M102 96 Q120 86 138 96" fill="none" stroke="#68bfd140" stroke-width="3"/>
               <!-- Team members -->
               <g><circle cx="240" cy="70" r="20" fill="#68bfd108" stroke="#68bfd120" stroke-width="1.5"/><circle cx="240" cy="64" r="7" fill="#68bfd130"/></g>
               <g><circle cx="290" cy="110" r="20" fill="#68bfd108" stroke="#68bfd120" stroke-width="1.5"/><circle cx="290" cy="104" r="7" fill="#68bfd130"/></g>
               <g><circle cx="240" cy="150" r="20" fill="#68bfd108" stroke="#68bfd120" stroke-width="1.5"/><circle cx="240" cy="144" r="7" fill="#68bfd130"/></g>
               <!-- Connection lines -->
               <line x1="156" y1="72" x2="216" y2="76" stroke="#68bfd1" stroke-width="2" opacity="0.3" stroke-dasharray="6 4"/>
               <line x1="156" y1="80" x2="230" y2="110" stroke="#68bfd1" stroke-width="2" opacity="0.25" stroke-dasharray="6 4"/>
               <line x1="156" y1="88" x2="216" y2="144" stroke="#68bfd1" stroke-width="2" opacity="0.2" stroke-dasharray="6 4"/>
               <!-- Growth chart -->
               <path d="M50 240 L110 210 L170 220 L230 190 L290 160 L350 140" fill="none" stroke="#68bfd1" stroke-width="3" opacity="0.35" stroke-linecap="round"/>
               <circle cx="350" cy="140" r="6" fill="#68bfd1" opacity="0.4"/>
            </svg>
         </div>
      </div>
   </section>

   {{-- ═══════════════════════════════════════════
      PRODUCT MANAGEMENT
      ═══════════════════════════════════════════ --}}
   <section id="product-management" class="service-blurb reveal" aria-labelledby="product-management-heading">
      <div class="service-content">
         <hgroup>
            <h3>Strategic Product Leadership</h3>
            <h2 id="product-management-heading">Product Management</h2>
         </hgroup>
         <p>Experienced Product Managers and Product Owners who focus on discovery, strategy, and roadmapping to ensure you're building the right thing for the right people. We keep your product vision sharp and your delivery beneficiary-focused.</p>
         <ul class="feature-list">
            <li>Product strategy and vision development</li>
            <li>Backlog management and prioritization</li>
            <li>User research and beneficiary mapping</li>
            <li>Roadmap creation and stakeholder alignment</li>
         </ul>
         <p class="cta"><a href="/contact?topic=product-management">Find a Product Manager</a></p>
      </div>
      <div class="service-visual">
         <div class="visual-container">
            <svg viewBox="0 0 400 280" preserveAspectRatio="xMidYMid meet">
               <rect width="400" height="280" fill="transparent"/>
               <!-- Progress bars -->
               <g>
                  <rect x="40" y="60" width="180" height="32" rx="8" fill="#68bfd112" stroke="#68bfd130" stroke-width="1.5"/>
                  <rect x="40" y="60" width="110" height="32" rx="8" fill="#68bfd125"/>
                  <text x="52" y="82" fill="#68bfd1" font-size="13" opacity="0.7" font-family="system-ui">Discovery</text>
               </g>
               <g>
                  <rect x="40" y="110" width="120" height="32" rx="8" fill="#68bfd112" stroke="#68bfd130" stroke-width="1.5"/>
                  <rect x="40" y="110" width="80" height="32" rx="8" fill="#68bfd125"/>
                  <text x="52" y="132" fill="#68bfd1" font-size="13" opacity="0.7" font-family="system-ui">Design</text>
               </g>
               <g>
                  <rect x="40" y="160" width="220" height="32" rx="8" fill="#68bfd112" stroke="#68bfd130" stroke-width="1.5"/>
                  <rect x="40" y="160" width="140" height="32" rx="8" fill="#68bfd125"/>
                  <text x="52" y="182" fill="#68bfd1" font-size="13" opacity="0.7" font-family="system-ui">Delivery</text>
               </g>
               <!-- Target icon -->
               <circle cx="320" cy="100" r="40" fill="#68bfd106" stroke="#68bfd115" stroke-width="2"/>
               <circle cx="320" cy="100" r="26" fill="none" stroke="#68bfd120" stroke-width="2"/>
               <circle cx="320" cy="100" r="12" fill="none" stroke="#68bfd130" stroke-width="2"/>
               <circle cx="320" cy="100" r="4" fill="#68bfd1" opacity="0.5"/>
               <!-- Metrics -->
               <rect x="40" y="220" width="100" height="40" rx="10" fill="#68bfd108" stroke="#68bfd120" stroke-width="1"/>
               <text x="90" y="246" fill="#68bfd160" font-size="12" text-anchor="middle" font-family="system-ui">NPS: 72</text>
               <rect x="156" y="220" width="100" height="40" rx="10" fill="#68bfd108" stroke="#68bfd120" stroke-width="1"/>
               <text x="206" y="246" fill="#68bfd160" font-size="12" text-anchor="middle" font-family="system-ui">OKR: 85%</text>
            </svg>
         </div>
      </div>
   </section>

   {{-- ═══════════════════════════════════════════
      PROJECT MANAGEMENT
      ═══════════════════════════════════════════ --}}
   <section id="project-management" class="service-blurb reveal" aria-labelledby="project-management-heading">
      <div class="service-content">
         <hgroup>
            <h3>Execution Excellence</h3>
            <h2 id="project-management-heading">Project Management</h2>
         </hgroup>
         <p>Seasoned project managers who keep initiatives on track — Agile or Waterfall — with clear communication and accountability. We handle the coordination so your teams can focus on delivery.</p>
         <ul class="feature-list">
            <li>End-to-end project planning and execution</li>
            <li>Risk management and mitigation strategies</li>
            <li>Stakeholder communication and reporting</li>
            <li>Budget tracking and resource optimization</li>
         </ul>
         <p class="cta"><a href="/contact?topic=project-management">Hire a Project Manager</a></p>
      </div>
      <div class="service-visual">
         <div class="visual-container">
            <svg viewBox="0 0 400 280" preserveAspectRatio="xMidYMid meet">
               <rect width="400" height="280" fill="transparent"/>
               <!-- Gantt-style bars -->
               <g>
                  <rect x="60" y="40" width="120" height="24" rx="6" fill="#68bfd115" stroke="#68bfd130" stroke-width="1"/>
                  <text x="68" y="58" fill="#68bfd1" font-size="12" opacity="0.7" font-family="system-ui">Plan</text>
               </g>
               <g>
                  <rect x="140" y="80" width="100" height="24" rx="6" fill="#68bfd120" stroke="#68bfd130" stroke-width="1"/>
                  <text x="148" y="98" fill="#68bfd1" font-size="12" opacity="0.7" font-family="system-ui">Build</text>
               </g>
               <g>
                  <rect x="200" y="120" width="80" height="24" rx="6" fill="#68bfd125" stroke="#68bfd130" stroke-width="1"/>
                  <text x="208" y="138" fill="#68bfd1" font-size="12" opacity="0.7" font-family="system-ui">Test</text>
               </g>
               <g>
                  <rect x="240" y="160" width="110" height="24" rx="6" fill="#68bfd130" stroke="#68bfd130" stroke-width="1"/>
                  <text x="248" y="178" fill="#68bfd1" font-size="12" opacity="0.7" font-family="system-ui">Deploy</text>
               </g>
               <!-- Connection lines -->
               <path d="M180 54 L200 54 L200 94" fill="none" stroke="#68bfd130" stroke-width="1.5"/>
               <path d="M240 94 L260 94 L260 134" fill="none" stroke="#68bfd130" stroke-width="1.5"/>
               <path d="M280 134 L300 134 L300 174" fill="none" stroke="#68bfd130" stroke-width="1.5"/>
               <!-- Today line -->
               <line x1="260" y1="28" x2="260" y2="200" stroke="#e07b9b" stroke-width="2" stroke-dasharray="6 4" opacity="0.4"/>
               <text x="260" y="20" fill="#e07b9b" font-size="12" text-anchor="middle" opacity="0.5" font-family="system-ui">Today</text>
               <!-- Milestone diamond -->
               <polygon points="350,172 360,184 350,196 340,184" fill="#68bfd1" opacity="0.4"/>
               <!-- Progress bar -->
               <rect x="40" y="220" width="320" height="36" rx="10" fill="#68bfd106" stroke="#68bfd115" stroke-width="1"/>
               <rect x="40" y="220" width="208" height="36" rx="10" fill="#68bfd112"/>
               <text x="200" y="244" fill="#68bfd160" font-size="13" text-anchor="middle" font-family="system-ui">65% Complete</text>
            </svg>
         </div>
      </div>
   </section>

   {{-- ═══════════════════════════════════════════
      SCRUM AND SCRUM@SCALE
      ═══════════════════════════════════════════ --}}
   <section id="scrum-and-scrum_at_scale" class="service-blurb reveal" aria-labelledby="scrum-heading">
      <div class="service-content">
         <hgroup>
            <h3>Framework Expertise</h3>
            <h2 id="scrum-heading">Scrum and Scrum@Scale</h2>
         </hgroup>
         <p>Certified Scrum Masters who protect the process, remove blockers, and help your teams reach peak velocity. We also support organizations scaling Scrum across multiple teams with Scrum@Scale implementation.</p>
         <ul class="feature-list">
            <li>Certified Scrum Masters for team-level facilitation</li>
            <li>Scrum@Scale implementation for enterprise agility</li>
            <li>Sprint planning, reviews, and retrospective facilitation</li>
            <li>Impediment removal and cross-team coordination</li>
         </ul>
         <p class="cta"><a href="/contact?topic=scrum-masters">Find a Scrum Master</a></p>
      </div>
      <div class="service-visual">
         <div class="visual-container">
            <svg viewBox="0 0 400 280" preserveAspectRatio="xMidYMid meet">
               <rect width="400" height="280" fill="transparent"/>
               <!-- Kanban board columns -->
               <g>
                  <rect x="36" y="28" width="104" height="32" rx="6" fill="#68bfd108"/>
                  <text x="88" y="50" fill="#68bfd1" font-size="12" text-anchor="middle" opacity="0.4" font-family="system-ui">To Do</text>
                  <rect x="40" y="72" width="96" height="28" rx="6" fill="#68bfd108" stroke="#68bfd118" stroke-width="1"/>
                  <rect x="40" y="108" width="96" height="28" rx="6" fill="#68bfd108" stroke="#68bfd118" stroke-width="1"/>
               </g>
               <g>
                  <rect x="152" y="28" width="104" height="32" rx="6" fill="#68bfd113"/>
                  <text x="204" y="50" fill="#68bfd1" font-size="12" text-anchor="middle" opacity="0.55" font-family="system-ui">In Progress</text>
                  <rect x="156" y="72" width="96" height="28" rx="6" fill="#68bfd108" stroke="#68bfd118" stroke-width="1"/>
                  <rect x="156" y="108" width="96" height="28" rx="6" fill="#68bfd108" stroke="#68bfd118" stroke-width="1"/>
               </g>
               <g>
                  <rect x="268" y="28" width="104" height="32" rx="6" fill="#68bfd118"/>
                  <text x="320" y="50" fill="#68bfd1" font-size="12" text-anchor="middle" opacity="0.7" font-family="system-ui">Done</text>
                  <rect x="272" y="72" width="96" height="28" rx="6" fill="#68bfd108" stroke="#68bfd118" stroke-width="1"/>
               </g>
               <!-- Shield icon -->
               <path d="M296 156 L296 200 Q296 224 320 236 Q344 224 344 200 L344 156 Z" fill="#68bfd110" stroke="#68bfd130" stroke-width="2"/>
               <path d="M310 190 L318 200 L334 176" fill="none" stroke="#68bfd1" stroke-width="3" opacity="0.5" stroke-linecap="round"/>
               <!-- Burndown chart -->
               <path d="M40 240 L80 236 L120 224 L160 228 L200 212 L240 200" fill="none" stroke="#68bfd1" stroke-width="2.5" opacity="0.35" stroke-linecap="round"/>
            </svg>
         </div>
      </div>
   </section>

   {{-- ═══════════════════════════════════════════
      SCALED AGILE FRAMEWORK (SAFe)
      ═══════════════════════════════════════════ --}}
   <section id="scaled-agile-framework-SAFe" class="service-blurb reveal" aria-labelledby="safe-heading">
      <div class="service-content">
         <hgroup>
            <h3>Enterprise Agility</h3>
            <h2 id="safe-heading">Scaled Agile Framework (SAFe)</h2>
         </hgroup>
         <p>Certified SAFe consultants who help large organizations implement the Scaled Agile Framework. We guide you through PI Planning, Agile Release Trains, and the cultural shift required for enterprise-level agility.</p>
         <ul class="feature-list">
            <li>SAFe implementation and rollout strategy</li>
            <li>PI Planning facilitation and optimization</li>
            <li>Agile Release Train (ART) launch and coaching</li>
            <li>Lean Portfolio Management guidance</li>
         </ul>
         <p class="cta"><a href="/contact?topic=safe-consulting">Get SAFe Expertise</a></p>
      </div>
      <div class="service-visual">
         <div class="visual-container">
            <svg viewBox="0 0 400 280" preserveAspectRatio="xMidYMid meet">
               <rect width="400" height="280" fill="transparent"/>
               <!-- Portfolio level -->
               <rect x="100" y="30" width="200" height="40" rx="8" fill="#68bfd115" stroke="#68bfd130" stroke-width="1.5"/>
               <text x="200" y="56" fill="#68bfd1" font-size="12" text-anchor="middle" opacity="0.7" font-family="system-ui">Portfolio</text>
               <!-- Program level (ART) -->
               <rect x="60" y="90" width="120" height="36" rx="6" fill="#68bfd110" stroke="#68bfd125" stroke-width="1.5"/>
               <text x="120" y="114" fill="#68bfd1" font-size="11" text-anchor="middle" opacity="0.6" font-family="system-ui">ART 1</text>
               <rect x="220" y="90" width="120" height="36" rx="6" fill="#68bfd110" stroke="#68bfd125" stroke-width="1.5"/>
               <text x="280" y="114" fill="#68bfd1" font-size="11" text-anchor="middle" opacity="0.6" font-family="system-ui">ART 2</text>
               <!-- Team level -->
               <rect x="40" y="146" width="60" height="28" rx="4" fill="#68bfd108" stroke="#68bfd118" stroke-width="1"/>
               <rect x="110" y="146" width="60" height="28" rx="4" fill="#68bfd108" stroke="#68bfd118" stroke-width="1"/>
               <rect x="200" y="146" width="60" height="28" rx="4" fill="#68bfd108" stroke="#68bfd118" stroke-width="1"/>
               <rect x="270" y="146" width="60" height="28" rx="4" fill="#68bfd108" stroke="#68bfd118" stroke-width="1"/>
               <rect x="340" y="146" width="40" height="28" rx="4" fill="#68bfd108" stroke="#68bfd118" stroke-width="1"/>
               <!-- Connection lines -->
               <line x1="200" y1="70" x2="120" y2="90" stroke="#68bfd130" stroke-width="1.5"/>
               <line x1="200" y1="70" x2="280" y2="90" stroke="#68bfd130" stroke-width="1.5"/>
               <line x1="120" y1="126" x2="70" y2="146" stroke="#68bfd130" stroke-width="1"/>
               <line x1="120" y1="126" x2="140" y2="146" stroke="#68bfd130" stroke-width="1"/>
               <line x1="280" y1="126" x2="230" y2="146" stroke="#68bfd130" stroke-width="1"/>
               <line x1="280" y1="126" x2="300" y2="146" stroke="#68bfd130" stroke-width="1"/>
               <line x1="280" y1="126" x2="360" y2="146" stroke="#68bfd130" stroke-width="1"/>
               <!-- PI Timeline -->
               <rect x="40" y="200" width="320" height="50" rx="10" fill="rgba(16,28,50,0.6)" stroke="rgba(104,191,209,0.06)" stroke-width="1"/>
               <line x1="60" y1="225" x2="340" y2="225" stroke="rgba(104,191,209,0.15)" stroke-width="2"/>
               <g><rect x="70" y="212" width="50" height="12" rx="2" fill="rgba(104,191,209,0.08)"/><text x="95" y="222" fill="rgba(104,191,209,0.4)" font-size="8" text-anchor="middle" font-family="system-ui">IP 1</text></g>
               <g><rect x="140" y="212" width="50" height="12" rx="2" fill="rgba(104,191,209,0.12)"/><text x="165" y="222" fill="rgba(104,191,209,0.5)" font-size="8" text-anchor="middle" font-family="system-ui">IP 2</text></g>
               <g><rect x="210" y="212" width="50" height="12" rx="2" fill="rgba(104,191,209,0.16)"/><text x="235" y="222" fill="rgba(104,191,209,0.6)" font-size="8" text-anchor="middle" font-family="system-ui">IP 3</text></g>
               <g><rect x="280" y="212" width="50" height="12" rx="2" fill="rgba(104,191,209,0.2)"/><text x="305" y="222" fill="rgba(104,191,209,0.7)" font-size="8" text-anchor="middle" font-family="system-ui">IP 4</text></g>
               <text x="200" y="242" fill="rgba(104,191,209,0.5)" font-size="10" text-anchor="middle" font-family="system-ui">Program Increment</text>
            </svg>
         </div>
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
            <svg viewBox="0 0 800 450" preserveAspectRatio="xMidYMid slice">
               <defs>
                  <linearGradient id="st-bg" x1="0" y1="0" x2="0.4" y2="1">
                     <stop offset="0%" stop-color="#0d1a2e"/>
                     <stop offset="100%" stop-color="#0a1424"/>
                  </linearGradient>
               </defs>
               <rect width="800" height="450" fill="url(#st-bg)"/>
               <rect x="80" y="40" width="640" height="100" rx="8" fill="rgba(16,28,50,0.6)" stroke="rgba(104,191,209,0.06)" stroke-width="0.8"/>
               <line x1="100" y1="90" x2="700" y2="90" stroke="rgba(104,191,209,0.08)" stroke-width="1.5"/>
               <g><rect x="120" y="62" width="110" height="22" rx="4" fill="rgba(104,191,209,0.06)"/><text x="175" y="77" fill="rgba(104,191,209,0.35)" font-size="11" text-anchor="middle" font-weight="500" font-family="system-ui">Q1</text><circle cx="175" cy="90" r="4.5" fill="rgba(104,191,209,0.15)"/></g>
               <g><rect x="270" y="62" width="110" height="22" rx="4" fill="rgba(104,191,209,0.095)"/><text x="325" y="77" fill="rgba(104,191,209,0.45)" font-size="11" text-anchor="middle" font-weight="500" font-family="system-ui">Q2</text><circle cx="325" cy="90" r="4.5" fill="rgba(104,191,209,0.23)"/></g>
               <g><rect x="420" y="62" width="110" height="22" rx="4" fill="rgba(104,191,209,0.13)"/><text x="475" y="77" fill="rgba(104,191,209,0.55)" font-size="11" text-anchor="middle" font-weight="500" font-family="system-ui">Q3</text><circle cx="475" cy="90" r="4.5" fill="rgba(104,191,209,0.31)"/></g>
               <g><rect x="570" y="62" width="110" height="22" rx="4" fill="rgba(104,191,209,0.165)"/><text x="625" y="77" fill="rgba(104,191,209,0.65)" font-size="11" text-anchor="middle" font-weight="500" font-family="system-ui">Q4</text><circle cx="625" cy="90" r="4.5" fill="rgba(104,191,209,0.39)"/></g>
               <line x1="390" y1="50" x2="390" y2="135" stroke="#e07b9b" stroke-width="1.2" stroke-dasharray="4 3" opacity="0.45"/>
               <text x="390" y="47" fill="#e07b9b" font-size="8" text-anchor="middle" opacity="0.5" font-family="system-ui">Today</text>
               <rect x="160" y="280" width="480" height="30" rx="15" fill="rgba(16,30,52,0.6)" stroke="rgba(104,191,209,0.06)" stroke-width="0.8"/>
               <rect x="210" y="270" width="44" height="28" rx="3" fill="rgba(104,191,209,0.06)"/>
               <path d="M215 290 L225 280 L235 286 L250 272" fill="none" stroke="rgba(104,191,209,0.2)" stroke-width="1"/>
               <rect x="340" y="268" width="50" height="24" rx="3" fill="rgba(104,191,209,0.05)"/>
               <rect x="480" y="272" width="38" height="20" rx="3" fill="rgba(104,191,209,0.06)"/>
               <g><ellipse cx="240" cy="260" rx="8" ry="8" fill="rgba(104,191,209,0.48)"/><ellipse cx="240" cy="284" rx="11" ry="15" fill="rgba(104,191,209,0.48)"/></g>
               <g><ellipse cx="370" cy="247" rx="7" ry="8" fill="rgba(104,191,209,0.42)"/><ellipse cx="370" cy="269" rx="10" ry="14" fill="rgba(104,191,209,0.42)"/></g>
               <g><ellipse cx="500" cy="252" rx="7" ry="8" fill="rgba(104,191,209,0.38)"/><ellipse cx="500" cy="274" rx="10" ry="14" fill="rgba(104,191,209,0.38)"/></g>
               <g><ellipse cx="310" cy="307" rx="7" ry="8" fill="rgba(104,191,209,0.30)"/><ellipse cx="310" cy="329" rx="10" ry="14" fill="rgba(104,191,209,0.30)"/></g>
               <g><ellipse cx="440" cy="310" rx="7" ry="8" fill="rgba(104,191,209,0.28)"/><ellipse cx="440" cy="332" rx="10" ry="14" fill="rgba(104,191,209,0.28)"/></g>
               <line x1="270" y1="230" x2="340" y2="90" stroke="rgba(104,191,209,0.08)" stroke-width="1.2" stroke-dasharray="4 3"/>
               <circle cx="400" cy="200" r="280" fill="rgba(104,191,209,0.015)"/>
            </svg>
         </div>
      </div>
   </section>

</x-layouts.webpage>
