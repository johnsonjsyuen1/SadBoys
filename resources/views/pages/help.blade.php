

@extends('master')

@section('Content')

<div class="container ">
    <div class="row">
        <div class="col-md-10 col-md-offset-1 help">
            <h1 class="text-center">Having trouble finding what you want?</h1>
            <p class="text-center">Last Updated: September 15, 2015</p>
            <ul>
                <li>
                    <input type="checkbox" checked>
                    <i></i>
                    <h2>How do I change my password?</h2>
                     <p>The password change option can be accessed in the <strong><a href="#">"Account"</a></strong> section of the website. You will need to know your current password to access this feature.</p>
                </li>
                <li>
                    <input type="checkbox" checked>
                    <i></i>
                    <h2>How can I recover a lost password?</h2>
                    <p>A lost password requires access to the email you registered with the HeartSmart account. You can start simply by clicking "Recover Password" in the Account section of the webiste.</p>
                </li>
                <li>
                    <input type="checkbox" checked>
                    <i></i>
                    <h2>Where can I save and track my stats?</h2>
                    <p>You can save and track your stats, progress, and calculator responses under a registered HeartSmart account. Remember to confirm your registration by clicking the validation link sent to your email after registering (the link will disappear after 48 hours).</p>
                </li>
                <li>
                    <input type="checkbox" checked>
                    <i></i>
                    <h2>I can't find the validation link.</h2>
                    <p>There may be a few reasons behind this. Check your spam folder. If it's not there, request another validation link here. Finally, double check that you registered the correct email in the Account section after logging in.</p>
                </li>
                <li>
                    <input type="checkbox" checked>
                    <i></i>
                    <h2>Where can I learn more about Cardiovascular Disease?</h2>
                    <p>Basic information and facts about the disease can be accessed <a href="/">here</a>. To learn more about the disease in your particular circumstances, we suggest organising an appointment with one of our HeartSmart doctors after registering an account.</p>

                </li>
                <li>
                    <input type="checkbox" checked>
                    <i></i>
                    <h2>Is there a mobile application available for HeartSmart users?</h2>
                    <p>An Android and iPhone mobile app containing the core features (stat tracking, calculators, tools etc.) is currently under development.</p>
                </li>
                <li>
                    <input type="checkbox" checked>
                    <i></i>
                    <h2>What is your privacy policy?</h2>
                    <p>Please click <a href="/privacy" rel="shadowbox">here</a> to view our privacy policy</p>
                </li>
                <li>
                    <input type="checkbox" checked>
                    <i></i>
                    <h2>How can I contact you?</h2>
                    <p>Please submit your question/feedback via the feedback form and we will respond within 1 business day.</p>
                    <p>Alternatively, please contact us at: "admin@heartsmart.com"</p>
                </li>
            </ul>
        </div>    
    </div>

</div>
@endsection

@stop