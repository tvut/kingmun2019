<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>AOS.init();</script>
<nav class="navbar navbar-expand-lg navbar-<?php if (!array_key_exists('navdark', get_defined_vars())) echo"light"; else echo "dark";?>">
    <div class="container" style="margin-top: 0;margin-bottom: 0">
        <a class="navbar-brand" href="<?php if($depth==0) echo "/"; else echo $link; ?>">
            <img src="<?php echo $link ?>content/logos/<?php if (!array_key_exists('navdark', get_defined_vars())) echo"green"; else echo "white";?>.svg" width="50" height="50" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $link ?>about/">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $link ?>conference/">Conference</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $link ?>media/">Media</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $link ?>committees/">Committees</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $link ?>registration/">Registration</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $link ?>resources/">Resources</a>
                </li>
            </ul>
        </div>
    </div>
</nav>