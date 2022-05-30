<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta http-equiv="content-language" content="fr" />
    <meta name="author" lang="fr" content="Vincent Vuillemin">
    <meta name="keywords" lang="fr" content="
          parc aventure,
          parc accrobranche,
          accrobranche,
          arbres,
          sport,
          parc,
          parcours,
          activité,
          sécurité,
          obstacle,
          hotel le lac malbuisson,
          tyrolienne,
          escalade,
          office du tourisme malbuisson,
          jura,
    " />
    <meta name="Description" content="Au fil des Arbres vous propose plusieurs parcours sportifs dans les arbres. Pouvant accueillir débutants comme sportifs confirmés." />

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <script src="{{ mix('js/app.js') }}" defer></script>

    <script defer data-domain="parcaventure-malbuisson.fr" src="https://plausible.io/js/plausible.js"></script>

</head>
<body>

    @include('web.guest.navigation-menu')

    <div class="font-sans antialiased text-gray-900">
        {{ $slot }}
    </div>

    @include('web.guest.footer')
</body>
</html>
