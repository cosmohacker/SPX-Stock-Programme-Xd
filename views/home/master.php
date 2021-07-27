<?php include '../../contents/electron/html/menu.html'; ?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>cosmohacker - github spx stock program</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/styles/railscasts.min.css">
    <link rel="stylesheet" href="../../contents/home/scribbler-global.css">
    <link rel="stylesheet" href="../../contents/home/scribbler-landing.css">
    <link rel="stylesheet" href="../../contents/electron/css/titleBar.css">
    <link rel="stylesheet" href="../../contents/custom/home/css/scrollbar.css">
    <link rel="author" href="humans.txt">
</head>

<body>
    <nav style="padding-top: 60px;">
        <div class="logo"></div>
        <ul class="menu">
            <div class="menu__item toggle"><span></span></div>
            <li class="menu__item"><a href="https://github.com/cosmohacker/SPX-Stock-Programme-Xd" target="_blank" class="link link--dark"><i class="fa fa-book"></i> Documentation</a></li>
            <li class="menu__item"><a href="https://github.com/cosmohacker" target="_blank" class="link link--dark"><i class="fa fa-github"></i> Github</a></li>
            <li class="menu__item"><a href="../login/login.php" class="link link--dark"><i class="fa fa-user"></i> Login into SPX</a></li>
        </ul>
    </nav>
    <div class="hero">
        <h1 class="hero__title">Stock Programme Xd</h1>
        <p class="hero__description">Take your markdown notes in terminal</p>
    </div>
    <div class="hero__terminal">
        <pre>
        <!-- Place your demo code here -->
        <code class="shell-session demo">cosmohacker ~ $ </code>
      </pre>
    </div>
    <div class="wrapper">
        <div class="installation">
            <h3 class="section__title">Installation</h3>
            <div class="tab__container">
                <ul class="tab__menu">
                    <li class="tab active" data-tab="mac">mac</li>
                    <li class="tab" data-tab="linux">linux</li>
                    <li class="tab" data-tab="win">win</li>
                </ul>
                <pre class="nohighlight code">
            <code class="tab__pane active mac">$  brew install SPX</code>
            <code class="tab__pane linux">$  apt-get install SPX</code>
            <code class="tab__pane win">$  gem install SPX</code>
          </pre>
            </div>
        </div>
        <div class="feature">
            <div class="feature__item">
                <h3 class="section__title">Electron.Js</h3>
                <p>Standart form uygulamalarından tasarım, güvenlik, performans olarak daha güçlü bir framework o sebeple bu uygulamada Electron.JS kullandım ve gerçekten inanılmaz.</p>
            </div>
            <div class="feature__item">
                <h3 class="section__title">Hızlı & Kolay</h3>
                <p>Performans olarak diğer form uygulamalarının aksine tarayıcı prensibiyle çalıştığı için ram kullanımı daha az, performans yüksek. Yaptığım uygulamada minimalist bi bakış açısıyla yaklaşıp tasarımı sade tuttuğum için bir çaydanlığın bile kullanabileceğini düşünüyorum.</p>
            </div>
            <div class="feature__item">
                <h3 class="section__title">Güvenli</h3>
                <p>Gömülü Node.js, javascript sayesinde normal web sitelerinin de ötesinde bir koruma sağlamakta, Cross site scripting (XSS), Sql injection, bruteforce, etc. gibi saldırıların önüne geçmekte (imkansız değil). </p>
            </div>
            <div class="feature__item">
                <h3 class="section__title">Veritabanı</h3>
                <p>PhpMyAdmin Destekli veritabanı, localhost'da xammp kullanılmıştır.</p>
            </div>
            <div class="feature__item">
                <h3 class="section__title">Kullanılanlar</h3>
                <p>Electron.JS - Laravel (php), PhpMyAdmin, Html, CSS, JavaScript, Node.Js</p>
            </div>
            <div class="feature__item">
                <h3 class="section__title">Kullanım</h3>
                <p>Normal bir<span class="code code--inline">websitesine</span>girmiş gibi kullanılınabilir, desktop uygulamasıdır. Tamamen Responsive tasarımdır. </p>
            </div>
        </div>
        <div class="keybinding">
            <ul class="keybinding__detail">
                <h3 class="keybinding__title">Default Keybindings</h3>
                <li>Quit without saving <span class="keybinding__label">Ctrl+C</span></li>
                <li>Save <span class="keybinding__label">Cmd+S</span></li>
                <li>Save and Quit <span class="keybinding__label">Ctrl+D</span></li>
                <li>Undo <span class="keybinding__label">Cmd+Z</span></li>
                <li>Close Electron Tab <span class="keybinding__label">Ctrl+W</span></li>
            </ul>
            <ul class="keybinding__detail">
                <h3 class="keybinding__title">Markdown Keybindings</h3>
                <li><span class="keybinding__label">Ctrl+A</span> Insert Link Markdown</li>
                <li><span class="keybinding__label">Ctrl+I</span> Insert Image Markdown</li>
                <li><span class="keybinding__label">Ctrl+V</span> Insert YouTube Video</li>
                <li><span class="keybinding__label">Ctrl+T</span> Insert Table</li>
                <li><span class="keybinding__label">Ctrl+W</span> Close Electron Tab</li>
            </ul>
        </div>
        <div class="callout">
            <p>Read our documentation for advanced keybindings and customization</p>
            <a href="https://github.com/cosmohacker/SPX-Stock-Programme-Xd" target="_blank" class="button--primary" style="background: black;">Documentation</a>
        </div>
    </div>
    <div class="changelog">
        <div class="wrapper">
            <h3 class="section__title">Changelog</h3>
            <div class="changelog__item">
                <div class="changelog__meta">
                    <h4 class="changelog__title">v0.7</h4>
                    <small class="changelog__date">10/12/2017</small>
                </div>
                <div class="changelog__detail">
                    <ul>
                        <li>Improving the writing workflow with better key bindings</li>
                        <li>Design updates</li>
                        <li>SSL Verification for web hooks</li>
                        <li>Render Emoji</li>
                    </ul>
                </div>
            </div>
            <div class="changelog__item">
                <div class="changelog__meta">
                    <h4 class="changelog__title">v0.6</h4>
                    <small class="changelog__date">7/30/2017</small>
                </div>
                <div class="changelog__detail">
                    <ul>
                        <li>Adding Unicode support</li>
                        <li>Basic text highlighting</li>
                        <li>Fresh Design</li>
                    </ul>
                </div>
            </div>
            <div class="changelog__item">
                <div class="changelog__meta">
                    <h4 class="changelog__title">v0.5</h4>
                    <small class="changelog__date">5/10/2017</small>
                </div>
                <div class="changelog__detail">
                    <ul>
                        <li>Save default md file in new folders</li>
                        <li>Ability to quick search on existing notes</li>
                    </ul>
                </div>
            </div>
            <div class="changelog__callout">
                <a href="https://github.com/cosmohacker/SPX-Stock-Programme-Xd" target="_blank" class="button--secondary">Checkout Full Log</a>
            </div>
        </div>
    </div>
    <footer style="background: black;" class="footer">SPX bir okul projesidir. MIT License <a href="https://github.com/cosmohacker/SPX-Stock-Programme-Xd" target="_blank" class="link link--light">SPX - github/cosmohacker</a>.</footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
    <script>
        hljs.initHighlightingOnLoad();
    </script>
    <script src="../../contents/home/scribbler.js"></script>
    <script src="../../contents/electron/js/windowScript.js"></script>
</body>

</html>