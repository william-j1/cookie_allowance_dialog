
class Cookie
{
    static get(cname) {
        let name = cname + "=";
        let decodedCookie = decodeURIComponent(document.cookie);
        let ca = decodedCookie.split(';');
        for(let i = 0; i <ca.length; i++) {
            let c = ca[i];
            while (c.charAt(0) == ' ')
                c = c.substring(1);
            if (c.indexOf(name) == 0)
                return c.substring(name.length, c.length);
        }
        return "";
    }
}

class CookieChecker
{
    static isAllowed() {
        return Cookie.get("cookiesAllowed") != "";
    }
    static hideDialog() {
        document.getElementById("cookie_banner").style.display = "none";
    }
    static agree() {
        let d = new Date();
        d.setTime(d.getTime() + (730 * (24 * 60 * 60) * 1000));
        let expiryString = "expires="+d.toUTCString();
        document.cookie = "cookiesAllowed=1;expires="+ expiryString +";path=/";
        CookieChecker.hideDialog();
    }
    static disagree() {
        document.cookie = "cookiesAllowed=1;expires=Thu, 01 Jan 1970 00:00:01 GMT;path=/";
        CookieChecker.hideDialog();
    }
    static showDialog() {
        document.getElementById("cookie_banner").style.display = "block";
    }
}
