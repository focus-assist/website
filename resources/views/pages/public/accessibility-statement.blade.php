<x-layouts.webpage>
   <x-slot:pageTitle>Accessibility Statement - Focus Assist LLC</x-slot:pageTitle>
   <x-slot:pageDescription></x-slot:pageDescription>
   <x-slot:metaData></x-slot:metaData>
   <x-slot:pageScripts></x-slot:pageScripts>
   <x-slot:pageStyles>
      <!-- Page-specific styles -->
      <style id="accessibility-statement-styles">
         /* ═══════════════════════════════════════════
            ACCESSIBILITY STATEMENT ARTICLE
            ═══════════════════════════════════════════ */
         article[aria-describedby="accessibility-statement-label"] {
            padding: 140px var(--gutter) 80px;
            max-width: 900px;
            margin: 0 auto;

            /* Page Title */
            & > hgroup {
               margin-bottom: 48px;
               padding-bottom: 32px;
               border-bottom: 1px solid rgba(255, 255, 255, .08);

               & > h1 {
                  font-family: var(--font-d);
                  font-size: clamp(32px, 5vw, 52px);
                  font-weight: 700;
                  letter-spacing: -.02em;
                  line-height: 1.1;
                  color: var(--white);
               }
            }

            /* Content Sections */
            & > div {
               margin-bottom: 48px;

               &:last-child {
                  margin-bottom: 0;
               }

               /* Section Headings */
               & > h2 {
                  font-family: var(--font-d);
                  font-size: clamp(22px, 3vw, 28px);
                  font-weight: 600;
                  letter-spacing: -.01em;
                  color: var(--teal);
                  margin-bottom: 20px;
               }

               /* Paragraphs */
               & > p {
                  font-size: 1rem;
                  color: var(--g200);
                  line-height: 1.8;
                  margin-bottom: 16px;

                  &:last-child {
                     margin-bottom: 0;
                  }
               }

               /* Links */
               & a {
                  color: var(--teal);
                  text-decoration: underline;
                  text-decoration-color: rgba(104, 191, 209, .4);
                  text-underline-offset: 3px;
                  transition: text-decoration-color .2s;

                  &:hover {
                     text-decoration-color: var(--teal);
                  }
               }

               /* Ordered Lists (Main Principles) */
               & > ol {
                  list-style: none;
                  counter-reset: principles;
                  display: flex;
                  flex-direction: column;
                  gap: 32px;

                  & > li {
                     counter-increment: principles;
                     position: relative;
                     padding-left: 48px;

                     &::before {
                        content: counter(principles) ".";
                        position: absolute;
                        left: 0;
                        top: 0;
                        font-family: var(--font-d);
                        font-size: 1.5rem;
                        font-weight: 700;
                        color: var(--teal);
                     }

                     /* Principle Title */
                     & > span {
                        display: block;
                        font-family: var(--font-d);
                        font-size: 1.2rem;
                        font-weight: 600;
                        color: var(--white);
                        margin-bottom: 16px;
                     }

                     /* Nested Unordered Lists */
                     & > ul {
                        list-style: none;
                        display: flex;
                        flex-direction: column;
                        gap: 14px;

                        & > li {
                           position: relative;
                           padding-left: 20px;
                           font-size: .95rem;
                           color: var(--g200);
                           line-height: 1.75;

                           &::before {
                              content: "";
                              position: absolute;
                              left: 0;
                              top: 10px;
                              width: 6px;
                              height: 6px;
                              border-radius: 50%;
                              background: var(--g500);
                           }

                           /* Emphasis in list items */
                           & > em:first-child {
                              color: var(--white);
                              font-style: normal;
                              font-weight: 500;
                           }

                           /* Nested span for multi-line items */
                           & > span {
                              display: block;

                              & > em:first-child {
                                 color: var(--white);
                                 font-style: normal;
                                 font-weight: 500;
                              }
                           }

                           /* Deeply nested lists */
                           & > ul, & > ol {
                              margin-top: 12px;
                              margin-left: 4px;
                              display: flex;
                              flex-direction: column;
                              gap: 8px;

                              & > li {
                                 font-size: .9rem;
                                 padding-left: 18px;

                                 &::before {
                                    width: 5px;
                                    height: 5px;
                                    top: 9px;
                                    background: var(--g500);
                                 }

                                 & > em:first-child {
                                    color: var(--g100);
                                    font-style: normal;
                                    font-weight: 500;
                                 }
                              }
                           }

                           /* Nested ordered lists */
                           & > ol {
                              list-style: none;
                              counter-reset: subitems;

                              & > li {
                                 counter-increment: subitems;

                                 &::before {
                                    content: counter(subitems) ".";
                                    position: absolute;
                                    left: 0;
                                    top: 0;
                                    width: auto;
                                    height: auto;
                                    border-radius: 0;
                                    background: none;
                                    font-size: .85rem;
                                    font-weight: 600;
                                    color: var(--g400);
                                 }
                              }
                           }
                        }
                     }
                  }
               }

               /* Unordered Lists (Feedback section) */
               & > ul {
                  list-style: none;
                  display: flex;
                  flex-direction: column;
                  gap: 12px;
                  margin-bottom: 20px;

                  & > li {
                     position: relative;
                     padding-left: 24px;
                     font-size: .95rem;
                     color: var(--g200);
                     line-height: 1.75;

                     &::before {
                        content: "";
                        position: absolute;
                        left: 0;
                        top: 10px;
                        width: 8px;
                        height: 8px;
                        border-radius: 50%;
                        background: linear-gradient(135deg, var(--teal), var(--blue-bright));
                     }

                     & > em:first-child {
                        color: var(--white);
                        font-style: normal;
                        font-weight: 500;
                     }
                  }
               }

               /* Inline Code */
               & code.html {
                  font-family: var(--font-m);
                  font-size: .85em;
                  padding: 2px 7px;
                  border-radius: 5px;
                  background: rgba(104, 191, 209, .1);
                  color: var(--teal-light);
                  border: 1px solid rgba(104, 191, 209, .2);
               }

               /* Time element */
               & time {
                  color: var(--g400);
               }
            }
         }

         /* ═══════════════════════════════════════════
            RESPONSIVE
            ═══════════════════════════════════════════ */
         @media (max-width: 768px) {
            article[aria-describedby="accessibility-statement-label"] {
               padding: 100px var(--gutter) 60px;

               & > hgroup {
                  margin-bottom: 32px;
                  padding-bottom: 24px;
               }

               & > div {
                  margin-bottom: 36px;

                  & > ol > li {
                     padding-left: 36px;

                     &::before {
                        font-size: 1.25rem;
                     }

                     & > span {
                        font-size: 1.1rem;
                     }
                  }
               }
            }
         }
      </style>
   </x-slot:pageStyles>

   <article aria-describedby="accessibility-statement-label">
      <hgroup id="accessibility-statement-label">
         <h1><span>Accessibility Statement</span></h1>
      </hgroup>

      <div aria-labelledby="our-commitment-to-universal-access">
         <h2 id="our-commitment-to-universal-access">Our Commitment to Universal Access</h2>
         <p>We believe the internet must be accessible to everyone, without exception. Our approach, which we call Accessibility-First Design, prioritizes equal access to information above all else. Every piece of data on our site is structured to be available and understandable, regardless of how you access it—be it with a screen reader, a keyboard, a mobile phone, a desktop, a game console, or any other technology.</p>
         <p>We do not create separate versions of our site for different devices. Instead, we build one semantically perfect structure using HTML and ARIA that remains constant. Styling adapts to your device and preferences, but the core content and functionality do not.</p>
         <p>If you encounter any barrier to access, or find any feature frustrating or confusing, we urgently want to know. Please contact us. Your feedback is essential—whether we've gone overboard, haven't done enough, or were entirely wrong. We also welcome you to share what works well for you and if our methods improve your experience compared to standard practices.</p>
      </div>

      <div aria-labelledby="our-accessibility-first-design-principles">
         <h2 id="our-accessibility-first-design-principles">Our Accessibility-First Design Principles</h2>
         <p>This is the technical blueprint of our commitment. We follow these core tenets in every aspect of our design and development.</p>

         <ol>
            <li>
               <span>Accessibility Before Style</span>
               <ul>
                  <li><em>Semantic HTML & ARIA are Sovereign:</em> Our page structure and meaning are built with clean, standard HTML and ARIA attributes. Visual styling is always a secondary layer that never compromises or alters this foundational accessibility.</li>
                  <li><em>No <code class="html">&lt;div&gt;</code> Soup:</em> We avoid meaningless HTML containers. Every tag is chosen for its semantic purpose (like <code class="html">&lt;article&gt;</code>, <code class="html">&lt;nav&gt;</code>, <code class="html">&lt;button&gt;</code>), not as a hook for styling, ensuring clarity for assistive technologies and search engines.</li>
                  <li><em>One Source of Truth:</em> The HTML for a page is identical for all users and devices. There is no separate mobile, desktop, or console HTML. Interactive elements, like collapsible menus, use native HTML (e.g., <code class="html">&lt;details&gt;</code>/<code class="html">&lt;summary&gt;</code>) to function fully without any CSS or JavaScript.</li>
                  <li><em>Built-In SEO & Clarity:</em> We implement comprehensive page metadata and reinforce on-page structures with appropriate in-line metadata (like <a href="http://Schema.org" target="_blank" rel="noopener">Schema.org</a>), making our content easily discoverable and understandable.</li>
                  <li><em>Reader Control:</em> You should be able to choose your preferred font to support needs like dyslexia. Our styling does not prevent browser or extension-based font overrides.</li>
                  <li>
                     <span><em>Separation of Concerns:</em></span>
                     <ul>
                        <li><em>Icons</em> are implemented using CSS and are always accompanied by descriptive text for screen readers.</li>
                        <li><em>Decorative images</em> that are not content or product assets are implemented as CSS background images, keeping HTML clean for assistive tools.</li>
                     </ul>
                  </li>
                  <li>
                     <span><em>Meaningful Code:</em></span>
                     <ul>
                        <li><em>Classes</em> are used to "classify" data and structure, not dictate style. We avoid CSS frameworks that impose their own markup.</li>
                        <li><em>IDs</em> are human-comprehensible (e.g., "main-navigation"), not random strings, for clarity in code and URL fragments.</li>
                     </ul>
                  </li>
                  <li><em>Comprehensive Theming:</em> We provide multiple theme options, including "light", "dark", "high-contrast", "low-light reading", and "greyscale". Themes are built with CSS variables and degrade gracefully—if a theme fails to load, core styling remains functional.</li>
                  <li><em>Performance Aware:</em> Shared styles and scripts are in external files for caching efficiency. Page-specific styles and scripts are embedded to minimize requests and render-blocking for that page.</li>
               </ul>
            </li>
            <li>
               <span>Prioritized Visual Styling</span>
               <ul>
                  <li><em>Consistent Core UX:</em> Every device can access and perform all the same actions. The experience is consistent; only the presentation layer changes.</li>
                  <li>
                     <span><em>Styling Priority:</em> Pages will <em>look</em> a certain way based on what devices <em>access</em> our site:</span>
                     <ol>
                        <li>Mobile devices</li>
                        <li>Desktop computers</li>
                        <li>TVs and game consoles</li>
                        <li>Printers (targeting 8.5” x 11” pages)</li>
                     </ol>
                  </li>
               </ul>
            </li>
         </ol>
      </div>

      <div aria-labelledby="your-feedback-drives-improvement">
         <h2 id="your-feedback-drives-improvement">Your Feedback Drives Improvement</h2>
         <p>Our work is never done. Accessibility is a journey of learning and adaptation.</p>
         <ul>
            <li><em>Report a Problem:</em> Encountered a barrier? Please tell us. We will acknowledge your report, investigate, and work toward a solution.</li>
            <li><em>Share Your Experience:</em> Do you prefer our approach? Did we get something right? Your positive feedback helps us validate our methods.</li>
            <li><em>Suggest an Enhancement:</em> Have an idea for a feature, theme, or improvement that would make our site more accessible to you? We are eager to listen.</li>
         </ul>
         <p><a href="/contact?subject=accessibility">Contact Us</a> for Accessibility Feedback: <a href="mailto:accessibility@focus-assist.us">accessibility@focus-assist.us</a></p>

         <p>We are committed to responding to all accessibility feedback in a timely manner and to making the necessary changes to ensure our site is a model of inclusive design.</p>
         <p>Last Updated: <time datetime="2026-02-04">4 February 2026</time></p>
      </div>
   </article>
</x-layouts.webpage>