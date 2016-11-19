@extends('_layouts.master')

@section('body')
<div class="header bgg10 pt4 ">
    <div class="container">
        <div class="tdl-logo tac mb4"><img src="/img/tdl-logo3.png"></div>
        <h1 class="sans tcg70 fw2 ft7 tac lh1-4 mb2">
            A step-by-step training course on building robust, well-designed Laravel applications with TDD.
        </h1>
    </div>
</div>
<div class="container">
    <div class="nmt6 mb4">
        @include('_partials.sign-up')
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
            {{-- <span class="dib bghighlight py.25 ph.5 nml.5">But as soon as you try to test a <em>real</em> application, <span class="fw6">you're paralyzed</span>.</span> --}}
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
        <p class="sans fw7 ft6 mb3 lh1-5">
            Test-Driven Laravel is <span class="fw7">the course I wish I had</span> 5 years ago.
        </p>
    </div>

    <div class="video-embed mb4">
        <div class="absolute pin-edges bgg90"></div>
        {{-- <iframe src="https://player.vimeo.com/video/151390908" width="640" height="400" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> --}}
    </div>
    <div class="quote bgg05 brdr3--left bc3 pa2 mb4">
        <blockquote class="sans tcg70 fw4 ft6 mb1"><em>"Everyone watch this. Seriously."</em></blockquote>
        <p class="quote-name tcg50 sans fw4 ft4 pl4"><a class="tc3 :tc1" href="/">Taylor Otwell</a>, creator of Laravel</p>
    </div>
</div>
<div class="section-learn bgg05 brdr1--top brdr1--bottom bcg20 pv4 tal lh1-5">
    <div class="container">
        <h3 class="tc3 fw7 ft8 mb2 lh1-5">What you’ll learn</h3>
        <p class="sans tcg50 lh1 fw4 ft4 mb2 lh1-5">One of my biggest objectives with this course is teaching you how to TDD something <em>real</em>.</p>
        <p class="sans tcg50 lh1 fw4 ft4 mb2 lh1-5">Not just a cookie-cutter to-do app, or an unrealistically stripped down version of some existing product.</p>
        <p class="sans tcg50 lh1 fw4 ft4 mb3 lh1-5"><em>I'll show you how to design a solid test suite for a real-world, marketable product that you could actually charge money for.</em></p>
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
            <li class="mb1">Coming up with a testing strategy for automated payouts with Stripe Connect</li>
            <li class="mb1">Testing the sending of mass emails</li>
            <li class="mb1">How to test race conditions</li>
            <li class="mb1">Testing file uploads and server side image processing</li>
        </ul>
    </div>
</div>

<div class="section-about pv4 tal lh1-5">
    <div class="container">
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
            <li class="mb1">We'll build the entire application using TDD every step of the way, and you'll have access to all of the source code to pour over when we're finished.</li>
        </ul>
    </div>
</div>

<div class="section-learn bgg05 brdr1--top brdr1--bottom bcg20 pv4 tal">
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
</div>

<div class="section-sign-up bcg20 pv4 tal">
    <div class="container">
        @include('_partials.sign-up')
    </div>
</div>

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

@endsection
