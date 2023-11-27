@extends('.include.contact.contact')
@section('title', 'Contact Us - Jackfruit Mania')
@section('addressform')
<!--Message Form-->
<form action="{{route('writemessage.post')}}" method="POST" class="message-form">
    <h2 class="heading2">SEND US A MESSAGE</h2>
    @csrf
        <div class="box">
            <input type="text" placeholder="Name" name="name" required>
        </div>
        <div class="box">
            <input type="text" placeholder="Email" name="email" required>
        </div>
        <div class="box">
            <input type="tel" placeholder="Phone Number" name="phone" required>
        </div>
        <div class="box">
            <input type="text" placeholder="Subject" name="subject" required>
        </div>
        <div class="boxing">
            <textarea placeholder="Your Message" name="message" required></textarea>
        </div>
        <button type="submit" class="button">Send Message</button>
</form>
@endsection