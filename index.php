<?php
/*
POC Server for FS3D

MIT License

Copyright (c) 2022 ReFlip

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
*/
// libs
require_once "config.php";
require_once "inc/3ds_base.php";
// init the 3DS client
init3DS(BASE_URI.'/');
// block web browsers other than FS3D from accessing the website
blockUnauthorizedClients();
//the ob_start() and ob_get_length() & ob_end_flush() are needed for the case you're using a nginx server, because nginx doesn't provide a Content-Length header by default.
//if you're using apache with a working Content-Length header, you can just remove these, since it will just be useless.
ob_start();
?>
<html>
    <body>
        <fix>
            <kwmenubar href="*title" text="Exit" text_sound="return_top">
        </fix>
        <h1>Hello, Flipnote Studio 3D!</h1>
        <p>If you see this, then the FS3D POC server is running like fine.</p>
    </body>
</html>
<?php
header('Content-Length: '.ob_get_length());
ob_end_flush();
?>