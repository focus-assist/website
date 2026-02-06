<?php

namespace Database\Seeders;

use App\Services\BlogService;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = $this->getDummyPosts();

        foreach ($posts as $post) {
            BlogService::CreatePost($post);
        }
    }

    /**
     * Get the dummy posts data.
     */
    protected function getDummyPosts(): array
    {
        return [
            // Post 1: Featured post
            [
                'title' => 'Why Beneficiary-First Design Changes Everything',
                'slug' => 'why-beneficiary-first-design-changes-everything',
                'excerpt' => 'Most product teams build features. The best product teams build solutions for specific people with specific needs. Explore how shifting to a beneficiary-first mindset transforms the way you plan, prioritize, and deliver.',
                'content_markdown' => $this->getPost1Content(),
                'category' => 'Product Management',
                'category_slug' => 'product-management',
                'featured_image' => 'https://focus-assist.us/assets/media/product-pitch.webp',
                'featured_image_alt' => 'Beneficiary-first product design',
                'author' => 'The Focus Assist Team',
                'is_featured' => true,
                'is_published' => true,
                'published_at' => Carbon::parse('2026-01-28'),
            ],
            // Post 2
            [
                'title' => 'The Retrospective That Actually Changed Our Process',
                'slug' => 'the-retrospective-that-actually-changed-our-process',
                'excerpt' => 'Retros can feel like going through the motions. Here\'s how one team turned their retrospective into the most valuable ceremony on the calendar.',
                'content_markdown' => $this->getPost2Content(),
                'category' => 'Agile',
                'category_slug' => 'agile',
                'featured_image' => 'https://focus-assist.us/assets/media/daily-standup-01.webp',
                'featured_image_alt' => 'Retrospective meeting',
                'author' => 'The Focus Assist Team',
                'is_featured' => false,
                'is_published' => true,
                'published_at' => Carbon::parse('2026-01-15'),
            ],
            // Post 3
            [
                'title' => 'Planning Poker: More Than Just Numbers',
                'slug' => 'planning-poker-more-than-just-numbers',
                'excerpt' => 'Story point estimation isn\'t about getting the number right — it\'s about the conversation that happens when numbers don\'t agree.',
                'content_markdown' => $this->getPost3Content(),
                'category' => 'Estimation',
                'category_slug' => 'estimation',
                'featured_image' => 'https://focus-assist.us/assets/media/product-pitch.webp',
                'featured_image_alt' => 'Planning poker session',
                'author' => 'The Focus Assist Team',
                'is_featured' => false,
                'is_published' => true,
                'published_at' => Carbon::parse('2026-01-04'),
            ],
            // Post 4
            [
                'title' => 'When Waterfall is the Right Answer',
                'slug' => 'when-waterfall-is-the-right-answer',
                'excerpt' => 'Agile is powerful — but not universal. Explore the scenarios where a traditional approach still delivers better outcomes.',
                'content_markdown' => $this->getPost4Content(),
                'category' => 'Team Dynamics',
                'category_slug' => 'team-dynamics',
                'featured_image' => 'https://focus-assist.us/assets/media/daily-standup-01.webp',
                'featured_image_alt' => 'Daily standup meeting',
                'author' => 'The Focus Assist Team',
                'is_featured' => false,
                'is_published' => true,
                'published_at' => Carbon::parse('2025-12-19'),
            ],
            // Post 5
            [
                'title' => 'Building Software That Doesn\'t Overwhelm',
                'slug' => 'building-software-that-doesnt-overwhelm',
                'excerpt' => 'Why we designed Libri Res to give you less — and how that restraint makes for a fundamentally better product experience.',
                'content_markdown' => $this->getPost5Content(),
                'category' => 'UX',
                'category_slug' => 'ux',
                'featured_image' => 'https://focus-assist.us/assets/media/product-pitch.webp',
                'featured_image_alt' => 'Feedback session',
                'author' => 'The Focus Assist Team',
                'is_featured' => false,
                'is_published' => true,
                'published_at' => Carbon::parse('2025-12-08'),
            ],
            // Post 6
            [
                'title' => 'From Vision to Roadmap: Bridging the Gap',
                'slug' => 'from-vision-to-roadmap-bridging-the-gap',
                'excerpt' => 'The jump from a product vision to an actionable roadmap is where most teams stumble. Here\'s a structured approach.',
                'content_markdown' => $this->getPost6Content(),
                'category' => 'Strategy',
                'category_slug' => 'strategy',
                'featured_image' => 'https://focus-assist.us/assets/media/product-pitch.webp',
                'featured_image_alt' => 'Product pitch meeting',
                'author' => 'The Focus Assist Team',
                'is_featured' => false,
                'is_published' => true,
                'published_at' => Carbon::parse('2025-11-22'),
            ],
            // Post 7
            [
                'title' => 'The Scrum Master Isn\'t the Meeting Police',
                'slug' => 'the-scrum-master-isnt-the-meeting-police',
                'excerpt' => 'What happens when organizations misunderstand the Scrum Master role — and how servant leadership transforms team dynamics.',
                'content_markdown' => $this->getPost7Content(),
                'category' => 'Culture',
                'category_slug' => 'culture',
                'featured_image' => 'https://focus-assist.us/assets/media/daily-standup-01.webp',
                'featured_image_alt' => 'Team meeting',
                'author' => 'The Focus Assist Team',
                'is_featured' => false,
                'is_published' => true,
                'published_at' => Carbon::parse('2025-11-10'),
            ],
            // Post 8
            [
                'title' => 'User Stories: Writing for Humans, Not Tickets',
                'slug' => 'user-stories-writing-for-humans-not-tickets',
                'excerpt' => 'The difference between a user story that drives clarity and one that creates confusion often comes down to a few key principles.',
                'content_markdown' => $this->getPost8Content(),
                'category' => 'Product Management',
                'category_slug' => 'product-management',
                'featured_image' => 'https://focus-assist.us/assets/media/product-pitch.webp',
                'featured_image_alt' => 'Writing user stories',
                'author' => 'The Focus Assist Team',
                'is_featured' => false,
                'is_published' => true,
                'published_at' => Carbon::parse('2025-10-28'),
            ],
            // Post 9
            [
                'title' => 'Why Your Daily Standup Feels Pointless',
                'slug' => 'why-your-daily-standup-feels-pointless',
                'excerpt' => 'If your team dreads the daily standup, the problem isn\'t the ceremony — it\'s how you\'re running it.',
                'content_markdown' => $this->getPost9Content(),
                'category' => 'Agile',
                'category_slug' => 'agile',
                'featured_image' => 'https://focus-assist.us/assets/media/daily-standup-01.webp',
                'featured_image_alt' => 'Daily standup',
                'author' => 'The Focus Assist Team',
                'is_featured' => false,
                'is_published' => true,
                'published_at' => Carbon::parse('2025-10-15'),
            ],
            // Post 10
            [
                'title' => 'Measuring What Matters: Beyond Velocity',
                'slug' => 'measuring-what-matters-beyond-velocity',
                'excerpt' => 'Velocity is easy to measure but dangerous to optimize for. Here are the metrics that actually indicate team health.',
                'content_markdown' => $this->getPost10Content(),
                'category' => 'Estimation',
                'category_slug' => 'estimation',
                'featured_image' => 'https://focus-assist.us/assets/media/product-pitch.webp',
                'featured_image_alt' => 'Team metrics dashboard',
                'author' => 'The Focus Assist Team',
                'is_featured' => false,
                'is_published' => true,
                'published_at' => Carbon::parse('2025-10-01'),
            ],
        ];
    }

    protected function getPost1Content(): string
    {
        return <<<'MARKDOWN'
Every product team talks about being "user-centered." It's in every company's values, every job description, every product strategy deck. But there's a subtle and critical difference between saying you build for users and actually structuring your entire process around the specific people your product serves — what we call **beneficiaries**.

## The Problem with "Wouldn't It Be Cool If"

We've all been in that meeting. Someone sketches a feature on the whiteboard, everyone gets excited, and before you know it, the team is three sprints deep into building something nobody asked for. This is the "wouldn't it be cool if" trap, and it's one of the most expensive mistakes in product development.

The root cause isn't bad intentions — it's a missing anchor. When your process doesn't systematically tie every feature back to a specific person with a specific need, features drift toward novelty rather than value.

## Centering on Beneficiaries

Beneficiary-first design isn't a new framework to learn or a certification to earn. It's a shift in how you ask questions. Instead of "what should we build next?" the question becomes "who are we building for, and what do they need from us right now?"

> The best products aren't built from feature lists. They're built from a deep understanding of the people who depend on them.

This shift changes everything downstream. Your User Story Map doesn't just organize work — it tells the story of your beneficiaries' journey. Your backlog priorities aren't debated in abstract terms — they're weighed against real human needs.

## How Vista Opus Embeds This Thinking

When we built Vista Opus, we didn't just add a "user persona" field to a project management tool. We restructured the entire tool around beneficiaries. The User Story Map — the central artifact — starts with *who* before it gets to *what*. Beneficiary Activity Flows replace abstract user flow diagrams. Progress isn't measured in tickets closed but in capability delivered to the people who need it.

Even our stakeholder reporting is designed around this principle. Gamified progress views don't just make standups prettier — they translate technical progress into language that beneficiaries and non-technical stakeholders can follow without a decoder ring.

## Making the Shift

If you're looking to move your team toward a beneficiary-first approach, start with these fundamentals: identify who your product actually serves (not your buyers — your users), map their journeys before you map your architecture, and measure success in terms of their outcomes, not your outputs.

It's a simple reframing with profound implications. And it's how we believe the best products in the world will be built.
MARKDOWN;
    }

    protected function getPost2Content(): string
    {
        return <<<'MARKDOWN'
Every two weeks, the team gathered in the same conference room, answered the same three questions, and left with the same vague action items that never seemed to stick. Sound familiar?

## The Ceremony Nobody Wanted

For six months, our retrospectives followed the same pattern: sticky notes on a whiteboard, a few complaints about unclear requirements, someone mentioning that deployments were slow, and then back to work. The "improvements" we identified rarely made it past the following Monday.

The turning point came when our Scrum Master tried something different. Instead of asking "what went well" and "what could be improved," she asked a single question: "What's the one thing that, if we fixed it, would make the biggest difference to how we work?"

## The Power of One Thing

The conversation that followed was completely different. Instead of a scattered list of minor grievances, the team focused. We talked about how our definition of "done" was ambiguous, how that ambiguity caused rework, and how the rework was burning everyone out.

By the end of the hour, we had one clear action item: rewrite our definition of done with explicit acceptance criteria templates. One thing. Specific. Actionable. Owned.

## What Changed

Three sprints later, our rework rate had dropped by 40%. More importantly, the team started believing that retrospectives could actually change things. The next retro focused on deployment automation. The one after that tackled our testing strategy.

> The best retrospectives don't generate long lists. They generate momentum.

## Making It Work

If your retros feel stale, try constraining the conversation. One problem. One owner. One deadline. It feels limiting at first, but constraints create focus, and focus creates change.
MARKDOWN;
    }

    protected function getPost3Content(): string
    {
        return <<<'MARKDOWN'
"I think it's a 3." "Really? I had it as an 8."

That moment of disagreement isn't a problem to solve — it's the entire point of planning poker.

## Beyond the Numbers

Story point estimation has a reputation problem. Teams either treat it as a precise science (it isn't) or dismiss it as meaningless ritual (it shouldn't be). The truth is somewhere more interesting: the value of estimation isn't in the number you land on, but in the conversation that gets you there.

When two experienced developers look at the same story and see vastly different complexity, something important is happening. One of them knows something the other doesn't. Maybe it's a hidden dependency, a past experience with similar work, or an assumption about scope that hasn't been made explicit.

## The Conversation Is the Feature

Good planning poker facilitates knowledge transfer disguised as estimation. When the 3 and the 8 have to explain their reasoning, the whole team learns. Requirements get clarified. Risks get surfaced. Assumptions get challenged.

> The goal isn't consensus on a number. It's shared understanding of the work.

## Avoiding the Traps

The most common mistake teams make is rushing to converge. "Let's just call it a 5 and move on." This defeats the purpose entirely. If there's genuine disagreement, explore it. The ten minutes you spend discussing might save you ten hours of rework later.

The second trap is treating story points as commitments. They're estimates — educated guesses about relative complexity. Using them to measure individual performance or hold teams accountable destroys their usefulness.

## Making Estimation Valuable

Run planning poker as a conversation, not a voting exercise. Celebrate disagreement as a learning opportunity. And remember: if your estimates are always exactly right, you're probably not taking on enough uncertainty.
MARKDOWN;
    }

    protected function getPost4Content(): string
    {
        return <<<'MARKDOWN'
In the rush to "go Agile," many organizations forget a fundamental truth: methodology should serve the work, not the other way around.

## The Agile Hammer

When all you have is a hammer, everything looks like a nail. The same is true with Agile. Teams that have successfully transformed often start seeing Agile as the solution to every problem. But some problems genuinely benefit from a more traditional approach.

## Where Waterfall Wins

Consider a hardware integration project with fixed regulatory requirements and a non-negotiable delivery date. Or a migration effort where the scope is completely defined and changes would be catastrophic. Or a compliance initiative where documentation and traceability are as important as the deliverable itself.

In these scenarios, the overhead of Agile ceremonies may not pay off. The iteration cycles that help software teams learn and adapt become friction when there's nothing to learn and adaptation isn't possible.

> The best methodology is the one that fits the work — not the one that fits your job title.

## The Hybrid Reality

Most organizations don't need to choose. They need to recognize that different work requires different approaches. Your product development might thrive with Scrum while your infrastructure team operates better with a structured plan.

## Asking the Right Questions

Before defaulting to any methodology, ask: How much do we know about what we're building? How likely are requirements to change? How important is early feedback? What are the consequences of getting it wrong?

The answers should guide your approach, not your assumptions about which methodology is "modern" or "correct."
MARKDOWN;
    }

    protected function getPost5Content(): string
    {
        return <<<'MARKDOWN'
The first version of Libri Res had twice as many features as it does today. It also had twice as many confused users.

## The Addition Addiction

Software teams love to add features. Every customer request becomes a checkbox. Every competitor capability becomes a must-have. The result is products that do everything and nothing well — cognitive overload disguised as comprehensiveness.

When we launched Libri Res, we fell into the same trap. Invoicing? Added. Expense categorization? Added. Multi-currency support? Why not. The feature list was impressive. The user experience was overwhelming.

## The Subtraction Solution

Our breakthrough came from watching people actually use the software. They weren't confused by any single feature — they were paralyzed by choice. Every screen presented too many options. Every workflow required too many decisions.

So we started removing things. Not hiding them behind settings or advanced menus — actually removing them. The invoicing module went to a plugin. The multi-currency support became opt-in. The default experience became radically simpler.

> The best products don't give you more. They help you do more with less.

## The Results

Support tickets dropped by 60%. User activation improved by 40%. And the features we removed? The people who needed them installed the plugins. Everyone else got a product they could actually use.

## Designing for Restraint

Every feature you add is a tax on every user. Before building, ask: does this serve the core job our users hired us to do? If the answer isn't a clear yes, it's probably a no.
MARKDOWN;
    }

    protected function getPost6Content(): string
    {
        return <<<'MARKDOWN'
Your vision statement is inspiring. Your roadmap is a mess. You're not alone.

## The Vision-Roadmap Gap

Product visions tend to be grand, aspirational, and vague. "Transform how teams collaborate." "Make data accessible to everyone." These statements energize stakeholders and guide general direction. But they don't tell you what to build next quarter.

The gap between vision and roadmap is where most product strategies die. Without a clear translation layer, teams either build whatever seems exciting or get stuck in analysis paralysis.

## The Bridge Framework

At Focus Assist, we use a structured approach to cross this gap:

1. **Outcomes over outputs**: Start by defining the measurable changes you want to see in your users' lives. Not features — outcomes.

2. **Opportunity mapping**: Identify the obstacles currently preventing those outcomes. These become your opportunity spaces.

3. **Solution brainstorming**: Only now do you think about features. What could you build to address each opportunity?

4. **Prioritization**: Stack rank opportunities by impact and effort. Your roadmap emerges from this ranking.

> A roadmap isn't a list of features. It's a sequence of bets on how to achieve your vision.

## The Living Document

The best roadmaps are updated quarterly, reviewed monthly, and held loosely. They represent your current best thinking, not an immutable contract. When you learn something that changes your priorities, the roadmap should change too.

## Getting Started

If your roadmap feels disconnected from your vision, try this exercise: for each item on your roadmap, articulate the outcome it drives and the opportunity it addresses. If you can't, it probably shouldn't be there.
MARKDOWN;
    }

    protected function getPost7Content(): string
    {
        return <<<'MARKDOWN'
"The Scrum Master makes sure we follow the process." If this is how your organization describes the role, you're missing the point entirely.

## The Misconception

Somewhere along the way, "Scrum Master" became synonymous with "process enforcer." The person who schedules meetings, watches the clock during standups, and reminds everyone about sprint commitments. Important administrative work, perhaps, but a profound misunderstanding of what the role should be.

## Servant Leadership in Practice

A true Scrum Master serves the team, not the process. Their job is to remove obstacles, facilitate growth, and create conditions where the team can do their best work. Sometimes that means challenging the process itself.

The best Scrum Masters we've worked with spend most of their time listening. They notice when someone is stuck and connect them with help. They see when team dynamics are off and address it before it becomes a crisis. They protect the team from organizational noise while keeping them connected to business context.

> The Scrum Master's success is measured by the team's success, not by adherence to ceremony.

## What Changes

When organizations shift their understanding of the role, remarkable things happen. Standups become shorter and more focused because the team runs them, not the Scrum Master. Retrospectives become more honest because there's psychological safety. Sprint commitments become more reliable because impediments get addressed.

## Making the Shift

If you're a Scrum Master who's been cast as the meeting police, start small. Stop running the standup and let the team self-organize. Use your time to have one-on-ones about blockers. Coach rather than direct. The role transformation takes time, but it's worth it.
MARKDOWN;
    }

    protected function getPost8Content(): string
    {
        return <<<'MARKDOWN'
"As a user, I want to log in so that I can access my account." We've all written this story. We've all groaned at it.

## The Template Trap

The user story format — "As a [role], I want [capability], so that [benefit]" — is a useful starting point. But too many teams treat it as a fill-in-the-blank exercise rather than a communication tool. The result is stories that technically fit the template but communicate nothing useful.

## Writing for Understanding

Good user stories answer three questions: Who are we building for? What do they need to accomplish? Why does it matter to them? The template guides you toward these answers, but the quality comes from the specificity.

Compare: "As a user, I want to search products so that I can find what I need."

With: "As a returning customer with a specific product in mind, I want to search by product name or SKU so that I can quickly reorder without browsing the catalog."

> The best user stories make you care about the person you're building for.

## The Conversation Carrier

Remember that user stories are placeholders for conversations, not specifications. A good story invites questions: What happens if there's no match? How many results should we show? Should we save search history?

If your stories don't generate questions, they're either too vague or too detailed. Either way, they're not doing their job.

## Acceptance Criteria

Every story needs clear acceptance criteria — the specific conditions that must be true for the story to be considered done. These aren't implementation details; they're testable statements about behavior. "Search results appear within 2 seconds." "Partial matches are included in results." "No results shows helpful suggestions."

## The Human Test

Before finalizing any story, read it aloud and ask: "Would I care about this if I were the person described?" If the answer is no, rewrite it until it matters.
MARKDOWN;
    }

    protected function getPost9Content(): string
    {
        return <<<'MARKDOWN'
Fifteen minutes of status updates that could have been an email. The daily standup has become the ceremony teams love to hate.

## The Status Meeting Trap

The standup was never meant to be a status meeting. Its purpose is coordination, not reporting. But somewhere along the way, "what did you do yesterday" became a recitation of tickets, and "what are you doing today" became a commitment to appease managers listening in.

No wonder it feels pointless.

## Refocusing on Coordination

The real question a standup should answer is: "What do we need to coordinate to make progress today?" This subtle shift changes everything. Instead of individual status reports, you get conversations about dependencies, blockers, and collaboration opportunities.

> The best standups feel like a huddle before a play, not a report to a supervisor.

## Tactical Changes

**Ditch the three questions.** Try: "What's blocking progress?" and "Where do you need help?" Most updates can be async.

**Stand in front of the board.** Whether physical or virtual, the work should be the focus, not individual contributions.

**Keep it to 10 minutes.** If it's taking longer, you're discussing too much. Take detailed conversations offline.

**Make it optional for those not blocked.** If someone has no blockers and needs no coordination, they can skip. Trust your team.

## The Manager Problem

The biggest impediment to effective standups is often management presence. When people feel like they're reporting up, they optimize for looking busy rather than surfacing problems. If you're a manager, consider stepping back — or at least making it clear you're there to help, not evaluate.

## A Simple Test

After your next standup, ask: "Did anyone learn something they needed to know?" If the answer is no, something needs to change.
MARKDOWN;
    }

    protected function getPost10Content(): string
    {
        return <<<'MARKDOWN'
"Our velocity went up 20% this quarter!" Great. But does that mean anything?

## The Velocity Illusion

Velocity — the amount of work a team completes per sprint, measured in story points — has become the default metric for Agile teams. It's easy to measure, easy to chart, and easy to misuse.

The problem with velocity is that it measures output, not outcome. A team can have increasing velocity while building the wrong things. They can hit their velocity targets while burning out. They can game the metric by inflating estimates.

## What Actually Matters

If velocity doesn't tell the whole story, what does? Here are the metrics that actually indicate whether a team is healthy and effective:

**Lead time**: How long from "idea" to "in users' hands"? Shorter is generally better, but the trend matters more than the absolute number.

**Deployment frequency**: How often are you shipping? Teams that deploy frequently tend to have better quality and faster feedback loops.

**Cycle time**: How long does work spend in progress? Long cycle times often indicate blockers, context switching, or work that's too big.

**Escaped defects**: How many bugs make it to production? This is a better quality indicator than test coverage percentages.

> The goal isn't to measure more. It's to measure what matters.

## The Team Health Factor

Beyond delivery metrics, pay attention to team health: Are people taking vacation? Is turnover low? Do team members help each other? These "soft" indicators often predict delivery problems before they show up in the data.

## Using Metrics Wisely

Metrics should prompt questions, not provide answers. When lead time increases, ask why. When deployment frequency drops, investigate. Use the numbers to guide conversations, not to judge performance.

And please, stop using velocity for anything other than sprint planning. It was never meant for more.
MARKDOWN;
    }
}
