# PHP Object Injection Testing Plugin and Burp Extension

This project provides tools for testing PHP Object Injection vulnerabilities in WordPress.

## Components

*   **`index.php`**: A simple WordPress plugin that is intentionally vulnerable to PHP Object Injection. When the serialized object `O:20:"PHP_Object_Injection":0:{}` is passed to it, it will exit and display the message "PHP object injection has occurred.". This can be installed as a WordPress plugin.

*   **`wp_php_object_injection.rb`**: A Burp Suite extension written in JRuby that can be used to actively and passively scan for the vulnerability exposed by the companion WordPress plugin.
    *   **Passive Scan**: It looks for the string "PHP object injection has occurred." in HTTP responses.
    *   **Active Scan**: It injects the serialized payload `O:20:"PHP_Object_Injection":0:{}` into requests and checks for the "PHP object injection has occurred." message in the response.

*   **`popplugin.zip`**: A zip archive of the WordPress plugin for easy installation.

## Usage

### WordPress Plugin (`index.php`)

1.  Install the `popplugin.zip` or `index.php` file as a plugin in your WordPress test environment.
2.  Activate the "PHP Object Injection Test" plugin.
3.  The site is now ready to be tested for this specific PHP Object Injection vulnerability.

### Burp Suite Extension (`wp_php_object_injection.rb`)

1.  Set up JRuby in Burp Suite. You can download the JRuby Complete `.jar` file from [jruby.org](http.jruby.org/download).
2.  In Burp Suite, go to the "Extender" tab.
3.  Under "Ruby Environment", click "Select file..." and choose the JRuby Complete `.jar` file.
4.  Click "Add" in the "Burp Extensions" section.
5.  Choose "Ruby" as the "Extension type" and select the `wp_php_object_injection.rb` file.
6.  The extension will now be active and will passively scan traffic and allow you to run active scans.

## Origin

The concept and the WordPress plugin are from an article on [pluginvulnerabilities.com](https://www.pluginvulnerabilities.com/2017/07/24/wordpress-plugin-for-use-in-testing-for-php-object-injection/). The Burp extension code was adapted from a PortSwigger example.

---

You can run it on a VPS.

[![DigitalOcean Referral Badge](https://web-platforms.sfo2.cdn.digitaloceanspaces.com/WWW/Badge%203.svg)](https://www.digitalocean.com/?refcode=e22bbff5f6f1&utm_campaign=Referral_Invite&utm_medium=Referral_Program&utm_source=badge)

You get free $200 credit for 60 days if you sign up and add a payment method.