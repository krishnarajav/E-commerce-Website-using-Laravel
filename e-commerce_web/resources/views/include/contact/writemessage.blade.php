@extends('.include.contact.contact')
@section('title', 'Contact Us')
@section('addressform')
<!--Message Form-->
<form action="#" method="#" class="message-form" id="contactForm">
    <h2 class="heading2">SEND US A MESSAGE</h2>
    <div class="box">
        <input type="text" placeholder="Name" name="name" required>
    </div>
    <div class="box">
        <input type="text" placeholder="Email" name="email" required>
    </div>
    <div class="box">
        <input type="text" placeholder="Phone Number" name="phone" required>
    </div>
    <div class="box">
        <input type="text" placeholder="Subject" name="subject" required>
    </div>
    <div class="boxing">
        <textarea placeholder="Your Message" name="message"></textarea>
    </div>
    <button type="submit" class="button">Send Message</button>
</form>
@endsection