@extends('layouts.master')

@section('title', "About Us" )

@section('header')
    <h2 class="align-self-center">We are passionate people.</h2> 
    <p>We are providing services that you'll love to use. Let us introduce ourselves.</p>
@endsection

@section('content')
    
    <section class="about-us-section text-center my-4">
        <div class="container">
            <div class="col-md-10 offset-md-1">
                <h4 class="heading-about">About Uclean</h4>
                <p class="text-center">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Recusandae iure officia maiores tempore aut? Tempora, impedit unde eius aspernatur quis temporibus, ad maiores sunt voluptate accusamus perferendis, cumque assumenda dolorem? Debitis, quibusdam modi perferendis repudiandae iste repellat facilis fugit dolor labore aliquid blanditiis soluta velit ipsam est vitae aspernatur voluptates?</p>
            </div>
        </div>
    </section>
    <section class="founder-section text-center my-4">
        <div class="container">
            <div class="col-md-10 offset-md-1">
                <h4 class="heading-about">About Founder</h4>
                <div class="row">
                    <div class="col-md-4 founder-img-container">
                        <img class="founder-img" src=" {{asset('img/avatar-male.jpg')}} " alt="">
                    </div>
                    <div class="col-md-8 founder-content">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reiciendis possimus repellat velit minus magnam eius quod mollitia quis sequi perspiciatis repellendus labore autem est ipsum aspernatur sit iure dignissimos cupiditate ab, exercitationem hic facilis et dolorum? Sit labore non ad expedita natus aperiam quidem omnis placeat. Et similique corporis, saepe pariatur aspernatur recusandae quas quia, facilis earum distinctio labore incidunt hic natus, at non in esse nulla? Quasi nam iusto quo, obcaecati suscipit eveniet necessitatibus voluptates, ipsum ut vel tempore!
                    </div>
                </div>
            </div>
        </div>
    </section>    

    <section>
        <div class="container idea-section">
            <div class="row">
                <div class="col-md-3 idea-container">
                    <img src=" {{asset('img/about/ab_1.png')}} " class="idea-about" alt="">
                    <p class="text-center my-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, fugit?</p>
                </div>
                <div class="col-md-3 idea-container">
                    <img src=" {{asset('img/about/ab_2.png')}} " class="idea-about" alt="">
                    <p class="text-center my-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, fugit?</p>
                </div>
                <div class="col-md-3 idea-container">
                    <img src=" {{asset('img/about/ab_3.png')}} " class="idea-about" alt="">
                    <p class="text-center my-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, fugit?</p>
                </div>
                <div class="col-md-3 idea-container">
                    <img src=" {{asset('img/about/ab_4.png')}} " class="idea-about" alt="">
                    <p class="text-center my-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, fugit?</p>
                </div>

            </div>
        </div>
    </section>
@endsection