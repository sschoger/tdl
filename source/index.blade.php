@extends('_layouts.master')

@section('body')
<div>
    <div class="header bgg10 pt4 ">
        <div class="container">
            <div class="tdl-logo tac mb4"><img src="/img/tdl-logo3.png"></div>
            <h1 class="sans tcg70 fw2 ft7 tac lh1-4 mb2">
                A step-by-step training course on building robust, well-designed Laravel applications with TDD.
            </h1>
            <p class="sans tcg80 tac fw6 ft4 mb2 lh1-5">
                Coming November 29th!
            </p>
        </div>
    </div>
    <div class="container">
        <div class="nmt6 mb4">
            @include('_partials.sign-up-ck')
        </div>

        <div class="tcg80 mb6">
            <p class="sans tcg80 fw7 ft7 mb2 lh1-5">
                Most examples make testing look pretty easy.
            </p>

            <p class="sans fw3 ft4 mb2 lh1-5">
                When I was first learning how to test, every example I could find made it seem fairly straightforward.
            </p>

            <div class="sans fw3 ft4 lh1-5 ml2 mb2">
                <p class="mb1">
                    <em>"Assert 5+5 equals 10? Sure, piece of cake!"</em>
                </p>
            </div>

            <p class="sans fw3 ft4 mb2 lh1-5">
            </p>
            <p class="sans fw4 ft4 mb2 lh1-5">
                <span class="dib bghighlight py.25 ph.5 nml.5">But as soon as I tried to test a <em>real</em> application, <span class="fw6">I was paralyzed</span>.</span>
            </p>

            <div class="sans fw3 ft4 lh1-5 ml2 mb2">
                <p class="mb1"><em>"What's the <span class="fw6">very first test</span> I'm supposed to write for this brand new app?"</em></p>
                <p class="mb1"><em>"How do I test that this <span class="fw6">email gets sent</span>?"</em></p>
                <p class="mb1"><em>"What about this code that needs to <span class="fw6">talk to the Stripe API</span>?"</em></p>
            </div>

            <p class="sans fw4 ft4 lh1-5">
                Simple examples are fine for learning the basics, but I wanted to know how to apply this stuff to <em class="fw8">real products</em> that I was <em class="fw8">actually building</em>
                on the job.
            </p>
        </div>

        <div class="tcg80 mb6">
            <p class="sans fw7 ft7 mb2 lh1-5">
                Test-Driven Laravel is the course I wish I had.
            </p>
            <p class="sans fw4 ft4 lh1-5 mb3">
                Earlier this year I <a href="https://adamwathan.me/2016/01/11/test-driven-laravel-from-scratch/" class="tc3 :tc1">published a screencast</a> that walked through how I get the ball rolling when using TDD to build a brand new application:
            </p>

            <div class="card bggc bgw brdr1 bcg10 br6 lh1-5 ph2 pv1 mb3 flex">
                <div class="mw20 relative">
                    <img src="/img/video-thumb.png">
                    <a href="https://adamwathan.me/2016/01/11/test-driven-laravel-from-scratch/" class="bgbo30 absolute pin-edges flex aic jcc o70 :o100" target="_blank" rel="noopener noreferrer">
                        <svg class="icon tcw" xmlns="http://www.w3.org/2000/svg" height="36" width="36" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M2.93 17.07A10 10 0 1 0 17.07 2.93 10 10 0 0 0 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM7 6l8 4-8 4V6z"/></svg>
                    </a>
                </div>
                <div class="pl2 flex-grow flex fdc jcsb">
                    <div class="mv1">
                        <blockquote class="sans tcg70 fw3 ft4 mb1"><em>"Everyone watch this. Seriously."</em></blockquote>
                        <p class="tcg50 sans fw4 ft3 mb1">
                            <img src="https://pbs.twimg.com/profile_images/745781059040645120/Hg8W0kXe.jpg" alt="" width="30" height="30" class="mr.5 circle">
                            <a class="tc3 :tc1" href="https://twitter.com/taylorotwell/status/671737941039779841" target="_blank" rel="noopener noreferrer">Taylor Otwell</a>, creator of Laravel
                        </p>
                    </div>
                    <div class="mv1">
                        <a href="https://adamwathan.me/2016/01/11/test-driven-laravel-from-scratch/" class="flex aic tc3 :tc1 fw6 ft3" target="_blank" rel="noopener noreferrer">
                            <svg class="icon mr1" xmlns="http://www.w3.org/2000/svg" height="20" width="20" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M2.93 17.07A10 10 0 1 0 17.07 2.93 10 10 0 0 0 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM7 6l8 4-8 4V6z"/></svg>
                            <span class="lh1">Watch Test-Driven Laravel from Scratch</span>
                        </a>
                    </div>
                </div>
            </div>

            <p class="sans fw4 ft4 lh1-5 mb2">
                Test-Driven Laravel takes all of the ideas I've had to piece together and refine myself, and bundles them up into a <span class="fw8">comprehensive video course</span>.
            </p>

            <p class="sans fw4 ft4 lh1-5 mb2">
                It's <span class="fw8">everything I know about testing</span>, consolidated into a single resource that you can work through in just a few days.
            </p>
        </div>

    </div>
    <div class="section-learn bgg05 brdr1--top brdr1--bottom bcg20 pv4 tal lh1-5">
        <div class="container">
            <h3 class="tc3 fw7 ft8 mb2 lh1-5">What you’ll learn</h3>
            <p class="sans tcg50 lh1 fw4 ft4 mb2 lh1-5">
                The biggest objective of this course is to teach you how to TDD something <em>real</em>.
            </p>
            <p class="sans tcg50 lh1 fw4 ft4 mb2 lh1-5">
                Not just a cookie-cutter to-do app, or an unrealistically stripped down version of some existing product.
            </p>
            <p class="sans tcg50 lh1 fw4 ft4 mb3 lh1-5">
                <em>You'll learn how to design a solid test suite for a real-world, marketable product that you could actually charge money for.</em>
            </p>
            <p class="sans tcg70 lh1 fw6 ft4  mb2 lh1-5">We'll cover fundamentals like:</p>
            <ul class="sans tcg50 fw4 ft4 lh1-5 mb3">
                <li class="mb1">What test should you write first</li>
                <li class="mb1">Organizing your test suite</li>
                <li class="mb1">Feature tests vs. unit tests</li>
                <li class="mb1">Testing request validations</li>
                <li class="mb1">Testing authorization rules</li>
                <li class="mb1">Working with test databases</li>
                <li class="mb1">Speeding up your tests with test doubles</li>
            </ul>
            <p class="sans tcg70 lh1 fw6 ft4 mb2 lh1-5">...as well as <em>hard</em> topics, like:</p>
            <ul class="sans tcg50 fw4 ft4 lh1-5 mb1">
                <li class="mb1">Testing code that interacts with third-party services</li>
                <li class="mb1">Writing your own test doubles from scratch</li>
                <li class="mb1">Testing automated payouts with Stripe Connect</li>
                <li class="mb1">Testing the sending of mass emails</li>
                <li class="mb1">How to test race conditions</li>
                <li class="mb1">Testing file uploads and server side image processing</li>
            </ul>
        </div>
    </div>

    <div class="section-about pv4 tal lh1-5">
        <div class="container">
            <div class="mb6">
                <h3 class="tc3 fw7 ft8 mb2 lh1-5">What we'll build</h3>
                <p class="sans tcg70 fw4 ft6 mb2 lh1-5">Together we'll build <em>TicketBeast</em>, a platform for local concert promoters to sell tickets to their events.</p>
                <div class="screenshot brdr1 bcg20 mb4">
                    <img src="/img/ticketbeast-screen.png">
                </div>
                <p class="sans tcg50 lh1 fw4 ft4 mb2 lh1-5">Local promoters can sign up, connect their Stripe account, and start adding concerts.</p>
                <p class="sans tcg50 lh1 fw4 ft4 mb2 lh1-5">When a concert is ready to be promoted, they share a public link to their concert page via social media, add it to a Facebook event page, etc.</p>
                <p class="sans tcg50 lh1 fw4 ft4 mb3 lh1-5">Concert goers can visit this link to buy tickets to the show and get them sent to their email.</p>
                <p class="sans tcg70 lh1 fw6 ft4 mb2 lh1-5">On the back end, concert promoters can do things like:</p>
                <ul class="sans tcg50 fw4 ft4 lh1-5 mb2">
                    <li class="mb1">See how tickets are selling</li>
                    <li class="mb1">Edit event details</li>
                    <li class="mb1">Release more tickets if the event is selling out and they want to move it to a bigger venue</li>
                    <li class="mb1">Send important updates to ticket holders</li>
                    <li class="mb1">Print the guest list to check off each attendee at the door on the day of the concert</li>
                    <li class="mb1">Cancel events and refund people's money</li>
                </ul>
                <p class="sans tcg50 lh1 fw4 ft4 lh1-5">We'll build the entire application using TDD every step of the way, and you'll have access to all of the source code to pour over when we're finished.</p>
            </div>
            <div class="mb2">
                @include('_partials.sign-up-ck')
            </div>
            <div class="card bgw brdr1 bcg10 br6 lh1-5 ph2 pv1 flex">
                <div class="pl2 flex-grow flex fdc jcsb">
                    <div class="mv1">
                        <blockquote class="sans tcg70 fw3 ft4 mb1"><em>"Definitely sign up for Adam's upcoming TDD course. Highly recommended."</em></blockquote>
                        <p class="tcg50 sans fw4 ft3 mb1">
                            <img src="https://pbs.twimg.com/profile_images/741794879114772484/K7QTm6NM.jpg" alt="" width="30" height="30" class="mr.5 circle">
                            <a class="tc3 :tc1" href="https://twitter.com/jeffrey_way/status/796812812555354112" target="_blank" rel="noopener noreferrer">Jeffrey Way</a>, creator of Laracasts
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="section-learn bgg05 brdr1--top brdr1--bottom bcg20 pv4 tal">
        <div class="container">
            <h3 class="tc3 fw7 ft8 mb2">Course Outline</h3>
            <p class="sans tcg70 fw4 ft6 mb2">Here's how TicketBeast breaks down into what we cover in the course:</p>
            <ol class="sans tcg50 fw4 ft4 lh1-5 mb2">
                <li class="mb1">Getting the Ball Rolling: Viewing a Concert Listing</li>
                <li class="mb1">Purchasing Concert Tickets</li>
                <li class="mb1">Test-Driving the Real Stripe Adapter</li>
                <li class="mb1">Emailing Order Confirmations</li>
                <li class="mb1">Promoter Login and Account Settings</li>
                <li class="mb1">Adding New Concerts</li>
                <li class="mb1">Updating Concert Details</li>
                <li class="mb1">Saving Drafts and Publishing Later</li>
                <li class="mb1">Building the Sales Dashboard</li>
                <li class="mb1">Exporting the Guest List</li>
                <li class="mb1">Messaging Ticket Holders</li>
                <li class="mb1">Uploading and Processing Poster Images</li>
                <li class="mb1">Inviting Promoters via the CLI</li>
                <li class="mb1">Automating Payouts and Service Fees with Stripe Connect</li>
                <li class="mb1">Cancelling Concerts and Issuing Refunds</li>
                <li class="mb1">Building a Check-in API</li>
                <li class="mb1">Bonus: Testing Vue Components Mini-Course</li>
                <li class="mb1">Bonus: Reimplenting a Feature with Behat Mini-Course</li>
                <li class="mb1">Bonus: Mockery Best Practices and Anti-Patterns Mini-Course</li>
            </ol>
        </div>
    </div> --}}

    <div class="section-about bgg05 bcg20 brdr1--top pv4 tal">
        <div class="container">
            <h3 class="tc3 fw7 ft8 mb2">About</h3>
            <div class="frame">
                <div class="blk md-blk3">
                    <div class="about-avatar">
                        <img src="/img/avatar-adam.png">
                    </div>
                </div>
                <div class="blk md-blk9">
                    <div class="about-bio">
                        <p class="sans tcg50 fw4 ft4 lh1-5 mb1">Hey! I'm <a class="tc3 :tc1" href="/">@adamwathan</a>, senior web application developer, host of <a class="tc3 :tc1" href="/">Full Stack Radio</a>, creator of <a class="tc3 :tc1" href="/">Nitpick CI</a>, and author of <a class="tc3 :tc1" href="/">Refactoring to Collections</a>.</p>
                        <p class="sans tcg50 fw4 ft4 lh1-5 mb1">I teach everything I know on my <a class="tc3 :tc1" href="/">blog</a>, through screencasts, and at conferences around the world.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
