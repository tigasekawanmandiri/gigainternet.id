<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Gigainternet.id</title>
<!-- Stylesheets -->
<link href="{{ asset('template/css/bootstrap.css') }}" rel="stylesheet">
<link href="{{ asset('template/css/style.css') }}" rel="stylesheet">
<link href="{{ asset('template/css/responsive.css') }}" rel="stylesheet">
<link href="{{ asset('template/css/floating-wpp.css')}}" rel="stylesheet" type="text/css">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

<link rel="shortcut icon" href="{{ asset('template/images/giga-ico-128.ico') }}" type="image/x-icon">
<link rel="icon" href="{{ asset('template/images/giga-ico-128.ico') }}" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

@stack('style')

</head>

<body class="hidden-bar-wrapper">

<div class="page-wrapper">
 	
    <!-- Preloader -->
    {{-- @include('layouts.preloaded') --}}
 	
 	<!-- Main Header -->
    @include('layouts.navbar')
    <!-- End Main Header -->
	
	<!-- Sidebar Cart Item -->
	@include('layouts.sidebar')
	<!-- END sidebar widget item -->
	
	<!-- Main Section -->
    @yield('content')
	
	<!-- Main Footer -->
    @include('layouts.footer')
	<!-- End Main Footer -->

	@include('Page.wafloating')
	
</div>
<!--End pagewrapper-->


<!-- Scroll To Top -->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-up"></span></div>



<script src="{{ asset('template/js/jquery.js') }}"></script>
<script src="{{ asset('template/js/popper.min.js') }}"></script>
<script src="{{ asset('template/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('template/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
<script src="{{ asset('template/js/jquery.fancybox.js') }}"></script>
<script src="{{ asset('template/js/appear.js') }}"></script>
<script src="{{ asset('template/js/parallax.min.js') }}"></script>
<script src="{{ asset('template/js/tilt.jquery.min.js') }}"></script>
<script src="{{ asset('template/js/jquery.paroller.min.js') }}"></script>
<script src="{{ asset('template/js/owl.js') }}"></script>
<script src="{{ asset('template/js/wow.js') }}"></script>
<script src="{{ asset('template/js/nav-tool.js') }}"></script>
<script src="{{ asset('template/js/jquery-ui.js') }}"></script>
<script src="{{ asset('template/js/script.js') }}"></script>
<script src="{{ asset('template/js/wafloating.js') }}"></script>
<script src="https://kit.fontawesome.com/f942cea491.js" crossorigin="anonymous"></script>

