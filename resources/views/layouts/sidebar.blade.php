<aside id="colorlib-aside" role="complementary" class="js-fullheight text-center">
    <h1 id="colorlib-logo"><a href="{{ url('/') }}">Ilham<span>.</span></a></h1>
    <nav id="colorlib-main-menu" role="navigation">
        <ul>
        <li class="{{ Request::is('/') ? 'colorlib-active' : '' }}">
    <a href="{{ url('/') }}">Home</a>
</li>
<li class="{{ Request::is('projects') ? 'colorlib-active' : '' }}">
    <a href="{{ url('/projects') }}">Projects</a>
</li>

<li class="{{ Request::is('projects') ? 'colorlib-active' : '' }}">
<a href="{{ url('/projects/create') }}">Add New Project</a>
</li>

        </ul>
    </nav>

    <div class="colorlib-footer">
        <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script>
        All rights reserved.</p>
        <ul>
            <li><a href="#"><i class="icon-facebook"></i></a></li>
            <li><a href="#"><i class="icon-twitter"></i></a></li>
            <li><a href="#"><i class="icon-instagram"></i></a></li>
            <li><a href="#"><i class="icon-linkedin"></i></a></li>
        </ul>
    </div>
</aside>
