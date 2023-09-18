<form  method="POST" action="/mail">
    @csrf
    <div>
        <input type="text" name="name" placeholder="Your Name" />
    </div>

    <div>
        <input type="email" name="email" placeholder="Email" />
    </div>
    <div>
        <input type="text"  name="message" class="message-box" placeholder="Message" />
    </div>
    <div class="btn_box">
        <button>
            SEND
        </button>
    </div>
</form>