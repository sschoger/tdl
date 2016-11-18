@extends('_layouts.master')

@section('body')
<div class="header bgg10 pt4 ">
    <div class="container">
        <div class="tdl-logo tac mb4"><img src="/img/tdl-logo.png"></div>
        <h1 class="tcg70 sans fw5 ft8 tac lh1-4 mb2">A step-by-step course to building well-designed, robust Laravel applications with TDD.</h1>
    </div>
</div>
<div class="container">
    <div class="card nmt6 bgw brdr1 bcg20 br6 mb4 lh1-4">
        <div class="bcg20 brdr1--bottom pa2 ">
            <p class="fw4 ft4 tac mb2 bcg20 lh1-4 tcg50">Sign up below to be the first to know when it launches and to recieve an exclusive launch discount.</p>
            <p class="fw4 ft4 tac bcg20 lh1-4 tcg50">You'll also get four free preview lessons delivered to check out in the mean time!</p>
        </div>
        <form class="pa2" action="/">
            <input class="full xbrdr brdr1 bcg20 pv1 ph2 ft4" type="text" name="email" placeholder="Enter your email"><br>
            <button class="full pv1 ph2 ft4 fw6 bg3 :bg1 tcw brdr1 bc3 :bc1 br4">Sign up</button>
        </form>
    </div>

    <div>
        <p class="tcg70 fw4 ft6 mb2 lh1-4">When I was learning to test, working through the typical examples always made it seem pretty straightforward.</p>
        <p class="tcg50 fw4 ft4 mb2 lh1-4"><em>Assert $calculator->add(5, 5) equals 10? Piece of cake!</em></p>
        <p class="tcg50 fw4 ft4 mb2 lh1-4">But as soon as I tried to test a real application, I was paralyzed.</p>

        <div class="quote brdr3--left bc3 pl2 mb4">
            <p class="tcg70 fw5 ft4 mb2 lh1-4">"What's the very first test I'm supposed to write for this brand new app?"</p>
            <p class="tcg70 fw5 ft4 mb2 lh1-4">"How do I test that this email gets sent?"</p>
            <p class="tcg70 fw5 ft4 mb2 lh1-4">"What about this code that needs to talk to the Stripe API?"</p>
        </div>


        <p class="tcg50 fw4 ft4 mb2 lh1-4">Simple examples are fine for learning the basics, but Test-Driven Laravel is the course that show you <strong>how to apply this stuff to real products you would actually build on the job.</strong></p>
    </div>

    <h2 class="tcg70 sans fw3 ft7 tal mb4 lh1-4">If you enjoyed my "Test-Driven Laravel from Scratch" screencast, you're going to love what I'm working on next.
    </h2>
    <div class="video-embed mb4">
        <div class="absolute pin-edges bgg90"></div>
        {{-- <iframe src="https://player.vimeo.com/video/151390908" width="640" height="400" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> --}}
    </div>
    <div class="quote bgg05 brdr3--left bc3 pa2 mb4">
        <blockquote class="tcg70 fw4 ft6 mb1"><em>Everyone watch this. Seriously</em></blockquote>
        <p class="quote-name tcg50 sans fw4 ft4 pl4"><a class="tc3 :tc1" href="/">Taylor Otwell</a>, creator of Laravel</p>
    </div>
