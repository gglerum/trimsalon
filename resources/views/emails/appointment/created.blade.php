<p>Hi {{ $owner->name }},</p>
<p>Your appointment was created!</p>
<p>We expect you {{ $appointment_at }}</p>
<p>with your {{ $species }} {{ $pet->name }}</p>
@if (!empty($appointment->note))
    <p>You left us the following note regarding this appointment</p>
    <p>{{ $appointment->note }}</p>
    <p>we'll do our best to accomendate your request</p>
@endif
<p>See you soon!</p>
