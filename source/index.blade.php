@extends('_layouts.master')

@section('body')
<div class="header bgg05">
			<div class="container">
			<div class="tdl-logo"></div>
			<h1 class="sans fw3 ft10 tac">A step-by-step training course on building well-designed, robust Laravel applications with TDD.</h1>
			</div>
		</div>
		<div class="container">
			<div class="card pa2 bgw brdr1 bcg20 br6">
				<p class="fw4 ft4 tac">Sign up below to be the first to know when it launches and to recieve an exclusive launch discount.  You'll also get four free preview lessons delivered to check out in the mean time!</p>
				<form action="/">
					<input class="xbrdr brdr1 bcg20 pv1 ph2 ft4" type="text" name="email" placeholder="Enter your email"><br>
					<button class="pv1 ph2 ft4 fw6 bg1 tcw brdr1 bc1">Sign up</button>
				</form>
			</div>
			<h2 class="sans fw4 ft8 tal">If you enjoyed my "Test-Driven Laravel from Scratch" screencast, you're going to love what I'm working on next.
			</h2>
			<div class="quote bgg05 brdr3--left bc1 pa2">
				<blockquote class="fw4 ft6">Everyone watch this. Seriously</blockquote>
				
			</div>
		</div>
		<div class="section-learn bgg05 brdr1--top brdr1--bottom bcg20 pv4 tal">
			<div class="container">
			<h3 class="tc1 fw4 ft8">What you’ll learn</h3>
			<p class="lh1 fw4 ft4">One of my biggest objectives with this course is teaching you how to TDD something real.</p>
			<p class="lh1 fw4 ft4">Not just a cookie-cutter to-do app, or an unrealistically stripped down version of some existing product.</p>
			<p class="lh1 fw4 ft4">I'll show you how to design a solid test suite for a real-world, marketable product that you could actually charge money for.</p>
			<p class="lh1 fw4 ft4">We'll cover fundamentals like:</p>
			<ul class="fw4 ft4">
				<li>What test should you write first</li>
				<li>Organizing your test suite</li>
				<li>Feature tests vs. unit tests</li>
				<li>Testing request validations</li>
				<li>Testing authorization rules</li>
				<li>Working with test databases</li>
				<li>Speeding up your tests with test doubles</li>
			</ul>
			</div>
		</div>
		
		<div class="section-about pv4 tal">
			<div class="container">
			<p class="fw4 ft6">When I was learning to test, working through the typical examples always made it seem pretty straightforward.</p>
			</div>
@endsection
