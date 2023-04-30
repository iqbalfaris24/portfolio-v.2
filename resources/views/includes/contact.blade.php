<section id="contact">
    <h1>CONTACT
        <div class="hr"></div>
    </h1>
    <div class="contact" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-offset="-300"
        data-aos-duration="1500">
        <div class="container">
            @if (session('success'))
                <div class="alert alert-dark alert-dismissible fade show" role="alert">
                    Pesan Berhasil Dikirim!, Saya akan membalas pesan Anda secepatnya.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <form action="/create" method="POST" class="needs-validation kontak" novalidate>
                @csrf
                <div class="row mb-3">
                    <label for="nama" class="col-sm-2 col-form-label">Name :</label>
                    <div class="col">
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror "
                            id="name" placeholder="Full Name" value={{ old('name') }}>
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class=" row mb-3">
                    <label for="email" class="col-sm-2 col-form-label">Email :</label>
                    <div class="col">
                        <input type="email" id="email" name="email"
                            class="form-control @error('email') is-invalid @enderror" placeholder=" E-Mail"
                            value={{ old('email') }}>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class=" row mb-3">
                    <label for="telepon" class="col-sm-2 col-form-label">Phone Number :</label>
                    <div class="col">
                        <input type="number" class="form-control  @error('phone') is-invalid @enderror" name="phone"
                            id="phone" placeholder="Phone Number" value={{ old('phone') }}>
                        @error('phone')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="pesan" class="col-sm-2 col-form-label">Message :</label>
                    <div class="col">
                        <textarea class="form-control @error('message') is-invalid @enderror" id="message" name="message" rows="3"
                            placeholder=" Message" value={{ old('message') }}></textarea>
                        @error('message')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class=" button">
                    <button class="btn" type="submit"><i class="fa-regular fa-paper-plane fa-bounce"
                            style="--fa-animation-duration: 2.5s;"></i> SEND </button>
                </div>
            </form>

            <div class="sosmed">
                <p class="text-center">Or</p>
                <div class="sosmed-link">
                    <a class="whatsapp" href="https://wa.me/+6285156882421" target="blank"><i
                            class="fa-brands fa-whatsapp"></i></a>
                    <a class="telegram" href="https://t.me/Flexy24" target="blank"><i
                            class="fa-brands fa-telegram"></i></a>
                    <a class="linkedin" href="https://www.linkedin.com/in/iqbalfaris24" target="blank"><i
                            class="fa-brands fa-linkedin-in "></i></a>
                </div>
            </div>

        </div>
    </div>
</section>
