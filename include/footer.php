<script>
    var rellax = new Rellax('.rellax', {
        // center: true
        callback: function (position) {
            // callback every position change
            console.log(position);
        }
    });
</script>
<footer class="flex">
    <div style="padding-top: 0px;padding-bottom: 0px" class="container">
        <div style="width:50%;height:10px;background-color: var(--main-green);margin-bottom:20px;max-width: 75px"></div>
        <h1 class="footerslogan">Growth in community.</h1>
        <h2>&copy;<?php echo date("Y"); ?>&nbsp;KINGMUN</h2>
        <span class="social">
            <a aria-label="Email Us" href="mailto:sg@kingmun.org"><i class="fa fa-envelope-open" aria-hidden="true"></i></a>&nbsp;
            <a aria-label="KINGMUN Instagram" href="https://www.instagram.com/kingmun2019/"><i class="fa fa-instagram" aria-hidden="true"></i></a>&nbsp;
            <a aria-label="KINGMUN Facebook" href="https://www.facebook.com/KINGMUN2019/"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
        </span>
    </div>
</footer>