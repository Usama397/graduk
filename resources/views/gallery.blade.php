@extends('layout.app')

@section('content')
<main>

    <div class="breadcrumb__area dark-green breadcrumb-space overflow-hidden custom-width position-relative z-1" data-background="assets/imgs/breadcrumb/breadcrumb.png">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-12">
                    <div class="breadcrumb__content">
                        <div class="breadcrumb__title-wrapper mb-15 mb-sm-10 mb-xs-5">
                            <h1 class="breadcrumb__title color-white wow fadeIn animated" data-wow-delay=".1s">Gallery</h1>
                        </div>
                        <div class="breadcrumb__menu wow fadeIn animated" data-wow-delay=".5s">
                            <nav>
                                <ul>
                                    <li><span><a href="/">Home</a></span></li>
                                    <li class="active"><span>Gallery</span></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--gallery-->
    <section class="gallery__area position-relative  pt-100 section-space-bottom overflow-hidden">
        <div class="container">
            <div class="row mb-minus-30">
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="gallery__item position-relative overflow-hidden">
                        <div class="gallery__media mb-30">
                            <img src="{{ asset('./assets/imgs/gallery/gallery-img1.png') }}">                        </div>
                        <div class="gallery__content">
                            <h3 class="gallery__title"><a href="gallery">Tourist Places</a></h3>
                            <span>Travel</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="gallery__item position-relative overflow-hidden">
                        <div class="gallery__media mb-30">
                            <img src="{{ asset('./assets/imgs/gallery/gallery-img2.png') }}">                        </div>
                        <div class="gallery__content">
                            <h3 class="gallery__title"><a href="gallery">Accurate & Expert</a></h3>
                            <span>Immigration</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="gallery__item position-relative overflow-hidden">
                        <div class="gallery__media mb-30">
                            <img src="{{ asset('./assets/imgs/gallery/gallery-img3.png') }}">                        </div>
                        <div class="gallery__content">
                            <h3 class="gallery__title"><a href="gallery">Visa Enquiry</a></h3>
                            <span>Consultancy</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="gallery__item position-relative overflow-hidden">
                        <div class="gallery__media mb-30">
                            <img src="{{ asset('./assets/imgs/gallery/gallery-img4.png') }}">                        </div>
                        <div class="gallery__content">
                            <h3 class="gallery__title"><a href="gallery">Spousal Visa</a></h3>
                            <span>Immigration</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="gallery__item position-relative overflow-hidden">
                        <div class="gallery__media mb-30">
                            <img src="{{ asset('./assets/imgs/gallery/gallery-img5.png') }}">                        </div>
                        <div class="gallery__content">
                            <h3 class="gallery__title"><a href="gallery">Tour & Travels</a></h3>
                            <span>Agency</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="gallery__item position-relative overflow-hidden">
                        <div class="gallery__media mb-30">
                            <img src="{{ asset('./assets/imgs/gallery/gallery-img6.png') }}">                        </div>
                        <div class="gallery__content">
                            <h3 class="gallery__title"><a href="gallery">Visa Consulting</a></h3>
                            <span>Travel</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--contact-info-->
    <section class="contact-info__area contact-us__area contact-us">
        <div class="container contact-info__shadow">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6">
                    <div class="contact-info__content">
                        <div class="section__title-wrapper mb-20">
                            <h6 class="section__title-wrapper-black-subtitle mb-10 wow fadeInLeft animated" data-wow-delay=".2s"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_3830_53335)">
                                <path d="M19.3 2.6308C19.2618 2.55102 19.1936 2.48962 19.1103 2.46005L12.1959 0.019136C12.0224 -0.0422388 11.832 0.0489276 11.7706 0.222427L10.2 4.66675H9.51302V3.53342C9.513 3.38035 9.47783 3.22932 9.41023 3.09198C9.34263 2.95464 9.2444 2.83466 9.12311 2.74127C9.00182 2.64789 8.86071 2.5836 8.71066 2.55335C8.5606 2.52311 8.4056 2.52773 8.25761 2.56684L0.248416 4.67783V4.68383C0.177823 4.70158 0.115123 4.74226 0.0701599 4.7995C0.0251971 4.85674 0.000518721 4.9273 0 5.00008L0 19.0001C0 19.5523 0.447749 20.0001 0.999998 20.0001H10.3333C10.8856 20.0001 11.3333 19.5523 11.3333 19.0001V15.9755L14.0066 16.9192C14.1803 16.9803 14.3707 16.8894 14.4319 16.7157L19.3143 2.8855C19.3287 2.84419 19.3349 2.80043 19.3325 2.75672C19.33 2.71301 19.319 2.67022 19.2999 2.6308H19.3ZM8.42769 3.20967C8.47703 3.19667 8.52869 3.19515 8.57871 3.20523C8.62873 3.2153 8.67577 3.23671 8.71623 3.2678C8.7567 3.29896 8.78947 3.339 8.81202 3.38483C8.83456 3.43066 8.84628 3.48105 8.84627 3.53213V4.66675H2.90366L8.42769 3.20967ZM10.6666 19.0001C10.6666 19.0885 10.6315 19.1732 10.569 19.2358C10.5065 19.2983 10.4217 19.3334 10.3333 19.3334H0.999998C0.911593 19.3334 0.826808 19.2983 0.764296 19.2358C0.701784 19.1732 0.666665 19.0885 0.666665 19.0001V5.33342H10.3333C10.4217 5.33342 10.5065 5.36853 10.569 5.43105C10.6315 5.49356 10.6666 5.57834 10.6666 5.66675V19.0001ZM13.4067 6.60246L13.8333 6.40016L14.0366 6.82545L12.417 11.4091C12.3877 11.4924 12.3926 11.5841 12.4306 11.6638L12.7776 12.3897L12.6704 12.6941L12.0093 12.0095C11.9734 11.9721 11.9294 11.9436 11.8806 11.9262C11.8318 11.9089 11.7797 11.9031 11.7283 11.9094L11.3333 11.9594V11.5127L11.6176 11.3767C11.6974 11.3386 11.7588 11.2704 11.7884 11.1871L12.4551 9.30182L13.4067 6.60246ZM14.0353 8.82737L14.7121 9.91478L14.5963 10.2424L13.7866 9.53345L14.0353 8.82737ZM11.3333 10.4731V9.55703L11.6613 9.54337L11.3333 10.4731ZM11.9001 8.86645L11.3333 8.88974V8.44603L12.1494 8.16137L11.9001 8.86645ZM13.9141 16.1794L11.3333 15.2684V12.6314L11.6456 12.5923L12.5667 13.5451C12.598 13.577 12.6353 13.6022 12.6765 13.6194C12.7177 13.6366 12.762 13.6453 12.8066 13.645C12.8304 13.6452 12.8541 13.6426 12.8773 13.6374C12.9328 13.6253 12.9843 13.5993 13.0268 13.5617C13.0694 13.5241 13.1017 13.4763 13.1206 13.4227L13.4539 12.4797C13.4834 12.3964 13.4785 12.3047 13.4402 12.2251L13.0916 11.5001L13.5477 10.2084L14.527 11.0668C14.5878 11.1201 14.6659 11.1495 14.7468 11.1495C14.7752 11.1495 14.8036 11.1457 14.8311 11.1384C14.8837 11.1246 14.9322 11.0982 14.9723 11.0613C15.0124 11.0245 15.0429 10.9785 15.0611 10.9272L15.3944 9.98411C15.411 9.93699 15.4168 9.88673 15.4114 9.83705C15.406 9.78738 15.3894 9.73956 15.363 9.69716L14.3196 8.02108L14.7103 6.91483C14.7249 6.8735 14.7312 6.8297 14.7289 6.78593C14.7265 6.74216 14.7156 6.69928 14.6966 6.65975L14.2901 5.8095C14.2712 5.76998 14.2447 5.73457 14.2121 5.70529C14.1796 5.67601 14.1416 5.65343 14.1003 5.63884C14.059 5.62426 14.0152 5.61795 13.9715 5.62028C13.9277 5.6226 13.8849 5.63353 13.8454 5.65242L12.9946 6.05916C12.9552 6.07803 12.9199 6.10448 12.8906 6.13701C12.8614 6.16954 12.8389 6.20751 12.8244 6.24875L12.4333 7.35637L11.3333 7.74008V5.66675C11.3329 5.49616 11.2888 5.32853 11.2051 5.17989C11.1214 5.03125 11.0009 4.90658 10.8553 4.81779L11.4001 3.27305L11.5223 2.9265L12.2891 0.759843L18.5753 2.97875L13.9141 16.1794Z" fill="#034833"/>
                                <path d="M16.5439 5.09032L16.7657 4.46157L17.3374 4.66324L17.1155 5.29198L16.5439 5.09032ZM11.972 3.4762L12.194 2.84766L12.7654 3.04945L12.5434 3.67803L11.972 3.4762ZM15.4008 4.68682L15.6228 4.05807L16.1943 4.2599L15.9723 4.88849L15.4008 4.68682ZM13.115 3.87986L13.337 3.25128L13.9083 3.45311L13.6863 4.0817L13.115 3.87986ZM14.2579 4.28303L14.48 3.65445L15.0514 3.85628L14.8294 4.48482L14.2579 4.28303ZM5.51301 6.66794C3.67202 6.66794 2.17969 8.16027 2.17969 10.0013C2.17969 11.8423 3.67202 13.3346 5.51301 13.3346C7.35401 13.3346 8.84634 11.8423 8.84634 10.0013C8.84438 8.16127 7.35318 6.67002 5.51301 6.66794ZM7.92005 8.8616L7.4653 8.76169C7.2653 8.71756 7.06522 8.6826 6.86322 8.65231C6.83297 8.45053 6.79646 8.24974 6.75372 8.05023L6.65359 7.59565C7.20852 7.85979 7.65568 8.30679 7.92005 8.8616ZM2.84631 10.0013C2.84698 9.86502 2.85806 9.72897 2.87969 9.59435L3.70393 9.41093C3.83039 9.38293 3.95768 9.35968 4.08527 9.33768C4.05304 9.77954 4.05304 10.2232 4.08527 10.665C3.95764 10.643 3.83039 10.6196 3.70393 10.5916L2.87969 10.4083C2.85809 10.2737 2.84695 10.1376 2.84635 10.0013H2.84631ZM4.76172 9.25031C5.26137 9.20572 5.76399 9.20572 6.26364 9.25031C6.30839 9.74995 6.30839 10.2526 6.26364 10.7522C5.76399 10.797 5.26133 10.797 4.76168 10.7522C4.71693 10.2526 4.71697 9.74995 4.76172 9.25031ZM6.93926 9.33768C7.06701 9.35968 7.1943 9.38293 7.32059 9.41093L8.14497 9.59435C8.19119 9.86371 8.19119 10.139 8.14497 10.4083L7.32059 10.5916C7.19434 10.6196 7.06701 10.643 6.93926 10.6653C6.97165 10.2234 6.97165 9.77965 6.93926 9.33768ZM5.91972 7.36798L6.10301 8.19269C6.13101 8.31898 6.1546 8.44627 6.17676 8.57402C5.73474 8.54163 5.29095 8.54163 4.84893 8.57402C4.87106 8.44627 4.89435 8.31898 4.92268 8.19269L5.10593 7.36798C5.37527 7.32224 5.65039 7.32224 5.91972 7.36798ZM4.37306 7.59323L4.27293 8.04798C4.22898 8.24798 4.19397 8.44806 4.16373 8.65006C3.96195 8.68019 3.76116 8.7166 3.56164 8.75923L3.10689 8.85935C3.37146 8.30502 3.81845 7.85842 4.37302 7.59435L4.37306 7.59323ZM3.10623 11.1399L3.56098 11.24C3.76098 11.284 3.96085 11.319 4.16306 11.3493C4.19319 11.551 4.2296 11.7518 4.27222 11.9513L4.37235 12.4059C3.8175 12.142 3.37024 11.6954 3.10556 11.1409L3.10623 11.1399ZM5.10622 12.6326L4.92293 11.8079C4.8946 11.6819 4.87135 11.5543 4.84918 11.4269C5.06993 11.443 5.2916 11.4539 5.51326 11.4539C5.73493 11.4539 5.95597 11.443 6.17701 11.4269C6.15489 11.5543 6.13126 11.6819 6.10326 11.8079L5.92001 12.6326C5.65068 12.6783 5.37556 12.6783 5.10622 12.6326ZM6.65289 12.4073L6.75301 11.9526C6.7973 11.7526 6.83197 11.5527 6.86259 11.3505C7.06434 11.3203 7.2651 11.2839 7.46459 11.2413L7.91918 11.1412C7.65505 11.6965 7.20779 12.144 6.65259 12.4083L6.65289 12.4073ZM2.84635 16.0013H8.17967V16.6679H2.84635V16.0013ZM3.51302 17.3346H7.51301V18.0012H3.51302V17.3346ZM5.17968 14.6679H5.84635V15.3346H5.17968V14.6679ZM3.84635 14.6679H4.51302V15.3346H3.84635V14.6679ZM6.51301 14.6679H7.17968V15.3346H6.51301V14.6679Z" fill="#034833"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_3830_53335">
                                <rect width="20" height="20" fill="white"/>
                                </clipPath>
                                </defs>
                            </svg>Success story
                            </h6>
                            <h2 class="section__title-wrapper-title wow fadeInLeft animated" data-wow-delay=".3s">Remote Destinations Seeking Solitude  </h2>
                        </div>
                        <div class="contact-info__content-text wow fadeInLeft animated" data-wow-delay=".4s">
                            <p>Lorem Ipsum is simply dummy text the printing and typese Lorem Ipsum has been the industry's standard dummy text ever</p>
                            <div class="contact-info__content-text-list mt-20">
                                <ul>
                                    <li><i class="fa-solid fa-check"></i>Mistakes To Avoid</li>
                                    <li class="mt-10"><i class="fa-solid fa-check"></i>Your Startup</li>
                                    <li class="mt-10"><i class="fa-solid fa-check"></i>Knew About Fonts</li>
                                    <li class="mt-10"><i class="fa-solid fa-check"></i>Knew About Fonts</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="contact-us__title-wrapper">
                        <div class="contact-us__form-wrapper p-0">
                            <form class="contact-us__form" id="contact-us__form" method="POST" action="./mail.php">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="contact-us__input wow fadeInLeft animated" data-wow-delay=".5s">
                                            <span>Your Email</span>
                                            <input name="email" id="email" type="email" placeholder="Your Email">
                                            <div class="icon">
                                                <i class="fa-solid fa-paper-plane"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="contact-us__input wow fadeInLeft animated" data-wow-delay=".6s">
                                            <span>Your Phone</span>
                                            <input name="phone" id="phone" type="tel" placeholder="Your Phone">
                                            <div class="icon icon-3">
                                                <i class="fa-solid fa-phone"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="contact-us__input wow fadeInLeft animated" data-wow-delay=".7s">
                                            <span>Your Address</span>
                                            <input name="address" id="address" type="email" placeholder="Your Address">
                                            <div class="icon">
                                                <i class="fa-solid fa-location-dot"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="contact-us__textarea wow fadeInLeft animated" data-wow-delay=".8s">
                                            <span>Message</span>
                                            <textarea name="textarea" id="textarea" cols="30" rows="10" placeholder="Write Message.."></textarea>
                                            <div class="icon">
                                                <i class="fa-solid fa-envelope"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="contact-btn mt-30 wow fadeInLeft animated" data-wow-delay=".9s">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>
@endsection