</div>
<div class="section-learn bgg05 brdr1--top brdr1--bottom bcg20 pv4 tal lh1-4">
    <div class="container">
        <h3 class="tc3 fw4 ft8 mb2 lh1-4">What you’ll learn</h3>
        <p class="tcg50 lh1 fw4 ft4 mb1 lh1-4">One of my biggest objectives with this course is teaching you how to TDD something real.</p>
        <p class="tcg50 lh1 fw4 ft4 mb1 lh1-4">Not just a cookie-cutter to-do app, or an unrealistically stripped down version of some existing product.</p>
        <p class="tcg50 lh1 fw4 ft4 mb1 lh1-4">I'll show you how to design a solid test suite for a real-world, marketable product that you could actually charge money for.</p>
        <p class="tcg50 lh1 fw4 ft4  mb2 lh1-4">We'll cover fundamentals like:</p>
        <ul class="tcg50 fw4 ft4 lh1-4 mb2">
            <li class="mb1">What test should you write first</li>
            <li class="mb1">Organizing your test suite</li>
            <li class="mb1">Feature tests vs. unit tests</li>
            <li class="mb1">Testing request validations</li>
            <li class="mb1">Testing authorization rules</li>
            <li class="mb1">Working with test databases</li>
            <li class="mb1">Speeding up your tests with test doubles</li>
        </ul>
        <p class="tcg50 lh1 fw4 ft4 mb2 lh1-4">...as well as hard topics, like:</p>
        <ul class="tcg50 fw4 ft4 lh1-4 mb1">
            <li class="mb1">Testing code that interacts with third-party services</li>
            <li class="mb1">Coming up with a testing strategy for automated payouts with Stripe Connect</li>
            <li class="mb1">Testing the sending of mass emails</li>
            <li class="mb1">How to test race conditions</li>
            <li class="mb1">Testing file uploads and server side image processing</li>
        </ul>
    </div>
</div>

<div class="section-about pv4 tal lh1-4">
    <div class="container">
        <h3 class="tc3 fw4 ft8 mb2 lh1-4">What we'll build</h3>
        <p class="tcg70 fw4 ft6 mb2 lh1-4">Together we'll build TicketBeast, a platform for local concert promoters to sell tickets to their events.</p>
        <div class="screenshot brdr1 bcg20 mb4">
            <img src="/img/ticketbeast-screen.png">
        </div>
        <p class="tcg50 lh1 fw4 ft4 mb1 lh1-4">Local promoters can sign up, connect their Stripe account, and start adding concerts.</p>
        <p class="tcg50 lh1 fw4 ft4 mb1 lh1-4">When a concert is ready to be promoted, they share a public link to their concert page via social media, add it to a Facebook event page, etc.</p>
        <p class="tcg50 lh1 fw4 ft4 mb1 lh1-4">Concert goers can visit this link to buy tickets to the show and get them sent to their email.</p>
        <p class="tcg50 lh1 fw4 ft4 mb2 lh1-4">On the back end, concert promoters can do things like:</p>
        <ul class="tcg50 fw4 ft4 lh1-4 mb2">
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
        <h3 class="tc3 fw4 ft8 mb2">Course Outline</h3>
        <p class="tcg70 fw4 ft6 mb2">Here's how TicketBeast breaks down into what we cover in the course:</p>
        <ol class="tcg50 fw4 ft4 lh1-4 mb2">
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
        <div class="card pa2 bgw brdr1 bcg20 br6 lh1-4">
            <p class="tcg50 fw4 ft4 tac pb2 mb2 brdr1--bottom bcg20 lh1-4">Sign up below to be the first to know when it launches and to recieve an exclusive launch discount.  You'll also get four free preview lessons delivered to check out in the mean time!</p>
            <form action="/">
                <input class="full xbrdr brdr1 bcg20 pv1 ph2 ft4" type="text" name="email" placeholder="Enter your email"><br>
                <button class="full pv1 ph2 ft4 fw6 bg3 :bg1 tcw brdr1 bc3 :bc1 br4">Sign up</button>
            </form>
        </div>
    </div>
</div>

<div class="section-about bgg05 bcg20 brdr1--top pv4 tal">
    <div class="container">
        <h3 class="tc3 fw4 ft8 mb2">About</h3>
        <div class="frame">
            <div class="blk md-blk3">
                <div class="about-avatar">
                    <img src="/img/avatar-adam.png">
                </div>
            </div>
            <div class="blk md-blk9">
                <div class="about-bio">
                    <p class="tcg50 fw4 ft4 lh1-4 mb1">Hey! I'm <a class="tc3 :tc1" href="/">@adamwathan</a>, senior web application developer, host of <a class="tc3 :tc1" href="/">Full Stack Radio</a>, creator of <a class="tc3 :tc1" href="/">Nitpick CI</a>, and author of <a class="tc3 :tc1" href="/">Refactoring to Collections</a>.</p>
                    <p class="tcg50 fw4 ft4 lh1-4 mb1">I teach everything I know on my <a class="tc3 :tc1" href="/">blog</a>, through screencasts, and at conferences around the world.</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
