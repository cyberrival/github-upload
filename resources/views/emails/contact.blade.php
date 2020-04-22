@component('mail::message')
# {{ $subject }}

{{ $message }}

## From
{{ $name }}
<br>
{{ $sender }}



Thanks,<br>
KarlieFit
@endcomponent