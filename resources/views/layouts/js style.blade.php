<script src="{{asset('assets/js/jquery.js')}}"></script>
<script src="{{asset('assets/js/isotope-docs.min.js')}}"></script>
<!-- =============== Bootstrap Core JavaScript =============== -->
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<!-- =============== Plugin JavaScript =============== -->
<script src="{{asset('assets/js/jquery.easing.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.fittext.js')}}"></script>
<script src="{{asset('assets/js/wow.min.js')}}"></script>
<!-- =============== owl carousel =============== -->
<script src="{{asset('assets/owl-carousel/owl.carousel.js')}}"></script>
<!-- Isotope does NOT require jQuery. But it does make things easier -->

<script src="{{asset('assets/js/baguetteBox.js')}}" async></script>
<script src="{{asset('assets/js/plugins.js')}}" async></script>

<!-- =============== Custom Theme JavaScript =============== -->
<script src="{{asset('assets/js/creative.js')}}">	</script>
<script src="{{asset('assets/js/jquery.nicescroll.min.js')}}"></script>

<script>
    $(document).ready(function() {

        var nice = $("html").niceScroll();  // The document page (body)

        $("#div1").html($("#div1").html()+' '+nice.version);

        $("#boxscroll").niceScroll({cursorborder:"",cursorcolor:"#00F",boxzoom:true}); // First scrollable DIV

        $("#boxscroll2").niceScroll("#contentscroll2",{cursorcolor:"#F00",cursoropacitymax:0.7,boxzoom:true,touchbehavior:true});  // Second scrollable DIV
        $("#boxframe").niceScroll("#boxscroll3",{cursorcolor:"#0F0",cursoropacitymax:0.7,boxzoom:true,touchbehavior:true});  // This is an IFrame (iPad compatible)

        $("#boxscroll4").niceScroll("#boxscroll4 .wrapper",{boxzoom:true});  // hw acceleration enabled when using wrapper

    });
</script>
<script>
    window.onload = function() {
        if(typeof oldIE === 'undefined' && Object.keys)
            hljs.initHighlighting();

        baguetteBox.run('.baguetteBoxOne');
        baguetteBox.run('.baguetteBoxTwo');
        baguetteBox.run('.baguetteBoxThree', {
            animation: 'fadeIn'
        });
        baguetteBox.run('.baguetteBoxFour', {
            buttons: false
        });
        baguetteBox.run('.baguetteBoxFive', {
            captions: function(element) {
                return element.getElementsByTagName('img')[0].alt;
            }
        });
    };
</script>
