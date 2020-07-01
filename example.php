<?php 
    header("content-security-policy: default-src 'self' *.algolianet.com *.algolia.net *.zavasrv.com *.zavamed.com *.segment.io *.segment.com *.nr-data.net *.hotjar.com; connect-src 'self' *.algolianet.com *.algolia.net *.zavasrv.com *.zavamed.com *.segment.io *.segment.com *.nr-data.net logx.optimizely.com *.optimizely.com *.hotjar.com *.hotjar.io wss://*.hotjar.com *.pstmn.io; script-src 'self' 'unsafe-inline' 'unsafe-eval' *.algolianet.com *.algolia.net *.zavasrv.com *.zavamed.com *.google-analytics.com *.googleadservices.com *.googletagmanager.com *.googleapis.com connect.facebook.net *.trustpilot.com *.dred.com *.websecurity.norton.com *.segment.com *.optimizely.com optimizely.s3.amazonaws.com www.cqc.org.uk *.newrelic.com *.nr-data.net *.hotjar.com *.qualaroo.com *.bing.com *.amazonaws.com *.surveymonkey.com *.youtube-nocookie.com *.youtube.com *.ytimg.com browser-update.org assets.customer.io; style-src 'self' 'unsafe-inline' *.zavasrv.com *.zavamed.com *.amazonaws.com www.cqc.org.uk fonts.googleapis.com; img-src 'self' data: *.zavasrv.com *.zavamed.com *.google-analytics.com *.hotjar.com maps.gstatic.com maps.googleapis.com res.cloudinary.com *.dred.com *.websecurity.norton.com *.scdn5.secure.raxcdn.com a74971132.cdn-pci.optimizely.com cdn.optimizely.com www.cqc.org.uk *.amazonaws.com bat.bing.com *.doubleclick.net www.google.com www.google.co.uk *.surveymonkey.com browser-update.org www.facebook.com; font-src 'self' data: *.zavasrv.com *.zavamed.com *.cloudfront.net *.hotjar.com fonts.gstatic.com; frame-src 'self' *.zavasrv.com *.zavamed.com *.doubleclick.net *.youtube-nocookie.com vars.hotjar.com *.surveymonkey.com a74971132.cdn-pci.optimizely.com app.optimizely.com a74971132.cdn.optimizely.com *.trustpilot.com *.qualaroo.com www.facebook.com; report-uri /uk/csp-report");
    header("x-content-type-options: nosniff");
    header("x-frame-options: SAMEORIGIN");
    header("x-xss-protection: 1; mode=block");

    $css = @file_get_contents('https://www.zavamed.com/uk/assets/dist/header-slim.' . time() . '.css');
    $header = preg_replace('/<link rel="stylesheet" href="https:\/\/www.zavamed.com\/uk\/assets\/dist\/header-slim(.*)css">/', "", @file_get_contents('https://www.zavamed.com/uk/header.html'));
    $footer = preg_replace('/<link rel="stylesheet" href="https:\/\/www.zavamed.com\/uk\/assets\/dist\/header-slim(.*)css">/', "", @file_get_contents('https://www.zavamed.com/uk/footer.html'));
?>
<html>
    <head>
        <?php
            include('campaign-xxxx/head.html');
        ?>
        <style>
            <?php echo $css; ?>
        </style>
        <script type="text/javascript" async="" src="https://cdn.segment.com/analytics.js/v1/WUaKl38Es8IKbTeB5MDwux6E2ZeKuLLz/analytics.min.js"></script>
    </head>
    <body>
        <?php
            

            echo $header;
            include('campaign-xxxx/body.html');
            echo $footer;
        ?>
    </body>
</html>