<script>
	Element.prototype.floatingWhatsApp = function(a) {
	function c() {
		d.classList.contains("active") || (d.classList.add("active"), e.focus())
	}

	function l() {
		var a;
		a = "http://" + (m ? "api" : "web");
		a += ".whatsapp.com/send?phone=" + b.phone + "&text=" + encodeURI(b.message);
		window.open(a)
	}
	var b = function(a) {
			a = a || {};
			for (var b = 1; b < arguments.length; b++)
				if (arguments[b])
					for (var c in arguments[b]) arguments[b].hasOwnProperty(c) && (a[c] = arguments[b][c]);
			return a
		}({
				phone: "",
				message: "",
				size: "68px",
				backgroundColor: "#e5ddd5",
				position: "right",
				popupMessage: "",
				placeholder: "",
				showPopup: !1,
				showOnIE: !0,
				autoOpenTimeout: 5,
				headerColor: "#39847a",
				headerTitle: "WhatsApp Chat",
				zIndex: 0,
				buttonImage: '<?xml version="1.0" encoding="UTF-8" standalone="no"?><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="isolation:isolate" viewBox="0 0 800 800" width="65" height="65"><defs><clipPath id="_clipPath_A3g8G5hPEGG2L0B6hFCxamU4cc8rfqzQ"><rect width="800" height="800"/></clipPath></defs><g clip-path="url(#_clipPath_A3g8G5hPEGG2L0B6hFCxamU4cc8rfqzQ)"><g><path d=" M 787.59 800 L 12.41 800 C 5.556 800 0 793.332 0 785.108 L 0 14.892 C 0 6.667 5.556 0 12.41 0 L 787.59 0 C 794.444 0 800 6.667 800 14.892 L 800 785.108 C 800 793.332 794.444 800 787.59 800 Z " fill="rgb(37,211,102)"/></g><g><path d=" M 508.558 450.429 C 502.67 447.483 473.723 433.24 468.325 431.273 C 462.929 429.308 459.003 428.328 455.078 434.22 C 451.153 440.114 439.869 453.377 436.434 457.307 C 433 461.236 429.565 461.729 423.677 458.78 C 417.79 455.834 398.818 449.617 376.328 429.556 C 358.825 413.943 347.008 394.663 343.574 388.768 C 340.139 382.873 343.207 379.687 346.155 376.752 C 348.804 374.113 352.044 369.874 354.987 366.436 C 357.931 362.999 358.912 360.541 360.875 356.614 C 362.837 352.683 361.857 349.246 360.383 346.299 C 358.912 343.352 347.136 314.369 342.231 302.579 C 337.451 291.099 332.597 292.654 328.983 292.472 C 325.552 292.301 321.622 292.265 317.698 292.265 C 313.773 292.265 307.394 293.739 301.996 299.632 C 296.6 305.527 281.389 319.772 281.389 348.752 C 281.389 377.735 302.487 405.731 305.431 409.661 C 308.376 413.592 346.949 473.062 406.015 498.566 C 420.062 504.634 431.03 508.256 439.581 510.969 C 453.685 515.451 466.521 514.818 476.666 513.302 C 487.978 511.613 511.502 499.06 516.409 485.307 C 521.315 471.55 521.315 459.762 519.842 457.307 C 518.371 454.851 514.446 453.377 508.558 450.429 Z  M 401.126 597.117 L 401.047 597.117 C 365.902 597.104 331.431 587.661 301.36 569.817 L 294.208 565.572 L 220.08 585.017 L 239.866 512.743 L 235.21 505.332 C 215.604 474.149 205.248 438.108 205.264 401.1 C 205.307 293.113 293.17 205.257 401.204 205.257 C 453.518 205.275 502.693 225.674 539.673 262.696 C 576.651 299.716 597.004 348.925 596.983 401.258 C 596.939 509.254 509.078 597.117 401.126 597.117 Z  M 567.816 234.565 C 523.327 190.024 464.161 165.484 401.124 165.458 C 271.24 165.458 165.529 271.161 165.477 401.085 C 165.46 442.617 176.311 483.154 196.932 518.892 L 163.502 641 L 288.421 608.232 C 322.839 627.005 361.591 636.901 401.03 636.913 L 401.126 636.913 L 401.127 636.913 C 530.998 636.913 636.717 531.2 636.77 401.274 C 636.794 338.309 612.306 279.105 567.816 234.565" fill-rule="evenodd" fill="rgb(255,255,255)"/></g></g></svg>'
			},
			a),
		m = mobilecheck();
	this.classList.add("floating-wpp");
	var f = document.querySelector(".floating-wpp-button"),
		d = document.createElement("div");
	a = document.createElement("div");
	var g = document.createElement("div"),
		h = document.createElement("div"),
		k = document.createElement("div");
	f.addEventListener("click", function() {
		m && b.showPopup ? c() : l()
	});
	if (b.showPopup) {
		var e = document.createElement("textarea"),
			f = document.createElement("strong"),
			n = '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 20 18" width="36" height="36"><circle cx="10" cy="9" r="10" fill="' +
			b.headerColor + '"/><defs><path id="a" d="M6.2 4.4H16v9.4H6.2z"/></defs><clipPath id="b"><use xlink:href="#a" overflow="visible"/></clipPath><g clip-path="url(#b)"><path d="M6.2 4.4v4.1L14 9l-7.8.7v4.1L16 9 6.2 4.4z" fill="#fff"/></g></svg>';
		d.classList.add("floating-wpp-popup");
		a.classList.add("floating-wpp-head");
		g.classList.add("floating-wpp-message");
		k.classList.add("floating-wpp-input-message");
		h.classList.add("floating-wpp-btn-send");
		g.innerHTML = nl2br(b.popupMessage);
		e.value = b.message;
		e.setAttribute("rows",
			"1");
		e.setAttribute("placeholder", b.placeholder);
		b.popupMessage || g.hide();
		a.insertAdjacentHTML("beforeend", "<span>" + b.headerTitle + "</span>");
		a.append(f);
		a.style.backgroundColor = b.headerColor;
		h.insertAdjacentHTML("beforeend", n);
		k.append(e, h);
		f.classList.add("close");
		f.innerHTML = "&#10006;";
		d.append(a, g, k);
		this.append(d);
		d.style.backgroundColor = b.backgroundColor;
		k.style.backgroundColor = b.backgroundColor;
		g.addEventListener("click", function() {
			l()
		});
		f.addEventListener("click", function() {
			popup.classList.remove("active")
		});
		a.addEventListener("click", function() {
			d.classList.remove("active")
		});
		e.addEventListener("keypress", function(a) {
			b.message = this.value;
			"Enter" != a.key || a.shiftKey || m || (a.preventDefault(), h.click())
		});
		h.addEventListener("click", function() {
			console.log(123);
			b.message = e.value;
			l()
		});
		this.addEventListener("mouseenter", function() {
			c()
		});
		0 < parseInt(b.autoOpenTimeout, 10) && setTimeout(function() {
			c()
		}, 1E3 * parseInt(b.autoOpenTimeout, 10))
	}
	b.zIndex && (this.style.zIndexndex = b.zIndex);
	"left" === b.position && (this.style.left =
		"auto", this.style.right = "15px", d.style.right = 0)
};

function nl2br(a, c) {
	return "undefined" === typeof a || null === a ? "" : (a + "").replace(/([^>\r\n]?)(\r\n|\n\r|\r|\n)/g, "$1" + (c || "undefined" === typeof c ? "<br />" : "<br>") + "$2")
}

function mobilecheck() {
	var a = !1,
		c = navigator.userAgent || navigator.vendor || window.opera;
	if (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(c) || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(c.substr(0,
			4))) a = !0;
	return a
};
</script>

<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
@stack('script')

</body>
</html>