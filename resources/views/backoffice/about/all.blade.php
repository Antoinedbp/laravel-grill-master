@extends('template.back')

@section('contentBO')
    <h1 class="titresBO">PARTIE ABOUT</h1>

    <div class="buttonsBO">
      <a href="{{route('hombo')}}" class="aBtn">
          <button class="monBtn2" type="submit">Retour backoffice</button>
      </a>
    </div>
    <div class="globaleProduct">
        
        @foreach ($dataAbout as $item)

        <div class="row">
            <div class="col-lg-4" data-aos="fade-right">
              <img src="assets/img/profile-img.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
              <p class="font-italic">
                Titre: {{$item->titre}}
              </p>
              <p>
                1ère description: {{$item->description1}}
              </p>
              <p>
                2ème description: {{$item->description2}}
              </p>
            </div>
          </div>

          <div class="buttonDelEd">
            <a href="{{route('abouts.edit', $item->id)}}">
              <button class="btnEd" type="submit">
                  EDIT
              </button>
            </a>
          </div>

        @endforeach
    </div>

@endsection