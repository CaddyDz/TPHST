@component('mail::message')
# @lang('Bonjour') {{ "\u{1F603}" }}
## @lang('Vous avez reçu une demande de contact sur votre site')

Du: {{ $details['name'] }}

Email: {{ $details['email'] }}

Sujet: {{ $details['subject'] }}

Message: {{ $details['message'] }}

@component('mail::button', ['url' => 'mailto:' . $details['email']])
  Répondez
@endcomponent

Merci,<br>
{{ config('app.name') }}
@endcomponent
