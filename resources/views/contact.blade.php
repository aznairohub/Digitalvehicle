<section class="content">
    <div class="row g-5">
        <div class="col-lg-6 wow slideInUp" data-wow-delay="0.3s">
            <form action="/contactaction"  method="post">
                @csrf
                <div class="row g-3">
                    <div class="col-md-6">
                        <input type="text" class="form-control border-0 bg-light px-4" placeholder="Your Name" style="height: 55px;" name="first">
                    </div>
                    <div class="col-md-6">
                        <input type="email" class="form-control border-0 bg-light px-4" placeholder="Your Email" style="height: 55px;" name="second">
                    </div>
                    <div class="col-12">
                        <input type="text" class="form-control border-0 bg-light px-4" placeholder="Subject" style="height: 55px;" name="third">
                    </div>
                    <div class="col-12">
                        <textarea class="form-control border-0 bg-light px-4 py-3" rows="4" placeholder="Message" name="msg" ></textarea>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                    </div>
                </div>
            </form>
        </div>
</section>

