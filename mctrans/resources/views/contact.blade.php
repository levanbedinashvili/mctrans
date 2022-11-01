@extends('layouts.app')
@section('content')

<!-- contact start -->
<section class="contact-area gray-bg pt-120 pb-80">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 col-lg-9 col-md-8">
                <div class="contact-form mb-40">
                    @if (app()->getLocale()=="ka")
                    <h3>დაგვიკავშირდით</h3>
                    @endif
                    @if (app()->getLocale()=="en")
                    <h3>Contact Us</h3>
                    @endif
                    @if (app()->getLocale()=="ru")
                    <h3>Связаться с нами</h3>
                    @endif
                    @if (app()->getLocale()=="ka")
                    <form action="#">
                        <div class="row">
                            <div class="col-xl-6">
                                <input type="text" placeholder="თქვენი სახელი">
                            </div>
                            <div class="col-xl-6">
                                <input type="text" placeholder="ელექტრონული ფოსტა">
                            </div>
                            <div class="col-xl-12">
                                <textarea name="message" cols="30" rows="10" placeholder="ტექსტი"></textarea>
                                <button class="thm-btn" type="submit">წერილის გაგზავნა</button>
                            </div>
                        </div>
                    </form>
                    @endif
                    @if (app()->getLocale()=="en")
                    <form action="#">
                        <div class="row">
                            <div class="col-xl-6">
                                <input type="text" placeholder="Name">
                            </div>
                            <div class="col-xl-6">
                                <input type="text" placeholder="Email">
                            </div>
                            <div class="col-xl-12">
                                <textarea name="message" cols="30" rows="10" placeholder="Text"></textarea>
                                <button class="thm-btn" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                    @endif
                    @if (app()->getLocale()=="ru")
                    <form action="#">
                        <div class="row">
                            <div class="col-xl-6">
                                <input type="text" placeholder="Имя">
                            </div>
                            <div class="col-xl-6">
                                <input type="text" placeholder="Почта">
                            </div>
                            <div class="col-xl-12">
                                <textarea name="message" cols="30" rows="10" placeholder="Текст"></textarea>
                                <button class="thm-btn" type="submit">Отправить</button>
                            </div>
                        </div>
                    </form>
                    @endif
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4">
                <div class="contact-info mb-40">
                    @if (app()->getLocale()=="ka")
                    <h3>საკონტაქტო ინფორმაცია</h3>
                    @endif
                    @if (app()->getLocale()=="en")
                    <h3>Contact Information</h3>
                    @endif
                    @if (app()->getLocale()=="ru")
                    <h3>Контакт</h3>
                    @endif
                    <ul>
                        <li>
                            <div class="contact right-info">
                                <div class="c-right-icon">
                                    <span><i class="fas fa-map-marker-alt"></i></span>
                                </div>
                                <div class="c-right-text">
                                    @if (app()->getLocale()=="ka")
                                    <p style="padding-top: 10px;">{{ $providerContact->contact_address_geo }}</p>
                                    @endif
                                    @if (app()->getLocale()=="en")
                                    <p style="padding-top: 10px;">{{ $providerContact->contact_address_eng }}</p>
                                    @endif
                                    @if (app()->getLocale()=="ru")
                                    <p style="padding-top: 10px;">{{ $providerContact->contact_address_rus }}</p>
                                    @endif
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="contact right-info">
                                <div class="c-right-icon">
                                    <span><i class="fas fa-phone-alt"></i></span>
                                </div>
                                <div class="c-right-text">
                                    <p>{{ $providerContact->contact_phone_one }}</p>
                                    <p>{{ $providerContact->contact_phone_two }}</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="contact right-info">
                                <div class="c-right-icon">
                                    <span><i class="far fa-envelope"></i></span>
                                </div>
                                <div class="c-right-text">
                                    <p>{{ $providerContact->contact_email_one }}</p>
                                    <p>{{ $providerContact->contact_email_two }}</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact end -->

<!-- map start -->
<section class="gmaps-area">
    <div class="contact-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2977.698059328601!2d44.73030571573435!3d41.7270338828327!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40447308d54625e1%3A0x25c237db21b6bdbe!2zMTI54YOQLCAxMjnhg5Ag4YOc4YOj4YOq4YOj4YOR4YOY4YOr4YOY4YOhIOGDpeGDo-GDqeGDkCwg4YOX4YOR4YOY4YOa4YOY4YOh4YOY!5e0!3m2!1ska!2sge!4v1634113250854!5m2!1ska!2sge" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
</section>
<!-- map end -->



@endsection
