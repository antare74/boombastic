<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Boombastic</title>
    @include('includes.user.style')
</head>

<body>
    {{-- Whatsapp --}}
    <script src="https://apps.elfsight.com/p/platform.js" defer></script>
    <div class="elfsight-app-4796b17c-9096-40cd-bf9f-3aa6baa32233"></div>

    @include('includes.user.sidebar')
    @include('includes.user.header')

    <div class="container-fluid">
        @include('includes.user-pages.home-section')

        @include('includes.user-pages.location-section')
        
        @include('includes.user-pages.ourmenu-section')

        @include('includes.user-pages.whoweare-section')

        @include('includes.user-pages.gallery-section')
        
        @include('includes.user-pages.catering-section')
        
        @include('includes.user-pages.contact-section')
    </div>

    @include('includes.user.footer')



    @include('includes.user.script')
</body>

</html>
