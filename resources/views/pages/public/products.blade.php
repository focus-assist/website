<x-layouts.webpage>
   <x-slot:pageTitle>Products - Focus Assist LLC</x-slot:pageTitle>
   <x-slot:pageDescription>Purpose-built software tools that empower teams. Vista Opus for product management, Libri Res for bookkeeping, and Diarium Salus for health tracking.</x-slot:pageDescription>
   <x-slot:metaData></x-slot:metaData>
   <x-slot:pageScripts></x-slot:pageScripts>
   <x-slot:pageStyles>
      <style id="products-page-styles">

         /* ═══════════════════════════════════════════
            PRODUCTS HERO SECTION
            ═══════════════════════════════════════════ */
         section[aria-describedby="products-hero-hgroup"] {
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
            PRODUCT BLURB SECTIONS
            ═══════════════════════════════════════════ */
         .product-blurb {
            padding: 100px var(--gutter);

            & > .product-showcase {
               max-width: 900px;
               margin: 0 auto 60px;
               border-radius: 20px;
               overflow: hidden;
               background: rgba(6, 10, 20, 0.8);
               border: 1px solid rgba(255, 255, 255, .06);
               box-shadow: 0 30px 80px rgba(0, 0, 0, .4);

               & > svg {
                  width: 100%;
                  height: auto;
                  display: block;
               }
            }

            & > .product-details {
               display: grid;
               grid-template-columns: 1fr 1fr;
               gap: 60px;
               max-width: 1100px;
               margin: 0 auto;
               align-items: start;

               & > .product-info {
                  & > .product-icon {
                     width: 56px;
                     height: 56px;
                     margin-bottom: 20px;
                     display: flex;
                     align-items: center;
                     justify-content: center;
                     border-radius: 14px;

                     & > svg {
                        width: 28px;
                        height: 28px;
                     }
                  }

                  & > hgroup {
                     margin-bottom: 8px;

                     & > h2 {
                        font-family: var(--font-d);
                        font-size: clamp(28px, 3.6vw, 44px);
                        font-weight: 700;
                        letter-spacing: -.02em;
                        line-height: 1.1;
                        color: var(--white);
                     }
                  }

                  & > .product-tagline {
                     font-family: var(--font-d);
                     font-size: 1.1rem;
                     font-weight: 600;
                     margin-bottom: 20px;
                  }

                  & > p {
                     font-size: .96rem;
                     color: var(--g300);
                     line-height: 1.8;
                     margin-bottom: 28px;
                     max-width: 480px;
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
                        color: var(--white);
                        box-shadow: 0 4px 20px rgba(0, 0, 0, .3);
                        transition: transform .25s cubic-bezier(.16, 1, .3, 1), box-shadow .25s;

                        &:hover {
                           transform: translateY(-2px) scale(1.01);
                        }

                        &::after {
                           content: "";
                           width: 14px;
                           height: 14px;
                           background: currentColor;
                           mask-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2'%3E%3Cpath d='M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6'/%3E%3Cpolyline points='15 3 21 3 21 9'/%3E%3Cline x1='10' y1='14' x2='21' y2='3'/%3E%3C/svg%3E");
                           -webkit-mask-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2'%3E%3Cpath d='M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6'/%3E%3Cpolyline points='15 3 21 3 21 9'/%3E%3Cline x1='10' y1='14' x2='21' y2='3'/%3E%3C/svg%3E");
                           mask-size: contain;
                           -webkit-mask-size: contain;
                        }
                     }
                  }
               }

               & > .product-features {
                  & > h3 {
                     font-family: var(--font-m);
                     font-size: 11px;
                     font-weight: 500;
                     letter-spacing: .18em;
                     text-transform: uppercase;
                     color: var(--g400);
                     margin-bottom: 20px;
                  }

                  & > ul {
                     & > li {
                        display: flex;
                        align-items: flex-start;
                        gap: 14px;
                        font-size: .92rem;
                        color: var(--g200);
                        line-height: 1.5;
                        margin-bottom: 16px;

                        &::before {
                           content: "";
                           flex-shrink: 0;
                           width: 20px;
                           height: 20px;
                           margin-top: 1px;
                           border-radius: 6px;
                           background-size: 14px;
                           background-position: center;
                           background-repeat: no-repeat;
                        }
                     }
                  }
               }
            }
         }

         /* Vista Opus - Blue theme */
         section#vista-opus {
            background: var(--navy-deep);

            & .product-icon {
               background: rgba(104, 191, 209, .12);
               border: 1px solid rgba(104, 191, 209, .25);
               color: var(--teal);
            }

            & .product-tagline {
               color: var(--teal);
            }

            & .cta > a {
               background: linear-gradient(135deg, var(--teal), var(--blue-bright));
               box-shadow: 0 4px 20px rgba(104, 191, 209, .3);

               &:hover {
                  box-shadow: 0 8px 32px rgba(104, 191, 209, .4);
               }
            }

            & .product-features ul > li::before {
               background-color: rgba(104, 191, 209, .15);
               background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%2368bfd1' stroke-width='2.5' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpolyline points='20 6 9 17 4 12'/%3E%3C/svg%3E");
            }
         }

         /* Libri Res - Green theme */
         section#libri-res {
            background: var(--navy);

            & .product-icon {
               background: rgba(52, 211, 153, .12);
               border: 1px solid rgba(52, 211, 153, .25);
               color: #34d399;
            }

            & .product-tagline {
               color: #34d399;
            }

            & .cta > a {
               background: linear-gradient(135deg, #34d399, #059669);
               box-shadow: 0 4px 20px rgba(52, 211, 153, .3);

               &:hover {
                  box-shadow: 0 8px 32px rgba(52, 211, 153, .4);
               }
            }

            & .product-features ul > li::before {
               background-color: rgba(52, 211, 153, .15);
               background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%2334d399' stroke-width='2.5' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpolyline points='20 6 9 17 4 12'/%3E%3C/svg%3E");
            }
         }

         /* Diarium Salus - Rose/Pink theme */
         section#diarium-salus {
            background: var(--navy-deep);

            & .product-icon {
               background: rgba(244, 114, 182, .12);
               border: 1px solid rgba(244, 114, 182, .25);
               color: #f472b6;
            }

            & .product-tagline {
               color: #f472b6;
            }

            & .cta > a {
               background: linear-gradient(135deg, #f472b6, #db2777);
               box-shadow: 0 4px 20px rgba(244, 114, 182, .3);

               &:hover {
                  box-shadow: 0 8px 32px rgba(244, 114, 182, .4);
               }
            }

            & .product-features ul > li::before {
               background-color: rgba(244, 114, 182, .15);
               background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%23f472b6' stroke-width='2.5' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpolyline points='20 6 9 17 4 12'/%3E%3C/svg%3E");
            }
         }

         /* ═══════════════════════════════════════════
            CUSTOM CTA SECTION
            ═══════════════════════════════════════════ */
         section[aria-labelledby="custom-cta-label"] {
            background: var(--navy);
            padding: 100px var(--gutter);

            & > .cta-container {
               max-width: 800px;
               margin: 0 auto;
               padding: 60px 40px;
               text-align: center;
               background: rgba(15, 32, 53, 0.6);
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

               & > p.cta > a {
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

         /* ═══════════════════════════════════════════
            PRODUCTS RESPONSIVE
            ═══════════════════════════════════════════ */
         @media (max-width: 900px) {
            .product-blurb > .product-details {
               grid-template-columns: 1fr;
               gap: 40px;
            }
         }

         @media (max-width: 600px) {
            section[aria-labelledby="custom-cta-label"] > .cta-container {
               padding: 40px 24px;
            }
         }

      </style>
   </x-slot:pageStyles>

   {{-- ═══════════════════════════════════════════
      HERO SECTION
      ═══════════════════════════════════════════ --}}
   <section aria-describedby="products-hero-hgroup">
      <hgroup id="products-hero-hgroup">
         <h1><span>Software Products</span></h1>
         <h2>
            <span>Tools That </span><span class="keyword">Empower</span>
         </h2>
      </hgroup>
      <p class="tagline">Built to serve the people who use them — not the other way around. Each product in our suite is designed with clarity, visibility, and the human experience at its core.</p>
   </section>

   {{-- ═══════════════════════════════════════════
      VISTA OPUS
      ═══════════════════════════════════════════ --}}
   <section id="vista-opus" class="product-blurb reveal" aria-labelledby="vista-opus-heading">
      <div class="product-showcase">
         <svg viewBox="0 0 900 340" preserveAspectRatio="xMidYMid meet">
            <defs>
               <linearGradient id="vo-bg" x1="0" y1="0" x2="0" y2="1">
                  <stop offset="0%" stop-color="#0a1628"/>
                  <stop offset="100%" stop-color="#060e1a"/>
               </linearGradient>
            </defs>
            <rect width="900" height="340" fill="url(#vo-bg)"/>

            <!-- User Story Map Header Row -->
            <g transform="translate(60, 30)">
               <!-- Customer column -->
               <rect x="0" y="0" width="120" height="40" rx="6" fill="#1a6fdf" opacity="0.9"/>
               <text x="60" y="25" fill="white" font-size="11" text-anchor="middle" font-family="system-ui" font-weight="500">Customer</text>
               <text x="60" y="38" fill="rgba(255,255,255,0.6)" font-size="8" text-anchor="middle" font-family="system-ui">Beneficiary Role</text>

               <!-- Browses Catalog -->
               <rect x="140" y="0" width="140" height="40" rx="6" fill="#1a6fdf" opacity="0.8"/>
               <text x="210" y="25" fill="white" font-size="11" text-anchor="middle" font-family="system-ui" font-weight="500">Browses Catalog</text>
               <text x="210" y="38" fill="rgba(255,255,255,0.6)" font-size="8" text-anchor="middle" font-family="system-ui">Customer "explores items"</text>

               <!-- Manages Cart -->
               <rect x="300" y="0" width="140" height="40" rx="6" fill="#1a6fdf" opacity="0.7"/>
               <text x="370" y="25" fill="white" font-size="11" text-anchor="middle" font-family="system-ui" font-weight="500">Manages Cart</text>
               <text x="370" y="38" fill="rgba(255,255,255,0.6)" font-size="8" text-anchor="middle" font-family="system-ui">Customer "selects items"</text>

               <!-- Completes Order -->
               <rect x="460" y="0" width="140" height="40" rx="6" fill="#1a6fdf" opacity="0.6"/>
               <text x="530" y="25" fill="white" font-size="11" text-anchor="middle" font-family="system-ui" font-weight="500">Completes Order</text>
               <text x="530" y="38" fill="rgba(255,255,255,0.6)" font-size="8" text-anchor="middle" font-family="system-ui">Customer "places order"</text>
            </g>

            <!-- User Stories -->
            <g transform="translate(60, 85)">
               <!-- Should Be Able To -->
               <rect x="0" y="0" width="120" height="36" rx="5" fill="#1a6fdf" opacity="0.5"/>
               <text x="60" y="16" fill="white" font-size="9" text-anchor="middle" font-family="system-ui" font-weight="500">Should Be Able To</text>
               <text x="60" y="28" fill="rgba(255,255,255,0.6)" font-size="8" text-anchor="middle" font-family="system-ui">Discover Products</text>

               <!-- Story cards - Yellow -->
               <rect x="140" y="0" width="130" height="28" rx="4" fill="#fcd34d" opacity="0.85"/>
               <text x="205" y="18" fill="#1a1a1a" font-size="8" text-anchor="middle" font-family="system-ui">I, Customer, would like to</text>
               <rect x="140" y="36" width="130" height="28" rx="4" fill="#fcd34d" opacity="0.7"/>
               <text x="205" y="54" fill="#1a1a1a" font-size="8" text-anchor="middle" font-family="system-ui">search for products by...</text>
               <rect x="140" y="72" width="130" height="28" rx="4" fill="#fcd34d" opacity="0.55"/>
               <text x="205" y="90" fill="#1a1a1a" font-size="8" text-anchor="middle" font-family="system-ui">filter by category so that...</text>

               <!-- Story cards - Green -->
               <rect x="300" y="0" width="130" height="28" rx="4" fill="#86efac" opacity="0.8"/>
               <text x="365" y="18" fill="#1a1a1a" font-size="8" text-anchor="middle" font-family="system-ui">I, Customer, would like to</text>
               <rect x="300" y="36" width="130" height="28" rx="4" fill="#86efac" opacity="0.65"/>
               <text x="365" y="54" fill="#1a1a1a" font-size="8" text-anchor="middle" font-family="system-ui">add items to cart so that...</text>

               <!-- Story cards - Coral -->
               <rect x="460" y="0" width="130" height="28" rx="4" fill="#fca5a5" opacity="0.8"/>
               <text x="525" y="18" fill="#1a1a1a" font-size="8" text-anchor="middle" font-family="system-ui">I, Customer, would like to</text>
               <rect x="460" y="36" width="130" height="28" rx="4" fill="#fca5a5" opacity="0.65"/>
               <text x="525" y="54" fill="#1a1a1a" font-size="8" text-anchor="middle" font-family="system-ui">enter payment so that...</text>
               <rect x="460" y="72" width="130" height="28" rx="4" fill="#fca5a5" opacity="0.5"/>
               <text x="525" y="90" fill="#1a1a1a" font-size="8" text-anchor="middle" font-family="system-ui">I, Customer, would like to</text>
            </g>

            <!-- Release cutoff line -->
            <line x1="550" y1="80" x2="550" y2="280" stroke="rgba(255,255,255,0.2)" stroke-width="2" stroke-dasharray="6 4"/>
            <text x="560" y="90" fill="rgba(255,255,255,0.4)" font-size="9" font-family="system-ui">Release 1.0.1</text>

            <!-- Second row -->
            <g transform="translate(60, 200)">
               <rect x="0" y="0" width="120" height="36" rx="5" fill="#1a6fdf" opacity="0.4"/>
               <text x="60" y="16" fill="white" font-size="9" text-anchor="middle" font-family="system-ui" font-weight="500">Should Be Able To</text>
               <text x="60" y="28" fill="rgba(255,255,255,0.6)" font-size="8" text-anchor="middle" font-family="system-ui">Compare Products</text>
            </g>

            <!-- Kanban mini board -->
            <g transform="translate(620, 230)">
               <text x="0" y="0" fill="rgba(255,255,255,0.4)" font-size="8" font-family="system-ui">Kanban Board</text>
               <rect x="0" y="10" width="50" height="12" rx="2" fill="#68bfd1" opacity="0.4"/>
               <text x="25" y="19" fill="white" font-size="6" text-anchor="middle" font-family="system-ui">TO DO</text>
               <rect x="55" y="10" width="50" height="12" rx="2" fill="#68bfd1" opacity="0.6"/>
               <text x="80" y="19" fill="white" font-size="6" text-anchor="middle" font-family="system-ui">DOING</text>
               <rect x="110" y="10" width="50" height="12" rx="2" fill="#68bfd1" opacity="0.8"/>
               <text x="135" y="19" fill="white" font-size="6" text-anchor="middle" font-family="system-ui">DONE</text>

               <!-- Cards -->
               <rect x="0" y="26" width="50" height="8" rx="1" fill="rgba(104,191,209,0.3)"/>
               <rect x="0" y="36" width="50" height="8" rx="1" fill="rgba(104,191,209,0.3)"/>
               <rect x="55" y="26" width="50" height="8" rx="1" fill="rgba(104,191,209,0.4)"/>
               <rect x="110" y="26" width="50" height="8" rx="1" fill="rgba(104,191,209,0.5)"/>
            </g>

            <!-- Legend -->
            <g transform="translate(620, 295)">
               <rect x="0" y="0" width="8" height="8" rx="1" fill="#86efac" opacity="0.8"/>
               <text x="14" y="7" fill="rgba(255,255,255,0.5)" font-size="7" font-family="system-ui">Roadmap</text>
               <rect x="60" y="0" width="8" height="8" rx="1" fill="#fcd34d" opacity="0.8"/>
               <text x="74" y="7" fill="rgba(255,255,255,0.5)" font-size="7" font-family="system-ui">Active</text>
               <rect x="110" y="0" width="8" height="8" rx="1" fill="#86efac" opacity="0.6"/>
               <text x="124" y="7" fill="rgba(255,255,255,0.5)" font-size="7" font-family="system-ui">Milestone</text>
               <rect x="180" y="0" width="8" height="8" rx="1" fill="#fca5a5" opacity="0.6"/>
               <text x="194" y="7" fill="rgba(255,255,255,0.5)" font-size="7" font-family="system-ui">Risk Area</text>
            </g>
         </svg>
      </div>

      <div class="product-details">
         <div class="product-info">
            <div class="product-icon">
               <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                  <rect x="3" y="3" width="18" height="18" rx="2"/>
                  <path d="M3 9h18M9 3v18"/>
               </svg>
            </div>
            <hgroup>
               <h2 id="vista-opus-heading">Vista Opus</h2>
            </hgroup>
            <p class="product-tagline">See the whole picture.</p>
            <p>An end-to-end, inception-to-delivery Product & Project Management tool centered on a User Story Map. Vista Opus keeps Product Managers focused on beneficiaries — who the product is for and what they actually need.</p>
            <p class="cta"><a href="https://vista-opus.com" target="_blank" rel="noopener">Visit Vista Opus</a></p>
         </div>

         <div class="product-features">
            <h3>Key Features</h3>
            <ul>
               <li>User Story Map with scope, status & timeline</li>
               <li>Beneficiary Activity Flows (User Flow Diagrams)</li>
               <li>Use Case Diagrams & SWOT Charts</li>
               <li>Kanban Board & Planning Poker Tables</li>
               <li>Gamified progress views for stakeholders</li>
               <li>Release cutoff planning & tracking</li>
            </ul>
         </div>
      </div>
   </section>

   {{-- ═══════════════════════════════════════════
      LIBRI RES
      ═══════════════════════════════════════════ --}}
   <section id="libri-res" class="product-blurb reveal" aria-labelledby="libri-res-heading">
      <div class="product-showcase">
         <svg viewBox="0 0 900 340" preserveAspectRatio="xMidYMid meet">
            <defs>
               <linearGradient id="lr-bg" x1="0" y1="0" x2="0" y2="1">
                  <stop offset="0%" stop-color="#0a1628"/>
                  <stop offset="100%" stop-color="#060e1a"/>
               </linearGradient>
            </defs>
            <rect width="900" height="340" fill="url(#lr-bg)"/>

            <!-- Bar Chart -->
            <g transform="translate(120, 60)">
               <!-- Y axis -->
               <line x1="0" y1="0" x2="0" y2="200" stroke="rgba(52,211,153,0.2)" stroke-width="1"/>
               <!-- X axis -->
               <line x1="0" y1="200" x2="500" y2="200" stroke="rgba(52,211,153,0.2)" stroke-width="1"/>

               <!-- Grid lines -->
               <line x1="0" y1="50" x2="500" y2="50" stroke="rgba(52,211,153,0.08)" stroke-width="1"/>
               <line x1="0" y1="100" x2="500" y2="100" stroke="rgba(52,211,153,0.08)" stroke-width="1"/>
               <line x1="0" y1="150" x2="500" y2="150" stroke="rgba(52,211,153,0.08)" stroke-width="1"/>

               <!-- Bars with income/expense pairs -->
               <rect x="30" y="60" width="40" height="140" rx="4" fill="#34d399" opacity="0.8"/>
               <rect x="75" y="120" width="40" height="80" rx="4" fill="#34d399" opacity="0.4"/>

               <rect x="140" y="40" width="40" height="160" rx="4" fill="#34d399" opacity="0.85"/>
               <rect x="185" y="100" width="40" height="100" rx="4" fill="#34d399" opacity="0.4"/>

               <rect x="250" y="80" width="40" height="120" rx="4" fill="#34d399" opacity="0.75"/>
               <rect x="295" y="130" width="40" height="70" rx="4" fill="#34d399" opacity="0.4"/>

               <rect x="360" y="50" width="40" height="150" rx="4" fill="#34d399" opacity="0.9"/>
               <rect x="405" y="90" width="40" height="110" rx="4" fill="#34d399" opacity="0.4"/>

               <!-- Line chart overlay -->
               <path d="M50 70 L160 50 L270 85 L380 55 L450 40" fill="none" stroke="#34d399" stroke-width="2" opacity="0.6"/>
               <circle cx="50" cy="70" r="4" fill="#34d399" opacity="0.8"/>
               <circle cx="160" cy="50" r="4" fill="#34d399" opacity="0.8"/>
               <circle cx="270" cy="85" r="4" fill="#34d399" opacity="0.8"/>
               <circle cx="380" cy="55" r="4" fill="#34d399" opacity="0.8"/>
               <circle cx="450" cy="40" r="4" fill="#34d399" opacity="0.8"/>

               <!-- X axis labels -->
               <text x="65" y="220" fill="rgba(255,255,255,0.4)" font-size="10" text-anchor="middle" font-family="system-ui">Jan</text>
               <text x="175" y="220" fill="rgba(255,255,255,0.4)" font-size="10" text-anchor="middle" font-family="system-ui">Feb</text>
               <text x="285" y="220" fill="rgba(255,255,255,0.4)" font-size="10" text-anchor="middle" font-family="system-ui">Mar</text>
               <text x="395" y="220" fill="rgba(255,255,255,0.4)" font-size="10" text-anchor="middle" font-family="system-ui">Apr</text>
            </g>

            <!-- Plugin badges -->
            <g transform="translate(680, 80)">
               <rect x="0" y="0" width="120" height="36" rx="8" fill="rgba(52,211,153,0.15)" stroke="rgba(52,211,153,0.3)" stroke-width="1"/>
               <text x="60" y="23" fill="#34d399" font-size="11" text-anchor="middle" font-family="system-ui" font-weight="500">Invoicing</text>

               <rect x="0" y="50" width="120" height="36" rx="8" fill="rgba(52,211,153,0.12)" stroke="rgba(52,211,153,0.25)" stroke-width="1"/>
               <text x="60" y="73" fill="#34d399" font-size="11" text-anchor="middle" font-family="system-ui" font-weight="500">Mileage</text>
            </g>

            <!-- Summary cards -->
            <g transform="translate(680, 200)">
               <rect x="0" y="0" width="140" height="50" rx="8" fill="rgba(52,211,153,0.08)" stroke="rgba(52,211,153,0.15)" stroke-width="1"/>
               <text x="15" y="22" fill="rgba(255,255,255,0.5)" font-size="9" font-family="system-ui">Income</text>
               <text x="15" y="40" fill="#34d399" font-size="14" font-family="system-ui" font-weight="600">$24,580</text>

               <rect x="0" y="60" width="140" height="50" rx="8" fill="rgba(52,211,153,0.08)" stroke="rgba(52,211,153,0.15)" stroke-width="1"/>
               <text x="15" y="82" fill="rgba(255,255,255,0.5)" font-size="9" font-family="system-ui">Expenses</text>
               <text x="15" y="100" fill="#f87171" font-size="14" font-family="system-ui" font-weight="600">$12,340</text>
            </g>
         </svg>
      </div>

      <div class="product-details">
         <div class="product-info">
            <div class="product-icon">
               <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                  <line x1="12" y1="1" x2="12" y2="23"/>
                  <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/>
               </svg>
            </div>
            <hgroup>
               <h2 id="libri-res-heading">Libri Res</h2>
            </hgroup>
            <p class="product-tagline">Books, simplified.</p>
            <p>A simplified bookkeeping tool with a better UX than industry-standard solutions. Extensible through modular plugins like mileage tracking and invoicing — giving you exactly what you need, nothing more.</p>
            <p class="cta"><a href="https://libri-res.com" target="_blank" rel="noopener">Visit Libri Res</a></p>
         </div>

         <div class="product-features">
            <h3>Key Features</h3>
            <ul>
               <li>Intuitive bookkeeping interface</li>
               <li>Plugin ecosystem (mileage, invoicing, etc.)</li>
               <li>Human-friendly visualizations</li>
               <li>Not enterprise-bloated — focused & clean</li>
               <li>Modular architecture, pay for what you use</li>
               <li>Real-time financial dashboards</li>
            </ul>
         </div>
      </div>
   </section>

   {{-- ═══════════════════════════════════════════
      DIARIUM SALUS
      ═══════════════════════════════════════════ --}}
   <section id="diarium-salus" class="product-blurb reveal" aria-labelledby="diarium-salus-heading">
      <div class="product-showcase">
         <svg viewBox="0 0 900 340" preserveAspectRatio="xMidYMid meet">
            <defs>
               <linearGradient id="ds-bg" x1="0" y1="0" x2="0" y2="1">
                  <stop offset="0%" stop-color="#0a1628"/>
                  <stop offset="100%" stop-color="#060e1a"/>
               </linearGradient>
            </defs>
            <rect width="900" height="340" fill="url(#ds-bg)"/>

            <!-- Heartbeat line -->
            <path d="M0 170 L150 170 L180 170 L200 100 L220 220 L240 140 L260 180 L280 170 L400 170 L430 170 L450 90 L470 230 L490 130 L510 190 L530 170 L700 170 L730 170 L750 110 L770 210 L790 150 L810 170 L900 170"
                  fill="none" stroke="#f472b6" stroke-width="2" opacity="0.4"/>

            <!-- Circular progress indicators -->
            <g transform="translate(200, 120)">
               <!-- Calories ring -->
               <circle cx="0" cy="0" r="45" fill="none" stroke="rgba(244,114,182,0.15)" stroke-width="8"/>
               <circle cx="0" cy="0" r="45" fill="none" stroke="#f472b6" stroke-width="8" stroke-dasharray="207 283" stroke-linecap="round" transform="rotate(-90)"/>
               <text x="0" y="-5" fill="#f472b6" font-size="16" text-anchor="middle" font-family="system-ui" font-weight="600">73%</text>
               <text x="0" y="12" fill="rgba(255,255,255,0.5)" font-size="9" text-anchor="middle" font-family="system-ui">Calories</text>
            </g>

            <g transform="translate(320, 90)">
               <!-- Steps ring -->
               <circle cx="0" cy="0" r="32" fill="none" stroke="rgba(104,191,209,0.15)" stroke-width="6"/>
               <circle cx="0" cy="0" r="32" fill="none" stroke="#68bfd1" stroke-width="6" stroke-dasharray="165 201" stroke-linecap="round" transform="rotate(-90)"/>
               <text x="0" y="-2" fill="#68bfd1" font-size="12" text-anchor="middle" font-family="system-ui" font-weight="600">8.2k</text>
               <text x="0" y="12" fill="rgba(255,255,255,0.5)" font-size="8" text-anchor="middle" font-family="system-ui">Steps</text>
            </g>

            <!-- Weekly progress -->
            <g transform="translate(580, 70)">
               <text x="0" y="0" fill="rgba(255,255,255,0.5)" font-size="10" font-family="system-ui">This Week</text>
               <g transform="translate(0, 15)">
                  <rect x="0" y="0" width="20" height="20" rx="4" fill="#f472b6" opacity="0.9"/>
                  <rect x="26" y="0" width="20" height="20" rx="4" fill="#f472b6" opacity="0.8"/>
                  <rect x="52" y="0" width="20" height="20" rx="4" fill="#f472b6" opacity="0.7"/>
                  <rect x="78" y="0" width="20" height="20" rx="4" fill="#f472b6" opacity="0.6"/>
                  <rect x="104" y="0" width="20" height="20" rx="4" fill="#f472b6" opacity="0.5"/>
                  <rect x="130" y="0" width="20" height="20" rx="4" fill="rgba(244,114,182,0.2)"/>
                  <rect x="156" y="0" width="20" height="20" rx="4" fill="rgba(244,114,182,0.2)"/>
               </g>
               <g transform="translate(0, 42)">
                  <text x="10" y="0" fill="rgba(255,255,255,0.3)" font-size="8" text-anchor="middle" font-family="system-ui">M</text>
                  <text x="36" y="0" fill="rgba(255,255,255,0.3)" font-size="8" text-anchor="middle" font-family="system-ui">T</text>
                  <text x="62" y="0" fill="rgba(255,255,255,0.3)" font-size="8" text-anchor="middle" font-family="system-ui">W</text>
                  <text x="88" y="0" fill="rgba(255,255,255,0.3)" font-size="8" text-anchor="middle" font-family="system-ui">T</text>
                  <text x="114" y="0" fill="rgba(255,255,255,0.3)" font-size="8" text-anchor="middle" font-family="system-ui">F</text>
                  <text x="140" y="0" fill="rgba(255,255,255,0.3)" font-size="8" text-anchor="middle" font-family="system-ui">S</text>
                  <text x="166" y="0" fill="rgba(255,255,255,0.3)" font-size="8" text-anchor="middle" font-family="system-ui">S</text>
               </g>
            </g>

            <!-- Workout badges -->
            <g transform="translate(580, 145)">
               <rect x="0" y="0" width="120" height="36" rx="8" fill="rgba(244,114,182,0.12)" stroke="rgba(244,114,182,0.25)" stroke-width="1"/>
               <text x="60" y="23" fill="#f472b6" font-size="11" text-anchor="middle" font-family="system-ui" font-weight="500">Upper Body</text>

               <rect x="0" y="50" width="120" height="36" rx="8" fill="rgba(244,114,182,0.08)" stroke="rgba(244,114,182,0.2)" stroke-width="1"/>
               <text x="60" y="73" fill="#f472b6" font-size="11" text-anchor="middle" font-family="system-ui" font-weight="500">2,100 kcal</text>
            </g>

            <!-- Mini chart -->
            <g transform="translate(580, 250)">
               <rect x="0" y="0" width="180" height="60" rx="8" fill="rgba(244,114,182,0.05)" stroke="rgba(244,114,182,0.1)" stroke-width="1"/>
               <path d="M15 45 L40 35 L65 40 L90 25 L115 30 L140 15 L165 20" fill="none" stroke="#f472b6" stroke-width="1.5" opacity="0.6"/>
               <text x="90" y="55" fill="rgba(255,255,255,0.4)" font-size="8" text-anchor="middle" font-family="system-ui">7-day trend</text>
            </g>
         </svg>
      </div>

      <div class="product-details">
         <div class="product-info">
            <div class="product-icon">
               <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
               </svg>
            </div>
            <hgroup>
               <h2 id="diarium-salus-heading">Diarium Salus</h2>
            </hgroup>
            <p class="product-tagline">Your health, your way.</p>
            <p>A personal health, diet, and workout tracker with premade plans, detailed analytics, and beautiful visual dashboards. Unlike typical checklist tools, Diarium Salus guides you through your journey with presets and insights.</p>
            <p class="cta"><a href="https://diarium-salus.com" target="_blank" rel="noopener">Visit Diarium Salus</a></p>
         </div>

         <div class="product-features">
            <h3>Key Features</h3>
            <ul>
               <li>Premade workout & diet plans</li>
               <li>Detailed health analytics & trends</li>
               <li>Visual-first dashboard design</li>
               <li>Progress tracking & milestones</li>
               <li>Customizable goals & presets</li>
               <li>Guided training programs</li>
            </ul>
         </div>
      </div>
   </section>

   {{-- ═══════════════════════════════════════════
      CUSTOM CTA SECTION
      ═══════════════════════════════════════════ --}}
   <section aria-labelledby="custom-cta-label" class="reveal">
      <div class="cta-container">
         <hgroup>
            <h2 id="custom-cta-label">Need Something Custom?</h2>
         </hgroup>
         <p>Our products solve common problems — but if you need tailored solutions, our professional services team can help.</p>
         <p class="cta"><a href="/services">Explore Services</a></p>
      </div>
   </section>

</x-layouts.webpage>
