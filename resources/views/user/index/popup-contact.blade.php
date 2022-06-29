<div class="contact-wrapper">
    <div class="wrap-content">
        <div class="contact-container">
            <h3 class="contact-name">SIGN UP FOR EMAILS</h3>
            <h1 class="contact-title">GET 20% DISCOUNT SHIPPED TO YOUR INBOX</h1>
            <div class="contact-desc">Subscribe to our newsletter and we will ship 20% discount code today</div>
            <form class="d-flex justify-content-between" action="{{route('send.email')}}" method="POST">
                @csrf
                <input type="text" class="contact-input" placeholder="Enter your email address..." name="email">
                <button type="submit" class="contact-btn">Subscribe</button>
            </form>
        </div>
    </div>
    <div class="contact-close">
            <i class="fa-solid fa-xmark"></i>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('.contact-wrapper').addClass('show');

        $('.contact-close').click(function() {
            if($('.contact-wrapper').hasClass('show')) {
                $(this).parents().find('.contact-wrapper').removeClass('show');
            }
        });
    });
</script>