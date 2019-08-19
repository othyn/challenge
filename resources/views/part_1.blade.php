@extends ('layouts.master')

@section ('title', 'Part 1')

@section ('main-content')

<section>
    <header>
        <img src="/img/logo.svg" alt="Example challenge company logo">
        <!-- Keeps things tidier than dumping the svg element directly in here, although an option -->
    </header>

    <div id="box">
        <h1>GetRentr Holding Text</h1>
        <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lacus sed turpis tincidunt id.</h3>

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Viverra orci sagittis eu volutpat odio facilisis mauris sit amet. In nisl nisi scelerisque eu ultrices vitae. Tincidunt id aliquet risus feugiat. Nisl pretium fusce id velit ut. Sollicitudin ac orci phasellus egestas tellus rutrum tellus pellentesque. Lectus quam id leo in vitae turpis. Arcu vitae elementum curabitur vitae.</p>

        <p>Porttitor leo a diam sollicitudin tempor id eu. Adipiscing enim eu turpis egestas pretium aenean. Blandit aliquam etiam erat velit scelerisque in dictum non consectetur. Urna duis convallis convallis tellus id interdum velit. Consequat mauris nunc congue nisi vitae suscipit tellus. Mattis vulputate enim nulla aliquet porttitor lacus luctus accumsan. In arcu cursus euismod quis viverra nibh. Eu tincidunt tortor aliquam nulla. Et pharetra pharetra massa massa. We are hiring at the moment, to find out more <a href="https://www.getrentr.com/about/jobs/" target="_blank" rel="noopener noreferrer">click here</a>.</p>

        <p>Faucibus in ornare quam viverra orci sagittis. Massa id neque aliquam vestibulum morbi blandit cursus risus. Volutpat odio facilisis mauris sit. Nisi quis eleifend quam adipiscing vitae proin sagittis nisl rhoncus. Lacus sed viverra tellus in hac habitasse platea dictumst vestibulum. Ut pharetra sit amet aliquam id. Faucibus a pellentesque sit amet porttitor eget. Tincidunt arcu non sodales neque sodales ut etiam. Urna neque viverra justo nec ultrices dui sapien eget. Libero enim sed faucibus turpis. Non odio euismod lacinia at quis risus. Morbi tristique senectus et netus et. Id eu nisl nunc mi.</p>

        <p>Quis blandit turpis cursus in hac habitasse platea dictumst quisque. Faucibus pulvinar elementum integer enim neque volutpat. Ullamcorper malesuada proin libero nunc consequat interdum varius sit. Sed euismod nisi porta lorem mollis aliquam. Odio facilisis mauris sit amet massa vitae tortor condimentum. Sit amet dictum sit amet. Sed viverra ipsum nunc aliquet bibendum. Velit ut tortor pretium viverra suspendisse potenti nullam ac tortor. Vulputate dignissim suspendisse in est ante in. Id porta nibh venenatis cras sed felis eget. Vel quam elementum pulvinar etiam non quam lacus. Massa id neque aliquam vestibulum. Posuere sollicitudin aliquam ultrices sagittis orci a scelerisque.</p>

        <a id="read-more" href="https://www.getrentr.com/news/" target="_blank" rel="noopener noreferrer">Read more about how we work <span class="red">→</span></a>
        <!-- No point including something like font awesome just for this... -->
    </div>

    <footer>
        &copy; GetRentr {{ date('Y') }} | <a href="https://www.getrentr.com/support/privacy/" target="_blank" rel="noopener noreferrer">Privacy Policy</a> | <a href="https://www.getrentr.com/support/terms/" target="_blank" rel="noopener noreferrer">Terms and Conditions</a> | <a href="https://www.getrentr.com/support/contact/" target="_blank" rel="noopener noreferrer">Contact</a>
        <!-- Relative links would be used, but the domain is obviously different! -->
        <!-- The rel noopener noreferrer fix is from a well known exploit of target _blank windows: https://developers.google.com/web/tools/lighthouse/audits/noopener -->
    </footer>
</section>

@endsection
