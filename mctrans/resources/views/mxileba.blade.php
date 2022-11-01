@extends('layouts.app')
@section('content')
<main>

    <!-- contact start -->
    <section class="contact-area gray-bg pt-120 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="contact-form mb-40">
                        @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                        @endif
                        @if (session('danger'))
                        <div class="alert alert-danger">
                            {{ session('danger') }}
                        </div>
                        @endif
                        @if (app()->getLocale()=="ka")
                        <h3 style="color:red;">აღნიშნული გვერდის საშუალებით, თქვენ შეძლებთ მოგვაწოდოთ ინფორმაცია ანონიმურად.</h3>
                        @endif
                        @if (app()->getLocale()=="en")
                        <h3 style="color:red;">Through this page, you will be able to send a message anonymously.</h3>
                        @endif
                        @if (app()->getLocale()=="ru")
                        <h3 style="color:red;">Через эту страницу вы сможете отправить сообщение анонимно.</h3>
                        @endif
                        <form action="{{ route('mxileba_insert') }}" method="post">
                            @csrf
                            <div class="row">
                                @if (app()->getLocale()=="ka")
                                <div class="col-xl-12">
                                    <textarea name="message" cols="30" rows="10" placeholder="მესიჯი"></textarea>
                                    <button class="thm-btn" type="submit">გაგზავნა</button>
                                </div>
                                @endif
                                @if (app()->getLocale()=="en")
                                <div class="col-xl-12">
                                    <textarea name="message" cols="30" rows="10" placeholder="message"></textarea>
                                    <button class="thm-btn" type="submit">Send</button>
                                </div>
                                @endif
                                @if (app()->getLocale()=="ru")
                                <div class="col-xl-12">
                                    <textarea name="message" cols="30" rows="10" placeholder="сообщение"></textarea>
                                    <button class="thm-btn" type="submit">Отправить</button>
                                </div>
                                @endif
                            </div>
                        </form>
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



</main>
@endsection