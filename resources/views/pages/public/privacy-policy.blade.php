<x-layouts.webpage>
   <x-slot:pageTitle>Privacy Policy - Focus Assist LLC</x-slot:pageTitle>
   <x-slot:pageDescription>Learn how Focus Assist LLC collects, uses, and protects your personal information when you visit our website or use our services.</x-slot:pageDescription>
   <x-slot:metaData></x-slot:metaData>
   <x-slot:pageScripts></x-slot:pageScripts>
   <x-slot:pageStyles>
      <style id="privacy-policy-styles">
         /* ═══════════════════════════════════════════
            PRIVACY POLICY ARTICLE
            ═══════════════════════════════════════════ */
         article[aria-describedby="privacy-policy-label"] {
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

               & > p.effective-date {
                  margin-top: 16px;
                  font-size: .9rem;
                  color: var(--g400);
               }
            }

            /* Content Sections */
            & > section {
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

               /* Subsection Headings */
               & > h3 {
                  font-family: var(--font-d);
                  font-size: 1.1rem;
                  font-weight: 600;
                  color: var(--white);
                  margin-top: 28px;
                  margin-bottom: 14px;
               }

               /* Paragraphs */
               & > p, & > div > p {
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

               /* Unordered Lists */
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

                     & > strong, & > em:first-child {
                        color: var(--white);
                        font-style: normal;
                        font-weight: 500;
                     }
                  }
               }

               /* Definition-style lists */
               & > dl {
                  display: flex;
                  flex-direction: column;
                  gap: 16px;
                  margin-bottom: 20px;

                  & > div {
                     & > dt {
                        font-weight: 600;
                        color: var(--white);
                        font-size: .95rem;
                        margin-bottom: 6px;
                     }

                     & > dd {
                        font-size: .95rem;
                        color: var(--g200);
                        line-height: 1.75;
                        padding-left: 16px;
                        border-left: 2px solid rgba(104, 191, 209, .2);
                     }
                  }
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
            article[aria-describedby="privacy-policy-label"] {
               padding: 100px var(--gutter) 60px;

               & > hgroup {
                  margin-bottom: 32px;
                  padding-bottom: 24px;
               }

               & > section {
                  margin-bottom: 36px;
               }
            }
         }
      </style>
   </x-slot:pageStyles>

   <article aria-describedby="privacy-policy-label">
      <hgroup id="privacy-policy-label">
         <h1><span>Privacy Policy</span></h1>
         <p class="effective-date">Effective Date: <time datetime="2026-02-06">6 February 2026</time></p>
      </hgroup>

      <section aria-labelledby="introduction">
         <h2 id="introduction">Introduction</h2>
         <p>Focus Assist LLC ("we," "our," or "us") is committed to protecting your privacy. This Privacy Policy explains how we collect, use, disclose, and safeguard your information when you visit our website at focus-assist.us (the "Site") or engage with our professional services.</p>
         <p>We believe in transparency and simplicity. We collect only what we need, we don't sell your data, and we don't use invasive tracking technologies. Please read this policy carefully. If you disagree with our practices, please do not use our Site.</p>
      </section>

      <section aria-labelledby="information-we-collect">
         <h2 id="information-we-collect">Information We Collect</h2>

         <h3>Information You Provide Directly</h3>
         <p>When you use our contact form or otherwise communicate with us, we may collect:</p>
         <ul>
            <li><strong>Contact Information:</strong> Your name and email address</li>
            <li><strong>Company Information:</strong> Your company name (optional)</li>
            <li><strong>Inquiry Details:</strong> The topic of your inquiry and your message content</li>
         </ul>

         <h3>Information Collected Automatically</h3>
         <p>When you visit our Site, we automatically collect certain technical information:</p>
         <ul>
            <li><strong>IP Address:</strong> Collected when you submit our contact form, used for spam prevention and security</li>
            <li><strong>Browser Information:</strong> Your user agent string (browser type and version), collected with contact form submissions</li>
            <li><strong>Session Data:</strong> Technical session identifiers necessary for the Site to function</li>
         </ul>

         <h3>Information We Do Not Collect</h3>
         <p>We want to be clear about what we don't do:</p>
         <ul>
            <li>We do not use third-party analytics services (no Google Analytics, Mixpanel, etc.)</li>
            <li>We do not use tracking pixels or advertising beacons</li>
            <li>We do not collect payment information through this Site</li>
            <li>We do not create user accounts or profiles for visitors</li>
            <li>We do not purchase or obtain data about you from third parties</li>
         </ul>
      </section>

      <section aria-labelledby="how-we-use-information">
         <h2 id="how-we-use-information">How We Use Your Information</h2>
         <p>We use the information we collect for the following purposes:</p>
         <ul>
            <li><strong>Respond to Inquiries:</strong> To reply to your questions, requests for information, or service inquiries submitted through our contact form</li>
            <li><strong>Prevent Abuse:</strong> To protect against spam, fraud, and malicious activity using CAPTCHA verification and IP logging</li>
            <li><strong>Improve Our Site:</strong> To understand how visitors interact with our Site and make improvements</li>
            <li><strong>Provide Services:</strong> If you engage our professional services, to deliver and improve those services</li>
            <li><strong>Legal Compliance:</strong> To comply with applicable laws, regulations, and legal processes</li>
         </ul>
      </section>

      <section aria-labelledby="cookies-and-similar-technologies">
         <h2 id="cookies-and-similar-technologies">Cookies and Similar Technologies</h2>

         <h3>What Cookies We Use</h3>
         <p>We use only essential cookies necessary for our Site to function:</p>
         <dl>
            <div>
               <dt>Session Cookie</dt>
               <dd>A temporary cookie that enables basic Site functionality. This cookie expires after 120 minutes of inactivity or when you close your browser. It does not track you across other websites.</dd>
            </div>
            <div>
               <dt>CAPTCHA Token</dt>
               <dd>A temporary token stored for 10 minutes when you interact with our contact form, used solely to verify you are human and prevent spam.</dd>
            </div>
         </dl>

         <h3>What We Don't Use</h3>
         <p>We do not use:</p>
         <ul>
            <li>Third-party tracking cookies</li>
            <li>Advertising or marketing cookies</li>
            <li>Social media tracking cookies</li>
            <li>Persistent analytics cookies</li>
         </ul>

         <h3>Managing Cookies</h3>
         <p>Most web browsers allow you to control cookies through their settings. However, disabling session cookies may prevent our contact form from functioning properly.</p>
      </section>

      <section aria-labelledby="third-party-services">
         <h2 id="third-party-services">Third-Party Services</h2>

         <h3>Google Fonts</h3>
         <p>Our Site loads fonts from Google Fonts to ensure consistent typography. When you visit our Site, your browser makes requests to Google's servers to retrieve font files. Google may collect information such as your IP address and browser information through these requests. Please review <a href="https://policies.google.com/privacy" target="_blank" rel="noopener">Google's Privacy Policy</a> for more information.</p>

         <h3>External Product Websites</h3>
         <p>Our Site contains links to our product websites (Vista Opus, Libri Res, and Diarium Salus) and external platforms (LinkedIn, Twitter/X, GitHub). These external sites have their own privacy policies. We encourage you to review the privacy practices of any site you visit.</p>
      </section>

      <section aria-labelledby="data-sharing">
         <h2 id="data-sharing">Data Sharing and Disclosure</h2>
         <p>We do not sell, trade, or rent your personal information to third parties. We may share your information only in these limited circumstances:</p>
         <ul>
            <li><strong>Service Providers:</strong> With trusted service providers who assist us in operating our Site or conducting our business, subject to confidentiality obligations</li>
            <li><strong>Legal Requirements:</strong> When required by law, subpoena, or other legal process</li>
            <li><strong>Protection of Rights:</strong> To protect our rights, property, or safety, or that of our users or others</li>
            <li><strong>Business Transfers:</strong> In connection with a merger, acquisition, or sale of assets, with notice to affected users</li>
         </ul>
      </section>

      <section aria-labelledby="data-retention">
         <h2 id="data-retention">Data Retention</h2>
         <p>We retain your information only as long as necessary for the purposes outlined in this policy:</p>
         <ul>
            <li><strong>Contact Form Submissions:</strong> Retained for as long as needed to respond to your inquiry and for reasonable business records purposes</li>
            <li><strong>Session Data:</strong> Automatically deleted after 120 minutes of inactivity</li>
            <li><strong>CAPTCHA Tokens:</strong> Automatically deleted after 10 minutes</li>
         </ul>
         <p>If you would like us to delete your information, please contact us using the information provided below.</p>
      </section>

      <section aria-labelledby="data-security">
         <h2 id="data-security">Data Security</h2>
         <p>We implement appropriate technical and organizational measures to protect your personal information against unauthorized access, alteration, disclosure, or destruction. However, no method of transmission over the internet or electronic storage is 100% secure. While we strive to protect your information, we cannot guarantee absolute security.</p>
      </section>

      <section aria-labelledby="your-privacy-rights">
         <h2 id="your-privacy-rights">Your Privacy Rights</h2>

         <h3>For All Users</h3>
         <p>You have the right to:</p>
         <ul>
            <li>Request access to the personal information we hold about you</li>
            <li>Request correction of inaccurate information</li>
            <li>Request deletion of your personal information</li>
            <li>Withdraw consent where processing is based on consent</li>
         </ul>

         <h3>California Residents (CCPA)</h3>
         <p>If you are a California resident, you have additional rights under the California Consumer Privacy Act (CCPA):</p>
         <ul>
            <li>The right to know what personal information we collect, use, and disclose</li>
            <li>The right to request deletion of your personal information</li>
            <li>The right to opt-out of the sale of personal information (note: we do not sell personal information)</li>
            <li>The right to non-discrimination for exercising your privacy rights</li>
         </ul>

         <h3>European Users (GDPR)</h3>
         <p>If you are located in the European Economic Area, you have rights under the General Data Protection Regulation (GDPR), including the rights listed above plus:</p>
         <ul>
            <li>The right to data portability</li>
            <li>The right to restrict processing</li>
            <li>The right to lodge a complaint with a supervisory authority</li>
         </ul>
         <p>Our lawful basis for processing your information is legitimate interest (responding to inquiries and operating our business) and, where applicable, your consent.</p>

         <h3>Exercising Your Rights</h3>
         <p>To exercise any of these rights, please contact us at <a href="mailto:privacy@focus-assist.us">privacy@focus-assist.us</a>. We will respond to your request within 30 days.</p>
      </section>

      <section aria-labelledby="childrens-privacy">
         <h2 id="childrens-privacy">Children's Privacy</h2>
         <p>Our Site and services are not directed to individuals under the age of 16. We do not knowingly collect personal information from children. If you are a parent or guardian and believe your child has provided us with personal information, please contact us immediately at <a href="mailto:privacy@focus-assist.us">privacy@focus-assist.us</a>, and we will take steps to delete such information.</p>
      </section>

      <section aria-labelledby="international-data-transfers">
         <h2 id="international-data-transfers">International Data Transfers</h2>
         <p>Focus Assist LLC is based in Washington State, USA. If you access our Site from outside the United States, please be aware that your information may be transferred to, stored, and processed in the United States. By using our Site, you consent to the transfer of your information to the United States, which may have different data protection laws than your country of residence.</p>
      </section>

      <section aria-labelledby="changes-to-this-policy">
         <h2 id="changes-to-this-policy">Changes to This Policy</h2>
         <p>We may update this Privacy Policy from time to time to reflect changes in our practices or for legal, operational, or regulatory reasons. We will post the updated policy on this page with a new "Effective Date." We encourage you to review this policy periodically.</p>
         <p>For significant changes, we may provide additional notice, such as a prominent announcement on our Site.</p>
      </section>

      <section aria-labelledby="contact-us">
         <h2 id="contact-us">Contact Us</h2>
         <p>If you have questions about this Privacy Policy or our privacy practices, please contact us:</p>
         <ul>
            <li><strong>Email:</strong> <a href="mailto:privacy@focus-assist.us">privacy@focus-assist.us</a></li>
            <li><strong>General Inquiries:</strong> <a href="mailto:hello@focus-assist.us">hello@focus-assist.us</a></li>
            <li><strong>Contact Form:</strong> <a href="/contact">focus-assist.us/contact</a></li>
         </ul>
         <p>Focus Assist LLC<br>Washington State, USA</p>
      </section>
   </article>
</x-layouts.webpage>
