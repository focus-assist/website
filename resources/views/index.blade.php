<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Focus Assist LLC — Professional Facilitation</title>

   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,400;12..96,500;12..96,600;12..96,700;12..96,800&family=Outfit:wght@300;400;500;600;700&family=IBM+Plex+Mono:wght@400;500&display=swap" rel="stylesheet">

   <link rel="stylesheet" href="/assets/styles/common.css">

   <!-- Homepage-only styles: specific to this page's layout -->
   <style id="homepage-only-styles">

      /* ═══════════════════════════════════════════
         HERO SECTION
         ═══════════════════════════════════════════ */
      section[aria-describedby="hero-section-hgroup"] {
         position: relative;
         isolation: isolate;
         /* min-height: 100vh; */
         min-height: 100svh;

         display: grid;
         grid-template-columns: 1fr 1fr;
         grid-template-rows: auto auto auto 1fr;
         align-content: center;
         column-gap: 4vw;
         padding: 14svh var(--gutter) 8svh;

         &::before {
            content: "";
            position: absolute;
            inset: 0;
            z-index: -2;
            background-repeat: no-repeat;
            background-attachment: local;
            background-size: cover;
            background-image: url('https://focus-assist.us/assets/media/product-pitch.webp');
            animation: fadeIn .9s ease-out both;
         }

         &::after {
            content: "";
            position: absolute;
            inset: 0;
            z-index: -1;
            background-image: radial-gradient(
               circle at bottom right,
               rgba(6, 14, 26, 0) 0%,
               rgba(6, 14, 26, 0.85) 60%
            );
            background-repeat: no-repeat;
         }

         & > * { grid-column: 1; }

         /* ── Heading group ── */
         & > hgroup { margin-bottom: 20px; }

         & > hgroup > h1 {
            font-family: var(--font-m);
            font-size: 11px;
            font-weight: 500;
            letter-spacing: .18em;
            text-transform: uppercase;
            color: rgba(255, 255, 255, .65);
            margin-bottom: 16px;
            animation: fadeUp .5s ease-out .4s both;
         }

         & > hgroup > h2 {
            font-family: var(--font-d);
            font-size: clamp(42px, 5.4vw, 78px);
            font-weight: 700;
            letter-spacing: -.025em;
            line-height: .92;
            text-transform: uppercase;
            color: var(--white);

            & > span { display: block; }
            & > span:nth-child(2) { color: var(--teal); }

            & > span:nth-child(1) { animation: fadeUp .55s ease-out .50s both; }
            & > span:nth-child(2) { animation: fadeUp .55s ease-out .58s both; }
            & > span:nth-child(3) { animation: fadeUp .55s ease-out .66s both; }
         }

         /* ── Tagline ── */
         & > p.tagline {
            font-size: 1.08rem;
            color: rgba(255, 255, 255, .85);
            line-height: 1.7;
            max-width: 440px;
            margin-bottom: 28px;
            animation: fadeUp .45s ease-out .78s both;
         }

         /* ── CTA buttons ── */
         & > p:has(> a) {
            animation: fadeUp .45s ease-out .82s both;
         }

         & > p > a[href="/contact"] > span {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 14px 26px;
            border-radius: 999px;
            font-weight: 600;
            font-size: .88rem;
            background: linear-gradient(135deg, var(--teal), var(--blue-bright));
            color: var(--white);
            box-shadow: 0 4px 20px rgba(104, 191, 209, .3);
            transition: transform .25s cubic-bezier(.16, 1, .3, 1), box-shadow .25s;
            white-space: nowrap;
            cursor: pointer;
         }
         & > p > a[href="/contact"]:hover > span {
            transform: translateY(-2px) scale(1.01);
            box-shadow: 0 8px 32px rgba(104, 191, 209, .4);
         }

         & > p > a[href="/products"] > span {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 14px 26px;
            border-radius: 999px;
            font-weight: 600;
            font-size: .88rem;
            background: transparent;
            color: var(--white);
            border: 1px solid rgba(255, 255, 255, .16);
            transition: transform .25s cubic-bezier(.16, 1, .3, 1), background .2s;
            white-space: nowrap;
            cursor: pointer;
         }
         & > p > a[href="/products"]:hover > span {
            transform: translateY(-2px) scale(1.01);
            background: rgba(255, 255, 255, .05);
         }

         /* ── Schedule aside ── */
         & > aside#example-schedule {
            grid-column: 2;
            grid-row: 1 / -1;
            align-self: center;
            justify-self: end;
            z-index: 2;

            background: rgba(255, 255, 255, .05);
            backdrop-filter: blur(24px);
            -webkit-backdrop-filter: blur(24px);
            border: 1px solid rgba(255, 255, 255, .09);
            border-radius: 22px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, .3);

            width: 100%;
            max-width: 400px;
            padding: 22px;

            animation: slideRight .85s ease-out .5s both;

            display: grid;
            grid-template-areas: "title team" "calendar calendar";
            grid-template-columns: 1fr auto;
            grid-template-rows: auto 1fr;
            align-items: center;
            gap: 14px;

            & > #example-schedule-label {
               grid-area: title;
               font-family: var(--font-m);
               font-size: 11px;
               font-weight: 500;
               letter-spacing: .18em;
               text-transform: uppercase;
               color: var(--g400);
            }

            & > #example-schedule-team-label {
               position: absolute;
               left: -1000vw;
            }

            /* Team avatars */
            & > ul[aria-labelledby="example-schedule-team-label"] {
               grid-area: team;
               display: flex;

               & > li {
                  width: 32px;
                  height: 32px;
                  border-radius: 50%;
                  display: flex;
                  align-items: center;
                  justify-content: center;
                  font-size: 11px;
                  font-weight: 600;
                  color: var(--white);

                  &:not(:first-child) { margin-left: -8px; }

                  &:nth-child(1) { background: linear-gradient(135deg, var(--teal), var(--blue)); }
                  &:nth-child(2) { background: #6366f1; }
                  &:nth-child(3) { background: #a855f7; }
                  &:nth-child(4) { background: linear-gradient(135deg, #f97316, #ef4444); }
                  &:nth-child(5) { background: #10b981; }
                  &:nth-child(6) { background: #ec4899; }
               }
            }

            /* Schedule items */
            & > ul[aria-labelledby="example-schedule-label"] {
               grid-area: calendar;
               display: flex;
               flex-direction: column;
               gap: 8px;

               & > li.example-schedule-item {
                  display: grid;
                  grid-template-columns: 40px 1fr auto;
                  grid-template-rows: auto auto;
                  column-gap: 12px;
                  align-items: center;
                  padding: 12px;
                  border-radius: 14px;
                  background: rgba(255, 255, 255, .04);

                  &::before {
                     content: "";
                     grid-column: 1;
                     grid-row: 1 / span 2;
                     width: 40px;
                     height: 40px;
                     border-radius: 10px;
                     background: var(--icon) center / 18px 18px no-repeat,
                                 var(--icon-bg, rgba(104, 191, 209, .1));
                  }

                  &.sprint-planning     { --icon: var(--icon-calendar);       --icon-bg: rgba(104, 191, 209, .1); }
                  &.daily-standup        { --icon: var(--icon-users);          --icon-bg: rgba(99, 102, 241, .1); }
                  &.backlog-refinement   { --icon: var(--icon-brush-cleaning); --icon-bg: rgba(168, 85, 247, .1); }
                  &.sprint-review        { --icon: var(--icon-presentation);   --icon-bg: rgba(16, 185, 129, .1); }
                  &.sprint-retrospective { --icon: var(--icon-coffee);         --icon-bg: rgba(236, 72, 153, .1); }

                  & > p.title { grid-column: 2 / span 2; grid-row: 1; font-weight: 600; font-size: .86rem; color: var(--white); }
                  & > p.day   { grid-column: 2; grid-row: 2; font-size: .73rem; color: var(--g400); }
                  & > p.time  { grid-column: 3; grid-row: 2; font-size: .73rem; color: var(--g400); text-align: right; }
               }
            }
         }
      }

      /* ═══════════════════════════════════════════
         SERVICES CALLOUT
         ═══════════════════════════════════════════ */
      section[aria-labelledby="services-callout-label"] {
         background: var(--navy);
         padding: 110px var(--gutter);
         display: grid;
         grid-template-columns: 1fr 1fr;
         gap: 20px 56px;
         align-items: center;

         &::before {
            content: "";
            grid-column: 2;
            grid-row: 1 / span 4;
            width: 100%;
            aspect-ratio: 4 / 3;
            border-radius: 18px;
            background: url('https://focus-assist.us/assets/media/daily-standup-01.webp') center / cover no-repeat;
            box-shadow: 0 20px 60px rgba(0, 0, 0, .4);
         }

         & > hgroup {
            grid-column: 1;
            display: grid;

            & > h3 {
               grid-row: 1;
               font-family: var(--font-m);
               font-size: 11px;
               font-weight: 500;
               letter-spacing: .18em;
               text-transform: uppercase;
               color: var(--g400);
               margin-bottom: 14px;
            }

            & > h2 {
               grid-row: 2;
               font-family: var(--font-d);
               font-size: clamp(28px, 3.6vw, 48px);
               font-weight: 700;
               letter-spacing: -.02em;
               line-height: .95;
               color: var(--white);

               & span.keyword { color: var(--teal); }
            }
         }

         & > p {
            grid-column: 1;
            font-size: .96rem;
            color: var(--g300);
            line-height: 1.8;
            max-width: 480px;
         }

         & > ul {
            grid-column: 1;
            display: flex;
            flex-direction: column;
            gap: 10px;

            & > li {
               display: flex;
               align-items: center;
               gap: 10px;
               font-size: .9rem;
               color: var(--white);
               font-weight: 500;

               &::before {
                  content: "";
                  display: block;
                  width: 20px;
                  height: 20px;
                  flex-shrink: 0;
                  background: var(--icon-check-circle) center / contain no-repeat;
               }
            }
         }

         & > p:last-of-type > a {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 14px 26px;
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

      /* ═══════════════════════════════════════════
         PRODUCTS CALLOUT
         ═══════════════════════════════════════════ */
      section[aria-labelledby="products-callout-label"] {
         background: var(--navy-deep);
         padding: 110px var(--gutter);

         & > hgroup {
            text-align: center;
            margin-bottom: 14px;
            display: grid;

            & > h3 {
               grid-row: 1;
               font-family: var(--font-m);
               font-size: 11px;
               font-weight: 500;
               letter-spacing: .18em;
               text-transform: uppercase;
               color: var(--g400);
               margin-bottom: 14px;
            }

            & > h2 {
               grid-row: 2;
               font-family: var(--font-d);
               font-size: clamp(28px, 3.6vw, 48px);
               font-weight: 700;
               letter-spacing: -.02em;
               line-height: .95;
               color: var(--white);
               
               & span.keyword { color: var(--teal); }
            }
         }

         & > p {
            text-align: center;
            font-size: .96rem;
            color: var(--g300);
            line-height: 1.7;
            max-width: 600px;
            margin: 0 auto 48px;
         }

         & > ul {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 22px;

            & > li {
               background: rgba(255, 255, 255, .04);
               backdrop-filter: blur(12px);
               -webkit-backdrop-filter: blur(12px);
               border: 1px solid rgba(255, 255, 255, .07);
               border-radius: 22px;
               padding: 34px;
               transition: all .35s cubic-bezier(.16, 1, .3, 1);
               cursor: pointer;

               &:hover {
                  background: rgba(255, 255, 255, .07);
                  border-color: rgba(255, 255, 255, .13);
                  transform: translateY(-4px) scale(1.01);
                  box-shadow: 0 20px 50px rgba(0, 0, 0, .25);
               }

               &::before {
                  content: "";
                  display: flex;
                  width: 52px;
                  height: 52px;
                  border-radius: 13px;
                  margin-bottom: 18px;
                  background: var(--icon) center / 26px 26px no-repeat,
                              var(--icon-bg);
               }

               &:nth-child(1) {
                  --icon: var(--icon-grid);
                  --icon-bg: linear-gradient(135deg, rgba(104, 191, 209, .12), rgba(0, 77, 174, .12));
               }
               &:nth-child(2) {
                  --icon: var(--icon-book);
                  --icon-bg: rgba(99, 102, 241, .1);
               }
               &:nth-child(3) {
                  --icon: var(--icon-heart);
                  --icon-bg: rgba(168, 85, 247, .1);
               }

               & > hgroup > h3 {
                  font-family: var(--font-d);
                  font-size: 1.25rem;
                  color: var(--white);
                  margin-bottom: 8px;
               }

               & > p {
                  font-size: .88rem;
                  color: var(--g300);
                  line-height: 1.7;
                  margin-bottom: 18px;
               }

               & > p:last-child {
                  margin-bottom: 0;

                  & a {
                     display: inline-flex;
                     align-items: center;
                     gap: 5px;
                     font-weight: 600;
                     font-size: .86rem;
                     color: var(--teal);
                     transition: gap .2s;

                     &:hover { gap: 8px; }

                     & > span::after { content: " →"; }
                  }
               }
            }
         }
      }

      /* ═══════════════════════════════════════════
         OVERVIEW / STATS ASIDE
         ═══════════════════════════════════════════ */
      aside[aria-labelledby="overview-label"] {
         background: var(--navy);
         padding: 80px var(--gutter);

         & > ul {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: space-around;
            gap: 32px;
            max-width: 1200px;
            margin: 0 auto;
            text-align: center;

            & > li {
               display: flex;
               flex-direction: column;
               gap: 8px;

               & > span.keyword {
                  font-family: var(--font-d);
                  font-size: clamp(32px, 4vw, 48px);
                  font-weight: 700;
                  color: var(--teal);
                  line-height: 1;
               }

               & > span:not(.keyword) {
                  font-size: .9rem;
                  color: var(--g400);
                  line-height: 1.4;
               }
            }
         }
      }

      /* ═══════════════════════════════════════════
         TESTIMONIALS SECTION
         ═══════════════════════════════════════════ */
      section[aria-labelledby="testamonials-label"] {
         background: var(--navy-deep);
         padding: 110px var(--gutter);

         & > ul {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-items: center;
            justify-content: center;
            gap: 28px;
            max-width: 1000px;
            margin: 0 auto;

            & > li {
               & > figure {
                  background: rgba(255, 255, 255, .04);
                  backdrop-filter: blur(12px);
                  -webkit-backdrop-filter: blur(12px);
                  border: 1px solid rgba(255, 255, 255, .07);
                  border-radius: 22px;
                  padding: 34px;
                  height: 100%;
                  display: flex;
                  flex-direction: column;
                  max-width: 400px;

                  & > blockquote {
                     flex: 1;
                     position: relative;
                     padding-top: 24px;

                     &::before {
                        content: "";
                        position: absolute;
                        top: 0;
                        left: 0;
                        font-family: var(--font-d);
                        font-size: 3rem;
                        font-weight: 700;
                        color: var(--g500);
                        line-height: 1;
                        opacity: .5;
                     }

                     & > p {
                        font-size: .95rem;
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
                           font-size: .82rem;
                           color: var(--g400);
                           margin-top: 2px;
                        }
                     }
                  }
               }
            }
         }
      }

      /* ═══════════════════════════════════════════
         CONTACT US CTA SECTION
         ═══════════════════════════════════════════ */
      section[aria-describedby="contact-us-hgroup"] {
         position: relative;
         padding: 110px var(--gutter);
         display: grid;
         grid-template-columns: 1fr 1fr;
         grid-template-areas: "title title" "tagline tagline" "contact about";
         justify-content: center;
         align-items: center;

         & > * {
            position: relative;
            z-index: 1;
         }

         &::before {
            content: "";
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            width: calc(100% - var(--gutter) * 2);
            max-width: 1000px;
            height: calc(100% - 80px);
            background: linear-gradient(
               135deg,
               rgba(15, 32, 53, 0.95) 0%,
               rgba(10, 22, 40, 0.98) 100%
            );
            border: 1px solid rgba(255, 255, 255, .07);
            border-radius: 28px;
            z-index: 0;
         }

         & > hgroup {
            grid-area: title;
            flex-basis: 100%;
            text-align: center;
            margin-bottom: 16px;

            & > h2 {
               font-family: var(--font-d);
               font-size: clamp(28px, 4vw, 44px);
               font-weight: 700;
               letter-spacing: -.02em;
               line-height: 1.1;
               color: var(--white);

               & > span { display: inline; }
               & > span.keyword { color: var(--teal); }
            }
         }

         & > p.tagline {
            grid-area: tagline;
            flex-basis: 100%;
            text-align: center;
            font-size: .96rem;
            color: var(--g300);
            line-height: 1.7;
            max-width: 520px;
            margin: 0 auto 28px;
         }

         & > p:has(> a) {
            display: inline-flex;
            margin: 0 6px;
         }

         & > p:has( a[href="/contact"] ) { grid-area: contact; justify-self: end; }
         & > p:has( a[href="/about"] ) { grid-area: about; justify-self: start; }

         & > p > a[href="/contact"] > span {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 14px 26px;
            border-radius: 999px;
            font-weight: 600;
            font-size: .88rem;
            background: linear-gradient(135deg, var(--teal), var(--blue-bright));
            color: var(--white);
            box-shadow: 0 4px 20px rgba(104, 191, 209, .3);
            transition: transform .25s cubic-bezier(.16, 1, .3, 1), box-shadow .25s;
            cursor: pointer;
         }
         & > p > a[href="/contact"]:hover > span {
            transform: translateY(-2px) scale(1.01);
            box-shadow: 0 8px 32px rgba(104, 191, 209, .4);
         }

         & > p > a[href="/about"] > span {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 14px 26px;
            border-radius: 999px;
            font-weight: 600;
            font-size: .88rem;
            background: rgba(255, 255, 255, .06);
            color: var(--white);
            border: 1px solid rgba(255, 255, 255, .12);
            transition: transform .25s cubic-bezier(.16, 1, .3, 1), background .2s;
            cursor: pointer;
         }
         & > p > a[href="/about"]:hover > span {
            transform: translateY(-2px) scale(1.01);
            background: rgba(255, 255, 255, .1);
         }
      }

      /* ═══════════════════════════════════════════
         HOMEPAGE RESPONSIVE
         ═══════════════════════════════════════════ */
      @media (max-width: 1024px) {
         section[aria-describedby="hero-section-hgroup"] {
            grid-template-columns: 1fr;
            padding: 120px var(--gutter) 60px;

            & > * { grid-column: 1 !important; }

            & > aside#example-schedule {
               grid-row: auto;
               max-width: 100%;
               margin-top: 32px;
            }

            & > hgroup > h2 {
               font-size: clamp(32px, 8vw, 46px);
            }
         }

         section[aria-labelledby="services-callout-label"] {
            grid-template-columns: 1fr;

            &::before {
               grid-column: 1;
               order: -1;
               max-height: 300px;
               object-fit: cover;
            }
         }

         section[aria-labelledby="products-callout-label"] > ul {
            grid-template-columns: 1fr;
         }
      }

      .keyword {
         background-attachment: local;
         background-repeat: no-repeat;
         background-size: contain;
         background-image: linear-gradient(45deg, var(--blue-bright) 0%, var(--teal) 100%) !important;
         background-clip: text !important;
         -webkit-background-clip: text !important;
         -webkit-text-fill-color: transparent !important;
      }
   </style>
</head>
<body>
   <a id="skip-link" href="#main"><span>Skip to Main Content</span></a>

   <header class="acm-header" id="site-header">
      <div class="acm-header-inner">
         <a href="/" class="acm-logo" aria-label="Focus Assist — Home">Focus Assist</a>

         <details class="acm-toggle" id="acm-toggle" open>
            <summary aria-label="Toggle navigation menu">
               <span class="acm-toggle-icon" aria-hidden="true"></span>
               <span class="sr-only">Menu</span>
            </summary>

            <nav class="acm-nav" aria-label="Primary navigation">
               <ul class="acm-list" role="menubar">
                  <li role="none">
                     <a href="#home" class="acm-link" role="menuitem" aria-current="page">Home</a>
                  </li>

                  <li role="none">
                     <details class="acm-dropdown" data-acm-dropdown>
                        <summary class="acm-dropdown-toggle" role="menuitem" aria-haspopup="true">Services</summary>
                        <div class="acm-panel" role="menu">
                           <ul class="acm-panel-list">
                              <li role="none"><a href="/services/agile-transformation" class="acm-panel-link" role="menuitem">Agile Transformation</a></li>
                              <li role="none"><a href="/services/agile-coaching" class="acm-panel-link" role="menuitem">Agile Coaching</a></li>
                              <li role="none"><a href="/services/product-management" class="acm-panel-link" role="menuitem">Product Management</a></li>
                              <li role="none"><a href="/services/project-management" class="acm-panel-link" role="menuitem">Project Management</a></li>
                              <li class="acm-divider" role="separator"></li>
                              <li role="none"><a href="/services" class="acm-panel-link" role="menuitem">View All Services</a></li>
                           </ul>
                        </div>
                     </details>
                  </li>

                  <li role="none">
                     <details class="acm-dropdown" data-acm-dropdown>
                        <summary class="acm-dropdown-toggle" role="menuitem" aria-haspopup="true">Products</summary>
                        <div class="acm-panel" role="menu">
                           <ul class="acm-panel-list">
                              <li role="none"><a href="/products/vista-opus" class="acm-panel-link" role="menuitem">Vista Opus</a></li>
                              <li role="none"><a href="/products/libri-res" class="acm-panel-link" role="menuitem">Libri Res</a></li>
                              <li role="none"><a href="/products/diarium-salus" class="acm-panel-link" role="menuitem">Diarium Salus</a></li>
                           </ul>
                        </div>
                     </details>
                  </li>

                  <li role="none">
                     <a href="#about" class="acm-link" role="menuitem">About</a>
                  </li>

                  <li role="none">
                     <a href="#contact" class="acm-link" role="menuitem">Contact Us</a>
                  </li>
               </ul>
            </nav>
         </details>
      </div>
   </header>

   <main id="main">

      <section aria-describedby="hero-section-hgroup">
         <hgroup id="hero-section-hgroup">
            <h1><span>Professional Facilitation</span></h1>
            <h2>
               <span>Focus on</span>
               <span class="keyword">What Matters</span>
               <span>Most</span>
            </h2>
         </hgroup>
         <p class="tagline">We help businesses transform through expert product management, project management, and purpose-built software tools that keep you and your teams aligned and your products on track.</p>

         <p><a href="/contact"><span>Book A Workshop</span></a></p>
         <p><a href="/products"><span>Explore Products</span></a></p>

         <aside id="example-schedule">
            <p id="example-schedule-label"><span>Example Scrum Schedule</span></p>
            <ul aria-labelledby="example-schedule-label">
               <li class="example-schedule-item sprint-planning">
                  <p class="title">Sprint Planning</p>
                  <p class="day">Friday</p>
                  <p class="time">2:00 PM - 5:00 PM</p>
               </li>
               <li class="example-schedule-item daily-standup">
                  <p class="title">Daily Standup</p>
                  <p class="day">Monday - Friday</p>
                  <p class="time">10:00 AM - 10:15 AM</p>
               </li>
               <li class="example-schedule-item backlog-refinement">
                  <p class="title">Backlog Refinement</p>
                  <p class="day">Monday</p>
                  <p class="time">8:00 AM - 10:00 AM</p>
               </li>
               <li class="example-schedule-item sprint-review">
                  <p class="title">Sprint Review</p>
                  <p class="day">Friday</p>
                  <p class="time">8:00 AM - 10:00 AM</p>
               </li>
               <li class="example-schedule-item sprint-retrospective">
                  <p class="title">Sprint Retrospective</p>
                  <p class="day">Friday</p>
                  <p class="time">11:00 AM - 12:00 PM</p>
               </li>
            </ul>

            <p id="example-schedule-team-label">Example Scrum Team</p>
            <ul aria-labelledby="example-schedule-team-label">
               <li>AL</li>
               <li>MK</li>
               <li>AS</li>
               <li>JD</li>
               <li>MbM</li>
               <li>CJ</li>
            </ul>
         </aside>
      </section>

      <section aria-labelledby="services-callout-label" class="reveal">
         <hgroup>
            <h2 id="services-callout-label"><span>Expert Teams, <span class="keyword">Anywhere</span></span></h2>
            <h3><span>Professional Services</span></h3>
         </hgroup>

         <p>We broker experienced professionals to help small and medium-sized businesses become more productive. From Agile transformations to traditional project management, we tailor our approach to what actually works for your organization.</p>

         <ul>
            <li>Agile Transformation Experts &amp; Coaches</li>
            <li>Product Managers &amp; Product Owners</li>
            <li>Project Managers &amp; Scrum Masters</li>
            <li>Available worldwide</li>
         </ul>

         <p><a href="/services">View All Services</a></p>
      </section>

      <section aria-labelledby="products-callout-label">
         <hgroup class="reveal">
            <h2 id="products-callout-label"><span class="keyword">Purpose-Built</span> <span>Products</span></h2>
            <h3><span>Our Software Suite</span></h3>
         </hgroup>

         <p class="reveal">Software that empowers rather than overwhelms. Each tool is designed with the people who use it at the center.</p>

         <ul>
            <li class="reveal">
               <hgroup>
                  <h3><span>Vista Opus</span></h3>
               </hgroup>
               <p>End-to-end Product &amp; Project Management centered on a User Story Map. Beneficiary-first design keeps your team focused on who your product truly serves.</p>
               <p><a href="/services#vista-opus"><span>Learn More <span class="sr-only">About Vista Opus</span></span></a></p>
            </li>
            <li class="reveal reveal-delay-1">
               <hgroup>
                  <h3><span>Libri Res</span></h3>
               </hgroup>
               <p>Modern bookkeeping made human. A simplified UX with extensible plugins for miles tracking, invoicing, and more — without the enterprise-level complexity.</p>
               <p><a href="/services#libri-res"><span>Learn More <span class="sr-only">About Libri Res</span></span></a></p>
            </li>
            <li class="reveal reveal-delay-2">
               <hgroup>
                  <h3><span>Diarium Salus</span></h3>
               </hgroup>
               <p>Healthy bodies and minds produce better work. A personal health, diet, and workout companion with premade plans and detailed analytics.</p>
               <p><a href="/services#diarium-salus"><span>Learn More <span class="sr-only">About Diarium Salus</span></span></a></p>
            </li>
         </ul>
      </section>

      <aside aria-labelledby="overview-label">
         <hgroup class="reveal sr-only">
            <h2 id="overview-label"><span>Quick Overview</span></h2>
         </hgroup>

         <ul>
            <li>
               <span class="keyword">Onsite</span>
               <span>Professionals Available</span>
            </li>
            <li>
               <span class="keyword">3+</span>
               <span>Software Products</span>
            </li>
            <li>
               <span class="keyword">Global</span>
               <span>Reach &amp; Availability</span>
            </li>
            <li>
               <span class="keyword">Agile</span>
               <span>&amp; Waterfall Support</span>
            </li>
         </ul>
      </aside>

      <section aria-labelledby="testamonials-label">
         <hgroup class="reveal sr-only">
            <h2 id="testamonials-label"><span>Testamonials</span></h2>
         </hgroup>

         <ul>
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
         </ul>
      </section>

      <section aria-describedby="contact-us-hgroup">
         <hgroup id="contact-us-hgroup">
            <h2>
               <span>Ready To</span>
               <span class="keyword">Transform</span>
               <span>Your Business?</span>
            </h2>
         </hgroup>
         <p class="tagline">Whether you need powerful software tools or expert professionals, we're here to help you focus on what matters most.</p>

         <p><a href="/contact"><span>Get In Touch</span></a></p>
         <p><a href="/about"><span>More About Us</span></a></p>
      </section>

   </main>

   <footer>
      <section>
         <hgroup>
            <h2><span>Focus Assist</span></h2>
         </hgroup>
         <p>Professional facilitation in Product Management and Project Management. Purpose-built software and expert professionals, available worldwide.</p>
      </section>

      <section aria-labelledby="quick-links-footer-section-label">
         <hgroup class="sr-only">
            <h3><span id="quick-links-footer-section-label">Quick Links</span></h3>
         </hgroup>

         <div aria-labelledby="quick-links-products-label">
            <hgroup>
               <h4><span id="quick-links-products-label">Products</span></h4>
            </hgroup>

            <ul>
               <li><a href=""><span>Vista Opus</span></a></li>
               <li><a href=""><span>Libri Res</span></a></li>
               <li><a href=""><span>Diarium Salus</span></a></li>
            </ul>
         </div>

         <div aria-labelledby="quick-links-services-label">
            <hgroup>
               <h4><span id="quick-links-services-label">Services</span></h4>
            </hgroup>

            <ul>
               <li><a href=""><span>Agile Transformation</span></a></li>
               <li><a href=""><span>Agile Coaching</span></a></li>
               <li><a href=""><span>Product Management</span></a></li>
               <li><a href=""><span>Project Management</span></a></li>
               <li><a href=""><span>Scrum and Scrum@Scale</span></a></li>
               <li><a href=""><span>Scaled Agile Framework (SAFe)</span></a></li>
            </ul>
         </div>

         <div aria-labelledby="quick-links-company-label">
            <hgroup>
               <h4><span id="quick-links-company-label">Company</span></h4>
            </hgroup>

            <ul>
               <li><a href=""><span>About Us</span></a></li>
               <li><a href=""><span>Blog</span></a></li>
               <li><a href=""><span>Contact Us</span></a></li>
            </ul>
         </div>
      </section>

      <section aria-labelledby="legal-footer-section-label">
         <hgroup class="sr-only">
            <h3><span id="legal-footer-section-label">Legal</span></h3>
         </hgroup>

         <p>&copy; 2026 Focus Assist LLC. All rights reserved.</p>

         <ul>
            <li><a href="/accessibility-statement">Accessibility Statement</a></li>
            <li><a href="/privacy-policy">Privacy Policy</a></li>
            <li><a href="/terms-of-service">Terms of Service</a></li>
         </ul>
      </section>
   </footer>

   <!-- ACM Menu Script -->
   <script data-component="accessible-menu">
   /** ACCESSIBLE COLLAPSIBLE MENU (ACM) */
   (function ACM() {
      'use strict';

      const CONFIG = {
         selectors: { toggle: '#acm-toggle', dropdown: '[data-acm-dropdown]', panel: '.acm-panel', nested: '.acm-nested' },
         classes: { right: 'acm-panel--right', above: 'acm-panel--above', left: 'acm-panel--left' },
         breakpoint: 768,
         padding: 16
      };

      const navToggle = document.querySelector(CONFIG.selectors.toggle);
      const dropdowns = document.querySelectorAll(CONFIG.selectors.dropdown);

      function getFocusable(container) {
         return [...container.querySelectorAll('a[href], button, [tabindex]:not([tabindex="-1"]), summary')]
            .filter(el => el.offsetParent !== null);
      }

      function isNested(el) { return el.classList.contains('acm-nested'); }

      function positionPanel(dropdown) {
         const panel = dropdown.querySelector(CONFIG.selectors.panel);
         if (!panel || window.innerWidth <= CONFIG.breakpoint) return;
         panel.classList.remove(CONFIG.classes.right, CONFIG.classes.above, CONFIG.classes.left);
         void panel.offsetHeight;
         const rect = panel.getBoundingClientRect();
         const vw = window.innerWidth, vh = window.innerHeight, pad = CONFIG.padding;
         if (isNested(dropdown)) {
            if (rect.right > vw - pad) panel.classList.add(CONFIG.classes.left);
         } else {
            if (rect.right > vw - pad) panel.classList.add(CONFIG.classes.right);
         }
         const newRect = panel.getBoundingClientRect();
         if (newRect.bottom > vh - pad) panel.classList.add(CONFIG.classes.above);
      }

      function closeOthers(except) {
         dropdowns.forEach(d => { if (d !== except && d.open && !d.contains(except)) d.open = false; });
      }

      function closeAll() {
         dropdowns.forEach(d => d.open = false);
         if (navToggle) navToggle.open = false;
      }

      function handleKey(e, dropdown) {
         const panel = dropdown.querySelector(CONFIG.selectors.panel);
         if (!panel) return;
         const items = getFocusable(panel);
         const idx = items.indexOf(document.activeElement);
         switch (e.key) {
            case 'Escape':
               e.preventDefault(); e.stopPropagation();
               dropdown.open = false;
               dropdown.querySelector('summary').focus();
               break;
            case 'ArrowDown':
               e.preventDefault();
               items[(idx + 1) % items.length]?.focus();
               break;
            case 'ArrowUp':
               e.preventDefault();
               items[(idx - 1 + items.length) % items.length]?.focus();
               break;
            case 'ArrowRight': {
               const nested = document.activeElement.closest(CONFIG.selectors.nested);
               if (nested && !nested.open) {
                  e.preventDefault(); nested.open = true;
                  setTimeout(() => getFocusable(nested.querySelector(CONFIG.selectors.panel))[0]?.focus(), 10);
               }
               break;
            }
            case 'ArrowLeft':
               if (isNested(dropdown)) {
                  e.preventDefault(); dropdown.open = false;
                  dropdown.querySelector('summary').focus();
               }
               break;
            case 'Home': e.preventDefault(); items[0]?.focus(); break;
            case 'End': e.preventDefault(); items[items.length - 1]?.focus(); break;
            case 'Tab':
               setTimeout(() => { if (!dropdown.contains(document.activeElement)) dropdown.open = false; }, 0);
               break;
         }
      }

      dropdowns.forEach(dropdown => {
         const summary = dropdown.querySelector('summary');
         dropdown.addEventListener('toggle', () => {
            if (dropdown.open) {
               positionPanel(dropdown);
               if (!isNested(dropdown)) closeOthers(dropdown);
            }
         });
         dropdown.addEventListener('keydown', e => {
            if (dropdown.open) handleKey(e, dropdown);
            else if (e.key === 'ArrowDown' && document.activeElement === summary) {
               e.preventDefault(); dropdown.open = true;
               setTimeout(() => getFocusable(dropdown.querySelector(CONFIG.selectors.panel))[0]?.focus(), 10);
            }
         });
         summary.addEventListener('keydown', e => {
            if (e.key === 'Enter' || e.key === ' ') {
               setTimeout(() => {
                  if (dropdown.open) getFocusable(dropdown.querySelector(CONFIG.selectors.panel))[0]?.focus();
               }, 10);
            }
         });
      });

      if (navToggle) {
         const mq = window.matchMedia(`(min-width: ${CONFIG.breakpoint + 1}px)`);
         function setToggleState(desktop) {
            if (desktop) {
               navToggle.open = true;
            } else if (!navToggle.hasAttribute('data-user-toggled')) {
               navToggle.open = false;
            }
         }
         setToggleState(mq.matches);
         mq.addEventListener('change', e => {
            navToggle.removeAttribute('data-user-toggled');
            setToggleState(e.matches);
         });
         navToggle.addEventListener('toggle', () => {
            if (window.innerWidth <= CONFIG.breakpoint) {
               navToggle.setAttribute('data-user-toggled', '');
            }
            if (!navToggle.open) closeAll();
         });
      }

      document.addEventListener('click', e => {
         if (!e.target.closest(CONFIG.selectors.dropdown) && !e.target.closest(CONFIG.selectors.toggle)) {
            dropdowns.forEach(d => d.open = false);
            if (navToggle && window.innerWidth <= CONFIG.breakpoint) navToggle.open = false;
         }
      });
      document.addEventListener('keydown', e => {
         if (e.key === 'Escape') {
            dropdowns.forEach(d => d.open = false);
            if (navToggle && window.innerWidth <= CONFIG.breakpoint) navToggle.open = false;
         }
      });

      let resizeTimer;
      window.addEventListener('resize', () => {
         clearTimeout(resizeTimer);
         resizeTimer = setTimeout(() => dropdowns.forEach(d => { if (d.open) positionPanel(d); }), 100);
      });

      /* Gamepad support */
      class GamepadInput {
         constructor() {
            this.state = {}; this.poll = null;
            window.addEventListener('gamepadconnected', () => this.start());
            window.addEventListener('gamepaddisconnected', () => this.stop());
         }
         start() { if (!this.poll) this.poll = setInterval(() => this.check(), 100); }
         stop() { if (!navigator.getGamepads().some(g => g)) { clearInterval(this.poll); this.poll = null; } }
         check() {
            for (const gp of navigator.getGamepads()) {
               if (!gp) continue;
               const [ax0, ax1] = gp.axes, btns = gp.buttons;
               this.input('up', btns[12]?.pressed || ax1 < -0.5);
               this.input('down', btns[13]?.pressed || ax1 > 0.5);
               this.input('left', btns[14]?.pressed || ax0 < -0.5);
               this.input('right', btns[15]?.pressed || ax0 > 0.5);
               this.input('a', btns[0]?.pressed);
               this.input('b', btns[1]?.pressed);
            }
         }
         input(name, pressed) {
            if (pressed && !this.state[name]) {
               const keys = { up: 'ArrowUp', down: 'ArrowDown', left: 'ArrowLeft', right: 'ArrowRight', a: 'Enter', b: 'Escape' };
               document.activeElement.dispatchEvent(new KeyboardEvent('keydown', { key: keys[name], bubbles: true }));
               if (name === 'a') document.activeElement.click?.();
            }
            this.state[name] = pressed;
         }
      }
      new GamepadInput();
   })();
   </script>

   <!-- Page Scripts -->
   <script>
   'use strict';

   /* ═══════════════════════════════════════════
      HEADER SCROLL STATE
      ═══════════════════════════════════════════ */
   const siteHeader = document.getElementById('site-header');
   window.addEventListener('scroll', () => {
      siteHeader.classList.toggle('scrolled', scrollY > 80);
   }, { passive: true });

   /* ═══════════════════════════════════════════
      SMOOTH SCROLL for in-page hash links
      ═══════════════════════════════════════════ */
   document.addEventListener('click', (e) => {
      const link = e.target.closest('a[href^="#"]');
      if (!link) return;
      const id = link.getAttribute('href').slice(1);
      const target = document.getElementById(id);
      if (target) {
         e.preventDefault();
         target.scrollIntoView({ behavior: 'smooth' });
      }
   });

   /* ═══════════════════════════════════════════
      SCROLL REVEAL (IntersectionObserver)
      ═══════════════════════════════════════════ */
   const io = new IntersectionObserver((entries) => {
      for (const entry of entries) {
         if (entry.isIntersecting) {
            entry.target.classList.add('visible');
            io.unobserve(entry.target);
         }
      }
   }, { threshold: .1, rootMargin: '0px 0px -30px 0px' });

   document.querySelectorAll('.reveal').forEach(el => io.observe(el));

   /* ═══════════════════════════════════════════
      HERO PARALLAX on scroll (desktop only)
      ═══════════════════════════════════════════ */
   const heroSection = document.querySelector('section[aria-describedby="hero-section-hgroup"]');

   if (heroSection && window.matchMedia('(min-width: 1025px)').matches) {
      const hgroup   = heroSection.querySelector('hgroup');
      const tagline  = heroSection.querySelector('.tagline');
      const ctaLinks = heroSection.querySelectorAll(':scope > p:has(> a)');
      const schedule = heroSection.querySelector('#example-schedule');

      let ticking = false;
      window.addEventListener('scroll', () => {
         if (ticking) return;
         ticking = true;
         requestAnimationFrame(() => {
            const rect = heroSection.getBoundingClientRect();
            const progress = Math.max(0, Math.min(1, -rect.top / (heroSection.offsetHeight * .6)));

            if (hgroup) {
               hgroup.style.transform  = 'translateY(' + (progress * -40) + 'px)';
               hgroup.style.opacity    = 1 - progress * .8;
            }
            if (tagline) {
               tagline.style.transform = 'translateY(' + (progress * -20) + 'px)';
               tagline.style.opacity   = 1 - progress;
            }
            ctaLinks.forEach(cta => {
               cta.style.transform = 'translateY(' + (progress * -10) + 'px)';
               cta.style.opacity   = 1 - progress;
            });
            if (schedule) {
               schedule.style.transform = 'translateY(' + (progress * -30) + 'px) translateX(' + (progress * 20) + 'px)';
               schedule.style.opacity   = 1 - progress * .7;
            }

            ticking = false;
         });
      }, { passive: true });
   }
   </script>
</body>
</html>
