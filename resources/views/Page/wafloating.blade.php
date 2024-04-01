<!-- Floating WA -->
<div class="floating-wpp-button button-wa">
	<div class="floating-wpp-button-image">
		<img src="{{ asset('template/images/icons/wa-icon.png')}}" alt="">
	</div>
</div>

<div class="popup-box-wa">
    <div class="wa-head">
        <span>👋 Chat kami di Whatsapp!</span>
        <strong class="close">X</strong>
    </div>

    <div class="wa-message">
        <span>Hi Giganeters,</span>
        <br><br>
        <span class="message-fill">Selamat datang di Gigainternet,</span>
        <br>
        <span class="message-fill">Mau tau promo lebih lanjut? Yuk, hubungi sekarang!</span>
    </div>

    <div class="wa-input-message">
        <textarea rows="1" placeholder="Type here" class="messagefill"></textarea>
        <div class="floating-wpp-btn-send">
            <a onclick="sendMessage()">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 20 18" width="36" height="36"><circle cx="10" cy="9" r="10" fill="#39847a"></circle><defs><path id="a" d="M6.2 4.4H16v9.4H6.2z"></path></defs><clipPath id="b"><use xlink:href="#a" overflow="visible"></use></clipPath><g clip-path="url(#b)"><path d="M6.2 4.4v4.1L14 9l-7.8.7v4.1L16 9 6.2 4.4z" fill="#fff"></path></g></svg>
            </a>
        </div>
    </div>
</div>
