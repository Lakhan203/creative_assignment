<footer class="footer">
    <div class="container footer-main">
        <div class="footer-logo">
            <img src="{{ asset('assets/footer_logo.png') }}" class="img-fluid footer-image" alt="footer-logo">
        </div>

        <div class="copyright">
            <p class="m-0">&#169; {{ Carbon\Carbon::now()->format('Y') }}, Jio Creative Labs</p>
        </div>

        <div class="social-media">
            <ul class="social-media-list p-0 m-0">
                <li class="social-media-icon"><i class="fa fa-facebook" aria-hidden="true"></i></li>
                <li class="social-media-icon"><i class="fa fa-youtube-play" aria-hidden="true"></i></li>
                <li class="social-media-icon"><i class="fa fa-instagram" aria-hidden="true"></i></li>
                <li class="social-media-icon"><i class="fa fa-linkedin" aria-hidden="true"></i></li>
            </ul>
        </div>
    </div>
</footer>
