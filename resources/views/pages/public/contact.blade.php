<x-layouts.webpage>
   <x-slot:pageTitle>Contact Us - Focus Assist LLC</x-slot:pageTitle>
   <x-slot:pageDescription>Get in touch with Focus Assist for professional facilitation services and software solutions.</x-slot:pageDescription>
   <x-slot:metaData></x-slot:metaData>
   <x-slot:pageScripts>
      <script>
         // Simple math CAPTCHA refresh
         function refreshCaptcha() {
            fetch('{{ route("public.contact.captcha") }}')
               .then(response => response.json())
               .then(data => {
                  document.getElementById('captcha-question').textContent = data.question;
                  document.getElementById('captcha_token').value = data.token;
                  document.getElementById('captcha_answer').value = '';
               });
         }
      </script>
   </x-slot:pageScripts>
   <x-slot:pageStyles>
      <style id="contact-page-styles">
         /* ═══════════════════════════════════════════
            CONTACT PAGE HERO
            ═══════════════════════════════════════════ */
         section[aria-describedby="contact-hero-hgroup"] {
            padding: 140px var(--gutter) 40px;
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
               }

               & > h2 {
                  font-family: var(--font-d);
                  font-size: clamp(42px, 5.4vw, 72px);
                  font-weight: 700;
                  letter-spacing: -.025em;
                  line-height: 1;
                  color: var(--white);

                  & > span.keyword {
                     color: var(--teal);
                  }
               }
            }

            & > p.tagline {
               font-size: 1.05rem;
               color: var(--g300);
               line-height: 1.7;
               max-width: 600px;
               margin: 0 auto;
            }
         }

         /* ═══════════════════════════════════════════
            CONTACT CONTENT SECTION
            ═══════════════════════════════════════════ */
         section[aria-labelledby="contact-content-label"] {
            padding: 40px var(--gutter) 100px;
            display: grid;
            grid-template-columns: 1fr 1.2fr;
            gap: 28px;
            max-width: 1200px;
            margin: 0 auto;

            /* ── Contact Info Column ── */
            & > aside {
               display: flex;
               flex-direction: column;
               gap: 20px;

               & > div {
                  background: rgba(255, 255, 255, .03);
                  border: 1px solid rgba(255, 255, 255, .07);
                  border-radius: 20px;
                  padding: 32px;
               }

               /* Contact Details Card */
               & > div[aria-labelledby="contact-details-label"] {
                  & > h3 {
                     position: absolute;
                     left: -10000px;
                  }

                  & > ul {
                     display: flex;
                     flex-direction: column;
                     gap: 28px;

                     & > li {
                        display: grid;
                        grid-template-columns: 44px 1fr;
                        grid-template-rows: auto auto;
                        column-gap: 16px;
                        align-items: center;

                        &::before {
                           content: "";
                           grid-column: 1;
                           grid-row: 1 / span 2;
                           width: 44px;
                           height: 44px;
                           border-radius: 12px;
                           background: var(--icon) center / 20px 20px no-repeat,
                                       rgba(255, 255, 255, .05);
                           border: 1px solid rgba(255, 255, 255, .08);
                        }

                        &[data-type="location"]::before { --icon: var(--icon-location); }
                        &[data-type="email"]::before { --icon: var(--icon-mail); }
                        &[data-type="web"]::before { --icon: var(--icon-globe); }

                        & > span:first-of-type {
                           grid-column: 2;
                           grid-row: 1;
                           font-weight: 600;
                           font-size: .95rem;
                           color: var(--white);
                        }

                        & > span:last-of-type,
                        & > a {
                           grid-column: 2;
                           grid-row: 2;
                           font-size: .88rem;
                           color: var(--g400);
                        }

                        & > a {
                           color: var(--teal);
                           text-decoration: none;
                           transition: color .2s;

                           &:hover {
                              color: var(--teal-light);
                           }
                        }
                     }
                  }
               }

               /* What to Expect Card */
               & > div[aria-labelledby="what-to-expect-label"] {
                  & > h3 {
                     font-family: var(--font-d);
                     font-size: 1.15rem;
                     font-weight: 600;
                     color: var(--white);
                     margin-bottom: 20px;
                  }

                  & > ul {
                     display: flex;
                     flex-direction: column;
                     gap: 14px;

                     & > li {
                        display: flex;
                        align-items: center;
                        gap: 12px;
                        font-size: .9rem;
                        color: var(--g300);

                        &::before {
                           content: "";
                           width: 18px;
                           height: 18px;
                           flex-shrink: 0;
                           background: var(--icon-check-circle) center / contain no-repeat;
                           opacity: .7;
                        }
                     }
                  }
               }
            }

            /* ── Contact Form Column ── */
            & > form {
               background: rgba(255, 255, 255, .03);
               border: 1px solid rgba(255, 255, 255, .07);
               border-radius: 20px;
               padding: 36px;

               & > h3 {
                  font-family: var(--font-d);
                  font-size: 1.5rem;
                  font-weight: 600;
                  color: var(--white);
                  margin-bottom: 28px;
               }

               & > div.form-row {
                  display: grid;
                  grid-template-columns: 1fr 1fr;
                  gap: 20px;
                  margin-bottom: 20px;

                  &.full-width {
                     grid-template-columns: 1fr;
                  }
               }

               & label {
                  display: block;
                  font-size: .85rem;
                  font-weight: 500;
                  color: var(--g300);
                  margin-bottom: 8px;
               }

               & input[type="text"],
               & input[type="email"],
               & select,
               & textarea {
                  width: 100%;
                  padding: 14px 16px;
                  font-family: var(--font-b);
                  font-size: .92rem;
                  color: var(--white);
                  background: rgba(255, 255, 255, .04);
                  border: 1px solid rgba(255, 255, 255, .1);
                  border-radius: 12px;
                  outline: none;
                  transition: border-color .2s, background .2s;

                  &::placeholder {
                     color: var(--g500);
                  }

                  &:focus {
                     border-color: var(--teal);
                     background: rgba(255, 255, 255, .06);
                  }
               }

               & select {
                  appearance: none;
                  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%237088a8' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpolyline points='6 9 12 15 18 9'/%3E%3C/svg%3E");
                  background-repeat: no-repeat;
                  background-position: right 14px center;
                  background-size: 18px;
                  padding-right: 44px;
                  cursor: pointer;

                  & option {
                     background: var(--navy);
                     color: var(--white);
                  }
               }

               & textarea {
                  min-height: 140px;
                  resize: vertical;
               }

               /* CAPTCHA Section */
               & > div.captcha-row {
                  display: flex;
                  align-items: center;
                  gap: 16px;
                  margin-bottom: 24px;
                  padding: 16px;
                  background: rgba(255, 255, 255, .02);
                  border: 1px solid rgba(255, 255, 255, .06);
                  border-radius: 12px;

                  & > span.captcha-question {
                     font-size: .9rem;
                     color: var(--g300);
                     white-space: nowrap;
                  }

                  & > input {
                     width: 80px;
                     padding: 10px 14px;
                     font-family: var(--font-m);
                     font-size: .9rem;
                     text-align: center;
                  }

                  & > button.refresh-captcha {
                     padding: 8px;
                     background: transparent;
                     border: 1px solid rgba(255, 255, 255, .1);
                     border-radius: 8px;
                     color: var(--g400);
                     cursor: pointer;
                     transition: border-color .2s, color .2s;

                     &:hover {
                        border-color: var(--teal);
                        color: var(--teal);
                     }

                     & > svg {
                        width: 18px;
                        height: 18px;
                        display: block;
                     }
                  }
               }

               & > button[type="submit"] {
                  width: 100%;
                  display: inline-flex;
                  align-items: center;
                  justify-content: center;
                  gap: 10px;
                  padding: 16px 32px;
                  border-radius: 12px;
                  font-family: var(--font-b);
                  font-weight: 600;
                  font-size: .95rem;
                  background: linear-gradient(135deg, var(--teal), var(--blue-bright));
                  color: var(--white);
                  border: none;
                  cursor: pointer;
                  box-shadow: 0 4px 20px rgba(104, 191, 209, .3);
                  transition: transform .25s cubic-bezier(.16, 1, .3, 1), box-shadow .25s;

                  &:hover {
                     transform: translateY(-2px);
                     box-shadow: 0 8px 32px rgba(104, 191, 209, .4);
                  }

                  & > svg {
                     width: 18px;
                     height: 18px;
                  }
               }

               /* Error Messages */
               & .error-message {
                  color: #f87171;
                  font-size: .82rem;
                  margin-top: 6px;
               }

               /* Success Message */
               & .success-message {
                  padding: 16px;
                  background: rgba(16, 185, 129, .1);
                  border: 1px solid rgba(16, 185, 129, .3);
                  border-radius: 12px;
                  color: #34d399;
                  font-size: .92rem;
                  margin-bottom: 20px;
               }
            }
         }

         /* ═══════════════════════════════════════════
            CUSTOM ICONS
            ═══════════════════════════════════════════ */
         :root {
            --icon-location: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%2368bfd1' stroke-width='1.8' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpath d='M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z'/%3E%3Ccircle cx='12' cy='10' r='3'/%3E%3C/svg%3E");
            --icon-globe: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%2368bfd1' stroke-width='1.8' stroke-linecap='round' stroke-linejoin='round'%3E%3Ccircle cx='12' cy='12' r='10'/%3E%3Cline x1='2' y1='12' x2='22' y2='12'/%3E%3Cpath d='M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z'/%3E%3C/svg%3E");
         }

         /* ═══════════════════════════════════════════
            RESPONSIVE
            ═══════════════════════════════════════════ */
         @media (max-width: 900px) {
            section[aria-labelledby="contact-content-label"] {
               grid-template-columns: 1fr;

               & > aside {
                  order: 2;
               }

               & > form {
                  order: 1;
               }
            }
         }

         @media (max-width: 600px) {
            section[aria-labelledby="contact-content-label"] > form > div.form-row {
               grid-template-columns: 1fr;
            }

            section[aria-labelledby="contact-content-label"] > form > div.captcha-row {
               flex-wrap: wrap;
            }
         }
      </style>
   </x-slot:pageStyles>

   {{-- Hero Section --}}
   <section aria-describedby="contact-hero-hgroup">
      <hgroup id="contact-hero-hgroup">
         <h1>Get In Touch</h1>
         <h2><span>Let's </span><span class="keyword">Talk</span></h2>
      </hgroup>
      <p class="tagline">Have a project in mind, a question about our products, or interested in our professional services? We'd love to hear from you.</p>
   </section>

   {{-- Contact Content --}}
   <section aria-labelledby="contact-content-label">
      <h2 id="contact-content-label" class="sr-only">Contact Information and Form</h2>

      {{-- Left Column: Contact Info --}}
      <aside>
         {{-- Contact Details --}}
         <div aria-labelledby="contact-details-label">
            <h3 id="contact-details-label">Contact Details</h3>
            <ul>
               <li data-type="location">
                  <span>Location</span>
                  <span>Washington State, USA</span>
                  <a href="#" style="grid-row: 3;">Serving clients worldwide</a>
               </li>
               <li data-type="email">
                  <span>Email</span>
                  <a href="mailto:hello@focus-assist.us">hello@focus-assist.us</a>
               </li>
               <li data-type="web">
                  <span>Web</span>
                  <a href="https://focus-assist.us" target="_blank" rel="noopener">focus-assist.us</a>
               </li>
            </ul>
         </div>

         {{-- What to Expect --}}
         <div aria-labelledby="what-to-expect-label">
            <h3 id="what-to-expect-label">What to Expect</h3>
            <ul>
               <li>We respond within 1 business day</li>
               <li>Free initial consultation call</li>
               <li>No commitment required to chat</li>
            </ul>
         </div>
      </aside>

      {{-- Right Column: Contact Form --}}
      <form action="{{ route('public.contact.submit') }}" method="POST" aria-labelledby="contact-form-label">
         @csrf
         <h3 id="contact-form-label">Send Us a Message</h3>

         @if(session('success'))
            <div class="success-message">
               {{ session('success') }}
            </div>
         @endif

         {{-- Name & Email Row --}}
         <div class="form-row">
            <div>
               <label for="full_name">Full Name</label>
               <input type="text" id="full_name" name="full_name" placeholder="Your name" value="{{ old('full_name') }}" required>
               @error('full_name')
                  <p class="error-message">{{ $message }}</p>
               @enderror
            </div>
            <div>
               <label for="email">Email Address</label>
               <input type="email" id="email" name="email" placeholder="you@company.com" value="{{ old('email') }}" required>
               @error('email')
                  <p class="error-message">{{ $message }}</p>
               @enderror
            </div>
         </div>

         {{-- Company & Topic Row --}}
         <div class="form-row">
            <div>
               <label for="company">Company</label>
               <input type="text" id="company" name="company" placeholder="Your company name" value="{{ old('company') }}">
               @error('company')
                  <p class="error-message">{{ $message }}</p>
               @enderror
            </div>
            <div>
               <label for="topic">I'm Interested In</label>
               <select id="topic" name="topic" required>
                  <option value="" disabled {{ old('topic') ? '' : 'selected' }}>Select an option...</option>
                  <optgroup label="Products">
                     <option value="vista-opus" {{ old('topic') == 'vista-opus' ? 'selected' : '' }}>Vista Opus</option>
                     <option value="libri-res" {{ old('topic') == 'libri-res' ? 'selected' : '' }}>Libri Res</option>
                     <option value="diarium-salus" {{ old('topic') == 'diarium-salus' ? 'selected' : '' }}>Diarium Salus</option>
                  </optgroup>
                  <optgroup label="Services">
                     <option value="agile-transformation" {{ old('topic') == 'agile-transformation' ? 'selected' : '' }}>Agile Transformation</option>
                     <option value="agile-coaching" {{ old('topic') == 'agile-coaching' ? 'selected' : '' }}>Agile Coaching</option>
                     <option value="product-management" {{ old('topic') == 'product-management' ? 'selected' : '' }}>Product Management</option>
                     <option value="project-management" {{ old('topic') == 'project-management' ? 'selected' : '' }}>Project Management</option>
                     <option value="scrum-masters" {{ old('topic') == 'scrum-masters' ? 'selected' : '' }}>Scrum Masters</option>
                  </optgroup>
                  <optgroup label="Other">
                     <option value="accessibility" {{ old('topic') == 'accessibility' ? 'selected' : '' }}>Accessibility</option>
                     <option value="general" {{ old('topic') == 'general' ? 'selected' : '' }}>General Inquiry</option>
                     <option value="random" {{ old('topic') == 'random' ? 'selected' : '' }}>Random / Other</option>
                  </optgroup>
               </select>
               @error('topic')
                  <p class="error-message">{{ $message }}</p>
               @enderror
            </div>
         </div>

         {{-- Message Row --}}
         <div class="form-row full-width">
            <div>
               <label for="message">Message</label>
               <textarea id="message" name="message" placeholder="Tell us about your project or question..." required>{{ old('message') }}</textarea>
               @error('message')
                  <p class="error-message">{{ $message }}</p>
               @enderror
            </div>
         </div>

         {{-- CAPTCHA Row --}}
         <div class="captcha-row">
            <span class="captcha-question" id="captcha-question">{{ $captchaQuestion ?? 'What is 3 + 4?' }}</span>
            <input type="hidden" id="captcha_token" name="captcha_token" value="{{ $captchaToken ?? '' }}">
            <input type="text" id="captcha_answer" name="captcha_answer" placeholder="?" required autocomplete="off">
            <button type="button" class="refresh-captcha" onclick="refreshCaptcha()" aria-label="Get new question">
               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="23 4 23 10 17 10"></polyline>
                  <polyline points="1 20 1 14 7 14"></polyline>
                  <path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"></path>
               </svg>
            </button>
            @error('captcha_answer')
               <p class="error-message" style="flex-basis: 100%;">{{ $message }}</p>
            @enderror
         </div>

         {{-- Submit Button --}}
         <button type="submit">
            <span>Send Message</span>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
               <path d="M22 2L11 13M22 2l-7 20-4-9-9-4 20-7z"/>
            </svg>
         </button>
      </form>
   </section>

</x-layouts.webpage>
