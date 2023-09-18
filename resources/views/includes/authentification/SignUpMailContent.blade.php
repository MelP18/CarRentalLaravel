


<div class="block__foreground">
    <div class="logo">
        <img src="{{ asset('car_pictures/logo.png') }}" alt="LOGO">
    </div>
    <div class="description__gescar" style="display: flex; flex-dire justify-content:center; align-items:center; gap: 15px;">
      
        <p style="text-align: center">Bienvenue {{ $name }}</p>
        <p  style="text-align: center">Pour activer votre compte sur Gescar, veuillez <a href="{{$url}}">cliquer ici</a></p>
        <p  style="text-align: center">Si le lien ne fonctionne pas, veuillez copier le lien ci-dessous dans votre navigateur <br> Lien: <a href="" style="color: blue; border-bottom:1px solid blue"> {{ $url }} </a></p>
    </div>
</div>

