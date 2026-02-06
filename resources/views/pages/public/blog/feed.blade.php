<x-layouts.webpage>
   <x-slot:pageTitle>Blog - Focus Assist LLC</x-slot:pageTitle>
   <x-slot:pageDescription>Perspectives on product management, Agile practices, and building better software for the people who use it.</x-slot:pageDescription>
   <x-slot:metaData></x-slot:metaData>
   <x-slot:pageScripts></x-slot:pageScripts>
   <x-slot:pageStyles>
      <style id="blog-feed-styles">
         /* ═══════════════════════════════════════════
            BLOG FEED HERO
            ═══════════════════════════════════════════ */
         section[aria-describedby="blog-hero-hgroup"] {
            padding: 140px var(--gutter) 50px;
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
                  font-size: clamp(36px, 5vw, 56px);
                  font-weight: 700;
                  letter-spacing: -.025em;
                  line-height: 1.1;
                  color: var(--white);

                  & > span.keyword {
                     color: var(--teal);
                  }
               }
            }

            & > p.tagline {
               font-size: 1.02rem;
               color: var(--g300);
               line-height: 1.7;
               max-width: 550px;
               margin: 0 auto;
            }
         }

         /* ═══════════════════════════════════════════
            FEATURED POST
            ═══════════════════════════════════════════ */
         section[aria-labelledby="featured-post-label"] {
            padding: 30px var(--gutter) 50px;
            max-width: 1100px;
            margin: 0 auto;

            & > h2 {
               position: absolute;
               left: -10000px;
            }

            & > article {
               display: grid;
               grid-template-columns: 1.2fr 1fr;
               background: rgba(255, 255, 255, .03);
               border: 1px solid rgba(255, 255, 255, .07);
               border-radius: 20px;
               overflow: hidden;

               & > figure {
                  aspect-ratio: 16 / 10;
                  overflow: hidden;

                  & > img {
                     width: 100%;
                     height: 100%;
                     object-fit: cover;
                     transition: transform .4s ease;
                  }
               }

               &:hover > figure > img {
                  transform: scale(1.03);
               }

               & > div {
                  padding: 36px;
                  display: flex;
                  flex-direction: column;
                  justify-content: center;

                  & > span.category {
                     display: inline-block;
                     width: fit-content;
                     padding: 5px 12px;
                     font-size: .72rem;
                     font-weight: 600;
                     text-transform: uppercase;
                     letter-spacing: .08em;
                     color: var(--teal);
                     background: rgba(104, 191, 209, .12);
                     border-radius: 6px;
                     margin-bottom: 16px;
                  }

                  & > h3 {
                     font-family: var(--font-d);
                     font-size: clamp(22px, 2.5vw, 30px);
                     font-weight: 700;
                     line-height: 1.2;
                     color: var(--white);
                     margin-bottom: 14px;
                  }

                  & > p.excerpt {
                     font-size: .92rem;
                     color: var(--g300);
                     line-height: 1.7;
                     margin-bottom: 16px;
                  }

                  & > p.meta {
                     font-size: .82rem;
                     color: var(--g500);
                     margin-bottom: 18px;

                     & > time { color: var(--g400); }
                     & > span { margin: 0 6px; }
                  }

                  & > a {
                     display: inline-flex;
                     align-items: center;
                     gap: 6px;
                     font-size: .88rem;
                     font-weight: 600;
                     color: var(--teal);
                     transition: gap .2s;

                     &:hover { gap: 10px; }
                     &::after { content: "→"; }
                  }
               }
            }
         }

         /* ═══════════════════════════════════════════
            BLOG POSTS GRID
            ═══════════════════════════════════════════ */
         section[aria-labelledby="blog-posts-label"] {
            padding: 30px var(--gutter) 80px;
            max-width: 1100px;
            margin: 0 auto;

            & > h2 {
               position: absolute;
               left: -10000px;
            }

            & > ul {
               display: grid;
               grid-template-columns: repeat(3, 1fr);
               gap: 24px;
            }
         }

         /* ═══════════════════════════════════════════
            BLOG POST CARD
            ═══════════════════════════════════════════ */
         .blog-card {
            background: rgba(255, 255, 255, .03);
            border: 1px solid rgba(255, 255, 255, .07);
            border-radius: 16px;
            overflow: hidden;
            transition: transform .3s ease, border-color .3s ease;

            &:hover {
               transform: translateY(-4px);
               border-color: rgba(255, 255, 255, .12);
            }

            & > a {
               display: block;

               & > figure {
                  aspect-ratio: 16 / 10;
                  overflow: hidden;
                  position: relative;

                  & > img {
                     width: 100%;
                     height: 100%;
                     object-fit: cover;
                     transition: transform .4s ease;
                  }

                  & > figcaption {
                     position: absolute;
                     top: 12px;
                     left: 12px;
                     font-size: .68rem;
                     color: var(--g300);
                     background: rgba(6, 14, 26, .7);
                     backdrop-filter: blur(8px);
                     padding: 4px 8px;
                     border-radius: 4px;
                  }
               }

               &:hover > figure > img {
                  transform: scale(1.05);
               }
            }

            & > div {
               padding: 20px;

               & > span.category {
                  display: inline-block;
                  padding: 4px 10px;
                  font-size: .68rem;
                  font-weight: 600;
                  text-transform: uppercase;
                  letter-spacing: .06em;
                  color: var(--teal);
                  background: rgba(104, 191, 209, .1);
                  border-radius: 5px;
                  margin-bottom: 12px;
               }

               & > h3 {
                  font-family: var(--font-d);
                  font-size: 1.08rem;
                  font-weight: 600;
                  line-height: 1.3;
                  color: var(--white);
                  margin-bottom: 10px;
               }

               & > p.excerpt {
                  font-size: .85rem;
                  color: var(--g400);
                  line-height: 1.65;
                  margin-bottom: 14px;
                  display: -webkit-box;
                  -webkit-line-clamp: 3;
                  -webkit-box-orient: vertical;
                  overflow: hidden;
               }

               & > p.meta {
                  font-size: .78rem;
                  color: var(--teal);

                  & > time { color: var(--teal); }
                  & > span { margin: 0 4px; opacity: .5; }
               }
            }
         }

         /* ═══════════════════════════════════════════
            PAGINATION
            ═══════════════════════════════════════════ */
         nav[aria-label="Pagination"] {
            display: flex;
            justify-content: center;
            gap: 8px;
            margin-top: 48px;

            & > a, & > span {
               display: flex;
               align-items: center;
               justify-content: center;
               min-width: 40px;
               height: 40px;
               padding: 0 14px;
               font-size: .88rem;
               font-weight: 500;
               border-radius: 10px;
               transition: background .2s, color .2s;
            }

            & > a {
               color: var(--g300);
               background: rgba(255, 255, 255, .04);
               border: 1px solid rgba(255, 255, 255, .08);

               &:hover {
                  background: rgba(255, 255, 255, .08);
                  color: var(--white);
               }

               &[aria-current="page"] {
                  background: var(--teal);
                  color: var(--navy-deep);
                  border-color: var(--teal);
               }
            }

            & > span.disabled {
               color: var(--g500);
               background: rgba(255, 255, 255, .02);
               cursor: not-allowed;
            }
         }

         /* ═══════════════════════════════════════════
            RESPONSIVE
            ═══════════════════════════════════════════ */
         @media (max-width: 900px) {
            section[aria-labelledby="featured-post-label"] > article {
               grid-template-columns: 1fr;

               & > figure {
                  aspect-ratio: 16 / 9;
               }

               & > div {
                  padding: 28px;
               }
            }

            section[aria-labelledby="blog-posts-label"] > ul {
               grid-template-columns: 1fr;
               gap: 20px;
            }

            .blog-card {
               display: grid;
               grid-template-columns: 140px 1fr;

               & > a > figure {
                  aspect-ratio: 1;
                  height: 100%;
               }

               & > div {
                  padding: 16px;

                  & > p.excerpt {
                     -webkit-line-clamp: 2;
                  }
               }
            }
         }

         @media (max-width: 600px) {
            .blog-card {
               grid-template-columns: 1fr;

               & > a > figure {
                  aspect-ratio: 16 / 9;
               }
            }
         }
      </style>
   </x-slot:pageStyles>

   {{-- Hero Section --}}
   <section aria-describedby="blog-hero-hgroup">
      <hgroup id="blog-hero-hgroup">
         <h1>Insights &amp; Ideas</h1>
         <h2><span>The Focus Assist </span><span class="keyword">Blog</span></h2>
      </hgroup>
      <p class="tagline">Perspectives on product management, Agile practices, and building better software for the people who use it.</p>
   </section>

   {{-- Featured Post --}}
   @if($featuredPost)
   <section aria-labelledby="featured-post-label">
      <h2 id="featured-post-label">Featured Post</h2>
      <article>
         <figure>
            <img src="{{ $featuredPost->featured_image }}" alt="{{ $featuredPost->featured_image_alt }}" loading="lazy">
         </figure>
         <div>
            <span class="category">{{ $featuredPost->category }}</span>
            <h3>{{ $featuredPost->title }}</h3>
            <p class="excerpt">{{ $featuredPost->excerpt }}</p>
            <p class="meta">
               <time datetime="{{ $featuredPost->published_at_iso }}">{{ $featuredPost->published_at_formatted }}</time>
               <span>&middot;</span>
               {{ $featuredPost->read_time_label }}
            </p>
            <a href="{{ $featuredPost->url }}">Read Article</a>
         </div>
      </article>
   </section>
   @endif

   {{-- Blog Posts Grid --}}
   <section aria-labelledby="blog-posts-label">
      <h2 id="blog-posts-label">All Posts</h2>
      <ul>
         @foreach($posts->posts() as $post)
            @if(!$featuredPost || $post->id !== $featuredPost->id)
            <li class="blog-card">
               <a href="{{ $post->url }}">
                  <figure>
                     <img src="{{ $post->featured_image }}" alt="{{ $post->featured_image_alt }}" loading="lazy">
                     <figcaption>{{ $post->featured_image_alt }}</figcaption>
                  </figure>
               </a>
               <div>
                  <span class="category">{{ $post->category }}</span>
                  <h3>{{ $post->title }}</h3>
                  <p class="excerpt">{{ $post->excerpt }}</p>
                  <p class="meta">
                     <time datetime="{{ $post->published_at_iso }}">{{ $post->published_at_formatted }}</time>
                     <span>&middot;</span>
                     {{ $post->read_time_label }}
                  </p>
               </div>
            </li>
            @endif
         @endforeach
      </ul>

      {{-- Pagination --}}
      @if($posts->isPaginated() && $posts->paginator()->hasPages())
      <nav aria-label="Pagination">
         {{-- Previous --}}
         @if($posts->paginator()->onFirstPage())
            <span class="disabled">&laquo; Prev</span>
         @else
            <a href="{{ $posts->paginator()->previousPageUrl() }}">&laquo; Prev</a>
         @endif

         {{-- Page Numbers --}}
         @foreach($posts->paginator()->getUrlRange(1, $posts->paginator()->lastPage()) as $page => $url)
            @if($page == $posts->paginator()->currentPage())
               <a href="{{ $url }}" aria-current="page">{{ $page }}</a>
            @else
               <a href="{{ $url }}">{{ $page }}</a>
            @endif
         @endforeach

         {{-- Next --}}
         @if($posts->paginator()->hasMorePages())
            <a href="{{ $posts->paginator()->nextPageUrl() }}">Next &raquo;</a>
         @else
            <span class="disabled">Next &raquo;</span>
         @endif
      </nav>
      @endif
   </section>

</x-layouts.webpage>
