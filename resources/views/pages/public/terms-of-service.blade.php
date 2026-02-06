<x-layouts.webpage>
   <x-slot:pageTitle>Terms of Service - Focus Assist LLC</x-slot:pageTitle>
   <x-slot:pageDescription>Review the terms and conditions governing your use of the Focus Assist LLC website and professional services.</x-slot:pageDescription>
   <x-slot:metaData></x-slot:metaData>
   <x-slot:pageScripts></x-slot:pageScripts>
   <x-slot:pageStyles>
      <style id="terms-of-service-styles">
         /* ═══════════════════════════════════════════
            TERMS OF SERVICE ARTICLE
            ═══════════════════════════════════════════ */
         article[aria-describedby="terms-of-service-label"] {
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

               /* Ordered Lists */
               & > ol {
                  list-style: none;
                  counter-reset: terms-items;
                  display: flex;
                  flex-direction: column;
                  gap: 12px;
                  margin-bottom: 20px;

                  & > li {
                     counter-increment: terms-items;
                     position: relative;
                     padding-left: 32px;
                     font-size: .95rem;
                     color: var(--g200);
                     line-height: 1.75;

                     &::before {
                        content: counter(terms-items) ".";
                        position: absolute;
                        left: 0;
                        top: 0;
                        font-weight: 600;
                        color: var(--teal);
                        font-size: .9rem;
                     }

                     & > strong, & > em:first-child {
                        color: var(--white);
                        font-style: normal;
                        font-weight: 500;
                     }
                  }
               }

               /* Important callouts */
               & > aside.important {
                  background: rgba(104, 191, 209, .08);
                  border: 1px solid rgba(104, 191, 209, .2);
                  border-radius: 12px;
                  padding: 20px 24px;
                  margin: 24px 0;

                  & > p {
                     font-size: .95rem;
                     color: var(--g200);
                     line-height: 1.75;
                     margin: 0;

                     & > strong {
                        color: var(--teal);
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
            article[aria-describedby="terms-of-service-label"] {
               padding: 100px var(--gutter) 60px;

               & > hgroup {
                  margin-bottom: 32px;
                  padding-bottom: 24px;
               }

               & > section {
                  margin-bottom: 36px;

                  & > aside.important {
                     padding: 16px 20px;
                  }
               }
            }
         }
      </style>
   </x-slot:pageStyles>

   <article aria-describedby="terms-of-service-label">
      <hgroup id="terms-of-service-label">
         <h1><span>Terms of Service</span></h1>
         <p class="effective-date">Effective Date: <time datetime="2026-02-06">6 February 2026</time></p>
      </hgroup>

      <section aria-labelledby="acceptance-of-terms">
         <h2 id="acceptance-of-terms">Acceptance of Terms</h2>
         <p>Welcome to Focus Assist LLC. These Terms of Service ("Terms") govern your access to and use of the Focus Assist website at focus-assist.us (the "Site") and any services provided by Focus Assist LLC ("we," "our," or "us").</p>
         <p>By accessing or using our Site, you acknowledge that you have read, understood, and agree to be bound by these Terms. If you do not agree to these Terms, please do not use our Site or services.</p>
         <p>We may update these Terms from time to time. Your continued use of the Site following any changes constitutes your acceptance of the revised Terms.</p>
      </section>

      <section aria-labelledby="description-of-services">
         <h2 id="description-of-services">Description of Services</h2>

         <h3>Professional Services</h3>
         <p>Focus Assist LLC provides professional consulting and staffing services in the areas of:</p>
         <ul>
            <li>Agile Transformation consulting</li>
            <li>Agile Coaching services</li>
            <li>Product Management expertise</li>
            <li>Project Management services</li>
            <li>Scrum and Scrum@Scale implementation</li>
            <li>Scaled Agile Framework (SAFe) guidance</li>
         </ul>
         <p>Professional services engagements are governed by separate written agreements between Focus Assist LLC and the client. These Terms govern your use of the Site; any professional services agreement will include additional terms specific to that engagement.</p>

         <h3>Software Products</h3>
         <p>Focus Assist LLC develops and offers software products including Vista Opus, Libri Res, and Diarium Salus. These products are hosted on separate websites with their own terms of service. Your use of those products is governed by the terms of service available on each respective product website, not by these Terms.</p>
      </section>

      <section aria-labelledby="use-of-the-site">
         <h2 id="use-of-the-site">Use of the Site</h2>

         <h3>Permitted Use</h3>
         <p>You may use our Site for lawful purposes to:</p>
         <ul>
            <li>Learn about Focus Assist LLC and our services</li>
            <li>Read our blog content and resources</li>
            <li>Contact us through our contact form</li>
            <li>Access information about our products</li>
         </ul>

         <h3>Prohibited Conduct</h3>
         <p>When using our Site, you agree not to:</p>
         <ul>
            <li>Violate any applicable laws, regulations, or third-party rights</li>
            <li>Submit false, misleading, or fraudulent information through our contact form</li>
            <li>Attempt to gain unauthorized access to any portion of the Site, other accounts, computer systems, or networks</li>
            <li>Use automated systems, bots, or scripts to access the Site in a manner that sends more requests than a human could reasonably produce</li>
            <li>Interfere with or disrupt the integrity or performance of the Site</li>
            <li>Transmit viruses, malware, or other harmful code</li>
            <li>Harvest or collect information about other users without their consent</li>
            <li>Use the Site for any commercial purpose not expressly permitted by us</li>
            <li>Circumvent, disable, or otherwise interfere with security-related features of the Site</li>
         </ul>
      </section>

      <section aria-labelledby="contact-form-submissions">
         <h2 id="contact-form-submissions">Contact Form Submissions</h2>
         <p>Our Site includes a contact form that allows you to submit inquiries to us. By submitting information through our contact form, you agree that:</p>
         <ul>
            <li>All information you provide is accurate and truthful</li>
            <li>You have the authority to submit the information provided</li>
            <li>Your submission does not contain confidential or proprietary information that you are not authorized to share</li>
            <li>We may use the information you provide to respond to your inquiry and for related business purposes as described in our <a href="/privacy-policy">Privacy Policy</a></li>
         </ul>
         <p>We reserve the right to decline to respond to any submission at our sole discretion.</p>
      </section>

      <section aria-labelledby="intellectual-property">
         <h2 id="intellectual-property">Intellectual Property</h2>

         <h3>Our Content</h3>
         <p>The Site and its original content, features, and functionality are owned by Focus Assist LLC and are protected by international copyright, trademark, patent, trade secret, and other intellectual property or proprietary rights laws. This includes, but is not limited to:</p>
         <ul>
            <li>Text, graphics, logos, and icons</li>
            <li>Images, illustrations, and visual designs</li>
            <li>Software and code</li>
            <li>Blog posts and articles</li>
            <li>Audio and video content</li>
            <li>The overall look and feel of the Site</li>
         </ul>

         <h3>Limited License</h3>
         <p>We grant you a limited, non-exclusive, non-transferable, revocable license to access and use the Site for personal, non-commercial purposes. This license does not include the right to:</p>
         <ul>
            <li>Modify or copy the materials except as necessary for normal web browsing</li>
            <li>Use the materials for any commercial purpose without our written consent</li>
            <li>Remove any copyright or other proprietary notations from the materials</li>
            <li>Transfer the materials to another person or mirror the materials on any other server</li>
         </ul>

         <h3>Trademarks</h3>
         <p>"Focus Assist," "Vista Opus," "Libri Res," "Diarium Salus," and associated logos are trademarks of Focus Assist LLC. You may not use these marks without our prior written permission.</p>
      </section>

      <section aria-labelledby="third-party-links">
         <h2 id="third-party-links">Third-Party Links and Services</h2>
         <p>Our Site may contain links to third-party websites or services, including:</p>
         <ul>
            <li>Our product websites (Vista Opus, Libri Res, Diarium Salus)</li>
            <li>Social media platforms (LinkedIn, Twitter/X, GitHub)</li>
            <li>External resources and references</li>
         </ul>
         <p>These third-party sites have their own terms of service and privacy policies. We do not control and are not responsible for the content, privacy policies, or practices of any third-party sites or services. Your interactions with third-party websites are solely between you and the third party.</p>
         <p>The inclusion of any link does not imply endorsement, approval, or control by Focus Assist LLC over the linked site.</p>
      </section>

      <section aria-labelledby="professional-services-engagements">
         <h2 id="professional-services-engagements">Professional Services Engagements</h2>
         <p>If you engage Focus Assist LLC for professional services:</p>

         <h3>Separate Agreement Required</h3>
         <p>All professional services engagements require a separate written agreement (such as a Statement of Work, Master Services Agreement, or similar document) that will govern the specific terms of our engagement, including scope, deliverables, timelines, fees, and responsibilities.</p>

         <h3>Inquiry Process</h3>
         <p>Submitting an inquiry through our contact form does not create a binding agreement or obligation for either party. It initiates a conversation about potential services.</p>

         <h3>Confidentiality</h3>
         <p>Any confidentiality obligations related to professional services will be addressed in the applicable services agreement. Information shared through our contact form prior to signing an agreement is not automatically subject to confidentiality protections unless otherwise agreed in writing.</p>
      </section>

      <section aria-labelledby="disclaimers">
         <h2 id="disclaimers">Disclaimers</h2>
         <aside class="important">
            <p><strong>Important:</strong> Please read this section carefully as it limits our liability to you.</p>
         </aside>

         <h3>Site Provided "As Is"</h3>
         <p>THE SITE IS PROVIDED ON AN "AS IS" AND "AS AVAILABLE" BASIS WITHOUT WARRANTIES OF ANY KIND, EITHER EXPRESS OR IMPLIED. TO THE FULLEST EXTENT PERMITTED BY LAW, FOCUS ASSIST LLC DISCLAIMS ALL WARRANTIES, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO IMPLIED WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, AND NON-INFRINGEMENT.</p>

         <h3>No Guarantee of Availability</h3>
         <p>We do not warrant that the Site will be uninterrupted, timely, secure, or error-free. We do not guarantee that defects will be corrected, or that the Site or the servers that make it available are free of viruses or other harmful components.</p>

         <h3>Informational Purposes</h3>
         <p>Content on this Site, including blog posts and service descriptions, is provided for informational purposes only and does not constitute professional advice. Any decisions you make based on information from this Site are at your own risk.</p>

         <h3>No Professional Relationship</h3>
         <p>Use of this Site does not create a professional services relationship between you and Focus Assist LLC. Such a relationship is established only through a signed written agreement.</p>
      </section>

      <section aria-labelledby="limitation-of-liability">
         <h2 id="limitation-of-liability">Limitation of Liability</h2>
         <p>TO THE MAXIMUM EXTENT PERMITTED BY APPLICABLE LAW, IN NO EVENT SHALL FOCUS ASSIST LLC, ITS DIRECTORS, EMPLOYEES, PARTNERS, AGENTS, SUPPLIERS, OR AFFILIATES BE LIABLE FOR ANY INDIRECT, INCIDENTAL, SPECIAL, CONSEQUENTIAL, OR PUNITIVE DAMAGES, INCLUDING WITHOUT LIMITATION:</p>
         <ul>
            <li>Loss of profits, data, use, goodwill, or other intangible losses</li>
            <li>Damages resulting from your access to or use of (or inability to access or use) the Site</li>
            <li>Damages resulting from any conduct or content of any third party on the Site</li>
            <li>Damages resulting from unauthorized access, use, or alteration of your transmissions or content</li>
         </ul>
         <p>IN NO EVENT SHALL OUR TOTAL LIABILITY TO YOU FOR ALL CLAIMS ARISING OUT OF OR RELATED TO THE SITE EXCEED ONE HUNDRED DOLLARS ($100.00 USD).</p>
         <p>Some jurisdictions do not allow the exclusion or limitation of certain damages. If these laws apply to you, some or all of the above exclusions or limitations may not apply, and you may have additional rights.</p>
      </section>

      <section aria-labelledby="indemnification">
         <h2 id="indemnification">Indemnification</h2>
         <p>You agree to defend, indemnify, and hold harmless Focus Assist LLC, its officers, directors, employees, and agents, from and against any claims, damages, obligations, losses, liabilities, costs, or debt, and expenses (including but not limited to attorney's fees) arising from:</p>
         <ul>
            <li>Your use of and access to the Site</li>
            <li>Your violation of any term of these Terms</li>
            <li>Your violation of any third-party right, including without limitation any intellectual property or privacy right</li>
            <li>Any claim that your use of the Site caused damage to a third party</li>
         </ul>
         <p>This indemnification obligation will survive the termination of these Terms and your use of the Site.</p>
      </section>

      <section aria-labelledby="governing-law">
         <h2 id="governing-law">Governing Law and Jurisdiction</h2>
         <p>These Terms shall be governed by and construed in accordance with the laws of the State of Washington, United States, without regard to its conflict of law provisions.</p>
         <p>Any dispute arising out of or relating to these Terms or your use of the Site shall be subject to the exclusive jurisdiction of the state and federal courts located in Washington State. You consent to the personal jurisdiction of such courts and waive any objection based on inconvenient forum.</p>
      </section>

      <section aria-labelledby="dispute-resolution">
         <h2 id="dispute-resolution">Dispute Resolution</h2>

         <h3>Informal Resolution</h3>
         <p>Before initiating any formal dispute resolution proceeding, you agree to first contact us at <a href="mailto:legal@focus-assist.us">legal@focus-assist.us</a> and attempt to resolve the dispute informally. We will try to resolve the dispute by contacting you via email within 30 days.</p>

         <h3>Waiver of Class Actions</h3>
         <p>YOU AND FOCUS ASSIST LLC AGREE THAT EACH MAY BRING CLAIMS AGAINST THE OTHER ONLY IN YOUR OR ITS INDIVIDUAL CAPACITY AND NOT AS A PLAINTIFF OR CLASS MEMBER IN ANY PURPORTED CLASS OR REPRESENTATIVE PROCEEDING.</p>
      </section>

      <section aria-labelledby="termination">
         <h2 id="termination">Termination</h2>
         <p>We may terminate or suspend your access to the Site immediately, without prior notice or liability, for any reason whatsoever, including without limitation if you breach these Terms.</p>
         <p>Upon termination, your right to use the Site will immediately cease. All provisions of these Terms which by their nature should survive termination shall survive, including without limitation ownership provisions, warranty disclaimers, indemnification, and limitations of liability.</p>
      </section>

      <section aria-labelledby="severability">
         <h2 id="severability">Severability and Waiver</h2>

         <h3>Severability</h3>
         <p>If any provision of these Terms is held to be unenforceable or invalid, such provision will be changed and interpreted to accomplish the objectives of such provision to the greatest extent possible under applicable law, and the remaining provisions will continue in full force and effect.</p>

         <h3>No Waiver</h3>
         <p>Our failure to enforce any right or provision of these Terms will not be considered a waiver of those rights. The waiver of any such right or provision will be effective only if in writing and signed by a duly authorized representative of Focus Assist LLC.</p>
      </section>

      <section aria-labelledby="entire-agreement">
         <h2 id="entire-agreement">Entire Agreement</h2>
         <p>These Terms, together with our <a href="/privacy-policy">Privacy Policy</a> and any other legal notices published by us on the Site, constitute the entire agreement between you and Focus Assist LLC regarding your use of the Site.</p>
         <p>These Terms do not govern any professional services engagement, which will be subject to a separate written agreement.</p>
      </section>

      <section aria-labelledby="changes-to-terms">
         <h2 id="changes-to-terms">Changes to These Terms</h2>
         <p>We reserve the right to modify or replace these Terms at any time at our sole discretion. If a revision is material, we will provide at least 30 days' notice prior to any new terms taking effect by posting notice on the Site.</p>
         <p>What constitutes a material change will be determined at our sole discretion. By continuing to access or use our Site after any revisions become effective, you agree to be bound by the revised Terms.</p>
      </section>

      <section aria-labelledby="contact-information">
         <h2 id="contact-information">Contact Information</h2>
         <p>If you have any questions about these Terms, please contact us:</p>
         <ul>
            <li><strong>Legal Inquiries:</strong> <a href="mailto:legal@focus-assist.us">legal@focus-assist.us</a></li>
            <li><strong>General Inquiries:</strong> <a href="mailto:hello@focus-assist.us">hello@focus-assist.us</a></li>
            <li><strong>Contact Form:</strong> <a href="/contact">focus-assist.us/contact</a></li>
         </ul>
         <p>Focus Assist LLC<br>Washington State, USA</p>
      </section>
   </article>
</x-layouts.webpage>
