<sign-up-form inline-template>
    <div class="card bgw brdr1 bcg10 br6 lh1-5 pa2">
        <form action="https://app.convertkit.com/landing_pages/128080/subscribe"
            v-show="! submitted"
            @submit.prevent="submit"
        >
            <div class="mb2">
                <p class="sans fw3 ft6 tac bcg20 lh1-5 tcg60 mw36 center">
                    Sign up to get <span class="fw6 tcg80">four free preview lessons</span> and an <span class="fw6 tcg80">exclusive discount</span> at launch.
                </p>
            </div>
            <form action="/">
                <input class="full sans-serif xbrdr brdr1 bcg10 bgg05 pv1 ph2 ft4 ::bc1 br4 mb1.5" type="text" name="email" placeholder="Enter your email">
                <button class="full sans-serif pv1 ph2 ft4 fw6 bg3 :bg1 tcw brdr1 bc3 :bc1 br4 smooth">Send me the course preview</button>
            </form>
        </form>
        <div v-show="submitted">
            <p class="sans fw3 ft6 tac bcg20 lh1-5 tcg60 mw36 center">
                Sign up to get <span class="fw6 tcg80">four free preview lessons</span> and an <span class="fw6 tcg80">exclusive discount</span> at launch.
            </p>
        </div>
    </div>
</sign-up-form>
