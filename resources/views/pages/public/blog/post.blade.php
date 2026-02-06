<x-layouts.webpage>
   <x-slot:pageTitle>{{ $post->title }} - Blog - Focus Assist LLC</x-slot:pageTitle>
   <x-slot:pageDescription>{{ $post->excerpt }}</x-slot:pageDescription>
   <x-slot:metaData>
      <meta property="og:title" content="{{ $post->title }}">
      <meta property="og:description" content="{{ $post->excerpt }}">
      <meta property="og:image" content="{{ $post->featured_image }}">
      <meta property="og:type" content="article">
      <meta property="article:published_time" content="{{ $post->published_at_iso }}">
      <meta property="article:author" content="{{ $post->author }}">
   </x-slot:metaData>
   <x-slot:pageScripts></x-slot:pageScripts>
   <x-slot:pageStyles>
      <style id="blog-post-styles">
         /* ═══════════════════════════════════════════
            BLOG POST ARTICLE
            ═══════════════════════════════════════════ */
         article[aria-labelledby="blog-post-title"] {
            padding: 120px var(--gutter) 80px;
            max-width: 800px;
            margin: 0 auto;

            /* Back Link */
            & > nav {
               margin-bottom: 28px;

               & > a {
                  display: inline-flex;
                  align-items: center;
                  gap: 6px;
                  font-size: .88rem;
                  color: var(--g400);
                  transition: color .2s, gap .2s;

                  &::before {
                     content: "←";
                  }

                  &:hover {
                     color: var(--teal);
                     gap: 8px;
                  }
               }
            }

            /* Header */
            & > header {
               text-align: center;
               margin-bottom: 36px;

               & > span.category {
                  display: inline-block;
                  padding: 5px 14px;
                  font-size: .72rem;
                  font-weight: 600;
                  text-transform: uppercase;
                  letter-spacing: .08em;
                  color: var(--teal);
                  background: rgba(104, 191, 209, .12);
                  border-radius: 6px;
                  margin-bottom: 18px;
               }

               & > h1 {
                  font-family: var(--font-d);
                  font-size: clamp(30px, 4.5vw, 46px);
                  font-weight: 700;
                  letter-spacing: -.02em;
                  line-height: 1.15;
                  color: var(--white);
                  margin-bottom: 18px;
               }

               & > p.meta {
                  font-size: .88rem;
                  color: var(--g400);

                  & > time { color: var(--g300); }
                  & > span { margin: 0 6px; opacity: .5; }
               }
            }

            /* Featured Image */
            & > figure.featured-image {
               margin-bottom: 40px;
               border-radius: 16px;
               overflow: hidden;

               & > img {
                  width: 100%;
                  aspect-ratio: 16 / 9;
                  object-fit: cover;
               }

               & > figcaption {
                  padding: 12px 0;
                  font-size: .82rem;
                  color: var(--g500);
                  text-align: center;
               }
            }

            /* Article Content */
            & > .article-content {
               font-size: 1.05rem;
               color: var(--g200);
               line-height: 1.85;

               & > p {
                  margin-bottom: 1.5em;
               }

               & > h2 {
                  font-family: var(--font-d);
                  font-size: 1.6rem;
                  font-weight: 700;
                  color: var(--white);
                  margin: 2em 0 0.8em;
                  line-height: 1.3;
               }

               & > h3 {
                  font-family: var(--font-d);
                  font-size: 1.3rem;
                  font-weight: 600;
                  color: var(--white);
                  margin: 1.8em 0 0.7em;
                  line-height: 1.3;
               }

               & > h4 {
                  font-family: var(--font-d);
                  font-size: 1.1rem;
                  font-weight: 600;
                  color: var(--white);
                  margin: 1.5em 0 0.6em;
               }

               & strong {
                  color: var(--white);
                  font-weight: 600;
               }

               & em {
                  font-style: italic;
               }

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

               & > blockquote {
                  margin: 1.8em 0;
                  padding: 1.2em 1.5em;
                  border-left: 4px solid var(--teal);
                  background: rgba(104, 191, 209, .06);
                  border-radius: 0 12px 12px 0;

                  & > p {
                     margin: 0;
                     font-style: italic;
                     color: var(--g200);
                  }
               }

               & > ul, & > ol {
                  margin: 1.2em 0;
                  padding-left: 1.5em;

                  & > li {
                     margin-bottom: 0.6em;
                     padding-left: 0.5em;
                  }
               }

               & > ul {
                  list-style: disc;

                  & > li::marker {
                     color: var(--teal);
                  }
               }

               & > ol {
                  list-style: decimal;

                  & > li::marker {
                     color: var(--teal);
                     font-weight: 600;
                  }
               }

               & > pre {
                  margin: 1.5em 0;
                  padding: 1.2em 1.5em;
                  background: rgba(255, 255, 255, .03);
                  border: 1px solid rgba(255, 255, 255, .08);
                  border-radius: 12px;
                  overflow-x: auto;

                  & > code {
                     font-family: var(--font-m);
                     font-size: .88rem;
                     color: var(--g100);
                     background: none;
                     padding: 0;
                  }
               }

               & code {
                  font-family: var(--font-m);
                  font-size: .88em;
                  padding: 2px 7px;
                  border-radius: 5px;
                  background: rgba(104, 191, 209, .1);
                  color: var(--teal-light);
               }

               & > hr {
                  margin: 2.5em 0;
                  border: none;
                  border-top: 1px solid rgba(255, 255, 255, .08);
               }

               & > img {
                  max-width: 100%;
                  border-radius: 12px;
                  margin: 1.5em 0;
               }
            }
         }

         /* ═══════════════════════════════════════════
            CTA SECTION
            ═══════════════════════════════════════════ */
         section[aria-labelledby="post-cta-label"] {
            max-width: 800px;
            margin: 0 auto;
            padding: 0 var(--gutter) 80px;

            & > div {
               position: relative;
               text-align: center;
               padding: 48px 36px;
               background: rgba(255, 255, 255, .03);
               border: 1px solid rgba(255, 255, 255, .07);
               border-radius: 20px;

               & > h2 {
                  font-family: var(--font-d);
                  font-size: clamp(20px, 3vw, 26px);
                  font-weight: 700;
                  color: var(--white);
                  margin-bottom: 12px;
                  line-height: 1.3;
               }

               & > p {
                  font-size: .95rem;
                  color: var(--g300);
                  margin-bottom: 24px;
                  line-height: 1.6;
               }

               & > div.buttons {
                  display: flex;
                  justify-content: center;
                  gap: 14px;
                  flex-wrap: wrap;

                  & > a {
                     display: inline-flex;
                     align-items: center;
                     gap: 8px;
                     padding: 14px 26px;
                     border-radius: 12px;
                     font-weight: 600;
                     font-size: .9rem;
                     transition: transform .25s cubic-bezier(.16, 1, .3, 1), box-shadow .25s;

                     &.primary {
                        background: linear-gradient(135deg, var(--teal), var(--blue-bright));
                        color: var(--white);
                        box-shadow: 0 4px 20px rgba(104, 191, 209, .3);

                        &:hover {
                           transform: translateY(-2px);
                           box-shadow: 0 8px 32px rgba(104, 191, 209, .4);
                        }
                     }

                     &.secondary {
                        background: rgba(255, 255, 255, .06);
                        color: var(--white);
                        border: 1px solid rgba(255, 255, 255, .12);

                        &:hover {
                           transform: translateY(-2px);
                           background: rgba(255, 255, 255, .1);
                        }
                     }
                  }
               }
            }
         }

         /* ═══════════════════════════════════════════
            RESPONSIVE
            ═══════════════════════════════════════════ */
         @media (max-width: 600px) {
            article[aria-labelledby="blog-post-title"] {
               padding: 100px var(--gutter) 60px;

               & > .article-content {
                  font-size: 1rem;

                  & > h2 { font-size: 1.4rem; }
                  & > h3 { font-size: 1.2rem; }
               }
            }

            section[aria-labelledby="post-cta-label"] > div {
               padding: 36px 24px;

               & > div.buttons {
                  flex-direction: column;

                  & > a {
                     width: 100%;
                     justify-content: center;
                  }
               }
            }
         }
      </style>
   </x-slot:pageStyles>

   {{-- Blog Post Article --}}
   <article aria-labelledby="blog-post-title">
      {{-- Back Link --}}
      <nav>
         <a href="{{ route('public.blog.page.feed') }}">Back to Blog</a>
      </nav>

      {{-- Header --}}
      <header>
         <span class="category">{{ $post->category }}</span>
         <h1 id="blog-post-title">{{ $post->title }}</h1>
         <p class="meta">
            <time datetime="{{ $post->published_at_iso }}">{{ $post->published_at?->format('F j, Y') }}</time>
            <span>&middot;</span>
            {{ $post->read_time_label }}
            <span>&middot;</span>
            By {{ $post->author }}
         </p>
      </header>

      {{-- Featured Image --}}
      @if($post->featured_image)
      <figure class="featured-image">
         <img src="{{ $post->featured_image }}" alt="{{ $post->featured_image_alt }}" loading="lazy">
      </figure>
      @endif

      {{-- Article Content --}}
      <div class="article-content">
         {!! $post->content_html !!}
      </div>
   </article>

   {{-- CTA Section --}}
   <section aria-labelledby="post-cta-label">
      <div>
         <h2 id="post-cta-label">Want to learn more about beneficiary-first product management?</h2>
         <p>Explore Vista Opus or talk with our team about transforming your product process.</p>
         <div class="buttons">
            <a href="{{ route('public.page.products') }}" class="primary">Explore Vista Opus</a>
            <a href="{{ route('public.page.contact') }}" class="secondary">Contact Us</a>
         </div>
      </div>
   </section>

</x-layouts.webpage>
