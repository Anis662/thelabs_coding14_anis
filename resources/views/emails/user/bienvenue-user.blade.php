@component('mail::message')
<h2 class="text-center text-primary">

    Bienvenue {{ $user->name }} de coeur de moi <3 !

</h2>
<h4 class="text-danger text-center">
    Merci de vous être inscrit avec l'adresse {{ $user->email }}
</h4>

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
