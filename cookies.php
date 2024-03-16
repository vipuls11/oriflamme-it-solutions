<title>Document</title>

<style>
/* ------------cookies css-------- */

p {
    margin: 15px 0;
    line-height: 2;
}

.wrapper {
    padding: 32px;
}

.cookie-container {
    position: fixed;
    bottom: -100%;
    left: 0;
    right: 0;
    background: #00263a;
    color: #f5f6fa;
    padding: 0 32px;
    box-shadow: 0 -2px 16px rgba(47, 54, 64, 0.39);

    transition: 400ms;
}

.cookie-container.active {
    bottom: 0;
}

.cookie-container a {
    color: #f5f6fa;
}

.cookie-btn {
    background: #fff;
    border: 0;
    color: #00263a;
    padding: 12px 48px;
    font-size: 18px;
    margin-bottom: 16px;
    border-radius: 8px;
    cursor: pointer;
}
</style>


<div class="cookie-container">
    <h4 style="font-size: 24px; text-align:justify">Our cookies</h4>
    <p>
        We use cookies to make your experience of our websites better. By using and further navigating
        this website you accept this detailed information about the use of cookies on this website.
    </p>

    <button id="accept-cookie" class="cookie-btn">
        Accept
    </button>
    <button id="cancel-cookie" class="cookie-btn">
        Cancel
    </button>
    <div>
        <a href="https://www.freeprivacypolicy.com/live/c758a6fd-548a-4f3d-b1ea-97a73d5da9ad">Privacy Policy</a>
    </div>
</div>

<!-- <script>
 const cookieContainer = document.querySelector(".cookie-container");
const cookieButton = document.querySelector(".cookie-btn");

cookieButton.addEventListener("click", () => {
  cookieContainer.classList.remove("active");
  localStorage.setItem("cookieBannerDisplayed", "true");
});

setTimeout(() => {
  if (!localStorage.getItem("cookieBannerDisplayed")) {
    cookieContainer.classList.add("active");
  }
}, 2000);

</script> -->
<script>
document.getElementById('accept-cookie').addEventListener('click', function() {
    setCookie('cookie-accepted', 'true', 365);
    document.querySelector('.cookie-container').style.display = 'none';
});

document.getElementById('cancel-cookie').addEventListener('click', function() {
    setCookie('cookie-accepted', 'false', 365);
    document.querySelector('.cookie-container').style.display = 'none';
});

function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    var expires = "expires=" + d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}
</script>