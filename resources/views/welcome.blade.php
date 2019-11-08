@extends('layouts.app')

@section('navbar')
@include("use.navbar")
@endsection

@section('content')
<div class="hero--main">
  <div class="hero--main--background bg--primary"></div>
  <div class="hero--main--foreground">
    <h1 class="hero--main--title text--thick" data-aos="fade-right">Find yourself a roomate.</h1>
    <div class='hero--main--content bg--primary rounded p-1' data-aos='fade-left' data-aos-delay='500'>
      <h3 class='color--white text--thin'>
        <em>The ultimate flat-sharing search engine for students</em>
      </h3>
    </div>
  </div>
</div>


<section class="section">
  <div class="section--header">
    <h1 class="text--bold color--primary">Wait! How does it work?</h1>
  </div>
  <div class="section--body">
    <p><em>That's easy.</em> You just have to follow our step-by-step guide, and we'll show you the ropes:</p>
  </div>
</section>

<section class="section py-1 flex flex--row">
  <div class="flex--xs-auto flex--sm-1-4 rounded bg--red p-1" data-aos="fade-right">
    <div class='flex flex--justify-center flex--align-center'>
      <h1 class='p-1 flex--auto'>1</h1>
      <div class='flex--auto text--center'>Fill out your preferences</div>
    </div>
  </div>
  <div class="flex--xs-auto flex--sm-3-4 p-1" data-aos="fade-left">
    <p>
      Are you messy or tidy? What kind of music do you like? Do you watch anime? Tell us everything we need to know,
      and we'll sort the rest out for you.
    </p>
  </div>
</section>

<section class="section py-1 flex flex--row">
  <div class="flex--xs-auto flex--sm-3-4 p-1 order--2 order--sm-1" data-aos="fade-right">
    <p>
      Have you found a property that you just <em>have to have?</em> Or are you looking for someone who's already done
      the hard work? It's okay, you can say it! Either way, you can post great deals or search for them right here.
    </p>
  </div>
  <div class="flex--xs-auto flex--sm-1-4 rounded bg--orange color--white p-1 order--1 order--sm-2" data-aos="fade-left">
    <div class="flex flex--justify-center flex--align-center">
      <h1 class='p-1 flex--auto'>2</h1>
      <span class='flex--auto text--center'>Find your property</span>
    </div>
  </div>
</section>

<section class="section py-1 flex flex--row">
  <div class="flex--xs-auto flex--sm-1-4 rounded bg--green p-1" data-aos="fade-right">
    <div class="flex flex--justify-center flex--align-center">
      <h1 class='p-1 flex--auto'>3</h1>
      <span class='flex--auto text--center'>Meet your mates</span>
    </div>
  </div>
  <div class="flex--xs-auto flex--sm-3-4 p-1" data-aos="fade-left">
    <p>
      Time for the fun part. Use our extensive features such as our people-finder to our chat rooms to create a
      <span class="color--green">Studia Group</span>
      that you can use to communicate with your roomates-to-be! It's a dream come true!
    </p>
  </div>
</section>

<div class="section">
  <div class="section--header">
    <h1 class='color--primary'>Is that it?</h1>
  </div>
  <div class="section--body">
    <p>
      I told you there was nothing to worry about. Remove the stress of finding a new home after first year, and your
      life will be so much easier.
    </p>
  </div>
</div>

<div class="hero--main hero--main-2">
  <div class="hero--main--background bg--info"></div>
  <div class="hero--main--foreground">
    <h1 class="hero--main--title text--thick" data-aos="fade-right">Testimonies</h1>
    <div class='hero--main--content bg--info rounded p-1' data-aos='fade-left' data-aos-delay='500'>
      <h3 class='color--white text--thin'>
        <em>Don't take it from us - hear dozens of satisfied students</em>
      </h3>
    </div>
  </div>
</div>

<section class="section">
  <fieldset class='my-1 border border--primary' data-aos='fade-down'>
    <legend class='text--bold'>Literally No-one</legend>
    <em>
      "Wow, I'm super happy, couldn't ask for a better service"
    </em>
    <div class='flex flex--justify-right'>
      <div class="ml-auto flex--auto">&mdash; 05/2019</div>
    </div>
  </fieldset>

  <fieldset class='my-1 border border--primary' data-aos='fade-down'>
    <legend class='text--bold'>Literally No-one</legend>
    <em>
      "Wow, I'm super happy, couldn't ask for a better service"
    </em>
    <div class='flex flex--justify-right'>
      <div class="ml-auto flex--auto">&mdash; 09/2018</div>
    </div>
  </fieldset>

  <fieldset class='my-1 border border--primary' data-aos='fade-down'>
    <legend class='text--bold'>Literally No-one</legend>
    <em>
      "Wow, I'm super happy, couldn't ask for a better service"
    </em>
    <div class='flex flex--justify-right'>
      <div class="ml-auto flex--auto">&mdash; 07/2019</div>
    </div>
  </fieldset>

  <h1 class='text--bold color--primary' data-aos="fade-down">
    &hellip;
  </h1>
</section>
@endsection

@section('footer')
@include('use.footer')
@endsection